{{ get_doctype() }}
<html lang="pl">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    {{ get_title() }}
    <meta name="description" content="GotYa Free Bootstrap Theme"/>
    <meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
    <meta name="author" content="Łukasz Holeczek from creativeLabs"/>
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: Facebook Open Graph -->
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:type" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content=""/>
    <!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
    <!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

<!--start: Header -->
<header>

    <!--start: Container -->
    <div class="container">

        <!--start: Row -->
        <div class="row">

            <!--start: Logo -->
            <div class="logo span3">

                <a class="brand" href="/">
                    NetTech
                </a>

            </div>
            <!--end: Logo -->

            <!--start: Navigation -->
            {{ helper.getMenu('top') }}
            <!--end: Navigation -->

        </div>
        <!--end: Row -->

    </div>
    <!--end: Container-->

</header>
<!--end: Header-->

{% if show_slider is defined AND show_slider === true %}
<!-- start: Slider -->
<div class="slider-wrapper">

    <div id="da-slider" class="da-slider">
        <div class="da-slide">
            <h2>Strony internetowe</h2>
            <p>Jeśli pragniesz osiągnąć sukces, Twoja strona powinna wyróżniać się na tle konkurencji oraz przykuwać uwagę. Musi przy tym być funkcjonalna i dopracowana w każdym szczególe.</p>
            <a href="/services" class="da-link">dalej</a>
            <div class="da-img"><img src="assets/img/parallax-slider/twitter.png" alt="image01" /></div>
        </div>
        <div class="da-slide">
            <h2>Responsive Design</h2>
            <p>Budując serwis www od podstaw, wykorzystujemy innowacyjną metodę Responsive Web Design, dzięki której strona samoistnie dopasowuje się do każdego urządzenia mobilnego i stacjonarnego.</p>
            <a href="/services" class="da-link">dalej</a>
            <div class="da-img"><img src="assets/img/parallax-slider/responsive.png" alt="image02" /></div>
        </div>
        <div class="da-slide">
            <h2>CMS</h2>
            <p>Wykonujemy strony internetowe, które w łatwy sposób można edytować po stronie klienta.</p>
            <a href="/services" class="da-link">dalej</a>
            <div class="da-img"><img src="assets/img/parallax-slider/html5.png" alt="image03" /></div>
        </div>
        <div class="da-slide">
            <h2>Projektowanie graficzne</h2>
            <p>Zespół grafików net-te.ch stworzy dla Ciebie spójną i nowatorską koncepcję strony internetowej. Zapewniamy realizację projektu graficznego na najwyższym poziomie, z profesjonalną szatą graficzną przy równoczesnym zachowaniu funkcjonalności.</p>
            <a href="/services" class="da-link">dalej</a>
            <div class="da-img"><img src="assets/img/parallax-slider/css3.png" alt="image04" /></div>
        </div>
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </nav>
    </div>

</div>
<!-- end: Slider -->

{% elseif show_map is defined AND show_map === true %}
<!-- start: Map -->
<div>

    <!-- starts: Google Maps -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <div id="googlemaps-container-top"></div>
    <div id="googlemaps" class="google-map google-map-full"></div>
    <div id="googlemaps-container-bottom"></div>
    <!-- end: Google Maps -->
</div>
<!-- end: Map -->

{% else %}

<!-- start: Page Title -->
<div id="page-title">

    <div id="page-title-inner">

        <!-- start: Container -->
        <div class="container">

            <h2><i class="ico-{{ page_icon }} ico-white"></i>{{ page_title }}</h2>

        </div>
        <!-- end: Container  -->

    </div>

</div>
<!-- end: Page Title -->

{% endif %}

<!--start: Wrapper-->
<div id="wrapper">

    <!--start: Container -->
    {% block content %}
    <div class="container">
        {{ flash.output() }}

        {{ content() }}

        <hr>

    </div>
    {% endblock %}
    <!--end: Container-->

</div>
<!-- end: Wrapper  -->

<!-- start: Footer Menu -->
<div id="footer-menu" class="hidden-tablet hidden-phone">

    <!-- start: Container -->
    <div class="container">

        <!-- start: Row -->
        <div class="row">

            <!-- start: Footer Menu Logo -->
            {#<div class="span2">#}
                {#<div id="footer-menu-logo">#}
                    {#<a href="#"><img src="assets/img/logo-footer-menu.png" alt="logo" /></a>#}
                {#</div>#}
            {#</div>#}
            <!-- end: Footer Menu Logo -->

            <!-- start: Footer Menu Links-->
            {{ helper.getMenu('bottom') }}
            <!-- end: Footer Menu Links-->

            <!-- start: Footer Menu Back To Top -->
            <div class="span1">

                <div id="footer-menu-back-to-top">
                    <a href="#"></a>
                </div>

            </div>
            <!-- end: Footer Menu Back To Top -->

        </div>
        <!-- end: Row -->

    </div>
    <!-- end: Container  -->

</div>
<!-- end: Footer Menu -->

<!-- start: Footer -->
{#<div id="footer">#}

    {#<!-- start: Container -->#}
    {#<div class="container">#}

        {#<!-- start: Row -->#}
        {#<div class="row">#}

            {#<!-- start: About -->#}
            {#<div class="span3">#}

                {#<h3>About Us</h3>#}
                {#<p>#}
                    {#Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.#}
                {#</p>#}

            {#</div>#}
            {#<!-- end: About -->#}

            {#<!-- start: Photo Stream -->#}
            {#<div class="span3">#}

                {#<h3>We are here!</h3>#}
                {#<div id="small-map-container"><a href="contact.html"></a></div>#}
                {#<iframe id="small-map" width="210" height="210" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=Los+Angeles,+Kalifornia,+Stany+Zjednoczone&amp;aq=0&amp;oq=Los&amp;sll=50.143066,18.85267&amp;sspn=0.057207,0.168915&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Los+Angeles,+Hrabstwo+Los+Angeles,+Kalifornia,+Stany+Zjednoczone&amp;ll=34.052234,-118.243685&amp;spn=0.036979,0.084457&amp;z=14&amp;iwloc=near&amp;output=embed"></iframe>#}

            {#</div>#}
            {#<!-- end: Photo Stream -->#}

            {#<div class="span6">#}

                {#<!-- start: Follow Us -->#}
                {#<h3>Follow Us!</h3>#}
                {#<ul class="social-grid">#}
                    {#<li>#}
                        {#<div class="social-item">#}
                            {#<div class="social-info-wrap">#}
                                {#<div class="social-info">#}
                                    {#<div class="social-info-front social-twitter">#}
                                        {#<a href="http://twitter.com"></a>#}
                                    {#</div>#}
                                    {#<div class="social-info-back social-twitter-hover">#}
                                        {#<a href="http://twitter.com"></a>#}
                                    {#</div>#}
                                {#</div>#}
                            {#</div>#}
                        {#</div>#}
                    {#</li>#}
                    {#<li>#}
                        {#<div class="social-item">#}
                            {#<div class="social-info-wrap">#}
                                {#<div class="social-info">#}
                                    {#<div class="social-info-front social-facebook">#}
                                        {#<a href="http://facebook.com"></a>#}
                                    {#</div>#}
                                    {#<div class="social-info-back social-facebook-hover">#}
                                        {#<a href="http://facebook.com"></a>#}
                                    {#</div>#}
                                {#</div>#}
                            {#</div>#}
                        {#</div>#}
                    {#</li>#}
                    {#<li>#}
                        {#<div class="social-item">#}
                            {#<div class="social-info-wrap">#}
                                {#<div class="social-info">#}
                                    {#<div class="social-info-front social-dribbble">#}
                                        {#<a href="http://dribbble.com"></a>#}
                                    {#</div>#}
                                    {#<div class="social-info-back social-dribbble-hover">#}
                                        {#<a href="http://dribbble.com"></a>#}
                                    {#</div>#}
                                {#</div>#}
                            {#</div>#}
                        {#</div>#}
                    {#</li>#}
                    {#<li>#}
                        {#<div class="social-item">#}
                            {#<div class="social-info-wrap">#}
                                {#<div class="social-info">#}
                                    {#<div class="social-info-front social-flickr">#}
                                        {#<a href="http://flickr.com"></a>#}
                                    {#</div>#}
                                    {#<div class="social-info-back social-flickr-hover">#}
                                        {#<a href="http://flickr.com"></a>#}
                                    {#</div>#}
                                {#</div>#}
                            {#</div>#}
                        {#</div>#}
                    {#</li>#}
                {#</ul>#}
                {#<!-- end: Follow Us -->#}

                {#<!-- start: Newsletter -->#}
                {#<form id="newsletter">#}
                    {#<h3>Newsletter</h3>#}
                    {#<p>Please leave us your email</p>#}
                    {#<label for="newsletter_input">@:</label>#}
                    {#<input type="text" id="newsletter_input"/>#}
                    {#<input type="submit" id="newsletter_submit" value="submit">#}
                {#</form>#}
                {#<!-- end: Newsletter -->#}

            {#</div>#}

        {#</div>#}
        {#<!-- end: Row -->#}

    {#</div>#}
    {#<!-- end: Container  -->#}

{#</div>#}
<!-- end: Footer -->

<!-- start: Copyright -->
<div id="copyright">

    <!-- start: Container -->
    <div class="container">

        <p>
            &copy; {{ date('Y') }} powered by <b>NetTech</b> in Poland <img src="assets/img/poland2.png" alt="Poland" style="margin-top:-4px">
        </p>

    </div>
    <!-- end: Container  -->

</div>
<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery-1.8.2.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/flexslider.js"></script>
<script src="assets/js/carousel.js"></script>
<script src="assets/js/jquery.cslider.js"></script>
<script src="assets/js/slider.js"></script>
<script defer="defer" src="assets/js/custom.js"></script>

{% if show_map is defined AND show_map === true %}
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCLx-n5zc-YjPNb7cjtSUFP7vnT-vt88tI&sensor=true"></script>
<script src="assets/js/jquery.gmap.min.js"></script>
<script type="text/javascript">
    $('#googlemaps').gMap({
        maptype: 'ROADMAP',
        scrollwheel: false,
        zoom: 13,
        markers: [
            {
                address: 'Reptowska, Bytom, Poland', // Your Adress Here
                html: 'Net Tech Sp. z o.o.',
                popup: false,
            }

        ],

    });
</script>
{% endif %}

<!-- end: Java Script -->

</body>
</html>