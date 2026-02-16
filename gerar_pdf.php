<?php
require('fpdf/fpdf.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf_cnpj = $_POST['cpf_cnpj'];
    $endereco = $_POST['endereco'];
    $operadora_doadora = $_POST['operadora_doadora'];
    $telefone = $_POST['telefone'];
    $data = date("d/m/Y");

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',14);

    // Cabeçalho
    $pdf->Cell(0,10,utf8_decode('TERMO DE ACEITE - SOLICITAÇÃO DE PORTABILIDADE'),0,1,'C');
    $pdf->Ln(5);

    $pdf->SetFont('Arial','',12);

    // Seção: Dados do contratante
    $pdf->Cell(0,10,utf8_decode('DADOS DO CONTRATANTE (Pessoa Jurídica / Pessoa Física)'),0,1);
    $pdf->Ln(3);

    $pdf->Cell(60,8,utf8_decode('Razão Social / Nome Completo:'),1);
    $pdf->Cell(130,8,utf8_decode($nome),1,1);

    $pdf->Cell(60,8,utf8_decode('CNPJ / CPF:'),1);
    $pdf->Cell(130,8,utf8_decode($cpf_cnpj),1,1);

    $pdf->Cell(60,8,utf8_decode('Endereço Completo:'),1);
    $pdf->Cell(130,8,utf8_decode($endereco),1,1);

    $pdf->Cell(60,8,utf8_decode('Operadora Doadora:'),1);
    $pdf->Cell(130,8,utf8_decode($operadora_doadora),1,1);

    $pdf->Ln(10);

    // Seção: Informações do número
    $pdf->Cell(0,10,utf8_decode('INFORMAÇÕES DO(S) NÚMERO(S) A SER(EM) PORTADO(S)'),0,1);
    $pdf->Ln(3);

    $pdf->Cell(60,8,utf8_decode('Número do Telefone:'),1);
    $pdf->Cell(130,8,utf8_decode($telefone),1,1);

    $pdf->Ln(10);

    // Declaração
    $texto = "ATESTO POSSUIR A AUTONOMIA NECESSÁRIA PARA A REALIZAÇÃO DA PORTABILIDADE DESCRITA NESTE TERMO.\n\n".
             "( X ) Ciente de que o número deve estar ativo até que a portabilidade seja realizada.";
    $pdf->MultiCell(0,8,utf8_decode($texto));
    $pdf->Ln(15);

    // Data e assinatura
    $pdf->Cell(0,8,utf8_decode("DATA: $data"),0,1);
    $pdf->Cell(0,8,utf8_decode("NOME COMPLETO: $nome"),0,1);
    $pdf->Cell(0,8,utf8_decode("CNPJ/CPF: $cpf_cnpj"),0,1);
    $pdf->Ln(20);
    $pdf->Cell(0,8,utf8_decode("ASSINATURA: ___________________________"),0,1);

    $pdf->Output('I', 'termo_portabilidade.pdf');
}
?>
