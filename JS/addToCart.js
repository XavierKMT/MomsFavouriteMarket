function addToCart(itemNum) {
    alert('Item added to cart');
    //this was an attempt to make the products actually get added to the cart
    //however that will be done in assignment 3 using php, so the code was just left here in case
    /*
    let cartSize = localStorage.getItem('cart');
    
    if (cartSize == undefined) {
        localStorage.setItem('cart', 1);
    } else {
        cartSize = parseInt(cartSize);
        localStorage.setItem('cart', cartSize + 1);
    }
    cartSize = localStorage.getItem('cart');
    cartSize = parseInt(cartSize);
    localStorage.setItem('itemInCart' + cartSize, itemNum);
    for(i=1;i<cartSize;i++) {
        if (parseInt(localStorage.getItem('itemInCart' + i)) == itemNum) {
            alert("This item is already in the cart");
            localStorage.setItem('cart', cartSize - 1);
            localStorage.removeItem('itemInCart' + cartSize);
            return;
        }
    }
    localStorage.setItem('itemInCart' + cartSize, itemNum);
    */
}
