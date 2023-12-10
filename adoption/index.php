<?php
include_once '../commonParts.php';
$str = '../';
$titlePage = "ΥΙΟΘΕΣΙΑ / ΑΝΑΔΟΧΗ";
$_SESSION['page'] = 12 ;
$metaArray['title'] = $titlePage.'| scfa.gr';
$metaArray['description'] =  "Η υιοθεσία αλλάζει ζωές! Στην ομάδα μας, συνδέουμε ανθρώπους με νέα μέλη της οικογένειάς τους, δίνοντας σε ζώα ένα δεύτερο και πιο αγαπημένο σπίτι. Ανακαλύψτε τη χαρά της υιοθεσίας σήμερα!";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] =  "adoption";
navbar($titlePage,$str,$metaArray);


?>
    <main id="body-content">
        <section id="actionsHeader" page="adoption">
            <div class="container-fluid">
                <div class="row">


                </div>
            </div>
        </section>
        <div class="sectionDivider"></div>

        <section id="adoptionSection">
            <div class="container">
                <div class="row">
                    <div class="col-12 adoptionContainer  ">
                        <div class="adoptionBox leftBox">
                            <h4>Υιοθέτησε! </h4>
                            <div class="d-flex justify-content-end">
                                <img class="adoptionFoots" src="../assets/images/home/two-foots.png">
                            </div>

                            <p>“Ιστορίες αδέσποτων γατών των Σπετσών με αίσιο τέλος”
                                </p>
                            <p>Υιοθέτησε υπεύθυνα!</p>

                        </div>

                        <div class="adoptionBox rightBox">
                            <h4>Γίνε ανάδοχος! </h4>


                            <p>Γίνε συμμέτοχος στην στείρωση/ φιλοξενία/ σίτιση/ περίθαλψη ενός ή περισσότερων αδέσποτων του νησιού μας!
                            </p>
                            <div class="d-flex justify-content-end">
                                <img class="adoptionFoots2" src="../assets/images/home/two-foots.png">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="adoptionSectionForm">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-12 ">
                        <img alt="cartoon sleepy cat" src="../assets/images/adoption/sleepyCat.png" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-md-12  ">
                        <div class="adoptionForm">
                            <h4>Συμπλήρωσε τα στοιχεία σου και θα έρθουμε σε επαφή μαζί σου!</h4>
                            <select class="custom-select" id="selectChoice">
                                <option value="0" class="disabled-option" selected disabled >Θέλω να...</option>
                                <option value="1">Θέλω να υιοθετήσω!</option>
                                <option value="2">Θέλω να γίνω ανάδοχος!</option>
                            </select>

                            <input type="text" id="fullName" placeholder="Ονοματεπώνυμο">
                            <input type="text" id="email" placeholder="Email">
                            <input type="text" id="phone" placeholder="Τηλέφωνο">

                            <button onclick="adoptionForm(event)" class="submit-form-btn">Υποβολή <div id="spinner-border" class="spinner-border d-none text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="educationPhotos">
            <div class="container">
                <div class="row my-2">
                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/adoption/adoption1.webp" alt="Adoption photo 1">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/adoption/adoption2.webp" alt="Adoption photo 2">
                    </div>


                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/adoption/adoption3.webp" alt="Adoption photo 3">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/adoption/adoption4.webp" alt="Adoption photo 4">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/adoption/adoption5.webp" alt="Adoption photo 5">
                    </div>


                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/adoption/adoption6.webp" alt="Adoption photo 6">
                    </div>


                    <div class="col-12 text-center">
                        <a href="../gallery" class="custom-hyperlink">Περισσότερα στο Gallery</a>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
footer($str);
?>