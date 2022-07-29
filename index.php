<?php 
require_once 'fpdf.php';


class pdf extends FPDF
{

	function header(){											//bu method pdf sayfasının en başında yer alır ve sınıftan nesne oluşturduktan sonra 																// otomatik çalışır tekrar talıştırmaya gerek yoktur



		//$this->Image('deneme.jpg');    						pdf e resim ekleme methodu
		//$this->SetTextColor(r,g,b)     						yazı rengini belirliyoruz
		
		$this->Cell(25); 										
		$this->Write(5,'Merhaba Header');
		$this->Ln(5);													//alt satırla aradaki boşlu şu şekilde belirtiyoruz
		$this->Write(5,'Bu bir Alt Başlıktır');

	}

	function Content(){ 										//bu methodu biz kendimiz oluşturuyoruz ve burayı kullanmak için sınıf oluşturduktan
																 // methodu çağırmamız lazım 
		$this->Ln(5);
		$this->Write(5,'Merhaba body');
		$this->Ln(5);
		$this->Write(5,'Bu bir body yazısıdır');

	}
	function footer(){											//bu method pdf sayfasının en başında yer alır ve sınıftan nesne oluşturduktan sonra 																// otomatik çalışır tekrar talıştırmaya gerek yoktur

		$this->SetY(-20);												//footer yazısının nerden başlayacağının konumunu belirliyoruz;
		$this->Cell(70);
		$this->Write(5,'Merhaba Footer');
		$this->Ln(5);
		$this->Write(5,'Bu bir Footer yazısıdır');

	}
}

$pdf=new pdf();
$pdf->AliasNbPages();
$pdf->setFont('Arial','',15);
$pdf->AddPage();									//oluşturduğumuz content methodu sayfaya eklemek  için fdpf sınıfnda tanımlı olan şu methodu 
$pdf->Content();										//çağırıyoruz..
$pdf->Output();

?>