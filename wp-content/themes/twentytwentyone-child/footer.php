<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part('template-parts/footer/footer-widgets'); ?>

<footer id="colophon" class="site-footer">

	<?php if (has_nav_menu('footer')) : ?>
		<nav aria-label="<?php esc_attr_e('Secondary menu', 'twentytwentyone'); ?>" class="footer-navigation">
			<ul class="footer-navigation-wrapper">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'items_wrap'     => '%3$s',
						'container'      => false,
						'depth'          => 1,
						'link_before'    => '<span>',
						'link_after'     => '</span>',
						'fallback_cb'    => false,
					)
				);
				?>
			</ul><!-- .footer-navigation-wrapper -->
		</nav><!-- .footer-navigation -->
	<?php endif; ?>
	<div class="site-info">
		<div class="site-name">
			<?php if (has_custom_logo()) : ?>
				<div class="site-logo"><?php the_custom_logo(); ?></div>
			<?php else : ?>
				<?php if (get_bloginfo('name') && get_theme_mod('display_title_and_tagline', true)) : ?>
					<?php if (is_front_page() && !is_paged()) : ?>
						<?php bloginfo('name'); ?>
					<?php else : ?>
						<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
		</div><!-- .site-name -->

		<?php
		if (function_exists('the_privacy_policy_link')) {
			the_privacy_policy_link('<div class="privacy-policy">', '</div>');
		}
		?>

		<div class="powered-by">
			<?php
			printf(
				/* translators: %s: WordPress. */
				esc_html__('Proudly powered by %s.', 'twentytwentyone'),
				'<a href="' . esc_url(__('https://wordpress.org/', 'twentytwentyone')) . '">WordPress</a>'
			);
			?>
		</div><!-- .powered-by -->

	</div><!-- .site-info -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<!--load more posts-->
	<script>
		/**let currentPage = 1;
		$('#load-more').on('click', function() {
			//alert('here');
			currentPage++; // Do currentPage + 1, because we want to load the next page
			$.ajax({
				type: 'POST',
				url: '<?php echo admin_url('admin-ajax.php'); ?>',
				dataType: 'json',
				data: {
					action: 'weichie_load_more',
					paged: currentPage,
				},
				success: function(res) {
					console.log(res);
					if (res.paged >= res.max) {
						$('#load-more').hide();
					}
					$('.publication-list').append(res.html);
				}
			});
		});*/

		//local--For Load More Post
		var page = 2;
		var page_count = jQuery('.publication-list').data('pagecount');
		$('#load-more').on('click', function() {
			//alert('here');
			//currentPage++; // Do currentPage + 1, because we want to load the next page
			$.ajax({
				type: 'POST',
				url: '<?php echo admin_url('admin-ajax.php'); ?>',
				data: {
					action: 'weichie_load_more',
					page: page,
				},
				success: function(res) {
					$('.publication-list').append(res);
					if (page_count == page) {
						$('#load-more').hide();
					}
					page++;
				}

			});
		});


		//for live
		var page = 2;
		var count_page = jQuery('#count-page').data('countpage');
		$('.btn-load-more').on('click', function() {
			$.ajax({
				type: 'POST',
				url: '<?php echo admin_url('admin-ajax.php'); ?>',
				data: {
					action: 'load_more',
					page: page,
				},
				beforeSend: function() {
					jQuery('#loader').show();
				},
				success: function(res) {
					$('.flex-wrap-wrap').append(res);
					if (count_page == page) {
						$('.btn-load-more').hide();
					}
					jQuery('#loader').hide();
					page++;
				}
			});
		});
	</script>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>