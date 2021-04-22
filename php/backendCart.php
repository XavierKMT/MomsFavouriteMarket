<?php 
include ("products.php");

function deleteI($itemName)
{
    $content= file_get_contents("../data/bCart.txt");
    $content=explode("\n",$content);
    $orderNumber=$content[0];
    $num= sizeof($content);

    $items=array();
    $price=array();
    $qty=array();

    for($x=1; $x<$num;$x++)
 {
     $temp= explode(",",$content[$x]);
     

     if($temp[0]==$itemName)
     {

     }

     else
     {
        array_push($items,$temp[0]);
        array_push($price,$temp[1]);
        array_push($qty,$temp[2]);
     }
 }

$info=array();
if(sizeof($items)!=0)
{
    array_push($info,"$orderNumber\n");
}

else
{
    array_push($info,"$orderNumber");
}
  for($x=0;$x<sizeof($items);$x++)
  {
      
      if($x<sizeof($items)-1)
      {
        array_push($info,"$items[$x],$price[$x],$qty[$x]\n");
      }

      else
      {
        array_push($info,"$items[$x],$price[$x],$qty[$x]");
      }

}

  $file=fopen("../data/bCart.txt","w");

    for($x=0; $x<sizeof($info);$x++)
    {   
        fwrite($file,$info[$x]);
    }
    
    fclose($file);
}

if(isset($_POST['deleItem']))
{
    deleteI($_POST['it']);
    header('location:order12345AC.php');
}

// -------------------
function addItem($itemName)
{
    if(alreadyInCart($itemName)==false)
    {
        if(itemExists($itemName))
        {
            $file=fopen("../data/bCart.txt","a");
            $pr=findPrice($itemName);
            $productAdd="\n$itemName,$pr,1";
            fwrite($file,$productAdd);
            header('location:order12345AC.php');
        }

        else
        {

            echo "<script type='text/javascript'>
                        alert('INCORRECT ITEM NAME!');
                        window.location.href='order12345AC.php';
                </script>";
                
        }
    }

    else
    {
        echo "<script type='text/javascript'>
                    alert('ITEM ALREADY IN CART');
                    window.location.href='order12345AC.php';
             </script>";
    }
}

if(isset($_POST['add']))
{
    addItem($_POST['enter']);
}

function alreadyInCart($itemName)
{
    $content= file_get_contents("../data/bCart.txt");
    $content=explode("\n",$content);
    $orderNumber=$content[0];
    $num= sizeof($content);

    $items=array();
    $price=array();
    $qty=array();

    for($x=1; $x<$num;$x++)
 {
     $temp= explode(",",$content[$x]);
     
     if($temp[0]==$itemName)
     {
        return true;
     }
 }

 return false;
}

?>

