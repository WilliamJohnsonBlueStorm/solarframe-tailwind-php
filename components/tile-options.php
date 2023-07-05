<?php include ('data/tile-options.php')?>

<div class="col-span-4 justify-between flex">
    <h3 class="text-h3 text-brand-darkgrey font-bold">Tile Options</h3>
    <div class="hidden lg:flex gap-1 text-lg-banner-p">
        <!-- If we need navigation buttons -->
        <div class="tile-swiper-prev h-[50px] w-[50px] bg-brand-orange text-brand-white flex justify-center items-center">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
        </div>
        <div class="tile-swiper-next h-[50px] w-[50px] bg-brand-orange text-brand-white flex justify-center items-center">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        </div>
    </div>
</div>
<div class="col-span-4">
    <!-- Slider main container -->
    <div class="swiper pb-10" id="tile-options-swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php foreach ($tileOptions as $tileOption) {?>
                <div class="swiper-slide h-auto">
                    <div class="h-full flex flex-col justify-between">
                        <img src="<?php echo $tileOption['img']; ?>" alt="<?php echo $tileOption['title']; ?>" class="w-full h-auto">
                        <p class="px-4 pt-4 pb-10 border border-black bg-white font-bold h-full"><?php echo $tileOption['title']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="lg:block swiper-pagination"></div>
    </div>
</div>