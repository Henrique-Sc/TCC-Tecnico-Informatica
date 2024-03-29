<?php
    error_reporting(0);
    ini_set("display_errors", 0);
    
    include_once('database/db.php');
    include_once('php/verify_darkmode.php');
    include_once('php/consultas.php');
?>

<!DOCTYPE html>
<html lang="pt-br" class='<?php if ($darkmode) {echo "darkmode";} ?>'>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Grease • 3º Info tarde 2023</title>

    <!-- Estilos do site -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/box-content.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/carrossel.css">
    <link rel="stylesheet" href="css/music-player.css">
    <link rel="stylesheet" href="css/comentarios.css">
    <!-- <link rel="stylesheet" href="css/form.css"> -->

    <!-- AOS - Animation in scrool -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/55197c00fe.js" crossorigin="anonymous"></script>

    <!-- SplideJs -->
    <link rel="stylesheet" href="splide/css/splide.min.css">

</head>

<body class="fade">
    <!-- <div class="music-player fixed-container" id="music-player"> -->
    <div class="music-player fixed-container ocult-container" id="music-player">
        <div class="close-box">
            <img src="imgs/close.svg" alt="Fechar" id="close">
        </div>

        <div class="music-details">
            <div class="container">
                <img id="music-image-large" class="music-image" src="https://i.scdn.co/image/ab67616d0000b273b68df485f3304211904548a8">
                <p id="music-name" class="music-name">Summer Nights - From “Grease”</p>
                <p id="music-artist" class="music-autor">John Travolta</p>
            </div>
        </div>

        <div class="option-bar flexCenterVH">
            <div class="lbox-music">
                <img id="music-image-small" class="music-image" src="https://i.scdn.co/image/ab67616d00001e02b68df485f3304211904548a8">
            </div>
            <div class="barra-player flexCenterVH">
                <div class="icons">
                    <!-- 
                    variantes do volume:
                        >70 <i class="fa-solid fa-volume-high"></i>
                        >30 <i class="fa-sharp fa-solid fa-volume"></i>
                        >0  <i class="fa-solid fa-volume-low"></i>
                        =0  <i class="fa-solid fa-volume-xmark"></i>

                    variantes do pause:
                        > <i class="fa-solid fa-play"></i>
                        > <i class="fa-solid fa-pause"></i>
                    -->
                    <div class="left flexCenterVH">
                        <i id="backward" class="fa-solid fa-backward-fast backward" title="Anterior (j)"></i>
                        <i id="play-pause" class="fa-solid fa-pause" title="Reproduzir (k)"></i>
                        <i id="forward" class="fa-solid fa-forward-fast" title="Próximo (l)"></i>
                    </div>

                    <div class="right">
                        <i id="shuffle" class="fa-solid fa-shuffle" title="Aleatório (a)"></i>
                        <i id="repeat" class="fa-solid fa-repeat" title="Repetir (r)"></i>
                        <!-- <i id="volume" class="fa-solid fa-volume-high"></i> -->
                    </div>
                </div>

                <div class="barra">
                    <audio id="audio" src="musics/Grease-Summer-Nights.mp3" preload="metadata"></audio>
                    <input id="controle-deslizante" type="range" max="100" value="0">
                    <span id="tempo-atual">0:00</span>
                    <span id="tempo-total">0:00</span>
                </div>
            </div>
        </div>
    </div>




    <?php include_once('navbar.php') ?>
    <!-- CONTEÚDO -->
    <main>
        <!-- Sessão 1 -->
        <section class="section1 padding background-grease">

            <div class="wrapper-content-main side-bar side-bar-style-1" data-aos="fade-right">
                <div class="box-title1 border-box padding">
                    <h1 class="JSMedium h1">Conheça tudo sobre o musical de <span class="color">Grease</span></h1>
                </div> <!-- .box-title1 .border-box .padding-->
            </div> <!-- .wrapper-content-main -->

            <div class="ocult-425px">
                <div class="wrapper-content-main" data-aos="fade-right">
                    <div class="box-title3 padding">
                        <h3 class="h3"><span>“Uma viagem aos tempos da brilhantina”</span></h3>
                    </div> <!-- .box-title3 .padding-->
                </div> <!-- .wrapper-content-main -->
            </div>

            <div class="wrapper-content-main" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
                <button type="button" class="animation-scale btn-home" onclick="window.location.href='sobre.php'">Sobre o musical</button>
            </div> <!-- .wrapper-content-main -->
            
            <img src="imgs/home/sandy-danny-light.png" alt="Sanddy e Danny - Grease" class="sandy-danny" id="SandyDanny" data-aos="fade-up">
            
            
        </section> <!-- .section-impar -->
        
        
        <!-- Sessão 2 -->
        <section class="section-theme-black section2 padding">
            <a name="musicas"></a>

            <div class="retro-line wh100" data-aos="fade">

                <div class="wrapper-content-main side-bar side-bar-style-1" data-aos="fade-down">
                    <div class="box-title2 border-box padding">
                        <h2 class="h2">Conheça as músicas que refletem os anos <span>50</span></h2>
                    </div> <!-- .box-title2 .border-box .padding-->
                </div> <!-- .wrapper-content-main side-bar side-bar-style-1 -->

                <!-- Carrossel - Playlist -->
                <div class="display-425px">
                    <div class="wrapper-content-main wrapper-carrossel-playlist" role="group" data-aos="fade-down">
                        <div class="carrossel-playlists splide" aria-label="Playlists">
                            <div class="splide__track">
                                <div class="splide__list" id="splide__list_PLAYLIST">

                                    <div class="splide__slide">
                                        <div id="slide-1" class="slide">
                                            <div class="wrapper-text">
                                                <h2 class="h2">Somente as músicas nacionais</h2>
                                            </div>
                                        </div>
                                        <img class="banner" src="imgs/carrossel/playlist/banner-1-grande.png" alt="">
                                        <div id="playlist-0" class="wh-100 click-playlist"></div>
                                    </div>

                                    <div class="splide__slide">
                                        <div id="slide-2" class="slide">
                                            <div class="wrapper-text">
                                                <h2 class="h2">Somentes as maiores</h2>
                                                <p class="text">De Elvis à Johnny Cash</p>
                                            </div>
                                        </div>
                                        <img class="banner" src="imgs/carrossel/playlist/banner-2-grande.png" alt="">
                                        <div id="playlist-1" class="wh-100 click-playlist"></div>
                                    </div>

                                    <div class="splide__slide">
                                        <div id="slide-3" class="slide">
                                            <div class="wrapper-text">
                                                <h2 class="h2">Músicas diretamente de Grease</h2>
                                            </div>
                                        </div>
                                        <img class="banner" src="imgs/carrossel/playlist/banner-3-grande.png" alt="">
                                        <div id="playlist-2" class="wh-100 click-playlist"></div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- .carrossel-playlists.splide -->
                    </div> <!-- .wrapper-content-main.wrapper-carrossel-playlist -->
                </div> <!-- .display-425px -->

                <!-- Carrossel - Musicas -->
                <div class="wrapper-content-main" data-aos="fade-right">
                    <div class="carrossel-musica splide" aria-labelledby="carousel-title">
                        <h2 class="h3" id="carousel-title">Explorar</h2>

                        <!-- Caixa com opacidade (no final) para criar efeito de continuidade -->
                        <div class="opacity"></div>

                        <div class="splide__track">
                            <ul class="splide__list" id="splide__list_MUSICAS">
                                <div class="splide__slide track" onclick="closeMusicPlayer()">
                                    <div id="0" class="wait_api"></div>
                                </div>
                            </ul> <!-- .splide__list#splide__list-->
                        </div> <!-- .splide__track -->

                        <!-- Progress bar element -->
                        <div class="slider-progress">
                            <div class="slider-progress-bar" id="slider-progress-bar">
                            </div>
                        </div>

                    </div> <!-- .carrossel-musica splide -->
                </div> <!-- .wrapper-content-main -->

                <div class="ocult-425px">
                    <div class="wrapper-content-main" data-aos="fade-right">
                        <div class="mais-tocadas">
                            <h3 class="h3">MAIS TOCADAS</h3>
                            <div class="side-bar side-bar-style-1">
                                <div class="container-itens" id="itens-mais-tocadas">
                                    <p class="item" id="0">1. Summer Nights - Grease</p>
                                    <p class="item" id="3">2. Don't be Cruel - Elvis Presley</p>
                                    <p class="item" id="4">3. I Walk The Line - Johnny Cash</p>
                                </div> <!-- .container-itens -->
                            </div> <!-- .side-bar side-bar-style-1 -->
                        </div> <!-- .mais-tocadas -->
                    </div> <!-- .wrapper-content-main -->
                </div> <!-- .ocult-425px -->

                <div class="display-425px">
                    <div class="wrapper-content-main side-bar side-bar-style-2" data-aos="fade-down">
                        <div class="box-title2 border-box padding">
                            <h2 class="JSMedium h2">A música exprime a mais alta filosofia numa linguagem que a razão não compreende.</h2>
                            <h3 class="subtitle JSMedium">Arthur Schopenhauer</h3>
                        </div> <!-- .box-title2 .border-box .padding-->
                    </div> <!-- .wrapper-content-main side-bar side-bar-style-2 -->
                </div>
                
            </div> <!-- .retro-line wh100 -->
        </section> <!-- .section-par .section2 .padding -->
        
        
        
        <!-- Sessão 3 -->
        <section class="section3 padding">
            <a name="personagens"></a>

            <div class="wrapper-content-main side-bar side-bar-style-1" data-aos="fade-right">
                <div class="box-title2 border-box padding">
                    <h2 class="h2">Personagens <span class="sect2-title2 color-title_light">incríveis</span> merecem todo o reconhecimento</h2>
                </div> <!-- .box-title2 .border-box .padding-->
            </div> <!-- .wrapper-content-main .side-bar side-bar-style-1 -->

            <div class="ocult-425px">
                <div class="wrapper-content-main no-padding" data-aos="fade-right">
                    <img src="imgs/home/circles.svg" alt="" id="circles">
                </div> <!-- .wrapper-content-main .side-bar side-bar-style-1 -->
            </div>

            <!-- <div class="ocult-425px">
                <div class="wrapper-content-main no-padding" data-aos="fade-right" id="lines">
                    
                </div> 
            </div> -->


            <div class="wrapper-content-main" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
                <button type="button" onclick="showPopUp()" class="btn-home btn-retro animation-scale">Conheça os personagens</button>
            </div> <!-- .wrapper-content-main -->

            <div class="fixed-container ocult-container" id="showPopUp">
                <div class="wrap-exit">
                    <div id="exit"><i class="fa-solid fa-xmark exit" onclick="showPopUp()"></i></div>
                </div>

                <div class="carrosel-personagens splide" id="popup">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <div class="splide__slide">
                                <img src="imgs/home/PopUpSandy.png" alt="Sandy, interpretada por Olivia Newton-John no filme, é a protagonista feminina. Ela é uma garota doce e inocente que se apaixona por Danny durante o verão. Sandy é nova na Rydell High e se esforça para se encaixar no grupo das Pink Ladies">
                                <!--<p class="nome_musica">Sandy Olsson</p>-->
                            </div>
                            <div class="splide__slide">
                                <img src="imgs/home/PopUpDanny.png" alt="Danny é o amor de verão de Sandy, uma garota tímida que se transfere para a escola de Danny no início do ano letivo. Quando os dois se reencontram, no entanto, Danny tenta agir como se não a conhecesse, preocupado em manter sua reputação de durão diante de seus amigos.">
                                <!--<p class="nome_musica">Danny Zuko</p>-->
                            </div>
                            <div class="splide__slide">
                                <img src="imgs/home/PopUpJan.png" alt="Jan é uma das Pink Ladies e é conhecida por seu apetite voraz. Ela é divertida, extrovertida e sempre está pronta para comer. Jan é amiga próxima de Frenchy.">
                                <!--<p class="nome_musica">Betty Rizzo</p>-->
                            </div>
                            <div class="splide__slide">
                                <img src="imgs/home/PopUpPutzie.png" alt="Ele é um membro dos T-Birds e é conhecido por seu senso de humor bobo. Roger é um pouco desajeitado, mas sempre está disposto a apoiar seus amigos.">
                                <!--  <p class="nome_musica">Marty Marachino</p>-->
                            </div>
                            <div class="splide__slide">
                                <img src="imgs/home/PopUpFrenchy.png" alt="Ela é uma das Pink Ladies e uma amiga próxima de Sandy. Frenchy é uma garota ingênua e sonhadora, conhecida por seus cabelos rosa. Ela deseja ser uma cabeleireira, mas está sempre em busca de sua verdadeira vocação.">
                                <!--  <p class="nome_musica">Kenickie Willians</p>-->
                            </div>

                            <div class="splide__slide">
                                <img src="imgs/home/PopUpDoody.png" alt="Outro membro dos T-Birds, Doody é o mais jovem do grupo. Ele é um pouco tímido, porém leal aos seus amigos. Doody tem um talento para tocar guitarra.">
                                <!--  <p class="nome_musica">Frenchy Palardino</p>-->
                            </div>
                            <div class="splide__slide">
                                <img src="imgs/home/PopUpRizzo.png" alt="Ela é a líder das Pink Ladies e uma das personagens mais marcantes. Rizzo é uma garota ousada, confiante e sarcástica. Ela é conhecida por seu senso de humor afiado e atitude desafiadora.">
                                <!--  <p class="nome_musica">Putzie</p>-->
                            </div>
                            <div class="splide__slide">
                                <img src="imgs/home/PopUpKenickie.png" alt="Ele é um dos T-Birds e o melhor amigo de Danny. Kenickie é durão, engraçado e um pouco descuidado. Ele é um piloto de corridas de carros e tem uma personalidade mais rebelde.">
                                <!-- <p class="nome_musica">Sonny Lattiery</p>-->
                            </div>
                            <div class="splide__slide">
                                <img src="imgs/home/PopUpMarty.png" alt="Ela também é uma das Pink Ladies. Marty é uma garota extrovertida e flerta com homens mais velhos. Ela é vaidosa e está sempre preocupada com sua aparência.">
                                <!--  <p class="nome_musica">Doody</p>-->
                            </div>
                            <div class="splide__slide">
                                <img src="imgs/home/PopUpSonny.png" alt="Ele é um dos T-Birds, amigo próximo de Danny. Sonny é brincalhão, um pouco trapalhão e sempre está procurando conquistar garotas.">
                                <!--  <p class="nome_musica">Jan Martin</p>-->
                            </div>
                        </ul>
                    </div>
                </div> <!-- .carrosel-personagens .splide -->
            </div>

            <img src="imgs/home/img-section3.svg" alt="Sandy, danny e Rizzo" class="img-section3" id="" data-aos="fade-up">

        </section> <!--.section-impar -->

        <section class="section-theme-black section4">

            <a name="comentarios"></a>
            <div id="area">
                <?php 
                    $query = "SELECT usuarios.nome, usuarios.imgUser, comentarios.txtComent, comentarios.dataComent from usuarios, comentarios where (usuarios.idUser = comentarios.idUser) ORDER BY comentarios.dataComent DESC";
                    $consulta = query($conexao_db, $query);
                ?>

                <div class="header"><h2 class="title h2">Comentários</h2></div>

                <div class="header-quant-coment"><h3 class="h3"><?php echo mysqli_num_rows($consulta) ?> comentários</h3></div>

                <div class="container-comentario">

                    <?php 
                        while($comentario = mysqli_fetch_assoc($consulta)) {
                            // $comentario[imgUser]
                            echo "
                            <div class='wrapper-comentario'>
                                <div class='img-user'>
                                    <img class='' src='" . get_img($comentario['imgUser']) . "' alt='Foto de perfil do Fulano'>
                                </div>

                                <div class='content'>
                                    <p class='name-user'>". mb_strimwidth($comentario['nome'], 0, 20, '...') ."</p>
                                    <p class='comentario'>
                                        $comentario[txtComent]
                                    </p>
                                </div>
                            </div>
                            ";
                        }
                    ?>

                </div>
                <div id="but"></div>
                
                <div id="divComent">
                    
                    <form action="php/comentar.php" class="flexCenterVH wh100" id="form-comentario" onsubmit="return checkComentario()" method="get">
                        <div class="wrapper-input">
                            <input type="text" id="input-comentario" name="comentario" placeholder="Aa"/>
                            <span class="carac-faltando" id="carac-faltando">300</span>
                            <i class='fa-solid fa-circle-exclamation msg-erro'id="erro"></i>
                        </div>
                        
                        <div class="emoji-button flexCenterVH" id="emojiButton"></div>
                        
                        <button type="submit">
                            <img src="imgs/home/comentarios/enviar.svg">
                        </button>

                        <div class="emoji-list" id="emojiList">
                            <span>🙂</span>
                            <span>😀</span>
                            <span>🥳</span>
                            <span>😄</span>
                            <span>😁</span>
                            <span>😅</span>
                            <span>😆</span>
                            <span>🤣</span>
                            <span>😂</span>
                            <span>🙃</span>
                            <span>😉</span>
                            <span>😊</span>
                            <span>😇</span>
                            <span>😎</span>
                            <span>🤓</span>
                            <span>🧐</span>
                            <span>🥳</span>
                            <span>🥰</span>
                            <span>😍</span>
                            <span>🤩</span>
                            <span>😘</span>
                            <span>😗</span>
                            <span>😊</span>
                            <span>😚</span>
                            <span>😙</span>
                            <span>😋</span>
                            <span>😛</span>
                            <span>😜</span>
                            <span>🤪</span>
                            <span>😝</span>
                            <span>🤑</span>
                            <span>🤗</span>
                            <span>🤭</span>
                            <span>🤫</span>
                            <span>🤔</span>
                            <span>😐</span>
                            <span>🤐</span>
                            <span>🤨</span>
                            <span>😑</span>
                            <span>😶</span>
                            <span>😏</span>
                            <span>😒</span>
                            <span>🙄</span>
                            <span>😬</span>
                            <span>😮‍💨</span>
                            <span>🤥</span>
                            <span>😪</span>
                            <span>😴</span>
                            <span>😌</span>
                            <span>😔</span>
                            <span>🤤</span>
                            <span>😷</span>
                            <span>🤒</span>
                            <span>🤕</span>
                            <span>🤢</span>
                            <span>🤮</span>
                            <span>🤧</span>
                            <span>🥵</span>
                            <span>🥶</span>
                            <span>🥴</span>
                            <span>😵</span>
                            <span>🤯</span>
                            <span>😕</span>
                            <span>😟</span>
                            <span>🙁</span>
                            <span>☹️</span>
                            <span>😮</span>
                            <span>😯</span>
                            <span>😲</span>
                            <span>😳</span>
                            <span>🥺</span>
                            <span>😦</span>
                            <span>😧</span>
                            <span>😨</span>
                            <span>😰</span>
                            <span>😥</span>
                            <span>😢</span>
                            <span>😭</span>
                            <span>😱</span>
                            <span>😖</span>
                            <span>😣</span>
                            <span>😞</span>
                            <span>😓</span>
                            <span>😩</span>
                            <span>😫</span>
                            <span>🥱</span>
                            <span>😤</span>
                            <span>😡</span>
                            <span>😠</span>
                            <span>🤬</span>
                            <span>💋</span>
                            <span>💌</span>
                            <span>💘</span>
                            <span>💝</span>
                            <span>💖</span>
                            <span>💗</span>
                            <span>💓</span>
                            <span>💞</span>
                            <span>💕</span>
                            <span>💟</span>
                            <span>❣</span>
                            <span>💔</span>
                            <span>❤️‍🔥</span>
                            <span>❤️‍🩹</span>
                            <span>❤️</span>
                            <span>🧡</span>
                            <span>💛</span>
                            <span>💚</span>
                            <span>💙</span>
                            <span>💜</span>
                            <span>🤎</span>
                            <span>🖤</span>
                            <span>🤍</span>
                            <span>💯</span>
                        </div>

                        <script>
                            const emojiButton = document.getElementById("emojiButton");
                            const emojiList = document.getElementById("emojiList");
                            const input = document.getElementById("input-comentario");

                            emojiButton.addEventListener("click", () => {
                                emojiList.classList.toggle('mostrar')
                            });
                            
                            emojiList.addEventListener("click", event => {
                                if (event.target.id != 'emojiList') {
                                    const selectedEmoji = event.target.textContent;
                                    input.value += selectedEmoji;
                                    emojiList.classList.toggle('mostrar')
                                } else {
                                    emojiList.classList.toggle('mostrar')
                                }
                            });

                            document.addEventListener("click", event => {
                                if (!emojiButton.contains(event.target) && !emojiList.contains(event.target)) {
                                    emojiList.classList.remove('mostrar')
                                }
                            });
                        </script>
                    </form>

                </div>
            </div>

        </section>  <!-- .section-theme-black.section4 -->


    </main>

    <!-- AOS - Animation in scrool -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: false,
            easing: "ease-in-back",
            // offSet: 200,
            delay: 0,
        })
    </script>
    <!-- AOS - Animation in scrool -->


    <!-- Music Player -->
    <script src="js/music.js"></script>
    <script src="js/carrosel.js" type="module"></script>

    <!-- Carrosel personagens -->
    <script src="js/carroselpopup.js"></script>

    <!-- Import Splide -->
    <script src="splide/js/splide.min.js"></script>

    <!-- Scroll Home -->
    <script src="js/scrolling.js"></script>

    <!-- Comentário -->
    <script src="js/comentario.js"></script>
</body>

</html>