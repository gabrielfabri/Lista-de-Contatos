<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ProvaGram - Cadastro</title>
    <link rel="stylesheet" href="css/style.css"/>

  </head>
  <body>
    <main>
      <section class="principalPainel">
        <header>
      <div class="cadastro">
          <h1 class="title">
            <i style="color:#DD4132"></i> PROVAGRAM
          </h1>

          <h3> Bem - vindo ao provagram, tela de cadastro da disciplina de programação III </h3>
        </header>
        <div class="cadastro">
          <form class= "colorir" method="post" action="insere.php" >

            <div class="botoes">
              <input type="text" name="nome" placeholder="Nome">
            </div>

            <div class="botoes">
              <input type="text" name="apelido" placeholder="apelido">
            </div>

            <div class="botoes">
            <input type="email" name="email" placeholder="E-mail">
            </div>

            <div class="botoes">
              <input type="text" name="telefone" placeholder="Telefone">
            </div>

            <div class="rodape">
              <input type="submit"  value="Cadastre-se" type="submit" value= "Listar">
            </div>



          </form>
        </div>

      </section>
    </main>
  </body>
</html>
