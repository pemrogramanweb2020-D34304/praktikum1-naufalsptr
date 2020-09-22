<h1><center>
<?php

echo "<br>" ;
//Nomor 1
echo "Nomor 1" ; echo "<br>" ;
$jmlh=5;
for($a=1; $a<=$jmlh; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($c=$jmlh; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
}
echo "<br>";echo "<br>";echo "<br>";

//Nomor 2
echo "Nomor 2" ; echo "<br>" ;
$a = 10;
while ($a > 1) {
  $b = $a;
  while ($b >= 1) {
    echo "*";
    $b = $b - 1;
  }
  echo "<br>";
  $a = $a - 2;
} 
echo "<br>";echo "<br>";echo "<br>";

//Nomor 3
echo "Nomor 3" ; echo "<br>" ;
$num = 5;
for($i = $num; $i >= 1; $i--){
    for($j = 1; $j <= $num - $i; $j++){
        echo " ";
    }
    for($k = 1; $k < $i; $k++){
        echo $k;
    }
    for($l = $i; $l >=1; $l--){
        echo $l;
    }
    echo"<br>";
}
?>
</center></h1>

