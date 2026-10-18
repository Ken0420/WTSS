<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
{{ meta_tags | raw }}
{{ icon_links | raw }}

<!-- web fonts CDN -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
{#<!-- Font Awesome CDN for the Icons -->#}
{#<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">#}

{#<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"#}
{#      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">#}



{#<noscript>#}
    {#<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap">#}
    {#<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700&display=swap">#}

    {#<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">#}
{#</noscript>#}


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '941783982893508'); 
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" 
src="https://www.facebook.com/tr?id=941783982893508&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<!-- flag cdn -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

<!-- custom styles -->
<link rel="stylesheet" type="text/css" href="{{ frontend_base_url }}assets/css/base.css">
{% if environment == 'live' %}
    {# <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91303330-7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('set', 'allow_ad_personalization_signals', false);
        gtag('config', 'UA-91303330-7');
    </script> #}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    {# <script async src="https://www.googletagmanager.com/gtag/js?id=UA-35393837-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-35393837-1');
    </script> #}

    {# New GTM Code #}
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KQHVV9FH');</script>
    <!-- End Google Tag Manager -->

{% else %}
    {# <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91303330-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('set', 'allow_ad_personalization_signals', false);
        gtag('config', 'UA-91303330-6');
    </script> #}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5F96QQRDEM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-5F96QQRDEM');
    </script>
{% endif %}

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16641288120"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16641288120');
</script>

<script>
    var cookieFunctions={setCookie:function(e,t,n){var a="";if(n){var o=new Date;o.setTime(o.getTime()+24*n*60*60*1e3),a="; expires="+o.toUTCString()}document.cookie=e+"="+(t||"")+a+"; path=/"},getCookie:function(e){for(var t=e+"=",n=document.cookie.split(";"),a=0;a<n.length;a++){for(var o=n[a];" "==o.charAt(0);)o=o.substring(1,o.length);if(0==o.indexOf(t))return o.substring(t.length,o.length)}return null},eraseCookie:function(e){document.cookie=e+"=; Max-Age=-99999999;"}};function getUrlVars(){var e={};return window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(t,n,a){e[n]=a}),e}function getUrlParam(e,t){var n=t;return window.location.href.indexOf(e)>-1&&(n=getUrlVars()[e]),n}var exp_date=new Date;exp_date.setDate(exp_date.getDate()+7);var campaign_variables=["utm_source","utm_medium","utm_campaign","utm_term","utm_content"];campaign_variables.forEach(function(e,t,n){var a=getUrlParam(e,null);null!==a&&cookieFunctions.setCookie(e,escape(a),7)});
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
{% if get_user_country() == 'UK' %}
<style>
    .cc-window.cc-floating {
        z-index: 20000001;
    }
    
    @media (min-width: 768px){
        .cc-window.cc-banner .cc-message{
            // flex: unset;
        }

        .cc-window.cc-floating {
            left: 1em;
        }
    }
    
    @media (max-width: 767px){
        .cc-window.cc-floating{
            max-width: 100%;
            width: 100%;
            bottom: 0;
        }

    }
    
</style>
{% endif %}

<script>
    var exp_date = new Date();
    exp_date.setDate(exp_date.getDate() + 7);
    {% for param, param_value in utm_params %}
    cookieFunctions.setCookie('{{ param }}', escape('{{ param_value }}'), 7);
    {% endfor %}
</script>
{#<script>#}
{#    var cookieFunctions = {#}
{#        setCookie: function(name,value,days) {#}
{#            var expires = "";#}
{#            if (days) {#}
{#                var date = new Date();#}
{#                date.setTime(date.getTime() + (days*24*60*60*1000));#}
{#                expires = "; expires=" + date.toUTCString();#}
{#            }#}
{#            document.cookie = name + "=" + (value || "")  + expires + "; path=/";#}
{#        },#}
{#        getCookie: function(name) {#}
{#            var nameEQ = name + "=";#}
{#            var ca = document.cookie.split(';');#}
{#            for(var i=0;i < ca.length;i++) {#}
{#                var c = ca[i];#}
{#                while (c.charAt(0)==' ') c = c.substring(1,c.length);#}
{#                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);#}
{#            }#}
{#            return null;#}
{#        },#}
{#        eraseCookie: function(name) {#}
{#            document.cookie = name+'=; Max-Age=-99999999;';#}
{#        }#}
{#    };#}

{#    function getUrlVars() {#}
{#        var vars = {};#}
{#        window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {#}
{#            vars[key] = value;#}
{#        });#}
{#        return vars;#}
{#    }#}

{#    function getUrlParam(parameter, default_value){#}
{#        var url_parameter = default_value;#}
{#        if(window.location.href.indexOf(parameter) > -1){#}
{#            url_parameter = getUrlVars()[parameter];#}
{#        }#}
{#        return url_parameter;#}
{#    }#}

{#    var exp_date = new Date();#}
{#    exp_date.setDate(exp_date.getDate() + 7);#}

{#    var campaign_variables = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];#}
{#    campaign_variables.forEach(function(value, index, array){#}
{#        var utm_value = getUrlParam(value, null);#}
{#        if(utm_value !== null){#}
{#            cookieFunctions.setCookie(value, escape(utm_value), 7);#}
{#        }#}
{#    });#}
{#</script>#}
