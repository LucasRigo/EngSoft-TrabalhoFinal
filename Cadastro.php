<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/c2732b0761.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body>

    <div id="menu">
		<ul>
            <li ><a href="Cadastro.php"><i class="fas fa-book"></i> Cadastrar Produtos</a></li>
			<li ><a href="Listagem.php"><i class="fas fa-list"></i> Listar Produtos</a></li>
		</ul>
	</div>

    <div class="container">
        <br>
        <h1><b>Cadastro de Produtos</b></h1>
        <h3>Preencha os dados do produto que deseja cadastrar</h3>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        ?>
        <form action="Processa.php" method="POST">

            <div class="form-group">
                <label><b>Produto:</b></label>
                <input class="form-control" name="ProdNome" type="text" placeholder="Insira o nome do produto" required><br>
         </div>

            <div class="form-group">
                <label><b>Preço:</b></label>
                <input class="form-control" name="ProdPreco" type="number" min="0" step="0.01" placeholder="Insira o preço do produto" required><br><br>
            </div>

            <button class="btConfirma" type="submit"><i class="far fa-save"></i> Cadastrar</button>
        </form>
    </div>
</body>
</html>