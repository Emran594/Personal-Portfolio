<header class="header text-center">
    <div class="force-overflow">
        <h1 class="blog-name pt-lg-4 mb-0"><a class="no-text-decoration" href="{{ '/' }}">Emran Sikder</a></h1>
        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">
                <div class="profile-section pt-3 pt-lg-0">
                    <img class="profile-image mb-3 rounded-circle mx-auto" src="{{ asset('assets/images/profile.png') }}" alt="image">

                    <div class="bio mb-3">Hi, my name is Emran Sikder and I'm a Web Application Developer. Welcome to my personal website!</div><!--//bio-->
                    <ul class="social-list list-inline py-2 mx-auto">
                        <li class="list-inline-item"><a href="https://www.facebook.com/emran.sikder.737/" target="_blank"><i class="fab fa-facebook fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/emran94/" target="_blank"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/Emran594"><i class="fab fa-github-alt fa-fw" target="_blank"></i></a></li>
                        <li class="list-inline-item"><a href="https://stackoverflow.com/users/17671664/emran-sikder"><i class="fab fa-stack-overflow fa-fw" target="_blank"></i></a></li>
                    </ul><!--//social-list-->
                    <hr>
                </div><!--//profile-section-->

                <ul class="navbar-nav flex-column text-start">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ '/' }}"><i class="fas fa-user fa-fw me-2"></i>About Me<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ '/portfolio' }}"><i class="fas fa-laptop-code fa-fw me-2"></i>Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ '/services' }}"><i class="fas fa-briefcase fa-fw me-2"></i>Services &amp; Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ '/resume' }}"><i class="fas fa-file-alt fa-fw me-2"></i>Resume</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ '/blog' }}"><i class="fas fa-blog fa-fw me-2"></i>Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ '/contact' }}"><i class="fas fa-envelope-open-text fa-fw me-2"></i>Contact</a>
                    </li>
                </ul>

                <div class="my-2">
                    <a class="btn btn-primary" href="{{ '/contact' }}" target="_blank"><i class="fas fa-paper-plane me-2"></i>Hire Me</a>
                </div>

                <div class="dark-mode-toggle text-center w-100">
                    <hr class="mb-4">
                    <h4 class="toggle-name mb-3 "><i class="fas fa-adjust me-1"></i>Dark Mode</h4>

                    <input class="toggle" id="darkmode" type="checkbox">
                    <label class="toggle-btn mx-auto mb-0" for="darkmode"></label>

                </div><!--//dark-mode-toggle-->

            </div>
        </nav>
    </div><!--//force-overflow-->
</header>


