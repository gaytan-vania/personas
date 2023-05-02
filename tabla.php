<html>
    <a href="css.htmal">INICIO</a>
    <head>
</head>
<body background="mn.jpg">
    <center>
        <i> <font color="purple"><h1>Datos a consultar</h1></font></i>
        <table width="50%" height="60%" border="2" bgcolor="pink">
            <tr bgcolor="white">
                <th colspan="1"> <a href="formulario.php"><h3>Nuevo registro </a></h3></th>
</tr>
<tr>
    <td>Clave</td>
    <td>Nombre</td>
    <td>Edad</td>
    <td>Foto</td>
    <td>Modificar</td>
    <td>Eliminar</td>
</tr>
<?php
include("conexion.php");
$query="SELECT * FROM fotovrg";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){

    ?>



<tr>

<td><?php echo $row['Clave'];?></td>
<td><?php echo $row['Nombre'];?></td>
<td><?php echo $row['Edad'];?></td>

<td><img height="200px" width="200px" src="data:image/jpg;base64,
<?php echo base64_encode($row['Foto']);?>"/></td>


<td><a href="formulario_modificar.php?cve_usuario=<?php echo $row['Clave'];?>"> Modificar</a></td>
<td><a href="eliminar.php?cve_usuario=<?php echo $row['Clave'];?>">Eliminar</a></td>

</tr>
<?php
}
?>
</table>
</center>
</body>