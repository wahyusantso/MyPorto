<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wahyu.</title>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owner.css') }}">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('customicon/personal_icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('customicon/personal_icon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('customicon/personal_icon.png') }}">

    <!-- font awesome
    ================================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- JQuery
    ================================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <!-- # preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>

    <!-- # page wrap
    ================================================== -->
    <div class="s-pagewrap">

        <div class="circles">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- ## site header 
        ================================================== -->
        <header class="s-header">
            <nav class="navbar">
                <ul class="nav-links" id="navLinks">
                    <li><a href="#intro">Intro</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact Me</a></li>
                </ul>
            </nav>
        </header> <!-- end s-header -->

        <!-- ## main content
        ==================================================- -->
        <main class="s-content">

            <!-- ### intro
            ================================================== -->
            <section id="intro" class="s-intro target-section">

                <div class="row intro-content wide">

                    <div class="column">
                        <div class="text-pretitle with-line">
                            Hi, there <i class="fa-solid fa-hand"></i>
                        </div>

                        <h1 class="text-huge-title">
                            I am Wahyu, <br> 
                            a junior
                            <span class="text-occupation">IT Programmer</span>
                        </h1>
                    </div>

                    <ul class="intro-social">
                        <li><a href="https://www.linkedin.com/in/wahyu-santoso-243786215" target="_blank">Linkedin</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="https://github.com/wahyusantso" target="_blank">Github</a></li>
                    </ul>

                </div> <!-- end intro content -->

                <a href="#about" class="intro-scrolldown smoothscroll">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M11 21.883l-6.235-7.527-.765.644 7.521 9 7.479-9-.764-.645-6.236 7.529v-21.884h-1v21.883z"/></svg>
                </a>

            </section> <!-- end s-intro -->


            <!-- ### about
            ================================================== -->
            <section id="about" class="s-about target-section">


                <div class="row about-info wide flex-about" data-animate-block>

                    <div class="column lg-4 md-12 about-info__pic-block">
                        {{-- <img src="images/about-photo.jpg" 
                             srcset="images/about-photo.jpg 1x, images/about-photo@2x.jpg 2x" alt="" class="about-info__pic" data-animate-el> --}}
                        
                        <img src="{{ asset('images/ai1.png') }}" alt="" class="about-info__pic profile-picture" data-animate-el>
                    </div>

                    <div class="column lg-5 md-12">
                        <div class="about-info__text" >

                            <h2 class="text-pretitle with-line" data-animate-el>
                                About
                            </h2>
                            <p class="attention-getter" data-animate-el>
                                Junior IT Programmer with 1 year and 6 months of hands-on experience in the field. 
                                Proficient in web development using the Laravel framework. 
                                Experienced in backend development with Node.js for building API.
                                Highly committed to continuous learning and staying current with the latest trends in software development.
                            </p>
                            <a href="{{ route('download.resume') }}" class="btn btn--medium u-fullwidth" data-animate-el>Download CV</a>

                        </div>
                    </div>
                </div> <!-- about-info -->


                <div class="row about-expertise" data-animate-block>
                    <div class="column lg-12">

                        <h2 class="skills-label" data-animate-el>Having knowledge</h2>

                        <div class="brand-carousel-wrapper">
                            <div class="scroll-container">
                                <div class="brand-carousel">
                                    @for ($i = 0; $i < 2; $i++)
                                        @foreach ($skills as $item)
                                            <div class="brand-container">
                                                <img src="{{ asset($item->path) }}" alt="{{ $item->skill_name }}" class="brand-logo">
                                                <h2 class="brand-title">{{ $item->skill_name }}</h2>
                                            </div>
                                        @endforeach
                                    @endfor
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!-- end about-expertise -->


                <div class="row about-timelines" data-animate-block>

                    <div class="column lg-6 tab-12">

                        <h2 class="text-pretitle" data-animate-el>
                            Experience
                        </h2>

                        <div class="timeline" data-animate-el>

                            @foreach ($experiences as $item)
                                <div class="timeline__block">
                                    <div class="timeline__bullet"></div>
                                    <div class="timeline__header">
                                        <h4 class="timeline__title">{{ $item->company_name }}</h3>
                                        <h5 class="timeline__meta">{{ $item->occupation }}</h5>
                                        <p class="timeline__timeframe">{{ $item->date_range }}</p>
                                    </div>
                                    <div class="container_desc timeline__desc">
                                        <p class="desc">{{ $item->description }}</p>
                                        <p class="desc full-content" hidden></p>
                                        <p class="toggle-action" style="width: max-content"></p>
                                        <p class="tech"><b>Tech Stack: </b>{{ $item->tech_stack }}</p>
                                    </div>
                                </div>
                            @endforeach
    
                        </div> <!-- end timeline -->

                    </div> <!-- end column -->

                    <div class="column lg-6 tab-12">

                        <h2 class="text-pretitle" data-animate-el>
                            Education
                        </h2>

                        <div class="timeline" data-animate-el>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <h4 class="timeline__title">Universitas Pamulang</h3>
                                    <h5 class="timeline__meta">Bachelor Degree in Informatics Engineering</h5>
                                    <p class="timeline__timeframe">Mar 2019 - Jul 2023, GPA: 3.58/4.00</p>
                                </div>
                                <div class="timeline__desc">
                                    <ul>
                                        <li><b>Activities and society:</b> Engaging in community service by providing materials on the improvement and skills of information technology for small and medium-sized businesses in the Puri Pamulang residential.</li>
                                        <li><b>Thesis Project:</b> Implementation of an Android Kotlin-Based Food Sales System Using the Prototype Method.</li>
                                        <li><b>Relevant courses:</b> Informatics Logic, Programming Algorithms I-II, Web Programming I-II, Mobile Programming.</li>
                                    </ul>
                                </div>
                            </div>
    
                        </div> <!-- end timeline -->
                        
                    </div> <!-- end column -->


                </div> <!-- end about-timelines -->

            </section> <!-- end s-about -->


            <!-- ### works
            ================================================== -->
            <section id="projects" class="s-works target-section">
                <div class="row works-portfolio">

                    <div class="column lg-12" data-animate-block>

                        <h2 class="text-pretitle" data-animate-el>
                            Recent Projects
                        </h2>
                        <p class="h1" data-animate-el>
                            Here are some of projects I have done lately.
                        </p>
    
                        <ul class="folio-list row block-lg-one-half block-stack-on-1000">

                            @foreach ($projects as $item)
                                <li class="folio-list__item column" data-animate-el data-project-id="{{ $item->id }}">
                                    <a class="folio-list__item-link" href="#modal-{{ $item->id }}">
                                        <div class="folio-list__item-pic">
                                            <img src="{{ asset($item->image_path) }}" alt="">
                                        </div>
                                        
                                        <div class="folio-list__item-text">
                                            <div class="folio-list__item-cat">
                                                {{ $item->category }}
                                            </div>
                                            <div class="folio-list__item-title">
                                                {{ $item->project_name }}.
                                            </div>
                                        </div>
                                    </a>
                                    <a class="folio-list__proj-link" href="#" title="project link">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                                    </a>
                                </li> <!--end folio-list__item -->
                            @endforeach

                        </ul> <!-- end folio-list -->

                    </div> <!-- end column -->


                    <!-- Modal Templates Popup
                    -------------------------------------------- -->
                    @foreach ($projects as $item)
                        <div id="modal-{{ $item->id }}" hidden>
                            <div class="modal-popup">
                                <iframe src="{{ $item->video_path }}" title="project" width="100%" height="400" frameborder="0" allowfullscreen></iframe>
                                
                                <div class="modal-popup__desc">
                                    <h5 id="projectName">{{ $item->project_name }}</h5>
                                    <p id="projectDescription">{{ $item->description }}</p>
                                    <p class="project-tech">Tech Stack:</p>
                                    <ul class="modal-popup__cat">
                                        @foreach ($item->tech_stack as $stack)
                                            <li>{{ $stack }}</li>                                          
                                        @endforeach
                                    </ul>
                                </div>
                    
                            </div>
                        </div> <!-- end modal -->
                    @endforeach

                </div> <!-- end works-portfolio -->
            </section> <!-- end s-works -->


            <!-- ### contact
            ================================================== -->
            <section id="contact" class="s-contact target-section">

                <div class="row contact-top">
                    <div class="column lg-12">
                        <h2 class="text-pretitle">
                            Get In Touch
                        </h2>

                        <p class="h1">
                            Whether you have a question or just 
                            want to chat about tech, shoot me a message.
                        </p>
                    </div>
                </div> <!-- end contact-top -->

                <div class="row contact-bottom">
                    <div class="column lg-8 md-5 tab-6 stack-on-550 contact-block">
                        <h3 class="text-pretitle">Reach me at</h3>
                        <p class="contact-links">
                            <a href="mailto:wahyusantoso.id@gmail.com" class="mailtoui">wahyusantoso.id@gmail.com</a> <br>
                        </p>
                    </div>
                    <div class="column lg-4 md-5 tab-6 stack-on-550 contact-block">
                        <h3 class="text-pretitle">Social</h3>
                        <ul class="contact-social">
                            <li><a href="https://www.linkedin.com/in/wahyu-santoso-243786215" target="_blank">Linkedin</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="https://github.com/wahyusantso" target="_blank">Github</a></li>
                        </ul>
                    </div>
                </div> <!-- end contact-bottom -->

            </section> <!-- end contact -->

        </main> <!-- end s-content -->


        <!-- ## footer
        ================================================== -->
        <footer class="s-footer">

            <div class="row">
                <div class="column ss-copyright">
                    <span>© Custom</span> 
                </div>
            </div>

        </footer> <!-- end s-footer -->

    </div> <!-- end -s-pagewrap -->
    
    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        //parsing data dari blade ke javascript file
        window.bladeData = {
            projectRoute: '{{ route('find.project', 'PLACEHOLDER') }}'
        }
    </script>
</body>
</html>