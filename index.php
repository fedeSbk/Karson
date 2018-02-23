<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script src="js/index.js"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>

<?php
include 'conexion.php';
$medicos="SELECT * FROM medico";
$resultado=mysqli_query($conexion,$medicos);
?>
<form method="GET" name="medicos" id="formMedicos" action="index.php" onclick="buscar()">
medicos: <select name="medicos">
     <?php
while($rows=mysqli_fetch_array($resultado)){
?><option value="<?php echo $rows['idMedico']?>" <?php if (isset($_GET['medicos'])&&($_GET['medicos']=$rows['idMedico'])){?> selected<?php } ?>><?php echo $rows['nombre']?></option>
<?php
	}
	?></select>
    <input type="submit" value="buscar" />
</form>
<?php
if (isset($_GET['medicos'])){
	$miconsulta="SELECT h.dia
	FROM horario h 
	INNER JOIN medico m ON h.idMedico = m.idMedico 
	WHERE h.idMedico = ".$_GET['medicos'];
	$resultado1=mysqli_query($conexion,$miconsulta);
	echo $miconsulta;?>
	<table border="1">
	<tr>
		<th></th>
    	<th<?php while ($filas=mysqli_fetch_array($resultado1)){
			if ($filas['dia']=='lunes'){
				?> bgcolor="#00FF66"<?php }
				
				} ?>>Lunes</th>
		<th<?php 
		$miconsulta="SELECT h.dia
	FROM horario h 
	INNER JOIN medico m ON h.idMedico = m.idMedico 
	WHERE h.idMedico = ".$_GET['medicos'];
	$resultado1=mysqli_query($conexion,$miconsulta);
		while ($filas=mysqli_fetch_array($resultado1)){
			if ($filas['dia']=='martes'){
				?> bgcolor="#00FF66"<?php }
				
				} ?>>Martes</th>
        <th<?php 
		$miconsulta="SELECT h.dia
	FROM horario h 
	INNER JOIN medico m ON h.idMedico = m.idMedico 
	WHERE h.idMedico = ".$_GET['medicos'];
	$resultado1=mysqli_query($conexion,$miconsulta);
		while ($filas=mysqli_fetch_array($resultado1)){
			if ($filas['dia']=='miercoles'){
				?> bgcolor="#00FF66"<?php }
				
				} ?>>Martes</th>
        <th<?php 
		$miconsulta="SELECT h.dia
	FROM horario h 
	INNER JOIN medico m ON h.idMedico = m.idMedico 
	WHERE h.idMedico = ".$_GET['medicos'];
	$resultado1=mysqli_query($conexion,$miconsulta);
		while ($filas=mysqli_fetch_array($resultado1)){
			if ($filas['dia']=='jueves'){
				?> bgcolor="#00FF66"<?php }
				
				} ?>>Martes</th>
        <th<?php 
		$miconsulta="SELECT h.dia
	FROM horario h 
	INNER JOIN medico m ON h.idMedico = m.idMedico 
	WHERE h.idMedico = ".$_GET['medicos'];
	$resultado1=mysqli_query($conexion,$miconsulta);
		while ($filas=mysqli_fetch_array($resultado1)){
			if ($filas['dia']=='viernes'){
				?> bgcolor="#00FF66"<?php }
				
				} ?>>Martes</th>
        <th<?php 
		$miconsulta="SELECT h.dia
	FROM horario h 
	INNER JOIN medico m ON h.idMedico = m.idMedico 
	WHERE h.idMedico = ".$_GET['medicos'];
	$resultado1=mysqli_query($conexion,$miconsulta);
		while ($filas=mysqli_fetch_array($resultado1)){
			if ($filas['dia']=='sabado'){
				?> bgcolor="#00FF66"<?php }
				
				} ?>>Martes</th>
    </tr>
    <tr>
    	<td>08:00</td>
        <td> <?php
		$miconsulta="SELECT h.dia,h.horaIn,h.horaFin 
	FROM horario h 
	INNER JOIN medico m ON h.idMedico = m.idMedico 
	WHERE h.idMedico = ".$_GET['medicos'];
	$resultado1=mysqli_query($conexion,$miconsulta);
		while ($filas=mysqli_fetch_array($resultado1)){
		if (($filas['dia']=='lunes')&&($filas['horaIn']<='08:00:00')&&($filas['horaFin']>='08:00:00')){
		?>
       <input type="text" size="15" />
			<?php }
		}
			
		?>
        </td>
       <td> <?php
		$miconsulta="SELECT h.dia,h.horaIn,h.horaFin 
	FROM horario h 
	INNER JOIN medico m ON h.idMedico = m.idMedico 
	WHERE h.idMedico = ".$_GET['medicos'];
	$resultado1=mysqli_query($conexion,$miconsulta);
		while ($filas=mysqli_fetch_array($resultado1)){
		if (($filas['dia']=='martes')&&($filas['horaIn']<='08:00:00')&&($filas['horaFin']>='08:00:00')){
		?>
       <input type="text" size="15" />
			<?php }
		}
			
		?>
        </td>
       <td> <?php
		$miconsulta="SELECT h.dia,h.horaIn,h.horaFin 
	FROM horario h 
	INNER JOIN medico m ON h.idMedico = m.idMedico 
	WHERE h.idMedico = ".$_GET['medicos'];
	$resultado1=mysqli_query($conexion,$miconsulta);
		while ($filas=mysqli_fetch_array($resultado1)){
		if (($filas['dia']=='miercoles')&&($filas['horaIn']<='08:00:00')&&($filas['horaFin']>='08:00:00')){
		?>
       <input type="text" size="15" />
			<?php }
		}
			
		?>
        </td>
        <td> <?php
		$miconsulta="SELECT h.dia,h.horaIn,h.horaFin 
	FROM horario h 
	INNER JOIN medico m ON h.idMedico = m.idMedico 
	WHERE h.idMedico = ".$_GET['medicos'];
	$resultado1=mysqli_query($conexion,$miconsulta);
		while ($filas=mysqli_fetch_array($resultado1)){
		if (($filas['dia']=='jueves')&&($filas['horaIn']<='08:00:00')&&($filas['horaFin']>='08:00:00')){
		?>
       <input type="text" size="15" />
			<?php }
		}
			
		?>
        </td>
        <td> <?php
		$miconsulta="SELECT h.dia,h.horaIn,h.horaFin 
	FROM horario h 
	INNER JOIN medico m ON h.idMedico = m.idMedico 
	WHERE h.idMedico = ".$_GET['medicos'];
	$resultado1=mysqli_query($conexion,$miconsulta);
		while ($filas=mysqli_fetch_array($resultado1)){
		if (($filas['dia']=='viernes')&&($filas['horaIn']<='08:00:00')&&($filas['horaFin']>='08:00:00')){
		?>
       <input type="text" size="15" />
			<?php }
		}
			
		?>
        </td>
        <td> <?php
		$miconsulta="SELECT h.dia,h.horaIn,h.horaFin 
	FROM horario h 
	INNER JOIN medico m ON h.idMedico = m.idMedico 
	WHERE h.idMedico = ".$_GET['medicos'];
	$resultado1=mysqli_query($conexion,$miconsulta);
		while ($filas=mysqli_fetch_array($resultado1)){
		if (($filas['dia']=='sabado')&&($filas['horaIn']<='08:00:00')&&($filas['horaFin']>='08:00:00')){
		?>
       <input type="text" size="15" />
			<?php }
		}
			
		?>
        </td>
    </tr>
    <tr>
    	<td>08:30</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>09:00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>09:30</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>10:00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>10:30</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>11:00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>11:30</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>12:00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>16:00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>16:30</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>17:00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>17:30</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>18:00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>18:30</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>19:00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>19:30</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td>20:00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
	
	<?php }
?>
</body>
</html>