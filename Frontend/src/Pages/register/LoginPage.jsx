import { useState } from "react";
// import Footer from "../components/Footer";

const LoginPage = () => {
    const [username, setUsername] = useState("");
    const [password, setPassword] = useState("");
    const [error, setError] = useState("");

    const handleSubmit = async (e) => {
        e.preventDefault();
        setError("");

        try {
            const response = await fetch("http://127.0.0.1:8000/login", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ username, password })
            });

            if (!response.ok) {
                throw new Error("Correo electrónico o contraseña incorrectos.");
            }

            const data = await response.json();
            localStorage.setItem("token", data.token);

            // Redirige a la página principal o a la que desees
            window.location.href = "/";
        } catch (error) {
            setError(error.message);
        }
    };

    return (
        <>
            <div className="min-h-screen flex items-center justify-center bg-gray-100">
                <div className="max-w-md w-full bg-white p-8 rounded-xl shadow-lg">
                    <h2 className="text-2xl font-bold mb-6 text-center">Iniciar Sesión</h2>
                    <form onSubmit={handleSubmit}>
                        <div className="mb-4">
                            <label className="block text-gray-700">Correo Electrónico</label>
                            <input
                                type="text"
                                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                                placeholder="correo@ejemplo.com"
                                value={username}
                                onChange={(e) => setUsername(e.target.value)}
                            />
                        </div>
                        <div className="mb-6">
                            <label className="block text-gray-700">Contraseña</label>
                            <input
                                type="password"
                                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                                placeholder="********"
                                value={password}
                                onChange={(e) => setPassword(e.target.value)}
                            />
                        </div>
                        {error && <p className="text-red-500 text-center mb-4">{error}</p>}
                        <button
                            type="submit"
                            className="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300"
                        >
                            Iniciar Sesión
                        </button>
                    </form>
                    <p className="mt-4 text-center">
                        ¿No tienes una cuenta? <a href="#" className="text-blue-600">Regístrate</a>
                    </p>
                </div>
            </div>
            {/* <Footer /> */}
        </>
    );
};

export default LoginPage;