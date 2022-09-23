(function ($) {
    $(document).ready(function () {

        // new WOW().init();

        $('.third-button').on('click dblclick', function () {
            $('.animated-icon3').toggleClass('open');
        });

        // Add Class When Scrolls
        var nav = $('.custom-navbar');
        var top = 10;

        $(window).scroll(function () {
            if ($(window).scrollTop() >= top) {
                nav.addClass('shrink');
            } else {
                nav.removeClass('shrink');
            }
        });
        if ($(window).scrollTop() >= 10) {
            nav.addClass('shrink');
        }


        // var hello = $(".dropdown-toggle").data("toggle");
        // Add drowdown class to the menu
        if ($(window).width() <= 992) {
            $(".dropdown").removeClass("hover-dropdown");
            $(".dropdown-toggle").attr("data-toggle", "dropdown");
        } else {
            $(".dropdown").addClass("hover-dropdown");
            $(".dropdown-toggle").attr("data-toggle", "");
        }

        $(window).resize(function () {
            if ($(window).width() <= 992) {
                $(".dropdown").removeClass("hover-dropdown");
                $(".dropdown-toggle").attr("data-toggle", "dropdown");
            } else {
                $(".dropdown").addClass("hover-dropdown");
                $(".dropdown-toggle").attr("data-toggle", "");
            }
        });

        // Swiper
        var gkaThemeSlider = new Swiper('.gka-theme-swiper-container', {
            autoplay: {
                delay: 7000,
            },
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1200: {
                    allowTouchMove: false,
                }
            }
        });

        $(".membership-list .member-open").on("click", function (event) {
            event.preventDefault(event);
            if ($(this).parent().parent().find(".info").hasClass("open")) {
                $(this).parent().parent().find(".info").removeClass("open");
                $(this).find("i").removeClass("rotate");
            } else {
                $(this).parent().parent().find(".info").addClass("open");
                $(this).find("i").addClass("rotate");
            }
        });


        // Interactive floor plan
        $("#krr_meetings_fp_svg .room").hover(function () {
            var room_id = this.id;
            console.log(room_id);
            var room_spec = {
                "tazewell": {
                    "Dimensions": "58’ x 35’",
                    "Height": "12’/11’",
                    "SqFt": "2,010",
                    "Reception": "120",
                    "Banquet": "120",
                    "Theater": "156",
                    "Classroom": "117",
                    "HollowSquare": "45",
                    "U-Shape": "42",
                    "Conference": "36",
                },
                "whittaker": {
                    "Dimensions": "30’ x 27’",
                    "Height": "12’/11’",
                    "SqFt": "795",
                    "Reception": "50",
                    "Banquet": "50",
                    "Theater": "53",
                    "Classroom": "35",
                    "HollowSquare": "23",
                    "U-Shape": "22",
                    "Conference": "17",
                },
                "wareham": {
                    "Dimensions": "32’ x 25’",
                    "Height": "11’/11’",
                    "SqFt": "800",
                    "Reception": "50",
                    "Banquet": "50",
                    "Theater": "38",
                    "Classroom": "28",
                    "HollowSquare": "18",
                    "U-Shape": "24",
                    "Conference": "22",
                },
                "yeardley": {
                    "Dimensions": "19’ x 22’",
                    "Height": "11’/11’",
                    "SqFt": "418",
                    "Reception": "--",
                    "Banquet": "--",
                    "Theater": "--",
                    "Classroom": "--",
                    "HollowSquare": "--",
                    "U-Shape": "--",
                    "Conference": "12",
                },
                "archer": {
                    "Dimensions": "32’ x 23’",
                    "Height": "11’/11’",
                    "SqFt": "734",
                    "Reception": "50",
                    "Banquet": "50",
                    "Theater": "55",
                    "Classroom": "34",
                    "HollowSquare": "24",
                    "U-Shape": "21",
                    "Conference": "20",
                },
                "colston": {
                    "Dimensions": "32’ x 24’",
                    "Height": "11’/11’",
                    "SqFt": "776",
                    "Reception": "40",
                    "Banquet": "40",
                    "Theater": "57",
                    "Classroom": "34",
                    "HollowSquare": "27",
                    "U-Shape": "25",
                    "Conference": "20",
                },
                "randolph": {
                    "Dimensions": "44’ x 28’",
                    "Height": "12’/11’",
                    "SqFt": "1,232",
                    "Reception": "50",
                    "Banquet": "50",
                    "Theater": "84",
                    "Classroom": "60",
                    "HollowSquare": "33",
                    "U-Shape": "33",
                    "Conference": "22",
                },
                "riverview": {
                    "Dimensions": "58’ x 35’",
                    "Height": "11’/11’",
                    "SqFt": "962",
                    "Reception": "70",
                    "Banquet": "60",
                    "Theater": "--",
                    "Classroom": "60",
                    "HollowSquare": "40",
                    "U-Shape": "35",
                    "Conference": "40",
                },
                "burwell-a": {
                    "Dimensions": "54’ x 36’",
                    "Height": "15’/14’",
                    "SqFt": "1,944",
                    "Reception": "200",
                    "Banquet": "120",
                    "Theater": "146",
                    "Classroom": "110",
                    "HollowSquare": "43",
                    "U-Shape": "40",
                    "Conference": "33",
                },
                "burwell-b": {
                    "Dimensions": "54’ x 36’",
                    "Height": "15’/14’",
                    "SqFt": "1,944",
                    "Reception": "200",
                    "Banquet": "120",
                    "Theater": "146",
                    "Classroom": "110",
                    "HollowSquare": "43",
                    "U-Shape": "40",
                    "Conference": "33",
                },
                "fairfax": {
                    "Dimensions": "30’ x 21’",
                    "Height": "18’/14’",
                    "SqFt": "630",
                    "Reception": "40",
                    "Banquet": "32",
                    "Theater": "43",
                    "Classroom": "29",
                    "HollowSquare": "21",
                    "U-Shape": "18",
                    "Conference": "15",
                },
                "A": {
                    "Dimensions": "36’ x 27‘",
                    "Height": "18’/14’",
                    "SqFt": "990",
                    "Reception": "100",
                    "Banquet": "70",
                    "Theater": "78",
                    "Classroom": "48",
                    "HollowSquare": "34",
                    "U-Shape": "32",
                    "Conference": "25",
                },
                "B": {
                    "Dimensions": "36’ x 27‘",
                    "Height": "18’/14’",
                    "SqFt": "990",
                    "Reception": "100",
                    "Banquet": "70",
                    "Theater": "78",
                    "Classroom": "48",
                    "HollowSquare": "34",
                    "U-Shape": "32",
                    "Conference": "25",
                },
                "C": {
                    "Dimensions": "55’ x 47’",
                    "Height": "18’/14’",
                    "SqFt": "2,640",
                    "Reception": "270",
                    "Banquet": "200",
                    "Theater": "222",
                    "Classroom": "144",
                    "HollowSquare": "58",
                    "U-Shape": "56",
                    "Conference": "35",
                },
                "D": {
                    "Dimensions": "55’ x 26’",
                    "Height": "18’/14’",
                    "SqFt": "1,430",
                    "Reception": "150",
                    "Banquet": "90",
                    "Theater": "130",
                    "Classroom": "64",
                    "HollowSquare": "42",
                    "U-Shape": "40",
                    "Conference": "35",
                }
            }

            $("#Dimensions .spec").html(room_spec[room_id]['Dimensions']);
            $("#Height .spec").html(room_spec[room_id]['Height']);
            $("#SqFt .spec").html(room_spec[room_id]['SqFt']);
            $("#Reception .spec").html(room_spec[room_id]['Reception']);
            $("#Banquet .spec").html(room_spec[room_id]['Banquet']);
            $("#Theater .spec").html(room_spec[room_id]['Theater']);
            $("#Classroom .spec").html(room_spec[room_id]['Classroom']);
            $("#HollowSquare .spec").html(room_spec[room_id]['HollowSquare']);
            $("#U-Shape .spec").html(room_spec[room_id]['U-Shape']);
            $("#Conference .spec").html(room_spec[room_id]['Conference']);
            $("#room_name").html(room_id + ":");
            console.log(room_spec[room_id]);
        }, function () {
            // out
        }
        );
    }); /* Document Ready End */
})(jQuery);










