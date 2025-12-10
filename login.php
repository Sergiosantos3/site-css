<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>

    <main class="container">
        <form id="formLogin" action="../actions/usuario_logar.php" method="POST">
            <a href="#" class="logo-center" target="iframe_conteudo">LIBRAS<span> .info</span></a>

            <div class="input-login">
                <input placeholder="Usuario" type="email" id="email" name="email">
            </div>
            <div class="input-login">
                <input placeholder="Senha" type="password" id="senha" name="senha">
            </div>

            <button type="submit" class="login">Login</button>
            <div class="remember-forgot">
                <a href="#">Esqueceu a senha?</a>
                <a href="#">Criar conta gratis</a>
            </div>

            <a href="index.html" class="voltar" target="iframe_conteudo">voltar</a>
    
        </form>
    </main>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
    
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>
    
</body>
</html>