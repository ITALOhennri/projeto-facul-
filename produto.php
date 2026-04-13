<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário
    $nome = trim($_POST['nome']);
    $preco = trim($_POST['preco']);
    $descricao = trim($_POST['descricao']);

    // Validação dos campos
    if (!empty($nome) && !empty($preco) && !empty($descricao)) {
        echo "Cadastro pronto para ser inserido no banco!";
        // Aqui você vai adicionar a lógica do banco depois
    } else {
        echo "Por favor, preencha todos os campos!";
    }
}
?>