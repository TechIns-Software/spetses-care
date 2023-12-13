<?php
include_once '../commonParts.php';
$str = '../';

$_SESSION['page'] = 11;
if ($_SESSION["language"] == 'greek') {
    $titlePage = "Γίνε Εθελοντής";
    $volunteerText = "Μπορείς εθελοντικά να συμμετέχεις στην περισυλλογή για στείρωση αδέσποτων γατών, βοηθώντας μας στην ολοκλήρωση του έργου μας!";
    $volunteerFormText = "Θέλω να γίνω εθελοντής!";
    $volunteerFormText2 = "Συμπλήρωσε τα στοιχεία σου και θα έρθουμε σε επαφή μαζί σου!";
    $volunteerFormText3 = "Ονοματεπώνυμο";
    $volunteerFormText4 = "Email";
    $volunteerFormText5 = "Τηλέφωνο";
    $volunteerFormText6 = "Υποβολή";
    $volunteerFormText7 = "Περισσότερα στο Gallery";
} else {
    $titlePage = "Become a Volunteer";
    $volunteerText = "You can volunteer to participate in the collection for the sterilization of stray cats, helping us in completing our project!";
    $volunteerFormText = "I want to become a volunteer!";
    $volunteerFormText2 = "Please fill in your details, and we will get in touch with you!";
    $volunteerFormText3 = "Full Name";
    $volunteerFormText4 = "Email";
    $volunteerFormText5 = "Phone";
    $volunteerFormText6 = "Submit";
    $volunteerFormText7 = "More in Gallery";
}
$metaArray['title'] = $titlePage . '| scfa.gr';
$metaArray['description'] = "Συμμετέχετε στην αγκαλιά της εθελοντικής αγάπης για τα ζώα! Στην ομάδα μας, κάνουμε τη διαφορά με τη βοήθεια εθελοντών που αφιερώνουν τον χρόνο τους για την ευημερία και τη φροντίδα των αδέσποτων φίλων μας. Ενωθείτε μαζί μας για μια κοινότητα που φροντίζει!";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] = "volunteer";
navbar($titlePage, $str, $metaArray);

?>
    <main id="body-content">
        <section id="actionsHeader" page="volunteer">

        </section>
        <div class="sectionDivider"></div>


        <section id="volunteerSectionForm">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h3 class="disclaimerText"> <?= $volunteerText?></h3>
                    </div>
                    <div class="col-lg-6 col-md-12   ">
                        <div class="volunteerForm">
                            <h4><?= $volunteerFormText?> </h4>
                            <p> <?= $volunteerFormText2?> </p>
                            <input type="text" id="fullName" placeholder="<?= $volunteerFormText3?> ">
                            <input type="text" id="email" placeholder="<?= $volunteerFormText4?> ">
                            <input type="text" id="phone" placeholder="<?= $volunteerFormText5?> ">

                            <button onclick="volunteerForm(event)" class="submit-form-btn"><?= $volunteerFormText6?>
                                <div id="spinner-border" class="spinner-border d-none text-light" role="status">
                                    <span class="visually-hidden"></span>
                                </div>
                            </button>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12  ">
                        <img src="../assets/images/volunteer/catlove.png" class="img-fluid">
                    </div>

                </div>

            </div>
        </section>

        <section id="educationPhotos">
            <div class="container">
                <div class="row my-2">
                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/volunteer/volunteer1.png"
                             alt="Image for volunteer 1">
                    </div>
                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/volunteer/volunteer2.png"
                             alt="Image for volunteer 2">
                    </div>
                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/volunteer/volunteer3.png"
                             alt="Image for volunteer 3">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/volunteer/volunteer4.png"
                             alt="Image for volunteer 4">
                    </div>
                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/volunteer/volunteer5.png"
                             alt="Image for volunteer 5">
                    </div>
                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/volunteer/volunteer6.png"
                             alt="Image for volunteer 6">
                    </div>


                    <div class="col-12 text-center">
                        <a href="../gallery" class="custom-hyperlink"> <?= $volunteerFormText7?></a>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
footer($str);
?>