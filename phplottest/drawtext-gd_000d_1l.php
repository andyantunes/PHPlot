<?php
# $Id: drawtext-gd_000d_1l.php 1001 2011-08-08 02:22:55Z lbayuk $
# Unit test: PHPlot DrawText function - GD, 0deg, one lines
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'textangle' => 0,   # Text angle. GD fonts only allow 0 and 90.
  'nlines' => 1,      # Number of lines of text
  );
require 'drawtext.php';
