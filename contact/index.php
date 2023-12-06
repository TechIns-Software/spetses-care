<?php
include_once '../commonParts.php';
$str = '../';
$titlePage = "Επικοινωνία";
$_SESSION['page'] = 8 ;
navbar($titlePage,$str);

?>
    <main id="body-content">
        <section id="actionsHeader" page="adoption">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="bgTitle">ΕΠΙΚΟΙΝΩΝΙΑ</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sectionDivider"></div>

        <section id="contactContainer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="contactTitle">Θέλω να στείλω μήνυμα!</h3>
                    </div>

                    <div class="col-lg-6 col-md-12 my-2">
                        <div class="volunteerForm">
                            <input type="text" id="fullName" placeholder="Ονοματεπώνυμο">
                            <input type="text" id="email" placeholder="Email">
                            <input type="text" id="phone" placeholder="Τηλέφωνο">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 my-2">
                        <div class="volunteerForm">
                        <input type="text" id="subject" placeholder="Τίτλος">
                        <textarea cols="5" rows="3" id="message">Μήνυμα...</textarea>
                            <button onclick="contactForm(event)" class="submit-form-btn">Υποβολή <div id="spinner-border" class="spinner-border d-none text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </button>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-12">
                        <h3 class="contactTitle">Επικοινωνήστε μαζί μας</h3>
                    </div>

                    <div class="col-lg-6 col-md-12 my-2">
                        <div class="contactInfoBox">
                            <div><i class="fa-solid fa-phone"></i></div>
                            <div class="contactValue">Τηλέφωνο: 22980 72652</div>
                        </div>

                        <div class="contactInfoBox">

                            <div>     <i class="fa-regular fa-envelope"></i></div>
                            <div class="contactValue">E-mail: spetsescareforanimals@gmail.com</div>
                        </div>
                        <div class="contactInfoBox">
                            <div><i class="fa-solid fa-location-dot"></i></div>
                            <div class="contactValue">Διεύθυνση: Πλατεία Ρολογιού, Σπέτσες</div>
                        </div>


                    </div>

                    <div class="col-lg-6 col-md-12 my-2">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.2273164085386!2d23.152735475667857!3d37.26603637211801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x149fbda5ba05d545%3A0x3de700cb54b53466!2sSpetses%20Care%20For%20Animals!5e0!3m2!1sel!2sgr!4v1701874495357!5m2!1sel!2sgr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 my-2">
                        <h4 class="openHoursTitle">Χειμερινό Ωράριο Λειτουργίας: </h4>
                        <p class="openHours">ΔΕΥΤ-ΤΕΤ-ΠΑΡ: <span> 09:00-14:00 και 17:00-20:00 </span></p>
                        <p class="openHours">  ΤΡΙΤΗ-ΠΕΜ:<span>  09:00-17:00 </span></p>
                    </div>

                    <div class="col-lg-6 col-md-12 my-2">
                        <h4 class="openHoursTitle">Θερινό Ωράριο Λειτουργίας:  </h4>
                        <p class="openHours">ΔΕΥΤΕΡΑ ΕΩΣ ΠΑΡΑΣΚΕΥΗ: <span> 09:00-14:00 18:00-21:00 </span>
                        </p>
                    </div>

                </div>
            </div>
        </section>


    </main>
<?php
footer($str);
?>