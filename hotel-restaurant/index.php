<?php
include_once '../commonParts.php';
$str = '../';
$titlePage = "Cats Hotel & Cats Restaurant";
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
                                <img alt="hotel scfa" src="../assets/images/hotel/cat.jpg">
                                <p>Έως τώρα έχουμε τοποθετήσει 13 τέτοιους σταθμούς και εξιγιασμένες αποικίες, οι
                                    οποίες
                                    συντηρούνται από εθελοντές.</p>
                            </div>


                            <div class="box1">
                                <img alt="hotel scfa bird" src="../assets/images/hotel/bird.jpg">
                                <p>Τοποθετούμε τους καλοκαιρινούς μήνες 18 ποτίστρες περιμετρικά αλλά και στην
                                    κορυφογραμμή του νησιού μας για τα ζώα του δάσους και των πουλιών.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <section class="container-fluid  " id="custom-carousel  ">
                <div class="owl-carousel owl-theme owl-loaded owl-drag" id="home-shop-slider">
                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <img class="pic-1" src="../assets/images/home/hero-1.png">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <img class="pic-1" src="../assets/images/about.JPG">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <img class="pic-1" src="../assets/images/home/slider1.png">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <img class="pic-1" src="../assets/images/home/slider2.png">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <img class="pic-1" src="../assets/images/home/hero-1.png">
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