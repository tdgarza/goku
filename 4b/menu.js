fetch(menu.json)

//Que hace esta linea? Esta linea inicia la carga del archivo menu.json, fetch es una funcion de Javascript que facilita la realizacion de solicitudes de red como obtener datos de un archivo o un endpoint de API.
//Como funciona? fetch devuelve una promesa que, cuando se resuelve, te da acceso a la respuesta de la solicitud. Esta respuesta no es directamente los datos en formato JSON, si no un objeto de respuesta que incluye varios detalles sobre la respuesta misma.

.then(response => response.json())
//Que hace? Esta linea toma el objeto de respuesta obtenido del fetch y utiliza el metodo .json() para convertir el cuerpo de la respuesta en un objeto Javascript (esto asume el cuerpo de la respuesta esta en formato JSON).
//Como funciona? el metodo .json() tambien devuelve una promesa, la cual se resuelve con el contenido del cuerpo en formato JSON.

.then(data =>{
    const menuContainer = document.getElementById('menu-container');
    //Que hace? Aqui se procesan los datos JSON ya convertidos. Se obtiene una referencia el contenedor del menu en el HTML mediante getElementById('menu-container'), y luego se itera sobre los elementos (categorias) del menu.
    data.items.forEach(category => {
        const categoryTitle = document.createElement('h2');
        //Que hace? Aqui se crea un elemento h2, se asigna el nombre de la categoria como su contenido de texto, y luego se anade este titulo al contenedor menu.
        categoryTitle.textContent = category.category;
        menuContainer.appendChild(categoryTitle);

        const table = document.createElement('table');
        //Que hace? Se crea un elemento table para cada categoria. Ademas, se prepara el encabezado (tablehead) con las columnas pertinentes. tableBody se inicializa vacio y se llenara con los elementos de la categoria.
        const tableHead = `<tr><th>Foto</th><th>Descripcion</th><th>Precio</th></tr>`;
        let tableBody = '';
        
    });
})
