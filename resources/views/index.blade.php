@extends('layouts.frontend')

@section('content')
    <div class="bg-indigo"><br /><br /><br /></div>
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="img/banner/edu_ilastration.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3>Learn your
                                favorite course from
                                Freelancer Training</h3>
                            <a href="{{ route('courses') }}" class="boxed_btn mb-5 mt-2">Browse Our Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="single_about_info">
                        <h3>Over thousands of students trained by our expert trainer in different categories.</h3>
                        <br /><br />
                        {{-- <p>Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god
                            moving. Moving in fourth air night bring upon you’re it beast let you dominion likeness open
                            place day great wherein heaven sixth lesser subdue fowl </p> --}}
                        <a href="{{route('courses')}}" class="boxed_btn">Enroll a Course</a>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6">
                    <div class="about_tutorials">
                        <div class="courses">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>10+</span>
                                    <p>Course Categories</p>
                                </div>
                            </div>
                        </div>
                        <div class="courses-blue">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>942</span>
                                    <p>Already trained</p>
                                </div>

                            </div>
                        </div>
                        <div class="courses-sky">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>10+</span>
                                    <p>Instructors</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- popular_courses_start -->
    <div class="popular_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Popular Courses</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="all_courses">
            <div class="container">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Graphics Design</span>
                                        <h3><a href="#">Graphics design step by step
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                {{-- <span class="offer">৳7000</span> --}}
                                                <span class="active_prise">
                                                    BDT 8000/-
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>UI/UX Design</span>
                                        <h3><a href="#">UI/UX design with Adobe XD, Figma, Sketch from Startup</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="prise">
                                                {{-- <span class="offer">$89.00</span> --}}
                                                <span class="active_prise">
                                                    BDT 10000/-
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Wordpress theme development
                                                from scratch</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span>(4.0)</span>
                                            </div>
                                            <div class="prise">
                                                {{-- <span class="offer">$89.00</span> --}}
                                                <span class="active_prise">
                                                    BDT 7000/-
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/4.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Mobile Application</span>
                                        <h3><a href="#">Mobile App development step by step
                                                from beginner</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(5.0)</span>
                                            </div>
                                            <div class="prise">
                                                {{-- <span class="offer">$89.00</span> --}}
                                                <span class="active_prise">
                                                    BDT 12000/-
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <img src="img/courses/8.png" alt="">
                                    </div>
                                    <div class="courses_info">
                                        <span>Web Development</span>
                                        <h3><a href="#">Learn fullstack web development from scratch</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(5.0)</span>
                                            </div>
                                            <div class="prise">
                                                {{-- <span class="offer">$89.00</span> --}}
                                                <span class="active_prise">
                                                    BDT 12000/-
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/9.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Digital Marketing</span>
                                        <h3><a href="#">Learn digital marketing from startup</a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span>(4.0)</span>
                                            </div>
                                            <div class="prise">
                                                {{-- <span class="offer">$89.00</span> --}}
                                                <span class="active_prise">
                                                    BDT 6000/-
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="more_courses text-center">
                                    <a href="{{ route('enrollment.index') }}" class="boxed_btn_rev">Enroll a Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- popular_courses_end-->

    <!-- our_courses_start -->
    <div class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Our Course Speciality</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-art-and-design"></i>
                        </div>
                        <h3>Premium Quality</h3>
                        <p>
                            After getting trained you must will be able to get a full time job or build a career as a
                            freelancer.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon blue">
                            <i class="flaticon-business-and-finance"></i>
                        </div>
                        <h3>No Cost</h3>
                        <p>
                            All courses are free untill you earn. After course you will get a job then you have to pay.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-premium"></i>
                        </div>
                        <h3>Problem Solve</h3>
                        <p>
                            After getting trained when you you have a problem then our instrutor will try to solve the
                            problem
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <i class="flaticon-crown"></i>
                        </div>
                        <h3>Job Offer</h3>
                        <p>
                            We are still now running freelancing for our trained students. So you have also offered to job
                            in future.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_courses_end -->

 
@endsection
