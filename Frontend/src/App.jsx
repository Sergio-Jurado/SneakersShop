
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import LoginPage from './Pages/register/LoginPage';
import ProtectedRoute from './utils/ProtectedRoute';
import SignInPage from './Pages/register/SignInPage';
import SneakersPage from './Pages/SneakersPage';
import Footer from './components/Footer';
import CreateSneakerPage from "./Pages/admin/CreateSneakerPage";
import BuySneakerPage from "./Pages/BuySneakerPage";

const App = () => {
  return (
    <Router>
      <Routes>
        <Route path="/login" element={<LoginPage />} />
        <Route path="/" element={
          <ProtectedRoute>
            <SneakersPage />
          </ProtectedRoute>
        } />
        <Route path="/crearZapatilla" element={
          <ProtectedRoute>
            <CreateSneakerPage />
          </ProtectedRoute>
        } />
        <Route path="/comprarZapatilla/:id" element={
          <ProtectedRoute>
            <BuySneakerPage />
          </ProtectedRoute>
        } />
        <Route path="/register" element={<SignInPage />} />
      </Routes>
      <Footer />
    </Router>
  );
};

export default App;

