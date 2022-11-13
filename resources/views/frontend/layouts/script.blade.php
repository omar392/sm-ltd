
    @jquery
    @toastr_js
    @toastr_render

        <!-- Jquery Min JS -->
        <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Meanmenu Min JS -->
		<script src="{{ asset('frontend/assets/js/meanmenu.min.js') }}"></script>
        <!-- Wow Min JS -->
        <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
        <!-- Owl Carousel Min JS -->
		<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <!-- Nice Select Min JS -->
		<script src="{{ asset('frontend/assets/js/nice-select.min.js') }}"></script>
        <!-- Magnific Popup Min JS -->
		<script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>
		<!-- Jarallax Min JS -->
		<script src="{{ asset('frontend/assets/js/jarallax.min.js') }}"></script>
		<!-- Appear Min JS -->
        <script src="{{ asset('frontend/assets/js/appear.min.js') }}"></script>
		<!-- Odometer Min JS -->
		<script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>
		<!-- Smoothscroll Min JS -->
		<script src="{{ asset('frontend/assets/js/smoothscroll.min.js') }}"></script>
		<!-- Form Validator Min JS -->
		<script src="{{ asset('frontend/assets/js/form-validator.min.js') }}"></script>
		<!-- Contact JS -->
		<script src="{{ asset('frontend/assets/js/contact-form-script.js') }}"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="{{ asset('frontend/assets/js/ajaxchimp.min.js') }}"></script>
        <!-- Custom JS -->
		<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {

        $(".btn-submit").click(function(e){

            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
            });
            e.preventDefault();


            var _token = $("input[name='_token']").val();
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var message = $("#message").val();
            var subject = $("#subject").val();

            // alert(title + " " + des);

            $.ajax({
                url: "{{ route('contact.save') }}",
                type:'POST',
                data: {_token:_token, name:name, email:email, phone:phone, message:message, subject:subject},
                success: function(data) {
                    // alert("done")
                    console.log(data.error)
                    if($.isEmptyObject(data.error)){
                        toastr.success(data.success);
                        document.getElementById("contactInfo").reset();
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        });

        function printErrorMsg (msg) {
            $.each( msg, function( key, value ) {
                console.log(key);
                $('.'+key+'_err').text(value);
            });
        }
    });
</script>
<script type="text/javascript">

    $(document).ready(function() {

        $(".btn-submit").click(function(e){

            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
            });
            e.preventDefault();


            var _token = $("input[name='_token']").val();
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var type = $("#type").val();
            var company_name = $("#company_name").val();
            var message = $("#message").val();

            // alert(title + " " + des);

            $.ajax({
                url: "{{ route('email.offer') }}",
                type:'POST',
                data: {_token:_token, name:name, email:email, phone:phone, message:message, type:type, company_name:company_name},
                success: function(data) {
                    // alert("done")
                    console.log(data.error)
                    if($.isEmptyObject(data.error)){
                        toastr.success(data.success);
                        document.getElementById("offerInfo").reset();
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        });

        function printErrorMsg (msg) {
            $.each( msg, function( key, value ) {
                console.log(key);
                $('.'+key+'_err').text(value);
            });
        }
    });
</script>
<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?5505';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"",
      "borderRadius":"100",
      "marginLeft":"20",
      "marginBottom":"50",
      "marginRight":"20",
      "position":"left",
      @if (app()->getLocale() == 'ar')
      "position":"rigth"
      @endif
  },
  "brandSetting":{
      "brandName":"{{ $setting->name }}",
      "brandSubTitle":"يصلك الرد خلال اليوم",
      "brandImg":"{{asset('frontend/assets/img/logo-four.png')}}",
      "welcomeText":"أهلا بك \n كيف يمكننى مساعدتك؟",
      "messageText":"كنت أود الاستفسار عن ",
      "backgroundColor":"#0a5f54",
      "ctaText":"إبدأ المحادثة",
      "borderRadius":"30",
      "autoShow":false,
      "phoneNumber":"{{$setting->whatsapp}}"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
