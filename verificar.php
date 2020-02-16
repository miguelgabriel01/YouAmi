<!--Este arquivo é responsvel por verificar dentro do arq csv, se os dados enviados pelo formestçao cadastrados  !-->
<?php
session_start();

$senha = $_POST['senha'] ?? '' ;
$email = $_POST['email'] ?? '' ;
$cpf = $_POST['cpf'] ?? '';
$nome = $_POST['nome']?? '';


 
 $dados = file('csv/Usuarios.csv');//E criada uma variavel que armazena a função file que lê o arquivo e o transforma em indices de array
 for($i = 0; $i < sizeof($dados); $i++) {//aqui é criado um contador que inicia com 0 e verifica com o SIZEOF todos os indices do arquivo add com um contador 
 $dados[$i] = explode(",",TRIM($dados[$i]));
	if ($senha ==  $dados[$i][3] && $email ==  $dados[$i][2]){
		    $_SESSION['autorizado'] = true;
		    $_SESSION['cpf'] = $dados[$i][1];
            $_SESSION['nome'] = $dados[$i][0];
            // salva na sessão o CPF do indivíduo
     break;
	}
 }
 header('location:home.php');
 
 ?>


