<?php
function writeMsg($arr, $y) {
  // echo sizeof($arr);
  // echo $arr[7];
  for($i=0; $i<sizeof($arr); $i++){
    if($arr[$i]==$y){
      return true;
      break;
    }
  }
  return false;
}
$array = [1,2,3,6,7,12,56,98];
$x = writeMsg($array,7); // call the function
if($x == true){
  echo "found";
}else{
  echo "not found";
}
?>