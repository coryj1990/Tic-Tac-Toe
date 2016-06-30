<!DOCTYPE html>
<html>
<head><title>Play Tic Tac Toe</title>
<link type="text/css"; rel="stylesheet"; href="TTTstyle.css"/>
</head>


<?php 
include 'turncontrol.php';
$num = $_GET[num];
$boardval = $_GET[boardval]; 
echo $num;
echo $boardval;

?>
 

<body>
<table>
	<tr>
		<td class="rightbotbord"> <?php isitempty(0,$boardval,$num);?> </td>

		<td class="rightleftbotbord"> <?php isitempty(1,$boardval,$num);?> </td>

		<td class="leftbotbord"> <?php isitempty(2,$boardval,$num);?> </td>
	</tr>
	<tr>
		<td class="righttopbotbord"> <?php isitempty(3,$boardval,$num);?> </td>
		<td class="allbord"> <?php isitempty(4,$boardval,$num);?> </td>
		<td class="lefttopbotbord"> <?php isitempty(5,$boardval,$num);?> </td>
	</tr>
	<tr>
		<td class="righttopbord"> <?php isitempty(6,$boardval,$num);?> </td>
		<td class="rightlefttopbord"> <?php isitempty(7,$boardval,$num);?> </td>
		<td class="lefttopbord"> <?php isitempty(8,$boardval,$num);?> </td>
	</tr>
</table>


<a href="whoisxo.php"> Reset? </a>

<?php 
if ($num > 10) {
echo winnercontrol($boardval);} ?>
</body>
</html>






