<?php
include_once '../commonParts.php';
$str = '../';
$titlePage = "Εκπαιδευτικά Προγράμματα";
navbar($titlePage, $str);

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
                            <div class="educationContainer" onclick="closeAllCollapses()" data-bs-toggle="collapse" href="#collapseWalk"
                                 role="button"
                                 aria-expanded="false" aria-controls="collapseWalk">
                                <i class="fa-solid fa-children"></i>
                                <h4> Περίπατος </h4>
                                <i class="fa-solid fa-chevron-down" ></i>
                            </div>

                            <div class="educationContainer" onclick="closeAllCollapses()" data-bs-toggle="collapse" href="#collapsePaint"
                                 role="button"
                                 aria-expanded="false" aria-controls="collapsePaint">
                                <i class="fa-solid fa-palette"></i>
                                <h4> Διαγωνισμός<br> Ζωγραφικής </h4>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>


                            <div class="educationContainer" onclick="closeAllCollapses()" data-bs-toggle="collapse" href="#collapseRead"
                                 role="button"
                                 aria-expanded="false" aria-controls="collapseRead">
                                <i class="fa-solid fa-book-open"></i>
                                <h4> Δημιουργία<br> Επιμορφωτικού<br> Παραμυθιού </h4>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>


                            <div class="educationContainer" onclick="closeAllCollapses()"  data-bs-toggle="collapse" href="#collapseHospital"
                                 role="button"
                                 aria-expanded="false" aria-controls="collapseHospital">
                                <i class="fa-solid fa-house-medical-flag"></i>
                                <h4> Εκπαιδευτικές<br> Επισκέψεις </h4>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>

                        </div>


                        <div class="collapse educationCollapse" id="collapseWalk">
                            <div class="d-flex justify-content-start">
                                <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                            </div>
                            <p>
                                Πραγματοποιήσαμε περίπατο με παιδιά του Δημοτικού Σχολείου Σπετσών με σκοπό την σίτιση
                                αδέσποτων γατών.
                            </p>
                            <div class="d-flex justify-content-end">
                                <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                            </div>
                        </div>

                        <div class="collapse educationCollapse" id="collapsePaint">
                            <div class="d-flex justify-content-start">
                                <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                            </div>
                            <p>
                                Δοργανώσαμε διαγωνισμό ζωγραφικής με θέμα: Η ΑΔΕΣΠΟΤΗ ΖΩΗ ΜΕΣΑ ΑΠΟ ΤΑ ΜΑΤΙΑ ΤΩΝ ΠΑΙΔΙΩΝ για τους μαθητές Νηπιαγωγείων, Δημοτικού και Γυμνασίου Σπετσών με επιβράβευση όλων των συμμετεχόντων.
                            </p>
                            <div class="d-flex justify-content-end">
                                <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                            </div>
                        </div>

                        <div class="collapse educationCollapse" id="collapseRead">
                            <div class="d-flex justify-content-start">
                                <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                            </div>
                            <p>
                                Έχουμε δημιουργήσει το πρώτο μέρος της σειράς παιδικού επιμορφωτικού παραμυθιού, το γνωστό:
                                ΟΙ ΠΕΡΙΠΕΤΕΙΕΣ ΤΟΥ ΞΟΥΤ ΚΑΙ ΤΗΣ ΟΥΣΤ, το οποίο διαθέσαμε δωρεάν στα νηπιαγωγεία και το Δημοτικό Σχολείο Σπετσών.
                            </p>
                            <div class="d-flex justify-content-end">
                                <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                            </div>
                        </div>

                        <div class="collapse educationCollapse" id="collapseHospital">
                            <div class="d-flex justify-content-start">
                                <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                            </div>
                            <p>
                                Πραγματοποιούμε εκπαιδευτικές επισκέψεις στην δομή μας με σκοπό να γνωρίσουν από κοντά τα παιδιά όλες τις υπηρεσίες που υλοποιούμε.
                            </p>
                            <div class="d-flex justify-content-end">
                                <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
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
                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/education/visit1.jpg" alt="education1">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2">
                        <img class="img-fluid" src="../assets/images/education/visit2.jpg" alt="education1">
                    </div>


                    <div class="col-lg-4 col-md-12 my-2">
                        <img class="img-fluid" src="../assets/images/education/visit3.jpg" alt="education1">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2">
                        <img class="img-fluid" src="../assets/images/education/visit4.jpg" alt="education1">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2">
                        <img class="img-fluid" src="../assets/images/education/visit1.jpg" alt="education1">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2">
                        <img class="img-fluid" src="../assets/images/education/visit2.jpg" alt="education1">
                    </div>

                </div>
            </div>
        </section>
    </main>
<?php
footer($str);
?>