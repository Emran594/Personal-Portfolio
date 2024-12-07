@extends('layout.app')
@section('content')
<section class="about-me-section p-3 p-lg-5 theme-bg-light">
    <div class="container">
        <div class="profile-teaser row">
            <div class="col">
                <h2 class="name font-weight-bold mb-1">Emran Sikder</h2>
                <div class="tagline mb-3">Web Application Developer</div>
                <div class="bio mb-4">Aspiring Full Stack Developer | PHP, Laravel & WordPress Enthusiast | HTML, CSS, JavaScript, AJAX | MySQL, API Dev | Open to Learning and New Opportunities" <a class="text-link" href="blog-home.html">my blog</a>. Want to know how I may help your project? Check out my project <a class="text-link" href="{{ route('portfolio')}}">portfolio</a> and <a class="text-link" href="{{ route('resume')}}">online resume</a>.
                </div>
                <div class="mb-4">
                    <a class="btn btn-primary me-2 mb-3" href="{{ route('portfolio')}}"><i class="fas fa-arrow-alt-circle-right me-2"></i><span class="d-none d-md-inline">View</span> Portfolio</a>
                    <a class="btn btn-secondary mb-3" href="{{ route('resume')}}"><i class="fas fa-file-alt me-2"></i><span class="d-none d-md-inline">View</span> Resume</a>
                </div>
            </div><!--//col-->

            <div class="col-md-5 col-lg-5">
                <img class="profile-image img-fluid mb-3 mb-lg-0 me-md-0" src=" {{asset('assets/images/emran.png')}}" alt="">
            </div>
        </div>
    </div>
</section><!--//about-me-section-->

<section class="overview-section p-3 p-lg-5">
    <div class="container">
        <h2 class="section-title font-weight-bold mb-3">What I do</h2>
        <div class="section-intro mb-5">I have more than 3 years' experience building software for clients all over the world. Below is a quick overview of my main technical skill sets and technologies I use. Want to find out more about my experience? Check out my <a class="text-link" href="{{route('resume')}}">online resume</a> and <a class="text-link" href="{{route('portfolio')}}">project portfolio</a>.</div>
        <div class="row">
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-js-square"></i></div>
                    <h3 class="item-title">Vanilla JavaScript</h3>
                    <div class="item-desc">I use vanilla JavaScript to build dynamic, interactive web applications with no framework dependencies. I excel in manipulating the DOM, handling events, and asynchronous operations to ensure smooth and responsive user experiences.</div>
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-vuejs"></i></div>
                    <h3 class="item-title">Vue JS</h3>
                    <div class="item-desc">Experienced with Vue.js for creating modern, reactive front-end applications. I build efficient, scalable applications using Vue’s component-based architecture to ensure a smooth user experience with minimal reactivity and maximum performance.</div>
                </div><!--//item-inner-->
            </div><!--//item-->
        
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-laravel"></i></div>
                    <h3 class="item-title">Laravel</h3>
                    <div class="item-desc">I leverage Laravel to develop robust back-end systems, ensuring high security, scalability, and maintainability. Whether building APIs or full-stack applications, I ensure optimal performance and clean code structure.</div>
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-php"></i></div>
                    <h3 class="item-title">PHP</h3>
                    <div class="item-desc">Skilled in PHP, I develop dynamic, data-driven websites and back-end logic for web applications. I write clean, efficient code while ensuring strong data security, server-side logic, and robust architecture.</div>
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-bootstrap me-2"></i><i class="fab fa-tailwind me-2"></i></div>
                    <h3 class="item-title">Bootstrap &amp; Tailwind CSS</h3>
                    <div class="item-desc">I use both Bootstrap and Tailwind CSS to create responsive, visually appealing, and user-friendly web designs. My approach ensures flexibility in layout while maintaining aesthetic simplicity across all screen sizes.</div>
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-html5 me-2"></i><i class="fab fa-css3-alt"></i></div>
                    <h3 class="item-title">HTML &amp; CSS</h3>
                    <div class="item-desc">With strong proficiency in HTML5 and CSS3, I build the structure and style of web pages to ensure seamless user experiences. I focus on creating clean, well-structured markup and modern, responsive designs that are both accessible and visually appealing.</div>
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-wordpress me-2"></i></div>
                    <h3 class="item-title">WordPress</h3>
                    <div class="item-desc">I specialize in WordPress development, building custom themes and plugins to meet client needs. I ensure that each website is fully responsive, SEO-friendly, and easy to manage for non-technical users.</div>
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><i class="fab fa-github me-2"></i><i class="fab fa-figma"></i></div>
                    <h3 class="item-title">Github &amp; Figma</h3>
                    <div class="item-desc">I utilize GitHub for version control and collaboration, ensuring seamless development workflows and clean, maintainable code. Additionally, I use Figma to design intuitive UI/UX layouts, providing clients with a clear visualization of the final product.</div>
                </div><!--//item-inner-->
            </div><!--//item-->
        </div><!--//row-->
        <div class="text-center py-3"><a href="{{ route('services')}}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right me-2"></i>Services &amp; Pricing

        </a></div>

    </div><!--//container-->
</section>

<div class="container"><hr></div>

<section class="testimonials-section p-3 p-lg-5">
    <div class="container">
        <h2 class="section-title font-weight-bold mb-5">Testimonials</h2>
        <div class="testiomonial-carousel-container">
            <div class="testimonial-carousel tiny-slider">

                <div class="item">
                    <div class="item-inner">
                        <div class="quote-holder">
                            <blockquote class="quote-content">
                                Working with Emran has been a game-changer for our business. His attention to detail and technical expertise helped streamline our operations. I highly recommend him!
                            </blockquote>
                            <i class="fas fa-quote-left"></i>
                        </div><!--//quote-holder-->
                        <div class="source-holder">
                            <div class="source-profile">
                                <img src="assets/images/clients/profile-1.png" alt="image"/>
                            </div>
                            <div class="meta">
                                <div class="name">Akbar Ali</div>
                                <div class="info">Project Manager, Belivit</div>
                            </div>
                        </div>
                    </div><!--//item-inner-->
                </div><!--//item-->

                <div class="item">
                    <div class="item-inner">
                        <div class="quote-holder">
                            <blockquote class="quote-content">
                                Emran brought incredible value to our project. His ability to solve complex problems quickly allowed us to meet our tight deadlines with ease. A true professional!
                            </blockquote>
                            <i class="fas fa-quote-left"></i>
                        </div><!--//quote-holder-->
                        <div class="source-holder">
                            <div class="source-profile">
                                <img src="assets/images/clients/profile-2.png" alt="image"/>
                            </div>
                            <div class="meta">
                                <div class="name">Abu hanif</div>
                                <div class="info">Maneging Director, Hovata</div>
                            </div>
                        </div>
                    </div><!--//item-inner-->
                </div><!--//item-->

                <div class="item">
                    <div class="item-inner">
                        <div class="quote-holder">
                            <blockquote class="quote-content">
                                Emran's work exceeded our expectations. His innovative solutions helped optimize our platform, leading to increased performance and user satisfaction. Would work with him again in a heartbeat!
                            </blockquote>
                            <i class="fas fa-quote-left"></i>
                        </div><!--//quote-holder-->
                        <div class="source-holder">
                            <div class="source-profile">
                                <img src="assets/images/clients/profile-3.png" alt="image"/>
                            </div>
                            <div class="meta">
                                <div class="name">Mustafizur Rahman</div>
                                <div class="info">Chairman, Mizan Group</div>
                            </div>
                        </div>
                    </div><!--//item-inner-->
                </div><!--//item-->

                <div class="item">
                    <div class="item-inner">
                        <div class="quote-holder">
                            <blockquote class="quote-content">
                                Emran's technical expertise and ability to communicate complex ideas in simple terms were instrumental to the success of our project. He’s a great asset to any team.
                            </blockquote>
                            <i class="fas fa-quote-left"></i>
                        </div><!--//quote-holder-->
                        <div class="source-holder">
                            <div class="source-profile">
                                <img src="assets/images/clients/profile-4.png" alt="image"/>
                            </div>
                            <div class="meta">
                                <div class="name">Mr Shahin</div>
                                <div class="info">Manager, Anu Food</div>
                            </div>
                        </div>
                    </div><!--//item-inner-->
                </div><!--//item-->

                <div class="item">
                    <div class="item-inner">
                        <div class="quote-holder">
                            <blockquote class="quote-content">
                                Emran's development work on our web application was flawless. His ability to find efficient solutions and work collaboratively with our team made the process smooth and successful.
                            </blockquote>
                            <i class="fas fa-quote-left"></i>
                        </div><!--//quote-holder-->
                        <div class="source-holder">
                            <div class="source-profile">
                                <img src="assets/images/clients/profile-5.png" alt="image"/>
                            </div>
                            <div class="meta">
                                <div class="name">Samuel Reyes</div>
                                <div class="info">CTO, StartupHub</div>
                            </div>
                        </div>
                    </div><!--//item-inner-->
                </div><!--//item-->

            </div><!--//testimonial-carousel-->
        </div><!--//testimonial-carousel-container-->
    </div><!--//container-->
</section>


<div class="container"><hr></div>

<section class="featured-section p-3 p-lg-5">
    <div class="container">
        <h2 class="section-title font-weight-bold mb-5">Featured Projects</h2>
        <div class="row">
            @foreach($portfolios as $portfolio)
            <div class="isotope-item col-md-6 mb-5 {{ $portfolio->category }}">
                <div class="card project-card">
                    <div class="row">
                        <div class="col-12 col-xl-5 card-img-holder">
                            <img src="{{ asset($portfolio->project_image) }}" class="card-img" alt="{{ $portfolio->title }}">
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
        </div><!--//row-->
        <div class="text-center py-3"><a href="{{ route('portfolio')}}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right me-2"></i>View Portfolio</a></div>

    </div><!--//container-->
</section><!--//featured-section-->

<div class="container"><hr></div>

<section class="latest-blog-section p-3 p-lg-5">
    <div class="container">
        <h2 class="section-title font-weight-bold mb-5">Latest Blog Posts</h2>
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-4 mb-5">
                <div class="card blog-post-card">
                    <img class="card-img-top" src="{{ asset($post->featured_image) }}" alt="image">
                    <div class="card-body">
                        <h5 class="card-title"><a class="theme-link" href="{{ route('blog.show', $post->id) }}">{{$post->title}}</a></h5>
                        {{ Str::words(strip_tags(html_entity_decode($post->description)), 50) }}
                        <p class="mb-0"><a class="text-link" href="{{ route('blog.show', $post->id) }}">Read more &rarr;</a></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Published {{ $post->created_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div><!--//row-->
        <div class="text-center py-3"><a href="{{route('blog')}}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right me-2"></i>View Blog</a></div>
    </div><!--//container-->
</section><!--//latest-blog-section-->


@endsection
