<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title>JavaScript Vanilla Shopping Cart Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Demo CSS (No need to include it into your project) -->
    <link rel="stylesheet" href="css/demo.css">

</head>
<body>


<main>
    <!-- Start DEMO HTML (Use the following code into your project)-->
    <div class="cart-modal-overlay">
        <div class="cart-modal">
            <i id="close-btn" class="fas fa-times"></i>
            <h1 class="cart-is-empty">Cart is empty</h1>

            <div class="product-rows">
            </div>
            <div class="total">
                <h1 class="cart-total">TOTAL</h1>
                <span class="total-price">$0</span>
                <button class="purchase-btn">PURCHASE</button>
            </div>
        </div>
    </div>

    <!--   end of cart modal -->
    <div class="cart-btn">
        <i id="cart" class="fas fa-shopping-cart"></i>
        <span class ="cart-quantity">0</span>
    </div>
    <!--  products  -->
</main>


<script>
    // open cart modal
    const cart = document.querySelector('#cart');
    const cartModalOverlay = document.querySelector('.cart-modal-overlay');

    cart.addEventListener('click', () => {
        if (cartModalOverlay.style.transform === 'translateX(-200%)'){
            cartModalOverlay.style.transform = 'translateX(0)';
        } else {
            cartModalOverlay.style.transform = 'translateX(-200%)';
        }
    })
    // end of open cart modal

    // close cart modal
    const closeBtn = document.querySelector ('#close-btn');

    closeBtn.addEventListener('click', () => {
        cartModalOverlay.style.transform = 'translateX(-200%)';
    });

    cartModalOverlay.addEventListener('click', (e) => {
        if (e.target.classList.contains('cart-modal-overlay')){
            cartModalOverlay.style.transform = 'translateX(-200%)'
        }
    })
    // end of close cart modal

    // add products to cart
    const addToCart = document.getElementsByClassName('add-to-cart');
    const productRow = document.getElementsByClassName('product-row');

    for (var i = 0; i < addToCart.length; i++) {
        button = addToCart[i];
        button.addEventListener('click', addToCartClicked)
    }

    function addToCartClicked (event) {
        button = event.target;
        var cartItem = button.parentElement;
        var price = cartItem.getElementsByClassName('product-price')[0].innerText;

        var imageSrc = cartItem.getElementsByClassName('product-image')[0].src;
        addItemToCart (price, imageSrc);
        updateCartPrice()
    }

    function addItemToCart (price, imageSrc) {
        var productRow = document.createElement('div');
        productRow.classList.add('product-row');
        var productRows = document.getElementsByClassName('product-rows')[0];
        var cartImage = document.getElementsByClassName('cart-image');

        for (var i = 0; i < cartImage.length; i++){
            if (cartImage[i].src == imageSrc){
                alert ('This item has already been added to the cart')
                return;
            }
        }

        var cartRowItems = `
  <div class="product-row">
        <img class="cart-image" src="${imageSrc}" alt="">
        <span class ="cart-price">${price}</span>
        <input class="product-quantity" type="number" value="1">
        <button class="remove-btn">Remove</button>
        </div>

      `
        productRow.innerHTML = cartRowItems;
        productRows.append(productRow);
        productRow.getElementsByClassName('remove-btn')[0].addEventListener('click', removeItem)
        productRow.getElementsByClassName('product-quantity')[0].addEventListener('change', changeQuantity)
        updateCartPrice()
    }
    // end of add products to cart

    // Remove products from cart
    const removeBtn = document.getElementsByClassName('remove-btn');
    for (var i = 0; i < removeBtn.length; i++) {
        button = removeBtn[i]
        button.addEventListener('click', removeItem)
    }

    function removeItem (event) {
        btnClicked = event.target
        btnClicked.parentElement.parentElement.remove()
        updateCartPrice()
    }

    // update quantity input
    var quantityInput = document.getElementsByClassName('product-quantity')[0];

    for (var i = 0; i < quantityInput; i++){
        input = quantityInput[i]
        input.addEventListener('change', changeQuantity)
    }

    function changeQuantity(event) {
        var input = event.target
        if (isNaN(input.value) || input.value <= 0){
            input.value = 1
        }
        updateCartPrice()
    }
    // end of update quantity input

    // update total price
    function updateCartPrice() {
        var total = 0
        for (var i = 0; i < productRow.length; i += 2) {
            cartRow = productRow[i]
            var priceElement = cartRow.getElementsByClassName('cart-price')[0]
            var quantityElement = cartRow.getElementsByClassName('product-quantity')[0]
            var price = parseFloat(priceElement.innerText.replace('$', ''))
            var quantity = quantityElement.value
            total = total + (price * quantity )

        }
        document.getElementsByClassName('total-price')[0].innerText =  '$' + total

        document.getElementsByClassName('cart-quantity')[0].textContent = i /= 2
    }
    // end of update total price

    // purchase items
    const purchaseBtn = document.querySelector('.purchase-btn');

    const closeCartModal = document.querySelector('.cart-modal');

    purchaseBtn.addEventListener('click', purchaseBtnClicked)

    function purchaseBtnClicked () {
        alert ('Thank you for your purchase');
        cartModalOverlay.style.transform= 'translateX(-100%)'
        var cartItems = document.getElementsByClassName('product-rows')[0]
        while (cartItems.hasChildNodes()) {
            cartItems.removeChild(cartItems.firstChild)

        }
        updateCartPrice()
    }
    // end of purchase items

    //alert user if cart is empty
</script>
</body>
</html>
