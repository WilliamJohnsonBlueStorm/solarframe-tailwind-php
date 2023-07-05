<?php include ('data/home-slider.php'); ?>

<section id="banner" role="banner" class="relative">
    <div class="swiper" id="banner-swiper">
        <div class="swiper-wrapper">
            <?php foreach ($homeBannerSlides as $homeBannerSlide) {?>
                <div class="swiper-slide">
                    <div class="relative">
                        <img src="<?php echo $homeBannerSlide['img']; ?>" alt="<?php echo $homeBannerSlide['title']; ?>" class="w-full min-h-[500px] max-h-[500px] 2xl:min-h-[900px] 2xl:max-h-[900px] object-cover object-center"/>
                        <div class="bg-gradient-to-r from-brand-black opacity-70 absolute inset-0 h-full w-full"></div>
                        <div class="absolute inset-0">
                            <div class="h-full flex items-center">
                                <div class="container">
                                    <div class="grid grid-cols-12 items-center">
                                        <div class="col-span-12 lg:col-span-6 text-brand-white">
                                            <h2 class="text-banner-h2 lg:text-lg-banner-h2 uppercase mb-4 font-bold"><?php echo $homeBannerSlide['title']; ?></h2>
                                            <p class="mb-2 text-banner-p lg:text-lg-banner-p"><?php echo $homeBannerSlide['description']; ?></p>
                                            <a href="#" title="request a quote" aria-label="request a quote" class="block text-center lg:text-left lg:inline-block p-4 bg-brand-orange uppercase font-bold"><?php echo $homeBannerSlide['button']; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="container z-40 absolute inset-x-0 bottom-0">
        <div class="grid">
            <div class="flex gap-1 text-2xl">
                <div class="button-prev bg-brand-white text-brand-black h-[50px] w-[50px] lg:h-[75px] lg:w-[75px] flex justify-center items-center">
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                </div>
                <div class="button-next bg-brand-white text-brand-black h-[50px] w-[50px] lg:h-[75px] lg:w-[75px] flex justify-center items-center">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
</section>