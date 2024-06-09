import { useNavigate } from "react-router-dom";


const Card = ({ sneaker }) => {
    const navigate = useNavigate();

    const handleBuyClick = () => {
        navigate(`/comprarZapatilla/${sneaker.id}`);
    };

    return (
        <div className="card bg-green-200 shadow-xl rounded-lg overflow-hidden text-black">
            <div className="card-body">
                <h2 className="card-title">Marca: {sneaker.brand}</h2>
                <p>Model: {sneaker.model}</p>
                <p>Tipo: {sneaker.type}</p>
                <p>Precio: {sneaker.price} euros</p>
                <div className="card-actions justify-end">
                    <button className="btn bg-green-600 text-white" onClick={handleBuyClick}>Comprar ahora</button>
                </div>
            </div>
        </div>
    );
};

export default Card;