import React from 'react'

const Card = ({ sneaker }) => {
    return (
        <>
            <h1>{sneaker.brand}</h1>
            <div className="card w-96 bg-base-100 shadow-xl image-full">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div className="card-body">
                    <h2 className="card-title">{sneaker.model}</h2>
                    <p>{sneaker.type}</p>
                    <p>{sneaker.price}</p>
                    <div className="card-actions justify-end">
                        <button className="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        </>
    )
}

export default Card