<?php
include 'turncontrol.php';



echo "\n ###### To Decide if an X or O is used these tests below should work.\n";

echo"\n Testing to see if X is outputed\n";

if (xoro(1,"030000000") == "X") {
	echo "Yippie!";
}
else{
	echo "Nope";
}

echo"\n Testing to see if O is outputed\n";

if (xoro(1,"050000000") == "O") {
	echo "Yippie!";
}
else{
	echo "Nope";
}


echo"\n Testing to see if false is outputed\n";

if (xoro(0,"050000000") == false) {
	echo "Yippie!";
}
else{
	echo "Nope";
}



echo "\n  ######  Here is where we look at the boardval string.\n";


echo"\n Testing to see if 5 is outputed in the second boardval spot\n";

if (thequerystuff(1,"000000000", 7) == "050000000") {
	echo "Yippie!";
}
else{
	echo "Nope";
}

echo"\n Testing to see if 3 is outputed in the 7th boardval spot\n";

if (thequerystuff(6,"000000000", 2) == "000000300") {
	echo "Yippie!";
}
else{
	echo "Nope";
}

echo"\n Testing to see if 5 is outputed on a spot which already has a 3 in it.\n";

if (thequerystuff(1,"030000000", 7) == "050000000") {
	echo "Yippie!";
}
else{
	echo "Nope";
}


echo "\n  ######  To see who has won, the winnercontrol fuction is tested below.\n";


echo"\n To see if X has won.\n";

if (winnercontrol("333000000", 7, 2,0,0,0) == "Winner is X!!!!") {
	echo "Yippie!";
}
else{
	echo "Nope";
}

echo"\n To see if O has won.\n";

if (winnercontrol("555000000", 7, 3,0,0,0) == "Winner is O!!!!") {
	echo "Yippie!";
}
else{
	echo "Nope";
}

echo"\n To see if there is a tie.\n";

if (winnercontrol("335553335", 12, 3,0,0,0) == "You tied!") {
	echo "Yippie!";
}
else{
	echo "Nope";
}












?>