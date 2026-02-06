<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        // SEO Controller - Define page-specific parameters
        include 'titles.php'; 
        
        // Set default values if not provided by page
        $page_title = $page_title ?? 'Elite Book Writers';
        $meta_description = $meta_description ?? 'Professional book writing, ghostwriting, publishing, marketing, and cover design services in USA';
        $canonical_url = $canonical_url ?? 'https://elitebookwriters.com/';
        $og_image = $og_image ?? 'https://elitebookwriters.com/assets/images/logo.svg';
        $robots = $robots ?? 'index, follow';
    ?>
    
    <!-- Title and Primary Meta Tags -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta name="robots" content="<?php echo htmlspecialchars($robots); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>" />
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
    <meta property="og:site_name" content="Elite Book Writers">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image); ?>">
    
    <!-- Language Alternate -->
    <link rel="alternate" href="<?php echo htmlspecialchars($canonical_url); ?>" hreflang="en-us" />

    <link rel="icon" type="image/x-icon" href="./assets/images/fav-icon.webp">
    <!-- -------------------------------------------------------------------------- -->
    <link rel="stylesheet" href="./assets/style.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=KoHo|Mooli|Poppins' rel='stylesheet'> -->
    <link href='https://fonts.googleapis.com/css?family=Roboto|Poppins' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Lazy Loading for Images -->
    <script src="https://cdn.jsdelivr.net/npm/lazysizes@5.3.2/lazysizes.min.js" async></script>

    <script async src="./assets/slick/slick.min.js"></script>
    <link rel="stylesheet" href="./assets/slick/slick.css">
    <link rel="stylesheet" href="./assets/slick/slick-theme.css">
    
    <!-- Meta Pixel Code -->
            <script>
                ! function(f, b, e, v, n, t, s) {
                    if (f.fbq) return;
                    n = f.fbq = function() {
                        n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq) f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '1137686153904789');
                fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1137686153904789&ev=PageView&noscript=1" /></noscript>
            <!-- End Meta Pixel Code -->
            
            <meta name="google-site-verification" content="tAbnxWrfBmSKC--qIoR3Ako0HGF3nZoQ7ZQT3pjVghQ" />
            
            <!-- Google tag (gtag.js) - Deferred for performance -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1WWDMECKLR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1WWDMECKLR');
</script>

<!-- Google Tag Manager - Deferred for performance -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKM9XGDP');</script>
<!-- End Google Tag Manager -->

<!-- Image Optimization Styles -->
<style>
    /* Optimize image loading for better performance */
    img {
        max-width: 100%;
        height: auto;
        display: block;
    }
    
    /* Lazy loading placeholder styles */
    .lazyload {
        background: #f0f0f0;
    }
    
    /* Prevent layout shift while lazy loading */
    img[data-src] {
        min-height: 1px;
    }
</style>

<!-- JSON-LD Structured Data - Organization Schema (ENTITY CONSISTENCY) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Elite Book Writers",
  "alternateName": "Elite Books Center",
  "url": "https://elitebookwriters.com",
  "logo": "https://elitebookwriters.com/assets/images/logo.svg",
  "description": "Professional book writing services including ghostwriting, publishing, marketing, and book cover design. Award-winning team of expert writers helping authors publish and promote bestselling books.",
  "sameAs": [
    "https://www.facebook.com/elitebookwriterss",
    "https://www.trustpilot.com/review/elitebookwriters.com",
    "https://www.sitejabber.com/reviews/elitebookwriters.com"
  ],
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "contactType": "Customer Service",
      "telephone": "+1 (213) 757-2002",
      "email": "info@elitebookwriters.com",
      "areaServed": "US"
    },
    {
      "@type": "ContactPoint",
      "contactType": "Sales",
      "telephone": "+1 (213) 757-2002",
      "email": "sales@elitebookwriters.com"
    }
  ],
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "2050 Cheshire bridge Rd Ne Apt 1421",
    "addressLocality": "Atlanta",
    "addressRegion": "GA",
    "postalCode": "30324",
    "addressCountry": "US"
  },
  "foundingDate": "2015",
  "priceRange": "$$$",
  "areaServed": {
    "@type": "Country",
    "name": "United States"
  },
  "serviceType": [
    "Ghostwriting",
    "Book Publishing",
    "Book Marketing",
    "Book Cover Design",
    "Book Editing"
  ]
}
</script>

<?php 
// Output service-specific schema
if (!empty($schema_markup)) {
    echo '<script type="application/ld+json">' . json_encode($schema_markup, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
}

// Output breadcrumb schema if available
if (isset($breadcrumb_schema)) {
    echo '<script type="application/ld+json">' . json_encode($breadcrumb_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
}
?>

</head>

<body>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKM9XGDP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- <script src="//code.tidio.co/saoycvlfp9e8thkaav2hg5qdvszpzaxv.js" async></script> -->

    <header>
        <nav class="nav-fixed p-0 ">
            <div class="container-fluid header-up">
                <div class="container ">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-2 col-md-3 col-sm-5 col-xs-5 d-flex justify-content-around align-items-center">
                            <a href="https://elitebookwriters.com/">
                                <img class="logo-img" style="transition: 0.8s ease-in-out;" src="./assets/images/logo.svg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-10 col-md-9 header-btn-large-screen d-flex justify-content-end align-items-center">
                            <a href="tel:+1 (213) 757-2002" class="me-3 header-tel-btn d-flex justify-content-center align-items-center">
                                <!-- <img src="./assets/images/us-flag.svg" class="me-1 us-flag" alt=""> -->
                                <i class="fa-solid fa-phone pe-2"></i>Contact Us
                            </a>
                            <!-- <a href="javascript:;" onclick="document.getElementById('overlayModal').style.display='block'">
                                <button class="header-btn">Get A Quote</button>
                            </a> -->
                            <a href="javascript:;" onclick="document.getElementById('overlayModal').style.display='block'">
                                <button class="header-btn"><span>Get A Quote</span></button>
                            </a>
                        </div>
                        <style>
                            @media screen and (max-width: 767.98px) {
                                .header-btn-large-screen {
                                    display: none !important;
                                }
                            }

                            @media screen and (min-width: 768px) {
                                .header-btn-small-screen {
                                    display: none !important;
                                }
                            }

                            @media screen and (max-width: 345.98px) {
                                .header-down {
                                    display: none !important;
                                }
                            }
                        </style>
                        <div class="col-sm-3 col-xs-5 mobile-nav">
                            <a href="javascript:;" id="open-side-menu" class="burgers"> <i class="fas fa-bars"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid header-down">
                <div class="container ">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-12 header-btn-small-screen d-flex justify-content-around align-items-center">
                            <a href="tel:+1 (213) 757-2002" class="me-3 header-tel-btn d-flex justify-content-center align-items-center">
                                <!-- <button class="header-btn">Get Started</button> -->
                                <!-- <img src="./assets/images/us-flag.svg" class="me-1" alt=""> -->
                                <i class="fa-solid fa-phone pe-2"></i>Contact Us
                            </a>
                            <a href="javascript:;" onclick="document.getElementById('overlayModal').style.display='block'">
                                <button class="header-btn header-down-btn"><span>Get A Quote</span></button>
                            </a>
                        </div>
                        <div class="mx-auto nav-links-ul">
                            <ul class="navigation-list list-unstyled d-flex justify-content-center align-items-center m-0 text-capitalize">
                                <li><a href="https://elitebookwriters.com/" class="text-decoration-none p-3 nav-white">home</a></li>
                                <li class="dropdown">
                                    <a class="text-decoration-none p-3 dropdown-toggle nav-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu large-screen text-uppercase">
                                        <div class="d-flex">
                                            <div class="drop-list-1">
                                                <!-- <li><a class="dropdown-item" href="https://elitebookwriters.com/">Book Writing</a>
                                                </li> -->
                                                <li><a class="dropdown-item" href="ghost-writing.php">Ghost
                                                        Writing</a></li>
                                                <li><a class="dropdown-item" href="book-marketing.php">Book
                                                        Marketing</a>
                                                </li>
                                            </div>
                                            <div>
                                                <li><a class="dropdown-item" href="book-publishing.php">Book
                                                        Publishing</a>
                                                </li>
                                                <li><a class="dropdown-item" href="book-cover-design.php">Book
                                                        Cover
                                                        Design</a></li>
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                                <li><a href="about.php" class="text-decoration-none p-3 nav-white">About</a></li>
                                <li><a href="contact.php" class="text-decoration-none p-3 nav-white">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Mobile View -->

    <div class="side-nav" id="side-nav" style="right:-70%;">
        <ul class="navigation-list list-unstyled m-0 text-capitalize">
            <li><a href="https://elitebookwriters.com/" class="text-decoration-none p-3">home</a></li>
            <li class="dropdown">
                <a class="text-decoration-none p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu text-uppercase">
                    <!-- <li><a class="dropdown-item" href="https://elitebookwriters.com/">Book Writing</a></li> -->
                    <li><a class="dropdown-item" href="ghost-writing.php">Ghost Writing</a></li>
                    <li><a class="dropdown-item" href="book-marketing.php">Book Marketing</a></li>
                    <li><a class="dropdown-item" href="book-publishing.php">Book Publishing</a></li>
                    <li><a class="dropdown-item" href="book-cover-design.php">Book Cover Design</a></li>
                </ul>
            </li>
            <li><a href="about.php" class="text-decoration-none p-3 nav-white">About</a></li>
            <li><a href="contact.php" class="text-decoration-none p-3 nav-white">Contact</a></li>
            <li><a href="tel:+1 (213) 757-2002" class="header-tel-btn d-flex justify-content-center align-items-center">
                    <!-- <img src="./assets/images/us-flag.svg" class="me-1" alt=""> -->
                    <i class="fa-solid fa-phone pe-2"></i>Contact Us
                </a></li>
            <li><a class="d-flex justify-content-center align-items-center" href="javascript:;" onclick="document.getElementById('overlayModal').style.display='block'">
                    <button class="header-btn header-down-btn"><span>Get A Quote</span></button>
                </a></li>
        </ul>
    </div>

    <div class="side-nav-overlay overlayb"></div>

    <!-- Mobile View End -->

    <?php include 'whatsapp.php'; ?>

    <!-- Header End -->