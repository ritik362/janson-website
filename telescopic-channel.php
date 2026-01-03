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
        .telescopic-hero-section {
            position: relative;
            width: 100%;
            height: 360px;
            overflow: hidden;
        }

        .telescopic-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
        }

        .telescopic-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .telescopic-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .telescopic-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 700px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* CONTENT BOX */
        .telescopic-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -60px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .telescopic-content-wrapper {
            /* max-width: 1400px; */
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .telescopic-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .telescopic-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .telescopic-hero-content h1 {
                font-size: 32px;
            }

            .telescopic-content-wrapper {
                grid-template-columns: 1fr;
            }
        }

        /* BENEFITS SECTION */
        .telescopic-benefits-wrapper {
            /* max-width: 1400px; */
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING */
        .telescopic-card {
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

        .telescopic-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .telescopic-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL */
        .telescopic-tag {
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
        .telescopic-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE */
        .telescopic-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .telescopic-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN */
        .telescopic-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE */
        .telescopic-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .telescopic-benefits-wrapper {
                flex-direction: column;
            }

            .telescopic-plus,
            .telescopic-dotted-line {
                display: none;
            }
        }

        /* MAIN SECTION */
        .telescopic-main-section {
            /* max-width: 1400px; */
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE */
        .telescopic-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH */
        .telescopic-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK */
        .telescopic-discuss-link {
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

        .telescopic-discuss-link:hover {
            color: var(--text-heading);
        }

        .telescopic-discuss-link .telescopic-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW */
        .telescopic-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE */
        .telescopic-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT */
        .telescopic-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .telescopic-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .telescopic-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .telescopic-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS */
        .telescopic-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .telescopic-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .telescopic-row {
                flex-direction: column;
            }

            .telescopic-left-img img {
                width: 100%;
                height: auto;
            }

            .telescopic-main-section h1 {
                font-size: 30px;
            }

            .telescopic-main-section {
                padding: 50px 20px;
            }
        }

    /* PRODUCTS SECTION */
    .telescopic-prod-section{
        max-width: 1400px;
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .telescopic-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* PRODUCT GRID */
    .telescopic-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* PRODUCT CARD */
    .telescopic-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .telescopic-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .telescopic-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .telescopic-prod-card-info{
        padding:15px;
    }

    .telescopic-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .telescopic-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* PRODUCT POPUP */
    .telescopic-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .telescopic-prod-popup.active{
        display:flex;
    }

    .telescopic-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:telescopicProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes telescopicProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .telescopic-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .telescopic-prod-popup-content{
        padding:20px;
    }

    .telescopic-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .telescopic-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .telescopic-prod-btn{
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

    .telescopic-prod-btn:hover {
        background-color: #b5987a;
    }

    .telescopic-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }

    /* EXPORT SECTION */
    .telescopic-export-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .telescopic-export-container{
        /* max-width: 1400px; */
        padding: 0px 50px;
        margin:auto;
    }

    .telescopic-export-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .telescopic-export-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .telescopic-export-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .telescopic-export-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .telescopic-export-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP */
    .telescopic-export-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD */
    .telescopic-export-card{
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

    .telescopic-export-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .telescopic-export-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .telescopic-export-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .telescopic-export-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .telescopic-export-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST */
    .telescopic-export-list{
        list-style:none;
        padding-left:0;
    }

    .telescopic-export-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .telescopic-export-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .telescopic-export-card-wrap{
            flex-direction:column;
        }
        .telescopic-export-card{
            min-width:100%;
        }
    }

    /* PROJECT SECTION */
    .telescopic-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .telescopic-project-container{
        max-width: 1350px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT */
    .telescopic-project-left{
        flex:1;
    }

    .telescopic-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .telescopic-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .telescopic-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS */
    .telescopic-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .telescopic-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .telescopic-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE */
    .telescopic-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .telescopic-project-container{
            flex-direction:column;
        }

        .telescopic-project-right img{
            width:100%;
            height:auto;
        }
    }

    /* FAQ SECTION */
    .telescopic-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE */
    .telescopic-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER */
    .telescopic-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM */
    .telescopic-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .telescopic-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .telescopic-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON */
    .telescopic-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT */
    .telescopic-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .telescopic-faq-item.active .telescopic-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE */
    .telescopic-faq-item.active .telescopic-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON */
    .telescopic-faq-btn{
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

    .telescopic-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="telescopic-hero-section">
        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=1600" alt="Telescopic Channel Background">
        <div class="telescopic-hero-content">
            <h5>TELESCOPIC CHANNEL SYSTEMS</h5>
            <h1>TELESCOPIC CHANNEL MANUFACTURER IN INDIA</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="telescopic-content-box">
        <div class="telescopic-content-wrapper">
            <div>
                <h2 class="telescopic-content-title">TELESCOPIC CHANNEL MANUFACTURER IN INDIA</h2>
            </div>
            <div class="telescopic-content-text">
                <p>
                    As a trusted Telescopic Channel manufacturer, we specialize in crafting precision-engineered drawer and sliding mechanisms that deliver smooth, silent, and durable motion for furniture and cabinetry. Our telescopic channels are designed to provide maximum extension, allowing full access to drawers while maintaining perfect alignment and stability.
                </p>
                <p>
                    Manufactured from superior cold-rolled steel and state-of-the-art technology, each telescopic channel is strictly checked for quality to make it strong, durable, and resistant to corrosion. Our channels are suitable for use in various applications like kitchen drawers, office furniture, industrial cabinets, tool storage units, and household furniture.
                </p>
                <p>
                    With a focus on functionality, aesthetics, and performance, our telescopic channels are designed to handle heavy loads effortlessly, offering soft, noise-free movement to ensure a premium user experience with every slide.
                </p>
            </div>
        </div>
    </section>

    <div class="telescopic-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="telescopic-card">
            <div class="telescopic-tag">Benefits</div>
            <img class="telescopic-icon" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
            <div class="telescopic-card-title">SMOOTH AND SILENT OPERATION</div>
            <p>
                Engineered for seamless, noise-free sliding motion.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="telescopic-plus">+</div>

        <!-- CARD 2 -->
        <div class="telescopic-card">
            <div class="telescopic-tag">Benefits</div>
            <img class="telescopic-icon" src="https://cdn-icons-png.flaticon.com/512/3022/3022553.png">
            <div class="telescopic-card-title">FULL EXTENSION ACCESS</div>
            <p>
                Allows opening of drawers fully for maximum storage efficiency.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="telescopic-dotted-line"></div>

        <!-- CARD 3 -->
        <div class="telescopic-card telescopic-right-card">
            <div class="telescopic-tag">Benefits</div>
            <img class="telescopic-icon" src="https://cdn-icons-png.flaticon.com/512/3033/3033143.png">
            <div class="telescopic-card-title">DURABLE CONSTRUCTION</div>
            <p>
                Made from heavy-duty cold-rolled steel for long-lasting performance.
            </p>
        </div>
    </div>

    <section class="telescopic-main-section">
        <h1>TELESCOPIC CHANNEL SUPPLIER IN INDIA</h1>
        <p>
            As one of the leading Telescopic Channel suppliers in the country, we offer a complete range of sliding channels to meet varied residential, commercial, and industrial needs. Our supply network ensures timely delivery and consistent quality, which helps us emerge as a trusted partner for furniture manufacturers, modular kitchen brands, and hardware dealers across the country.
        </p>
        <p>
            We offer soft-close, heavy-duty, push-to-open, and a variety of other types of telescopic channels for particular applications and specific performance requirements. All the products supplied from us reflect precision engineering, smooth operation, and long-term reliability to ensure value and satisfaction for each of our valuable clients.
        </p>

        <a href="#" class="telescopic-discuss-link">
            Request a Quote
            <div class="telescopic-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="telescopic-row">
            <!-- LEFT IMAGE -->
            <div class="telescopic-left-img">
                <img src="drive-download-20251210T094305Z-3-001/Drawer Sliding Channel/1.jpeg" alt="Telescopic Channel Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="telescopic-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Telescopic Channel Solutions</h2>
                <p>
                    Manufactured from high-tensile cold-rolled steel.
                </p>
                <p>
                    Available in multiple lengths and load capacities.
                </p>
                <p>
                    Optional soft-close or push-to-open mechanisms.
                </p>
                <p>
                    Corrosion-resistant plated finish for extended life.
                </p>
                <p>
                    Ball-bearing mechanism for smooth and silent sliding.
                </p>
                <p>
                    Designed for both light and heavy-duty applications.
                </p>
                <p>
                    Easy to mount, easy to remove for maintenance/cleaning.
                </p>
                <p>
                    Resistant, tested for smooth operation cycles.
                </p>
            </div>
        </div>
    </section>
    
    <div class="telescopic-prod-section">
        <h2 class="telescopic-prod-title">OUR TELESCOPIC CHANNEL PRODUCTS</h2>
        <div class="telescopic-prod-grid">
            <!-- CARD 1 -->
            <div class="telescopic-prod-card" onclick="telescopicProdOpenPopup('Heavy Duty Telescopic Channel','Heavy-duty telescopic channel for industrial applications. High load capacity with smooth sliding.','drive-download-20251210T094305Z-3-001/Drawer Sliding Channel/2.jpeg')">
                <img class="telescopic-prod-card-img" src="drive-download-20251210T094305Z-3-001/Drawer Sliding Channel/2.jpeg">
                <div class="telescopic-prod-card-info">
                    <h3>Heavy Duty Channel</h3>
                    <p>High load capacity industrial grade</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="telescopic-prod-card" onclick="telescopicProdOpenPopup('Soft Close Telescopic Channel','Soft-close telescopic channel with noise-free operation. Perfect for modern furniture.','drive-download-20251210T094305Z-3-001/Drawer Sliding Channel/3.jpeg')">
                <img class="telescopic-prod-card-img" src="drive-download-20251210T094305Z-3-001/Drawer Sliding Channel/3.jpeg">
                <div class="telescopic-prod-card-info">
                    <h3>Soft Close Channel</h3>
                    <p>Silent operation with soft-close feature</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="telescopic-prod-card" onclick="telescopicProdOpenPopup('Full Extension Telescopic Channel','Full extension telescopic channel for maximum drawer access. Premium quality construction.','drive-download-20251210T094305Z-3-001/Drawer Sliding Channel/4.jpeg')">
                <img class="telescopic-prod-card-img" src="drive-download-20251210T094305Z-3-001/Drawer Sliding Channel/4.jpeg">
                <div class="telescopic-prod-card-info">
                    <h3>Full Extension Channel</h3>
                    <p>Maximum drawer access design</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="telescopic-prod-popup" id="telescopicProdPopup">
        <span class="telescopic-prod-close" onclick="telescopicProdClosePopup()">&times;</span>
        <div class="telescopic-prod-popup-box">
            <img id="telescopicProdPopupImg" class="telescopic-prod-popup-img">
            <div class="telescopic-prod-popup-content">
                <h2 id="telescopicProdPopupTitle"></h2>
                <p id="telescopicProdPopupDesc"></p>
                <a href="#" class="telescopic-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="telescopic-export-section">
        <div class="telescopic-export-container">
            <div class="telescopic-export-top-title">EXPORT QUALITY</div>
            <h2 class="telescopic-export-heading">TELESCOPIC CHANNEL EXPORTER IN INDIA</h2>
            <p class="telescopic-export-desc">
                As a reputed Telescopic Channel exporter, we deliver globally acclaimed sliding solutions that meet international standards of performance and design. Our export-grade telescopic channels are known for their high load-bearing capacity, perfect finish, and long operational life.
            </p>
            
            <a href="#" class="telescopic-export-link">
                International Enquiries
                <div class="telescopic-export-line"></div>
            </a>

            <div class="telescopic-export-card-wrap">
                <div class="telescopic-export-card">
                    <div class="telescopic-export-card-title">Global Standards</div>
                    <p>
                        We work with overseas architects, developers, and distributors to deliver tailor-made solutions for different types of residential and commercial projects. Each export consignment is securely packed and fully tested prior to shipment.
                    </p>
                    <hr>
                    <div class="telescopic-export-card-subtitle">Our Export Advantages:</div>
                    <ul class="telescopic-export-list">
                        <li>Manufactured to international standards</li>
                        <li>Unparalleled strength and endurance</li>
                        <li>Securely packed for international transit</li>
                        <li>Fully tested before shipment</li>
                    </ul>
                </div>

                <div class="telescopic-export-card">
                    <div class="telescopic-export-card-title">International Recognition</div>
                    <p>
                        Our commitment to innovation, craftsmanship, and customer satisfaction has positioned us as a preferred exporter of premium telescopic channel systems globally, enhancing functionality and design in every setting.
                    </p>
                    <hr>
                    <div class="telescopic-export-card-subtitle">Global Market Reach:</div>
                    <ul class="telescopic-export-list">
                        <li>Preferred exporter globally</li>
                        <li>Innovation and craftsmanship focus</li>
                        <li>Tailor-made solutions worldwide</li>
                        <li>Enhancing functional excellence</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="telescopic-faq-section">
        <h2 class="telescopic-faq-title">TELESCOPIC CHANNEL FAQS</h2>
        <div class="telescopic-faq-container">
            <div class="telescopic-faq-item">
                <div class="telescopic-faq-question">
                    What load capacity do your telescopic channels support?
                    <span class="telescopic-faq-icon">⌄</span>
                </div>
                <div class="telescopic-faq-answer">
                    Our telescopic channels range from 25kg to 100kg load capacity depending on the model. Standard residential channels support 25-35kg, while heavy-duty industrial channels can handle 45-100kg. We recommend selecting based on drawer weight and usage frequency.
                </div>
            </div>

            <div class="telescopic-faq-item">
                <div class="telescopic-faq-question">
                    Are soft-close mechanisms available in all your channels?
                    <span class="telescopic-faq-icon">⌄</span>
                </div>
                <div class="telescopic-faq-answer">
                    Yes, we offer soft-close mechanisms across our product range. These can be integrated into both standard and heavy-duty channels. The soft-close feature ensures gentle, silent closing without slamming, extending the life of both the channel and the furniture.
                </div>
            </div>

            <div class="telescopic-faq-item">
                <div class="telescopic-faq-question">
                    Can telescopic channels be used for outdoor applications?
                    <span class="telescopic-faq-icon">⌄</span>
                </div>
                <div class="telescopic-faq-answer">
                    We recommend our specially coated outdoor-grade channels for exterior applications. These feature additional corrosion resistance and weatherproofing. However, for best results, we suggest using them in covered or protected outdoor areas to maximize longevity.
                </div>
            </div>

            <div class="telescopic-faq-item">
                <div class="telescopic-faq-question">
                    How do I choose between full-extension and partial-extension channels?
                    <span class="telescopic-faq-icon">⌄</span>
                </div>
                <div class="telescopic-faq-answer">
                    Full-extension channels allow the drawer to extend completely, providing access to the entire interior. Partial-extension channels are more economical but leave about 1/3 of the drawer inaccessible. We recommend full-extension for frequently used drawers and partial for storage units.
                </div>
            </div>
        </div>
        <button class="telescopic-faq-btn">View All FAQs</button>
    </section>

    <script>
        function telescopicProdOpenPopup(title, desc, img){
            document.getElementById("telescopicProdPopupTitle").innerText = title;
            document.getElementById("telescopicProdPopupDesc").innerText = desc;
            document.getElementById("telescopicProdPopupImg").src = img;
            document.getElementById("telescopicProdPopup").classList.add("active");
        }

        function telescopicProdClosePopup(){
            document.getElementById("telescopicProdPopup").classList.remove("active");
        }

        const telescopicFaqItems = document.querySelectorAll(".telescopic-faq-item");
        telescopicFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                telescopicFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });
    </script>
<?php include "footer.php"?>