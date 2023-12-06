<?php
include_once '../commonParts.php';
$str = '../';
$titlePage = "Κάνε Δωρεά";
$_SESSION['page'] = 10 ;
navbar($titlePage,$str);

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
<!--                                <select class="custom-select" id="custom-select">-->
<!--                                    <option class="disabled-option" selected disabled >Θέλω να...</option>-->
<!--                                    <option value="1">Θέλω να υιοθετήσω!</option>-->
<!--                                    <option value="2">Θέλω να γίνω ανάδοχος!</option>-->
<!--                                </select>-->

                                <div>
                                    <div class="custom-multiselect" data-bs-toggle="collapse" href="#multiselect"
                                         role="button" aria-expanded="false" aria-controls="multiselect">
                                        <div class="currentValue">Επιλογή αντικειμένου</div>
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

                                <button onclick="getAllValues()" class="submit-form-btn">Υποβολή</button>
                            </div>

                            <div class="donationBox">
                                <h4>ΚΑΤΙ ΑΛΛΑΖΕΙ ΣΤΟ ΝΗΣΙ...</h4>
                                <h4> Γίνε συμμέτοχος σε αυτήν την αλλαγή!</h4>

                                <p> Επέλεξε τον τρόπο πληρωμής:</p>

                                <div class="d-flex justify-content-start align-items-center my-2">
                                    <div class="donationImage"><img src="../assets/images/donation/bank.png"></div>
                                    <div class="donationPayTitle">Τραπεζικό Λογαριασμό</div>
                                </div>

                                <div class="d-flex justify-content-start align-items-center my-2">
                                    <div class="donationImage"><img src="../assets/images/donation/paypal.png"></div>
                                    <div class="donationPayTitle">Paypal</div>
                                </div>

                                <div class="d-flex justify-content-start align-items-center my-2">
                                    <div class="donationImage"><img src="../assets/images/donation/stripe.png"></div>
                                    <div class="donationPayTitle">Stripe</div>
                                </div>

                            </div>




                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
footer($str);
?>