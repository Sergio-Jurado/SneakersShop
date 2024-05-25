const Navbar = () => {
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
                    <div className="dropdown dropdown-end">
                        <div tabIndex={0} role="button" className="btn btn-ghost btn-circle avatar">
                            <div className="w-10 rounded-full">
                                <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                            </div>
                        </div>
                        <ul tabIndex={0} className="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                            <li>
                                <a>Perfil</a>
                            </li>
                            <li><a>Ajustes</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </>
    )
}

export default Navbar