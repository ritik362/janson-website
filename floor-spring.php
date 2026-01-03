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
            /* --spring-container-width: 1400px; */
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
        .spring-hero-section {
            position: relative;
            width: 100%;
            height: 360px;
            overflow: hidden;
        }

        .spring-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
        }

        .spring-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .spring-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .spring-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* CONTENT BOX */
        .spring-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -60px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .spring-content-wrapper {
            max-width: var(--spring-container-width);
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .spring-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .spring-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .spring-hero-content h1 {
                font-size: 32px;
            }

            .spring-content-wrapper {
                grid-template-columns: 1fr;
            }
        }

        /* BENEFITS SECTION */
        .spring-benefits-wrapper {
            max-width: var(--spring-container-width);
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING */
        .spring-card {
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

        .spring-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .spring-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL */
        .spring-tag {
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
        .spring-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE */
        .spring-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .spring-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN */
        .spring-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE */
        .spring-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .spring-benefits-wrapper {
                flex-direction: column;
            }

            .spring-plus,
            .spring-dotted-line {
                display: none;
            }
        }

        /* MAIN SECTION */
        .spring-main-section {
            max-width: var(--spring-container-width);
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE */
        .spring-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH */
        .spring-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK */
        .spring-discuss-link {
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

        .spring-discuss-link:hover {
            color: var(--text-heading);
        }

        .spring-discuss-link .spring-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW */
        .spring-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE */
        .spring-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT */
        .spring-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .spring-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .spring-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .spring-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS */
        .spring-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .spring-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .spring-row {
                flex-direction: column;
            }

            .spring-left-img img {
                width: 100%;
                height: auto;
            }

            .spring-main-section h1 {
                font-size: 30px;
            }

            .spring-main-section {
                padding: 50px 20px;
            }
        }

    /* PRODUCTS SECTION */
    .spring-prod-section{
        max-width: var(--spring-container-width);
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .spring-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* PRODUCT GRID */
    .spring-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* PRODUCT CARD */
    .spring-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .spring-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .spring-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .spring-prod-card-info{
        padding:15px;
    }

    .spring-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .spring-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* PRODUCT POPUP */
    .spring-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .spring-prod-popup.active{
        display:flex;
    }

    .spring-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:springProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes springProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .spring-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .spring-prod-popup-content{
        padding:20px;
    }

    .spring-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .spring-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .spring-prod-btn{
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

    .spring-prod-btn:hover {
        background-color: #b5987a;
    }

    .spring-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }

    /* EXPORT SECTION */
    .spring-export-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .spring-export-container{
        max-width: var(--spring-container-width);
        padding: 0px 50px;
        margin:auto;
    }

    .spring-export-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .spring-export-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .spring-export-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .spring-export-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .spring-export-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP */
    .spring-export-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD */
    .spring-export-card{
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

    .spring-export-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .spring-export-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .spring-export-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .spring-export-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .spring-export-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST */
    .spring-export-list{
        list-style:none;
        padding-left:0;
    }

    .spring-export-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .spring-export-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .spring-export-card-wrap{
            flex-direction:column;
        }
        .spring-export-card{
            min-width:100%;
        }
    }

    /* PROJECT SECTION */
    .spring-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .spring-project-container{
        max-width: 1350px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT */
    .spring-project-left{
        flex:1;
    }

    .spring-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .spring-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .spring-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS */
    .spring-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .spring-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .spring-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE */
    .spring-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .spring-project-container{
            flex-direction:column;
        }

        .spring-project-right img{
            width:100%;
            height:auto;
        }
    }

    /* FAQ SECTION */
    .spring-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE */
    .spring-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER */
    .spring-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM */
    .spring-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .spring-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .spring-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON */
    .spring-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT */
    .spring-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .spring-faq-item.active .spring-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE */
    .spring-faq-item.active .spring-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON */
    .spring-faq-btn{
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

    .spring-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="spring-hero-section">
        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=1600" alt="Floor Spring Background">
        <div class="spring-hero-content">
            <h5>FLOOR SPRING SYSTEMS</h5>
            <h1>PRECISION ENGINEERED FLOOR SPRINGS FOR SMOOTH DOOR CONTROL</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="spring-content-box">
        <div class="spring-content-wrapper">
            <div>
                <h2 class="spring-content-title">FLOOR SPRING MANUFACTURER IN INDIA</h2>
            </div>
            <div class="spring-content-text">
                <p>
                    As one of the leading manufacturers of floor springs, we specialize in the production of high-quality door control systems so as to combine functionality, durability, and modern aesthetics in one. Our floor springs are designed with precise regard to ensure smooth and effortless door movement while structural integrity and safety are maintained.
                </p>
                <p>
                    Made from robust materials and advanced hydraulic mechanisms, each product is built for superior performance and long-lasting reliability. Our floor springs for both commercial and residential purposes are meant for heavy and more frequently used doors; these are designed to provide controlled opening and closing actions to the door for convenience and security.
                </p>
                <p>
                    We innovate and guarantee that our floor spring completely meets the international standards of strength, precision, and endurance, hence ideal for glass doors, wooden doors, and even metal frame systems.
                </p>
            </div>
        </div>
    </section>

    <div class="spring-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="spring-card">
            <div class="spring-tag">Benefits</div>
            <img class="spring-icon" src="https://cdn-icons-png.flaticon.com/512/3208/3208720.png">
            <div class="spring-card-title">SMOOTH OPERATION</div>
            <p>
                Ensures controlled, hence quiet door movement, with variable speed adjustment. Manufactured from corrosion-resistant materials to provide years of service for heavy-duty construction.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="spring-plus">+</div>

        <!-- CARD 2 -->
        <div class="spring-card">
            <div class="spring-tag">Benefits</div>
            <img class="spring-icon" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
            <div class="spring-card-title">MULTI-PURPOSE USE</div>
            <p>
                To be used with frameless glass doors, metal doors, and wood installations. Prevents sudden slamming, reducing risks of damage or injury for improved safety.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="spring-dotted-line"></div>

        <!-- CARD 3 -->
        <div class="spring-card spring-right-card">
            <div class="spring-tag">Benefits</div>
            <img class="spring-icon" src="https://cdn-icons-png.flaticon.com/512/3033/3033143.png">
            <div class="spring-card-title">AESTHETIC & EFFICIENT</div>
            <p>
                Compact and hidden design blends with modern interior settings. Maintains climate control through proper door closure and designed for easy servicing with low maintenance.
            </p>
        </div>
    </div>

    <section class="spring-main-section">
        <h1>FLOOR SPRING SUPPLIER IN INDIA</h1>
        <p>
            As a trusted supplier of Floor Springs, we are committed to the delivery of precision-engineered products to meet the demands of architects, builders, and interior designers. Our supply network ensures timely and efficient delivery backed by technical expertise and dedicated customer support.
        </p>
        <p>
            We cater to various architectural needs by supplying floor springs in different load capacities and configurations. Rigorous quality testing of every unit ensures smooth functionality for long-term performance, making us a preferred partner for commercial complexes, retail spaces, hotels, and corporate offices.
        </p>

        <a href="#" class="spring-discuss-link">
            Request a Quote
            <div class="spring-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="spring-row">
            <!-- LEFT IMAGE -->
            <div class="spring-left-img">
                <img src="drive-download-20251210T094305Z-3-001/Wall to Glass Door Lock - KLK 2/1.jpeg" alt="Floor Spring Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="spring-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Floor Spring Solutions</h2>
                <p>
                    Our floor springs feature high-quality hydraulic mechanisms for smooth operation with adjustable closing and latching speed. Stainless steel cover plates ensure rust resistance and durability.
                </p>
                <p>
                    Designed with compact construction for concealed floor installation, our floor springs are compatible with both single and double-action doors. Each unit is tested for thousands of open-close cycles to ensure reliability.
                </p>
                <p>
                    With heavy-duty load-carrying capacity and easy installation and maintenance access, our floor springs provide the perfect door control solution for modern commercial and residential applications.
                </p>
                <ul class="spring-ul">
                    <li>High-quality hydraulic mechanism for smooth operation</li>
                    <li>Adjustable closing and latching speed</li>
                    <li>Stainless Steel Cover Plate for Rust Resistance</li>
                    <li>Compact design for concealed floor installation</li>
                    <li>Compatible with single and double-action doors</li>
                    <li>Tested for thousands of open-close cycles</li>
                    <li>Heavy-duty load-carrying capacity</li>
                    <li>Easy installation and maintenance access</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="spring-prod-section">
        <h2 class="spring-prod-title">OUR FLOOR SPRING PRODUCTS</h2>
        <div class="spring-prod-grid">
            <!-- CARD 1 -->
            <div class="spring-prod-card" onclick="springProdOpenPopup('Heavy Duty Floor Spring','Heavy duty floor spring for commercial applications. Perfect for glass doors and heavy wooden doors.','drive-download-20251210T094305Z-3-001/Wall to Glass Door lock  KLK 14/1.jpeg')">
                <img class="spring-prod-card-img" src="drive-download-20251210T094305Z-3-001/Wall to Glass Door lock  KLK 14/1.jpeg">
                <div class="spring-prod-card-info">
                    <h3>Heavy Duty Floor Spring</h3>
                    <p>Commercial grade for heavy doors</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="spring-prod-card" onclick="springProdOpenPopup('Concealed Floor Spring','Concealed floor spring for seamless integration. Hidden mechanism for modern interiors.','drive-download-20251210T094305Z-3-001/Wall to Glass Door Lock  KLK 7/1.jpeg')">
                <img class="spring-prod-card-img" src="drive-download-20251210T094305Z-3-001/Wall to Glass Door Lock  KLK 7/1.jpeg">
                <div class="spring-prod-card-info">
                    <h3>Concealed Floor Spring</h3>
                    <p>Seamless hidden installation</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="spring-prod-card" onclick="springProdOpenPopup('Hydraulic Floor Spring','Hydraulic floor spring with smooth operation. Adjustable speed for perfect door control.','drive-download-20251210T094305Z-3-001/Wall to Glass - Door Lock - KLK 4/1.jpeg')">
                <img class="spring-prod-card-img" src="drive-download-20251210T094305Z-3-001/Wall to Glass - Door Lock - KLK 4/1.jpeg">
                <div class="spring-prod-card-info">
                    <h3>Hydraulic Floor Spring</h3>
                    <p>Smooth hydraulic operation</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="spring-prod-popup" id="springProdPopup">
        <span class="spring-prod-close" onclick="springProdClosePopup()">&times;</span>
        <div class="spring-prod-popup-box">
            <img id="springProdPopupImg" class="spring-prod-popup-img">
            <div class="spring-prod-popup-content">
                <h2 id="springProdPopupTitle"></h2>
                <p id="springProdPopupDesc"></p>
                <a href="#" class="spring-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="spring-export-section">
        <div class="spring-export-container">
            <div class="spring-export-top-title">EXPORT QUALITY</div>
            <h2 class="spring-export-heading">FLOOR SPRING EXPORTER IN INDIA</h2>
            <p class="spring-export-desc">
                As one of the leading exporters of Floor Spring, we're committed to supplying world-class door control solutions to international markets that will ensure reliability, safety, and efficiency. Export-quality floor springs are manufactured by us with precision engineering, tested for compliance with globally recognized performance standards.
            </p>
            
            <a href="#" class="spring-export-link">
                International Enquiries
                <div class="spring-export-line"></div>
            </a>

            <div class="spring-export-card-wrap">
                <div class="spring-export-card">
                    <div class="spring-export-card-title">Global Standards</div>
                    <p>
                        We offer complete export services, including custom product configurations, safe packaging, and on-time international shipments. Our dedication to excellence ensures customer satisfaction.
                    </p>
                    <hr>
                    <div class="spring-export-card-subtitle">Our Export Advantages:</div>
                    <ul class="spring-export-list">
                        <li>Precision engineering for global markets</li>
                        <li>Compliance with international performance standards</li>
                        <li>Safe packaging for international shipments</li>
                        <li>On-time delivery worldwide</li>
                    </ul>
                </div>

                <div class="spring-export-card">
                    <div class="spring-export-card-title">International Recognition</div>
                    <p>
                        Our dedication to excellence and customer satisfaction has earned us an excellent reputation with overseas clients in commercial, architectural, and residential sectors seeking reliable floor spring systems.
                    </p>
                    <hr>
                    <div class="spring-export-card-subtitle">Global Market Reach:</div>
                    <ul class="spring-export-list">
                        <li>Excellent reputation with overseas clients</li>
                        <li>Serving commercial sectors globally</li>
                        <li>Architectural and residential projects</li>
                        <li>Reliable floor spring systems worldwide</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="spring-project-section">
        <div class="spring-project-container">
            <div class="spring-project-left">
                <div class="spring-project-subtitle">LUXURY HOTEL PROJECT</div>
                <h2 class="spring-project-title">Five-Star Hotel Entrance System</h2>
                <p class="spring-project-text">
                    A luxury five-star hotel required high-performance door control systems for their grand entrance and interior doors. Our heavy-duty floor springs were selected for their smooth operation and reliability under high-traffic conditions.
                </p>
                <p class="spring-project-text">
                    The installation featured concealed floor springs with adjustable speed controls, allowing for perfect door closure without slamming. The floor springs were integrated with automatic door operators for seamless guest experience.
                </p>
                <p class="spring-project-text">
                    This project enhanced the hotel's entrance functionality while maintaining elegant aesthetics, receiving positive feedback from both management and guests for the smooth door operation.
                </p>
                <ul class="spring-project-list">
                    <li>Project Type: Luxury Hotel Entrance System</li>
                    <li>Product Type: Heavy Duty Floor Springs</li>
                    <li>Special Features: Adjustable Speed, Concealed Installation</li>
                    <li>Project Completion Time: 4 Weeks</li>
                </ul>
            </div>
            
            <div class="spring-project-right">
                <img src="drive-download-20251210T094305Z-3-001/Wall to Glass - Door Lock - KLK 4/1.jpeg" alt="Hotel Floor Spring Project">
            </div>
        </div>
    </section>

    <section class="spring-faq-section">
        <h2 class="spring-faq-title">FLOOR SPRING FAQS</h2>
        <div class="spring-faq-container">
            <div class="spring-faq-item">
                <div class="spring-faq-question">
                    What is the maximum door weight your floor springs can handle?
                    <span class="spring-faq-icon">⌄</span>
                </div>
                <div class="spring-faq-answer">
                    Our floor springs are available in various load capacities ranging from 80kg to 250kg. For heavy commercial doors, we offer specialized models that can handle up to 300kg with smooth operation.
                </div>
            </div>

            <div class="spring-faq-item">
                <div class="spring-faq-question">
                    Can floor springs be adjusted after installation?
                    <span class="spring-faq-icon">⌄</span>
                </div>
                <div class="spring-faq-answer">
                    Yes, most of our floor springs feature adjustable closing and latching speeds. The adjustment can be done using specialized tools to achieve the desired door closing speed and hold-open functions.
                </div>
            </div>

            <div class="spring-faq-item">
                <div class="spring-faq-question">
                    Are floor springs suitable for exterior doors?
                    <span class="spring-faq-icon">⌄</span>
                </div>
                <div class="spring-faq-answer">
                    Yes, we offer weather-resistant floor springs specifically designed for exterior doors. These feature enhanced corrosion resistance, waterproof seals, and temperature-stable hydraulic fluids for all-weather performance.
                </div>
            </div>

            <div class="spring-faq-item">
                <div class="spring-faq-question">
                    How often do floor springs require maintenance?
                    <span class="spring-faq-icon">⌄</span>
                </div>
                <div class="spring-faq-answer">
                    Our floor springs are designed for low maintenance. Under normal usage, they require inspection every 6-12 months and lubrication annually. For high-traffic commercial applications, we recommend quarterly inspections.
                </div>
            </div>
        </div>
        <button class="spring-faq-btn">View All FAQs</button>
    </section>

    <script>
        function springProdOpenPopup(title, desc, img){
            document.getElementById("springProdPopupTitle").innerText = title;
            document.getElementById("springProdPopupDesc").innerText = desc;
            document.getElementById("springProdPopupImg").src = img;
            document.getElementById("springProdPopup").classList.add("active");
        }

        function springProdClosePopup(){
            document.getElementById("springProdPopup").classList.remove("active");
        }

        const springFaqItems = document.querySelectorAll(".spring-faq-item");
        springFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                springFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });
    </script>
<?php include "footer.php"?>