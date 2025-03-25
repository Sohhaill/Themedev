<?php
/*
Template Name: All Courses
*/

?>

<?php

get_header();
?>
<?php $course_slider = get_field('course_slider');


?>

<section class="flex !flex-col items-center justify-center">
    <div class="courrses_text flex !flex-col items-center justify-center">
        <div class="inline-block bg-gray-100 text-green-700 py-[5px] px-3 rounded-full text-sm font-[600] mb-[15px]">
            Excellence
        </div>
        <h1 class="text-[40px] font-bold text-black w-fit m-auto relative text-center">
            <img src="https://moodlecourse.mi6.global/theme/academi/pix/Star.svg" alt="Star"
                class="hero-star ml-auto absolute right-[-31px] top-[-13px]">
            Master
            <span class="text-green-700"> Psychometric </span>
            and <br>Behavioral Courses
        </h1>
        <p class="text-gray-600 mt-3 !mb-10">
            Unlock expertise with tailored courses for psychometric and behavioral excellence
        </p>
    </div>

    <div class="courses_slider all_courses">
        <div class="w-full max-w-4xl">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($course_slider as $slider): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $slider['images']['url'] ?>" alt="Image 1" class="w-full h-auto">
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Navigation buttons -->
                <div class="swiper-button-next swiper-button-next1"></div>
                <div class="swiper-button-prev swiper-button-prev1"></div>
            </div>
        </div>
    </div>
</section>

<!-- sldier using swipersldier libraray -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper(".swiper", {
            slidesPerView: 3,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next1",
                prevEl: ".swiper-button-prev1",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    });
</script>


<section class="flex flex-col items-center py-16 gap-4 container">

    <div class="inline-block  text-green-700 py-[5px] px-3 rounded-full text-[16px]  font-[600]">
        Explore Our Courses </div>
    <h1 class="text-[40px] tajawal font-bold text-center text-black mt-2 mb-5">
        <span class="text-black-700 "> Discover Popular Courses and Learning <br>Opportunities
    </h1>
    <div class="courses_search flex justify-between items-center mt-[33px] self-baseline all_courses">
        <!-- Navigation buttons -->

        <div class="search_filter flex gap-[5px] justify-center items-center ">

            <form role="search" method="get" id="searchform" class="searchform"
                action="https://moodlethemedev.mi6.global/">
                <div>
                    <label class="screen-reader-text" for="s">Search for:</label>
                    <input type="text" value="" name="s" id="s">
                    <input type="submit" id="searchsubmit" value="Search">
                </div>
            </form>
            <div class="filter p-[8px] rounded-[8px] border !border-[#0D0D0DCC]"> <img
                    src="https://moodlethemedev.mi6.global/wp-content/themes/resilience/assets/bootstrap/images/Vector.png">
            </div>
        </div>
    </div>
    <div class="card-group grid grid-cols-1 md:grid-cols-3 gap-2">
        <?php
        $courses_query = new WP_Query(array(
            'post_type' => 'Courses', //name of the CPT
            'posts_per_page' => -1,  //show all post on page
        ));

        if ($courses_query->have_posts()): //check if there is any post available 
            while ($courses_query->have_posts()): //print evey post in that is stored in variable
                $courses_query->the_post(); //enable the to use post funtions like the_title etc
                $post_id = get_the_ID(); //save the each post id in variable
                $categories = get_the_terms($post_id, 'courses_category'); //get all catagories of all post in variable



                $age = '';
                $price = '';
                if ($categories && !is_wp_error($categories)) {
                    foreach ($categories as $category) {
                        if ($category->slug === 'age') {
                            $age = $category->name;
                        } elseif ($category->slug === 'free') {
                            $price = $category->name;
                        }
                    }
                }

                ?>
                <div class="card border !h-[unset] border-[rgba(0,0,0,0.175)] px-[10px] py-[10px] !rounded-[16px]">
                    <div class="cart_image relative">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" class="card-img-top"
                            alt="<?php the_title(); ?>">
                        <div class="register_button absolute top-[16px] left-[9px]">
                            <a class="!text-[#4c782b] !bg-[#FFFFFF] no-underline font-medium text-[16px] py-[5px] px-[12px] text-center rounded-[8px] border"
                                href="#"> <?php echo $price ?></a>
                        </div>
                    </div>
                    <div class="card-body flex justify-between !pb-[unset]">
                        <h5 class="card-title text-[24px] font-bold"><?php the_title(); ?></h5>
                        <h5 class="card-title text-[16px] font-normal text-[#0D0D0DCC]">
                            <?php echo $age ?>
                        </h5>
                    </div>
                    <div class="card-body !pt-[unset]">
                        <p class="card-text"><span>Author: </span><?php the_author(); ?></p>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                    </div>
                    <div class="register_button pb-[15px] pt-[5px]">
                        <a class="!text-[#4c782b] no-underline font-medium text-[16px] py-[12px] px-[24px] text-center rounded-[8px] border !border-[#4C782B]"
                            href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else:
            echo '<p>No courses found.</p>';
        endif;
        ?>
    </div>



</section>
<?php
get_footer();
?>