<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resilience 
 * 
 */

?>
<?php
$footer_logo = get_field('footer_logo', 'option');
$footer_para = get_field('footer_para', 'option');

$social_icons = get_field('social_icons', 'option');

$footer_bottom = get_field('footer_bottom', 'option'); ?>

<footer class="bg-black text-gray-300 !mt-auto">
	<div class="pt-13 px-[10px]">
		<div class="flex flex-col md:!flex-row justify-between items-center   border-gray-700 pb-16 container ">
			<div class="flex flex-col items-start max-w-md">
				<img src="<?php echo $footer_logo['url'] ?>" alt="Resilience logo" class="mb-4 w-[88px]">
				<p class="mb-4">
					<?php echo $footer_para ?>
				</p>
				<div class="flex space-x-4 mt-4 gap-[20px]">
					<?php foreach ($social_icons as $social): ?>

						<a href="<?php $social['social_image']['url'] ?>"> <img
								src="<?php echo esc_url($social['social_image']['url']) ?>">
						</a>
					<?php endforeach ?>
				</div>
			</div>
			<div
				class="flex flex-row   space-y-6 md:space-y-0 md:space-x-16 mt-6 md:mt-0 gap-20 md:!flex-row w-full justify-between  max-w-md ">
				<div class="flex flex-col gap-[16px] !m-[unset]">
					<h3 class="mb-2 text-[16px]">Navigation</h3>
					<div class="footer_menuone flex flex-col gap-[12px]">
						<?php wp_nav_menu(array(
							'container' => false,
							'menu' => 'Footer 1',
							'menu_class' => 'navigation ',


						)) ?>

					</div>
				</div>
				<div class="flex flex-col gap-[16px] !m-[unset]">
					<h3 class="mb-2 text-[16px]">Navigation</h3>
					<div class="footer_menutwo flex flex-col gap-[12px]">
						<?php wp_nav_menu(array(
							'container' => false,
							'menu' => 'Footer 2',
							'menu_class' => 'navigation ',


						)) ?>

					</div>
				</div>
			</div>
		</div>
		<div class="seprator border-t border-gray-700"></div>
		<div class="flex justify-between items-center !py-9 !px-[unset] text-sm container max-md:flex-col gap-[25px]">
			<p><?php echo $footer_bottom ?></p>
			<div class="flex space-x-4">
				<?php wp_nav_menu(array(
					'container' => false,
					'menu' => 'Footer 3',
					'menu_class' => 'navigation ',


				)) ?>

			</div>
		</div>
	</div>
</footer><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>