<?php

$title = 'Accueil';
include_once('./includes/header.php');

?>

<link rel="stylesheet" href="./styles/home.css">
<main>
    <div class="homeblock">
        <div id="video_container">
            <video autoplay muted loop id="homevideo">
                <source src="./assets/videos/default.mp4" type="video/mp4">
            </video>
        </div>
        <img id="homeblock_logo" src="./assets/logo.png">
        <div class="homeblock_buttons">
            <button class="button_bright" id="btn_creations">Voir Nos Créations</button>
            <button class="button_dark" id="btn_contact">Contactez-Nous</button>
        </div>
    </div>
    <div class="homecontent">
        <h1>Qui sommes-nous ?</h1>
        <div id="presentation_text">
            <p>
                Lorem ipsum dolor sit amet. Qui ipsa minus eos libero nesciunt sed dolorem nulla id vitae cupiditate! 
                Quo sequi reiciendis At consectetur provident sed voluptatum itaque ea enim earum eum 
                tenetur veritatis non voluptatem aliquam.
            </p>
            <p>
                Ut explicabo totam ab tenetur provident eum laudantium vero eos dolore illo.
                Ut commodi commodi sed dolorum consequatur ex quia quia et natus accusamus est eveniet consequatur quo beatae consequatur.
                At dolores sequi quo beatae galisum est omnis atque ut distinctio nihil vel voluptate animi. Et tenetur numquam sed magni rerum
                qui voluptatem quod ut nihil tempore et similique galisum eos corrupti omnis est pariatur eaque.
            </p>
            <p>
                Sit reprehenderit assumenda est recusandae animi et debitis distinctio?
                Qui amet officiis sed consequatur quasi et exercitationem distinctio.
            </p>
        </div>
        <hr class="separator">
        <h1>Nos albums</h1>
        <hr class="separator">
        <h1>Suivez-nous !</h1>
        <div id="socials">
            <a class="social_link" href="https://www.youtube.com/@artiludique" target="_blank"><img class="social_btn" src="./assets/socials/youtube.png"></a>
            <a class="social_link" href="https://www.instagram.com/artiludique" target="_blank"><img class="social_btn" src="./assets/socials/instagram.png"></a>
            <a class="social_link" href="https://www.deezer.com/fr/artist/219152055" target="_blank"><img class="social_btn" src="./assets/socials/deezer.png"></a>
            <a class="social_link" href="https://open.spotify.com/artist/015kYpGGQTNCf97onSNjhM" target="_blank"><img class="social_btn" src="./assets/socials/spotify.png"></a>
        </div>
    </div>
</main>

<?php

include_once('./includes/footer.php');

?>