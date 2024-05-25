import Footer from '../components/Footer'
import NavBar from '../components/Navbar'

const LandingPage = () => {
    return (
        <>
            <NavBar />
            <div className="flex w-full m-4">
                <div className="grid h-96 flex-grow card bg-base-300 rounded-box place-items-center">
                    <a href="/">Zapatillas Hombre</a>
                </div>
                <div className="divider divider-horizontal">O</div>
                <div className="grid h-96 flex-grow card bg-base-300 rounded-box place-items-center">
                    <a href="/">Zapatillas Mujer</a>
                </div>
            </div>
            <Footer />
        </>

    )
}

export default LandingPage