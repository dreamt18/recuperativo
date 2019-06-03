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
                <h1>Heavy Metal</h1>
                
                <p class="parrafo1">Heavy metal (en español traducido como metal pesado). Es un género musical que incorpora elementos inspirados en el blues rock, el rock ácido de los 60's y de la música clásica, junto al hard rock, con el que comparte rasgos esenciales.</p>
                
                <div id="galeria">
        
                    <div id="galeria_principal">
                    <img id="imgMostrar"src="../image/1.jpg">
                    </div>
                    
                    <div id="galeria_miniaturas">
                        <img class="miniatura" src="../image/1_min.jpg" 
                        onclick="document.getElementById('imgMostrar').src='../image/1.jpg';">
                        <img class="miniatura" src="../image/2_min.jpg" 
                        onclick="document.getElementById('imgMostrar').src='../image/2.jpg';">
                        <img class="miniatura" src="../image/3_min.jpg" 
                        onclick="document.getElementById('imgMostrar').src='../image/3.jpg';">
                        <img class="miniatura" src="../image/4_min.jpg" 
                        onclick="document.getElementById('imgMostrar').src='../image/4.jpg';">
                    </div>

                </div>
                
                <p class="parrafo2">Es un género musical que incorpora elementos inspirados en el blues rock, el rock ácido de los 60's y de la música clásica, junto al hard rock, con el que comparte rasgos esenciales.</p>
                
                <p class="parrafo2">El origen del heavy metal remonta a finales de los años 1960, impulsado por algunos grupos de la época, los cuales fueron incorporando sonidos más potentes y distorsionados, agregados a más energía.</p>
                
                <p class="parrafo2">El heavy metal ganó popularidad en el Reino Unido y en Estados Unidos durante los años 1970, más aún a finales de estos, hasta su asentamiento y difusión universal durante los años 1980.</p>
                
                <p class="parrafo2">Ejemplos de Bandas Heavy metal: Iron Maiden, Metallica, Black Sabbath, Motörhead y muchisimos otros mas.</p>
            
            </article>
        </div>
    </main>
</body>
</html>