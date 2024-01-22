<?php
include_once '../commonParts.php';
$str = '../';

$_SESSION['page'] = 6 ;
if ($_SESSION["language"] == 'greek') {
    $titlePage = "Το Κτηνιατρείο Μας";
    $clinicTitle = "Το Κτηνιατρείο Μας";
    $clinicText = "Το κτηνιατρείο SCFA Α.Μ.Κ.Ε. στεγάζεται σε ένα χώρο 97 τ.μ. σε κεντρικό σημείο του νησιού των Σπετσών.";
    $clinicText2 = "Στις εγκαταστάσεις μας παρέχουμε τις ακόλουθες υπηρεσίες:";
    $clinicList1 = "Ακτινολογικό Τμήμα";
    $clinicList2 = "Αιματολογικό Βιοχημικό Τμήμα";
    $clinicList3 = "Υπερηχογραφικό Τμήμα";
    $clinicList4 = "Χειρουργικό Τμήμα";
    $clinicList5 = "Οδοντιατρικό Τμήμα";
    $clinicList6 = "Νοσηλεία";
    $clinicList7 = "Φάρμακα / Κτηνιατρικά Προϊόντα";
    $clinicList8 = "Pet Shop / Τροφές / Καλλωπισμός";

    $morePhotos = "Περισσότερα στο Gallery";
    $openHoursTitle = "Χειμερινό Ωράριο Λειτουργίας: ";
    $openHours1 = "ΔΕΥΤ-ΤΕΤ-ΠΑΡ:";
    $openHours1Value = " 09:00-14:00 και 17:00-20:00";
    $openHours2 = "ΤΡΙΤΗ-ΠΕΜ:";
    $openHours2Value = " 09:00-17:00";
    $openHoursTitle2 = "Θερινό Ωράριο Λειτουργίας: ";
    $openHours3 = "ΔΕΥΤΕΡΑ ΕΩΣ ΠΑΡΑΣΚΕΥΗ:";
    $openHours3Value = "09:00-14:00 και 18:00-21:00";

}else{
    $titlePage = "Our Clinic";
    $clinicTitle = "Our Clinic";
    $clinicText = "The SCFA Veterinary Clinic N.P.O. is housed in a 97 sq.m. space at a central location in Spetses. The facility offers various services, including:";
    $clinicText2 = "In our facilities we provide the following services:";
    $clinicList1 = "Radiology Department";
    $clinicList2 = "Hematological Biochemical Department";
    $clinicList3 = "Ultrasound Department";
    $clinicList4 = "Surgical Department";
    $clinicList5 = "Dental Department";
    $clinicList6 = "Hospitalization";
    $clinicList7 = "Medicines / Veterinary Products";
    $clinicList8 = "Pet Shop (including pet food and grooming)";

    $morePhotos = "More in Gallery";
    $openHoursTitle = "Winter Hours: ";
    $openHours1 = "MON-WED-FRI:";
    $openHours1Value = " 09:00-14:00 and 17:00-20:00";
    $openHours2 = "TUE-THU:";
    $openHours2Value = " 09:00-17:00";
    $openHoursTitle2 = "Summer  Hours: ";
    $openHours3 = "MONDAY TO FRIDAY:";
    $openHours3Value = "09:00-14:00 and 18:00-21:00";


}
$metaArray['title'] = $titlePage.'| scfa.gr';
$metaArray['description'] =  "Στο κτηνιατρείο μας, κατανοούμε τη σημασία της σωστής φροντίδας για τα ζώα. Με εξειδικευμένους κτηνιάτρους και φιλικό προσωπικό, παρέχουμε ολοκληρωμένες λύσεις για την υγεία και την ευεξία των κατοικίδιων σας.";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] =  "clinic";
navbar($titlePage,$str,$metaArray);

?>
    <main id="body-content">
        <section id="actionsHeader" page="clinic">

        </section>
        <div class="sectionDivider"></div>

        <section id="clinic">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <h3 class="clinicHeader"><?= $clinicTitle ?></h3>
                        <p class="clinicPar"><?= $clinicText ?> </p>
                        <p class="clinicPar"> <?= $clinicText2 ?></p>
                        <div class="clinicList">
                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png" alt="footprint Icon List"> </div>
                                <div><h4><?= $clinicList1 ?></h4></div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png" alt="footprint Icon List"> </div>
                                <div><h4><?= $clinicList2 ?></h4></div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png" alt="footprint Icon List"> </div>
                                <div><h4><?= $clinicList3 ?></h4></div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png" alt="footprint Icon List"> </div>
                                <div><h4> <?= $clinicList4 ?></h4></div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png" alt="footprint Icon List"> </div>
                                <div><h4> <?= $clinicList5 ?></h4></div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png" alt="footprint Icon List"> </div>
                                <div><h4><?= $clinicList6 ?></h4></div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png" alt="footprint Icon List"> </div>
                                <div><h4> <?= $clinicList7 ?></h4></div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center clinicDot ">
                                <div><img src="../assets/images/clinic/blue-foot.png" alt="footprint Icon List"> </div>
                                <div><h4><?= $clinicList8 ?></h4></div>
                            </div>



                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <img class="img-fluid " src="../assets/images/clinic/cat.png" alt="cute cat">
                    </div>

                    <div class="col-12 text-center">
                      <a class="goGallery" href="#educationPhotos">  <i class="fa-solid fa-chevron-down "></i></a>
                    </div>
                </div>
            </div>
            <div class="container ">

                <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/f8Yjd5psvSU?si=jRHLyEj5d3CjzJMW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <div class="sectionDivider"></div>


        <section id="educationPhotos">
            <div class="container">
                <div class="row my-2">
                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/clinic/clinic1.webp" alt="Clinic Photos 1">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/clinic/clinic2.webp" alt="Clinic Photos 2">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/clinic/clinic3.webp" alt="Clinic Photos 3">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/clinic/clinic4.webp" alt="Clinic Photos 4">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/clinic/clinic5.webp" alt="Clinic Photos 5">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/clinic/clinic6.webp" alt="Clinic Photos 6">
                    </div>

                    <div class="col-12 text-center">
                        <a href="../gallery" class="custom-hyperlink"> <?= $morePhotos ?></a>
                    </div>

                    <div class="col-lg-6 col-md-12 my-4  ">
                        <h4 class="openHoursTitle"><?= $openHoursTitle ?> </h4>
                        <p class="openHours"><?= $openHours1 ?> <span> <?= $openHours1Value ?></span></p>
                        <p class="openHours">  <?= $openHours2 ?><span>  <?= $openHours2Value ?> </span></p>
                    </div>

                    <div class="col-lg-6 col-md-12 my-4 ">
                        <h4 class="openHoursTitle"><?= $openHoursTitle2 ?> </h4>
                        <p class="openHours"><?= $openHours3 ?> <span> <?= $openHours3Value ?> </span>
                        </p>
                    </div>


                </div>
            </div>
        </section>


    </main>
<?php
footer($str);
?>