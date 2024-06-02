@extends('site.layouts.master')
@section('content')
<div class="modal contact-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog container mx-auto modal-lg">
        <div class="modal-content margin-top-150px ">
            <div class=" no-gutters">
                <div class="container mx-auto text-center">
                    <div class="padding-30px">
                        <img src="{{ asset('assets_front/assets/img/hello.jpg') }}" alt="">
                        <h3 class="padding-bottom-15px text-main-color mt-4">COOMING SOON</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="page-title pt-5">
    <div class="container">
        <div class="padding-tb-120px">
            <h1>EDUCATION</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Education</li>
            </ol>
        </div>
    </div>
</div>



<div class="nile-about-section">
    <div class="container">
        <div class="section-title margin-bottom-40px">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="h2">Some Our Courses</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-4 sm-mb-45px">
                <div class="background-white courseContainer  thum-hover box-shadow hvr-float full-width wow fadeInUp">
                    <div class="float-md-left margin-right-30px thum-xs">
                        <img src="{{ asset('assets_front/assets/img/portfolio1.jpg') }}" alt="" class="courseImg">
                    </div>
                    <div class="padding-25px">
                        <p href="#" class="text-main-color">Course Title </p>
                        <h3>
                            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" class="d-block text-dark text-capitalize text-medium margin-tb-15px">
                                Long Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, est.... 
                            </a>
                        </h3>
                        <span class="margin-right-20px text-extra-small">
                            <i class="fa fa-user text-grey-2"></i> 
                            By : <a href="#"> Rabie Elkheir</a>
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-6 mt-4 sm-mb-45px">
                <div class="background-white courseContainer  thum-hover box-shadow hvr-float full-width wow fadeInUp">
                    <div class="float-md-left margin-right-30px thum-xs">
                        <img src="{{ asset('assets_front/assets/img/portfolio2.jpg') }}" alt="" class="courseImg">
                    </div>
                    <div class="padding-25px">
                        <p href="#" class="text-main-color">Course Title </p>
                        <h3>
                            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" class="d-block text-dark text-capitalize text-medium margin-tb-15px">
                                Long Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, est....
                            </a>
                        </h3>
                        <span class="margin-right-20px text-extra-small">
                            <i class="fa fa-user text-grey-2"></i>
                            By: <a href="#"> Rabie Elkheir</a>
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-6 mt-4 sm-mb-45px">
                <div class="background-white courseContainer  thum-hover box-shadow hvr-float full-width wow fadeInUp">
                    <div class="float-md-left margin-right-30px thum-xs">
                        <img src="{{ asset('assets_front/assets/img/portfolio3.jpg') }}" alt="" class="courseImg">
                    </div>
                    <div class="padding-25px">
                        <p href="#" class="text-main-color">Course Title </p>
                        <h3>
                            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" class="d-block text-dark text-capitalize text-medium margin-tb-15px">
                                Long Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, est....
                            </a>
                        </h3>
                        <span class="margin-right-20px text-extra-small">
                            <i class="fa fa-user text-grey-2"></i>
                            By : <a href="#"> Rabie Elkheir</a>
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-6 mt-4 sm-mb-45px">
                <div class="background-white courseContainer  thum-hover box-shadow hvr-float full-width wow fadeInUp">
                    <div class="float-md-left margin-right-30px thum-xs">
                        <img src="{{ asset('assets_front/assets/img/portfolio1.jpg') }}" alt="" class="courseImg">
                    </div>
                    <div class="padding-25px">
                        <p href="#" class="text-main-color">Course Title </p>
                        <h3>
                            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" class="d-block text-dark text-capitalize text-medium margin-tb-15px">
                                Long Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, est....
                            </a>
                        </h3>
                        <span class="margin-right-20px text-extra-small">
                            <i class="fa fa-user text-grey-2"></i>
                            By : <a href="#"> Rabie Elkheir</a>
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection