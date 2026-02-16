<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerar Termo de Portabilidade - SISBSD TELEFONIA</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f4f4; /* fundo neutro */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            transition: 0.3s;
        }
        input:focus {
            border-color: #666;
            outline: none;
            box-shadow: 0 0 5px rgba(100,100,100,0.3);
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #333; /* botão escuro neutro */
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background-color: #555;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Gerar Termo de Portabilidade</h2>
        <form action="gerar_pdf.php" method="post">
            <div class="form-group">
                <label>Razão Social / Nome Completo:</label>
                <input type="text" name="nome" required>
            </div>

            <div class="form-group">
                <label>CNPJ / CPF:</label>
                <input type="text" name="cpf_cnpj" required>
            </div>

            <div class="form-group">
                <label>Endereço Completo:</label>
                <input type="text" name="endereco" required>
            </div>

            <div class="form-group">
                <label>Operadora Doadora:</label>
                <input type="text" name="operadora_doadora" required>
            </div>

            <div class="form-group">
                <label>Número do Telefone:</label>
                <input type="text" name="telefone" required>
            </div>

            <button type="submit">Gerar PDF</button>
        </form>
        <div class="footer">
            © 2026 SISBSD TELEFONIA - Todos os direitos reservados
        </div>
    </div>
</body>
</html>
