<?php
/*
Template Name: Home Page
*/

?>

<?php

get_header();
?>
<?php $home_banner = get_field('home_banner');

$course_button = $home_banner['explore_course'];
$banner_login = $home_banner['login'];
$banner_image = $home_banner['image'];

?>
<section class="bg-white text-center p-6 ">
    <div class="inline-block bg-gray-100 text-green-700 py-[5px] px-3 rounded-full text-sm  font-[600] mb-[15px]">
        <?php echo $home_banner['empower'] ?>
    </div>
    <h1 class="text-[40px] tajawal font-bold text-black  w-fit m-auto relative ">
        <img src="https://moodlecourse.mi6.global/theme/academi/pix/Star.svg" alt="Star"
            class="hero-star ml-auto absolute right-[3px] top-[-13px]">
        <span class="text-green-700 "> <?php echo $home_banner['resiliance_span'] ?> </span>
        <?php echo $home_banner['heading'] ?></span>
    </h1>
    <p class="text-gray-600 mt-3 !mb-10">
        <?php echo $home_banner['paragraph'] ?>
    </p>
    <div class="register_button flex gap-[8px] items-center justify-center
    ">
        <a class="!text-[#4c782b] no-underline font-[600] text-[16px] py-[9px] px-[24px] text-center rounded-[8px] border !border-[rgba(76,120,43,1)]
" href="<?php echo esc_url($course_button['url']) ?>"> <?php echo $course_button['title'] ?></a>
        <a class="!text-[#fff] no-underline font-[600] text-[16px] bg-[#4c782b] text-center py-[10px] px-[24px] rounded-[8px]"
            href="<?php echo esc_url($banner_login['url']) ?>"> <?php echo $banner_login['title'] ?></a>
    </div>
    <?php if (!empty($banner_image)) {

        ?>
        <div class="container py-5 flex justify-center">
            <img src="<?php echo esc_url($banner_image['url']) ?>" class="img-fluid w-[1065px]" alt="...">
        </div>
    <?php } ?>
</section>

<?php $mission = get_field('mission');
$mission_learn = $mission['learn_more'];
$image_left = $mission['image_left'];
$image_right = $mission['image_right'];

?>

<section class="bg-[#eef2ea]">
    <div class="container mx-auto  flex flex-wrap overflow-hidden h-[672px] justify-between max-lg:!h-[unset]">
        <div class="w-full lg:w-1/2 p-10 max-md:!px-[12px]">
            <h1 class="text-[#4C782B] font-semibold !text-[16px] mb-4">
                <?php echo $mission['who']; ?>
            </h1>
            <h2 class="text-black font-bold text-4xl mb-4">
                <?php echo $mission['vission']; ?>
            </h2>
            <p class="text-gray-600 text-lg mb-4">
                <?php echo $mission['pargrap1']; ?>
            </p>
            <p class="text-gray-600 text-lg mb-4 pb-[24px]">
                <?php echo $mission['Pargraph2']; ?>
            </p>
            <a class="!text-white no-underline font-semibold text-[16px] bg-[#4c782b] text-center py-[10px] px-[24px] rounded-[8px]"
                href="<?php echo esc_url($mission_learn['url']); ?>">
                <?php echo $mission_learn['title']; ?>
            </a>
        </div>
        <div class="mission_slider flex gap-[18px] w-full md:w-1/2 h-full !w-fit flex-col md:!flex-row max-lg:!hidden">

            <div class="left_slider swiper m-[unset]">
                <div class="swiper-wrapper flex-1 flex flex-col gap-4 ">
                    <?php foreach ($image_left as $m_left): ?>
                        <div class="left_m_images swiper-slide h-fit">
                            <img alt="Group of people in a counseling session" class="w-full rounded-lg object-cover !w-[305px] h-full max-md:!w-full
                    " src="<?php echo $m_left['images']['url']; ?>" />
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
            <div class="right_slider swiper m-[unset]">
                <div class="swiper-wrapper flex-1 flex flex-col gap-4 ">
                    <?php foreach ($image_right as $m_right): ?>
                        <div class="left_m_images swiper-slide h-fit">
                            <img alt="Group of people in a counseling session"
                                class="w-full rounded-lg object-cover  !w-[305px] h-full"
                                src="<?php echo $m_right['images']['url']; ?>" />
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var swiper = new Swiper(".left_slider", {
        direction: "vertical", //change the direction of the sldier vertical
        slidesPerView: 2, // 2 sldier on screen
        spaceBetween: 6,
        speed: 1000,
        loop: true, 
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            reverseDirection: true,
        },

    });
    var swiper = new Swiper(".right_slider", {
        direction: "vertical",
        slidesPerView: 2,
        spaceBetween: 6,
        speed: 1000,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            reverseDirection: false,
        },

    });
</script>

<?php $course_post = get_field('course_post');
$exploreall = $course_post['exploreall'];

?>



<section class="flex flex-col items-center py-16 gap-[1.75rem] container">


    <div class="flex items-center flex-col gap-3">
        <div class="text-[#4C782B] text[16px] mb-2 font-[600]"> <?php echo $course_post['explore'] ?></div>
        <div class="text-gray-800 text-[32px] font-bold text-center leading-[40px]">
            <?php echo $course_post['heading'] ?>
        </div>

    </div>
    <div class="slider-container overflow-hidden">
        <div class="courses_search flex justify-between items-center mt-[33px]">
            <!-- Navigation buttons -->
            <div class="courses_navigation hidden lg:!block p-[16px]">
                <button id="prev" class="!border-0 w-[32px] !rounded-none"><img
                        src="<?php echo get_template_directory_uri() . '/assets/bootstrap/images/ph_arrow-right.png' ?>"></button>
                <button id="next" class="!border-0 w-[32px] !rounded-none"><img
                        src="<?php echo get_template_directory_uri() . '/assets/bootstrap/images/ph_arrow-right (1).png' ?>"></button>
            </div>
            <div class="search_filter flex gap-[5px] justify-center items-center ">
                <div class="filter p-[8px] rounded-[8px] border"> <img
                        src="<?php echo get_template_directory_uri() . '/assets/bootstrap/images/Vector.png' ?>"> </div>
                <?php get_search_form(); ?>
            </div>
        </div>
        <div class="course_slider flex !flex-col lg:!flex-row transition-transform duration-500">
            <?php
            $courses_query = new WP_Query(array(
                'post_type' => 'Courses',
                'posts_per_page' => -1,
            ));

            if ($courses_query->have_posts()):
                while ($courses_query->have_posts()):
                    $courses_query->the_post();
                    $post_id = get_the_ID();
                    $categories = get_the_terms($post_id, 'courses_category');

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

                    <div class="course_slide min-w-full lg:min-w-[33.33%] box-border p-2">
                        <div class="card border border-[rgba(0,0,0,0.175)] px-[12px] py-[12px] rounded-[16px] gap-[13px]">
                            <div class="cart_image relative">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                                    class="card-img-top" alt="<?php the_title(); ?>">
                                <div class="register_button absolute top-[16px] left-[9px]">
                                    <a class="text-[#4c782b] bg-[#FFFFFF] no-underline font-[600] text-[16px] py-[5px] px-[12px] text-center rounded-[8px] border"
                                        href="#"> <?php echo $price ?></a>
                                </div>
                            </div>
                            <div class="card-body flex flex-col p-[unset]">
                                <div class="courses_catagory flex justify-between p-[unset]">
                                    <h5 class="card-title text-[24px] font-bold mb-[unset]"><?php the_title(); ?></h5>
                                    <h5 class="card-title text-[16px] font-bold text-[#0D0D0DCC]"> <?php echo $age ?> </h5>

                                </div>
                                <p class="card-text"><span>Author: </span><?php the_author(); ?></p>
                            </div>
                            <div class="card-body p-[unset]">

                                <p class="card-text"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                            </div>
                            <a class="text-[#4c782b] no-underline font-[600]  text-[16px] py-[12px] px-[24px] text-center rounded-[8px] border !border-[#4C782B] w-fit"
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


    </div>

    <script>
        const course_slider = document.querySelector('.course_slider');
        const course_slides = document.querySelectorAll('.course_slide');
        const course_nextBtn = document.getElementById('next');
        const course_prevBtn = document.getElementById('prev');

        let course_index = 0;

        // Ensure slides exist before accessing offsetWidth
        const course_slideWidth = course_slides.length > 0 ? course_slides[0].offsetWidth : 0;

        function updateSlider() {
            course_slider.style.transform = `translateX(-${course_index * course_slideWidth}px)`;
        }

        course_nextBtn.addEventListener('click', () => {
            if (course_index < course_slides.length - 3) {
                course_index++;
                updateSlider();
            }
        });

        course_prevBtn.addEventListener('click', () => {
            if (course_index > 0) {
                course_index--;
                updateSlider();
            }
        });

        window.addEventListener('resize', () => {
            // Update slide width on window resize to adapt to new dimensions
            if (course_slides.length > 0) {
                course_slideWidth = course_slides[0].offsetWidth;
            }
            updateSlider();
        });
    </script>


    <div class="register_button py-[20px]
    "> <a class="!text-[#fff] no-underline font-[600] text-[16px] bg-[#4c782b] text-center py-[10px] px-[24px] rounded-[8px]"
            href="<?php echo esc_url($exploreall['url']) ?>"><?php echo $exploreall['title'] ?></a>
    </div>
</section>

<?php $devliery_model = get_field('devliery_model');

?>

<section class="py-19 lg:pl-20 flex gap-6 !flex-col container">
    <div class="text-[#4C782B] text[16px] mb-2 font-[600] text-left container">
        Our Delivery Model
    </div>
    <div id="scrollContainer"
        class="courses_items flex flex-col lg:!flex-row gap-6 w-full overflow-x-auto !scrollbar-hide justify-left">
        <?php foreach ($devliery_model as $models): ?>
            <div class="cart_main flex h-[481px] gap-6">
                <div class="cart_heading bg-[#edf1ea] max-lg:!hidden rounded-[16px] p-6 flex items-center justify-between flex-col cursor-pointer transition-all duration-500 ease-in-out"
                    id="cartHeading">
                    <img src="https://moodlecourse.mi6.global/theme/academi/pix/tick_icon.svg" alt="img 1"
                        class="card-image-am">
                    <h1 class="!text-[24px] font-semibold text-gray-800 [writing-mode:vertical-lr] rotate-180">
                        <?php echo $models['heading'] ?>
                    </h1>
                </div>

                <div class="cart_body hidden bg-[#edf1ea] max-lg:!block rounded-lg p-7 md:min-w-[749px] max-w-3xl shadow-md cursor-pointer transition-[width,padding,opacity] duration-500 ease-in-out overflow-hidden"
                    id="cartBody">
                    <div class="flex justify-between items-center">
                        <h1 class="!text-[24px] font-semibold text-gray-800">
                            <?php echo $models['heading'] ?>
                        </h1>
                        <img src="https://moodlecourse.mi6.global/theme/academi/pix/tick_icon.svg" alt="img 1"
                            class="card-image-am">
                    </div>
                    <hr class="border-t border-gray-300 my-4">
                    <div class="flex flex-col md:!flex-row items-center">
                        <img src="<?php echo $models['image']['url'] ?>" alt="Icon representing live sessions" class="mr-6">
                        <p class="text-gray-700 text-base self-baseline transition-all duration-500 ease-in-out">
                            <?php echo $models['paragraph'] ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    
    </div>
</section>



<?php $counter_section = get_field('counter_section');

?>

<section class="bg-black text-white py-12">

    <div class="container mx-auto py-12 px-4 text-center">
        <h1 class="text-[32px] font-bold"><?php echo $counter_section['heading']; ?></h1>
        <p class="mt-4 !mb-15 text-gray-400"><?php echo $counter_section['paragraph']; ?></p>

        <div class="mt-11 bg-white text-black rounded-lg py-6 flex !flex-col md:!flex-row justify-center items-center">

            <!-- Users Counter -->
            <div class="flex-1 p-4 md:border-b-0 md:border-r border-gray-200">
                <h2 class="!text-[18px]"><?php echo $counter_section['users']; ?></h2>
                <p class="mt-4 text-[40px] font-bold !mb-[unset]" id="counter1"
                    data-target="<?php echo $counter_section['counters']; ?>">K+</p>
            </div>

            <!-- Courses Counter -->
            <div class="flex-1 p-4 md:border-b-0 md:border-r border-gray-200">
                <h2 class="!text-[18px]"><?php echo $counter_section['course']; ?></h2>
                <p class="mt-4 text-[40px] font-bold !mb-[unset]" id="counter2"
                    data-target="<?php echo $counter_section['course_number']; ?>">K+</p>
            </div>

            <!-- Satisfaction Counter -->
            <div class="flex-1 p-4">
                <h2 class="!text-[18px]"><?php echo $counter_section['satisfaction']; ?></h2>
                <p class="mt-4 text-[40px] font-bold !mb-[unset]" id="counter3"
                    data-target="<?php echo $counter_section['20k+']; ?>">K+</p>
            </div>
        </div>
    </div>


</section>
<?php $review = get_field('review');


?>
<section class="bg-[#eef2ea] container my-16 md:!pr-[unset] rounded-[16px] ">
    <div class="container mx-auto  flex flex-wrap md:!pr-[unset] gap-6 rounded-[16px] max-md:pt-[25px]">
        <div class="w-full md:w-1/2 md:p-12 ">

            <h2 class="text-gray-900 text-[32px] font-bold mb-4 !leading-10">
                <?php echo $review['heading'] ?>
            </h2>
            <p class="text-gray-600 text-lg mb-4">
                <?php echo $review['para1'] ?>
            </p>
            <p class="text-gray-600 text-lg mb-4 pb-[24px]">
                <?php echo $review['para2'] ?>
            </p>
            <div class="register_button pb-[43px]
    ">

                <a class="!text-[#fff] no-underline font-[600] text-[16px] bg-[#4c782b] text-center py-[10px] px-[24px] rounded-[8px]"
                    href="<?php echo esc_url($review['learn_more']['url']) ?>"><?php echo $review['learn_more']['title'] ?></a>
            </div>
        </div>
        <div class="flex-1 relative ">
            <img src="  <?php echo $review['image']['url'] ?>"
                alt="A group of people sitting in a circle in a bright room with large windows, listening to a person giving a presentation."
                class="w-full !h-full object-cover rounded-r-[16px]">
        </div>
    </div>
</section>
<contact>
    <?php $send_course = get_field('send_course'); ?>
    <section class="bg-[#eef2ea] container my-16 md:!pl-[unset] rounded-[16px]">
        <div class="container mx-auto  flex flex-wrap md:!pl-[unset] gap-6 rounded-[16px]">
            <div class="flex-1 relative ">
                <img src="  <?php echo $send_course['image']['url'] ?>"
                    alt="A group of people sitting in a circle in a bright room with large windows, listening to a person giving a presentation."
                    class="w-full !h-full object-cover rounded-l-[16px]">
            </div>
            <div class="w-full md:w-1/2 md:p-12 ">

                <h2 class="text-gray-900 text-[32px] font-bold mb-4 !leading-10">
                    <?php echo $send_course['heading'] ?>
                </h2>
                <p class="text-gray-600 text-lg mb-4">
                    <?php echo $send_course['para1'] ?>
                </p>
                <p class="text-gray-600 text-lg mb-4 pb-[24px]">
                    <?php echo $send_course['para2'] ?>
                </p>
                <div class="register_button pb-[43px]">

                    <a class="!text-[#fff] no-underline font-[600] text-[16px] bg-[#4c782b] text-center py-[10px] px-[24px] rounded-[8px]"
                        href="<?php echo esc_url($send_course['learn_more']['url']) ?>"><?php echo $review['learn_more']['title'] ?></a>
                </div>
            </div>

        </div>
    </section>

</contact>


<section class="flex flex-col  py-16 gap-[2.6rem] container items-start">

    <div class="flex items-center flex-col gap-3">
        <h1 class="text-gray-800 text-[32px] !font-bold text-center">Announcements & Events</h1>

    </div>

    <div class="card-group flex flex-col md:!flex-row gap-3 event_slider">

        <?php

        $event_query = new WP_Query(array(
            'post_type' => 'Events',
            'posts_per_page' => 3,
        ));
        if ($event_query->have_posts()):
            while ($event_query->have_posts()):
                $event_query->the_post();

                ?>
                <div class="card border !h-[unset]  border-[rgba(0,0,0,0.175)]  !rounded-[16px] pb-4 event_slide">
                    <div class="cart_image relative">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" class="card-img-top"
                            alt="...">

                    </div>
                    <div class="card-body flex justify-between !pb-[unset] ">
                        <h5
                            class="card-title text-[12px] !text-[#4C782B] bg-[#edf1ea] py-[5px] px-3 rounded-[8px] !h-fit font-[600]">
                            Any
                            text
                            here
                        </h5>
                        <p class="!text-[14px] font-normal text-[#0D0D0D99] !mb-[unset]"><?php the_date() ?></p>
                      
                    </div>
                    <div class="card-body !pt-[unset]">
                        <h5 class="card-text !text-[24px] font-bold mb-3"><?php the_title(); ?></h5>

                        <p class="card-text "><?php the_content() ?></p>
                    </div>
                    <a class="!text-[#4c782b] no-underline font-[600] text-[16px] py-[10px] px-[24px] text-center rounded-[8px] border !border-[#4C782B] !w-fit !ml-4 mt-[5px]"
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
<?php $contactus = get_field('contactus');
$links_contact = $contactus['links_contact'];


?>
<section class="bg-gray-100 flex items-center justify-center p-6">
    <div class="container  p-6  rounded-lg  flex !flex-col md:!flex-row gap-6 max-lg:!p-[unset]">
        <div class="contact-info w-full md:w-1/2">
            <h2 class="text-[32px] font-bold mb-2"> <?php echo $contactus['heading'] ?></h2>
            <p class="text-sm text-gray-600 mb-4"> <?php echo $contactus['para'] ?></p>


            <div class="rounded-lg   w-full max-w-md">
                <?php foreach ($links_contact as $links): ?>
                    <div
                        class="flex items-start bg-white rounded-[16px] py-[14px] px-[16px] mb-4 border border-[#0D0D0D1A]">
                        <div class="bg-[#f6f8f4] rounded-[16px] p-[12px] mr-4">
                            <img alt="Email icon" class="w-6 h-6" height="24" src="<?php echo $links['image']['url'] ?>"
                                width="24" />
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-gray-800 text-[16px] font-semibold !mb-[unset]">
                                <?php echo $links['heading'] ?>
                            </h4>
                            <p class="text-gray-600 !mb-[unset]">
                                <?php echo $links['text'] ?>
                            </p>
                        </div>
                        <div class="bg-[#f6f8f4] rounded-[16px] p-[14px] ">
                            <img alt="Email icon"
                                src="<?php echo get_template_directory_uri() . '/assets/bootstrap/images/fi_3314260.png'; ?>" />
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

        </div>
        <div class="contact-form w-full md:w-1/2 bg-[#ebede9] border border-[#4C782B33] rounded-[16px] p-9">
            <h2 class="text-2xl font-bold mb-2">Let's Connect</h2>
            <p class="text-sm text-gray-600 mb-4">For each of the 15 statements below, choose the answer that best
                describes you from: (not at all, rarely, so).</p>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>


<?php

get_footer();
?>