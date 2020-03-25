 <!-- Inclusão HEAD--> 
 <?php
  require_once("./inc/head.php");
 ?>
  <!-- Inclusão HEADER--> 

 <?php
  require_once("./inc/header.php");
 ?>

    <!--Inicio do MAIN-->
    <main>
    <!--Inicio do Formulário-->
    <h2>Contate-nos</h2>
    <form class="container">
      <div class="form-group mt-2">
        <label for="exampleFormControlInput1">Nome</label>
        <input type="text" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Insira seu nome" required>
        <label for="exampleFormControlInput1 ">Assunto</label>
        <input type="text" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Sobre o que deseja conversar">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" class="form-control mb-2" id="exampleFormControlInput1" placeholder="name@example.com" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Escreva:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
      </div>
      <button type="submit" class="btn btn-warning btn-lg mb-2 float-right border-light">Enviar</button>
    </form>
  </main>

<<<<<<< HEAD
  <!-- Inclusão FOOTER-->
  <?php
  require_once("./inc/footer.php");
  ?>
=======
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Mensagem</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
        </div>
        <button id="sendButton" type="submit" class="btn btn-primary btn-lg mb-2 float-right border-light-5">Enviar</button>
      </form>
    </main>
  
 <!-- Inclusão FOOTER--> 
 <?php 
  require_once("./inc/footer.php");
?>
>>>>>>> ajustando
