<?php include ('data/roof-extension-style.php') ?>

<section class="py-10">
    <div class="container">
        <div class="grid grid-cols-12 gap-y-8">
            <div class="col-span-12 flex flex-col gap-8">
                <h2 class="text-brand-black text-h2 font-bold text-center">Choose your solid roof extension style</h2>
                <p class="text-p text-center mb-4">We offer three different roof types, depending on your requirements and practicality. We can advise which is best for you.</p>
            </div>
        </div>
    </div>
    <div class="2xlx:container">
        <div class="grid grid-cols-12 gap-y-8 gap-y-0">
            <?php foreach ($roofExtensionStyles as $roofExtensionStyle) {?>
                <div class="relative border border-brand-white col-span-12 lg:col-span-6 xl:col-span-4 gap-0 cursor-pointer min-h-[350px] md:min-h-[500px] overflow-hidden">
                    <div class="absolute inset-0 bg-brand-orange p-4 extension-text">
                        <div class="justify-between h-full flex flex-col">
                            <div>
                                <div class="flex justify-between w-full items-center mb-4">
                                    <span class="font-bold text-[25px] text-brand-white">
                                        <?php echo $roofExtensionStyle['title']; ?>
                                    </span>
                                    <i class="fa fa-minus h-[35px] w-[35px] text-brand-white border border-brand-white rounded-full !flex items-center justify-center" aria-hidden="true"></i>
                                </div>
                                <p class="text-brand-white"><?php echo $roofExtensionStyle['description']; ?></p>
                            </div>
                            <a href="#" title="request a quote" aria-label="request a quote" class="flex w-full items-center">
                                <i class="fa fa-long-arrow-right h-[35px] w-[35px] text-brand-white border border-brand-white rounded-full !flex items-center justify-center mr-4" aria-hidden="true"></i>
                                <span class="text-p text-brand-white">Request a quote</span>
                            </a>
                        </div>
                    </div>
                    <div class="extension-overlay h-full">
                        <img src="<?php echo $roofExtensionStyle['img']; ?>" alt="<?php echo $roofExtensionStyle['title']; ?>" class="brightness-75 w-full h-full">
                        <div class="absolute bottom-0 p-4 flex justify-between w-full items-center">
                            <span class="font-bold text-[25px] text-brand-white">
                                <?php echo $roofExtensionStyle['title']; ?>
                            </span>
                            <i class="fa fa-plus h-[35px] w-[35px] text-brand-white border border-brand-orange rounded-full !flex items-center justify-center" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>