<html>
<head><title>tugas php</title></head>
<body>
<h1>tugas php function</h1>
<h3>function1</h3>
<?php

	function namakeluarga($fname) {
		echo "nama saya $fname.<br>";	
	}
	namakeluarga("dika");
	namakeluarga("ridwan");
	namakeluarga("rijal");
	
?>
<h3>function2</h3>
<?php
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}
familyName("Dika", "2000");
familyName("Ridwan", "2011");
familyName("Rijal", "2017");

?>
<h3>function3</h3>
<?php
	function setheight($minheight  = 20) {
		echo "the height is : $minheight <br>";
	}
setheight(23);
setheight();
setheight(21);

?>
<h3>function4</h3>
<?php
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}
echo "1 + 13 = " . sum(1, 13) . "<br>";
echo "3 + 43 = " . sum(3, 43) . "<br>";
echo "22 + 4 = " . sum(22, 4);

	
?>
</body>
</html>