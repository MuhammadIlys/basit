<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
 
        @if ($slider)
            @foreach ($slider as $slider)
                <div class="slider-item">
                    <div class="overlay"></div>
                    <div class="container-fluid px-md-0">
                        <div class="row d-flex no-gutters slider-text align-items-end justify-content-end"
                            data-scrollax-parent="true">
                            <div class="one-third order-md-last img"
                                style="background-image:url({{ asset($slider->image) }});">
                                <div class="overlay"></div>
                                <div class="overlay-1"></div>
                            </div>
                            <div class="one-forth d-flex align-items-center ftco-animate"
                                data-scrollax=" properties: { translateY: '70%' }">
                                <div class="text">
                                    <span class="subheading">{{ $slider->subtitle }}</span>
                                    <h1 class="mb-4 mt-3">{{ $slider->title }}</h1>
                                    <p>
                                        <a href="{{ asset($slider->hirelink) }}" class="btn btn-primary">{{ $slider->hiretext }}</a>
                                        <a href="{{ asset($slider->cvlink) }}"
                                            class="btn btn-primary btn-outline-primary">{{ $slider->cvtext }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section>
