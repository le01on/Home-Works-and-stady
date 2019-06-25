<?php
   $arr = ['h', 'e', 'l', 'l', 'o'];

   $reverse = [];

   for($i = (count($arr) - 1); $i >=0; $i--){
       echo $i;
       array_push($reverse, $arr[$i]);
   }
   print_r($reverse);