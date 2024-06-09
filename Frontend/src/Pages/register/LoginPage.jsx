import { useState } from "react";
import { useNavigate } from 'react-router-dom';

const LoginPage = () => {
    const [username, setUsername] = useState("");
    const [password, setPassword] = useState("");
    const [error, setError] = useState("");
    const navigate = useNavigate();

    const handleSubmit = async (e) => {
        e.preventDefault();
        setError("");

        // Almacenar los valores actuales de username y password en variables locales
        const currentUsername = username;
        const currentPassword = password;

        try {
            const response = await fetch("http://127.0.0.1:8000/login", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                credentials: 'include',
                body: JSON.stringify({ username: currentUsername, password: currentPassword }) // Usar las variables locales
            });

            if (!response.ok) {
                console.log(response);
                const errorData = await response.json();
                throw new Error(errorData.message || "Nombre de usuario o contraseña incorrectos.");
            }
            console.log(currentUsername, currentPassword, response); // Usar las variables locales
            const data = await response.json();
            console.log(data);
            localStorage.setItem("token", data.username);

            // Redirige a la página principal o a la que desees
            navigate("/");
        } catch (error) {

            console.log(currentUsername, currentPassword);
            console.log(error);
            setError(error.message);
        }
    };

    return (
        <div className="min-h-screen flex items-center justify-center bg-gray-100">
            <div className="max-w-md w-full bg-white p-8 rounded-xl shadow-lg">
                <h2 className="text-2xl font-bold mb-6 text-center">Iniciar Sesión</h2>
                <form onSubmit={handleSubmit}>
                    <div className="mb-4">
                        <label className="block text-gray-700">Nombre de usuario</label>
                        <input
                            type="text"
                            name="username"
                            className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                            placeholder="Nombre de usuario"
                            value={username}
                            onChange={(e) => setUsername(e.target.value)}
                        />
                    </div>
                    <div className="mb-6">
                        <label className="block text-gray-700">Contraseña</label>
                        <input
                            type="password"
                            name="password"
                            className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                            placeholder="********"
                            value={password}
                            onChange={(e) => setPassword(e.target.value)}
                        />
                    </div>
                    {error && <p className="text-red-500 text-center mb-4">{error}</p>}
                    <button
                        type="submit"
                        className="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition duration-300"
                    >
                        Iniciar Sesión
                    </button>
                </form>
                <p className="mt-4 text-center">
                    ¿No tienes una cuenta? <a href="/register" className="text-blue-600">Regístrate</a>
                </p>
            </div>
        </div>
    );
};

export default LoginPage;