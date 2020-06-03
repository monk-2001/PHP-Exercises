<?php 

// Task1
$x =1;
while ($x <= 10) {
	echo $x;
	$x++;
}
echo "<hr style=\"margin 1rem 0\">";

// Task2
$arr= range(0, 100,5);
for ($i=0; $i <count($arr); $i++) { 
	if($arr[$i]%2 ==1){
	echo $arr[$i]." ";
	}
}
echo "<hr style=\"margin 1rem 0\">";

// Task3
$food = array("Milk","Bread","Fruit","Meat");
$z=0;
$len= count($food);

while ($z <count($food)) {
	echo $food[$z]."<br>";
	$z++;
}

for($i=0;$i<count($food);$i++){
	echo $food[$i]."<br>";
}

foreach ($food as $favor)  {
	echo $favor ."<br />";
}
echo "<hr style=\"margin 1rem 0\">";

// Task4
for($i=0; $i <$len;$i++){
if ($i==0)
{
	echo "<ul>";
}
	echo "<li>".$food[$i]."</li>";
if($i ==$len-1){
	echo"</ul>";}
}
echo "<hr style=\"margin 1rem 0\">";

// Task5
$food_assoc = [
    "Milk" => [
    "type" => "Dairy",
    "origin" => "Canada"
  ],
    "Bread" => [
    "type" => "White",
    "origin" => "USA"
  ], 
    "Fruit" => [
    "type" => "Green",
    "origin" => "Japan"
  ],
    "Meat" => [
    "type" => "Red",
    "origin" => "Australia"
  ] 
];
echo "My favourite meals";
echo "<br><br>";
foreach ($food_assoc as $food=>$value) {
	print_r($food."<br>");
foreach ($value as $key => $value1) {
	print_r($key.": ".$value1."<br>");
	}
}

 ?>