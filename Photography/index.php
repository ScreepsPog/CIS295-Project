<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $pagetitle = 'Esports & Portrait Photography | PixelStrike Photography'; $description = 'PixelStrike Photography specializes in esports and portrait photography, capturing dynamic moments and stunning portraits with creativity and precision.'; include 'inc/head-info.inc'; ?>
        <link rel="stylesheet" href="styles/index.css">
    </head>
    <body>
        <div id="top" class="bodyContainer">
            <?php include 'inc/header.inc'; ?>
            <button id="themeToggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24" fill="none">
                    <!-- Vertical & Horizontal Lines -->
                    <path d="M12 3V6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 18V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18 12H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 12H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    
                    <!-- Evenly Aligned 45-degree Angled Lines -->
                    <path d="M16.97 7.03L19.07 4.93" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4.93 19.07L7.03 16.97" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.97 16.97L19.07 19.07" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4.93 4.93L7.03 7.03" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <div class="heroImageContainer hImg">
                <div class="heroImageOverlay"><h1>You See It</h1><br><h2>We Capture It</h2></div>
            </div>
            <div class="divider"></div>
            <div class="contentHeaderContainer">
                <h1>Capturing Moments, Telling Stories</h1>
                <p>At PixelStrike Photography, we don't just take pictures - we capture the essence of every moment. From the excitement of esports tournaments to the depth of portrait photography, our team is dedicated to preserving your most important memories with precision and creativity. Explore our work and see how we bring your vision to life.</p>
            </div>
            <div class="galleryContainer">
                <div class="galleryBlock">
                    <a href="images/gImg1.jpg"><img src="images/gImg1.jpg" alt=""></a>
                </div>
                <div class="galleryBlock">
                <a href="images/gImg2.jpg"><img src="images/gImg2.jpg" alt=""></a>
                </div>
                <div class="galleryBlock">
                <a href="images/gImg3.jpg"><img src="images/gImg3.jpg" alt=""></a>
                </div>
                <div class="galleryBlock">
                <a href="images/gImg4.jpg"><img src="images/gImg4.jpg" alt=""></a>
                </div>
                <div class="galleryBlock">
                <a href="images/gImg5.jpg"><img src="images/gImg5.jpg" alt=""></a>
                </div>
                <div class="galleryBlock">
                <a href="images/gImg6.jpg"><img src="images/gImg6.jpg" alt=""></a>
                </div>
            </div>
            <div class="employeerHeaderContainer">
                <div class="employeerHeaderOverlay">
                    <p>Employer Reviews</p>
                </div>
            </div>
            <div class="employeerContentContainer">
                <div class="employeerRev">
                    <div class="employeerRevHeader">
                        <div class="employeerRevPhoto eImg1"></div>
                        <div class="employeerRevName">
                            <p>Riot Games</p>
                        </div>
                        <div class="employeerRevScore"><p class="stars5">★★★★★</p></div>
                    </div>
                    <div class="employeerRevText">
                        <p>PixelStrike Photography did an incredible job capturing our esports tournament. The photos were high-quality and truly captured the intensity of the event. Highly recommend!</p>
                    </div>
                </div>
                <div class="employeerRev">
                    <div class="employeerRevHeader">
                        <div class="employeerRevPhoto eImg2"></div>
                        <div class="employeerRevName">
                            <p>Blast</p>
                        </div>
                        <div class="employeerRevScore"><p class="stars5">★★★★★</p></div>
                    </div>
                    <div class="employeerRevText">
                        <p>I hired PixelStrike for a portrait session, and the results were amazing. The team made me feel comfortable and delivered photos that exceeded my expectations!</p>
                    </div>
                </div>
                <div class="employeerRev">
                    <div class="employeerRevHeader">
                        <div class="employeerRevPhoto eImg3"></div>
                        <div class="employeerRevName">
                            <p>ESL</p>
                        </div>
                        <div class="employeerRevScore"><p class="stars4-5">★★★★★</p></div>
                    </div>
                    <div class="employeerRevText">
                        <p>The photos were fantastic, but there was a slight delay with the editing process. Still, the final images were worth the wait, and I'm beyond happy with them!</p>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="contactHeaderContainer">
                <div class="contactHeaderOverlay">
                    <h3>Capture Your Moment!</h3>
                </div>
            </div>
            <div class="contactContentContainer">
                <p>Our skilled photographers are ready to capture your best moments and bring your vision to life! We are excited to help you take your next step and create stunning images that tell your story!</p>
                <div class="contactContentBoxesContainer">
                    <div class="contactContentBox">
                        <p>Get in Touch</p>
                        <ul>
                            <li>Location: <a href="http://maps.google.com/?q=123 Main St, Bend OR, 97703" target="_blank">123 Main St, Bend OR, 97703</a></li>
                            <li>Phone: <a href="tel:555-555-555">(555) 555 - 5555</a></li>
                            <li>Email: <a href="mailto:contact@pixelstrike.com">contact@pixelstrike.com</a></li>
                        </ul>
                    </div>
                    <div class="contactContentBox">
                        <p>Business Hours: </p>
                        <ul>
                            <li>Monday - Friday: 7:00 AM - 7:00 PM </li>
                            <li>Saturday: 8:00 AM - 3:00 PM</li>
                            <li>Sunday: Closed</li>
                        </ul>
                    </div>
                </div>
                <div class="contactCTAButton">
                    <a href="contact">Schedule Today</a>
                </div>
            </div>
            <?php include 'inc/footer.inc'; ?>
            <script src="scripts/lightdark.js"></script>
        </div>
        <script>
            // Currently have this disabled because it causes some lag when scrolling due to images.
            /* This is optional but I found it makes the site feel really nice when scrolling through it. This just changes the size of the header based on where the user is on the page.
            window.addEventListener('scroll', () => {
            const header = document.querySelector('.headerContainer');
            const headerContent = document.querySelector('.headerContentContainer');

            if (window.scrollY > 50) {
                header.classList.add('shrink');
                headerContent.classList.add('shrinkContent');
            } else {
                header.classList.remove('shrink');
                headerContent.classList.remove('shrinkContent');
            }
        });
        */
            // This is also completely optional, but this is just an alternative of using href and having the URL change based on the tag. This prevents that while doing the same function.
        </script>
    </body>
</html>