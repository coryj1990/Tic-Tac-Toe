<?php

function xoro ($spot ,$boardval, $num) {

	if ($boardval[$spot]== 3) {
		echo X;
	}
	elseif ($boardval[$spot]== 5) {
		echo O;
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
	global $Xwins, $Owins, $ties;
	
	if ($boardval[$spot] != 0) {
		?>
		<div class="noback"><?php echo xoro($spot, $boardval, $boardval[$spot]); ?></div>	
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
		&ties=<?php echo $ties?>"><div class="clickdiv"><?php echo xoro($spot,$boardval,$num);?></div></a> 
		<?php ;
	}

	
}

function winnercontrol ($boardval, $num, $Xwins, $Owins, $ties) {
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
		echo $Xwins;
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
		$Owins =+ 1;
		echo $Owins;
	}

	elseif ($num > 10)
		{		
		echo "YOU TIED!!!";
		$ties += 1;
		echo $ties;
	}

	else { 
		if ($num%2 == 0) {
			?> Place your X on the board <?php ;}
		elseif ($num%2 != 0) {
			?> Place your O on the board <?php ;}
	;}

	echo $Xwins;
	echo $Owins;
	echo $ties;

}

?>

















