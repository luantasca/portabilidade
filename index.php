<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerar Termo de Portabilidade - SISBSD TELEFONIA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 200px;
        }
        h2 {
            text-align: center;
            color: #ff8c00; /* laranja */
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #ff8c00; /* laranja */
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
        }
        button:hover {
            background-color: #e67e00;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://static.wixstatic.com/media/da1260_6a4d0b07499041d3876623ea6434cc1d~mv2.png/v1/fill/w_153,h_69,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/logo_custom.png" alt="SISBSD TELEFONIA">
        </div>
        <h2>Gerar Termo de Portabilidade</h2>
        <form action="gerar_pdf.php" method="post">
            <label>Razão Social / Nome Completo:</label>
            <input type="text" name="nome" required>

            <label>CNPJ / CPF:</label>
            <input type="text" name="cpf_cnpj" required>

            <label>Endereço Completo:</label>
            <input type="text" name="endereco" required>

            <label>Operadora Doadora:</label>
            <input type="text" name="operadora_doadora" required>

            <label>Número do Telefone:</label>
            <input type="text" name="telefone" required>

            <button type="submit">Gerar PDF</button>
        </form>
    </div>
</body>
</html>
