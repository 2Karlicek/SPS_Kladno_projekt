<?php
require_once("C:/xampp/php/PEAR/src/jpgraph.php");
require_once("C:/xampp/php/PEAR/src/jpgraph_pie.php");

// Data pro graf
$data = array(150, 21, 17, 14, 23);

// Vytvoření instance grafu
$graph = new PieGraph(500, 500);

// Nastavení titulu
$graph->title->Set("Výsledky voleb");

// Vytvoření instance grafu
$p1 = new PiePlot($data);

// Nastavení barvy a vzhledu
$p1->ShowBorder();
$p1->SetColor('black');
$p1->SetSliceColors(array('#1E90FF', '#2E8B57', '#ADFF2F', '#DC143C', '#BA55D3'));

// Přidání grafu do kontejneru
$graph->Add($p1);

// Vykreslení a zobrazení grafu přímo v prohlížeči
$graph->Stroke();
