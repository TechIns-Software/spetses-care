<?php
include_once '../commonParts.php';
$str = '../';
$titlePage = "Το Κτηνιατρείο Μας";
$_SESSION['page'] = 6 ;
navbar($titlePage,$str);

?>
    <main id="body-content">
        <section id="actionsHeader" page="clinic">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
            </div>
        </section>
        <div class="sectionDivider"></div>

        <section id="clinic">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <h3 class="clinicHeader">Το Κτηνιατρείο Μας</h3>
                        <p class="clinicPar"> Το κτηνιατρείο SCFA Α.Μ.Κ.Ε. στεγάζεται σε ένα χώρο 97 τ.μ. σε κεντρικό σημείο του νησιού
                            των Σπετσών.
                        </p>
                        <p class="clinicPar"> Στις εγκαταστάσεις μας παρέχουμε τις ακόλουθες υπηρεσίες:</p>
                        <div class="clinicList">
                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png"> </div>
                                <div><h4>Ακτινολογικό Τμήμα</h4></div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png"> </div>
                                <div><h4>Αιματολογικό Βιοχημικό Τμήμα</h4></div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png"> </div>
                                <div><h4>Υπερηχογραφικό Τμήμα</h4></div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png"> </div>
                                <div><h4>Χειρουργικό Τμήμα</h4></div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png"> </div>
                                <div><h4>Οδοντιατρικό Τμήμα</h4></div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png"> </div>
                                <div><h4>Νοσηλεία</h4></div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png"> </div>
                                <div><h4>Φάρμακα / Κτηνιατρικά Προϊόντα</h4></div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png"> </div>
                                <div><h4>Pet Shop/Τροφές/Καλλωπισμός</h4></div>
                            </div>



                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <img class="img-fluid " src="../assets/images/clinic/cat.png">
                    </div>

                    <div class="col-12 text-center">
                      <a class="goGallery" href="#educationPhotos">  <i class="fa-solid fa-chevron-down "></i></a>
                    </div>
                </div>
            </div>
        </section>

        <div class="sectionDivider"></div>
        <section id="educationPhotos">
            <div class="container">
                <div class="row my-2">
                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/clinic/clinic1.png" alt="Clinic Photos">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/clinic/clinic2.png" alt="Clinic Photos">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/clinic/clinic3.png" alt="Clinic Photos">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/clinic/clinic4.png" alt="Clinic Photos">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/clinic/clinic5.png" alt="Clinic Photos">
                    </div>


                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/clinic/clinic6.png" alt="Clinic Photos">
                    </div>


                </div>
            </div>
        </section>


    </main>
<?php
footer($str);
?>