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
            /* --spaider-container-width: 1400px; */
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
        .spaider-hero-section {
            position: relative;
            width: 100%;
            height: 360px;
            overflow: hidden;
        }

        .spaider-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
        }

        .spaider-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .spaider-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .spaider-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* CONTENT BOX */
        .spaider-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -60px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .spaider-content-wrapper {
            max-width: var(--spaider-container-width);
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .spaider-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .spaider-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .spaider-hero-content h1 {
                font-size: 32px;
            }

            .spaider-content-wrapper {
                grid-template-columns: 1fr;
            }
        }

        /* BENEFITS SECTION */
        .spaider-benefits-wrapper {
            max-width: var(--spaider-container-width);
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING */
        .spaider-card {
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

        .spaider-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .spaider-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL */
        .spaider-tag {
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
        .spaider-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE */
        .spaider-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .spaider-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN */
        .spaider-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE */
        .spaider-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .spaider-benefits-wrapper {
                flex-direction: column;
            }

            .spaider-plus,
            .spaider-dotted-line {
                display: none;
            }
        }

        /* MAIN SECTION */
        .spaider-main-section {
            max-width: var(--spaider-container-width);
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE */
        .spaider-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH */
        .spaider-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK */
        .spaider-discuss-link {
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

        .spaider-discuss-link:hover {
            color: var(--text-heading);
        }

        .spaider-discuss-link .spaider-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW */
        .spaider-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE */
        .spaider-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT */
        .spaider-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .spaider-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .spaider-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .spaider-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS */
        .spaider-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .spaider-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .spaider-row {
                flex-direction: column;
            }

            .spaider-left-img img {
                width: 100%;
                height: auto;
            }

            .spaider-main-section h1 {
                font-size: 30px;
            }

            .spaider-main-section {
                padding: 50px 20px;
            }
        }

    /* PRODUCTS SECTION */
    .spaider-prod-section{
        max-width: var(--spaider-container-width);
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .spaider-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* PRODUCT GRID */
    .spaider-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* PRODUCT CARD */
    .spaider-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .spaider-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .spaider-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .spaider-prod-card-info{
        padding:15px;
    }

    .spaider-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .spaider-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* PRODUCT POPUP */
    .spaider-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .spaider-prod-popup.active{
        display:flex;
    }

    .spaider-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:spaiderProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes spaiderProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .spaider-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .spaider-prod-popup-content{
        padding:20px;
    }

    .spaider-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .spaider-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .spaider-prod-btn{
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

    .spaider-prod-btn:hover {
        background-color: #b5987a;
    }

    .spaider-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }

    /* EXPORT SECTION */
    .spaider-export-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .spaider-export-container{
        max-width: var(--spaider-container-width);
        padding: 0px 50px;
        margin:auto;
    }

    .spaider-export-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .spaider-export-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .spaider-export-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .spaider-export-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .spaider-export-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP */
    .spaider-export-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD */
    .spaider-export-card{
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

    .spaider-export-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .spaider-export-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .spaider-export-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .spaider-export-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .spaider-export-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST */
    .spaider-export-list{
        list-style:none;
        padding-left:0;
    }

    .spaider-export-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .spaider-export-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .spaider-export-card-wrap{
            flex-direction:column;
        }
        .spaider-export-card{
            min-width:100%;
        }
    }

    /* PROJECT SECTION */
    .spaider-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .spaider-project-container{
        max-width: 1350px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT */
    .spaider-project-left{
        flex:1;
    }

    .spaider-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .spaider-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .spaider-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS */
    .spaider-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .spaider-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .spaider-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE */
    .spaider-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .spaider-project-container{
            flex-direction:column;
        }

        .spaider-project-right img{
            width:100%;
            height:auto;
        }
    }

    /* FAQ SECTION */
    .spaider-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE */
    .spaider-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER */
    .spaider-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM */
    .spaider-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .spaider-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .spaider-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON */
    .spaider-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT */
    .spaider-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .spaider-faq-item.active .spaider-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE */
    .spaider-faq-item.active .spaider-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON */
    .spaider-faq-btn{
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

    .spaider-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="spaider-hero-section">
        <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1600" alt="Spaider Fitting Background">
        <div class="spaider-hero-content">
            <h5>SPAIDER FITTING SYSTEMS</h5>
            <h1>HIGH-PERFORMANCE SPAIDER FITTINGS FOR MODERN GLASS FAÇADES</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="spaider-content-box">
        <div class="spaider-content-wrapper">
            <div>
                <h2 class="spaider-content-title">SPAIDER FITTING MANUFACTURER IN INDIA</h2>
            </div>
            <div class="spaider-content-text">
                <p>
                    As one of the leading Spaider Fitting manufacturers, we specialize in designing and producing high-performance glass façade fittings that embody excellent structural strength combined with architectural elegance. Our Spaider fittings are precisely engineered to provide both strong and stable support for frameless glass assemblies while maintaining their sleek and minimalistic appearance.
                </p>
                <p>
                    Made from high-grade stainless steel, every fitting guarantees superlative durability and resistance to corrosion, along with smooth finishing. Meant for modern architectural uses, our Spaider fittings allow the fixing of large glass panels securely, making for expanses and visually stunning glass structures.
                </p>
                <p>
                    These fittings are ideal for commercial buildings, airports, malls, showrooms, and modern residences where transparency and sophistication are key. We use advanced manufacturing technology and follow strict quality checks so that each Spaider fitting delivers uncompromising performance, safety, and aesthetic value, conforming to global standards of excellence in architectural hardware.
                </p>
            </div>
        </div>
    </section>

    <div class="spaider-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="spaider-card">
            <div class="spaider-tag">Benefits</div>
            <img class="spaider-icon" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
            <div class="spaider-card-title">MODERN AESTHETICS</div>
            <p>
                Creates a very modern aesthetic appeal, giving a frameless look into glass fronts. Can bear the load of big and heavy glass panels with high structural strength.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="spaider-plus">+</div>

        <!-- CARD 2 -->
        <div class="spaider-card">
            <div class="spaider-tag">Benefits</div>
            <img class="spaider-icon" src="https://cdn-icons-png.flaticon.com/512/3033/3033143.png">
            <div class="spaider-card-title">CORROSION RESISTANT</div>
            <p>
                Made of high-quality stainless steel, which can be used both outdoors and indoors. Engineered to resist harsh environmental conditions with weatherproof durability.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="spaider-dotted-line"></div>

        <!-- CARD 3 -->
        <div class="spaider-card spaider-right-card">
            <div class="spaider-tag">Benefits</div>
            <img class="spaider-icon" src="https://cdn-icons-png.flaticon.com/512/3022/3022553.png">
            <div class="spaider-card-title">FLEXIBLE DESIGN</div>
            <p>
                Available in 1-way, 2-way, 3-way, and 4-way configurations. Designed for precision alignment and long-term stability with easy installation and low maintenance.
            </p>
        </div>
    </div>

    <section class="spaider-main-section">
        <h1>SPAIDER FITTING SUPPLIER IN INDIA</h1>
        <p>
            As one of the reliable Spaider Fitting suppliers in this area of service provision, we provide top-notch façade hardware solutions personalized to the needs of architects, builders, and other construction professionals. An efficient supply chain ensures timely availability for projects that range from small glass partitions to large-scale structural façades.
        </p>
        <p>
            We are aware of the technical and aesthetic demands of present-day architecture and therefore provide fittings that beautifully combine beauty, safety, and endurance. Each product supplied is thoroughly inspected to ensure dimensional accuracy, strength, and flawless surface finish for complete client satisfaction and project success.
        </p>

        <a href="#" class="spaider-discuss-link">
            Request a Quote
            <div class="spaider-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="spaider-row">
            <!-- LEFT IMAGE -->
            <div class="spaider-left-img">
                <img src="drive-download-20251210T094305Z-3-001/Two Way Spider 180° Without Fin/1.jpeg" alt="Spaider Fitting Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="spaider-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Spaider Fitting Solutions</h2>
                <p>
                    Our Spaider fittings are constructed in premium stainless steel - SS 304/316 grade, available in single-point, double-point, and multi-arm variants. Offered with mirror, matte, and satin finish options to match architectural requirements.
                </p>
                <p>
                    Designed with high load-bearing capacity for large glass panels and excellent weather, moisture, and corrosion resistance. Compatible with glass thicknesses ranging from 10mm up to 19mm for versatile applications.
                </p>
                <p>
                    Engineered for structural stability and performance under pressure, our Spaider fittings are tested for reliability and feature easy integration with tension rods and glass connectors for complete façade systems.
                </p>
                <ul class="spaider-ul">
                    <li>Construction in premium stainless steel - SS 304/316 grade</li>
                    <li>Available in single-point, double-point, and multi-arm variants</li>
                    <li>Mirror, matte, and satin finish options available</li>
                    <li>High load-bearing capacity for large glass panels</li>
                    <li>Excellent weather, moisture, and corrosion resistance</li>
                    <li>Compatible with glass thicknesses ranging from 10mm up to 19mm</li>
                    <li>Structural stability and performance under pressure tested</li>
                    <li>Easy integration with tension rods and glass connectors</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="spaider-prod-section">
        <h2 class="spaider-prod-title">OUR SPAIDER FITTING PRODUCTS</h2>
        <div class="spaider-prod-grid">
            <!-- CARD 1 -->
            <div class="spaider-prod-card" onclick="spaiderProdOpenPopup('Single Point Spaider Fitting','Single point spaider fitting for minimalistic glass connections. Ideal for corner glass installations.','drive-download-20251210T094305Z-3-001/Two Way Connector With Fin/2.jpeg')">
                <img class="spaider-prod-card-img" src="drive-download-20251210T094305Z-3-001/Two Way Connector With Fin/2.jpeg">
                <div class="spaider-prod-card-info">
                    <h3>Single Point Fitting</h3>
                    <p>Minimalistic corner connections</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="spaider-prod-card" onclick="spaiderProdOpenPopup('Four-Arm Spaider Fitting','Four-arm spaider fitting for complex glass structures. Supports multiple glass panel connections.','drive-download-20251210T094305Z-3-001/Four Way Spider With Fin/1.jpeg')">
                <img class="spaider-prod-card-img" src="drive-download-20251210T094305Z-3-001/Four Way Spider With Fin/1.jpeg">
                <div class="spaider-prod-card-info">
                    <h3>Four-Arm Fitting</h3>
                    <p>Complex structural connections</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="spaider-prod-card" onclick="spaiderProdOpenPopup('Stainless Steel Spaider','Premium stainless steel spaider fitting. High strength for commercial glass façades.','drive-download-20251210T094305Z-3-001/Four Way Spider With Fin/1.jpeg')">
                <img class="spaider-prod-card-img" src="drive-download-20251210T094305Z-3-001/Four Way Spider With Fin/1.jpeg">
                <div class="spaider-prod-card-info">
                    <h3>Stainless Steel Spaider</h3>
                    <p>Commercial grade strength</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="spaider-prod-popup" id="spaiderProdPopup">
        <span class="spaider-prod-close" onclick="spaiderProdClosePopup()">&times;</span>
        <div class="spaider-prod-popup-box">
            <img id="spaiderProdPopupImg" class="spaider-prod-popup-img">
            <div class="spaider-prod-popup-content">
                <h2 id="spaiderProdPopupTitle"></h2>
                <p id="spaiderProdPopupDesc"></p>
                <a href="#" class="spaider-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="spaider-export-section">
        <div class="spaider-export-container">
            <div class="spaider-export-top-title">EXPORT QUALITY</div>
            <h2 class="spaider-export-heading">SPAIDER FITTING EXPORTER IN INDIA</h2>
            <p class="spaider-export-desc">
                We are a reputed exporter of Spaider Fitting and are committed to delivering world-class architectural fittings to clients across international markets. Our export-grade fittings are manufactured with superior precision, conforming to global standards pertaining to safety, design, and durability.
            </p>
            
            <a href="#" class="spaider-export-link">
                International Enquiries
                <div class="spaider-export-line"></div>
            </a>

            <div class="spaider-export-card-wrap">
                <div class="spaider-export-card">
                    <div class="spaider-export-card-title">Global Standards</div>
                    <p>
                        We are targeting international architects, façade consultants, and construction firms that require quality hardware for contemporary glass architecture. Every consignment is carefully packed for safe delivery and easy installation.
                    </p>
                    <hr>
                    <div class="spaider-export-card-subtitle">Our Export Advantages:</div>
                    <ul class="spaider-export-list">
                        <li>Manufactured with superior precision</li>
                        <li>Conforms to global safety standards</li>
                        <li>Carefully packed for international transit</li>
                        <li>Easy installation guidance provided</li>
                    </ul>
                </div>

                <div class="spaider-export-card">
                    <div class="spaider-export-card-title">International Recognition</div>
                    <p>
                        In fact, customization, innovation, and quality stand on the three pillars that firmly establish us as a reliable partner in the architectural hardware industry worldwide. With a commitment to excellence backed by years of expertise.
                    </p>
                    <hr>
                    <div class="spaider-export-card-subtitle">Global Market Reach:</div>
                    <ul class="spaider-export-list">
                        <li>Reliable partner worldwide</li>
                        <li>Customization and innovation focus</li>
                        <li>Years of expertise in exports</li>
                        <li>Commitment to excellence globally</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="spaider-project-section">
        <div class="spaider-project-container">
            <div class="spaider-project-left">
                <div class="spaider-project-subtitle">COMMERCIAL BUILDING PROJECT</div>
                <h2 class="spaider-project-title">Corporate Headquarters Glass Façade</h2>
                <p class="spaider-project-text">
                    A multinational corporation required advanced Spaider fittings for their new headquarters featuring a complete glass façade system. Our stainless steel Spaider fittings were selected for their structural strength and elegant appearance.
                </p>
                <p class="spaider-project-text">
                    The installation featured four-arm Spaider fittings supporting 15mm tempered glass panels across three floors. The system included specialized tension rods and custom-designed connectors for seamless glass-to-glass connections.
                </p>
                <p class="spaider-project-text">
                    This project created a stunning transparent façade while ensuring structural integrity and safety, receiving recognition for architectural excellence and receiving positive feedback from the architectural team and corporate management.
                </p>
                <ul class="spaider-project-list">
                    <li>Project Type: Corporate Headquarters Glass Façade</li>
                    <li>Product Type: Stainless Steel Spaider Fittings</li>
                    <li>Special Features: Four-Arm Design, Tension Rod Integration</li>
                    <li>Project Completion Time: 12 Weeks</li>
                </ul>
            </div>
            
            <div class="spaider-project-right">
                <img src="drive-download-20251210T094305Z-3-001/Four Way Spider With Fin/3.jpeg" alt="Commercial Spaider Fitting Project">
            </div>
        </div>
    </section>

    <section class="spaider-faq-section">
        <h2 class="spaider-faq-title">SPAIDER FITTING FAQS</h2>
        <div class="spaider-faq-container">
            <div class="spaider-faq-item">
                <div class="spaider-faq-question">
                    What is the maximum load capacity of Spaider fittings?
                    <span class="spaider-faq-icon">⌄</span>
                </div>
                <div class="spaider-faq-answer">
                    Our Spaider fittings are engineered to support significant loads. Standard fittings support 300-500kg per point, while heavy-duty models can handle up to 800kg. For specific project requirements, we offer customized solutions with engineered load calculations and certifications.
                </div>
            </div>

            <div class="spaider-faq-item">
                <div class="spaider-faq-question">
                    Can Spaider fittings be used for curved glass panels?
                    <span class="spaider-faq-icon">⌄</span>
                </div>
                <div class="spaider-faq-answer">
                    Yes, we offer specialized Spaider fittings designed specifically for curved and bent glass applications. These feature adjustable angles and specialized clamping systems that accommodate various curvature radii while maintaining structural integrity and aesthetic appeal.
                </div>
            </div>

            <div class="spaider-faq-item">
                <div class="spaider-faq-question">
                    What finishes are available for Spaider fittings?
                    <span class="spaider-faq-icon">⌄</span>
                </div>
                <div class="spaider-faq-answer">
                    We offer multiple finish options including mirror polished, satin, matte, and powder-coated finishes. For exterior applications, we recommend specialized coatings like PVDF or special anti-corrosion treatments for enhanced durability in harsh environmental conditions.
                </div>
            </div>

            <div class="spaider-faq-item">
                <div class="spaider-faq-question">
                    How do you ensure proper alignment during installation?
                    <span class="spaider-faq-icon">⌄</span>
                </div>
                <div class="spaider-faq-answer">
                    Our Spaider fittings feature precision engineering with adjustable components that allow for micro-adjustments during installation. We provide detailed installation manuals, templates, and can offer technical support or supervised installation services to ensure perfect alignment.
                </div>
            </div>
        </div>
        <button class="spaider-faq-btn">View All FAQs</button>
    </section>

    <script>
        function spaiderProdOpenPopup(title, desc, img){
            document.getElementById("spaiderProdPopupTitle").innerText = title;
            document.getElementById("spaiderProdPopupDesc").innerText = desc;
            document.getElementById("spaiderProdPopupImg").src = img;
            document.getElementById("spaiderProdPopup").classList.add("active");
        }

        function spaiderProdClosePopup(){
            document.getElementById("spaiderProdPopup").classList.remove("active");
        }

        const spaiderFaqItems = document.querySelectorAll(".spaider-faq-item");
        spaiderFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                spaiderFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });
    </script>
<?php include "footer.php"?>