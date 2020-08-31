<table border="0">
<?php
foreach ($todoList->list as $key=>$todo){
echo '<tr><td>'.$todo->titre.'</td>';           
echo '<td><a href="?del='.$key.'"><img src="minus_button.png"/></a></td></tr>';
}?>
</table>