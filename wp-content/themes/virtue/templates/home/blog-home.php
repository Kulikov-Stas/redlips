		<?php global $virtue; if(isset($virtue['portfolio_title'])) {$porttitle = $virtue['portfolio_title'];} else { $porttitle = __('Featured Projects', 'virtue'); }
		if(!empty($virtue['home_portfolio_carousel_count'])) {$hp_pcount = $virtue['home_portfolio_carousel_count'];} else {$hp_pcount = '6';} 
		if(!empty($virtue['home_portfolio_order'])) {$hp_orderby = $virtue['home_portfolio_order'];} else {$hp_orderby = 'menu_order';}
		if($hp_orderby == 'menu_order') {$p_order = 'ASC';} else {$p_order = 'DESC';} ?>
		<?php 
				$temp = $wp_query; 
				  $wp_query = null; 
				  $wp_query = new WP_Query();
				  $wp_query->query(array(
					'orderby' => $hp_orderby,
					'order' => $p_order,					
					'category_name' => 'works',
					'posts_per_page' => 1));
					$count =0;
					// var_dump($wp_query);
					?>
					<?php if ( $wp_query ) : 
							 
					while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
              	
              		
			  <?php $content = $post->post_content;
			  $str = strpos($content, 'ids="');
			  $substr = substr($content,$str+5,-2);
			  $image_id = explode(',', $substr);	  
			   
	for($i=0;$i<10;$i++){
		$image = get_post( $image_id[$i] );
		$excerpt[] = $image->post_excerpt ;
	}	
			  //print_r(wp_get_attachment_metadata($image_id[0]));
			  //echo wp_get_attachment_url($image_id[0]);			  
			  echo	'<div class="bot-slider">
		<div class="bot-slider-wrapper">
			<h2>Мои новые работы</h2>
			<div class="fotorama" data-width="940" data-loop="true" data-allowfullscreen="true">
				<div class="bot-slider-holder">
					<div class="work-item">
						<img src="'.wp_get_attachment_url($image_id[0]).'" alt="">
						<div class="work-title">'.$excerpt[0].'</div>
					</div>
					<div class="work-item">
						<img src="'.wp_get_attachment_url($image_id[1]).'" alt="">
						<div class="work-title">'.$excerpt[1].'</div>
					</div>
				</div>
				<div class="bot-slider-holder">
					<div class="work-item">
						<img src="'.wp_get_attachment_url($image_id[2]).'" alt="">
						<div class="work-title">'.$excerpt[2].'</div>
					</div>
					<div class="work-item">
						<img src="'.wp_get_attachment_url($image_id[3]).'" alt="">
						<div class="work-title">'.$excerpt[3].'</div>
					</div>
				</div>
				<div class="bot-slider-holder">
					<div class="work-item">
						<img src="'.wp_get_attachment_url($image_id[4]).'" alt="">
						<div class="work-title">'.$excerpt[4].'</div>
					</div>
					<div class="work-item">
						<img src="'.wp_get_attachment_url($image_id[5]).'" alt="">
						<div class="work-title">'.$excerpt[5].'</div>
					</div>
				</div>
				<div class="bot-slider-holder">
					<div class="work-item">
						<img src="'.wp_get_attachment_url($image_id[6]).'" alt="">
						<div class="work-title">'.$excerpt[6].'</div>
					</div>
					<div class="work-item">
						<img src="'.wp_get_attachment_url($image_id[7]).'" alt="">
						<div class="work-title">'.$excerpt[7].'</div>
					</div>
				</div>
				<div class="bot-slider-holder">
					<div class="work-item">
						<img src="'.wp_get_attachment_url($image_id[8]).'" alt="">
						<div class="work-title">'.$excerpt[8].'</div>
					</div>
					<div class="work-item">
						<img src="'.wp_get_attachment_url($image_id[9]).'" alt="">
						<div class="work-title">'.$excerpt[9].'</div>
					</div>
				</div>
			</div><!-- end fotorama -->
			<a href="/category/works/"><button class="leave-order">Посмотреть все работы</button></a> 
		</div><!-- end bot-slider-wrapper -->  
	</div><!-- end bot-slider -->';
	?>
					<?php endwhile; else: ?>
					<li class="error-not-found"><?php _e('Sorry, no portfolio entries found.', 'virtue');?></li>
				<?php endif; ?>
                    <?php 
                      $wp_query = null; 
                      $wp_query = $temp;  // Reset
                    ?>
                    <?php wp_reset_query(); ?>
               
<div class="clearfix"></div>