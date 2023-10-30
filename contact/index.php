<?php
include_once '../commonParts.php';
$str = '../';
$titlePage = "Επικοινωνία";
navbar($titlePage,$str);


?>


    <main id="body-content">

        <section class="wide-tb-100 pb-0">
            <div class="container">
                <section class="map-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.22713639649!2d23.152735475784144!3d37.2660406413021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x149fbda5ba05d545%3A0x3de700cb54b53466!2sSpetses%20Care%20For%20Animals!5e0!3m2!1sel!2sgr!4v1698687280910!5m2!1sel!2sgr"></iframe>
                </section>

            </div>
        </section>


        <section class="wide-tb-100 pb-0">
            <div class="container">
                <h1 class="heading-main center">
                    <small>Επικοινωνία <i class="pethund_repeat_grid"></i></small>
                    <span>Έχεις </span> απορία;
                </h1>
                <div class="row">
                    <div class="col-lg-8 col-md-12 mx-auto">
                        <div class="need-help">
                            <div id="sucessmessage"></div>
                            <form action="#" method="post" id="contact_form" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-12 mb-0">
                                        <div class="mb-3">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-0">
                                        <div class="mb-3">
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-0">
                                        <div class="mb-3">
                                            <textarea name="comment" id="comment" class="form-control" rows="6" placeholder="Μήνυμα"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn-theme bg-green mt-3 capusle">Υποβολή</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100 bg-light-gray clients-rounded-wrap need-help-topspace">
            <div class="container pos-rel">
                <div class="contact-map-img">
                    <img src="../assets/images/World-Map-PNG-Picture.png" alt="">
                </div>
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="icon-box-4 h-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <h3>Τοποθεσία</h3>
                            <div> Πλατεία Ρολογιού ΤΚ 18050 Σπέτσες</div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6">
                        <div class="icon-box-4 h-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <h3>Τηλ Επικοινωνίας</h3>
                            <div>2298 0 72652<br>694 99 86 124</div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 mx-auto">
                        <div class="icon-box-4 h-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <h3>Email</h3>
                            <div><a href="mailto:support@pethund.com">spetsescareforanimals@gmail.com</a></div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>



<?php
footer($str);
?>