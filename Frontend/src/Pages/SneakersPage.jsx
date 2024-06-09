import { useState, useEffect } from 'react';
import Navbar from "../components/Navbar";
import Card from "../components/Card";

const SneakersPage = () => {
  const [sneakers, setSneakers] = useState([]);

  useEffect(() => {
    const fetchSneakers = async () => {
      try {
        const response = await fetch('http://localhost:3000/api/sneakers');
        if (!response.ok) {
          throw new Error('Error al obtener sneakers');
        }
        const data = await response.json();
        setSneakers(data);
      } catch (error) {
        console.error('Error:', error);
      }
    };

    fetchSneakers();
  }, []);

  return (
    <>
      <Navbar />
      <div className='m-5'>
        <div className="grid grid-cols-3 gap-4">
          {sneakers.map(sneaker => (
            <Card key={sneaker.id} sneaker={sneaker} />
          ))}
        </div>
      </div>

    </>
  );
};

export default SneakersPage;
