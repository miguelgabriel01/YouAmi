<!--Este arquivo é responsavel por salvar novos usuarios dentro de um arquivo csv  !-->
<?php

 $dado = $_POST['nome'] . ',' . $_POST['cpf'] . ',' . $_POST['email'] . ',' . $_POST['senha'] . "\n";

    $handle = fopen('csv/Usuarios.csv', 'a');
    fwrite($handle, $dado); 
    header("location:index.php");
?>