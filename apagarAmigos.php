<!--Este arq é responsavel por apaga os dados que um usuario adcionou(amigos/parentes/conhecidos)  !-->
<?php
$tabela = $_GET['id'];//pega os  dados via get(URL)
$arquivo = file('csv/amigos.csv');//lê todo o arquivo

unset($arquivo[$tabela]);//apaga uma linha da tabela;

$dado = "";

foreach($arquivo as $key){
$dado = $dado . $key;

}

$abri = fopen('csv/amigos.csv',"w");
fwrite($abri,$dado);

header("location:home.php");
?>