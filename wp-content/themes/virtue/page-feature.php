<?php
/*
Template Name: Feature
*/
?>
<div class="light-off"></div>
	<div class="pop-up pop-up-order">
		<div class="close"></div>
		<div class="order">
			<h2 style="color: #fff !important;">Оставить заявку</h2>
			<h4 style="color: #fff;font-weight: 100;">Пожалуйста, оставьте свои контактные данные и я перезвоню <br> в указанный Вами промежуток времени:</h4>
			<div class="order-block">
				<?php echo do_shortcode('[contact-form-7 id="241" title="Контактная форма 1"]'); ?>
			</div><!-- end order-block -->  
		</div><!-- end order --> 
	</div><!-- end pop-up -->	
	<?php global $post; $headoption = get_post_meta( $post->ID, '_kad_page_head', true ); 
				if ($headoption == 'flex') {
					get_template_part('templates/flex', 'slider');
				}
				else if ($headoption == 'carousel') {
					get_template_part('templates/carousel', 'slider');
				}
				else if ($headoption == 'rev') {
					get_template_part('templates/rev', 'slider');
				}
				else if ($headoption == 'video') {
					?>
					 <section class="postfeat container">
					 	<?php global $post; $swidth = get_post_meta( $post->ID, '_kad_posthead_width', true ); if (!empty($swidth)) $slidewidth = $swidth; else $slidewidth = 1170; ?>
				          <div class="videofit" style="max-width:<?php echo $slidewidth;?>px; margin-left: auto; margin-right:auto;">
				              <?php global $post; $video = get_post_meta( $post->ID, '_kad_post_video', true ); echo $video; ?>
				          </div>
				        </section>
					<?php 
				}
				else if ($headoption == 'image') {
                global $post; $height = get_post_meta( $post->ID, '_kad_posthead_height', true ); if (!empty($height)) $slideheight = $height; else $slideheight = 400; 
                          $swidth = get_post_meta( $post->ID, '_kad_posthead_width', true ); if (!empty($swidth)) $slidewidth = $swidth; else $slidewidth = 1170;   
                          $uselightbox = get_post_meta( $post->ID, '_kad_feature_img_lightbox', true ); if (!empty($uselightbox)) $lightbox = $uselightbox; else $lightbox = 'yes';             
                    $thumb = get_post_thumbnail_id();
                    $img_url = wp_get_attachment_url( $thumb,'full' ); 
                    $image = aq_resize( $img_url, $slidewidth, $slideheight, true ); //resize & crop the image
                    ?>
                    <?php if($image == "") { $image = $img_url; } ?>
                      <div class="container"><div class="imghoverclass img-margin-center">
                      	<?php if($lightbox == 'yes') {?><a href="<?php echo $img_url ?>" rel="lightbox" class="lightboxhover"><?php } ?>
                      		<img src="<?php echo $image ?>" alt="<?php the_title(); ?>" />
                      	<?php if($lightbox == 'yes') {?></a><?php } ?>
                      </div></div>
                    <?php
				}
		?>

	<div id="pageheader" class="titleclass">
		<div class="container">			
			<?php get_template_part('templates/page', 'header'); ?>
		</div><!--container-->
	</div><!--titleclass-->
	
    <div id="review" class="container">
   		<div class="row">
			<?php wp_breadcrumbs(); ?>
			<h2>Отзывы</h2>
			<?php echo do_shortcode('[WPCR_INSERT]'); ?>
     		<div class="main <?php echo kadence_main_class(); ?>" role="main">
		
				<?php get_template_part('templates/content', 'page'); ?>
			</div><!-- /.main -->