<?php include ('data/why-choose-solid-roof-extension.php') ?>

<section class="py-10">
    <div class="2xlx:container">
        <div class="grid grid-cols-2 bg-brand-darkgrey px-8 py-14 gap-14">
            <div class="col-span-2 text-brand-orange text-h2 font-bold text-center">
                <h2>Why choose a solid roof extension?</h2>
            </div>
            <?php foreach($roofExtensions as $roofExtension) { ?>
                <div class="col-span-2 sm:col-span-1 flex gap-4">
                    <span class="text-[18px] lg:text-h2 text-brand-white">
                        <i class="fa fa-long-arrow-right h-[50px] w-[50px] lg:h-[90px] lg:w-[90px] border border-brand-orange rounded-full !flex justify-center items-center" aria-hidden="true"></i>
                    </span>
                    <div class="flex-col justify-between">
                        <h3 class="text-brand-white text-h3 font-bold"><?php echo $roofExtension['title']; ?></h3>
                        <p class="text-brand-white"><?php echo $roofExtension['description']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>