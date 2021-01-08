<?php include 'partials/header.php';?>

    <style>
        .example {
            position: relative;
            padding: 0;
            width: auto;
            height:300px;
            display: block;
            cursor: pointer;
            overflow: hidden;
            -webkit-transition: all 400ms ease;
            -moz-transition: all 400ms ease;
            -o-transition: all 400ms ease;
        }
        .example img {
            width: 100%;
            min-height:300px;
            height: auto;
        }
        .content {
            opacity: 1;
            position: absolute;
            bottom: 0;
            left: 0;
            color: white;
            height:100%;
            width:100%;
            -webkit-transition: all 400ms ease;
            -moz-transition: all 400ms ease;
            -o-transition: all 400ms ease;
            -ms-transition: all 400ms ease;
            transition: all 400ms ease;
            background: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,0.5) 100%);
            border-radius: .25em;
        }
        .uppertext {
            opacity: 1;
            position: absolute;
            z-index: 2;
            top: 0;
            left: 0;
            color: white;
            height:auto;
            width:100%;
            -webkit-transition: all 400ms ease;
            -moz-transition: all 400ms ease;
            -o-transition: all 400ms ease;
            -ms-transition: all 400ms ease;
            transition: all 400ms ease;
            transform: translateY(195px);
            -webkit-transform: translateY(195px);
        }

        .example:hover .text {
            visibility: visible;
            transition: visibility 0s ease-out 0.27s!important;
            transform: translateY(190px);
            -webkit-transform: translateY(190px);
        }

        .example:hover .uppertext {
            transform: translateY(100px);
            -webkit-transform: translateY(100px);
        }

        .example:hover .content {
            transition: .4s ease;
            opacity: 1;
            background: linear-gradient(to bottom, rgba(0,0,0,0), #d02b2c 100%)!important;
        }
        .text {
            visibility: hidden;
            font-size:14px;
            font-weight:600;
            height:0;
            padding: 20px;
            transition: visibility 0s ease-in -2s;
            transform: translateY(190px);
            -webkit-transform: translateY(190px);
        }
        .uppertext .bigText {
            font-size:28px;
            font-weight:600;
            opacity: 1;
            color:white;
            padding-left: 20px;
            padding-bottom:20px;
            transition-delay: 0s;
            transition-duration: 0.4s;
        }
        .hrefTOHAHA {
            position:absolute;
            top:0;
            left:0;
            height:100%;
            width:100%;
            z-index:10;
        }
        .special-transformY :hover .uppertext {
            transform: translateY(70px);
            -webkit-transform: translateY(70px);
        }
        .special-transformY :hover .text {
            display: block;
            transform: translateY(140px);
            -webkit-transform: translateY(140px);
        }
        .example:hover {
            transform: translateY(-15px);
            -webkit-box-shadow: 0px 13px 36px 0px rgba(204,204,204,1);
            -moz-box-shadow: 0px 13px 36px 0px rgba(204,204,204,1);
            box-shadow: 0px 13px 36px 0px rgba(204,204,204,1);
        }
    </style>

    <div class="mt-5">
        <object data="img/services.svg" width="100%" height="auto"></object>
    </div>
    <section>

        <div class="main-sections red-line left mb-lg-5" style=" margin-top: -5%;z-index: -10;">
            <p class="main-sections-paragraph text-center pt-2">services</p>
        </div>

        <div>
            <div class="row col-12 col-lg-10 offset-sm-0 offset-md-0 offset-lg-1">

                <div class="col-12 col-sm-10 col-md-6 col-xl-3 m-auto py-2">
                    <div class="example wow animate__animated animate__fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img class="rounded" src="jpg/1-500x500.jpg" alt="tree" />
                    <div class="uppertext">
                        <div class="bigText"><span style="font-size:24px;"><i class="fa fa-water"></i></span><br/>Recruitment</div>
                    </div>
                    <div class="content">
                        <div class="text">Thorough pre-selection of candidates based on your specific requirements.</div>
                    </div>
                    <a href="#recruitment" class="hrefTOHAHA"></a>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-md-6 col-xl-3 m-auto py-2">
                <div class="example wow animate__animated animate__fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <img class="rounded" src="jpg/2-500x500.jpg" alt="tree" />
                <div class="uppertext">
                    <div class="bigText"><span style="font-size:24px;"><i class="fa fa-rocket"></i></span><br/>Executive Search</div>
                </div>
                <div class="content">
                    <div class="text">We identify top talents for your roles. All seniority levels, all industries. With discretion.</div>
                </div>
                <a href="#executive" class="hrefTOHAHA"></a>
            </div>
        </div>

        <div class="col-12 col-sm-10 col-md-6 col-xl-3 m-auto py-2">
            <div class="example wow animate__animated animate__fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
            <img class="rounded" src="jpg/3-500x500.jpg" alt="tree" />
            <div class="uppertext">
                <div class="bigText"><span style="font-size:24px;"><i class="fa fa-cogs"></i></span><br/>Outsourcing</div>
            </div>
            <div class="content">
                <div class="text">Outsource your support services through us. Gain more freedom to grow your business.</div>
            </div>
            <a href="#outsourcing" class="hrefTOHAHA"></a>
        </div>
        </div>

        <div class="col-12 col-sm-10 col-md-6 col-xl-3 m-auto py-2">
            <div class="example wow animate__animated animate__fadeIn" data-wow-duration="1s" data-wow-delay="1.2s">
            <img class="rounded" src="jpg/4-500x500.jpg" alt="tree" />
            <div class="uppertext">
                <div class="bigText"><span style="font-size:24px;"><i class="fa fa-globe"></i></span><br/>Consulting</div>
            </div>
            <div class="content">
                <div class="text">Use our customized consulting and analysis services to improve your personnel and HR processes.</div>
            </div>
            <a href="#consulting" class="hrefTOHAHA"></a>
        </div>
        </div>


        <!--    dwdwadDAWDWADAWDWADADDAWD ad-->


        </div>
        </div>

    </section>

    </section>


    <section id="recruitment">
        <div class="main-sections red-line right mt-lg-5">
            <p class="main-sections-paragraph text-center pt-2"></p>
        </div>

        <div class="container col-11 py-3" name="recruitment">
            <div class="row wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <div class="col-12 col-lg-7 pl-lg-5 pt-5 pt-lg-0 pr-lg-5 order-2 order-sm-1">
                    <h1 class="mb-3 p-red text-right">RECRUITMENT</h1>
                    <p class="text-right font-weight-normal">Using the most effective <b>recruitment tools</b> available, <br> we <b>select</b> and internally <b>evaluate</b> <br> those <b>most suitable</b> for your <b>role</b>.</p>
                    <p class="text-right font-weight-normal">Only the top notch <b>candidates</b> are <b>finally presented</b> to you to <b>choose</b> from.</p>
                    <h4 class="p-red text-right">Our <b>success fee only</b> payable upon <b>successful hire</b>.</h4>

                    <div class="container float-right mt-5 ">
                        <li class="row wow animate__animated animate__fadeIn" data-wow-duration="2s">
                            <ul class="row col-12  col-sm-6 offset-lg-1 col-lg-6 offset-xl-4 col-xl-4">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points mr-5 text-uppercase pl-3 pr-0">Effective selective <br> recruitment methods</p>
                            </ul>
                            <ul class="row col-12  col-sm-6 col-lg-4">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points text-uppercase pl-3 pr-0">Cost and time effective <br> recruitment</p>
                            </ul>
                            <ul class="row col-12  col-sm-6 offset-lg-1 col-lg-6 offset-xl-4 col-xl-4">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points mr-5 text-uppercase pl-3 pr-0">Access to an extensive <br> talent base</p>
                            </ul>
                            <ul class="row col-12  col-sm-6  col-lg-4 p-0 m-0 ">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points text-uppercase pl-3 pr-0">We play fair – all practices always <br> comply with our Ethical Code</p>
                            </ul>
                        </li>
                    </div>

                    <div class="row col hrefs mt-5 mb-5 ">
			            <a class="col-12 col-lg-4 mb-3 offset-lg-5 border-red row " href="/contact.php"><p class="m-auto">CONTACT US</p></a>
			        </div>

                </div>

                <div class="col-12 col-lg-5 d-xl-none p-0 mt-4 mt-lg-0  overflow-hidden order-1 order-sm-2">
                    <img class="img-fluid wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s" src="jpg/1.jpg" >
                </div>

                <div class="d-none col d-xl-block p-0 mt-4 mt-lg-0  overflow-hidden order-1 order-sm-2">
                    <img class="img-fluid wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s" src="jpg/1-width.jpg" >
                </div>



            </div>
        </div>
    </section>

    <section id="executive">
        <div class="main-sections red-line left mt-lg-5">
            <p class="main-sections-paragraph text-center pt-2"></p>
        </div>
        <div class="container col-11 py-3" name="executive">
            <div class="row  wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">

                <div class="col-12 col-lg-5 d-xl-none p-0 mt-4 mt-lg-0  overflow-hidden">
                    <img class="img-fluid float-right wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s" src="jpg/2.jpg" >
                </div>

                <div class="d-none col d-xl-block p-0 mt-4 mt-lg-0  overflow-hidden">
                    <img class="img-fluid float-right wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s" src="jpg/2-600x403.jpg" >
                </div>

                <div class="col-12 col-lg-7 pl-lg-5 pt-5 pt-lg-0 pr-lg-5">
                    <h1 class="mb-3 p-red text-left">EXECUTIVE SEARCH</h1>
                    <p class="text-left font-weight-normal">Finding the <b>right person</b> for a senior level role can sometimes be <b>challenging</b>, especially <br> in highly competitive markets, where <b>talent is scarce</b>.</p>
                    <h4 class="p-red text-left">Using our <b>vast network</b> of contacts and an equally <b>vast talent base</b>, <br> we have and continue <b>to successfully identify</b> and recruit professionals <br> for some of the <b>most high-profile roles</b> in the region.</h4>

                    <div class="container mt-5 ">
                        <li class="row wow animate__animated animate__fadeIn" data-wow-duration="2s">
                            <ul class="row col-lg-6">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points mr-5 text-uppercase pl-3 pr-0">Targeted search based on thorough understanding of each client</p>
                            </ul>
                            <ul class="row col-lg-6">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points text-uppercase pl-3 pr-0">Each case handled with the utmost discretion</p>
                            </ul>
                            <ul class="row col-lg-6">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points mr-5 text-uppercase pl-3 pr-0">International reach and personal approach</p>
                            </ul>
                            <ul class="row col-lg-6 p-0 m-0">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points text-uppercase pl-3 pr-0">We play fair – all practices always <br> comply with our Ethical Code</p>
                            </ul>
                        </li>
                    </div>

                    <div class="row col hrefs mt-5 mb-5 ">
			            <a class="col-12 col-lg-4 mb-3 offset-lg-3 border-red row " href="/contact.php"><p class="m-auto">CONTACT US</p></a>
			        </div>
                </div>

            </div>

        </div>
    </section>

    <section id="outsourcing">
        <div class="main-sections red-line right mt-lg-5">
            <p class="main-sections-paragraph text-center pt-2"></p>
        </div>

        <div class="container col-11 py-3" name="outsourcing">
            <div class="row  wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <div class="col-12 col-lg-7 pl-lg-5 pt-5 pt-lg-0 pr-lg-5  order-2 order-sm-1">
                    <h1 class="mb-3 p-red text-right">OUTSOURCING</h1>
                    <p class="text-right font-weight-normal">We know that <b>core processess</b> of your business <b>require</b> much of your attention and energy.</p>
                    <h4 class="p-red text-right">Use our <b>professional outsourcing services</b> and gain more <b>freedom and time</b> <br> to focus on <b>key aspects</b> of your business.</h4>
                    <p class="text-right  font-weight-normal">Whether it is <b>payroll</b>, general <b>administration, project management</b> <br> or any other <b>support service</b> you need reliably taken care of – <b>we have got you covered</b>.</p>

                    <div class="container float-right mt-5 ">
                        <li class="row wow animate__animated animate__fadeIn" data-wow-duration="2s">
                            <ul class="row col-12  col-sm-6 offset-lg-2 col-lg-6 offset-xl-2 col-xl-5">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points mr-5 text-uppercase pl-3 pr-0">We meet both white and blue collar outsourcing needs</p>
                            </ul>
                            <ul class="row col-12  col-sm-6 col-lg-4 col-xl-5">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points text-uppercase pl-3 pr-0">Use our extensive platform of skilled professionals</p>
                            </ul>
                            <ul class="row col-12  col-sm-6 offset-lg-2 col-lg-6 offset-xl-2 col-xl-5">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points mr-5 text-uppercase pl-3 pr-0">Outsourcing for both short-term and ongoing projects</p>
                            </ul>
                            <ul class="row col-12  col-sm-6  col-lg-4 col-xl-5 p-0 m-0">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points text-uppercase pl-3 pr-0">We play fair – all practices always <br> comply with our Ethical Code</p>
                            </ul>
                        </li>
                    </div>

                    <div class="row col hrefs mt-5 mb-5 ">
			        <a class="col-12 col-lg-4 mb-3 offset-lg-5 border-red row " href="/contact.php"><p class="m-auto">CONTACT US</p></a>
			    </div>

                </div>

                <div class="col-12 col-lg-5 d-xl-none p-0 mt-4 mt-lg-0  overflow-hidden  order-1 order-sm-2">
                    <img class="img-fluid wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s" src="jpg/3.jpg" >
                </div>

                <div class="d-none col d-xl-block p-0 mt-4 mt-lg-0  overflow-hidden  order-1 order-sm-2">
                    <img class="img-fluid wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s" src="jpg/3-600x403.jpg" >
                </div>



            </div>

        </div>
    </section>

    <section id="consulting">
        <div class="main-sections red-line left mt-lg-5">
            <p class="main-sections-paragraph text-center pt-2"></p>
        </div>

        <div class="container col-11 py-3" name="consulting">
            <div class="row  wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">

                <div class="col-12 col-lg-5 d-xl-none p-0 mt-4 mt-lg-0  overflow-hidden">
                    <img class="img-fluid float-right wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s" src="jpg/1.jpg" >
                </div>

                <div class="d-none col d-xl-block p-0 mt-4 mt-lg-0  overflow-hidden">
                    <img class="img-fluid float-right wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s" src="jpg/4-600x403.jpg" >
                </div>

                <div class="col-12 col-lg-7 pl-lg-5 pt-5 pt-lg-0 pr-lg-5">
                    <h1 class="mb-3 p-red text-left">CONSULTING</h1>
                    <p class="text-left  font-weight-normal">We use our many <b>years of experience</b> in the field of human resources <br> to thoroughly <b>analyse your company</b> personnel processes and pinpoint sources of <br> <b>existing or potential issues</b>.</p>
                    <h4 class="p-red text-left">We then <b>walk you through</b> the analysis findings <b>and propose</b> effective solutions and <br> ways <b>to successfully</b> implement them.</h4>

                    <div class="container mt-5">
                        <li class="row wow animate__animated animate__fadeIn" data-wow-duration="2s">
                            <ul class="row col-lg-6">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points mr-5 text-uppercase pl-3 pr-0">Hiring process optimization</p>
                            </ul>
                            <ul class="row col-lg-6">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points text-uppercase pl-3 pr-0">Employee turnover analysis</p>
                            </ul>
                            <ul class="row col-lg-6">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points mr-5 text-uppercase pl-3 pr-0">HR/in-company training/talent management optimization</p>
                            </ul>
                            <ul class="row col-lg-6 p-0 m-0">
                                <object class="red-square position-absolute mt-1" data="img/stop2.svg" style="width:0.7em "></object>
                                <p class="services-points text-uppercase pl-3 pr-0">We play fair – all practices always <br> comply with our Ethical Code</p>
                            </ul>
                        </li>
                    </div>

                    <div class="row col hrefs mt-5 mb-5 ">
			        	<a class="col-12 col-lg-4 mb-3 offset-lg-3 border-red row " href="/contact.php"><p class="m-auto">CONTACT US</p></a>
			        </div>

                </div>

            </div>

        </div>
    </section>



    <section>
        <div class="container-fluid" >
            <div class="row ml-1 ml-lg-5">
                <div class="main-end-paragraph text-center col-10 col-md-8">
                    talent drives business. <br>
                    we deliver talent
                </div>
            </div>
        </div>
    </section>


<?php include 'partials/footer.php';?>