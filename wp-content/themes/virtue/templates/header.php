<header class="floated">
<?php global $virtue; if(isset($virtue['logo_layout']) && ($virtue['logo_layout'] == 'logocenter')) {$logocclass = 'span12'; $menulclass = 'span12';} else {$logocclass = 'span4'; $menulclass = 'span8';} ?>
  <div class="header-holder"> 
         <nav role="navigation">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'top-menu')); 
            endif;
           ?>
         </nav> 
        <div class="header-right">
				<button class="leave-order index-order">Оставить заявку</button>
				<div class="phone">+375 29 115-20-63</div>
				<div class="social">
					<ul>
						<li><a href="http://vk.com/lredlips" class="vk"></a></li>
					</ul>
				</div>
	</div><!-- end header-right -->  
    
    <?php if (has_nav_menu('mobile_navigation')) : ?>
           <div id="mobile-nav-trigger" class="nav-trigger">
              <a class="nav-trigger-case mobileclass collapsed" data-toggle="collapse" data-target=".kad-nav-collapse">
                <div class="kad-navbtn"><i class="icon-reorder"></i></div>
                <div class="kad-menu-name"><?php echo __('Menu', 'virtue'); ?></div>
              </a>
            </div>
            <div id="kad-mobile-nav" class="kad-mobile-nav">
              <div class="kad-nav-inner mobileclass">
                <div class="kad-nav-collapse">
                 <?php wp_nav_menu( array('theme_location' => 'mobile_navigation','items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'menu_class' => 'kad-mnav')); ?>
               </div>
            </div>
          </div>   
          <?php  endif; ?> 
  </div> <!-- Close Container -->
  <?php
            if (has_nav_menu('secondary_navigation')) : ?>
  <section id="cat_nav" class="navclass">
    <div class="container">
     <nav id="nav-second" class="clearfix" role="navigation">
     <?php wp_nav_menu(array('theme_location' => 'secondary_navigation', 'menu_class' => 'sf-menu')); ?>
   </nav>
    </div><!--close container-->
    </section>
    <?php endif; ?> 
     <?php global $virtue; if (!empty($virtue['virtue_banner_upload']['url'])) { ?> <div class="container"><div class="virtue_banner"><img src="<?php echo $virtue['virtue_banner_upload']['url']; ?>" /></div></div> <?php } ?>
</header>