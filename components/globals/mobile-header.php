<?php include ('data/top-navigation.php'); ?>

<header id="mobile-header" role="banner" class="hidden bg-brand-darkgrey overflow-auto fixed w-full top-[70px] right-0 bottom-0 z-[999]">
    <div class="px-4">
        <nav id="mobile-nav" role="navigation" class="text-p py-8">
            <ul>
                <?php foreach ($mainNavLinks as $mainNavLink) {?>
                    <li class="py-3">
                        <a href="<?php echo $mainNavLink['url']; ?>" title="<?php echo $mainNavLink['title']; ?>" aria-label="<?php echo $mainNavLink['title']; ?>" id="<?php echo $mainNavLink['mobile-id']; ?>" class="expand-mobile-nav font-bold text-brand-white flex justify-between"><?php echo $mainNavLink['title']; ?>
                            <?php if (isset($mainNavLink['navDropdowns'])) {?> <i class="fa fa-plus" aria-hidden="true"></i> <?php } ?>
                        </a>
                        <?php if (isset($mainNavLink['navDropdowns'])) {?>
                            <div class="bg-brand-darkgrey hidden">
                                <ul class="grid grid-cols-2 py-8 gap-8">
                                    <?php foreach ($mainNavLink['navDropdowns'] as $navDropdown) {?>
                                        <li>
                                            <a href="<?php echo $navDropdown['url']; ?>" title="<?php echo $navDropdown['title']; ?>" aria-label="<?php echo $navDropdown['title']; ?>" class="block bg-brand-white text-brand-black group hover:text-brand-orange">
                                                <img src="<?php echo $navDropdown['img']; ?>" alt="<?php echo $navDropdown['title']; ?>" class="w-full h-auto">
                                                <p class="font-bold p-4 transition-all duration-300"><?php echo $navDropdown['title']; ?></p>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <div class="py-8 px- border-b border-t border-t-brand-grey border-b-brand-grey">
            <img src="images/which-logo-mobile.png" alt="which logo" class="mx-auto">
        </div>
        <div class="py-8">
            <div class="grid grid-cols-1 gap-4">
                <div class="grid grid-cols-2">
                    <a href="#" title="Request a quote" aria-label="Request a quote" class="font-bold bg-brand-orange inline-block text-brand-white py-4 text-center">Request a quote</a>
                    <a href="#" title="Visit Showroom" aria-label="Visit Showroom" class="font-bold bg-brand-black inline-block text-brand-white py-4 text-center">Visit Showroom</a>
                </div>
                <a href="#" title="Visit Showroom" aria-label="Visit Showroom" class="w-full font-bold bg-brand-lightgrey inline-block text-brand-white py-4 text-center">Visit Showroom</a>
                <form method="POST" action="#" class="bg-brand-grey flex">
                    <button type="submit" name="search button" class="inline-block"><i class="fa fa-search p-4 text-brand-white" aria-hidden="true"></i></button>
                    <label for="mobile-search" class="hidden">Search</label>
                    <input type="text" id="mobile-search" name="mobile_search" placeholder="SolarFrame" class="p-4 bg-transparent w-full">
                </form>
            </div>
        </div>
    </div>
</header>