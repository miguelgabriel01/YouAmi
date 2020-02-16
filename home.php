<!--Esta parte de codigo verifica se o usuario esta logado, dando acesso a pagina de cadastro  !-->
<?php
session_start();

$autorizado = $_SESSION['autorizado'] ?? false;
if ($autorizado !== true) {
    header('location:index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.2">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/home.css"/>  
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Pacifico&display=swap" rel="stylesheet">
 
</head>
<body>
 <div class="app">
    <header class="menu" >
     <a href="#" >YouAmi</a>
        <nav>
            <li><a href="sair.php" >Inicio</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#"><?= $_SESSION['nome'] ?></a></li>
            <li><a href="sair.php">Sair</a></li>
        </nav>
    </header>

 <!--Este codogo é responsavel por ler o arquivo css e exibi em um select  !-->
 <?php
    $amg = file('csv/parentesco.csv');
    foreach($amg as $id => $parentes){
    $amg[$id] = explode(',', $parentes);
   }
 ?>


 <section class="principal-form"> 
    <div class="principal">
      <h2>Cadastrar Amigos </h2>
       <form action="Addamigos.php" method="post">

          <div class="meio">
            <input type="text" name="nome" required=" " >
            <label>Primeiro e segundo nome</label>
         </div> 
         <div class="meio">
            <input type="text" name="cidade"  required=" " >
            <label>Cidade</label>
         </div>    
         <div class="meio">
            <input type="number" name="numero"  required=" " >
            <label>Numero</label>
         </div>    

         <!--Aqui é listado os niveis de parentesco que um usuario pode ter com outro  !-->
         <select name="parentesco">
           <?php foreach ($amg as $parentes): ?>
              <?php list($t) = $parentes; ?>
              <option value="<?= $t ?>"><?= $t?></option>
           <?php endforeach ?>
         </select>

         <div class="meio">
           <input type="email" name="email"  required=" " >
           <label>Email</label>
         </div>    

         <input type="submit" name="" value="Salvar">
        </form> 
    </div> 
  </section>
 
  <!--Aqui são listados os amigos que o usuario cadastrou(apenas os deles)  !-->

    <section class="cadastrados">
      <h1 id="tituloCadastrados">Pessoas cadastradas</h1>


      <!--Aqui fazemos a leitura do arquivo e os dados são listados  !-->
     <?php
      $dados = file('csv/amigos.csv');
      for($i = 0; $i < sizeof($dados); $i++) {
      $dados[$i] = explode(",", TRIM($dados[$i]));
      }
     ?>


    <table>
 		<thead>
 			<tr>
 			 <th>Nome</th>
             <th>Cidade</th>
             <th>Numero</th>
             <th>Email</th>
             <th>Id</th>
             <th>Parentesco</th>
            </tr>
 		</thead>
         
         
         <!--Esta parte do codigo é responsavel por listar apenas os dados do usuario. evitando assim que ele possa vizualisar os amigos de outro usuario  !-->
        <?php foreach ($dados as $i => $dadosUser): ?>
          <?php if($dadosUser[4] == $_SESSION['cpf']):?>
           <tr>
            <?php foreach ($dadosUser as  $dados): ?>
 
 
              <td><?= $dados ?></td>
 
            <?php endforeach ?> 
 
           <td><a id="apagar" href="apagarAmigos.php?id=<?= $i ?>">X</a></td>
           </tr>
         <?php endif ?>
        <?php endforeach ?>
 	</table>




 </section>

  <section class="fim">
   <a id="footmsg" href="https://github.com/miguelgabriel01">mgbs@distribuição ltda</a>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script>
    new Vue({
           el:"",
           data: {
           show:false
           }
    })

  </script>
</body>
</html>