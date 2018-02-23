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
<form method="GET" name="medicos" id="formMedicos" action="index1.php" onclick="buscar()">
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
	$miconsulta="SELECT h.dia,h.horaIn,h.horaFin,m.apellido
	FROM horario h 
	INNER JOIN medico m ON h.idMedico = m.idMedico 
	WHERE h.idMedico = ".$_GET['medicos'];
	$resultado1=mysqli_query($conexion,$miconsulta);
	$filas=mysqli_fetch_array($resultado1);
?>
<h1>Agenda Dr.<?php echo $filas['apellido']; ?></h1>
<table border="1">	
	<tr>
    	<th></th>
		<th <?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes'){
				?> bgcolor="#00FF66"; <?php
		}
		}
		?> >Lunes</th>
        <th <?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes'){
				?> bgcolor="#00FF66"; <?php
		}
		}
		?> >Martes</th>
        <th <?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles'){
				?> bgcolor="#00FF66"; <?php
		}
		}
		?> >Miercoles</th>
        <th <?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves'){
				?> bgcolor="#00FF66"; <?php
		}
		}
		?> >Jueves</th>
        <th <?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes'){
				?> bgcolor="#00FF66"; <?php
		}
		}
		?> >Viernes</th>
    	<th <?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado'){
				?> bgcolor="#00FF66"; <?php
		}
		}
		?> >Sabado</th>
    </tr>
    <tr>
    	<td>08:00</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '08:00:00'>=$filas['horaIn'] && '08:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '08:00:00'>=$filas['horaIn'] && '08:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '08:00:00'>=$filas['horaIn'] && '08:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '08:00:00'>=$filas['horaIn'] && '08:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '08:00:00'>=$filas['horaIn'] && '08:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '08:00:00'>=$filas['horaIn'] && '08:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>08:30</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '08:30:00'>=$filas['horaIn'] && '08:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '08:30:00'>=$filas['horaIn'] && '08:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '08:30:00'>=$filas['horaIn'] && '08:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '08:30:00'>=$filas['horaIn'] && '08:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '08:30:00'>=$filas['horaIn'] && '08:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '08:30:00'>=$filas['horaIn'] && '08:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>09:00</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '09:00:00'>=$filas['horaIn'] && '09:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '09:00:00'>=$filas['horaIn'] && '09:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '09:00:00'>=$filas['horaIn'] && '09:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '09:00:00'>=$filas['horaIn'] && '09:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '09:00:00'>=$filas['horaIn'] && '09:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '09:00:00'>=$filas['horaIn'] && '09:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>09:30</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '09:30:00'>=$filas['horaIn'] && '09:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '09:30:00'>=$filas['horaIn'] && '09:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '09:30:00'>=$filas['horaIn'] && '09:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '09:30:00'>=$filas['horaIn'] && '09:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '09:30:00'>=$filas['horaIn'] && '09:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '09:30:00'>=$filas['horaIn'] && '09:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>10:00</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '10:00:00'>=$filas['horaIn'] && '10:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '10:00:00'>=$filas['horaIn'] && '10:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '10:00:00'>=$filas['horaIn'] && '10:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '10:00:00'>=$filas['horaIn'] && '10:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '10:00:00'>=$filas['horaIn'] && '10:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '10:00:00'>=$filas['horaIn'] && '10:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>10:30</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '10:30:00'>=$filas['horaIn'] && '10:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '10:30:00'>=$filas['horaIn'] && '10:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '10:30:00'>=$filas['horaIn'] && '10:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '10:30:00'>=$filas['horaIn'] && '10:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '10:30:00'>=$filas['horaIn'] && '10:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '10:30:00'>=$filas['horaIn'] && '10:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>11:00</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '11:00:00'>=$filas['horaIn'] && '11:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '11:00:00'>=$filas['horaIn'] && '11:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '11:00:00'>=$filas['horaIn'] && '11:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '11:00:00'>=$filas['horaIn'] && '11:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '11:00:00'>=$filas['horaIn'] && '11:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '11:00:00'>=$filas['horaIn'] && '11:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>11:30</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '11:30:00'>=$filas['horaIn'] && '11:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '11:30:00'>=$filas['horaIn'] && '11:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '11:30:00'>=$filas['horaIn'] && '11:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '11:30:00'>=$filas['horaIn'] && '11:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '11:30:00'>=$filas['horaIn'] && '11:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '11:30:00'>=$filas['horaIn'] && '11:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>12:00</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '12:00:00'>=$filas['horaIn'] && '12:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '12:00:00'>=$filas['horaIn'] && '12:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '12:00:00'>=$filas['horaIn'] && '12:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '12:00:00'>=$filas['horaIn'] && '12:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '12:00:00'>=$filas['horaIn'] && '12:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '12:00:00'>=$filas['horaIn'] && '12:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>16:00</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '16:00:00'>=$filas['horaIn'] && '16:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '16:00:00'>=$filas['horaIn'] && '16:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '16:00:00'>=$filas['horaIn'] && '16:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '16:00:00'>=$filas['horaIn'] && '16:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '16:00:00'>=$filas['horaIn'] && '16:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '16:00:00'>=$filas['horaIn'] && '16:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>16:30</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '16:30:00'>=$filas['horaIn'] && '16:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '16:30:00'>=$filas['horaIn'] && '16:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '16:30:00'>=$filas['horaIn'] && '16:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '16:30:00'>=$filas['horaIn'] && '16:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '16:30:00'>=$filas['horaIn'] && '16:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '16:30:00'>=$filas['horaIn'] && '16:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>17:00</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '17:00:00'>=$filas['horaIn'] && '17:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '17:00:00'>=$filas['horaIn'] && '17:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '17:00:00'>=$filas['horaIn'] && '17:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '17:00:00'>=$filas['horaIn'] && '17:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '17:00:00'>=$filas['horaIn'] && '17:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '17:00:00'>=$filas['horaIn'] && '17:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>17:30</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '17:30:00'>=$filas['horaIn'] && '17:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '17:30:00'>=$filas['horaIn'] && '17:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '17:30:00'>=$filas['horaIn'] && '17:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '17:30:00'>=$filas['horaIn'] && '17:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '17:30:00'>=$filas['horaIn'] && '17:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '17:30:00'>=$filas['horaIn'] && '17:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>18:00</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '18:00:00'>=$filas['horaIn'] && '18:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '18:00:00'>=$filas['horaIn'] && '18:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '18:00:00'>=$filas['horaIn'] && '18:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '18:00:00'>=$filas['horaIn'] && '18:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '18:00:00'>=$filas['horaIn'] && '18:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '18:00:00'>=$filas['horaIn'] && '18:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>18:30</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '18:30:00'>=$filas['horaIn'] && '18:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '18:30:00'>=$filas['horaIn'] && '18:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '18:30:00'>=$filas['horaIn'] && '18:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '18:30:00'>=$filas['horaIn'] && '18:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '18:30:00'>=$filas['horaIn'] && '18:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '18:30:00'>=$filas['horaIn'] && '18:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>19:00</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '19:00:00'>=$filas['horaIn'] && '19:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '19:00:00'>=$filas['horaIn'] && '19:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '19:00:00'>=$filas['horaIn'] && '19:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '19:00:00'>=$filas['horaIn'] && '19:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '19:00:00'>=$filas['horaIn'] && '19:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '19:00:00'>=$filas['horaIn'] && '19:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>19:30</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '19:30:00'>=$filas['horaIn'] && '19:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '19:30:00'>=$filas['horaIn'] && '19:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '19:30:00'>=$filas['horaIn'] && '19:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '19:30:00'>=$filas['horaIn'] && '19:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '19:30:00'>=$filas['horaIn'] && '19:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '19:30:00'>=$filas['horaIn'] && '19:30:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
    <tr>
    	<td>20:00</td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='lunes' && '20:00:00'>=$filas['horaIn'] && '20:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='martes' && '20:00:00'>=$filas['horaIn'] && '20:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='miercoles' && '20:00:00'>=$filas['horaIn'] && '20:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='jueves' && '20:00:00'>=$filas['horaIn'] && '20:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='viernes' && '20:00:00'>=$filas['horaIn'] && '20:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
        <td><?php 
	$resultado1=mysqli_query($conexion,$miconsulta);
		while($filas=mysqli_fetch_array($resultado1)){
		 if ($filas['dia']=='sabado' && '20:00:00'>=$filas['horaIn'] && '20:00:00'<=$filas['horaFin']){
				?> <input type="text" size="15" /> <?php
		}
		}
		?></td>
    </tr>
</table>
<?php
}
?>
</body>
</html>