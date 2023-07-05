<?php include ('data/case-studies.php'); ?>

<section id="case-studies" class="mb-10">
    <div class="2xlx:container">
        <div class="grid-cols-12">
            <div class="col-span-12 py-10">
                <h2 class="text-h2 lg:text-center font-bold text-brand-darkgrey px-4">Take a look at our recent case studies</h2>
            </div>
            <div id="case-study-swiper" class="swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($caseStudies as $caseStudie) {?>
                        <div class="swiper-slide relative overflow-hidden group">
                            <a href="<?php echo $caseStudie['url']; ?>" title="<?php echo $caseStudie['title']; ?>" aria-label="<?php echo $caseStudie['title']; ?>">
                                <img src="<?php echo $caseStudie['img']; ?>" alt="<?php echo $caseStudie['title']; ?>" class="w-full h-auto object-cover brightness-90 group-hover:brightness-75 group-hover:scale-110 transition-all duration-300">
                                <div class="absolute bottom-0 text-brand-white p-4">
                                    <h3 class="text-p mb-4 lg:text-lg-h3 font-bold">"<?php echo $caseStudie['title']; ?>"</h3>
                                    <p></p>
                                    <div class="flex">
                                        <i class="fa fa-long-arrow-right h-[35px] w-[35px] border border-brand-orange rounded-full !flex items-center justify-center mr-2 group-hover:bg-brand-orange transition-all duration-300" aria-hidden="true"></i>
                                        <p class="flex items-center">View case study</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>