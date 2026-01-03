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
            /* --handle-container-width: 1400px; */
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
        .handle-hero-section {
            position: relative;
            width: 100%;
            height: 360px;
            overflow: hidden;
        }

        .handle-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
        }

        .handle-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .handle-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .handle-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* CONTENT BOX */
        .handle-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -60px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .handle-content-wrapper {
            max-width: var(--handle-container-width);
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .handle-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .handle-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .handle-hero-content h1 {
                font-size: 32px;
            }

            .handle-content-wrapper {
                grid-template-columns: 1fr;
            }
        }

        /* BENEFITS SECTION */
        .handle-benefits-wrapper {
            max-width: var(--handle-container-width);
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING */
        .handle-card {
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

        .handle-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .handle-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL */
        .handle-tag {
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
        .handle-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE */
        .handle-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .handle-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN */
        .handle-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE */
        .handle-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .handle-benefits-wrapper {
                flex-direction: column;
            }

            .handle-plus,
            .handle-dotted-line {
                display: none;
            }
        }

        /* MAIN SECTION */
        .handle-main-section {
            max-width: var(--handle-container-width);
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE */
        .handle-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH */
        .handle-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK */
        .handle-discuss-link {
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

        .handle-discuss-link:hover {
            color: var(--text-heading);
        }

        .handle-discuss-link .handle-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW */
        .handle-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE */
        .handle-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT */
        .handle-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .handle-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .handle-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .handle-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS */
        .handle-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .handle-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .handle-row {
                flex-direction: column;
            }

            .handle-left-img img {
                width: 100%;
                height: auto;
            }

            .handle-main-section h1 {
                font-size: 30px;
            }

            .handle-main-section {
                padding: 50px 20px;
            }
        }

    /* PRODUCTS SECTION */
    .handle-prod-section{
        max-width: var(--handle-container-width);
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .handle-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* PRODUCT GRID */
    .handle-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* PRODUCT CARD */
    .handle-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .handle-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .handle-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .handle-prod-card-info{
        padding:15px;
    }

    .handle-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .handle-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* PRODUCT POPUP */
    .handle-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .handle-prod-popup.active{
        display:flex;
    }

    .handle-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:handleProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes handleProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .handle-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .handle-prod-popup-content{
        padding:20px;
    }

    .handle-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .handle-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .handle-prod-btn{
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

    .handle-prod-btn:hover {
        background-color: #b5987a;
    }

    .handle-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }

    /* EXPORT SECTION */
    .handle-export-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .handle-export-container{
        max-width: var(--handle-container-width);
        padding: 0px 50px;
        margin:auto;
    }

    .handle-export-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .handle-export-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .handle-export-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .handle-export-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .handle-export-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP */
    .handle-export-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD */
    .handle-export-card{
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

    .handle-export-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .handle-export-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .handle-export-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .handle-export-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .handle-export-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST */
    .handle-export-list{
        list-style:none;
        padding-left:0;
    }

    .handle-export-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .handle-export-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .handle-export-card-wrap{
            flex-direction:column;
        }
        .handle-export-card{
            min-width:100%;
        }
    }

    /* PROJECT SECTION */
    .handle-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .handle-project-container{
        max-width: 1350px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT */
    .handle-project-left{
        flex:1;
    }

    .handle-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .handle-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .handle-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS */
    .handle-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .handle-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .handle-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE */
    .handle-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .handle-project-container{
            flex-direction:column;
        }

        .handle-project-right img{
            width:100%;
            height:auto;
        }
    }

    /* FAQ SECTION */
    .handle-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE */
    .handle-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER */
    .handle-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM */
    .handle-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .handle-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .handle-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON */
    .handle-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT */
    .handle-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .handle-faq-item.active .handle-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE */
    .handle-faq-item.active .handle-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON */
    .handle-faq-btn{
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

    .handle-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="handle-hero-section">
        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=1600" alt="Glass Handle Background">
        <div class="handle-hero-content">
            <h5>GLASS HANDLE SYSTEMS</h5>
            <h1>PREMIUM GLASS HANDLES FOR ELEGANT DOOR & PARTITION SYSTEMS</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="handle-content-box">
        <div class="handle-content-wrapper">
            <div>
                <h2 class="handle-content-title">GLASS HANDLE MANUFACTURER IN INDIA</h2>
            </div>
            <div class="handle-content-text">
                <p>
                    As one of the leading Glass Handle manufacturers, we pride ourselves on offering a premium range of door and partition handles that marry superior functionality with refined aesthetics. We truly design our glass handles with precision and elegance, ensuring that they perfectly complement modern interiors while providing exceptional grip, durability, and performance.
                </p>
                <p>
                    Manufactured from high-grade stainless steel, brass, and aluminum materials, our handles are crafted to meet the demands of contemporary architecture and design. Each handle is engineered for both visual appeal and practical use, making it an ideal choice for glass doors in offices, commercial spaces, hotels, and high-end residential settings.
                </p>
                <p>
                    With a state-of-the-art manufacturing process combined with strict quality checks, every handle is assured to be durable, strong, and of timeless design. Our sleek minimalist styles through to bold architectural pieces can meet the requirements of the most diverse aesthetic needs and functions.
                </p>
            </div>
        </div>
    </section>

    <div class="handle-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="handle-card">
            <div class="handle-tag">Benefits</div>
            <img class="handle-icon" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
            <div class="handle-card-title">ELEGANT DESIGN</div>
            <p>
                Enhances the sophistication of glass doors with sleek, contemporary styling. Made of high-quality materials that are resistant to rust, wear, and corrosion for durable construction.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="handle-plus">+</div>

        <!-- CARD 2 -->
        <div class="handle-card">
            <div class="handle-tag">Benefits</div>
            <img class="handle-icon" src="https://cdn-icons-png.flaticon.com/512/3022/3022553.png">
            <div class="handle-card-title">COMFORTABLE GRIP</div>
            <p>
                Ergonomically designed for smooth and firm handling. Suitable for office partitions, shower enclosures, main entrances, and glass cabinets with diverse applications.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="handle-dotted-line"></div>

        <!-- CARD 3 -->
        <div class="handle-card handle-right-card">
            <div class="handle-tag">Benefits</div>
            <img class="handle-icon" src="https://cdn-icons-png.flaticon.com/512/3033/3033143.png">
            <div class="handle-card-title">EASY INSTALLATION</div>
            <p>
                Designed for quick fitting on framed and frameless glass doors. The shine and finish last for years with very little upkeep, offering various custom options for different design themes.
            </p>
        </div>
    </div>

    <section class="handle-main-section">
        <h1>GLASS HANDLE SUPPLIER IN INDIA</h1>
        <p>
            As a reputed Glass Handle supplier, we are dedicated to providing premium-quality hardware solutions that elevate the aesthetic and functional appeal of modern spaces. With an extensive supply network, we assure prompt and reliable delivery for projects of all scales, from boutique interiors to large commercial developments.
        </p>
        <p>
            We closely collaborate with architects, contractors, and designers to deliver customized products that cater to the needs of each project and design vision. Every handle supplied is tested for strength, finish, and precision to ensure performance over time and satisfy the customer.
        </p>

        <a href="#" class="handle-discuss-link">
            Request a Quote
            <div class="handle-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="handle-row">
            <!-- LEFT IMAGE -->
            <div class="handle-left-img">
                <img src="drive-download-20251210T094305Z-3-001/KADH 01, WAVES BRONZE, 300 _350 _ Klazovyn/1.jpeg" alt="Glass Handle Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="handle-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Glass Handle Solutions</h2>
                <p>
                    Our glass handles are constructed from premium-grade stainless steel, brass, or aluminum with corrosion and scratch-resistant finishes. Available in mirror, matte, satin, and antique finishes to match any interior design scheme.
                </p>
                <p>
                    Designed with ergonomic and slip-resistant features, our handles are compatible with both single and double glass door configurations. We offer custom lengths and diameters to meet specific project requirements.
                </p>
                <p>
                    With seamless fit for glass thickness variations and design focused on durability and long service life, our glass handles provide the perfect finishing touch for modern door and partition systems.
                </p>
                <ul class="handle-ul">
                    <li>Constructed from premium-grade stainless steel, brass, or aluminum</li>
                    <li>Corrosion and scratch-resistant finish</li>
                    <li>Available in mirror, matte, satin, and antique finishes</li>
                    <li>Compatible with single and double glass door configurations</li>
                    <li>Ergonomic and slip-resistant design</li>
                    <li>Available in custom lengths and diameters</li>
                    <li>Seamless fit with glass thickness variations</li>
                    <li>Designed for durability and long service life</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="handle-prod-section">
        <h2 class="handle-prod-title">OUR GLASS HANDLE PRODUCTS</h2>
        <div class="handle-prod-grid">
            <!-- CARD 1 -->
            <div class="handle-prod-card" onclick="handleProdOpenPopup('Stainless Steel Glass Handle','Premium stainless steel glass handle with mirror finish. Elegant and durable for modern interiors.','drive-download-20251210T094305Z-3-001/H handle 18 inches/1.jpeg')">
                <img class="handle-prod-card-img" src="drive-download-20251210T094305Z-3-001/H handle 18 inches/1.jpeg">
                <div class="handle-prod-card-info">
                    <h3>Stainless Steel Handle</h3>
                    <p>Mirror finish elegance</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="handle-prod-card" onclick="handleProdOpenPopup('Brass Glass Handle','Premium brass glass handle with antique finish. Traditional elegance for modern doors.','drive-download-20251210T094305Z-3-001/KADH 01, WAVES BRONZE, 300 _350 _ Klazovyn/1.jpeg')">
                <img class="handle-prod-card-img" src="drive-download-20251210T094305Z-3-001/KADH 01, WAVES BRONZE, 300 _350 _ Klazovyn/1.jpeg">
                <div class="handle-prod-card-info">
                    <h3>Brass Glass Handle</h3>
                    <p>Antique finish tradition</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="handle-prod-card" onclick="handleProdOpenPopup('Aluminum Glass Handle','Lightweight aluminum glass handle with matte finish. Modern minimalist design.','https://images.unsplash.com/photo-1560448204-e02f11c3d0e2')">
                <img class="handle-prod-card-img" src="drive-download-20251210T094305Z-3-001/KADH 01, WAVES BRONZE, 300_350,/1.jpeg">
                <div class="handle-prod-card-info">
                    <h3>Aluminum Glass Handle</h3>
                    <p>Matte finish minimalism</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="handle-prod-popup" id="handleProdPopup">
        <span class="handle-prod-close" onclick="handleProdClosePopup()">&times;</span>
        <div class="handle-prod-popup-box">
            <img id="handleProdPopupImg" class="handle-prod-popup-img">
            <div class="handle-prod-popup-content">
                <h2 id="handleProdPopupTitle"></h2>
                <p id="handleProdPopupDesc"></p>
                <a href="#" class="handle-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="handle-export-section">
        <div class="handle-export-container">
            <div class="handle-export-top-title">EXPORT QUALITY</div>
            <h2 class="handle-export-heading">GLASS HANDLE EXPORTER IN INDIA</h2>
            <p class="handle-export-desc">
                Being one of the trusted Glass Handle exporters, we export top-quality architectural hardware products to international clients who need elegant and durable door solutions. Our export-ready handles are made with precision, based on international design and performance norms.
            </p>
            
            <a href="#" class="handle-export-link">
                International Enquiries
                <div class="handle-export-line"></div>
            </a>

            <div class="handle-export-card-wrap">
                <div class="handle-export-card">
                    <div class="handle-export-card-title">Global Standards</div>
                    <p>
                        We export to almost all global markets, with designs and finishes according to various cultural and architectural preferences. Every export consignment is being stringently inspected and safely packed.
                    </p>
                    <hr>
                    <div class="handle-export-card-subtitle">Our Export Advantages:</div>
                    <ul class="handle-export-list">
                        <li>Based on international design norms</li>
                        <li>Compliance with global performance standards</li>
                        <li>Safe packaging for international transit</li>
                        <li>Stringent quality inspections</li>
                    </ul>
                </div>

                <div class="handle-export-card">
                    <div class="handle-export-card-title">International Recognition</div>
                    <p>
                        Our commitment to innovation, reliability, and craftsmanship has earned us a preferred exporter status among global partners who respect both style and substance in every detail.
                    </p>
                    <hr>
                    <div class="handle-export-card-subtitle">Global Market Reach:</div>
                    <ul class="handle-export-list">
                        <li>Export to all global markets</li>
                        <li>Preferred exporter status worldwide</li>
                        <li>Cultural and architectural preferences catered</li>
                        <li>Commitment to innovation and craftsmanship</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="handle-project-section">
        <div class="handle-project-container">
            <div class="handle-project-left">
                <div class="handle-project-subtitle">LUXURY OFFICE PROJECT</div>
                <h2 class="handle-project-title">Corporate Headquarters Glass Partition System</h2>
                <p class="handle-project-text">
                    A multinational corporation required premium glass handles for their new headquarters featuring extensive glass partition systems. Our custom-designed stainless steel handles were selected for their elegant appearance and superior functionality.
                </p>
                <p class="handle-project-text">
                    The project featured 500+ custom-length handles with satin finish that perfectly complemented the frameless glass partitions. Each handle was precision-engineered for ergonomic grip and easy installation on 10mm tempered glass.
                </p>
                <p class="handle-project-text">
                    This project created a cohesive, elegant appearance throughout the office space while ensuring durability and comfort for daily use, receiving accolades from the architectural team and corporate management.
                </p>
                <ul class="handle-project-list">
                    <li>Project Type: Corporate Headquarters Glass System</li>
                    <li>Product Type: Custom Stainless Steel Glass Handles</li>
                    <li>Special Features: Satin Finish, Ergonomic Design</li>
                    <li>Quantity Installed: 500+ units</li>
                </ul>
            </div>
            
            <div class="handle-project-right">
                <img src="drive-download-20251210T094305Z-3-001/KRDH 222, ZEAL, FINISH CP+MAB, TOTAL 450 MM , H TO H 320 MM/1.jpeg" alt="Office Glass Handle Project">
            </div>
        </div>
    </section>

    <section class="handle-faq-section">
        <h2 class="handle-faq-title">GLASS HANDLE FAQS</h2>
        <div class="handle-faq-container">
            <div class="handle-faq-item">
                <div class="handle-faq-question">
                    What materials are used for glass handles?
                    <span class="handle-faq-icon">⌄</span>
                </div>
                <div class="handle-faq-answer">
                    We use premium-grade 304 stainless steel, solid brass, and high-quality aluminum for our glass handles. Each material is selected for its durability, corrosion resistance, and aesthetic appeal, with various finishes available including mirror, satin, matte, and antique.
                </div>
            </div>

            <div class="handle-faq-item">
                <div class="handle-faq-question">
                    Can glass handles be customized for specific projects?
                    <span class="handle-faq-icon">⌄</span>
                </div>
                <div class="handle-faq-answer">
                    Yes, we offer complete customization including specific lengths, diameters, finishes, and even custom designs. We work closely with architects and designers to create handles that perfectly match project specifications and design themes.
                </div>
            </div>

            <div class="handle-faq-item">
                <div class="handle-faq-question">
                    What glass thickness are your handles compatible with?
                    <span class="handle-faq-icon">⌄</span>
                </div>
                <div class="handle-faq-answer">
                    Our handles are designed to be compatible with glass thickness ranging from 6mm to 19mm. We provide appropriate fixing systems and adjustments to ensure secure installation on any glass thickness within this range.
                </div>
            </div>

            <div class="handle-faq-item">
                <div class="handle-faq-question">
                    How do you ensure secure installation on glass?
                    <span class="handle-faq-icon">⌄</span>
                </div>
                <div class="handle-faq-answer">
                    Our handles come with specialized glass clamping systems that distribute pressure evenly without stressing the glass. We use high-quality rubber gaskets and precision-machined components to ensure secure, vibration-free installation that maintains glass integrity.
                </div>
            </div>
        </div>
        <button class="handle-faq-btn">View All FAQs</button>
    </section>

    <script>
        function handleProdOpenPopup(title, desc, img){
            document.getElementById("handleProdPopupTitle").innerText = title;
            document.getElementById("handleProdPopupDesc").innerText = desc;
            document.getElementById("handleProdPopupImg").src = img;
            document.getElementById("handleProdPopup").classList.add("active");
        }

        function handleProdClosePopup(){
            document.getElementById("handleProdPopup").classList.remove("active");
        }

        const handleFaqItems = document.querySelectorAll(".handle-faq-item");
        handleFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                handleFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });
    </script>
<?php include "footer.php"?>