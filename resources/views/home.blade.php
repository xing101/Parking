@extends('layouts.master')
@section('content')

    

    <div class="blog_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="blog_img"><img src="{{ asset('images/left-col.jpg') }}"></div>
                </div>
                <div class="col-md-6">
                    <div class="blog_taital_main">
                        <h1 class="blog_taital">Guided valet services and management</h1>
                        <p class="blog_text">As a premier parking and hospitality services provider, our commitment extends beyond excellence to becoming a true authority in aviation auxiliary services. We are dedicated to elevating the standards of customer experience and providing a comprehensive suite of capabilities that go beyond the ordinary.</p>
                        <div class="readmore_bt_1"><a href="#">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services_section layout_padding">
        <div class="container">
            <div class="services_main">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="services_taital">Our Services <span class="border_0"></span></h1>
                        <p class="services_text">It is a long established fact that a reader will be distracted by the readable content of a page when</p>
                    </div>
                </div>
                <div class="services_section_2">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="icon_1"><img src="images/icon-1.png"></div>
                            <h3 class="selection_text">Car rental service</h3>
                            <p class="many_text">There are many variations of passages of Lorem Ipsum available, but the form, by injected humour, or </p>
                        </div>
                        <div class="col-md-4">
                            <div class="icon_1"><img src="images/icon-2.png"></div>
                            <h3 class="selection_text">Ride haulings</h3>
                            <p class="many_text">There are many variations of passages of Lorem Ipsum available, but the form, by injected humour, or </p>
                        </div>
                        <div class="col-md-4">
                            <div class="icon_1"><img src="images/icon-3.png"></div>
                            <h3 class="selection_text">Pickup & drop Off</h3>
                            <p class="many_text">There are many variations of passages of Lorem Ipsum available, but the form, by injected humour, or </p>
                        </div>
                    </div>
                </div>
                <div class="read_bt"><a href="{{url('service')}}">Read More</a></div>
            </div>
        </div>
    </div>
    <div class="blog_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="blog_img"><img src="{{ asset('images/col-left.jpg') }}"></div>
                </div>
                <div class="col-md-6">
                    <div class="blog_taital_main">
                        <h1 class="blog_taital">Effortless Parking Solutions with Angkor Parking: Convenience at Your Fingertips</h1>
                        <p class="blog_text">Experience hassle-free parking tailored to your needs with Angkor Parking. Our secure facilities and convenient services ensure a seamless experience for daily commuters, event attendees, and businesses. Trust Angkor Parking for reliable, accessible, and cost-effective parking solutions. </p>
                        <div class="readmore_bt_1"><a href="#">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Contact Us --}}
    {{-- <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="contact_taital">Get In Touch <span class="border_0"></span></h1>
                    <p class="contact_text">majority have suffered alteration in some form, by injected humour, or </p>
                </div>
            </div>
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <div class="mail_section_1">
                                <input type="text" class="mail_text" placeholder="Name" name="Name">
                                <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number"> 
                                <input type="text" class="mail_text" placeholder="Email" name="Email">
                                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                                <div class="send_bt"><a href="#">SEND</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="map_main">
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- End Contact --}}

    {{-- Form For Make Appointment --}}
    <div id="form_section_2" class="form_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="form_taital">Parking Reservation <span class="border_0"></span></h1>
                    <h4 style="color:#d6d6d6">Please fill out the form to reserve your parking spot. <span class="border_0"></span></h4>
                </div>
            </div>
            <div class="form_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <form action="parking_reservation_process.php" method="post">
                            <div class="form_section_1">
                                <input type="text" class="form_text" placeholder="Name" name="Name">
                                <input type="text" class="form_text" placeholder="Phone Number" name="PhoneNumber"> 
                                <input type="text" class="form_text" placeholder="License Plate Number" name="LicensePlate">
                                <input type="text" class="form_text" placeholder="Check-in Date" name="CheckInDate">
                                <input type="text" class="form_text" placeholder="Check-out Date" name="CheckOutDate">
                                {{-- <div class="form_bt"><button type="submit">Submit Reservation</button></div> --}}
                                <div class="form_bt"><a href="#">Submit</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="map_main">  
                                <div class="blog_img"><img src="{{ asset('images/left-col.jpg') }}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- End Make Appointment --}}

    <div class="clients_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="clients_taital">What says Clients</h1>
                </div>
            </div>
            <div class="client_section_2">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h3 class="client_name">Bun Thorn</h3>
                            <p class="event_text">Angkor Parking has revolutionized our event parking logistics. Their professionalism and dedication ensure smooth operations every time. Highly recommend their services!</p>
                        </div>
                        <div class="carousel-item">
                            <h3 class="client_name">Vannda</h3>
                            <p class="event_text">As a frequent commuter, Angkor Parking has become my go-to choice. Their secure facilities and competitive rates make parking hassle-free. Exceptional service!</p>
                        </div>
                        <div class="carousel-item">
                            <h3 class="client_name">Den Mork</h3>
                            <p class="event_text">We've partnered with Angkor Parking for our business parking needs. Their flexibility in contract options and reliability have greatly benefited our employees and clients. A trusted parking solution!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

