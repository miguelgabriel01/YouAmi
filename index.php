<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.2">
    <title>thoughts</title>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>  
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Pacifico&display=swap" rel="stylesheet">
 </head>
 <body>
  <header class="menu" >
    <a href="#" >YouAmi</a>
      <nav>
        <li><a href="#" >Inicio</a></li>
        <li><a href="#">Entrar</a></li>
        <li><a href="#" @click="show = !show">Cadastrar</a></li>
        
        <transition name="slide-fade">
           <div v-if="show">
             <div class="principal2">
               <h2>Cadastro</h2>
                <form id="login" action="Cadastrar.php" method="POST">
          
                  <div class="meio">
                     <input type="text" name="nome" required=" " >
                     <label>Primeiro e segundo nome</label>
                  </div> 
                  <div class="meio">
                     <input type="text" name="cpf"  required=" " >
                     <label>Cpf</label>
                  </div>    
                  <div class="meio">
                     <input type="email" name="email"  required=" " >
                     <label>Email</label>
                  </div>    
                  <div class="meio">
                     <input type="password" name="senha"  required=" " >
                     <label>Senha</label>
                  </div> 
                   
                  <input type="submit" name="" value="Salvar">
                  
                </form>
             </div>
            </div>
        </transition>
     </nav>
   </header>


        <section class="inicio">

          <p id="mensagemInicial">Welcome to the largest friend registration platform in Brazil. come in and find the missing people in your life</p>
        
           <button id="Bntlogin" @click="show = !show">Inicio</button>

        <transition name="slide-fade">
           <div v-if="show">
             <div class="principal">
              <h2>Login</h2>
      
               <form action="verificar.php" method="POST">
                  <div class="meio">
                    <input type="email" name="email" required=" " >
                    <label>Email</label>
                  </div> 
                  <div class="meio">
                    <input type="password" name="senha"  required=" " >
                    <label>Senha</label>
                  </div>   
      
                 <input type="submit" name="" value="Entrar">
                 <!--<button @click="show = !show">Sair</button>   !-->
                </form>
             </div>
            </div>

        </transition>

    </section>

       <section class="meioTEXT"><p id="texto">"register, sign in, and start registering your relatives and friends. create a totally secure and flexible schedule"</p></section>

   <section class="fim">
    <a id="footmsg" href="https://github.com/miguelgabriel01">mgbs@distribuição ltda</a>
   </section>



  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script>
      new Vue({
        el:".inicio",
        data: {
        show:false
       }
    })

    new Vue({
       el:".menu",
       data: {
       show:false
     } 
    })  

  </script>
</body>
</html>