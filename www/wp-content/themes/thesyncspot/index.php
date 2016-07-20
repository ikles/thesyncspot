<?php get_header(); ?>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->    
<header class="header_section">
	<div class="container">
		<?php dynamic_sidebar('top-promo'); ?>
	</div>
</header>
<section class="syncspot container">
	<div class="">
		<?php dynamic_sidebar('synctext'); ?>
	</div>
</section>
<section class="testimonial_section">
	<div class="container">
		<?php dynamic_sidebar('testimonial'); ?>
	</div>
</section>
<section class="neverlook_section">
	<div class="container">
		<?php dynamic_sidebar('never_look'); ?>
	</div>
</section>
<section class="graphfill_section">
	<div class="container">
		<?php dynamic_sidebar('graphfill'); ?>	
	</div>
</section>
<section class="join_section">
	<div class="container">
		<?php dynamic_sidebar('join'); ?>	
	</div>
</section>
<section class="searchfilter_section">
	<div class="container">
		<?php dynamic_sidebar('searchfilter'); ?>
	</div>
</section>
<section class="trackall_section">
	<div class="container">
		<?php dynamic_sidebar('trackall'); ?>
	</div>
</section>
<section class="contactcloud_section">
	<div class="container">	
		<?php dynamic_sidebar('contactcloud'); ?>
	</div>
</section>
<section class="contactfrom_section">
	<div class="container">

		<?php dynamic_sidebar('contactfrom'); ?>
		<!--div class="contactfrom">
			<h1>still have questions? reach out!</h1>
			<div class="address">
				<div class="call">
					<h2>call us</h2>
					<span>323.931.5050</span>
				</div>
				<div class="emailus">
					<h2>email us</h2>
					<span>info@thesyncspot.com</span>
				</div>
			</div>
			<div class="contact_from">
				<form action="index.php">
					<input type="text" class="name" placeholder="name">
					<input type="text" class="title" placeholder="title"><br>
					<input type="text" class="company" placeholder="company"><br>
					<input type="text" class="email" placeholder="email">
					<input type="text" class="phone" placeholder="phone"><br>
					<textarea name="message" id="message" placeholder="message"></textarea><br>
					<input type="submit" class="sendbtn" value="submit">
				</form>
			</div>
		</div-->


	</div>
</section>
<?php get_footer(); ?>