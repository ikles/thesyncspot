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
						<div class="like_h2">Поиск...</div>		
					</div>
				</div><!--lg-12-->
			</div><!--w_1200 logo-top-mnu-->
		</div><!--top-->		
	</div><!--slider-->
	<div class="w_1200 main">
		<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!--Цикл вордпресс-->
				<div class="post-main">

				<h2><a href="<? the_permalink();?>"><? the_title(); ?></a> <span><? the_time('d.m.Y'); ?></span></h2>
					<div class="post">
						
						<?php the_excerpt(); ?>	
						<p><a href="<? the_permalink();?>">Подробнее</a></p>

					</div>
				</div>
			<?php endwhile; ?>
			<div class="pagination">
				<?php
//Пагинация
				$big = 999999999; 
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
					) );
					?>
				</div>
			<?php else: ?>
				<p>Ничего не найдено...</p> <!--Вывод если нет записей-->
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