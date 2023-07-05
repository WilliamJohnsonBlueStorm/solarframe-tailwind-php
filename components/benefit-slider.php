<?php
    include 'data/benefit-slider.php';
?>

<section class="bg-brand-darkgrey py-10">
    <div class="container">
        <div class="grid grid-cols-12 gap-8">
            <div class="col-span-12">
                <!--Image slider-->
                <!-- Slider main container -->
                <div id="solid-roof-swiper" class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php foreach ($benefitSlides as $benefitSlide) {?>
                            <div class="swiper-slide">
                                <a href="<?php echo $benefitSlide['img']; ?>" data-fancybox data-caption="<?php echo $benefitSlide['title']; ?>" class="hover:cursor-swiper-pointer">
                                    <img src="<?php echo $benefitSlide['img']; ?>" alt="<?php echo $benefitSlide['title']; ?>" class="w-full h-auto border border-brand-white">
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-span-12 mx-4">
                <hr class="w-full border-4 border-brand-black">
            </div>
            <div class="col-span-12 lg:col-span-4">
                <h3 class="text-h3 text-brand-white font-bold mb-5">Increased Value</h3>
                <p class="text-brand-white">Solid roofs increase the value to your home. They also add a new level of kerb appeal to house buyers looking to move up the ladder.</p>
            </div>
            <div class="col-span-12 lg:col-span-4">
                <h3 class="text-h3 text-brand-white font-bold mb-5">Ambient Temperature</h3>
                <p class="text-brand-white">Gone are the days of being too hot in summer and too cold in winter. Above all, a SolarFrame roof maintains an ambient temperature all year round.</p>
            </div>
            <div class="col-span-12 lg:col-span-4">
                <h3 class="text-h3 text-brand-white font-bold mb-5">Lower Energy Bills</h3>
                <p class="text-brand-white">They are also far more thermally efficient than an old polycarbonate roof - 15 times in fact! In other words, they keep energy bills low.</p>
            </div>
        </div>
    </div>
</section>