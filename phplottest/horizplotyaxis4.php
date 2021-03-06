<?php
# $Id: horizplotyaxis4.php 1001 2011-08-08 02:22:55Z lbayuk $
# PHPlot test: Horizontal plot Y axis default - thinbarline, data <0 and >0
require_once 'phplot.php';
$data = array(
   array('A', -2),
   array('B',  7),
   array('C',  5),
   array('D', -3),
);
$p = new PHPlot();
$p->SetTitle('Y Axis Position - horizontal thinbarline, positive and negative data');
$p->SetDataType('text-data-yx');
$p->SetDataValues($data);
$p->SetPlotType('thinbarline');
$p->SetXTickIncrement(1);
$p->SetYTickPos('none');
$p->DrawGraph();
