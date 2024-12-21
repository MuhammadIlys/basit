<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset(Auth::user()->image) }}" alt="profile" />
                    <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                    {{-- <span class="text-secondary text-small">Project Manager</span> --}}
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.admin') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#headerslider" aria-expanded="false"
                aria-controls="headerslider">
                <span class="menu-title">Header Slider</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="headerslider">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.slider.index') }}">Header Slider</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.slider.add') }}">Add Slider</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#counter" aria-expanded="false"
                aria-controls="counter">
                <span class="menu-title">Counter</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="counter">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.counter') }}">All Counters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.counter.add') }}">Add Counter</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#about" aria-expanded="false"
                aria-controls="about">
                <span class="menu-title">About</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="about">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.about') }}">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.about.add') }}">Add About</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#skills" aria-expanded="false"
                aria-controls="skills">
                <span class="menu-title">Skills</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="skills">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.skills') }}">My Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.skill.add') }}">Add Skills</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#services" aria-expanded="false"
                aria-controls="services">
                <span class="menu-title">Services</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="services">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.services') }}">My Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.service.add') }}">Add Service</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#hire" aria-expanded="false"
                aria-controls="hire">
                <span class="menu-title">Hire</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="hire">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.hireme') }}">Hire Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.hireme.add') }}">Add Hire Me</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#projects" aria-expanded="false"
                aria-controls="projects">
                <span class="menu-title">Projects</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="projects">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.projects') }}">My Projects</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#testimonial" aria-expanded="false"
                aria-controls="testimonial">
                <span class="menu-title">Testimonial</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="testimonial">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.testimonials') }}">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.testimonial.add') }}">Add Testimonial</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#blogs" aria-expanded="false"
                aria-controls="blogs">
                <span class="menu-title">Blogs</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="blogs">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.blogs') }}">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.blog.add') }}">Add Blog</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#contact" aria-expanded="false"
                aria-controls="contact">
                <span class="menu-title">Contact</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="contact">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.contactme') }}">Contact Me</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#profile" aria-expanded="false"
                aria-controls="profile">
                <span class="menu-title">Profile</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="profile">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.profile') }}">Profile</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="{{ route('logout') }}" aria-expanded="false"
                aria-controls="profile">
                <span class="menu-title">Logout</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li> --}}
        
    </ul>
</nav>