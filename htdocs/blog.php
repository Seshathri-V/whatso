<?php 
 include 'lib/template.class.php';
 $template= new Template();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php $template->load_template('template','head');?>
</head>

<body class="blog-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logoapp.webp" alt="">
        <h1 class="sitename">Whatso</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html">Home<br></a></li>
        <!--  <li><a href="#portfolio">Portfolio</a></li>-->
        <li><a href="blog.html" class="active">Blog</a></li>
        <li><a href="blog-details.html">B-Details</a></li>
        <li><a href="service-details.html">Services</a></li>
          <li><a href="#team">Team</a></li>
          
        <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li class="listing-dropdown"><a href="#"><span>Listing Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li>
                <a href="#">Column 1 link 1</a>
                <a href="#">Column 1 link 2</a>
                <a href="#">Column 1 link 3</a>
              </li>
              <li>
                <a href="#">Column 2 link 1</a>
                <a href="#">Column 2 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 3 link 1</a>
                <a href="#">Column 3 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 4 link 1</a>
                <a href="#">Column 4 link 2</a>
                <a href="#">Column 4 link 3</a>
              </li>
              <li>
                <a href="#">Column 5 link 1</a>
                <a href="#">Column 5 link 2</a>
                <a href="#">Column 5 link 3</a>
              </li>
            </ul>
          </li>-->
        <!--  <li><a href="#nh">Contact</a></li>-->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted flex-md-shrink-0" href="index.html#about">Get Started</a>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Blog</h1>
              <p class="mb-0">Explore a treasure trove of well-curated resources designed to give you deep insights into emerging trends. Stay informed with expertly crafted materials that decode the latest industry shifts. Gain a holistic understanding of whats shaping the future.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Blog</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Posts Section -->
          <section id="blog-posts" class="blog-posts section">

            <div class="container">

              <div class="row gy-4">

                <div class="col-12">
                  <article>

                    <div class="post-img">
                      <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                    </div>

                    <h2 class="title">
                      <a href="blog-details.html">If you're looking to enhance customer engagement and boost sales using WhatsApp marketing</a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">sesha</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2025-01-01">march 1, 2025</time></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">15 Comments</a></li>
                      </ul>
                    </div>

                    <div class="content">
                      <p>
                        WhatsApp has become a powerful marketing tool, allowing businesses to directly engage with customers, build relationships, and drive sales. With over 2 billion users worldwide, WhatsApp offers a personal and instant way to interact with potential and existing customers.</p>

                      <div class="read-more">
                        <a href="blog-details.html">Read More</a>
                      </div>
                    </div>

                  </article>
                </div><!-- End post list item -->

                <div class="col-12">

                  <article>

                    <div class="post-img">
                      <img src="assets/img/blog1.jpeg" alt="" class="img-fluid">
                    </div>

                    <h2 class="title">
                      <a href="blog-details.html">Benifits and Projects to Marketing</a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Sasi</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2025-03-01">Jan 1, 2022</time></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">10 Comments</a></li>
                      </ul>
                    </div>

                    <div class="content">
                      <p>
                        1. Direct Customer Engagement<br>
                        ✅ WhatsApp messages have an open rate of 98%, ensuring high visibility.
                        ✅ Messages are delivered instantly, increasing response rates.<br>
                        
                        2. Cost-Effective Marketing Solution<br>
                        ✅ No need for expensive SMS or email marketing tools.
                        ✅ Bulk messaging reduces the cost of customer outreach.<br>
                        
                        3. Automation & Efficiency<br>
                        ✅ Schedule messages in advance for automated campaigns & follow-ups.
                        ✅ Send personalized messages without manual effort.</p>
                      <div class="read-more">
                        <a href="blog-details.html">Read More</a>
                      </div>
                    </div>

                  </article>

                </div><!-- End post list item -->

                <div class="col-12">

                  <article>

                    <div class="post-img">
                      <img src="assets/img/blog2.webp" alt="" class="img-fluid">
                    </div>

                    <h2 class="title">
                      <a href="blog-details.html">Projects are done recently</a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Savitha</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2025-04-01">Jan 1, 2022</time></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                      </ul>
                    </div>

                    <div class="content">
                      <p>
                        📌 1. Promotional Campaigns<br>
                              Send bulk messages with discount offers, product launches, or sales updates.
                            Example: "Flash Sale! Get 20% off all products for the next 24 hours. Shop now!"<br>
                            📌 2. Customer Retention Campaigns<br>
                           Send loyalty rewards, thank-you messages, and follow-ups.
                           Example: "Hi [Name], thanks for your purchase! Here's a 10% discount for your next order."<br>
                           📌 3. Lead Generation & Nurturing<br>
                           Collect leads via WhatsApp opt-ins and nurture them with valuable content.
                           Example: "Join our exclusive WhatsApp list for the latest fashion trends & special discounts!"<br>
                      </p>
                      <div class="read-more">
                        <a href="blog-details.html">Read More</a>
                      </div>
                    </div>

                  </article>

                </div>
                <!-- End post list item -->

                <div class="col-12">

                  <article>

                    <div class="post-img">
                      <img src="assets/img/blog/blog-4.jpg" alt="" class="img-fluid">
                    </div>

                    <h2 class="title">
                      <a href="blog-details.html">Marketing </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Basha</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2025-04-01">Jan 1, 2022</time></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">8 Comments</a></li>
                      </ul>
                    </div>

                    <div class="content">
                      <p>1. Enhanced Customer Support<br>
                        ✅ Provide instant replies using chatbots or pre-set templates.
                        ✅ Automate responses for FAQs, order tracking, and complaints.<br>
                        
                        2. Higher Conversion Rates<br>
                        ✅ Send targeted offers and discounts based on customer behavior.
                        ✅ Create urgency with limited-time deals and flash sales.<br>
                        
                        3. Secure & Trusted Communication<br>
                        ✅ End-to-end encryption ensures data privacy.
                        ✅ More trusted than email marketing, reducing the risk of spam.<br>
                      </p>
                      <div class="read-more">
                        <a href="blog-details.html">Read More</a>
                      </div>
                    </div>

                  </article>

                </div><!-- End post list item -->

              </div><!-- End blog posts list -->

            </div>

          </section><!-- /Blog Posts Section -->

          <!-- Blog Pagination Section -->
          <section id="blog-pagination" class="blog-pagination section">

            <div class="container">
              <div class="d-flex justify-content-center">
                <ul>
                  <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#" class="active">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li>...</li>
                  <li><a href="#">10</a></li>
                  <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                </ul>
              </div>
            </div>

          </section><!-- /Blog Pagination Section -->

        </div>

        <div class="col-lg-4 sidebar">

          <div class="widgets-container">

            <!-- Search Widget -->
            <div class="search-widget widget-item">

              <h3 class="widget-title">Search</h3>
              <form action="">
                <input type="text">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
              </form>

            </div><!--/Search Widget -->

            <!-- Categories Widget -->
            <div class="categories-widget widget-item">

              <h3 class="widget-title">Categories</h3>
              <ul class="mt-3">
                <li><a href="#">General <span>(25)</span></a></li>
                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(5)</span></a></li>
                <li><a href="#">Design <span>(22)</span></a></li>
                <li><a href="#">Creative <span>(8)</span></a></li>
                <li><a href="#">Educaion <span>(14)</span></a></li>
              </ul>

            </div><!--/Categories Widget -->

            <!-- Recent Posts Widget -->
            <div class="recent-posts-widget widget-item">

              <h3 class="widget-title">Recent Posts</h3>

              <div class="post-item">
                <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                <div>
                  <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
              </div><!-- End recent post item-->

              <div class="post-item">
                <img src="assets/img/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
                <div>
                  <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
              </div><!-- End recent post item-->

              <div class="post-item">
                <img src="assets/img/blog/blog-recent-3.jpg" alt="" class="flex-shrink-0">
                <div>
                  <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
              </div><!-- End recent post item-->

              <div class="post-item">
                <img src="assets/img/blog/blog-recent-4.jpg" alt="" class="flex-shrink-0">
                <div>
                  <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
              </div><!-- End recent post item-->

              <div class="post-item">
                <img src="assets/img/blog/blog-recent-5.jpg" alt="" class="flex-shrink-0">
                <div>
                  <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
              </div><!-- End recent post item-->

            </div><!--/Recent Posts Widget -->

            <!-- Tags Widget -->
            <div class="tags-widget widget-item">

              <h3 class="widget-title">Tags</h3>
              <ul>
                <li><a href="#">App</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Message</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Office</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Studio</a></li>
                <li><a href="#">Smart</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
              </ul>

            </div><!--/Tags Widget -->

          </div>

        </div>

      </div>
    </div>

  </main>

  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Whatso</span>
          </a>
          <div class="footer-contact pt-3">
            <p>9/14,Ashoknager</p>
            <p>Chennai City</p>
            <p>Pin-600083</p>
            <p>Tamilnadu</p>
            <p class="mt-3"><strong>Phone:</strong> <span>9344466568</span></p>
            <p><strong>Email:</strong> <span>memecreatorsuniverso@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Whatso</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">Seshathri</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>