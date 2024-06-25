<?php
require('fpdf/fpdf.php');

$pdf = new FPDF('P', 'mm', 'A4');

// Add a new page
$pdf->AddPage();

// Set the font
$pdf->SetFont('Arial', 'B', 12);

// Create the form title
$pdf->Cell(0, 10, 'SOLICITUD DE PERMISO', 0, 1, 'C');

// Add a line below the title
$pdf->Line(10, 15, 287, 15);

// Create the form fields
$pdf->SetFont('Arial', '', 10);

// Form field: Elaborado
$pdf->Cell(50, 10, 'ELABORADO:', 0, 0, 'L');
$pdf->Cell(50, 10, '', 1, 0); // Blank space for signature

// Form field: Firma del Solicitante
$pdf->Cell(50, 10, 'FIRMA DEL SOLICITANTE:', 0, 0, 'L');
$pdf->Cell(50, 10, '', 1, 0); // Blank space for signature

// Form field: Firma del Supervisor
$pdf->Cell(50, 10, 'FIRMA DEL SUPERVISOR:', 0, 0, 'L');
$pdf->Cell(50, 10, '', 1, 0); // Blank space for signature

// Form field: Firma del Director
$pdf->Cell(50, 10, 'FIRMA DEL DIRECTOR:', 0, 0, 'L');
$pdf->Cell(50, 10, '', 1, 0); // Blank space for signature

// Add a line below the form fields
$pdf->Line(10, 35, 287, 35);

// Create the form section titles
$pdf->SetFont('Arial', 'B', 10);

// Form section title: Datos del Solicitante
$pdf->Cell(50, 10, 'DATOS DEL SOLICITANTE', 0, 0, 'L');

// Form section title: Solicitud de Permiso
$pdf->Cell(147, 10, 'SOLICITUD DE PERMISO', 0, 0, 'C');

// Add a line below the section titles
$pdf->Line(10, 45, 287, 45);

// Create the form fields for Datos del Solicitante
$pdf->SetFont('Arial', '', 10);

// Form field: Dependencia Organizativa
$pdf->Cell(50, 10, 'DEPENDENCIA ORGANIZATIVA:', 0, 0, 'L');
$pdf->Cell(147, 10, '', 1, 0); // Text field for dependency

// Form field: Apellidos
$pdf->Cell(50, 10, 'APELLIDOS:', 0, 0, 'L');
$pdf->Cell(147, 10, '', 1, 0); // Text field for last name

// Form field: Nombres
$pdf->Cell(50, 10, 'NOMBRES:', 0, 0, 'L');
$pdf->Cell(147, 10, '', 1, 0); // Text field for first name

// Form field: Cédula de Identidad
$pdf->Cell(50, 10, 'CÉDULA DE IDENTIDAD:', 0, 0, 'L');
$pdf->Cell(147, 10, '', 1, 0); // Text field for ID number

// Add a line below the Datos del Solicitante fields
$pdf->Line(10, 65, 287, 65);

// Create the form fields for Solicitud de Permiso
$pdf->SetFont('Arial', '', 10);

// Form field: Motivo del Permiso
$pdf->Cell(50, 10, 'MOTIVO DEL PERMISO:', 0, 0, 'L');
$pdf->MultiCell(147, 10, '', 1, 'L'); // Multi-line text field for reason
// Form field: Comprobante a Presentar
$pdf->Cell(50, 10, 'COMPROBANTE A PRESENTAR:', 0, 0, 'L');
$pdf->Cell(147, 10, '', 1, 0); // Text field for proof

// Form field: Fecha de Salida
$pdf->Cell(50, 10, 'FECHA DE SALIDA:', 0, 0, 'L');
$pdf->Cell(50, 10, '', 1, 0); // Text field for departure date

// Form field: Hora de Salida
$pdf->Cell(50, 10, 'HORA DE SALIDA:', 0, 0, 'L');
$pdf->Cell(50, 10, '', 1, 0); // Text field for departure time

// Form field: Fecha de Regreso
$pdf->Cell(50, 10, 'FECHA DE REGRESO:', 0, 0, 'L');
$pdf->Cell(50, 10, '', 1, 0); // Text field for return date

// Form field: Hora de Regreso
$pdf->Cell(50, 10, 'HORA DE REGRESO:', 0, 0, 'L');
$pdf->Cell(50, 10, '', 1, 0); // Text field for return time

// Add a line below the Solicitud de Permiso fields
$pdf->Line(10, 115, 287, 115);

// Create a signature block
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(147, 10, 'OBSERVACIONES:', 0, 0, 'L');
$pdf->Cell(140, 10, '', 1, 0); // Blank space for observations

// Add a line below the signature block
$pdf->Line(10, 125, 287, 125);

// Output the PDF


$pdf->Output();

?>
