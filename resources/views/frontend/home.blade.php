@extends('layouts.front')
@section('title')
ABMohsin
@endsection
@section('content')

    @include('frontend.partials.navbar')
    @include('frontend.partials.header')

    <section class="ftco-counter img bg-light" id="section-counter">
        <div class="container">
            <div class="row">
                @if ($counters)
                    @foreach ($counters as $counter)
                    <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset($counter->icon) }}" width="30px" alt="">
                            </div>
                            <div class="text">
                                <strong class="number" data-number="{{ $counter->number }}">0</strong>
                                <span>{{ $counter->title }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif

                {{-- <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-loyalty"></span>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="568">0</strong>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-coffee"></span>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="478">0</strong>
                            <span>Cups of coffee</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-calendar"></span>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="780">0</strong>
                            <span>Years experienced</span>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="background-image:url({{ $about['image'] }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <span class="subheading">{{ $about['intro'] }}</span>
                                <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">{{ $about['title'] }}</h2>
                                <p>{{ $about['description'] }}</p>

                                <ul class="about-info mt-4 px-md-0 px-2">
                                    <li class="d-flex"><span>Name:</span> <span>{{ $about['full_name'] }}</span></li>
                                    <li class="d-flex"><span>Date of birth:</span> <span>{{ $about['date_of_birth'] }}</span></li>
                                    <li class="d-flex"><span>Address:</span> <span>{{ $about['address'] }}</span></li>
                                    <li class="d-flex"><span>Zip code:</span> <span>{{ $about['zip_code'] }}</span></li>
                                    <li class="d-flex"><span>Email:</span> <span>{{ $about['email'] }}</span></li>
                                    <li class="d-flex"><span>Phone: </span> <span>{{ $about['phone'] }}</span></li>
                                </ul>
                            </div>
                            {{-- <div class="col-md-12">
                                <div class="my-interest d-lg-flex w-100">
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-listening"></span>
                                        </div>
                                        <div class="text">Music</div>
                                    </div>
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-suitcases"></span>
                                        </div>
                                        <div class="text">Travel</div>
                                    </div>
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-video-player"></span>
                                        </div>
                                        <div class="text">Movie</div>
                                    </div>
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-football"></span>
                                        </div>
                                        <div class="text">Sports</div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light" id="skills-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Skills</span>
                    <h2 class="mb-4">My Skills</h2>
                    <p>We offer a wide range of services tailored to meet your needs, ensuring quality and excellence <br> in every project we undertake. Let us help you achieve your goals with <br> our professional expertise.</p>
                </div>
            </div>
            <div class="row progress-circle mb-5">
                {{-- <div class="col-lg-4 mb-4">
                    <div class="bg-white rounded-lg shadow p-4">
                        <h2 class="h5 font-weight-bold text-center mb-4">CSS</h2>

                        <!-- Progress bar 1 -->
                        <div class="progress mx-auto" data-value='40'>
                            <span class="progress-left">
                                <span class="progress-bar border-primary"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar border-primary"></span>
                            </span>
                            <div
                                class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                <div class="h2 font-weight-bold">40<sup class="small">%</sup></div>
                            </div>
                        </div>
                        <!-- END -->

                        <!-- Demo info -->
                        <div class="row text-center mt-4">
                            <div class="col-6 border-right">
                                <div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last
                                    week</span>
                            </div>
                            <div class="col-6">
                                <div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last
                                    month</span>
                            </div>
                        </div>
                        <!-- END -->
                    </div>
                </div> --}}

                @if (@$skills)
                    @foreach ($skills as $skill)
                    <div class="col-lg-4 mb-4">
                        <div class="bg-white rounded-lg shadow p-4 pb-5">
                            <h2 class="h5 font-weight-bold text-center mb-4">{{ $skill->title }}</h2>
    
                            <!-- Progress bar 1 -->
                            <div class="progress mx-auto " data-value='{{ $skill->number }}'>
                                <span class="progress-left">
                                    <span class="progress-bar border-primary"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar border-primary"></span>
                                </span>
                                <div
                                    class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                    <div class="h2 font-weight-bold">{{ $skill->number }}<sup class="small">%</sup></div>
                                </div>
                            </div>
                            <!-- END -->
    
                            <!-- Demo info -->
                            {{-- <div class="row text-center mt-4">
                                <div class="col-6 border-right">
                                    <div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last
                                        week</span>
                                </div>
                                <div class="col-6">
                                    <div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last
                                        month</span>
                                </div>
                            </div> --}}
                            <!-- END -->
                        </div>
                    </div>
                    @endforeach
                @endif

              
            </div>
        </div>
    </section>

    <section class="ftco-section" id="services-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">I am grat at</span>
                    <h2 class="mb-4">Awesome services for <br> our clients</h2>
                    {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> --}}
                </div>
            </div>

            <div class="row">
               @if (@$services)
                   @foreach ($services as $service)
                   <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <img src="{{ asset($service->icon) }}" style="width:40px;height:40px" alt="">
                            </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">{{ $service->title }}</h3>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                </div>
                   @endforeach
               @endif
            </div>

    
        </div>
    </section>

    <section class="ftco-hireme">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-8 col-lg-8 d-flex align-items-center">
                    @if (@$hire)
                    <div class="w-100 py-4">
                        <h2>{{ $hire->title }}</h2>
                        <p>{{ $hire->description }}</p>
                        <p class="mb-0"><a href="#contact-section" class="btn btn-white py-3 px-4">Contact me</a></p>
                    </div>
                    @endif
                </div>
                <div class="col-md-4 col-lg-4 d-flex align-items-end">
                    <img src="{{ asset('front/assets/images/author.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container-fluid px-md-4">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Accomplishments</span>
                    <h2 class="mb-4">Our Projects</h2>
                    <p>Explore our portfolio of successful ventures. From concept to completion,<br> we deliver excellence across diverse industries, crafting solutions <br> that make a lasting impact. Let our work speak for itself.</p>
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-md-3">
                    <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(front/assets/images/work-1.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div> --}}

                @if(@$projects)
                    @foreach ($projects as $project)
                    <div class="col-md-3">
                        <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
                            style="background-image: url('{{ asset($project->thumbnail) }}');">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="{{ route('front.projectdetails',$project->id) }}">{{ $project->title }}</a></h3>
                                <span>{{ $project->category }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
                
                
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-primary">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section heading-section-white text-center ftco-animate">
                    <span class="subheading">Testimonies</span>
                    <h2 class="mb-4">What client says about?</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">

                        @if (@$testimonials)
                            @foreach ($testimonials as $testimonial)
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="text">
                                        <span class="fa fa-quote-left"></span>
                                        <p class="mb-4 pl-5">{{ $testimonial->message }}</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img"
                                                style="background-image: url({{ asset($testimonial->image) }})"></div>
                                            <div class="pl-3">
                                                <p class="name">{{ $testimonial->name }}</p>
                                                <span class="position">{{ $testimonial->profession }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                        
                        {{-- <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url(front/assets/images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2 class="mb-4">Our Blog</h2>
                    <p>Stay informed and inspired with our latest insights, tips, and trends.<br> Explore a world of knowledge crafted to help you grow and succeed <br> in your journey. Discover, learn, and thrive with us.</p>
                </div>
            </div>
            <div class="row d-flex">
                @if (@$blogs)
                    @foreach ($blogs as $blog)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="{{ route('front.blogdetails',$blog->id) }}" class="block-20"
                                style="background-image: url({{ asset($blog->image) }});">
                            </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center mb-3 meta">
                                    <p class="mb-0">
                                        <span class="mr-2">{{ $blog->created_at }}</span>
                                        <a href="#" class="mr-2">Admin</a>
                                        {{-- <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> --}}
                                    </p>
                                </div>
                                <h3 class="heading"><a href="{{ route('front.blogdetails',$blog->id) }}">{{ $blog->title }}</a>
                                </h3>
                                <p>{{ $blog->short_desc }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Contact us</span>
                    <h2 class="mb-4">Have a Project?</h2>
                    <p>Let’s turn your ideas into reality. Collaborate with us to create innovative solutions tailored to your needs, delivering exceptional results that exceed expectations, Your vision, our expertise.</p>
                </div>
            </div>

            <div class="row block-9">
                <div class="col-md-8">
                    <form action="{{ route('admin.contactme') }}" method="POST" class="bg-light p-4 p-md-5 contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="col-md-4 d-flex pl-md-5">
                    <div class="row">
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-user text-dark"></span>
                            </div>
                            <div class="text">
                                <p><span>Name:</span>{{ @$profile->name }}</p>
                            </div>
                        </div>

                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-location-dot text-dark"></span>
                            </div>
                            <div class="text">
                                <p><span>Address:</span> {{ @$profile->address }}</p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-phone text-dark"></span>
                            </div>
                            <div class="text">
                                <p><span>Phone:</span> <a href="tel://{{ @$profile->phone }}">{{ @$profile->phone }}</a></p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-envelope text-dark"></span>
                            </div>
                            <div class="text">
                                <p><span>Email:</span> <a href="mailto:{{ @$profile->email }}">{{ @$profile->email }}</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- <div id="map" class="map"></div> -->
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Lets talk about</h2>
                        <p>Share your ideas and goals with us. Together, we’ll craft innovative solutions to bring your vision to life.</p>
                        {{-- <p><a href="#" class="btn btn-primary">Learn more</a></p> --}}
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('front.home') }}"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
                            <li><a href="#about-section"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                            <li><a href="#services-section"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
                            <li><a href="#projects-section"><span class="fa fa-chevron-right mr-2"></span>Projects</a></li>
                            <li><a href="#contact-section"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Digital Marketing</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Web Design</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Web Development</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Business Strategy</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Graphic Design</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map marker"></span><span class="text">{{ @$profile->address }}</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">{{ @$profile->phone }}</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                                            class="text">{{ @$profile->email }}</span></a></li>
                            </ul>
                        </div>
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <li class="ftco-animate"><a href="https://www.facebook.com/gogleshop?mibextid=ZbWKwL" class="d-flex justify-content-center align-items-center"><span class="fa-brands fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/abdulbasitmohsin/profilecard/?igsh=b3R6aG5ybXBhcjho" class="d-flex justify-content-center align-items-center"><span class="fa-brands fa-instagram"></span></a></li>
                            <li class="ftco-animate"><a href="https://youtube.com/@abdulbasitportfolio?si=vtOI6sPLxM8pxl5Q" class="d-flex justify-content-center align-items-center"><span class="fa-brands fa-youtube"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.tiktok.com/@abdulbasitportfolio.com?_t=8sMrDR5t5vt&_r=1" class="d-flex justify-content-center align-items-center"><span class="fa-brands fa-tiktok"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </footer>
@endsection
