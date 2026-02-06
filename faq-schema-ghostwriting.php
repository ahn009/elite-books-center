<?php
/**
 * Elite Books Center - FAQ Schema Implementation
 * File: faq-schema-ghostwriting.php
 * 
 * This file contains the JSON-LD FAQPage schema for ghost-writing.php
 * Include this in the <head> section of ghost-writing.php
 * 
 * Usage:
 * 1. Add this line in ghost-writing.php right after the opening <head> tag:
 *    <?php include 'faq-schema-ghostwriting.php'; ?>
 * 
 * 2. Validate at: https://validator.schema.org/
 * 3. Monitor in Google Search Console for rich results
 */

// FAQPage Schema - Ghost Writing
$faq_schema = array(
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array(
        // FAQ 1: Is ghostwriting legal?
        array(
            "@type" => "Question",
            "name" => "Is ghostwriting legal?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Yes, ghostwriting is completely legal and is a standard, widely-accepted practice across the publishing industry, entertainment, and professional sectors. Ghostwriters retain anonymity by legal agreement. The author maintains full copyright and ownership of the work product. Ghostwriting has been used for centuries and is regulated by professional writing associations, including the Authors Guild and the National Writers Union."
            )
        ),
        // FAQ 2: Who owns the copyright in ghostwriting?
        array(
            "@type" => "Question",
            "name" => "Who owns the copyright in ghostwriting?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "The author (client) owns 100% of the copyright and intellectual property rights to the completed manuscript—the ghostwriter's contribution is contractually anonymous and uncompensated beyond the agreed fee. This is established through a work-for-hire agreement. The ghostwriter waives all future claims to royalties, reprints, or attribution. The author can sell, republish, modify, or license the work without additional ghostwriter involvement or compensation."
            )
        ),
        // FAQ 3: Can I publish a ghostwritten book on Amazon?
        array(
            "@type" => "Question",
            "name" => "Can I publish a ghostwritten book on Amazon?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Yes, you can publish a ghostwritten book on Amazon and all other major platforms (KDP, IngramSpark, Apple Books, Google Play, etc.) without disclosing that it was ghostwritten. You publish under your own name as the author. Many bestselling authors use ghostwriters, and it's a standard practice in both self-publishing and traditional publishing. Amazon's guidelines do not require disclosure of ghostwriting services."
            )
        ),
        // FAQ 4: How much does professional ghostwriting cost?
        array(
            "@type" => "Question",
            "name" => "How much does professional ghostwriting cost?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Professional ghostwriting typically costs between $5,000–$50,000+ depending on manuscript length, genre, research complexity, and writer expertise. Elite Book Writers offers customizable bundles starting at competitive rates with transparent pricing. Costs vary based on word count (typically 40,000–100,000 words for a book), timeline (rush projects cost more), and specialization such as fiction, non-fiction, memoirs, or academic writing."
            )
        ),
        // FAQ 5: How long does ghostwriting take?
        array(
            "@type" => "Question",
            "name" => "How long does ghostwriting take?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Professional ghostwriting typically takes 3–12 months depending on the manuscript length, complexity, research requirements, and revision cycles. A standard 60,000-word book with moderate research usually requires 4–6 months. Complex projects (academic, technical, heavily researched) may take longer. Elite Book Writers provides estimated timelines during the consultation phase, and rush options are available with adjusted pricing."
            )
        )
    )
);

// Output as JSON-LD script tag
echo '<script type="application/ld+json">' . "\n";
echo json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\n";
echo '</script>' . "\n";
?>
