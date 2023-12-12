<?php
include_once '../commonParts.php';
$str = '../';
$titlePage = "Γίνε Εθελοντής";
$_SESSION['page'] = 11 ;
$metaArray['title'] = $titlePage.'| scfa.gr';
$metaArray['description'] =  "Συμμετέχετε στην αγκαλιά της εθελοντικής αγάπης για τα ζώα! Στην ομάδα μας, κάνουμε τη διαφορά με τη βοήθεια εθελοντών που αφιερώνουν τον χρόνο τους για την ευημερία και τη φροντίδα των αδέσποτων φίλων μας. Ενωθείτε μαζί μας για μια κοινότητα που φροντίζει!";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] =  "volunteer";
navbar($titlePage,$str,$metaArray);

?>
    <main id="body-content">
        <section id="actionsHeader" page="volunteer">

        </section>
        <div class="sectionDivider"></div>



        <section id="volunteerSectionForm">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h3 class="disclaimerText">Μπορείς εθελοντικά να συμμετέχεις στην περισυλλογή για στείρωση αδέσποτων γατών, βοηθώντας μας στην ολοκλήρωση του έργου μας!</h3>
                    </div>
                    <div class="col-lg-6 col-md-12   ">
                        <div class="volunteerForm">
                            <h4>Θέλω να γίνω εθελοντής!</h4>
                            <p>Συμπλήρωσε τα στοιχεία σου και θα έρθουμε σε επαφή μαζί σου!</p>
                            <input type="text" id="fullName" placeholder="Ονοματεπώνυμο">
                            <input type="text" id="email" placeholder="Email">
                            <input type="text" id="phone" placeholder="Τηλέφωνο">

                            <button onclick="volunteerForm(event)" class="submit-form-btn">Υποβολή <div id="spinner-border" class="spinner-border d-none text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
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
                        <img class="img-fluid" src="../assets/images/volunteer/volunteer1.png" alt="Image for volunteer 1">
                    </div>
                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/volunteer/volunteer2.png" alt="Image for volunteer 2">
                    </div>
                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/volunteer/volunteer3.png" alt="Image for volunteer 3">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/volunteer/volunteer4.png" alt="Image for volunteer 4">
                    </div>
                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/volunteer/volunteer5.png" alt="Image for volunteer 5">
                    </div>
                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/volunteer/volunteer6.png" alt="Image for volunteer 6">
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