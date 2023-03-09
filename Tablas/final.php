<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="stylles.css" rel="stylesheet">
    <title>
        Tablas de multiplicar
    </title>
  
</head>
    <body class="p-3 m-0 border-0 bd-example bd-example-row">
       <center>
        <?php     
   $servername = "localhost";
   $username = "root";
   $password = "abc";
   $dbname = "registrotablas";
   
   $conn = new mysqli($servername, $username, $password, $dbname);
   
   // Verificar la conexión
   if ($conn->connect_error) {
     die("Conexión fallida: " . $conn->connect_error);
   }
   
   // Preparar la consulta SQL
   $sql = "INSERT INTO Tablas (nombre, apellido, tablademultiplicar,rangoinicial,rangofinal,resultado,correoelectronico) VALUES ('prueba','prueba',5,5,5,5,'ejemplo')";
   
   // Ejecutar la consulta
   if ($conn->query($sql) === TRUE) {
     echo "Los datos se han insertado correctamente.";
   } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
   }
   
   // Cerrar la conexión
   $conn->close();

       $puntos=0;
        $contador=$_GET["calculo1"];
        $range1=$_GET["range1"];
        $range2=$_GET["range2"];

        
        if($range1>$range2){
            echo '                
            
            <div class="row justify-content-md-center ">
            <div id="columna1" class="col-1 bg-info">
            <p>Tabla</p>
            </div>
            <div id="columna1" class="col-1 bg-info">
            <p>Respuesta</p>
            </div>
            <div  id="columna1" class="col-1 bg-info">
            <p>Respuesta correcta</p>
            </div>
            </div>
            '
            ;
            for ($i=$range2;$i <=$range1 ; $i++) { 
                $resultados=$_GET["nose".$i];
                $multiplicacion= ($contador*$i);
                $colores="bg-danger";
                $icono='<i class="bi bi-x-circle"></i>';
               
                
                if($resultados==$multiplicacion){
                    $colores="bg-success";
                    $icono='<i class="bi bi-check2-circle"></i>';

                }
            
                
               
                echo '
                
                <div class="row justify-content-md-center">
                <div id="columna1" class=" col-1">
                <p style="color: black">'.$contador.'x'.$i.'</div> <div id="columna1" class="col-1 '.$colores.'">
                '.$resultados.''.$icono.'</p> </div>
                <div id="columna1" class="col-1 ">
                <p>'.$multiplicacion.'</p>
                </div>
                </div>
                
                
                
                ';
             
                
                if ($resultados==$multiplicacion) {
                    
                    $puntos++;
                }
                else {
    
                }
            }
            echo '<br> <h1>El puntaje es : '.$puntos.'</h1>';

        }
        else if($range2>$range1){
            echo '                
            
            <div class="row justify-content-md-center ">
            <div id="columna1" class="col-1 bg-info">
            <p>Tabla</p>
            </div>
            <div id="columna1" class="col-1 bg-info">
            <p>Respuesta</p>
            </div>
            <div  id="columna1" class="col-1 bg-info">
            <p>Respuesta correcta</p>
            </div>
            </div>
            '
            ;



            for ($i=$range1; $i <=$range2 ; $i++) { 
                $resultados=$_GET["nose".$i];
                $multiplicacion= ($contador*$i);
                $colores="bg-danger";
                $icono='<i class="bi bi-x-circle"></i>';
                if($resultados==$multiplicacion){
                    $colores="bg-success";
                    $icono='<i class="bi bi-check2-circle"></i>';
                }
            
                
               
                echo '

                <div class="row justify-content-md-center">
                <div id="columna1" class=" col-1">
                <p style="color: black">'.$contador.'x'.$i.'</div> <div id="columna1" class="col-1 '.$colores.'">
                '.$resultados.''.$icono.'</p> </div>
                <div id="columna1" class="col-1 ">
                <p>'.$multiplicacion.'</p>
                </div>
                </div>
                
                
                
                ';
             
                
                if ($resultados==$multiplicacion) {
                    
                    $puntos++;
                }
                else {
    
                }
            }
            echo '<br> <h1>El puntaje es : '.$puntos.' de '.($i-2).'</h1>';

        }
       



?>
</center> 
    </body>
</html>