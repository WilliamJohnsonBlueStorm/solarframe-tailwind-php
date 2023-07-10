<?php include ('data/video-slider.php') ?>

<section id="testimonials" class="py-10">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-12 flex justify-between">
                <div>
                    <h2 class="text-h2 mb-4 font-bold text-brand-darkgrey">What are some of the benefits of a solid roof?</h2>
                    <p class="mb-4">Our team help answer some of your most asked questions.</p>
                </div>
                <div class="hidden lg:flex gap-1 text-lg-banner-p">
                    <div class="vid-swiper-button-prev h-[50px] w-[50px] bg-brand-orange text-brand-white flex justify-center items-center"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></div>
                    <div class="vid-swiper-button-next h-[50px] w-[50px] bg-brand-orange text-brand-white flex justify-center items-center"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="2xlx:container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div id="video-swiper" class="swiper h-[300px] md:h-[350px]">
                    <div class="swiper-wrapper">
                        <?php foreach ($videoSlides as $videoSlide) {?>
                            <div class="swiper-slide relative group transition-all duration-300">
                                <div class="absolute inset-0 bg-gradient-to-t from-brand-black">
                                    <a href="<?php echo $videoSlide['video']; ?>" title="<?php echo $videoSlide['title']; ?>" data-fancybox>
                                        <img src="<?php echo $videoSlide['img']; ?>" alt="<?php echo $videoSlide['title']; ?>" class="absolute inset-0 h-full w-full brightness-75">
                                        <div class="bg-gradient-to-t from-brand-black absolute inset-0 w-full h-full transition-all duration-300 opacity-0 group-hover:opacity-70"></div>
                                        <div class="absolute bottom-0 p-4">
                                            <h3 class="font-bold w-full text-h3 text-brand-white mb-4">Does a solid conservatory roof improve your utility bills?</h3>
                                            <div class="text-brand-white flex items-center">
                                                <i class="fa fa-play h-[35px] w-[35px] border border-brand-orange rounded-full !flex items-center justify-center mr-2 group-hover:bg-brand-orange transition-all duration-300" aria-hidden="true"></i>
                                                <p>Play video</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
