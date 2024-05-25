import Footer from "../components/Footer"


const LoginPage = () => {
    return (
        <>
            <div className="min-h-screen flex items-center justify-center bg-gray-100">
                <div className="max-w-md w-full bg-white p-8 rounded-xl shadow-lg">
                    <h2 className="text-2xl font-bold mb-6 text-center">Iniciar Sesión</h2>
                    <form>
                        <div className="mb-4">
                            <label className="block text-gray-700">Correo Electrónico</label>
                            <input
                                type="email"
                                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                                placeholder="correo@ejemplo.com"
                            />
                        </div>
                        <div className="mb-6">
                            <label className="block text-gray-700">Contraseña</label>
                            <input
                                type="password"
                                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                                placeholder="********"
                            />
                        </div>
                        <button
                            type="submit"
                            className="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300"
                        >
                            Iniciar Sesión
                        </button>
                    </form>
                    <p className="mt-4 text-center">
                        ¿No tienes una cuenta? <a href="#" className="text-blue-600">Regístrate</a>
                    </p>
                </div>
            </div>
            <Footer />
        </>

    )
}

export default LoginPage