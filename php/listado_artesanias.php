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
                <h1>Galeria de fotos</h1>
                
                <p class="parrafo1">Artesanía se refiere tanto al trabajo del artesano, normalmente realizado de forma manual por una persona, sin el auxilio de maquinaria o automatizaciones, como al objeto o producto obtenido en el que cada pieza es distinta a las demás..</p>
                
                <div id="galeria">
        
                    <div id="galeria_principal">
                    <img id="imgMostrar"src="../image/1">
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
                
                <p class="parrafo2">La artesanía como actividad material se diferencia del trabajo en serie o industrial. Para que una artesanía sea tal debe ser trabajada a mano y cuanto menos procesos industriales tenga, más artesanal va a ser.</p>
                
                <p class="parrafo2">La artesanía es un objeto totalmente cultural, ya que tiene la particularidad de variar dependiendo del contexto social, el paisaje, el clima y la historia del lugar donde se realiza.</p>
                
                <p class="parrafo2">Muchas veces no conocemos lo que realmente implica la elaboración de productos artesanales y las características que éste debe de poseer, confundiéndolos con manualidades, armadores u otro tipo de productos.</p>
                
                <p class="parrafo2">Para muchas personas, la artesanía es un término medio entre el diseño y el arte. Para otros es una continuación de los oficios tradicionales, en los que la estética tiene un papel destacado pero el sentido práctico del objeto elaborado es también importante.</p>
                
                <p class="parrafo2">Mediante la galeria puede observarse algunas artesanias existentes.</p>
            </article>
        </div>
    </main>
</body>
</html>