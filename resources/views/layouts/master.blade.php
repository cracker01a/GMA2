<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-menu="leftalign">

<head>
    <base href="{!! asset('assets').'/' !!}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('Title')</title>

    <link rel='stylesheet' href='css/reset.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/wordpress.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/modulobox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/left-align-menu.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/themify-icons.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/tooltipster.css' type='text/css' media='all' />
    <link rel='stylesheet' href='js/plugins/loftloader/assets/css/loftloader.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='js/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='js/plugins/elementor/assets/lib/animations/animations.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='js/plugins/elementor/assets/css/frontend-legacy.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='js/plugins/elementor/assets/css/frontend.min.css' type='text/css' media='all' />
    <link rel='stylesheet'
        href='js/plugins/before-after-image-comparison-slider-for-elementor/assets/css/twentytwenty.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='js/plugins/starto-elementor/assets/css/swiper.css' type='text/css' media='all' />
    <link rel='stylesheet' href='js/plugins/starto-elementor/assets/css/justifiedGallery.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='js/plugins/starto-elementor/assets/css/flickity.css' type='text/css' media='all' />
    <link rel='stylesheet' href='js/plugins/starto-elementor/assets/css/owl.theme.default.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='js/plugins/starto-elementor/assets/css/switchery.css' type='text/css' media='all' />
    <link rel='stylesheet' href='js/plugins/starto-elementor/assets/css/starto-elementor.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='js/plugins/starto-elementor/assets/css/starto-elementor-responsive.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='css/elementor/css/post-10847.css?ver=1604581791' type='text/css' media='all' />
    <link rel='stylesheet' href='css/elementor/css/post-7785.css?ver=1604581793' type='text/css' media='all' />
    <link rel='stylesheet' href='css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/kirki-style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/custom-css.css' type='text/css' media='all' />
    <link rel='stylesheet' href='js/plugins/starto-elementor/assets/css/typedjs.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='css/elementor/css/post-6496.css?ver=1604581802' type='text/css' media='all' />
    <link rel='stylesheet' href='js/plugins/elementor/assets/lib/font-awesome/css/regular.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='js/plugins/elementor/assets/lib/font-awesome/css/brands.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='js/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' href='js/plugins/elementor/assets/lib/font-awesome/css/solid.min.css' type='text/css'
        media='all' />

    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.5.3'
        type='text/css' media='all' />

    <link rel="icon" href="upload/logojcisf.png" sizes="32x32" />
    <link rel="icon" href="upload/logojcisf.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="upload/logojcisf.png" />

</head>


<body data-rsssl="1"
    class="home page-template-default page page-id-7785 theme-starto woocommerce-no-js menu-transparent lightbox-black leftalign loftloader-lite-enabled elementor-default elementor-kit-8335 elementor-page elementor-page-7785">

    <div id="loftloader-wrapper" class="pl-imgloading" data-show-close-time="15000" data-max-load-time="0">
        <div class="loader-inner">
            <div id="loader">
                <div class="imgloading-container">
                    <span style="background-image: url(upload/logojci.png);"></span>
                </div>
                <img data-no-lazy="1" class="skip-lazy" alt="loader image" src="upload/logojcisf.png" />
            </div>
        </div>
        <div class="loader-section section-fade">
        </div>
        <div class="loader-close-button" style="display: none;">
            <span class="screen-reader-text">Close</span>
        </div>
    </div>
    <!-- Begin template wrapper -->
    <div id="wrapper" class="">

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

    </div>

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript'
        src='js/plugins/before-after-image-comparison-slider-for-elementor/assets/js/jquery.event.move.js'></script>
    <script type='text/javascript'
        src='js/plugins/before-after-image-comparison-slider-for-elementor/assets/js/jquery.twentytwenty.js'></script>
    <script type='text/javascript' src='js/plugins/before-after-image-comparison-slider-for-elementor/assets/js/main.js'>
    </script>
    <script type='text/javascript' src='js/imagesloaded.min.js'></script>
    <script type='text/javascript' src='js/masonry.min.js'></script>
    <script type='text/javascript' src='js/plugins/starto-elementor/assets/js/jquery.lazy.js'></script>
    <script type='text/javascript'>
        jQuery(function($) {
            jQuery("img.lazy").each(function() {
                var currentImg = jQuery(this);
                jQuery(this).Lazy({
                    onFinishedAll: function() {
                        currentImg.parent("div.post-featured-image-hover").removeClass("lazy");
                        currentImg.parent(".starto_gallery_lightbox").parent(
                            "div.gallery_grid_item").removeClass("lazy");
                        currentImg.parent("div.gallery_grid_item").removeClass("lazy");
                    }
                });
            });
        });
    </script>
    <script type='text/javascript' src='js/plugins/starto-elementor/assets/js/modulobox.js'></script>
    <script type='text/javascript' src='js/plugins/starto-elementor/assets/js/jquery.parallax-scroll.js'></script>
    <script type='text/javascript' src='js/plugins/starto-elementor/assets/js/jquery.smoove.js'></script>
    <script type='text/javascript' src='js/plugins/starto-elementor/assets/js/parallax.js'></script>
    <script type='text/javascript' src='js/plugins/starto-elementor/assets/js/jquery.sticky-kit.min.js'></script>
    <script type='text/javascript'>
        jQuery(function($) {
            jQuery("#page-content-wrapper .sidebar-wrapper").stick_in_parent({
                offset_top: 100
            });
            if (jQuery(window).width() < 768 || is_touch_device()) {
                jQuery("#page-content-wrapper .sidebar-wrapper").trigger("sticky_kit:detach");
            }
        });
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var tgAjax = {
            "ajaxurl": "#",
            "ajax_nonce": "ca39257e78"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='js/plugins/starto-elementor/assets/js/starto-elementor.js'></script>
    <script type='text/javascript' src='js/plugins/jquery-blockui/jquery.blockUI.min.js'></script>
    <script type='text/javascript' src='js/ui/core.min.js'></script>
    <script type='text/javascript' src='js/ui/effect.min.js'></script>
    <script type='text/javascript' src='js/plugins/starto-elementor/assets/js/tweenmax.min.js'></script>
    <script type='text/javascript' src='js/plugins/waypoints.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.stellar.min.js'></script>
    <script type='text/javascript' id='starto-custom-plugins-js-extra'>
        /* <![CDATA[ */
        var startoPluginParams = {
            "backTitle": "Back"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='js/plugins/core/custom_plugins.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var startoParams = {
            "menulayout": "leftalign",
            "fixedmenu": "1",
            "footerreveal": "",
            "headercontent": "content",
            "lightboxthumbnails": "thumbnail",
            "lightboxtimer": "7000"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='js/plugins/core/custom.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.tooltipster.min.js'></script>
    <script type='text/javascript'>
        jQuery(function($) {
            jQuery(".demotip").tooltipster({
                position: "left",
                multiple: true,
                theme: "tooltipster-shadow",
                delay: 0
            });
        });
    </script>
    <script type='text/javascript' src='js/plugins/loftloader/assets/js/loftloader.min.js'></script>
    <script type='text/javascript' src='js/plugins/starto-elementor/assets/js/switchery.js'></script>
    <script type='text/javascript' src='js/plugins/starto-elementor/assets/js/owl.carousel.min.js'></script>
    <script type='text/javascript' src='js/plugins/starto-elementor/assets/js/typed.min.js'></script>
    <script type='text/javascript' id='typedjs-script-js-after'>
        jQuery(function($) {
            jQuery(".type-wrap").show();
            jQuery("#typed").typed({
                stringsElement: jQuery("#typed-strings"),
                typeSpeed: 65,
                backDelay: 2500,
                loop: true,
                loopCount: Infinity,
                contentType: "html", // or text
                loopCount: true
            });
        });
    </script>
    <script type='text/javascript' src='js/plugins/elementor/assets/js/frontend-modules.min.js'></script>
    <script type='text/javascript' src='js/ui/position.min.js'></script>
    <script type='text/javascript' src='js/plugins/elementor/assets/lib/dialog/dialog.min.js'></script>
    <script type='text/javascript' src='js/plugins/elementor/assets/lib/waypoints/waypoints.min.js'></script>
    <script type='text/javascript' src='js/plugins/elementor/assets/lib/swiper/swiper.min.js'></script>
    <script type='text/javascript' src='js/plugins/elementor/assets/lib/share-link/share-link.min.js'></script>
    <script type='text/javascript'>
        var elementorFrontendConfig = {
            environmentMode: {
                edit: false,
                wpPreview: false
            },
            i18n: {
                shareOnFacebook: "Share on Facebook",
                shareOnTwitter: "Share on Twitter",
                pinIt: "Pin it",
                download: "Download",
                downloadImage: "Download image",
                fullscreen: "Fullscreen",
                zoom: "Zoom",
                share: "Share",
                playVideo: "Play Video",
                previous: "Previous",
                next: "Next",
                close: "Close",
            },
            is_rtl: false,
            breakpoints: {
                xs: 0,
                sm: 480,
                md: 768,
                lg: 1025,
                xl: 1440,
                xxl: 1600
            },
            version: "3.0.13",
            is_static: false,
            legacyMode: {
                elementWrappers: true
            },
            urls: {
                assets: "#"
            },
            settings: {
                page: [],
                editorPreferences: []
            },
            kit: {
                global_image_lightbox: "yes",
                lightbox_enable_counter: "yes",
                lightbox_enable_fullscreen: "yes",
                lightbox_enable_zoom: "yes",
                lightbox_enable_share: "yes",
                lightbox_title_src: "title",
                lightbox_description_src: "description"
            },
            post: {
                id: 7785,
                title: "starto",
                excerpt: "",
                featuredImage: false
            },
        };
    </script>
    <script type='text/javascript' src='js/plugins/elementor/assets/js/frontend.min.js'></script>

</body>

</html>
