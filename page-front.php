<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MVN
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;
			?>


			<div class="container-fluid gutterless"> <!-- content section -->
				<div class="row"> <!-- 1st row -->

					<div class="col-md-6 gutterless">
						<a href="#" class="featured-post" id="featured-post-1">
							<div></div>
						</a>
					</div>

					<div class="col-md-6 gutterless">
						<a href="#" class="featured-post" id="featured-post-2">
							<div></div>
						</a>
					</div>
				</div><!-- end 1st row -->

				<div class="row"><!-- 2nd row -->
					<div class="col-md-8">

						<div class="row">

							<div class="col-md-6 gutterless">
								<a href="#" class="featured-post-small" id="featured-post-3">
								</a>
							</div>

							<div class="col-md-6 gutterless">
								<a href="#" class="featured-post-small text-tile" id="featured-post-4">
									<div>
										<div class="seperator"></div>

										
										<img class="arrow-img" src="<?php echo(get_bloginfo('template_directory')); ?>/img/arrow.png">
										

										<div>
											<h3>My Portfolio</h3>
											<p>Focused on digital marketing (Websites, SEO, Social Media and E-mailers).</p>
										</div>
									</div>
								</a>
							</div>

						</div>

						<div class="row">
							<div class="col-md-12 gutterless"><a href="" class="featured-post-small" id="featured-post-5"></a></div>
						</div>

					</div>	

					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12 gutterless">
								<a href="#" class="featured-post-large" id="featured-post-6">
								</a>
							</div>
						</div>
					</div> <!-- end col-md-4 -->

				</div><!-- end 2nd row -->

				<div class="row"><!-- 3rd row -->
					<div class="col-md-4 gutterless">
								<a href="#" class="featured-post-triple text-tile" id="featured-post-7">
									<div>
										<div class="seperator"></div>
										
										<img class="arrow-img" src="<?php echo(get_bloginfo('template_directory')); ?>/img/arrow.png">

										<div>
											<h3>About Me</h3>
											<p>Focused on digital marketing (Websites, SEO, Social Media and E-mailers). Focused on digital marketing Focused on digital. Focused on digital marketing Focused</p>
										</div>
									</div>
								</a>
					</div>

					<div class="col-md-4 gutterless">
						<a href="#" class="featured-post-large" id="featured-post-8">
						</a>
					</div>

					<div class="col-md-4 gutterless">
						<a href="#" class="featured-post-triple text-tile" id="featured-post-9">
									<div>
										<div class="seperator"></div>
										
										<img class="arrow-img" src="<?php echo(get_bloginfo('template_directory')); ?>/img/arrow.png">

										<div>
											<h3>About Me</h3>
											<p>Focused on digital marketing (Websites, SEO, Social Media and E-mailers). Focused on digital marketing Focused on digital. Focused on digital marketing Focused</p>
										</div>
									</div>
								</a>
					</div>
				</div><!-- end 3rd row -->







				<div class="row"><!-- 4th row -->


					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12 gutterless">
								<a href="#" class="featured-post-large" id="featured-post-10">
								</a>
							</div>
						</div>
					</div> <!-- end col-md-4 -->



					<div class="col-md-8">

					<div class="row">
							<div class="col-md-12 gutterless"><a href="" class="featured-post-small" id="featured-post-13"></a></div>
						</div>

						<div class="row">

							

							<div class="col-md-6 gutterless">
								<a href="#" class="featured-post-small text-tile" id="featured-post-11">
									<div>
										<div class="seperator"></div>
										
										<img class="arrow-img" src="<?php echo(get_bloginfo('template_directory')); ?>/img/arrow-dark.png">

										<div>
											<h3>My Portfolio</h3>
											<p>Focused on digital marketing (Websites, SEO, Social Media and E-mailers).</p>
										</div>
									</div>
								</a>
							</div>

							<div class="col-md-6 gutterless">
								<a href="#" class="featured-post-small" id="featured-post-12">
								</a>
							</div>

						</div>

						

					</div>	

					

				</div><!-- end 4th row -->




				<div class="row"> <!-- 5th row -->

					<div class="col-md-6 gutterless">
						<a href="#" class="featured-post" id="featured-post-14">
							<div></div>
						</a>
					</div>

					<div class="col-md-6 gutterless">
						<a href="#" class="featured-post" id="featured-post-15">
							<div></div>
						</a>
					</div>
				</div><!-- end 5th row -->










				<div class="row">
					<div class="col-md-4 gutterless">
						<a href="#" class="featured-post" id="tripple-post">
							<div></div>
						</a>
					</div>
				</div>

			</div>



			<?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
