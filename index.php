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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php } ?>