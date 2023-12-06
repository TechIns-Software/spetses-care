<?php
include_once '../commonParts.php';
$str = '../';
$titlePage = "Cats Hotel & Cats Restaurant";
$_SESSION['page'] = 11 ;
navbar($titlePage,$str);

?>
    <main id="body-content">
        <section id="actionsHeader" page="adoption">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="bgTitle">ΓΙΝΕ ΕΘΕΛΟΝΤΗΣ</div>
                    </div>
                </div>
            </div>
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
                            <select class="custom-select" id="custom-select">
                                <option class="disabled-option" selected disabled >Θέλω να...</option>
                                <option value="1">Θέλω να υιοθετήσω!</option>
                                <option value="2">Θέλω να γίνω ανάδοχος!</option>
                            </select>

                            <input type="text" id="fullName" placeholder="Ονοματεπώνυμο">
                            <input type="text" id="email" placeholder="Email">
                            <input type="text" id="phone" placeholder="Τηλέφωνο">

                            <button class="submit-form-btn">Υποβολή</button>
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
                        <img class="img-fluid" src="../assets/images/forum/forum1.png" alt="education1">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/forum/forum2.png" alt="education1">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/forum/forum3.png" alt="education1">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/forum/forum4.png" alt="education1">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/forum/forum5.png" alt="education1">
                    </div>


                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/forum/forum6.png" alt="education1">
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