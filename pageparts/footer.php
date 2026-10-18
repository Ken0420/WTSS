<div class="mt-4 mt-lg-5 pt-lg-2"></div>
<div class="bg-{{ css_id }}-secondary pt-1 pb-2"></div>
<!-- footer start -->
<section class="d-block position-relative pb-5 pb-md-0 mb-md-0">
    <div class="{{ css_id }}-gradient gradient-inset-shadow-deep-footer"></div>
    <footer class="text-white pt-1 pb-3">
        <!-- container for company logo, contact details and social media links start -->
        <div class="container">
            <div class="row justify-content-center">
                <!-- company info / logo -->
                <div class="col-12 col-md-4 col-lg-3 col-xl-4">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start mt-3">
                        {% if product is defined %}
                            <div class="icon-logo-style-footer"><img src="{{ frontend_base_url }}assets/img/{{ product.lowercase_name }}/logo-icon-{{ product.lowercase_name }}.svg" class="img-fluid generic-svg-shadow-footer" alt="{{ product.Name }}"></div>
                            <div class="h4 font-weight-normal text-shadow ml-1 pl-1 pl-1 pt-2">{{ product.prefix }}<strong>Biz</strong></div>
                        {% else %}
                            <div class=""><img src="{{ frontend_base_url }}assets/img/logo-thinksmart-light-v2.svg" class="icon-logo-style-tss-footer generic-svg-shadow-footer" alt="ThinkSmart Software"></div>
                        {% endif %}
                    </div>
                </div>

                <!-- company contact / get in touch with us start -->
                <div class="mt-4 mt-md-3 mt-lg-3 col-8 col-sm-8 col-md-8 col-lg-6 col-xl-6 pl-lg-3 pl-xl-4">
                    <span class="text-center text-md-left text-shadow">
                        <h5 class="text-{{ css_id }}-secondary">Get in touch with us</h5>
                    </span>

                    <div class="row">
                        <!-- sales -->
                        <div class="pl-sm-4 pl-md-3 col-12 mt-2 mb-lg-2">
                            <div class="row align-items-center">
                                <!-- call -->
                                <div class="pl-sm-5 pl-md-3 col-auto col-lg-2 pr-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flag-icon flag-icon-au h5 m-0"></div><div class="pl-2">AUS</div>
                                    </div>
                                </div>
                                <div class="col-auto text-left">
                                    <!-- australia number -->
                                    <span class="text-white ml-xl-n2">61 3 9018 9594 </span>
                                </div>
                                <div class="col-12 col-md-9 pl-xl-0 pl-0 pl-sm-3 pl-md-0">
                                    <div class="w-100 col-xl-10">
                                        <hr class="mt-2 mb-2 opacity-3">
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="pl-sm-5 pl-md-3 col-auto col-lg-2 pr-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flag-icon flag-icon-gb h5 m-0 p-0"></div><div class="pl-2 pr-2">UK</div>
                                    </div>
                                </div>
                                <div class="col-auto text-left">
                                    <!-- uk number -->
                                    <span class="text-white ml-xl-n2">01483 422 080</span>
                                </div>
                                <div class="col-12 col-md-9 pl-xl-0 pl-0 pl-sm-3 pl-md-0">
                                    <div class="w-100 col-xl-10">
                                        <hr class="mt-2 mb-2 opacity-3">
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="pl-sm-5 pl-md-3 col-auto col-lg-2 pr-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flag-icon flag-icon-ae h5 m-0 p-0"></div><div class="pl-2 pr-2">UAE</div>
                                    </div>
                                </div>
                                <div class="col-auto text-left">
                                    <!-- uae number -->
                                    <span class="text-white ml-xl-n2">971 585 19 0406</span>
                                </div>
                                <div class="col-12 col-md-9 pl-xl-0 pl-0 pl-sm-3 pl-md-0">
                                    <div class="w-100 col-xl-10">
                                        <hr class="mt-2 mb-2 opacity-3">
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <!-- contact us via our online form -->
                                <div class="pl-sm-5 pl-md-3 col-auto pr-0">
                                    <div class="text-center">
                                        <i class="fas fa-edit fa-lg pl-1"></i>
                                    </div>
                                </div>
                                <div class="col-9 text-left pl-2">
                                    Or contact us via our <a href="{{ path_for((product is defined ? 'product_pages.contact-us' : 'contact-us'), {'product_name': product.lowercase_name}) }}" class="text-white font-weight-bold">online form</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- company contact / get in touch with us end -->

                <!-- stay updated, social media start -->
                <div class="mt-4 mt-md-3 mt-lg-3 col-12 col-md-4 col-lg-2 col-xl-2 pl-lg-0 pl-xl-3">
                    <div class="pl-xl-4">
                        <span class="text-center text-md-left text-shadow">
                            <h5 class="text-{{ css_id }}-secondary">Stay updated</h5>
                        </span>

                        <div class="text-center text-md-left pt-lg-1 pt-xl-2 text-xl-left">
                            {% if product.lowercase_name  == 'classbiz' %}
                                <a href="https://www.facebook.com/ThinkSmartSoftware" target="_blank" data-toggle="tooltip" title="Facebook" class="h4"><i class="fa-brands fa-facebook-square text-white pr-2"></i></a>
                                <a href="https://www.instagram.com/thinksmart_software/" target="_blank" data-toggle="tooltip" title="Instagram" class="h4"><i class="fa-brands fa-instagram text-white pr-2"></i></a>
                                <a href="https://au.linkedin.com/company/thinksmart-software" target="_blank" data-toggle="tooltip" title="LinkedIn" class="h4"><i class="fa-brands fa-linkedin text-white pr-2"></i></a>
                                <a href="https://www.twitter.com/tweetthinksmart" target="_blank" data-toggle="tooltip" title="X" class="h4"><i class="fa-brands fa-square-x-twitter text-white pr-2"></i></a>
                            {% elseif product.lowercase_name  == "dancebiz" %}
                                <a href="https://www.facebook.com/ThinkSmartSoftware" target="_blank" data-toggle="tooltip" title="Facebook" class="h4"><i class="fa-brands fa-facebook-square text-white pr-2"></i></a>
                                <a href="https://www.instagram.com/thinksmart_software/" target="_blank" data-toggle="tooltip" title="Instagram" class="h4"><i class="fa-brands fa-instagram text-white pr-2"></i></a>
                                <a href="https://au.linkedin.com/company/thinksmart-software" target="_blank" data-toggle="tooltip" title="LinkedIn" class="h4"><i class="fa-brands fa-linkedin text-white pr-2"></i></a>
                                <a href="https://www.twitter.com/tweetthinksmart" target="_blank" data-toggle="tooltip" title="X" class="h4"><i class="fa-brands fa-square-x-twitter text-white pr-2"></i></a>
                            {% elseif product.lowercase_name  == "swimbiz" %}
                                <a href="https://www.facebook.com/ThinkSmartSoftware" target="_blank" data-toggle="tooltip" title="Facebook" class="h4"><i class="fa-brands fa-facebook-square text-white pr-2"></i></a>
                                <a href="https://www.instagram.com/thinksmart_software/" target="_blank" data-toggle="tooltip" title="Instagram" class="h4"><i class="fa-brands fa-instagram text-white pr-2"></i></a>
                                <a href="https://au.linkedin.com/company/thinksmart-software" target="_blank" data-toggle="tooltip" title="LinkedIn" class="h4"><i class="fa-brands fa-linkedin text-white pr-2"></i></a>
                                <a href="https://www.twitter.com/tweetthinksmart" target="_blank" data-toggle="tooltip" title="X" class="h4"><i class="fa-brands fa-square-x-twitter text-white pr-2"></i></a>
                            {% else %}
                                <a href="http://www.facebook.com/ThinkSmartSoftware" target="_blank" data-toggle="tooltip" title="Facebook" class="h4"><i class="fa-brands fa-facebook-square text-white pr-2"></i></a>
                                <a href="https://www.instagram.com/thinksmart_software/" target="_blank" data-toggle="tooltip" title="Instagram" class="h4"><i class="fa-brands fa-instagram text-white pr-2"></i></a>
                                <a href="https://au.linkedin.com/company/thinksmart-software" target="_blank" data-toggle="tooltip" title="LinkedIn" class="h4"><i class="fa-brands fa-linkedin text-white pr-2"></i></a>
                                <a href="https://www.twitter.com/tweetthinksmart" target="_blank" data-toggle="tooltip" title="X" class="h4"><i class="fa-brands fa-square-x-twitter text-white pr-2"></i></a>
                            {% endif %}

                            <!-- back to top start -->
                            <!-- <div class="text-center text-md-left text-xl-left pt-xl-2">
                                <small><a href="#top" class="text-white"><i class="fas fa-caret-up pr-1"></i>Back to top</a></small>
                            </div> -->
                            <!-- back to top end -->

                            <!-- <div id="footer-country-selector" class="d-none pt-4 pt-md-0 pt-lg-4 mt-1">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="text-white dropdown-toggle text-reset" href="" id="dropdown-country" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-au"></span> AU</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-country">
                                            <a class="dropdown-item" href="#gb"><span class="flag-icon flag-icon-gb"></span> UK</a>
                                            <a class="dropdown-item" href="#au"><span class="flag-icon flag-icon-us"></span> USA</a>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- stay updated, social media end -->
            </div>
        </div>
    </footer>

    <!-- bottom footer menu -->
    <footer class="position-relative">
        <div class="bg-{{ css_id }}-dark dark-strip-footer d-none d-md-block nav-gradient-footer-bottom-strip"></div>
        <div class="position-relative">
            <ul class="nav justify-content-center pt-2 position-relative">
                <li><a class="text-white" href="{{ path_for((product is defined ? 'product_pages.home' : 'home'), {'product_name': product.lowercase_name}) }}">Overview</a><span class="text-white p-2">|</span></li>
                {% if product is defined %}
                <li><a class="text-white" href="{{ path_for('product_pages.features', {'product_name': product.lowercase_name}) }}">Features</a><span class="text-white p-2">|</span></li>
                <li><a class="text-white" href="{{ path_for( 'product_pages.pricing', {'product_name': product.lowercase_name}) }}">Pricing</a><span class="text-white p-2">|</span></li>
                <li><a class="text-white" href="{{ path_for( 'product_pages.download', {'product_name': product.lowercase_name}) }}">Download</a><span class="text-white p-2">|</span></li>
                {% else %}
                    <li><a class="text-white" href="{{ path_for('products') }}">Products</a><span class="text-white p-2">|</span></li>
                {% endif %}
                <li><a class="text-white" href="{{ path_for((product is defined ? 'product_pages.blog' : 'blog'), {'product_name': product.lowercase_name}) }}">Blog</a><span class="text-white p-2">|</span></li>
                <li><a class="text-white" href="{{ path_for((product is defined ? 'product_pages.about-us': 'about-us'), {'product_name': product.lowercase_name}) }}">About Us</a><span class="text-white p-2">|</span></li>
                <li><a class="text-white" href="{{ path_for((product is defined ? 'product_pages.contact-us': 'contact-us'), {'product_name': product.lowercase_name}) }}">Contact Us</a>{% if product is defined %}<span class="text-white p-2">|</span>{% endif %}</li>
                {% if product is defined %}
                <li><a class="text-white" href="{{ path_for('product_pages.signup', {'product_name': product.lowercase_name}) }}">Free Trial</a></li>
                {% endif %}
                <!-- additional menu item no content yet start -->
                <li class="d-none">
                    <span class="text-white d-inline pl-2 pr-0">|</span>
                    <div class="footer-dropdown-item dropup d-inline-flex">
                        <a class="dropdown-toggle border-0 pt-0 pb-0 pl-1 text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ path_for( 'partners') }}">Partners</a>
                            <a class="dropdown-item" href="{{ path_for( 'franchising') }}">Franchising</a>
                            {#<a class="dropdown-item" href="#">White Labelling (TBA)</a>#}
                        </div>
                    </div>
                </li>
                <!-- additional menu item no content yet end -->
            </ul>
            <div class="text-center text-white pt-2 pt-sm-1 pt-md-1 pb-4 pb-md-2">
                <small>
                    <span class="d-block d-sm-inline">© <span class="current_year"></span> <a href="{{ path_for( 'home') }}" class="text-white">ThinkSmart Software Pty Ltd</a> - </span>
                    <!-- au privacy policy -->
                    <a class="text-white" target="_blank" href="{{ path_for( 'agreements') }}">Privacy Policy</a>
                    <!-- uk privacy policy -->
                    <!-- <a class="text-white" target="_blank" href="https://www.thinksmartsoftware.com/en-gb/privacy-policy.html">Privacy Policy</a> -->
                    <!-- usa privacy policy -->
                    <!-- <a class="text-white" target="_blank" href="https://www.thinksmartsoftware.com/en-us/privacy-policy.html">Privacy Policy</a> -->
                </small>
            </div>
        </div>
    </footer>

    <!-- end of bottom navigation -->

    {% if route_name != 'product_pages.signup' and route_name != 'product_pages.landing' and route_name != 'product_pages.signup.complete' %}
    <!-- footer call to action for mobile, xs, & sm screens -->
        {% if product is defined %}
            <footer class="d-md-none fixed-bottom text-center pt-2 pb-3 d-md-none text-white">
                <div class="bg-{{ css_id }}-dark dark-strip-footer d-md-none"></div>
                <div class="nav-gradient-footer-bottom-strip-mobile d-md-none"></div>
                 <div class="pt-2 pt-sm-2 position-relative">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="text-white d-inline">
                            <div class="small pr-2 d-sm-none">Are you a new customer?</div>
                            <div class="pt-sm-1 pr-2 d-none d-sm-block">Are you a new customer?</div>
                        </div>
                        <a class="btn-success btn-sm btn text-center text-white d-sm-none pr-2"
                           href="{{ path_for( 'product_pages.signup', {'product_name': product.lowercase_name}) }}">Start Your Free Trial<i class="fas fa-caret-right pl-1"></i>
                        </a>
                        <a class="btn-success btn text-center text-white d-none d-sm-block pr-2"
                           href="{{ path_for( 'product_pages.signup', {'product_name': product.lowercase_name}) }}">Start Your Free Trial<i class="fas fa-caret-right pl-1"></i>
                        </a>
                    </div>
                </div>
            </footer>
        {% endif %}
    {% endif %}
</section>

{# <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script> #}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

{% if environment == 'local' %}
<script>document.write('<script src="http://'
        + location.host.split(':')[0]
        + ':35729/livereload.js"></'
        + 'script>')</script>
{% endif %}

<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#237afc"
            },
            "button": {
                "background": "transparent",
                "text": "#fff",
                "border": "#fff"
            }
        },
        "content": {
            message: 'This website uses cookies to ensure you get the best experience.',
        }
    });

    $(document).ready(function(){
        var d = new Date();
        var y = d.getFullYear();
        $(".current_year").empty().append(y);

        {# country code #}
        var get_user_country_code = "";
        if( !cookieFunctions.getCookie( 'country' ) ) {
            get_user_country_code = "{{ get_user_country() }}";
            get_user_country_code = get_user_country_code.toLowerCase();

            cookieFunctions.setCookie( 'country', get_user_country_code );
        } else {
            get_user_country_code = cookieFunctions.getCookie('country');
        }

        {# changeCountry( get_user_country_code ); #}
        
        $('#contact-' + get_user_country_code + '-button').click();

        {# country name #}
        var get_user_country_name = "";
        if( !cookieFunctions.getCookie( 'country_name' ) ) {
            get_user_country_name = "{{ get_user_country_name() }}";

            cookieFunctions.setCookie( 'country_name', get_user_country_name );
        } else {
            get_user_country_name = cookieFunctions.getCookie( 'country_name' );
        }

        $('[name=country], [name=Country]').val( get_user_country_name );

        {# ken here, changing the process of getting the country code and country name and setting its respective cookie values #}
        {# if(!cookieFunctions.getCookie('country')){ #}
            {# This should probably be a popup instead of geo-location #}
            {# $.ajax('/get_country', {
                method: "GET",
                dataType: 'json'
            }).done(function(data) {
                cookieFunctions.setCookie('country', data.Data['country']);
                if (typeof changeCountry === "function") {
                    changeCountry(data.Data['country']);
                }
            }); #}
        {# }  #}

        $('.learn-more-button').click(function(e){
            e.preventDefault(); 
            const cc_url = 'https://clearcourse.liberis.com/';
            window.open(cc_url);
        })
    });
</script>

<script>
  if(window.location.pathname.includes('/signup/complete')){
    gtag('event', 'conversion', {'send_to': 'AW-16641288120/MkPQCPzsnskZELjPl_89'});
  }
</script>

{% if get_user_country() == 'UK' %}
    {% if route_name == 'product_pages.pricing'  %}

<!-- meluchat.com -->
<script type="text/javascript" id="4010a395fab832d509d7759419f2c481" src="https://meluchat.com/livechat/script.php?id=4010a395fab832d509d7759419f2c481" defer></script>
<!-- meluchat.com -->

<script>
    function resize_cc(doc_width){
        if( doc_width >= 1024 ) {
            $( ".cc-window" ).removeClass( "cc-banner" ).addClass( "cc-floating" );
        } 
        
        if( doc_width < 768 ) {
            $( "#lz_overlay_chat" ).css( 'display', 'none' );
            $( "#lz_overlay_wm" ).css( 'display', 'none' );
            $( "#lz_overlay_preview" ).css( 'display', 'none' );
        } else {
            $( "#lz_overlay_chat" ).css( 'display', 'block' );
            $( "#lz_overlay_wm" ).css( 'display', 'block' );
            $( "#lz_overlay_preview" ).css( 'display', 'block' );
        }
    }

    $(document).ready(function(){
        var doc_width = $(document).width();
        resize_cc( doc_width );
    });
    
    $(window).resize(function() {
        var doc_width = $(document).width();
        resize_cc( doc_width );
    });

    $( ".cc-dismiss" ).on( 'click', function() {
        var doc_width = $(document).width();
        if(doc_width < 768) {

            $( "#lz_overlay_chat" ).css( 'display', 'block' );
            $( "#lz_overlay_wm" ).css( 'display', 'block' );
            $( "#lz_overlay_preview" ).css( 'display', 'block' );
        }
    } );
</script>
    {% endif %}
{% endif %}