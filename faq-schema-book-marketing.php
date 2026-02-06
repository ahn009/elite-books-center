<?php
/**
 * Elite Books Center - FAQ Schema Implementation
 * File: faq-schema-book-marketing.php
 * 
 * This file contains the JSON-LD FAQPage schema for book-marketing.php
 */

$faq_schema = array(
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array(
        // FAQ 1: What is book marketing?
        array(
            "@type" => "Question",
            "name" => "What is book marketing and why is it important?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Book marketing is the strategic promotion of your published book to reach target readers, build an audience, and increase sales. Most published books fail commercially not because of poor writing, but because of poor marketing. Elite Book Writers provides comprehensive marketing strategies including social media promotion, paid advertising, Amazon optimization, review generation, and author platform building."
            )
        ),
        // FAQ 2: How do I get my book to sell more copies?
        array(
            "@type" => "Question",
            "name" => "How do I get my book to sell more copies?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Book sales increase through: Amazon optimization (keywords, categories, description, pricing), paid advertising (Amazon Ads, Facebook, BookBaby), reviews and social proof (Goodreads, Amazon), media coverage (podcasts, blogs, press releases), and audience building (email list, social media). Elite Book Writers specializes in post-publication marketing strategies designed to maximize visibility and drive consistent sales."
            )
        ),
        // FAQ 3: How much does book marketing cost?
        array(
            "@type" => "Question",
            "name" => "How much does book marketing cost?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Book marketing services range from $500–$10,000+ depending on scope: basic Amazon optimization ($500–$1,000), social media marketing ($500–$2,000/month), paid advertising campaigns ($500–$5,000+), and comprehensive marketing plans ($2,000–$10,000+). Elite Book Writers offers flexible, customizable marketing packages to fit any budget and book type, with transparent ROI tracking."
            )
        ),
        // FAQ 4: Can I market my self-published book cheaply?
        array(
            "@type" => "Question",
            "name" => "Can I market my self-published book cheaply?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Yes, grassroots marketing is possible with time investment: building an email list, creating author social media accounts, requesting reviews, and leveraging your network costs nothing. Paid advertising can start as low as $100/month. Elite Book Writers helps authors combine low-cost and paid strategies for maximum impact. The key is consistency and smart targeting."
            )
        ),
        // FAQ 5: How long does it take to see book sales results?
        array(
            "@type" => "Question",
            "name" => "How long does it take to see book sales results from marketing?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Results vary: Amazon algorithm changes may show results within 2–4 weeks; paid advertising shows immediate impressions but requires 3–6 months of consistent campaigns for sustained ROI; organic marketing (social media, reviews) builds gradually over months to years. Elite Book Writers recommends a minimum 3–6 month commitment to any marketing strategy. Bestseller status typically requires 6–12 months of sustained effort."
            )
        )
    )
);

echo '<script type="application/ld+json">' . "\n";
echo json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\n";
echo '</script>' . "\n";
?>
