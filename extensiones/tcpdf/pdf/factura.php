<?php

require_once "../../../controladores/ventas.controlador.php";
require_once "../../../modelo/ventas.modelo.php";

class imprimirFactura{

	public $codigo;

	public function traerImpresionFactura(){

		// traemos informacion desde la venta

	$itemVenta = "codigo";
	$valorVenta = $this->codigo;

	$respuestaVenta =ControladorVentas::ctrMostrarVentas($itemVenta,$valorVenta);

	// $fecha =substr($respuestaVenta["fecha"],0-8);
	// $productos = json_decode($respuestaVenta["productos"],true);
	// $neto=number_format($respuestaVenta["neto"],2);
	// $impuesto=numfmt_format($respuestaVenta["impuesto"],2);
	// $total =number_format($respuestaVenta["total"],2);

require_once('tcpdf_include.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->startPageGroup();

$pdf->AddPage();

// ---------------------------------------------------------

$bloque1 = <<<EOF

	<table>
		
		<tr>
			
			<td style="width:150px"><img src="images/logo-negro-bloque.jpg"></td>

			<td style="background-color:white; width:140px">
				
				<div style="font-size:8.5px; text-align:right; line-height:15px;">
					
					<br>
					RUC: 

					<br>
					Dirección: Santa Ana y Balta

				</div>

			</td>

			<td style="background-color:white; width:140px">

				<div style="font-size:8.5px; text-align:right; line-height:15px;">
					
					<br>
					Teléfono: 948 609 789
					
					<br>
					bonita@gmail.com

				</div>
				
			</td>

			<td style="background-color:white; width:110px; text-align:center; color:red"><br><br>FACTURA N.<br>$valorVenta</td>

		</tr>

	</table>

EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');

//SALIDA DEL ARCHIVO 

$pdf->Output('factura.pdf');
}


}

$factura = new imprimirFactura();
$factura -> codigo  = $_GET["codigo"];
$factura -> traerImpresionFactura();


?>