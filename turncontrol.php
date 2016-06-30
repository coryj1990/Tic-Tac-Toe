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

function isitempty ($spot, $boardval, $num) {

	if ($boardval[$spot] == 0) {
		?>
		<a href="TTT.php?num=<?php echo $num+1;?>&boardval=<?php echo thequerystuff($spot, $boardval, $num);?>"><div><?php echo xoro($spot,$boardval,$num);?></div></a> 
		<?php ;
	}
	elseif ($boardval[$spot] != 0) {
		?>
		<div class="noback"><?php echo xoro($spot, $boardval, $boardval[$spot]); ?></div>	
		<?php ;}		

}


function winnercontrol ($boardval) {
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
	}

	else {
		echo "YOU TIED!!!";
	}
}
?>

















