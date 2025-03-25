<?php
/*
Template Name: Contact Us
*/

?>

<?php

get_header();
?>

<?php $contact_us_pagee = get_field('contact_us_pagee');
$links = $contact_us_pagee['links'];

?>
<section class="bg-gray-100 flex items-center justify-center p-6">
    <div class="container  p-6  rounded-lg  flex !flex-col md:!flex-row gap-6 max-lg:!p-[unset]">
        <div class="contact-info w-full md:w-1/2">
            <h2 class="text-[32px] font-bold mb-2"> <?php echo $contact_us_pagee['heading'] ?></h2>
            <p class="text-sm text-gray-600 mb-4"> <?php echo $contact_us_pagee['para'] ?></p>


            <div class="rounded-lg   w-full max-w-md">
                <?php foreach ($links as $link): ?>
                    <div
                        class="flex items-start bg-white rounded-[16px] py-[14px] px-[16px] mb-4 border border-[#0D0D0D1A]">
                        <div class="bg-[#f6f8f4] rounded-[16px] p-[12px] mr-4">
                            <img alt="Email icon" class="w-6 h-6" height="24" src="<?php echo $link['image']['url'] ?>"
                                width="24" />
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-gray-800 text-[16px] font-semibold !mb-[unset]">
                                <?php echo $link['heading'] ?>
                            </h4>
                            <p class="text-gray-600 !mb-[unset]">
                                <?php echo $link['text'] ?>
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