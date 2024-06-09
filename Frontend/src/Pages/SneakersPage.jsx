import { useEffect, useState } from "react";
import Footer from "../components/Footer"
import Card from "../components/Card";


const SneakersPage = () => {
  const [sneakers, setShoes] = useState([]);

  useEffect(() => {
    // Simulación de una llamada a una API para obtener la lista de zapatillas
    fetch('http://tu-dominio.com/api/shoes')
      .then(response => response.json())
      .then(data => setShoes(data))
      .catch(error => console.error('Error fetching shoes:', error));
  }, []);
  return (
    <>
      <div className="min-h-screen bg-gray-100 flex flex-wrap justify-center gap-6 p-6">
        {sneakers.map(sneaker => (
          <Card key={sneaker.id} shoe={sneaker} />
        ))}
      </div>
      <Footer />
    </>
  )
}

export default SneakersPage