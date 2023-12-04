<?php
include_once '../commonParts.php';
$str = '../';
$titlePage = "Δράσεις";
$_SESSION['page'] = 2 ;
navbar($titlePage,$str);

?>
    <main id="body-content">
        <section id="actionsHeader">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="bgHead">Δράσεις</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="sectionDivider"></div>

        <section id="actionsSelect" footprints="left">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div id="mobileLayout" class="d-flex justify-content-between align-items-center">
                            <div class=""> <img src="../assets/images/actions/dog.png"> </div>
                            <div>
                                <div class="actionCard">
                                    <div class="actionTitle">Στειρώσεις <br>Αδέσποτων Ζώων</div>
                                    <div class="actionIcon"> <a href="#stiroseis"><i class="fa-solid fa-chevron-down"></i></a></div>
                                </div>

                                <div class="actionCard">
                                    <div class="actionTitle">Νοσηλεία Και  <br>Φροντίδα</div>
                                    <div class="actionIcon"> <a href="#nosileia"><i class="fa-solid fa-chevron-down"></i></a></div>
                                </div>



                                <div class="actionCard">
                                    <div class="actionTitle">Εκπαιδευτικές Ενημερώσεις <br>Σε Μαθητές </div>
                                    <div class="actionIcon"> <a href="#enimerosi"><i class="fa-solid fa-chevron-down"></i></a></div>
                                </div>

                                <div class="actionCard">
                                    <div class="actionTitle">Cats Hotel &  <br>Cats Restaurant</div>
                                    <div class="actionIcon"> <a href="#hotel"><i class="fa-solid fa-chevron-down"></i></a></div>
                                </div>


                            </div>
                        </div>
                        <div id="desktopLayout" >
                            <div>
                                <div class="actionCard">
                                    <div class="actionTitle">Στειρώσεις <br>Αδέσποτων Ζώων</div>
                                    <div class="actionIcon"> <a href="#stiroseis"><i class="fa-solid fa-chevron-down"></i></a></div>
                                </div>

                                <div class="actionCard">
                                    <div class="actionTitle">Νοσηλεία Και  <br>Φροντίδα</div>
                                    <div class="actionIcon"> <a href="#nosileia"><i class="fa-solid fa-chevron-down"></i></a></div>
                                </div>

                            </div>
                            <div class=""> <img src="../assets/images/actions/dog.png"> </div>
                            <div>




                                <div class="actionCard">
                                    <div class="actionTitle">Εκπαιδευτικές <br> Ενημερώσεις Σε Μαθητές </div>
                                    <div class="actionIcon"> <a href="#enimerosi"><i class="fa-solid fa-chevron-down"></i></a></div>
                                </div>

                                <div class="actionCard">
                                    <div class="actionTitle">Cats Hotel &  <br>Cats Restaurant</div>
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
                        <h3 class="sponsorsTitle">Χορηγείες SCFA Α.Μ.Κ.</h3>
                        <div class="sponsorsDetails">
                            <h4>Νέα ρολόγια ύδρευσης για τους τρεις σταθμούς ξεκούρασης των αλόγων εργασίας.</h4>
                        </div>

                        <div class="sponsorsDetails">
                            <h4>Συμμετήχαμε στην αγορά αθλητικής εμφάνησής της ομάδας μπάσκετ του Δημοτικού Σχολείου Σπετσών.</h4>
                        </div>

                        <div class="sponsorsDetails">
                            <h4>Χρυσοί χορηγοί στο 1ο Φεστβάλ παιδικού βιβλίου που διοργανώθηκε στις Σπέτσες.</h4>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="stiroseis" class="actionDetailContainer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12 order-xl-1  order-lg-1 order-md-2 order-sm-2 order-2">
                        <h4 class="actionDetailTitle">Στειρώσεις<br> Αδέσποτων Ζώων</h4>
                        <p class="actionDetailPar">Έχουμε στειρώσει, αποπαρασιτώσει, εμβολιάσει και καταγράψει έως τώρα 800 αδέσποτες γάτες, με
                            χορηγεία του κτηρνιατρείου μας, με πρoγράμματα του Δήμου Σπετσών, αλλά και με δωρεές
                            ανθρώπων που μας στηρίζουν.</p>
                    </div>

                    <div class="col-lg-6 col-md-12 order-xl-2  order-lg-2 order-md-1 order-sm-1 order-1 ">
                        <img class="img-fluid" src="../assets/images/actions/stiroseis.png">
                    </div>

                </div>
            </div>
        </section>
        <section id="nosileia" class="actionDetailContainer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12  ">
                        <img class="img-fluid" src="../assets/images/actions/frontida.png">
                    </div>

                    <div class="col-lg-6 col-md-12 ">
                        <h4 class="actionDetailTitle">Νοσηλεία
                            <br> Και Φροντίδα</h4>
                        <p class="actionDetailPar">Έχουμε νοσηλεύσει, με χορηγεία του κτηρνιατρείου μας, με ποργράμματα
                            του Δήμου Σπετσών, αλλά και με δωρεές ανθρώπων που μας στηρίζουν, περισσότερα από 300 ζώα.
                        </p>
                        <p class="actionDetailPar">
                            Χορηγούμε διετές πρόγραμμα για τα 120 άλογα εργασίας του νησιού μας, το οποίο περιλαμβάνει
                            τη καταγραφή και σήμανση του, τους εμβολιασμούς και τις αποπαρασιτώσεις, αλλά και την
                            φαρμακευτική και κτηνιατρική υποστήριξη όταν και όπου χρειάζεται. Επίσης καταγράψαμε τισ
                            συντεταγμένες όλων των στάβλων.</p>
                    </div>

                </div>
            </div>
        </section>

        <section id="enimerosi" class="actionDetailContainer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12 order-xl-1  order-lg-1 order-md-2 order-sm-2 order-2">
                        <h4 class="actionDetailTitle"> Εκπαιδευτικές <br> Ενημερώσεις Σε Μαθητές</h4>
                        <p class="actionDetailPar">Έχουμε πραγματοποιήσει ενημερώσεις ομιλίες και δράσεις σχεδόν σε όλες τις σχολικές βαθμίδες του νησιού μας, με σκοπό να προβάλλουμε στα παιδιά την αληλεπίδραση και το σεβασμό απέναντι σε όλα τα ζώα.</p>
                        <a href="../education" class="actionCta">Μάθε Περισσότερα</a>
                    </div>

                    <div class="col-lg-6 col-md-12 order-xl-2  order-lg-2 order-md-1 order-sm-1 order-1 ">
                        <img class="img-fluid" src="../assets/images/actions/enimeroseis.png">
                    </div>

                </div>
            </div>
        </section>
        <section id="hotel" class="actionDetailContainer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12  ">
                        <img class="img-fluid" src="../assets/images/actions/hotel.png">
                    </div>

                    <div class="col-lg-6 col-md-12 ">
                        <h4 class="actionDetailTitle">Cats Hotel &
                            <br> Cats Restaurant</h4>
                        <p class="actionDetailPar">Στην προσπάθειά μας να βελτιώσουμε τις συνθήκες διαβίωσης των αδέσποτων γατών του νησιού μας, έχουμε δημιουργήσει σταθμούς σίτισης και ξεκούρασης, τα γνωστά πλέον Cats Restaurants and Hotels. </p>
                        <a href="../hotel-restaurant" class="actionCta">Μάθε Περισσότερα</a>

                    </div>

                </div>
            </div>
        </section>













    </main>
<?php
footer($str);
?>