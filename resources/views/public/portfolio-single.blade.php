@extends('layout.app')
@section('content')
<section class="cta-section theme-bg-light py-5">
    <div class="container single-col-max-width">
        <h2 class="heading text-center">Case Study:{{ $portfolio->title }}</h2>
        <div class="project-intro text-center">
            <p class="mb-0 lead">{{ $portfolio->client_description}}</p>
        </div>
    </div><!--//container-->
</section>
<section class="project px-3 py-5 p-md-5">
    <div class="container">
        <div class="project-meta theme-bg-light p-4">
            <div class="row g-4 g-lg-5">
                <div class="col-md-5 col-lg-4 col-xxl-3 d-none d-md-block">
                    <img src="{{ asset('assets/images/'.$portfolio->project_image) }}" class="card-img" alt="{{ $portfolio->title }}">
                </div><!--//col-->
                <div class="col-12 col-md-7 col-lg-8 col-xxl-9">
                    <div class="client-info">
                        <h3 class="client-name font-weight-bold mb-4">{{ $portfolio->client_name }}</h3>
                        <ul class="client-meta list-unstyled">
                            <li class="mb-2"><i class="fas fa-industry fa-fw me-2"></i><strong>Industry:</strong> {{ $portfolio->industry }}</li>
                            <li class="mb-2"><strong><i class="fas fa-link fa-fw me-2"></i>Website:</strong> <a class="theme-link" href="{{ $portfolio->website }}" target="_blank">{{ $portfolio->website }}</a></li>
                        </ul>
                        <div class="client-bio mb-4">{{ $portfolio->description }}</div>
                        <h4 class="subheading mb-3">Project Requirements</h4>
                        <ul class="mb-0">

                        </ul>
                    </div><!--//client-info-->					
                </div><!--//col-->
            </div><!--//row-->
        </div><!--//project-meta-->
        <div class="project-sections py-5">
            <div class="project-section mb-5">
                <h3 class="project-section-title mb-3">Project Overview</h3>
                <p>{{ $portfolio->description }}</p>
            </div><!--//project-section-->            
            <div class="project-section mb-5">
                <h3 class="project-section-title">The Approach &amp; Solution</h3>
                <p>{{ $portfolio->solution }}</p>
            </div><!--//project-section-->
            
            <div class="project-section mb-5">
                <h3 class="project-section-title mb-3">The Results</h3>
                <div class="metrics mb-4">
                    <div class="row">
                    </div><!--//row-->
                </div><!--//metrics-->
                <p>{{ $portfolio->client_satisfaction }}</p>
            </div><!--//project-section-->
            <div class="client-quote">
                <div class="quote-holder">
                    <blockquote class="quote-content">
                        {{ $portfolio->testimonial }}
                    </blockquote>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="promo-section theme-bg-light py-5 text-center">
    <div class="container single-col-max-width">
        <h2 class="title">Want me to help with your project?</h2>
        <p>If you take on freelance work, you can use this section to prompt any potential clients to get in touch with you with their project requirements.</p>
        <div class="text-center"><a class="btn btn-primary" href="{{ route('contact') }}" target="_blank"><i class="fas fa-paper-plane me-2"></i>Hire Me</a></div>
    </div><!--//container-->
</section>
@endsection
