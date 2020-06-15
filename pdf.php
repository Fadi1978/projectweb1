<?php
   
    require("fpdf/fpdf.php");
    $db=new PDO("mysql:host=localhost;dbname=produit", "root", "");
   
    class myPDF extends FPDF
    {
   
    function header()
    {
    $this->SetFont("Arial","B",14);
            $this->Cell(10,10,"Produits",'C');
            $this->Ln(20);
            $this->Cell(5,5,"liste des Produits:",'C');
            $this->ln();
    }
    function headertable()
    {
    $this->SetFont('Times','B',12);
    $this->Cell(40,10,'ID',1,0,'C');
    $this->Cell(40,10,'nom_produit',1,0,'C');
    $this->Cell(40,10,'type',1,0,'C');
    $this->Cell(40,10,'nom_categorie',1,0,'C');
    $this->ln();
    }
    function viewsTable($db)
    {
    $this->SetFont('times','',12);
    $stmt = $db->query("SElECT * From produit");
            while($data = $stmt->fetch(PDO::FETCH_OBJ))
            {
       $this->Cell(40,10,$data->id_produit,1,0,'C');
       $this->Cell(40,10,$data->nom_produit,1,0,'L');
       $this->Cell(40,10,$data->type,1,0,'L');
       $this->Cell(40,10,$data->nom_categorie,1,0,'C');
       $this->ln();
            }

    }
    }
    $pdf=new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headertable();
    $pdf->viewsTable($db);
    $pdf->output("Produits.pdf", "D");


?>