<?php
include_once '../commonParts.php';
$str = '../';

$_SESSION['page'] = 5 ;
if ($_SESSION["language"] == 'greek') {
    $titlePage = "Εκπαιδευτικά Προγράμματα";
    $walkTitle = "Περίπατος";
    $walkPar = "Πραγματοποιήσαμε περίπατο με παιδιά του Δημοτικού Σχολείου Σπετσών με σκοπό την σίτιση  αδέσποτων γατών.";
    $paintTitle = "Διαγωνισμός <br> Ζωγραφικής";
$paintPar = "Διοργανώσαμε διαγωνισμό ζωγραφικής με θέμα: Η ΑΔΕΣΠΟΤΗ ΖΩΗ ΜΕΣΑ ΑΠΟ ΤΑ ΜΑΤΙΑ ΤΩΝ ΠΑΙΔΙΩΝ για τους μαθητές Νηπιαγωγείων, Δημοτικού και Γυμνασίου Σπετσών με επιβράβευση όλων των συμμετεχόντων.";
    $readTitle = "Δημιουργία   Επιμορφωτικού <br> Παραμυθιού";
    $readPar = "Έχουμε δημιουργήσει το πρώτο μέρος της σειράς παιδικού επιμορφωτικού παραμυθιού, το γνωστό: ΟΙ ΠΕΡΙΠΕΤΕΙΕΣ ΤΟΥ ΞΟΥΤ ΚΑΙ ΤΗΣ ΟΥΣΤ, το οποίο διαθέσαμε δωρεάν στα νηπιαγωγεία και το Δημοτικό Σχολείο Σπετσών.";
    $hospitalTitle = "Εκπαιδευτικές <br>  Επισκέψεις";
    $hospitalPar = "Πραγματοποιούμε εκπαιδευτικές επισκέψεις στην δομή μας με σκοπό να γνωρίσουν από κοντά τα παιδιά όλες τις υπηρεσίες που υλοποιούμε.";
    $galleryLink = "Περισσότερα στο Gallery";

}else{
    $titlePage = "Educational Programs";
    $walkTitle = "Walk";
    $walkPar = "We organized a walk with children from the Spetses Elementary School aimed at feeding stray cats.";
    $paintTitle = "Painting <br> Contest";
    $paintPar = "We organized a painting competition with the theme: 'Stray Life Through the Eyes of Children' for students of Kindergartens, Elementary, and Middle Schools in Spetses, with rewards for all participants.";
    $readTitle = "Creation of <br> an Educational Fairytale";
    $readPar = "We have created the first part of the children's educational fairytale series, known as 'The Adventures of Xout and Oust', which we distributed for free to kindergartens and the Elementary School of Spetses.";
    $hospitalTitle = "Educational <br> Visits";
    $hospitalPar = "We conduct educational visits to our facility so that children can closely learn about all the services we implement.";
    $galleryLink = "More in Gallery";
}
$metaArray['title'] = $titlePage.'| scfa.gr';
$metaArray['description'] =  "Εκπαιδεύουμε για το μέλλον! Η ομάδα μας προσφέρει εκπαιδευτικά προγράμματα που ενώνουν τα παιδιά και τους ενήλικες με τον κόσμο των ζώων. Εμπλακείτε σε μια περιπέτεια μάθησης που δημιουργεί συναισθηματική σύνδεση με τη φύση.";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] =  "education";
navbar($titlePage,$str,$metaArray);

?>
    <main id="body-content">
        <section id="actionsHeader" page="education">

        </section>
        <div class="sectionDivider"></div>

        <section id="hotel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12  ">
                        <div class="sectionTitle"><?= $titlePage?></div>
                        <div class="fluid-layout ">
                            <div class="educationContainer" onclick="closeAllCollapses()" data-bs-toggle="collapse" href="#collapseWalk"
                                 role="button"
                                 aria-expanded="false" aria-controls="collapseWalk">
                                <i class="fa-solid fa-children"></i>
                                <h4> <?= $walkTitle?> </h4>
                                <i class="fa-solid fa-chevron-down" ></i>
                            </div>
                            <div class="mobileCollapse">
                            <div class="collapse  " id="collapseWalk">
                                <div class="d-flex justify-content-start">
                                    <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                                </div>
                                <p>
                                    <?= $walkPar?>
                                </p>
                            </div>
                            </div>

                            <div class="educationContainer" onclick="closeAllCollapses()" data-bs-toggle="collapse" href="#collapsePaint"
                                 role="button"
                                 aria-expanded="false" aria-controls="collapsePaint">
                                <i class="fa-solid fa-palette"></i>
                                <h4>   <?= $paintTitle?></h4>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <div class="mobileCollapse">
                            <div class="collapse  " id="collapsePaint">
                                <div class="d-flex justify-content-start">
                                    <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                                </div>
                                <p>
                                    <?= $paintPar?>
                                </p>
                                <div class="d-flex justify-content-end">
                                    <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                                </div>
                            </div>
                            </div>
                            <div class="educationContainer" onclick="closeAllCollapses()" data-bs-toggle="collapse" href="#collapseRead"
                                 role="button"
                                 aria-expanded="false" aria-controls="collapseRead">
                                <i class="fa-solid fa-book-open"></i>
                                <h4>  <?= $readTitle?> </h4>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <div class="mobileCollapse">
                            <div class="collapse   " id="collapseRead">
                                <div class="d-flex justify-content-start">
                                    <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                                </div>
                                <p>
                                    <?= $readPar?>
                                </p>
                                <div class="d-flex justify-content-end">
                                    <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                                </div>
                            </div>
                            </div>
                            <div class="educationContainer" onclick="closeAllCollapses()"  data-bs-toggle="collapse" href="#collapseHospital"
                                 role="button"
                                 aria-expanded="false" aria-controls="collapseHospital">
                                <i class="fa-solid fa-house-medical-flag"></i>
                                <h4>     <?= $hospitalTitle?> </h4>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <div class="mobileCollapse">
                            <div class="collapse  " id="collapseHospital">
                                <div class="d-flex justify-content-start">
                                    <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                                </div>
                                <p>
                                    <?= $hospitalPar?>
                                </p>
                                <div class="d-flex justify-content-end">
                                    <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="collapse educationCollapse " id="collapseWalk">
                            <div class="d-flex justify-content-start">
                                <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                            </div>
                            <p>
                                <?= $walkPar?>
                            </p>

                        </div>

                        <div class="collapse educationCollapse" id="collapsePaint">
                            <div class="d-flex justify-content-start">
                                <img class="two-foots-education" src="../assets/images/home/two-foots.png" alt="education1">
                            </div>
                            <p>
                                <?= $paintPar?>
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
                                <?= $readPar?>
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
                                <?= $hospitalPar?>
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
                        <img class="img-fluid" src="../assets/images/gallery/education3.png" alt="Image from education Image">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/gallery/education1.png" alt="Image from education Image 2">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/education/visit3.webp" alt="Image from education Image 3">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/education/visit4.webp" alt="Image from education Image 4">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/education/visit5.webp" alt="Image from education Image 5">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/volunteer/catlove.png" alt="Image from education Image 6">
                    </div>


                    <div class="col-12 text-center">
                        <a href="../gallery" class="custom-hyperlink">  <?= $galleryLink?> </a>
                    </div>

                </div>
            </div>
        </section>
    </main>
<?php
footer($str);
?>