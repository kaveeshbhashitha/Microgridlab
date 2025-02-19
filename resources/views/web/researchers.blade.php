<!DOCTYPE html>
<html lang="en">

<head>
    <!-- resources/views/home.blade.php -->
    <x-meta-tags-component
        title="Research"
        description="Smart Grid Research Group is dedicated to advancing research in smart grid technologies, renewable energy, and sustainable power solutions."
        keywords="smart grid, renewable energy, sustainable energy, power products, AI, power automation"
        author="Your Name"
        twitterCard="summary"
        twitterSite="@YourTwitterHandle"
        image="{{ asset('image/sgrg-logo.png') }}"
        ogSiteName="Smart Grid Research Group"
        fbAppId="Your Facebook App ID"
    />
</head>

<body>
    
    @php
        $projects = app(\App\Http\Controllers\ProjectController::class)->showProjectData();
        $publication = app(\App\Http\Controllers\PublicationController::class)->showPublicationhData();
        $research = app(\App\Http\Controllers\ResearchController::class)->showResearchData();
        $course = app(\App\Http\Controllers\CourseController::class)->showCourseData();
    @endphp
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid py-2 d-none d-lg-flex">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>Department of Electrical Engineering</small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>University of Moratuwa, Moratuwa 10400</small>
                </div>
                <nav class="breadcrumb mb-0 bg-white">
                    <a class="breadcrumb-item small text-body" href="{{ route('about') }}">About Us</a>
                    <a class="breadcrumb-item small text-body" href="{{ route('contact') }}">Contact Us</a>
                    <a class="breadcrumb-item small text-body" href="{{ route('peoples') }}">People</a>
                
                    @if(count($research)>0)
                        <a class="breadcrumb-item small text-body" href="{{ route('researchers') }}">Research</a>
                    @endif

                </nav>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <i class="bi bi-telephone-inbound fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Contact</h5>
                        <span>0112650301 ext 3295</span>
                    </div>
                </div>
                <a href="/" class="h2 text-white mb-0">LECO-UOM <span class="text-dark">Smart Grid Research Lab</span></a>
                <div class="d-flex">
                    <i class="bi bi-envelope fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Mail</h5>
                        <span>sgrl-elect@uom.lk</span>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!-- Brand End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="text-primary m-0">SmartGrid<span class="text-dark">Lab</span></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link ">About Us</a>
                        <a href="{{ route('peoples') }}" class="nav-item nav-link ">People</a>
                        <a href="{{ route('news') }}" class="nav-item nav-link ">News</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Projects</a>
                            <div class="dropdown-menu bg-light m-0">
                                
                                @if(count($research)>0)
                                    <a href="{{ route('researchers') }}" class="dropdown-item active">Research</a>
                                @endif
                                
                                @if(count($publication)>0)
                                    <a href="{{ route('projects') }}" class="dropdown-item">Industrial Projects</a>
                                @endif

                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu bg-light m-0">

                                @if(count($projects)>0)
                                    <a href="{{ route('courses') }}" class="dropdown-item">Training Programs</a>
                                @endif

                                @if(count($course)>0)
                                    <a href="{{ route('consultant') }}" class="dropdown-item">Consultant</a>
                                @endif

                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                        <a class="btn btn-sm-square btn-primary ms-2" href="https://www.facebook.com/SmartGridResearchGroupUOM"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href="https://twitter.com/SGRGUOM"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href="https://www.linkedin.com/company/smart-grid-research-group-uom/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href="https://www.youtube.com/channel/UCMeDfWAnBOoCadu1ojOvY-w"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Research</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    @php
        $latestResearch = app(\App\Http\Controllers\ResearchController::class)->showResearchData();
    @endphp

    @if($latestResearch && count($latestResearch) > 0)
        @for($i = 0; $i < count($latestResearch); $i+=2)
            <div class="container-fluid container-team py-5">
                <div class="container pb-2">
                    <div class="row g-5 align-items-center mb-5">
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid w-100" src="{{ $latestResearch[$i]->researchimage }}" alt="">
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                            <h3 class="mb-3">{{ $latestResearch[$i]->researchtitle }}</h3>
                            <h5 class="mb-3">{{ $latestResearch[$i]->researchername }}</h5>
                            <p class="mb-1">{{ $latestResearch[$i]->otherresearchers }}</p>
                            <p class="mb-2">{{ $latestResearch[$i]->researchdate }}, Issue: {{ $latestResearch[$i]->issue }}, Volume: {{ $latestResearch[$i]->volume }}, Pages: {{ $latestResearch[$i]->pages }}</p>
                            
                            <p class="mb-6 short-description" style="text-align:justify;">{{ substr($latestResearch[$i]->description, 0, 150) }}{{ strlen($latestResearch[$i]->description) > 150 ? '...' : '' }}</p>
                                @if(strlen($latestResearch[$i]->description) > 150)
                                    <button class="rounded btn btn-sm btn-primary toggle-btn">Read More</button>
                                @endif
                            <div class="full-description d-none my-1" style="text-align:justify;">{{ $latestResearch[$i]->description }}</div>
                        
                            <div class="d-flex justify-content-end">
                                <abbr title="See article"><a class="btn btn-lg-square btn-primary me-2" href="{{ $latestResearch[$i]->puburl }}"><i class="fas fa-link"></i></a></abbr>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Team End -->

            <!-- Team Start -->
            @if(isset($latestResearch[$i+1]))
            <div class="container-fluid container-team py-5">
                <div class="container pb-2">
                    <div class="row g-5 align-items-center mb-5">
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                            
                            <h3 class="mb-3">{{ $latestResearch[$i+1]->researchtitle }}</h3>
                            <h5 class="mb-3">{{ $latestResearch[$i+1]->researchername }}</h5>
                            <p class="mb-1">{{ $latestResearch[$i+1]->otherresearchers }}</p>
                            <p class="mb-2">{{ $latestResearch[$i+1]->researchdate }}, Issue: {{ $latestResearch[$i+1]->issue }}, Volume: {{ $latestResearch[$i+1]->volume }}, Pages: {{ $latestResearch[$i+1]->pages }}</p>
                            
                            <p class="mb-6 short-description" style="text-align:justify;">{{ substr($latestResearch[$i+1]->description, 0, 150) }}{{ strlen($latestResearch[$i+1]->description) > 150 ? '...' : '' }}</p>
                                @if(strlen($latestResearch[$i+1]->description) > 150)
                                    <button class="rounded btn btn-sm btn-primary toggle-btn">Read More</button>
                                @endif
                            <div class="full-description d-none my-1" style="text-align:justify;">{{ $latestResearch[$i+1]->description }}</div>
                            
                            
                            <div class="d-flex justify-content-end">
                                <abbr title="See article"><a class="btn btn-lg-square btn-primary me-2" href="{{ $latestResearch[$i+1]->puburl }}"><i class="fas fa-link"></i></a></abbr>
                            </div>
                            
                        </div>

                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid w-100" src="{{ $latestResearch[$i+1]->researchimage }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- Add more HTML to display additional attributes as needed -->
        @endfor
    @elseif($latestResearch && count($latestResearch) > 0 && count($latestResearch) > 2)
        @for($i = 0; $i < count($latestResearch); $i++)
            <div class="container-fluid container-team py-5">
                <div class="container pb-2">
                    <div class="row g-5 align-items-center mb-5">
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid w-100" src="{{ $latestResearch[$i]->researchimage }}" alt="">
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                            <h3 class="mb-3">{{ $latestResearch[$i]->researchtitle }}</h3>
                            <h5 class="mb-3">{{ $latestResearch[$i]->researchername }}</h5>
                            <p class="mb-1">{{ $latestResearch[$i]->otherresearchers }}</p>
                            <p class="mb-2">{{ $latestResearch[$i]->researchdate }}, Issue: {{ $latestResearch[$i]->issue }}, Volume: {{ $latestResearch[$i]->volume }}, Pages: {{ $latestResearch[$i]->pages }}</p>
                            
                            <p class="mb-6 short-description" style="text-align:justify;">{{ substr($latestResearch[$i]->description, 0, 150) }}{{ strlen($latestResearch[$i]->description) > 150 ? '...' : '' }}</p>
                                @if(strlen($latestResearch[$i]->description) > 150)
                                    <button class="rounded btn btn-sm btn-primary toggle-btn">Read More</button>
                                @endif
                            <div class="full-description d-none my-1" style="text-align:justify;">{{ $latestResearch[$i]->description }}</div>
                        
                            <div class="d-flex justify-content-end">
                                <abbr title="See article"><a class="btn btn-lg-square btn-primary me-2" href="{{ $latestResearch[$i]->puburl }}"><i class="fas fa-link"></i></a></abbr>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Team End -->
        @endfor
    @else
        <p>No data available.</p>
    @endif
    


    <x-web-footer></x-web-footer>

    <!-- JavaScript Libraries -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add click event listener to toggle button
            document.querySelectorAll('.toggle-btn').forEach(function(button) {
                button.addEventListener('click', function() {
                    // Toggle visibility of short and full descriptions
                    var shortDescription = this.parentNode.querySelector('.short-description');
                    var fullDescription = this.parentNode.querySelector('.full-description');
                    if (shortDescription.classList.contains('d-none')) {
                        shortDescription.classList.remove('d-none');
                        fullDescription.classList.add('d-none');
                        this.textContent = 'Read More';
                    } else {
                        shortDescription.classList.add('d-none');
                        fullDescription.classList.remove('d-none');
                        this.textContent = 'Read Less';
                    }
                });
            });
        });
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>