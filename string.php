<?php
$my_string = "Sajid Ahmedme";
$my_string2 = "md";
$array = str_split($my_string2.$my_string,4);

print_r($array);

$dream = explode(" ", "Hi, How are you?");
print_r($dream);
$count = 0;
for($i=0; $i<strlen($my_string); $i++){
    if(substr($my_string,$i,2)== "me"){
        $count++;
    }
}
echo $count;
?>

