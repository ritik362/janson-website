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
            /* --hydraulichinge-container-width: 1400px; */
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
        .hydraulichinge-hero-section {
            position: relative;
            width: 100%;
            height: 360px;
            overflow: hidden;
        }

        .hydraulichinge-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
        }

        .hydraulichinge-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .hydraulichinge-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .hydraulichinge-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* CONTENT BOX */
        .hydraulichinge-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -60px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .hydraulichinge-content-wrapper {
            max-width: var(--hydraulichinge-container-width);
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .hydraulichinge-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .hydraulichinge-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .hydraulichinge-hero-content h1 {
                font-size: 32px;
            }

            .hydraulichinge-content-wrapper {
                grid-template-columns: 1fr;
            }
        }

        /* BENEFITS SECTION */
        .hydraulichinge-benefits-wrapper {
            max-width: var(--hydraulichinge-container-width);
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING */
        .hydraulichinge-card {
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

        .hydraulichinge-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .hydraulichinge-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL */
        .hydraulichinge-tag {
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
        .hydraulichinge-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE */
        .hydraulichinge-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .hydraulichinge-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN */
        .hydraulichinge-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE */
        .hydraulichinge-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .hydraulichinge-benefits-wrapper {
                flex-direction: column;
            }

            .hydraulichinge-plus,
            .hydraulichinge-dotted-line {
                display: none;
            }
        }

        /* MAIN SECTION */
        .hydraulichinge-main-section {
            max-width: var(--hydraulichinge-container-width);
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE */
        .hydraulichinge-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH */
        .hydraulichinge-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK */
        .hydraulichinge-discuss-link {
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

        .hydraulichinge-discuss-link:hover {
            color: var(--text-heading);
        }

        .hydraulichinge-discuss-link .hydraulichinge-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW */
        .hydraulichinge-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE */
        .hydraulichinge-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT */
        .hydraulichinge-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .hydraulichinge-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .hydraulichinge-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hydraulichinge-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS */
        .hydraulichinge-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .hydraulichinge-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .hydraulichinge-row {
                flex-direction: column;
            }

            .hydraulichinge-left-img img {
                width: 100%;
                height: auto;
            }

            .hydraulichinge-main-section h1 {
                font-size: 30px;
            }

            .hydraulichinge-main-section {
                padding: 50px 20px;
            }
        }

    /* PRODUCTS SECTION */
    .hydraulichinge-prod-section{
        max-width: var(--hydraulichinge-container-width);
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .hydraulichinge-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* PRODUCT GRID */
    .hydraulichinge-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* PRODUCT CARD */
    .hydraulichinge-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .hydraulichinge-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .hydraulichinge-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .hydraulichinge-prod-card-info{
        padding:15px;
    }

    .hydraulichinge-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .hydraulichinge-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* PRODUCT POPUP */
    .hydraulichinge-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .hydraulichinge-prod-popup.active{
        display:flex;
    }

    .hydraulichinge-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:hydraulichingeProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes hydraulichingeProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .hydraulichinge-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .hydraulichinge-prod-popup-content{
        padding:20px;
    }

    .hydraulichinge-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .hydraulichinge-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .hydraulichinge-prod-btn{
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

    .hydraulichinge-prod-btn:hover {
        background-color: #b5987a;
    }

    .hydraulichinge-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }

    /* EXPORT SECTION */
    .hydraulichinge-export-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .hydraulichinge-export-container{
        max-width: var(--hydraulichinge-container-width);
        padding: 0px 50px;
        margin:auto;
    }

    .hydraulichinge-export-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .hydraulichinge-export-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .hydraulichinge-export-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .hydraulichinge-export-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .hydraulichinge-export-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP */
    .hydraulichinge-export-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD */
    .hydraulichinge-export-card{
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

    .hydraulichinge-export-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .hydraulichinge-export-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .hydraulichinge-export-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .hydraulichinge-export-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .hydraulichinge-export-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST */
    .hydraulichinge-export-list{
        list-style:none;
        padding-left:0;
    }

    .hydraulichinge-export-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .hydraulichinge-export-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .hydraulichinge-export-card-wrap{
            flex-direction:column;
        }
        .hydraulichinge-export-card{
            min-width:100%;
        }
    }

    /* PROJECT SECTION */
    .hydraulichinge-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .hydraulichinge-project-container{
        max-width: 1350px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT */
    .hydraulichinge-project-left{
        flex:1;
    }

    .hydraulichinge-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .hydraulichinge-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .hydraulichinge-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS */
    .hydraulichinge-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .hydraulichinge-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .hydraulichinge-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE */
    .hydraulichinge-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .hydraulichinge-project-container{
            flex-direction:column;
        }

        .hydraulichinge-project-right img{
            width:100%;
            height:auto;
        }
    }

    /* FAQ SECTION */
    .hydraulichinge-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE */
    .hydraulichinge-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER */
    .hydraulichinge-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM */
    .hydraulichinge-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .hydraulichinge-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .hydraulichinge-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON */
    .hydraulichinge-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT */
    .hydraulichinge-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .hydraulichinge-faq-item.active .hydraulichinge-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE */
    .hydraulichinge-faq-item.active .hydraulichinge-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON */
    .hydraulichinge-faq-btn{
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

    .hydraulichinge-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="hydraulichinge-hero-section">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=1600" alt="Hydraulic Hinge Background">
        <div class="hydraulichinge-hero-content">
            <h5>HYDRAULIC HINGE SYSTEMS</h5>
            <h1>PRECISION ENGINEERED HYDRAULIC HINGES FOR SMOOTH DOOR CONTROL</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="hydraulichinge-content-box">
        <div class="hydraulichinge-content-wrapper">
            <div>
                <h2 class="hydraulichinge-content-title">HYDRAULIC HINGE MANUFACTURER IN INDIA</h2>
            </div>
            <div class="hydraulichinge-content-text">
                <p>
                    As one of the major Hydraulic Hinge manufacturers, we specialize in the production of high-quality hinges engineered to assure smooth, controlled, and reliable door movements for various architectural and interior applications. Our hydraulic hinges are designed with advanced technology in their making to ensure quiet operation, self-closing, and enhanced durability, hence ideal for residential and commercial settings.
                </p>
                <p>
                    Each hinge is made with superior quality raw materials, including stainless steel, brass, or a zinc alloy that guarantees excellent resistance to corrosion, wear, and environmental stress. Our hydraulic hinges offer the best possible performance with sleek aesthetics and accurate engineering to maintain the elegance of modern interiors.
                </p>
                <p>
                    Whether for glass doors, wood panels, or aluminum frames, the hinges offered by us will ensure strength, stability, and long-term reliability, adding a professional finish to every installation.
                </p>
            </div>
        </div>
    </section>

    <div class="hydraulichinge-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="hydraulichinge-card">
            <div class="hydraulichinge-tag">Benefits</div>
            <img class="hydraulichinge-icon" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
            <div class="hydraulichinge-card-title">SMOOTH OPERATION</div>
            <p>
                Smooth and noiseless operation because of advanced hydraulic technology. Allows doors to shut soft and tight without percussion with self-closing device.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="hydraulichinge-plus">+</div>

        <!-- CARD 2 -->
        <div class="hydraulichinge-card">
            <div class="hydraulichinge-tag">Benefits</div>
            <img class="hydraulichinge-icon" src="https://cdn-icons-png.flaticon.com/512/3033/3033143.png">
            <div class="hydraulichinge-card-title">INCREASED STRENGTH</div>
            <p>
                Designed for heavy-duty applications with long operational life. Best for humid or high-moisture areas with corrosion and rust resistance.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="hydraulichinge-dotted-line"></div>

        <!-- CARD 3 -->
        <div class="hydraulichinge-card hydraulichinge-right-card">
            <div class="hydraulichinge-tag">Benefits</div>
            <img class="hydraulichinge-icon" src="https://cdn-icons-png.flaticon.com/512/3022/3022553.png">
            <div class="hydraulichinge-card-title">SAFETY & ELEGANCE</div>
            <p>
                Prevents sudden slamming, hence protecting glass integrity along with frame integrity. Sleek, modern design suitable for premium interior settings with low maintenance needs.
            </p>
        </div>
    </div>

    <section class="hydraulichinge-main-section">
        <h1>HYDRAULIC HINGE SUPPLIER IN INDIA</h1>
        <p>
            Being one of the most trusted Hydraulic Hinge suppliers, we render reliable door solutions that blend innovation with strength. Having a vast product range allows us to cater to the needs of architects, builders, and interior designers who seek high-quality hardware for modern construction and renovation projects.
        </p>
        <p>
            We have a strong supply network that ensures timely delivery with consistent quality and total client satisfaction. Every hinge is checked for precision, functionality, and endurance to ensure flawless performance in all applications, from glass doors and cabinets to heavy-duty commercial entrances.
        </p>

        <a href="#" class="hydraulichinge-discuss-link">
            Request a Quote
            <div class="hydraulichinge-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="hydraulichinge-row">
            <!-- LEFT IMAGE -->
            <div class="hydraulichinge-left-img">
                <img src="drive-download-20251210T094305Z-3-001/Hydraulic Auto Hinges/1.jpeg" alt="Hydraulic Hinge Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="hydraulichinge-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Hydraulic Hinge Solutions</h2>
                <p>
                    Our hydraulic hinges feature premium-quality stainless steel or zinc alloy body with adjustable closing and latching speed. Designed with anti-corrosion and moisture-resistant coating for long-lasting performance.
                </p>
                <p>
                    Compatible with framed and frameless glass doors, available in 90°, 135°, and 180° configurations. Featuring sleek, space-efficient design for modern interiors while being tested for thousands of opening and closing cycles.
                </p>
                <p>
                    Engineered for ease of installation and access for maintenance, our hydraulic hinges provide reliable door control in both residential and commercial applications while maintaining elegant aesthetics.
                </p>
                <ul class="hydraulichinge-ul">
                    <li>Premium-quality stainless steel or zinc alloy body</li>
                    <li>Adjustable closing and latching speed</li>
                    <li>Anti-corrosion and moisture-resistant coating</li>
                    <li>Compatible with framed and frameless glass doors</li>
                    <li>90°, 135°, and 180° configurations available</li>
                    <li>Sleek, space-efficient design for modern interiors</li>
                    <li>Tested for thousands of opening and closing cycles</li>
                    <li>Ease of installation and access for maintenance</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="hydraulichinge-prod-section">
        <h2 class="hydraulichinge-prod-title">OUR HYDRAULIC HINGE PRODUCTS</h2>
        <div class="hydraulichinge-prod-grid">
            <!-- CARD 1 -->
            <div class="hydraulichinge-prod-card" onclick="hydraulichingeProdOpenPopup('Stainless Steel Hydraulic Hinge','Premium stainless steel hydraulic hinge with adjustable speed. Ideal for glass doors.','drive-download-20251210T094305Z-3-001/Hydraulic Auto Hinges/2.jpeg')">
                <img class="hydraulichinge-prod-card-img" src="drive-download-20251210T094305Z-3-001/Hydraulic Auto Hinges/2.jpeg">
                <div class="hydraulichinge-prod-card-info">
                    <h3>Stainless Steel Hinge</h3>
                    <p>Adjustable speed control</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="hydraulichinge-prod-card" onclick="hydraulichingeProdOpenPopup('Heavy Duty Hydraulic Hinge','Heavy duty hydraulic hinge for commercial applications. Supports heavy glass doors.','drive-download-20251210T094305Z-3-001/Hydraulic Auto Hinges/image.png')">
                <img class="hydraulichinge-prod-card-img" src="drive-download-20251210T094305Z-3-001/Hydraulic Auto Hinges/image.png">
                <div class="hydraulichinge-prod-card-info">
                    <h3>Heavy Duty Hinge</h3>
                    <p>Commercial grade strength</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="hydraulichinge-prod-card" onclick="hydraulichingeProdOpenPopup('Concealed Hydraulic Hinge','Concealed hydraulic hinge for seamless integration. Hidden mechanism for modern interiors.','drive-download-20251210T094305Z-3-001/Hydraulic Auto Hinges/image copy.png')">
                <img class="hydraulichinge-prod-card-img" src="drive-download-20251210T094305Z-3-001/Hydraulic Auto Hinges/image copy.png">
                <div class="hydraulichinge-prod-card-info">
                    <h3>Concealed Hinge</h3>
                    <p>Seamless hidden installation</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="hydraulichinge-prod-popup" id="hydraulichingeProdPopup">
        <span class="hydraulichinge-prod-close" onclick="hydraulichingeProdClosePopup()">&times;</span>
        <div class="hydraulichinge-prod-popup-box">
            <img id="hydraulichingeProdPopupImg" class="hydraulichinge-prod-popup-img">
            <div class="hydraulichinge-prod-popup-content">
                <h2 id="hydraulichingeProdPopupTitle"></h2>
                <p id="hydraulichingeProdPopupDesc"></p>
                <a href="#" class="hydraulichinge-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="hydraulichinge-export-section">
        <div class="hydraulichinge-export-container">
            <div class="hydraulichinge-export-top-title">EXPORT QUALITY</div>
            <h2 class="hydraulichinge-export-heading">HYDRAULIC HINGE EXPORTER IN INDIA</h2>
            <p class="hydraulichinge-export-desc">
                Being an established Hydraulic Hinge exporter, we are proud of delivering high-performance door hardware solutions to international clients who value quality, precision, and reliability. We manufacture export-grade hinges as per international standards, ensuring superior operation, aesthetic appeal, and long-term dependability.
            </p>
            
            <a href="#" class="hydraulichinge-export-link">
                International Enquiries
                <div class="hydraulichinge-export-line"></div>
            </a>

            <div class="hydraulichinge-export-card-wrap">
                <div class="hydraulichinge-export-card">
                    <div class="hydraulichinge-export-card-title">Global Standards</div>
                    <p>
                        We have clients all over the world in residential, commercial, and industrial sectors. Every export consignment is securely packed, strictly tested, and shipped with care to arrive safely and make for easy installation.
                    </p>
                    <hr>
                    <div class="hydraulichinge-export-card-subtitle">Our Export Advantages:</div>
                    <ul class="hydraulichinge-export-list">
                        <li>Manufactured to international standards</li>
                        <li>Superior operation and aesthetic appeal</li>
                        <li>Securely packed for international transit</li>
                        <li>Strict testing before shipment</li>
                    </ul>
                </div>

                <div class="hydraulichinge-export-card">
                    <div class="hydraulichinge-export-card-title">International Recognition</div>
                    <p>
                        A focused commitment to technological innovation and detailed craftsmanship has won us a strong reputation as one of the most trustworthy names in architectural hardware exports.
                    </p>
                    <hr>
                    <div class="hydraulichinge-export-card-subtitle">Global Market Reach:</div>
                    <ul class="hydraulichinge-export-list">
                        <li>Trustworthy name in exports</li>
                        <li>Technological innovation focus</li>
                        <li>Detailed craftsmanship</li>
                        <li>Strong international reputation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="hydraulichinge-project-section">
        <div class="hydraulichinge-project-container">
            <div class="hydraulichinge-project-left">
                <div class="hydraulichinge-project-subtitle">CORPORATE OFFICE PROJECT</div>
                <h2 class="hydraulichinge-project-title">Headquarters Glass Door System</h2>
                <p class="hydraulichinge-project-text">
                    A multinational corporation required high-performance hydraulic hinges for their new headquarters featuring extensive glass door systems. Our heavy-duty hydraulic hinges were selected for their smooth operation and reliability in high-traffic areas.
                </p>
                <p class="hydraulichinge-project-text">
                    The installation featured concealed hydraulic hinges with adjustable closing speed, allowing for perfect door control without slamming. The hinges were integrated with specialized dampening systems for silent operation in professional environments.
                </p>
                <p class="hydraulichinge-project-text">
                    This project enhanced the corporate building's professional appearance while providing reliable door operation that withstands constant daily use, receiving positive feedback from both management and employees.
                </p>
                <ul class="hydraulichinge-project-list">
                    <li>Project Type: Corporate Headquarters Glass Doors</li>
                    <li>Product Type: Heavy Duty Hydraulic Hinges</li>
                    <li>Special Features: Adjustable Speed, Concealed Installation</li>
                    <li>Project Completion Time: 6 Weeks</li>
                </ul>
            </div>
            
            <div class="hydraulichinge-project-right">
                <img src="drive-download-20251210T094305Z-3-001/Hydraulic Auto Hinges/image copy 2.png" alt="Corporate Hydraulic Hinge Project">
            </div>
        </div>
    </section>

    <section class="hydraulichinge-faq-section">
        <h2 class="hydraulichinge-faq-title">HYDRAULIC HINGE FAQS</h2>
        <div class="hydraulichinge-faq-container">
            <div class="hydraulichinge-faq-item">
                <div class="hydraulichinge-faq-question">
                    What is the maximum door weight hydraulic hinges can support?
                    <span class="hydraulichinge-faq-icon">⌄</span>
                </div>
                <div class="hydraulichinge-faq-answer">
                    Our hydraulic hinges are available in various load capacities ranging from 40kg to 120kg. For heavy commercial applications, we offer specialized models that can support up to 150kg with smooth hydraulic operation and controlled closing speed.
                </div>
            </div>

            <div class="hydraulichinge-faq-item">
                <div class="hydraulichinge-faq-question">
                    Can hydraulic hinges be adjusted after installation?
                    <span class="hydraulichinge-faq-icon">⌄</span>
                </div>
                <div class="hydraulichinge-faq-answer">
                    Yes, most of our hydraulic hinges feature adjustable mechanisms for closing speed, latching speed, and hold-open functions. These adjustments can be made using specialized tools to achieve perfect door operation according to specific requirements.
                </div>
            </div>

            <div class="hydraulichinge-faq-item">
                <div class="hydraulichinge-faq-question">
                    Are hydraulic hinges suitable for exterior doors?
                    <span class="hydraulichinge-faq-icon">⌄</span>
                </div>
                <div class="hydraulichinge-faq-answer">
                    Yes, we offer weather-resistant hydraulic hinges specifically designed for exterior applications. These feature enhanced corrosion protection, specialized seals, and temperature-stable hydraulic fluids for reliable performance in all weather conditions.
                </div>
            </div>

            <div class="hydraulichinge-faq-item">
                <div class="hydraulichinge-faq-question">
                    How often do hydraulic hinges require maintenance?
                    <span class="hydraulichinge-faq-icon">⌄</span>
                </div>
                <div class="hydraulichinge-faq-answer">
                    Our hydraulic hinges are designed for minimal maintenance. Under normal usage, they require inspection every 6-12 months and occasional lubrication. The hydraulic mechanism is sealed for life and typically doesn't require fluid replacement under normal conditions.
                </div>
            </div>
        </div>
        <button class="hydraulichinge-faq-btn">View All FAQs</button>
    </section>

    <script>
        function hydraulichingeProdOpenPopup(title, desc, img){
            document.getElementById("hydraulichingeProdPopupTitle").innerText = title;
            document.getElementById("hydraulichingeProdPopupDesc").innerText = desc;
            document.getElementById("hydraulichingeProdPopupImg").src = img;
            document.getElementById("hydraulichingeProdPopup").classList.add("active");
        }

        function hydraulichingeProdClosePopup(){
            document.getElementById("hydraulichingeProdPopup").classList.remove("active");
        }

        const hydraulichingeFaqItems = document.querySelectorAll(".hydraulichinge-faq-item");
        hydraulichingeFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                hydraulichingeFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });
    </script>
<?php include "footer.php"?>