

<?php 

function deleteI($itemName)
{
    $content= file_get_contents("cartOrder.txt");
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
array_push($info,"$orderNumber\n");
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

  $file=fopen("cartOrder.txt","w");

    for($x=0; $x<sizeof($info);$x++)
    {   
        fwrite($file,$info[$x]);
    }
               
}

if(isset($_POST['deleItem']))
{
    deleteI($_POST['it']);
}



function addItem($itemName,$qty,$price,$img)
{
    echo "<img src=$img>";

}

if(isset($_POST['add']))
{
    addItem($_POST['enter'],1,findPrice($_POST['enter']),findImg($_POST['enter']));
}
?>

