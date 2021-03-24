@extends('layouts.frontend')

@section('content')

        <!-- bradcam_area_start -->
        <div class="bradcam_area breadcam_bg overlay2">
            <h3>Our Courses</h3>
        </div>
        <!-- bradcam_area_end -->

    <!-- popular_courses_start -->
    <div class="popular_courses">
        {{-- <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Courses</h3>
                    </div>
                </div>
            </div>
        </div> --}}

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
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Wordpress</span>
                                        <h3><a href="#">Wordpress theme and plugin development
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
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/courses/seo.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Digital Marketing</span>
                                        <h3><a href="#">Learn SEO from scratch with empty knowledge.</a></h3>
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
                                                    BDT 5000/-
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
                                            <img src="img/courses/website.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Website Builds</span>
                                        <h3><a href="#">Learn how to build a website and customize.</a></h3>
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
                                                    BDT 4000/-
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
                                            <img src="img/courses/template.png" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <span>Website Design</span>
                                        <h3><a href="#">Frontend web development, psd to html, template design.</a></h3>
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
                                                    BDT 6000/-
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-12">
                                <div class="more_courses text-center">
                                    <a href="{{ route('enrollment.index') }}" class="boxed_btn_rev bg-info text-white">Enrole a course</a>
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