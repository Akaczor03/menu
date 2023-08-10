<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');
        </style>
</head>
<body>
    <!--dekstop nav-->
    <div class="desktop__nav">
        <ul class="body--normal">
            <img src="<?php the_field('logo')?>" class="nav__logo" alt="logo">
            <div class="nav__links">
                <li class="dropdown__product dropdown"><a href="#">Product 
                    <svg class="nav__svg" width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L5.50004 6L10 1" stroke="black" stroke-linecap="round"/>
                    </svg>
                    </a></li>
                    <div class="product">
                        <h2>Product</h2><br>
                        <div class="product__wrapper">
                            <div class="product__element body--normal">
                                <span class="nav__text">
                                    <?php the_field('product_text')?>
                                </span><br><br><br>
                                <button class="product__element__btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="44" viewBox="0 0 54 44" fill="none">
                                        <rect width="54" height="44" rx="4" fill="#80F785"/>
                                        <path d="M33.7589 22.7052C34.1208 22.3157 34.0744 21.6843 33.6553 21.2948L26.8249 14.9479C26.4058 14.5585 25.7726 14.5585 25.4107 14.9479C25.0488 15.3374 25.0952 15.9689 25.5143 16.3584L31.5858 22L26.3435 27.6416C25.9816 28.0311 26.028 28.6626 26.4472 29.0521C26.8663 29.4415 27.4995 29.4415 27.8614 29.0521L33.7589 22.7052ZM20.0733 22.9973L33.0733 22.9973L32.9267 21.0027L19.9267 21.0027L20.0733 22.9973Z" fill="black"/>
                                    </svg>
                                    <span class="product__signup body--large">Sign up now</span>
                                </button>
                            </div>
                            <div class="product__element body--normal">
                                <span class="body--caps">Feature</span>
                                <div class="product__element__line"> </div>
                                    <ul>
                                        <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="product__element__li__text">ClearSpend Go Card</span></li>
                                        <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="product__element__li__text">Expense Managment</span></li>
                                        <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="product__element__li__text">Spend Control</span></li>
                                        <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="product__element__li__text">All Features</span></li>
                                    </ul>
                            </div>
                            <div class="product__element body--normal">
                                <span class="body--caps">Solutions</span>
                                <div class="product__element__line"></div>
                                <ul>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="product__element__li__text">Bookkeepers</span></li>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="product__element__li__text">Small Business Owners</span></li>
                                </ul>
                            </div>
                            <div class="product__element">
                                <img src="<?php bloginfo('template_url'); ?>/images/phone.png">
                            </div>
                        </div>
                    </div>
                <li><a href="#">Pricing</a></li>
                <li class="dropdown__company dropdown"><a href="#">Company 
                    <svg class="nav__svg" width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L5.50004 6L10 1" stroke="black" stroke-linecap="round"/>
                    </svg>
                    </a></li>
                    
                    <div class="company body--normal">
                        <h2>Company</h2><br>
                        <div class="company__wrapper">
                            <div class="company__element body--normal">
                               <span class="nav__text"><?php the_field('company_text') ?></span>
                            </div>
                            <div class="company__element body--normal">
                                <ul>
                                <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="product__element__li__text">About ClearSpend</span></li>
                                <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="product__element__li__text">Contact Us</span></li>
                                <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="product__element__li__text">See Open Roles</span></li>
                                <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="product__element__li__text">All Features</span></li>
                                </ul>
                            </div>
                            <div class="company__element">
                               
                            </div>
                            <div class="company__element">
                                <img src="<?php bloginfo('template_url'); ?>/images/company.png">
                            </div>
                        </div>
                    </div>
                <li class="dropdown__resources dropdown"><a href="#">Resources 
                    <svg class="nav__svg" width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L5.50004 6L10 1" stroke="black" stroke-linecap="round"/>
                    </svg>
                    </a></li>
                    <div class="resources body--normal">
                        <div class="resources__wrapper">
                           <div class="resources__left">
                                <h2>Resources</h2>
                                <p class="nav__text">
                                    <?php the_field('resources_text')?>
                                </p>
                           </div>
                           <div class="resources__right">
                                <p class="body--caps">Latest Blog articles</p>
                                <div class="resources__right__line"></div>
                                <div class="resources__right__container">
                                    <div class="resources__right__img">
                                        <?php if( get_field('resources_image_1') ): ?>
                                            <img src="<?php the_field('resources_image_1')?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="resources__right__text">
                                        <?php the_field('resources_blog_text_1')?>
                                        <p>Read More</p>
                                    </div>
                                </div>
                                <div class="resources__right__line"></div>
                                <div class="resources__right__container">
                                    <div class="resources__right__img">
                                        <?php if( get_field('resources_image_2') ): ?>
                                            <img src="<?php the_field('resources_image_2')?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="resources__right__text">
                                        <?php the_field('resources_blog_text_2')?>
                                        <p>Read More</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <li><a href="#">Partners</a></li>
            </div>
            <img class="nav__btn" src="img/Nav.png" alt="nav">
            <button class="nav__login btn--primary body--normal">Sign up now
                <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.3019 4.35355C12.4972 4.15829 12.4972 3.84171 12.3019 3.64645L9.11993 0.464465C8.92467 0.269203 8.60809 0.269203 8.41283 0.464465C8.21756 0.659728 8.21756 0.97631 8.41283 1.17157L11.2413 4L8.41283 6.82843C8.21756 7.02369 8.21756 7.34027 8.41283 7.53553C8.60809 7.7308 8.92467 7.7308 9.11993 7.53553L12.3019 4.35355ZM0.0773926 4.5L11.9484 4.5L11.9484 3.5L0.0773925 3.5L0.0773926 4.5Z" fill="black"/>
                </svg>                    
            </button>
        </ul>
    </div>
     <!--mobile nav-->
    <div class="mobile__nav body--normal">
        <img src="<?php the_field('logo')?>" alt="logo">  
        <img src="<?php bloginfo('template_url'); ?>/images/navclosed.png" alt="nav" class="mobile__nav__btn active" id="mobile__nav__btn" onclick="openNav();">
        <img src="<?php bloginfo('template_url'); ?>/images/navopen.png" alt="nav" class="mobile__nav__btn hidden" id="mobile__nav__btn__x" onclick="openNav();">    
    </div>
    <main>
        <div class="main">
            <h1 class="h1__desktop">Finally, a spend control and expense management solution for small business</h1>
         <div id="mobile__nav__expanded" class="mobile__nav__expanded body--large hidden">
            <ul>
                <li class="dropdown__mobile__product" id="drop__product" onclick=mobileProduct();>Product 
                    <svg class="arrow--right" id="drop__product__arrow" width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L9.58671 10.2646C9.96284 10.6704 10.597 10.6937 11.0019 10.3164L21 1" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </li>
                    <div class="dropdown__mobile mobile__product hidden body--normal" id="mobile__product">
                        <button class="mobile__product__btn btn--primary body--normal">
                            <span class="mobile__product__btn__text">Get a demo</span>
                            <img src="<?php bloginfo('template_url'); ?>/images/arrow.png" alt="arrow">
                        </button>
                        <p class="body--caps">Feature</p>
                        <div class="product__element__line"></div>
                        <ul>
                            <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="mobile__product__li">ClearSpend Go Card</span></li>
                            <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="mobile__product__li">Expense Managment</span></li>
                            <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="mobile__product__li">Spend Control</span></li>
                            <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="mobile__product__li">All features</span></li>
                        </ul>
                        <p class="body--caps">Solutions</p>
                        <div class="product__element__line"></div>
                        <ul>
                            <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="mobile__product__li">Bookkeepers</span></li>
                            <li><img src="<?php bloginfo('template_url'); ?>/images/arrow_smaller.png"><span class="mobile__product__li">Small Business Owners</span></li>
                        </ul>
                    </div>
                <li>Pricing</li>
                <li class="dropdown__mobile__company" id="drop__company" onclick=mobileCompany();>Company
                    <svg class="arrow--right" id="drop__company__arrow" width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L9.58671 10.2646C9.96284 10.6704 10.597 10.6937 11.0019 10.3164L21 1" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </li>
                    <div class="dropdown__mobile mobile__company hidden body--normal" id="mobile__company">
                        <ul>
                            <li>About ClearSpend</li>
                            <li>Contact Us</li>
                            <li>See Open Roles</li>
                            <li>All features</li>
                        </ul>
                    </div>
                <li class="dropdown__mobile__resources" id="drop__resources" onclick=mobileResources();>Resources
                    <svg class="arrow--right" id="drop__resources__arrow" width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L9.58671 10.2646C9.96284 10.6704 10.597 10.6937 11.0019 10.3164L21 1" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </li>
                    <div class="dropdown__mobile mobile__resources body--normal hidden" id="mobile__resources">
                        Common Cents Blog
                    </div>
                <li>Partners</li>
            </ul>
        </div>
       
        <span class="h1__mobile body--large">Finally, a spend control and expense management solution for small business</span>
            <div class="main__container">
            <div class="main__img">
            <img src="<?php bloginfo('template_url'); ?>/images/main_img.png">
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
                <div class="main__text__btn mobile__product__btn btn--primary body--normal">
                    <span class="main__text__btn__text">Schedule a demo  and see how it works</span>  
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="16" viewBox="0 0 27 16" fill="none">
                        <path d="M25.8022 8.70069C26.1402 8.31371 26.0551 7.68629 25.612 7.29931L18.3925 0.993123C17.9495 0.606144 17.3163 0.606144 16.9783 0.993123C16.6403 1.3801 16.7254 2.00752 17.1684 2.3945L23.5858 8L18.6894 13.6055C18.3514 13.9925 18.4365 14.6199 18.8795 15.0069C19.3226 15.3939 19.9557 15.3939 20.2938 15.0069L25.8022 8.70069ZM1.13444 8.99092L25.1344 8.99092L24.8656 7.00908L0.865563 7.00908L1.13444 8.99092Z" fill="black"/>
                        </svg>  
                </div>
                <img src="<?php bloginfo('template_url'); ?>/images/mobile_main_img.png" class="mobile__img">
                    
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