<?php
/*
 Template Name: Landing Page
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<!-- <h1 class="page-title"><?php the_title(); ?></h1> -->

								</header>

								<section class="entry-content cf" itemprop="articleBody">
									<?php the_content(); ?>
								</section>


								<footer class="article-footer">
									<h1 class="tagline">Powering the New Engineer<br />to Transform the Future</h1>

									<ul class="social-icons">
										<li><a href="https://www.facebook.com/gatorengineering" class="icon-facebook" title="Find out more on Facebook"></a></li>		<!-- link to FB event -->	
										<li><a href="https://twitter.com/hashtag/WerthTheWait" class="icon-twitter" title="#WerthTheWait on Twitter"></a></li>
										<li><a href="https://instagram.com/explore/tags/werththewait/" class="icon-instagram" title="#WerthTheWait on Instagram"></a></li>	<!-- link to Instagram hashtag -->
									</ul>

								</footer>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-landing.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
