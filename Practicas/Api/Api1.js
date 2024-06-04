// script.js

// URL de la API (ejemplo genérico)
const API_URL = 'https://jsonplaceholder.typicode.com/posts'; // Puedes reemplazar con la URL de tu API

// Elemento del DOM donde mostraremos los datos
const dataContainer = document.getElementById('dataContainer');

// Función para obtener datos de la API
async function fetchData(url) {
    try {
        const response = await fetch(url);
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
        title.textContent = item.title; // Asumimos que el objeto tiene una propiedad "title"

        const body = document.createElement('p');
        body.textContent = item.body; // Asumimos que el objeto tiene una propiedad "body"

        // Añadir elementos a la tarjeta
        card.appendChild(title);
        card.appendChild(body);

        // Añadir tarjeta al contenedor
        dataContainer.appendChild(card);
    });
}

// Llamar a la función fetchData con la URL de la API
fetchData(API_URL);
