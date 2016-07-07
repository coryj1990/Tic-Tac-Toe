<?php
session_start();
include 'turncontrol.php';



echo "\n  To Decide if an X or O is used these tests below should work.\n";

echo"\n Testing to see if X is outputed\n";

if (xoro(1,"030000000") == echo X) {
	echo "Yippie!";
}
else{
	echo "Nope";
}

echo"\n Testing to see if O is outputed\n";

if (echo xoro(1,"050000000") == echo O) {
	echo "Yippie!";
}
else{
	echo "Nope";
}
?>