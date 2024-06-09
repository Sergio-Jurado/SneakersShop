import { useState, useEffect } from "react";
import { BrowserRouter as Router, Routes, Route, Navigate } from "react-router-dom";
import LoginPage from "./Pages/register/LoginPage";
import LandingPage from "./Pages/LandingPage";

const App = () => {
  const [isLoggedIn, setIsLoggedIn] = useState(false);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    // Realiza una petición al backend para verificar si hay un usuario autenticado
    const checkAuth = async () => {
      try {
        // Aquí debes hacer la petición al backend para verificar la autenticación
        // Por ejemplo, una solicitud fetch a tu endpoint de autenticación
        const response = await fetch("http://127.0.0.1:8000/check-auth", {
          method: "GET",
          headers: {
            // Aquí puedes enviar el token de autenticación si lo necesitas
            "Authorization": "Bearer " + localStorage.getItem("token")
          }
        });

        if (response.ok) {
          // Si la petición al backend es exitosa, el usuario está autenticado
          setIsLoggedIn(true);
        } else {
          // Si la petición al backend falla o el usuario no está autenticado, isLoggedIn permanece en false
        }
      } catch (error) {
        console.error("Error al verificar la autenticación:", error);
      } finally {
        // Independientemente del resultado de la verificación, establecemos loading en falso para mostrar la aplicación
        setLoading(false);
      }
    };

    checkAuth();
  }, []);

  // Muestra un mensaje de carga mientras se verifica la autenticación
  if (loading) {
    return <div>Cargando...</div>;
  }

  // Renderiza el enrutador cuando se haya completado la verificación
  return (
    <Router>
      <Routes>
        <Route path="/login" element={<LoginPage />} />
        <Route path="/landing" element={<LandingPage />} />
        <Route path="/" element={isLoggedIn ? <Navigate to="/landing" /> : <Navigate to="/login" />} />
      </Routes>
    </Router>
  );
};

export default App;
