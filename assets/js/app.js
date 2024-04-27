(function (window, document, $, undefined) {
    'use strict';

    var axilInit = {

        i: function (e) {
            axilInit.s();
            axilInit.methods();
        },

        s: function (e) {
            this._window = $(window),
                this._document = $(document),
                this._body = $('body'),
                this._html = $('html')
        },

        methods: function (e) {
            axilInit.w();
            axilInit.preloaderActive();
            axilInit.axilBackToTop();
            axilInit.menuLinkActive();
            axilInit.openSubmenu();
            axilInit.stickyHeader();
            axilInit.mobileMenuActivation();
            axilInit.axilSearch();
            axilInit.anchorTagPreventDefault();
            axilInit.magnificPopupActivation();
            axilInit.axilSlickActivation();
            axilInit.slickMultiSlider();
            axilInit.contactForm();
            axilInit.theiaStickySidebar();
        },

        w: function (e) {
            this._window.on('load', axilInit.l).on('scroll', axilInit.res)
        },

        preloaderActive: function () {
            $(window).on('load', preloaderRemove);
            function preloaderRemove() {
                $('body').imagesLoaded().done(function(instance) {
                    $('#preloader').fadeOut('slow', function () {
                        $(this).remove();
                    });
                });
                axilInit.backgroundVideo();
            }
        },

        axilBackToTop: function () {
            var btn = $('#backto-top');
            $(window).on('scroll', function () {
                if ($(window).scrollTop() > 300) {
                    btn.addClass('show');
                } else {
                    btn.removeClass('show');
                }
            });
            btn.on('click', function (e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, '300');
            });
        },

        menuLinkActive: function () {
            var currentPage = location.pathname.split("/"),
                current = currentPage[currentPage.length - 1];
            $('.template-main-menu ul li >a').each(function () {
                var $this = $(this);
                if ($this.attr('href') === current) {
                    $this.addClass('is-active');
                    $this.parents('.menu-item-has-children').addClass('is-active');
                }
            });
        },

        openSubmenu: function () {
            $('.menu-item-has-children > a').on('click', function (e) {
                var $this = $(this),
                    wrapMask = $('<div / >').addClass('menuCloseMask');
                if (!$('.template-main-menu').hasClass('mobilemenu-active')) {
                    $this.parent('.menu-item-has-children').toggleClass('selected');
                    $this.parent().siblings().removeClass('selected');
                    $this.parents('.template-main-menu').find('.menuCloseMask').remove();
                    $this.parents('.template-main-menu').append(wrapMask);
                }
                if (!$this.parent('.menu-item-has-children').hasClass('selected')) {
                    $this.parents('.template-main-menu').find('.menuCloseMask').remove();
                }

                $('.menuCloseMask').on('click', function (e) {
                    $this.parents('.template-main-menu').find('.menu-item-has-children').removeClass('selected');
                    $this.parents('.template-main-menu').find('.menuCloseMask').remove();
                });
            });
        },
        
        stickyHeader: function () {
            $(window).on('scroll', function () {
                if ($('header').hasClass('sticky-on')) {
                    var stickyPlaceHolder = $("#sticky-placeholder"),
                        menu = $("#navbar-wrap"),
                        menuH = menu.outerHeight(),
                        topbarH = $('#topbar-wrap').outerHeight() || 0,
                        targrtScroll = topbarH,
                        header = $("header");
                    if ($(window).scrollTop() > targrtScroll) {
                        header.addClass('sticky');
                        stickyPlaceHolder.height(menuH);
                    } else {
                        header.removeClass('sticky');
                        stickyPlaceHolder.height(0);
                    }
                }
            })
        }, 

        mobileMenuActivation: function (e) {
            $('.menu-item-has-children > a').on('click', function (e) {
                var targetParent = $(this).parents('.template-main-menu');
                var target = $(this).siblings('.sub-menu');

                if (targetParent.hasClass('mobilemenu-active')) {
                    $(target).slideToggle(400);
                    $(this).parent('.menu-item-has-children').toggleClass('open');
                }
            });

            function resizeClassAdd() {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    $('.template-main-menu').removeClass('mobilemenu-active').removeAttr('style');
                } else {
                    $('.template-main-menu').addClass('mobilemenu-active');
                }
            }

            $(window).on('resize', function () {
                resizeClassAdd();
            });
            resizeClassAdd();
        },

        axilSearch: function () {
            $('a[href="#search-trigger"]').on("click", function (event) {
                event.preventDefault();
                var target = $("#search-trigger");
                target.addClass("open");
                setTimeout(function () {
                    target.find('input').focus();
                }, 600);
                return false;
            });

            $("#search-trigger, #search-trigger button.close").on("click keyup", function (event) {
                if (
                    event.target === this ||
                    event.target.className === "close" ||
                    event.keyCode === 27
                ) {
                    $(this).removeClass("open");
                }
            });
        },

        anchorTagPreventDefault: function () {
            $('a[href=\\#]').on('click', function (e) {
                e.preventDefault();
            });
        },

        magnificPopupActivation: function () {
            var yPopup = $('.popup-youtube');
            if (yPopup.length) {
                yPopup.magnificPopup({
                    disableOn: 300,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            }
        },
        
        backgroundVideo: function () {
            var myPlayer;
            $(function () {
                var options = {
                    mobileFallbackImage: "http://www.hdwallpapers.in/walls/pink_cosmos_flowers-wide.jpg",
                    playOnlyIfVisible: true
                };
                myPlayer = jQuery("#videoElement1").YTPlayer(options);
            });
        },

        axilSlickActivation: function (e) {
            $('.slick-slider').slick();
        },

        slickMultiSlider: function () {
            $('#category-slider-1').slick({
                dots: false,
                infinite: true,
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: $('#category-prev'),
                nextArrow: $('#category-next'),
                responsive: [{
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                ],
            });
            $('#category-slider-2').slick({
                dots: false,
                infinite: true,
                autoplay: true,
                speed: 500,
                autoplaySpeed: 1500,
                slidesToShow: 6,
                slidesToScroll: 1,
                prevArrow: $('#category-prev2'),
                nextArrow: $('#category-next2'),
                responsive: [{
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 5,
                        },
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 4,
                        },
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 479,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                ],
            });
            $('#post-slider-1').slick({
                dots: false,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: $('#post-prev-1'),
                nextArrow: $('#post-next-1'),
            });
            $('#post-slider-2').slick({
                dots: false,
                infinite: true,
                speed: 500,
                slidesToShow: 4,
                slidesToScroll: 1,
                prevArrow: $('#post-prev-2'),
                nextArrow: $('#post-next-2'),
                responsive: [{
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            });
            $('#post-slider-3').slick({
                dots: false,
                infinite: true,
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: $('#post-prev-3'),
                nextArrow: $('#post-next-3'),
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            });
            $('#post-slider-4').slick({
                dots: false,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: $('#post-prev-4'),
                nextArrow: $('#post-next-4'),
            });
            $('#post-slider-5').slick({
                dots: false,
                infinite: true,
                speed: 500,
                slidesToShow: 4,
                slidesToScroll: 1,
                prevArrow: $('#post-prev-5'),
                nextArrow: $('#post-next-5'),
                responsive: [{
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            });
            $('#news-feed-slider').slick({
                dots: false,
                prevArrow: false,
                nextArrow: false,
                infinite: true,
                autoplay: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                vertical: true,
                verticalSwiping: true,
            });
            $('#team-slider').slick({
                dots: false,
                autoplay: true,
                infinite: true,
                speed: 500,
                autoplaySpeed: 1500,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: false,
                nextArrow: false,
                responsive: [{
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            });
        }, 

        contactForm: function () {
            $('.axil-contact-form').on('submit', function (e) {
                e.preventDefault();
                var _self = $(this);
                var _selector = _self.closest('input,textarea');
                _self.closest('div').find('input,textarea').removeAttr('style');
                _self.find('.error-msg').remove();
                _self.closest('div').find('button[type="submit"]').attr('disabled', 'disabled');
                var data = $(this).serialize();
                $.ajax({
                    url: 'mail.php',
                    type: 'post',
                    dataType: 'json',
                    data: data,
                    success: function (data) {
                        _self.closest('div').find('button[type="submit"]').removeAttr('disabled');
                        if (data.code === false) {
                            _self.closest('div').find('[name="' + data.field + '"]');
                            _self.find('.axil-btn').after('<div class="error-msg mt-3"><p class="text-danger">*' + data.err + '</p></div>');
                        } else {
                            $('.error-msg').hide();
                            $('.form-group').removeClass('focused');
                            _self.find('.axil-btn').after('<div class="success-msg mt-3"><p class="text-success">' + data.success + '</p></div>');
                            _self.closest('div').find('input,textarea').val('');

                            setTimeout(function () {
                                $('.success-msg').fadeOut('slow');
                            }, 5000);
                        }
                    }
                });
            });
        },

        theiaStickySidebar: function () {
            if (typeof ($.fn.theiaStickySidebar) !== "undefined") {
                $('.sticky-coloum-wrap .sticky-coloum-item').theiaStickySidebar({
                    additionalMarginTop: 130
                });
            }
        }, 
       
    }
    axilInit.i();

})(window, document, jQuery);



