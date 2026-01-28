<?php $page_title = "Sliding Partition manufacturers in Dubai";
$description = "As one of the leading Sliding Partition manufacturers in Dubai, we specialize in crafting innovative, space-efficient, and aesthetically pleasing partition systems that define modern interior flexibility. Our sliding partitions have been designed to offer seamless space division";
$keyword = "Sliding Partition manufacturers in Dubai,Sliding Partition supplier in Dubai,Sliding Partition exporter in Dubai, Best Sliding Partition manufacturers in Dubai, Top Sliding Partition manufacturers in Dubai, best Sliding Partition supplier in Dubai, Top Sliding Partition supplier Dubai, best Sliding Partition exporter in Dubai, Top Sliding Partition exporter in Dubai,Sliding Partition manufacturers,Best Sliding Partition manufacturers,Top Sliding Partition manufacturers, Sliding Partition supplier,Best Sliding Partition supplier, Top Sliding Partition supplier,Sliding Partition exporter,Best Sliding Partition exporter,Top Sliding Partition exporter";
include('header.php') ?>
<!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<style>
    :root {
        --primary-color: #121212;
        /* Main Dark Background (Off-Black) */
        --primary-light: #1E1E1E;
        /* Lighter Dark (For Cards/Sections) */
        --secondary-color: #C6A98C;
        /* Elegant Beige/Tan Accent */
        --text-color: #E0E0E0;
        /* Main Body Text (Soft Off-white) */
        --text-heading: #FFFFFF;
        /* Headings (Pure White) */
        --light-color: #FFFFFF;
        /* Pure White */
        --bg-light: #1E1E1E;
        /* Replacing the light bg variable */
        --border-color: #333333;
        /* Subtle Borders for separation */
        --font-primary: 'Poppins', sans-serif;
        --border-radius-main: 5px;
        --shadow-light: 0 4px 15px rgba(0, 0, 0, 0.2);
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
        line-height: 1.8;
        color: var(--text-color);
        overflow-x: hidden;
    }

    /* Container for all sections */
    .container {
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* HERO SECTION */
    .sliding-hero-section {
        position: relative;
        width: 100%;
        height: 100vh;
        max-height: 760px;
        min-height: 500px;
        overflow: hidden;
        margin-top: -90px;
    }

    .sliding-hero-section img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .sliding-hero-content {
        position: absolute;
        inset: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 0 5%;
        color: var(--light-color);
        text-align: left;
    }

    .sliding-hero-content h5 {
        font-size: 14px;
        letter-spacing: 2px;
        margin-bottom: 8px;
        opacity: 0.9;
        color: var(--secondary-color);
    }

    .sliding-hero-content h1 {
        font-size: clamp(32px, 5vw, 48px);
        font-weight: 700;
        max-width: 600px;
        line-height: 1.1;
        color: var(--text-heading);
    }

    /* CONTENT BOX SECTION */
    .sliding-content-box {
        background: var(--primary-light);
        width: 100%;
        padding: clamp(40px, 5vw, 60px) clamp(20px, 5vw, 40px);
        margin-top: -81px;
        position: relative;
        border-top: 1px solid var(--border-color);
    }

    .sliding-content-wrapper {
        
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: clamp(30px, 5vw, 50px);
    }

    .sliding-content-title {
        font-size: clamp(28px, 4vw, 34px);
        font-weight: 700;
        color: var(--text-heading);
        line-height: 1.2;
    }

    .sliding-content-text {
        font-size: clamp(14px, 2vw, 15px);
        color: var(--text-color);
        line-height: 1.6;
    }

    /* BENEFITS SECTION */
    .sliding-benefits-wrapper {
        
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: clamp(20px, 3vw, 45px);
        padding: clamp(40px, 5vw, 80px) 20px;
        background: var(--primary-color);
        flex-wrap: wrap;
    }

    /* CARD STYLING */
    .sliding-card {
        width: 100%;
        max-width: 380px;
        min-width: 280px;
        background: var(--primary-light);
        padding: clamp(40px, 5vw, 55px) clamp(20px, 3vw, 40px);
        text-align: center;
        border-bottom: 3px solid var(--secondary-color);
        position: relative;
        border-radius: var(--border-radius-main);
        box-shadow: var(--shadow-light);
        transition: transform var(--transition-speed);
        flex: 1;
    }

    .sliding-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .sliding-right-card {
        border: 2px solid var(--secondary-color);
    }

    /* TAG LABEL */
    .sliding-tag {
        position: absolute;
        top: 0;
        left: 0;
        background: var(--secondary-color);
        padding: 5px 18px;
        font-size: 13px;
        color: var(--primary-color);
        border-radius: 0 0 4px 0;
        font-weight: 600;
    }

    /* ICON */
    .sliding-icon {
        width: 65px;
        margin: 25px auto 20px auto;
        opacity: 0.9;
        height: auto;
    }

    /* TITLE */
    .sliding-card-title {
        font-size: clamp(18px, 2vw, 22px);
        color: var(--text-heading);
        font-weight: 700;
        margin-bottom: 15px;
        line-height: 1.3;
    }

    .sliding-card p {
        font-size: clamp(13px, 1.5vw, 14.5px);
        color: var(--text-color);
        line-height: 1.65;
    }

    /* PLUS SIGN & DOTTED LINE - Hide on mobile */
    .sliding-plus {
        font-size: 48px;
        font-weight: 300;
        color: var(--secondary-color);
        margin-top: -20px;
    }

    .sliding-dotted-line {
        height: 280px;
        border-right: 3px dotted var(--secondary-color);
        margin-right: -20px;
    }

    /* MAIN SECTION */
    .sliding-main-section {
       
        margin: 0 auto;
        padding: clamp(40px, 5vw, 70px) clamp(20px, 5vw, 85px);
        background: var(--primary-color);
    }

    /* MAIN TITLE */
    .sliding-main-section h1 {
        font-size: clamp(28px, 4vw, 36px);
        color: var(--text-heading);
        font-weight: 700;
        margin-bottom: 25px;
        line-height: 1.2;
    }

    /* PARAGRAPHS */
    .sliding-main-section p {
        font-size: clamp(14px, 1.5vw, 16px);
        color: var(--text-color);
        width: 100%;
        max-width: 1000px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    /* DISCUSS LINK */
    .sliding-discuss-link {
        display: inline-flex;
        align-items: center;
        gap: 15px;
        font-weight: 600;
        color: var(--secondary-color);
        margin-bottom: 40px;
        font-size: clamp(14px, 1.5vw, 16px);
        cursor: pointer;
        text-decoration: none;
        transition: color var(--transition-speed);
    }

    .sliding-discuss-link:hover {
        color: var(--text-heading);
    }

    .sliding-discuss-link .sliding-line {
        width: clamp(80px, 10vw, 120px);
        border-bottom: 1px solid var(--secondary-color);
    }

    /* IMAGE + CONTENT ROW */
    .sliding-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: flex-start;
        gap: clamp(30px, 4vw, 50px);
    }

    /* LEFT IMAGE */
    .sliding-left-img {
        flex: 1;
        min-width: 300px;
    }

    .sliding-left-img img {
        width: 100%;
        height: auto;
        min-height: 300px;
        max-height: 487px;
        object-fit: cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RIGHT CONTENT */
    .sliding-right-content {
        flex: 1;
        min-width: 300px;
        padding-top: 10px;
    }

    .sliding-right-content h5 {
        font-size: 13px;
        color: var(--secondary-color);
        letter-spacing: 1px;
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    .sliding-right-content h2 {
        font-size: clamp(24px, 3vw, 30px);
        color: var(--text-heading);
        margin-bottom: 20px;
        font-weight: 700;
        line-height: 1.2;
    }

    .sliding-right-content p {
        width: 100%;
        margin-bottom: 18px;
        line-height: 1.6;
        font-size: clamp(14px, 1.5vw, 15px);
        color: var(--text-color);
    }

    /* BULLETS */
    .sliding-ul {
        padding-left: 20px;
        margin-top: 10px;
        list-style: disc;
    }

    .sliding-ul li {
        margin-bottom: 8px;
        font-size: clamp(14px, 1.5vw, 15px);
        color: var(--text-color);
        line-height: 1.6;
    }

    /* PRODUCT SECTION */
    .sliding-prod-section {
        
        margin: 0 auto;
        padding: clamp(30px, 4vw, 40px) 20px;
        background: var(--primary-color);
    }

    .sliding-prod-title {
        text-align: center;
        margin-bottom: 30px;
        color: var(--text-heading);
        font-size: clamp(24px, 3vw, 30px);
        font-weight: 700;
        line-height: 1.2;
    }

    /* PRODUCT GRID */
    .sliding-prod-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: clamp(20px, 3vw, 25px);
    }

    /* PRODUCT CARD */
    .sliding-prod-card {
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow: hidden;
        box-shadow: var(--shadow-light);
        cursor: pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .sliding-prod-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .sliding-prod-card-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .sliding-prod-card-info {
        padding: 15px;
    }

    .sliding-prod-card-info h3 {
        font-size: clamp(18px, 2vw, 20px);
        color: var(--text-heading);
        margin-bottom: 5px;
        line-height: 1.2;
    }

    .sliding-prod-card-info p {
        font-size: 14px;
        color: var(--text-color);
    }

    /* POPUP */
    .sliding-prod-popup {
        position: fixed;
        inset: 0;
        display: none;
        justify-content: center;
        align-items: center;
        background: rgba(0, 0, 0, 0.9);
        padding: 20px;
        z-index: 9999;
    }

    .sliding-prod-popup.active {
        display: flex;
    }

    .sliding-prod-popup-box {
        background: var(--primary-light);
        width: 100%;
        max-width: 520px;
        border-radius: var(--border-radius-main);
        overflow: hidden;
        animation: slidingProdShow .3s ease;
        border: 1px solid var(--border-color);
        max-height: 90vh;
        overflow-y: auto;
    }

    @keyframes slidingProdShow {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .sliding-prod-popup-img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .sliding-prod-popup-content {
        padding: 20px;
    }

    .sliding-prod-popup-content h2 {
        font-size: clamp(20px, 2.5vw, 24px);
        margin-bottom: 10px;
        color: var(--text-heading);
        line-height: 1.2;
    }

    .sliding-prod-popup-content p {
        font-size: clamp(14px, 1.5vw, 15px);
        line-height: 1.6;
        color: var(--text-color);
    }

    .sliding-prod-btn {
        display: inline-block;
        margin-top: 15px;
        padding: 10px 18px;
        background: var(--secondary-color);
        color: var(--primary-color);
        text-decoration: none;
        border-radius: var(--border-radius-main);
        font-weight: 600;
        transition: background-color var(--transition-speed);
        font-size: 14px;
    }

    .sliding-prod-btn:hover {
        background-color: #b5987a;
    }

    .sliding-prod-close {
        position: absolute;
        top: 15px;
        right: 25px;
        font-size: 40px;
        color: var(--light-color);
        cursor: pointer;
        z-index: 10000;
    }

    /* FUND SECTION */
    .sliding-fund-section {
        width: 100%;
        padding: clamp(40px, 5vw, 60px) 20px;
        background: var(--primary-color);
    }

    .sliding-fund-container {
        
        margin: 0 auto;
        padding: 0 clamp(20px, 5vw, 50px);
    }

    .sliding-fund-top-title {
        font-size: 14px;
        letter-spacing: 1px;
        margin-bottom: 15px;
        color: var(--secondary-color);
        font-weight: 600;
    }

    .sliding-fund-heading {
        font-size: clamp(28px, 4vw, 34px);
        font-weight: 700;
        color: var(--text-heading);
        margin-bottom: 25px;
        line-height: 1.3;
    }

    .sliding-fund-desc {
        font-size: clamp(14px, 1.5vw, 15px);
        color: var(--text-color);
        line-height: 1.6;
        max-width: 700px;
        margin-bottom: 35px;
    }

    .sliding-fund-link {
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: clamp(14px, 1.5vw, 15px);
        font-weight: 600;
        margin-bottom: 40px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .sliding-fund-line {
        width: clamp(80px, 10vw, 120px);
        border-bottom: 1px solid var(--secondary-color);
    }

    /* CARDS WRAP */
    .sliding-fund-card-wrap {
        display: flex;
        flex-wrap: wrap;
        gap: clamp(20px, 3vw, 30px);
    }

    /* CARD */
    .sliding-fund-card {
        background: var(--primary-light);
        flex: 1;
        min-width: 300px;
        padding: clamp(30px, 4vw, 40px);
        border-bottom: 4px solid var(--secondary-color);
        box-shadow: var(--shadow-light);
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
        transition: transform var(--transition-speed);
    }

    .sliding-fund-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .sliding-fund-card-title {
        font-size: clamp(22px, 3vw, 26px);
        font-weight: 700;
        margin-bottom: 20px;
        color: var(--text-heading);
        line-height: 1.2;
    }

    .sliding-fund-card p {
        font-size: clamp(14px, 1.5vw, 15px);
        line-height: 1.6;
        color: var(--text-color);
        margin-bottom: 30px;
    }

    .sliding-fund-card hr {
        border: none;
        height: 1px;
        background: var(--border-color);
        margin-bottom: 20px;
    }

    .sliding-fund-card-subtitle {
        font-size: clamp(14px, 1.5vw, 15px);
        font-weight: 600;
        color: var(--secondary-color);
        margin-bottom: 12px;
    }

    /* LIST */
    .sliding-fund-list {
        list-style: none;
        padding-left: 0;
    }

    .sliding-fund-list li {
        margin-bottom: 8px;
        font-size: clamp(14px, 1.5vw, 15px);
        color: var(--text-color);
        line-height: 1.5;
    }

    .sliding-fund-list li:before {
        content: "✔ ";
        color: var(--secondary-color);
        font-weight: 700;
    }

    /* PROJECT SECTION */
    .sliding-project-section {
        width: 100%;
        padding: clamp(60px, 8vw, 100px) 20px;
        background: var(--primary-color);
    }

    .sliding-project-container {
        max-width: 1600px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: flex-start;
        gap: clamp(30px, 4vw, 50px);
    }

    /* LEFT CONTENT */
    .sliding-project-left {
        flex: 1;
        min-width: 300px;
    }

    .sliding-project-subtitle {
        font-size: 14px;
        letter-spacing: 1px;
        color: var(--secondary-color);
        margin-bottom: 20px;
        font-weight: 500;
    }

    .sliding-project-title {
        font-size: clamp(28px, 4vw, 38px);
        color: var(--text-heading);
        font-weight: 700;
        margin-bottom: 25px;
        line-height: 1.3;
    }

    .sliding-project-text {
        font-size: clamp(14px, 1.5vw, 16px);
        line-height: 1.6;
        color: var(--text-color);
        margin-bottom: 20px;
        max-width: 650px;
    }

    /* BULLETS */
    .sliding-project-list {
        margin-top: 10px;
        list-style: none;
        padding-left: 0;
    }

    .sliding-project-list li {
        margin-bottom: 10px;
        font-size: clamp(14px, 1.5vw, 16px);
        color: var(--text-color);
        line-height: 1.5;
    }

    .sliding-project-list li:before {
        content: "• ";
        font-size: 20px;
        line-height: 1;
        color: var(--secondary-color);
        font-weight: bold;
    }

    /* RIGHT IMAGE */
    .sliding-project-right {
        flex: 1;
        min-width: 300px;
    }

    .sliding-project-right img {
        width: 100%;
        height: auto;
        min-height: 300px;
        max-height: 480px;
        object-fit: cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* ===============================
           JANSON SLIDING PARTITION SECTION
        ================================ */
    #jansonSlidingWrapper {
        padding: clamp(40px, 5vw, 80px) 5%;
        background: var(--primary-color);
        font-family: var(--font-primary);
    }

    .janson-sliding-inner {
        max-width: 1450px;
        margin: auto;
        display: grid;
        grid-template-columns: 1fr 1.35fr 1fr 80px;
        gap: clamp(20px, 3vw, 40px);
        align-items: center;
    }

    /* COMMON BOX */
    .janson-sliding-box {
        text-align: center;
    }

    /* IMAGE HOLDER */
    .janson-img-holder {
        overflow: hidden;
        border-radius: var(--border-radius-main);
        box-shadow: var(--shadow-medium);
    }

    .janson-img-holder img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    /* BIG CENTER IMAGE */
    .big-img img {
        height: 450px;
    }

    /* HOVER ZOOM */
    .janson-img-holder:hover img {
        transform: scale(1.12);
    }

    /* LABEL */
    .janson-label {
        margin-top: 15px;
        font-size: clamp(16px, 1.5vw, 1.1rem);
        letter-spacing: 1px;
        color: var(--text-heading);
    }

    /* TOP LOGO */
    .janson-top-logo {
        margin-bottom: 15px;
        font-weight: 600;
        color: var(--light-color);
        font-size: clamp(14px, 1.5vw, 16px);
    }

    .janson-logo-je {
        font-size: clamp(18px, 2vw, 1.6rem);
        margin-right: 6px;
    }

    .janson-logo-text {
        color: var(--secondary-color);
    }

    /* BNI BADGE */
    .janson-bni-badge {
        margin-top: 12px;
        display: inline-block;
        padding: 6px 15px;
        border-radius: 30px;
        background: #c6a98c;
        color: #fff;
        font-size: 12px;
        letter-spacing: 1px;
    }

    /* RIGHT VERTICAL STRIP */
    .janson-vertical-strip {
        color: #fff;
        font-weight: 700;
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
        border-radius: 6px;
        letter-spacing: 15px;
        font-size: clamp(14px, 1.5vw, 16px);
    }

    /* FAQ SECTION */
    .sliding-faq-section {
        width: 100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding: clamp(60px, 8vw, 100px) 20px;
        text-align: center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE */
    .sliding-faq-title {
        font-size: clamp(28px, 4vw, 40px);
        font-weight: 700;
        margin-bottom: 40px;
        letter-spacing: 1px;
        line-height: 1.2;
    }

    /* FAQ CONTAINER */
    .sliding-faq-container {
        max-width: 1100px;
        margin: auto;
        text-align: left;
    }

    /* FAQ ITEM */
    .sliding-faq-item {
        width: 100%;
        border-bottom: 1px solid var(--border-color);
        padding: 18px 10px;
        cursor: pointer;
        position: relative;
        transition: background-color var(--transition-speed);
    }

    .sliding-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .sliding-faq-question {
        font-size: clamp(16px, 2vw, 18px);
        font-weight: 500;
        display: flex;
        justify-content: space-between;
        align-items: center;
        line-height: 1.3;
    }

    /* PLUS / MINUS ICON */
    .sliding-faq-icon {
        font-size: 24px;
        font-weight: 700;
        transition: 0.3s;
        user-select: none;
        color: var(--secondary-color);
        flex-shrink: 0;
        margin-left: 10px;
    }

    /* ANSWER CONTENT */
    .sliding-faq-answer {
        font-size: clamp(14px, 1.5vw, 16px);
        color: var(--text-color);
        max-height: 0;
        overflow: hidden;
        line-height: 1.6;
        padding-right: 10px;
        transition: max-height 0.4s ease;
    }

    .sliding-faq-item.active .sliding-faq-answer {
        margin-top: 12px;
        max-height: 500px;
    }

    /* CHANGE ICON WHEN ACTIVE */
    .sliding-faq-item.active .sliding-faq-icon {
        transform: rotate(180deg);
    }

    /* READ ALL BUTTON */
    .sliding-faq-btn {
        margin-top: 40px;
        padding: 12px 25px;
        border: 1px solid var(--secondary-color);
        color: var(--secondary-color);
        background: transparent;
        border-radius: var(--border-radius-main);
        font-size: clamp(14px, 1.5vw, 16px);
        cursor: pointer;
        transition: var(--transition-speed);
        font-weight: 600;
    }

    .sliding-faq-btn:hover {
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    .sliding-hero-content h5 {
        color: white;
        font-weight: 900;
        text-shadow: 0 2px 6px rgba(0, 0, 0, 0.8);
        margin-top: -60px;
    }

    /* ===============================
           JANSON FEATURE SECTION
        ================================ */
    #jansonFeatureSection {
        padding: clamp(60px, 8vw, 90px) 5%;
        background: var(--primary-color);
        font-family: var(--font-primary);
    }

    .janson-feature-wrapper {
        max-width: 1450px;
        margin: auto;
        display: grid;
        grid-template-columns: 1.2fr 80px 1fr;
        gap: clamp(20px, 3vw, 40px);
        position: relative;
    }

    /* IMAGE */
    .janson-feature-image {
        position: relative;
        overflow: hidden;
        border-radius: 6px;
    }

    .janson-feature-image img {
        width: 100%;
        /* height: 400px;   */
        object-fit: cover;
        transition: transform 0.7s ease;
    }

    .janson-feature-image:hover img {
        transform: scale(1.12);
    }

    /* YELLOW CORNERS */
    .corner {
        position: absolute;
        width: 30px;
        height: 30px;
        border: 3px solid #f5b400;
    }

    .tl {
        top: 10px;
        left: 10px;
        border-right: none;
        border-bottom: none;
    }

    .tr {
        top: 10px;
        right: 10px;
        border-left: none;
        border-bottom: none;
    }

    .bl {
        bottom: 10px;
        left: 10px;
        border-right: none;
        border-top: none;
    }

    .br {
        bottom: 10px;
        right: 10px;
        border-left: none;
        border-top: none;
    }

    /* RED CURVE */
    .janson-feature-curve {
        border-left: 4px solid #c6a98c;
        border-radius: 50%;
    }

    /* CONTENT */
    .janson-feature-content {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .janson-feature-item {
        display: flex;
        gap: 15px;
        align-items: flex-start;
    }

    .janson-feature-icon {
        width: 40px;
        height: 40px;
        background: #000;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        flex-shrink: 0;
    }

    .janson-feature-item h4 {
        margin: 0;
        color: var(--text-heading);
        font-size: clamp(16px, 1.5vw, 1.15rem);
        line-height: 1.3;
    }

    .janson-feature-item h4 span {
        color: var(--secondary-color);
        margin-right: 8px;
    }

    .janson-feature-item p {
        margin-top: 5px;
        color: var(--text-color);
        font-size: clamp(14px, 1.5vw, 0.95rem);
        line-height: 1.5;
    }

    /* BNI */
    .janson-feature-bni {
        position: absolute;
        right: 0;
        bottom: -30px;
        background: #c6a98c;
        color: #fff;
        padding: 15px 18px;
        border-radius: 50%;
        font-size: 12px;
        text-align: center;
        font-weight: 600;
    }

    /* PRODUCT SLIDER */
    .sliding-product-slider {
        display: flex;
        flex-wrap: wrap;
        gap: clamp(20px, 3vw, 40px);
        padding: clamp(30px, 4vw, 60px);
        align-items: center;
        background: var(--primary-color);
        max-width: 1400px;
        margin: 0 auto;
    }

    /* LEFT */
    .sliding-product-images {
        position: relative;
        flex: 1;
        min-width: 300px;
        background: linear-gradient(145deg, #0d0d0d, #1c1c1c);
        border-radius: 12px;
        padding: clamp(20px, 3vw, 40px);
        text-align: center;
    }

    .sliding-stock {
        position: absolute;
        top: 15px;
        left: 15px;
        opacity: 0.3;
        letter-spacing: 2px;
        font-size: 12px;
    }

    .sliding-main-img {
        width: 80%;
        max-width: 400px;
        transition: 0.3s;
        height: auto;
    }

    .sliding-thumbs {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 20px;
        flex-wrap: wrap;
    }

    .sliding-thumbs img {
        width: 50px;
        cursor: pointer;
        opacity: 0.6;
        border-radius: 8px;
        height: 50px;
        object-fit: cover;
    }

    .sliding-thumbs img.active,
    .sliding-thumbs img:hover {
        opacity: 1;
        transform: scale(1.1);
    }

    /* RIGHT */
    .sliding-product-info {
        flex: 1;
        min-width: 300px;
        background: var(--primary-light);
        padding: clamp(20px, 3vw, 35px);
        border-radius: 12px;
        box-shadow: var(--shadow-medium);
    }

    .sliding-product-title {
        font-size: clamp(20px, 2.5vw, 26px);
        color: var(--text-heading);
        line-height: 1.2;
    }

    .sliding-category {
        font-size: 13px;
        opacity: 0.7;
    }

    .sliding-price {
        font-size: clamp(22px, 3vw, 28px);
        margin: 12px 0;
        color: var(--secondary-color);
    }

    .sliding-rating {
        color: gold;
        margin-bottom: 12px;
        font-size: clamp(14px, 1.5vw, 16px);
    }

    .sliding-desc {
        font-size: clamp(13px, 1.5vw, 14px);
        line-height: 1.6;
        margin-bottom: 18px;
        color: var(--text-color);
    }

    .sliding-sizes span {
        display: inline-block;
        border: 1px solid var(--border-color);
        padding: 6px 10px;
        margin: 6px 6px 0 0;
        cursor: pointer;
        border-radius: 6px;
        font-size: 13px;
    }

    .sliding-sizes span.active {
        background: var(--secondary-color);
        color: #000;
    }

    .sliding-colors span {
        display: inline-block;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        margin: 8px 8px 0 0;
        border: 1px solid #555;
    }

    .sliding-cart-btn {
        margin-top: 22px;
        width: 100%;
        padding: 12px;
        background: var(--secondary-color);
        border: none;
        font-weight: 600;
        cursor: pointer;
        border-radius: var(--border-radius-main);
        font-size: 14px;
        color: var(--primary-color);
        transition: background-color var(--transition-speed);
    }

    .sliding-cart-btn:hover {
        background-color: #b5987a;
    }

    /* ===============================
           RESPONSIVE MEDIA QUERIES
        ================================ */

    /* Large tablets and small desktops */
    @media (max-width: 1200px) {
        .sliding-benefits-wrapper {
            flex-direction: column;
        }

        .sliding-plus,
        .sliding-dotted-line {
            display: none;
        }

        .janson-sliding-inner {
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto auto;
        }

        .janson-vertical-strip {
            grid-column: 1 / -1;
            writing-mode: horizontal-tb;
            transform: none;
            margin-top: 20px;
            padding: 15px;
            letter-spacing: 10px;
        }

        .janson-feature-wrapper {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .janson-feature-curve {
            display: none;
        }

        .janson-feature-bni {
            position: static;
            margin-top: 30px;
            align-self: center;
        }
    }

    /* Tablets */
    @media (max-width: 992px) {
        .sliding-content-wrapper {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .sliding-row {
            flex-direction: column;
        }

        .sliding-left-img img {
            width: 100%;
            height: auto;
        }

        .sliding-main-section {
            padding: 50px 20px;
        }

        .sliding-fund-card {
            min-width: 100%;
        }

        .janson-img-holder img {
            height: 350px;
        }

        .big-img img {
            height: 400px;
        }

        .janson-feature-image img {
            height: 350px;
        }
    }

    /* Large phones and small tablets */
    @media (max-width: 768px) {
        .sliding-hero-section {
            height: 70vh;
            min-height: 400px;
            margin-top: -70px;
        }

        .sliding-hero-content {
            padding: 0 20px;
            text-align: center;
        }

        .sliding-hero-content h5 {
            margin-top: 0;
        }

        .sliding-content-box {
            margin-top: -60px;
            padding: 40px 20px;
        }

        .sliding-card {
            max-width: 100%;
        }

        .sliding-fund-container {
            padding: 0 20px;
        }

        .sliding-project-container {
            flex-direction: column;
        }

        .sliding-project-right img {
            width: 100%;
            height: auto;
        }

        .janson-sliding-inner {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .janson-img-holder img {
            height: 300px;
        }

        .big-img img {
            height: 350px;
        }

        .janson-feature-item {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .janson-feature-icon {
            margin-bottom: 10px;
        }

        .sliding-product-slider {
            padding: 30px 20px;
        }
    }

    /* Phones */
    @media (max-width: 576px) {
        .sliding-hero-section {
            height: 60vh;
            min-height: 350px;
        }

        .sliding-hero-content h1 {
            font-size: 28px;
        }

        .sliding-content-title {
            font-size: 24px;
        }

        .sliding-main-section h1 {
            font-size: 24px;
        }

        .sliding-right-content h2 {
            font-size: 22px;
        }

        .sliding-prod-title {
            font-size: 24px;
        }

        .sliding-fund-heading {
            font-size: 24px;
        }

        .sliding-project-title {
            font-size: 24px;
        }

        .sliding-faq-title {
            font-size: 24px;
        }

        .sliding-prod-grid {
            grid-template-columns: 1fr;
        }

        .sliding-prod-card-img {
            height: 250px;
        }

        .janson-img-holder img {
            height: 250px;
        }

        .big-img img {
            height: 300px;
        }

        .janson-feature-image img {
            height: 250px;
        }

        .sliding-thumbs img {
            width: 40px;
            height: 40px;
        }

        .sliding-main-img {
            width: 90%;
        }

        .sliding-faq-question {
            font-size: 16px;
        }

        .sliding-faq-icon {
            font-size: 20px;
        }
    }

    /* ===============================
   JANSON SLIDING PARTITION (FIXED)
================================ */

    #jansonSlidingWrapper {
        padding: clamp(40px, 5vw, 80px) 5%;
        background: var(--primary-color);
        overflow: hidden;
    }

    .janson-sliding-inner {
        max-width: 1450px;
        margin: auto;
        display: grid;
        grid-template-columns: 1fr 1.3fr 1fr 70px;
        gap: clamp(20px, 3vw, 40px);
        align-items: center;
    }

    /* COMMON BOX */
    .janson-sliding-box {
        text-align: center;
    }

    /* IMAGE HOLDER */
    .janson-img-holder {
        overflow: hidden;
        border-radius: var(--border-radius-main);
        box-shadow: var(--shadow-medium);
    }

    .janson-img-holder img {
        width: 100%;
        height: 100%;
        min-height: 320px;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    /* CENTER IMAGE */
    .big-img img {
        min-height: 380px;
    }

    /* HOVER */
    .janson-img-holder:hover img {
        transform: scale(1.08);
    }

    /* LABEL */
    .janson-label {
        margin-top: 14px;
        font-size: 15px;
        letter-spacing: 1px;
        color: var(--text-heading);
    }

    /* LOGO */
    .janson-top-logo {
        margin-bottom: 12px;
        font-weight: 600;
        font-size: 14px;
    }

    .janson-logo-je {
        font-size: 20px;
        margin-right: 6px;
    }

    .janson-logo-text {
        color: var(--secondary-color);
    }

    /* BNI */
    .janson-bni-badge {
        margin-top: 10px;
        padding: 6px 14px;
        border-radius: 30px;
        background: #c6a98c;
        color: #fff;
        font-size: 11px;
        letter-spacing: 1px;
    }

    /* VERTICAL STRIP */
    .janson-vertical-strip {
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        font-weight: 700;
        font-size: 14px;
        letter-spacing: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
    }

    /* ===============================
   RESPONSIVE FIXES
================================ */

    /* Tablets */
    @media (max-width: 992px) {
        .janson-sliding-inner {
            grid-template-columns: 1fr 1fr;
        }

        .janson-vertical-strip {
            grid-column: 1 / -1;
            writing-mode: horizontal-tb;
            transform: none;
            letter-spacing: 6px;
            padding: 15px 0;
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .janson-sliding-inner {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .janson-img-holder img {
            min-height: 260px;
        }

        .big-img img {
            min-height: 300px;
        }

        .janson-label {
            font-size: 14px;
        }

        .janson-vertical-strip {
            font-size: 13px;
            letter-spacing: 4px;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .janson-img-holder img {
            min-height: 220px;
        }

        .big-img img {
            min-height: 260px;
        }

        .janson-top-logo {
            font-size: 13px;
        }
    }


    /* Small phones */
    @media (max-width: 400px) {
        .sliding-hero-section {
            height: 50vh;
            min-height: 300px;
        }

        .sliding-hero-content h1 {
            font-size: 24px;
        }

        .sliding-hero-content h5 {
            font-size: 12px;
        }

        .sliding-card {
            padding: 30px 20px;
        }

        .sliding-icon {
            width: 50px;
        }

        .sliding-card-title {
            font-size: 18px;
        }

        .sliding-prod-card-info h3 {
            font-size: 18px;
        }

        .sliding-fund-card {
            padding: 25px 20px;
        }

        .sliding-fund-card-title {
            font-size: 20px;
        }

        .sliding-project-title {
            font-size: 22px;
        }

        .janson-img-holder img {
            height: 200px;
        }

        .big-img img {
            height: 250px;
        }

        .janson-feature-image img {
            height: 200px;
        }

        .sliding-product-images,
        .sliding-product-info {
            padding: 20px;
        }
    }

    /* Prevent horizontal scroll */
    @media (max-width: 300px) {

        .container,
        .sliding-main-section,
        .sliding-prod-section,
        .sliding-fund-container,
        .sliding-project-container,
        .sliding-product-slider {
            padding-left: 10px;
            padding-right: 10px;
        }

        .sliding-hero-content {
            padding: 0 10px;
        }

        .sliding-prod-card-info {
            padding: 10px;
        }

        .sliding-fund-card {
            padding: 20px 15px;
        }
    }
</style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="sliding-hero-section" data-aos="zoom-in">
        <img src="../slim-partition/WhatsApp Image 2025-12-24 at 6.30.17 PM (1).jpeg" alt="Sliding Partition Background">
        <div class="sliding-hero-content">
            <h5>SLIDING PARTITION SYSTEMS</h5>
            <h1>SLIDING PARTITION MANUFACTURER IN Dubai</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="sliding-content-box" data-aos="zoom-in">
        <div class="sliding-content-wrapper">
            <div>
                <h2 class="sliding-content-title">SLIDING PARTITION MANUFACTURER IN Dubai</h2>
            </div>
            <div class="sliding-content-text">
                <p>
                    As one of the leading Sliding Partition manufacturers, we specialize in crafting innovative, space-efficient, and aesthetically pleasing partition systems that define modern interior flexibility. Our sliding partitions have been designed to offer seamless space division while retaining an open, classy ambiance within the area.
                </p>
                <p>
                    Engineered with accuracy, these partitions are manufactured with superior-grade materials and allow for smooth operation with durability that is long-lasting. Every partition is fabricated with much attention to detail to embody functionality and aesthetics, suitable for offices, hotels, conference halls, banquet areas, and homes where space optimization and contemporary design are of essence.
                </p>
                <p>
                    With our state-of-the-art manufacturing facilities and a skilled team of designers, we ensure that every sliding partition epitomizes quality, craftsmanship, and modern sophistication.
                </p>
            </div>
        </div>
    </section>

    <div class="sliding-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="sliding-card" data-aos="zoom-in">
            <div class="sliding-tag">Benefits</div>
            <img class="sliding-icon" src="https://cdn-icons-png.flaticon.com/512/992/992651.png" alt="Flexible Space Management">
            <div class="sliding-card-title">FLEXIBLE SPACE MANAGEMENT</div>
            <p>
                Convert large areas into smaller functional zones with ease when required. Modern design appeal that adds style to interiors with clean lines and a minimalistic look.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="sliding-plus">+</div>

        <!-- CARD 2 -->
        <div class="sliding-card" data-aos="zoom-in">
            <div class="sliding-tag">Benefits</div>
            <img class="sliding-icon" src="https://cdn-icons-png.flaticon.com/512/3430/3430447.png" alt="Operational Ease">
            <div class="sliding-card-title">OPERATIONAL EASE & NOISE REDUCTION</div>
            <p>
                Equipped with smooth sliding mechanisms for effortless operations. Provides excellent acoustic separation between divided spaces for noise control and privacy.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="sliding-dotted-line" data-aos="zoom-in"></div>

        <!-- CARD 3 -->
        <div class="sliding-card sliding-right-card" data-aos="zoom-in">
            <div class="sliding-tag">Applications</div>
            <img class="sliding-icon" src="https://cdn-icons-png.flaticon.com/512/456/456177.png" alt="Versatile Solutions">
            <div class="sliding-card-title">VERSATILE SOLUTIONS</div>
            <p>
                Custom solutions available in a variety of finishes, materials, and dimensions. Durable and low maintenance - built to last with corrosion-resistant fittings and high-quality tracks.
            </p>
        </div>
    </div>

    <section class="janson-sliding-wrapper" id="jansonSlidingWrapper">
        <div class="janson-sliding-inner">
            <!-- LEFT IMAGE -->
            <div class="janson-sliding-box janson-left-box">
                <div class="janson-img-holder">
                    <img src="../sliding-partition/image4-20.webp" alt="Glass Sliding Doors">
                </div>
                <p class="janson-label">GLASS SLIDING DOORS</p>
            </div>

            <!-- CENTER IMAGE -->
            <div class="janson-sliding-box janson-center-box">
                <div class="janson-top-logo">
                    <span class="janson-logo-je">JE</span>
                    <span class="janson-logo-text">JANSON EXPORTS</span>
                </div>
                <div class="janson-img-holder big-img">
                    <img src="../sliding-partition/folding-partitions-wooden.jpg" alt="Wooden Sliding Partitions">
                </div>
                <p class="janson-label">WOODEN SLIDING PARTITIONS</p>
                <div class="janson-bni-badge">BNI MEMBER</div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="janson-sliding-box janson-right-box">
                <div class="janson-img-holder">
                    <img src="../sliding-partition/aluminyum-surme-kapi-sistemleri-3.jpg" alt="Aluminium Sliding Systems">
                </div>
                <p class="janson-label">ALUMINIUM SLIDING SYSTEMS</p>
            </div>

            <!-- RIGHT VERTICAL BAR -->
            <div class="janson-vertical-strip">
                <span>SLIDING PARTITION</span>
                <span>SUBCATEGORIES</span>
            </div>
        </div>
    </section>

    <section class="sliding-main-section" data-aos="zoom-in">
        <h1>SLIDING PARTITION SUPPLIER IN Dubai</h1>
        <p>
            With a reputation as one of the renowned Sliding Partition suppliers, we have developed a strong clientele based on timely delivery, reliable services, and high-quality products. We supply products for architects, contractors, and interior design professionals who have confidence in our ability to provide custom-made partition solutions for projects of every scale.
        </p>
        <p>
            Our distribution network ensures that clients receive products quickly and with complete technical support, from design consultation to installation guidance. Whether for commercial projects or residential development, we make sure excellence is delivered in every space.
        </p>

        <a href="contact.php" class="sliding-discuss-link">
            Request a Quote
            <div class="sliding-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="sliding-row" data-aos="zoom-in">
            <!-- LEFT IMAGE -->
            <div class="sliding-left-img">
                <img src="../sliding-partition/stainless-steel-sliding-partition-rectangle-803079219-kysf72ed.avif" alt="Sliding Partition Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="sliding-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Sliding Partition Solutions</h2>
                <p>
                    Our sliding partitions feature premium-grade aluminum and glass construction with silent and smooth sliding systems. We offer a wide range of finishes and glass types to match your design requirements.
                </p>
                <p>
                    Designed with high acoustic performance and fire-resistant materials, our partitions are available with options for manual or automatic operation. The compact storage when opened maximizes space utilization.
                </p>
                <p>
                    Easy to install and low in maintenance, our sliding partitions are built to last while maintaining their elegant appearance for years.
                </p>
                <ul class="sliding-ul">
                    <li>Premium-grade aluminum and glass construction</li>
                    <li>Silent and smooth sliding system</li>
                    <li>Wide range of finishes and glass types</li>
                    <li>Option for manual or automatic operation</li>
                    <li>High acoustic performance</li>
                    <li>Compact storage when opened</li>
                    <li>Fire-resistant and eco-friendly materials</li>
                    <li>Easy to install, low in maintenance</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="sliding-prod-section">
        <h2 class="sliding-prod-title">OUR SLIDING PARTITION PRODUCTS</h2>
        <div class="sliding-prod-grid">
            <!-- CARD 1 -->
            <div class="sliding-prod-card" onclick="slidingProdOpenPopup('Glass Sliding Partition','Modern glass sliding partition for luxury interiors. Perfect for offices and commercial spaces.','sliding-partition/office-partition-door-500x500.webp')" data-aos="zoom-in">
                <img class="sliding-prod-card-img" src="../sliding-partition/office-partition-door-500x500.webp" alt="Glass Sliding Partition">
                <div class="sliding-prod-card-info">
                    <h3>Glass Sliding Partition</h3>
                    <p>Modern frameless glass design</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="sliding-prod-card" onclick="slidingProdOpenPopup('Wooden Sliding Partition','Elegant wooden sliding partition with premium finishing. Natural aesthetic appeal.','sliding-partition/153963-16291822.jpg')" data-aos="zoom-in">
                <img class="sliding-prod-card-img" src="../sliding-partition/153963-16291822.jpg" alt="Wooden Sliding Partition">
                <div class="sliding-prod-card-info">
                    <h3>Wooden Sliding Partition</h3>
                    <p>Premium wooden frame</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="sliding-prod-card" onclick="slidingProdOpenPopup('Automatic Sliding Partition','Space-saving automatic sliding partition with smart controls. Perfect for modern spaces.','sliding-partition/automatic sliding.webp')" data-aos="zoom-in">
                <img class="sliding-prod-card-img" src="../sliding-partition/automatic sliding.webp" alt="Automatic Sliding Partition">
                <div class="sliding-prod-card-info">
                    <h3>Automatic Sliding Partition</h3>
                    <p>Smart automatic operation</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="sliding-prod-popup" id="slidingProdPopup">
        <span class="sliding-prod-close" onclick="slidingProdClosePopup()">&times;</span>
        <div class="sliding-prod-popup-box">
            <img id="slidingProdPopupImg" class="sliding-prod-popup-img" alt="Product Image">
            <div class="sliding-prod-popup-content">
                <h2 id="slidingProdPopupTitle"></h2>
                <p id="slidingProdPopupDesc"></p>
                <a href="contact.php" class="sliding-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="sliding-fund-section" data-aos="zoom-in">
        <div class="sliding-fund-container">
            <div class="sliding-fund-top-title">EXPORT QUALITY</div>
            <h2 class="sliding-fund-heading">SLIDING PARTITION EXPORTER IN Dubai</h2>
            <p class="sliding-fund-desc">
                As a trusted exporter of Sliding Partitions, we cater to the growing global demand for refined and durable partition systems that excel in aesthetics with functionality. Our export-ready partitions are engineered to international quality standards, thereby ensuring smooth installation and superior longevity across diverse environments.
            </p>
            <p class="sliding-fund-desc">
                We manufacture and export in accordance with the client's requirements and provide for secure packaging with timely international dispatch. Because of our expert knowledge and attention to detail, we have gained long-term relationships with overseas partners, interior designers, and construction firms who appreciate our precision and excellence in design.
            </p>

            <a href="contact.php" class="sliding-fund-link">
                International Enquiries
                <div class="sliding-fund-line"></div>
            </a>

            <div class="sliding-fund-card-wrap">
                <div class="sliding-fund-card">
                    <div class="sliding-fund-card-title">Global Standards</div>
                    <p>
                        Our sliding partitions meet international quality benchmarks and are designed to withstand diverse climatic conditions while maintaining their aesthetic appeal and functionality.
                    </p>
                    <hr>
                    <div class="sliding-fund-card-subtitle">Export Advantages:</div>
                    <ul class="sliding-fund-list">
                        <li>International quality certification</li>
                        <li>Customized packaging for safe transit</li>
                        <li>Timely dispatch and delivery</li>
                        <li>Technical documentation support</li>
                    </ul>
                </div>

                <div class="sliding-fund-card">
                    <div class="sliding-fund-card-title">International Projects</div>
                    <p>
                        We have successfully executed projects across multiple countries, providing tailored sliding partition solutions for hotels, corporate offices, and residential complexes.
                    </p>
                    <hr>
                    <div class="sliding-fund-card-subtitle">Global Reach:</div>
                    <ul class="sliding-fund-list">
                        <li>Projects in 15+ countries</li>
                        <li>Expert technical support team</li>
                        <li>Installation guidance provided</li>
                        <li>After-sales service network</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="sliding-product-slider" data-aos="zoom-in">
        
        <div class="sliding-product-images">
            <span class="sliding-stock">PREMIUM COLLECTION</span>
            <img src="../slim-partition/8.jpg" class="sliding-main-img" id="slidingMainImg" alt="Sliding Partition">
            <div class="sliding-thumbs">
                <img src="../slim-partition/8.jpg" class="active" data-index="0" onclick="changeSlidingProduct(this)" alt="Thumbnail 1">
                <img src="../slim-partition/9.jpg" data-index="1" onclick="changeSlidingProduct(this)" alt="Thumbnail 2">
                <img src="../slim-partition/10.jpg" data-index="2" onclick="changeSlidingProduct(this)" alt="Thumbnail 3">
                <img src="../slim-partition/11.jpg" data-index="3" onclick="changeSlidingProduct(this)" alt="Thumbnail 4">
                <img src="../slim-partition/12.jpg" data-index="4" onclick="changeSlidingProduct(this)" alt="Thumbnail 5">
            </div>
        </div>

        
        <div class="sliding-product-info">
            <h3 class="sliding-product-title" id="slidingPTitle">PREMIUM SLIDING PARTITION</h3>
            <span class="sliding-category" id="slidingPCategory">Office Partition System</span>
            <div class="sliding-price" id="slidingPPrice">Custom Quote</div>
            <div class="sliding-rating" id="slidingPRating">★★★★★ (4.8)</div>
            <p class="sliding-desc" id="slidingPDesc">
                High-quality sliding partition system with premium aluminum framing and tempered glass. Features silent sliding mechanism and excellent acoustic insulation.
            </p>
            <div class="sliding-sizes" id="slidingPSizes">
                <strong>Type:</strong><br>
                <span>Manual</span><span>Automatic</span>
                <span class="active">Semi-Automatic</span>
            </div>
            <div class="sliding-colors" id="slidingPColors">
                <strong>Finish:</strong><br>
                <span style="background:#c6a98c"></span>
                <span style="background:#ffffff"></span>
                <span style="background:#1e1e1e"></span>
            </div>
            <button class="sliding-cart-btn">REQUEST QUOTE</button>
        </div>
    </section>

    <section class="janson-feature-section" id="jansonFeatureSection">
        <div class="janson-feature-wrapper">
            <!-- LEFT IMAGE -->
            <div class="janson-feature-image">
                <img src="../sliding-partition/automatic sliding.webp" alt="Sliding Partition Office">
                <span class="corner tl"></span>
                <span class="corner tr"></span>
                <span class="corner bl"></span>
                <span class="corner br"></span>
            </div>

            <!-- CURVE LINE -->
            <div class="janson-feature-curve"></div>

            <!-- RIGHT CONTENT -->
            <div class="janson-feature-content">
                <div class="janson-feature-item">
                    <div class="janson-feature-icon">👤</div>
                    <div>
                        <h4><span>01</span> Space Optimization</h4>
                        <p>Maximize space utilization with sliding partitions that fold away when not in use.</p>
                    </div>
                </div>

                <div class="janson-feature-item">
                    <div class="janson-feature-icon">✔</div>
                    <div>
                        <h4><span>02</span> Smooth Operation</h4>
                        <p>High-quality track systems ensure silent and effortless sliding operation.</p>
                    </div>
                </div>

                <div class="janson-feature-item">
                    <div class="janson-feature-icon">⚙</div>
                    <div>
                        <h4><span>03</span> Customization</h4>
                        <p>Available in various materials, finishes, and glass types to match your design.</p>
                    </div>
                </div>

                <div class="janson-feature-item">
                    <div class="janson-feature-icon">⬛</div>
                    <div>
                        <h4><span>04</span> Durability</h4>
                        <p>Constructed with corrosion-resistant aluminum and premium hardware.</p>
                    </div>
                </div>

                <div class="janson-feature-item">
                    <div class="janson-feature-icon">🏆</div>
                    <div>
                        <h4><span>05</span> Acoustic Control</h4>
                        <p>Special sealing and double glazing options for enhanced sound insulation.</p>
                    </div>
                </div>
            </div>

            <!-- BNI BADGE -->
            <div class="janson-feature-bni">
                <!-- PROUD <br><strong>BNI</strong><br> MEMBER -->
            </div>
        </div>
    </section>

    <section class="sliding-project-section" data-aos="zoom-in">
        <div class="sliding-project-container">
            <div class="sliding-project-left">
                <div class="sliding-project-subtitle">CORPORATE INSTALLATION</div>
                <h2 class="sliding-project-title">Conference Center Transformation</h2>
                <p class="sliding-project-text">
                    A major corporate conference center needed flexible space division for multiple simultaneous events. Our sliding partitions provided the perfect solution, allowing the space to be configured as one large hall or multiple smaller rooms.
                </p>
                <p class="sliding-project-text">
                    The installation featured floor-to-ceiling sliding partitions with acoustic insulation, allowing simultaneous events without sound interference. The automatic operation enabled quick configuration changes between sessions.
                </p>
                <p class="sliding-project-text">
                    This project successfully created a versatile multi-purpose space that could adapt to different event requirements while maintaining a premium aesthetic.
                </p>
                <ul class="sliding-project-list">
                    <li>Project Type: Corporate Conference Center</li>
                    <li>Partition Type: Automatic Sliding Partitions</li>
                    <li>Special Features: Acoustic Insulation, Automatic Operation</li>
                    <li>Project Completion Time: 6 Weeks</li>
                </ul>
            </div>

            <div class="sliding-project-right">
                <img src="../slim-partition/13.jpg" alt="Conference Center Project">
            </div>
        </div>
    </section>

    <section class="sliding-faq-section" data-aos="zoom-in">
        <h2 class="sliding-faq-title">SLIDING PARTITION FAQS</h2>
        <div class="sliding-faq-container">
            <div class="sliding-faq-item">
                <div class="sliding-faq-question">
                    What is the maximum size for sliding partitions?
                    <span class="sliding-faq-icon">⌄</span>
                </div>
                <div class="sliding-faq-answer">
                    We can manufacture sliding partitions up to 6 meters in height and 12 meters in width. For larger requirements, we can create multiple panels that operate in sync.
                </div>
            </div>

            <div class="sliding-faq-item">
                <div class="sliding-faq-question">
                    Can sliding partitions be soundproof?
                    <span class="sliding-faq-icon">⌄</span>
                </div>
                <div class="sliding-faq-answer">
                    Yes, we offer specialized acoustic sliding partitions with double glazing, special seals, and sound-absorbing materials that can achieve up to 45dB sound reduction.
                </div>
            </div>

            <div class="sliding-faq-item">
                <div class="sliding-faq-question">
                    What maintenance do sliding partitions require?
                    <span class="sliding-faq-icon">⌄</span>
                </div>
                <div class="sliding-faq-answer">
                    Regular cleaning of glass and tracks with mild detergent is recommended. Tracks should be kept free of debris. We recommend annual professional maintenance for automatic systems.
                </div>
            </div>

            <div class="sliding-faq-item">
                <div class="sliding-faq-question">
                    How long does installation take?
                    <span class="sliding-faq-icon">⌄</span>
                </div>
                <div class="sliding-faq-answer">
                    Standard installations take 2-5 days depending on complexity. Large or automated systems may require 1-2 weeks. We provide detailed timelines during project planning.
                </div>
            </div>
        </div>
        <button class="sliding-faq-btn">View All FAQs</button>
    </section>

    <script>
        function slidingProdOpenPopup(title, desc, img) {
            document.getElementById("slidingProdPopupTitle").innerText = title;
            document.getElementById("slidingProdPopupDesc").innerText = desc;
            document.getElementById("slidingProdPopupImg").src = img;
            document.getElementById("slidingProdPopup").classList.add("active");
            document.body.style.overflow = 'hidden'; // Prevent background scroll
        }

        function slidingProdClosePopup() {
            document.getElementById("slidingProdPopup").classList.remove("active");
            document.body.style.overflow = 'auto'; // Restore scroll
        }

        const slidingFaqItems = document.querySelectorAll(".sliding-faq-item");
        slidingFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                slidingFaqItems.forEach(i => {
                    if (i !== item) {
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });

        const slidingProducts = [{
                img: "slim-partition/8.jpg",
                title: "GLASS SLIDING PARTITION",
                category: "Office Partition System",
                price: "Custom Quote",
                rating: "★★★★★ (4.8)",
                desc: "Premium glass sliding partition with aluminum framing. Features silent sliding mechanism and excellent acoustic insulation.",
                types: ["Manual", "Automatic", "Semi-Automatic"],
                activeType: "Semi-Automatic",
                finishes: ["#c6a98c", "#ffffff", "#1e1e1e"]
            },
            {
                img: "slim-partition/9.jpg",
                title: "WOODEN SLIDING PARTITION",
                category: "Residential System",
                price: "Custom Quote",
                rating: "★★★★☆ (4.6)",
                desc: "Elegant wooden sliding partition with natural finish. Perfect for residential and hospitality applications.",
                types: ["Manual", "Pocket", "Bi-fold"],
                activeType: "Pocket",
                finishes: ["#8B4513", "#D2B48C", "#A0522D"]
            },
            {
                img: "slim-partition/10.jpg",
                title: "AUTOMATIC SLIDING PARTITION",
                category: "Commercial System",
                price: "Custom Quote",
                rating: "★★★★★ (5.0)",
                desc: "Fully automatic sliding partition with sensor controls and remote operation. Ideal for commercial spaces.",
                types: ["Sensor", "Remote", "Button"],
                activeType: "Sensor",
                finishes: ["#c6a98c", "#1e1e1e", "#ffffff"]
            },
            {
                img: "slim-partition/11.jpg",
                title: "ACOUSTIC SLIDING PARTITION",
                category: "Conference System",
                price: "Custom Quote",
                rating: "★★★★☆ (4.7)",
                desc: "Soundproof sliding partition with enhanced acoustic performance. Perfect for conference rooms and studios.",
                types: ["Double Glazed", "Laminated", "Acoustic"],
                activeType: "Acoustic",
                finishes: ["#ffffff", "#1e1e1e", "#c6a98c"]
            },
            {
                img: "slim-partition/12.jpg",
                title: "ALUMINIUM SLIDING PARTITION",
                category: "Industrial System",
                price: "Custom Quote",
                rating: "★★★★☆ (4.5)",
                desc: "Heavy-duty aluminum sliding partition with industrial-grade hardware. Durable and long-lasting.",
                types: ["Heavy Duty", "Standard", "Lightweight"],
                activeType: "Heavy Duty",
                finishes: ["#1e1e1e", "#c6a98c", "#ffffff"]
            }
        ];

        function changeSlidingProduct(el) {
            const p = slidingProducts[el.dataset.index];

            document.getElementById("slidingMainImg").src = p.img;
            document.getElementById("slidingPTitle").innerText = p.title;
            document.getElementById("slidingPCategory").innerText = p.category;
            document.getElementById("slidingPPrice").innerText = p.price;
            document.getElementById("slidingPRating").innerText = p.rating;
            document.getElementById("slidingPDesc").innerText = p.desc;

            const typesBox = document.getElementById("slidingPSizes");
            typesBox.innerHTML = "<strong>Type:</strong><br>";
            p.types.forEach(s => {
                const span = document.createElement("span");
                span.innerText = s;
                if (s === p.activeType) span.classList.add("active");
                typesBox.appendChild(span);
            });

            const finishBox = document.getElementById("slidingPColors");
            finishBox.innerHTML = "<strong>Finish:</strong><br>";
            p.finishes.forEach(c => {
                const span = document.createElement("span");
                span.style.background = c;
                finishBox.appendChild(span);
            });

            document.querySelectorAll(".sliding-thumbs img")
                .forEach(img => img.classList.remove("active"));
            el.classList.add("active");
        }

        // Close popup when clicking outside
        document.getElementById('slidingProdPopup').addEventListener('click', function(e) {
            if (e.target === this) {
                slidingProdClosePopup();
            }
        });

        // Close popup with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && document.getElementById('slidingProdPopup').classList.contains('active')) {
                slidingProdClosePopup();
            }
        });
    </script>
    <?php include "footer.php"?>