<?php
# $Id: missingh4.php 1652 2013-11-13 22:10:17Z lbayuk $
# PHPlot test: Horizontal Lines with missing data - 4
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => " (linepoints, No BrokenLines)",   # Title part 2
  'DBLines' => False,       # DrawBrokenLines: True or False or NULL to omit
  'PType' => 'linepoints',  # Plot Type: lines, linepoints, squared
  'horizontal' => True, # Horizontal plot
  );
require 'missing.php';
