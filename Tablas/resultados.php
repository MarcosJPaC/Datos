<html>
    <head>
    <title>
        Calculando resultados
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    
    <body>
        <center>
        <?php
        $multiplo=$_GET["calculo"];
        $rango1=$_GET["rango1"];
        $rango2=$_GET["rango2"];
     echo '
     <form action="final.php" class="col-2">
     <input type="hidden" id="range2" name="range2" value="'.$rango2.'">
     <input type="hidden" id="range1" name="range1" value="'.$rango1.'">
     <input type="hidden" id="calculo1" name="calculo1" value="'.$multiplo.'">

     
     ';
     
     if($rango1>$rango2)  
      {
        for ($rango2; $rango2 <= $rango1; $rango2++) { 
            echo '<div class="col-auto">
            <label class= "form-label" for="fname">'.$multiplo.'x'.$rango2.'</label>
        <input class="form-control" type="text" id="nose'.$rango2.'" name="nose'.$rango2.'"></div>

        ';
        }
        
        echo '<div class="col-auto"><input class="btn btn-primary" type="submit" value="Calcular Resultado"></div>';
     }
     else if ($rango1<$rango2)
     {
        for ($rango1; $rango1 <= $rango2; $rango1++) { 
            echo '<label class ="form-label"for="fname">'.$multiplo.'x'.$rango1.'</label>
        <input class="form-control" type="text" id="nose'.$rango1.'" name="nose'.$rango1.'">

        ';
        }
        
        echo '<br><input class="btn btn-primary" type="submit" value="Calcular Resultado">';

     }
     
        ?>
        </form>
    </center>
    </body>
</html>