const express = require('express');
const SQLRouter = require('./api');
const path = require('path');
const cors = require('cors');
const expressUploader = require('express-fileupload');

const app = express();
const port = 3000;

app.use(expressUploader());
app.use(express.json());
app.use(cors());
require('dotenv').config();

app.get('/', (req, res) => {
    res.send('Hello world');
});

app.use('/api', SQLRouter);

// Iniciar el servidor
app.listen(port, () => {
    console.log(`Servidor escuchando en el puerto ${port}`);
});
