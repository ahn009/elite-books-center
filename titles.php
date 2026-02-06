<?php

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
?>

<?php if ($uri_segments[1] == '') { ?>

    <title>Online Book Writers | Creative Book Writing Services In USA</title>
     <meta name="description" content="Get professional book writing services in USA now. Writing a novel is no longer hard, with expert online book writers and book publishing services in the US."> 
     <meta name="Keywords" content="Book Writing Services, Professional Book Writers, Book Writing Service, Book Writing Company, Book Writers, Online Book Writers, Online Book Writing Services In USA, Best Book Writing Services, Best Book Writing Service, Book Writing Service In USA, Top Book Writing Service, Creative Book Writers, Professional Book Writing Company, Professional Book Writing Expert, USA book writers, Take My Book Writing, Do My Book Writing, Pay For To Take My Book Writing, Pay To Take My Book Writing, Hire Book Writers"> 
    <link rel="canonical" href="https://elitebookwriters.com/" />
    <link rel="alternate" href="https://elitebookwriters.com/" hreflang="en-us" />

<?php } else if ($uri_segments[1] == 'ghost-writing.php') { ?>

    <title>Professional Ghostwriters | Online Ghostwriting Services</title>
     <meta name="description" content="Want to write a book? Hire a professional ghostwriter to make your book publishing dream come true. Get professional ghostwriting service in US."> 
     <meta name="Keywords" content="Online Ghostwriting Service, Online Ghost writing, Online Ghost-Writing Help, Ghostwriting Service in USA, Online Ghost Writers Service, Online Ghost Writers Service In USA, Paying Online Ghost writing, Pay To Take My Online Ghost writing, Ghostwriting Service, Ghost Writing Services, Ghost Writing, Professional Ghostwriters, Online Ghostwriting Company, Online Ghostwriters, Online Ghostwriter for Hire, Hire Ghost Writer, Hire Ghost Writers, Professional Ghostwriters, Ghostwriters, Ghost Writers USA, Online Ghostwriting Agency, Online Ghostwriting Agency In USA"> 
    <link rel="canonical" href="https://elitebookwriters.com/ghost-writing.php" />
    <link rel="alternate" href="https://elitebookwriters.com/ghost-writing.php" hreflang="en-us" />

<?php } else if ($uri_segments[1] == 'book-marketing.php') { ?>

    <title>Online Book Marketing Services | Best Book Marketing Agency</title>
     <meta name="description" content="US top book marketing agency for your book publishing. Our book marketing services help interested readers learn more about your book.  Start selling more books with the help of a leading book marketing agency."> 
     <meta name="Keywords" content="Book Marketing Services, Online Book Marketing, Book Marketing Online, Book Marketing Agency, Book Marketing In USA, Online Book Marketing In USA, Book Marketing, Book Marketing Service, Online Book Marketing Service, Best Book Marketing Services, Online Book Marketing Company, Best Book Marketing, Best online Book Marketing, Best online Book Marketing in USA, Book Marketing Company"> 
    <link rel="canonical" href="https://elitebookwriters.com/book-marketing.php" />
    <link rel="alternate" href="https://elitebookwriters.com/book-marketing.php" hreflang="en-us" />

<?php } else if ($uri_segments[1] == 'book-publishing.php') { ?>

    <title>Book Publishing Services | Best Ebook Publishing Platform</title>
     <meta name="description" content="With the help of our book publishing service, get your book published on the Best Ebook Publishing Platform in the US. Get a book publishing service at a low price."> 
     <meta name="Keywords" content="Book Publishers Online, Online Book Publishers, Online Book Publishing Company, Book Publishing Company, Book Publisher Company, Online Poetry Book Publisher In USA, Online Poetry Book Publisher In California, Book Publishing Services, Online Book Publishing Services, Online Book Publishing Services In USA, Online Book Publishing Services In California, Book Publishing Companies In USA, Book Publishing Companies, Book Publishers Near Me, Online Book Publishers Near Me, Book Publishing Agency, online book publishing agency"> 
    <link rel="canonical" href="https://elitebookwriters.com/book-publishing.php" />
    <link rel="alternate" href="https://elitebookwriters.com/book-publishing.php" hreflang="en-us" />

<?php } else if ($uri_segments[1] == 'book-cover-design.php') { ?>

    <title>Book Cover Design | Elite Book Writers</title>
     <meta name="description" content="Creative Book Cover Design | Book Cover Designs In USA"> 
     <meta name="Keywords" content="With our expert design professional and creative book cover designs for your book. Get a custom book cover designed by professional designers."> 
    <link rel="canonical" href="https://elitebookwriters.com/book-cover-design.php" />
    <link rel="alternate" href="https://elitebookwriters.com/book-cover-design.php" hreflang="en-us" />

<?php } else if ($uri_segments[1] == 'about.php') { ?>

    <title>About Us | Elite Book Writers</title>
    <link rel="canonical" href="https://elitebookwriters.com/about.php" />
    <link rel="alternate" href="https://elitebookwriters.com/about.php" hreflang="en-us" />

<?php } else if ($uri_segments[1] == 'terms-and-condition.php') { ?>

    <title>Terms & Condition | Elite Book Writers</title>
    <link rel="canonical" href="https://elitebookwriters.com/terms-and-condition.php" />
    <link rel="alternate" href="https://elitebookwriters.com/terms-and-condition.php" hreflang="en-us" />

<?php } else if ($uri_segments[1] == 'thank-you.php') { ?>

    <title>Thank You | Elite Book Writers</title>
    <link rel="canonical" href="https://elitebookwriters.com/thank-you.php" />
    <link rel="alternate" href="https://elitebookwriters.com/thank-you.php" hreflang="en-us" />

<?php } else if ($uri_segments[1] == 'contact.php') { ?>

    <title>Contact Us | Elite Book Writers</title>
    <link rel="canonical" href="https://elitebookwriters.com/contact.php" />
    <link rel="alternate" href="https://elitebookwriters.com/contact.php" hreflang="en-us" />

<?php } ?>