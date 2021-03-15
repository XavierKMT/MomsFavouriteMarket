function del(target)
{
    var buttonDel=target.parentNode;
    var rowDel=buttonDel.parentNode

    var headerDel=rowDel.previousElementSibling;
    headerDel.parentNode.removeChild(headerDel);

    rowDel.parentNode.removeChild(rowDel);
}

function del1(target)
{
    var buttonDel=target.parentNode;
    var rowDel=buttonDel.parentNode
    rowDel.parentNode.removeChild(rowDel);
}

function fcn1(target)
{
    var newTarg=target.previousElementSibling.value;

     var node0=document.getElementById("ed");
     var node1=document.createElement("tr");

     node0.appendChild(node1);
     var node2= document.createElement("td");

     node1.appendChild(node2);
     var node3= document.createElement("img")
     var location= "Images/" + newTarg+".jpg";

    // document.getElementById("removea").innerHTML="<img src="+location+">";

     node3.src=location;
     node3.style.padding="0px"
     node3.style.paddingLeft="10px";
     node3.style.height="auto";
     node3.style.width="auto";
     node3.style.maxHeight="150px"
     node3.style.maxWidth="150px";
     node3.style.marginBottom="25px";
     node3.style.marginTop="25px";
     node2.appendChild(node3);
}




