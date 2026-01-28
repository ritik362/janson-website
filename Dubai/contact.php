<?php $page_title = "Contact Us | Glass Partition & Architectural Hardware Manufacturers in Dubai";
$description = "Get in touch with leading glass partition and architectural hardware manufacturers in Dubai. Contact us for sliding partitions, glass fittings, shower hinges, patch fittings, spider fittings, floor springs, and telescopic channels.";
$keyword = "Contact glass fittings manufacturer Dubai,Glass Partition supplier Dubai,Sliding system supplier Dubai,Patch Fitting supplier Dubai,Shower hinge supplier Dubai,Architectural hardware contact Dubai,Glass fittings dealer Dubai";
include('header.php') ?>
<style>
    :root {
    --primary-color: #121212;
    --primary-light: #1E1E1E;
    --secondary-color: #C6A98C;
    --text-color: #E0E0E0;
    --text-heading: #FFFFFF;
    --border-color: #333333;
    --font-primary: 'Poppins', sans-serif;
    --border-radius-main: 5px;
    --shadow-medium: 0 8px 25px rgba(0, 0, 0, 0.4);
    --transition-speed: 0.35s;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: var(--font-primary);
}

body {
    background: var(--primary-color);
    color: var(--text-color);
}

.contact-section {
    padding: 80px 20px;
}

.container {
    max-width: 1200px;
    margin: auto;
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-header h1 {
    font-size: 40px;
    color: var(--text-heading);
}

.section-header p {
    opacity: 0.8;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}

.contact-card {
    background: var(--primary-light);
    padding: 35px;
    border-radius: var(--border-radius-main);
    box-shadow: var(--shadow-medium);
    border: 1px solid var(--border-color);
}

.contact-card h2 {
    color: var(--secondary-color);
    margin-bottom: 25px;
}

.info-item {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
}

.map-box iframe {
    width: 100%;
    height: 250px;
    border-radius: var(--border-radius-main);
    border: none;
    margin-top: 20px;
}

/* FORM */
form input,
form textarea {
    width: 100%;
    padding: 14px;
    margin-bottom: 15px;
    background: transparent;
    border: 1px solid var(--border-color);
    color: var(--text-color);
    border-radius: var(--border-radius-main);
}

form textarea {
    height: 120px;
    resize: none;
}

form button {
    width: 100%;
    padding: 14px;
    background: var(--secondary-color);
    color: #000;
    border: none;
    font-weight: 600;
    cursor: pointer;
    border-radius: var(--border-radius-main);
    transition: var(--transition-speed);
}

form button:hover {
    background: #b99775;
}

/* Responsive */
@media (max-width: 900px) {
    .contact-grid {
        grid-template-columns: 1fr;
    }
}

</style>
</head>
<body>

<section class="contact-section">
    <div class="container">

        <div class="section-header">
            <h1>Contact Us</h1>
            <p>Get in touch with Janson Exports for business inquiries</p>
        </div>

        <div class="contact-grid">

            <!-- LEFT -->
            <div class="contact-card">
                <h2>Contact Details</h2>

                <div class="info-item">
                    <span>📍</span>
                    <p>F-11, DSIDC Industrial Area, Nangloi, Delhi - 110041, India</p>
                </div>

                <div class="info-item">
                    <span>📞</span>
                    <p>+91 99905 00537</p>
                </div>

                <div class="info-item">
                    <span>✉️</span>
                    <p>adish@jansonexporters.com</p>
                </div>

                <div class="map-box">
                    <iframe
                        src="https://www.google.com/maps?q=DSIDC%20Industrial%20Area%20Nangloi%20Delhi&output=embed"
                        loading="lazy">
                    </iframe>
                </div>
            </div>

            <!-- RIGHT FORM -->
            <div class="contact-card">
                <h2>Send Message</h2>

                <!-- 🔥 WORKING FORM -->
                <form action="https://formspree.io/f/xyzabcde" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="phone" placeholder="Phone Number">
                    <textarea name="message" placeholder="Your Message" required></textarea>

                    <button type="submit">Send Message</button>
                </form>
            </div>

        </div>
    </div>
</section>

<?php include "footer.php"?>