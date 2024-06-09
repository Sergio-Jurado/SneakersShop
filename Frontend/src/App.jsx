
import { BrowserRouter as Router, Routes, Route, Navigate } from 'react-router-dom';
import LoginPage from './Pages/register/LoginPage';
import ProtectedRoute from './utils/ProtectedRoute';
import SignInPage from './Pages/register/SignInPage';
import SneakersPage from './Pages/SneakersPage';
import Navbar from './components/Navbar';

const App = () => {
  return (
    <Router>
      <Navbar />
      <Routes>
        <Route path="/login" element={<LoginPage />} />
        <Route path="/" element={
          <ProtectedRoute>
            <SneakersPage />
          </ProtectedRoute>
        } />
        <Route path="/register" element={<SignInPage />} />
        <Route path="*" element={<Navigate to="/" />} /> {/* Redirecciona a la página principal si no coincide con ninguna ruta */}
      </Routes>
    </Router>
  );
};

export default App;

