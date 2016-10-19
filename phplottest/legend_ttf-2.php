<?php
# $Id: legend_ttf-2.php 1001 2011-08-08 02:22:55Z lbayuk $
# SetLegendStyle - TrueTrype, right aligned text
$tp = array(
  'suffix' => ' (TrueType, text=right)',   # Title part 2
  'use_ttf' => True,       # True to use TTF text, False for GD
  'ttfsize' => 16,    # TrueType font size in points
  'textalign' => 'right', # Legend Text Align. If NULL, don't call SetLegendStyle
  'text' => array(          # Legend array text, NULL to use built-in data.
     'Line 1 text', 'oxzz', 'Line 3', 'Ppq 4', 'Line 5'),
      
  );
require 'legend_--.php';
