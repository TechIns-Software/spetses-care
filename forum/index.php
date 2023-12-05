<?php
include_once '../commonParts.php';
$str = '../';
$titlePage = "Cats Hotel & Cats Restaurant";
$_SESSION['page'] = 4 ;
navbar($titlePage,$str);

?>
    <main id="body-content">
        <section id="actionsHeader" page="forum">
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
                        <div class="sectionTitle">SCFA FORUM</div>
                        <div>
                            <p class="sectionText">
                                Πραγματοποιήσαμε στις 17/09/2023 με μεγάλη επιτυχία το 1ο Forum του κτηνιατρείου SCFA Α.Μ.Κ.Ε. στην Καποδιστριακή Στήγη Σπετσών με θέμα:
                            </p>
                            <p class="sectionText">
                                Η ΕΥΖΩΙΑ ΤΩΝ ΖΩΩΝ ΚΑΙ Η ΑΛΛΗΛΕΠΙΔΡΑΣΗ ΤΟΥΣ ΜΕ ΤΟΥΣ ΑΝΘΡΩΠΟΥΣ
                            </p>
                            <p class="sectionText">Η διεξαγωγή των ετησίων συνεδριών μας ευελπιστούμε να γίνει θεσμός στα πολιτιστικά δρόμενα του τόπου μας.
                            </p>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <div class="sectionDivider"></div>
        <div class="container-fluid my-3">


            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/XCQm2-Hvm0g?si=qQIsvgK9SH0wwB-v" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen="true"></iframe>
            </div>
        </div>

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