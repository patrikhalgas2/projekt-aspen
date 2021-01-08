<?php

if (empty($_GET['id'])) {

    echo "page not found";

    return;
}


$request_url = "https://api.datacruit.com/advertising/jobAds/" . intval($_GET['id']);

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $request_url,
    CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
    CURLOPT_USERPWD => 'web@aspen-staff.com:Pl49_hjt6Yzf3'
));

$response = json_decode(curl_exec($curl));
$responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$error = curl_error($curl);
curl_close($curl);
if (($error != '') || ($responseCode != '200')) {
    echo "there was an error";
    return;
}

require '../partials/header.php';

?>
<section>
    <div class="container col-10 font-weight-light my-5 pt-5">
        <div class="container-wrap datacruit">
            <div class="container main-content">
                <div class="row">


                    <div class="position mt-5">
                        <div class="row">
                            <div class="box-dividerred my-auto mr-3">
                                <div class="box"></div>
                            </div>
                        <h1><?php echo $response->title; ?></h1>
                        </div>
                        <div class="box-divider mb-5">
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                            <div class="box"></div>
                        </div>

                        <div class="detail">
                            <div class="row mt-5">
                                <div class="box-dividerred">
                                    <div class="box"></div>
                                </div>
                                <h5 class="font-weight-bold ">Popis práce:</h5>
                            </div>
                            <?php echo $response->description; ?>

                        
                            <div class="row mt-5">
                                <div class="box-dividerred">
                                    <div class="box"></div>
                                </div>
                                <h5 class="font-weight-bold ">Pracovné benefity:</h5>
                            </div>
                            <?php echo $response->offer; ?>


                            <div class="row mt-5">
                                <div class="box-dividerred">
                                    <div class="box"></div>
                                </div>
                                <h5 class="font-weight-bold ">Podmienky prijatia:</h5>
                            </div>
                            <?php echo $response->requirements; ?>
                        </div>
                        
                        <div class="additional-info">
                            <div class="infobox ml-5">
                                <b>Lokalita:</b> <?php echo $response->location; ?><br />
                                <b>Typ práce:</b> <?php echo $response->workTypes; ?><br />
                                <!-- Sektor: < ?php echo $response->; ? ><br /> -->
                                <b>Plat:</b> <?php echo $response->salary; ?><br />
                                <b>Ref. č.:</b> <?php echo $response->referenceNumber; ?><br />
                            </div>
                            <a class="ml-5" href="/apply/?id=<?php echo $_GET['id']; ?>">Reagovať na ponuku</a>
                        </div>
                    </div>
                </div><!--/row-->
            </div><!--/container-->
        </div><!--/container-wrap-->
    </div>
</section>
<?php
require '../partials/footer.php';
?>
