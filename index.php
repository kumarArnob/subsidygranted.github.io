<?php 

if(!empty($_POST)){
    // echo '<pre>';
    // print_r($_POST);
    // die();
    //PING Step

    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $email = $_POST['email'];
    $zipcode = $_POST['zipcode'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $website = $_POST['website'];
    $universal_leadid = $_POST['universal_leadid'];
    $xxTrustedFormToken = $_POST['xxTrustedFormToken'];
    $xxTrustedFormCertUrl = $_POST['xxTrustedFormCertUrl'];
    $xxTrustedFormPingUrl = $_POST['xxTrustedFormPingUrl'];


    $url = "https://skilltest.live/leadportal/api/insert/";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
    "Accept: application/json",
    "Content-Type: application/json",
    'X-API-Key:  64bc432a10f11c73bc43f306dc975324',
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    // $data = <<<DATA
    // {
    //     "first_name": "$First_Name",
    //     "last_name": "$Last_Name",
    //     "email": "$email",
    //     "phone": "$phone",
    //     "address": "$address",
    //     "city": "$city",
    //     "state": "$state",
    //     "pincode": "$zipcode",
    //     "website": "$website",
    //     "authentication_id": "",
    //     "trackdrive_number": "",
    //     "traffic_source_id": "",
    //     "vanity_url": "",
    //     "universal_leadid": "$universal_leadid",
    //     "xxTrustedFormToken": "$xxTrustedFormToken",
    //     "xxTrustedFormCertUrl": "$xxTrustedFormCertUrl",
    //     "xxTrustedFormPingUrl": "$xxTrustedFormPingUrl",
    //     "status": "active",
    // }
    // DATA;

    $data = array(
        'first_name' => $First_Name,
        'last_name' => $Last_Name ,
        'email' => $email ,
        'phone' => $phone ,
        'address' => $address ,
        'city' => $city ,
        'state' => $state ,
        'pincode' => $zipcode ,
        'website' => $website ,
        'authentication_id' => '' ,
        'trackdrive_number' => '' ,
        'traffic_source_id' => '' ,
        'vanity_url' => '' ,
        'universal_leadid' => $universal_leadid ,
        'xxTrustedFormToken' => $xxTrustedFormToken ,
        'xxTrustedFormCertUrl' => $xxTrustedFormCertUrl ,
        'xxTrustedFormPingUrl' => $xxTrustedFormPingUrl,
        'status' => 'active'
    );

    // print_r($data);
    // die();
    $data = json_encode($data);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    $resp = curl_exec($curl);
    curl_close($curl);
    // echo $resp;
    $res = json_decode($resp, true);
    // echo "<pre>";
    // print_R($res);
    // // echo $res['status'];
    // die();
    // array_push($result,$res['result'],$res['price'],$res['offer_id'],$res['duplicate']);
    
    if($res['status'] == 'Success'){
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" type="new-logo.png">

    <title></title>
</head>

<body>

    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-dark ">
            <span class="navbar-brand h1"><a href="http://localhost/couponwebsite">
                    <img src="new-logo.png" name="logo-img" alt></span>
            </a>
            </span>
        </nav>
        <div class="row hero">
            <div class="col-12">
                <h1 class="mt-4 text-center" style="color:red">Exclusive
                    Offer: Win $1000!</h1>
            </div>
            <div class="col-12 col-lg-6 mx-auto">
                <div class="col-12 col-lg-6 mx-auto">
                    
                    <div class="card card-body formSubmit">
                    <svg class="svgImg mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                    </svg>
                        <h1 class="text-center text-success">Thank you!!
                        </h1>
                        <span class="text-center text-success">Your request has been submitted succesfully.</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="row">
                    <p class="offers text-black">
                        You are only a click away from availing of your $2000 subsidy.
                        <br>Click to get enrolled to avail now!
                        <br>You may be able to get a federal loan for education,<br> a small business, and more.

                    </p>
                </div>
                <img class="image-responsive header-img" src="imghead.png" alt="error">
            </div>
        </div>

        <!-- <div class="row mid">
                <div class="col-12 col-lg-5 text-white">
                    Your Winning Journey Starts Here! 🌟 We believe in real
                    winners, and that could be YOU!

                    Why Trust Us?
                    🔒 Secure Process: Your information is safe with us.
                    🏆 Proven Winners: Join the league of successful entrants.

                </div>
            </div> -->

        <div class="row footer p-5">
            <div class="col-12 col-lg-6">
                <img src="last_footer.jpg" class="image-responsive footerImg" alt="error">
            </div>
            <div class="col-12 col-lg-6 text-white">
                <h3 class="text-white textSize mt-1 ">
                    Our Mission
                </h3>
                <span>
                    Provide a common website for federal agencies to post discretionary funding opportunities and
                    for grantees to find and apply to them.

                </span>


                <h3 class="text-white textSize mt-4">Benefits of Using SubsidyGranted.com</h3>
                <span class="text-white">
                    Using the SubsidyGranted system makes it faster, easier and more cost effective for grant
                    applicants
                    <br>to electronically interact with federal grant-making agencies. It also provides the following
                    key benefits, among many others, to the grant community.


                </span>

                <h3 class="text-white textSize mt-4">
                    Helping the grant community learn more about available opportunities.</h3>

                <span>
                    Centralizing more than 1,000 different grant programs across federal grant-making agencies
                    awarding more than $500 billion annually.

                    <br>Standardizing grant information, application packages, and processes for finding and applying
                    for federal grants.


                </span>
            </div>
        </div>
        <div class="row p-2">
            <p class="col-12 text-center">Copyright © 2024. subsidygranted.com . All Rights Reserved.</p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


    <script>
    window.addEventListener('load', () => {
        jQuery('input[name="website"]').val(window.location.hostname);
    })
    </script>

    <script id="LeadiDscript" type="text/javascript">
    (function() {
        var s = document.createElement('script');
        s.id = 'LeadiDscript_campaign';
        s.type = 'text/javascript';
        s.async = true;
        s.src =
            '//create.lidstatic.com/campaign/34bb710d-e953-f726-b50f-731d34435faa.js?snippet_version=2';
        var LeadiDscript = document.getElementById('LeadiDscript');
        LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
    })();
    </script>
    <noscript><img
            src='//create.leadid.com/noscript.gif?lac=2EFCD9B5-75F9-B1F5-CAD3-4189B43EE8C1&lck=34bb710d-e953-f726-b50f-731d34435faa&snippet_version=2' />
    </noscript>
    <!-- TrustedForm -->
    <script type="text/javascript">
    (function() {
        var tf = document.createElement('script');
        tf.type = 'text/javascript';
        tf.async = true;
        tf.src = ("https:" == document.location.protocol ? 'https' : 'http') +
            "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&l=" +
            new Date().getTime() + Math.random();
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(tf, s);
    })();
    </script>
    <noscript>
        <img src="https://api.trustedform.com/ns.gif" />
    </noscript>
    <!-- End TrustedForm -->
    <script>
    window.addEventListener('load', function() {
        if (window.location.search.length > 0) {
            var params = new URLSearchParams(window.location.search);
            if (params.get('first_name')) {
                document.querySelector('input[name="First Name"]').value = params.get('first_name');
            }
            if (params.get('last_name')) {
                document.querySelector('input[name="Last Name"]').value = params.get('last_name');
            }
            if (params.get('email')) {
                document.querySelector('input[name="email"]').value = params.get('email');
            }
            if (params.get('phone')) {
                document.querySelector('input[name="phone"]').value = params.get('phone');
            }
            if (params.get('address')) {
                document.querySelector('input[name="address"]').value = params.get('address');
            }
            if (params.get('city')) {
                document.querySelector('input[name="city"]').value = params.get('city');
            }
            if (params.get('state')) {
                document.querySelector('input[name="state"]').value = params.get('state');
            }
            if (params.get('pincode')) {
                document.querySelector('input[name="zipcode"]').value = params.get('pincode');
            }
        }
    })
    </script>
</body>

</html>
<?php
    }
else {
    print_r($res);
    die();
}

?>

<?php
    
}
else{
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" type="new-logo.png">
    <title></title>
</head>

<body>

    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-white border-bottom" style="height:56px">
            <span class="navbar-brand h1">
                <a href="http://localhost/couponwebsite">
                    <img src="new-logo.png" name="logo-img" alt></span>
            </a>

        </nav>
        <div class="row hero">
            <div class="col-12">
                <h1 class="mt-4 text-center" style="color:red">Exclusive
                    Offer: Win $1000!</h1>
            </div>
            <div class="col-12 col-lg-6 mx-auto">
                <form class="form m-2 mx-auto px-4" name="contact-form" action="./index.php" method="post">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-group p-2 col-12 col-lg-6">
                                <label class="text-white" for="zipcode">First Name</label>
                                <input type="text" class="form-control" id="First Name" name="First Name" required />
                            </div>
                            <div class="form-group p-2 col-12 col-lg-6">
                                <label class="text-white" for="Last Name">Last Name</label>
                                <input type="text" class="form-control" id="Last Name" name="Last Name" required />
                            </div>
                        </div>
                        <!-- <div class="form-group"></div> -->
                        <div class="form-row">
                            <div class="form-group p-2  col-12 col-lg-6">
                                <label class="text-white" for="email">Email</label>
                                <input type="email" class="form-control " id="email" name="email" required />
                            </div>
                            <div class="form-group p-2  col-12 col-lg-6">
                                <label class="text-white" for="phone">Phone</label>
                                <input type="number" class="form-control" id="phone" name="phone" required />
                            </div>
                        </div>
                        <div class="form-group p-2">
                            <label class="text-white" for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required />
                        </div>
                        <div class="duofields" style="display: flex">
                            <div class="form-group p-2">
                                <label class="text-white" for="zipcode">Zipcode</label>
                                <input type="text" class="form-control" id="zipcode" name="zipcode" required />
                            </div>
                            <div class="form-group p-2 ">
                                <label class="text-white" for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" required />
                            </div>
                            <div class="form-group p-2">
                                <label class="text-white" for="state">State</label>
                                <input type="text" class="form-control" id="state" name="state" required />
                            </div>
                        </div>
                        <input required type="hidden" class id="Inputtrackdrive_number" name="trackdrive_number">
                        <input required type="hidden" class id="InputTraffidSourceID" name="traffic_source_id"
                            placeholder="Enter Traffic Source ID">
                        <input type="hidden" class id="InputVanityUrl" name="vanity_url">
                        <input type="hidden" name="website" value>
                        <input id="leadid_token" name="universal_leadid" type="hidden" value />
                        <input type="hidden" name="xxTrustedFormCertUrl" id="xxTrustedFormCertUrl" value>
                        <input type="hidden" name="xxTrustedFormPingUrl" id="xxTrustedFormPingUrl" value>

                        <div class="form-check ml-2 pl-0">
                            <!-- Button trigger modal -->
                            <a type="button" class="change-color" href="" data-toggle="modal"
                                data-target="#exampleModal">
                                Terms & Condition
                            </a>



                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Terms & Condition</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <Span>
                                                By clicking "get Enrolled", I agree to the Privacy Policy and Terms. I
                                                consent to have subsidygranted & their marketing partners contact me
                                                with marketing emails, calls or texts at the email & phone number I
                                                provided regardless of my status on State or Federal Do Not Call lists,
                                                including using an autodialer or artificial/pre-recorded voice (Msg &
                                                data rates apply). Reply STOP to 85516 to cancel and HELP for more info.
                                                Consent isn't required to use the service.
                                            </Span>
                                        </div>
                                        <!-- <div class="modal-footer"> -->
                                        <!-- <button type="button" class="btn btn-secondar btn-danger"
                                                data-dismiss="modal">Decline</button>
                                            <button type="button" class="btn btn-primary btn-success">Accept</button> -->
                                        <!-- <div class="tab_foot flex_align_justify my-2 mx-2">
                                            <button class="decline" onClick="declineTerms()">
                                                Decline
                                            </button>
                                            <button class="agree" onClick="acceptTerms()">
                                                Agree
                                            </button>

                                            <script>
                                            window.addEventListener("load", () => {
                                                let acceptedTerms = FALSE;

                                                const acceptedTerms = () => {
                                                    acceptedTerms = TRUE;
                                                    
                                                }

                                                const declineTerms = () => {
                                                    acceptedTerms = FALSE;
                                                }

                                                console.log(acceptedTerms);

                                            })
                                            </script>


                                        </div> -->
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn m-2 btn-danger">
                                Get Enrolled
                            </button>

                        </div>

                        <div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-6">
                <div class="row">
                    <p class="offers text-black">
                        You are only a click away from availing of your $2000 subsidy.
                        <br>Click to get enrolled to avail now!
                        <br>You may be able to get a federal loan for education,<br> a small business, and more.

                    </p>
                </div>
                <img class="image-responsive header-img" src="imghead.png" alt="error">
            </div>
        </div>

        <!-- <div class="row mid">
                <div class="col-12 col-lg-5 text-white">
                    Your Winning Journey Starts Here! 🌟 We believe in real
                    winners, and that could be YOU!

                    Why Trust Us?
                    🔒 Secure Process: Your information is safe with us.
                    🏆 Proven Winners: Join the league of successful entrants.

                </div>
            </div> -->

        <div class="row footer p-5">
            <div class="col-12 col-lg-6">
                <img src="last_footer.jpg" class="image-responsive footerImg" alt="error">
            </div>
            <div class="col-12 col-lg-6 text-white">
                <h3 class="text-white textSize mt-1 ">
                    Our Mission
                </h3>
                <span>
                    Provide a common website for federal agencies to post discretionary funding opportunities and
                    for grantees to find and apply to them.

                </span>


                <h3 class="text-white textSize mt-4">Benefits of Using SubsidyGranted.com</h3>
                <span class="text-white">
                    Using the SubsidyGranted system makes it faster, easier and more cost effective for grant
                    applicants
                    <br>to electronically interact with federal grant-making agencies. It also provides the following
                    key benefits, among many others, to the grant community.


                </span>

                <h3 class="text-white textSize mt-4">
                    Helping the grant community learn more about available opportunities.</h3>

                <span>
                    Centralizing more than 1,000 different grant programs across federal grant-making agencies
                    awarding more than $500 billion annually.

                    <br>Standardizing grant information, application packages, and processes for finding and applying
                    for federal grants.


                </span>
            </div>
        </div>
        <div class="row p-2">
            <p class="col-12 text-center">Copyright © 2024. subsidygranted.com . All Rights Reserved.</p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


    <script>
    window.addEventListener('load', () => {
        jQuery('input[name="website"]').val(window.location.hostname);
    })
    </script>

    <script id="LeadiDscript" type="text/javascript">
    (function() {
        var s = document.createElement('script');
        s.id = 'LeadiDscript_campaign';
        s.type = 'text/javascript';
        s.async = true;
        s.src =
            '//create.lidstatic.com/campaign/34bb710d-e953-f726-b50f-731d34435faa.js?snippet_version=2';
        var LeadiDscript = document.getElementById('LeadiDscript');
        LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
    })();
    </script>
    <noscript><img
            src='//create.leadid.com/noscript.gif?lac=2EFCD9B5-75F9-B1F5-CAD3-4189B43EE8C1&lck=34bb710d-e953-f726-b50f-731d34435faa&snippet_version=2' />
    </noscript>
    <!-- TrustedForm -->
    <script type="text/javascript">
    (function() {
        var tf = document.createElement('script');
        tf.type = 'text/javascript';
        tf.async = true;
        tf.src = ("https:" == document.location.protocol ? 'https' : 'http') +
            "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&l=" +
            new Date().getTime() + Math.random();
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(tf, s);
    })();
    </script>
    <noscript>
        <img src="https://api.trustedform.com/ns.gif" />
    </noscript>
    <!-- End TrustedForm -->
    <script>
    window.addEventListener('load', function() {
        if (window.location.search.length > 0) {
            var params = new URLSearchParams(window.location.search);
            if (params.get('first_name')) {
                document.querySelector('input[name="First Name"]').value = params.get('first_name');
            }
            if (params.get('last_name')) {
                document.querySelector('input[name="Last Name"]').value = params.get('last_name');
            }
            if (params.get('email')) {
                document.querySelector('input[name="email"]').value = params.get('email');
            }
            if (params.get('phone')) {
                document.querySelector('input[name="phone"]').value = params.get('phone');
            }
            if (params.get('address')) {
                document.querySelector('input[name="address"]').value = params.get('address');
            }
            if (params.get('city')) {
                document.querySelector('input[name="city"]').value = params.get('city');
            }
            if (params.get('state')) {
                document.querySelector('input[name="state"]').value = params.get('state');
            }
            if (params.get('pincode')) {
                document.querySelector('input[name="zipcode"]').value = params.get('pincode');
            }
        }
    })
    </script>
</body>

</html>
<?php } ?>