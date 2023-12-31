@extends('web.site.app')

@section('pageTitle')
    @include('web.site.partials._slider')
@endsection

@section('content')
    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="{{ asset('assets/web/images/about-img.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <div class="inner-column">
                        <h1>Welcome To <span>Yamifood Restaurant</span></h1>
                        <h4>Little Story</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut
                            at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante
                            sodales augue, eget lacinia lectus erat et sem. </p>
                        <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a
                            pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.
                        </p>
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    @include('web.site.partials._qt')

    @include('web.site.partials._menu')

    @include('web.site.partials._gallery')
@endsection
