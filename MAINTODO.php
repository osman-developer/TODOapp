<?php
//include 'Metier.php';
include 'initSession.php';
?>

<html>
    <body>

        <?php
        $UC = "SENDFORM";
        if (!empty($_GET['add']))
            $UC = "ADDTODO";
        if (!empty($_GET['end']))
            $UC = "SHOWVIEWMENU";
        if (!empty($_GET['del']))
            $UC = "DELETETODO";

        if ($UC == 'SENDFORM')
            include 'form_add_todo.html';

        if ($UC == 'ADDTODO') {
            $todoList->add(new TODO($_GET['titre'], $_GET['description'], $_GET['categorie']));
            include 'list_todo_del.php';
            include 'form_add_todo.html';
        }
        if ($UC == 'SHOWVIEWMENU') {
            include 'nenu_view.html';
        }

        if ($UC == 'DELETETODO') {
            $index = $_GET['del'];
            $todoList->delTODO($index);
            include 'list_todo_del.php';
            include 'form_add_todo.html';
        }
        ?>
    </body>
</html>