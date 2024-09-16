@extends('layout.app')
@section('content')
<section class="cta-section theme-bg-light py-5">
    <div class="container text-center single-col-max-width">
        <h2 class="heading">Portfolio</h2>
        <div class="intro">
            <p>Welcome to my online portfolio. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. I'm taking on freelance work at the moment. Want some help building your software?</p>
        </div>
        <a class="btn btn-primary" href="{{ route('contact') }}" target="_blank"><i class="fas fa-paper-plane me-2"></i>Hire Me</a>
    </div>
</section>

<section class="projects-list px-3 py-5 p-md-5">
    <div class="container">

        <div class="project-cards row isotope">
            @foreach($portfolios as $portfolio)
            <div class="isotope-item col-md-6 mb-5 {{ $portfolio->category }}">
                <div class="card project-card">
                    <div class="row">
                        <div class="col-12 col-xl-5 card-img-holder">
                            <img src="{{ asset('storage/'.$portfolio->image) }}" class="card-img" alt="{{ $portfolio->title }}">
                        </div>
                        <div class="col-12 col-xl-7">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ route('portfolio.show', $portfolio->id) }}" class="theme-link">{{ $portfolio->title }}</a>
                                </h5>
                                <p class="card-text">{{ Str::limit($portfolio->description, 100) }}</p>
                                <p class="card-text"><small class="text-muted">Client: {{ $portfolio->client_name }}</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="link-mask">
                        <a class="link-mask-link" href="{{ route('portfolio.show', $portfolio->id) }}"></a>
                        <div class="link-mask-text">
                            <a class="btn btn-secondary" href="{{ route('portfolio.show', $portfolio->id) }}">
                                <i class="fas fa-eye me-2"></i>View Case Study
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
