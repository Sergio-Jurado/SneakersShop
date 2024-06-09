import useLogout from "../utils/useLogout";
import useUserInfo from "../utils/useUserInfo";



const Navbar = () => {
    const { userInfo, loading, error } = useUserInfo();
    const logout = useLogout();

    if (loading) return <div>Loading...</div>;
    if (error) return <div>Error: {error}</div>;

    return (
        <nav>
            <div>
                <span>Welcome, {userInfo ? userInfo.username : 'Guest'}!</span>
            </div>
            <button onClick={logout}>Logout</button>
        </nav>
    );
};

export default Navbar;
