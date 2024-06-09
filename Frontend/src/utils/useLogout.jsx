import { useNavigate } from 'react-router-dom';

const useLogout = () => {
    const navigate = useNavigate();

    const logout = () => {
        localStorage.clear(); // Limpia todo el localStorage. Puedes usar removeItem('authToken') si solo deseas eliminar el token de autenticación.
        navigate('/login'); // Redirige a la página de login
    };

    return logout;
};

export default useLogout;
