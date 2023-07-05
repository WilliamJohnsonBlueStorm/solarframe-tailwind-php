<?php
    include ('data/top-navigation.php');
?>

<div class="col-span-5 lg:col-span-2">
    <div class="grid grid-cols-2">
        <h4 class="text-h4 mb-4 font-bold">Go to</h4>
    </div>
    <div class="grid grid-cols-2">
        <nav role="navigation">
            <ul>
                <?php
                $outputs = array_slice($mainNavLinks, 0, 5);
                foreach ($outputs as $output) { ?>
                    <li class="mb-2"><a href="<?php echo $output['url']; ?>" title="<?php echo $output['title']; ?>" aria-label="<?php echo $output['title']; ?>" class="hover:text-brand-orange transition-all duration-300"><?php echo $output['title']; ?></a></li>
                <?php } ?>

            </ul>
        </nav>
        <nav role="navigation">
            <ul>
                <?php
                $outputs2 = array_slice($mainNavLinks, 5, 5);
                foreach ($outputs2 as $output2) { ?>
                    <li class="mb-2"><a href="<?php echo $output2['url']; ?>" title="<?php echo $output2['title']; ?>" aria-label="<?php echo $output2['title']; ?>" class="hover:text-brand-orange transition-all duration-300"><?php echo $output2['title']; ?></a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</div>