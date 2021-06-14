<?php
      $num1=200;
      $num2=240;
      $num3=180;

      if($num1>$num2 && $num1>$num3){
        echo "The largest number is $num1";
      }

      else{

        if($num2>$num1 && $num2>$num3){
          echo "The largest number is $num2";
        }

        else
          echo "The largest number is $num3";
      }

?>