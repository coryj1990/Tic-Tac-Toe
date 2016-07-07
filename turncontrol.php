<?php


function xoro ($spot ,$boardval) {

	if ($boardval[$spot]== 3) {
		print X;
	}
	elseif ($boardval[$spot]== 5) {
		print O;
	}
	
}

function thequerystuff ($spot, $boardval, $num) {

	if ($num%2 == 0) {
		$boardval[$spot] = 3;
		echo $boardval;
	}
	else {
		$boardval[$spot] = 5;
		echo $boardval;
		}

}


function isitempty ($spot, $boardval, $num, $first, $Xwins, $Owins, $ties) {
	
	if ($boardval[$spot] != 0) {
		?>
		<div class="noback"><?php echo xoro($spot, $boardval); ?></div>	
		<?php ;}

	elseif (
		$boardval[0] + $boardval[1] + $boardval[2] == 9 ||
		$boardval[3] + $boardval[4] + $boardval[5] == 9 || 
		$boardval[6] + $boardval[7] + $boardval[8] == 9 ||	
		$boardval[0] + $boardval[3] + $boardval[6] == 9 ||	
		$boardval[1] + $boardval[4] + $boardval[7] == 9 ||
		$boardval[2] + $boardval[5] + $boardval[8] == 9 ||
		$boardval[0] + $boardval[4] + $boardval[8] == 9 ||
		$boardval[2] + $boardval[4] + $boardval[6] == 9) {
		?> 
		<div class="tiediv"> </div> <?php ;
	}	
	elseif (
		$boardval[0] + $boardval[1] + $boardval[2] == 15 ||
		$boardval[3] + $boardval[4] + $boardval[5] == 15 || 
		$boardval[6] + $boardval[7] + $boardval[8] == 15 ||	
		$boardval[0] + $boardval[3] + $boardval[6] == 15 ||	
		$boardval[1] + $boardval[4] + $boardval[7] == 15 ||
		$boardval[2] + $boardval[5] + $boardval[8] == 15 ||
		$boardval[0] + $boardval[4] + $boardval[8] == 15 ||
		$boardval[2] + $boardval[4] + $boardval[6] == 15) {
		?> 
		<div class="tiediv"> </div> <?php ;
	}
	elseif ($boardval[$spot] == 0) {
		?>
		<a href="TTT.php?num=<?php echo $num+1;?>
		&boardval=<?php echo thequerystuff($spot, $boardval, $num);?>
		&first=<?php echo $first;?>
		&Xwins=<?php echo $Xwins;?>
		&Owins=<?php echo $Owins;?>
		&ties=<?php echo $ties?>"><div class="clickdiv"><?php echo xoro($spot,$boardval);?></div></a> 
		<?php ;
	}

	
}

function winnercontrol ($boardval, $num, $first, $Xwins, $Owins, $ties) {
	global $Xwins, $Owins, $ties;

	if ($boardval[0] + $boardval[1] + $boardval[2] == 9 ||
		$boardval[3] + $boardval[4] + $boardval[5] == 9 || 
		$boardval[6] + $boardval[7] + $boardval[8] == 9 ||	
		$boardval[0] + $boardval[3] + $boardval[6] == 9 ||	
		$boardval[1] + $boardval[4] + $boardval[7] == 9 ||
		$boardval[2] + $boardval[5] + $boardval[8] == 9 ||
		$boardval[0] + $boardval[4] + $boardval[8] == 9 ||
		$boardval[2] + $boardval[4] + $boardval[6] == 9
		) {
		echo "Winner is X!!!!";
		$Xwins += 1;
	
	}
	elseif (
		$boardval[0] + $boardval[1] + $boardval[2] == 15 ||
		$boardval[3] + $boardval[4] + $boardval[5] == 15 || 
		$boardval[6] + $boardval[7] + $boardval[8] == 15 ||	
		$boardval[0] + $boardval[3] + $boardval[6] == 15 ||	
		$boardval[1] + $boardval[4] + $boardval[7] == 15 ||
		$boardval[2] + $boardval[5] + $boardval[8] == 15 ||
		$boardval[0] + $boardval[4] + $boardval[8] == 15 ||
		$boardval[2] + $boardval[4] + $boardval[6] == 15
		) {
		echo "Winner is O!!!!";
		$Owins += 1;
		
	}
	
	elseif($num == 11 and $first == 2){
		echo "You tied!";
		$ties += 1;
	}	

	elseif($num == 12 and $first == 3){
		echo "You tied!";
		$ties += 1;
	}

	else { 
		if ($num%2 == 0) {
			?> Place your X on the board <?php ;}
		elseif ($num%2 != 0) {
			?> Place your O on the board <?php ;}
	;}
}

?>

















