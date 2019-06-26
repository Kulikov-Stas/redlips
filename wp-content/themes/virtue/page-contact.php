<?php
/*
Template Name: Contact
*/
?>
  	<div id="pageheader" class="titleclass">
		<div class="container">
			<?php get_template_part('templates/page', 'header'); ?>
			</div><!--container-->
	</div><!--titleclass-->
<?php if ($map == 'yes') { ?>
            <div id="pageheader" class="titleclass">
            	<div class="container">
		            <div id="map_address">
		            </div>
	            </div><!--container-->
            </div><!--titleclass-->
  <?php } ?>
	<div class="row">
	<div id="content" class="content">
  		
      <?php //get_template_part('templates/content', 'page'); ?>
        <?php wp_breadcrumbs(); ?>
	<h2>Контакты</h2>
      	<div class="order">
			<div class="communicate">
				Вы можете связаться со мной:
			</div>
			<div class="communicate">
				позвонив по телефону
				<div class="comm-phone">
					+375 29 115-20-63
				</div>
			</div>
			<div class="communicate">
				или записаться, оставив заявку через форму:
			</div>			
		<div class="order-block">
			<?php echo do_shortcode('[contact-form-7 id="241" title="Контактная форма 1"]'); ?>
		</div><!-- end order-block -->  
	</div><!-- end order --> 
	</div>
	</div>
