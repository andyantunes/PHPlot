<?php
# $Id: dlexformat2h.php 1233 2012-03-24 16:56:18Z lbayuk $
# PHPlot test: Data label extended custom formatting - 2h, thinbarline (horiz)
# This is a parameterized test. See the script named at the bottom for details.
$plot_type = 'thinbarline';
$data_type = 'data-data-yx';
$nx = 25;
$ny = 1;
$dvls = False; // This plot & data type does not do Data Value Labels.
require 'dlexformat.php';
