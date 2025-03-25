<?php get_header(); ?>


<section class="bg-black text-white">
<?php
	if (have_posts()):
		while (have_posts()):
			the_post();
			$post_id = get_the_ID();
			$categories = get_the_terms($post_id, 'courses_category');
			?>

    <div class="container mx-auto px-4 py-8 flex flex-col justify-center items-center">
        <div class="text-center">
        
            <h1 class="text-5xl text-white font-bold mt-2"><?php the_title(); ?></h1>
        </div>
        <div class="mt-8">
		<?php if (has_post_thumbnail()): ?>
			<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>" class="w-full rounded-lg w-[500px] border border-white">
			<?php endif; ?>
        </div>
        <div class="flex justify-between items-center mt-4 bg-white text-white-900 p-4 rounded-lg w-full">
            <div class="flex items-center">
                <img src="https://secure.gravatar.com/avatar/492de15cd0460d0a703deabb86a3555c?s=300&d=mm&r=g" alt="Author's profile picture" class="w-10 h-10 rounded-full">
                <div class="ml-3">
                    <p class="text-sm text-black text-500"><?php the_author(); ?></p></p>
                    <p class="text-lg text-black font-semibold">Editor</p>
                </div>
            </div>
			<div class="course-meta">
					<?php
					if ($categories && !is_wp_error($categories)) {
						echo '<p class="text-lg text-black" ><strong>Categories:</strong> ';
						foreach ($categories as $category) {
							echo '<span class="text-lg text-black">' . esc_html($category->name) . '</span> ';

						}
						echo '</p>';
					}
					?>
				</div>
            <div class="text-500 text-black">
			<?php the_date() ?></p>
            </div>
        </div>
		<div class="course-description mt-4 ">
					<?php the_content(); ?>
				</div>

    </div>
	<?php endwhile;
	endif;
	?>
</section>


<section class="bg-gray-900 text-white py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-6">Related Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php
          
            $categories = get_the_terms(get_the_ID(), 'courses_category');

            if ($categories && !is_wp_error($categories)) {
                $category_ids = wp_list_pluck($categories, 'term_id');

           

                $related_posts = new WP_Query(array(
                    'post_type'      => 'Courses', 
                    'posts_per_page' => 3,
                    'post__not_in'   => array(get_the_ID()), 
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'courses_category',
                            'field'    => 'term_id',
                            'terms'    => $category_ids,
                            'operator' => 'IN',
                        ),
                    ),
                ));

                if ($related_posts->have_posts()) :
                    while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                        <div class="bg-white text-black p-4 rounded-lg shadow-lg">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover rounded-lg">
                                </a>
                            <?php endif; ?>
                            <h3 class="text-xl font-semibold mt-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="text-gray-600 mt-2"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                            <a href="<?php the_permalink(); ?>" class="text-blue-500 mt-3 inline-block">Read More</a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <p class="text-center">No related posts found.</p>
                <?php endif;
            } else {
                echo '<p class="text-center">No categories found.</p>';
            }
            ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>