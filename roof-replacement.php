<?php include('components/globals/head.php') ?>

<?php include('components/globals/header.php') ?>

<?php include('components/department-banner.php') ?>

<main id="content" role="main">
    <section aria-labelledby="main-title" class="py-14">
        <div class="container">
            <div class="grid grid-cols-12 gap-8">
                <div class="col-span-12 lg:col-span-7">
                    <span class="mb-5 inline-block"><a href="/" title="home" aria-label="home" class="underline">Home</a> - Roof Replacements</span>
                    <h1 id="main-title" class="text-h1 lg:text-lg-h1 font-bold text-brand-darkgrey mb-5">Roof Replacements</h1>
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
                <div class="col-span-12 lg:col-span-5">
                    <div class="border border-brand-black p-6">
                        <h3 class="text-h3 text-brand-orange font-bold mb-5">Request a Quote</h3>
                        <p class="mb-5">Simply fill in your details below for your <span class="font-bold">free, no obligation quote</span> today!</p>
                        <form>
                            <label for="quote-postcode" class="font-bold block mb-2">Postcode <span class="text-red-600">*</span></label>
                            <div class="grid grid-cols-2 gap-4">
                                <input type="text" id="quote-postcode" name="postcode" class="border border-brand-lightgrey p-2 col-span-2 lg:col-span-1">
                                <div>
                                    <input type="submit" value="Lookup" class="py-2 px-8 text-brand-white bg-brand-orange uppercase cursor-pointer border border-brand-orange inline font-bold">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-brand-darkgrey py-10">
        <div class="container">
            <div class="grid grid-cols-12 gap-8">
                <div class="col-span-12">
                    <!--Image slider-->
                    <!-- Slider main container -->
                    <div id="solid-roof-swiper" class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <a href="/images/roof-slide-1.jpeg" data-fancybox data-caption="roof slide 1" class="hover:cursor-swiper-pointer">
                                    <img src="images/roof-slide-1.jpeg" alt="roof slide 1" class="w-full h-auto border border-brand-white">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="/images/roof-slide-2.jpeg" data-fancybox data-caption="roof slide 2" class="hover:cursor-swiper-pointer">
                                    <img src="images/roof-slide-2.jpeg" alt="roof slide 2" class="w-full h-auto border border-brand-white">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="/images/roof-slide-3.webp" data-fancybox data-caption="roof slide 3" class="hover:cursor-swiper-pointer">
                                    <img src="images/roof-slide-3.webp" alt="roof slide 3" class="w-full h-auto border border-brand-white">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="/images/roof-slide-4.jpeg" data-fancybox data-caption="roof slide 4" class="hover:cursor-swiper-pointer">
                                    <img src="images/roof-slide-4.jpeg" alt="roof slide 4" class="w-full h-auto border border-brand-white">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="/images/roof-slide-5.jpeg" data-fancybox data-caption="roof slide 5" class="hover:cursor-swiper-pointer">
                                    <img src="images/roof-slide-5.jpeg" alt="roof slide 5" class="w-full h-auto border border-brand-white">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="/images/roof-slide-6.jpeg" data-fancybox data-caption="roof slide 6" class="hover:cursor-swiper-pointer">
                                    <img src="images/roof-slide-6.jpeg" alt="roof slide 6" class="w-full h-auto border border-brand-white">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 mx-4">
                    <hr class="w-full border-4 border-brand-black">
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <h3 class="text-h3 text-brand-white font-bold mb-5">Increased Value</h3>
                    <p class="text-brand-white">Solid roofs increase the value to your home. They also add a new level of kerb appeal to house buyers looking to move up the ladder.</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <h3 class="text-h3 text-brand-white font-bold mb-5">Ambient Temperature</h3>
                    <p class="text-brand-white">Gone are the days of being too hot in summer and too cold in winter. Above all, a SolarFrame roof maintains an ambient temperature all year round.</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <h3 class="text-h3 text-brand-white font-bold mb-5">Lower Energy Bills</h3>
                    <p class="text-brand-white">They are also far more thermally efficient than an old polycarbonate roof - 15 times in fact! In other words, they keep energy bills low.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-brand-orange py-10">
        <div class="container">
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2 lg:col-span-1">
                    <p class="uppercase text-brand-white mb-5">Energy efficient and secure</p>
                    <h2 class="text-h2 font-bold text-brand-white mb-5">Why Choose a Solarframe conservatory roof replacement</h2>
                    <p class="text-brand-white mb-5">We are your local experts, transforming conservatories throughout Yorkshire into beautiful living spaces.</p>
                    <p class="text-brand-white mb-5">In addition, we take care of everything from start to finish, including building regulations, design, installation and finishing touches.</p>
                    <p class="text-brand-white mb-5">Our flexible finance options mean you can spread the cost of your home improvements across a flexible period of time. That way, you can happily invest in transforming your home without any stress or worry!</p>
                </div>
                <div class="col-span-2 lg:col-span-1">
                    <img src="images/why-choose-img.webp" alt="why choose image" class="w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-brand-white py-10">
        <div class="container">
            <div class="grid grid-cols-2 gap-8">
                <div class="col-span-2 lg:col-span-1 bg-brand-orange p-8">
                    <h3 class="text-h3 text-brand-white font-bold mb-5">Need new windows too?</h3>
                    <p class="text-brand-white mb-5">Checkout of our stunning range of windows in a wide variety of colours and styles</p>
                    <a href="#" title="find out more" aria-label="find out more" class="uppercase font-bold py-5 px-8 bg-brand-darkgrey text-brand-white inline-block">Find out more</a>
                </div>
                <div class="col-span-2 lg:col-span-1 bg-brand-darkgrey p-8">
                    <h3 class="text-h3 text-brand-white font-bold mb-5">Request a Brochure</h3>
                    <p class="text-brand-white mb-5">Find out more about conservatory roof replacement and discover the rest of our range.</p>
                    <a href="#" title="Fill in your request here" aria-label="Fill in your request here" class="uppercase font-bold py-5 px-8 bg-brand-orange text-brand-white inline-block">Fill in your request here</a>
                </div>
            </div>
        </div>
    </section>

    <section id="compliment-your-home" class="bg-brand-off-white py-10">
        <div class="container">
            <div class="grid grid-cols-4 gap-8">
                <div class="col-span-4 text-center">
                    <h2 class="text-h2 font-bold text-brand-darkgrey mb-5">Perfectly Complements Your Home</h2>
                    <p class="mb-5">We know you want your new roof to blend seamlessly into your property, so because of that, we offer a wide range of tile options, colours and styles.</p>
                </div>
                <div class="col-span-4 justify-between flex">
                    <h3 class="text-h3 text-brand-darkgrey font-bold">Tile Options</h3>
                    <div class="hidden lg:flex gap-1 text-lg-banner-p">
                        <!-- If we need navigation buttons -->
                        <div class="tile-swiper-prev h-[50px] w-[50px] bg-brand-orange text-brand-white flex justify-center items-center">
                            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        </div>
                        <div class="tile-swiper-next h-[50px] w-[50px] bg-brand-orange text-brand-white flex justify-center items-center">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <!-- Slider main container -->
                    <div class="swiper pb-10" id="tile-options-swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide h-auto">
                                <div class="h-full flex flex-col justify-between">
                                    <img src="images/Amethyst.jpeg" alt="amethyst" class="w-full h-auto">
                                    <p class="px-4 pt-4 pb-10 border border-black bg-white font-bold h-full">Amethyst</p>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="h-full flex flex-col justify-between">
                                    <img src="images/Sunset.jpeg" alt="Sunset" class="w-full h-auto">
                                    <p class="px-4 pt-4 pb-10 border border-black bg-white font-bold h-full">Sunset</p>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="h-full flex flex-col justify-between">
                                    <img src="images/Sunshine.jpeg" alt="Sunshine" class="w-full h-auto">
                                    <p class="px-4 pt-4 pb-10 border border-black bg-white font-bold h-full">Sunshine</p>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="h-full flex flex-col justify-between">
                                    <img src="images/Titanium-Grey-Shingle.png" alt="Titanium Grey Shingle" class="w-full h-auto">
                                    <p class="px-4 pt-4 pb-10 border border-black bg-white font-bold h-full">Titanium Grey Shingle</p>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="h-full flex flex-col justify-between">
                                    <img src="images/Smoked-Oak-Shingle.png" alt="Smoked Oak-Shingle" class="w-full h-auto">
                                    <p class="px-4 pt-4 pb-10 border border-black bg-white font-bold h-full">Smoked Oak-Shingle</p>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="h-full flex flex-col justify-between">
                                    <img src="images/Slate-Grey.jpeg" alt="Slate Grey" class="w-full h-auto">
                                    <p class="px-4 pt-4 pb-10 border border-black bg-white font-bold h-full">Slate Grey</p>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="h-full flex flex-col justify-between">
                                    <img src="images/Rustic-Terracotta-Shingle.png" alt="Rustic Terracotta Shingle.png" class="w-full h-auto">
                                    <p class="px-4 pt-4 pb-10 border border-black bg-white font-bold h-full">Rustic Terracotta Shingle</p>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="h-full flex flex-col justify-between">
                                    <img src="images/Oak.jpeg" alt="Oak" class="w-full h-auto">
                                    <p class="px-4 pt-4 pb-10 border border-black bg-white font-bold h-full">Oak</p>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="h-full flex flex-col justify-between">
                                    <img src="images/Rustic-Brown-Shingle.png" alt="Rustic Brown Shingle" class="w-full h-auto">
                                    <p class="px-4 pt-4 pb-10 border border-black bg-white font-bold h-full">Rustic Brown Shingle</p>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="h-full flex flex-col justify-between">
                                    <img src="images/Rustic-Red-Shingle.png" alt="Rustic Red Shingle" class="w-full h-auto">
                                    <p class="px-4 pt-4 pb-10 border border-black bg-white font-bold h-full">Rustic Red Shingle</p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:block swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-span-3 sm:col-span-2 lg:col-span-1">
                    <p class="font-bold mb-5 text-[20px]">Glazing Options</p>
                    <p class="mb-5">You can rest assured your conservatory will still be a light and bright room, but if you still want that extra bit of light or to sit and gaze at the night’s sky, there are options for additional glazing.</p>
                    <p class="mb-5">Choose our Velux rooflights to add extra light and ventilation or open up an area of your roof with a SkyPod lantern.</p>
                    <p class="mb-5">Whichever you choose, don’t worry, neither will compromise the thermal benefits of your brand new roof!</p>
                </div>
                <div class="col-span-4 sm:col-span-2 lg:col-span-1">
                    <img src="images/Glazing-Options.jpeg" alt="open window" class="max-h-[350px] sm:max-h-none w-full h-auto object-cover">
                </div>
                <div class="col-span-4 sm:col-span-2 lg:col-span-1">
                    <p class="font-bold mb-5 text-[20px]">Finishing Options</p>
                    <p class="mb-5">Our expert team will finish your solid roof conservatory to the highest standards.</p>
                    <p class="mb-5">Whether you choose plaster or cladding your conservatory will have the feel of an extension.</p>
                    <p class="mb-5">Whichever you choose, you’re guaranteed an energy efficient room, which you can use all year round!</p>
                    <p class="mb-5">And don’t forget lights and electrics, our skilled electricians will sort all of that for you too.</p>
                </div>
                <div class="col-span-4 sm:col-span-2 lg:col-span-1">
                    <img src="images/Finishing-Options.jpeg" alt="finishing options" class="max-h-[350px] sm:max-h-none w-full h-auto object-cover">
                </div>
                <div class="col-span-4">
                    <p class="font-bold mb-5 text-center">Options are for illustrative purposes only. Please ask your salesperson for samples.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="how-to-find-us" class="py-10">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12 relative">
                    <img src="images/find-us.jpeg" alt="find us" class="max-h-[600px] w-full border border-brand-white object-cover">
                    <div class="lg:grid lg:grid-cols-2 lg:absolute lg:bottom-0">
                        <div class="lg:col-span-1">
                            <div class="py-4 lg:p-8 bg-brand-white lg:ml-4 lg:mr-4">
                                <h3 class="text-h3 mb-4 font-bold text-brand-darkgrey">Come and see for yourself</h3>
                                <p class="text-p mb-4">Our outdoor showsite is the largest in Yorkshire with a number of full size conservatories and garden studios available to browse. We also have an indoor showroom with a stunning range of windows and doors.</p>
                                <a href="#" title="request a quote" aria-label="request a quote" class="text-brand-white bg-brand-orange p-4 block text-center uppercase sm:inline-block hover:brightness-110 transition-all duration-300 font-bold">How to find us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose-solar-frame" class="bg-brand-orange py-10">
        <div class="container">
            <div class="grid grid-cols-3 gap-8">
                <div class="col-span-3 text-center">
                    <h2 class="text-h2 text-brand-white font-bold mb-5">Why Choose Solarframe</h2>
                    <p class="text-brand-white">Our team are based in the heart of South Yorkshire in our own state-of-the-art factory.</p>
                </div>
                <div class="col-span-3 lg:col-span-1">
                    <h3 class="text-h3 text-brand-white font-bold mb-5">Bespoke Design</h3>
                    <p class="text-brand-white mb-5">Our experts are on hand to listen to your requirements. We will help you to create the perfect space for you and your family.</p>
                </div>
                <div class="col-span-3 lg:col-span-1">
                    <h3 class="text-h3 text-brand-white font-bold mb-5">Hassle-Free</h3>
                    <p class="text-brand-white mb-5">Our team ensure every little detail is completed to the highest standards. Installers to electricians to plasterers, we look after you from start to finish.</p>
                </div>
                <div class="col-span-3 lg:col-span-1">
                    <h3 class="text-h3 text-brand-white font-bold mb-5">Manufactured in Yorkshire</h3>
                    <p class="text-brand-white mb-5">All of your products are manufactured to exacting industry standards in our Rotherham and Barnsley factories. We use the highest quality components, all sourced from the UK.</p>
                </div>
            </div>
        </div>
    </section>

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
                                            <img src="images/which-logo-small.png" alt="which logo">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="col-span-2">
                                            <p class="font-bold mb-4">Customer in North Yorkshire</p>
                                            <p>Very satisfied with all aspects of work. Workmen arrived on time and worked extremely hard and were very unobtrusive. Quality of work is first class.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <img src="images/trust-pilot-small.png" alt="trust pilot logo">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="col-span-2">
                                            <p class="font-bold mb-4">Norma Sykes</p>
                                            <p>We could not praise solarframe more highly and will definitely recommend them to others. And we are highly delighted with our new garden room.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <img src="images/google-small.png" alt="Google logo">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="col-span-2">
                                            <p class="font-bold mb-4">Leanne</p>
                                            <p>The fitters were on time, friendly and professional. The quality of work outstanding. Wouldn't hesitate to recommend this company.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <img src="images/which-logo-small.png" alt="which logo">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="col-span-2">
                                            <p class="font-bold mb-4">Customer in North Yorkshire</p>
                                            <p>Very satisfied with all aspects of work. Workmen arrived on time and worked extremely hard and were very unobtrusive. Quality of work is first class.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <img src="images/google-small.png" alt="Google logo">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="col-span-2">
                                            <p class="font-bold mb-4">Leanne</p>
                                            <p>The fitters were on time, friendly and professional. The quality of work outstanding. Wouldn't hesitate to recommend this company.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <img src="images/trust-pilot-small.png" alt="trust pilot logo">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="col-span-2">
                                            <p class="font-bold mb-4">Norma Sykes</p>
                                            <p>We could not praise solarframe more highly and will definitely recommend them to others. And we are highly delighted with our new garden room.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('components/globals/footer.php') ?>

<?php include('components/globals/sticky-footer.php') ?>

<?php include('components/globals/brochure-popup.php') ?>

<?php include('components/globals/mobile-header.php') ?>

<?php include('components/globals/included-scripts.php') ?>