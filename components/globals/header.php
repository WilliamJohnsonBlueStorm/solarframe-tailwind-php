<header id="site-header" class="relative">
    <div class="max-w-8xl mx-auto fixed w-full bg-brand-white xl:relative z-[999]">
        <div class="grid grid-cols-5">
            <div class="col-span-2 flex items-center gap-8">
                <a href="/" title="Home" aria-label="Home" class="block p-4 xl:py-4 xl:pl-8">
                    <img src="/images/logo.svg" alt="SolarFrame Logo" class="max-h-[40px] xl:w-full xl:max-h-none">
                </a>
                <div class="hidden xl:block">
                    <?php include ('components/contact-info.php') ?>
                </div>
            </div>
            <div class="col-span-3">
                <ul class="flex xl:justify-end h-full">
                    <li class="hidden xl:flex items-center align-middle">
                        <a href="https://trustedtraders.which.co.uk/businesses/solarframe-direct-limited/" title="which review" aria-label="which review" target="_blank" class="p-5 flex items-center">
                            <img src="/images/which-logo.jpeg" alt="which review" class="max-h-[50px] inline" />
                        </a>
                    </li>
                    <li class="flex flex-1 xl:flex-none items-stretch">
                        <a class="w-full justify-center uppercase bg-brand-white text-brand-orange text-h3 xl:bg-brand-orange xl:text-white xl:p-5 xl:text-p flex items-center hover:brightness-110 transition-all duration-500" href="#" title="request a quote" aria-label="request a quote">
                            <span class="hidden xl:block font-bold">Request a quote</span>
                            <span class="xl:hidden text-[24px]"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li class="flex flex-1 xl:flex-none items-stretch">
                        <a class="w-full justify-center uppercase bg-brand-white text-brand-orange text-h3 xl:bg-brand-lightgrey xl:text-white xl:p-5 xl:text-p flex items-center hover:brightness-110 transition-all duration-500" href="#" title="Book a survey" aria-label="Book a survey">
                            <span class="hidden xl:block font-bold">Book a survey</span>
                            <span class="xl:hidden text-[24px]"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li class="hidden xl:flex xl:flex-none items-stretch">
                        <a class="w-full justify-center uppercase bg-brand-black text-white p-5 flex items-center hover:brightness-110 transition-all duration-500 font-bold" href="#" title="Visit showroom" aria-label="Visit showroom">
                            Visit showroom
                        </a>
                    </li>
                    <li class="hidden xl:flex items-stretch">
                        <a class="bg-brand-grey p-8 text-white flex items-center hover:brightness-110 transition-all duration-500 text-[24px]" href="#" title="Search" aria-label="Search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="flex flex-1 xl:hidden min-h-[70px]">
                        <a id="open-mobile-menu" class="open-mobile-menu w-full justify-center bg-brand-darkgrey text-white flex items-center transition-all duration-500 font-bold" href="#" title="Open Mobile Menu" aria-label="Open Mobile Menu">
                            <span class="text-[24px]"><i class="fa fa-bars" aria-hidden="true"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php include ('components/top-navigation.php') ?>

    <?php include ('components/scrolling-header.php') ?>

</header>