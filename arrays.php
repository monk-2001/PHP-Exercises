<?php 
$food = array("Milk","Bread","Fruit","Meat");
echo $food[0];
echo "<br>";
echo $food[1];
echo "<br>";
echo $food[2];
echo "<br>";
echo $food[3];
echo "<hr style=\"margin 1rem 0\">";
 ?>
  
<ul>
  <li><?php echo $food[0];  ?></li>
  <li><?php echo $food[1];  ?></li>
  <li><?php echo $food[2];  ?></li>
  <li><?php echo $food[3];  ?></li>
</ul>
<?php  
echo "<hr style=\"margin 1rem 0\">";
?>

<?php  
	$food_assoc = array("Milk"=>"Dairy","Bread"=>"White","Fruit"=>"Green","Meat"=>"Red");
	foreach ($food_assoc as $key => $value) {
	echo $key." | ".$value;
	echo "<br>";
	}
echo "<hr style=\"margin 1rem 0\">";
?>

<?php  
$food_assoc['Milk']=array(
"type:" => "Dairy","country:"=>"Canada");
$food_assoc['Bread']=array(
"type:"=>"White",
"country:"=>"USA");
$food_assoc["Fruit"]=array(
"type:" =>"Green",
"country:"=>"Japan");
$food_assoc["Meat"]=array(
"type:" =>"Red",
"country:"=>"Australia");

foreach ($food_assoc as $key => $value) {
	echo $key." | ";
	foreach ($value as $skey => $svalue) {
	echo $svalue." | ";
	}
	echo "<br>";
}
echo "<hr style=\"margin 1rem 0\">";
?>

<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td><?php echo $food[0];?></td>
    <td><?php echo $food_assoc['Milk']['type:']; ?></td>
    <td><?php echo $food_assoc['Milk']['country:']; ?></td>
  </tr>
  <tr>
    <td><?php echo $food[1]; ?></td>
    <td><?php echo $food_assoc['Bread']['type:']; ?></td>
    <td><?php echo $food_assoc['Bread']['country:']; ?></td>
  </tr>
  <tr>
    <td><?php echo $food[2]; ?></td>
    <td><?php echo $food_assoc['Fruit']['type:']; ?></td>
    <td><?php echo $food_assoc['Fruit']['country:']; ?></td>
  </tr>
   <tr>
    <td><?php echo $food[3]; ?></td>
    <td><?php echo $food_assoc['Meat']['type:']; ?></td>
    <td><?php echo $food_assoc['Meat']['country:']; ?></td>
  </tr>
</table>
