import useLogout from "../utils/useLogout";
import useUserInfo from "../utils/useUserInfo";

const Navbar = () => {
    const { userInfo, loading, error } = useUserInfo(); // Obtiene la información del usuario
    const logout = useLogout(); // Función para realizar logout

    if (loading) return <div>Loading...</div>; // Muestra un mensaje de carga mientras se obtiene la información del usuario
    if (error) return <div>Error: {error}</div>; // Muestra un mensaje de error si ocurrió algún error al obtener la información del usuario
    return (
        <div className="navbar bg-green-700 rounded-xl p-2 text-white">
            <div className="flex-1 ml-3">
                <h1 className="text-xl">SneakerShop</h1>
            </div>
            <div className="flex-none">
                <ul className="menu menu-horizontal px-1">
                    <li><a>Perfil</a></li>
                    {/* Verifica si el usuario tiene el rol de administrador */}
                    {userInfo.rol === 'admin' && (
                        <li><a href="/crearZapatilla">Crear Zapatilla</a></li>
                    )}
                    <li><a onClick={logout}>Logout</a></li> {/* Botón para realizar logout */}
                </ul>
            </div>
        </div>
    );
};

export default Navbar;

