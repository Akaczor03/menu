<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClearSpend</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/dev/css/style.css">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/dev/js/script.js"></script>
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/public/img/company.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');
        </style>
</head>
<body>
    
    <?php
        include 'layout/header.php';
    ?>tn
<main>
    <div class="main">
        <h1 class="h1__desktop">Finally, a spend control and expense management solution for small business</h1>
        <span class="h1__mobile body--large">Finally, a spend control and expense management solution for small business</span>
            <div class="main__container">
            <div class="main__img">
            <img src="<?php bloginfo('template_url'); ?>/public/img/main_img.png">
            </div>
            <div class="main__text__container">
                <div class="main__text body--large">
                    Built specifically with and for small businesses and their bookkeepers. Reimagining what spend control and expense management should be.
                </div>
                <div class="main__text__link body--large">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="44" viewBox="0 0 54 44" fill="none">
                        <rect width="54" height="44" rx="4" fill="#80F785"/>
                        <path d="M33.7589 22.7052C34.1208 22.3157 34.0744 21.6843 33.6553 21.2948L26.8249 14.9479C26.4058 14.5585 25.7726 14.5585 25.4107 14.9479C25.0488 15.3374 25.0952 15.9689 25.5143 16.3584L31.5858 22L26.3435 27.6416C25.9816 28.0311 26.028 28.6626 26.4472 29.0521C26.8663 29.4415 27.4995 29.4415 27.8614 29.0521L33.7589 22.7052ZM20.0733 22.9973L33.0733 22.9973L32.9267 21.0027L19.9267 21.0027L20.0733 22.9973Z" fill="black"/>
                      </svg>
                      <span class="main__text__link__text">Schedule a demo</span>
                </div>
                <div class="main__text__btn btn--primary body--normal">
                    <span class="main__text__btn__text">Schedule a demo  and see how it works</span>  
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="16" viewBox="0 0 27 16" fill="none">
                        <path d="M25.8022 8.70069C26.1402 8.31371 26.0551 7.68629 25.612 7.29931L18.3925 0.993123C17.9495 0.606144 17.3163 0.606144 16.9783 0.993123C16.6403 1.3801 16.7254 2.00752 17.1684 2.3945L23.5858 8L18.6894 13.6055C18.3514 13.9925 18.4365 14.6199 18.8795 15.0069C19.3226 15.3939 19.9557 15.3939 20.2938 15.0069L25.8022 8.70069ZM1.13444 8.99092L25.1344 8.99092L24.8656 7.00908L0.865563 7.00908L1.13444 8.99092Z" fill="black"/>
                        </svg>  
                </div>
                <img src="<?php bloginfo('template_url'); ?>/public/img/mobile_main_img.png" class="mobile__img">
                    
                <div class="cookies body--normal" id="cookies">
                    By continuing to browse the ClearSpend website, you agree to use analytical (yummy) cookies to collect website visit statistics.
                    <div class="cookies__container">
                        <button class="cookies__btn" onclick="closeCookieWindow();">Ok</button>
                        <span class="cookies__decline" onclick="closeCookieWindow();">Do not accept</span>
                    </div>
                </div>
            </div>  
            </div>
        </div>
    </main>
</body>
</html>