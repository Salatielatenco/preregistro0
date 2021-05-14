<!DOCTYPE html>
<html>
<head>
	<title>Acordeon</title>
	<?php require_once "scripts.php"; ?>
	<title>Examen de Ingreso ITMA II</title>
        <link rel="icon" type="image/ico" href="../img/favicon.ico" />
        <link rel="stylesheet" href="css/main.css" type="text/css" media="screen"/>
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
				<div id="collapse1" class="panel-collapse collapse ">
				    <div class="panel-body">
                        <form id="evaluacion" name="evaluacion">
                            
                            <p style="font-size:5rem; position: relative;">Razonamientos</p>
                            <label id="label1">1. ¿Cuánto es 2 + 2?</label><br>
                            <input type="radio" name="radio1" id="radio1"/><label>a. 4</label><br/>
                            <input type="radio" name="radio1" id="radio1" /><label>b. 2</label><br/>
                            <input type="radio" name="radio1" id="radio1" /><label>c. 3</label><br/>
                            <input type="radio" name="radio1" id="radio1" /><label>d. 5</label><br>
                            <input type="radio" name="radio1" id="radio1" /><label>e. 6</label>
                            <hr/>
                            
                            <label id="label1">2. ¿Como se dice Promedio en ingles?</label>
                            <p>
                                <input type="radio" name="radio2" id="radio2" /><label>a. Magazine</label><br/>
                                <input type="radio" name="radio2" id="radio2" /><label>b. Source</label><br/>
                                <input type="radio" name="radio2" id="radio2" /><label>c. Average</label><br/>
                                <input type="radio" name="radio2" id="radio2" /><label>d. Survey</label><br/>
                                <input type="radio" name="radio2" id="radio2" /><label>e. Route</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">3. ¿Como se dice Mantel en ingles?</label>
                            <p>
                                <input type="radio" name="radio3" id="radio3" /><label>a. Basket</label><br/>
                                <input type="radio" name="radio3" id="radio3" /><label>b. Camper</label><br/>
                                <input type="radio" name="radio3" id="radio3" /><label>c. Matches</label><br/>
                                <input type="radio" name="radio3" id="radio3" /><label>d. Blanket</label><br/>
                                <input type="radio" name="radio3" id="radio3" /><label>e. Mantel</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">4. ¿Como se dice Prohibir en ingles?</label>
                            <p>
                                <input type="radio" name="radio4" id="radio4" /><label>a. Forgive</label><br/> 
                                <input type="radio" name="radio4" id="radio4" /><label>b. Forget</label><br/>
                                <input type="radio" name="radio4" id="radio4" /><label>c. Freeze</label><br/>
                                <input type="radio" name="radio4" id="radio4" /><label>d. Feed</label><br/>
                                <input type="radio" name="radio4" id="radio4" /><label>e. Forbit</label><br/>
                            </p>
                            <hr/>
                            
                            <label id="label1">5. ¿Como se dice Esconder en ingles?</label>
                            <p>
                                <input type="radio" name="radio5" id="radio5"/><label>a. Wed</label><br/>
                                <input type="radio" name="radio5" id="radio5"/><label>b. Shine</label><br/>
                                <input type="radio" name="radio5" id="radio5"/><label>c. Hide</label><br/>
                                <input type="radio" name="radio5" id="radio5"/><label>d. Hug</label><br/>
                                <input type="radio" name="radio5" id="radio5"/><label>e. Lead</label><br/>
                            </p>
                            <hr/>
                            
                            <!--<a href="#collapse1" class="btn btn-primary" data-toggle="collapse">Mostar / Ocultar</a>-->
                            
                            <div style="text-align: center;">
                               <!--<a id="registrar" class="btn btn-primary" style="width:30%; height: 50px; font-size:2.3rem;" name="registrar" href="#collapse1" data-toggle="collapse" onclick="uno()">Resultado</a>-->
                               <button class="btn btn-danger" onclick=" return primero()" id="registrar" href="#collapse1"  data-toggle="collapse">prueba</button>
					       </div>
                       <button class="btn btn-danger" onclick="primero()" id="registrar">prueba</button>
                        </form>
				    </div>
				    
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
                        <form id="evaluacion2" name="evaluacion2">
                            
                            <label id="label1">6. ¿Como se dice Herencia en ingles?</label>
                            <p>
                                <input type="radio" name="radio6" id="radio6"/><label>a. Pilgrimage</label><br/>
                                <input type="radio" name="radio6" id="radio6"/><label>b. Inheritance</label><br/>
                                <input type="radio" name="radio6" id="radio6"/><label>c. Steal</label><br/>
                                <input type="radio" name="radio6" id="radio6"/><label>d. Riddles</label><br/>
                                <input type="radio" name="radio6" id="radio6"/><label>e. Heart</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">7. ¿Como se dice Valiente en ingles?</label>
                            <p>
                                <input type="radio" name="radio7" id="radio7"/><label>a. Map</label><br/>
                                <input type="radio" name="radio7" id="radio7"/><label>b. West</label><br/>
                                <input type="radio" name="radio7" id="radio7"/><label>c. Scars</label><br/>
                                <input type="radio" name="radio7" id="radio7"/><label>d. Brave</label><br/>
                                <input type="radio" name="radio7" id="radio7"/><label>e. Source</label><br/>
                            </p>
                            <hr/>
                            
                            <label id="label1">8. ¿Como se dice Silbato en ingles?</label>
                            <p>
                                <input type="radio" name="radio8" id="radio8"/><label>a. Whistle</label><br/>
                                <input type="radio" name="radio8" id="radio8"/><label>b. Campfire</label><br/>
                                <input type="radio" name="radio8" id="radio8"/><label>c. Cooler</label><br/>
                                <input type="radio" name="radio8" id="radio8"/><label>d. Ship</label><br/>
                                <input type="radio" name="radio8" id="radio8"/><label>e. Stove</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">9. ¿Como se dice Ansioso en ingles?</label>
                            <p>
                                <input type="radio" name="radio9" id="radio9"/><label>a. Ansioso</label><br/>
                                <input type="radio" name="radio9" id="radio9"/><label>b. Corner</label><br/>
                                <input type="radio" name="radio9" id="radio9"/><label>c. Mind</label><br/>
                                <input type="radio" name="radio9" id="radio9"/><label>d. Path</label><br/>
                                <input type="radio" name="radio9" id="radio9"/><label>e. Egaer</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">10. ¿Como se dice Cuerda en ingles?</label>
                            <p>
                                <input type="radio" name="radio10" id="radio10"/><label>a. Lake</label><br/>
                                <input type="radio" name="radio10" id="radio10"/><label>b. Tie</label><br/>
                                <input type="radio" name="radio10" id="radio10"/><label>c. Hike</label><br/>
                                <input type="radio" name="radio10" id="radio10"/><label>d. Pray</label><br/>
                                <input type="radio" name="radio10" id="radio10"/><label>e. Rope</label><br/>
                            </p>
                            <hr/>
                            
                            <div style="text-align: center;">
                               <a id="registrar2" class="btn btn-primary" style="width:30%; height: 50px; font-size:2.3rem;" name="registrar2" href="#collapse2" data-toggle="collapse" onclick="return dos()">Resultado</a>
					       </div>
                            
                        </form>
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
	    
	    <a id="fin" class="btn btn-primary" style="width:30%; height: 50px; font-size:2.3rem;" name="fin" onclick="return final()">Final</a>
	    
	</div>
</body>
</html>


<script type="text/javascript">

        var c=0;
        function primero(){
		
            
            
            c=0;
            
            if (document.forms['evaluacion']['radio1'][0].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio2'][2].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio3'][3].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio4'][4].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio5'][2].checked)
            {
                c++;
            }
           // window.location="acordeon2.php?c="+c;
            alert(c);
                    
        return false;
        }
        
    var e=0;
    function dos(){
           
            
            
            e=0;
            
            if (document.forms['evaluacion2']['radio6'][1].checked)
            {
                e++;
            }
            if (document.forms['evaluacion2']['radio7'][3].checked)
            {
                e++;
            }
            if (document.forms['evaluacion2']['radio8'][0].checked)
            {
                e++;
            }
            if (document.forms['evaluacion2']['radio9'][4].checked)
            {
                e++;
            }
            if (document.forms['evaluacion2']['radio10'][4].checked)
            {
                e++;
            }
            
           // window.location="acordeon2.php?c="+c;
                    alert(e);
        return false;
        
    }
    
    function final (){
        
        var resultado=e+c;
        
        if (resultado <=3){
            alert(resultado);
            alert("eres pesimo ");
        }else if (resultado <=6){
            alert(resultado);
            alert("de panzaso");
        }else if (resultado <=10){
            alert(resultado);
            alert("eres muy bueno");
        }
        
        
        return false;
    }
    

</script>