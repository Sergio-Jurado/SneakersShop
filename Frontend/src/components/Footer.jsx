const Footer = () => {
    return (
        <footer className="footer footer-center p-10 bg-base-200 text-base-content rounded-xl bg-green-600 text-white">
            <nav className="grid grid-flow-col gap-4">
                <a className="link link-hover" href="https://github.com/Sergio-Jurado/">GitHub</a>
                <a className="link link-hover" href="https://www.linkedin.com/in/sergio-jurado-trillo-6b7a1a231/">LinkedIn</a>
            </nav>
            <aside>
                <p>Copyright © 2024 - All right reserved by ACME Industries Ltd</p>
            </aside>
        </footer>
    )
}

export default Footer