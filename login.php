<?php include_once('header.php') ?>
<main>
  <section class="form-login">
    <form>
           <div class="styled-input">
             <input type="text" required />
             <label>Email</label>
             <span></span>
           </div>

           <div class="styled-input">
             <input type="text" name="Nome" required />
             <label>senha</label>
             <span></span>
           </div>

           <a href="index.php"><button class="btn" id="entra" type="submit">Entrar</button></a>
           <button class="btn" ><a href="cadastro.php">Cadastrar</a></button>

         </form>
  </section>

</main>
<?php include_once('footer.php') ?>
