document.addEventListener('DOMContentLoaded', function() {
    fetch('menu1.json')
    .then(response => response.json())
    .then(data => {
        populateCategories(data.items);
    });

    function populateCategories(categories) {
        const select = document.getElementById('category-select');
        categories.forEach(category => {
            const option = document.createElement('option');
            option.value = JSON.stringify(category.items); // Pass item data as stringified JSON
            option.textContent = category.category;
            select.appendChild(option);
        });
    }

    window.loadCategoryItems = function() {
        const selectedItems = JSON.parse(document.getElementById('category-select').value);
        const container = document.getElementById('items-container');
        container.innerHTML = ''; // Clear previous items
        if (selectedItems) {
            selectedItems.forEach(item => {
                const label = document.createElement('label');
                const input = document.createElement('input');
                input.type = 'checkbox';
                input.value = item.price;
                input.onchange = () => updateTotal(input);

                const text = document.createTextNode(` ${item.name} - ${item.price} $`);
                label.appendChild(input);
                label.appendChild(text);
                container.appendChild(label);
                container.appendChild(document.createElement('br'));
            });
        }
    };

    function updateTotal(input) {
        const totalSpan = document.getElementById('total');
        let currentTotal = parseFloat(totalSpan.textContent);
        if (input.checked) {
            currentTotal += parseFloat(input.value);
        } else {
            currentTotal -= parseFloat(input.value);
        }
        totalSpan.textContent = currentTotal.toFixed(2);
    }
});
