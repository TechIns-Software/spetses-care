<?php
include_once '../commonParts.php';
$str = '../';

$_SESSION['page'] = 12 ;

if ($_SESSION["language"] == 'greek') {
    $titlePage = "ΥΙΟΘΕΣΙΑ / ΑΝΑΔΟΧΗ";
    $adoptionTitle = "Υιοθέτησε!";
    $adoptionText = "“Ιστορίες αδέσποτων γατών των Σπετσών με αίσιο τέλος”";
    $adoptionText2 = "Υιοθέτησε υπεύθυνα!";
    $fosteringTitle = "Γίνε ανάδοχος!";
    $fosteringText = "Γίνε συμμέτοχος στην στείρωση / φιλοξενία / σίτιση / περίθαλψη ενός ή περισσότερων αδέσποτων του νησιού μας!";
    $formTitle = "Συμπλήρωσε τα στοιχεία σου και θα έρθουμε σε επαφή μαζί σου!";
    $formSelect = "Θέλω να...";
    $formSelectOption1 = "Θέλω να υιοθετήσω!";
    $formSelectOption2 = "Θέλω να γίνω ανάδοχος!";
    $formName = "Ονοματεπώνυμο";
    $formEmail = "Email";
    $formPhone = "Τηλέφωνο";
    $formSubmit = "Υποβολή";
    $formLoading = "Φόρτωση...";
    $morePhotos = "Περισσότερα στο Gallery";


}else{
    $titlePage = "ADOPTION / FOSTERING";
    $adoptionTitle = "Adopt!";
    $adoptionText = "“Stories of stray cats of Spetses with a happy ending”";
    $adoptionText2 = "Adopt responsibly!";
    $fosteringTitle = "Become a foster!";
    $fosteringText = "Become a participant in the sterilization / hosting / feeding /care of one or more of our island's strays";
    $formTitle = "Fill in your details, and we will get in touch with you!";
    $formSelect = "I want to...";
    $formSelectOption1 = "I want to adopt!";
    $formSelectOption2 = "I want to become a foster!";
    $formName = "Full Name";
    $formEmail = "Email";
    $formPhone = "Phone";
    $formSubmit = "Submit";
    $formLoading = "Loading...";
    $morePhotos = "More in Gallery";
}
$metaArray['title'] = $titlePage.'| scfa.gr';
$metaArray['description'] =  "Η υιοθεσία αλλάζει ζωές! Στην ομάδα μας, συνδέουμε ανθρώπους με νέα μέλη της οικογένειάς τους, δίνοντας σε ζώα ένα δεύτερο και πιο αγαπημένο σπίτι. Ανακαλύψτε τη χαρά της υιοθεσίας σήμερα!";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] =  "adoption";
navbar($titlePage,$str,$metaArray);


?>
    <main id="body-content">
        <section id="actionsHeader" page="adoption">
        </section>
        <div class="sectionDivider"></div>

        <section id="adoptionSection">
            <div class="container">
                <div class="row">
                    <div class="col-12 adoptionContainer  ">
                        <div class="adoptionBox leftBox">
                            <h4><?= $adoptionTitle?> </h4>
                            <div class="d-flex justify-content-end">
                                <img class="adoptionFoots" src="../assets/images/home/two-foots.png" alt="foot Icon">
                            </div>

                            <p><?= $adoptionText?>  </p>

                            <p><?= $adoptionText2?></p>

                        </div>

                        <div class="adoptionBox rightBox">
                            <h4> <?= $fosteringTitle?>  </h4>


                            <p><?= $fosteringText?>    </p>

                            <div class="d-flex justify-content-end">
                                <img class="adoptionFoots2" src="../assets/images/home/two-foots.png" alt="foot Icon">
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
                            <h4><?= $formTitle?> </h4>
                            <select class="custom-select" id="selectChoice">
                                <option value="0" class="disabled-option" selected disabled >  <?= $formSelect?></option>
                                <option value="1"><?= $formSelectOption1?></option>
                                <option value="2"><?= $formSelectOption2?></option>
                            </select>

                            <input type="text" id="fullName" placeholder="<?= $formName?>">
                            <input type="text" id="email" placeholder="<?= $formEmail?>">
                            <input type="text" id="phone" placeholder="<?= $formPhone?>">

                            <button onclick="adoptionForm(event)" class="submit-form-btn"><?= $formSubmit?> <div id="spinner-border" class="spinner-border d-none text-light" role="status">
                                    <span class="visually-hidden"><?= $formLoading?></span>
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
                        <a href="../gallery" class="custom-hyperlink"> <?= $morePhotos?> </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
footer($str);
?>