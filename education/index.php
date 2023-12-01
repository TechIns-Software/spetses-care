<?php
include_once '../commonParts.php';
$str = '../';
$titlePage = "Εκπαιδευτικά Προγράμματα";
navbar($titlePage,$str);

?>
    <main id="body-content">
        <section id="actionsHeader" page="hotel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
            </div>
        </section>
        <div class="sectionDivider"></div>

        <section id="hotel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12  ">
                        <div class="sectionTitle">Εκπαιδευτικά Προγράμματα</div>
                        <div class="fluid-layout ">
                            <div class="educationContainer">
                                <i class="fa-solid fa-children"></i>
                                <h4> Περίπατος </h4>
                                <i class="fa-solid fa-chevron-down" data-bs-toggle="collapse" href="#collapseWalk" role="button"
                                   aria-expanded="false" aria-controls="collapseWalk"></i>
                            </div>

                            <div class="educationContainer">
                                <i class="fa-solid fa-palette"></i>
                                <h4> Διαγωνισμός<br> Ζωγραφικής </h4>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>


                            <div class="educationContainer">
                             <i class="fa-solid fa-book-open"></i>
                                <h4> Δημιουργία<br> Επιμορφωτικού<br> Παραμυθιού </h4>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>


                            <div class="educationContainer">
                                <i class="fa-solid fa-house-medical-flag"></i>
                                <h4> Εκπαιδευτικές<br> Επισκέψεις </h4>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </section>

        <div class="sectionDivider"></div>

        <section id="educationPhotos">
            <div class="container">
                <div class="row my-2">
                    <div class="col-lg-4 col-md-12 my-2">
                        <img class="img-fluid" src="../assets/images/gdr_img_1.jpg" alt="education1">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2">
                        <img class="img-fluid" src="../assets/images/gdr_img_1.jpg" alt="education1">
                    </div>


                    <div class="col-lg-4 col-md-12 my-2">
                        <img class="img-fluid" src="../assets/images/gdr_img_1.jpg" alt="education1">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2">
                        <img class="img-fluid" src="../assets/images/gdr_img_2.jpg" alt="education1">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2">
                        <img class="img-fluid" src="../assets/images/gdr_img_2.jpg" alt="education1">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2">
                        <img class="img-fluid" src="../assets/images/gdr_img_2.jpg" alt="education1">
                    </div>




                </div>
            </div>
        </section>
    </main>
<?php
footer($str);
?>