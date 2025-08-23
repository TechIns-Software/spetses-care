<?php
include_once '../commonParts.php';
$str = '../';

$_SESSION['page'] = 13;

if ($_SESSION["language"] == 'greek') {
    $t = [
        'titlePage' => "Κατηγορίες Δωρητών",
        'donorPageTitle' => "Τιμητικοί Τίτλοι Δωρητών SCFA",
        'donorSubtitle' => "Γιατί κάθε δωρεά είναι μια ιστορία αγάπης",
        'donationSectionTitle' => "Γίνε Χορηγός Σίτισης & Στέγης",
        'catsHotel' => "Cat’s Hotel 🏠",
        'catsHotelDesc' => "Μόνιμη αναφορά του ονόματός σας επάνω στο σπίτι.",
        'catsRestaurant' => "Cat’s Restaurant 🍽️",
        'catsRestaurantDesc' => "Χορηγία ταΐστρας με το όνομά σας και δέσμευση συντήρησης.",
        'donationBtn' => "Κάνε Δωρεά",
        'supportText' => "Στήριξε τη Δομή μας 💙🐾",
        'supportParagraph' => "Η καθημερινή λειτουργία του SCFA απαιτεί συνεχή προσπάθεια, χρόνο και πόρους.\n\nΚάθε μέρα, το κτηνιατρείο μας ανοίγει τις πόρτες του για να προσφέρει ιατρική φροντίδα, σίτιση και προστασία στα αδέσποτα του νησιού — αλλά και να καλύψει ανάγκες δεσποζόμενων ζώων με υπευθύνοτητα και επαγγελματικότητα.",
        'donationOptions' => ["Μηνιαία Δωρεά", "Ετήσια Στήριξη", "Μοναδική Δωρεά"],
        'donorTableHeadings' => ["Κατηγορία / Category", "Ποσό / Amount", "Περιγραφή / Description"],
        'donorCategoryTable' => [
            ["1️⃣ Φίλοι των Γατών", "έως 100€", "Μικρές αλλά ουσιαστικές δωρεές που μας δίνουν καθημερινή δύναμη."],
            ["2️⃣ Προστάτες των Γατών 🛡️", "101€ – 500€", "Στηρίζουν σταθερά τη σίτιση και την περίθαλψη αδέσποτων."],
            ["3️⃣ Χορηγοί Ευζωίας 🌿", "501€ – 1.000€", "Καλύπτουν σημαντικά ιατρικά έξοδα, στειρώσεις και εμβολιασμούς."],
            ["4️⃣ Κύριοι Δωρητές 🌟", "1.001€ – 5.000€", "Χρηματοδοτούν ολοκληρωμένα προγράμματα φροντίδας."],
            ["5️⃣ Μεγάλοι Ευεργέτες 💠", "5.001€ – 10.000€", "Συνεισφέρουν ουσιαστικά στη βιωσιμότητα και ανάπτυξη της δομής."],
            ["6️⃣ Χρυσοί Χορηγοί ✨", "10.001€+", "Οι πιο ισχυροί υποστηρικτές μας, που καθορίζουν με τη γενναιοδωρία τους το μέλλον της δομής."],
            ["7️⃣ Ιδρυτικός Ευεργέτης 🏛️", "30.000€+ (μοναδική κατηγορία)", "Ο τίτλος που αποδίδεται μόνο μία φορά, σε έναν άνθρωπο που άλλαξε για πάντα την ιστορία μας."]
        ],
        'founderTitle' => "Ιδρυτικός Ευεργέτης 🏛️",
        'founderText1' => "Οικογένεια κ. Φωκίων Φίλων Ποταμιάνου, είναι ο άνθρωπος χάρη στον οποίο το κτηνιατρείο Spetses Care For Animals πέρασε από όνειρο σε πραγματικότητα. Με μια γενναιόδωρη δωρεά, χρηματοδότησε εξολοκλήρου την ίδρυση και εξοπλισμό του κτηνιατρείου μας, δημιουργώντας έναν σύγχρονο χώρο φροντίδας, αγάπης και ελπίδας για κάθε ζώο που το έχει ανάγκη.",
        'founderText2' => "Η προσφορά του δεν σταμάτησε εκεί. Με σταθερή μηνιαία στήριξη, συνεχίζει να εξασφαλίζει ότι οι πόρτες μας θα παραμένουν πάντα ανοιχτές. Για εμάς, δεν είναι απλά ένας δωρητής. Είναι ο Πυλώνας πάνω στον οποίο στηρίχθηκε η δομή μας. Είναι ο Ιδρυτικός Ευεργέτης μας.",
        'founderText3' => "Η συμβολή του αποτελεί παράδειγμα ανιδιοτελούς προσφοράς και θα μείνει για πάντα χαραγμένη στην ιστορία του SCFA."
    ];
} else {
    $t = [
        'titlePage' => "Donor Categories",
        'donorPageTitle' => "SCFA Donor Honor Titles",
        'donorSubtitle' => "Because every donation tells a story of love",
        'donationSectionTitle' => "Become a Sponsor of Food & Shelter",
        'catsHotel' => "Cat’s Hotel 🏠",
        'catsHotelDesc' => "Your name will be permanently displayed on the shelter house.",
        'catsRestaurant' => "Cat’s Restaurant 🍽️",
        'catsRestaurantDesc' => "Sponsor a feeding station with your name and commit to its upkeep.",
        'donationBtn' => "Donate Now",
        'supportText' => "Support Our Shelter 💙🐾",
        'supportParagraph' => "The daily operation of SCFA requires continuous effort, time, and resources.\n\nEach day, our clinic opens its doors to provide medical care, food, and protection to the island’s stray animals — and responsibly support owned pets as well.",
        'donationOptions' => ["Monthly Donation", "Annual Support", "One-Time Contribution"],
        'donorTableHeadings' => ["Category", "Amount", "Description"],
        'donorCategoryTable' => [
            ["1️⃣ Cat Friends", "up to €100", "Small yet meaningful donations that keep us going every day."],
            ["2️⃣ Cat Guardians 🛡️", "€101 – €500", "Consistent supporters of feeding and basic care for strays."],
            ["3️⃣ Welfare Sponsors 🌿", "€501 – €1,000", "Covering major medical expenses, neutering and vaccinations."],
            ["4️⃣ Major Donors 🌟", "€1,001 – €5,000", "Funding complete animal welfare programs."],
            ["5️⃣ Grand Benefactors 💠", "€5,001 – €10,000", "Key supporters ensuring the sustainability and growth of our organization."],
            ["6️⃣ Golden Sponsors ✨", "€10,001+", "Our most impactful supporters, shaping the future of our shelter through their generosity."],
            ["7️⃣ Founding Benefactor 🏛️", "€30,000+ (unique title)", "Awarded only once to the person who transformed our story forever."]
        ],
        'founderTitle' => "Founding Benefactor 🏛️",
        'founderText1' => "The family of Mr. Fokion Filon Potamianos made the dream of Spetses Care For Animals a reality. With a generous donation, they fully funded the establishment and equipment of our veterinary clinic, creating a modern space of care, love, and hope for every animal in need.",
        'founderText2' => "Their support didn’t stop there. With a steady monthly contribution, they continue to keep our doors open. To us, they are not just donors. They are the foundation upon which our structure was built.",
        'founderText3' => "Their contribution stands as a shining example of selfless giving and will forever be etched in the history of SCFA."
    ];
}

$metaArray['title'] = $t['titlePage'] . ' | scfa.gr';
$metaArray['description'] = "Κατηγορίες τιμητικών τίτλων για τους δωρητές του SCFA. Στήριξε τη δομή μας και άφησε το αποτύπωμά σου στην προστασία των ζώων.";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] = "donors";

navbar($t['titlePage'], $str, $metaArray);
?>

<main id="body-content">
    <section id="actionsHeader" page="donors"></section>
    <div class="sectionDivider"></div>

    <section id="donorSection" class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2><?= $t['donorPageTitle'] ?></h2>
                    <p class="lead"><?= $t['donorSubtitle'] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                            <tr>
                                <th><?= $t['donorTableHeadings'][0] ?></th>
                                <th><?= $t['donorTableHeadings'][1] ?></th>
                                <th><?= $t['donorTableHeadings'][2] ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($t['donorCategoryTable'] as $row): ?>
                                <tr>
                                    <td><?= $row[0] ?></td>
                                    <td><?= $row[1] ?></td>
                                    <td><?= $row[2] ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        <h4><?= $t['founderTitle'] ?></h4>
                        <p><?= $t['founderText1'] ?></p>
                        <p><?= $t['founderText2'] ?></p>
                        <p><strong><?= $t['founderText3'] ?></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="shelterSupport" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3><?= $t['donationSectionTitle'] ?></h3>
                    <ul>
                        <li><strong><?= $t['catsHotel'] ?></strong> &mdash; <?= $t['catsHotelDesc'] ?></li>
                        <li><strong><?= $t['catsRestaurant'] ?></strong> &mdash; <?= $t['catsRestaurantDesc'] ?></li>
                    </ul>
                    <a href="../donation#donation" class="btn btn-primary mt-3"><?= $t['donationBtn'] ?></a>
                </div>
                <div class="col-lg-6">
                    <h4><?= $t['supportText'] ?></h4>
                    <p><?= nl2br($t['supportParagraph']) ?></p>
                    <ul>
                        <?php foreach ($t['donationOptions'] as $opt): ?>
                            <li><?= $opt ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
footer($str);
?>
