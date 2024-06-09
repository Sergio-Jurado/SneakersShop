import { Navigate } from 'react-router-dom';

const ProtectedRoute = ({ children }) => {
    const isAuthenticated = !!localStorage.getItem('token'); // Cambia 'authToken' por la clave que estás usando en localStorage

    return isAuthenticated ? children : <Navigate to="/login" />;
};

export default ProtectedRoute;
