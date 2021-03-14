//To delete a row/product from the page.
function deleteProduct(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("productsTable").deleteRow(i);
  }

//To delete all the products in the page
function deleteAll(r){
    var i = r.parentNode.parentNode.rowIndex + 2;
    for (p = 3; p< 20 ; p++){
        document.getElementById("productsTable").deleteRow(i);
    }
    
}
