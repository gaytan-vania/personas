<html>
  <head>
</head>
<body>
<?php
    $conexion=new mysqli("localhost", "root", "", "personas");
       if($conexion) {
	      echo "Conexion Exitosa";
         }
              else{
	        echo "Conexion no Exitosa";
}
     ?>
</body>
</html>