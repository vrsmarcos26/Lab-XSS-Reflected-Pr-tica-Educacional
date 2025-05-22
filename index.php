<?php
    if (isset($_GET['pesquisa']) && !empty($_GET['pesquisa'])) {
        $pesquisa = $_GET['pesquisa'];
        $flag = '';

        // Verifica se a string tem uma tentativa de XSS simples
        if (stripos($pesquisa, '<script>') !== false || stripos($pesquisa, 'onerror=') !== false || stripos($pesquisa, 'alert(') !== false) {
            $flag = '<br><strong style="color:green">Você encontrou a flag: FLAG{XSS_REFLECTED_SUCESSO}</strong>';
        }

        echo "<center>Você pesquisou por: $pesquisa $flag</center>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Site de Teste XSS</title>
</head>
<body>
    <center>
        <form action="index.php" method="get">
            <label for="pesquisa">Pesquisar:</label>
            <input type="text" name="pesquisa" id="pesquisa">
            <input type="submit" value="Pesquisar">
        </form>
    </center>
</body>
</html>
