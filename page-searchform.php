<?php
/*
 Template Name: Page Template: Searchform
 *
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-all d-all cf">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> >

								<header class="article-header">

									<h1 class="page-title">Suche</h1>


								</header>

								<section class="entry-content cf" >
								<form role="search" method="get" id="mysearch" class="searchform2" action="<?php echo home_url( '/' ); ?>">
								<div>
									<label for="s" class="screen-reader-text">suchen für</label>
									<input type="search" id="s" name="s" value="" />

									<button type="submit" id="searchsubmit" >suche</button>
								</div>
							</form>
								</section>


	

							</article>

							<?php endwhile; else : ?>

	

							<?php endif; ?>

						</main>

				

				</div>

			</div>


<?php get_footer(); ?>
