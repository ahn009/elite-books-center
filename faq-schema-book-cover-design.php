<?php
/**
 * Elite Books Center - FAQ Schema Implementation
 * File: faq-schema-book-cover-design.php
 * 
 * This file contains the JSON-LD FAQPage schema for book-cover-design.php
 */

$faq_schema = array(
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array(
        // FAQ 1: Why is a professional book cover important?
        array(
            "@type" => "Question",
            "name" => "Why is a professional book cover important?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "A professional book cover is your book's first impression and directly impacts sales: 72% of book purchase decisions are influenced by cover design. Your cover must appeal to your target audience, convey genre and tone, and be eye-catching at thumbnail size (Amazon previews). Elite Book Writers creates covers that increase click-through rates, conversions, and professional credibility."
            )
        ),
        // FAQ 2: How much does professional book cover design cost?
        array(
            "@type" => "Question",
            "name" => "How much does professional book cover design cost?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Professional book cover design costs $300–$2,000+ depending on complexity and designer experience. Template-based designs cost $50–$300; custom original designs cost $500–$2,000. Elite Book Writers offers affordable custom cover design starting at competitive rates, with unlimited revisions, source files, and print-ready formatting included in every package."
            )
        ),
        // FAQ 3: Can I use stock images for my book cover?
        array(
            "@type" => "Question",
            "name" => "Can I use stock images for my book cover?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Yes, stock images are a cost-effective solution for book covers, but they have limitations: many authors use the same images (reducing uniqueness), licensing restrictions apply, and customization is limited. Elite Book Writers combines licensed stock imagery with custom design elements to create covers that are both professional and distinctive, giving your book a unique market position."
            )
        ),
        // FAQ 4: What file formats do I need for print and digital?
        array(
            "@type" => "Question",
            "name" => "What file formats do I need for print and digital publishing?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Digital covers (ebook) require high-resolution JPG or PNG (300 DPI minimum, 1600x2400px). Print covers require PDF with bleeds (0.125 inches on all sides) and proper color space (CMYK for professional printing). Elite Book Writers delivers all required formats: print-ready PDF, digital ebook files, and high-resolution source files for future modifications."
            )
        ),
        // FAQ 5: How long does book cover design take?
        array(
            "@type" => "Question",
            "name" => "How long does book cover design take?",
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => "Standard book cover design typically takes 5–10 business days from brief approval to final files. Rush options are available (3 days) with expedited fees. The timeline includes: initial concepts (2–3 days), your feedback and revisions (2–3 rounds), and final file preparation (1–2 days). Elite Book Writers provides fixed timelines during your consultation."
            )
        )
    )
);

echo '<script type="application/ld+json">' . "\n";
echo json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\n";
echo '</script>' . "\n";
?>
