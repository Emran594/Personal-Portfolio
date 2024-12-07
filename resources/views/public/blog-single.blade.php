@extends('layout.app')
@section('content')
<article class="blog-post px-3 py-5 p-md-5">
    <div class="container single-col-max-width">
        <header class="blog-post-header">
            <h2 class="title mb-2">{{$blog->title}}</h2>
            <div class="meta mb-3"><span class="date">Published {{ $blog->created_at->diffForHumans() }}</span><span class="time">{{ $readingTime }} min read</span><span class="comment"></span></div>
        </header>
        
        <div class="blog-post-body">
            <figure class="blog-banner">
                <a href="https://made4dev.com/">
                    <img class="img-fluid" src="{{ asset($blog->featured_image) }}" alt="image">
                </a>
            </figure>
            {!! $blog->description !!}

        <nav class="blog-nav nav nav-justified my-5">
            @if($previousBlog)
                <a class="nav-link-prev nav-item nav-link rounded-left" href="{{ route('blog.show', $previousBlog->id) }}">
                    <i class="arrow-prev fas fa-long-arrow-alt-left"></i> Previous
                </a>
            @else
                <span class="nav-link-prev nav-item nav-link rounded-left disabled">
                    <i class="arrow-prev fas fa-long-arrow-alt-left"></i> Previous
                </span>
            @endif
        
            @if($nextBlog)
                <a class="nav-link-next nav-item nav-link rounded-right" href="{{ route('blog.show', $nextBlog->id) }}">
                    Next <i class="arrow-next fas fa-long-arrow-alt-right"></i>
                </a>
            @else
                <span class="nav-link-next nav-item nav-link rounded-right disabled">
                    Next <i class="arrow-next fas fa-long-arrow-alt-right"></i>
                </span>
            @endif
        </nav>
        
        
    </div><!--//container-->
</article>

<section class="promo-section theme-bg-light py-5 text-center">
    <div class="container single-col-max-width">
        <h2 class="title">Promo Section Heading</h2>
        <p>You can use this section to promote your side projects etc. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
        <figure class="promo-figure">
            <a href="https://made4dev.com/" target="_blank"><img class="img-fluid" src="assets/images/promo-banner.jpg" alt="image"></a>
        </figure>
    </div><!--//container-->
</section><!--//promo-section-->

@endsection