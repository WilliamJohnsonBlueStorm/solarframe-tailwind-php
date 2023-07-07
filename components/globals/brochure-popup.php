<?php include ('data/brochure-options.php') ?>

<?php include ('data/form-inputs.php') ?>

<?php

    //Creating an $error variable and assigning it to an array
    //Creating an $invalid & $success variable and assigning them to false
    $errors = [];
    $invalid = false;
    $success = false;

    //Checking to see if the form as been sent
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // if the form has been submitted, post the values that have been entered if not, post empty values
        $delivery =  isset($_POST['delivery']) ? $_POST['delivery'] : '';
        $firstName = isset($_POST['first_name']) ? $_POST['first_name'] : '';
        $lastName = isset($_POST['last_name']) ? $_POST['last_name'] : '';
        $contactNumber = isset($_POST['contact_number']) ? $_POST['contact_number'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $address1 =  isset($_POST['address1']) ? $_POST['address1'] : '';
        $address2 = isset($_POST['address2']) ? $_POST['address2'] : '';
        $city = isset($_POST['city']) ? $_POST['city'] : '';
        $county = isset($_POST['county']) ? $_POST['county'] : '';
        $postcode = isset($_POST['postcode']) ? $_POST['postcode'] : '';
        $brochure = isset($_POST['brochure']) ? $_POST['brochure'] : '';
        $offers = isset($_POST['offers']) ? $_POST['offers'] : '';

        if($delivery == 'Download') {
            if ($firstName == '') {
                $errors[] = 'First name is required';
                $invalid = true;
            }

            if ($lastName == '') {
                $errors[] = 'Last name is required';
                $invalid = true;
            }

            if ($email == '') {
                $errors[] = 'Email is required';
                $invalid = true;
            }

        } else {

            if ($firstName == '') {
                $errors[] = 'First name is required';
                $invalid = true;
            }

            if ($lastName == '') {
                $errors[] = 'Last name is required';
                $invalid = true;
            }

            if ($email == '') {
                $errors[] = 'Email is required';
                $invalid = true;
            }

            if ($address1 == '') {
                $errors[] = 'Address line 1 is required';
                $invalid = true;
            }

            if ($address2 == '') {
                $errors[] = 'Address line 2 is required';
                $invalid = true;
            }

            if ($city == '') {
                $errors[] = 'City is required';
                $invalid = true;
            }

            if ($county == '') {
                $errors[] = 'County name is required';
                $invalid = true;
            }

            if ($postcode == '') {
                $errors[] = 'Postcode is required';
                $invalid = true;
            }
        }

        if(!$invalid) {
            $success = true;

            $brochureData = '';

            foreach ($brochure as $bro)
            {
                $brochureData .= $bro.', ';
            }

            $brochureData = substr($brochureData, '0', '-1');

            // Send admin email
            $msg = "Brochure: ".$brochureData."\n";

            $msg .= "Delivery: ".$delivery."\n";
            $msg .= "First Name: ".$firstName."\n";
            $msg .= "Last Name: ".$lastName."\n";
            $msg .= "Contact Number: ".$contactNumber."\n";
            $msg .= "Email Address: ".$email."\n";
            $msg .= "Address Line 1: ".$address1."\n";
            $msg .= "Address Line 2: ".$address2."\n";
            $msg .= "City: ".$city."\n";
            $msg .= "County: ".$county."\n";
            $msg .= "Postcode: ".$postcode."\n";
            $msg .= "Further Contact: ".$offers."\n";
            $msg .= "Brochure Download: ".$brochureDownload."\n";
            $msg .= "Brochure Post: ".$brochurePost."\n";
            $msg .= "Brochure Both: ".$brochureBoth."\n";

            mail("william.johnson@bluestormdesign.co.uk","Website contact form", $msg);

//        // database connection settings
//        $servername = "localhost";
//        $username = "root";
//        $password = "";
//        $database = 'boo';
//
//        $conn = new mysqli($servername, $username, $password, $database);
//
//        if ($conn->connect_error) {
//            die("Connection failed: " . $conn->connect_error);
//        }
//
//        $sql = "INSERT INTO email_submissions (brochure, post_yes, name, email, address1, address2, postcode, county, contact) VALUES ('{$brochureData}', '{$post}', '{$name}', '{$email}', '{$address1}', '{$address2}', '{$postcode}', '{$county}', '{$contactData}')";
//
//        if ($conn->query($sql) === TRUE) {
//
//        } else {
//            echo "Error: " . $sql . "<br>" . $conn->error;
//        }
//
//        $conn->close();

        //reset field names to empty
        $name = '';
        $email = '';
        $address1 = '';
        $address2 = '';
        $postcode = '';
        $county = '';
    }
}

?>

<section id="brochure-popup" class="hidden h-full w-full z-[998] absolute inset-0">
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
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="request-brochure-form" class="h-full overflow-auto overflow-x-hidden">

                    <?php if($invalid) { ?>
                        <div class="form-errors mb-8">
                            <ul>
                                <?php foreach ($errors as $error) { ?>
                                    <li class="bg-brand-red text-brand-white p-2 text-center rounded mb-4"><?php echo $error ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>

                    <?php if($success) { ?>
                        <div class="form-success w-full bg-brand-blue p-2 text-center text-brand-white rounded mb-8">
                            <p>Success! We will be in touch shortly.</p>
                        </div>
                    <?php } ?>

                    <div class="grid grid-cols-12 gap-4 md:gap-8">
                        <div class="col-span-12 lg:col-span-8">
                            <p class="text-brand-white block mb-4">Step 1 - Please select the brochure(s) you would like:</p>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                            <p class="text-brand-white">Step 2 - Your details</p>
                        </div>
                        <div class="col-span-12 lg:col-span-8">
                            <div class="grid grid-cols-2  sm:grid-cols-3 lg:grid-cols-4 gap-8">
                                <?php foreach ($brochureOptions as $brochureOption) {?>
                                    <div class="inline-block">
                                        <input type="checkbox" id="<?php echo $brochureOption['id']; ?>" name="brochure[]" value="<?php echo $brochureOption['id']; ?>" class="hidden peer">
                                        <label for="<?php echo $brochureOption['id']; ?>" class="bg-brand-white inline-block text-center opacity-50 peer-checked:opacity-100 transition-all duration-300 w-full h-full cursor-pointer">
                                            <span>
                                                <img src="<?php echo $brochureOption['img']; ?>" alt="<?php echo $brochureOption['id']; ?>" class="w-full h-auto">
                                                <span class="inline-block p-2"><?php echo $brochureOption['title']; ?></span>
                                            </span>
                                        </label>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                            <div class="text-brand-white flex flex-col gap-4">
                                <div>
                                    <span class="mr-4">
                                        <input type="radio" id="download" name="delivery" value="Download" checked>
                                        <label for="download">Download</label>
                                    </span>
                                    <span class="mr-4">
                                        <input type="radio" id="post" name="delivery" value="Post">
                                        <label for="post">By Post</label>
                                    </span>
                                    <span class="mr-4">
                                        <input type="radio" id="both" name="delivery" value="Both">
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
                                <?php foreach ($formInputs as $formInput) {?>
                                    <span class="<?php if (isset($formInput['hidden'])) {?> <?php echo $formInput['hidden']; ?> <?php } ?>">
                                        <label for="<?php echo $formInput['id']; ?>" class="sr-only"><?php echo $formInput['label']; ?></label>
                                        <input type="text" id="<?php echo $formInput['id']; ?>" name="<?php echo $formInput['name']; ?>" role="<?php echo $formInput['role']; ?>" placeholder="<?php echo $formInput['placeholder']; ?>" <?php if (isset($formInput['required'])) {?> <?php echo $formInput['required']; ?> <?php } ?> class=" block w-full p-4 bg-brand-darkgrey text-brand-white border border-brand-white placeholder-brand-white">
                                    </span>
                                <?php } ?>
                                <span>
                                    <input type="checkbox" id="offers" name="offers" value="Yes Please">
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
