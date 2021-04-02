@extends('layouts.frontend')

@section('content')

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>Our Courses</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- popular_courses_start -->
    <div class="popular_courses">

        <div class="all_courses">
            <div class="container">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">

                            @foreach ($courses as $course)
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="{{ asset($course->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>{{ $course->category }}</span>
                                            <h3><a href="#">{{ $course->title }}</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    @for ($i = 0; $i <= 4; $i++)
                                                        @if ($course->rating > $i) 
                                                            @if ($course->rating == $i + 0.5)
                                                                <i class="fa fa-star-half"></i>
                                                            @else
                                                                <i class="fa fa-star"></i>
                                                            @endif
                                                        @else
                                                            <i class="fa fa-star-o"></i>
                                                        @endif
                                                    @endfor
                                                    <span>({{ $course->rating }})</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="active_prise">
                                                        BDT {{ $course->price }}/-
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-xl-12">
                                <div class="more_courses text-center">
                                    <a href="{{ route('enrollment.index') }}"
                                        class="boxed_btn_rev bg-info text-white">Enrole a course</a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- popular_courses_end-->



@endsection
