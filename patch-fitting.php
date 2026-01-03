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
            /* --patch-container-width: 1400px; */
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
        .patch-hero-section {
            position: relative;
            width: 100%;
            height: 360px;
            overflow: hidden;
        }

        .patch-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
        }

        .patch-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .patch-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .patch-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* CONTENT BOX */
        .patch-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -60px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .patch-content-wrapper {
            max-width: var(--patch-container-width);
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .patch-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .patch-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .patch-hero-content h1 {
                font-size: 32px;
            }

            .patch-content-wrapper {
                grid-template-columns: 1fr;
            }
        }

        /* BENEFITS SECTION */
        .patch-benefits-wrapper {
            max-width: var(--patch-container-width);
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING */
        .patch-card {
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

        .patch-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .patch-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL */
        .patch-tag {
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
        .patch-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE */
        .patch-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .patch-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN */
        .patch-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE */
        .patch-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .patch-benefits-wrapper {
                flex-direction: column;
            }

            .patch-plus,
            .patch-dotted-line {
                display: none;
            }
        }

        /* MAIN SECTION */
        .patch-main-section {
            max-width: var(--patch-container-width);
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE */
        .patch-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH */
        .patch-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK */
        .patch-discuss-link {
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

        .patch-discuss-link:hover {
            color: var(--text-heading);
        }

        .patch-discuss-link .patch-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW */
        .patch-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE */
        .patch-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT */
        .patch-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .patch-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .patch-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .patch-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS */
        .patch-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .patch-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .patch-row {
                flex-direction: column;
            }

            .patch-left-img img {
                width: 100%;
                height: auto;
            }

            .patch-main-section h1 {
                font-size: 30px;
            }

            .patch-main-section {
                padding: 50px 20px;
            }
        }

    /* PRODUCTS SECTION */
    .patch-prod-section{
        max-width: var(--patch-container-width);
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .patch-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* PRODUCT GRID */
    .patch-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* PRODUCT CARD */
    .patch-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .patch-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .patch-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .patch-prod-card-info{
        padding:15px;
    }

    .patch-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .patch-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* PRODUCT POPUP */
    .patch-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .patch-prod-popup.active{
        display:flex;
    }

    .patch-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:patchProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes patchProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .patch-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .patch-prod-popup-content{
        padding:20px;
    }

    .patch-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .patch-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .patch-prod-btn{
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

    .patch-prod-btn:hover {
        background-color: #b5987a;
    }

    .patch-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }

    /* EXPORT SECTION */
    .patch-export-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .patch-export-container{
        max-width: var(--patch-container-width);
        padding: 0px 50px;
        margin:auto;
    }

    .patch-export-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .patch-export-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .patch-export-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .patch-export-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .patch-export-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP */
    .patch-export-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD */
    .patch-export-card{
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

    .patch-export-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .patch-export-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .patch-export-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .patch-export-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .patch-export-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST */
    .patch-export-list{
        list-style:none;
        padding-left:0;
    }

    .patch-export-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .patch-export-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .patch-export-card-wrap{
            flex-direction:column;
        }
        .patch-export-card{
            min-width:100%;
        }
    }

    /* PROJECT SECTION */
    .patch-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .patch-project-container{
        max-width: 1350px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT */
    .patch-project-left{
        flex:1;
    }

    .patch-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .patch-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .patch-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS */
    .patch-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .patch-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .patch-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE */
    .patch-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .patch-project-container{
            flex-direction:column;
        }

        .patch-project-right img{
            width:100%;
            height:auto;
        }
    }

    /* FAQ SECTION */
    .patch-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE */
    .patch-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER */
    .patch-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM */
    .patch-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .patch-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .patch-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON */
    .patch-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT */
    .patch-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .patch-faq-item.active .patch-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE */
    .patch-faq-item.active .patch-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON */
    .patch-faq-btn{
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

    .patch-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="patch-hero-section">
        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=1600" alt="Patch Fitting Background">
        <div class="patch-hero-content">
            <h5>PATCH FITTING SYSTEMS</h5>
            <h1>PRECISION PATCH FITTINGS FOR SEAMLESS GLASS INSTALLATIONS</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="patch-content-box">
        <div class="patch-content-wrapper">
            <div>
                <h2 class="patch-content-title">PATCH FITTING MANUFACTURER IN INDIA</h2>
            </div>
            <div class="patch-content-text">
                <p>
                    As a reputed Patch Fitting manufacturer, we specialize in delivering high-quality architectural hardware solutions designed to enhance the functionality, safety, and aesthetics of modern glass installations. Our patch fittings have been specially engineered to provide secure and seamless connections for frameless glass doors and partitions, thus giving an immaculate, sophisticated look to any space.
                </p>
                <p>
                    Each patch fitting is made from premium grade stainless steel and brass components, ensuring quality in every aspect: strength, corrosion resistance, and long-term durability. We design our products to fit the needs of modern architecture: smooth operation, precise alignment, and effortless installation.
                </p>
                <p>
                    Ideal for glass facades, doors, shower enclosures, and office partitions, our patch fittings are crafted to perfection, combining reliability, refined craftsmanship, and state-of-the-art technology, thus redefining structural glass systems with elegance and stability.
                </p>
            </div>
        </div>
    </section>

    <div class="patch-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="patch-card">
            <div class="patch-tag">Benefits</div>
            <img class="patch-icon" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
            <div class="patch-card-title">SLEEK DESIGN</div>
            <p>
                Provides glass structures with a frameless and minimalist look. Made from first-class materials for long-lasting performance with superior durability.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="patch-plus">+</div>

        <!-- CARD 2 -->
        <div class="patch-card">
            <div class="patch-tag">Benefits</div>
            <img class="patch-icon" src="https://cdn-icons-png.flaticon.com/512/3033/3033143.png">
            <div class="patch-card-title">CORROSION RESISTANT</div>
            <p>
                Suitable for both interior and exterior applications. Heavy glass doors are supported with stability and balance through high load-bearing strength.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="patch-dotted-line"></div>

        <!-- CARD 3 -->
        <div class="patch-card patch-right-card">
            <div class="patch-tag">Benefits</div>
            <img class="patch-icon" src="https://cdn-icons-png.flaticon.com/512/3022/3022553.png">
            <div class="patch-card-title">EASY INSTALLATION</div>
            <p>
                Engineered for exact fitting and fast assembly. Requires minimum maintenance and retains its shine and finish with various customizable options available.
            </p>
        </div>
    </div>

    <section class="patch-main-section">
        <h1>PATCH FITTING SUPPLIER IN INDIA</h1>
        <p>
            As a trusted supplier of Patch Fitting, we strive to offer ingenious and reliable hardware solutions for meeting various requirements of architects, contractors, and designers. Our extensive distribution network ensures timely availability for patch fitting for projects ranging from residential installations to large commercial complexes.
        </p>
        <p>
            We offer a complete range of patch fittings comprising top patch, bottom patch, corner patch, and lock patch for precision performance and seamless integration in all applications. Every fitting is stringently quality-checked to ensure constant strength, safety, and smooth functionality that places us ahead as the preferred partner for high-performance glass applications.
        </p>

        <a href="#" class="patch-discuss-link">
            Request a Quote
            <div class="patch-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="patch-row">
            <!-- LEFT IMAGE -->
            <div class="patch-left-img">
                <img src="drive-download-20251210T094305Z-3-001/Glass Door Bottom Patch/1.jpeg" alt="Patch Fitting Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="patch-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Patch Fitting Solutions</h2>
                <p>
                    Our patch fittings feature high-grade stainless steel (SS 304/316) or brass construction, available in polished, matte, satin, and antique finishes. Compatible with 8mm to 12mm toughened glass for various applications.
                </p>
                <p>
                    Designed with precision alignment and strong grip for frameless doors, suitable for both single and double glass door systems. Tested for high performance and endurance cycles to ensure long-term reliability.
                </p>
                <p>
                    Featuring a concealed fixing system for a neat, refined appearance, our patch fittings are resistant to weathering and impact, providing long-term stability and elegant functionality for modern glass installations.
                </p>
                <ul class="patch-ul">
                    <li>High-grade stainless steel (SS 304/316) or brass construction</li>
                    <li>Available in polished, matte, satin, and antique finishes</li>
                    <li>Compatible with 8mm to 12mm toughened glass</li>
                    <li>Precision alignment and strong grip for frameless doors</li>
                    <li>Suitable for single and double glass door systems</li>
                    <li>Tested for high performance and endurance cycles</li>
                    <li>Concealed fixing system allows for neat, refined appearance</li>
                    <li>Resistant to weathering and impact for long-term stability</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="patch-prod-section">
        <h2 class="patch-prod-title">OUR PATCH FITTING PRODUCTS</h2>
        <div class="patch-prod-grid">
            <!-- CARD 1 -->
            <div class="patch-prod-card" onclick="patchProdOpenPopup('Top Patch Fitting','Top patch fitting for glass door systems. Provides secure upper connection.','drive-download-20251210T094305Z-3-001/Glass Door Bottom Patch/2.jpeg')">
                <img class="patch-prod-card-img" src="drive-download-20251210T094305Z-3-001/Glass Door Bottom Patch/2.jpeg">
                <div class="patch-prod-card-info">
                    <h3>Top Patch Fitting</h3>
                    <p>Secure upper connection</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="patch-prod-card" onclick="patchProdOpenPopup('Bottom Patch Fitting','Bottom patch fitting for glass door support. Provides stable base connection.','drive-download-20251210T094305Z-3-001/Glass Door Bottom Patch/3.jpeg')">
                <img class="patch-prod-card-img" src="drive-download-20251210T094305Z-3-001/Glass Door Bottom Patch/3.jpeg">
                <div class="patch-prod-card-info">
                    <h3>Bottom Patch Fitting</h3>
                    <p>Stable base connection</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="patch-prod-card" onclick="patchProdOpenPopup('Corner Patch Fitting','Corner patch fitting for glass partitions. Ideal for corner glass connections.','drive-download-20251210T094305Z-3-001/Glass Door Bottom Patch/3.jpeg')">
                <img class="patch-prod-card-img" src="drive-download-20251210T094305Z-3-001/Glass Door Bottom Patch/3.jpeg">
                <div class="patch-prod-card-info">
                    <h3>Corner Patch Fitting</h3>
                    <p>Corner glass connections</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="patch-prod-popup" id="patchProdPopup">
        <span class="patch-prod-close" onclick="patchProdClosePopup()">&times;</span>
        <div class="patch-prod-popup-box">
            <img id="patchProdPopupImg" class="patch-prod-popup-img">
            <div class="patch-prod-popup-content">
                <h2 id="patchProdPopupTitle"></h2>
                <p id="patchProdPopupDesc"></p>
                <a href="#" class="patch-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="patch-export-section">
        <div class="patch-export-container">
            <div class="patch-export-top-title">EXPORT QUALITY</div>
            <h2 class="patch-export-heading">PATCH FITTING EXPORTER IN INDIA</h2>
            <p class="patch-export-desc">
                Being one of the leading exporters of Patch Fitting, we provide world-class architectural fittings to clients in global markets. Our export-quality patch fittings are precisely made and manufactured in conformity with international standards of safety, strength, and excellence in design.
            </p>
            
            <a href="#" class="patch-export-link">
                International Enquiries
                <div class="patch-export-line"></div>
            </a>

            <div class="patch-export-card-wrap">
                <div class="patch-export-card">
                    <div class="patch-export-card-title">Global Standards</div>
                    <p>
                        We serve architects, construction firms, and distributors on all continents, offering solutions and finish options to meet diverse project needs. Each product is packed with care and quality-checked prior to shipment.
                    </p>
                    <hr>
                    <div class="patch-export-card-subtitle">Our Export Advantages:</div>
                    <ul class="patch-export-list">
                        <li>Manufactured to international standards</li>
                        <li>Conforms to global safety requirements</li>
                        <li>Carefully packed for international transit</li>
                        <li>Quality-checked before shipment</li>
                    </ul>
                </div>

                <div class="patch-export-card">
                    <div class="patch-export-card-title">International Recognition</div>
                    <p>
                        Emphasizing innovative spirit, craftsmanship, and reliability, respectively, we have established ourselves as a brand one can rely upon in the international architectural hardware industry for supplying top-notch patch fittings.
                    </p>
                    <hr>
                    <div class="patch-export-card-subtitle">Global Market Reach:</div>
                    <ul class="patch-export-list">
                        <li>Brand recognized internationally</li>
                        <li>Innovative spirit and craftsmanship</li>
                        <li>Reliable supplier worldwide</li>
                        <li>Top-notch patch fittings globally</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="patch-project-section">
        <div class="patch-project-container">
            <div class="patch-project-left">
                <div class="patch-project-subtitle">LUXURY HOTEL PROJECT</div>
                <h2 class="patch-project-title">Five-Star Hotel Glass Partition System</h2>
                <p class="patch-project-text">
                    A luxury five-star hotel required premium patch fittings for their extensive glass partition systems throughout the lobby and common areas. Our stainless steel patch fittings were selected for their elegant appearance and reliable performance.
                </p>
                <p class="patch-project-text">
                    The installation featured concealed patch fittings that created seamless glass-to-glass connections without visible hardware. The system included specialized corner patches and lock patches for complete security and aesthetic consistency.
                </p>
                <p class="patch-project-text">
                    This project enhanced the hotel's modern aesthetic while providing durable and secure glass partitions, receiving accolades from both hotel management and architectural design teams for the flawless installation.
                </p>
                <ul class="patch-project-list">
                    <li>Project Type: Luxury Hotel Glass Partitions</li>
                    <li>Product Type: Stainless Steel Patch Fittings</li>
                    <li>Special Features: Concealed Installation, Corner Patches</li>
                    <li>Project Completion Time: 10 Weeks</li>
                </ul>
            </div>
            
            <div class="patch-project-right">
                <img src="drive-download-20251210T094305Z-3-001/Glass Door Bottom Patch/5.jpeg" alt="Hotel Patch Fitting Project">
            </div>
        </div>
    </section>

    <section class="patch-faq-section">
        <h2 class="patch-faq-title">PATCH FITTING FAQS</h2>
        <div class="patch-faq-container">
            <div class="patch-faq-item">
                <div class="patch-faq-question">
                    What types of patch fittings are available?
                    <span class="patch-faq-icon">⌄</span>
                </div>
                <div class="patch-faq-answer">
                    We offer a complete range including top patch fittings for upper connections, bottom patch fittings for base support, corner patch fittings for angled connections, and lock patch fittings for security applications. Each type is available in various sizes and configurations to suit specific project requirements.
                </div>
            </div>

            <div class="patch-faq-item">
                <div class="patch-faq-question">
                    Can patch fittings be used for exterior applications?
                    <span class="patch-faq-icon">⌄</span>
                </div>
                <div class="patch-faq-answer">
                    Yes, our patch fittings are suitable for both interior and exterior applications. For exterior use, we recommend SS 316 stainless steel with specialized weather-resistant finishes and additional protective coatings to withstand environmental factors like moisture, UV exposure, and temperature variations.
                </div>
            </div>

            <div class="patch-faq-item">
                <div class="patch-faq-question">
                    What is the maximum glass thickness supported?
                    <span class="patch-faq-icon">⌄</span>
                </div>
                <div class="patch-faq-answer">
                    Our standard patch fittings support glass thickness from 8mm to 12mm. For thicker glass up to 19mm, we offer heavy-duty patch fittings with reinforced construction and larger clamping surfaces. Custom solutions are available for special thickness requirements.
                </div>
            </div>

            <div class="patch-faq-item">
                <div class="patch-faq-question">
                    How do you ensure secure glass installation with patch fittings?
                    <span class="patch-faq-icon">⌄</span>
                </div>
                <div class="patch-faq-answer">
                    Our patch fittings feature precision-engineered clamping systems with adjustable pressure distribution. They include specialized rubber gaskets to prevent glass damage, and all mounting hardware is designed for secure fastening. We provide detailed installation guidelines and can offer technical support for complex installations.
                </div>
            </div>
        </div>
        <button class="patch-faq-btn">View All FAQs</button>
    </section>

    <script>
        function patchProdOpenPopup(title, desc, img){
            document.getElementById("patchProdPopupTitle").innerText = title;
            document.getElementById("patchProdPopupDesc").innerText = desc;
            document.getElementById("patchProdPopupImg").src = img;
            document.getElementById("patchProdPopup").classList.add("active");
        }

        function patchProdClosePopup(){
            document.getElementById("patchProdPopup").classList.remove("active");
        }

        const patchFaqItems = document.querySelectorAll(".patch-faq-item");
        patchFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                patchFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });
    </script>
<?php include "footer.php"?>