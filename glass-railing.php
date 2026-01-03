<?php include "header.php"?>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #121212;
            --primary-light: #1E1E1E;
            --secondary-color: #C6A98C;
            --text-color: #E0E0E0;
            --text-heading: #FFFFFF;
            --light-color: #FFFFFF;
            --bg-light: #1E1E1E;
            --border-color: #333333;
            --font-primary: 'Poppins', sans-serif;
            /* --railing-container-width: 1400px; */
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
        }

        /* HERO SECTION */
        .railing-hero-section {
            position: relative;
            width: 100%;
            height: 360px;
            overflow: hidden;
        }

        .railing-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
        }

        .railing-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .railing-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .railing-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* CONTENT BOX */
        .railing-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -60px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .railing-content-wrapper {
            max-width: var(--railing-container-width);
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .railing-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .railing-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .railing-hero-content h1 {
                font-size: 32px;
            }

            .railing-content-wrapper {
                grid-template-columns: 1fr;
            }
        }

        /* BENEFITS SECTION */
        .railing-benefits-wrapper {
            max-width: var(--railing-container-width);
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING */
        .railing-card {
            width: 380px;
            background: var(--primary-light);
            padding: 55px 40px;
            text-align: center;
            border-bottom: 3px solid var(--secondary-color);
            position: relative;
            border-radius: var(--border-radius-main);
            box-shadow: var(--shadow-light);
            transition: transform var(--transition-speed);
        }

        .railing-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .railing-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL */
        .railing-tag {
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
        .railing-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE */
        .railing-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .railing-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN */
        .railing-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE */
        .railing-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .railing-benefits-wrapper {
                flex-direction: column;
            }

            .railing-plus,
            .railing-dotted-line {
                display: none;
            }
        }

        /* MAIN SECTION */
        .railing-main-section {
            max-width: var(--railing-container-width);
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE */
        .railing-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH */
        .railing-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK */
        .railing-discuss-link {
            display: inline-flex;
            align-items: center;
            gap: 15px;
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 60px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            transition: color var(--transition-speed);
        }

        .railing-discuss-link:hover {
            color: var(--text-heading);
        }

        .railing-discuss-link .railing-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW */
        .railing-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE */
        .railing-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT */
        .railing-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .railing-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .railing-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .railing-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS */
        .railing-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .railing-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .railing-row {
                flex-direction: column;
            }

            .railing-left-img img {
                width: 100%;
                height: auto;
            }

            .railing-main-section h1 {
                font-size: 30px;
            }

            .railing-main-section {
                padding: 50px 20px;
            }
        }

    /* PRODUCTS SECTION */
    .railing-prod-section{
        max-width: var(--railing-container-width);
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .railing-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* PRODUCT GRID */
    .railing-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* PRODUCT CARD */
    .railing-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .railing-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .railing-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .railing-prod-card-info{
        padding:15px;
    }

    .railing-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .railing-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* PRODUCT POPUP */
    .railing-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .railing-prod-popup.active{
        display:flex;
    }

    .railing-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:railingProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes railingProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .railing-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .railing-prod-popup-content{
        padding:20px;
    }

    .railing-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .railing-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .railing-prod-btn{
        display:inline-block;
        margin-top:15px;
        padding:10px 18px;
        background: var(--secondary-color);
        color: var(--primary-color);
        text-decoration:none;
        border-radius: var(--border-radius-main);
        font-weight: 600;
        transition: background-color var(--transition-speed);
    }

    .railing-prod-btn:hover {
        background-color: #b5987a;
    }

    .railing-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }

    /* EXPORT SECTION */
    .railing-export-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .railing-export-container{
        max-width: var(--railing-container-width);
        padding: 0px 50px;
        margin:auto;
    }

    .railing-export-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .railing-export-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .railing-export-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .railing-export-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .railing-export-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP */
    .railing-export-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD */
    .railing-export-card{
        background: var(--primary-light);
        flex:1;
        min-width:420px;
        padding:40px;
        border-bottom:4px solid var(--secondary-color);
        box-shadow: var(--shadow-light);
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
        transition: transform var(--transition-speed);
    }

    .railing-export-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .railing-export-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .railing-export-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .railing-export-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .railing-export-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST */
    .railing-export-list{
        list-style:none;
        padding-left:0;
    }

    .railing-export-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .railing-export-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .railing-export-card-wrap{
            flex-direction:column;
        }
        .railing-export-card{
            min-width:100%;
        }
    }

    /* PROJECT SECTION */
    .railing-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .railing-project-container{
        max-width: 1350px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT */
    .railing-project-left{
        flex:1;
    }

    .railing-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .railing-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .railing-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS */
    .railing-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .railing-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .railing-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE */
    .railing-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .railing-project-container{
            flex-direction:column;
        }

        .railing-project-right img{
            width:100%;
            height:auto;
        }
    }

    /* FAQ SECTION */
    .railing-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE */
    .railing-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER */
    .railing-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM */
    .railing-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .railing-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .railing-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON */
    .railing-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT */
    .railing-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .railing-faq-item.active .railing-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE */
    .railing-faq-item.active .railing-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON */
    .railing-faq-btn{
        margin-top:50px;
        padding:12px 25px;
        border:1px solid var(--secondary-color);
        color: var(--secondary-color);
        background:transparent;
        border-radius: var(--border-radius-main);
        font-size:16px;
        cursor:pointer;
        transition: var(--transition-speed);
        font-weight: 600;
    }

    .railing-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="railing-hero-section">
        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=1600" alt="Glass Railing Background">
        <div class="railing-hero-content">
            <h5>GLASS RAILING SYSTEMS</h5>
            <h1>PREMIUM GLASS RAILINGS FOR SAFETY WITH ELEGANCE</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="railing-content-box">
        <div class="railing-content-wrapper">
            <div>
                <h2 class="railing-content-title">GLASS RAILING MANUFACTURER IN INDIA</h2>
            </div>
            <div class="railing-content-text">
                <p>
                    As one of the pioneering glass railing manufacturers, we pride ourselves on the design and production of premium-quality railing systems that fuse safety, style, and strength in perfect harmony. Our glass railings are precisely fabricated to further modern architectural aesthetics with reliable support and clear, unobstructed views.
                </p>
                <p>
                    Engineered for versatility and elegance, they are ideal for balconies, staircases, terraces, decks, and commercial interiors. Each railing system is manufactured with toughened or laminated safety glass combined with durable stainless-steel or aluminum fittings.
                </p>
                <p>
                    Our state-of-the-art production facilities ensure that every product meets international standards for quality and safety. Be it a frameless look or a minimal framed design, our glass railings provide sophistication and structural integrity to any space.
                </p>
            </div>
        </div>
    </section>

    <div class="railing-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="railing-card">
            <div class="railing-tag">Benefits</div>
            <img class="railing-icon" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
            <div class="railing-card-title">SLEEK APPEARANCE</div>
            <p>
                Sleek, transparent, and luxurious in appearance, giving modern spaces their desired look. Made of tempered or laminated safety glass with strong metal fittings for durability and safety.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="railing-plus">+</div>

        <!-- CARD 2 -->
        <div class="railing-card">
            <div class="railing-tag">Benefits</div>
            <img class="railing-icon" src="https://cdn-icons-png.flaticon.com/512/3022/3022553.png">
            <div class="railing-card-title">UNOBSTRUCTED VIEWS</div>
            <p>
                Maximizes openness with safety and stability maintained. Resistant to corrosion, rust, and weather damage, ensuring long-term clarity and shine with low maintenance.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="railing-dotted-line"></div>

        <!-- CARD 3 -->
        <div class="railing-card railing-right-card">
            <div class="railing-tag">Benefits</div>
            <img class="railing-icon" src="https://cdn-icons-png.flaticon.com/512/3033/3033143.png">
            <div class="railing-card-title">VERSATILE APPLICATIONS</div>
            <p>
                Applied in residential, commercial, and architectural projects. Designed for rapid fitting with minimal visible hardware and available in various customization options.
            </p>
        </div>
    </div>

    <section class="railing-main-section">
        <h1>GLASS RAILING SUPPLIER IN INDIA</h1>
        <p>
            As a reputed Glass Railing supplier, we stake our reputation on superior railing solutions that address the aesthetic and structural demands of modern construction. Our broad product range caters to architects, builders, and designers looking for high-performance, visually stunning railing systems.
        </p>
        <p>
            We ensure this through a strong supply chain for timely delivery and quality, irrespective of the size of the project. From high-end villas and corporate buildings to shopping malls and hotels, our glass railings are trusted for their flawless finish, durability, and design flexibility. Each railing system supplied is carefully inspected to guarantee performance and safety excellence.
        </p>

        <a href="#" class="railing-discuss-link">
            Request a Quote
            <div class="railing-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="railing-row">
            <!-- LEFT IMAGE -->
            <div class="railing-left-img">
                <img src="drive-download-20251210T094305Z-3-001/(Mini) - Part of glass railing fitting accessories/2.jpeg" alt="Glass Railing Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="railing-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Glass Railing Solutions</h2>
                <p>
                    Our glass railings feature premium toughened or laminated glass panels with high-grade SS 304/316 or aluminum support systems. Available in frameless, semi-framed, or post-mounted options for versatile applications.
                </p>
                <p>
                    Designed with scratch, corrosion, and weather-resistant finishes, our railings are compatible with both indoor and outdoor applications. Featuring elegant edge polish and smooth surface finish for perfect aesthetics.
                </p>
                <p>
                    Available in clear, frosted, tinted, or decorative glass variants, our glass railings are engineered for easy installation and low maintenance while providing the perfect combination of safety and elegance.
                </p>
                <ul class="railing-ul">
                    <li>Premium toughened or laminated glass panels</li>
                    <li>Support systems: high-grade SS 304/316 or aluminum</li>
                    <li>Available options: frameless, semi-framed, or post-mounted</li>
                    <li>Scratch, corrosion, and weather-resistant finish</li>
                    <li>Compatible with indoor and outdoor applications</li>
                    <li>Elegant edge polish and smooth surface finish</li>
                    <li>Available in clear, frosted, tinted, or decorative glass variants</li>
                    <li>Engineered for easy installation and low maintenance</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="railing-prod-section">
        <h2 class="railing-prod-title">OUR GLASS RAILING PRODUCTS</h2>
        <div class="railing-prod-grid">
            <!-- CARD 1 -->
            <div class="railing-prod-card" onclick="railingProdOpenPopup('Frameless Glass Railing','Modern frameless glass railing system. Maximum transparency for balconies and staircases.','drive-download-20251210T094305Z-3-001/(KRA -222 spigot) -  part of glass railing fitting accessories/2.jpeg')">
                <img class="railing-prod-card-img" src="drive-download-20251210T094305Z-3-001/(KRA -222 spigot) -  part of glass railing fitting accessories/2.jpeg">
                <div class="railing-prod-card-info">
                    <h3>Frameless Glass Railing</h3>
                    <p>Maximum transparency design</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="railing-prod-card" onclick="railingProdOpenPopup('Stainless Steel Glass Railing','Stainless steel glass railing system. Durable and elegant for modern architecture.','drive-download-20251210T094305Z-3-001/(KRA -222 spigot) -  part of glass railing fitting accessories/3.jpeg')">
                <img class="railing-prod-card-img" src="drive-download-20251210T094305Z-3-001/(KRA -222 spigot) -  part of glass railing fitting accessories/3.jpeg">
                <div class="railing-prod-card-info">
                    <h3>Stainless Steel Railing</h3>
                    <p>Durable steel frame system</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="railing-prod-card" onclick="railingProdOpenPopup('Balcony Glass Railing','Premium balcony glass railing. Safety with unobstructed views for terraces.','drive-download-20251210T094305Z-3-001/(Spigot) Part of Glass Railing Fitting accessories/4.jpeg')">
                <img class="railing-prod-card-img" src="drive-download-20251210T094305Z-3-001/(Spigot) Part of Glass Railing Fitting accessories/4.jpeg">
                <div class="railing-prod-card-info">
                    <h3>Balcony Glass Railing</h3>
                    <p>Safety with panoramic views</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="railing-prod-popup" id="railingProdPopup">
        <span class="railing-prod-close" onclick="railingProdClosePopup()">&times;</span>
        <div class="railing-prod-popup-box">
            <img id="railingProdPopupImg" class="railing-prod-popup-img">
            <div class="railing-prod-popup-content">
                <h2 id="railingProdPopupTitle"></h2>
                <p id="railingProdPopupDesc"></p>
                <a href="#" class="railing-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="railing-export-section">
        <div class="railing-export-container">
            <div class="railing-export-top-title">EXPORT QUALITY</div>
            <h2 class="railing-export-heading">GLASS RAILING EXPORTER IN INDIA</h2>
            <p class="railing-export-desc">
                As a well-known exporter of Glass Railing, we are committed to providing the best railing systems with safety and sophistication in every design. Our export-grade glass railings are manufactured according to international standards, offering unparalleled strength, endurance, and aesthetic appearance.
            </p>
            
            <a href="#" class="railing-export-link">
                International Enquiries
                <div class="railing-export-line"></div>
            </a>

            <div class="railing-export-card-wrap">
                <div class="railing-export-card">
                    <div class="railing-export-card-title">Global Standards</div>
                    <p>
                        We work with overseas architects, developers, and distributors to deliver tailor-made solutions for different types of residential and commercial projects. Each export consignment is securely packed and fully tested prior to shipment.
                    </p>
                    <hr>
                    <div class="railing-export-card-subtitle">Our Export Advantages:</div>
                    <ul class="railing-export-list">
                        <li>Manufactured to international standards</li>
                        <li>Unparalleled strength and endurance</li>
                        <li>Securely packed for international transit</li>
                        <li>Fully tested before shipment</li>
                    </ul>
                </div>

                <div class="railing-export-card">
                    <div class="railing-export-card-title">International Recognition</div>
                    <p>
                        Our commitment to innovation, craftsmanship, and customer satisfaction has positioned us as a preferred exporter of premium glass railing systems globally, enhancing architectural excellence in every setting.
                    </p>
                    <hr>
                    <div class="railing-export-card-subtitle">Global Market Reach:</div>
                    <ul class="railing-export-list">
                        <li>Preferred exporter globally</li>
                        <li>Innovation and craftsmanship focus</li>
                        <li>Tailor-made solutions worldwide</li>
                        <li>Enhancing architectural excellence</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="railing-project-section">
        <div class="railing-project-container">
            <div class="railing-project-left">
                <div class="railing-project-subtitle">LUXURY RESIDENTIAL PROJECT</div>
                <h2 class="railing-project-title">Penthouse Terrace Glass Railing System</h2>
                <p class="railing-project-text">
                    A luxury penthouse required premium glass railings for their expansive terrace with panoramic city views. Our frameless glass railing system was selected for its elegant appearance and maximum transparency.
                </p>
                <p class="railing-project-text">
                    The installation featured 12mm toughened glass panels with minimal stainless steel clamps, creating an almost invisible barrier. The system included specialized anti-vibration fixtures and weather-resistant seals for outdoor durability.
                </p>
                <p class="railing-project-text">
                    This project transformed the penthouse terrace into a safe yet visually stunning outdoor space, providing unobstructed views while meeting all safety standards, receiving accolades from the homeowners and architectural team.
                </p>
                <ul class="railing-project-list">
                    <li>Project Type: Luxury Penthouse Terrace</li>
                    <li>Product Type: Frameless Glass Railing System</li>
                    <li>Special Features: 12mm Toughened Glass, Anti-vibration Fixtures</li>
                    <li>Project Completion Time: 8 Weeks</li>
                </ul>
            </div>
            
            <div class="railing-project-right">
                <img src="drive-download-20251210T094305Z-3-001/(Mini) - Part of glass railing fitting accessories/3.jpeg" alt="Penthouse Glass Railing Project">
            </div>
        </div>
    </section>

    <section class="railing-faq-section">
        <h2 class="railing-faq-title">GLASS RAILING FAQS</h2>
        <div class="railing-faq-container">
            <div class="railing-faq-item">
                <div class="railing-faq-question">
                    What thickness of glass is used for railings?
                    <span class="railing-faq-icon">⌄</span>
                </div>
                <div class="railing-faq-answer">
                    We typically use 10mm to 12mm toughened safety glass for standard applications. For extra-large panels or commercial projects, we recommend 12mm to 15mm glass. All our glass is tempered safety glass that meets international safety standards.
                </div>
            </div>

            <div class="railing-faq-item">
                <div class="railing-faq-question">
                    Are glass railings safe for high-rise buildings?
                    <span class="railing-faq-icon">⌄</span>
                </div>
                <div class="railing-faq-answer">
                    Yes, our glass railings are engineered specifically for high-rise applications. They undergo rigorous testing for wind load resistance, structural integrity, and impact resistance. We use specialized fixtures and mounting systems designed for high-altitude safety requirements.
                </div>
            </div>

            <div class="railing-faq-item">
                <div class="railing-faq-question">
                    Can glass railings withstand extreme weather conditions?
                    <span class="railing-faq-icon">⌄</span>
                </div>
                <div class="railing-faq-answer">
                    Absolutely. Our outdoor glass railings feature weather-resistant materials, specialized seals, and corrosion-proof hardware. The glass is treated to withstand UV exposure, temperature variations, and moisture without losing clarity or structural integrity.
                </div>
            </div>

            <div class="railing-faq-item">
                <div class="railing-faq-question">
                    How do you ensure secure installation of glass panels?
                    <span class="railing-faq-icon">⌄</span>
                </div>
                <div class="railing-faq-answer">
                    We use specialized clamping systems that distribute pressure evenly and prevent stress points. Our installation includes structural analysis of mounting points, precision leveling, and professional sealing. We provide detailed installation guidelines and can offer supervised installation services.
                </div>
            </div>
        </div>
        <button class="railing-faq-btn">View All FAQs</button>
    </section>

    <script>
        function railingProdOpenPopup(title, desc, img){
            document.getElementById("railingProdPopupTitle").innerText = title;
            document.getElementById("railingProdPopupDesc").innerText = desc;
            document.getElementById("railingProdPopupImg").src = img;
            document.getElementById("railingProdPopup").classList.add("active");
        }

        function railingProdClosePopup(){
            document.getElementById("railingProdPopup").classList.remove("active");
        }

        const railingFaqItems = document.querySelectorAll(".railing-faq-item");
        railingFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                railingFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });
    </script>
<?php include "footer.php"?>