<?php
include_once '../commonParts.php';
$str = '../';

$_SESSION['page'] = 10 ;
if ($_SESSION["language"] == 'greek') {
    $titlePage = "Κάνε Δωρεά";
    $donationTitle ="Θέλω να κάνω μια δωρεά!";
    $donationPar = "Διάλεξε τον τρόπο με τον οποίο θα ήθελες να βοηθήσεις!";
    $donationFormTitle = "Επέλεξε κάτι “σημαντικό” το οποίο θα ήθελες να προσφέρεις στο SCFA Α.Μ.Κ.Ε. :";
    $chooseItem = "Επιλογή αντικειμένου";
    $setSteiroseis = "Σετ στείρωσης εργαλείων για σκύλο (553,62 €)";
    $oxygenConcentrator = "Συμπυκνωτής οξυγόνου (1329,90 €)";
    $foreio ="Φορείο με τροχήλατη πλατφόρμα (726,33 €)";
    $tonometro = "Οφθαλμολογικό τονόμετρο (3954,60 €)";
    $endoscopeLed = "Ενδοσκόπιο LED  (11,03 €)";
    $rinoskopisi = "Ρινοσκόπηση / Ωτοσκόπηση (3989,00 €)";
    $antlia = "Αντλία τύπου σύριγγας (1269,00 €)";
    $eickemeyer = "Eickemeyer διαθλασίμετρο (119,00 €)";



    $donationFormTitle2 = "Συμπλήρωσε τα στοιχεία σου και θα έρθουμε σε επαφή μαζί σου!";
    $fullName = "Ονοματεπώνυμο";
    $email = "Email";
    $phone = "Τηλέφωνο";
    $submit = "Υποβολή";
    $loading = "Φόρτωση...";
    $somethingChanges = "ΚΑΤΙ ΑΛΛΑΖΕΙ ΣΤΟ ΝΗΣΙ...";
    $becomeParticipant = "Γίνε συμμέτοχος σε αυτήν την αλλαγή!";
    $choosePayment = "Επέλεξε τον τρόπο δωρεάς:";
    $bankAccount = "Τραπεζικός <br>  Λογαριασμός";
    $bankAccount2 = "Τραπεζικός   Λογαριασμός";
    $bankFormTitle = "Συμπλήρωσε το email σου για να λάβεις την απόδειξη πληρωμής:";

}else{
    $titlePage = "Donate";
    $donationTitle ="I want to make a donation!";
    $donationPar = "Choose the way you would like to help!";
    $donationFormTitle = "Choose something 'significant' that you would like to offer to SCFA N.P.O";
    $chooseItem = "Item Selection";
    $setSteiroseis = "Sterilization set of tools for dog (553.62 €)";
    $oxygenConcentrator = "Oxygen concentrator (1329.90 €)";
    $foreio = "Stretcher with wheeled platform (726.33 €)";
    $tonometro = "Ophthalmic tonometer (3954.60 €)";
    $endoscopeLed = "LED endoscope (11.03 €)";
    $rinoskopisi = "Rhinoscopy / Otoscopy (3989.00 €)";
    $antlia = "Syringe pump (1269.00 €)";
    $eickemeyer = "Eickemeyer refractometer (119.00 €)";




    $donationFormTitle2 = "Fill in your details and we will get in touch with you!";
    $fullName = "Full Name";
    $email = "Email";
    $phone = "Phone";
    $submit = "Submit";
    $loading = "Loading...";
    $somethingChanges = "SOMETHING CHANGES ON THE ISLAND...";
    $becomeParticipant = "Become a participant in this change!";
    $choosePayment = "Choose the donation method:";
    $bankAccount = "Bank <br> Account";
    $bankAccount2 = "Bank Account";
    $bankFormTitle = "Fill in your email to receive your payment receipt:";
}
$metaArray['title'] = $titlePage.'| scfa.gr';
$metaArray['description'] =  "Στηρίξτε την αγάπη μας για τα ζώα με μια δωρεά! Στη σελίδα μας, μπορείτε να επιλέξετε πώς θέλετε να στηρίξετε το έργο μας για την προστασία των ζώων. Κάντε την δωρεά σας σήμερα και γίνετε συνεργάτης στην αγώνα μας.";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] =  "donation";
navbar($titlePage,$str,$metaArray);

?>
    <main id="body-content">
        <section id="actionsHeader" page="donation">

        </section>
        <div class="sectionDivider"></div>

        <section id="donation">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="donationTitle"> <?= $donationTitle?> </h3>
                        <p class="donationPar"> <?= $donationPar?> </p>

                        <div class="donationContainer">
                            <div class="donationBox donationForm">
                                <h4><?= $donationFormTitle?></h4>
                                <div>
                                    <div class="custom-multiselect" data-bs-toggle="collapse" href="#multiselect"
                                         role="button" aria-expanded="false" aria-controls="multiselect">
                                        <div class="currentValue" id="currentValue"> <?= $chooseItem?> </div>
                                        <div><i class="fa-solid fa-chevron-down"></i></div>
                                    </div>
                                    <div class="collapse" id="multiselect">
                                        <div class="custom-checkbox" onclick="toggleCheckbox(this)">
                                            <div class="labelContainer"><h4> <?= $setSteiroseis?> </h4></div>
                                            <div class="boxContainer"></div>
                                        </div>

                                        <div class="custom-checkbox" onclick="toggleCheckbox(this)">
                                            <div class="labelContainer"><h4>  <?= $oxygenConcentrator?></h4></div>
                                            <div class="boxContainer"></div>
                                        </div>

                                        <div class="custom-checkbox" onclick="toggleCheckbox(this)">
                                            <div class="labelContainer"><h4> <?= $foreio?></h4></div>
                                            <div class="boxContainer"></div>
                                        </div>

                                        <div class="custom-checkbox" onclick="toggleCheckbox(this)">
                                            <div class="labelContainer"><h4> <?= $tonometro?></h4></div>
                                            <div class="boxContainer"></div>
                                        </div>

                                        <div class="custom-checkbox" onclick="toggleCheckbox(this)">
                                            <div class="labelContainer"><h4> <?= $endoscopeLed?></h4></div>
                                            <div class="boxContainer"></div>
                                        </div>

                                        <div class="custom-checkbox" onclick="toggleCheckbox(this)">
                                            <div class="labelContainer"><h4> <?= $rinoskopisi?></h4></div>
                                            <div class="boxContainer"></div>
                                        </div>

                                        <div class="custom-checkbox" onclick="toggleCheckbox(this)">
                                            <div class="labelContainer"><h4> <?= $antlia?></h4></div>
                                            <div class="boxContainer"></div>
                                        </div>

                                        <div class="custom-checkbox" onclick="toggleCheckbox(this)">
                                            <div class="labelContainer"><h4> <?= $eickemeyer?></h4></div>
                                            <div class="boxContainer"></div>
                                        </div>


                                    </div>
                                </div>
                                <h4> <?= $donationFormTitle2?> </h4>
                                <input type="text" id="fullName" placeholder="<?= $fullName?>">
                                <input type="text" id="email" placeholder="<?= $email?>">
                                <input type="text" id="phone" placeholder="<?= $phone?>">

                                <button onclick="donationForm(event)" class="submit-form-btn"><?= $submit?> <div id="spinner-border" class="spinner-border d-none text-light" role="status">
                                        <span class="visually-hidden"> <?= $loading?></span>
                                    </div>
                                </button>
                            </div>

                            <div class="donationBox">
                                <h4><?= $somethingChanges?></h4>
                                <h4>  <?= $becomeParticipant?></h4>

                                <p>  <?= $choosePayment?></p>

                                <div class="d-flex justify-content-center  flex-wrap">
                                    <a class="paymentBox" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="donationImage"><img src="../assets/images/donation/bank.png"></div>
                                        <div class="donationPayTitle"><?= $bankAccount?></div>
                                    </a>

                                    <a target="_blank" href="https://www.paypal.com/donate/?hosted_button_id=6ZM3HUGHGLDMU" class="paymentBox">
                                        <div class="donationImage"><img src="../assets/images/donation/paypal.png"></div>
                                        <div class="donationPayTitle">Paypal</div>
                                    </a>

                                    <a target="_blank" href="https://buy.stripe.com/4gw9Dr57CeGP2eQ9AA" class="paymentBox">
                                        <div class="donationImage"><img src="../assets/images/donation/stripe.png"></div>
                                        <div class="donationPayTitle">Stripe</div>
                                    </a>

                                    <a target="_blank" href="https://www.every.org/spetses-care-for-animals-non-profit-organization?utm_campaign=donate-link#/donate" class="paymentBox">
                                        <div class="donationImage"><img src="../assets/images/donation/every.png"></div>
                                        <div class="donationPayTitle">Every Org</div>
                                    </a>



                                </div>



                            </div>




                        </div>

                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="bankModalTitle"> <?= $bankAccount2?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                        <div class="bankInfos">
                            <p>IBAN :  GR2201721400005140104314583</p>
                            <p>    BIC SWIFT: PIRBGRAA </p>
                        </div>

                        <div class="bankForm">
                            <h3> <?= $bankFormTitle?></h3>
                            <input type="text" id="fullNameBank" placeholder="<?= $fullName?>">
                            <input type="text" id="emailBank" placeholder="<?= $email?>">
                            <button onclick="donationFormBank(event)" class="submit-form-btn"><?= $submit?> <div id="spinner-border2" class="spinner-border d-none text-light" role="status">
                                    <span class="visually-hidden"><?= $loading?></span>
                                </div>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>
<?php
footer($str);
?>