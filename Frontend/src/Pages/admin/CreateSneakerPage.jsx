import { useState } from 'react';
import { useNavigate } from 'react-router-dom';

const CreateSneakerPage = () => {
    const [brand, setBrand] = useState('');
    const [model, setModel] = useState('');
    const [type, setType] = useState('');
    const [price, setPrice] = useState('');
    const [size, setSize] = useState('');

    const [error, setError] = useState('');
    const navigate = useNavigate();

    const handlePriceChange = e => {
        const newPrice = parseInt(e.target.value);
        if (newPrice < 50) {
            // Si el precio es menor que 50, establece el precio en 50
            setPrice(50);
        } else {
            setPrice(newPrice);
        }
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        setError('');

        const sneakerData = {
            brand,
            model,
            type,
            price,
            size
        };

        try {
            const response = await fetch('http://localhost:3000/api/sneaker/new', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(sneakerData)
            });

            if (!response.ok) {
                const errorData = await response.json();
                throw new Error(errorData.message || 'Error creating sneaker.');
            }

            const data = await response.json();
            console.log(data);
            navigate('/'); // Redirigir a la página principal o a la que desees
        } catch (error) {
            console.error('Error:', error);
            setError(error.message);
        }
    };

    return (
        <>
            <div className="min-h-screen flex items-center justify-center bg-gray-100">
                <div className="max-w-md w-full bg-white p-8 rounded-xl shadow-lg">
                    <h2 className="text-2xl font-bold mb-6 text-center">Agregar Zapatilla</h2>
                    <form onSubmit={handleSubmit}>
                        <div className="mb-4">
                            <label htmlFor="name" className="block text-gray-700">Marca</label>
                            <input
                                type="text"
                                id="name"
                                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                                value={brand}
                                onChange={(e) => setBrand(e.target.value)}
                                required
                            />
                        </div>
                        <div className="mb-4">
                            <label htmlFor="brand" className="block text-gray-700">Modelo</label>
                            <input
                                type="text"
                                id="brand"
                                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                                value={model}
                                onChange={(e) => setModel(e.target.value)}
                                required
                            />
                        </div>
                        <div className="mb-4">
                            <label htmlFor="brand" className="block text-gray-700">tipo</label>
                            <input
                                type="text"
                                id="type"
                                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                                value={type}
                                onChange={(e) => setType(e.target.value)}
                                required
                            />
                        </div>
                        <div className="mb-4">
                            <label htmlFor="price" className="block text-gray-700">Precio</label>
                            <input
                                type="number"
                                id="price"
                                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                                value={price}
                                onChange={handlePriceChange}
                                required
                            />
                        </div>
                        <div className="mb-6">
                            <label htmlFor="size" className="block text-gray-700">Tamaño</label>
                            <input
                                type="number"
                                id="size"
                                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                                value={size}
                                onChange={(e) => setSize(e.target.value)}
                                required
                            />
                        </div>
                        {error && <p className="text-red-500 text-center mb-4">{error}</p>}
                        <button
                            type="submit"
                            className="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition duration-300"
                        >
                            Agregar Zapatilla
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

export default CreateSneakerPage;
