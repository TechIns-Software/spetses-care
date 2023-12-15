<?php
include_once '../commonParts.php';
$str = '../';

$_SESSION['page'] = 4 ;
if ($_SESSION["language"] == 'greek') {
    $titlePage = "SCFA FORUM";
    $forumEvent = " Πραγματοποιήσαμε στις 17/09/2023 με μεγάλη επιτυχία το 1ο Forum του κτηνιατρείου SCFA Α.Μ.Κ.Ε. στην Καποδιστριακή Στήγη Σπετσών με θέμα:";
    $forumTitle = "Η ΕΥΖΩΙΑ ΤΩΝ ΖΩΩΝ ΚΑΙ Η ΑΛΛΗΛΕΠΙΔΡΑΣΗ ΤΟΥΣ ΜΕ ΤΟΥΣ ΑΝΘΡΩΠΟΥΣ";
    $forumText = "Η διεξαγωγή των ετησίων συνεδριών μας ευελπιστούμε να γίνει θεσμός στα πολιτιστικά δρόμενα του τόπου μας.";
    $forumTalk = "Οι ομιλητές του πρώτου SCFA FORUM";
    $galleryLink = "Περισσότερα στο Gallery";
}else{
    $titlePage = "SCFA FORUM";
    $forumEvent = "On 17/09/2023, we successfully held the 1st Forum of the SCFA Veterinary Clinic N.P.O. at the Kapodistrian Estate in Spetses, with the theme: ";
    $forumTitle = "'The Well-being of Animals and Their Interaction with Humans'";
    $forumText = "We hope the conduct of our annual sessions will become an institution in our region's cultural events.";
    $forumTalk = "The speakers of the first SCFA FORUM";
    $galleryLink = "More in Gallery";

}
$metaArray['title'] = $titlePage.'| scfa.gr';
$metaArray['description'] =  "Ανακαλύψτε την κορυφαία συνάντηση της κτηνιατρικής στην Καποδιστριακή Στήγη Σπετσών! Το 1ο Φόρουμ του κτηνιατρείου SCFA Α.Μ.Κ.Ε. φέρνει επιστήμονες, ειδικούς και επαγγελματίες για συζητήσεις και ανταλλαγή ιδεών. Ενημερωθείτε και συμμετάσχετε!";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] =  "forum";
navbar($titlePage,$str,$metaArray);

?>
    <main id="body-content">
        <section id="actionsHeader" page="forum">

        </section>
        <div class="sectionDivider"></div>

        <section id="hotel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 hotelContainer ">
                        <h2 class="sectionTitle"> <?= $titlePage ?></h2>
                        <div>
                            <p class="sectionText">
                                <?= $forumEvent ?>
                            </p>
                            <p class="sectionText forumTitle">
                                <?= $forumTitle ?>
                            </p>
                            <p class="sectionText">  <?= $forumText ?>
                            </p>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <div class="sectionDivider"></div>
        <div class="container my-3">

            <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/f8Yjd5psvSU?si=jRHLyEj5d3CjzJMW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <section id="forumTalk">
            <div class="container">
                <div class="row my-2">
                    <div class="text-center">
                        <h2 class="sectionTitle"><?= $forumTalk ?></h2>
                    </div>




                    <div class="col-12">
                        <img class="img-fluid" src="../assets/images/forum/forumTalks.png">
                    </div>
                </div>
            </div>
        </section>

        <section id="educationPhotos">
            <div class="container">
                <div class="row my-2">
                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/forum/poster.webp" alt="Image from forum 1">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/forum/forum2.webp" alt="Image from forum 2">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/forum/forum3.webp" alt="Image from forum 3">
                    </div>


                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/forum/forum4.webp" alt="Image from forum 4">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/forum/forum5.webp" alt="Image from forum 5">
                    </div>

                    <div class="col-lg-4 col-md-12 my-2 ">
                        <img class="img-fluid" src="../assets/images/forum/forum6.webp" alt="Image from forum 6">
                    </div>


                    <div class="col-12 text-center">
                        <a href="../gallery" class="custom-hyperlink"> <?= $galleryLink ?></a>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
footer($str);
?>