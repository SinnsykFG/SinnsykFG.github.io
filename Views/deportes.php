<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Tint&family=New+Amsterdam&display=swap" rel="stylesheet">
    <title>El Faro</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body onload="actReloj(), cargarNoticias()">
    <header>
        <div class="container-fluid text-center" style="background-color: lightseagreen">
            <div class="row">
              <div class="col-4">
                <a href="index.html">
                    <img class="header-logo" src="img/El_faro.webp" alt="logo">
                </a>
              </div>
              <div class="col">
                <h1 style="font-size: 4rem">El Faro <span>Noticias, deportes y negocios</span></h1>
              </div>
              <div class="col">
                <div id="reloj"></div>
              </div>
            </div>
        </div>
    </header>

    <div class="nav-bg">
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar" style="font-size: 2.8rem;">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="Index.php">Inicio</a>
                  <a class="nav-link" href="deportes.php">Deportes</a>
                  <a class="nav-link" href="negocios.php">Negocios</a>
                  <a class="nav-link" href="contacto.php">Contacto</a>
                </div>
              </div>
            </div>
          </nav>
    </div>

    <div class="bg-warning text-center py-2">
        <p class="mb-0">Aviso importante: Actualización de noticias</p>
    </div> 
    
    <main>
        <div class="container-fluid text-center">
            <div class="row">
                <h2 class="new-amsterdam" style="font-size: 2.8rem">Deportes</h2>
             </div>

             
            <div class="row">
              <div class="col-lg-8 mb-4 noticia">
                <h2 class="bungee-tint-regular">Duro camino de Colo-Colo de Camino a la Copa Libertadores</h2>
                <p class="cuerpo-noticia">Colo Colo mantiene sus aspiraciones en tres competencias tras clasificar a los cuartos de final de la Copa Libertadores, 
                    eliminando a Junior de Colombia con un marcador global de 3-1. El equipo albo se ha posicionado entre los ocho mejores del 
                    continente y ahora se enfrentará al formidable River Plate. A esto se suma su participación en el ámbito local, donde el 
                    "Cacique" enfrenta una apretada agenda con compromisos en el Campeonato Nacional y la Copa Chile. 
                    En el período previo a la eliminatoria contra los argentinos, el equipo dirigido por Jorge Almirón deberá disputar ocho 
                    partidos en un lapso de casi 30 días, en una seguidilla que definirá la temporada para los blancos, quienes se juegan todas 
                    sus opciones en las tres competencias que enfrentan. En el corto plazo, deberán afrontar tres encuentros de la Primera División 
                    en la próxima semana, considerando que se ha programado una fecha a mitad de semana para adelantar el calendario del torneo local, 
                    anticipando el receso por las Fiestas Patrias.<br>Fuente: Emol.com</br>
                </p>
              </div>
              <div class="col-lg-8 mb-4">
                <img src="img/colo-colo.jpg" class="img-fluid">
              </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                  <img src="img/oconnor.png" class="img-fluid">
                </div>
                <div class="col-lg-4 mb-4 noticia">
                    <h2 class="bungee-tint-regular">Ben O'Connor desata el caos en la Vuelta a España</h2> 
                    <p class="cuerpo-noticia">Ben O'Connor, ciclista australiano del equipo AG2R, protagonizó una hazaña en la sexta etapa de la Vuelta a España, sorprendiendo 
                        al pelotón con una victoria aplastante. O'Connor llegó a la meta con una ventaja de 6 minutos y 31 segundos sobre los principales 
                        favoritos, lo que lo posiciona como líder con 4 minutos y 51 segundos sobre el segundo clasificado, Primoz Roglic. Su impresionante 
                        actuación lo convierte en el principal candidato para ganar la Vuelta, a pesar de no contar con un equipo tan fuerte como otros 
                        competidores. La etapa comenzó en Jerez de la Frontera, con una salida desde el Carrefour Jerez Sur, en medio de una multitud 
                        entusiasta. La carrera, que ha sorprendido con inicios inusuales, dejó a los contendientes desconcertados y a O'Connor con una 
                        oportunidad única para coronarse en Madrid. <br>Fuente: Elpais.com</br>
                    </p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 mb-4 noticia">
                    <h2 class="bungee-tint-regular">GP de Países Bajos de F1: horarios y dónde ver los entrenamientos libres 3</h2>
                    <p class="cuerpo-noticia">El Circuito de Zandvoort en Países Bajos será el escenario de la decimoquinta prueba del Mundial de Fórmula 1, reanudando la 
                        competencia tras el parón estival. Max Verstappen, líder del campeonato con 277 puntos, buscará ganar en casa y acercarse a su 
                        cuarto título consecutivo. Sin embargo, enfrentará a rivales como Lewis Hamilton, quien ha ganado dos de las últimas tres 
                        carreras, así como a Lando Norris y Charles Leclerc, que lo siguen en la clasificación. El evento, que se llevará a cabo del 
                        23 al 25 de agosto, contará con entrenamientos el viernes, clasificación el sábado, y la carrera el domingo. Verstappen ha 
                        ganado todas las carreras en Zandvoort desde el regreso de la F1 en 2021, y una victoria más lo igualaría con Jim Clark como 
                        el piloto con más triunfos en este Gran Premio. El circuito, conocido por su desafiante primera curva "Tarzán", es un favorito 
                        entre los fanáticos neerlandeses. <br>Fuente: Elpais.com</br>
                    </p>
                </div>
                <div class="col-lg-4 mb-4">
                  <img src="img/F1.png" class="img-fluid">
                </div>
              </div>
          </div>    
    </main>
    <footer class="bg-dark text-white text-center py-4 mt-5"></footer>
        <p>El Faro - Todos los derechos reservados © 2024</p>
    </footer>
    <script src="./js/script.js"></script>
</body>
</html>