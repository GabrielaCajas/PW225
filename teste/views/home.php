
<h1>Login</h1>
    <form action="login.php" method="POST">
        <label>E-mail ou usúario</label><br>
        <input type="text" name="usuario" placeholder="Nome do usúario" required><br><br>
        <label>Senha</label><br>
        <input type="password" name="senha" placeholder="Senha" required><br><br>
        <button type="submit">Entrar</button>
    </form>
<?php if (isset($_GET['erro'])){ ?>
	<div class="alert" role="alert">
		Usuário e/ou senha inválido(s).
	</div>
<?php } ?>


   