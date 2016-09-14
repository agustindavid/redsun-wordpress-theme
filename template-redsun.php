<?php
/**
 * Template Name: Redsun Template
 */
?>

<section class="container">
  <div id="carousel-header" class="carousel slide slideheader" data-ride="carousel">
  
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php
      $loop = new WP_Query( array( 'post_type' => 'slider','order' => 'ASC') );
      $count=0;
        if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); 
            $count=$count+1;
              if ($count==1) {
                echo '<li data-target="#carousel-header" data-slide-to="0" class="active"></li>';
              } 
              else {
                echo '<li data-target="#carousel-header" data-slide-to="';
                echo $count-1;
                echo '"></li>';
              } 
          endwhile;
        endif;
      ?>
  </ol>
  <!-- Wrapper for slides -->
    <div class="carousel-inner carousel-header" role="listbox">
      <?php
        $loop = new WP_Query( array( 'post_type' => 'slider','order' => 'ASC') );
        $count=0;
          if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post(); 
              $count=$count+1;
                if ($count==1) {
                  echo '<div class="item active">';
                } 
                else {
                  echo '<div class="item">';
                }
                the_post_thumbnail('tamano_slider', array('class'=>'imagenslider')); //, array('class'=>'')
      ?>
        <div class="carousel-caption captionheader">
          <h1 class="titulocarousel"><?php echo get_the_title(); ?></h1>
          <p><?php echo get_the_content(); ?></p>
          <button type="button" class="btn boton">ir a servicios</button>
        </div>
      </div>          

            <?php endwhile;
          endif;
      ?>


  <!-- Controls -->
    <a class="left carousel-control" href="#carousel-header" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-header" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<section class="info">
  <div class="container">
    <div class="col-sm-4 text-center">
      <h2 class="text-uppercase"><strong>quienes somos</strong></h2>
      <hr class="hrrojo">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quasi necessitatibus officiis possimus, quia laudantium, quae aperiam libero similique suscipit laboriosam illo facere. Animi autem corporis, tempora qui alias eaque.</p>
    </div>

    <div class="col-sm-4 text-center">
      <h2 class="text-uppercase"><strong>por que redsun?</strong></h2>
      <hr class="hrrojo">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quasi necessitatibus officiis possimus, quia laudantium, quae aperiam libero similique suscipit laboriosam illo facere. Animi autem corporis, tempora qui alias eaque.</p>
      <p><em><strong>Somos tus ojos en China</strong></em></p>
    </div>

    <div class="col-sm-4 text-center">
      <h2 class="text-uppercase"><strong>mision</strong></h2>
      <hr class="hrrojo">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quasi necessitatibus officiis possimus, quia laudantium, quae aperiam libero similique suscipit laboriosam illo facere. Animi autem corporis, tempora qui alias eaque.</p>
    </div>
  </div>
</section>

<section>
  <div id="carousel-testimonial" class="carousel slide slidetestimonial" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators indicators-testimonial">
      <?php      
        $loop = new WP_Query( array( 'post_type' => 'testimonio','order' => 'ASC') );
        $count=0;
        if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); 
        $count=$count+1;
      ?>
      
      <?php if ($count==1) {
        echo '<li data-target="#carousel-testimonial" data-slide-to="0" class="active"></li>';
        } 
      else {
        echo '<li data-target="#carousel-testimonial" data-slide-to="';
        echo $count-1;
        echo '"></li>';
      } ?>
      <?php endwhile;
      endif;
      ?>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
  
          <?php
          
            $loop = new WP_Query( array( 'post_type' => 'testimonio','order' => 'ASC') );
            $count=0;
            if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post(); 
            $count=$count+1;
          ?>
          
          <?php if ($count==1) {
      echo '<div class="item active">';
            } 
            else {
      echo '<div class="item">';
          } ?>
          
          <?php 
          the_post_thumbnail('full', array('class'=>'testimonialimg'))
          ?>
          
            <div class="carousel-caption caption-testimonial">
            <h3 class="titulocarousel text-left"><?php echo get_the_title(); ?></h3>
            <p class="text-left"><?php echo get_the_content(); ?></p>
            <small><p class="text-left">Lorem ipsum dolor sit amet, consectetur.</p></small>
          </div>
          </div>          
          
          <?php endwhile;
          
          endif;
          
          ?>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-testimonial" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-testimonial" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<section class="serviciossection">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-offset-2">
        <?php
        
          $loop = new WP_Query( array( 'post_type' => 'servicio','order' => 'ASC') );
          $count=0;
          if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post(); 
          $count=$count+1;
        ?>
        
        <?php if ($count%2==0) {?>
<div class="row">
  <div class="col-xs-9">
    <h2><?php echo get_the_title() ;?></h2>
    <p class="text-justify"><?php echo get_the_content(); ;?></p>
    <button type="button" class="btn boton pull-left">ir a servicios</button>
  </div>
  <div class="col-xs-3">
    <?php the_post_thumbnail('full', array('class'=>'img-responsive'));?>
  </div>
</div>
<hr class="hr-serv">
<?php
          } 
          else { ?>
    <div class="row">
      <div class="col-xs-3"> 
        <?php the_post_thumbnail('full', array('class'=>'img-responsive'));?>
      </div>
      <div class="col-xs-9">
        <h2><?php echo get_the_title() ;?></h2>
        <p class="text-justify"><?php echo get_the_content(); ;?></p>
        <button type="button" class="btn boton pull-right">ir a servicios</button>
      </div>
    </div>
<hr class="hr-serv">
        <?php } 
          
        
         endwhile;
        
        endif;
        
        ?>

      </div>
    </div>
  </div>
</section>