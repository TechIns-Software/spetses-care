<?php
include_once '../commonParts.php';
$str = '../';
$titlePage = "Cats Hotel & Cats Restaurant";
$_SESSION['page'] = 7 ;
$metaArray['title'] = $titlePage.'| scfa.gr';
$metaArray['description'] =  "Στην προσπάθειά μας να βελτιώσουμε τις συνθήκες διαβίωσης των αδέσποτων γατών του νησιού μας, έχουμε δημιουργήσει σταθμούς σίτισης και ξεκούρασης, τα γνωστά πλέον Cats Restaurants and Hotels.";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] =  "hotel-restaurant";
navbar($titlePage,$str,$metaArray);

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
                    <div class="col-12 hotelContainer ">
                        <div class="sectionTitle">Cats Hotel & Cats Restaurant</div>
                        <div>
                            <p class="sectionText">
                                Στην προσπάθειά μας να βελτιώσουμε τις συνθήκες διαβίωσης των αδέσποτων γατών του νησιού
                                μας, έχουμε δημιουργήσει σταθμούς σίτισης και ξεκούρασης, τα γνωστά πλέον Cats
                                Restaurants and Hotels.
                            </p>
                            <p class="sectionText">Σκοπός μας είναι να καταφέρουμε να υπάρχουν σε όλο το νησί τέτοιοι
                                σταθμοί, ώστε να υπάρξει πλήρος εναρμόνηση των αδέσποτων στο περιβάλλον.
                            </p>
                        </div>

                        <div class="twoBoxesHotel ">
                            <div class="box1">
                                <img class="boxImg"  alt="hotel scfa photo" src="../assets/images/hotel/cat.webp">
                                <p>Έως τώρα έχουμε τοποθετήσει 13 τέτοιους σταθμούς και εξιγιασμένες αποικίες, οι οποίες συντηρούνται από εθελοντές.</p>
                            </div>


                            <div class="box1">
                                <img class="boxImg"  alt="potistres image" src="../assets/images/hotel/potistres.webp">
                                <p>Τοποθετούμε τους καλοκαιρινούς μήνες 18 ποτίστρες περιμετρικά αλλά και στην
                                    κορυφογραμμή του νησιού μας για τα ζώα του δάσους και των πουλιών.</p>
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

                <a href="#" class="galleryLink">Περισσότερα στο Gallery</a>

                <p class="disclaimer">Η πρωτοβουλία αυτή υλοποιείται με χορηγεία της δομής μας, αλλά και με πολύτιμες δωρεές ανθρώπων που μας στηρίζουν.</p>
            </section>
        </section>


    </main>
<?php
footer($str);
?>