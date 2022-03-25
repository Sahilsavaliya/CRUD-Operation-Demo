<?php

//array push operation
echo "array push operation <br>";
$a=array("sahil","savaliya");
array_push($a, "krishna","savaliya");
print_r($a)."<br><br>";
echo "<br><br>";



//array pop operation
echo "array pop operation ";
$b=array("Aditya","babariya");
array_pop($b,"dhruv","nency");
print_r($b)."<br><br>";
echo "<br><br>";    


echo "asort value";
echo "<br>";
$a=array("sahil"=>"21","rutvik"=>"22","shubham"=>"24");
asort($a);

$alength= count($a);
for($x=0; $x<$alength; $x++) {
    echo $a[$x];
    echo "<br>";
}

echo "<br><br>";


//arsort is reverse of asort

echo "arsort value";
echo "<br>";
$y=array("sahil"=>"21","rutvik"=>"22","shubham"=>"24");
arsort($y);

foreach($y as $x=>$x_age) {

    echo "key=". $x . ", Age=". $x_age;
    echo "<br>";
}
echo "<br><br>";



//ksort is ascending order, according to the key

echo "ksort value";
echo "<br>";
$z=array("Jaymin"=>"18","Sahil"=>"21","Rutvik"=>"22","Shubham"=>"24");
ksort($z);

foreach($z as $x=>$x_age) {

    echo "key=". $x . ", Age=". $x_age;
    echo "<br>";
}
echo "<br><br><br>";


//krsort is descending order, according to the key

echo "krsort value";
echo "<br>";
$z=array("Jaymin"=>"18","Sahil"=>"21","Rutvik"=>"22","Shubham"=>"24");
krsort($z);

foreach($z as $x=>$x_age) {

    echo "key=". $x . ", Age=". $x_age;
    echo "<br>";
}
echo "<br><br><br>";


//usort 
echo "usort value";
function my_sort($a,$b){
    if($a==$b) return 0;
    return ($a<$b)?-1:1;
}
echo "<br>";
$A=array("Jaymin"=>"18","Sahil"=>"22","Rutvik"=>"21","Shubham"=>"19");
uasort($A,"my_sort");

foreach($A as $x=>$x_age) {

    echo "key=". $x . ", Age=". $x_age;
    echo "<br>";
}

//count
echo "<br><br><br>";
echo "count of array <br>";
$cars=array("BMW"=>"2020","Audi"=>"2019","Tesla"=>"2022");
echo count($cars);

//unique
echo "<br><br><br>";
echo "unique key of array <br>";
$a=array("a"=>"Model","b"=>"View","c"=>"Controller","d"=>"Model");
print_r(array_unique($a));

//array keys
echo "<br><br><br>";
echo "array keys <br>";
$a=array("Hyundai"=>"Creta","Tata"=>"Harrier","Suzuki"=>"swift");
print_r(array_keys($a,"Creta"));
?>