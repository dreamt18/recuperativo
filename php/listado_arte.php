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
            <h2>Constanza</h2>
            
            
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
                <h1>Informacion</h1>
                
                <p class="parrafo1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti qui, quibusdam adipisci? Tempora, vitae voluptatem veritatis et consequatur laborum aliquam.</p>
                
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
                
                <p class="parrafo2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia expedita unde asperiores ipsum suscipit autem tenetur similique quia aperiam, quos minima, id explicabo qui. Adipisci unde, facere temporibus sequi quasi cum quidem nihil optio, nobis sint asperiores. Sint totam, commodi.</p>
                
                <p class="parrafo2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, dolor, ut dicta est reiciendis beatae rerum corporis quia asperiores vitae.</p>
                
                <p class="parrafo2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima rem ipsam nostrum soluta ratione corporis, optio voluptates, praesentium aut quae nemo totam fugit consequatur magni. Excepturi nam, dolores est eius perspiciatis impedit! Nisi delectus sequi tempora. Suscipit molestiae deserunt qui consectetur totam, harum cupiditate iste, impedit assumenda, corporis dolores nihil.</p>
                
                <p class="parrafo2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae at delectus perferendis modi nostrum laudantium earum animi sapiente, atque amet ullam doloremque quibusdam? Harum consequatur ut voluptates tempore repudiandae non distinctio, officia neque saepe beatae reprehenderit ratione animi pariatur tenetur obcaecati. Repellendus omnis tenetur libero quasi labore vitae vel, hic eligendi esse qui non, architecto, impedit eveniet eaque voluptatem dignissimos?</p>
                
                <p class="parrafo2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum eos exercitationem sit odit ipsa sed nemo eaque odio debitis iste, veritatis ullam esse iure optio praesentium sint nihil temporibus alias.</p>
            </article>
        </div>
    </main>
</body>
</html>