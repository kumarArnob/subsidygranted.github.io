
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