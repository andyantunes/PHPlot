<?php
# $Id: boxplot2.php 1615 2013-04-23 22:15:07Z lbayuk $
# PHPlot test: Box plot with data variations
# See the script named below for details
#   Colors:  (box, belt, outliers, whiskers & Ts)
$data_colors = array('black', 'blue', 'DarkGreen', 'maroon');
#   Widths:  (box, belt, whiskers & Ts)
$line_widths = array(2, 6, 3);
$subtitle = "Set colors and line widths";
require 'boxplot.php';
