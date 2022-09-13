<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("buuotk45mxbsykpduhlc-mysql.services.clever-cloud.com","ugvevacy1aawvkr4","2aqR5wJ91QLSPaTne1D4","buuotk45mxbsykpduhlc");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }