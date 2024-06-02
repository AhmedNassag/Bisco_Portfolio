@extends('site.layouts.master')
@section('content')
<div class="page-title pt-5">
    <div class="container">
        <div class="padding-tb-120px">
            <h1>Work</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Work</li>
            </ol>
        </div>
    </div>
</div>



<div class="padding-tb-100px">
    <div class="container-xxl">
        <div class="">
            <div class="">
                <div class="post-standard">
                    <div class="meta-out margin-bottom-20px">
                        <ul class="meta">
                            <li>
                                <span class="icon icon_clock_alt"></span>
                                May 22, 2018
                            </li>
                        </ul>
                    </div>
                    <div class="thum-img">
                        <a href="#">
                            <img src="{{ asset('assets_front/assets/img/portfolio1.jpg') }}" class="projectDetails" alt="" style=" height: 500px;object-fit: cover;">
                        </a>
                    </div>
                    <a href="#" class="title">Lorem ipsum dolor sit.</a>
                    <div class="entry-content my-3">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, nemo provident. Doloribus
                            nobis laborum, inventore magni voluptate voluptas pariatur rem consectetur adipisicing
                            elit. Eos, nemo provident. Doloribus
                            nobis laborum, inventore magni voluptate voluptas pariatur rem...</p>
                        <p>
                            Mauris fermentum porta sem, non hendrerit enim bibendum consectetur. Fusce diam est,
                            porttitor vehicula gravida at, accumsan bibendum tincidunt imperdiet. Maecenas quis
                            magna faucibus, varius ante sit amet, varius augue. Praesent aliquam, augue ac pulvinar
                            accumsan Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quidem libero,
                            odio sit incidunt cupiditate officia veritatis tenetur similique labore.
                        </p>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, exercitationem!
                            Recusandae libero cumque culpa assumenda ullam ratione ab esse repellat magnam, cum
                            doloremque! Corrupti, cumque labore quibusdam, voluptatem, minima commodi dolore nemo
                            quisquam tempora aut vero similique esse aliquid provident! Dolorem facere quo nihil
                            voluptas repudiandae? Temporibus officia enim eum?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection