<html>
<head>
</head>
<?php
     include("conexion.php") ;
     $clavevrg=$_POST[ 'clavevrg' ];
     $nombrevrg=$_POST['nombrevrg'];
       $edadvrg=$_POST['edadvrg'];

        $fotovr=addslashes(file_get_contents($_FILES['fotovr']['tmp_name']));

         $query=("INSERT INTO fotovrg VALUES('$clavevrg','$nombrevrg','$edadvrg','$fotovr')");

        $resultado=$conexion->query($query);

          if( $resultado){
	          echo"listo";
		  }
	           else{
		    echo "insercion no exitosa";
			   }

?>
</body>
</html>