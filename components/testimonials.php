<?php include ('data/testimonials.php') ?>

<section id="testimonials" class="py-10">
    <div class="2xlx:container">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-10 lg:col-start-2 flex justify-between">
                <div class="px-4">
                    <h2 class="text-h2 mb-4 font-bold text-brand-darkgrey">Our customers' feedback is important to us!</h2>
                    <p class="mb-4">Here's what a few of them have said about us</p>
                </div>
                <div class="hidden lg:flex gap-1 text-lg-banner-p">
                    <div class="testimonial-button-prev h-[50px] w-[50px] bg-brand-orange text-brand-white flex justify-center items-center"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></div>
                    <div class="testimonial-button-next h-[50px] w-[50px] bg-brand-orange text-brand-white flex justify-center items-center"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div id="testimonial-swiper" class="swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($testimonials as $testimonial) {?>
                            <div class="swiper-slide">
                                <div class="border p-4">
                                    <div class="grid grid-cols-2 mb-2">
                                        <div class="col-span-1 flex items-center text-yellow-400">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-span-1 flex justify-end">
                                            <img src="<?php echo $testimonial['img']; ?>" alt="<?php echo $testimonial['img-title']; ?>">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="col-span-2">
                                            <p class="font-bold mb-4"><?php echo $testimonial['customer']; ?></p>
                                            <p><?php echo $testimonial['comment']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
