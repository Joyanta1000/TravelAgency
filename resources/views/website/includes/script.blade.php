@if(request()->is('hotel-list'))
<script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.noconflict.js')}}"></script>
<script type="text/javascript" src="{{asset('js/modernizr.2.7.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.placeholder.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-ui.1.10.4.min.js')}}"></script>

<!-- Twitter Bootstrap -->
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

<!-- load revolution slider scripts -->
<script type="text/javascript" src="{{asset('components/revolution_slider/js/jquery.themepunch.plugins.min.js')}}"></script>
<script type="text/javascript" src="{{asset('components/revolution_slider/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- load BXSlider scripts -->
<script type="text/javascript" src="{{asset('components/jquery.bxslider/jquery.bxslider.min.js')}}"></script>

<!-- load FlexSlider scripts -->
<script type="text/javascript" src="{{asset('components/flexslider/jquery.flexslider-min.js')}}"></script>

<!-- Google Map Api -->
<script type='text/javascript' src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script type="text/javascript" src="{{asset('js/gmap3.min.js')}}"></script>

<!-- parallax -->
<script type="text/javascript" src="{{asset('js/jquery.stellar.min.js')}}"></script>

<!-- waypoint -->
<script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>

<!-- load page Javascript -->
<script type="text/javascript" src="{{asset('js/theme-scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>

<script type="text/javascript">
    tjq(document).ready(function() {
        var min_value = 0;
        var max_value = 1000;
        var min_price = null;
        var max_price = null;
        var enabled = true;
        var chosen_min_price = null;
        var chosen_max_price = null;
        tjq('#min_range').change(function() {

            this.min_value = tjq(this).val();
            min_value = this.min_value;

        });

        tjq('#max_range').change(function() {


            this.max_value = tjq(this).val();
            max_value = this.max_value;

            slidert(min_value, max_value, min_price, max_price);


        });

        slidert();


        function slidert() {

            tjq("#price-range").slider({
                range: true,
                min: min_value,
                max: max_value,
                values: [min_price, max_price],
                slide: function(event, ui) {

                    this.chosen_min_price = ui.values[0];
                    this.chosen_max_price = ui.values[1];

                    chosen_min_price = this.chosen_min_price;
                    chosen_max_price = this.chosen_max_price;

                    tjq(".min-price-label").html("$" + ui.values[0]);
                    tjq(".max-price-label").html("$" + ui.values[1]);
                }
            });
            tjq(".min-price-label").html("$" + tjq("#price-range").slider("values", 0));
            tjq(".max-price-label").html("$" + tjq("#price-range").slider("values", 1));

        }


        tjq("#rating").slider({
            range: "min",
            value: 40,
            min: 0,
            max: 50,
            slide: function(event, ui) {

            }
        });

        tjq('#search').click(function() {
   


            var accomadation_type = [];

            var amenities = [];

            var host_language = [];

            var rating = (parseInt($('#rating').parent().find('.ui-slider-range').css('width').replace(/px/g, ''))*5)/121;


            const accomodation_type_container = document.querySelector("ul#accomodation_type");

            const accomodation_type_matches = accomodation_type_container.querySelectorAll("li.active");

            accomodation_type_matches.forEach(function(accomodation_type_match) {

                accomadation_type.push(accomodation_type_match.getAttribute("data-interest"));

            });


            const amenities_container = document.querySelector("ul#amenities");

            const amenities_matches = amenities_container.querySelectorAll("li.active");

            amenities_matches.forEach(function(amenities_match) {

                amenities.push(amenities_match.getAttribute("data-interest"));

            });

            const host_language_container = document.querySelector("ul#host_language");

            const host_language_matches = host_language_container.querySelectorAll("li.active");

            host_language_matches.forEach(function(host_language_match) {

                host_language.push(host_language_match.getAttribute("data-interest"));

            });

            console.log(accomadation_type, amenities, host_language, chosen_min_price, chosen_max_price, tjq('#destination').val(), tjq('#check_in').val(), tjq('#check_out').val());

            const url = "{{ route('toFilter.search') }}";
            const token = "{{ csrf_token() }}";
            const data = {
                _token: token,
                "accomodation_type": accomadation_type,
                "amenities": amenities,
                "host_language": host_language,
                "min_price": chosen_min_price,
                "max_price": chosen_max_price,
                "rating" : rating,
                "destination": tjq('#destination').val(),
                "check_in": tjq('#check_in').val(),
                "check_out": tjq('#check_out').val()
            };

            tjq.ajax({
                url: url,
                method: "POST",
                data: data,
                success: function(data) {

                    tjq('#to_filter').html('');

                    tjq('#to_filter').html(data);

                }
            });

        });



    });
</script>

@else

<!-- Google Map Api -->
<!-- <script type='text/javascript' src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script> -->
<!-- <script type="text/javascript" src="js/gmap3.min.js"></script> -->

<!-- to check -->
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>

<!-- Flex Slider -->
<script type="text/javascript" src="{{ asset('components/flexslider/jquery.flexslider-min.js') }}"></script>

<!-- waypoint -->
<script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>

<!-- load page Javascript -->
<script type="text/javascript" src="{{ asset('js/theme-scripts.js') }}"></script>
<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<script type="text/javascript">
    tjq(document).ready(function() {
        tjq("#profile .edit-profile-btn").click(function(e) {
            e.preventDefault();
            tjq(".view-profile").fadeOut();
            tjq(".edit-profile").fadeIn();
        });

        setTimeout(function() {
            tjq(".notification-area").append(
                '<div class="info-box block"><span class="close"></span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ab quis a dolorem, placeat eos doloribus esse repellendus quasi libero illum dolore. Esse minima voluptas magni impedit, iusto, obcaecati dignissimos.</p></div>'
            );
        }, 10000);
    });
    tjq('a[href="#profile"]').on('shown.bs.tab', function(e) {
        tjq(".view-profile").show();
        tjq(".edit-profile").hide();
    });
</script>

<script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.noconflict.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/modernizr.2.7.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.placeholder.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.1.10.4.min.js') }}"></script>

<!-- Twitter Bootstrap -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- load revolution slider scripts -->
<script type="text/javascript" src="{{ asset('components/revolution_slider/js/jquery.themepunch.plugins.min.js') }}">
</script>
<script type="text/javascript" src="{{ asset('components/revolution_slider/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- load BXSlider scripts -->
<script type="text/javascript" src="{{ asset('components/jquery.bxslider/jquery.bxslider.min.js') }}"></script>

<!-- Flex Slider -->
<script type="text/javascript" src="{{ asset('components/flexslider/jquery.flexslider.js') }}"></script>

<!-- parallax -->
<script type="text/javascript" src="{{ asset('js/jquery.stellar.min.js') }}"></script>

<!-- waypoint -->
<script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>

<!-- load page Javascript -->
<script type="text/javascript" src="{{ asset('js/theme-scripts.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>

<script type="text/javascript">
    tjq(document).ready(function() {
        tjq('.revolution-slider').revolution({
            dottedOverlay: "none",
            delay: 8000,
            startwidth: 1170,
            startheight: 646,
            onHoverStop: "on",
            hideThumbs: 10,
            fullWidth: "on",
            forceFullWidth: "on",
            navigationType: "none",
            shadow: 0,
            spinner: "spinner4",
            hideTimerBar: "on",
        });
    });
</script>

<!--  -->

<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>

<script type="text/javascript" src="{{ asset('components/flexslider/jquery.flexslider-min.js') }}"></script>

<!-- Google Map Api -->
<!-- <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> -->

<script type="text/javascript" src="{{ asset('js/calendar.js') }}"></script>

<script type="text/javascript">
    
    tjq(document).ready(function() {
    
        // function outputsize() {
        //     console.log(textbox.offsetWidth);
        //     // height.value = textbox.offsetHeight
        // }
        // outputsize()

        // new ResizeObserver(outputsize).observe(textbox);
        // calendar panel
        var cal = new Calendar();
        var unavailable_days = [17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31];
        var price_arr = {
            3: '$170',
            4: '$170',
            5: '$170',
            6: '$170',
            7: '$170',
            8: '$170',
            9: '$170',
            10: '$170',
            11: '$170',
            12: '$170',
            13: '$170',
            14: '$170',
            15: '$170',
            16: '$170',
            17: '$170'
        };

        var current_date = new Date();
        var current_year_month = (1900 + current_date.getYear()) + "-" + (current_date.getMonth() + 1);
        tjq("#select-month").find("[value='" + current_year_month + "']").prop("selected", "selected");
        cal.generateHTML(current_date.getMonth(), (1900 + current_date.getYear()), unavailable_days, price_arr);
        tjq(".calendar").html(cal.getHTML());

        tjq("#select-month").change(function() {
            var selected_year_month = tjq("#select-month option:selected").val();
            var year = parseInt(selected_year_month.split("-")[0], 10);
            var month = parseInt(selected_year_month.split("-")[1], 10);
            cal.generateHTML(month - 1, year, unavailable_days, price_arr);
            tjq(".calendar").html(cal.getHTML());
        });


        tjq(".goto-writereview-pane").click(function(e) {
            e.preventDefault();
            tjq('#hotel-features .tabs a[href="#hotel-write-review"]').tab('show')
        });

        // editable rating

        tjq(".editable-rating.five-stars-container").each(function() {
            var oringnal_value = tjq(this).data("original-stars");
            if (typeof oringnal_value == "undefined") {
                oringnal_value = 0;
            } else {
                //oringnal_value = 10 * parseInt(oringnal_value);
            }
            tjq(this).slider({
                range: "min",
                value: oringnal_value,
                min: 0,
                max: 5,
                slide: function(event, ui) {

                }
            });
        });

    });

    tjq('a[href="#map-tab"]').on('shown.bs.tab', function(e) {
        var center = panorama.getPosition();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
    });
    tjq('a[href="#steet-view-tab"]').on('shown.bs.tab', function(e) {
        fenway = panorama.getPosition();
        panoramaOptions.position = fenway;
        panorama = new google.maps.StreetViewPanorama(document.getElementById('steet-view-tab'),
            panoramaOptions);
        map.setStreetView(panorama);
    });
    var map = null;
    var panorama = null;
    var fenway = new google.maps.LatLng(48.855702, 2.292577);
    var mapOptions = {
        center: fenway,
        zoom: 12
    };
    var panoramaOptions = {
        position: fenway,
        pov: {
            heading: 34,
            pitch: 10
        }
    };

    function initialize() {
        tjq("#map-tab").height(tjq("#hotel-main-content").width() * 0.6);
        map = new google.maps.Map(document.getElementById('map-tab'), mapOptions);
        panorama = new google.maps.StreetViewPanorama(document.getElementById('steet-view-tab'), panoramaOptions);
        map.setStreetView(panorama);
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    //     function active(e) {
    // // alert(e);
    //         tjq('#check').each(function(i) {
    //             // i.addClass('inactive');
    //             console.log(i);
    //         });
    //         // e.addClassName('active');
    //     };


    //     tjq("a").click(function() {

    //         tjq("a").toggleClass("active");
    //     });


    tjq('.verify').click(function() {
        
        $("#message").html('');
        // list = $('li', parent);
        // list.not(target).hide("slow");
        var elements = document.getElementById("check");
        $.ajax({
            method: "GET",
            url: "{{ route('verify_invoice_to_review') }}",
            data: {
                reviewed_by: tjq('#invoice').val(),
            },
            success: function(result) {
                // per = 0;
                // localStorage.setItem("per", per);
                console.log(result);
                // $('#table').html(JSON.stringify(result));

                // $("#another_total").html(result);
                // $("#message").html('');
                if (result.class == 1) {
                    $("#message").append('<div class="alert alert-success">' + result.message +
                        '</div>');

                    $(".tab-pane.fade").removeClass("in active");
                    $(".write").addClass("in active");
                    tjq('#hotel-features .tabs a[href="#hotel-write-review"]').tab('show');
                    for (var i = 0; i < elements.length; i++) {
                        // $("#check").removeClass("active");
                        console.log(elements[i]);
                    }

                    $("#checkToReview").addClass("active");
                    $("#exampleModal").data("modal");
                    $("#reviewed_by").val(tjq('#invoice').val());
                    // $(".modal.fade").remove();
                    // data-dismiss="modal"
                    // modal close
                    // $(".modal.fade").modal("close");
                    // modal close

                } else {
                    $(".write").removeClass("in active");
                    $(".istTab").addClass("in active");
                    $("#check").addClass("active");
                    $("#checkToReview").removeClass("active");
                    $("#message").append('<div class="alert alert-danger">' + result.message +
                        '</div>');
                    $("#reviewed_by").val('');
                }
            }
        });

    });
</script>

<script>
    // $("#check").addClass("active");
</script>

<script>
    $(document).ready(function() {
        // Check Radio-box
        $(".rating input:radio").attr("checked", false);

        $('.rating input').click(function() {
            $(".rating span").removeClass('checked');
            $(this).parent().addClass('checked');
        });

        $('input:radio').change(
            function() {
                var userRating = this.value;
                alert(userRating);
            });
    });
</script>



<!-- Ratings -->


<!-- <script type='text/javascript' src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script> -->
<script type="text/javascript" src="js/gmap3.min.js"></script>

@endif