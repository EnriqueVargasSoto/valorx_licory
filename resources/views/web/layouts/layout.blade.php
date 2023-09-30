<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atiendo Licory</title>
    <link media="all" href="{{ asset('web/wp-content/cache/autoptimize/css/autoptimize_f570402d9656d08ae3f25a9006360db2.css')}}" rel="stylesheet"/>
    <title>Home 4 &#8211; Liquory</title>
    <meta name="robots" content="max-image-preview:large" />
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
    <link rel="dns-prefetch" href="http://s.w.org/" />
    <link rel="dns-prefetch" href="http://stats.wp.com/" />
    <link rel="dns-prefetch" href="http://demo2.themelexus.com/" />
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/" />

    <link rel="alternate" type="application/rss+xml"title="Liquory &raquo; Feed" href="feed/index.html"/>
    <link rel="alternate" type="application/rss+xml"title="Liquory &raquo; Comments Feed" href="comments/feed/index.html"/>

    <script>
        window._wpemojiSettings = {
            baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            ext: ".png",
            svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            svgExt: ".svg",
            source: {
            concatemoji:
                "https:\/\/demo2.themelexus.com\/liquory\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3",
            },
        };
        /*! This file is auto-generated */
        !(function (i, n) {
            var o, s, e;
            function c(e) {
            try {
                var t = { supportTests: e, timestamp: new Date().valueOf() };
                sessionStorage.setItem(o, JSON.stringify(t));
            } catch (e) {}
            }
            function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                e.fillText(t, 0, 0);
            var t = new Uint32Array(
                e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                ),
                r =
                (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                e.fillText(n, 0, 0),
                new Uint32Array(
                    e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                ));
            return t.every(function (e, t) {
                return e === r[t];
            });
            }
            function u(e, t, n) {
            switch (t) {
                case "flag":
                return n(
                    e,
                    "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                    "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
                )
                    ? !1
                    : !n(
                        e,
                        "\ud83c\uddfa\ud83c\uddf3",
                        "\ud83c\uddfa\u200b\ud83c\uddf3"
                    ) &&
                        !n(
                        e,
                        "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                        "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                        );
                case "emoji":
                return !n(
                    e,
                    "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                    "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff"
                );
            }
            return !1;
            }
            function f(e, t, n) {
            var r =
                "undefined" != typeof WorkerGlobalScope &&
                self instanceof WorkerGlobalScope
                    ? new OffscreenCanvas(300, 150)
                    : i.createElement("canvas"),
                a = r.getContext("2d", { willReadFrequently: !0 }),
                o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
            return (
                e.forEach(function (e) {
                o[e] = t(a, e, n);
                }),
                o
            );
            }
            function t(e) {
            var t = i.createElement("script");
            (t.src = e), (t.defer = !0), i.head.appendChild(t);
            }
            "undefined" != typeof Promise &&
            ((o = "wpEmojiSettingsSupports"),
            (s = ["flag", "emoji"]),
            (n.supports = { everything: !0, everythingExceptFlag: !0 }),
            (e = new Promise(function (e) {
                i.addEventListener("DOMContentLoaded", e, { once: !0 });
            })),
            new Promise(function (t) {
                var n = (function () {
                try {
                    var e = JSON.parse(sessionStorage.getItem(o));
                    if (
                    "object" == typeof e &&
                    "number" == typeof e.timestamp &&
                    new Date().valueOf() < e.timestamp + 604800 &&
                    "object" == typeof e.supportTests
                    )
                    return e.supportTests;
                } catch (e) {}
                return null;
                })();
                if (!n) {
                if (
                    "undefined" != typeof Worker &&
                    "undefined" != typeof OffscreenCanvas &&
                    "undefined" != typeof URL &&
                    URL.createObjectURL &&
                    "undefined" != typeof Blob
                )
                    try {
                    var e =
                        "postMessage(" +
                        f.toString() +
                        "(" +
                        [JSON.stringify(s), u.toString(), p.toString()].join(
                            ","
                        ) +
                        "));",
                        r = new Blob([e], { type: "text/javascript" }),
                        a = new Worker(URL.createObjectURL(r), {
                        name: "wpTestEmojiSupports",
                        });
                    return void (a.onmessage = function (e) {
                        c((n = e.data)), a.terminate(), t(n);
                    });
                    } catch (e) {}
                c((n = f(s, u, p)));
                }
                t(n);
            })
                .then(function (e) {
                for (var t in e)
                    (n.supports[t] = e[t]),
                    (n.supports.everything =
                        n.supports.everything && n.supports[t]),
                    "flag" !== t &&
                        (n.supports.everythingExceptFlag =
                        n.supports.everythingExceptFlag && n.supports[t]);
                (n.supports.everythingExceptFlag =
                    n.supports.everythingExceptFlag && !n.supports.flag),
                    (n.DOMReady = !1),
                    (n.readyCallback = function () {
                    n.DOMReady = !0;
                    });
                })
                .then(function () {
                return e;
                })
                .then(function () {
                var e;
                n.supports.everything ||
                    (n.readyCallback(),
                    (e = n.source || {}).concatemoji
                    ? t(e.concatemoji)
                    : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
                }));
        })((window, document), window._wpemojiSettings);
    </script>


    <link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('web/wp-content/uploads/elementor/css/custom-frontend.min19c7.css?ver=1692094318')}}" media="all"/>
    <link rel="stylesheet" id="elementor-post-6-css" href="{{ asset('web/wp-content/cache/autoptimize/css/autoptimize_single_efddbb19b749eb4f5d3645891cb67e8a19c7.css?ver=1692094318')}}" media="all"/>
    <link rel="stylesheet" id="elementor-global-css" href="{{ asset('web/wp-content/cache/autoptimize/css/autoptimize_single_5d0d136125e23a042b85dddd3b80e86019c7.css?ver=1692094318')}}" media="all"/>
    <link rel="stylesheet" id="elementor-post-22-css" href="{{ asset('web/wp-content/cache/autoptimize/css/autoptimize_single_8dab32c13d433158081922232a76d0840076.css?ver=1692109785')}}" media="all"/>
    <link rel="stylesheet" id="elementor-post-149-css" href="{{ asset('web/wp-content/cache/autoptimize/css/autoptimize_single_c9f5da1dd2dcfbb371fd339dbb9e10450076.css?ver=1692109785')}}" media="all"/>
    <link rel="stylesheet" id="elementor-post-158-css" href="{{ asset('web/wp-content/cache/autoptimize/css/autoptimize_single_bcaaf35fdce94693996e3d7025dc113b0076.css?ver=1692109785')}}" media="all"/>
    <link rel="stylesheet" id="elementor-post-162-css" href="{{ asset('web/wp-content/cache/autoptimize/css/autoptimize_single_e9b7da7c459748b47801202fc5cea16a92fb.css?ver=1692094320')}}" media="all"/>
    <link rel="stylesheet" id="liquory-fonts-css" href="http://fonts.googleapis.com/css2?family=family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,700;1,800&amp;display=swap&amp;subset=latin%2Clatin-ext&amp;display=swap" media="all"/>
    <link rel="stylesheet" id="elementor-post-164-css" href="{{ asset('web/wp-content/cache/autoptimize/css/autoptimize_single_c575bd3e6d47afc3315d93adc8f055af92fb.css?ver=1692094320')}}" media="all"/>
    <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Plus+Jakarta+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRajdhani%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.3" media="all"/>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    {{--<script type="text/template" id="tmpl-variation-template">
      <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
      	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
      	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
    </script>--}}

    <script type="text/template" id="tmpl-unavailable-variation-template">
      <p>Sorry, this product is unavailable. Please choose a different combination.</p>
    </script>

    <script src="{{asset('web/wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2')}}" id="wp-polyfill-inert-js"></script>
    <script src="{{asset('web/wp-includes/js/dist/vendor/regenerator-runtime.min8fa4.js?ver=0.13.11')}}" id="regenerator-runtime-js"></script>
    <script src="{{ asset('web/wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0')}}" id="wp-polyfill-js"></script>
    <script src="{{ asset('web/wp-includes/js/dist/hooks.min2ebd.js?ver=c6aec9a8d4e5a5d543a1')}}" id="wp-hooks-js"></script>
    <script src="../../stats.wp.com/wd624.js?ver=202339" id="woo-tracks-js"></script>
    <script src="{{ asset('web/wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0')}}" id="jquery-core-js"></script>
    <script src="{{ asset('web/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1')}}" id="jquery-migrate-js"></script>
    <script src="{{ asset('web/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min6319.js?ver=3.15.2')}}" id="font-awesome-4-shim-js"></script>
    <script src="{{ asset('web/wp-content/themes/liquory/assets/js/frontend/js.cookie7359.js?ver=1.2.0')}}" id="liquory-age-verification-cookie-js"></script>
    <script src="{{ asset('web/wp-content/themes/liquory/assets/js/frontend/age-verification7359.js?ver=1.2.0')}}" id="age-verification-js"></script>
    <script src="{{ asset('web/wp-content/themes/liquory/assets/js/libs/jarallaxf801.js?ver=6.3')}}" id="jarallax-js"></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/22.json"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd"/>

    <meta name="generator" content="WordPress 6.3" />
    <meta name="generator" content="WooCommerce 8.0.1" />

    <link rel="canonical" href="home-4/index.html" />
    <link rel="shortlink" href="index0345.html?p=22" />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed6b33.json?url=https%3A%2F%2Fdemo2.themelexus.com%2Fliquory%2Fhome-4%2F"/>
    <meta name="generator" content="Elementor 3.15.2; features: e_dom_optimization, e_optimized_assets_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto"/>
    <meta name="generator" content="Powered by Slider Revolution 6.6.14 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."/>

    <script>
      function setREVStartSize(e) {
        //window.requestAnimationFrame(function() {
        window.RSIW =
          window.RSIW === undefined ? window.innerWidth : window.RSIW;
        window.RSIH =
          window.RSIH === undefined ? window.innerHeight : window.RSIH;
        try {
          var pw = document.getElementById(e.c).parentNode.offsetWidth,
            newh;
          pw =
            pw === 0 ||
            isNaN(pw) ||
            e.l == "fullwidth" ||
            e.layout == "fullwidth"
              ? window.RSIW
              : pw;
          e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
          e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
          e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
          e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
          e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
          e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
          e.mh =
            e.mh === undefined || e.mh == "" || e.mh === "auto"
              ? 0
              : parseInt(e.mh, 0);
          if (e.layout === "fullscreen" || e.l === "fullscreen")
            newh = Math.max(e.mh, window.RSIH);
          else {
            e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
            for (var i in e.rl)
              if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
            e.gh =
              e.el === undefined ||
              e.el === "" ||
              (Array.isArray(e.el) && e.el.length == 0)
                ? e.gh
                : e.el;
            e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
            for (var i in e.rl)
              if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

            var nl = new Array(e.rl.length),
              ix = 0,
              sl;
            e.tabw = e.tabhide >= pw ? 0 : e.tabw;
            e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
            e.tabh = e.tabhide >= pw ? 0 : e.tabh;
            e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
            for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
            sl = nl[0];
            for (var i in nl)
              if (sl > nl[i] && nl[i] > 0) {
                sl = nl[i];
                ix = i;
              }
            var m =
              pw > e.gw[ix] + e.tabw + e.thumbw
                ? 1
                : (pw - (e.tabw + e.thumbw)) / e.gw[ix];
            newh = e.gh[ix] * m + (e.tabh + e.thumbh);
          }
          var el = document.getElementById(e.c);
          if (el !== null && el) el.style.height = newh + "px";
          el = document.getElementById(e.c + "_wrapper");
          if (el !== null && el) {
            el.style.height = newh + "px";
            el.style.display = "block";
          }
        } catch (e) {
          console.log("Failure at Presize of Slider:" + e);
        }
        //});
      }
    </script>
</head>
<body class="page-template page-template-template-homepage page-template-template-homepage-php page page-id-22 wp-custom-logo wp-embed-responsive theme-liquory woocommerce-no-js ehf-header ehf-footer ehf-template-liquory ehf-stylesheet-demo-child woo-variation-swatches wvs-behavior-blur wvs-theme-demo-child wvs-show-label wvs-tooltip chrome woocommerce-active product-block-style-1 elementor-default elementor-kit-6 elementor-page elementor-page-22">

    <div id="page" class="hfeed site">
        <header id="masthead">
            <p class="main-title bhf-hidden" itemprop="headline">
                <a href="https://demo2.themelexus.com/liquory" title="Liquory" rel="home">Liquory</a>
            </p>
            <div class="elementor elementor-149">
                <div class="elementor-section elementor-top-section elementor-element elementor-element-23568fa elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="23568fa" data-element_type="section" data-settings='{"stretch_section":"section-stretched"}'>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-fa02816" data-id="fa02816" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-6c910b6 elementor-widget__width-auto elementor-widget elementor-widget-site-logo" data-id="6c910b6" data-element_type="widget" data-widget_type="site-logo.default">
                                    <div class="elementor-widget-container">
                                        <div class="hfe-site-logo">
                                            <a data-elementor-open-lightbox class="elementor-clickable" href="https://demo2.themelexus.com/liquory">
                                                <div class="hfe-site-logo-set">
                                                    <div class="hfe-site-logo-container">
                                                        <noscript>
                                                            <img class="hfe-site-logo-img elementor-animation-" src="{{ asset('web/wp-content/uploads/2022/07/logo.svg')}}" alt="" />
                                                        </noscript>
                                                        <img class="lazyload hfe-site-logo-img elementor-animation-" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E" data-src="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/logo.svg" alt/>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-33d07f4" data-id="33d07f4" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                            class="elementor-element elementor-element-55c3201 elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile elementor-widget elementor-widget-liquory-search"
                            data-id="55c3201"
                            data-element_type="widget"
                            data-widget_type="liquory-search.default"
                        >
                            <div class="elementor-widget-container">
                            <div class="site-search ajax-search">
                                <div class="widget woocommerce widget_product_search">
                                <div class="ajax-search-result d-none"></div>
                                <form
                                    role="search"
                                    method="get"
                                    class="woocommerce-product-search"
                                    action="https://demo2.themelexus.com/liquory/"
                                >
                                    <label
                                    class="screen-reader-text"
                                    for="woocommerce-product-search-field-1"
                                    >Search for:</label
                                    >
                                    <input
                                    type="search"
                                    id="woocommerce-product-search-field-1"
                                    class="search-field"
                                    placeholder="Search products&hellip;"
                                    autocomplete="off"
                                    value
                                    name="s"
                                    />
                                    <button type="submit" value="Search">Search</button>
                                    <input
                                    type="hidden"
                                    name="post_type"
                                    value="product"
                                    />
                                    <div class="search-by-category input-dropdown">
                                    <div
                                        class="input-dropdown-inner liquory-scroll-content"
                                    >
                                        <a href="#" data-val="0"
                                        ><span>All category</span></a
                                        >
                                        <select
                                        name="product_cat"
                                        id="product_cat0"
                                        class="dropdown_product_cat_ajax"
                                        >
                                        <option value selected="selected">
                                            All category
                                        </option>
                                        <option class="level-0" value="accessories">
                                            Accessories
                                        </option>
                                        <option class="level-0" value="beer">
                                            Beer
                                        </option>
                                        <option class="level-0" value="cocktail">
                                            Cocktail
                                        </option>
                                        <option class="level-0" value="cognac">
                                            Cognac
                                        </option>
                                        <option class="level-0" value="deals">
                                            Deals
                                        </option>
                                        <option class="level-0" value="others-drinks">
                                            Others Drinks
                                        </option>
                                        <option class="level-0" value="spirits">
                                            Spirits
                                        </option>
                                        <option class="level-0" value="tequila">
                                            Tequila
                                        </option>
                                        <option class="level-0" value="uncategorized">
                                            Uncategorized
                                        </option>
                                        <option class="level-0" value="whiskey">
                                            Whiskey
                                        </option>
                                        <option class="level-0" value="wine">
                                            Wine
                                        </option>
                                        </select>
                                        <div class="list-wrapper liquory-scroll">
                                        <ul class="liquory-scroll-content">
                                            <li class="d-none">
                                            <a href="#" data-val="0">All category</a>
                                            </li>
                                            <li class="cat-item cat-item-46">
                                            <a
                                                class="pf-value"
                                                href="product-category/accessories/index.html"
                                                data-val="accessories"
                                                data-title="Accessories"
                                                >Accessories</a
                                            >
                                            </li>
                                            <li class="cat-item cat-item-40">
                                            <a
                                                class="pf-value"
                                                href="product-category/beer/index.html"
                                                data-val="beer"
                                                data-title="Beer"
                                                >Beer</a
                                            >
                                            </li>
                                            <li class="cat-item cat-item-43">
                                            <a
                                                class="pf-value"
                                                href="product-category/cocktail/index.html"
                                                data-val="cocktail"
                                                data-title="Cocktail"
                                                >Cocktail</a
                                            >
                                            </li>
                                            <li class="cat-item cat-item-42">
                                            <a
                                                class="pf-value"
                                                href="product-category/cognac/index.html"
                                                data-val="cognac"
                                                data-title="Cognac"
                                                >Cognac</a
                                            >
                                            </li>
                                            <li class="cat-item cat-item-113">
                                            <a
                                                class="pf-value"
                                                href="product-category/deals/index.html"
                                                data-val="deals"
                                                data-title="Deals"
                                                >Deals</a
                                            >
                                            </li>
                                            <li class="cat-item cat-item-47">
                                            <a
                                                class="pf-value"
                                                href="product-category/others-drinks/index.html"
                                                data-val="others-drinks"
                                                data-title="Others Drinks"
                                                >Others Drinks</a
                                            >
                                            </li>
                                            <li class="cat-item cat-item-45">
                                            <a
                                                class="pf-value"
                                                href="product-category/spirits/index.html"
                                                data-val="spirits"
                                                data-title="Spirits"
                                                >Spirits</a
                                            >
                                            </li>
                                            <li class="cat-item cat-item-44">
                                            <a
                                                class="pf-value"
                                                href="product-category/tequila/index.html"
                                                data-val="tequila"
                                                data-title="Tequila"
                                                >Tequila</a
                                            >
                                            </li>
                                            <li class="cat-item cat-item-15">
                                            <a
                                                class="pf-value"
                                                href="product-category/uncategorized/index.html"
                                                data-val="uncategorized"
                                                data-title="Uncategorized"
                                                >Uncategorized</a
                                            >
                                            </li>
                                            <li class="cat-item cat-item-41">
                                            <a
                                                class="pf-value"
                                                href="product-category/whiskey/index.html"
                                                data-val="whiskey"
                                                data-title="Whiskey"
                                                >Whiskey</a
                                            >
                                            </li>
                                            <li class="cat-item cat-item-39">
                                            <a
                                                class="pf-value"
                                                href="product-category/wine/index.html"
                                                data-val="wine"
                                                data-title="Wine"
                                                >Wine</a
                                            >
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-e9975d1 elementor-widget__width-auto elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra liquory-canvas-menu-layout-2 elementor-widget elementor-widget-liquory-menu-canvas"
                            data-id="e9975d1"
                            data-element_type="widget"
                            data-widget_type="liquory-menu-canvas.default"
                        >
                            <div class="elementor-widget-container">
                            <div class="elementor-canvas-menu-wrapper">
                                <a href="#" class="menu-mobile-nav-button">
                                <span class="toggle-text screen-reader-text"
                                    >Menu</span
                                >
                                <div class="liquory-icon">
                                    <span class="icon-1"></span>
                                    <span class="icon-2"></span>
                                    <span class="icon-3"></span>
                                </div>
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div
                        class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-cd8fc4e elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile"
                        data-id="cd8fc4e"
                        data-element_type="column"
                    >
                        <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                            class="elementor-element elementor-element-aa19951 elementor-widget__width-auto elementor-widget elementor-widget-liquory-account"
                            data-id="aa19951"
                            data-element_type="widget"
                            data-widget_type="liquory-account.default"
                        >
                            <div class="elementor-widget-container">
                            <div class="elementor-header-account">
                                <div class="header-group-action">
                                <div class="site-header-account">
                                    <a href="my-account/index.html"
                                    ><div class="icon"></div>
                                    <div class="account-content">
                                        <span class="content-content"
                                        >Sign In or Register</span
                                        >
                                    </div>
                                    </a>
                                    <div class="account-dropdown"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-6a2e6e1 elementor-widget__width-auto elementor-widget elementor-widget-liquory-header-group"
                            data-id="6a2e6e1"
                            data-element_type="widget"
                            data-widget_type="liquory-header-group.default"
                        >
                            <div class="elementor-widget-container">
                            <div class="elementor-header-group-wrapper">
                                <div class="header-group-action">
                                <div class="site-header-wishlist">
                                    <a
                                    class="header-wishlist"
                                    href="wishlist/WOOSW/index.html"
                                    >
                                    <i class="liquory-icon-wishlist"></i>
                                    <span class="count">4</span>
                                    </a>
                                </div>
                                <div class="site-header-cart menu">
                                    <a
                                    class="cart-contents"
                                    href="cart/index.html"
                                    title="View your shopping cart"
                                    >
                                    <span class="count">0</span>
                                    <span class="woocommerce-Price-amount amount"
                                        ><bdi
                                        ><span
                                            class="woocommerce-Price-currencySymbol"
                                            >&#36;</span
                                        >0.00</bdi
                                        ></span
                                    >
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div
                    class="elementor-section elementor-top-section elementor-element elementor-element-69c6f21 elementor-section-content-middle elementor-section-stretched elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="69c6f21"
                    data-element_type="section"
                    data-settings='{"stretch_section":"section-stretched"}'
                >
                    <div class="elementor-container elementor-column-gap-no">
                    <div
                        class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-1430dd9"
                        data-id="1430dd9"
                        data-element_type="column"
                    >
                        <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                            class="elementor-element elementor-element-f0b1a9d nav-vertiacl-menu-layout-content-style-1 vertical-style-1 elementor-widget elementor-widget-liquory-vertical-menu"
                            data-id="f0b1a9d"
                            data-element_type="widget"
                            data-widget_type="liquory-vertical-menu.default"
                        >
                            <div class="elementor-widget-container">
                            <div class="elementor-nav-vertical-menu-wrapper">
                                <nav
                                class="vertical-navigation"
                                aria-label="Vertiacl Navigation"
                                >
                                <div class="vertical-navigation-header">
                                    <div class="vertical-navigation-title">
                                    <div class="title-icon">
                                        <span class="icon-1"></span>
                                        <span class="icon-2"></span>
                                        <span class="icon-1"></span>
                                    </div>
                                    <div class="title">Shop By Department</div>
                                    </div>
                                    <div class="liquory-icon"></div>
                                </div>
                                <div class="vertical-menu">
                                    <ul id="menu-1-f0b1a9d" class="menu">
                                    <li
                                        id="menu-item-791"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-791 has-mega-menu"
                                    >
                                        <a href="#"
                                        ><i class="menu-icon liquory-icon-wine"></i
                                        ><span class="menu-title">Wine</span></a
                                        >
                                        <ul
                                        class="sub-menu mega-menu custom-subwidth"
                                        style="width: 990px"
                                        >
                                        <li class="mega-menu-item">
                                            <div
                                            data-elementor-type="page"
                                            data-elementor-id="874"
                                            class="elementor elementor-874"
                                            >
                                            <div
                                                class="elementor-section elementor-top-section elementor-element elementor-element-43414d0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="43414d0"
                                                data-element_type="section"
                                            >
                                                <div
                                                class="elementor-container elementor-column-gap-no"
                                                >
                                                <div
                                                    class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-eab0fd8"
                                                    data-id="eab0fd8"
                                                    data-element_type="column"
                                                >
                                                    <div
                                                    class="elementor-widget-wrap elementor-element-populated"
                                                    >
                                                    <div
                                                        class="elementor-element elementor-element-0881a98 elementor-widget elementor-widget-heading"
                                                        data-id="0881a98"
                                                        data-element_type="widget"
                                                        data-widget_type="heading.default"
                                                    >
                                                        <div
                                                        class="elementor-widget-container"
                                                        >
                                                        <h2
                                                            class="elementor-heading-title elementor-size-default"
                                                        >
                                                            Red wine
                                                        </h2>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-522178e hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                        data-id="522178e"
                                                        data-element_type="widget"
                                                        data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":1,"sizes":[]},"menu_space_between":{"unit":"px","size":10,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                        data-widget_type="navigation-menu.default"
                                                    >
                                                        <div
                                                        class="elementor-widget-container"
                                                        >
                                                        <div
                                                            class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                            data-layout="vertical"
                                                        >
                                                            <div
                                                            role="button"
                                                            class="hfe-nav-menu__toggle elementor-clickable"
                                                            >
                                                            <span
                                                                class="screen-reader-text"
                                                                >Menu</span
                                                            >
                                                            <div
                                                                class="hfe-nav-menu-icon"
                                                            ></div>
                                                            </div>
                                                            <nav
                                                            class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                            data-toggle-icon
                                                            data-close-icon
                                                            data-full-width
                                                            >
                                                            <ul
                                                                id="menu-1-522178e"
                                                                class="hfe-nav-menu"
                                                            >
                                                                <li
                                                                id="menu-item-2170"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/incredible-leather-keyboard/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Shiraz</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2171"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/incredible-granite-chair/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Cabernet
                                                                    Sauvignon</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2172"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/ergonomic-copper-shirt/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Pinot Noir</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2173"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/small-linen-pants/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Red Blends</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2174"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/heavy-duty-concrete-car/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Other Red
                                                                    Varietals</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2175"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/fantastic-leather-bench/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Rosé</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2176"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/incredible-wool-bench/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Cabernet Merlot</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2177"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/lightweight-leather-clock/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Shiraz Cabernet</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2178"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/lightweight-concrete-clock/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Merlot</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2179"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/ergonomic-wool-coat/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Grenache</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2183"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/durable-steel-pants/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Tempranillo</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2184"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/aerodynamic-linen-bench/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Sangiovese</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2185"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/enormous-iron-gloves/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Nebbiolo</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2186"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/sleek-rubber-plate/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Bordeaux</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2187"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/fantastic-steel-shirt/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Barossa Valley</a
                                                                >
                                                                </li>
                                                            </ul>
                                                            </nav>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-716365b"
                                                    data-id="716365b"
                                                    data-element_type="column"
                                                >
                                                    <div
                                                    class="elementor-widget-wrap elementor-element-populated"
                                                    >
                                                    <div
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-4884da1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="4884da1"
                                                        data-element_type="section"
                                                    >
                                                        <div
                                                        class="elementor-container elementor-column-gap-no"
                                                        >
                                                        <div
                                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c581775"
                                                            data-id="c581775"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-a29382a elementor-widget elementor-widget-heading"
                                                                data-id="a29382a"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default"
                                                                >
                                                                    white Wine
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-1d192cd hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="1d192cd"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":1,"sizes":[]},"menu_space_between":{"unit":"px","size":10,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-1d192cd"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-2251"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-granite-chair/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Chardonnay</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2252"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-leather-keyboard/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Riesling</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2253"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-cotton-computer/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Sauvignon
                                                                            blanc</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2254"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-cotton-watch/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Pinot gris
                                                                            grigio</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2255"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/rustic-steel-computer/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Other white
                                                                            varietals</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2256"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/enormous-silk-bottle/index.html"
                                                                            class="hfe-menu-item"
                                                                            >White
                                                                            blends</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2257"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/mediocre-granite-watch/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Dessert
                                                                            white</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4ac3c7b"
                                                            data-id="4ac3c7b"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-7dde44c elementor-widget elementor-widget-heading"
                                                                data-id="7dde44c"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default"
                                                                >
                                                                    Popular Regions
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-5c85b19 hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="5c85b19"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":1,"sizes":[]},"menu_space_between":{"unit":"px","size":10,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-5c85b19"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-2264"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/fantastic-leather-bench/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Bordeaux</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2265"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/heavy-duty-concrete-car/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Barossa
                                                                            Valley</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2266"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-linen-pants/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Mclaren
                                                                            Vale</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2267"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-cotton-computer/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Coonawarra</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2268"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-leather-keyboard/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Margaret
                                                                            River</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2269"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-linen-pants/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Burgundy</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2270"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-cotton-watch/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Clare
                                                                            Valley</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-506ca3f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="506ca3f"
                                                        data-element_type="section"
                                                    >
                                                        <div
                                                        class="elementor-container elementor-column-gap-no"
                                                        >
                                                        <div
                                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f8a5013"
                                                            data-id="f8a5013"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-4c0d31c elementor-widget elementor-widget-heading"
                                                                data-id="4c0d31c"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default"
                                                                >
                                                                    Fortified Wine
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-9d533fd hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="9d533fd"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":1,"sizes":[]},"menu_space_between":{"unit":"px","size":10,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-9d533fd"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-2258"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-wool-bench/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Port
                                                                            Tawny</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2259"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/fantastic-leather-bench/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Sherry
                                                                            Apera</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2260"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/heavy-duty-concrete-car/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Vermouth</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2261"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-granite-chair/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Muscat</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2262"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/ergonomic-copper-shirt/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Mead</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2263"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-linen-pants/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Tokay
                                                                            Topaque</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7108698"
                                                            data-id="7108698"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-38096c3 elementor-widget elementor-widget-heading"
                                                                data-id="38096c3"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default"
                                                                >
                                                                    Popular Brands
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-b9edf66 hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="b9edf66"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":1,"sizes":[]},"menu_space_between":{"unit":"px","size":10,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-b9edf66"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-2271"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-linen-pants/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Penfolds</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2272"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/fantastic-leather-bench/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Under
                                                                            Wraps</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2273"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-leather-keyboard/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Wynns</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2274"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/ergonomic-copper-shirt/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Wendouree</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2275"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-leather-keyboard/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Wolf
                                                                            Blass</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2276"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-linen-pants/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Tyrrell&#8217;s</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-84930a3"
                                                    data-id="84930a3"
                                                    data-element_type="column"
                                                >
                                                    <div
                                                    class="elementor-widget-wrap elementor-element-populated"
                                                    >
                                                    <div
                                                        class="elementor-element elementor-element-313c418 elementor-widget elementor-widget-heading"
                                                        data-id="313c418"
                                                        data-element_type="widget"
                                                        data-widget_type="heading.default"
                                                    >
                                                        <div
                                                        class="elementor-widget-container"
                                                        >
                                                        <h2
                                                            class="elementor-heading-title elementor-size-default"
                                                        >
                                                            Top Selling
                                                        </h2>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-f425c5b arrow-style-1 elementor-widget elementor-widget-liquory-products"
                                                        data-id="f425c5b"
                                                        data-element_type="widget"
                                                        data-widget_type="liquory-products.default"
                                                    >
                                                        <div
                                                        class="elementor-widget-container"
                                                        >
                                                        <div
                                                            class="woocommerce columns-1 woocommerce-product-list-2 columns-tablet-2 columns-mobile-1"
                                                        >
                                                            <div
                                                            class="liquory-products-spacing"
                                                            >
                                                            <ul
                                                                class="liquory-products products columns-1"
                                                            >
                                                                <li
                                                                class="product type-product post-269 status-publish first instock product_cat-cognac product_cat-wine product_tag-liqueur product_tag-rum has-post-thumbnail featured shipping-taxable purchasable product-type-variable"
                                                                >
                                                                <div
                                                                    class="product-block-list"
                                                                >
                                                                    <div class="left">
                                                                    <a
                                                                        href="shop/enormous-silk-bottle/index.html"
                                                                        class="menu-thumb"
                                                                    >
                                                                        <noscript
                                                                        ><img
                                                                            width="460"
                                                                            height="460"
                                                                            src="wp-content/uploads/2022/07/product-2-1-460x460.jpg"
                                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                            alt="" /></noscript
                                                                        ><img
                                                                        width="460"
                                                                        height="460"
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20460%20460%22%3E%3C/svg%3E"
                                                                        data-src="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/product-2-1-460x460.jpg"
                                                                        class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                        alt
                                                                        />
                                                                    </a>
                                                                    </div>
                                                                    <div class="right">
                                                                    <h3
                                                                        class="woocommerce-loop-product__title"
                                                                    >
                                                                        <a
                                                                        href="shop/enormous-silk-bottle/index.html"
                                                                        >Enormous Silk
                                                                        Bottle</a
                                                                        >
                                                                    </h3>
                                                                    <div
                                                                        class="count-review"
                                                                    >
                                                                        <div
                                                                        class="star-rating"
                                                                        role="img"
                                                                        aria-label="Rated 3.75 out of 5"
                                                                        >
                                                                        <span
                                                                            style="
                                                                            width: 75%;
                                                                            "
                                                                            >Rated
                                                                            <strong
                                                                            class="rating"
                                                                            >3.75</strong
                                                                            >
                                                                            out of
                                                                            5</span
                                                                        >
                                                                        </div>
                                                                        <span></span>
                                                                    </div>
                                                                    <span
                                                                        class="price"
                                                                        ><span
                                                                        class="woocommerce-Price-amount amount"
                                                                        ><bdi
                                                                            ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                            >78.90</bdi
                                                                        ></span
                                                                        >
                                                                        &ndash;
                                                                        <span
                                                                        class="woocommerce-Price-amount amount"
                                                                        ><bdi
                                                                            ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                            >102.65</bdi
                                                                        ></span
                                                                        ></span
                                                                    >
                                                                    <span
                                                                        class="inventory_status"
                                                                        ><span
                                                                        class="stock-title screen-reader-text"
                                                                        >Availability:</span
                                                                        >
                                                                        In Stock</span
                                                                    >
                                                                    </div>
                                                                </div>
                                                                </li>
                                                                <li
                                                                class="product type-product post-264 status-publish first instock product_cat-spirits product_cat-wine product_tag-beverages product_tag-whiskey has-post-thumbnail sale featured shipping-taxable purchasable product-type-simple"
                                                                >
                                                                <div
                                                                    class="product-block-list"
                                                                >
                                                                    <div class="left">
                                                                    <div
                                                                        class="label-wrapper"
                                                                    >
                                                                        <span
                                                                        class="onsale"
                                                                        >-26%</span
                                                                        >
                                                                    </div>
                                                                    <a
                                                                        href="shop/mediocre-granite-watch/index.html"
                                                                        class="menu-thumb"
                                                                    >
                                                                        <noscript
                                                                        ><img
                                                                            width="460"
                                                                            height="460"
                                                                            src="wp-content/uploads/2022/07/product-1-1-460x460.jpg"
                                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                            alt="" /></noscript
                                                                        ><img
                                                                        width="460"
                                                                        height="460"
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20460%20460%22%3E%3C/svg%3E"
                                                                        data-src="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/product-1-1-460x460.jpg"
                                                                        class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                        alt
                                                                        />
                                                                    </a>
                                                                    </div>
                                                                    <div class="right">
                                                                    <h3
                                                                        class="woocommerce-loop-product__title"
                                                                    >
                                                                        <a
                                                                        href="shop/mediocre-granite-watch/index.html"
                                                                        >Mediocre
                                                                        Granite
                                                                        Watch</a
                                                                        >
                                                                    </h3>
                                                                    <div
                                                                        class="count-review"
                                                                    >
                                                                        <div
                                                                        class="star-rating"
                                                                        role="img"
                                                                        aria-label="Rated 3.50 out of 5"
                                                                        >
                                                                        <span
                                                                            style="
                                                                            width: 70%;
                                                                            "
                                                                            >Rated
                                                                            <strong
                                                                            class="rating"
                                                                            >3.50</strong
                                                                            >
                                                                            out of
                                                                            5</span
                                                                        >
                                                                        </div>
                                                                        <span></span>
                                                                    </div>
                                                                    <span
                                                                        class="price"
                                                                        ><del
                                                                        aria-hidden="true"
                                                                        ><span
                                                                            class="woocommerce-Price-amount amount"
                                                                            ><bdi
                                                                            ><span
                                                                                class="woocommerce-Price-currencySymbol"
                                                                                >&#36;</span
                                                                            >500.63</bdi
                                                                            ></span
                                                                        ></del
                                                                        >
                                                                        <ins
                                                                        ><span
                                                                            class="woocommerce-Price-amount amount"
                                                                            ><bdi
                                                                            ><span
                                                                                class="woocommerce-Price-currencySymbol"
                                                                                >&#36;</span
                                                                            >370.00</bdi
                                                                            ></span
                                                                        ></ins
                                                                        ></span
                                                                    >
                                                                    <span
                                                                        class="inventory_status"
                                                                        ><span
                                                                        class="stock-title screen-reader-text"
                                                                        >Availability:</span
                                                                        >
                                                                        In Stock</span
                                                                    >
                                                                    </div>
                                                                </div>
                                                                </li>
                                                                <li
                                                                class="product type-product post-274 status-publish first instock product_cat-whiskey product_cat-wine product_tag-beverages product_tag-tequila has-post-thumbnail sale featured virtual purchasable product-type-simple"
                                                                >
                                                                <div
                                                                    class="product-block-list"
                                                                >
                                                                    <div class="left">
                                                                    <div
                                                                        class="label-wrapper"
                                                                    >
                                                                        <span
                                                                        class="onsale"
                                                                        >-7%</span
                                                                        >
                                                                    </div>
                                                                    <a
                                                                        href="shop/rustic-steel-computer/index.html"
                                                                        class="menu-thumb"
                                                                    >
                                                                        <noscript
                                                                        ><img
                                                                            width="460"
                                                                            height="460"
                                                                            src="wp-content/uploads/2022/07/product-3-1-460x460.jpg"
                                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                            alt="" /></noscript
                                                                        ><img
                                                                        width="460"
                                                                        height="460"
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20460%20460%22%3E%3C/svg%3E"
                                                                        data-src="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/product-3-1-460x460.jpg"
                                                                        class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                        alt
                                                                        />
                                                                    </a>
                                                                    </div>
                                                                    <div class="right">
                                                                    <h3
                                                                        class="woocommerce-loop-product__title"
                                                                    >
                                                                        <a
                                                                        href="shop/rustic-steel-computer/index.html"
                                                                        >Rustic Steel
                                                                        Computer</a
                                                                        >
                                                                    </h3>
                                                                    <div
                                                                        class="count-review"
                                                                    >
                                                                        <div
                                                                        class="star-rating"
                                                                        role="img"
                                                                        aria-label="Rated 4.00 out of 5"
                                                                        >
                                                                        <span
                                                                            style="
                                                                            width: 80%;
                                                                            "
                                                                            >Rated
                                                                            <strong
                                                                            class="rating"
                                                                            >4.00</strong
                                                                            >
                                                                            out of
                                                                            5</span
                                                                        >
                                                                        </div>
                                                                        <span></span>
                                                                    </div>
                                                                    <span
                                                                        class="price"
                                                                        ><del
                                                                        aria-hidden="true"
                                                                        ><span
                                                                            class="woocommerce-Price-amount amount"
                                                                            ><bdi
                                                                            ><span
                                                                                class="woocommerce-Price-currencySymbol"
                                                                                >&#36;</span
                                                                            >75.95</bdi
                                                                            ></span
                                                                        ></del
                                                                        >
                                                                        <ins
                                                                        ><span
                                                                            class="woocommerce-Price-amount amount"
                                                                            ><bdi
                                                                            ><span
                                                                                class="woocommerce-Price-currencySymbol"
                                                                                >&#36;</span
                                                                            >70.65</bdi
                                                                            ></span
                                                                        ></ins
                                                                        ></span
                                                                    >
                                                                    <span
                                                                        class="inventory_status"
                                                                        ><span
                                                                        class="stock-title screen-reader-text"
                                                                        >Availability:</span
                                                                        >
                                                                        In Stock</span
                                                                    >
                                                                    </div>
                                                                </div>
                                                                </li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </li>
                                        </ul>
                                    </li>
                                    <li
                                        id="menu-item-792"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-792 has-mega-menu"
                                    >
                                        <a href="#"
                                        ><i class="menu-icon liquory-icon-beer"></i
                                        ><span class="menu-title">Beer</span></a
                                        >
                                        <ul
                                        class="sub-menu mega-menu custom-subwidth"
                                        style="width: 990px"
                                        >
                                        <li class="mega-menu-item">
                                            <div
                                            data-elementor-type="page"
                                            data-elementor-id="2705"
                                            class="elementor elementor-2705"
                                            >
                                            <div
                                                class="elementor-section elementor-top-section elementor-element elementor-element-c1c7efd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="c1c7efd"
                                                data-element_type="section"
                                            >
                                                <div
                                                class="elementor-container elementor-column-gap-no"
                                                >
                                                <div
                                                    class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6e15c51"
                                                    data-id="6e15c51"
                                                    data-element_type="column"
                                                >
                                                    <div
                                                    class="elementor-widget-wrap elementor-element-populated"
                                                    >
                                                    <div
                                                        class="elementor-element elementor-element-0e16c34 elementor-widget elementor-widget-heading"
                                                        data-id="0e16c34"
                                                        data-element_type="widget"
                                                        data-widget_type="heading.default"
                                                    >
                                                        <div
                                                        class="elementor-widget-container"
                                                        >
                                                        <h2
                                                            class="elementor-heading-title elementor-size-default"
                                                        >
                                                            Discover Beer
                                                        </h2>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-92dd39e hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                        data-id="92dd39e"
                                                        data-element_type="widget"
                                                        data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":1,"sizes":[]},"menu_space_between":{"unit":"px","size":10,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                        data-widget_type="navigation-menu.default"
                                                    >
                                                        <div
                                                        class="elementor-widget-container"
                                                        >
                                                        <div
                                                            class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                            data-layout="vertical"
                                                        >
                                                            <div
                                                            role="button"
                                                            class="hfe-nav-menu__toggle elementor-clickable"
                                                            >
                                                            <span
                                                                class="screen-reader-text"
                                                                >Menu</span
                                                            >
                                                            <div
                                                                class="hfe-nav-menu-icon"
                                                            ></div>
                                                            </div>
                                                            <nav
                                                            class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                            data-toggle-icon
                                                            data-close-icon
                                                            data-full-width
                                                            >
                                                            <ul
                                                                id="menu-1-92dd39e"
                                                                class="hfe-nav-menu"
                                                            >
                                                                <li
                                                                id="menu-item-2590"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/enormous-silk-bottle/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Craft Beer</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2591"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/enormous-iron-gloves/index.html"
                                                                    class="hfe-menu-item"
                                                                    >International
                                                                    Beer</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2595"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/incredible-wool-bench/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Australian Beer</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2596"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/small-linen-pants/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Mid Strength</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2597"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/incredible-granite-chair/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Light Beer</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2598"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/fantastic-steel-shirt/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Low Carb Beer</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2605"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/incredible-leather-keyboard/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Alcoholic Ginger</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2606"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/sleek-rubber-plate/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Beer</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2607"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/small-linen-pants/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Home Brew</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2611"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/aerodynamic-linen-bench/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Stout</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2616"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/incredible-wool-bench/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Pilsner</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2617"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/incredible-granite-chair/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Wheat Beer</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2627"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/sleek-rubber-plate/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Dark Beer</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2628"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/incredible-granite-chair/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Golden Ale</a
                                                                >
                                                                </li>
                                                                <li
                                                                id="menu-item-2629"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                >
                                                                <a
                                                                    href="shop/fantastic-steel-shirt/index.html"
                                                                    class="hfe-menu-item"
                                                                    >Porter</a
                                                                >
                                                                </li>
                                                            </ul>
                                                            </nav>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7b59dbc"
                                                    data-id="7b59dbc"
                                                    data-element_type="column"
                                                >
                                                    <div
                                                    class="elementor-widget-wrap elementor-element-populated"
                                                    >
                                                    <div
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-a5b9309 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="a5b9309"
                                                        data-element_type="section"
                                                    >
                                                        <div
                                                        class="elementor-container elementor-column-gap-no"
                                                        >
                                                        <div
                                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bd24e8c"
                                                            data-id="bd24e8c"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-1219cc1 elementor-widget elementor-widget-heading"
                                                                data-id="1219cc1"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default"
                                                                >
                                                                    Categories
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-ac846c0 hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="ac846c0"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":1,"sizes":[]},"menu_space_between":{"unit":"px","size":10,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-ac846c0"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-2637"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/sleek-rubber-plate/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Kegs</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2638"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-leather-keyboard/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Cider</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2639"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-linen-pants/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Craft
                                                                            Beer</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2640"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/enormous-iron-gloves/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Domestic
                                                                            Beer</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2641"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/sleek-rubber-plate/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Hard
                                                                            Seltzers</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2642"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/enormous-silk-bottle/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Import
                                                                            Beer</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2643"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-granite-chair/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Non-Alcoholic
                                                                            Beer</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-83e7a87"
                                                            data-id="83e7a87"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-ed18d58 elementor-widget elementor-widget-heading"
                                                                data-id="ed18d58"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default"
                                                                >
                                                                    Popular Brands
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-8561efd hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="8561efd"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":1,"sizes":[]},"menu_space_between":{"unit":"px","size":10,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-8561efd"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-2653"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-granite-chair/index.html"
                                                                            class="hfe-menu-item"
                                                                            >4 Pines</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2654"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/sleek-rubber-plate/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Balter</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2655"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-leather-keyboard/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Coopers</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2656"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/enormous-iron-gloves/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Little</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2657"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-wool-bench/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Creatures</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2658"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/enormous-silk-bottle/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Stone
                                                                            &#038;
                                                                            Wood</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2659"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/enormous-iron-gloves/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Zytho</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-f25d833 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="f25d833"
                                                        data-element_type="section"
                                                    >
                                                        <div
                                                        class="elementor-container elementor-column-gap-no"
                                                        >
                                                        <div
                                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d64e5f4"
                                                            data-id="d64e5f4"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-12de926 elementor-widget elementor-widget-heading"
                                                                data-id="12de926"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default"
                                                                >
                                                                    New & Trending
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-326631e hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="326631e"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":1,"sizes":[]},"menu_space_between":{"unit":"px","size":10,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-326631e"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-2647"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-wool-bench/index.html"
                                                                            class="hfe-menu-item"
                                                                            >New
                                                                            Arrivals</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2648"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/sleek-rubber-plate/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Top Rated
                                                                            Craft
                                                                            Beer</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2649"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-granite-chair/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Light
                                                                            Low</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2650"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-linen-pants/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Pool
                                                                            Packs</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2651"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-wool-bench/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Cool Off
                                                                            Craft
                                                                            Beer</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2652"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/fantastic-steel-shirt/index.html"
                                                                            class="hfe-menu-item"
                                                                            >The
                                                                            Lemonade
                                                                            Stand</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9459c36"
                                                            data-id="9459c36"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-897a185 elementor-widget elementor-widget-heading"
                                                                data-id="897a185"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default"
                                                                >
                                                                    Country
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-6984fee hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="6984fee"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":1,"sizes":[]},"menu_space_between":{"unit":"px","size":10,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-6984fee"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-2663"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/enormous-iron-gloves/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Australia</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2664"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-leather-keyboard/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Sweden</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2665"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-granite-chair/index.html"
                                                                            class="hfe-menu-item"
                                                                            >New</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2666"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/sleek-rubber-plate/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Zealand</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2667"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-wool-bench/index.html"
                                                                            class="hfe-menu-item"
                                                                            >France</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2668"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-leather-keyboard/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Spain</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7c1b6f3"
                                                    data-id="7c1b6f3"
                                                    data-element_type="column"
                                                >
                                                    <div
                                                    class="elementor-widget-wrap elementor-element-populated"
                                                    >
                                                    <div
                                                        class="elementor-element elementor-element-853b578 box-align-left elementor-cta--valign-top elementor-position-below elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-liquory-banner"
                                                        data-id="853b578"
                                                        data-element_type="widget"
                                                        data-widget_type="liquory-banner.default"
                                                    >
                                                        <div
                                                        class="elementor-widget-container"
                                                        >
                                                        <a
                                                            href="shop/index.html"
                                                            class="elementor-cta--skin-cover elementor-cta elementor-liquory-banner"
                                                            ><div
                                                            class="elementor-cta__bg-wrapper"
                                                            >
                                                            <div
                                                                class="elementor-cta__bg-overlay"
                                                            ></div>
                                                            <div
                                                                class="lazyload elementor-cta__bg elementor-bg"
                                                                data-bg="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/megashop_img-3.jpg"
                                                                style="
                                                                background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);
                                                                "
                                                            ></div>
                                                            </div>
                                                            <div
                                                            class="elementor-cta__content"
                                                            >
                                                            <div
                                                                class="elementor-cta__content_inner"
                                                            >
                                                                <div
                                                                class="elementor-cta__subtitle elementor-cta__content-item elementor-content-item"
                                                                >
                                                                <div>From to</div>
                                                                </div>
                                                                <h3
                                                                class="elementor-cta__title elementor-cta__content-item elementor-content-item"
                                                                >
                                                                Ready to Drink
                                                                </h3>
                                                                <h3
                                                                class="elementor-cta__heading2 elementor-cta__content-item elementor-content-item"
                                                                >
                                                                Organic Wine
                                                                </h3>
                                                                <div
                                                                class="elementor-cta__description elementor-cta__content-item elementor-content-item"
                                                                >
                                                                $69.99
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </li>
                                        </ul>
                                    </li>
                                    <li
                                        id="menu-item-793"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-793 has-mega-menu"
                                    >
                                        <a href="#"
                                        ><i class="menu-icon liquory-icon-whiskey"></i
                                        ><span class="menu-title">Whiskey</span></a
                                        >
                                        <ul
                                        class="sub-menu mega-menu custom-subwidth"
                                        style="width: 990px"
                                        >
                                        <li class="mega-menu-item">
                                            <div
                                            data-elementor-type="page"
                                            data-elementor-id="2783"
                                            class="elementor elementor-2783"
                                            >
                                            <div
                                                class="elementor-section elementor-top-section elementor-element elementor-element-d96b44d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="d96b44d"
                                                data-element_type="section"
                                            >
                                                <div
                                                class="elementor-container elementor-column-gap-no"
                                                >
                                                <div
                                                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7592eca"
                                                    data-id="7592eca"
                                                    data-element_type="column"
                                                >
                                                    <div
                                                    class="elementor-widget-wrap elementor-element-populated"
                                                    >
                                                    <div
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-d00325e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="d00325e"
                                                        data-element_type="section"
                                                    >
                                                        <div
                                                        class="elementor-container elementor-column-gap-no"
                                                        >
                                                        <div
                                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-94646ee"
                                                            data-id="94646ee"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-f872480 elementor-widget elementor-widget-heading"
                                                                data-id="f872480"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default"
                                                                >
                                                                    Discover whiskey
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-49ca046 hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="49ca046"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":1,"sizes":[]},"menu_space_between":{"unit":"px","size":10,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-49ca046"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-2673"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/ergonomic-copper-shirt/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Scotch
                                                                            Whisky</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2674"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/heavy-duty-concrete-car/index.html"
                                                                            class="hfe-menu-item"
                                                                            >American
                                                                            Whiskey</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2675"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-wool-bench/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Japanese
                                                                            Whisky</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2676"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-granite-chair/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Australian
                                                                            Whisky</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2677"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/mediocre-granite-watch/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Irish
                                                                            Whiskey</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2678"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/rustic-steel-computer/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Canadian
                                                                            Whisky</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2679"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-linen-pants/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Indian
                                                                            Whisky</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-231570c"
                                                            data-id="231570c"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-35ed6d4 elementor-widget elementor-widget-heading"
                                                                data-id="35ed6d4"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default"
                                                                >
                                                                    Discover Vodka
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-107217d hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="107217d"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":1,"sizes":[]},"menu_space_between":{"unit":"px","size":10,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-107217d"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-2680"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/mediocre-granite-watch/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Absolut</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2681"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/ergonomic-copper-shirt/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Smirnoff</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2682"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/heavy-duty-concrete-car/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Hunter
                                                                            Distillery</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2683"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-linen-pants/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Stolichnaya</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2684"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/mediocre-granite-watch/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Royal
                                                                            Dragon</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2685"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-cotton-watch/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Crystal
                                                                            Head</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2686"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-linen-pants/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Poliakov</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-42229a9"
                                                            data-id="42229a9"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-2a1984c elementor-widget elementor-widget-heading"
                                                                data-id="2a1984c"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default"
                                                                >
                                                                    Popular Brands
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-8072cbb hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="8072cbb"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":1,"sizes":[]},"menu_space_between":{"unit":"px","size":10,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-8072cbb"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-2687"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/heavy-duty-concrete-car/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Johnnie</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2688"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-wool-bench/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Walker</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2689"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-cotton-watch/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Jack
                                                                            Daniel&#8217;s</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2693"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-granite-chair/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Glenfiddich</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2694"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-wool-bench/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Highland
                                                                            Park</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2695"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-linen-pants/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Glen
                                                                            Moray</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2696"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-wool-bench/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Stone
                                                                            &#038;
                                                                            Wood</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2ebbc53"
                                                            data-id="2ebbc53"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-578d377 elementor-widget elementor-widget-heading"
                                                                data-id="578d377"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default"
                                                                >
                                                                    Fortified Wine
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-275581c hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="275581c"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":1,"sizes":[]},"menu_space_between":{"unit":"px","size":10,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-275581c"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-2697"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-wool-bench/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Whiskey Of
                                                                            The</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2698"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-granite-chair/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Month</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2699"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/small-cotton-watch/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Flavored
                                                                            Whiskey</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2700"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/mediocre-granite-watch/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Blended
                                                                            Scotch</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2701"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/mediocre-granite-watch/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Rye
                                                                            Whiskey</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2702"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/ergonomic-copper-shirt/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Single Malt
                                                                            Scotch</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-2703"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/heavy-duty-concrete-car/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Small Batch
                                                                            Bourbon</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-9e1b610 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="9e1b610"
                                                        data-element_type="section"
                                                    >
                                                        <div
                                                        class="elementor-container elementor-column-gap-no"
                                                        >
                                                        <div
                                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ef0c392"
                                                            data-id="ef0c392"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-fb896ad elementor-position-above box-align-left elementor-cta--valign-top elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-liquory-banner"
                                                                data-id="fb896ad"
                                                                data-element_type="widget"
                                                                data-widget_type="liquory-banner.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <a
                                                                    href="shop/index.html"
                                                                    class="elementor-cta--skin-cover elementor-cta elementor-liquory-banner"
                                                                    ><div
                                                                    class="elementor-cta__bg-wrapper"
                                                                    >
                                                                    <div
                                                                        class="elementor-cta__bg-overlay"
                                                                    ></div>
                                                                    <div
                                                                        class="lazyload elementor-cta__bg elementor-bg"
                                                                        data-bg="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/megashop_img-5.jpg"
                                                                        style="
                                                                        background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);
                                                                        "
                                                                    ></div>
                                                                    </div>
                                                                    <div
                                                                    class="elementor-cta__content"
                                                                    >
                                                                    <div
                                                                        class="elementor-cta__content_inner"
                                                                    >
                                                                        <div
                                                                        class="elementor-cta__subtitle elementor-cta__content-item elementor-content-item"
                                                                        >
                                                                        <div>
                                                                            Hot deals of
                                                                            summer
                                                                        </div>
                                                                        </div>
                                                                        <h3
                                                                        class="elementor-cta__title elementor-cta__content-item elementor-content-item"
                                                                        >
                                                                        Fresh Beer
                                                                        </h3>
                                                                        <h3
                                                                        class="elementor-cta__heading2 elementor-cta__content-item elementor-content-item"
                                                                        >
                                                                        Save up
                                                                        </h3>
                                                                        <div
                                                                        class="elementor-cta__description elementor-cta__content-item elementor-content-item"
                                                                        >
                                                                        $49.99
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </a>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-523e824"
                                                            data-id="523e824"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-857df78 elementor-position-above box-align-left elementor-cta--valign-top elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-liquory-banner"
                                                                data-id="857df78"
                                                                data-element_type="widget"
                                                                data-widget_type="liquory-banner.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <a
                                                                    href="shop/index.html"
                                                                    class="elementor-cta--skin-cover elementor-cta elementor-liquory-banner"
                                                                    ><div
                                                                    class="elementor-cta__bg-wrapper"
                                                                    >
                                                                    <div
                                                                        class="elementor-cta__bg-overlay"
                                                                    ></div>
                                                                    <div
                                                                        class="lazyload elementor-cta__bg elementor-bg"
                                                                        data-bg="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/megashop_img-4.jpg"
                                                                        style="
                                                                        background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);
                                                                        "
                                                                    ></div>
                                                                    </div>
                                                                    <div
                                                                    class="elementor-cta__content"
                                                                    >
                                                                    <div
                                                                        class="elementor-cta__content_inner"
                                                                    >
                                                                        <h3
                                                                        class="elementor-cta__title elementor-cta__content-item elementor-content-item"
                                                                        >
                                                                        Jameson
                                                                        </h3>
                                                                        <h3
                                                                        class="elementor-cta__heading2 elementor-cta__content-item elementor-content-item"
                                                                        >
                                                                        Whiskey
                                                                        </h3>
                                                                        <div
                                                                        class="elementor-cta__description elementor-cta__content-item elementor-content-item"
                                                                        >
                                                                        Father’s Day
                                                                        Sale
                                                                        <span
                                                                            style="
                                                                            color: var(
                                                                                --e-global-color-primary
                                                                            );
                                                                            "
                                                                            >40%
                                                                        </span>
                                                                        off Sitewide! 
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </a>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </li>
                                        </ul>
                                    </li>
                                    <li
                                        id="menu-item-794"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-794"
                                    >
                                        <a href="shop/durable-steel-pants/index.html"
                                        ><i class="menu-icon liquory-icon-cogac"></i
                                        ><span class="menu-title">Cogac</span></a
                                        >
                                    </li>
                                    <li
                                        id="menu-item-795"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-795"
                                    >
                                        <a href="shop/ergonomic-copper-shirt/index.html"
                                        ><i
                                            class="menu-icon liquory-icon-cocktail"
                                        ></i
                                        ><span class="menu-title">Cocktail</span></a
                                        >
                                    </li>
                                    <li
                                        id="menu-item-796"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-796"
                                    >
                                        <a href="shop/fantastic-steel-shirt/index.html"
                                        ><i class="menu-icon liquory-icon-tequila"></i
                                        ><span class="menu-title">Tequila</span></a
                                        >
                                    </li>
                                    <li
                                        id="menu-item-797"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-797"
                                    >
                                        <a
                                        href="shop/lightweight-leather-clock/index.html"
                                        ><i class="menu-icon liquory-icon-new"></i
                                        ><span class="menu-title"
                                            >What&#8217;s New</span
                                        ><small
                                            class="menu-badge"
                                            style="
                                            color: #ffffff;
                                            background-color: #1e73be;
                                            "
                                            >New</small
                                        ></a
                                        >
                                    </li>
                                    <li
                                        id="menu-item-798"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-798"
                                    >
                                        <a
                                        href="shop/incredible-cotton-computer/index.html"
                                        ><i class="menu-icon liquory-icon-gift2"></i
                                        ><span class="menu-title"
                                            >Gift &#038; Accessories</span
                                        ></a
                                        >
                                    </li>
                                    <li
                                        id="menu-item-799"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-799"
                                    >
                                        <a href="shop/mediocre-granite-watch/index.html"
                                        ><i
                                            class="menu-icon liquory-icon-best-seller"
                                        ></i
                                        ><span class="menu-title"
                                            >Best Sellers</span
                                        ></a
                                        >
                                    </li>
                                    <li
                                        id="menu-item-800"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-800"
                                    >
                                        <a href="shop/rustic-steel-computer/index.html"
                                        ><i class="menu-icon liquory-icon-sale"></i
                                        ><span class="menu-title"
                                            >Sales &#038; Offers</span
                                        ><small
                                            class="menu-badge"
                                            style="
                                            color: #ffffff;
                                            background-color: #dd3333;
                                            "
                                            >-20%</small
                                        ></a
                                        >
                                    </li>
                                    </ul>
                                </div>
                                </nav>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div
                        class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-bdb75db elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile"
                        data-id="bdb75db"
                        data-element_type="column"
                    >
                        <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                            class="elementor-element elementor-element-e2b3326 elementor-widget elementor-widget-liquory-nav-menu"
                            data-id="e2b3326"
                            data-element_type="widget"
                            data-widget_type="liquory-nav-menu.default"
                        >
                            <div class="elementor-widget-container">
                            <div class="elementor-nav-menu-wrapper">
                                <nav
                                class="main-navigation"
                                role="navigation"
                                aria-label="Primary Navigation"
                                >
                                <div class="primary-navigation">
                                    <ul id="menu-1-e2b3326" class="menu">
                                    <li
                                        id="menu-item-121"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-121 has-mega-menu has-stretchwidth"
                                    >
                                        <a href="index.html"
                                        ><span class="menu-title">Home</span></a
                                        >
                                        <ul
                                        class="sub-menu mega-menu mega-stretchwidth"
                                        >
                                        <li class="mega-menu-item">
                                            <div
                                            data-elementor-type="page"
                                            data-elementor-id="436"
                                            class="elementor elementor-436"
                                            >
                                            <div
                                                class="elementor-section elementor-top-section elementor-element elementor-element-39166f7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="39166f7"
                                                data-element_type="section"
                                                data-settings='{"stretch_section":"section-stretched"}'
                                            >
                                                <div
                                                class="elementor-container elementor-column-gap-no"
                                                >
                                                <div
                                                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fcbee02"
                                                    data-id="fcbee02"
                                                    data-element_type="column"
                                                >
                                                    <div
                                                    class="elementor-widget-wrap elementor-element-populated"
                                                    >
                                                    <div
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-f98258e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="f98258e"
                                                        data-element_type="section"
                                                    >
                                                        <div
                                                        class="elementor-container elementor-column-gap-no"
                                                        >
                                                        <div
                                                            class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2b135b2"
                                                            data-id="2b135b2"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-996a55a elementor-widget elementor-widget-image"
                                                                data-id="996a55a"
                                                                data-element_type="widget"
                                                                data-widget_type="image.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <a href="index.html">
                                                                    <noscript
                                                                    ><img
                                                                        width="390"
                                                                        height="247"
                                                                        src="wp-content/uploads/2022/07/mega_menu_home-1.jpg"
                                                                        class="attachment-full size-full wp-image-6291"
                                                                        alt=""
                                                                        srcset="
                                                                        https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-1.jpg         390w,
                                                                        https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-1-300x190.jpg 300w
                                                                        "
                                                                        sizes="(max-width: 390px) 100vw, 390px" /></noscript
                                                                    ><img
                                                                    width="390"
                                                                    height="247"
                                                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20390%20247%22%3E%3C/svg%3E"
                                                                    data-src="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-1.jpg"
                                                                    class="lazyload attachment-full size-full wp-image-6291"
                                                                    alt
                                                                    data-srcset="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-1.jpg 390w, https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-1-300x190.jpg 300w"
                                                                    data-sizes="(max-width: 390px) 100vw, 390px"
                                                                    />
                                                                </a>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-12e0e32 elementor-align-center button-line-yes elementor-widget elementor-widget-button"
                                                                data-id="12e0e32"
                                                                data-element_type="widget"
                                                                data-widget_type="button.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="elementor-button-wrapper"
                                                                >
                                                                    <a
                                                                    class="elementor-button elementor-button-link elementor-size-sm"
                                                                    href="index.html"
                                                                    >
                                                                    <span
                                                                        class="elementor-button-content-wrapper"
                                                                    >
                                                                        <span
                                                                        class="elementor-button-text"
                                                                        >Homepage
                                                                        01</span
                                                                        >
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4527e12"
                                                            data-id="4527e12"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-363a270 elementor-widget elementor-widget-image"
                                                                data-id="363a270"
                                                                data-element_type="widget"
                                                                data-widget_type="image.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <a
                                                                    href="home-2/index.html"
                                                                >
                                                                    <noscript
                                                                    ><img
                                                                        width="390"
                                                                        height="247"
                                                                        src="wp-content/uploads/2022/07/mega_menu_home-2.jpg"
                                                                        class="attachment-full size-full wp-image-6292"
                                                                        alt=""
                                                                        srcset="
                                                                        https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-2.jpg         390w,
                                                                        https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-2-300x190.jpg 300w
                                                                        "
                                                                        sizes="(max-width: 390px) 100vw, 390px" /></noscript
                                                                    ><img
                                                                    width="390"
                                                                    height="247"
                                                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20390%20247%22%3E%3C/svg%3E"
                                                                    data-src="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-2.jpg"
                                                                    class="lazyload attachment-full size-full wp-image-6292"
                                                                    alt
                                                                    data-srcset="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-2.jpg 390w, https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-2-300x190.jpg 300w"
                                                                    data-sizes="(max-width: 390px) 100vw, 390px"
                                                                    />
                                                                </a>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-2a52b58 elementor-align-center button-line-yes elementor-widget elementor-widget-button"
                                                                data-id="2a52b58"
                                                                data-element_type="widget"
                                                                data-widget_type="button.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="elementor-button-wrapper"
                                                                >
                                                                    <a
                                                                    class="elementor-button elementor-button-link elementor-size-sm"
                                                                    href="home-2/index.html"
                                                                    >
                                                                    <span
                                                                        class="elementor-button-content-wrapper"
                                                                    >
                                                                        <span
                                                                        class="elementor-button-text"
                                                                        >Homepage
                                                                        02</span
                                                                        >
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4feeaa4"
                                                            data-id="4feeaa4"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-35a6687 elementor-widget elementor-widget-image"
                                                                data-id="35a6687"
                                                                data-element_type="widget"
                                                                data-widget_type="image.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <a
                                                                    href="home-3/index.html"
                                                                >
                                                                    <noscript
                                                                    ><img
                                                                        width="390"
                                                                        height="247"
                                                                        src="wp-content/uploads/2022/07/mega_menu_home-3.jpg"
                                                                        class="attachment-full size-full wp-image-6293"
                                                                        alt=""
                                                                        srcset="
                                                                        https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-3.jpg         390w,
                                                                        https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-3-300x190.jpg 300w
                                                                        "
                                                                        sizes="(max-width: 390px) 100vw, 390px" /></noscript
                                                                    ><img
                                                                    width="390"
                                                                    height="247"
                                                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20390%20247%22%3E%3C/svg%3E"
                                                                    data-src="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-3.jpg"
                                                                    class="lazyload attachment-full size-full wp-image-6293"
                                                                    alt
                                                                    data-srcset="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-3.jpg 390w, https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-3-300x190.jpg 300w"
                                                                    data-sizes="(max-width: 390px) 100vw, 390px"
                                                                    />
                                                                </a>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-7eee44c elementor-align-center button-line-yes elementor-widget elementor-widget-button"
                                                                data-id="7eee44c"
                                                                data-element_type="widget"
                                                                data-widget_type="button.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="elementor-button-wrapper"
                                                                >
                                                                    <a
                                                                    class="elementor-button elementor-button-link elementor-size-sm"
                                                                    href="home-3/index.html"
                                                                    >
                                                                    <span
                                                                        class="elementor-button-content-wrapper"
                                                                    >
                                                                        <span
                                                                        class="elementor-button-text"
                                                                        >Homepage
                                                                        03</span
                                                                        >
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-2883e2e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="2883e2e"
                                                        data-element_type="section"
                                                    >
                                                        <div
                                                        class="elementor-container elementor-column-gap-no"
                                                        >
                                                        <div
                                                            class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-fc45dbf"
                                                            data-id="fc45dbf"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-0eaf3db elementor-widget elementor-widget-image"
                                                                data-id="0eaf3db"
                                                                data-element_type="widget"
                                                                data-widget_type="image.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <a href="home-4.html">
                                                                    <noscript
                                                                    ><img
                                                                        width="390"
                                                                        height="247"
                                                                        src="wp-content/uploads/2022/07/mega_menu_home-4.jpg"
                                                                        class="attachment-full size-full wp-image-6294"
                                                                        alt=""
                                                                        srcset="
                                                                        https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-4.jpg         390w,
                                                                        https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-4-300x190.jpg 300w
                                                                        "
                                                                        sizes="(max-width: 390px) 100vw, 390px" /></noscript
                                                                    ><img
                                                                    width="390"
                                                                    height="247"
                                                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20390%20247%22%3E%3C/svg%3E"
                                                                    data-src="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-4.jpg"
                                                                    class="lazyload attachment-full size-full wp-image-6294"
                                                                    alt
                                                                    data-srcset="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-4.jpg 390w, https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-4-300x190.jpg 300w"
                                                                    data-sizes="(max-width: 390px) 100vw, 390px"
                                                                    />
                                                                </a>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-e6c041d elementor-align-center button-line-yes elementor-widget elementor-widget-button"
                                                                data-id="e6c041d"
                                                                data-element_type="widget"
                                                                data-widget_type="button.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="elementor-button-wrapper"
                                                                >
                                                                    <a
                                                                    class="elementor-button elementor-button-link elementor-size-sm"
                                                                    href="home-4.html"
                                                                    >
                                                                    <span
                                                                        class="elementor-button-content-wrapper"
                                                                    >
                                                                        <span
                                                                        class="elementor-button-text"
                                                                        >Homepage
                                                                        04</span
                                                                        >
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-70c43c2"
                                                            data-id="70c43c2"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-1d91120 elementor-widget elementor-widget-image"
                                                                data-id="1d91120"
                                                                data-element_type="widget"
                                                                data-widget_type="image.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <a
                                                                    href="home-5/index.html"
                                                                >
                                                                    <noscript
                                                                    ><img
                                                                        width="390"
                                                                        height="247"
                                                                        src="wp-content/uploads/2022/07/mega_menu_home-5.jpg"
                                                                        class="attachment-full size-full wp-image-6295"
                                                                        alt=""
                                                                        srcset="
                                                                        https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-5.jpg         390w,
                                                                        https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-5-300x190.jpg 300w
                                                                        "
                                                                        sizes="(max-width: 390px) 100vw, 390px" /></noscript
                                                                    ><img
                                                                    width="390"
                                                                    height="247"
                                                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20390%20247%22%3E%3C/svg%3E"
                                                                    data-src="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-5.jpg"
                                                                    class="lazyload attachment-full size-full wp-image-6295"
                                                                    alt
                                                                    data-srcset="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-5.jpg 390w, https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-5-300x190.jpg 300w"
                                                                    data-sizes="(max-width: 390px) 100vw, 390px"
                                                                    />
                                                                </a>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-fc9d9a3 elementor-align-center button-line-yes elementor-widget elementor-widget-button"
                                                                data-id="fc9d9a3"
                                                                data-element_type="widget"
                                                                data-widget_type="button.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="elementor-button-wrapper"
                                                                >
                                                                    <a
                                                                    class="elementor-button elementor-button-link elementor-size-sm"
                                                                    href="home-5/index.html"
                                                                    >
                                                                    <span
                                                                        class="elementor-button-content-wrapper"
                                                                    >
                                                                        <span
                                                                        class="elementor-button-text"
                                                                        >Homepage
                                                                        05</span
                                                                        >
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-28b9a01"
                                                            data-id="28b9a01"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-45ef2aa elementor-widget elementor-widget-image"
                                                                data-id="45ef2aa"
                                                                data-element_type="widget"
                                                                data-widget_type="image.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <a
                                                                    href="home-6/index.html"
                                                                >
                                                                    <noscript
                                                                    ><img
                                                                        width="390"
                                                                        height="247"
                                                                        src="wp-content/uploads/2022/07/mega_menu_home-6.jpg"
                                                                        class="attachment-full size-full wp-image-6298"
                                                                        alt=""
                                                                        srcset="
                                                                        https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-6.jpg         390w,
                                                                        https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-6-300x190.jpg 300w
                                                                        "
                                                                        sizes="(max-width: 390px) 100vw, 390px" /></noscript
                                                                    ><img
                                                                    width="390"
                                                                    height="247"
                                                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20390%20247%22%3E%3C/svg%3E"
                                                                    data-src="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-6.jpg"
                                                                    class="lazyload attachment-full size-full wp-image-6298"
                                                                    alt
                                                                    data-srcset="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-6.jpg 390w, https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/mega_menu_home-6-300x190.jpg 300w"
                                                                    data-sizes="(max-width: 390px) 100vw, 390px"
                                                                    />
                                                                </a>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-d3a5108 elementor-align-center button-line-yes elementor-widget elementor-widget-button"
                                                                data-id="d3a5108"
                                                                data-element_type="widget"
                                                                data-widget_type="button.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="elementor-button-wrapper"
                                                                >
                                                                    <a
                                                                    class="elementor-button elementor-button-link elementor-size-sm"
                                                                    href="home-6/index.html"
                                                                    >
                                                                    <span
                                                                        class="elementor-button-content-wrapper"
                                                                    >
                                                                        <span
                                                                        class="elementor-button-text"
                                                                        >Homepage
                                                                        06</span
                                                                        >
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </li>
                                        </ul>
                                    </li>
                                    <li
                                        id="menu-item-129"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-129 has-mega-menu has-stretchwidth"
                                    >
                                        <a href="shop/index.html"
                                        ><span class="menu-title">Shop</span></a
                                        >
                                        <ul
                                        class="sub-menu mega-menu mega-stretchwidth"
                                        >
                                        <li class="mega-menu-item">
                                            <div
                                            data-elementor-type="page"
                                            data-elementor-id="459"
                                            class="elementor elementor-459"
                                            >
                                            <div
                                                class="elementor-section elementor-top-section elementor-element elementor-element-10385e81 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="10385e81"
                                                data-element_type="section"
                                            >
                                                <div
                                                class="elementor-container elementor-column-gap-no"
                                                >
                                                <div
                                                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5d958483"
                                                    data-id="5d958483"
                                                    data-element_type="column"
                                                >
                                                    <div
                                                    class="elementor-widget-wrap elementor-element-populated"
                                                    >
                                                    <div
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-61518901 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                        data-id="61518901"
                                                        data-element_type="section"
                                                    >
                                                        <div
                                                        class="elementor-container elementor-column-gap-no"
                                                        >
                                                        <div
                                                            class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-44630637"
                                                            data-id="44630637"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-9a8be98 elementor-widget elementor-widget-heading"
                                                                data-id="9a8be98"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default"
                                                                >
                                                                    Shop Layouts
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-d398edc hfe-nav-menu__breakpoint-none elementor-widget__width-initial hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="d398edc"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":3,"sizes":[]},"menu_space_between":{"unit":"px","size":8,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-d398edc"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-355"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/indexc781.html?woocommerce_archive_sidebar=left"
                                                                            class="hfe-menu-item"
                                                                            >Shop
                                                                            &#8211; Left
                                                                            sidebar</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-356"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/indexe210.html?woocommerce_archive_sidebar=right"
                                                                            class="hfe-menu-item"
                                                                            >Shop
                                                                            &#8211;
                                                                            right
                                                                            sidebar</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-357"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/index1b07.html?orderby=menu_order&amp;layout=list"
                                                                            class="hfe-menu-item"
                                                                            >Shop
                                                                            &#8211; list
                                                                            view</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-358"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/index3f9c.html?woocommerce_archive_layout=canvas&amp;woocommerce_catalog_columns=4"
                                                                            class="hfe-menu-item"
                                                                            >Shop –
                                                                            fullwidth 4
                                                                            columns</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-413a9be hfe-nav-menu__breakpoint-none elementor-widget__width-initial hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="413a9be"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":3,"sizes":[]},"menu_space_between":{"unit":"px","size":8,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-413a9be"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-359"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/index2e45.html?woocommerce_archive_layout=canvas&amp;woocommerce_catalog_columns=5"
                                                                            class="hfe-menu-item"
                                                                            >Shop –
                                                                            fullwidth 5
                                                                            columns</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-360"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/index2ccc.html?shop_banner=banner-categories-image"
                                                                            class="hfe-menu-item"
                                                                            >Shop
                                                                            &#8211;
                                                                            category
                                                                            Images</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-361"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/index4433.html?shop_banner=banner-categories-icons"
                                                                            class="hfe-menu-item"
                                                                            >Shop
                                                                            &#8211;
                                                                            category
                                                                            icons</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-362"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/indexef93.html?shop_banner=banner-categories"
                                                                            class="hfe-menu-item"
                                                                            >Shop
                                                                            &#8211;
                                                                            banner</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2d00f58a"
                                                            data-id="2d00f58a"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-58fdb86 elementor-widget elementor-widget-heading"
                                                                data-id="58fdb86"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default"
                                                                >
                                                                    Product Layouts
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-86c3353 hfe-nav-menu__breakpoint-none elementor-widget__width-initial hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="86c3353"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":3,"sizes":[]},"menu_space_between":{"unit":"px","size":8,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-86c3353"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-351"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="product/mediocre-granite-watch/index1d07.html?single_product_gallery_layout=gallery"
                                                                            class="hfe-menu-item"
                                                                            >Gallery</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-354"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="product/mediocre-granite-watch/index4933.html?single_product_gallery_layout=vertical"
                                                                            class="hfe-menu-item"
                                                                            >Vertical
                                                                            thumbnail</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-353"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="product/mediocre-granite-watch/index798d.html?single_product_gallery_layout=horizontal"
                                                                            class="hfe-menu-item"
                                                                            >Horizontal
                                                                            thumbnail</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-352"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="product/mediocre-granite-watch/index6232.html?single_product_gallery_layout=sticky"
                                                                            class="hfe-menu-item"
                                                                            >Sticky
                                                                            detail</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5a3ad21"
                                                            data-id="5a3ad21"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-40d4029 elementor-widget elementor-widget-heading"
                                                                data-id="40d4029"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default"
                                                                >
                                                                    Product Types
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-e344726 hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                                data-id="e344726"
                                                                data-element_type="widget"
                                                                data-settings='{"padding_horizontal_menu_item":{"unit":"px","size":0,"sizes":[]},"padding_vertical_menu_item":{"unit":"px","size":3,"sizes":[]},"menu_space_between":{"unit":"px","size":8,"sizes":[]},"padding_horizontal_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_menu_item_mobile":{"unit":"px","size":"","sizes":[]},"menu_space_between_laptop":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_tablet":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile_extra":{"unit":"px","size":"","sizes":[]},"menu_space_between_mobile":{"unit":"px","size":"","sizes":[]},"dropdown_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"dropdown_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"padding_horizontal_dropdown_item":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_horizontal_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item":{"unit":"px","size":15,"sizes":[]},"padding_vertical_dropdown_item_laptop":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_tablet":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile_extra":{"unit":"px","size":"","sizes":[]},"padding_vertical_dropdown_item_mobile":{"unit":"px","size":"","sizes":[]},"distance_from_menu":{"unit":"px","size":"","sizes":[]},"distance_from_menu_laptop":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_tablet":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile_extra":{"unit":"px","size":"","sizes":[]},"distance_from_menu_mobile":{"unit":"px","size":"","sizes":[]},"toggle_size":{"unit":"px","size":"","sizes":[]},"toggle_size_laptop":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_tablet":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_size_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_width":{"unit":"px","size":"","sizes":[]},"toggle_border_width_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_width_mobile":{"unit":"px","size":"","sizes":[]},"toggle_border_radius":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_laptop":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_tablet":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile_extra":{"unit":"px","size":"","sizes":[]},"toggle_border_radius_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                                data-widget_type="navigation-menu.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
                                                                    data-layout="vertical"
                                                                >
                                                                    <div
                                                                    role="button"
                                                                    class="hfe-nav-menu__toggle elementor-clickable"
                                                                    >
                                                                    <span
                                                                        class="screen-reader-text"
                                                                        >Menu</span
                                                                    >
                                                                    <div
                                                                        class="hfe-nav-menu-icon"
                                                                    ></div>
                                                                    </div>
                                                                    <nav
                                                                    class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
                                                                    data-toggle-icon
                                                                    data-close-icon
                                                                    data-full-width
                                                                    >
                                                                    <ul
                                                                        id="menu-1-e344726"
                                                                        class="hfe-nav-menu"
                                                                    >
                                                                        <li
                                                                        id="menu-item-363"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/mediocre-granite-watch/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Product
                                                                            &#8211;
                                                                            simple</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-364"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/enormous-silk-bottle/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Product
                                                                            &#8211;
                                                                            variable</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-365"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/rustic-steel-computer/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Product
                                                                            &#8211;
                                                                            grouped</a
                                                                        >
                                                                        </li>
                                                                        <li
                                                                        id="menu-item-366"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-product parent hfe-creative-menu"
                                                                        >
                                                                        <a
                                                                            href="shop/incredible-cotton-computer/index.html"
                                                                            class="hfe-menu-item"
                                                                            >Product
                                                                            &#8211;
                                                                            external
                                                                            &#038;
                                                                            affiliate</a
                                                                        >
                                                                        </li>
                                                                    </ul>
                                                                    </nav>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-67d9511 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                        data-id="67d9511"
                                                        data-element_type="section"
                                                    >
                                                        <div
                                                        class="elementor-container elementor-column-gap-no"
                                                        >
                                                        <div
                                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9f670ec"
                                                            data-id="9f670ec"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-c58fcb3 elementor-position-above box-align-left elementor-cta--valign-top button-banner-style-liquory-default elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-liquory-banner"
                                                                data-id="c58fcb3"
                                                                data-element_type="widget"
                                                                data-widget_type="liquory-banner.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="elementor-cta--skin-cover elementor-cta elementor-liquory-banner"
                                                                >
                                                                    <div
                                                                    class="elementor-cta__bg-wrapper"
                                                                    >
                                                                    <div
                                                                        class="elementor-cta__bg-overlay"
                                                                    ></div>
                                                                    <div
                                                                        class="lazyload elementor-cta__bg elementor-bg"
                                                                        data-bg="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/megashop_img-1.jpg"
                                                                        style="
                                                                        background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);
                                                                        "
                                                                    ></div>
                                                                    </div>
                                                                    <div
                                                                    class="elementor-cta__content"
                                                                    >
                                                                    <div
                                                                        class="elementor-cta__content_inner"
                                                                    >
                                                                        <div
                                                                        class="elementor-cta__subtitle elementor-cta__content-item elementor-content-item"
                                                                        >
                                                                        <div>
                                                                            Happy summer
                                                                            2022
                                                                        </div>
                                                                        </div>
                                                                        <h3
                                                                        class="elementor-cta__title elementor-cta__content-item elementor-content-item"
                                                                        >
                                                                        Save 50% off
                                                                        <span
                                                                            style="
                                                                            font-weight: 400;
                                                                            "
                                                                        >
                                                                            GIN
                                                                            LOVERS</span
                                                                        >
                                                                        </h3>
                                                                        <div
                                                                        class="elementor-cta__button-wrapper elementor-cta__content-item elementor-content-item"
                                                                        >
                                                                        <a
                                                                            class="elementor-cta__button elementor-button"
                                                                            href="shop/index.html"
                                                                        >
                                                                            <span
                                                                            class="elementor-button-content-wrapper"
                                                                            >
                                                                            <span
                                                                                class="elementor-button-text"
                                                                                >Shop
                                                                                Now</span
                                                                            >
                                                                            </span>
                                                                        </a>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bc7c808"
                                                            data-id="bc7c808"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-965265f elementor-position-above box-align-left elementor-cta--valign-top button-banner-style-liquory-default elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-liquory-banner"
                                                                data-id="965265f"
                                                                data-element_type="widget"
                                                                data-widget_type="liquory-banner.default"
                                                            >
                                                                <div
                                                                class="elementor-widget-container"
                                                                >
                                                                <div
                                                                    class="elementor-cta--skin-cover elementor-cta elementor-liquory-banner"
                                                                >
                                                                    <div
                                                                    class="elementor-cta__bg-wrapper"
                                                                    >
                                                                    <div
                                                                        class="elementor-cta__bg-overlay"
                                                                    ></div>
                                                                    <div
                                                                        class="lazyload elementor-cta__bg elementor-bg"
                                                                        data-bg="https://demo2.themelexus.com/liquory/wp-content/uploads/2022/07/megashop_img-2.png"
                                                                        style="
                                                                        background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);
                                                                        "
                                                                    ></div>
                                                                    </div>
                                                                    <div
                                                                    class="elementor-cta__content"
                                                                    >
                                                                    <div
                                                                        class="elementor-cta__content_inner"
                                                                    >
                                                                        <div
                                                                        class="elementor-cta__subtitle elementor-cta__content-item elementor-content-item"
                                                                        >
                                                                        <div>
                                                                            Keep Calm
                                                                        </div>
                                                                        </div>
                                                                        <h3
                                                                        class="elementor-cta__title elementor-cta__content-item elementor-content-item"
                                                                        >
                                                                        Drink Beer
                                                                        </h3>
                                                                        <div
                                                                        class="elementor-cta__description elementor-cta__content-item elementor-content-item"
                                                                        >
                                                                        Price just
                                                                        <br />
                                                                        <span
                                                                            style="
                                                                            font-size: 24px;
                                                                            font-weight: 700;
                                                                            color: var(
                                                                                --e-global-color-primary
                                                                            );
                                                                            letter-spacing: -0.5px;
                                                                            "
                                                                            >$69.99
                                                                        </span>
                                                                        </div>
                                                                        <div
                                                                        class="elementor-cta__button-wrapper elementor-cta__content-item elementor-content-item"
                                                                        >
                                                                        <a
                                                                            class="elementor-cta__button elementor-button"
                                                                            href="shop/index.html"
                                                                        >
                                                                            <span
                                                                            class="elementor-button-content-wrapper"
                                                                            >
                                                                            <span
                                                                                class="elementor-button-text"
                                                                                >Shop
                                                                                Now</span
                                                                            >
                                                                            </span>
                                                                        </a>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </li>
                                        </ul>
                                    </li>
                                    <li
                                        id="menu-item-2577"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2577"
                                    >
                                        <a href="product-category/wine/index.html"
                                        ><span class="menu-title">Wine</span></a
                                        >
                                    </li>
                                    <li
                                        id="menu-item-2579"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2579"
                                    >
                                        <a href="product-category/beer/index.html"
                                        ><span class="menu-title">Beer</span></a
                                        >
                                    </li>
                                    <li
                                        id="menu-item-2578"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2578"
                                    >
                                        <a href="product-category/whiskey/index.html"
                                        ><span class="menu-title">Whiskey</span></a
                                        >
                                    </li>
                                    <li
                                        id="menu-item-132"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-132"
                                    >
                                        <a href="#"
                                        ><span class="menu-title">Pages</span></a
                                        >
                                        <ul class="sub-menu">
                                        <li
                                            id="menu-item-141"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141"
                                        >
                                            <a href="about-us/index.html"
                                            ><span class="menu-title"
                                                >About us</span
                                            ></a
                                            >
                                        </li>
                                        <li
                                            id="menu-item-142"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-142"
                                        >
                                            <a href="faqs/index.html"
                                            ><span class="menu-title">FAQs</span></a
                                            >
                                        </li>
                                        <li
                                            id="menu-item-144"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-144"
                                        >
                                            <a href="404.html"
                                            ><span class="menu-title"
                                                >404 Error</span
                                            ></a
                                            >
                                        </li>
                                        <li
                                            id="menu-item-143"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-143"
                                        >
                                            <a href="icons/index.html"
                                            ><span class="menu-title">Icons</span></a
                                            >
                                        </li>
                                        </ul>
                                    </li>
                                    <li
                                        id="menu-item-128"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-128"
                                    >
                                        <a href="blog/index.html"
                                        ><span class="menu-title">Blog</span></a
                                        >
                                        <ul class="sub-menu">
                                        <li
                                            id="menu-item-133"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-133"
                                        >
                                            <a href="#"
                                            ><span class="menu-title"
                                                >Blog &#8211; Standard</span
                                            ></a
                                            >
                                        </li>
                                        <li
                                            id="menu-item-134"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-134"
                                        >
                                            <a
                                            href="blog/indexd762.html?blog_style=style-1&amp;blog_columns=2&amp;blog_sidebar=none"
                                            ><span class="menu-title"
                                                >Blog &#8211; Grid 2 Columns</span
                                            ></a
                                            >
                                        </li>
                                        <li
                                            id="menu-item-135"
                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-135"
                                        >
                                            <a
                                            href="summer-is-twice-as-nice-with-peachy-sangria-wine/index.html"
                                            ><span class="menu-title"
                                                >Single Post</span
                                            ></a
                                            >
                                        </li>
                                        </ul>
                                    </li>
                                    <li
                                        id="menu-item-130"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-130"
                                    >
                                        <a href="contact-us/index.html"
                                        ><span class="menu-title">Contact</span></a
                                        >
                                    </li>
                                    </ul>
                                </div>
                                </nav>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div
                        class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-3ad6d0c elementor-hidden-laptop elementor-hidden-tablet_extra elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile"
                        data-id="3ad6d0c"
                        data-element_type="column"
                    >
                        <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                            class="elementor-element elementor-element-6a62556 elementor-align-right elementor-tablet-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                            data-id="6a62556"
                            data-element_type="widget"
                            data-widget_type="icon-list.default"
                        >
                            <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item">
                                <span class="elementor-icon-list-icon">
                                    <i
                                    aria-hidden="true"
                                    class="liquory-icon- liquory-icon-support"
                                    ></i>
                                </span>
                                <span class="elementor-icon-list-text"
                                    >Hotline:
                                    <span
                                    style="
                                        font-size: 20px;
                                        font-weight: 800;
                                        color: var(--e-global-color-primary);
                                        letter-spacing: -1px;
                                    "
                                    >
                                    1-800-888-9999
                                    </span></span
                                >
                                </li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400%7CPlus+Jakarta+Sans:800%2C600%2C400%2C700&amp;display=swap" rel="stylesheet" property="stylesheet" media="all" type="text/css"/>

    <link rel="stylesheet" id="elementor-post-874-css" href="{{ asset('web/wp-content/cache/autoptimize/css/autoptimize_single_2f9ef38cc9ce5e553f85aaa68632e48792fb.css?ver=1692094320')}}" media="all"/>
    <link rel="stylesheet" id="elementor-post-2705-css" href="{{ asset('web/wp-content/cache/autoptimize/css/autoptimize_single_bcf75c72747c8df9b71edf8945cb380db0fa.css?ver=1692094321')}}" media="all"/>
    <link rel="stylesheet" id="elementor-post-2783-css" href="{{ asset('web/wp-content/cache/autoptimize/css/autoptimize_single_8ae23c9ad62ac66f80cecd8283c6c1890e8b.css?ver=1692094322')}}" media="all"/>
    <link rel="stylesheet" id="elementor-post-436-css" href="{{ asset('web/wp-content/cache/autoptimize/css/autoptimize_single_44fcc797896d1aa9735c005db9e0b60d0e8b.css?ver=1692094322')}}" media="all"/>
    <link rel="stylesheet" id="elementor-post-459-css" href="{{ asset('web/wp-content/cache/autoptimize/css/autoptimize_single_458c032ee4762c9f372c48cd093bb41227a8.css?ver=1692094323')}}" media="all"/>
    <link rel="stylesheet" id="google-fonts-2-css" href="https://fonts.googleapis.com/css?family=Sarina%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.3" media="all"/>
</body>
</html>
