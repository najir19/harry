<?php
$harry_sidebar_mail = get_theme_mod('harry_sidebar_email', 'info@example');
$harry_sidebar_phone = get_theme_mod('harry_sidebar_phone', '+964 742 44 763');
$harry_sidebar_button = get_theme_mod('harry_sidebar_button', 'Getting Started');
$harry_sidebar_button_url = get_theme_mod('harry_sidebar_button_url', '#');

?>
      <!-- offcanvas area start -->
      <div class="offcanvas__area offcanvas__area-1">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__shape">
               <img class="offcanvas__shape-1" src="<?php echo get_template_directory(); ?>/assets/img/shape/offcanvas-shape-1.png" alt="">
            </div>
            <div class="offcanvas__close">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                 </svg>
               </button>
            </div>
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo logo">
                     <?php echo harry_sidebar_logo(); ?>
                  </div>
               </div>
               <div class="mobile-menu fix d-lg-none"></div>
               <div class="offcanvas__menu offcanvas__menu-ff-space d-none d-lg-block">
                  <nav>
                     <?php echo harry_side_menu(); ?>
                  </nav>
               </div>

               <?php

if (!empty($harry_sidebar_button)): ?>
               <div class="offcanvas__btn">
                  <a href="<?php echo esc_url($harry_sidebar_button_url); ?>" class="tp-btn-offcanvas"><?php echo esc_html($harry_sidebar_button) ?> <i class="fa-regular fa-chevron-right"></i></a>
               </div>
               <?php endif;?>

               <div class="offcanvas__social">
                  <h3 class="offcanvas__social-title"><?php echo esc_html('Follow :', 'harry') ?></h3>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
               </div>
               <div class="offcanvas__contact">
                  <?php

if (!empty($harry_sidebar_phone)): ?>
                  <p class="offcanvas__contact-call"><a href="tel:<?php echo esc_attr($harry_sidebar_phone); ?>"><?php echo esc_html($harry_sidebar_phone) ?></a></p> <?php endif;?>
                  <?php

if (!empty($harry_sidebar_mail)): ?>
                  <p class="offcanvas__contact-mail"><a href="mailto:<?php echo esc_attr($harry_sidebar_mail); ?>"><?php echo esc_html($harry_sidebar_mail) ?></a></p> <?php endif;?>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->