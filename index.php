<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerar Termo de Portabilidade</title>
</head>
<body>
    <h2>Gerar Termo de Portabilidade</h2>
    <form action="gerar_pdf.php" method="post">
        Razão Social / Nome Completo: <input type="text" name="nome" required><br><br>
        CNPJ / CPF: <input type="text" name="cpf_cnpj" required><br><br>
        Endereço Completo: <input type="text" name="endereco" required><br><br>
        Operadora Doadora: <input type="text" name="operadora_doadora" required><br><br>
        Número do Telefone: <input type="text" name="telefone" required><br><br>
        <button type="submit">Gerar PDF</button>
    </form>
</body>
</html>