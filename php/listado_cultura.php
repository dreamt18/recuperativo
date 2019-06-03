<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Varios</title>
    <link rel="stylesheet" href="../icon/css/fontello.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/galeryEstilos.css">
</head>
<body>
    <main>
        <div class="content-all">
            <header></header>
            <input type="checkbox" id="check">
            <label for="check" class="icon-menu">Menu</label>
            <h2>Arte&Cultura</h2>
            
            
            <nav class="menu">
                <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../php/listado_artesanias.php">Listado de artesanias</a></li>
                <li><a href="../php/listado_arte.php">Listado arte moderno</a></li>
                <li><a href="../php/listado_lugares.php">Listado lugares exoticos</a></li>
                <li><a href="../php/listado_cultura.php">Listado cultura urbana</a></li>
                <li><a href="../php/listado_heavy.php">Listado Heavy metal</a></li>
                </ul>
            
            </nav>
            
            <article>
                <h1>Arte Moderno</h1>
                
                <p class="parrafo1">Arte moderno es un término propio de distintos ámbitos del mundo del arte (la historiografía del arte, la estética y teoría del arte y el mercado de arte), que pretende diferenciar una parte de la producción artística, que se identificaría con un determinado concepto de modernidad por oposición al denominado arte académico</p>
                
                <div id="galeria">
        
                    <div id="galeria_principal">
                    <img id="imgMostrar"src="../image/13.jpg">
                    </div>
                    
                    <div id="galeria_miniaturas">
                        <img class="miniatura" src="../image/13_min.jpg" 
                        onclick="document.getElementById('imgMostrar').src='../image/5.jpg';">
                        <img class="miniatura" src="../image/5_min.jpg" 
                        onclick="document.getElementById('imgMostrar').src='../image/11.jpg';">
                        <img class="miniatura" src="../image/11_min.jpg" 
                        onclick="document.getElementById('imgMostrar').src='../image/3.jpg';">
                        <img class="miniatura" src="../image/4_min.jpg" 
                        onclick="document.getElementById('imgMostrar').src='../image/4.jpg';">
                    </div>

                </div>
                
                <p class="parrafo2">Únicamente si se entiende el concepto de arte moderno no como cronológico, sino como estético (de estilo, de sensibilidad o incluso de actitud.</p>
                
                <p class="parrafo2">El arte moderno, como innovación frente a la tradición artística del arte occidental, representa una nueva forma de entender la teoría y la función del arte, en que el valor dominante de las llamadas artes figurativas (pintura y escultura) ya no es la imitación de la naturaleza o su condición literal. La invención de la fotografía había convertido esta función artística, hasta entonces esencial (pintores de corte), en algo accesorio, cuando no obsoleto..</p>
                
                <p class="parrafo2">En su lugar, los artistas comenzaron a experimentar con nuevos puntos de vista, con nuevas ideas sobre la naturaleza, materiales y funciones artísticas, llegando incluso a la abstracción. La Revolución industrial no sólo trajo las innovaciones técnicas que permitieron la arquitectura del hierro y del cristal, sino que cambió para siempre las relaciones productivas y sociales, y con ellas, la posición del artista frente a su cliente.</p>
                
                
            </article>
        </div>
    </main>
</body>
</html>