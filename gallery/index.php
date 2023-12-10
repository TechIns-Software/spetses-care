<?php
include_once '../commonParts.php';
$str = '../';
$titlePage = "Gallery";
$_SESSION['page'] = 3 ;
$metaArray['title'] = $titlePage.'| scfa.gr';
$metaArray['description'] =  "Η υιοθεσία αλλάζει ζωές! Στην ομάδα μας, συνδέουμε ανθρώπους με νέα μέλη της οικογένειάς τους, δίνοντας σε ζώα ένα δεύτερο και πιο αγαπημένο σπίτι. Ανακαλύψτε τη χαρά της υιοθεσίας σήμερα!";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] =  "gallery";
navbar($titlePage,$str,$metaArray);


?>
    <main id="body-content">
        <section id="actionsHeader" page="adoption">
            <div class="container-fluid">
                <div class="row">


                </div>
            </div>
        </section>
        <div class="sectionDivider"></div>




        <section id="educationPhotos">
            <div class="container">
                <div class="row my-2">
                    <div class="col-12 my-2 ">
                        <a href="../education" class="galleryTitleSection">
                        <div><img alt="foot for title" src="../assets/images/gallery/foot.png"> </div>
                            <div> <h3> Εκπαιδευτικά Προγράμματα </h3></div>
                        </a>
                    </div>
                    <?php
                    for ($i= 1; $i<11;$i++){
                        ?>
                        <div class="col-lg-3 col-md-12 my-2 ">
                            <a href="../assets/images/gallery/education<?=$i?>.png" class="image-link" data-toggle="lightbox"  >
                                <img src="../assets/images/gallery/education<?=$i?>.png" alt="Φωτογραφία απο Εκπαιδευτικά προγράμματα <?=$i?> ">
                                <div class="portfolio-overlay">
                                </div>
                            </a>
                        </div>

                            <?php
                    }
                    ?>

                </div>

                <div class="row my-2">
                    <div class="col-12 my-2 ">
                        <a href="../hotel-restaurant" class="galleryTitleSection">
                            <div><img alt="foot for title" src="../assets/images/gallery/foot.png"> </div>
                            <div> <h3> Cats Hotel and Restaurant</h3></div>
                        </a>
                    </div>
                    <?php
                    for ($i= 1; $i<9;$i++){
                        ?>
                        <div class="col-lg-3 col-md-12 my-2 ">
                            <a href="../assets/images/gallery/hotel<?=$i?>.png" class="image-link" data-toggle="lightbox"  >
                                <img src="../assets/images/gallery/hotel<?=$i?>.png" alt="Φωτογραφία απο Cats Hotel and Restaurant<?=$i?> ">
                                <div class="portfolio-overlay">
                                </div>
                            </a>
                        </div>

                        <?php
                    }
                    ?>

                </div>

                <div class="row my-2">
                    <div class="col-12 my-2 ">
                        <a href="../clinic" class="galleryTitleSection">
                            <div><img alt="foot for title" src="../assets/images/gallery/foot.png"> </div>
                            <div> <h3> Το κτηνιατρείο μας</h3></div>
                        </a>
                    </div>

                    <?php
                    for ($i= 1; $i<13;$i++){
                        ?>
                        <div class="col-lg-3 col-md-12 my-2 ">
                            <a href="../assets/images/gallery/clinic<?=$i?>.png" class="image-link" data-toggle="lightbox"  >
                                <img src="../assets/images/gallery/clinic<?=$i?>.png" alt="Φωτογραφία απο το κτηνιατρείο μας <?=$i?> ">
                                <div class="portfolio-overlay">
                                </div>
                            </a>
                        </div>

                        <?php
                    }
                    ?>

                </div>
            </div>
        </section>

    </main>
<?php
footer($str);
?>