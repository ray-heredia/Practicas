<?php
$cant = $_GET["cant"];
$mult = $_GET["num"];
for($i=1;$i<=$cant;$i++)
{
	
	echo "<table>";
	echo "<tr><th colspan=5> Tabla del $i </th></tr>";
	for($j=1;$j<=$mult;$j++)
		echo "<tr><td align=center>$i</td>
                <td >x</td>
                <td >$j</td>
                <td >=</td>
                <td > ", ($i*$j) ,"</td>
                </tr>";
	echo "</table> <br/>";
}
?>