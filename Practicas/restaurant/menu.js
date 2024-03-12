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
        //¿Qué hace? Aquí se crea un elemento h2, se asigna el nombre de la categoría como su 
        //contenido de texto, y luego se añade este título al contenedor del menú.
        categoryTitle.textContent = category.category;
        menuContainer.appendChild(categoryTitle);
        
        const table = document.createElement('table');
        //¿Qué hace? Se crea un elemento table para cada categoría. Además, se prepara el encabezado 
        //(tableHead) con las columnas pertinentes. tableBody se inicializa vacío y se llenará con los elementos de la categoría.
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
//¿Qué hace? Para cada item dentro de category.items, se concatena una nueva fila (<tr>) a tableBody. 
//Esta fila contiene una celda para la imagen del elemento (usando el atributo src para la URL de 
//la imagen y alt para el texto alternativo), otra celda para el nombre y la descripción del elemento, 
//y una tercera celda para el precio del elemento.
        
        table.innerHTML = tableHead + tableBody;
        //¿Qué hace? Una vez completadas todas las filas de la tabla para los elementos de una categoría, 
        //se combina el encabezado de la tabla (tableHead) con el cuerpo de la tabla (tableBody) y se 
        //establece como el contenido HTML de la tabla. Finalmente, esta tabla se añade al contenedor 
        //del menú en la página web.
        menuContainer.appendChild(table);
    });
});
//Poblar la tabla con los elementos: Para cada ítem dentro de una categoría, se crea una fila (<tr>) 
//con tres celdas (<td>): una para la imagen (con un elemento <img>), otra para el nombre y descripción 
//del ítem, y una última para el precio. Esto se hace concatenando cada nueva fila a una variable tableBody.
//Finalizar y mostrar la tabla: Una vez que todas las filas han sido agregadas a tableBody, se establece 
//el contenido interno (innerHTML) de la tabla combinando el encabezado con el cuerpo. Luego, esta tabla 
//completa se agrega al contenedor del menú en el documento.