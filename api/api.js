const express = require('express');
const fetch = require('node-fetch');
const bcrypt = require('bcrypt');
const mysql = require('mysql');
const { v4: uuidv4 } = require('uuid');

const getRouter = () => {
    const router = express.Router();

    const dbConfig = {
        host: 'localhost',
        user: 'root',
        password: '',
        database: 'SneakerShop'
    };

    // - ENDPOINTS DE USUARIO

    router.get('/users', (req, res) => {
        const connection = mysql.createConnection(dbConfig);
        connection.query('SELECT * FROM usuarios', (error, results, fields) => {
            connection.end(); // Cerrar la conexión después de obtener los resultados
            if (error) {
                console.error('Error al obtener todos los usuarios:', error);
                res.status(500).json({ error: 'Error al obtener todos los usuarios' });
            } else {
                res.status(200).json(results);
            }
        });
    });

    // Crea un nuevo usuario
    router.post('/register', async (req, res) => {
        const { username, password, name, last_name } = req.body;

        // Verificar que todos los campos requeridos estén presentes
        if (!username || !password || !name || !last_name) {
            return res.status(400).json({ error: 'Faltan campos obligatorios' });
        }

        try {
            // Encriptar la contraseña
            const hashedPassword = await bcrypt.hash(password, 10); // 10 es el coste de la encriptación

            // Generar un ID único para el usuario
            const userId = uuidv4();

            const connection = mysql.createConnection(dbConfig);
            const sql = 'INSERT INTO user (id, username, password, name, last_name, rol) VALUES (?, ?, ?, ?, ?, ?)';
            connection.query(sql, [userId, username, hashedPassword, name, last_name, 'usuario'], (error, results, fields) => {
                connection.end(); // Cerrar la conexión después de insertar el usuario
                if (error) {
                    console.error('Error al crear un nuevo usuario:', error);
                    res.status(500).json({ error: 'Error al crear un nuevo usuario' });
                } else {
                    res.status(201).json({ id: userId });
                }
            });
        } catch (error) {
            console.error('Error al crear un nuevo usuario:', error);
            res.status(500).json({ error: 'Error al crear un nuevo usuario' });
        }
    });

    // Obtiene la información del usuario que está registrado
    router.get('/user/:id', async (req, res) => {
        const userId = req.params.id; // Obtiene el ID del usuario de la URL
        console.log(userId);
        try {
            const connection = mysql.createConnection(dbConfig); // Crea una nueva conexión a la base de datos
            connection.connect(); // Conecta a la base de datos
            connection.query('SELECT * FROM user WHERE id = ?', [userId], (error, results, fields) => {
                connection.end(); // Cierra la conexión después de obtener los resultados

                if (error) { // Maneja errores de consulta
                    console.error('Error al obtener la información del usuario:', error);
                    return res.status(500).json({ error: 'Error interno del servidor' });
                }

                if (!results || results.length === 0) { // Verifica si no se encontraron resultados
                    return res.status(404).json({ error: 'Usuario no encontrado' });
                }

                res.json(results[0]);
            });
        } catch (error) {
            console.error('Error al establecer la conexión a la base de datos:', error);
            res.status(500).json({ error: 'Error interno del servidor' });
        }
    });

    // Hace el login del usuario
    router.post('/login', async (req, res) => {
        const { username, password } = req.body;

        // Verificar que se proporcionen el nombre de usuario y la contraseña
        if (!username || !password) {
            return res.status(400).json({ error: 'Faltan el nombre de usuario y/o la contraseña' });
        }

        try {
            // Crear la conexión a la base de datos
            const connection = mysql.createConnection(dbConfig);

            // Consultar el usuario por nombre de usuario
            const sql = 'SELECT * FROM user WHERE username = ?';
            connection.query(sql, [username], async (error, results, fields) => {
                connection.end(); // Cerrar la conexión después de obtener los resultados

                if (error) {
                    console.error('Error al buscar el usuario:', error);
                    return res.status(500).json({ error: 'Error al buscar el usuario' });
                }

                // Verificar si se encontró un usuario con el nombre de usuario dado
                if (results.length === 0) {
                    return res.status(404).json({ error: 'Usuario no encontrado' });
                }

                // Comparar la contraseña almacenada con la contraseña proporcionada
                const user = results[0];

                const passwordMatch = await bcrypt.compare(password, user.password);

                if (passwordMatch) {
                    // Las contraseñas coinciden, usuario autenticado con éxito
                    const id = user.id;
                    res.status(200).json({ token: id });
                    console.log("Sirve");
                } else {
                    // Las contraseñas no coinciden
                    res.status(401).json({ error: 'Nombre de usuario o contraseña incorrectos' });
                }
            });
        } catch (error) {
            console.error('Error al iniciar sesión:', error);
            res.status(500).json({ error: 'Error al iniciar sesión' });
        }
    });

    // ENDOPIST DE SNEAKERS


    // ENDPOINST DE TICKETS

    return router;
}

const router = getRouter();
module.exports = router;