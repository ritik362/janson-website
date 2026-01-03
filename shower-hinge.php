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
            /* --hinge-container-width: 1400px; */
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
        .hinge-hero-section {
            position: relative;
            width: 100%;
            height: 460px;
            overflow: hidden;
            margin-top: -80px;
        }

        .hinge-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
            /* margin-top: -80px; */
        }

        .hinge-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .hinge-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .hinge-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* CONTENT BOX */
        .hinge-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -60px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .hinge-content-wrapper {
            max-width: var(--hinge-container-width);
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .hinge-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .hinge-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .hinge-hero-content h1 {
                font-size: 32px;
            }

            .hinge-content-wrapper {
                grid-template-columns: 1fr;
            }
        }

        /* BENEFITS SECTION */
        .hinge-benefits-wrapper {
            max-width: var(--hinge-container-width);
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING */
        .hinge-card {
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

        .hinge-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .hinge-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL */
        .hinge-tag {
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
        .hinge-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE */
        .hinge-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .hinge-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN */
        .hinge-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE */
        .hinge-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .hinge-benefits-wrapper {
                flex-direction: column;
            }

            .hinge-plus,
            .hinge-dotted-line {
                display: none;
            }
        }

        /* MAIN SECTION */
        .hinge-main-section {
            max-width: var(--hinge-container-width);
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE */
        .hinge-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH */
        .hinge-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK */
        .hinge-discuss-link {
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

        .hinge-discuss-link:hover {
            color: var(--text-heading);
        }

        .hinge-discuss-link .hinge-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW */
        .hinge-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE */
        .hinge-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT */
        .hinge-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .hinge-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .hinge-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hinge-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS */
        .hinge-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .hinge-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .hinge-row {
                flex-direction: column;
            }

            .hinge-left-img img {
                width: 100%;
                height: auto;
            }

            .hinge-main-section h1 {
                font-size: 30px;
            }

            .hinge-main-section {
                padding: 50px 20px;
            }
        }

    /* PRODUCTS SECTION */
    .hinge-prod-section{
        max-width: var(--hinge-container-width);
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .hinge-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* PRODUCT GRID */
    .hinge-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* PRODUCT CARD */
    .hinge-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .hinge-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .hinge-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .hinge-prod-card-info{
        padding:15px;
    }

    .hinge-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .hinge-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* PRODUCT POPUP */
    .hinge-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .hinge-prod-popup.active{
        display:flex;
    }

    .hinge-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:hingeProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes hingeProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .hinge-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .hinge-prod-popup-content{
        padding:20px;
    }

    .hinge-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .hinge-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .hinge-prod-btn{
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

    .hinge-prod-btn:hover {
        background-color: #b5987a;
    }

    .hinge-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }

    /* EXPORT SECTION */
    .hinge-export-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .hinge-export-container{
        max-width: var(--hinge-container-width);
        padding: 0px 50px;
        margin:auto;
    }

    .hinge-export-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .hinge-export-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .hinge-export-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .hinge-export-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .hinge-export-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP */
    .hinge-export-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD */
    .hinge-export-card{
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

    .hinge-export-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .hinge-export-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .hinge-export-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .hinge-export-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .hinge-export-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST */
    .hinge-export-list{
        list-style:none;
        padding-left:0;
    }

    .hinge-export-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .hinge-export-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .hinge-export-card-wrap{
            flex-direction:column;
        }
        .hinge-export-card{
            min-width:100%;
        }
    }

    /* PROJECT SECTION */
    .hinge-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .hinge-project-container{
        max-width: 1350px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT */
    .hinge-project-left{
        flex:1;
    }

    .hinge-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .hinge-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .hinge-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS */
    .hinge-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .hinge-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .hinge-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE */
    .hinge-project-right img{
        width:650px;
        height:480px;
        object-fit:fill;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .hinge-project-container{
            flex-direction:column;
        }

        .hinge-project-right img{
            width:100%;
            height:auto;
        }
    }

    /* FAQ SECTION */
    .hinge-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE */
    .hinge-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER */
    .hinge-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM */
    .hinge-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .hinge-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .hinge-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON */
    .hinge-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT */
    .hinge-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .hinge-faq-item.active .hinge-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE */
    .hinge-faq-item.active .hinge-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON */
    .hinge-faq-btn{
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

    .hinge-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="hinge-hero-section">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=1600" alt="Shower Hinge Background">
        <div class="hinge-hero-content">
            <h5>SHOWER HINGE SYSTEMS</h5>
            <h1>PRECISION ENGINEERED SHOWER HINGES FOR MODERN BATHROOMS</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="hinge-content-box">
        <div class="hinge-content-wrapper">
            <div>
                <h2 class="hinge-content-title">SHOWER HINGE MANUFACTURER IN INDIA</h2>
            </div>
            <div class="hinge-content-text">
                <p>
                    As a reputed Shower Hinge manufacturer, we specialize in producing premium-quality hinges that blend exceptional functionality with sleek design for modern bathroom spaces. Our shower hinges are manufactured with great precision to ensure smooth door movement, long-lasting durability, and superior corrosion resistance.
                </p>
                <p>
                    Compatible with glass shower enclosures and frameless doors, these hinged options showcase perfect strength, stability, and style. Constructed of quality stainless steel and brass, every hinge is tested thoroughly, ensuring total performance in very humid and moisture-laden areas.
                </p>
                <p>
                    Advanced technology combined with superior craftsmanship enables our shower hinges to add style and character to the bathroom while ensuring safety, reliability, and elegance. Be it residential bathrooms, luxury hotels, or other business establishments, our shower hinges present a trusted choice for architects, interior designers, and contractors in search of dependable hardware solutions.
                </p>
            </div>
        </div>
    </section>

    <div class="hinge-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="hinge-card">
            <div class="hinge-tag">Benefits</div>
            <img class="hinge-icon" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
            <div class="hinge-card-title">SMOOTH FUNCTIONALITY</div>
            <p>
                Provides smooth, seamless door opening and closing for a high-class user experience. Made from high-quality stainless steel or brass for long life with superior durability.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="hinge-plus">+</div>

        <!-- CARD 2 -->
        <div class="hinge-card">
            <div class="hinge-tag">Benefits</div>
            <img class="hinge-icon" src="https://cdn-icons-png.flaticon.com/512/3033/3033143.png">
            <div class="hinge-card-title">ANTI-CORROSION</div>
            <p>
                Perfectly suited for bathroom use in high-moisture conditions with anti-corrosion & rust protection. It gives a polished, minimalist touch to modern shower enclosures with elegant looks.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="hinge-dotted-line"></div>

        <!-- CARD 3 -->
        <div class="hinge-card hinge-right-card">
            <div class="hinge-tag">Benefits</div>
            <img class="hinge-icon" src="https://cdn-icons-png.flaticon.com/512/3022/3022553.png">
            <div class="hinge-card-title">EASY INSTALLATION</div>
            <p>
                Designed for rapid and secure mounting on frameless glass doors. The shine and finish remain without constant upkeep, with custom options available for various bathroom styles.
            </p>
        </div>
    </div>

    <section class="hinge-main-section">
        <h1>SHOWER HINGE SUPPLIER IN INDIA</h1>
        <p>
            As one of the prominent suppliers of Shower Hinges, we supply a wide variety of high-performance hinges to fulfill the diversified requirement of our clients belonging to residential, commercial, and hospitality sectors. Assuring timely availability with consistent quality, our supply network makes us a dependable partner for interior projects of every size.
        </p>
        <p>
            We supply bespoke solutions that merge functional excellence with contemporary design. Each hinge supplied undergoes thorough quality inspection for smooth operation, easy alignment, and a durable finish that ensures total satisfaction right from installation to usage.
        </p>

        <a href="#" class="hinge-discuss-link">
            Request a Quote
            <div class="hinge-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="hinge-row">
            <!-- LEFT IMAGE -->
            <div class="hinge-left-img">
                <img src="drive-download-20251210T094305Z-3-001/Wall to Glass Mini Hinge/1.jpeg" alt="Shower Hinge Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="hinge-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Shower Hinge Solutions</h2>
                <p>
                    Our shower hinges are made of high-quality stainless steel or brass with polished, satin, matte black, and antique finish options. Suitable for 8mm to 12mm thick toughened glass with various opening configurations.
                </p>
                <p>
                    Available opening configurations include 90°, 135°, and 180° with heavy-duty construction for large glass panels. Featuring rust-proof, scratch-resistant surfaces for high performance and long life.
                </p>
                <p>
                    Designed for easy alignment, installation, and maintenance, our shower hinges provide reliable operation in high-moisture environments while adding an elegant touch to modern bathroom designs.
                </p>
                <ul class="hinge-ul">
                    <li>Made of high-quality stainless steel or brass</li>
                    <li>Polished, satin, matte black, and antique finish options</li>
                    <li>Suitable for 8mm to 12mm thick toughened glass</li>
                    <li>Available opening configurations include 90°, 135°, and 180°</li>
                    <li>Heavy-duty construction for large glass panels</li>
                    <li>Rust-proof, scratch-resistant surface</li>
                    <li>High performance and long life tested</li>
                    <li>Easy to align, install, and maintain</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="hinge-prod-section">
        <h2 class="hinge-prod-title">OUR SHOWER HINGE PRODUCTS</h2>
        <div class="hinge-prod-grid">
            <!-- CARD 1 -->
            <div class="hinge-prod-card" onclick="hingeProdOpenPopup('Stainless Steel Shower Hinge','Premium stainless steel shower hinge with polished finish. Corrosion-resistant for bathroom use.','drive-download-20251210T094305Z-3-001/Wall to Glass Mini Hinge/2.jpeg')">
                <img class="hinge-prod-card-img" src="drive-download-20251210T094305Z-3-001/Wall to Glass Mini Hinge/2.jpeg">
                <div class="hinge-prod-card-info">
                    <h3>Stainless Steel Hinge</h3>
                    <p>Polished corrosion-resistant</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="hinge-prod-card" onclick="hingeProdOpenPopup('Brass Shower Hinge','Premium brass shower hinge with antique finish. Elegant traditional design for modern bathrooms.','drive-download-20251210T094305Z-3-001/Wall to Glass Mini Hinge/image.png')">
                <img class="hinge-prod-card-img" src="drive-download-20251210T094305Z-3-001/Wall to Glass Mini Hinge/image.png">
                <div class="hinge-prod-card-info">
                    <h3>Brass Shower Hinge</h3>
                    <p>Antique finish elegance</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="hinge-prod-card" onclick="hingeProdOpenPopup('Matte Black Shower Hinge','Modern matte black shower hinge. Sleek contemporary design for frameless glass doors.','drive-download-20251210T094305Z-3-001/Wall to Glass Mini Hinge/3.jpeg')">
                <img class="hinge-prod-card-img" src="drive-download-20251210T094305Z-3-001/Wall to Glass Mini Hinge/3.jpeg">
                <div class="hinge-prod-card-info">
                    <h3>Matte Black Hinge</h3>
                    <p>Sleek contemporary design</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="hinge-prod-popup" id="hingeProdPopup">
        <span class="hinge-prod-close" onclick="hingeProdClosePopup()">&times;</span>
        <div class="hinge-prod-popup-box">
            <img id="hingeProdPopupImg" class="hinge-prod-popup-img">
            <div class="hinge-prod-popup-content">
                <h2 id="hingeProdPopupTitle"></h2>
                <p id="hingeProdPopupDesc"></p>
                <a href="#" class="hinge-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="hinge-export-section">
        <div class="hinge-export-container">
            <div class="hinge-export-top-title">EXPORT QUALITY</div>
            <h2 class="hinge-export-heading">SHOWER HINGE EXPORTER IN INDIA</h2>
            <p class="hinge-export-desc">
                We are an established exporter of Shower Hinges and are proud to supply top-quality bathroom hardware solutions to clients across global markets. Our export-grade shower hinges have been manufactured to international benchmarks of design precision, safety, and performance.
            </p>
            
            <a href="#" class="hinge-export-link">
                International Enquiries
                <div class="hinge-export-line"></div>
            </a>

            <div class="hinge-export-card-wrap">
                <div class="hinge-export-card">
                    <div class="hinge-export-card-title">Global Standards</div>
                    <p>
                        We produce for international distributors, builders, and interior brands, offering customization possibilities in design and finish to meet the latest international architectural tastes.
                    </p>
                    <hr>
                    <div class="hinge-export-card-subtitle">Our Export Advantages:</div>
                    <ul class="hinge-export-list">
                        <li>Manufactured to international benchmarks</li>
                        <li>Design precision and safety standards</li>
                        <li>Customization for architectural tastes</li>
                        <li>International distributor network</li>
                    </ul>
                </div>

                <div class="hinge-export-card">
                    <div class="hinge-export-card-title">International Recognition</div>
                    <p>
                        Each hinge is carefully packed and thoroughly checked before export to ensure safe arrival and flawless functionality at installation. With a strong commitment to quality and innovation.
                    </p>
                    <hr>
                    <div class="hinge-export-card-subtitle">Global Market Reach:</div>
                    <ul class="hinge-export-list">
                        <li>Carefully packed for international transit</li>
                        <li>Thorough quality checks before export</li>
                        <li>Flawless functionality at installation</li>
                        <li>Strong commitment to innovation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="hinge-project-section">
        <div class="hinge-project-container">
            <div class="hinge-project-left">
                <div class="hinge-project-subtitle">LUXURY SPA PROJECT</div>
                <h2 class="hinge-project-title">Premium Wellness Spa Shower System</h2>
                <p class="hinge-project-text">
                    A luxury wellness spa required high-quality shower hinges for their premium shower cabins and steam rooms. Our corrosion-resistant stainless steel hinges were selected for their durability and elegant appearance in high-moisture environments.
                </p>
                <p class="hinge-project-text">
                    The installation featured specially designed hinges with 180° opening capability for easy access and cleaning. Each hinge included waterproof seals and specialized coatings to prevent corrosion and ensure smooth operation.
                </p>
                <p class="hinge-project-text">
                    This project enhanced the spa's premium appearance while providing reliable functionality that withstands constant exposure to steam and water, receiving excellent feedback from both management and clients.
                </p>
                <ul class="hinge-project-list">
                    <li>Project Type: Luxury Wellness Spa Shower System</li>
                    <li>Product Type: Corrosion-Resistant Stainless Steel Hinges</li>
                    <li>Special Features: 180° Opening, Waterproof Seals</li>
                    <li>Project Completion Time: 6 Weeks</li>
                </ul>
            </div>
            
            <div class="hinge-project-right">
                <img src="drive-download-20251210T094305Z-3-001/Wall to Glass Mini Hinge/image copy.png" alt="Spa Shower Hinge Project">
            </div>
        </div>
    </section>

    <section class="hinge-faq-section">
        <h2 class="hinge-faq-title">SHOWER HINGE FAQS</h2>
        <div class="hinge-faq-container">
            <div class="hinge-faq-item">
                <div class="hinge-faq-question">
                    What materials are best for shower hinges in humid environments?
                    <span class="hinge-faq-icon">⌄</span>
                </div>
                <div class="hinge-faq-answer">
                    304 stainless steel and solid brass are the best materials for shower hinges. Both offer excellent corrosion resistance. We also apply specialized coatings and finishes to enhance protection against moisture, steam, and cleaning chemicals commonly used in bathrooms.
                </div>
            </div>

            <div class="hinge-faq-item">
                <div class="hinge-faq-question">
                    Can shower hinges be adjusted after installation?
                    <span class="hinge-faq-icon">⌄</span>
                </div>
                <div class="hinge-faq-answer">
                    Yes, most of our shower hinges feature adjustable mechanisms that allow for precise alignment even after installation. This includes vertical and horizontal adjustments to ensure perfect door alignment and smooth operation.
                </div>
            </div>

            <div class="hinge-faq-item">
                <div class="hinge-faq-question">
                    What is the maximum glass thickness your hinges support?
                    <span class="hinge-faq-icon">⌄</span>
                </div>
                <div class="hinge-faq-answer">
                    Our standard shower hinges support glass thickness from 8mm to 12mm. For thicker glass up to 19mm, we offer heavy-duty specialized hinges with reinforced construction and larger clamping surfaces for secure installation.
                </div>
            </div>

            <div class="hinge-faq-item">
                <div class="hinge-faq-question">
                    How do you prevent water leakage through hinge installations?
                    <span class="hinge-faq-icon">⌄</span>
                </div>
                <div class="hinge-faq-answer">
                    Our shower hinges feature integrated waterproof seals and specialized gaskets that create water-tight barriers between the hinge components and glass. Proper installation techniques and silicone sealing ensure complete protection against water leakage.
                </div>
            </div>
        </div>
        <button class="hinge-faq-btn">View All FAQs</button>
    </section>

    <script>
        function hingeProdOpenPopup(title, desc, img){
            document.getElementById("hingeProdPopupTitle").innerText = title;
            document.getElementById("hingeProdPopupDesc").innerText = desc;
            document.getElementById("hingeProdPopupImg").src = img;
            document.getElementById("hingeProdPopup").classList.add("active");
        }

        function hingeProdClosePopup(){
            document.getElementById("hingeProdPopup").classList.remove("active");
        }

        const hingeFaqItems = document.querySelectorAll(".hinge-faq-item");
        hingeFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                hingeFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });
    </script>
<?php include "footer.php"?>