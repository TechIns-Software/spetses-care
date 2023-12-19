<?php
include_once '../commonParts.php';
$str = '../';


if ($_SESSION["language"] == 'greek') {
    $titlePage = "Actions";
    $stiroseisTitle = "Στειρώσεις <br> Αδέσποτων Ζώων";
    $stiroseisPar = "Έχουμε στειρώσει, αποπαρασιτώσει, εμβολιάσει και καταγράψει έως τώρα 800 αδέσποτες γάτες, με χορηγία του κτηνιατρείου μας, με προγράμματα του Δήμου Σπετσών, αλλά και με δωρεές ανθρώπων που μας στηρίζουν.";
    $nosileiaTitle = "Νοσηλεία Και <br> Φροντίδα";
    $nosileiaPar1 = "Έχουμε νοσηλεύσει, με χορηγία του κτηνιατρείου μας, με προγράμματα του Δήμου Σπετσών, αλλά και με δωρεές ανθρώπων που μας στηρίζουν, περισσότερα από 300 ζώα.";
    $nosileiaPar2 = "Χορηγούμε διετές πρόγραμμα για τα 120 άλογα εργασίας του νησιού μας, το οποίο περιλαμβάνει τη καταγραφή και σήμανση του, τους εμβολιασμούς και τις αποπαρασιτώσεις, αλλά και την φαρμακευτική και κτηνιατρική υποστήριξη όταν και όπου χρειάζεται. Επίσης καταγράψαμε τισ συντεταγμένες όλων των στάβλων.";
    $enimerosiTitle = "Εκπαιδευτικές  <br> Ενημερώσεις  Σε Μαθητές";
    $enimerosiPar = "Έχουμε πραγματοποιήσει ενημερώσεις ομιλίες και δράσεις σχεδόν σε όλες τις σχολικές βαθμίδες του νησιού μας, με σκοπό να προβάλλουμε στα παιδιά την αλληλεπίδραση και το σεβασμό απέναντι σε όλα τα ζώα.";
    $hotelTitle = "Cats Hotel & <br> Cats Restaurant";
    $hotelPar = "Στην προσπάθειά μας να βελτιώσουμε τις συνθήκες διαβίωσης των αδέσποτων γατών του νησιού μας, έχουμε δημιουργήσει σταθμούς σίτισης και ξεκούρασης, τα γνωστά πλέον Cats Restaurants and Hotels.";
    $learnMoreBtn = "Μάθε Περισσότερα";
    $xorigiesTitle = "Χορηγίες SCFA Α.Μ.Κ.";
    $xorigiesPar1 = "Νέα ρολόγια ύδρευσης για τους τρεις σταθμούς ξεκούρασης των αλόγων εργασίας.";
    $xorigiesPar2 = "Συμμετήχαμε στην αγορά αθλητικής εμφάνισης της ομάδας μπάσκετ του Δημοτικού Σχολείου Σπετσών.";
    $xorigiesPar3 = "Χρυσοί χορηγοί στο 1ο Φεστιβάλ παιδικού βιβλίου που διοργανώθηκε στις Σπέτσες.";

}else{
    $titlePage = "Actions";
    $stiroseisTitle = "Neutering of  <br>  Stray Animals";
    $stiroseisPar = "We have neutered, dewormed, vaccinated, and recorded up to now 800 stray cats, with the sponsorship of our veterinary clinic, programs of the Municipality of Spetses, and donations from people who support us.";
    $nosileiaTitle = "Hospitalization And <br> Care";
    $nosileiaPar1 = "We have cared for and treated, with the sponsorship of our veterinary clinic, programs of the Municipality of Spetses, and donations from our supporters, over 300 animals";
    $nosileiaPar2 = "We provide a two-year program for the 120 working horses of our island, which includes their recording and tagging, vaccinations and deworming, as well as medical and veterinary support when and where needed. We also recorded the coordinates of all stables.";
    $enimerosiTitle = "Educational <br> Information   To Students";
    $enimerosiPar = "We have conducted informational talks and activities in almost all school levels on our island, aiming to promote interaction and respect for all animals among children.";
    $hotelTitle = "Cats Hotel & <br> Cats Restaurant";
    $hotelPar = "In our effort to improve the living conditions of the stray cats on our island, we have created feeding and resting stations, now known as Cats Restaurants and Hotels.";
    $learnMoreBtn = "Learn More";
    $xorigiesTitle = "SCFA Sponsorships";
    $xorigiesPar1 = "New water clocks for the three resting stations of the working horses.";
    $xorigiesPar2 = " We participated in the purchase of sports uniforms for the basketball team of the Spetses Municipal School. ";
    $xorigiesPar3 = "Gold sponsors at the 1st Children's Book Festival organized in Spetses";



}
$_SESSION['page'] = 2 ;
$metaArray['title'] = $titlePage.'| scfa.gr';
$metaArray['description'] =  "Ανακαλύψτε τις καρδιές που χτυπούν για τα ζώα με τις δράσεις μας! Η ομάδα μας αφοσιώνεται στην προστασία και ευημερία των ζώων. Μάθετε περισσότερα για τις πρωτοβουλίες μας και ελάτε να συμμετέχετε σε αυτή την αγαπητική κοινότητα!";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] =  "actions";

navbar($titlePage,$str,$metaArray);

?>
    <main id="body-content">
        <section id="actionsHeader" page="actions" >

        </section>
        <div class="sectionDivider"></div>

        <section id="actionsSelect" footprints="left">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div id="mobileLayout" class="d-flex justify-content-between align-items-center">
                            <div class=""> <img src="../assets/images/actions/dog.png" alt="dog Image"> </div>
                            <div>
                                <div class="actionCard" onclick="window.location.href='#stiroseis'">
                                    <div class="actionTitle"><?= $stiroseisTitle?></div>
                                    <div class="actionIcon"> <a href="#stiroseis"><i class="fa-solid fa-chevron-down"></i></a></div>
                                </div>

                                <div class="actionCard" onclick="window.location.href='#nosileia'">
                                    <div class="actionTitle"><?= $nosileiaTitle?></div>
                                    <div class="actionIcon"> <a href="#nosileia"><i class="fa-solid fa-chevron-down"></i></a></div>
                                </div>



                                <div class="actionCard" onclick="window.location.href='#enimerosi'">
                                    <div class="actionTitle"><?= $enimerosiTitle?></div>
                                    <div class="actionIcon"> <a href="#enimerosi"><i class="fa-solid fa-chevron-down"></i></a></div>
                                </div>

                                <div class="actionCard" onclick="window.location.href='#hotel'">
                                    <div class="actionTitle"><?= $hotelTitle?></div>
                                    <div class="actionIcon"> <a href="#hotel"><i class="fa-solid fa-chevron-down"></i></a></div>
                                </div>


                            </div>
                        </div>
                        <div id="desktopLayout" >
                            <div>
                                <div class="actionCard" onclick="window.location.href='#stiroseis'" >
                                    <div class="actionTitle"><?= $stiroseisTitle?></div>
                                    <div class="actionIcon"> <a href="#stiroseis"><i class="fa-solid fa-chevron-down"></i></a></div>
                                </div>

                                <div class="actionCard" onclick="window.location.href='#nosileia'">
                                    <div class="actionTitle"><?= $nosileiaTitle?></div>
                                    <div class="actionIcon"> <a href="#nosileia"><i class="fa-solid fa-chevron-down"></i></a></div>
                                </div>

                            </div>
                            <div class=""> <img src="../assets/images/actions/dog.png"> </div>
                            <div>




                                <div class="actionCard" onclick="window.location.href='#enimerosi'">
                                    <div class="actionTitle"><?= $enimerosiTitle?> </div>
                                    <div class="actionIcon"> <a href="#enimerosi"><i class="fa-solid fa-chevron-down"></i></a></div>
                                </div>

                                <div class="actionCard" onclick="window.location.href='#hotel'">
                                    <div class="actionTitle"><?= $hotelTitle?></div>
                                    <div class="actionIcon"> <a href="#hotel"><i class="fa-solid fa-chevron-down"></i></a></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sectionDivider"></div>

        <section id="sponsors" >
            <div class="container-fluid" >
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="sponsorsTitle"> <?= $xorigiesTitle ?> </h3>
                        <div class="sponsorsDetails">
                            <h4><?= $xorigiesPar1 ?></h4>
                        </div>

                        <div class="sponsorsDetails">
                            <h4><?= $xorigiesPar2 ?></h4>
                        </div>

                        <div class="sponsorsDetails">
                            <h4><?= $xorigiesPar3 ?></h4>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="stiroseis" class="actionDetailContainer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 order-xl-1  order-lg-1 order-md-2 order-sm-2 order-2">
                        <h4 class="actionDetailTitle"> <?= $stiroseisTitle ?></h4>
                        <p class="actionDetailPar"><?= $stiroseisPar ?></p>
                    </div>

                    <div class="col-lg-6 col-md-12 order-xl-2  order-lg-2 order-md-1 order-sm-1 order-1 ">
                        <img class="img-fluid" src="../assets/images/actions/stiroseis.png" alt="Φωτογραφία απο στειρώσεις">
                    </div>

                </div>
            </div>
        </section>
        <section id="nosileia" class="actionDetailContainer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12  ">
                        <img class="img-fluid" src="../assets/images/actions/frontida.png" alt="Φωτογραφία απο σκύλο ">
                    </div>

                    <div class="col-lg-6 col-md-12 ">
                        <h4 class="actionDetailTitle"> <?= $nosileiaTitle ?>  </h4>

                        <p class="actionDetailPar"><?= $nosileiaPar1 ?>  </p>
                        <p class="actionDetailPar"><?= $nosileiaPar2 ?>  </p>
                    </div>

                </div>
            </div>
        </section>

        <section id="enimerosi" class="actionDetailContainer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 order-xl-1  order-lg-1 order-md-2 order-sm-2 order-2">
                        <h4 class="actionDetailTitle"> <?= $enimerosiTitle ?> </h4>
                        <p class="actionDetailPar"><?= $enimerosiPar ?></p>
                        <a href="../education" class="actionCta"> <?= $learnMoreBtn ?></a>
                    </div>

                    <div class="col-lg-6 col-md-12 order-xl-2  order-lg-2 order-md-1 order-sm-1 order-1 ">
                        <img class="img-fluid" src="../assets/images/actions/enimeroseis.png" alt="Φωτογραφία απο ενημερώσεις">
                    </div>

                </div>
            </div>
        </section>
        <section id="hotel" class="actionDetailContainer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12  ">
                        <img class="img-fluid" src="../assets/images/actions/hotels.png" alt="Φωτογραφία απο Cats Hotel &  Cats Restaurant">
                    </div>

                    <div class="col-lg-6 col-md-12 text-start ">
                        <h4 class="actionDetailTitle"> <?= $hotelTitle ?></h4>

                        <p class="actionDetailPar"><?= $hotelPar ?> </p>
                        <a href="../hotel-restaurant" class="actionCta">  <?= $learnMoreBtn ?> </a>

                    </div>

                </div>
            </div>
        </section>













    </main>
<?php
footer($str);
?>