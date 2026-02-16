<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerar Termo de Portabilidade - SISBSD TELEFONIA</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ff8c00, #ffb347);
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
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
            color: #ff8c00;
            margin-bottom: 25px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
            color: #333;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            transition: 0.3s;
        }
        input:focus {
            border-color: #ff8c00;
            outline: none;
            box-shadow: 0 0 5px rgba(255,140,0,0.5);
        }
        button {
            width: 100%;
            padding: 14px;
            background-color: #ff8c00;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            margin-top: 25px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background-color: #e67e00;
            transform: scale(1.02);
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #555;
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
        <div class="footer">
            © 2026 SISBSD TELEFONIA - Todos os direitos reservados
        </div>
    </div>
</body>
</html>
