<?php
# $Id: squarea3e.php 1733 2015-10-25 18:09:21Z lbayuk $
# PHPlot test: Squared and Squared Area (3e)
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => 'Stacked Squared Area, Borders, Axis Data Labels',
  'plot_type' => 'stackedsquaredarea',
  'dataset' => 2,
  'borders' => TRUE,
  'axis_data_labels' => TRUE,
  );
require 'squarea.php';
