<?php
$name=$_POST['n1'];
$Roll=$_POST['n2'];
$class=$_POST['n3'];
$department=$_POST['n4'];
echo "
<TABLE border='4'>
<tr>    
<td>Name: </td>
<td>Roll: </td>
<td>Class: </td>
<td>Department: </td>
</tr>

<tr>
<td>$name</td>
<td>$Roll</td>
<td>$class</td>
<td>$department</td>
</tr>
</TABLE>
";

?>