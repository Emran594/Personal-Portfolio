@extends('layout.app')
@section('content')
<section class="cta-section theme-bg-light py-5">
    <div class="container text-center single-col-max-width">
        <h2 class="heading mb-3">Online Resume</h2>
        <a class="btn btn-primary" href="{{ route('resume.download') }}" target="_blank"><i class="fas fa-file-pdf me-2"></i>Download PDF Version</a>
    </div><!--//container-->
</section>
<div class="container resume-container px-3 px-lg-5">
    <article class="resume-wrapper mx-auto theme-bg-light p-5 mb-5 my-5 shadow-lg">

        <div class="resume-header">
            <div class="row align-items-center">
                <div class="resume-title col-12 col-md-6 col-lg-8 col-xl-9">
                    <h2 class="resume-name mb-0 text-uppercase">Emran Sikder</h2>
                    <div class="resume-tagline mb-3 mb-md-0">Fullstak web application Developer</div>
                </div><!--//resume-title-->
                <div class="resume-contact col-12 col-md-6 col-lg-4 col-xl-3">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><i class="fas fa-phone-square fa-fw fa-lg me-2 "></i><a class="resume-link" href="tel:#">01632373626</a></li>
                        <li class="mb-2"><i class="fas fa-envelope-square fa-fw fa-lg me-2"></i><a class="resume-link" href="mailto:#">emranhasans594@gmail.com</a></li>
                        <li class="mb-2"><i class="fas fa-globe fa-fw fa-lg me-2"></i><a class="resume-link" href="#">www.emransikder.info</a></li>
                        <li class="mb-0"><i class="fas fa-map-marker-alt fa-fw fa-lg me-2"></i>Bangladesh</li>
                    </ul>
                </div><!--//resume-contact-->
            </div><!--//row-->

        </div><!--//resume-header-->
        <hr>
        <div class="resume-intro py-3">
            <div class="row align-items-center">
                <div class="col-12 col-md-3 col-xl-2 text-center">
                    <img class="resume-profile-image mb-3 mb-md-0 me-md-5  ms-md-0 rounded mx-auto" src="{{ asset('assets/images/imran.png') }}" alt="image">
                </div>

                <div class="col text-start">
                    <p class="mb-0">Motivated professional with over 3 years of experience as an MIS Senior Executive and over 2 years in
                        customer support within the software industry. Known for meticulous attention to detail, exceptional
                        organizational skills, and adept problem-solving abilities. Recently acquired proficiency in PHP, Laravel,
                        JavaScript, Ajax, and jQuery. Poised to transition into a professional developer role, driven by innovation
                        and continuous learning.</p>
                </div><!--//col-->
            </div>
        </div><!--//resume-intro-->
        <hr>
        <div class="resume-body">
            <div class="row">
                <div class="resume-main col-12 col-lg-8 col-xl-9   pe-0   pe-lg-5">
                    <section class="work-section py-3">
                        <h3 class="text-uppercase resume-section-heading mb-4">Work Experiences</h3>
                        <div class="item mb-3">
                            <div class="item-heading row align-items-center mb-2">
                                <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">Backend Developer  </h4>
                                <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-start text-md-end">Hovata | 2023 - Present</div>

                            </div>
                            <div class="item-content">
                                <p>As a backend developer, I oversee all backend-related tasks, ensuring the seamless integration of systems and optimal performance of applications. From architecting databases to designing robust APIs, I lead a team in developing scalable and efficient backend solutions. My responsibilities include managing databases, optimizing server-side code, and implementing security protocols. By leveraging my expertise in languages like PHP, Laravel, and MySQL, I drive innovation and excellence in backend development, empowering teams to deliver high-quality software solutions.</p>
                            </div>
                        </div><!--//item-->
                        <div class="item mb-3">
                            <div class="item-heading row align-items-center mb-2">
                                <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">Junior Software Developer</h4>
                                <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-start text-md-end">BelivIt | 2020 - 2023</div>

                            </div>
                            <div class="item-content">
                                <p>In my initial role, I contributed to projects including a Parking Management System and platforms like Tutors Point and a News Portal. I utilized C#, HTML, CSS, PHP, JavaScript, MySQL, and Microsoft SQL Server. I created test plans, executed requirement analyses, and collaborated on development tasks, gaining invaluable experience in software development processes and technologies. These experiences have equipped me with a solid foundation for future growth and contributions in the field.</p>
                            </div>
                        </div><!--//item-->
                        <div class="item mb-3">
                            <div class="item-heading row align-items-center mb-2">
                                <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">Technical Support</h4>
                                <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-start text-md-end">Omicon Group | 2018 - 2020</div>

                            </div>
                            <div class="item-content">
                                <p>I provide frontline technical support via phone, email, or chat, swiftly resolving inquiries. Proficient in
                                    troubleshooting software/hardware issues and collaborating with developers to implement clientspecific features.</p>
                            </div>
                        </div>

                    </section><!--//work-section-->


                    <section class="project-section py-3">
                        <h3 class="text-uppercase resume-section-heading mb-4">Projects</h3>
                        <div class="item mb-3">
                            <div class="item-heading row align-items-center mb-2">
                                <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">Fuel Station Management ERP System
                                </h4>
                                <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-start text-md-end">Hovata Technologies</div>

                            </div>
                            <div class="item-content">
                                <p>My role. I held the position of a backend developer within the scope of this project
                                    Project description. Petrol ERP offers a comprehensive solution for managing petrol pumps, encompassing accounting, inventory, purchase and sales records, stock management, employee salaries, bank loan accounts, daily profit and loss statements, and all other transactional expenses with precision and efficiency.
                                    I undertook all backend development tasks for this project.</p>


                            </div>
                        </div><!--//item-->
                        <div class="item">
                            <div class="item-heading row align-items-center mb-2">
                                <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">Website For Mr Monmohon Corporation</h4>
                                <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-start text-md-end">Open Source</div>

                            </div>
                            <div class="item-content">
                                <p>My role. I work as a fullstack developer here, I code both frontend and backend
                                    Project description. Monmohon Corporation is a group of company in Bangladesh. This is an website for monmohon corporation.
                                    </p>

                            </div>
                        </div><!--//item-->
                        <div class="item">
                            <div class="item-heading row align-items-center mb-2">
                                <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">"JobPulse" A dynamic job listing platform </h4>
                                <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-start text-md-end">Open Source</div>

                            </div>
                            <div class="item-content">
                                <p>My role. Fullstack Developer
                                    Project description. Introducing JobPulse! A state-of-the-art job listing platform with role-based authentication, password recovery, job posting, pagination, CV building, and more. Elevate your recruitment experience now at JobPulse</p>

                            </div>
                        </div><!--//item-->
                    </section><!--//project-section-->
                </div><!--//resume-main-->
                <aside class="resume-aside col-12 col-lg-4 col-xl-3 px-lg-4 pb-lg-4">
                    <section class="skills-section py-3">
                        <h3 class="text-uppercase resume-section-heading mb-4">Skills</h3>
                        <div class="item">
                            <h4 class="item-title">Technical</h4>
                            <ul class="list-unstyled resume-skills-list">
                                <li class="mb-2">JavaScript/Vue</li>
                                <li class="mb-2">PHP<li>MySQL</li>
                                    <li class="mb-2">OOP</li>
                                    <li class="mb-2">Design and implement database structures</li>
                                    <li>Lead and deliver complex software systems</li>
                                </ul>
                            </div><!--//item-->
                            <div class="item">
                                <h4 class="item-title">Professional</h4>
                                <ul class="list-unstyled resume-skills-list">
                                    <li class="mb-2">Effective communication</li>
                                    <li class="mb-2">Team player<li>
                                        <li class="mb-2">Strong problem solver</li>
                                        <li>Good time management</li>
                                    </ul>
                                </div><!--//item-->
                            </section><!--//skills-section-->
                            <section class="education-section py-3">
                                <h3 class="text-uppercase resume-section-heading mb-4">Education</h3>
                                <ul class="list-unstyled resume-education-list">
                                    <li class="mb-3">
                                        <div class="resume-degree font-weight-bold">BSC In Mathematics</div>
                                        <div class="resume-degree-org text-muted">Kavi Nazrul Gov.College </div>
                                        <div class="resume-degree-time text-muted">2012 - 2017</div>
                                    </li>
                                </ul>
                            </section><!--//education-section-->
                            <section class="skills-section py-3">
                                <h3 class="text-uppercase resume-section-heading mb-4">Languages</h3>
                                <ul class="list-unstyled resume-lang-list">
                                    <li class="mb-2">Bengali <span class="text-muted">(Native)</span></li>
                                    <li>English <span class="text-muted">(Professional)</span></li>
                                </ul>
                            </section><!--//certificates-section-->
                            <section class="skills-section py-3">
                                <h3 class="text-uppercase resume-section-heading mb-4">Interests</h3>
                                <ul class="list-unstyled resume-interests-list mb-0">
                                    <li class="mb-2">Sports</li>
                                    <li class="mb-2">Photography</li>
                                    <li class="mb-2">Travelling</li>
                                    <li class="mb-2">Sleeping</li>
                                </ul>
                            </section><!--//certificates-section-->

                        </aside><!--//resume-aside-->
                    </div><!--//row-->
                </div><!--//resume-body-->
                <hr>
                <div class="resume-footer text-center">
                    <ul class="resume-social-list list-inline mx-auto mb-0 d-inline-block text-muted">
                        <li class="list-inline-item mb-lg-0 me-3"><a class="resume-link" href="#"><i class="fab fa-github-square fa-2x me-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">github.com/Emran594</span></a></li>
                        <li class="list-inline-item mb-lg-0 me-3"><a class="resume-link" href="#"><i class="fab fa-linkedin fa-2x me-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">https://www.linkedin.com/in/emran94/</span></a></li>
                    </ul>
                </div><!--//resume-footer-->
            </article>

</div><!--//container-->

@endsection
