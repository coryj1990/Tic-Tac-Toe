<?php
session_start();


// xoro is responsible for determining if the spot selected will be an X or an O.
function xoro ($spot ,$boardval) {

	if ($boardval[$spot]== 3) {
		return "X";
	}
	elseif ($boardval[$spot]== 5) {
		return "O";
	}
	
}

// thequerystuff is used in the next function to define spots within boardval as 3 or 5 which in turn defines those spots as X's or O's
function thequerystuff ($spot, $boardval, $num) {

	if (isset($_SESSION['boardvases'])) {
		$boardvalses = $_SESSION['boardvases'];
			if ($num%2 == 0) {
				$boardvalses[$spot] = 3;
			return $boardvalses;
			}
			else {
				$boardvalses[$spot] = 5;
				return $boardvalses;
			}

	}

	if ($num%2 == 0) {
		$boardval[$spot] = 3;
		return $boardval;
	}
	else {
		$boardval[$spot] = 5;
		return $boardval;
	}

}

// this function takes the three cases (If spot is selected, if not, and if someone won) and takes care of the background for each spot on the board or setting a link to the next page for the next player to pick their spot.
function isitempty ($spot, $boardval, $num, $first, $Xwins, $Owins, $ties) {

	// simply takes away the link and limegreen background color (which indicates if a spot is available to pick)
	if ($boardval[$spot] != 0) {
		?>
		<div class="noback"><?php echo xoro($spot, $boardval); ?></div>	
		<?php;
	}

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
		<div class="tiediv"> </div> <?php;
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
		<div class="tiediv"> </div> <?php;
	}

	// this makes the spot clickable and gives it the limegreen background
	elseif ($boardval[$spot] == 0) {
		?>
		<a href="TTT.php?num=<?php echo $num+1;?>
		&boardval=<?php echo thequerystuff($spot, $boardval, $num);?>
		&first=<?php echo $first;?>
		&Xwins=<?php echo $Xwins;?>
		&Owins=<?php echo $Owins;?>
		&ties=<?php echo $ties?>"><div class="clickdiv"><?php echo xoro($spot,$boardval);?></div></a> 
		<?php;
	}
	
}


// winnercontrol displays the message above the play board giving instruction as the game progresses
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
		$Xwins += 1;	
		return "Winner is X!!!!";		
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
		$Owins += 1;
		return "Winner is O!!!!";

	}
	
	elseif($num == 11 and $first == 2){
		$ties += 1;
		return "You tied!";
		
	}	

	elseif($num == 12 and $first == 3){
		$ties += 1;
		return "You tied!";

	}

	else { 
		if ($num%2 == 0) {
			?> Place your X on the board <?php ;}
		elseif ($num%2 != 0) {
			?> Place your O on the board <?php ;}
		if(isset($_SESSION['numses'])) {
			$_SESSION['numses'] += 1;
		} else {
			$_SESSION['numses'] = 1;
		}
	}
}

?>

















