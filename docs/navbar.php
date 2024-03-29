    <?php include_once('php/consultas.php'); ?>
    
    <div class="navbar" id="navbar">

        <!-- TOGGLER --> 
        <div class="navlista flexCenterVH" id="toggler">
            <form action="?verify_darkmode" method="post" id="form-darkmode">
                <label for="checkbox" aria-label="Alterar o tema do site">
                    <input type="checkbox" name="checkbox" id="checkbox" placeholder="Darkmode" <?php if ($darkmode) {echo 'checked="true"'; } ?>>
                    <span class="ball"></span>
                    
                    <?php
                    if (!$darkmode) { ?>
                    <i class="fa-solid fa-sun sun" id="sun"></i>
                    <i class="fa-solid fa-cloud cloud cloud1" id="cloud1"></i>
                    <i class="fa-solid fa-cloud cloud cloud2" id="cloud2"></i>
                    <?php } else { ?>
                    <i class="fa-solid fa-moon moon" id="moon"></i>
                    <i class="fa-solid fa-star star star1" id="star1"></i>
                    <i class="fa-solid fa-star star star2" id="star2"></i>
                    <i class="fa-solid fa-star star star3" id="star3"></i>
                    <?php }?>
                </label>
            </form>

            <div class="resize-font-size flexCenterVH">
                <div class="wrapper-button flexCenterVH" id="aumentar-texto" aria-label="Aumentar tamanho do texto">A+</div>
                <div class="wrapper-button flexCenterVH" id="diminuir-texto" aria-label="Diminuir tamanho do texto">A-</div>
            </div>
        </div>
        
        
        <!-- ITENS NO MEIO -->
        <div class="navlista" id="links-meio">
            <a class="animation-link" href="index.php#">Home</a>
            <a id="grease" href="index.php#" >Grease</a>
            <a class="animation-link" href="sobre.php#">Sobre</a>
            <?php if (isset($_SESSION['login'])) {
                if ($_SESSION['login']['tipoUser'] == 1) {
                    echo '<a class="animation-link" href="../admin/">Admin</a>';
                }
            }?>
        </div>
        <!-- ITENS NO MEIO -->
        
        <!-- ITENS NA DIREITA - Login e cadastro -->
        <div class="navlista itens-direita">
            
            <?php if (!isset($_SESSION['login'])) { ?>
            <a class="animation-link" href="cadastro.php" class="navitens">Cadastrar-se</a>
            <a class="animation-link" href="login.php" class="navitens">Login</a>

            <?php } else {
                $nome_usuario = mb_strimwidth(explode(" ", $_SESSION['login']['nome'])[0], 0, 15, "...");
            ?>
            <li class="duplo-li">
                <span>Olá <?php echo $nome_usuario?>!</span>
                <a href="php/logout.php" class="animation-link">Sair?</a>
            </li>
            <a href="perfil.php"><div class="img-user"><img src="<?php echo get_img($_SESSION['login']['imgUser'])  // consultas.php ?>" alt="Imagem do usuário E link para o perfil do usuário"></div></a>
            <?php }?>

        </div>
        <!-- ITENS NA DIREITA - Login e cadastro -->
        
        <!-- CONTAINER - ICON MENU -->
        <div class="container-icon-menu" onclick="openNavLateral()">
            <button class="menu" aria-label="Menu Lateral">
                <svg width="100" height="100" viewBox="0 0 100 100">
                    <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
            </button>
        </div>
        <!-- CONTAINER - ICON MENU -->
    </div>
  
    
    <!-- NAVBAR - LATERAL -->
    <div class="container-navbar-lateral">

        <div class="navbar-lateral" id="navbar-lateral">
            <?php if (isset($_SESSION['login'])) { ?>
            <a href="perfil.php">
                <div class="header">
                    <div class="img-user">
                        <img src="<?php echo get_img($_SESSION['login']['imgUser']) // consultas.php ?>" alt="Imagem do usuário E link para o perfil do usuário">
                    </div>
                    <p><?php echo $nome_usuario ?></p>
                </div>
            </a>
            <?php }?>

            <div class="resize-font-size">
                <div class="wrapper-button" id="aumentar-texto-sandwich" aria-label="Aumentar tamanho do texto">A+</div>
                <div class="wrapper-button" id="diminuir-texto-sandwich" aria-label="Diminuir tamanho do texto">A-</div>
            </div>
            
            <div class="wrapper-links">
                <a class="link" href="index.php#">
                    <i class="fa-solid fa-house-chimney"></i>Home
                </a>
                <a class="link" href="sobre.php#">
                    <i class="fa-solid fa-comment"></i>Sobre
                </a>
                <a class="link" href="index.php#musicas">
                    <i class="fa-solid fa-music"></i>Músicas
                </a>
                <a class="link" href="index.php#personagens">
                    <i class="fa-solid fa-user"></i>Personagens
                </a>  
                <?php if (!isset($_SESSION['login'])) { ?>
                <a class="link padding-left" href="login.php#">
                    Login
                </a>
                <a class="link padding-left" href="cadastro.php#">
                    Cadastro
                </a>
                <?php } else if ($_SESSION['login']['tipoUser'] == 1) { ?>
                <a class="link" href="../admin/">
                    <i class="fa-solid fa-lock"></i>Admin
                </a>
                <?php }?>
            </div>

            <?php if (isset($_SESSION['login'])) { ?>
            <div class="logout flexCenterVH">
                <a class="link" href="php/logout.php">Sair da Conta</a>
            </div>
            <?php } ?>

        </div>
    </div>
    
    <script src="js/darkmode.js"></script>
    <script src="js/resize-font-size.js"></script>
    <script src="js/navbar.js"></script>