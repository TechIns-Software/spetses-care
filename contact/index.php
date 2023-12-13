<?php
include_once '../commonParts.php';
$str = '../';

$_SESSION['page'] = 8 ;

if ($_SESSION["language"] == 'greek') {
    $titlePage = "Επικοινωνία";
    $contactTitle = "Επικοινωνία";
    $sendMessageTitle = "Θέλω να στείλω μήνυμα!";
    $sendMessageName = "Ονοματεπώνυμο";
    $sendMessageEmail = "Email";
    $sendMessagePhone = "Τηλέφωνο";
    $sendMessageSubject = "Τίτλος";
    $sendMessageMessage = "Μήνυμα...";
    $sendMessageSubmit = "Υποβολή";
    $sendMessageLoading = "Φόρτωση...";
    $contactUsTitle = "Επικοινωνήστε μαζί μας";
    $contactUsPhone = "Τηλέφωνο: 22980 72652";
    $contactUsEmail = "E-mail: spetsescareforanimals@gmail.com";
    $contactUsAddress = "Διεύθυνση: Πλατεία Ρολογιού, Σπέτσες";

    $openHours1 = "ΔΕΥΤ-ΤΕΤ-ΠΑΡ:";
    $openHours1Value = " 09:00-14:00 και 17:00-20:00";
    $openHours2 = "ΤΡΙΤΗ-ΠΕΜ:";
    $openHours2Value = " 09:00-17:00";
    $openHoursTitle2 = "Θερινό Ωράριο Λειτουργίας: ";
    $openHours3 = "ΔΕΥΤΕΡΑ ΕΩΣ ΠΑΡΑΣΚΕΥΗ:";
    $openHours3Value = "09:00-14:00 και 18:00-21:00";
}else{
    $titlePage = "Contact";
    $contactTitle = "Contact";
    $sendMessageTitle = "I want to send a message!";
    $sendMessageName = "Full Name";
    $sendMessageEmail = "Email";
    $sendMessagePhone = "Phone";
    $sendMessageSubject = "Subject";
    $sendMessageMessage = "Message...";
    $sendMessageSubmit = "Submit";
    $sendMessageLoading = "Loading...";
    $contactUsTitle = "Contact Us";
    $contactUsPhone = "Phone: 22980 72652";
    $contactUsEmail = "E-mail:";
    $contactUsAddress = "Address: Pl. Roloy, Spetses";

    $openHoursTitle = "Winter Hours: ";
    $openHours1 = "MON-WED-FRI:";
    $openHours1Value = " 09:00-14:00 and 17:00-20:00";
    $openHours2 = "TUE-THU:";
    $openHours2Value = " 09:00-17:00";
    $openHoursTitle2 = "Summer  Hours: ";
    $openHours3 = "MONDAY TO FRIDAY:";
    $openHours3Value = "09:00-14:00 and 18:00-21:00";
}
$metaArray['title'] = $titlePage.'| scfa.gr';
$metaArray['description'] =  "Ανακαλύψτε πώς μπορούμε να βοηθήσουμε τα ζώα σας! Στη σελίδα επικοινωνίας μας, μπορείτε να μας στείλετε μηνύματα για εξειδικευμένη συμβουλή και υποστήριξη που αφορούν το καλό των αγαπημένων σας φίλων.";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] =  "contact";
navbar($titlePage,$str,$metaArray);

?>
    <main id="body-content">
        <section id="actionsHeader" page="clinic">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="bgTitle"> <?= $contactTitle ?></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sectionDivider"></div>

        <section id="contactContainer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="contactTitle"> <?= $sendMessageTitle ?></h3>
                    </div>

                    <div class="col-lg-6 col-md-12 my-2">
                        <div class="volunteerForm">
                            <input type="text" id="fullName" placeholder="<?= $sendMessageName ?>">
                            <input type="text" id="email" placeholder="<?= $sendMessageEmail ?>">
                            <input type="text" id="phone" placeholder="<?= $sendMessagePhone ?>">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 my-2">
                        <div class="volunteerForm">
                        <input type="text" id="subject" placeholder="<?= $sendMessageSubject ?>">
                        <textarea cols="5" rows="3" id="message"><?= $sendMessageMessage ?></textarea>
                            <button onclick="contactForm(event)" class="submit-form-btn"><?= $sendMessageSubmit ?> <div id="spinner-border" class="spinner-border d-none text-light" role="status">
                                    <span class="visually-hidden"> <?= $sendMessageLoading ?></span>
                                </div>
                            </button>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-12">
                        <h3 class="contactTitle"> <?= $contactUsTitle ?></h3>
                    </div>

                    <div class="col-lg-6 col-md-12 my-2">
                        <div class="contactInfoBox">
                            <div><i class="fa-solid fa-phone"></i></div>
                            <div class="contactValue"><?= $contactUsPhone ?></div>
                        </div>

                        <div class="contactInfoBox">

                            <div>     <i class="fa-regular fa-envelope"></i></div>
                            <div class="contactValue"><?= $contactUsEmail ?></div>
                        </div>
                        <div class="contactInfoBox">
                            <div><i class="fa-solid fa-location-dot"></i></div>
                            <div class="contactValue"><?= $contactUsAddress ?></div>
                        </div>


                    </div>

                    <div class="col-lg-6 col-md-12 my-2">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.2273164085386!2d23.152735475667857!3d37.26603637211801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x149fbda5ba05d545%3A0x3de700cb54b53466!2sSpetses%20Care%20For%20Animals!5e0!3m2!1sel!2sgr!4v1701874495357!5m2!1sel!2sgr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 my-2  ">
                        <h4 class="openHoursTitle"><?= $openHoursTitle ?> </h4>
                        <p class="openHours"><?= $openHours1 ?> <span> <?= $openHours1Value ?></span></p>
                        <p class="openHours">  <?= $openHours2 ?><span>  <?= $openHours2Value ?> </span></p>
                    </div>

                    <div class="col-lg-6 col-md-12 my-2 ">
                        <h4 class="openHoursTitle"><?= $openHoursTitle2 ?> </h4>
                        <p class="openHours"><?= $openHours3 ?> <span> <?= $openHours3Value ?> </span>
                        </p>
                    </div>

                </div>
            </div>
        </section>


    </main>
<?php
footer($str);
?>