<?php
    include_once "acao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    
</head>
<body>

    <h1 class="display-4">Lista de Contatos</h1>

    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastrar.php">Cadastros</a>
        </li>
    </ul>

    <br>
    <div class="table-responsive">
        <table class="table table-striped table-hover" id='lista'>
            <thead class="table-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alterar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php
                $dados = get_dados();
                foreach($dados as $contato){
                $alterar = "<a href='cadastrar.php?acao=editar&id=".$contato['id']."&nome=".$contato['Nome']."&email=".$contato['Email']."&idade=".$contato['Idade']."&data=".$contato['Data']."&parente=".$contato['Parente']."&local=".$contato['Local']."'>Alt</a>";
                $excluir = "<a href='index.php?acao=excluir&id=".$contato['id']."'>Exc</a>";
                echo "<tr><td>".$contato['id']."</td><td>".$contato['Nome']."</td><td>".$contato['Email']."</td><td>".$alterar."</td><td>".$excluir."</td></tr>";
                }
            ?>
            </tbody>
        </table>
    </div>

    <script src="script.js"></script>
    
</body>
</html>
