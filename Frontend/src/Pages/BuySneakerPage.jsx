import { useState } from 'react';
import { useNavigate, useParams } from 'react-router-dom';

const BuySneakerPage = () => {
    const { id } = useParams();
    console.log(id);
    const [streetandnumber, setStreetAndNumber] = useState('');
    const [flooranddoor, setFloorAndDoor] = useState('');
    const [city, setCity] = useState('');
    const [postalcode, setPostalCode] = useState('');
    const [error, setError] = useState('');

    const navigate = useNavigate();

    const handleBuy = async () => {
        try {
            const response = await fetch(`http://localhost:3000/api/sneaker/buy/${id}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    streetandnumber,
                    flooranddoor,
                    city,
                    postalcode,
                }),
            });

            const data = await response.json();
            if (response.ok) {
                // alert('Compra realizada con éxito');
                navigate("/");

            } else {
                alert(`Error: ${data.error}`);
            }
        } catch (error) {
            console.error('Error al realizar la compra:', error);
        }
    };

    return (
        <>
            <div className="min-h-screen flex items-center justify-center bg-gray-100">
                <div className="max-w-md w-full bg-white p-8 rounded-xl shadow-lg">
                    <h2 className="text-2xl font-bold mb-6 text-center">Comprar Zapatilla</h2>
                    <form onSubmit={handleBuy}>
                        <div className="mb-4">
                            <label htmlFor="name" className="block text-gray-700">Calle y Número</label>
                            <input
                                type="text"
                                id="streetAndNumber"
                                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                                value={streetandnumber}
                                onChange={(e) => setStreetAndNumber(e.target.value)}
                                required
                            />
                        </div>
                        <div className="mb-4">
                            <label htmlFor="brand" className="block text-gray-700">Piso y puerta</label>
                            <input
                                type="text"
                                id="floorAndDoor"
                                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                                value={flooranddoor}
                                onChange={(e) => setFloorAndDoor(e.target.value)}
                                required
                            />
                        </div>
                        <div className="mb-4">
                            <label htmlFor="brand" className="block text-gray-700">Ciudad</label>
                            <input
                                type="text"
                                id="city"
                                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                                value={city}
                                onChange={(e) => setCity(e.target.value)}
                                required
                            />
                        </div>
                        <div className="mb-4">
                            <label htmlFor="price" className="block text-gray-700">Código postal</label>
                            <input
                                type="text"
                                id="postalCode"
                                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                                value={postalcode}
                                onChange={(e) => setPostalCode(e.target.value)}
                                required
                            />
                        </div>
                        {error && <p className="text-red-500 text-center mb-4">{error}</p>}
                        <button
                            type="submit"
                            className="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition duration-300"
                        >
                            Comprar Zapatilla
                        </button>
                    </form>
                    <p className="mt-4 text-center">
                        <a href="/" className="text-green-600">Volver al inicio</a>
                    </p>
                </div>
            </div>
        </>
    );
};

export default BuySneakerPage;