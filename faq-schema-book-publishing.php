<?php
/**
 * Elite Books Center - FAQ Schema Implementation
 * File: faq-schema-book-publishing.php
 * 
 * This file contains the JSON-LD FAQPage schema for book-publishing.php
 * Include this in the <head> section of book-publishing.php
 */

$faq_schema = array(
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array(
        // FAQ 1: What is self-publishing?
        array(
            "@type" => "Question",
            "name" => "What is self-publishing and how does it work?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Self-publishing means you as the author retain complete control over your book's production, distribution, and marketing without going through a traditional publishing house. You own all rights, all royalties, and make all creative decisions. Elite Book Writers handles the complete process: manuscript formatting, cover design, ISBN assignment, and distribution to major retailers like Amazon, IngramSpark, and Apple Books."
            )
        ),
        // FAQ 2: How much does it cost to self-publish a book?
        array(
            "@type" => "Question",
            "name" => "How much does it cost to self-publish a book?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Self-publishing costs range from $500–$5,000+ depending on services needed: professional editing ($500–$2,000), cover design ($200–$1,000), ISBN ($20–$100), and distribution setup (free to $500). Elite Book Writers offers all-inclusive publishing bundles with transparent pricing that combines ghostwriting, editing, cover design, ISBN, and distribution into one affordable package."
            )
        ),
        // FAQ 3: Can I get my self-published book into bookstores?
        array(
            "@type" => "Question",
            "name" => "Can I get my self-published book into bookstores?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Yes, self-published books can be distributed to major bookstores (Barnes & Noble, independent retailers) through distribution networks like IngramSpark and Bookbaby. Placement in physical bookstores is possible but requires professional formatting, ISBN assignment, and proper marketing. Digital distribution to Amazon Kindle, Apple Books, and Google Play is easier and faster. Elite Book Writers handles all distribution logistics."
            )
        ),
        // FAQ 4: How long does the publishing process take?
        array(
            "@type" => "Question",
            "name" => "How long does the publishing process take?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "The publishing timeline depends on your manuscript's readiness: if your manuscript is complete and edited, publishing to Amazon KDP takes 3–7 days; full print distribution takes 2–4 weeks. If you're starting from scratch with ghostwriting included, the total timeline is 4–12 months. Elite Book Writers provides expedited options for faster publication when needed."
            )
        ),
        // FAQ 5: Do I need an ISBN for self-publishing?
        array(
            "@type" => "Question",
            "name" => "Do I need an ISBN for self-publishing?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "An ISBN (International Standard Book Number) is required for print books and distribution to bookstores, but is optional for ebooks published exclusively on Amazon Kindle. ISBNs cost $20–$100 per book. Elite Book Writers is an authorized US ISBN provider and includes discounted ISBNs in our publishing packages, ensuring your book is properly registered and discoverable globally."
            )
        )
    )
);

echo '<script type="application/ld+json">' . "\n";
echo json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\n";
echo '</script>' . "\n";
?>
