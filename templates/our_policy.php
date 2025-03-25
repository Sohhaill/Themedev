<?php
/*
Template Name: Our Policy
*/

?>

<?php

get_header();
?>


<?php $privacy_content = get_field('privacy_content');
$privacy_policy = $privacy_content['privacy_policy'];


?>

<section class="bg-white text-center p-6">
    <div class="inline-block bg-gray-100 text-green-700 py-[5px] px-3 rounded-full text-sm  font-medium">
        سياسة الخصوصية
    </div>
    <h1 class="text-[40px] font-bold text-black mt-3">
        <span class="text-black-700 "> سياسة الخصوصية لدينا</span>
    </h1>
    <p class="text-gray-600 mt-4">
        We provide counseling, research, and tailored services to build strength.
    </p>
    <div class="register_button flex gap-[8px] items-center justify-center
    ">
        <p class="font-bold text-[16px]">الحالية اعتبارا من November, 2024</p>
    </div>


</section>

<div class="policy_main flex flex-col lg:flex-row p-8 !gap-12">
    <div class="policy_left max-lg:order-2 ">

        <?php foreach ($privacy_policy as $left): ?>
            <div id="<?php echo $left['id'] ?>" class="policy_items">
                <h1 class="text-right !mt-[unset] mb-4 text-[20px] font-bold"> <?php echo $left['heading'] ?></h1>
                <p class="text-right text-[16px] mb-5"> <?php echo $left['para'] ?></p>
            </div>
        <?php endforeach ?>
    </div>
    <div class="policy_right max-lg:order-1">
        <div class="fixed_sidebar lg:w-[410px] border  !border-[#4C782B80] !rounded-[16px]">

            <?php foreach ($privacy_policy as $right): ?>

                <a class="text-right !no-underline privacy_links" href="#<?php echo $right['id'] ?>">
                    <h1 class="text-right  text-black !text-[18px] font-bold  p-[18px] hover:bg-[#edf1ea]">
                        <?php echo $right['heading'] ?>
                    </h1>
                </a>

            <?php endforeach ?>
        </div>
    </div>
</div>




<?php

get_footer();
?>