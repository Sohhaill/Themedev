<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resilience
 */


?>

<?php
if ((is_front_page() || is_page('contact-us')) && is_active_sidebar('home_sidebar')): ?>
	<aside class="home-sidebar">
		<?php dynamic_sidebar('home_sidebar'); ?>
	</aside>
<?php endif; ?>

<?php
// Check if the current page is the sign-up page (by ID or slug)
if (is_page('sign-up')): ?>
	<aside id="signup-sidebar">
		<?php if (is_active_sidebar('signup_sidebar')): ?>
			<?php dynamic_sidebar('signup_sidebar'); ?>
		<?php endif; ?>
	</aside>
<?php endif; ?>