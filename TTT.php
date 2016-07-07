<!DOCTYPE html>
<html>
<head><title>Play Tic Tac Toe</title>
<link type="text/css"; rel="stylesheet"; href="TTTstyle.css"/>
</head>


<?php 
include 'turncontrol.php';
global $Xwins, $Owins, $ties;
$num = $_GET[num];
$boardval = $_GET[boardval]; 
$first = $_GET[first];
$Xwins = $_GET[Xwins];
$Owins = $_GET[Owins];
$ties = $_GET[ties];
print_r($_GET);
?>

<div class="thepage">
<p><?php 
echo winnercontrol($boardval, $num, $Xwins, $Owins, $ties);

?></p>


<body>

<table class="playboard">
	<tr>
		<td class="rightbotbord"> <?php isitempty(0,$boardval,$num,$first, $Xwins, $Owins, $ties);?> </td>
		<td class="rightleftbotbord"> <?php isitempty(1,$boardval,$num,$first, $Xwins, $Owins, $ties);?> </td>
		<td class="leftbotbord"> <?php isitempty(2,$boardval,$num,$first, $Xwins, $Owins, $ties);?> </td>
	</tr>
	<tr>
		<td class="righttopbotbord"> <?php isitempty(3,$boardval,$num,$first, $Xwins, $Owins, $ties);?> </td>
		<td class="allbord"> <?php isitempty(4,$boardval,$num,$first, $Xwins, $Owins, $ties);?> </td>
		<td class="lefttopbotbord"> <?php isitempty(5,$boardval,$num,$first, $Xwins, $Owins, $ties);?> </td>
	</tr>
	<tr>
		<td class="righttopbord"> <?php isitempty(6,$boardval,$num,$first, $Xwins, $Owins, $ties);?> </td>
		<td class="rightlefttopbord"> <?php isitempty(7,$boardval,$num,$first, $Xwins, $Owins, $ties);?> </td>
		<td class="lefttopbord"> <?php isitempty(8,$boardval,$num,$first, $Xwins, $Owins, $ties);?> </td>
	</tr>
</table>

<div class="gameopts">
<a href="whoisxo.php"> Reset? </a>
<a href="TTT.php?num=<?php echo $first;?>&boardval=000000000&first=<?php echo $first;?>&Xwins=<?php echo $Xwins;?>&Owins=<?php echo $Owins?>&ties=<?php echo $ties?>"> Rematch? </a>
</div>

<table>
<tr> 
	<td> <?php echo $Xwins; ?> </td> </tr>
<tr> 
	<td> <?php echo $Owins; ?> </td> </tr>
<tr>
	<td> <?php echo $ties; ?> </td> </tr>
</table>

</div>
</body>
</html>






