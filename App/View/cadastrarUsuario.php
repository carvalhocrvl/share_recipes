<?php
// session_start();

if(session_status() == 2){
  include 'templates/Head.php';
} else {
    include 'templates/HeadAlternativo.php';
}
include '../Controller/ControllerUsuario.php';

$controllerUsuario = new ControllerUsuario();
$controllerUsuario->cadastrarUsuario();


 ?>
 <div class="container">
   <div class="row">
     <h3>Cadastrar Usuario</h3>
   </div>
   <hr>
       <form method="post" action="cadastrarUsuario.php">
         <div class="row">
           <label class="col-1" for="nome">Nome</label><input class="col-5 form-control" type="text" name="nome" required><br>
         </div>
         <br>
         <div class="row">
           <label class="col-1" for="cpf">CPF</label><input class="col-5 form-control" type="text" name="cpf" required><br>
         </div>
         <br>
         <div class="row">
           <label class="col-1" for="endereco">Endereço</label><input class="col-11  form-control" type="text" name="endereco" required><br>
         </div>
         <br>
         <div class="row">
           <label class="col-1" for="email">Email</label><input class="col-5 form-control" type="text" name="email" required><br>
           <label class="col-1" for="senha">Senha</label><input class="col-5 form-control" type="text" name="senha" required><br>
         </div>
         <br>
         <div class="text-center">
           <input class="btn btn-sm btn-success" type="submit" name="inserir" value="Cadastrar">
         </div>
       </form>
     </div>
   </div>
 </div>

<hr>
<!-- <div class="text-center"> -->
  <!-- <a href="index_admin.php" class="btn btn-sm btn-warning" value='Voltar'><i class="fas fa-angle-double-left"></i> Voltar</a> -->
<!-- </div> -->
