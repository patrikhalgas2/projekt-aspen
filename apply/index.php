<?php
require '../partials/header.php';

$fields = [
    "firstName" => [
        "type" => "text",
        "max" => 30,
        "label" => "Meno",
        "required" => true
    ],
    "lastName" => [
        "type" => "text",
        "max" => 30,
        "label" => "Priezvisko",
        "required" => true
    ],
    "email" => [
        "type" => "email",
        "max" => 60,
        "label" => "Email",
        "required" => true
    ],
    "phone" => [
        "type" => "text",
        "max" => 30,
        "label" => "Telefónne číslo"
    ],
    "personalUrl" => [
        "type" => "text",
        "max" => 255,
        "label" => "Personálna webová stránka"
    ],
    "linkedIn" => [
        "type" => "text",
        "max" => 255,
        "label" => "Linked In profil"
    ],
    "message" => [
        "type" => "textarea",
        "message" => 4000,
        "label" => "Správa"
    ],
    "attachments" => [
        "type" => "file",
        "label" => "Príloha"
    ],
    "jobId" => [
        "type" => "hidden"
    ]
];

$jobId = false;
$renderForm = true;
$error = false;

if (!empty($_GET['id'])) {
    $jobId = intval($_GET['id']);
}

if (!empty($_POST['jobId'])) {
    $jobId = intval($_POST['jobId']);
}

if (empty($jobId)) {
    $error = "Táto pozícia neexistuje";
}
else {
    $request_url = "https://api.datacruit.com/advertising/jobAds/" . $jobId;

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

    // Při chybě informovat jak uživatele, příp. administrátora systému
    if (($error != '') || ($responseCode != '200')) {
        $error = "Táto pozícia neexistuje";
    }
}

?>
<section>
    <div class="container col-10 font-weight-light mt-5 pt-5">
        <div class="container-wrap datacruit">
            <div class="container main-content">
                <div class="row">

                    <?php

                    if (!empty($error)) {
                        echo '<div class="message error">' . $error . '</div>';
                    }
                    else {
                        ?>
                        <div class="position">
                            <h2>Žiadosť o pozíciu: <?php echo $response->title; ?></h2>
                            <div class="box-divider">
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
                        </div>

                        <?php
                        if (!empty($_POST)) {
                            $fields["firstName"]["value"] = htmlspecialchars($_POST["firstName"]);
                            $fields["lastName"]["value"] = htmlspecialchars($_POST["lastName"]);
                            $fields["email"]["value"] = htmlspecialchars($_POST["email"]);
                            $fields["phone"]["value"] = htmlspecialchars($_POST["phone"]);
                            $fields["personalUrl"]["value"] = htmlspecialchars($_POST["personalUrl"]);
                            $fields["linkedIn"]["value"] = htmlspecialchars($_POST["linkedIn"]);
                            $fields["message"]["value"] = htmlspecialchars($_POST["message"]);
                            $fields["attachments"]["value"] = $_FILES["attachments"];
                            $fields["jobId"]["value"] = $jobId;

                            $valid = true;

                            if (empty($fields["firstName"]["value"])) {
                                $fields["firstName"]["error"] = "Meno nemôže byť prázdne";
                                $valid = false;
                            }

                            if (empty($fields["lastName"]["value"])) {
                                $fields["lastName"]["error"] = "Priezvisko nemôže byť prázdne";
                                $valid = false;
                            }

                            if (empty($fields["email"]["value"])) {
                                $fields["email"]["error"] = "Email nemôže byť prázdny";
                                $valid = false;
                            }
                            else if (!filter_var($fields["email"]["value"], FILTER_VALIDATE_EMAIL)) {
                                $fields["email"]["error"] = "Nesprávny formát emailu";
                                $valid = false;
                            }

                            if (!empty($_FILES["attachments"]) && $_FILES["attachments"]["error"] !== 4) {
                                $supportedMimeTypes = [
                                    "application/msword",
                                    "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
                                    "application/pdf"
                                ];

                                $phpFileUploadErrors = array(
                                    1 => 'Príloha presahuje maximálnu povolenú veľkosť súboru', //'The uploaded file exceeds the upload_max_filesize directive in php.ini',
                                    2 => 'Príloha presahuje maximálnu povolenú veľkosť súboru', //'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
                                    3 => 'Príloha bola nahraná len sčasti', //'The uploaded file was only partially uploaded',
                                    4 => 'Žiadny súbor nebol nahraný', //'No file was uploaded',
                                    6 => 'Dočasný priečinok neexistuje', //'Missing a temporary folder',
                                    7 => 'Nepodarilo sa nahrať prílohu', //'Failed to write file to disk.',
                                    8 => 'Nahrávanie bolo prerušené', //'A PHP extension stopped the file upload.',
                                );

                                if ($_FILES["attachments"]["error"] > 0) {
                                    $fields["attachments"]["error"] = !empty($phpFileUploadErrors[$_FILES["attachments"]["error"]]) ? $phpFileUploadErrors[$_FILES["attachments"]["error"]] : "Nastala chyba pri nahrávaní súboru";
                                    $valid = false;
                                }
                                else if (!in_array($_FILES["attachments"]["type"], $supportedMimeTypes)) {
                                    $fields["attachments"]["error"] = "Formát prílohy nie je podporovaný. Podporované formáty: .doc, .docx, .pdf";
                                    $valid = false;
                                }
                                else if ($_FILES["attachments"]["size"] > 15 * 1024 * 1024) {
                                    $fields["attachments"]["error"] = "Maximálna veľkosť prílohy je 15MB";
                                    $valid = false;
                                }
                            }

                            if ($valid) {
                                $data = [];

                                foreach ($fields as $name => $field) {
                                    if ($field["type"] !== "file") {
                                        if (!empty($field["value"])) {
                                            $data[$name] = $field["value"];
                                        }
                                    }
                                    else {
                                        if ($field["value"]["error"] !== 4) {
                                            $file = [
                                                "attachment" => base64_encode(file_get_contents($field["value"]["tmp_name"])),
                                                "fileName" => $field["value"]["name"]
                                            ];

                                            if (empty($data["attachments"])) {
                                                $data["attachments"] = [];
                                            }

                                            $data["attachments"][] = $file;
                                        }
                                    }
                                }

                                $request_url = "https://api.datacruit.com/advertising/candidatesRegistered";

                                $json_data = json_encode($data);
                                $curl = curl_init();
                                curl_setopt($curl, CURLOPT_URL, $request_url);
                                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);	// cURL nedůvěřuje žádným CAs (http://unitstep.net/blog/2009/05/05/using-curl-in-php-to-access-https-ssltls-protected-sites/) curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);   // HTTP odpověď vracet v curl_exec()
                                curl_setopt($curl, CURLOPT_FAILONERROR, true);      // Pokud návratový kód je chyba >= 400, tak se popis chyby uloží do curl_error()
                                curl_setopt($curl, CURLOPT_HEADER, true);
                                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                                curl_setopt($curl, CURLOPT_USERPWD, 'web@aspen-staff.com:Pl49_hjt6Yzf3');
                                curl_setopt($curl, CURLOPT_POST, true);
                                curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data); // Data se nemají kódovat pomocí urlencode()
                                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: '.strlen($json_data)));

                                curl_exec($curl);
                                $responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                                $error = curl_error($curl);
                                curl_close($curl);

                                // Při chybě informovat jak uživatele, příp. administrátora systému
                                if (($error != '') || ($responseCode != '201')) {
                                    echo '<div class="message error">Vašu žiadosť sa nepodarilo odoslať. Skúste to znovu.</div>';
                                }
                                else {
                                    echo '<div class="message success">Vaša žiadosť bola úspešne odoslaná!</div>';
                                    $renderForm = false;
                                }
                            }
                            else {
                                echo '<div class="message error">Skontrolujte chyby a odošlite formulár znovu.</div>';
                            }
                        }

                        if ($renderForm) {

                            ?>

                            <form method="POST" enctype="multipart/form-data">
                                <?php

                                foreach ($fields as $name => $options) {
                                    renderField($name, $options);
                                }

                                ?>

                                <input type="submit" value="Odoslať" />
                            </form>

                            <?php
                        }
                    }


                    ?>
                </div><!--/row-->
            </div><!--/container-->
        </div><!--/container-wrap-->
    </div>
</section>

    <script>
        document.querySelector("#loader").style.visibility = "hidden";
    </script>

<?php


function renderField($name, $options) {
    $html = '<div class="form-field' . (!empty($options['required']) ? ' required' : '') . (!empty($options['error']) ? ' error' : '') . '">';

    if ($options["type"] !== "hidden") {
        $html .= '<label for="' . $name . '">' . $options['label'] . ':</label>';
    }

    if ($options["type"] === "textarea") {
        $html .= '<textarea name="' . $name . '" id="' . $name . '" ' . (!empty($options['required']) ? 'required' : '') . ' ' . (!empty($options['max']) ? ('maxlength="' . $options['max'] . '"') : '') . '>' . (!empty($options['value']) ? $options['value'] : '') . '</textarea>';
    }
    else {
        $html .= '<input type="' . $options["type"] . '" name="' . $name . '" id="' . $name . '" ' . (!empty($options['required']) ? 'required' : '') . ' ' . (!empty($options['max']) ? ('maxlength="' . $options['max'] . '"') : '') . ' ' . (!empty($options['value']) ? ('value="' . $options['value'] . '"') : '') . ' />';
    }

    if (!empty($options["error"])) {
        $html .= '<div class="field-error">' . $options["error"] . '</div>';
    }

    $html .= '</div>';

    echo $html;
}

?>