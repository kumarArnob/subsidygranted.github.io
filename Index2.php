<form class="form" name="contact-form" action="./index.php" method="post">
                                            <div id="totalgroup">
                                                <div class="duofields" style="display: flex">
                                                    <div class="form-group duo">
                                                        <label for="zipcode">First Name</label>
                                                        <input type="text" id="First Name" name="First Name" required />
                                                    </div>
                                                    <div class="form-group duo">
                                                        <label for="Last Name">Last Name</label>
                                                        <input type="text" id="Last Name" name="Last Name" required />
                                                    </div>
                                                </div>
                                                <div class="form-group duo"></div>
                                                <div class="form-group">
                                                    <label for="email">Email Address</label>
                                                    <input type="email" id="email" name="email" required />
                                                </div>
                                                <div class="duofields" style="display: flex">
                                                    <div class="form-group duo">
                                                        <label for="zipcode">Zipcode</label>
                                                        <input type="text" id="zipcode" name="zipcode" required />
                                                    </div>
                                                    <div class="form-group duo">
                                                        <label for="phone">Phone</label>
                                                        <input type="number" id="phone" name="phone" required />
                                                    </div>
                                                </div>
                                                <div class="form-group address">
                                                    <label for="address">Address</label>
                                                    <input type="text" id="address" name="address" required />
                                                </div>
                                                <div class="duofields" style="display: flex">
                                                    <div class="form-group duo">
                                                        <label for="city">City</label>
                                                        <input type="text" id="city" name="city" required />
                                                    </div>
                                                    <div class="form-group duo">
                                                        <label for="state">State</label>
                                                        <input type="text" id="state" name="state" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Inputtrackdrive_number"></label>
                                                    <input required type="hidden" class="form-control"
                                                        id="Inputtrackdrive_number" name="trackdrive_number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="InputTraffidSourceID"></label>
                                                    <input required type="hidden" class="form-control"
                                                        id="InputTraffidSourceID" name="traffic_source_id"
                                                        placeholder="Enter Traffic Source ID">
                                                </div>
                                                <div class="form-group">
                                                    <label for="InputVanityUrl"></label>
                                                    <input type="hidden" class="form-control" id="InputVanityUrl"
                                                        name="vanity_url">
                                                    <input type="hidden" name="website" value="">
                                                </div>
                                                <input id="leadid_token" name="universal_leadid" type="hidden"
                                                    value="" />
                                                <input type="hidden" name="xxTrustedFormCertUrl"
                                                    id="xxTrustedFormCertUrl" value="">
                                                <input type="hidden" name="xxTrustedFormPingUrl"
                                                    id="xxTrustedFormPingUrl" value="">
                                                <div class="button-container">
                                                    <button type="submit" class="submit-button">
                                                        Get Coupon
                                                    </button>
                                                </div>
                                                <div>
                                                    <input type="checkbox" id="check" name="" value="consent">
                                                    <span>By clicking continue, I agree to the Privacy Policy and Terms. I consent to have subsidygranted & their marketing partners contact me with marketing emails, calls or texts at the email & phone number I provided regardless of my status on State or Federal Do Not Call lists, including using an autodialer or artificial/pre-recorded voice (Msg & data rates apply). Reply STOP to 85516 to cancel and HELP for more info. Consent isn't required to use the service.

                                                    </span>
                                                
                                    
                                                </div>
                                            </div>
</form>
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
  window.addEventListener('load',function(){
    if(window.location.search.length>0){
      var params = new URLSearchParams(window.location.search);
      if(params.get('first_name')){
        document.querySelector('input[name="First Name"]').value = params.get('first_name');
      }
      if(params.get('last_name')){
        document.querySelector('input[name="Last Name"]').value = params.get('last_name');
      }
      if(params.get('email')){
        document.querySelector('input[name="email"]').value = params.get('email');
      }
      if(params.get('phone')){
        document.querySelector('input[name="phone"]').value = params.get('phone');
      }
      if(params.get('address')){
        document.querySelector('input[name="address"]').value = params.get('address');
      }
      if(params.get('city')){
        document.querySelector('input[name="city"]').value = params.get('city');
      }
      if(params.get('state')){
        document.querySelector('input[name="state"]').value = params.get('state');
      }
      if(params.get('pincode')){
        document.querySelector('input[name="zipcode"]').value = params.get('pincode');
      }
    }
  })
</script>