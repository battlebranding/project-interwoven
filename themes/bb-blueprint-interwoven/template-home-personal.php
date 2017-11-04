<?php
/**
 * Template Name: Homepage - Personal
 */
get_header(); ?>

<header class="personal is-large has-overlay" style="<?php echo ( get_theme_mod( 'homepage_header_background' ) ) ? "background-image: url('" . get_theme_mod( 'homepage_header_background' ) . "'); background-position: center; background-repeat: no-repeat; background-size: cover;" : ''; ?>">
	<div class="section-header has-no-padding">
		<div class="wrapper has-text-centered">
			<?php if ( get_theme_mod( 'branding_logo' ) ) : ?>
				<h1 class="is-logo is-floating-left"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'branding_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a></h1>
			<?php else : ?>
			    <h1 class="is-logo is-floating-left"><?php echo get_bloginfo(); ?></h1>
			<?php endif; ?>
			<?php wp_nav_menu( array(
				'theme_location' 	=> 'primary',
				'container'			=> 'nav',
				'container_class'	=> 'is-floating-right',
				'menu_class'		=> 'is-main-nav is-horizontal',
			) ); ?>
		</div>
	</div>
	<div class="section-body has-space-on-top">
		<div class="wrapper has-text-centered">
			<h2><?php echo html_entity_decode( get_bloginfo( 'description' ) ); ?></h2>
			<h3>Our desire is to help build organizations by investing in people.</h3>
			<!-- <a class="button is-outlined" href="<?php echo home_url('menu'); ?>">View The Menu</a> -->
		</div>
	</div>
	<div class="overlay"></div>
</header>

<section class="restaurant has-no-padding">
	<div class="section-body has-text-centered" style="background-color: #fff;">
		<!-- <div class="wrapper has-no-padding"> -->
			<div class="columns">
				<div class="column is-one-half" style="height: 400px; background-repeat: no-repeat; background-size: cover;">
					<iframe width="100%" height="400" src="https://www.youtube.com/embed/GnNXvsyEVcE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="column is-one-half has-large-padding">
					<h2>What is Interwoven?</h2>
					<hr class="is-small" />
					<!-- <h3>A multi-threaded approach for building organizations by investing in people</h3> -->
					<p>The philosophy of Interwoven is that the stability, productivity, and overall success of any personal or professional experience is based upon the degree to which those who are a part of that experience, understand their connection to others--that people are indeed interwoven.  Interwoven takes pride in facilitating sustainable change, by empowering individuals and groups to lead the journey in discovering the threads for successful outcomes.</p>
					<a class="button is-outlined" href="<?php echo home_url('services'); ?>">Learn More</a>
				</div>
			</div>
		<!-- </div> -->
	</div>
</section>

<section class="personal has-no-padding has-overlay" style="background-image: url('http://interwoven.draft.battlebranding.com/wp-content/uploads/2017/10/dr-crossling-teaching-seminar.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
	<div class="section-body">
		<div class="wrapper has-text-centered">
			<div class="columns has-space-on-top has-space-on-bottom">
				<div class="column">
					<h2 style="color: #fff;">Who is Dr. Crossling?</h2>
					<p>I have dedicated my entire professional journey to understanding the needs of people, both individually and collectively. I truly believe that those who develop solid personal and professional identities build successful connections across all relationship dynamics! I believe that healthy relationships yield results!  As a professional facilitator of individual and collective change, I believe in a systems approach, whereby the needs of an individual, small group, or organization are addressed from in a holistic way.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="overlay"></div>
</section>

<section class="personal has-no-padding has-overlay" style="background-image: url(''); background-position: center; background-repeat: no-repeat; background-size: cover; background-color: #732749;">
	<div class="section-body">
		<div class="wrapper">
			<div class="columns has-space-on-top has-space-on-bottom">
				<div class="column has-large-padding has-text-right">
					<p class="is-headline">One of the greatest ways to optimize diversity on the 21st century is to recognize and welcome the fact that people have mutiple and sometimes competing lived experiences. Diversity is no longer about static identity markers, and checking off qualifying boxes, but more about valuing the way in which lived experiences have cultivated unique talents and abilities of those around us.</p>
				</div>
				<div class="column has-large-padding">
					<h2>From the Blog</h2>
					<h3>When A Promise, Isn’t a Promise</h3>
					<p>Examining the silver lining of broken promises personally and professionally.</p>
					<a class="read-more">Read More</a>
					<h3>Graduation Present: It’s a Boy</h3>
					<p>The importance of warm professionalism in the Higher Education sector.</p>
					<a class="read-more">Read More</a>
					<h3>The Xennial Journey</h3>
					<p>Earning trust against age stereotypes in the workplace.</p>
					<a class="read-more">Read More</a>
				</div>
			</div>
		</div>
	</div>
	<div class="overlay"></div>
</section>

<footer style="background-color: #373435;">
	<div class="section-body">
		<div class="wrapper">
			<div class="columns is-fullwidth-on-mobile">
				<div class="column is-fullwidth-on-mobile">
					<?php if ( get_theme_mod( 'branding_logo_footer' ) ) : ?>
						<h1 class="is-logo is-floating-left"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'branding_logo_footer' ) ); ?>' alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" height="50px"></a></h1>
					<?php else : ?>
					    <h1 class="is-logo is-floating-left"><?php echo get_bloginfo(); ?></h1>
					<?php endif; ?>
				</div>
				<div class="column is-fullwidth-on-mobile">
					<p><?php echo get_theme_mod( 'address' ); ?><br />
						<?php echo get_theme_mod( 'phone_number' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php get_footer(); ?>
