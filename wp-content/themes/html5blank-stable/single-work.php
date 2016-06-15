<?php get_header(); ?>

	<main role="main" id="work-interior">
	<!-- section -->
	<section >

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="work-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo_lightblue.png"></a>
<div style="position:relative;top:-70px;">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>





		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="clear">



<div class="left-column">

			<!-- post title -->
			<h1>
			<?php the_title(); ?>
    </h1>
			<!-- /post title -->

			<?php the_content(); // Dynamic Content ?>
</div>


<div class="right-column"

<!-- post thumbnail -->
<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    <?php the_post_thumbnail(); // Fullsize image for the single post ?>
  </a>
<?php endif; ?>
<!-- /post thumbnail -->

<?php

$image = get_field('first_image');

if( !empty($image) ): ?>

<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>

&nbsp;

<?php

$image = get_field('second_image');

if( !empty($image) ): ?>

<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>

&nbsp;

<?php

$image = get_field('third_image');

if( !empty($image) ): ?>

<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>


</div>


</div>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
</div>
	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
