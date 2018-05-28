#!/usr/bin/env php
<?php

    $ranges = array(
      array( 70069628, 70069632 ),
      array( 70069633, 70069654 ),
      array( 70080635, 70080638 ),
      array( 70108687, 70108700 ),
      array( 70126223, 70126248 ),
      array( 70151933, 70151958 ),
      array( 70189006, 70189031 ),
      array( 70210965, 70210988 ),
      array( 70286845 , 70286867 )
    );

    $range = $ranges[array_rand ($ranges, 1)];

    $id = rand ( $range[0] , $range[1] );

    $url = "https://www.netflix.com/watch/$id";
    exec("open '$url'");
?>
