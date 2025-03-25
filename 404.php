<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package resilienceghvghhg
 */

get_header();
?>

<div class="error flex flex-col justify-start items-center h-screen">
	<div class="inline-block bg-gray-100 text-green-700 py-[5px] px-3 rounded-full text-sm  font-medium">
		Page not found </div>
	<h1 class="text-[40px] font-bold text-black mb-5 mt-2">
		Looking a little lost?
	</h1>
	<img src="<?php echo get_template_directory_uri() . '/assets/bootstrap/images/Group.png'; ?>">
	<p class="text-gray-600 mb-4 mt-4">
		Looks like you ventured too far little one, let's go home.</p>
	<div class="register_button flex gap-[8px] items-center justify-center
	">

		<a class="!text-[#fff] no-underline font-medium text-[16px] bg-[#4c782b] text-center py-[10px] px-[24px] rounded-[8px]"
			href="<?php echo esc_url(home_url('/')); ?>">Go Home</a>
	</div>

</div>

<?php
get_footer();
