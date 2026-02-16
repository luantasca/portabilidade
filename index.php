<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerar Termo de Portabilidade - SISBSD TELEFONIA</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f4f4;
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
            background-color: #FD6414; /* cor personalizada */
            color: #fff; /* texto branco */
            border: none;
            border-radius: 6px;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background-color: #e5530f; /* tom mais escuro no hover */
        }
        .success-message {
            display: none;
            margin-top: 15px;
            padding: 10px;
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 6px;
            text-align: center;
        }
    </style>
    <script>
        function showSuccessMessage() {
            document.getElementById("success").style.display = "block";
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Gerar Termo de Portabilidade</h2>
        <form action="gerar_pdf.php" method="post" target="_blank" onsubmit="showSuccessMessage()">
            <div class="form-group">
                <label>Razão Social / Nome:</label>
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
        <div id="success" class="success-message">
            ✅ PDF gerado com sucesso! Ele foi aberto em uma nova aba.
        </div>
    </div>
</body>
</html>
