<?php
$target_dir = "competition/";
$reference_id = uniqid();
$ext = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
$target_file = $target_dir . $reference_id . "." . $ext;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
// Check if file already exists
if (!$_FILES["fileToUpload"]["name"]) {
    $message = "No file chosen.\n";
}
else if (file_exists($target_file)) {
    $message = "Sorry, file already exists.\n";
}
// Check file size
else if ($_FILES["fileToUpload"]["size"] > 500000) {
    $message = "Sorry, your file is too large.\n";
}
// Allow certain file formats
else if($imageFileType == "exe" || $imageFileType == "php" || $imageFileType == "html") {
    $message = "Sorry, EXE, PHP, HTML files are not allowed. Please provide a valid image.\n";
}
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $message = "File successfully uploaded. Your reference number is " . $reference_id . " please save it!";
    } else {
        $message = "Sorry, there was an error uploading your file.";
    }
}
echo '<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>

    <title>BigBank</title>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>

</head>
<body>
<div id="container">
<div id="header_container">
        <div id="page_header">

            <div id="header_company">
                <h1>BigBank</h1>
            </div>

            <div id="header_menu">

                <ul>
                    <li><a href="/"><span>Home</span></a></li>
                    <li><a href="/"><span>About Us</span></a></li>
                    <li><a href="/"><span>Products</span></a></li>
                    <li><a href="/"><span>Services</span></a></li>
                    <li><a href="/"><span>Contacts</span></a></li>
                </ul>

            </div>

            <div id="header_welcome">
                <h3>Welcome</h3>

                <div id="welcome_text">

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse imperdiet,
                        odio ut maximus efficitur, sapien turpis varius turpis, ac sollicitudin felis
                        leo finibus ante. Sed sagittis, sapien et lacinia consequat, sapien dolor
                        elementum leo, sed laoreet velit quam sit amet risus. Pellentesque vitae dapibus diam.</p>

                    <p>Praesent et dictum lorem. Integer velit libero, dapibus vitae tellus et,
                        venenatis dignissim erat. Pellentesque molestie justo tincidunt dui vulputate,
                        non sagittis mi euismod.</p>
                </div>

            </div>

        </div>
    </div>

    <div id="left_sidebar">

        <!-- Start of User Login -->

        <div class="box_container">
            <div id="userlogin">

                <h2>User Login</h2>

                <form action="/">

                    <div class="form_field">
                        <strong>Username</strong>
                        <input type="text"/>
                    </div>

                    <div class="clearthis">&nbsp;</div>

                    <div class="form_field">
                        <strong>Password</strong>
                        <input type="password"/>
                    </div>

                    <div class="clearthis">&nbsp;</div>

                    <div class="form_field">
                        <input type="image" src="images/userlogin_search.gif" class="button"/>
                    </div>

                </form>

                <div id="link-password">
                    <a href="/">Forgot Password</a>
                </div>

            </div>
        </div>

        <!-- End of User Login -->


        <!-- Start of Latest News -->

        <div class="box_container">
            <div id="news">

                <h2>Latest News</h2>

                <h4>
                    Nov 09, 2005
                </h4>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Suspendisse imperdiet, odio ut maximus efficitur, sapien turpis varius turpis,
                    ac sollicitudin felis leo finibus ante.
                </p>

                <h4>
                    Nov 07, 2006
                </h4>

                <p>Sed sagittis, sapien et lacinia consequat,
                    sapien dolor elementum leo, sed laoreet velit quam sit amet risus. Pellentesque
                    vitae dapibus diam. Praesent et dictum lorem.</p>

                <div class="link-more">
                    <a href="/">Read More</a>
                </div>

                <div class="clearthis">&nbsp;</div>
            </div>
        </div>

        <!-- End of Latest News -->


    </div>

    <div id="maincontent_container">
        <div id="maincontent">
        <div id="maincontent_top">

                <!-- Start of How We Started -->

                <div id="started_container">
                    <div id="started">

                        <h2>How We Started</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Suspendisse imperdiet, odio ut maximus efficitur, sapien turpis varius turpis,
                            ac sollicitudin felis leo finibus ante. Sed sagittis, sapien et lacinia consequat,
                            sapien dolor elementum leo, sed laoreet velit quam sit amet risus. Pellentesque
                            vitae dapibus diam. Praesent et dictum lorem. Integer velit libero, dapibus vitae tellus et,
                            venenatis dignissim erat. Pellentesque molestie justo tincidunt dui vulputate,
                            non sagittis mi euismod. Suspendisse eget fermentum mi. Vivamus facilisis rhoncus nibh,
                            a viverra dolor rutrum porta. Ut sodales ultricies eros quis dapibus.</p>

                    </div>
                </div>

                <!-- End of How We Started -->


                <div id="right_container">

                    <!-- Start of We Also Do Repairing -->

                    <div id="repairing">

                        <h2>We also do insurances!</h2>

                        <p>Like any bank we also do insurances.
                            We do believe it is a good thing for banks to offer insurances.
                            What are you waiting for? Apply now!</p>


                    </div>

                    <div class="clearthis">&nbsp;</div>

                    <!-- End of We Also Do Repairing -->


                    <!-- Start of Get Special Offer -->

                    <div id="offer_container">
                        <div id="offer">

                            <h2>Get <strong>Special</strong> Offer</h2>

                            <p>
                                As a Christmas celebration, you can receive up to 60 BigBank Club Points when signing a
                                new insurance contract.
                            </p>

                            <div class="link-go">
                                <a href="/"><span>Go</span></a>
                            </div>

                        </div>
                    </div>

                    <div class="clearthis">&nbsp;</div>

                    <!-- End of Get Special Offer -->

                </div>

                <div class="clearthis">&nbsp;</div>

            </div>

            <div id="featured_container">
                <div id="featured">
                    <h2>Annual Christmas Media Competition!</h2>

                    <p>Welcome back to the annual christmas media competition!
                        Create and upload your contribution to the competition for a chance of winning 1,000 BigBank
                        Club Points!
                        The contribution can be an image, a short clip (less than 30 seconds) or why not a custom
                        gif?</p>

                    <p>This year the theme is "Space - The Final Frontier". Deadline for submissions is January 1st, 2017
                        23:59 CET.</p>

                    <p>The winners will be announced here shortly after the deadline for submissions has ended. </p>

                    <ol> Rewards:
                        <li>1,000 BigBank Club Points</li>
                        <li>250 BigBank Club Points</li>
                        <li>100 BigBank Club Points</li>
                    </ol>
                    <br/>
                     <p>' . $message . ' <a href="/">Back to form</a> </p>
                </div>
            </div>
        </div>
    </div>
    <div id="page_footer">&copy;2016 BigBank</div>
</div>
</body>
</html>';