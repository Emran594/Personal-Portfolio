@extends('layout.app')
@section('content')
<section class="cta-section theme-bg-light py-5">
    <div class="container text-center single-col-max-width">
        <h2 class="heading">Contact</h2>
        <div class="intro">
        <p>Interested in hiring me for your project or just want to say hi? You can fill in the contact form below or send me an email to <a  class="text-link" href="mailto:#">emranhasans594@gmail.com</a></p>
        <p>Want to get connected? Follow me on the social channels below.</p>
        <ul class="list-inline mb-0">

            <li class="list-inline-item mb-3"><a class="linkedin" href="https://www.linkedin.com/in/emran94/"><i class="fab fa-linkedin-in fa-fw fa-lg"></i></a></li>
            <li class="list-inline-item mb-3"><a class="github" href="https://github.com/Emran594"><i class="fab fa-github-alt fa-fw fa-lg"></i></a></li>
            <li class="list-inline-item mb-3"><a class="stack-overflow" href="https://www.facebook.com/emran.sikder.737/"><i class="fab fa-facebook fa-fw fa-lg"></i></a></li>

            <!--<li class="list-inline-item mb-3"><a class="facebook" href="#"><i class="fab fa-facebook-f fa-fw fa-lg"></i></a></li>-->


        </ul><!--//social-list-->

    </div><!--//container-->
</section>
<section class="contact-section px-3 py-5 p-md-5">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form id="contact-form" class="contact-form col-lg-8 mx-lg-auto" method="post" action="{{ route('contact.store') }}">
            @csrf
            <h3 class="text-center mb-3">Get In Touch</h3>
            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <label class="sr-only" for="cname">Name</label>
                    <input type="text" class="form-control" id="cname" name="name" placeholder="Name" minlength="2" required="" aria-required="true" value="{{ old('name') }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label class="sr-only" for="cemail">Email</label>
                    <input type="email" class="form-control" id="cemail" name="email" placeholder="Email" required="" aria-required="true" value="{{ old('email') }}">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-12">
                    <select id="services" class="form-select" name="services">
                        <option selected>Select a service package you're interested in...</option>
                        <option value="basic" {{ old('services') == 'basic' ? 'selected' : '' }}>Basic</option>
                        <option value="standard" {{ old('services') == 'standard' ? 'selected' : '' }}>Standard</option>
                        <option value="premium" {{ old('services') == 'premium' ? 'selected' : '' }}>Premium</option>
                        <option value="not sure" {{ old('services') == 'not sure' ? 'selected' : '' }}>Not sure</option>
                    </select>
                    @error('services')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-12">
                    <label class="sr-only" for="cmessage">Your message</label>
                    <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="10" required="" aria-required="true">{{ old('message') }}</textarea>
                    @error('message')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-12">
                    <button type="submit" class="btn btn-block btn-primary py-2">Send Now</button>
                </div>
            </div>
        </form>
    </div><!--//container-->
</section>


@endsection
