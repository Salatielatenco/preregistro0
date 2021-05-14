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


<div id="graficaLineal"></div>

<script type="text/javascript">
    function crearCadenaLineal(json){
       var parsed = JSON.parse(json);
        var arr=[];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }

</script>

<script type="text/javascript">
    
    datosX=crearCadenaLineal('<?php echo $datosX ?>');
    datosY=crearCadenaLineal('<?php echo $datosY ?>');
    
	var trace1 = {
		x: datosX,
		y: datosY,//[5,10, 15, 20, 25, 30, 35, 40, 45, 50]
		type: 'scatter'
	};


	var data = [trace1];

	Plotly.newPlot('graficaLineal', data);
</script>