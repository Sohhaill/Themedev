<?php
/*
Template Name: Sign Up
*/

?>

<?php

get_header();
?>
<div class="container  flex justify-start items-center !flex-col gap-13 pb-5 pt-8">
    <div class="contact_text flex justify-center items-center !flex-col gap-3">
        <div class="inline-block bg-gray-100 text-green-700 py-[5px] px-3 rounded-full text-sm  font-medium">
            Welcome </div>
        <h1 class="text-[40px] tajawal font-[500] text-black  w-fit m-auto relative ">
            <img src="https://moodlecourse.mi6.global/theme/academi/pix/Star.svg" alt="Star"
                class="hero-star ml-auto absolute right-[-32px] top-[-13px]">
            Sign Up to
            <span class="text-[#4C782B]"> Resilience </span>

        </h1>
    </div>
    <div class="login-container flex flex-col items-center justify-center !w-[670px] max-lg:!w-[348px]">
        <div class="text-center flex items-center justify-center flex-col gap-6">
            <div class="text-[32px] font-bold text-black">Create your account</div>
            <div class="text-sm text-gray-500">Already have an account? <a href="/resilience/index.php/login/"
                    class="text-[#4C782B]">Log In</a>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php
get_footer();
?>