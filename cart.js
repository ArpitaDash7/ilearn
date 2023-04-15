let carts = document.querySelectorAll('.add-cart');

let products = [
    {
        name: "Java programming",
        price: 500,
        incart: 0
    },

    {
        name: "Advanced Java programming",
        price: 750,
        incart: 0
    },

    {
        name: "Data structures",
        price: 350,
        incart: 0
    }
]

for (let i = 0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);
    })
}

function onLoadCart() {
    let productNumbers = localStorage.getItem("cartNumbers");
    productNumbers = parseInt(productNumbers);
    if (productNumbers) {
        document.querySelector(".cart span").textContent = productNumbers;
    }

}

function cartNumbers(product) {

    let productNumbers = localStorage.getItem("cartNumbers");
    productNumbers = parseInt(productNumbers);
    if (productNumbers) {
        localStorage.setItem("cartNumbers", productNumbers + 1);
        document.querySelector(".cart span").textContent = productNumbers + 1;
    }
    else {
        localStorage.setItem("cartNumbers", 1);
        document.querySelector(".cart span").textContent = 1;
    }
    setItems(product);
}

function setItems(product) {
    product.incart = 1;

    let cartItmes = {
        [product.name]: product
    }
    localStorage.setItem("productsInCart", JSON.stringify(cartItmes));

}

function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    if (cartItems != null) {

        if (cartItems[product.name] == undefined) {
            cartItems = {
                ...cartItems,
                [product.name]: product
            }
        }
        cartItems[product.name].incart += 1;
    }
    else {
        product.incart = 1;
        cartItems = {
            [product.name]: product
        }
    }
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));

}

function totalCost(product) {
    let cartCost = localStorage.getItem('totalCost');

    console.log("My cartCost is", cartCost);
    console.log(typeof cartCost);

    if (cartCost != null) {
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
    }
    else {
        localStorage.setItem("totalCost", product.price);
    }
}


function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".products");

    console.log(cartItems);

    if (cartItems && productContainer) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <div class="product">
                <ion-icon name="close-circle"></ion-icon>
                <img style="width:50px;height:50px;" src="/Users/harpreetkamboj/Documents/DBMS project/images/${item.name}.jpg">
                <span>${item.name}</span>
            </div>
            <div class="price">
                <span>₹${item.price}.00</span>
            </div>
            <div class="quantity">
                <ion-icon class="decrease" name="arrow-dropleft-circle"></ion-icon>
                <span>${item.incart}</span>
                <ion-icon class="increase" name="arrow-dropright-circle"></ion-icon>
            </div>
            <div class="total">
            ₹${item.incart * item.price}.00
            </div>
            `
        });
        productContainer.innerHTML += `
        <div class="basketTotalContainer">
            <h4 class=""basketTotalTitle>Basket Total</h4>
            <h4 class=""basketTotal>
                ₹${item.cartCost}.00
            </h4>
        </div>
        `;

    }
}


displayCart();
onLoadCart();