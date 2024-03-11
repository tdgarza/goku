fetch('menu1.json')
//¿Qué hace? Esta línea inicia la carga del archivo menu1.json. fetch es una función de JavaScript que facilita 
//la realización de solicitudes de red, como obtener datos de un archivo o un endpoint de API.
//¿Cómo funciona? fetch devuelve una promesa que, cuando se resuelve, te da acceso a la respuesta de la 
//solicitud. Esta respuesta no es directamente los datos en formato JSON, sino un objeto de respuesta que 
//incluye varios detalles sobre la respuesta misma.

.then(response => response.json())

// ¿Qué hace? Esta línea toma el objeto de respuesta obtenido del fetch y utiliza el método .json() 
//para convertir el cuerpo de la respuesta en un objeto JavaScript (esto asume que el cuerpo de la 
//respuesta está en formato JSON).
//¿Cómo funciona? El método .json() también devuelve una promesa, la cual se resuelve con el contenido 
//del cuerpo en formato JSON.

.then(data => {

    const menuContainer = document.getElementById('menu-container');
//¿Qué hace? Aquí se procesan los datos JSON ya convertidos. Se obtiene una referencia al contenedor 
//del menú en el HTML mediante getElementById('menu-container'), y luego se itera sobre los elementos (categorías) del menú.
    data.items.forEach(category => {
        const categoryTitle = document.createElement('h2');
        categoryTitle.textContent = category.category;
        menuContainer.appendChild(categoryTitle);
        
        const table = document.createElement('table');
        const tableHead = `<tr><th>Foto</th><th>Descripción</th><th>Precio</th></tr>`;
        let tableBody = '';

//¿Cómo funciona? Para cada categoría en los datos, se realizan varios pasos:
//Crear un título para la categoría: Se crea un elemento <h2> para el título de la categoría, se 
//establece su contenido de texto al nombre de la categoría (category.category), y luego se agrega al contenedor del menú.
//Crear una tabla para los elementos de esa categoría: Se genera una tabla por cada categoría. Primero, se define 
//el encabezado de la tabla (<th>Foto</th><th>Descripción</th><th>Precio</th>).

        category.items.forEach(item => {
            tableBody += `<tr>
                            <td><img src="${item.image}" alt="${item.name}"></td>
                            <td>${item.name} - ${item.description}</td>
                            <td>${item.price}</td>
                          </tr>`;
        });
        
        table.innerHTML = tableHead + tableBody;
        menuContainer.appendChild(table);
    });
});
//Poblar la tabla con los elementos: Para cada ítem dentro de una categoría, se crea una fila (<tr>) 
//con tres celdas (<td>): una para la imagen (con un elemento <img>), otra para el nombre y descripción 
//del ítem, y una última para el precio. Esto se hace concatenando cada nueva fila a una variable tableBody.
//Finalizar y mostrar la tabla: Una vez que todas las filas han sido agregadas a tableBody, se establece 
//el contenido interno (innerHTML) de la tabla combinando el encabezado con el cuerpo. Luego, esta tabla 
//completa se agrega al contenedor del menú en el documento.