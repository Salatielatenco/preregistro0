<!DOCTYPE html>
<html>
<head>
	<title>Acordeon</title>
	<?php require_once "scripts.php"; ?>
</head>
<body>
	<div class="container">
	    <br>
	    <a href="#sec" class="btn btn-primary" data-toggle="collapse">Mostar / Ocultar</a>
	    <div class="collapse" id="sec">
	        <br>
	        <div class="well"> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem molestiae ea repellendus officiis, vero, nemo voluptatibus eius autem quas unde ipsum placeat quia rem modi, asperiores cupiditate nostrum iste, doloribus.</p> </div>
	    </div>
	    <br><br><br>
	    <div class="panel-group" id="accordion" role="tablist">
	        <div class="panel panel-primary">
	            <div class="panel panel-heading" role="tab" id="heading1">
	                <h4 class="panel-title">
	                    <a href="#collapse1"  data-toggle="collapse" data-parent="#accordion"> Encabezado #1</a>
	                </h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse in">
				    <div class="panel-body">
				    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, neque nemo sunt non impedit rem, dolorem eos ducimus deserunt earum enim, quam illum voluptatum dolores quas fuga quidem facilis aspernatur.
				    </div>
				    <a href="#collapse1" class="btn btn-primary" data-toggle="collapse">Mostar / Ocultar</a>
				</div>
            </div>
            
            <div class="panel panel-primary">
	            <div class="panel panel-heading" role="tab" id="heading2">
	                <h4 class="panel-title">
	                    <a href="#collapse2"  data-toggle="collapse" data-parent="#accordion"> Encabezado #2</a>
	                </h4>
				</div>
				<div id="collapse2" class="panel-collapse collapse">
				    <div class="panel-body">
				    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, neque nemo sunt non impedit rem, dolorem eos ducimus deserunt earum enim, quam illum voluptatum dolores quas fuga quidem facilis aspernatur.
				    </div>
				</div>
            </div>
            
            <div class="panel panel-primary">
	            <div class="panel panel-heading" role="tab" id="heading3">
	                <h4 class="panel-title">
	                    <a href="#collapse3"  data-toggle="collapse" data-parent="#accordion"> Encabezado #3</a>
	                </h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse">
				    <div class="panel-body">
				    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, neque nemo sunt non impedit rem, dolorem eos ducimus deserunt earum enim, quam illum voluptatum dolores quas fuga quidem facilis aspernatur.
				    </div>
				</div>
            </div>
	    </div>
	</div>
</body>
</html>