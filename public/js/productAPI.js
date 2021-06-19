const loadAllProduct = async () => {
    const response = await fetch('/api', {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        },
    });
    console.log(response);
    const jsonProduct = await response.json();

    console.log(jsonProduct);

    const card = '<div class="img-thumbnail">\n' +
        '           <div class="d-flex justify-coclassName-between">\n' +
        '               <div class="badge" ><span id="id">1</className</div>\n' +
        '           </div>\n' +
        '           <img  class="imgn" src="../img.png">\n' +
        '           <div class="product-list">\n' +
        '               <h3 class="name" id="name"></h3>\n' +
        '               <span class="price">Цена: <span class="price" id="price"></span></span>\n' +
        '           </div>\n' +
        '         </div>';


    const productCard = document.getElementById('product-card');

    for (let i = jsonProduct.length - 1; i >= 0; i--) {
        productCard.insertAdjacentHTML('afterbegin', card);
        const id = document.getElementById('id');
        const name = document.getElementById('name');
        const price = document.getElementById('price');
        id.innerText = jsonProduct[i].id;
        name.innerText = jsonProduct[i].name;
        price.innerText = jsonProduct[i].price;
    }
}

loadAllProduct();

