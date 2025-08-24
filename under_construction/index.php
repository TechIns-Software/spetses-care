<?php
include_once '../commonParts.php';
$str = '../';

$_SESSION['page'] = 99; // under_construction

if (!isset($_SESSION["language"])) {
    $_SESSION["language"] = 'greek'; // fallback
}

if ($_SESSION["language"] == 'greek') {
    $titlePage   = "Υπό Κατασκευή";
    $heroTitle   = "Η σελίδα ετοιμάζεται";
    $heroText    = "Δουλεύουμε με αγάπη και φροντίδα για να ετοιμάσουμε έναν νέο, καλύτερο ιστότοπο.
Θέλουμε η εμπειρία σου εδώ να είναι όσο πιο όμορφη και ξεκάθαρη γίνεται.";
    $heroText2   = "Ευχαριστούμε για την υπομονή και τη στήριξή σου.
Σε λίγο καιρό θα επιστρέψουμε με νέο περιεχόμενο, περισσότερες δυνατότητες και πάντα με στόχο τη φροντίδα των ζώων των Σπετσών.";
    $btnContact  = "Επικοινωνία";
    $infoTitle   = "Τι συμβαίνει";
    $infoLine1   = "Βελτιώνουμε το περιεχόμενο, τις υπηρεσίες και την παρουσίασή μας.";
    $infoLine2   = "Αν χρειάζεστε κάτι άμεσα, μπορείς να επικοινωνήσεις άμεσα με την ομάδα μας, θα χαρούμε να σε βοηθήσουμε.";
    $supportLine = "Στηρίζουμε τα ζώα των Σπετσών κάθε μέρα. Η υποστήριξή σας κάνει διαφορά.";
    $donateBtn   = "Κάνε Δωρεά";
} else {
    $titlePage   = "Under Construction";
    $heroTitle   = "This page is getting ready";
    $heroText    = "We are working with care to bring you a new and improved website.
Our goal is to make your experience here even more welcoming and clear";
    $heroText2   = "Thank you for your patience and support.
Very soon we will be back with updated content, more features, and the same commitment to caring for the animals of Spetses.";
    $btnContact  = "Contact";
    $infoTitle   = "What is happening";
    $infoLine1   = "We are improving our content, services, and design.";
    $infoLine2   = "If you need something right away, γet in touch with our team – we’ll be happy to assist you.";
    $supportLine = "We support the animals of Spetses every day. Your support makes a difference.";
    $donateBtn   = "Make a Donation";
}

navbar($titlePage, $str);
?>
    <main id="body-content">
        <section id="under-construction" class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 text-center mb-4 mb-lg-0">
                        <img src="../assets/images/slider/slider1.JPG" class="img-fluid" alt="Under Construction">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h1 class="mb-3"><?= $heroTitle ?></h1>
                        <p class="mb-2"><?= $heroText ?></p>
                        <p class="mb-4"><?= $heroText2 ?></p>

                        <div class="progress mb-4" style="height: 10px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                 style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="d-flex gap-3 flex-wrap">
                            <a href="../contact" class="btn btn-outline-primary"><?= $btnContact ?></a>
                        </div>
                    </div>
                </div>

                <hr class="my-5">

                <div class="row">
                    <div class="col-12 mb-3">
                        <h3 class="d-flex align-items-center gap-2">
                            <img src="../assets/images/home/footIcon.png" alt="foot icon" style="height:24px;">
                            <span><?= $infoTitle ?></span>
                        </h3>
                    </div>
                    <div class="col-md-6">
                        <p><?= $infoLine1 ?></p>
                    </div>
                    <div class="col-md-6">
                        <p><?= $infoLine2 ?></p>
                    </div>
                </div>

                <section id="banner" class="mt-5">
                    <div class="bannerInfos">
                        <h5>Spetses Care for Animals</h5>
                        <p><?= $supportLine ?></p>
                        <a target="_blank"
                           href="https://www.every.org/spetses-care-for-animals-non-profit-organization?utm_campaign=donate-link#/donate">
                            <?= $donateBtn ?>
                        </a>
                    </div>
                    <div class="bannerImages">
                        <img alt="Banner Spetses Care" class="img-fluid" src="../assets/images/bannerImg.png">
                    </div>
                </section>
            </div>
        </section>

    </main>

<?php
footer($str);
