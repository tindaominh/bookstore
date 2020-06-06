@extends('layouts.main')

@section('head')
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
        }
    </style>
@endsection

@section('content')
@include('layouts.header1')

<div class="fvc" style="width:100%;">
			
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home"> <a href="/" title="Trang chủ">Trang chủ</a></li>
                
                <li><strong>Liên hệ</strong><li>
                
            </ul>
        </div>
    </div>

    <section id="content">

        <div id="map"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Get in touch with us by filling <strong>contact form below</strong></h4>
                    <form id="contactform" action="contact/contact.php" method="post" class="validateform" name="send-contact">
                        <div id="sendmessage">
                            Your message has been sent. Thank you!
                        </div>
                        <div class="row">
                            <div class="col-lg-4 field">
                                <input type="text" name="name" placeholder="* Enter your full name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation">
                                </div>
                            </div>
                            <div class="col-lg-4 field">
                                <input type="text" name="email" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation">
                                </div>
                            </div>
                            <div class="col-lg-4 field">
                                <input type="text" name="subject" placeholder="Enter your subject" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation">
                                </div>
                            </div>
                            <div class="col-lg-12 margintop10 field">
                                <textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
                                <div class="validation">
                                </div>
                                <p>
                                    <button class="btn btn-theme margintop10 pull-left" type="submit">Submit message</button>
                                    <span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('scripts')
    <script>
    // Initialize and add the map
        function initMap() {
        // The location of Uluru
        var uluru = {lat: 10.806872, lng: 106.689944};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap">
    </script>
@endsection