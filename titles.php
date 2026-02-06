<?php
/**
 * Elite Book Writers - SEO Configuration Controller
 * Dynamically sets page titles, descriptions, and schema markup
 */

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
$current_page = $uri_segments[1] ?? '';

// SEO Configuration Array for All Pages
$seo_config = [
    '' => [
        'title' => 'Online Book Writers | Creative Book Writing Services In USA',
        'description' => 'Get professional book writing services in USA now. Writing a novel is no longer hard, with expert online book writers and book publishing services in the US.',
        'keywords' => 'Book Writing Services, Professional Book Writers, Book Writing Service, Book Writing Company, Book Writers, Online Book Writers, Online Book Writing Services In USA, Best Book Writing Services, Best Book Writing Service, Book Writing Service In USA, Top Book Writing Service, Creative Book Writers, Professional Book Writing Company, Professional Book Writing Expert, USA book writers, Hire Book Writers',
        'canonical' => 'https://elitebookwriters.com/',
        'og_image' => 'https://elitebookwriters.com/assets/images/logo.svg',
        'schema_type' => 'WebPage'
    ],
    'ghost-writing.php' => [
        'title' => 'Professional Ghostwriters | Online Ghostwriting Services',
        'description' => 'Want to write a book? Hire a professional ghostwriter to make your book publishing dream come true. Get professional ghostwriting service in US.',
        'keywords' => 'Online Ghostwriting Service, Online Ghost writing, Online Ghost-Writing Help, Ghostwriting Service in USA, Online Ghost Writers Service, Paying Online Ghost writing, Ghostwriting Service, Ghost Writing Services, Professional Ghostwriters, Online Ghostwriting Company, Online Ghostwriters, Online Ghostwriter for Hire, Hire Ghost Writer, Ghostwriters, Ghost Writers USA, Online Ghostwriting Agency',
        'canonical' => 'https://elitebookwriters.com/ghost-writing.php',
        'og_image' => 'https://elitebookwriters.com/assets/images/logo.svg',
        'schema_type' => 'Service'
    ],
    'book-marketing.php' => [
        'title' => 'Online Book Marketing Services | Best Book Marketing Agency',
        'description' => 'US top book marketing agency for your book publishing. Our book marketing services help interested readers learn more about your book. Start selling more books with the help of a leading book marketing agency.',
        'keywords' => 'Book Marketing Services, Online Book Marketing, Book Marketing Online, Book Marketing Agency, Book Marketing In USA, Online Book Marketing In USA, Book Marketing Service, Online Book Marketing Service, Best Book Marketing Services, Online Book Marketing Company, Best online Book Marketing in USA, Book Marketing Company',
        'canonical' => 'https://elitebookwriters.com/book-marketing.php',
        'og_image' => 'https://elitebookwriters.com/assets/images/logo.svg',
        'schema_type' => 'Service'
    ],
    'book-publishing.php' => [
        'title' => 'Book Publishing Services | Best Ebook Publishing Platform',
        'description' => 'With the help of our book publishing service, get your book published on the Best Ebook Publishing Platform in the US. Get a book publishing service at a low price.',
        'keywords' => 'Book Publishers Online, Online Book Publishers, Online Book Publishing Company, Book Publishing Company, Book Publisher Company, Online Poetry Book Publisher In USA, Book Publishing Services, Online Book Publishing Services, Online Book Publishing Services In USA, Book Publishing Companies In USA, Book Publishing Companies, Book Publishers Near Me, Online Book Publishers Near Me, Book Publishing Agency, online book publishing agency',
        'canonical' => 'https://elitebookwriters.com/book-publishing.php',
        'og_image' => 'https://elitebookwriters.com/assets/images/logo.svg',
        'schema_type' => 'Service'
    ],
    'book-cover-design.php' => [
        'title' => 'Book Cover Design | Elite Book Writers',
        'description' => 'Creative Book Cover Design by professional designers in USA. Get a custom book cover designed to make your book stand out.',
        'keywords' => 'Book Cover Design, Custom Book Cover Design, Professional Book Cover Designer, Book Cover Designs In USA, Professional book cover design, Book Cover Designs USA, Ebook Cover Design, Book Cover Artwork, Custom Cover Design',
        'canonical' => 'https://elitebookwriters.com/book-cover-design.php',
        'og_image' => 'https://elitebookwriters.com/assets/images/logo.svg',
        'schema_type' => 'Service'
    ],
    'about.php' => [
        'title' => 'About Us | Elite Book Writers - Professional Book Writing Services',
        'description' => 'Learn about Elite Book Writers team. We provide professional book writing, ghostwriting, and publishing services with expertise and dedication to authors.',
        'keywords' => 'About Elite Book Writers, Professional Book Writers Team, Book Writing Services Company, Ghostwriting Experts, Book Publishing Services',
        'canonical' => 'https://elitebookwriters.com/about.php',
        'og_image' => 'https://elitebookwriters.com/assets/images/logo.svg',
        'schema_type' => 'AboutPage'
    ],
    'contact.php' => [
        'title' => 'Contact Us | Elite Book Writers',
        'description' => 'Get in touch with Elite Book Writers. Call us at +1 (213) 757-2002 or fill out our contact form for book writing and publishing services.',
        'keywords' => 'Contact Elite Book Writers, Book Writing Services Contact, Ghostwriting Service Contact, Book Publishing Inquiry',
        'canonical' => 'https://elitebookwriters.com/contact.php',
        'og_image' => 'https://elitebookwriters.com/assets/images/logo.svg',
        'schema_type' => 'ContactPage'
    ],
    'testimonials.php' => [
        'title' => 'Client Testimonials | Elite Book Writers',
        'description' => 'Read testimonials from satisfied clients of Elite Book Writers. See how our professional book writing services have helped authors achieve their dreams.',
        'keywords' => 'Elite Book Writers Reviews, Client Testimonials, Book Writing Service Reviews, Ghostwriting Service Reviews',
        'canonical' => 'https://elitebookwriters.com/testimonials.php',
        'og_image' => 'https://elitebookwriters.com/assets/images/logo.svg',
        'schema_type' => 'WebPage'
    ],
    'thank-you.php' => [
        'title' => 'Thank You | Elite Book Writers',
        'description' => 'Thank you for contacting Elite Book Writers. We will get back to you soon with information about our book writing services.',
        'keywords' => 'Thank You, Book Writing Services',
        'canonical' => 'https://elitebookwriters.com/thank-you.php',
        'og_image' => 'https://elitebookwriters.com/assets/images/logo.svg',
        'schema_type' => 'WebPage',
        'robots' => 'noindex, follow'
    ],
    'terms-and-condition.php' => [
        'title' => 'Terms & Conditions | Elite Book Writers',
        'description' => 'Read the terms and conditions for Elite Book Writers services.',
        'keywords' => 'Terms and Conditions, Legal Agreement',
        'canonical' => 'https://elitebookwriters.com/terms-and-condition.php',
        'og_image' => 'https://elitebookwriters.com/assets/images/logo.svg',
        'schema_type' => 'WebPage'
    ],
    'privacy-policy.php' => [
        'title' => 'Privacy Policy | Elite Book Writers',
        'description' => 'Read our privacy policy to understand how Elite Book Writers protects your personal information.',
        'keywords' => 'Privacy Policy, Data Protection',
        'canonical' => 'https://elitebookwriters.com/privacy-policy.php',
        'og_image' => 'https://elitebookwriters.com/assets/images/logo.svg',
        'schema_type' => 'WebPage'
    ]
];

// Get current page config
$page_config = $seo_config[$current_page] ?? $seo_config[''];

// Set SEO variables for header.php
$page_title = $page_config['title'] ?? 'Elite Book Writers';
$meta_description = $page_config['description'] ?? 'Professional book writing, ghostwriting, publishing, marketing, and cover design services in USA';
$meta_keywords = $page_config['keywords'] ?? '';
$canonical_url = $page_config['canonical'] ?? 'https://elitebookwriters.com/';
$og_image = $page_config['og_image'] ?? 'https://elitebookwriters.com/assets/images/logo.svg';
$robots = $page_config['robots'] ?? 'index, follow';
$schema_type = $page_config['schema_type'] ?? 'WebPage';

// Output meta keywords if present
if (!empty($meta_keywords)) {
    echo '<meta name="keywords" content="' . htmlspecialchars($meta_keywords) . '">' . "\n";
}

// Define Service-specific Schema Markup
$schema_markup = [];

// Ghost Writing Service Schema
if ($current_page === 'ghost-writing.php') {
    $schema_markup = [
        "@context" => "https://schema.org",
        "@type" => "Service",
        "name" => "Professional Ghostwriting Services",
        "description" => "Professional ghostwriting services for authors. We provide complete ghostwriting solutions with 100% anonymity.",
        "provider" => [
            "@type" => "Organization",
            "name" => "Elite Book Writers",
            "url" => "https://elitebookwriters.com",
            "logo" => "https://elitebookwriters.com/assets/images/logo.svg",
            "telephone" => "+1-213-757-2002"
        ],
        "serviceType" => "Book Writing",
        "areaServed" => [
            "@type" => "Country",
            "name" => "United States"
        ],
        "priceRange" => "$$"
    ];
}

// Book Publishing Service Schema
elseif ($current_page === 'book-publishing.php') {
    $schema_markup = [
        "@context" => "https://schema.org",
        "@type" => "Service",
        "name" => "Book Publishing Services",
        "description" => "Professional book publishing services to help authors self-publish and distribute their books.",
        "provider" => [
            "@type" => "Organization",
            "name" => "Elite Book Writers",
            "url" => "https://elitebookwriters.com",
            "logo" => "https://elitebookwriters.com/assets/images/logo.svg",
            "telephone" => "+1-213-757-2002"
        ],
        "serviceType" => "Book Publishing",
        "areaServed" => [
            "@type" => "Country",
            "name" => "United States"
        ],
        "priceRange" => "$$"
    ];
}

// Book Marketing Service Schema
elseif ($current_page === 'book-marketing.php') {
    $schema_markup = [
        "@context" => "https://schema.org",
        "@type" => "Service",
        "name" => "Book Marketing Services",
        "description" => "Complete book marketing and promotion services to increase your book sales and reach.",
        "provider" => [
            "@type" => "Organization",
            "name" => "Elite Book Writers",
            "url" => "https://elitebookwriters.com",
            "logo" => "https://elitebookwriters.com/assets/images/logo.svg",
            "telephone" => "+1-213-757-2002"
        ],
        "serviceType" => "Book Marketing",
        "areaServed" => [
            "@type" => "Country",
            "name" => "United States"
        ],
        "priceRange" => "$$"
    ];
}

// Book Cover Design Service Schema
elseif ($current_page === 'book-cover-design.php') {
    $schema_markup = [
        "@context" => "https://schema.org",
        "@type" => "Service",
        "name" => "Professional Book Cover Design",
        "description" => "Professional book cover design services that make your book visually appealing and help attract readers.",
        "provider" => [
            "@type" => "Organization",
            "name" => "Elite Book Writers",
            "url" => "https://elitebookwriters.com",
            "logo" => "https://elitebookwriters.com/assets/images/logo.svg",
            "telephone" => "+1-213-757-2002"
        ],
        "serviceType" => "Design Services",
        "areaServed" => [
            "@type" => "Country",
            "name" => "United States"
        ],
        "priceRange" => "$$"
    ];
}

// Contact Page Schema
elseif ($current_page === 'contact.php') {
    $schema_markup = [
        "@context" => "https://schema.org",
        "@type" => "LocalBusiness",
        "name" => "Elite Book Writers",
        "description" => "Professional book writing, ghostwriting, publishing, and marketing services",
        "url" => "https://elitebookwriters.com",
        "logo" => "https://elitebookwriters.com/assets/images/logo.svg",
        "telephone" => "+1-213-757-2002",
        "email" => "contact@elitebookwriters.com",
        "address" => [
            "@type" => "PostalAddress",
            "addressCountry" => "US"
        ],
        "areaServed" => [
            "@type" => "Country",
            "name" => "United States"
        ],
        "sameAs" => [
            "https://www.facebook.com/elitebookwriters",
            "https://www.twitter.com/elitebookwriters",
            "https://www.linkedin.com/company/elite-book-writers"
        ]
    ];
}

// About Page Schema
elseif ($current_page === 'about.php') {
    $schema_markup = [
        "@context" => "https://schema.org",
        "@type" => "AboutPage",
        "name" => "About Elite Book Writers",
        "description" => "Learn about Elite Book Writers - a professional team dedicated to helping authors succeed",
        "url" => "https://elitebookwriters.com/about.php",
        "publisher" => [
            "@type" => "Organization",
            "name" => "Elite Book Writers",
            "logo" => "https://elitebookwriters.com/assets/images/logo.svg"
        ]
    ];
}

// Homepage BreadcrumbList Schema
if ($current_page === '') {
    $breadcrumb_schema = [
        "@context" => "https://schema.org",
        "@type" => "BreadcrumbList",
        "itemListElement" => [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => "https://elitebookwriters.com/"
            ]
        ]
    ];
}

// Add breadcrumb to all service pages
if (in_array($current_page, ['ghost-writing.php', 'book-publishing.php', 'book-marketing.php', 'book-cover-design.php'])) {
    $breadcrumb_schema = [
        "@context" => "https://schema.org",
        "@type" => "BreadcrumbList",
        "itemListElement" => [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => "https://elitebookwriters.com/"
            ],
            [
                "@type" => "ListItem",
                "position" => 2,
                "name" => $page_title,
                "item" => $canonical_url
            ]
        ]
    ];
}

?>