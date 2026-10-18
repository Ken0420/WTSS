<a id="top"></a>
<header>
    <!-- nav start -->
    <nav class="navbar fixed-top navbar-default navbar-dark navbar-expand-lg nav-gradient p-lg-0">
        <div class="container">
            <div class="nav-top-bg bg-{{ css_id }}-dark"></div>
            <a class="navbar-brand p-lg-0" href="{{ path_for((product is defined ? 'product_pages.home' : 'home'), {'product_name': product.lowercase_name}) }}">
                <div class="d-flex align-items-center">
                    {% if product is defined %}
                        <div class="icon-logo-style"><img src="{{ frontend_base_url }}assets/img/{{ product.lowercase_name }}/logo-icon-{{ product.lowercase_name }}.svg" class="img-fluid logo-icon-svg-shadow" alt="{{ product.Name }}"></div>
                        <div class="h4 font-weight-normal text-shadow ml-1 pl-1 pl-1 pt-2">{{ product.prefix }}<strong>Biz</strong></div>
                    {% else %}
                        <div class=""><img src="{{ frontend_base_url }}assets/img/logo-thinksmart-light-v2.svg" class="icon-logo-style-tss generic-svg-shadow" alt=""></div>
                    {% endif %}
                </div>
            </a>

            {% if product is defined %}
            <!-- trial button in tablet mode only start -->
            <div class="d-none d-md-block d-lg-none ml-md-auto pr-md-3">
            <a class="btn-success btn text-center text-white" href="{{ path_for( 'product_pages.signup', {'product_name': product.lowercase_name}) }}{{xero ? '?xero=1' : ''}}">Free Trial</a></div>
            <!-- trial button in tablet mode end -->
            {% endif %}

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-lg-2">
                    <li class="nav-item pt-lg-4 pb-lg-4 border-bottom-sm-md {{ (route_name == 'product_pages.home' or route_name == 'home') ? 'selected' : '' }}">
                        <a class="nav-link text-white" href="{{ path_for((product is defined ? 'product_pages.home' : 'home'), {'product_name': product.lowercase_name}) }}">Overview <span class="sr-only">(current)</span></a>
                    </li>
                    {% if product is defined %}
                    <li class="nav-item pt-lg-4 border-bottom-sm-md pb-lg-4 {{ (route_name == 'product_pages.features' or route_name == 'features') ? 'selected' : '' }}">
                        <a class="nav-link text-white" href="{{ path_for('product_pages.features', {'product_name': product.lowercase_name}) }}">Features</a>
                    </li>
                    <li class="nav-item pt-lg-4 border-bottom-sm-md pb-lg-4 {{ (route_name == 'product_pages.pricing' or route_name == 'pricing') ? 'selected' : '' }}">
                        <a class="nav-link text-white" href="{{ path_for('product_pages.pricing', {'product_name': product.lowercase_name}) }}">Pricing</a>
                    </li>
                    <li class="nav-item pt-lg-4 border-bottom-sm-md pb-lg-4 {{ (route_name == 'product_pages.download' or route_name == 'download') ? 'selected' : '' }}">
                        <a class="nav-link text-white" href="{{ path_for('product_pages.download', {'product_name': product.lowercase_name}) }}">Download</a>
                    </li>
                    {% else %}
                        <li class="nav-item pt-lg-4 border-bottom-sm-md pb-lg-4 {{ route_name == 'products' ? 'selected' : '' }}">
                            <a class="nav-link text-white" href="{{ path_for('products') }}">Products</a>
                        </li>
                    {% endif %}
                    <li class="nav-item pt-lg-4 border-bottom-sm-md pb-lg-4 {{ (route_name == 'product_pages.blog' or route_name == 'blog' or route_name == 'product_pages.blog-post' or route_name == 'blog-post') ? 'selected' : '' }}">
                        <a class="nav-link text-white" href="{{ path_for((product is defined ? 'product_pages.blog' : 'blog'), {'product_name': product.lowercase_name}) }}">Blog</a>
                    </li>
                    <li class="nav-item pt-lg-4 border-bottom-sm-md pb-lg-4 {{ (route_name == 'product_pages.about-us' or route_name == 'about-us') ? 'selected' : '' }}">
                        <a class="nav-link text-white" href="{{ path_for((product is defined ? 'product_pages.about-us' : 'about-us'), {'product_name': product.lowercase_name}) }}">About Us</a>
                    </li>
                    <li class="nav-item pt-lg-4 pb-lg-4 {{ (route_name == 'product_pages.contact-us' or route_name == 'contact-us') ? 'selected' : '' }}">
                        <a class="nav-link text-white" href="{{ path_for((product is defined ? 'product_pages.contact-us' : 'contact-us'), {'product_name': product.lowercase_name}) }}">Contact Us</a>
                    </li>
                </ul>
                {% if product is defined %}
                <a class="btn-success btn d-none d-lg-inline-block mb-1 mb-md-0 ml-md-1 text-white {{ (route_name == 'product_pages.signup' or route_name == 'signup') ? 'selected' : '' }}" href="{{ path_for('product_pages.signup', {'product_name': product.lowercase_name}) }}{{xero ? '?xero=1' : ''}}">Free Trial</a>
                {% endif %}
            </div>
        </div>
    </nav><!-- nav end -->
</header>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQHVV9FH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
