// script.js

// URL de la API (ejemplo genérico)
const API_URL = 'https://api.ejemplo.com/data'; // Reemplazar con la URL de tu API

// Clave API
const API_KEY = 'TU_CLAVE_API'; // Reemplazar con tu clave API

// Elemento del DOM donde mostraremos los datos
const dataContainer = document.getElementById('dataContainer');

// Función para obtener datos de la API
async function fetchData(url) {
    try {
        const response = await fetch(url, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${API_KEY}` // Ajusta según la API (puede ser 'x-api-key' u otro)
            }
        });
        const data = await response.json();
        displayData(data);
    } catch (error) {
        console.error('Error fetching data:', error);
    }
}

// Función para mostrar los datos en el DOM
function displayData(data) {
    dataContainer.innerHTML = ''; // Limpiar contenedor

    data.forEach(item => {
        // Crear elementos de la tarjeta
        const card = document.createElement('div');
        card.classList.add('card');

        const title = document.createElement('h3');
        title.textContent = item.title; // Ajustar según la estructura de la respuesta de tu API

        const body = document.createElement('p');
        body.textContent = item.body; // Ajustar según la estructura de la respuesta de tu API

        // Añadir elementos a la tarjeta
        card.appendChild(title);
        card.appendChild(body);

        // Añadir tarjeta al contenedor
        dataContainer.appendChild(card);
    });
}

// Llamar a la función fetchData con la URL de la API
fetchData(API_URL);
