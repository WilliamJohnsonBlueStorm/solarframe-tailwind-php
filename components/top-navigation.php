<?php
    include 'data/top-navigation.php';
?>

<div class="hidden xl:block bg-brand-darkgrey text-brand-white relative">
    <div class="container" role="navigation">
        <div class="grid grid-cols-12">
            <nav class="col-span-12">
                <ul class="flex flex-row justify-center items-center gap-4">
                    <?php foreach ($mainNavLinks as $mainNavLink) {?>
                        <li class="inline group">
                            <a href="<?php echo $mainNavLink['url']; ?>" title="<?php echo $mainNavLink['title']; ?>" aria-label="<?php echo $mainNavLink['title']; ?>" class="p-4 inline-block hover:text-brand-orange transition-all duration-300 font-bold"><?php echo $mainNavLink['title']; ?></a>
                            <?php if (isset($mainNavLink['navDropdowns'])) {?>
                                <div class="children hidden absolute bg-brand-off-white w-[100vw] group-hover:block transition ease-in duration-300 group-focus-within:block z-20 right-0">
                                    <div class="container">
                                        <ul class="grid grid-cols-4 py-8 gap-8">
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
                                </div>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</div>