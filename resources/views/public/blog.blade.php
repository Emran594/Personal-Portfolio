@extends('layout.app')
@section('content')
<section class="cta-section theme-bg-light py-5">
    <div class="container text-center">
        <h2 class="heading">A Blog About Software Development And Life</h2>
        <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
        <div class="single-form-max-width pt-3 mx-auto">
            <form action="{{ route('subscriptions.store') }}" method="POST" class="signup-form row g-2 g-lg-2 align-items-center">
                @csrf
                <div class="col-12 col-md-9">
                    <label class="sr-only" for="semail">Your email</label>
                    <input type="email" id="semail" name="email" class="form-control me-md-1 semail" placeholder="Enter email" required>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    @if (session('error'))
                        <span class="text-danger">{{ session('error') }}</span>
                    @endif
                    @if (session('success'))
                        <span class="text-success">{{ session('success') }}</span>
                    @endif
                </div>
                <div class="col-12 col-md-2">
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </div>
            </form>
        </div><!--//single-form-max-width-->
    </div><!--//container-->
</section>
<section class="blog-list px-3 py-5 p-md-5">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-md-4 mb-3">
                <div class="card blog-post-card">
                    <img class="card-img-top" src="{{ asset($blog->featured_image) }}" alt="image">
                    <div class="card-body">
                        <h5 class="card-title"><a class="theme-link" href="{{ route('blog.show', $blog->id) }}">{{$blog->title}}</a></h5>
                        <p class="card-text">{{ Str::words(strip_tags(html_entity_decode($blog->description)), 20) }}</p>
                        <p class="mb-0"><a class="text-link" href="{{ route('blog.show', $blog->id) }}">Read more &rarr;</a></p>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Published {{ $blog->created_at->diffForHumans() }}</small>
                    </div>
                </div><!--//card-->
            </div>
            @endforeach
        </div><!--//row-->


        <nav class="blog-nav nav nav-justified my-5">
          <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
          <a class="nav-link-next nav-item nav-link rounded" href="#">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
        </nav>

    </div>
</section>

@endsection
