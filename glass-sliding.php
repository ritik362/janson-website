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
            /* --slidingglass-container-width: 1400px; */
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
        .slidingglass-hero-section {
            position: relative;
            width: 100%;
            height: 360px;
            overflow: hidden;
        }

        .slidingglass-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
        }

        .slidingglass-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .slidingglass-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .slidingglass-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* CONTENT BOX */
        .slidingglass-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -60px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .slidingglass-content-wrapper {
            max-width: var(--slidingglass-container-width);
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .slidingglass-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .slidingglass-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .slidingglass-hero-content h1 {
                font-size: 32px;
            }

            .slidingglass-content-wrapper {
                grid-template-columns: 1fr;
            }
        }

        /* BENEFITS SECTION */
        .slidingglass-benefits-wrapper {
            max-width: var(--slidingglass-container-width);
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING */
        .slidingglass-card {
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

        .slidingglass-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .slidingglass-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL */
        .slidingglass-tag {
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
        .slidingglass-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE */
        .slidingglass-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .slidingglass-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN */
        .slidingglass-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE */
        .slidingglass-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .slidingglass-benefits-wrapper {
                flex-direction: column;
            }

            .slidingglass-plus,
            .slidingglass-dotted-line {
                display: none;
            }
        }

        /* MAIN SECTION */
        .slidingglass-main-section {
            max-width: var(--slidingglass-container-width);
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE */
        .slidingglass-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH */
        .slidingglass-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK */
        .slidingglass-discuss-link {
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

        .slidingglass-discuss-link:hover {
            color: var(--text-heading);
        }

        .slidingglass-discuss-link .slidingglass-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW */
        .slidingglass-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE */
        .slidingglass-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT */
        .slidingglass-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .slidingglass-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .slidingglass-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .slidingglass-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS */
        .slidingglass-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .slidingglass-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .slidingglass-row {
                flex-direction: column;
            }

            .slidingglass-left-img img {
                width: 100%;
                height: auto;
            }

            .slidingglass-main-section h1 {
                font-size: 30px;
            }

            .slidingglass-main-section {
                padding: 50px 20px;
            }
        }

    /* PRODUCTS SECTION */
    .slidingglass-prod-section{
        max-width: var(--slidingglass-container-width);
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .slidingglass-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* PRODUCT GRID */
    .slidingglass-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* PRODUCT CARD */
    .slidingglass-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .slidingglass-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .slidingglass-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .slidingglass-prod-card-info{
        padding:15px;
    }

    .slidingglass-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .slidingglass-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* PRODUCT POPUP */
    .slidingglass-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .slidingglass-prod-popup.active{
        display:flex;
    }

    .slidingglass-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:slidingglassProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes slidingglassProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .slidingglass-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .slidingglass-prod-popup-content{
        padding:20px;
    }

    .slidingglass-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .slidingglass-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .slidingglass-prod-btn{
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

    .slidingglass-prod-btn:hover {
        background-color: #b5987a;
    }

    .slidingglass-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }

    /* EXPORT SECTION */
    .slidingglass-export-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .slidingglass-export-container{
        max-width: var(--slidingglass-container-width);
        padding: 0px 50px;
        margin:auto;
    }

    .slidingglass-export-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .slidingglass-export-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .slidingglass-export-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .slidingglass-export-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .slidingglass-export-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP */
    .slidingglass-export-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD */
    .slidingglass-export-card{
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

        .slidingglass-export-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .slidingglass-export-card-title{
            font-size:26px;
            font-weight:700;
            margin-bottom:20px;
            color: var(--text-heading);
        }

        .slidingglass-export-card p{
            font-size:15px;
            line-height:1.7;
            color: var(--text-color);
            margin-bottom:30px;
        }

        .slidingglass-export-card hr{
            border:none;
            height:1px;
            background: var(--border-color);
            margin-bottom:20px;
        }

        .slidingglass-export-card-subtitle{
            font-size:15px;
            font-weight:600;
            color: var(--secondary-color);
            margin-bottom:12px;
        }

        /* LIST */
        .slidingglass-export-list{
            list-style:none;
            padding-left:0;
        }

        .slidingglass-export-list li{
            margin-bottom:8px;
            font-size:15px;
            color: var(--text-color);
        }

        .slidingglass-export-list li:before{
            content:"✔ ";
            color: var(--secondary-color);
            font-weight:700;
        }

        /* RESPONSIVE */
        @media(max-width:900px){
            .slidingglass-export-card-wrap{
                flex-direction:column;
            }
            .slidingglass-export-card{
                min-width:100%;
            }
        }

        /* PROJECT SECTION */
        .slidingglass-project-section{
            width:100%;
            padding:100px 20px;
            background: var(--primary-color);
        }

        .slidingglass-project-container{
            max-width: 1350px;
            margin:auto;
            display:flex;
            justify-content:space-between;
            align-items:flex-start;
            gap:50px;
        }

        /* LEFT CONTENT */
        .slidingglass-project-left{
            flex:1;
        }

        .slidingglass-project-subtitle{
            font-size:14px;
            letter-spacing:1px;
            color: var(--secondary-color);
            margin-bottom:20px;
            font-weight:500;
        }

        .slidingglass-project-title{
            font-size:38px;
            color: var(--text-heading);
            font-weight:700;
            margin-bottom:25px;
            line-height:1.3;
        }

        .slidingglass-project-text{
            font-size:16px;
            line-height:1.8;
            color: var(--text-color);
            margin-bottom:22px;
            max-width:650px;
        }

        /* BULLETS */
        .slidingglass-project-list{
            margin-top:10px;
            list-style:none;
            padding-left:0;
        }

        .slidingglass-project-list li{
            margin-bottom:10px;
            font-size:16px;
            color: var(--text-color);
            line-height:1.6;
        }

        .slidingglass-project-list li:before{
            content:"• ";
            font-size:20px;
            line-height:1;
            color: var(--secondary-color);
            font-weight:bold;
        }

        /* RIGHT IMAGE */
        .slidingglass-project-right img{
            width:650px;
            height:480px;
            object-fit:cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RESPONSIVE */
        @media(max-width:1000px){
            .slidingglass-project-container{
                flex-direction:column;
            }

            .slidingglass-project-right img{
                width:100%;
                height:auto;
            }
        }

        /* FAQ SECTION */
        .slidingglass-faq-section{
            width:100%;
            background: var(--primary-light);
            color: var(--text-heading);
            padding:100px 20px;
            text-align:center;
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }

        /* MAIN TITLE */
        .slidingglass-faq-title{
            font-size:40px;
            font-weight:700;
            margin-bottom:50px;
            letter-spacing:2px;
        }

        /* FAQ CONTAINER */
        .slidingglass-faq-container{
            max-width:1100px;
            margin:auto;
            text-align:left;
        }

        /* FAQ ITEM */
        .slidingglass-faq-item{
            width:100%;
            border-bottom:1px solid var(--border-color);
            padding:22px 10px;
            cursor:pointer;
            position:relative;
            transition: background-color var(--transition-speed);
        }

        .slidingglass-faq-item:hover {
            background-color: rgba(198, 169, 140, 0.05);
        }

        .slidingglass-faq-question{
            font-size:18px;
            font-weight:500;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        /* PLUS / MINUS ICON */
        .slidingglass-faq-icon{
            font-size:26px;
            font-weight:700;
            transition:0.3s;
            user-select:none;
            color: var(--secondary-color);
        }

        /* ANSWER CONTENT */
        .slidingglass-faq-answer{
            font-size:16px;
            color: var(--text-color);
            max-height:0;
            overflow:hidden;
            line-height:1.7;
            padding-right:35px;
            transition:max-height 0.4s ease;
        }

        .slidingglass-faq-item.active .slidingglass-faq-answer{
            margin-top:12px;
            max-height:300px;
        }

        /* CHANGE ICON WHEN ACTIVE */
        .slidingglass-faq-item.active .slidingglass-faq-icon{
            transform:rotate(180deg);
        }

        /* READ ALL BUTTON */
        .slidingglass-faq-btn{
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

        .slidingglass-faq-btn:hover{
            background: var(--secondary-color);
            color: var(--primary-color);
        }

    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="slidingglass-hero-section">
        <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1600" alt="Glass Sliding Background">
        <div class="slidingglass-hero-content">
            <h5>GLASS SLIDING SYSTEMS</h5>
            <h1>ELEGANT GLASS SLIDING DOORS FOR MODERN INTERIORS</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="slidingglass-content-box">
        <div class="slidingglass-content-wrapper">
            <div>
                <h2 class="slidingglass-content-title">GLASS SLIDING MANUFACTURER IN INDIA</h2>
            </div>
            <div class="slidingglass-content-text">
                <p>
                    As one of the leading Glass Sliding manufacturers, we specialize in designing and producing elegant, durable, and innovative sliding systems that enhance the aesthetics and functionality of modern interiors. Our glass sliding systems are engineered to ensure smooth, silent, and effortless operation while maximizing space utilisation and adding a touch of contemporary sophistication.
                </p>
                <p>
                    Each of the sliding systems is made with superior-quality materials such as toughened glass, aluminum, and stainless steel hardware for high strength, precision, and durability. Our glass sliding doors and partitions create a bright, open atmosphere in offices, residential spaces, commercial complexes, and hospitality environments.
                </p>
                <p>
                    We have state-of-the-art manufacturing facilities and are committed to excellence to ensure every product meets the highest standards of quality, design, and functionality.
                </p>
            </div>
        </div>
    </section>

    <div class="slidingglass-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="slidingglass-card">
            <div class="slidingglass-tag">Benefits</div>
            <img class="slidingglass-icon" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
            <div class="slidingglass-card-title">SPACE OPTIMIZATION</div>
            <p>
                Suitable for compact areas, thus allowing for movement without door swing space. Adds a modern and minimalist touch to any interior setting with elegant design.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="slidingglass-plus">+</div>

        <!-- CARD 2 -->
        <div class="slidingglass-card">
            <div class="slidingglass-tag">Benefits</div>
            <img class="slidingglass-icon" src="https://cdn-icons-png.flaticon.com/512/3022/3022553.png">
            <div class="slidingglass-card-title">SMOOTH OPERATION</div>
            <p>
                Fitted with high-quality rollers and tracks, ensuring smooth movement. Guarantee of silent, smooth functioning for ultimate comfort with noise-free mechanism.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="slidingglass-dotted-line"></div>

        <!-- CARD 3 -->
        <div class="slidingglass-card slidingglass-right-card">
            <div class="slidingglass-tag">Benefits</div>
            <img class="slidingglass-icon" src="https://cdn-icons-png.flaticon.com/512/3033/3033143.png">
            <div class="slidingglass-card-title">DURABLE & CUSTOM</div>
            <p>
                Made from toughened glass and corrosion-resistant fittings for long-lasting performance. Easy to clean and maintain, holding clarity and brilliance for years with custom solutions available.
            </p>
        </div>
    </div>

    <section class="slidingglass-main-section">
        <h1>GLASS SLIDING SUPPLIER IN INDIA</h1>
        <p>
            As one of the trusted Glass Sliding suppliers, we provide top-quality sliding door and partition systems to meet all requirements of architects, interior designers, and builders. Our effective supply chain and client-oriented approach bring timely delivery and complete satisfaction for every project.
        </p>
        <p>
            We provide sliding glass systems for residential and commercial use—flexible, elegant, and functional. Every product supplied is carefully checked to ensure quality, safety, and ease in operation, therefore making us the first choice supplier for various industries.
        </p>

        <a href="#" class="slidingglass-discuss-link">
            Request a Quote
            <div class="slidingglass-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="slidingglass-row">
            <!-- LEFT IMAGE -->
            <div class="slidingglass-left-img">
                <img src="drive-download-20251210T094305Z-3-001/Glass Sliding Door Lock (For Over Lap Glass)/2.jpeg" alt="Glass Sliding Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="slidingglass-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Glass Sliding Solutions</h2>
                <p>
                    Our glass sliding systems feature premium toughened or laminated glass panels with high-grade aluminum or stainless steel sliding tracks. Designed with smooth, soft-closing, and anti-jump mechanisms for perfect operation.
                </p>
                <p>
                    Available in different designs including frameless, semi-framed, or fully framed configurations with clear, frosted, tinted, or decorative glass finishes. Easy to install with minimal visible hardware for a clean, modern look.
                </p>
                <p>
                    Featuring corrosion and wear-resistant components suitable for residential, commercial and hospitality applications, our glass sliding systems provide the perfect combination of aesthetics and functionality for modern spaces.
                </p>
                <ul class="slidingglass-ul">
                    <li>Premium toughened or laminated glass panels</li>
                    <li>High-grade aluminum or stainless steel sliding tracks</li>
                    <li>Smooth, soft-closing, and anti-jump mechanisms</li>
                    <li>Different designs available: frameless, semi-framed, or fully framed</li>
                    <li>Available in clear, frosted, tinted, or decorative glass finishes</li>
                    <li>Easy to install, with minimal visible hardware</li>
                    <li>Corrosion and wear-resistant components</li>
                    <li>Suitable for residential, commercial and hospitality applications</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="slidingglass-prod-section">
        <h2 class="slidingglass-prod-title">OUR GLASS SLIDING PRODUCTS</h2>
        <div class="slidingglass-prod-grid">
            <!-- CARD 1 -->
            <div class="slidingglass-prod-card" onclick="slidingglassProdOpenPopup('Frameless Glass Sliding','Modern frameless glass sliding doors. Sleek design for contemporary interiors.','drive-download-20251210T094305Z-3-001/Glass Sliding Door Lock (For Over Lap Glass)/4.jpeg')">
                <img class="slidingglass-prod-card-img" src="drive-download-20251210T094305Z-3-001/Glass Sliding Door Lock (For Over Lap Glass)/4.jpeg">
                <div class="slidingglass-prod-card-info">
                    <h3>Frameless Glass Sliding</h3>
                    <p>Sleek contemporary design</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="slidingglass-prod-card" onclick="slidingglassProdOpenPopup('Aluminum Frame Sliding','Aluminum frame glass sliding doors. Durable and elegant solution.','drive-download-20251210T094305Z-3-001/Glass Sliding Door Lock (For Over Lap Glass)/6.jpeg')">
                <img class="slidingglass-prod-card-img" src="drive-download-20251210T094305Z-3-001/Glass Sliding Door Lock (For Over Lap Glass)/6.jpeg">
                <div class="slidingglass-prod-card-info">
                    <h3>Aluminum Frame Sliding</h3>
                    <p>Durable frame system</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="slidingglass-prod-card" onclick="slidingglassProdOpenPopup('Frosted Glass Sliding','Frosted glass sliding doors for privacy. Elegant and functional solution.','drive-download-20251210T094305Z-3-001/Glass Sliding Door Lock (For Over Lap Glass)/3.jpeg')">
                <img class="slidingglass-prod-card-img" src="drive-download-20251210T094305Z-3-001/Glass Sliding Door Lock (For Over Lap Glass)/3.jpeg">
                <div class="slidingglass-prod-card-info">
                    <h3>Frosted Glass Sliding</h3>
                    <p>Privacy with elegance</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="slidingglass-prod-popup" id="slidingglassProdPopup">
        <span class="slidingglass-prod-close" onclick="slidingglassProdClosePopup()">&times;</span>
        <div class="slidingglass-prod-popup-box">
            <img id="slidingglassProdPopupImg" class="slidingglass-prod-popup-img">
            <div class="slidingglass-prod-popup-content">
                <h2 id="slidingglassProdPopupTitle"></h2>
                <p id="slidingglassProdPopupDesc"></p>
                <a href="#" class="slidingglass-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="slidingglass-export-section">
        <div class="slidingglass-export-container">
            <div class="slidingglass-export-top-title">EXPORT QUALITY</div>
            <h2 class="slidingglass-export-heading">GLASS SLIDING EXPORTER IN INDIA</h2>
            <p class="slidingglass-export-desc">
                As an esteemed Glass Sliding exporter, we are proud to offer world-class sliding glass systems to global markets that promise superior quality, style, and performance. Our export-grade sliding solutions are engineered in compliance with international standards, making them ideal for contemporary architectural and interior design projects.
            </p>
            
            <a href="#" class="slidingglass-export-link">
                International Enquiries
                <div class="slidingglass-export-line"></div>
            </a>

            <div class="slidingglass-export-card-wrap">
                <div class="slidingglass-export-card">
                    <div class="slidingglass-export-card-title">Global Standards</div>
                    <p>
                        We offer complete export services, from design customization and quality testing to safe packaging and timely delivery, in order to make the entire process hassle-free for our international clients.
                    </p>
                    <hr>
                    <div class="slidingglass-export-card-subtitle">Our Export Advantages:</div>
                    <ul class="slidingglass-export-list">
                        <li>Engineered to international standards</li>
                        <li>Design customization available</li>
                        <li>Rigorous quality testing</li>
                        <li>Safe packaging and timely delivery</li>
                    </ul>
                </div>

                <div class="slidingglass-export-card">
                    <div class="slidingglass-export-card-title">International Recognition</div>
                    <p>
                        Our commitment to innovation, reliability, and excellence makes us a well-reputed name among overseas partners seeking high-performance glass sliding systems for modern spaces.
                    </p>
                    <hr>
                    <div class="slidingglass-export-card-subtitle">Global Market Reach:</div>
                    <ul class="slidingglass-export-list">
                        <li>Well-reputed name internationally</li>
                        <li>Overseas partners worldwide</li>
                        <li>High-performance systems</li>
                        <li>Commitment to innovation and excellence</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="slidingglass-project-section">
        <div class="slidingglass-project-container">
            <div class="slidingglass-project-left">
                <div class="slidingglass-project-subtitle">LUXURY RESIDENTIAL PROJECT</div>
                <h2 class="slidingglass-project-title">Penthouse Terrace Glass Sliding System</h2>
                <p class="slidingglass-project-text">
                    A luxury penthouse required seamless integration between indoor and outdoor living spaces. Our frameless glass sliding systems were selected for their elegant appearance and smooth operation, creating a perfect transition to the terrace.
                </p>
                <p class="slidingglass-project-text">
                    The installation featured extra-large glass panels with minimal frames, allowing unobstructed views and maximum natural light. The sliding system included weather-resistant seals and smooth roller mechanisms for effortless operation.
                </p>
                <p class="slidingglass-project-text">
                    This project transformed the penthouse living experience by creating a seamless indoor-outdoor connection while providing excellent thermal insulation and security, receiving accolades from the homeowners and architectural team.
                </p>
                <ul class="slidingglass-project-list">
                    <li>Project Type: Luxury Penthouse Terrace System</li>
                    <li>Product Type: Frameless Glass Sliding Doors</li>
                    <li>Special Features: Weather-Resistant Seals, Large Panels</li>
                    <li>Project Completion Time: 8 Weeks</li>
                </ul>
            </div>
            
            <div class="slidingglass-project-right">
                <img src="Mini Double Door Lock With Key/4.jpeg" alt="Penthouse Glass Sliding Project">
            </div>
        </div>
    </section>

    <section class="slidingglass-faq-section">
        <h2 class="slidingglass-faq-title">GLASS SLIDING FAQS</h2>
        <div class="slidingglass-faq-container">
            <div class="slidingglass-faq-item">
                <div class="slidingglass-faq-question">
                    What is the maximum size for glass sliding doors?
                    <span class="slidingglass-faq-icon">⌄</span>
                </div>
                <div class="slidingglass-faq-answer">
                    Our glass sliding doors can be manufactured up to 3 meters in height and 6 meters in width. For larger openings, we can create multi-panel systems with intermediate supports and specialized track systems to ensure smooth operation and structural integrity.
                </div>
            </div>

            <div class="slidingglass-faq-item">
                <div class="slidingglass-faq-question">
                    Can glass sliding doors be soundproof?
                    <span class="slidingglass-faq-icon">⌄</span>
                </div>
                <div class="slidingglass-faq-answer">
                    Yes, we offer acoustic glass sliding doors with specialized seals and double or triple glazing that provide excellent sound insulation. These systems can achieve STC ratings up to 45 dB, making them suitable for offices, conference rooms, and residential areas requiring noise control.
                </div>
            </div>

            <div class="slidingglass-faq-item">
                <div class="slidingglass-faq-question">
                    What maintenance do glass sliding systems require?
                    <span class="slidingglass-faq-icon">⌄</span>
                </div>
                <div class="slidingglass-faq-answer">
                    Regular maintenance includes cleaning tracks monthly, lubricating rollers quarterly, and checking seals annually. The glass requires standard cleaning with mild soap solution. Our systems are designed for minimal maintenance with high-quality, durable components.
                </div>
            </div>

            <div class="slidingglass-faq-item">
                <div class="slidingglass-faq-question">
                    Can sliding systems be motorized or automated?
                    <span class="slidingglass-faq-icon">⌄</span>
                </div>
                <div class="slidingglass-faq-answer">
                    Yes, we offer motorized and automated sliding systems with remote control, motion sensors, and smart home integration. These systems can be programmed for automatic opening/closing and can include safety features like obstacle detection and emergency manual operation.
                </div>
            </div>
        </div>
        <button class="slidingglass-faq-btn">View All FAQs</button>
    </section>

    <script>
        function slidingglassProdOpenPopup(title, desc, img){
            document.getElementById("slidingglassProdPopupTitle").innerText = title;
            document.getElementById("slidingglassProdPopupDesc").innerText = desc;
            document.getElementById("slidingglassProdPopupImg").src = img;
            document.getElementById("slidingglassProdPopup").classList.add("active");
        }

        function slidingglassProdClosePopup(){
            document.getElementById("slidingglassProdPopup").classList.remove("active");
        }

        const slidingglassFaqItems = document.querySelectorAll(".slidingglass-faq-item");
        slidingglassFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                slidingglassFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });
    </script>
<?php include "footer.php"?>