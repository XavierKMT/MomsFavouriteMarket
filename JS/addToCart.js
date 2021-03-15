function addToCart(itemNum) {
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
    for(i=0;i<cartSize;i++) {
        if (parseInt(localStorage.getItem('itemInCart' + i)) == itemNum) {
            alert("This item is already in the cart");
            localStorage.setItem('cart', cartSize - 1);
            localStorage.removeItem('itemInCart' + cartSize);
            return;
        }
    }
    localStorage.setItem('itemInCart' + cartSize, itemNum);
}