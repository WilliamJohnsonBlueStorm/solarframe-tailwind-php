<?php include ('data/social-links.php'); ?>

<ul class="flex gap-4 flex-wrap">
    <?php foreach ($socialLinks as $socialLink) {?>
        <li class="inline"><a href="<?php echo $socialLink['url']; ?>" title="<?php echo $socialLink['title']; ?>" aria-label="<?php echo $socialLink['title']; ?>" target="_blank" class="w-[50px] h-[50px] border border-brand-lightgrey rounded-full flex justify-center items-center hover:bg-brand-grey transition-all duration-300"><i class="fa <?php echo $socialLink['icon']; ?> text-brand-orange" aria-hidden="true"></i></a></li>
    <?php } ?>
</ul>