<?php
    require_once "php/conexion.php";
    $conexion=conexion();
    $sql="SELECT resultado,id_usuario from datos";
    $result=mysqli_query($conexion,$sql);
    $valoresX=array();
    $valoresY=array();

    while ($ver=mysqli_fetch_row($result)){
        $valoresX[]=$ver[1];
        $valoresY[]=$ver[0];
    }

    $datosX=json_encode($valoresX);
    $datosY=json_encode($valoresY);
?>
<div id="graficaBarras"></div>

<script type="text/javascript">
    function crearCadenaBarras(json){
       var parsed = JSON.parse(json);
        var arr=[];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }

</script>

<script type="text/javascript">
    
    datosX=crearCadenaBarras('<?php echo $datosX ?>');
    datosY=crearCadenaBarras('<?php echo $datosY ?>');
	var data = [
	{
		x: datosX,
		y: datosY,
		type: 'bar'
	}
	];

	Plotly.newPlot('graficaBarras', data);
</script>