<?php include 'partials/header.php';?>


	<section>
	<div class="container col-10 text-dark font-weight-bold mt-5 pt-5 cookies">
	<h1 class="mt-lg-5">About this cookie policy</h1>

<p class="text-muted  font-weight-normal">This Cookie Policy explains what cookies are and how we use them. You should read this policy to understand what cookies are, how we use them, the types of cookies we use i.e, the information we collect using cookies and how that information is used and how to control the cookie preferences. For further information on how we use, store and keep your personal data secure, see our Privacy Policy.</p>

<p class="text-muted  font-weight-normal">You can at any time change or withdraw your consent from the Cookie Declaration on our website.</p>
<p class="text-muted  font-weight-normal">Learn more about who we are, how you can contact us and how we process personal data in our Privacy Policy.</p>
<p class="text-muted  font-weight-normal">Your consent applies to the following domains: <a href="https://www.arttodart.com">www.arttodart.com</a></p>
<p class="text-muted  font-weight-normal">Your current cookies state: <span id="cookiesState" style="color:#d02b2c!important;font-weight: bold;">None</span><span id="deleteCookies" style="cursor: pointer;"></span></p>

<h1> What are cookies ? </h1>
<p class="text-muted  font-weight-normal">Cookies are small text files that are used to store small pieces of information. The cookies are stored on your device when the website is loaded on your browser. These cookies help us make the website function properly, make the website more secure, provide better user experience, and understand how the website performs and to analyze what works and where it needs improvement.</p>

<h1> How do we use cookies ?</h1>
<p class="text-muted  font-weight-normal">As most of the online services, our website uses cookies first-party and third-party cookies for a number of purposes. The first-party cookies are mostly necessary for the website to function the right way, and they do not collect any of your personally identifiable data.</p>

<p class="text-muted  font-weight-normal">The third-party cookies used on our websites are used mainly for understanding how the website performs, how you interact with our website, keeping our services secure, providing advertisements that are relevant to you, and all in all providing you with a better and improved user experience and help speed up your future interactions with our website.</p>

<h1>What types of cookies do we use ?</h1>
<p class="text-muted  font-weight-normal"><span style="font-weight:bold;">Essential</span>: Some cookies are essential for you to be able to experience the full functionality of our site. They allow us to maintain user sessions and prevent any security threats. They do not collect or store any personal information. For example, these cookies allow you to log-in to your account and add products to your basket and checkout securely. </p>

<p class="text-muted  font-weight-normal"><span style="font-weight:bold;">Statistics:</span> These cookies store information like the number of visitors to the website, the number of unique visitors, which pages of the website have been visited, the source of the visit etc. These data help us understand and analyze how well the website performs and where it needs improvement.</p>

<p class="text-muted  font-weight-normal"><span style="font-weight:bold;">Marketing:</span> Our website displays advertisements. These cookies are used to personalize the advertisements that we show to you so that they are meaningful to you. These cookies also help us keep track of the efficiency of these ad campaigns. </p>
<p class="text-muted  font-weight-normal">The information stored in these cookies may also be used by the third-party ad providers to show you ads on other websites on the browser as well.</p>

<p class="text-muted  font-weight-normal"><span style="font-weight:bold;">Functional:</span> These are the cookies that help certain non-essential functionalities on our website. These functionalities include embedding content like videos or sharing contents on the website on social media platforms. </p>

<p class="text-muted  font-weight-normal"><span style="font-weight:bold;">Preferences:</span> These cookies help us store your settings and browsing preferences like language preferences so that you have a better and efficient experience on future visits to the website.</p>

<table class="cookielawinfo-row-cat-table cookielawinfo-classic d-none">
    <thead>
        <tr>
            <th class="cookielawinfo-column-4">Cookie</th>
            <th class="cookielawinfo-column-4">Popis</th>
        </tr>
    </thead>
    <tbody>
    <?php
        global $mysqli;
        $result = $mysqli->query( "SELECT * FROM cookies WHERE ip = '{$_SERVER['REMOTE_ADDR']}'" );

        if( $result->num_rows > 0 ) {
            while( $row = $result->fetch_assoc() ) {
                ?>
                <tr class="cookielawinfo-row">
                    <td class="cookielawinfo-column-empty">Using of this page, visit</td>
                    <td class="cookielawinfo-column-empty">Cookies and GDPR terms accepted from <?= $row["ip"]; ?>, on <?= date( "d.m.Y", strtotime($row["when"])); ?></td>
                </tr>
                <?php
            }
        } else {
            ?>
            <tr class="cookielawinfo-row">
                <td colspan="4" class="cookielawinfo-column-empty">No data found</td>
            </tr>
            <?php
        }
    ?>
    </tbody>
</table>

<h1>How can I control the cookie preferences ?</h1>

<p class="text-muted  font-weight-normal">Should you decide to change your preferences later through your browsing session, you can click on the "Privacy &amp; Cookie Policy" tab on your screen. This will display the consent notice again enabling you to change your preferences or withdraw your consent entirely.</p>

<p class="text-muted  font-weight-normal">In addition to this, different browsers provide different methods to block and delete cookies used by websites. You can change the settings of your browser to block/delete the cookies. To find out more out more on how to manage and delete cookies, visit <a href="https://en.wikipedia.org/wiki/HTTP_cookie" rel="nofollow" target="_blank">wikipedia.org</a>, <a href="http://www.allaboutcookies.org/" rel="nofollow" target="_blank">www.allaboutcookies.org.</a> 
</p>


<h2>GDPR Data Protection Rights</h2>

<p class="text-muted font-weight-normal">We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
<p class="text-muted font-weight-normal">The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
<p class="text-muted font-weight-normal">The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
<p class="text-muted font-weight-normal">The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
<p class="text-muted font-weight-normal">The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
<p class="text-muted font-weight-normal">The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
<p class="text-muted font-weight-normal">The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
<p class="text-muted font-weight-normal">If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

<h2>Children's Information</h2>

<p class="text-muted font-weight-normal">Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

<p class="text-muted font-weight-normal">aspen-staff.com does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
</div>
</div>
	</section>

	<section>
		<div class="container-fluid" >
			<div class="row ml-1 ml-lg-5">
				<div class="main-end-paragraph text-center col-10 col-md-8">
					talent drives business. <br> we deliver talent.
				</div>
			</div>
		</div>
	</section>	

<?php include 'partials/footer.php';?>