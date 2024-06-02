@extends('site.layouts.master')
@section('content')
<div class="page-title pt-5">
    <div class="container">
        <div class="padding-tb-120px">
            <h1>Contact Us</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Contact Us</li>
            </ol>
        </div>
    </div>
</div>



<div class="padding-tb-100px" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sm-mb-45px">
                <p> 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <h5>Phone :</h5>
                <span class="d-block">
                    <i class="fa fa-phone text-main-color margin-right-10px" aria-hidden="true"></i>
                    +222 333 019
                </span>
                <span class="d-block sm-mb-30px">
                    <i class="fa fa-mobile text-main-color margin-right-10px" aria-hidden="true"></i>
                    +222 333 019
                </span>
                <h5 class="margin-top-20px">Address :</h5>
                <span class="d-block sm-mb-30px">
                    <i class="fa fa-map text-main-color margin-right-10px" aria-hidden="true"></i>
                    1105 Mansoura Dakahlia - Egypt 
                </span>
                <h5 class="margin-top-20px">Email :</h5>
                <span class="d-block sm-mb-30px">
                    <i class="fa fa-envelope-open text-main-color margin-right-10px" aria-hidden="true"></i> 
                    info@biohealux.com 
                </span>
            </div>

            <div class="col-lg-6">
                <div class="contact-modal">
                    <div class="background-main-color">
                        <div class="padding-30px">
                            <h3 class="padding-bottom-15px">Contact Us</h3>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" id="inputName44" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Phone Number</label>
                                        <input type="tel" class="form-control" id="inputEmail44" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea11" rows="3"></textarea>
                                </div>
                                <a href="#" class="btn-sm btn-lg btn-block background-dark text-white text-center  text-uppercase rounded-0 padding-15px">SEND MESSAGE</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="map-layout">
    <div class="map-embed">
        <iframe src="https://www.google.com/maps/embed/v1/place?q=mansoura&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8"></div>
            <div class="col-lg-4">
                <div class="padding-tb-50px padding-lr-30px background-main-color pull-top-309px">
                    <div class="contact-info-map">
                        <div class="margin-bottom-30px">
                            <h2 class="title">Location</h2>
                            <div class="contact-info opacity-9">
                                <div class="icon margin-top-5px"><span class="icon_pin_alt"></span></div>
                                <div class="text">
                                    <span class="title-in">Location :</span> <br>
                                    <span class="font-weight-500 text-uppercase">Mansoura Dakahlia - Egypt</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="call_center margin-top-30px">
                            <h2 class="title">Call Center</h2>
                            <div class="contact-info opacity-9">
                                <div class="icon  margin-top-5px"><span class="icon_phone"></span></div>
                                <div class="text">
                                    <span class="title-in">Call Us :</span><br>
                                    <span class="font-weight-500 text-uppercase">00222123333019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection