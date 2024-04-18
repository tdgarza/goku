fetch('menu.json')
.then(response => response.json())
.then(data =>{
    const menuContainer = document.getElementById('menu-container');
    data.items.forEach(category => {
        const categoryTitle = document.createElement('h2');
        categoryTitle.textContent = category.category;
        menuContainer.appendChild(categoryTitle);

        const table = document.createElement('table');
        const tableHead = `<tr><th>Foto</th><th>Descripcion</th><th>Precio</th></tr>`;
        let tableBody = '';
        category.items.forEach(item => {
            tableBody +=`<tr>
                <td><img src= "${item.image}" alt="{item.name}"</td>
                <td>${item.name} - ${item.description}</td>
                <td>${item.price}</td>
            </tr>`
        });
        table.innerHTML = tableHead + tableBody;
        menuContainer.appendChild(table);
    });
});
