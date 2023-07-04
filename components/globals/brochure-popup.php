<section id="brochure-popup" class="hidden h-full w-full z-[997] absolute inset-0">
    <div class="h-full w-full bg-brand-black/[.80] fixed">
        <div class="bg-brand-darkgrey py-20 w-full overflow-y-auto overflow-x-hidden absolute bottom-0 h-[90vh]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 flex justify-between mb-4">
                        <h2 class="text-h2 text-brand-orange font-bold">Request a brochure</h2>
                        <a href="#" title="close-popup" aria-label="close-popup" id="close-brochure-form" class="text-brand-white">
                            <i class="fa fa-times h-[35px] w-[35px] border border-brand-orange rounded-full !flex items-center justify-center mr-2 hover:bg-brand-orange transition-all duration-300" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <form method="post" action="#" id="request-brochure-form" class="h-full overflow-auto overflow-x-hidden">
                    <div class="grid grid-cols-12 gap-4 md:gap-8">
                        <div class="col-span-12 lg:col-span-8">
                            <p class="text-brand-white block mb-4">Step 1 - Please select the brochure(s) you would like:</p>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                            <p class="text-brand-white">Step 2 - Your details</p>
                        </div>
                        <div class="col-span-12 lg:col-span-8">
                            <div class="grid grid-cols-2  sm:grid-cols-3 lg:grid-cols-4 gap-8">
                                <div class="inline-block">
                                    <input type="checkbox" id="entire-range" name="brochure[]" value="entire-range" class="hidden peer">
                                    <label for="entire-range" class="bg-brand-white inline-block text-center opacity-50 peer-checked:opacity-100 transition-all duration-300 w-full h-full cursor-pointer">
                                        <span>
                                            <img src="images/entire-range-check.png" alt="entire range checkbox" class="w-full h-auto">
                                            <span class="inline-block p-2">Entire Range</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="inline-block">
                                    <input type="checkbox" id="conservatories" name="brochure[]" value="conservatories" class="hidden peer">
                                    <label for="conservatories" class="bg-brand-white inline-block text-center opacity-50 peer-checked:opacity-100 transition-all duration-300 w-full h-full cursor-pointer">
                                        <span>
                                            <img src="images/entire-range-check.png" alt="entire range checkbox" class="w-full h-auto">
                                            <span class="inline-block p-2">Conservatories, Orangeries & Extensions</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="inline-block">
                                    <input type="checkbox" id="roof-replacements" name="brochure[]" value="roof-replacements" class="hidden peer">
                                    <label for="roof-replacements" class="bg-brand-white inline-block text-center opacity-50 peer-checked:opacity-100 transition-all duration-300 w-full h-full cursor-pointer">
                                        <span>
                                            <img src="images/entire-range-check.png" alt="entire range checkbox" class="w-full h-auto">
                                            <span class="inline-block p-2">Roof Replacements</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="inline-block">
                                    <input type="checkbox" id="windows" name="brochure[]" value="windows" class="hidden peer">
                                    <label for="windows" class="bg-brand-white inline-block text-center opacity-50 peer-checked:opacity-100 transition-all duration-300 w-full h-full cursor-pointer">
                                        <span>
                                            <img src="images/entire-range-check.png" alt="entire range checkbox" class="w-full h-auto">
                                            <span class="inline-block p-2">Windows</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="inline-block">
                                    <input type="checkbox" id="doors" name="brochure[]" value="doors" class="hidden peer">
                                    <label for="doors" class="bg-brand-white inline-block text-center opacity-50 peer-checked:opacity-100 transition-all duration-300 w-full h-full cursor-pointer">
                                        <span>
                                            <img src="images/entire-range-check.png" alt="entire range checkbox" class="w-full h-auto">
                                            <span class="inline-block p-2">Doors</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                            <div class="text-brand-white flex flex-col gap-4">
                                <div>
                                    <span class="mr-4">
                                        <input type="radio" id="download" name="brochure_type[]" value="download" checked>
                                        <label for="download">Download</label>
                                    </span>
                                    <span class="mr-4">
                                        <input type="radio" id="post" name="brochure_type[]" value="post">
                                        <label for="post">By Post</label>
                                    </span>
                                    <span class="mr-4">
                                        <input type="radio" id="both" name="brochure_type[]" value="post">
                                        <label for="both">Both</label>
                                    </span>
                                </div>
                                <span>
                                    <label for="title" class="sr-only">Title</label>
                                        <select id="title" name="details[]" role="listbox" class="block w-full p-4 bg-brand-darkgrey text-brand-white border border-brand-white">
                                            <option value="none-selected" role="option">Please Select</option>
                                            <option value="Mr" role="option">Mr</option>
                                            <option value="Mrs" role="option">Mrs</option>
                                            <option value="Ms" role="option">Ms</option>
                                            <option value="Miss" role="option">Miss</option>
                                            <option value="Doctor" role="option">Doctor</option>
                                            <option value="Professor" role="option">Professor</option>
                                            <option value="Reverend" role="option">Reverend</option>
                                            <option value="Other" role="option">Other</option>
                                        </select>
                                    </span>
                                <span>
                                    <label for="first-name" class="sr-only">First Name</label>
                                    <input type="text" id="first-name" name="details[]" role="textbox" placeholder="First Name *" required class="block w-full p-4 bg-brand-darkgrey text-brand-white border border-brand-white placeholder-brand-white">
                                </span>
                                <span>
                                    <label for="last-name" class="sr-only">Last Name</label>
                                    <input type="text" id="last-name" name="details[]" role="textbox" placeholder="Last Name *" required class="block w-full p-4 bg-brand-darkgrey text-brand-white border border-brand-white placeholder-brand-white">
                                </span>
                                <span>
                                    <label for="contact-number" class="sr-only">Contact Number</label>
                                    <input type="text" id="contact-number" name="details[]" role="textbox" placeholder="Contact Number" class="block w-full p-4 bg-brand-darkgrey text-brand-white border border-brand-white placeholder-brand-white">
                                </span>
                                <span>
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="text" id="email" name="details[]" role="textbox" placeholder="Email *" required class="block w-full p-4 bg-brand-darkgrey text-brand-white border border-brand-white placeholder-brand-white">
                                </span>
                                <span class="hidden post-only">
                                    <label for="address" class="sr-only">Address</label>
                                    <input type="text" id="address" name="details[]" role="textbox" placeholder="address *" required class="block w-full p-4 bg-brand-darkgrey text-brand-white border border-brand-white placeholder-brand-white">
                                </span>
                                <span class="hidden post-only">
                                    <label for="address-2" class="sr-only">Address 2</label>
                                    <input type="text" id="address-2" name="details[]" role="textbox" placeholder="address 2 *" required class="block w-full p-4 bg-brand-darkgrey text-brand-white border border-brand-white placeholder-brand-white">
                                </span>
                                <span class="hidden post-only">
                                    <label for="city" class="sr-only">City</label>
                                    <input type="text" id="city" name="details[]" role="textbox" placeholder="City *" required class="block w-full p-4 bg-brand-darkgrey text-brand-white border border-brand-white placeholder-brand-white">
                                </span>
                                <span class="hidden post-only">
                                    <label for="county" class="sr-only">County</label>
                                    <input type="text" id="county" name="details[]" role="textbox" placeholder="County *" required class="block w-full p-4 bg-brand-darkgrey text-brand-white border border-brand-white placeholder-brand-white">
                                </span>
                                <span class="hidden post-only">
                                    <label for="postcode" class="sr-only">Postcode</label>
                                    <input type="text" id="postcode" name="details[]" role="textbox" placeholder="Postcode *" required class="block w-full p-4 bg-brand-darkgrey text-brand-white border border-brand-white placeholder-brand-white">
                                </span>
                                <span>
                                    <input type="checkbox" id="offers" name="offers" value="offers">
                                    <label for="offers">Yes, I would like to receive exclusive offers, including useful tips on how to make best decision on my home improvement.</label>
                                </span>
                                <span>
                                    <input type="submit" value="Submit" class="py-4 px-6 bg-brand-orange uppercase cursor-pointer inline">
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
