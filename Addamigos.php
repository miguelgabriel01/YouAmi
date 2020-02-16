<!--Este arquivo recebe os dados do form de cadastro de amigos e salva dentro de um arquivo csv  !-->
<?php
session_start();
//$cpf = sessão...
//$cpf = $_SESSION[1] ?? false;
 $dado = $_POST['nome'] . ',' . $_POST['cidade'] . ',' . $_POST['numero'] . ',' . $_POST['email'] .  ',' . $_SESSION['cpf'] . ',' . $_POST['parentesco'] . "\n";

    $handle = fopen('csv/amigos.csv', 'a');
    fwrite($handle, $dado); 
    header("location:home.php");
?>