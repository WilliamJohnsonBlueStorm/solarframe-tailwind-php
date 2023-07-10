<section aria-labelledby="main-title" class="py-14">
    <div class="container">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 lg:col-span-7">
                <?php if(isset($breadcrumbs) && !empty($breadcrumbs)) { ?>
                    <ul class="mb-8">
                        <?php foreach($breadcrumbs as $crumb) { ?>
                            <li class="inline-block mr-2"><?php echo $crumb; ?></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
                <h1 id="main-title" class="text-h1 lg:text-lg-h1 font-bold text-brand-darkgrey mb-5"><?php echo $pageTitle; ?></h1>
                <p class="mb-5 font-bold">Solid Tiled Roofs allow you to transform your conservatory by replacing your old glass or polycarbonate roof, and swapping it with our insulated, thermally efficient, solid tiled roof.</p>
                <p class="mb-5">Overnight, your old and tired conservatory will become a comfortable, versatile room that you can use all year round, much like every other room in your home.</p>
                <p class="mb-5">Call into one of our showrooms to see how our roof system is manufactured. It is completely unique to SolarFrame and has been developed over several years to become one of the best roofs available in the market.</p>
                <h2 class="text-h2 font-bold text-brand-darkgrey mb-5">Key Features</h2>
                <ul class="list-disc list-inside ml-5">
                    <li>Completely unique, tried and tested system</li>
                    <li>The perfect solution for a conservatory roof replacement</li>
                    <li>Thermally efficient, saving you money on your energy bills</li>
                    <li>Finishing options tailored to the style of your home</li>
                    <li>25 year guarantee on tiles</li>
                    <li>U-value of 0.14 W/m2K</li>
                </ul>
            </div>

            <?php include ('request-a-quote-block.php') ?>

        </div>
    </div>
</section>