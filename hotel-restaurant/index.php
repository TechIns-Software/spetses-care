<?php
include_once '../commonParts.php';
$str = '../';

$_SESSION['page'] = 7 ;
if ($_SESSION["language"] == 'greek') {
    $titlePage = "Cats Hotel & Cats Restaurant";
    $hotelPar1 = "   Στην προσπάθειά μας να βελτιώσουμε τις συνθήκες διαβίωσης των αδέσποτων γατών του νησιού
                                μας, έχουμε δημιουργήσει σταθμούς σίτισης και ξεκούρασης, τα γνωστά πλέον Cats
                                Restaurants and Hotels.";
    $hotelPar2 = "Σκοπός μας είναι να καταφέρουμε να υπάρχουν σε όλο το νησί τέτοιοι σταθμοί, ώστε να υπάρξει πλήρος εναρμόνηση των αδέσποτων στο περιβάλλον.";
    $hotelPar3 = "Έως τώρα έχουμε τοποθετήσει 13 τέτοιους σταθμούς και εξιγιασμένες αποικίες, οι οποίες συντηρούνται από εθελοντές.";
    $hotelPar4 = "Τοποθετούμε τους καλοκαιρινούς μήνες 18 ποτίστρες περιμετρικά αλλά και στην
                                    κορυφογραμμή του νησιού μας για τα ζώα του δάσους και των πουλιών.";
    $galleryLink = "Περισσότερα στο Gallery";
    $disclaimer = "Η πρωτοβουλία αυτή υλοποιείται με χορηγία της δομής μας, αλλά και με πολύτιμες δωρεές ανθρώπων που μας στηρίζουν.";
}else{

    $titlePage = "Cats Hotel & Cats Restaurant";
    $hotelPar1 = "In an effort to improve the living conditions of stray cats on their island, feeding and resting stations, known as Cats Restaurants and Hotels, have been established. ";
    $hotelPar2 = "The goal is to have such stations throughout the island to fully harmonize stray animals with their environment.";
    $hotelPar3 = "So far, 13 such feeding and resting stations, along with managed colonies, have been set up, maintained by volunteers.";
    $hotelPar4 = "During the summer months, 18 water dispensers are placed around the perimeter and along the ridge line of the island for forest animals and birds.";
    $galleryLink = "More in Gallery";
    $disclaimer = "This initiative is carried out with the sponsorship of their organization and also through the valuable donations of people who support them.";
}
$metaArray['title'] = $titlePage.'| scfa.gr';
$metaArray['description'] =  "Στην προσπάθειά μας να βελτιώσουμε τις συνθήκες διαβίωσης των αδέσποτων γατών του νησιού μας, έχουμε δημιουργήσει σταθμούς σίτισης και ξεκούρασης, τα γνωστά πλέον Cats Restaurants and Hotels.";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] =  "hotel-restaurant";
navbar($titlePage,$str,$metaArray);

?>
    <main id="body-content">
        <section id="actionsHeader" page="hotel">
        </section>
        <div class="sectionDivider"></div>

        <section id="hotel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 hotelContainer ">
                        <div class="sectionTitle"> <?= $titlePage?></div>
                        <div>
                            <p class="sectionText">
                                <?= $hotelPar1?>
                            </p>
                            <p class="sectionText"><?= $hotelPar2?>
                            </p>
                        </div>

                        <div class="twoBoxesHotel ">
                            <div class="box1">
                                <img class="boxImg"  alt="hotel scfa photo" src="../assets/images/hotel/cat.webp">
                                <p><?= $hotelPar3?></p>
                            </div>


                            <div class="box1">
                                <img class="boxImg"  alt="potistres image" src="../assets/images/hotel/potistres.webp">
                                <p><?= $hotelPar4?></p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <section class="container-fluid  " id="custom-carousel  ">
                <div class="owl-carousel owl-theme owl-loaded owl-drag custom-carousel" >
                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <img class="pic-1" alt="hotel scfa image" src="../assets/images/hotel/hotel.webp">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <img class="pic-1" alt="cat in hotel scfa image" src="../assets/images/hotel/cat2.webp">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <img class="pic-1" alt="cat in hotel scfa image second" src="../assets/images/hotel/hotel-scfa2.webp">
                            </div>
                        </div>
                    </div>

                </div>

                <a href="#" class="galleryLink"><?= $galleryLink?></a>

                <p class="disclaimer"> <?= $disclaimer?></p>
            </section>
        </section>


    </main>
<?php
footer($str);
?>