<?php
include_once '../commonParts.php';
$str = '../';
$titlePage = "Κάνε Δωρεά";
$_SESSION['page'] = 10 ;
$metaArray['title'] = $titlePage.'| scfa.gr';
$metaArray['description'] =  "Στηρίξτε την αγάπη μας για τα ζώα με μια δωρεά! Στη σελίδα μας, μπορείτε να επιλέξετε πώς θέλετε να στηρίξετε το έργο μας για την προστασία των ζώων. Κάντε την δωρεά σας σήμερα και γίνετε συνεργάτης στην αγώνα μας.";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] =  "donation";
navbar($titlePage,$str,$metaArray);

?>
    <main id="body-content">
        <section id="actionsHeader" page="adoption">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="bgTitle">ΚΑΝΕ ΔΩΡΕΑ</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sectionDivider"></div>

        <section id="donation">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="donationTitle">Θέλω να κάνω μια δωρεά!</h3>
                        <p class="donationPar">Διάλεξε τον τρόπο με τον οποίο θα ήθελες να βοηθήσεις!</p>

                        <div class="donationContainer">
                            <div class="donationBox donationForm">
                                <h4>Επέλεξε κάτι “σημαντικό” το οποίο θα ήθελες να προσφέρεις στο SCFA Α.Μ.Κ.Ε. :</h4>
                                <div>
                                    <div class="custom-multiselect" data-bs-toggle="collapse" href="#multiselect"
                                         role="button" aria-expanded="false" aria-controls="multiselect">
                                        <div class="currentValue" id="currentValue">Επιλογή αντικειμένου</div>
                                        <div><i class="fa-solid fa-chevron-down"></i></div>
                                    </div>
                                    <div class="collapse" id="multiselect">
                                        <div class="custom-checkbox" onclick="toggleCheckbox(this)">
                                            <div class="labelContainer"><h4>Ηλεκτρονικό στηθοσκόπιο</h4></div>
                                            <div class="boxContainer"></div>
                                        </div>

                                        <div class="custom-checkbox" onclick="toggleCheckbox(this)">
                                            <div class="labelContainer"><h4>Κλουβί νοσηλείας εντατικής</h4></div>
                                            <div class="boxContainer"></div>
                                        </div>

                                        <div class="custom-checkbox" onclick="toggleCheckbox(this)">
                                            <div class="labelContainer"><h4>Συμπυκνωτής οξυγόνου</h4></div>
                                            <div class="boxContainer"></div>
                                        </div>

                                        <div class="custom-checkbox" onclick="toggleCheckbox(this)">
                                            <div class="labelContainer"><h4>Συσκευή αναρρόφησης</h4></div>
                                            <div class="boxContainer"></div>
                                        </div>

                                        <div class="custom-checkbox" onclick="toggleCheckbox(this)">
                                            <div class="labelContainer"><h4>Φακός κεφαλής</h4></div>
                                            <div class="boxContainer"></div>
                                        </div>

                                        <div class="custom-checkbox" onclick="toggleCheckbox(this)">
                                            <div class="labelContainer"><h4>Φορείο ζώων</h4></div>
                                            <div class="boxContainer"></div>
                                        </div>

                                        <div class="custom-checkbox" onclick="toggleCheckbox(this)">
                                            <div class="labelContainer"><h4>Ενδοσκόπιο</h4></div>
                                            <div class="boxContainer"></div>
                                        </div>





                                    </div>
                                </div>
                                <h4>Συμπλήρωσε τα στοιχεία σου και θα έρθουμε σε επαφή μαζί σου!</h4>
                                <input type="text" id="fullName" placeholder="Ονοματεπώνυμο">
                                <input type="text" id="email" placeholder="Email">
                                <input type="text" id="phone" placeholder="Τηλέφωνο">

                                <button onclick="donationForm(event)" class="submit-form-btn">Υποβολή <div id="spinner-border" class="spinner-border d-none text-light" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </button>
                            </div>

                            <div class="donationBox">
                                <h4>ΚΑΤΙ ΑΛΛΑΖΕΙ ΣΤΟ ΝΗΣΙ...</h4>
                                <h4> Γίνε συμμέτοχος σε αυτήν την αλλαγή!</h4>

                                <p> Επέλεξε τον τρόπο πληρωμής:</p>

                                <div class="d-flex justify-content-center  flex-wrap">
                                    <a class="paymentBox" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="donationImage"><img src="../assets/images/donation/bank.png"></div>
                                        <div class="donationPayTitle">Τραπεζικός <br> Λογαριασμός</div>
                                    </a>

                                    <a target="_blank" href="https://www.paypal.com/donate/?hosted_button_id=6ZM3HUGHGLDMU" class="paymentBox">
                                        <div class="donationImage"><img src="../assets/images/donation/paypal.png"></div>
                                        <div class="donationPayTitle">Paypal</div>
                                    </a>

                                    <a target="_blank" href="https://buy.stripe.com/4gw9Dr57CeGP2eQ9AA" class="paymentBox">
                                        <div class="donationImage"><img src="../assets/images/donation/stripe.png"></div>
                                        <div class="donationPayTitle">Stripe</div>
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
                        <h1 class="modal-title fs-5" id="bankModalTitle">Τραπεζικός Λογαριασμός</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                        <div class="bankInfos">
                            <h3>ΚΑΤΙ ΑΛΛΑΖΕΙ ΣΤΟ ΝΗΣΙ...</h3>
                            <h4> Γίνε συμμέτοχος σε αυτήν την αλλαγή! </h4>
                            <p>IBAN :  GR2201721400005140104314583</p>
                            <p>    BIC SWIFT: PIRBGRAA </p>
                        </div>

                        <div class="bankForm">
                            <h3>Συμπλήρωσε το email σου για να λάβεις την απόδειξη πληρωμής:</h3>
                            <input type="text" id="fullNameBank" placeholder="Ονοματεπώνυμο">
                            <input type="text" id="emailBank" placeholder="Email">
                            <button onclick="donationFormBank(event)" class="submit-form-btn">Υποβολή <div id="spinner-border2" class="spinner-border d-none text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
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