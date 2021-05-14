<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Examen de Ingreso ITMA II</title>
        <link rel="icon" type="image/ico" href="../img/favicon.ico" />
        <link rel="stylesheet" href="css/main.css" type="text/css" media="screen"/>
        <?php require_once("scripts.php");?>
        <script type="text/javascript">
            $(document).ready(function(){
                alertify.alert("Bienvenido a la Autoevaluacion correspondiente al ingreso al ITMA II \n\nSeleccione las respuestas que crea correctas, teniendo en "+"\ncuenta las siguientes consideraciones \n\n1. Los aciertos tienen el valor de un punto"+" \n\n2. Las respuestas no contestadas ni suman ni restan puntos.");
                alertify.success("Inicia");
            });
        </script>

        <script language="javascript">
            var contador=0;
            var fin=7200;
            var iniciado=false;
            function cuenta(){
                if(contador>=fin){
                    
                }else{
                    document.getElementById("contador").innerHTML="Tiempo Restante = "+fin+"seg";
                    fin=fin-1;
                    if(fin==0){
                        alert("Tu tiempo se ha terminado");
                        alertify.error("Tu tiempo se ha terminado");
                        
                        //window.location="#registrar";
                        document.getElementById("registrar").click();
                    }
                }
            }
            function ini(){
                cuenta();
                setInterval("cuenta()",1000);
            }
        </script>
        
    </head>
    <header></header>
    <body onload="ini()">
        <div class="container" style="text-align: justify;">
           
            <div class="row">
                <div class="col-sm-0"></div>
                <div class="col-sm-13">
                    <div class="panel panel-success" >
                        <div class="panel panel-body" >
                            <form id="frmRegistro" name="evaluacion">
                            <div id="contador" style="font-size:2rem; text-align: left;">00:00</div>
                            <div  style="text-align: right;">
                               <p style="font-size:2rem;"> <span class="glyphicon glyphicon-user"></span> <?php echo $_REQUEST['nom'];?> <?php echo $_REQUEST['apellido'];?> </p>
                            </div><br>
                            <p style="font-size:5rem; position: relative;">Razonamientos</p>
                            <label id="label1">1. ¿Cuál es el sinónimo de DELACIÓN?</label><br>
                            <input type="radio" name="radio1" id="radio1"/><label>a. Retención</label><br/>
                            <input type="radio" name="radio1" id="radio1" /><label>b. Cuidado</label><br/>
                            <input type="radio" name="radio1" id="radio1" /><label>c. Acusación</label><br/>
                            <input type="radio" name="radio1" id="radio1" /><label>d. Discreción</label><br>
                            <input type="radio" name="radio1" id="radio1" /><label>e. Omisión</label>
                            <hr/>
                            
                            <label id="label1">2. Escoja el par de palabras que presente una relación semejante a: LÍNEAS - FIGURA</label>
                            <p>
                                <input type="radio" name="radio2" id="radio2" /><label>a. ESTRELLAS - SISTEMA</label><br/>
                                <input type="radio" name="radio2" id="radio2" /><label>b. NÓRDICO - PAÍS</label><br/>
                                <input type="radio" name="radio2" id="radio2" /><label>c. LUNA - SOL</label><br/>
                                <input type="radio" name="radio2" id="radio2" /><label>d. HILOS - RED</label><br/>
                                <input type="radio" name="radio2" id="radio2" /><label>e. MAPAS - ASTRONOMÍA</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">3. Señale la opción que ordena las siguientes palabras en una frase imperativa</label><br>
                            <label id="label1">&nbsp;&nbsp;&nbsp;&nbsp;baja<sup>1</sup> y<sup>2</sup> aquel<sup>3</sup> manzana<sup>4</sup> a<sup>5</sup> sube<sup>6</sup> árbol<sup>7</sup> una<sup>8</sup></label>
                            <p>
                                <input type="radio" name="radio3" id="radio3" /><label>a.  1, 5, 3, 7, 8, 4, 2, 6</label><br/>
                                <input type="radio" name="radio3" id="radio3" /><label>b.  8, 4, 3, 7, 6, 2, 1, 5</label><br/>
                                <input type="radio" name="radio3" id="radio3" /><label>c. 1, 8, 4, 2, 6, 3, 7, 5</label><br/>
                                <input type="radio" name="radio3" id="radio3" /><label>d. 6, 8, 4, 2, 1, 3, 5, 7</label><br/>
                                <input type="radio" name="radio3" id="radio3" /><label>e. 6, 5, 3, 7, 2, 1, 8, 4</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">4. Jalil es árabe y afirma que todos los árabes mienten. En consecuencia:<br>&nbsp;&nbsp;&nbsp;&nbsp;1. Jalil miente si dice la verdad.<br>&nbsp;&nbsp;&nbsp;&nbsp;2. Luego, Jalil _______________</label>
                            <p>
                                <input type="radio" name="radio4" id="radio4" /><label>a. nunca miente</label><br/> 
                                <input type="radio" name="radio4" id="radio4" /><label>b. siempre dice la verdad</label><br/>
                                <input type="radio" name="radio4" id="radio4" /><label>c. sólo dice la verdad cuando no miente</label><br/>
                                <input type="radio" name="radio4" id="radio4" /><label>d. dice la verdad si miente</label><br/>
                                <input type="radio" name="radio4" id="radio4" /><label>e. sólo dice mentiras cuando no dice la verdad</label><br/>
                            </p>
                            <hr/>
                            
                            <label id="label1">5. Complete la siguiente afirmación.<br>&nbsp;&nbsp;&nbsp;&nbsp;El hecho de estar en ______ no es para ponerse ________.</label>
                            <p>
                                <input type="radio" name="radio5" id="radio5"/><label>a. espera - vigilante</label><br/>
                                <input type="radio" name="radio5" id="radio5"/><label>b. riesgo - tenso</label><br/>
                                <input type="radio" name="radio5" id="radio5"/><label>c. pausa - sereno</label><br/>
                                <input type="radio" name="radio5" id="radio5"/><label>d. peligro - jubiloso</label><br/>
                                <input type="radio" name="radio5" id="radio5"/><label>e. desgracia - agitado</label><br/>
                            </p>
                            <hr/>
                            
                            <label id="label1">6. Escoja el par de palabras que presente una relación semejante a: ALBAÑIL - PARED</label>
                            <p>
                                <input type="radio" name="radio6" id="radio6"/><label>a. máquina - engrane</label><br/>
                                <input type="radio" name="radio6" id="radio6"/><label>b. carpintero - mueble</label><br/>
                                <input type="radio" name="radio6" id="radio6"/><label>c. montacargas - almacén</label><br/>
                                <input type="radio" name="radio6" id="radio6"/><label>d. agricultor - campo</label><br/>
                                <input type="radio" name="radio6" id="radio6"/><label>e. locutor - anuncio </label><br/>
                            </p>
                            <hr/>

                            <label id="label1">7. Complete la siguiente afirmación.<br>&nbsp;&nbsp;&nbsp;&nbsp;Trabajar y perseverar son _________ que permiten al hombre conseguir lo que se propone.</label>
                            <p>
                                <input type="radio" name="radio7" id="radio7"/><label>a. potencialidades</label><br/>
                                <input type="radio" name="radio7" id="radio7"/><label>b. actividades</label><br/>
                                <input type="radio" name="radio7" id="radio7"/><label>c. capacidades</label><br/>
                                <input type="radio" name="radio7" id="radio7"/><label>d. actitudes</label><br/>
                                <input type="radio" name="radio7" id="radio7"/><label>e. funciones</label><br/>
                            </p>
                            <hr/>
                            
                            <label id="label1">8. ¿Cuál de las siguientes afirmaciones pudiera considerarse como una opinión y no como un hecho?</label>
                            <p>
                                <input type="radio" name="radio8" id="radio8"/><label>a. El dinero cada día alcanza menos para adquirir lo indispensable</label><br/>
                                <input type="radio" name="radio8" id="radio8"/><label>b. Los responsables de la política económica de hoy son menos capaces que los de antes</label><br/>
                                <input type="radio" name="radio8" id="radio8"/><label>c. Tanto la cantidad como la velocidad de la información crecen cada día</label><br/>
                                <input type="radio" name="radio8" id="radio8"/><label>d. Los automóviles que circulan por las grandes ciudades integran tecnologías cada día más avanzadas</label><br/>
                                <input type="radio" name="radio8" id="radio8"/><label>e. La República Mexicana tiene una extensión de casi dos millones de kilómetros cuadrados</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">9. Cuando comentamos: Los exámenes son regalados</em> hacemos referencia a que nos resultan accesibles. <br> &nbsp;&nbsp;&nbsp;&nbsp;Entonces, si esto fuera un examen sería necesariamente ____________.</label>
                            <p>
                                <input type="radio" name="radio9" id="radio9"/><label>a. fácil</label><br/>
                                <input type="radio" name="radio9" id="radio9"/><label>b. un don</label><br/>
                                <input type="radio" name="radio9" id="radio9"/><label>c. gratuito</label><br/>
                                <input type="radio" name="radio9" id="radio9"/><label>d. una dádiva</label><br/>
                                <input type="radio" name="radio9" id="radio9"/><label>e. un presente</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">10. Complete el siguiente razonamiento. ______________________ <br>&nbsp;&nbsp;&nbsp;&nbsp;Rex es perro; luego, Rex es cuadrúpedo.</label>
                            <p>
                                <input type="radio" name="radio10" id="radio10"/><label>a.  Ser cuadrúpedo es una característica sólo de los perros</label><br/>
                                <input type="radio" name="radio10" id="radio10"/><label>b. Hay muchos perros que son cuadrúpedos</label><br/>
                                <input type="radio" name="radio10" id="radio10"/><label>c.  Los cuadrúpedos son perros</label><br/>
                                <input type="radio" name="radio10" id="radio10"/><label>d. Algunos perros son cuadrúpedos</label><br/>
                                <input type="radio" name="radio10" id="radio10"/><label>e. Todos los perros son cuadrúpedos</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">11. Elija la opción que ordena los siguientes términos para formar una expresión coherente y correcta.<br>&nbsp;&nbsp;&nbsp;&nbsp;E<sup>1</sup> Y<sup>2</sup> EL<sup>3</sup> HACIA<sup>4</sup> IMPIDEN<sup>5</sup> IMPUNIDAD<sup>6</sup> PAZ<sup>7</sup> CORRUPCIÓN<sup>8</sup> EQUIDAD<sup>9</sup> TRÁNSITO<sup>10</sup></label>
                            <p>
                                <input type="radio" name="radio11" id="radio11"/><label>a. 9, 2, 8, 5, 3, 10, 4, 7, 1, 6</label><br/>
                                <input type="radio" name="radio11" id="radio11"/><label>b. 6, 2, 8, 5, 3, 10, 4, 9, 1, 7</label><br/>
                                <input type="radio" name="radio11" id="radio11"/><label>c. 8, 10, 4, 3, 9, 2, 5, 7, 1, 6</label><br/>
                                <input type="radio" name="radio11" id="radio11"/><label>d. 5, 6, 7, 8, 2, 9, 3, 10, 4, 1</label><br/>
                                <input type="radio" name="radio11" id="radio11"/><label>e.  8, 1, 6, 5, 3, 10, 4, 7, 2, 9</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">12. Seleccione la opción que proponga un texto coherente a partir de las siguientes frases.<br>&nbsp;&nbsp;&nbsp;&nbsp;1. La cabeza reducida o tsantsa era un gran trofeo.<br>&nbsp;&nbsp;&nbsp;&nbsp;2. Las arrancaban de sus adversarios muertos en combate.<br>&nbsp;&nbsp;&nbsp;&nbsp;3. Para el guerrero que había derrotado a su contrincante.<br>&nbsp;&nbsp;&nbsp;&nbsp;4. Los jíbaros reducían las cabezas de sus enemigos.<br>&nbsp;&nbsp;&nbsp;&nbsp;5. El hechicero de la tribu dirigía una pomposa ceremonia.</label>
                            <p>
                                <input type="radio" name="radio12" id="radio12"/><label>a. 2, 4, 5, 3, 1</label><br/>
                                <input type="radio" name="radio12" id="radio12"/><label>b. 4, 2, 5, 1, 3</label><br/>
                                <input type="radio" name="radio12" id="radio12"/><label>c. 1, 4, 5, 3, 2</label><br/>
                                <input type="radio" name="radio12" id="radio12"/><label>d. 3, 4, 1, 2, 5</label><br/>
                                <input type="radio" name="radio12" id="radio12"/><label>e. 5, 2, 4, 1, 3</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">13. Son ciudadanos de la República los varones y las mujeres que, ________ la calidad de mexicanos, ________, además, los ________ de haber cumplido 18 años y tener un modo honesto de vivir.</label>
                            <p>
                                <input type="radio" name="radio13" id="radio13"/><label>a. reuniendo - gocen - privilegios</label><br/>
                                <input type="radio" name="radio13" id="radio13"/><label>b. gozando - conserven - criterios</label><br/>
                                <input type="radio" name="radio13" id="radio13"/><label>c. con - adquieran - requerimientos</label><br/>
                                <input type="radio" name="radio13" id="radio13"/><label>d. teniendo - reúnan - requisitos</label><br/>
                                <input type="radio" name="radio13" id="radio13"/><label>e. supuesta - integren - postulados</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">14. La afirmación: <i>la superación personal debe ser siempre una constante</i> implica que:</label>
                            <p>
                                <input type="radio" name="radio14" id="radio14"/><label>a. el aprovechamiento de las oportunidades se da por el deseo de obtenerlas</label><br/>
                                <input type="radio" name="radio14" id="radio14"/><label>b. hay que ser persistente con la idea de tener buena suerte</label><br/>
                                <input type="radio" name="radio14" id="radio14"/><label>c. el aprovechamiento de la victoria es el anhelo sólo de algunos</label><br/>
                                <input type="radio" name="radio14" id="radio14"/><label>d. hay que trabajar cotidianamente para llegar a obtener éxito</label><br/>
                                <input type="radio" name="radio14" id="radio14"/><label>e. hay que luchar contra quienes se interpongan en nuestro progreso</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">15. Sin cambiar su sentido original, seleccione la forma afirmativa de la siguiente frase: <em>Al no desatender</em></label>
                            <p>
                                <input type="radio" name="radio15" id="radio15"/><label>a. Al no estar atendido</label><br/>
                                <input type="radio" name="radio15" id="radio15"/><label>b. Al vigilar</label><br/>
                                <input type="radio" name="radio15" id="radio15"/><label>c. Al no vigilar</label><br/>
                                <input type="radio" name="radio15" id="radio15"/><label>d. Al carecer de asistencia</label><br/>
                                <input type="radio" name="radio15" id="radio15"/><label>e. Al saber que descuida</label><br/>
                            </p>
                            <hr/>
                            <label id="label1"><strong>Lea el siguiente texto y conteste las preguntas 16 y 17. <br><br>El psicólogo Howard Gardner es quien mejor ha determinado una teoría reciente sobre cómo, cuándo y dónde se produce el desarrollo de la inteligencia humana. Sorprendería sobremanera a todas aquellas personas músicos y no músicos, la influencia que tiene la música de manifestar su naturaleza en el  desarrollo de las inteligencias múltiples. Una primera inteligencia lingüística que consiste en la capacidad de procesar palabras, una segunda inteligencia lógico-matemática, aquella herramienta que sirve para calcular, medir y efectuar operaciones de índole matemático-racional. La tercera sería la espacial, aquella que consiste en la capacidad de asumir las distintas dimensiones. En cuarto lugar la inteligencia corporal cinestésica, manipulación de objetos y estructuras. En quinto, sexto y séptimo lugar las inteligencias interpersonal, intrapersonal y naturalista, que corresponden a la empatía con los demás, la capacidad de una persona de tener una idea propia y precisa de quién es y la capacidad para observar los modelos de la Naturaleza, respectivamente. Y para terminar, la inteligencia musical, aquel tipo de inteligencia que sirve para expresar equilibrio y belleza sonora. Pocas veces los músicos hemos compartido semejante protagonismo existencial.<br><br></label>


                            <label id="label1">16. De la lectura del texto se puede concluir que:</label>
                            <p>
                                <input type="radio" name="radio16" id="radio16"/><label>a. la inteligencia humana sólo ha sido estudiada recientemente</label><br/>
                                <input type="radio" name="radio16" id="radio16"/><label>b. los distintos tipos de inteligencia se desarrollan en orden cronológico</label><br/>
                                <input type="radio" name="radio16" id="radio16"/><label>c. la musical es una de las múltiples inteligencias</label><br/>
                                <input type="radio" name="radio16" id="radio16"/><label>d. la música contribuye a desarrollar inteligencias múltiples</label><br/>
                                <input type="radio" name="radio16" id="radio16"/><label>e. la inteligencia musical se desarrolla posteriormente a las demás</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">17. El contenido del texto permite fundamentar la siguiente afirmación:</label>
                            <p>
                                <input type="radio" name="radio17" id="radio17"/><label>a. el autor se congratula de que la aptitud musical se incluya entre las inteligencias</label><br/>
                                <input type="radio" name="radio17" id="radio17"/><label>b. el autor está a favor de la educación musical</label><br/>
                                <input type="radio" name="radio17" id="radio17"/><label>c. Howard Gardner es músico y psicólogo</label><br/>
                                <input type="radio" name="radio17" id="radio17"/><label>d. una persona con una idea clara de sí misma tiene mejores relaciones interpersonales</label><br/>
                                <input type="radio" name="radio17" id="radio17"/><label>e. la música compartida constituye un protagonismo existencial</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">18. Algunos mamíferos son animales herbívoros. <br>&nbsp;&nbsp;&nbsp;&nbsp;Ningún animal herbívoro come carne; luego, ____________________ .</label>
                            <p>
                                <input type="radio" name="radio18" id="radio18"/><label>a. algunos animales mamíferos no comen carne</label><br/>
                                <input type="radio" name="radio18" id="radio18"/><label>b. ningún animal mamífero come carne</label><br/>
                                <input type="radio" name="radio18" id="radio18"/><label>c. algunos animales mamíferos no son herbívoros</label><br/>
                                <input type="radio" name="radio18" id="radio18"/><label>d. todo animal que come carne es mamífero</label><br/>
                                <input type="radio" name="radio18" id="radio18"/><label>e. los animales herbívoros no son mamíferos</label><br/>
                            </p>
                            <hr/>

                            <label id="label1"> 19.Seleccione el refrán que se aplica a la situación planteada.<br>&nbsp;&nbsp;&nbsp;&nbsp; Un día un hombre gastó todos sus ahorros en comprar cinco billetes de lotería. Regresó a su casa y le dijo a su esposa: “Uno de éstos debe ganar un premio”. Ella, molesta, le contestó:</label>
                            <p>
                                <input type="radio" name="radio19" id="radio19"/><label>a. El que a hierro mata, a hierro muere</label><br/>
                                <input type="radio" name="radio19" id="radio19"/><label>b. Zapatero a tus zapatos</label><br/>
                                <input type="radio" name="radio19" id="radio19"/><label>c. Tiene un piojo en la cabeza y se siente ganadero</label><br/>
                                <input type="radio" name="radio19" id="radio19"/><label>d. No se puede chiflar y comer pinole</label><br/>
                                <input type="radio" name="radio19" id="radio19"/><label>e. Más vale pájaro en mano que ciento volando</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">20. Complete el siguiente razonamiento.<br>&nbsp;&nbsp;&nbsp;&nbsp;Más de un político es miserable.<br>&nbsp;&nbsp;&nbsp;&nbsp;Todo miserable es limitado.<br>&nbsp;&nbsp;&nbsp;&nbsp;Luego, _____________.</label>
                            <p>
                                <input type="radio" name="radio20" id="radio20"/><label>a. algunos limitados son políticos</label><br/>
                                <input type="radio" name="radio20" id="radio20"/><label>b. todo limitado es miserable</label><br/>
                                <input type="radio" name="radio20" id="radio20"/><label>c. algunos políticos son miserables</label><br/>
                                <input type="radio" name="radio20" id="radio20"/><label>d. todo político es miserable</label><br/>
                                <input type="radio" name="radio20" id="radio20"/><label>e. algunos políticos son limitados</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">21. En el siguiente ejemplo, uno de los grupos de letras rompe la regularidad.¿Cuál es?</label>
                            <p>
                                <input type="radio" name="radio21" id="radio21"/><label>a. ACEG</label><br/>
                                <input type="radio" name="radio21" id="radio21"/><label>b. GJMO</label><br/>
                                <input type="radio" name="radio21" id="radio21"/><label>c. HJLN</label><br/>
                                <input type="radio" name="radio21" id="radio21"/><label>d. PRTV</label><br/>
                                <input type="radio" name="radio21" id="radio21"/><label>e. QSUW</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">22. Un barco navega 100 metros en 50 segundos. Un avión supersónico viaja a 1,440 kilómetros por hora. Si ambos tienen rapidez constante, ¿cuántas veces es más rápido el avión que el barco?</label>
                            <p>
                                <input type="radio" name="radio22" id="radio22"/><label>a. 200</label><br/>
                                <input type="radio" name="radio22" id="radio22"/><label>b. 720</label><br/>
                                <input type="radio" name="radio22" id="radio22"/><label>c. 800</label><br/>
                                <input type="radio" name="radio22" id="radio22"/><label>d. 1440</label><br/>
                                <input type="radio" name="radio22" id="radio22"/><label>e. 28.8</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">23. Si A es igual a dos tercios de B y A = 36, ¿cuál es el valor de B?</label>
                            <p>
                                <input type="radio" name="radio23" id="radio23"/><label>a. 24</label><br/>
                                <input type="radio" name="radio23" id="radio23"/><label>b. 48</label><br/>
                                <input type="radio" name="radio23" id="radio23"/><label>c. 54</label><br/>
                                <input type="radio" name="radio23" id="radio23"/><label>d. 72</label><br/>
                                <input type="radio" name="radio23" id="radio23"/><label>e. 108</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">24. Seleccione la opción que contiene la figura que completa la segunda serie.</label><div id="ejercicio"></div>
                                    <input type="radio" name="radio24" id="radioimagen"/> <div id="ejercicio2"></div>
                                    <input type="radio" name="radio24" id="radioimagen"/> <div id="ejercicio3"></div>
                                    <input type="radio" name="radio24" id="radioimagen"/> <div id="ejercicio4"></div>
                                    <input type="radio" name="radio24" id="radioimagen"/> <div id="ejercicio5"></div>
                                    <input type="radio" name="radio24" id="radioimagen"/> <div id="ejercicio6"></div>
                            <hr/>

                            <label id="label1">25. Una balanza está en equilibrio si se pone una pastilla de jabón en uno de sus platillos y en el otro se colocan 2/3 de una pastilla igual y una pesa de 2/3 de kilo. Si x representa el peso de una pastilla, ¿cómo debe plantearse el problema para encontrar el valor de x?</label>

                                <input type="radio" name="radio25" id="radioimagen2"/><div id="ejercicio7"></div><br/>
                                <input type="radio" name="radio25" id="radioimagen2"/><div id="ejercicio8"></div><br/>
                                <input type="radio" name="radio25" id="radioimagen2"/><div id="ejercicio9"></div><br/>
                                <input type="radio" name="radio25" id="radioimagen2"/><div id="ejercicio10"></div><br/>
                                <input type="radio" name="radio25" id="radioimagen2"/><div id="ejercicio11"></div><br/>
                            <hr/>

                            <label id="label1">26. Si llamamos <b>D</b> al dividendo, <strong>Q</strong> al cociente, <b>b</b> al divisor y <b>R</b> al residuo, la expresión: <br>&nbsp;&nbsp;&nbsp;&nbsp;<strong>D = dQ + R </strong><br>&nbsp;&nbsp;&nbsp;&nbsp;sólo es verdadera si:</label>
                            <p>
                                <input type="radio" name="radio26" id="radio26"/><label>a. d &lt; R</label><br/>
                                <input type="radio" name="radio26" id="radio26"/><label>b. d &gt; D</label><br/>
                                <input type="radio" name="radio26" id="radio26"/><label>c. Q &lt; R</label><br/>
                                <input type="radio" name="radio26" id="radio26"/><label>d. R &lt; d</label><br/>
                                <input type="radio" name="radio26" id="radio26"/><label>e. R &#61; d</label><br/>
                            </p>
                            <hr/>
                            
                            <label id="label1">27. Señale el número que da continuidad a la serie: 2, 8, 12, 48, 52...</label>
                            <p>
                                <input type="radio" name="radio27" id="radio27"/><label>a. 55</label><br/>
                                <input type="radio" name="radio27" id="radio27"/><label>b. 59</label><br/>
                                <input type="radio" name="radio27" id="radio27"/><label>c. 104</label><br/>
                                <input type="radio" name="radio27" id="radio27"/><label>d. 204</label><br/>
                                <input type="radio" name="radio27" id="radio27"/><label>e. 208</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">28. Observe las siguientes figuras y escoja la opción que las ordena.</label>
                            <br><br><div id="ejercicio12"></div>
                            <p>
                                <input type="radio" name="radio28" id="radio28"/><label>a. 3, 2, 5, 1, 4</label><br/>
                                <input type="radio" name="radio28" id="radio28"/><label>b. 1, 4, 2, 5, 3</label><br/>
                                <input type="radio" name="radio28" id="radio28"/><label>c. 4, 1, 2, 5, 3</label><br/>
                                <input type="radio" name="radio28" id="radio28"/><label>d. 1, 4, 5, 3, 2</label><br/>
                                <input type="radio" name="radio28" id="radio28"/><label>e. 3, 5, 1, 2, 4</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">29. Un equipo de voleibol lleva perdidos ocho de 22 partidos jugados. Si gana los siguientes seis, ¿cuál será su porcentaje final de victorias?</label>
                            <p>
                                <input type="radio" name="radio29" id="radio29"/><label>a. 28.57</label><br/>
                                <input type="radio" name="radio29" id="radio29"/><label>b. 51.85</label><br/>
                                <input type="radio" name="radio29" id="radio29"/><label>c. 63.63</label><br/>
                                <input type="radio" name="radio29" id="radio29"/><label>d. 69.17</label><br/>
                                <input type="radio" name="radio29" id="radio29"/><label>e. 71.43</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">30. ¿En qué lugar de la recta numérica queda el punto que representa al número 52/47? Entre:</label>
                            <br><br><div id="ejercicio13"></div>
                            <p>
                                <input type="radio" name="radio30" id="radio30"/><label>a. P y Q</label><br/>
                                <input type="radio" name="radio30" id="radio30"/><label>b. Q y R</label><br/>
                                <input type="radio" name="radio30" id="radio30"/><label>c. R y S</label><br/>
                                <input type="radio" name="radio30" id="radio30"/><label>d. S y T</label><br/>
                                <input type="radio" name="radio30" id="radio30"/><label>e. T y U</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">31. Escoja la serie o grupo de figuras que satisface las siguientes cuatro condiciones:<br> 
                                1. Una de las siguientes figuras:&#9827;&#9827;&#9830;@ pertenece a esa serie y está en su lugar. Tres no pertenecen a la serie 
                            <br>    2. De éstas @&#9827;@&#9829; , una figura pertenece a la serie pero no está en su lugar. Otra sí está en su lugar y las otras dos no pertenecen a la serie 
                            <br>    3. De  &#9827;&#9824;@&#9830; ,dos figuras pertenecen al grupo y están en su lugar. Dos figuras no pertenecen al grupo o serie. 
                            <br>    4. Del grupo &#9829;&#9827;@&#9827; ,dos figuras pertenecen a la serie buscada pero no están en su lugar. Dos figuras no pertenecen a ella.     </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio31" id="radio31"/><label>a.&#9827;&#9829;&#9824;&#9830;</label><br/>
                                <input type="radio" name="radio31" id="radio31"/><label>b.&#9824;&#9827;&#9830;&#9830;</label><br/>
                                <input type="radio" name="radio31" id="radio31"/><label>c.&#9829;&#9827;@&#9827;</label><br/>
                                <input type="radio" name="radio31" id="radio31"/><label>d.&#9827;&#9824;&#9824;&#9829;</label><br/>
                                <input type="radio" name="radio31" id="radio31"/><label>e.&#9830;&#9824;@@</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">32. Analice los dos conjuntos de números y seleccione la opción que corresponda: <br>
                                {426, 224, 437, 415, 235, 527, 279, 145, 347}<br> {248, 339, 224, 122, 133, 515, 428, 326, 700} </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio32" id="radio32"/><label>a.La tercera cifra de cada uno de los números del segundo conjunto es el producto de las dos anteriores</label><br/>
                                <input type="radio" name="radio32" id="radio32"/><label>b.Los números del segundo conjunto son primos, los del primero n</label><br/>
                                <input type="radio" name="radio32" id="radio32"/><label>c. Los números del primer conjunto son primos, los del segundo no </label><br/>
                                <input type="radio" name="radio32" id="radio32"/><label>d. La resta de las dos primeras cifras de cada número del primer conjunto tiene como resultado la tercera cifra </label><br/>
                                <input type="radio" name="radio32" id="radio32"/><label>e.La tercera cifra de cada uno de los números del primer conjunto es el producto de las dos anteriores
                </label><br/>
                            </p>
                            <hr/>    

                            <label id="label1">33. ¿Cuáles son las edades, en años, de tres amigos, si su suma es 72 y su producto resulta mayor que 13,600? Al mayor de ellos le falta una pierna.</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio33" id="radio33"/><label>a. 25, 25, 22 </label><br/>
                                <input type="radio" name="radio33" id="radio33"/><label>b. 24, 24, 24</label><br/>
                                <input type="radio" name="radio33" id="radio33"/><label>c. 23, 23, 26 </label><br/>
                                <input type="radio" name="radio33" id="radio33"/><label>d. 22, 22, 28</label><br/>
                                <input type="radio" name="radio33" id="radio33"/><label>e. 18, 24, 30</label><br/>
                            </p>
                            <hr/> 

                            <label id="label1">34. ¿Cuál es el volumen de un bloque que mide 10 mm de alto, 25 mm de largo y 16 mm de fondo?</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio34" id="radio34"/><label>a. 4,000 mm3  </label><br/>
                                <input type="radio" name="radio34" id="radio34"/><label>b. 2,600 mm3</label><br/>
                                <input type="radio" name="radio34" id="radio34"/><label>c. 13,125 mm3 </label><br/>
                                <input type="radio" name="radio34" id="radio34"/><label>d. 78,750 mm3</label><br/>
                                <input type="radio" name="radio34" id="radio34"/><label>e. 157,500 mm3</label><br/>
                            </p>
                            <hr/>    

                            <label id="label1">35. En un triángulo como el de la figura:</label>
                            <br><br><div id="ejercicio14"></div>
                            <p>
                                <input type="radio" name="radio35" id="radio35"/><label>a. La bisectriz y la mediana son iguales pero distintas a la altura correspondiente a la base</label><br/>
                                <input type="radio" name="radio35" id="radio35"/><label>b. La altura correspondiente a la base es también mediana y bisectriz</label><br/>
                                <input type="radio" name="radio35" id="radio35"/><label>c. La altura correspondiente a la base es también mediana pero distinta a la bisectriz</label><br/>
                                <input type="radio" name="radio35" id="radio35"/><label>d. La altura correspondiente a la base es también bisectriz pero distinta a la mediana</label><br/>
                                <input type="radio" name="radio35" id="radio35"/><label>e. La altura correspondiente a la base es distinta a la mediana y a la bisectriz</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">36. Un recipiente tarda en llenarse 40 minutos con la llave de agua fría abierta y 20 minutos si se llena con la de agua caliente. Si se vacía en 80 minutos, ¿cuánto tardará en llenarse con ambas llaves abiertas teniendo abierto el desagüe?
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio36" id="radio36"/><label>a. 7.5 minutos</label><br/>
                                <input type="radio" name="radio36" id="radio36"/><label>b. 9 minutos</label><br/>
                                <input type="radio" name="radio36" id="radio36"/><label>c. 12 minutos</label><br/>
                                <input type="radio" name="radio36" id="radio36"/><label>d. 16 minutos</label><br/>
                                <input type="radio" name="radio36" id="radio36"/><label>e. 16.5 minutos</label><br/>
                            </p>
                            <hr/>    

                            <label id="label1">37. Relacione los números que aparecen en cada círculo y elija la opción que contiene el número faltante en el tercer círculo.
                            </label>
                            <br><br><div id="ejercicio15" ></div>
                            <p>
                                <input type="radio" name="radio37" id="radio37"/><label>a. 6</label><br/>
                                <input type="radio" name="radio37" id="radio37"/><label>b. 15</label><br/>
                                <input type="radio" name="radio37" id="radio37"/><label>c. 23</label><br/>
                                <input type="radio" name="radio37" id="radio37"/><label>d. 24</label><br/>
                                <input type="radio" name="radio37" id="radio37"/><label>e. 28</label><br/>
                            </p>
                            <hr/>     

                            <label id="label1">38. El valor de R varía en proporción directa con el de T; cuando R = 12, T = 60. ¿Cuál será el valor de R si T = 180?
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio38" id="radio38"/><label>a. 12</label><br/>
                                <input type="radio" name="radio38" id="radio38"/><label>b. 20</label><br/>
                                <input type="radio" name="radio38" id="radio38"/><label>c. 36</label><br/>
                                <input type="radio" name="radio38" id="radio38"/><label>d. 48</label><br/>
                                <input type="radio" name="radio38" id="radio38"/><label>e. 50</label><br/>
                            </p>
                            <hr/> 


                            <label id="label1">39. Un jardín rectangular tiene el doble de largo que de ancho y su área mide 6,050 m2. ¿Cuáles son sus dimensiones?
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio39" id="radio39"/><label>a. 75 m por 37.5 m</label><br/>
                                <input type="radio" name="radio39" id="radio39"/><label>b. 85 m por 40 m</label><br/>
                                <input type="radio" name="radio39" id="radio39"/><label>c. 100 m por 50 m</label><br/>
                                <input type="radio" name="radio39" id="radio39"/><label>d. 90 m por 45 m</label><br/>
                                <input type="radio" name="radio39" id="radio39"/><label>e. 110 m por 55 m</label><br/>
                            </p>
                            <hr/>     

                            <label id="label1">40. ¿Cuál de los siguientes conjuntos de letras rompe la regularidad?
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio40" id="radio40"/><label>a. BCXY</label><br/>
                                <input type="radio" name="radio40" id="radio40"/><label>b. FGTU</label><br/>
                                <input type="radio" name="radio40" id="radio40"/><label>c. IJQR</label><br/>
                                <input type="radio" name="radio40" id="radio40"/><label>d. NOLM </label><br/>
                                <input type="radio" name="radio40" id="radio40"/><label>e. RSHI</label><br/>
                            </p>
                            <hr/> 

                            <h1 style="font-size:5rem; position: relative;">CONOCIMIENTOS</h1> <br>

                            <label id="label1">41. Entre marzo y abril de 2003, tropas anglo-estadounidenses bombardearon el territorio iraquí, luego de que el presidente de este país islámico, Sadam Hussein, se negó a acatar el ultimátum del presidente de Estados Unidos de abandonar el país. La guerra de George W. Bush sólo fue apoyada abiertamente por el primer ministro británico,Tony Blair, y el jefe de gobierno español, José María Aznar, incluso sin el aval de la ONU. Los resultados de esa llamada primera guerra del siglo XXI han sido devastadores. Identifique en el mapa los números cuya línea señala a Irak ___ y a Estados Unidos ___.
                            </label>
                            <br><br><div id="ejercicio16" ></div>
                            <p>
                                <input type="radio" name="radio41" id="radio41"/><label>a. 3, 1</label><br/>
                                <input type="radio" name="radio41" id="radio41"/><label>b. 6, 2</label><br/>
                                <input type="radio" name="radio41" id="radio41"/><label>c. 4, 1</label><br/>
                                <input type="radio" name="radio41" id="radio41"/><label>d. 4, 2 </label><br/>
                                <input type="radio" name="radio41" id="radio41"/><label>e. 5, 1</label><br/>
                            </p>
                            <hr/>  

                            <label id="label1">42. ¿Qué promueve la UNESCO?
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio42" id="radio42"/><label>a. La paz y el bienestar social</label><br/>
                                <input type="radio" name="radio42" id="radio42"/><label>b. La economía y el capital social</label><br/>
                                <input type="radio" name="radio42" id="radio42"/><label>c. La educación, la ciencia y la cultura</label><br/>
                                <input type="radio" name="radio42" id="radio42"/><label>d. La salud y la educación</label><br/>
                                <input type="radio" name="radio42" id="radio42"/><label>e. La sabiduría y el manejo de información</label><br/>
                            </p>
                            <hr/>  

                            <label id="label1">43. La navegación a vela se ha practicado desde el año 3,000 a. C.,empleando como fuente de energía la:
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio43" id="radio43"/><label>a. eólica</label><br/>
                                <input type="radio" name="radio43" id="radio43"/><label>b. hidráulica</label><br/>
                                <input type="radio" name="radio43" id="radio43"/><label>c. solar</label><br/>
                                <input type="radio" name="radio43" id="radio43"/><label>d. térmica</label><br/>
                                <input type="radio" name="radio43" id="radio43"/><label>e. hidrostática</label><br/>
                            </p>
                            <hr/>    

                            <label id="label1">44. Con alguna frecuencia se presentan brotes de dengueen algunas regiones del país; el principal vector que lo transmite es:
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio44" id="radio44"/><label>a. la rata</label><br/>
                                <input type="radio" name="radio44" id="radio44"/><label>b. el mosquito Anophele</label><br/>
                                <input type="radio" name="radio44" id="radio44"/><label>c. la mosca doméstica</label><br/>
                                <input type="radio" name="radio44" id="radio44"/><label>d. la cucaracha</label><br/>
                                <input type="radio" name="radio44" id="radio44"/><label>e. el mosquito Aedes</label><br/>
                            </p>
                            <hr/>  

                            <label id="label1">45. Los componentes de una computadora se pueden dividir en duros (hardware) y blandos (software). Un ejemplo de software es el:
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio45" id="radio45"/><label>a. teclado</label><br/>
                                <input type="radio" name="radio45" id="radio45"/><label>b. disco flexible</label><br/>
                                <input type="radio" name="radio45" id="radio45"/><label>c. sistema operativo</label><br/>
                                <input type="radio" name="radio45" id="radio45"/><label>d. monitor</label><br/>
                                <input type="radio" name="radio45" id="radio45"/><label>e. disco duro</label><br/>
                            </p>
                            <hr/> 

                            <label id="label1">46. Puede erradicarse o bajar al mínimo la frecuencia del cáncer de ______, ya que se cuenta con la prueba de Papanicolau.
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio46" id="radio46"/><label>a. mama</label><br/>
                                <input type="radio" name="radio46" id="radio46"/><label>b. colon</label><br/>
                                <input type="radio" name="radio46" id="radio46"/><label>c. cuello del útero</label><br/>
                                <input type="radio" name="radio46" id="radio46"/><label>d. próstata</label><br/>
                                <input type="radio" name="radio46" id="radio46"/><label>e. hígado</label><br/>
                            </p>
                            <hr/>  


                            <label id="label1">47. _____________ almacena de manera temporal los datos con los que está trabajando la computadora.
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio47" id="radio47"/><label>a. La memoria ROM</label><br/>
                                <input type="radio" name="radio47" id="radio47"/><label>b. La memoria RAM</label><br/>
                                <input type="radio" name="radio47" id="radio47"/><label>c. El sistema operativo</label><br/>
                                <input type="radio" name="radio47" id="radio47"/><label>d. El disco duro</label><br/>
                                <input type="radio" name="radio47" id="radio47"/><label>e. El disquete</label><br/>
                            </p>
                            <hr/>  

                            <label id="label1">48. A partir del 2002 los controles de inmigración estadounidenses se hicieron más rigurosos a causa de uno de los siguientes sucesos:
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio48" id="radio48"/><label>a. la explosión del transbordador Columbia</label><br/>
                                <input type="radio" name="radio48" id="radio48"/><label>b. el atentado al World Trade Center de Nueva York</label><br/>
                                <input type="radio" name="radio48" id="radio48"/><label>c. la destrucción de un edificio de oficinas gubernamentales en Oklahoma </label><br/>
                                <input type="radio" name="radio48" id="radio48"/><label>d. el incremento del narcotráfico </label><br/>
                                <input type="radio" name="radio48" id="radio48"/><label>e.  la entrada de terroristas árabes</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">49. Seleccione la opción que presenta los siguientes acontecimientos en orden cronológico (del más antiguo al más reciente). 
                              <br>  1. Se inventa el disco compacto (CD) 
                            <br>    2. Se construye el primer reactor nuclear 
                            <br>    3. Se inventa la TV a color 
                            <br>    4. Se inventa el nylon 
                            <br>    5. Se utiliza la fibra óptica para transmitir datos
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio49" id="radio49"/><label>a. 3, 5, 4, 1, 2</label><br/>
                                <input type="radio" name="radio49" id="radio49"/><label>b. 2, 3, 4, 1, 5 </label><br/>
                                <input type="radio" name="radio49" id="radio49"/><label>c. 3, 2, 4, 5, 1 </label><br/>
                                <input type="radio" name="radio49" id="radio49"/><label>d. 4, 3, 2, 5, 1</label><br/>
                                <input type="radio" name="radio49" id="radio49"/><label>e. 3, 4, 5, 1, 2</label><br/>
                            </p>
                            <hr/>     

                            <label id="label1">50. El uso de servidores es indispensable para:
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio50" id="radio50"/><label>a. manejar cualquier computadora</label><br/>
                                <input type="radio" name="radio50" id="radio50"/><label>b. utilizar el sistema operativo DOS</label><br/>
                                <input type="radio" name="radio50" id="radio50"/><label>c. enviar un mensaje por fax </label><br/>
                                <input type="radio" name="radio50" id="radio50"/><label>d. utilizar internet</label><br/>
                                <input type="radio" name="radio50" id="radio50"/><label>e. recibir un fax por computadora</label><br/>
                            </p>
                            <hr/>  

                            <label id="label1">51. El ___________ es un dispositivo capaz de convertir una señal digital (compatible con la computadora) en una señal analógica que puede ser transmitida telefónicamente.
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio51" id="radio51"/><label>a. network</label><br/>
                                <input type="radio" name="radio51" id="radio51"/><label>b. fax</label><br/>
                                <input type="radio" name="radio51" id="radio51"/><label>c. interfaz </label><br/>
                                <input type="radio" name="radio51" id="radio51"/><label>d. módem</label><br/>
                                <input type="radio" name="radio51" id="radio51"/><label>e. e-mail</label><br/>
                            </p>
                            <hr/> 

                            <label id="label1">52. Fue uno de los mejores futbolistas de fines del siglo XX. Hoy,después de graves problemas de drogadicción, se ha incorporado a una vida sana y activa.
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio52" id="radio52"/><label>a. Lev Yashin (La araña)</label><br/>
                                <input type="radio" name="radio52" id="radio52"/><label>b. Bobby Charlton</label><br/>
                                <input type="radio" name="radio52" id="radio52"/><label>c. Diego Armando Maradona</label><br/>
                                <input type="radio" name="radio52" id="radio52"/><label>d. Edson Arantes do Nascimento (Pelé)</label><br/>
                                <input type="radio" name="radio52" id="radio52"/><label>e. Franz Beckenbauer (El Kaiser)</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">53. Recientemente ha sido calificada la ___________ como un padecimiento fisiológico que puede ser tratado con drogas como el Prozac.
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio53" id="radio53"/><label>a. sífilis</label><br/>
                                <input type="radio" name="radio53" id="radio53"/><label>b. depresión</label><br/>
                                <input type="radio" name="radio53" id="radio53"/><label>c. hipertensión</label><br/>
                                <input type="radio" name="radio53" id="radio53"/><label>d. dipsomanía</label><br/>
                                <input type="radio" name="radio53" id="radio53"/><label>e. adicción al tabaco</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">54. El ___ está relacionado con el régimen impositivo de Hacienda que se aplica a la mayoría de productos de consumo y a los servicios.
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio54" id="radio54"/><label>a. SAR</label><br/>
                                <input type="radio" name="radio54" id="radio54"/><label>b. ISR</label><br/>
                                <input type="radio" name="radio54" id="radio54"/><label>c. RFC</label><br/>
                                <input type="radio" name="radio54" id="radio54"/><label>d. IVA</label><br/>
                                <input type="radio" name="radio54" id="radio54"/><label>e. ISPT</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">55. Es un método anticonceptivo que evita el paso del óvulo hacia el útero, obstruyendo a la vez el paso de los espermatozoides
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio55" id="radio55"/><label>a. Vasectomía</label><br/>
                                <input type="radio" name="radio55" id="radio55"/><label>b. Método del ritmo</label><br/>
                                <input type="radio" name="radio55" id="radio55"/><label>c. Dispositivo intrauterino</label><br/>
                                <input type="radio" name="radio55" id="radio55"/><label>d. Método del coitus interruptus</label><br/>
                                <input type="radio" name="radio55" id="radio55"/><label>e. Ligadura de trompas uterinas</label><br/>
                            </p>
                            <hr/>   

                            <label id="label1">56. _____________ son un dispositivo en el que se encuentran casi todos los componentes electrónicos necesarios para realizar alguna función.
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio56" id="radio56"/><label>a. Los floppies</label><br/>
                                <input type="radio" name="radio56" id="radio56"/><label>b. Los bulbos</label><br/>
                                <input type="radio" name="radio56" id="radio56"/><label>c. Las unidades de disco</label><br/>
                                <input type="radio" name="radio56" id="radio56"/><label>d. Los dispositivos de entrada</label><br/>
                                <input type="radio" name="radio56" id="radio56"/><label>e. Los circuitos integrados</label><br/>
                            </p>
                            <hr/>     

                            <label id="label1">57. La velocidad del sonido en el vacío absoluto y a una temperatura constante es de alrededor de:
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio57" id="radio57"/><label>a. 300 000 km/s </label><br/>
                                <input type="radio" name="radio57" id="radio57"/><label>b. 330 m/s</label><br/>
                                <input type="radio" name="radio57" id="radio57"/><label>c. 5 000 m/s </label><br/>
                                <input type="radio" name="radio57" id="radio57"/><label>d. Cero m/s</label><br/>
                                <input type="radio" name="radio57" id="radio57"/><label>e. 1 450 m/s</label><br/>
                            </p>
                            <hr/>  

                            <label id="label1">58. Un foco con filamento de tungsteno enciende debido a que:
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio58" id="radio58"/><label>a. con el calor, los electrones se orientan en un solo sentido</label><br/>
                                <input type="radio" name="radio58" id="radio58"/><label>b. el filamento se calienta porque opone resistencia al flujo eléctrico</label><br/>
                                <input type="radio" name="radio58" id="radio58"/><label>c. al circular libremente, los electrones chocan entre sí y desprenden energía</label><br/>
                                <input type="radio" name="radio58" id="radio58"/><label>d. el flujo eléctrico se mantiene constante en ambos sentidos</label><br/>
                                <input type="radio" name="radio58" id="radio58"/><label>e. el flujo eléctrico se mantiene constante en un solo sentido</label><br/>
                            </p>
                            <hr/>     

                            <label id="label1">59. En física se le llama ___________ al fenómeno que se produce al coincidir la frecuencia propia de un sistema mecánico o eléctrico con la frecuencia de una excitación externa.
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio59" id="radio59"/><label>a. resonancia</label><br/>
                                <input type="radio" name="radio59" id="radio59"/><label>b. radiancia</label><br/>
                                <input type="radio" name="radio59" id="radio59"/><label>c. radiactividad</label><br/>
                                <input type="radio" name="radio59" id="radio59"/><label>d. electronegatividad </label><br/>
                                <input type="radio" name="radio59" id="radio59"/><label>e. ionización</label><br/>
                            </p>
                            <hr/>    

                            <label id="label1">60. La siguiente gráfica puede expresar los planteamientos que contiene la teoría expuesta por:
                            </label><div id="ejercicio17" ></div>
                            <br><br>
                            <p>
                                <input type="radio" name="radio60" id="radio60"/><label>a. Johann Mendel </label><br/>
                                <input type="radio" name="radio60" id="radio60"/><label>b. Charles Darwin </label><br/>
                                <input type="radio" name="radio60" id="radio60"/><label>c. Thomas Malthus</label><br/>
                                <input type="radio" name="radio60" id="radio60"/><label>d. Max Weber</label><br/>
                                <input type="radio" name="radio60" id="radio60"/><label>e. Karl Marx</label><br/>
                            </p>
                            <hr/>
                            
                            <label id="label1"> 61. Es una de las constelaciones más famosas, se puede ver durante todo el año mirando hacia el norte.____________ también es una muy buena guía para identificar otras constelaciones. 
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio61" id="radio61"/><label>a. Orión</label><br/>
                                <input type="radio" name="radio61" id="radio61"/><label>b. El Can Mayor</label><br/>
                                <input type="radio" name="radio61" id="radio61"/><label>c. El Fénix</label><br/>
                                <input type="radio" name="radio61" id="radio61"/><label>d. La Osa Mayor</label><br/>
                                <input type="radio" name="radio61" id="radio61"/><label>e. El Centauro</label><br/>
                            </p>
                            <hr/>

                                <label id="label1">62. En el esquema, ¿cuál es la letra que identifica al esternón?</label>
                                <div id="ejercicio18"> </div>
                            <br><br>
                            <p>
                                <input type="radio" name="radio62" id="radio62"/><label>a. </label><br/>
                                <input type="radio" name="radio62" id="radio62"/><label>b. </label><br/>
                                <input type="radio" name="radio62" id="radio62"/><label>c. </label><br/>
                                <input type="radio" name="radio62" id="radio62"/><label>d. </label><br/>
                                <input type="radio" name="radio62" id="radio62"/><label>e. </label><br/>
                            </p>
                            <hr/>

                                <label id="label1">63. De acuerdo con la Ley de Hooke,el alargamiento de un resorte es directamente proporcional a la fuerza que se le aplica. En otras palabras, esto quiere decir que:</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio63" id="radio63"/><label>a. un resorte se estira de acuerdo con la cantidad de peso que se le aplica.</label><br/>
                                <input type="radio" name="radio63" id="radio63"/><label>b. el peso es proporcional a la fuerza del resorte.</label><br/>
                                <input type="radio" name="radio63" id="radio63"/><label>c. un resorte se estira al doble del peso que se le aplica.</label><br/>
                                <input type="radio" name="radio63" id="radio63"/><label>d. el peso depende del alargamiento del resorte.</label><br/>
                                <input type="radio" name="radio63" id="radio63"/><label>e. el alargamiento del resorte está en función de la velocidad y la distancia que recorre</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">64. Un vehículo tiene una masa de 600 kg. La fuerza que se le debe aplicar para acelerarlo a 1 m/seg<sup>2</sup> es:</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio64" id="radio64"/><label>a. 0.6 N</label><br/>
                                <input type="radio" name="radio64" id="radio64"/><label>b. 6.0 N</label><br/>
                                <input type="radio" name="radio64" id="radio64"/><label>c. 60.0 N</label><br/>
                                <input type="radio" name="radio64" id="radio64"/><label>d. 600.0 N</label><br/>
                                <input type="radio" name="radio64" id="radio64"/><label>e. 6,000.0 N</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">65. Las plantas verdes deben su color principalmente a la presencia de: </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio65" id="radio65"/><label>a. pigmentos que absorben el color verde.</label><br/>
                                <input type="radio" name="radio65" id="radio65"/><label>b. filtros químicos que absorben la luz blanca.</label><br/>
                                <input type="radio" name="radio65" id="radio65"/><label>c. carotenos que reflejan la luz azul.</label><br/>
                                <input type="radio" name="radio65" id="radio65"/><label>d. pigmentos que reflejan el color verde.</label><br/>
                                <input type="radio" name="radio65" id="radio65"/><label>e. pigmentos que reflejan todos los colores menos el verde.
                                </label><br/>
                            </p>
                            <hr/>

                                <label id="label1">66. El siguiente esquema representa la estructura de una molécula. Seleccione la opción que la denomina correctamente.</label>
                                <div id="ejercicio19"></div>
                            <br><br>
                            <p>
                                <input type="radio" name="radio66" id="radio66"/><label>a. Sacarosa</label><br/>
                                <input type="radio" name="radio66" id="radio66"/><label>b. Manosa</label><br/>
                                <input type="radio" name="radio66" id="radio66"/><label>c. Fructosa</label><br/>
                                <input type="radio" name="radio66" id="radio66"/><label>d. Glucosa</label><br/>
                                <input type="radio" name="radio66" id="radio66"/><label>e. Ribosa</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">67. Elija la opción que relaciona correctamente ambas columnas.</label><br><div id="ejercicio201"></div>
                            <br><br>
                            <p>
                                <input type="radio" name="radio67" id="radio67"/><label>a. 1a, 2b, 3c</label><br/>
                                <input type="radio" name="radio67" id="radio67"/><label>b. 1b, 2a, 3c</label><br/>
                                <input type="radio" name="radio67" id="radio67"/><label>c. 1c, 3b, 4a</label><br/>
                                <input type="radio" name="radio67" id="radio67"/><label>d. 2c, 3a, 4b</label><br/>
                                <input type="radio" name="radio67" id="radio67"/><label>e. 2a, 3b, 4c</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">68. La gráfica representa el comportamiento de una sustancia sólida que fue calentada de manera constante durante 27 minutos. ¿A qué temperatura pasó de sólido a líquido?</label>
                                 <div id="ejercicio20"></div>
                            <br><br>
                            <p>
                                <input type="radio" name="radio68" id="radio68"/><label>a. 20°C</label><br/>
                                <input type="radio" name="radio68" id="radio68"/><label>b. 45°C</label><br/>
                                <input type="radio" name="radio68" id="radio68"/><label>c. 55°C</label><br/>
                                <input type="radio" name="radio68" id="radio68"/><label>d. 59°C</label><br/>
                                <input type="radio" name="radio68" id="radio68"/><label>e. 69°C</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">69. ¿Cuál de las siguientes propiedades de la luz no cambia cuando ésta pasa de un medio a otro?</label>
                                <div id="ejercicio21"></div>
                            <br><br>
                            <p>
                                <input type="radio" name="radio69" id="radio69"/><label>a. La dirección</label><br/>
                                <input type="radio" name="radio69" id="radio69"/><label>b. La frecuencia</label><br/>
                                <input type="radio" name="radio69" id="radio69"/><label>c. La inclinación</label><br/>
                                <input type="radio" name="radio69" id="radio69"/><label>d. La longitud de onda</label><br/>
                                <input type="radio" name="radio69" id="radio69"/><label>e. La velocidad</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">70. Seleccione la opción que relaciona los términos de ambas columnas:</label><br>
                            <br><div id="ejercicio211"></div>
                            <br><br>
                            <p>
                                <input type="radio" name="radio70" id="radio70"/><label>a. 1c, 2a, 3d, 4b </label><br/>
                                <input type="radio" name="radio70" id="radio70"/><label>b. 1b, 2a, 3d, 4c</label><br/>
                                <input type="radio" name="radio70" id="radio70"/><label>c. 1c, 2d, 3a, 4b</label><br/>
                                <input type="radio" name="radio70" id="radio70"/><label>d. 1b, 2a, 3c, 4d</label><br/>
                                <input type="radio" name="radio70" id="radio70"/><label>e. 1d, 2b, 3c, 4a</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">71. Se presentan como una red conectada a la delgada capa de citoplasma que rodea al núcleo de la célula. Tienen la particularidad de captar y almacenar el agua.</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio71" id="radio71"/><label>a. Centrosomas</label><br/>
                                <input type="radio" name="radio71" id="radio71"/><label>b. Vacuolas</label><br/>
                                <input type="radio" name="radio71" id="radio71"/><label>c. Folículos</label><br/>
                                <input type="radio" name="radio71" id="radio71"/><label>d. Cloroplastos</label><br/>
                                <input type="radio" name="radio71" id="radio71"/><label>e. Lisosomas</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">72. Elija la opción que completa correctamente el siguiente cuadro.</label>
                            <div id="ejercicio22"></div>    
                            <br><br>
                            <p>
                                <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>X (vitamina) / </strong><strong>Y (fuente)</strong></label>
                                <br/>
                                <input type="radio" name="radio72" id="radio72"/><label>a. Vitamina C, cítricos y vegetales verdes.</label><br/>
                                <input type="radio" name="radio72" id="radio72"/><label>b. Vitamina A, pollo y pescado.</label><br/>
                                <input type="radio" name="radio72" id="radio72"/><label>c. Vitamina D, betabel y leche.</label><br/>
                                <input type="radio" name="radio72" id="radio72"/><label>d. Vitamina K, rábano y mantequilla.</label><br/>
                                <input type="radio" name="radio72" id="radio72"/><label>e. Vitamina K, carnes rojas y nueces.</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">73. Inventor del pararrayos, demostró que las tormentas son fenómenos de tipo eléctrico.</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio73" id="radio73"/><label>a. Alexander Graham Bell</label><br/>
                                <input type="radio" name="radio73" id="radio73"/><label>b. Benjamin Franklin</label><br/>
                                <input type="radio" name="radio73" id="radio73"/><label>c. Tomas Alva Edison</label><br/>
                                <input type="radio" name="radio73" id="radio73"/><label>d. George Westinghouse</label><br/>
                                <input type="radio" name="radio73" id="radio73"/><label>e.  Anton Frederick Philips</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">74. ¿Cuál de las siguientes afirmaciones <strong>"no"</strong> es correcta?</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio74" id="radio74"/><label>a. Chile es cruzado por el Círculo Polar Antártico</label><br/>
                                <input type="radio" name="radio74" id="radio74"/><label>b.  México es cruzado por el Trópico de Cáncer</label><br/>
                                <input type="radio" name="radio74" id="radio74"/><label>c. Brasil es cruzado por el Ecuador</label><br/>
                                <input type="radio" name="radio74" id="radio74"/><label>d. Paraguay es cruzado por el Trópico de Capricornio</label><br/>
                                <input type="radio" name="radio74" id="radio74"/><label>e. Canadá es cruzado por el Círculo Polar Ártico</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">75. Los grupos étnicos están constituidos por personas que comparten una unidad racial y una tradición cultural común. Un ejemplo de este tipo de grupos son los:</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio75" id="radio75"/><label>a. sureños</label><br/>
                                <input type="radio" name="radio75" id="radio75"/><label>b. norteños</label><br/>
                                <input type="radio" name="radio75" id="radio75"/><label>c. mexicanos</label><br/>
                                <input type="radio" name="radio75" id="radio75"/><label>d. tarahumaras</label><br/>
                                <input type="radio" name="radio75" id="radio75"/><label>e. indios</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">76. ¿Cuál de los siguientes ríos se encuentra en la República Mexicana?</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio76" id="radio76"/><label>a. Paraná</label><br/>
                                <input type="radio" name="radio76" id="radio76"/><label>b. Elba</label><br/>
                                <input type="radio" name="radio76" id="radio76"/><label>c. Suchiate</label><br/>
                                <input type="radio" name="radio76" id="radio76"/><label>d. Támesis</label><br/>
                                <input type="radio" name="radio76" id="radio76"/><label>e. Ródano</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">77. Señale la opción que menciona únicamente corrientes filosóficas.</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio77" id="radio77"/><label>a. Surrealismo, cubismo, realismo, impresionismo.</label><br/>
                                <input type="radio" name="radio77" id="radio77"/><label>b. Existencialismo, idealismo, materialismo dialéctico.</label><br/>
                                <input type="radio" name="radio77" id="radio77"/><label>c. Modernismo, vanguardia, barroco, realismo.</label><br/>
                                <input type="radio" name="radio77" id="radio77"/><label>d. Expresionismo, estructuralismo, dialéctica.</label><br/>
                                <input type="radio" name="radio77" id="radio77"/><label>e.  Vanguardismo, impresionismo, liberalismo, posmodernismo.</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">78. En México, los Poderes de la Unión son:</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio78" id="radio78"/><label>a. federal, estatal y municipal</label><br/>
                                <input type="radio" name="radio78" id="radio78"/><label>b. bancario, mercantil y comercial</label><br/>
                                <input type="radio" name="radio78" id="radio78"/><label>c. judicial, legislativo y ejecutivo</label><br/>
                                <input type="radio" name="radio78" id="radio78"/><label>d. público, privado y social</label><br/>
                                <input type="radio" name="radio78" id="radio78"/><label>e. laboral, gubernamental y empresarial</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">79. Seleccione la opción que "no" contiene el nombre de un personaje vinculado con la Primera Guerra Mundial.</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio79" id="radio79"/><label>a. Francisco José de Austria</label><br/>
                                <input type="radio" name="radio79" id="radio79"/><label>b. Sir Winston Churchill</label><br/>
                                <input type="radio" name="radio79" id="radio79"/><label>c. Paul von Hindenburg</label><br/>
                                <input type="radio" name="radio79" id="radio79"/><label>d. Franklin D. Roosevelt</label><br/>
                                <input type="radio" name="radio79" id="radio79"/><label>e. Georges Clemenceau</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">80. La regulación de las relaciones tanto individuales como sociales es objeto de las disciplinas:</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio80" id="radio80"/><label>a. jurídicas</label><br/>
                                <input type="radio" name="radio80" id="radio80"/><label>b. económicas</label><br/>
                                <input type="radio" name="radio80" id="radio80"/><label>c. administrativas</label><br/>
                                <input type="radio" name="radio80" id="radio80"/><label>d. psicológicas</label><br/>
                                <input type="radio" name="radio80" id="radio80"/><label>e. pedagógicas</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">81. Científico inglés que realizó aportaciones fundamentales a la mecánica, la óptica y al cálculo diferencial.</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio81" id="radio81"/><label>a. Kant</label><br/>
                                <input type="radio" name="radio81" id="radio81"/><label>b. Descartes</label><br/>
                                <input type="radio" name="radio81" id="radio81"/><label>c. Bacon</label><br/>
                                <input type="radio" name="radio81" id="radio81"/><label>d. Galileo</label><br/>
                                <input type="radio" name="radio81" id="radio81"/><label>e. Newton</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">82. Mencione uno de los cambios sociales más importantes que se desencadenó en la primera revolución industrial.</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio82" id="radio82"/><label>a.  Uso de nuevos materiales para la construcción</label><br/>
                                <input type="radio" name="radio82" id="radio82"/><label>b. Desarrollo de la clase obrera</label><br/>
                                <input type="radio" name="radio82" id="radio82"/><label>c. Se acentúa la disminución de la población urbana</label><br/>
                                <input type="radio" name="radio82" id="radio82"/><label>d. Hay grandes mejoras en el transporte</label><br/>
                                <input type="radio" name="radio82" id="radio82"/><label>e. Se genera un retroceso en los conocimientos científicos</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">83. De las siguientes, mencione tres actividades o ramas económicas que se encuentran en el sector agropecuario o primario de la economía del país.</label>
                                <label id="label1" style="left: 4%;">
                                1. Caza
                                <br>2. Transporte
                                <br>3. Comercio
                                <br>4. Envasado de frutas y legumbres
                                <br>5. Ganadería
                                <br>6. Extracción petrolera
                                <br>7.Silvicultura
                                </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio83" id="radio83"/><label>a. 1, 2, 3</label><br/>
                                <input type="radio" name="radio83" id="radio83"/><label>b. 3, 4, 7</label><br/>
                                <input type="radio" name="radio83" id="radio83"/><label>c. 5, 6, 7</label><br/>
                                <input type="radio" name="radio83" id="radio83"/><label>d. 1, 5, 7</label><br/>
                                <input type="radio" name="radio83" id="radio83"/><label>e. 1, 4, 6</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">84. Elija la opción que ordena cronológicamente las siguientes culturas: 
                                <br>1. Teotihuacana, 2. Tarasca, 3. Maya, 4. Olmeca, 5. Mixteca.</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio84" id="radio84"/><label>a. 4, 1, 3, 5, 2</label><br/>
                                <input type="radio" name="radio84" id="radio84"/><label>b. 1, 4, 2, 3, 5</label><br/>
                                <input type="radio" name="radio84" id="radio84"/><label>c. 1, 2, 3, 4, 5</label><br/>
                                <input type="radio" name="radio84" id="radio84"/><label>d. 2, 3, 5, 4, 1</label><br/>
                                <input type="radio" name="radio84" id="radio84"/><label>e. 3, 2, 5, 1, 4</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">85. La Ley Federal de Educación es una ley reglamentaria del artículo ________ constitucional.</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio85" id="radio85"/><label>a. 3°</label><br/>
                                <input type="radio" name="radio85" id="radio85"/><label>b. 5°</label><br/>
                                <input type="radio" name="radio85" id="radio85"/><label>c. 27</label><br/>
                                <input type="radio" name="radio85" id="radio85"/><label>d. 115</label><br/>
                                <input type="radio" name="radio85" id="radio85"/><label>e. 123</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">86. Relacione las imágenes con los personajes que representan.</label>
                                <div id="ejercicio23"></div>
                            <br><br><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1  2 3 4 5 6</label>
                            <p>
                                <input type="radio" name="radio87" id="radio87"/><label>a. a b c d e f</label><br/>
                                <input type="radio" name="radio87" id="radio87"/><label>b. b c e f a d</label><br/>
                                <input type="radio" name="radio87" id="radio87"/><label>c. d a e f b c</label><br/>
                                <input type="radio" name="radio87" id="radio87"/><label>d. b c e f d a</label><br/>
                                <input type="radio" name="radio87" id="radio87"/><label>e. f e d c b a</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">87. Elija la opción que localiza a Malasia en el siguiente mapa.</label>
                                <div id="ejercicio24"></div>
                            <br><br>
                            <p>
                                <input type="radio" name="radio86" id="radio86"/><label>a. </label><br/>
                                <input type="radio" name="radio86" id="radio86"/><label>b. </label><br/>
                                <input type="radio" name="radio86" id="radio86"/><label>c. </label><br/>
                                <input type="radio" name="radio86" id="radio86"/><label>d. </label><br/>
                                <input type="radio" name="radio86" id="radio86"/><label>e. </label><br/>
                            </p>
                            <hr/>

                            <label id="label1">88. Seleccione la opción que relaciona <strong>"incorrectamente"</strong> a un país con su capital.</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio88" id="radio88"/><label>a. Puerto Rico - San José</label><br/>
                                <input type="radio" name="radio88" id="radio88"/><label>b. República Dominicana - Santo Domingo</label><br/>
                                <input type="radio" name="radio88" id="radio88"/><label>c. El Salvador- San Salvador</label><br/>
                                <input type="radio" name="radio88" id="radio88"/><label>d. Colombia - Santa Fe de Bogotá</label><br/>
                                <input type="radio" name="radio88" id="radio88"/><label>e. Chile - Santiago</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">89. Si a es un número tal que a &lt; 0, entonces: </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio89" id="radio89"/><label>a. 1/a > 0</label><br/>
                                <input type="radio" name="radio89" id="radio89"/><label>b. 1/a &lt; 0</label><br/>
                                <input type="radio" name="radio89" id="radio89"/><label>c. 1/a = 0</label><br/>
                                <input type="radio" name="radio89" id="radio89"/><label>d. 1/a > 1</label><br/>
                                <input type="radio" name="radio89" id="radio89"/><label>e. 1/a = 1</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">90. La expresión (17<sup>2</sup>)<sup>3</sup> es equivalente a: </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio90" id="radio90"/><label>a. (17 x 2)(17 x 3)</label><br/>
                                <input type="radio" name="radio90" id="radio90"/><label>b. (17<sup>2</sup>)(17<sup>2</sup>)(17<sup>2</sup>)</label><br/>
                                <input type="radio" name="radio90" id="radio90"/><label>c. 17 x 2 x 3</label><br/>
                                <input type="radio" name="radio90" id="radio90"/><label>d. (17 x 2)<sup>3</sup></label><br/>
                                <input type="radio" name="radio90" id="radio90"/><label>e. (17 x 17)(17 x 17) x 3</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">91. Al factorizar a<sup>2</sup> + 2a - 15 se obtiene:</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio91" id="radio91"/><label>a. (a - 3)(a + 5)</label><br/>
                                <input type="radio" name="radio91" id="radio91"/><label>b. (a + 5)(a + 3)</label><br/>
                                <input type="radio" name="radio91" id="radio91"/><label>c. (a - 3)(a - 5)</label><br/>
                                <input type="radio" name="radio91" id="radio91"/><label>d. (a - 6)(a + 4)</label><br/>
                                <input type="radio" name="radio91" id="radio91"/><label>e. (a + 4)(a - 6)</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">92. Si se unen todos los puntos distantes 6 unidades de un origen (0, 0), el resultado va a ser un...</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio92" id="radio92"/><label>a. cuadrado con perímetro de 24 unidades</label><br/>
                                <input type="radio" name="radio92" id="radio92"/><label>b. círculo con diámetro de 6 unidades</label><br/>
                                <input type="radio" name="radio92" id="radio92"/><label>c. cuadrado con área de 36 unidades</label><br/>
                                <input type="radio" name="radio92" id="radio92"/><label>d. cuadrado con área de 24 unidades</label><br/>
                                <input type="radio" name="radio92" id="radio92"/><label>e. círculo con radio de 6 unidades</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">93. (8)<sup>1/3</sup> es igual a:</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio93" id="radio93"/><label>a. 1/24</label><br/>
                                <input type="radio" name="radio93" id="radio93"/><label>b. 4/2</label><br/>
                                <input type="radio" name="radio93" id="radio93"/><label>c. 8</label><br/>
                                <input type="radio" name="radio93" id="radio93"/><label>d. 8/2</label><br/>
                                <input type="radio" name="radio93" id="radio93"/><label>e. 3/8</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">94. ¿Cuál es la probabilidad de que el premio mayor del próximo sorteo de la lotería termine en siete?</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio94" id="radio94"/><label>a. .10</label><br/>
                                <input type="radio" name="radio94" id="radio94"/><label>b. .70</label><br/>
                                <input type="radio" name="radio94" id="radio94"/><label>c. 1/7</label><br/>
                                <input type="radio" name="radio94" id="radio94"/><label>d. .50</label><br/>
                                <input type="radio" name="radio94" id="radio94"/><label>e. .35</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">95. Calcule el valor de x para el siguiente par de ecuaciones:
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3x + y<sup>2</sup> = 12
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y<sup>2</sup> + 2 = 2(x + 2)
                                </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio95" id="radio95"/><label>a. x = -2</label><br/>
                                <input type="radio" name="radio95" id="radio95"/><label>b. x = ± &#8730;2</label><br/>
                                <input type="radio" name="radio95" id="radio95"/><label>c. x = 4</label><br/>
                                <input type="radio" name="radio95" id="radio95"/><label>d. x = 2</label><br/>
                                <input type="radio" name="radio95" id="radio95"/><label>e. x = 3</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">96. La ecuación cuadrática doble en que uno y otro cuadrados tienen signo desigual corresponde necesariamente a la expresión de:</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio96" id="radio96"/><label>a. una recta</label><br/>
                                <input type="radio" name="radio96" id="radio96"/><label>b. un círculo</label><br/>
                                <input type="radio" name="radio96" id="radio96"/><label>c. una parábola</label><br/>
                                <input type="radio" name="radio96" id="radio96"/><label>d. una elipse</label><br/>
                                <input type="radio" name="radio96" id="radio96"/><label>e. una hipérbola</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">97. Elija la representación matemática de la siguiente frase: “Dos tercios de <strong>m</strong> restado del producto de 14 veces <strong>n</strong>”.</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio97" id="radio97"/><label>a. 14n - 2m/3</label><br/>
                                <input type="radio" name="radio97" id="radio97"/><label>b. 14(2m/3 - n)</label><br/>
                                <input type="radio" name="radio97" id="radio97"/><label>c. 14n - 2/(3m)</label><br/>
                                <input type="radio" name="radio97" id="radio97"/><label>d. 2/3m - 14n</label><br/>
                                <input type="radio" name="radio97" id="radio97"/><label>e. 2/3(m - 14n)</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">98. (3a<sup>2</sup>b + 2b<sup>2</sup>)<sup>3</sup>=</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio98" id="radio98"/><label>a. 9a<sup>6</sup>b<sup>3</sup>+ 6a<sup>2</sup>b<sup>3</sup>+6a<sup>2</sup>b<sup>4</sup>+4b<sup>6</sup></label><br/>
                                <input type="radio" name="radio98" id="radio98"/><label>b. 27a<sup>6</sup>b<sup>3</sup>+ 12a<sup>2</sup>b<sup>3</sup>+36a<sup>2</sup>b<sup>4</sup>+6b<sup>6</sup></label><br/>
                                <input type="radio" name="radio98" id="radio98"/><label>c. 9a<sup>6</sup>b<sup>3</sup>+ 54a<sup>4</sup>b<sup>4</sup>+6a<sup>2</sup>b<sup>4</sup>+8b<sup>6</sup></label><br/>
                                <input type="radio" name="radio98" id="radio98"/><label>d. 27a<sup>6</sup>b<sup>3</sup>+ 54a<sup>4</sup>b<sup>4</sup>+36a<sup>2</sup>b<sup>5</sup>+8b<sup>6</sup></label><br/>
                                <input type="radio" name="radio98" id="radio98"/><label>e. 27a<sup>6</sup>b<sup>3</sup>+ 36a<sup>2</sup>b<sup>3</sup>+54a<sup>2</sup>b<sup>4</sup>+8b<sup>6</sup></label><br/>
                            </p>
                            <hr/>

                            <label id="label1">99. Calcule el perímetro de la siguiente circunferencia:(x - 8)<sup>2</sup>+ (y - 6)<sup>2</sup>= 9</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio99" id="radio99"/><label>a. 6&pi;</label><br/>
                                <input type="radio" name="radio99" id="radio99"/><label>b. 2&pi;</label><br/>
                                <input type="radio" name="radio99" id="radio99"/><label>c. 3/2&pi;</label><br/>
                                <input type="radio" name="radio99" id="radio99"/><label>d. &pi;/3</label><br/>
                                <input type="radio" name="radio99" id="radio99"/><label>e. 3&pi;</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">100. ¿Qué número debe ir dentro del radical? &radic; = 23</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio100" id="radio100"/><label>a. El tercio de 23</label><br/>
                                <input type="radio" name="radio100" id="radio100"/><label>b. La cuarta potencia de 23</label><br/>
                                <input type="radio" name="radio100" id="radio100"/><label>c. El doble de 23</label><br/>
                                <input type="radio" name="radio100" id="radio100"/><label>d. El cuadrado de 23</label><br/>
                                <input type="radio" name="radio100" id="radio100"/><label>e. El cubo de 23</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">101. Si X + 4<sup>5/6</sup> + 7<sup>5/6</sup> = 0, ¿cuál es el valor de X?

                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio101" id="radio101"/><label>a. -12<sup>2/3</sup> </label><br/>
                                <input type="radio" name="radio101" id="radio101"/><label>b. -10<sup>2/6</sup> </label><br/>
                                <input type="radio" name="radio101" id="radio101"/><label>c. -12</label><br/>
                                <input type="radio" name="radio101" id="radio101"/><label>d. 11<sup>1/3</sup></label><br/>
                                <input type="radio" name="radio101" id="radio101"/><label>e. 11<sup>10/6</sup></label><br/>
                            </p>
                            <hr/>

                            <label id="label1">102. ¿Cuál de los siguientes valores de x no satisface la desigualdad?
                                      X+12/8 > 1
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio102" id="radio102"/><label>a. -1/2  </label><br/>
                                <input type="radio" name="radio102" id="radio102"/><label>b. 1/4 </label><br/>
                                <input type="radio" name="radio102" id="radio102"/><label>c. 0   </label><br/>
                                <input type="radio" name="radio102" id="radio102"/><label>d. 1/2  </label><br/>
                                <input type="radio" name="radio102" id="radio102"/><label>e. -1/4 </label><br/>
                            </p>
                            <hr/>

                            <label id="label1">103. El área de un círculo que mide 126 km de diámetro es:</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio103" id="radio103"/><label>a. 395.84 km<sup>2</sup>  </label><br/>
                                <input type="radio" name="radio103" id="radio103"/><label>b. 827.92 km<sup>2</sup>  </label><br/>
                                <input type="radio" name="radio103" id="radio103"/><label>c. 7,850 km<sup>2</sup>   </label><br/>
                                <input type="radio" name="radio103" id="radio103"/><label>d. 12,416 km<sup>2</sup>  </label><br/>
                                <input type="radio" name="radio103" id="radio103"/><label>e. 12,469 km<sup>2</sup> </label><br/>
                            </p>
                            <hr/>

                            <label id="label1">104. 29 gramos pueden expresarse como:</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio104" id="radio104"/><label>a. 0.29 k </label><br/>
                                <input type="radio" name="radio104" id="radio104"/><label>b. 0.029 k  </label><br/>
                                <input type="radio" name="radio104" id="radio104"/><label>c. 0.0029 k  </label><br/>
                                <input type="radio" name="radio104" id="radio104"/><label>d. 0.29 gr </label><br/>
                                <input type="radio" name="radio104" id="radio104"/><label>e. 29 x 10<sup>-2</sup> k </label><br/>
                            </p>
                            <hr/>

                            <label id="label1">105. Elija la opción que designe mejor lo que era Juno.</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio105" id="radio105"/><label>a. Bailarina </label><br/>
                                <input type="radio" name="radio105" id="radio105"/><label>b. Poetisa  </label><br/>
                                <input type="radio" name="radio105" id="radio105"/><label>c. Cantante  </label><br/>
                                <input type="radio" name="radio105" id="radio105"/><label>d. Reina </label><br/>
                                <input type="radio" name="radio105" id="radio105"/><label>e. Diosa </label><br/>
                            </p>
                            <hr/>

                            <label id="label1">106. ¿Cuál es la palabra escrita "incorrectamente" en la siguiente lista? </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio106" id="radio106"/><label>a. Tristeza </label><br/>
                                <input type="radio" name="radio106" id="radio106"/><label>b. Condeza  </label><br/>
                                <input type="radio" name="radio106" id="radio106"/><label>c. Grandeza  </label><br/>
                                <input type="radio" name="radio106" id="radio106"/><label>d. Cabeza </label><br/>
                                <input type="radio" name="radio106" id="radio106"/><label>e. Flaqueza </label><br/>
                            </p>
                            <hr/>

                            <label id="label1">107. Indique cuál enunciado está escrito en forma correcta.</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio107" id="radio107"/><label>a. Han habido problemas y pueden haber más </label><br/>
                                <input type="radio" name="radio107" id="radio107"/><label>b. Ha habido problemas y puede haber más  </label><br/>
                                <input type="radio" name="radio107" id="radio107"/><label>c. Ha habido un problema y pueden haber más  </label><br/>
                                <input type="radio" name="radio107" id="radio107"/><label>d. Han habido problemas y puede haber más  </label><br/>
                                <input type="radio" name="radio107" id="radio107"/><label>e. Ha habido problemas y pueden haber más </label><br/>
                            </p>
                            <hr/>

                            <label id="label1">108. La oración es la unidad mínima que conserva sentido y autonomía sintáctica. ¿Cuántas oraciones encuentra en el siguiente párrafo,tomado de la novela <em>Los de abajo? <br>Un federal cayó en las mismas aguas, e indefectiblemente siguieron cayendo uno a uno a cada nuevo disparo. Pero sólo él tiraba hacia el río, y por cada uno de los que mataba ascendían intactos diez o veinte a la otra ribera.</em></label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio108" id="radio108"/><label>a. 2 </label><br/>
                                <input type="radio" name="radio108" id="radio108"/><label>b. 3 </label><br/>
                                <input type="radio" name="radio108" id="radio108"/><label>c. 4 </label><br/>
                                <input type="radio" name="radio108" id="radio108"/><label>d. 5 </label><br/>
                                <input type="radio" name="radio108" id="radio108"/><label>e. 6 </label><br/>
                            </p>
                            <hr/>

                            <label id="label1">109. ¿Cuál de las siguientes palabras debe llevar acento gráfico?</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio109" id="radio109"/><label>a. Volumen </label><br/>
                                <input type="radio" name="radio109" id="radio109"/><label>b. Dictamen </label><br/>
                                <input type="radio" name="radio109" id="radio109"/><label>c. Terraqueo </label><br/>
                                <input type="radio" name="radio109" id="radio109"/><label>d. Artero </label><br/>
                                <input type="radio" name="radio109" id="radio109"/><label>e. Fue </label><br/>
                            </p>
                            <hr/>

                            <label id="label1">110. Expresa una acción de duración limitada en proceso de ejecución, sin determinación de persona ni de número, ni variación en la terminación para expresar el tiempo.</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio110" id="radio110"/><label>a. Adverbio </label><br/>
                                <input type="radio" name="radio110" id="radio110"/><label>b. Gerundio </label><br/>
                                <input type="radio" name="radio110" id="radio110"/><label>c. Adjetivo </label><br/>
                                <input type="radio" name="radio110" id="radio110"/><label>d. Sujeto </label><br/>
                                <input type="radio" name="radio110" id="radio110"/><label>e. Nexo </label><br/>
                            </p>
                            <hr/>

                            <label id="label1">111. Diga cuál de las siguientes expresiones es correcta.</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio111" id="radio111"/><label>a. La máquina, qué aúlla  </label><br/>
                                <input type="radio" name="radio111" id="radio111"/><label>b. El automóvil, que, pasa </label><br/>
                                <input type="radio" name="radio111" id="radio111"/><label>c. Qué, se puede decir </label><br/>
                                <input type="radio" name="radio111" id="radio111"/><label>d. Mi cuaderno que me diste </label><br/>
                                <input type="radio" name="radio111" id="radio111"/><label>e. Martín, el que llegó
                           </label><br/>
                            </p>
                            <hr/>

                            <label id="label1">112. El lusitano es un individuo nacido en...</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio112" id="radio112"/><label>a. la Ciudad Luz (París)  </label><br/>
                                <input type="radio" name="radio112" id="radio112"/><label>b. la ciudad de San Luis, Mo.</label><br/>
                                <input type="radio" name="radio112" id="radio112"/><label>c. la región de Lorena</label><br/>
                                <input type="radio" name="radio112" id="radio112"/><label>d. la nación portuguesa </label><br/>
                                <input type="radio" name="radio112" id="radio112"/><label>e. los Países Bajos (Holanda)</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">113. Figura de las letras mexicanas, nacido en el estado de Jalisco en 1910. Conocido como iniciador de la narrativa sobre la Revolución Mexicana, una de sus más famosas novelas es <em>Los de abajo</em></label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio113" id="radio113"/><label>a. Salvador Díaz Mirón </label><br/>
                                <input type="radio" name="radio113" id="radio113"/><label>b. Federico Gamboa </label><br/>
                                <input type="radio" name="radio113" id="radio113"/><label>c. Mariano Azuela </label><br/>
                                <input type="radio" name="radio113" id="radio113"/><label>d. Manuel Gutiérrez Nájer</label><br/>
                                <input type="radio" name="radio113" id="radio113"/><label>e. Xavier Villaurrutia</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">114. El autor de <em>La verdad sospechosa es...</em></label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio114" id="radio114"/><label>a. Miguel de Cervantes  </label><br/>
                                <input type="radio" name="radio114" id="radio114"/><label>b. Octavio Paz</label><br/>
                                <input type="radio" name="radio114" id="radio114"/><label>c. Gabriel García Márquez</label><br/>
                                <input type="radio" name="radio114" id="radio114"/><label>d. Juan Ruiz de Alarcón</label><br/>
                                <input type="radio" name="radio114" id="radio114"/><label>e. Jorge Luis Borges</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">115. Que se nutre de raíces, es el significado de...</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio115" id="radio115"/><label>a. rizótropo </label><br/>
                                <input type="radio" name="radio115" id="radio115"/><label>b. rizófago </label><br/>
                                <input type="radio" name="radio115" id="radio115"/><label>c. rizópodo </label><br/>
                                <input type="radio" name="radio115" id="radio115"/><label>d. rizoma</label><br/>
                                <input type="radio" name="radio115" id="radio115"/><label>e. rizófora</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">116. El verso <em>Nuestras vidas son los ríos que van a dar a la mar que es el morir,</em> de Jorge Manrique, es:</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio116" id="radio116"/><label>a. una comparación</label><br/>
                                <input type="radio" name="radio116" id="radio116"/><label>b. una narración</label><br/>
                                <input type="radio" name="radio116" id="radio116"/><label>c. una metáfora</label><br/>
                                <input type="radio" name="radio116" id="radio116"/><label>d. un símil</label><br/>
                                <input type="radio" name="radio116" id="radio116"/><label>e. una onomatopeya</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">117. ¿Cuáles de las siguientes palabras deben llevar la letra <strong>"b"</strong> en el espacio indicado?
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Con_ exo <br>
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. _entila  <br>
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Tum_a    <br>
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Em_rollo <br>
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. _olero   <br>
                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio117" id="radio117"/><label>a. 1, 2 </label><br/>
                                <input type="radio" name="radio117" id="radio117"/><label>b. 1, 2, 3 </label><br/>
                                <input type="radio" name="radio117" id="radio117"/><label>c. 2, 3, 4</label><br/>
                                <input type="radio" name="radio117" id="radio117"/><label>d. 3, 4, 5</label><br/>
                                <input type="radio" name="radio117" id="radio117"/><label>e. 3, 4</label><br/>
                            </p>
                            <hr/>

                            <label id="label1">118. ¿Qué significa <em>tonante</em> en el texto <em>Ante la mirada tonante del padre</em>?</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio118" id="radio118"/><label>a. Inquisitiva e interrogante </label><br/>
                                <input type="radio" name="radio118" id="radio118"/><label>b. Iracunda y terrible</label><br/>
                                <input type="radio" name="radio118" id="radio118"/><label>c. Paciente y atenta </label><br/>
                                <input type="radio" name="radio118" id="radio118"/><label>d. Angustiada y sorprendida </label><br/>
                                <input type="radio" name="radio118" id="radio118"/><label>e. Aletargada y somnolienta</label><br/>
                            </p>
                            <hr/>

                            <label id="label1"><em>119. Deténgase a la derecha</em> es una frase...</label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio119" id="radio119"/><label>a. descriptiva</label><br/>
                                <input type="radio" name="radio119" id="radio119"/><label>b. interrogativa</label><br/>
                                <input type="radio" name="radio119" id="radio119"/><label>c. exclamativa</label><br/>
                                <input type="radio" name="radio119" id="radio119"/><label>d. narrativa</label><br/>
                                <input type="radio" name="radio119" id="radio119"/><label>e. imperativa</label><br/>
                            </p>
                            <hr/> 	

                            <label id="label1">120. Seleccione la opción que señala correctamente las palabras que deben escribirse con acento en la siguiente frase: SERA<sup>1</sup> NECESARIO<sup>2</sup> LEER<sup>3</sup> LA<sup>4</sup> GUIA<sup>5</sup> DE<sup>6</sup> ESTE<sup>7</sup> EXAMEN<sup>8</sup> PARA<sup>9</sup> OBTENER<sup>10</sup> UN<sup>11</sup> RESULTADO<sup>12</sup> DE<sup>13</sup> EXITO<sup>14</sup>, ¡CON<sup>15</sup> ELLO<sup>16</sup> PODRE<sup>17</sup> INGRESAR<sup>18</sup> AL<sup>19</sup> NIVEL<sup>20</sup> SUPERIOR<sup>21</sup>!

                            </label>
                            <br><br>
                            <p>
                                <input type="radio" name="radio120" id="radio120"/><label>a. 3, 5, 8, 12, 14</label><br/>
                                <input type="radio" name="radio120" id="radio120"/><label>b. 1, 5, 14, 17</label><br/>
                                <input type="radio" name="radio120" id="radio120"/><label>c. 1, 3, 5, 12, 14</label><br/>
                                <input type="radio" name="radio120" id="radio120"/><label>d. 5, 8, 14, 1</label><br/>
                                <input type="radio" name="radio120" id="radio120"/><label>e. 1, 5, 17, 18</label><br/>
                            </p>
                            <hr/> 
                           <p></p>
                           <div style="text-align: center;">
                               <a id="registrar" class="btn btn-primary" style="width:30%; height: 50px; font-size:2.3rem;" name="registrar">Resultado</a>
					       </div>
                                </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
       /* resul=['0','1','3','1'];
    
            for(int i=1;i<100;i++){
                
                if (document.forms['evaluacion']['radio'+i][resul[i-1]].checked){
                c++;
                }
            }*/
    
    
    $(document).ready(function(){
		$('#registrar').click(function(){
            
            
            var c=0;
            
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
            if (document.forms['evaluacion']['radio4'][2].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio5'][1].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio6'][1].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio7'][1].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio8'][1].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio9'][0].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio10'][4].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio11'][4].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio12'][1].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio13'][3].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio14'][3].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio15'][1].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio16'][2].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio17'][0].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio18'][0].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio19'][4].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio20'][4].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio21'][1].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio22'][0].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio23'][2].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio24'][4].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio25'][0].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio26'][3].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio27'][4].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio28'][2].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio29'][4].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio30'][2].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio31'][3].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio32'][0].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio33'][2].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio34'][0].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio35'][1].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio36'][3].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio37'][3].checked)
            {
                c++;
            }if (document.forms['evaluacion']['radio38'][2].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio39'][4].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio40'][2].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio41'][2].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio42'][2].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio43'][0].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio44'][4].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio45'][2].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio46'][2].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio47'][1].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio48'][1].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio49'][3].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio50'][3].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio51'][3].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio52'][2].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio53'][1].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio54'][3].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio55'][4].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio56'][4].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio57'][3].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio58'][1].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio59'][0].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio60'][2].checked)
            {
                c++;
            }
            if (document.forms['evaluacion']['radio61'][3].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio62'][2].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio63'][0].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio64'][3].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio65'][3].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio66'][0].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio67'][2].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio68'][2].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio69'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio70'][0].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio71'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio72'][4].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio73'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio74'][0].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio75'][3].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio76'][2].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio77'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio78'][2].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio79'][3].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio80'][0].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio81'][4].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio82'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio83'][3].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio84'][0].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio85'][0].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio86'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio87'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio88'][0].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio89'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio90'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio91'][0].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio92'][4].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio93'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio94'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio95'][3].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio96'][4].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio97'][0].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio98'][3].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio99'][0].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio100'][3].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio101'][0].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio102'][0].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio103'][4].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio104'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio105'][4].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio106'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio107'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio108'][3].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio109'][2].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio110'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio111'][4].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio112'][3].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio113'][2].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio114'][3].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio115'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio116'][2].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio117'][3].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio118'][1].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio119'][4].checked)
                {
                    c++;
                }
				if (document.forms['evaluacion']['radio120'][1].checked)
                {
                    c++;
                }
            
            var nombre= "<?php echo $_REQUEST['nom']; ?>";
            var apellido= "<?php echo $_REQUEST['apellido']; ?>";
            var correo= "<?php echo $_REQUEST['cor']; ?>";
            var carrera= "<?php echo $_REQUEST['car']; ?>";
            var resultado= c;
           /* window.location="guardar.php?res="+resultado+"&nom="+nombre+"&apellido="+apellido+"&cor="+correo+"&car="+carrera;*/
            //http://192.168.1.65/PaginaJADEMI/
            //https://www.youtube.com/watch?v=b1pSWq9NFlc&t=5s
            
            cadena="carrera=" + carrera +
					"&nombre=" + nombre +
					"&apellido=" + apellido +
					"&correo=" + correo + 
					"&resultado=" + resultado;
            alertify.alert("Enviando Datos..!! Espera un momento a que la pagina termine de cargar");
            alertify.success("Enviando Datos..!! Espera un momento");

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){
                            if(r==1){
								alertify.success("Datos enviados con exito");
                                window.location="salida.php?res="+resultado;
							}else{
								alertify.error("Fallo al enviar datos");
							}
						}
					});
        });
	});
</script>