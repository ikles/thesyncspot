<?php get_header(); ?>
<div class="wrapper">
  <div class="slider">
    <?php dynamic_sidebar('slider'); ?>
    <div class="top top2">
      <div class="w_1200 logo-top-mnu">       
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-logo-mnu">
          <div class="col-lg-2 col-md-5 col-sm-5 col-xs-5 col-logo col-logo2 nopadding">
            <a href="/" class="logo logo2">
              <img src="<? bloginfo('template_url') ?>/img/logo.png" alt="">
              <div>
                <div>Сервис оптимизации налогов</div>
                <span>Сохраним ваши деньги и время!</span>
              </div>
            </a>
          </div>
          <div class="col-lg-10 col-md-7 col-sm-7 col-xs-7 col-mnu col-mnu2 nopadding">
            <div class="mnu-search-wrap">
              <div class="hidden-lg">
                <a href="#" class="toggle-mnu"><span></span></a>
              </div>
              <div class="search2">
                <div class="glass"></div>
                <?php dynamic_sidebar('search'); ?>
              </div>
              <?php dynamic_sidebar('top-mnu'); ?>
            </div>
          </div><!--col-mnu-->
          <div class="categ">
            <div class="like_h2"><?php single_cat_title(); ?></div>   
          </div>
        </div><!--lg-12-->
      </div><!--w_1200 logo-top-mnu-->
    </div><!--top-->    
  </div><!--slider-->
  <div class="w_1200 main">
    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-content">
      <h1><?php single_cat_title(); ?></h1>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>               
        <ul class="categor">
          <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
        </ul>
      <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?> 
  </div>    
  <?php dynamic_sidebar('order_consalt2'); ?>
</div>
<?php dynamic_sidebar('order_consalt'); ?>      
<?php dynamic_sidebar('two_words_about_us'); ?>     
<?php dynamic_sidebar('our_services_line'); ?>        
<?php dynamic_sidebar('our_services'); ?>
<?php dynamic_sidebar('order_consalt'); ?>
<?php dynamic_sidebar('last_art'); ?>
<?php get_footer(); ?>