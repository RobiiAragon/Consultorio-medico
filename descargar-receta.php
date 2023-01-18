<?php

// Incluye la biblioteca DOMPDF
require_once 'librerias/dompdf/autoload.inc.php';

// Instancia de DOMPDF
$dompdf = new Dompdf\Dompdf();

// Carga el HTML
$html = file_get_contents('Consultorio/Consultorio-medico/receta.html');

// Establece el tamaño del papel y la orientación
$dompdf->setPaper('Letter', 'landscape');

// Carga el HTML al objeto DOMPDF
$dompdf->loadHtml($html);

// Renderiza el documento PDF
$dompdf->render();

// Envía el PDF al navegador
$dompdf->stream();

?>