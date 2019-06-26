<div class="slider">
  <?php  global $virtue; 
         if(isset($virtue['slider_size'])) {$slideheight = $virtue['slider_size'];} else { $slideheight = 968; }
        if(isset($virtue['slider_size_width'])) {$slidewidth = $virtue['slider_size_width'];} else { $slidewidth = 1918; }
        if(isset($virtue['slider_captions'])) { $captions = $virtue['slider_captions']; } else {$captions = '';}
        if(isset($virtue['home_slider'])) {$slides = $virtue['home_slider']; } else {$slides = '';}
                ?>
 
    <div class="fotorama" data-width="100%" data-height="100%" data-loop="true">
        
            <?php foreach ($slides as $slide) : 
                    $image = aq_resize($slide['url'], $slidewidth, $slideheight, true);
                    if(empty($image)) {$image = $slide['url'];} ?>
                      <div class="slider-holder"> 
                        <?php if($slide['link'] != '') echo '<a href="'.$slide['link'].'">'; ?>
                          <img src="<?php echo $image; ?>" alt="<?php echo $slide['title'] ?>" />

                        <?php if($slide['link'] != '') echo '</a>'; ?>
                      </div>
                  <?php endforeach; ?>
        
      </div> <!--Flex Slides-->
                                <div class="title">
          <h1>Olga Smolyachkova</h1>
          <h5>Макияж. Прически. Коррекция бровей. Создание полного образа.</h5>
        </div>
</div><!--sliderclass-->

      <?php 
          if(isset($virtue['trans_type'])) {$transtype = $virtue['trans_type'];} else { $transtype = 'slide';}
          if(isset($virtue['slider_transtime'])) {$transtime = $virtue['slider_transtime'];} else {$transtime = '300';}
          if(isset($virtue['slider_autoplay'])) {$autoplay = $virtue['slider_autoplay'];} else {$autoplay = 'true';}
          if(isset($virtue['slider_pausetime'])) {$pausetime = $virtue['slider_pausetime'];} else {$pausetime = '7000';}
      ?>