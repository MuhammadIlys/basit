@extends('layouts.front')
@section('title')
Project Details
@endsection
@section('content')

    @include('frontend.partials.navbar')



   <div class="container mt-5 ">
    <div class="row mt-5 mb-5">
        <div class="col-12 detail-container py-5 mt-5 d-flex justify-content-center align-item-center" style="background-image: url('{{ asset($project->thumbnail) }}');" >
            <h1 class="text-black my-auto p-3 bg-danger w-50 text-center display-5"> <b>{{ $project->title }}</b> </h1>
        </div>
    </div>
   </div>

   <div class="row">
    <div class="col-12">
        {!! $project->long_description !!}
    </div>
   </div>


    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">{{ $project->title }}</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts.</p>
                        <p><a href="#" class="btn btn-primary">Learn more</a></p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Projects</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Web Design</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Web Development</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Business Strategy</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Data Analysis</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Graphic Design</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain
                                        View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392
                                            3929 210</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
				<div class="col-md-12 text-center">

					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div> --}}
    </footer>
@endsection