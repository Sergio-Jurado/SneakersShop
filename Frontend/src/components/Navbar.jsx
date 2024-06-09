import { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';

const Navbar = () => {
    const [isLoggedIn, setIsLoggedIn] = useState(false);
    const [userProfile, setUserProfile] = useState(null);

    useEffect(() => {
        // Verifica si el usuario está autenticado al cargar el componente
        const token = localStorage.getItem('token');
        if (token) {
            fetch("http://127.0.0.1:8000/api/profile", {
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Error fetching user profile.');
                    }
                    return response.json();
                })
                .then(data => {
                    setIsLoggedIn(true);
                    setUserProfile(data);
                })
                .catch(error => {
                    console.error(error);
                    setIsLoggedIn(false);
                });
        }
    }, []);

    return (
        <>
            <div className="navbar bg-base-300">
                <div className="flex-1">
                    <a className="btn btn-ghost text-xl">SneakersShop</a>
                    <ul className='menu menu-horizontal px-1'>
                        <li><a href=""> Hombre</a></li>
                        <li><a href=""> Mujer</a></li>
                    </ul>
                </div>

                <div className="flex-none">

                    {isLoggedIn ? (
                        <div className="dropdown dropdown-end">
                            <div tabIndex={0} role="button" className="btn btn-ghost btn-circle avatar">
                                <div className="w-10 rounded-full">
                                    <img alt="Profile" src={userProfile?.avatar || "default-avatar-url"} />
                                </div>
                            </div>
                            <ul tabIndex={0} className="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a>Compras</a></li>
                                <li><a>Logout</a></li>
                            </ul>
                        </div>
                    ) : (
                        <Link to="/login" className="btn btn-primary">Iniciar Sesión</Link>
                    )}

                </div>
            </div>
        </>
    )
}

export default Navbar