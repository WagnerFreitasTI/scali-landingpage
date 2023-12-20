<?php
require_once __DIR__ . "/templates/header.php";
?>

<div class="main-content">
    <section id="intro" class="main style1 dark fullscreen section-nap-scroll">
        <div class="content ">
            <header>
                <div class="text_sec1">
                    <h2 class="title-intro"><span style="color: #be694b;">
                            YOUR<br>
                            LIFE</span> IN<br>
                        FOCUS
                    </h2>
                    <p class="parag1" style="color: #0b1b30;;">
                        <span style="color: #be694b;">
                            STUDIO, 1, 1 + FLEX, 2, 2 + FLEX<br>
                        </span>
                        IN LANGLEY CITY,<br>
                        MINUTES TO THE FUTURE SKYTRAIN
                    </p>
                    <p style="font-size: 1em;font-family: 'Beliau-Regular';color: #0b1b30; white-space: nowrap;">
                        PRESENTATION CENTER <br class="mobile-only">
                        <span style="color: #be694b;"> COMING SOON </span>
                    </p>
                </div>
            </header>
        </div>
        <a href="#one" class="arrowdow button style2 down ">More</a>
    </section>

    <section id="one" class="main style2 right dark fullscreen section-nap-scroll">
        <div class=" box style2">
            <div class="about">
                <p>
                    In the whirlwind of life's demands and unpredictability, finding equilibrium can often seem like
                    an elusive dream. The constant hustle and bustle of the outside world can leave us feeling
                    overwhelmed, yearning for a sanctuary where tranquility reigns supreme.
                </p>
                <p>
                    That's why we've crafted a haven, a place where balance is not just a concept but a tangible,
                    everyday reality.
                </p>
                <p>
                    Imagine coming home to a space that welcomes you with open arms—a space meticulously designed to
                    be your refuge from the noise of the outside world. Our condo units are a testament to the art
                    of harmonious living. Step inside, and you'll immediately sense the calming atmosphere, a
                    carefully curated blend of aesthetics and functionality. We believe that your home should be a
                    place where you can recharge and rejuvenate, ready to face the challenges of the next day.
                </p>
                <p>
                    Our commitment to creating spaces that promote well-being is evident in every detail, from the
                    thoughtful layout to meticulously designed amenities. "Balance is a Lifestyle" is more than just
                    a theme—it's a reality waiting for you at Scale by Scale Projects.
                </p>

                <a href="#nine" style="margin-top: 16px;">
                    <button class="button">REGISTER NOW</button>
                </a>
            </div>
    </section>

    <section id="two">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <picture>
                        <source srcset="images/carousel/mobile-1.jpg" media="(orientation: portrait)" />
                        <img src="images/carousel/desktop-1.jpg" />
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source srcset="images/carousel/mobile-2.jpg" media="(orientation: portrait)" />
                        <img src="images/carousel/desktop-2.jpg" />
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source srcset="images/carousel/mobile-3.jpg" media="(orientation: portrait)" />
                        <img src="images/carousel/desktop-3.jpg" />
                    </picture>
                </div>
            </div>

            <div class="navigation">
                <div class="navigation-button navigation-button-prev swiper-button-prev">
                    <span></span>
                </div>
                <div class="navigation-button navigation-button-next swiper-button-next">
                    <span></span>
                </div>
            </div>
        </div>
    </section>

    <section id="tree" class="main right dark section-nap-scroll">
        <div class="text-sec3">
            <img src="images/ico-map.svg" alt="Icon Center" class="icon-center">

            <h3>BALANCE IS A LIFESTYLE</h3>
            <p class="about quiet3">
                Situated in the rapidly expanding City of Langley near 54A and 203 Street, Scale is located in close
                walking distance to future Skytrain, and a plethora of hidden gems including restaurants, shops, and
                other unique amenities waiting to be discovered.
            </p>
        </div>
    </section>

    <section id="neighbourhood" class="main  right dark section-nap-scroll">
        <h3 class="location mobile-only">
            LOCATION
        </h3>

        <div id="menu">
            <h3 class="location desktop-only">
                LOCATION</h3>
            <a href=" #" onclick="return showImage(this, 'images/Layers JPEG-PNG/FULL_MAP.jpg');" class="active">NEIGHBOURHOOD</a>
            <a class="" href="#" onclick="return showImage(this, 'images/Layers JPEG-PNG/RESTAURANTS.png');">RESTAURANTS</a>
            <a href="#" onclick="return showImage(this, 'images/Layers JPEG-PNG/PARKS.png');">PARKS</a>
            <a href="#" onclick="return showImage(this, 'images/Layers JPEG-PNG/SUPERMARKET.png');">SUPERMARKETS</a>
            <a href="#" onclick="return showImage(this, 'images/Layers JPEG-PNG/MALLS.png');">MALLS</a>
            <a href="#" onclick="return showImage(this, 'images/Layers JPEG-PNG/DEPARTMENT_STORES.png');">DEPARTMENT
                STORES</a>
            <a href="#" onclick="return showImage(this, 'images/Layers JPEG-PNG/ENTERTAINMENT.png');">ENTERTAINMENT</a>
            <a href="#" onclick="return showImage(this, 'images/Layers JPEG-PNG/EDUCATION.png');">EDUCATION</a>
            <a href="#" onclick="return showImage(this, 'images/Layers JPEG-PNG/TRANSPORTATION.png');">TRANSPORTATION</a>
        </div>
        <div id="content4" data-mobile-zoom>
            <img id="baseImage" src="images/Layers JPEG-PNG/SCALI_MAP_01_BASE_ICON.jpg" alt="Base Image">
            <img id="overlayImage" src="images/Layers JPEG-PNG/FULL_MAP.jpg" alt="Overlay Image">
        </div>
    </section>

    <section id="homes" class="main  right dark section-nap-scroll">
        <div class="text-sec3">
            <img src="images/ico-amenities.svg" alt="Icon Center" class="icon-center">

            <h3>A HOME WITH THE ESSENTIALS</h3>
            <p class="about quiet3">
                Scale by Scale Projects is thoughtfully designed for those who appreciate balance, offering
                essential amenities needed for an elevated way of life.
            </p>
        </div>
    </section>

    <section id="six" class="main  right dark fullscreen section-nap-scroll">
        <div class="Streetscape_image">
            <img src="images/scale-sec6.png" class="amenities-logo">
            <img src="images/SCALI_01_Hero_Streetscape.jpg" alt="Streetscape" width="100%">
        </div>
        <h3 class="amenities">
            <div class="textAmenitties">ENJOY OUR AMENITIES</div>
            <img src="images/amenities.png" alt="Amenities" width="100%">
        </h3>
    </section>

    <div class="invert-on-mobile">
        <section id="seven" class="main  right dark fullscreen section-nap-scroll">
            <div class="left-section7">
                <img src="images/S.png" alt="Imagem S" class="s-sec2">
                <div class="text-logo">
                    YOUR LIFE 
                    <span style="font-family: 'Brinnan-Light'">
                        IN FOCUS. 
                    </span>
                </div>
            </div>
            <div class="right-section7">
                <p class="about quiet4">
                    Whether you're leaving for a weekend trip or coming home from a stressful day at work, your home
                    is your sanctuary
                </p>
                <img src="images/bags_family.png" alt="bags_family" class="bags_family">
                <a href="#nine">
                    <button class="button">REGISTER TODAY</button></a>
            </div>
        </section>

        <section id="eight" class="main  right dark fullscreen section-nap-scroll">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="images/carousel-2/mobile-1.jpg" media="(max-width: 960px)" />
                            <img class="d-block w-100" src="images/carousel-2/SCALI_ST1_15_Vignette_C_GIFT_R1.jpg" alt="Image 1" style="object-position: bottom center;">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="images/carousel-2/mobile-2.jpg" media="(max-width: 960px)" />
                            <img class="d-block w-100" src="images/SCALI_ST1_14_Vignette_B_GIFT_R1.jpg" alt="Image 2">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="images/carousel-2/mobile-3.jpg" media="(max-width: 960px)" />
                            <img class="d-block w-100" src="images/SCALI_ST1_13_Vignette_A_GIFT_R1.jpg" alt="Image 3">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="images/carousel-2/mobile-4.jpg" media="(max-width: 960px)" />
                            <img class="d-block w-100" src="images/carousel-2/SCALI_ST1_01_Hero_Streetscape_view_HIGH.jpg" alt="Image 3">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="images/carousel-2/mobile-5.jpg" media="(max-width: 960px)" />
                            <img class="d-block w-100" src="images/carousel-2/SCALI_ST1_03_Facade_HIGH.jpg" alt="Image 3">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="images/carousel-2/mobile-6.jpg" media="(max-width: 960px)" />
                            <img class="d-block w-100" src="images/carousel-2/SCALI_ST1_02_Hero_Dusk_view_HIGH.jpg" alt="Image 3">
                        </picture>
                    </div>
                </div>

                <div class="navigation">
                    <div class="navigation-button navigation-button-prev swiper-button-prev">
                        <span></span>
                    </div>
                    <div class="navigation-button navigation-button-next swiper-button-next">
                        <span></span>
                    </div>
                </div>
            </div>

            <!-- Logo no canto inferior direito -->
            <div class="your-life-in-focus">
                <img src="images/S.png" alt="Imagem S">
                <div>
                    YOUR LIFE <span> IN FOCUS.</span>
                </div>
            </div>
        </section>
    </div>

    <section id="nine" class="main  right dark fullscreen split-section ">
        <div class="left-half">
        </div>
        <div class="right-half section-nap-scroll">
            <h4>REGISTER TODAY</h4>
            <p class="parag3">Make Scale your new home and enjoy life in balance. Our sales team will reach out to
                you soon with additional information. </p>

            <form action="/send-contact.php" method="post" class="par-form" id="form-contato">
                <label for="fname">First name*</label>
                <input type="text" id="fname" name="fname" class="text-input" required>

                <label for="lname">Last name*</label>
                <input type="text" id="lname" name="lname" class="text-input" required>

                <label for="email">E-mail*</label>
                <input type="email" id="email" name="email" class="text-input" required>

                <label for="phone">Phone*</label>
                <input type="tel" id="phone" name="phone" class="text-input" required>

                <label for="city">City of residence*</label>
                <input type="text" id="city" name="city" class="text-input" required>
                <label for="hearAbout">How did you hear about us?</label>
                <select id="hearAbout" name="hearAbout" class="text-input" required>
                    <option class="text-input10" value=" "> </option>
                    <option class="text-input10" value="Livabl">Livabl</option>
                    <option class="text-input10" value="Facebook/Instagram">Facebook/Instagram</option>
                    <option class="text-input10" value="Google">Google</option>
                    <option class="text-input10" value="Fifth Ave">Fifth Ave</option>
                    <option class="text-input10" value="Newspaper">Newspaper</option>
                    <option class="text-input10" value="Radio">Radio</option>
                    <option class="text-input10" value="Print ads">Print ads</option>
                    <option class="text-input10" value="Signage">Signage</option>
                    <option class="text-input10" value="Realtor">Realtor</option>
                    <option class="text-input10" value="Family/Friends">Family/Friends</option>
                    <option class="text-input10" value="Other">Other</option>
                </select>
                <div class="div-flex text-input" style="align-items: center; padding-right: 15em;">
                    <label for="realtorCheckbox" style="padding-right: 1em;font-weight: bold;font-size: 0.95em;padding-bottom: 0.5em;padding-top: 0.6em;">
                        ARE YOU A REALTOR?</label>
                    <input type="radio" id="yesRealtorCheckbox" name="areYouRealtor" value="yes" class="radio-check">
                    <label for="yesRealtorCheckbox" style="padding-right: 1em;padding-left: 0.3em;">YES</label>
                    <input type="radio" id="noRealtorCheckbox" name="areYouRealtor" value="no" class="radio-check">
                    <label for="noRealtorCheckbox" style="padding-right: 1em;padding-left: 0.3em;">NO</label>
                </div>


                <div class="div-flex text-input">
                    <label for="contact-method" style="padding-right: 1em;font-weight: bold;font-size: 0.95em;padding-bottom: 0.5em;padding-top: 0.6em;">
                        HOW WOULD YOU LIKE <br class="mobile-only">TO BE CONTACTED?</label>

                    <input type="checkbox" id="checkbox-phone" name="contact-method" value="phone">
                    <label for="checkbox-phone" style="padding-right: 1em;padding-left: 0.3em;">Phone</label>

                    <input type="checkbox" id="email" name="contact-method" value="email">
                    <label for="email" style="padding-right: 1em;padding-left: 0.3em;white-space: nowrap;">E-mail</label>

                    <input type="checkbox" id="text" name="contact-method" value="text">
                    <label for="text" style="padding-right: 1em;padding-left: 0.3em;">Text</label>
                </div>

                <div class="consentTerm div-flex">
                    <div class="Checkboxers">
                        <input type="checkbox" id="consentCheckbox" name="agreeToConsent" value="yes" required>
                        <label for="consentCheckbox" class="consentCheck" style="padding-top: 2.1em; padding-left: 0.7em; flex: 1;">
                            Yes, I consent to receiving electronic messages from Scale Projects and Fifth Avenue Real
                            Estate Marketing Ltd. with updates on Scale and other projects that may be of interest
                            to me. If you wish to stop receiving this information at any time, simply check
                            unsubscribe at the bottom of any email received or contact homes@scaleliving.ca with
                            unsubscribe in the subject line.</label>
                    </div>
                </div>

                <div id="form-contato-submit">
                    <button class="form-button g-recaptcha" data-sitekey="6Le-pCchAAAAAFlX37Tk8RIJmuJeIpSJzwy2_p_Y" data-callback="onSubmit">SUBMIT</button>
                    <p id="form-contato-submit-success">
                        Continue to visit our website in the upcoming weeks to get more exciting updates on Scale.
                    </p>
                </div>
            </form>
        </div>

        <div id=" privacy-modal" style="display: none;padding: 2%;width: 44%;top: 44%;left: 25%;">
            <span id="close-modal" onclick="closePrivacyModal()">&times;</span>
            <div id="privacy-content" style="line-height: 1.5em; font-size: 0.78em; letter-spacing: 0.08em;">
                <p>The information you provide will be kept confidential
                    and used only by Fifth Avenue Real Estate Marketing to
                    enhance your home buying experience and the level of
                    service you receive. The members of our Sales Team are
                    all licensed Real Estate Professionals with Fifth Avenue
                    Real Estate Marketing and therefore are unable to provide
                    representation to potential buyers. To learn more about
                    various forms of Realtor representation and the choices
                    available to you, please <a href="javascript:void(0)">click here</a></p>
            </div>
        </div>
    </section>

    <section id="ten" class="main  right dark section-nap-scroll">
        <div class="alin10">
            <p class="text10">
                LIFE IS REAL, AND SO
                ARE SCALE PROJECTS<br>
                <span style="color: white;">
                    REAL PROJECTS<br>
                    FOR REAL PEOPLE.
                </span><br>
                <button type="button" class="dev-button">
                    MORE ABOUT THE DEVELOPER</button>
            </p>

        </div>
        <div class="blue-text-wrapper">
            <p class="blue-text">
                At Scale Projects, we are devoted to cultivating inclusive communities that resonate with authentic
                human connections. We strive to foster a vibrant environment where residents truly feel a sense of
                belonging, where their needs and aspirations are not only acknowledged but woven into the fabric of
                our creations. What sets us apart is our end-to-end approach—from the initial spark of an idea to
                the final touches of completion, all done in-house. This ensures that every detail aligns seamlessly
                with our vision, creating communities that stand as testaments to thoughtful design and genuine
                community engagement.
            </p>
        </div>
    </section>

    <footer id="footer" class="section-nap-scroll">
        <div class="footer-row">
            <div class="side-r">
                <p class="adress">
                    homes@scaleliving.ca
                </p>
            </div>

            <div class="bl-dow">
                <h6 class="BALANCE">BALANCE</h6>
                <h3 class="lifestyle lst">
                    <span style="font-family: 'AddingtonCF-DemiBoldItalic'; font-size: 0.6em;">
                        is a
                    </span>
                    <span style="font-family: 'AddingtonCF-DemiBoldItalic'">
                        lifestyle
                    </span>
                </h3>
            </div>

            <div class="signature">
                <a href="https://fifthave.ca/"><img src="images/Fifth-Ave.png" alt="FIFTH AVU" class="logo-fifth"></a>
                <a href="#intro"><img src="images/logo2.png" alt="logo2" class="logo2down"></a>
            </div>
        </div>

        <div class="footer-row">
            <p class="disclaimer">
                This is not an offering for sale. Any such offering must be made by way of disclosure statement. In our continuing effort to improve and maintain the high standard of the Scale development, the developer reserves the right to modify or change plans, specifications, features and prices without notice. Materials may be substituted with equivalent or better at the developer's sole discretion. All dimensions and sizes are approximate and are based on architectural measurements. Rendering are an artists conception and are intended as a general reference only. E &O.E. Sales and Marketing provided by Fifth Avenue Real Estate Marketing Ltd. 604-583-2212
                <br /><br />
                Copyright &copy; 2023 Scale Projects
                <a href="javascript:void(0)" style="white-space: nowrap; text-decoration: underline;" onclick="openPrivacyModal2()">
                    Privacy Policy
                </a>
            </p>
        </div>
    </footer>

    <div id="privacy-modal2">
        <span id="close-modal" onclick="closePrivacyModal2()">&times;</span>
        <h2 style="font-size: 0.8em; letter-spacing: 0.1em; font-family: 'Brinnan-Bold';">Privacy Policy:
        </h2>
        <hr style="margin-top: 4%;margin-bottom: 5%;border: 0;border-top: 1px solid #0b1b30;">
        <div id="privacy-content" style="font-size: 0.78em; letter-spacing: 0.08em;">
            <p>In our continuing effort to improve and maintain the high standard of the Scale development,
                the developer
                reserves the right to modify or change plans, layouts, specifications, features, including
                appliances, and prices
                without notice. Materials may be substituted with equivalent or better at the developer’s
                sole discretion. All
                dimensions and sizes are approximate and are based on architectural measurements. As
                reverse, flipped
                and/or mirrored plans occur throughout the development please see architectural plans for
                current unit
                layout, if material to your decision to purchase. Illustrations, renderings and marketing
                materials provided are
                an artist’s conception and are intended as a general reference only, all subject to change
                without prior notice
                and not to be relied upon. Please ask one of the helpful sales staff to reference the
                current architectural set
                of construction drawings for the most accurate dimensions and other details at time of sale.
                E.&O.E. Sales &
                Marketing provided by Fifth Avenue Real Estate Marketing Ltd. 604-583-2212</p>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/breakpoints.min.js"></script>
    <script src="./assets/js/main.js"></script>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script src="./assets/js/scripts.js"></script>
<script src="./assets/js/swiper-bundle.min.js"></script>
<script>
    function openPrivacyModal() {
        document.getElementById('privacy-modal').style.display = 'block';
    }

    function closePrivacyModal() {
        document.getElementById('privacy-modal').style.display = 'none';
    }

    function openPrivacyModal2() {
        document.getElementById('privacy-modal2').style.display = 'block';
    }

    function closePrivacyModal2() {
        document.getElementById('privacy-modal2').style.display = 'none';
    }

    function showImage(element, imageSrc) {
        document.getElementById('overlayImage').src = imageSrc;

        // Remove a classe 'active' de todos os itens do menu
        var menuItems = document.querySelectorAll('#menu a');
        menuItems.forEach(item => {
            item.classList.remove('active');
        });

        // Adiciona a classe 'active' ao item clicado
        element.classList.add('active');

        // Retorna false para desabilitar completamente o link
        return false;
    }

    document.querySelector("#content4").addEventListener("click", function() {
        const mobileZoomState = this.getAttribute("data-mobile-zoom") == "true"
        this.setAttribute("data-mobile-zoom", !mobileZoomState)
    })

    /**
     * SLIDERS
     */
    const swiper = new Swiper(".swiper", {
        autoplay: {
            delay: 2000
        },
        loop: true,
        spaceBetween: 0,
        speed: 800,
        centeredSlides: true,
        navigation: {
            nextEl: ".navigation-button-next",
            prevEl: ".navigation-button-prev",
        }
    })
</script>

<?php
require_once __DIR__ . "/templates/footer.php";
?>