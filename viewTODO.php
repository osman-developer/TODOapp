<?php
//include 'Metier.php';
include 'initSession.php';
?>

<html>
    <body>
        <?php
        $cat = $_GET['cat'];
        if (!empty($cat)){
			$todoListByCat = $todoList->getTODOByCategory($cat);
			?>

			<h2>TODO List</h2> <h2>Categorie: <?php echo $cat; ?></h2><br>
			<table border="1">
				<tr><td>Titre</td><td>Description</td> 
					<?php
					if ($cat == 'all')
						echo '<td>Categorie</td>';
					echo '</tr>';
				foreach ($todoListByCat as $todo) {
						echo '<tr><td>' . $todo->titre . '</td><td>' . $todo->description . '</td>';
						
						if ($cat == 'all')
							echo '<td>' . $todo->categorie . '</td>';
						echo '</tr>';
				}?>
			</table>
        <?php }
        ?>
    </body>
</html>
