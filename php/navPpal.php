<nav class="navbar navbar-expand-lg" id="navbar-pr">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <div id="logo">
                <img src="images/Logos/Logo_Nombre_Blanco.png" alt="" width="120px">
                <img src="images/Logos/Logo_Nombre_Rojo.png" alt="" width="120px">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <figure><img src="images/Logos/list.png" alt="Logo_navbar" width="25px"></figure>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto" id="nav">
                <li class="nav-item ml-auto">
                    <a <?php if($mi_pagina=="index"){echo "class='nav-link pl-2 pr-2 activo'";}else{echo "class='nav-link pl-2 pr-2'";} ?> href="index.php">Inicio </a>
                </li>
                <li class="nav-item ml-auto">
                    <a <?php if($mi_pagina=="infor"){echo "class='nav-link pl-2 pr-2 activo'";}else{echo "class='nav-link pl-2 pr-2'";} ?> href="informatica.php">Informática</a>
                </li>
                <li class="nav-item ml-auto">
                    <a <?php if($mi_pagina=="video"){echo "class='nav-link pl-2 pr-2 activo'";}else{echo "class='nav-link pl-2 pr-2'";} ?> href="video.php">Videojuegos y Consolas</a>
                </li>
                <li class="nav-item ml-auto">
                    <a <?php if($mi_pagina=="smart"){echo "class='nav-link pl-2 pr-2 activo'";}else{echo "class='nav-link pl-2 pr-2'";} ?> href="smart.php">Smartphones</a>
                </li>
            </ul>
        </div>
    </div>
</nav>