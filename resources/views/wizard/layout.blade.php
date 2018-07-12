<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="wizard/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="wizard/img/fav-fls.png" />
    <title>@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="author" content="Future Leader Summit 2017">
    <meta name="keyword" content="fls, future leader summit, fls 2017, 2017, delegates 2017, calon delegates, delegates fls, nusantara muda, fls blog, fls artikel">
    <meta name="description" content="Ayo daftar menjadi delegates Future Leader Summit 2017 untuk membawa perubahan nyata bagi Indonesia !">

    <meta content='#252422' name='theme-color'/>
    <meta content='Indonesia' name='geo.placename'/>

    <!-- CSS Files -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="wizard/css/bootstrap.min.css" rel="stylesheet" />
    <link href="wizard/css/paper-bootstrap-wizard.css" rel="stylesheet" />

    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="wizard/css/themify-icons.css" rel="stylesheet">
    <link href="wizard/css/custom.css" rel="stylesheet">

    <script src="wizard/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script type="text/javascript">

    $(function(){

        $.ajaxSetup({
            type:"GET",
            url: "",
            cache: false,
        });

        $("#provinsi").change(function(){

            var value=$(this).val();
            if(value > 0){
                $.ajax({
                    data:{id:value},
                    success: function(respond){
                        $("#kabupaten").html(respond);
                    }
                })
            }

        });

    })

    </script>
    <!-- script google analystic -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-100755881-1', 'auto');
    ga('send', 'pageview');

    </script>
</head>

<body>
    <div class="image-container set-full-height" style="background-image: url('/img/sponsorship/bg_2017_dark.png'); background-attachment: fixed;">
        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        @yield('content')
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->

        <div class="footer">
            <div class="container text-center">
                &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="ti-heart heart"></i> by <a href="https://github.com/creativefls">Creative FLS</a>
            </div>
        </div>
    </div>

</body>

<!--   Core JS Files   -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="wizard/js/bootstrap.min.js" type="text/javascript"></script>
<script src="wizard/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<!--  Plugin for the Wizard -->
<script src="wizard/js/paper-bootstrap-wizard.js" type="text/javascript"></script>
<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="wizard/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
$('.cari-drop').select2();

//Bind this keypress function to all of the input tags
$("input").keypress(function (evt) {
    //Deterime where our character code is coming from within the event
    var charCode = evt.charCode || evt.keyCode;
    if (charCode  == 13) { //Enter key's keycode
    return false;
}
});
</script>

</html>
