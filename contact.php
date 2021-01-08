<?php include 'partials/header.php';?>


<div class="mt-5">
	<object class="mt-5" data="img/locality-text-final.svg" width="100%" height="auto"></object>
</div>

    <section>
        <div class="container col-11 mt-5 ">
            <div class="row">
                <div class=" col-12 col-lg-7">
                    <a href="/index.php" class="navbar-brand">
                        <img src="/img/logo.svg"  width="250px" height="auto">
                    </a>
                    <h4 class="font-weight-bold row mb-5">Contact :</h4>
                    <div class="font-weight-bolde my-3 row">office:<a class="text-decoration-none font-weight-bolder" href="https://www.google.com/maps/@48.1445882,17.1051299,3a,75y,285.56h,104.41t/data=!3m6!1e1!3m4!1sN3jUq2HWydXaIEn8pcTQCw!2e0!7i13312!8i6656?hl=en"> <p class="p-red ml-3">AspenStaff, s.r.o.,<br class="d-md-none"> Klariská 7, 811 03,<br class="d-md-none"> Bratislava Slovak Republic</p></a></div>
                    <div class="font-weight-bolder  my-3 row">tel.:<a class="text-decoration-none font-weight-bolder mr-1"  href="tel:+421254644480"><p class="p-red ml-4 pl-2">  +421254644480</p></a></div>
                    <div class="font-weight-bolder  my-3 mb-5 row">email:<a class="text-decoration-none font-weight-bolder"  href="mailto:info@aspen-staff.com"><p class="p-red ml-3">info@aspen-staff.com</p></a></div>
                    <div class="mt-5 mb-0 row"><h4 class="font-weight-bolder">Stay in touch!<br>Follow us on <a style="color:#d02b2c" href="https://www.facebook.com/AspenStaff" >Facebook</a> and <a href="https://www.linkedin.com/company/aspenstaff/"style="color:#d02b2c">LinkedIn</a>.</h4></div>
                </div>

                <div class=" col-12  col-lg-5">
                    <div class="mt-3 mb-0 row"><h4 class="font-weight-bolder">How can we help you?</h4></div>
                    <div class="mt-3 mb-0 row"><h4 class="font-weight-bolder">Email us at <a style="color:#d02b2c" href="mailto:info@aspen-staff.com" >info@aspen-staff.com</a> or fill out the form below.</h4></div>
                    <form class="contact-form row flex-column" action="" method="post">
                        <p>
                            <label for="">
                                Your Name (required)
                                <input id="mailName"  class="contact-forms" type="text" name="name" required>
                            </label>
                        </p>

                        <p>
                            <label for="">
                                Your Email (required)
                                <input id="mailMail" class="contact-forms" type="email" name="mail" required>
                            </label>
                        </p>

                        <p>
                            <label for="">
                                Subject
                                <input id="mailSubject" class="contact-forms" type="text" name="subject">
                            </label>
                        </p>

                        <p>
                            <label for="">
                                Your Message
                                <textarea id="mailMessage" class="contact-forms" name="message" cols="40" rows="10"></textarea>
                            </label>
                        </p>

                        <p>
                            <button class="contact-forms-button" id="mailSend">Send</button>
                        </p>

                    </form>
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