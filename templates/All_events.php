<?php
/*
Template Name: All Events
*/

?>

<?php

get_header();
?>
<section class="flex flex-col  py-6 gap-4 container items-center justify-center">

    <div class="courrses_text flex !flex-col items-center justify-center ">
        <div class="inline-block bg-gray-100 text-green-700 py-[5px] px-3 rounded-full text-sm  font-[600] mb-[15px]">
            Announcements & Events </div>
        <h1 class="text-[40px]  font-bold text-black  w-fit m-auto relative text-center ">
            <img src="https://moodlecourse.mi6.global/theme/academi/pix/Star.svg" alt="Star"
                class="hero-star ml-auto absolute right-[-31px] top-[-13px]">
            Stay Updated with Our Latest<br> Announcements & Events
        </h1>
        <p class="text-gray-600 mt-3 !mb-10">
            Discover What's New – Announcements, Updates, and Upcoming Events</p>
    </div>
    <div class="card-group grid grid-cols-1 md:grid-cols-3 gap-2">

        <?php

        $event_query = new WP_Query(array(
            'post_type' => 'Events',
            'posts_per_page' => -1,
        ));

        if ($event_query->have_posts()):
            while ($event_query->have_posts()):
                $event_query->the_post();

                ?>
                <div class="card border !h-[unset]  border-[rgba(0,0,0,0.175)]  !rounded-[16px] pb-4">
                    <div class="cart_image relative">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" class="card-img-top"
                            alt="...">

                    </div>
                    <div class="card-body flex justify-between !pb-[unset] ">
                        <h5 class="card-title text-[12px] !text-[#4C782B] bg-[#edf1ea] py-[5px] px-3 rounded-[8px] !h-fit">
                            Any
                            text
                            here
                        </h5>
                        <p class="!text-[14px] font-normal text-[#0D0D0D99] !mb-[unset]"><?php the_date() ?></p>
                    </div>
                    <div class="card-body !pt-[unset]">
                        <h5 class="card-text !text-[24px] font-bold"><?php the_title(); ?></h5>

                        <p class="card-text"><?php the_content() ?></p>
                    </div>
                    <a class="!text-[#4c782b] no-underline font-medium text-[16px] py-[10px] px-[24px] text-center rounded-[8px] border !border-[#4C782B] !w-fit !ml-4"
                        href="<?php the_permalink(); ?>">Read More</a>

                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else:
            echo '<p>No Events found.</p>';
        endif;
        ?>


    </div>
</section>



<?php
get_footer();
?>