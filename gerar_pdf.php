<?php
require('fpdf/fpdf.php');

class PDF extends FPDF {
    // Cabeçalho
    function Header() {
        $this->SetFont('Arial','B',16);
        $this->SetTextColor(0,0,0); // preto
        $this->Cell(0,10,utf8_decode('TERMO DE ACEITE - SOLICITAÇÃO DE PORTABILIDADE'),0,1,'C');
        $this->Ln(10);
    }

    // Rodapé
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->SetTextColor(0,0,0); // preto
        $this->Cell(0,10,utf8_decode('SISBSD TELEFONIA - Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf_cnpj = $_POST['cpf_cnpj'];
    $endereco = $_POST['endereco'];
    $operadora_doadora = $_POST['operadora_doadora'];
    $telefone = $_POST['telefone'];
    $data = date("d/m/Y");

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    // Seção: Dados do contratante
    $pdf->SetFont('Arial','B',12);
    $pdf->SetTextColor(0,0,0); // preto
    $pdf->Cell(0,10,utf8_decode('DADOS DO CONTRATANTE'),0,1,'L');
    $pdf->SetFont('Arial','',11);

    $pdf->Cell(60,8,utf8_decode('Razão Social / Nome:'),1);
    $pdf->Cell(130,8,utf8_decode($nome),1,1);

    $pdf->Cell(60,8,utf8_decode('CNPJ / CPF:'),1);
    $pdf->Cell(130,8,utf8_decode($cpf_cnpj),1,1);

    $pdf->Cell(60,8,utf8_decode('Endereço Completo:'),1);
    $pdf->Cell(130,8,utf8_decode($endereco),1,1);

    $pdf->Cell(60,8,utf8_decode('Operadora Doadora:'),1);
    $pdf->Cell(130,8,utf8_decode($operadora_doadora),1,1);

    $pdf->Ln(10);

    // Seção: Informações do número
    $pdf->SetFont('Arial','B',12);
    $pdf->SetTextColor(0,0,0); // preto
    $pdf->Cell(0,10,utf8_decode('INFORMAÇÕES DO(S) NÚMERO(S)'),0,1,'L');
    $pdf->SetFont('Arial','',11);

    $pdf->Cell(60,8,utf8_decode('Número do Telefone:'),1);
    $pdf->Cell(130,8,utf8_decode($telefone),1,1);

    $pdf->Ln(10);

    // Declaração
    $pdf->MultiCell(0,8,utf8_decode("ATESTO POSSUIR A AUTONOMIA NECESSÁRIA PARA A REALIZAÇÃO DA PORTABILIDADE DESCRITA NESTE TERMO.\n\n( X ) Ciente de que o número deve estar ativo até que a portabilidade seja realizada."));
    $pdf->Ln(15);

    // Data e assinatura
    $pdf->Cell(0,8,utf8_decode("DATA: $data"),0,1);
    $pdf->Cell(0,8,utf8_decode("NOME: $nome"),0,1);
    $pdf->Cell(0,8,utf8_decode("CNPJ/CPF: $cpf_cnpj"),0,1);
    $pdf->Ln(20);
    $pdf->Cell(0,8,utf8_decode("ASSINATURA: ___________________________"),0,1);

// Sanitiza o nome para evitar espaços e caracteres especiais problemáticos
$nomeSanitizado = preg_replace('/[^A-Za-z0-9_\-]/', '_', $nome);

// Monta o nome do arquivo
$nomeArquivo = "TERMO_DE_ACEITE_SOLICITACAO_DE_PORTABILIDADE_" . $nomeSanitizado . ".pdf";

// Gera o PDF com esse nome
$pdf->Output('I', $nomeArquivo);}
?>
