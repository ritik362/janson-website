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
            /* --sliding-container-width: 1400px; */
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
        .sliding-hero-section {
            position: relative;
            width: 100%;
            height: 360px;
            overflow: hidden;
        }

        .sliding-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
        }

        .sliding-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .sliding-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .sliding-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* CONTENT BOX */
        .sliding-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -60px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .sliding-content-wrapper {
            max-width: var(--sliding-container-width);
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .sliding-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .sliding-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .sliding-hero-content h1 {
                font-size: 32px;
            }

            .sliding-content-wrapper {
                grid-template-columns: 1fr;
            }
        }

        /* BENEFITS SECTION */
        .sliding-benefits-wrapper {
            max-width: var(--sliding-container-width);
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING */
        .sliding-card {
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
        }

        /* TITLE */
        .sliding-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .sliding-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN */
        .sliding-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE */
        .sliding-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .sliding-benefits-wrapper {
                flex-direction: column;
            }

            .sliding-plus,
            .sliding-dotted-line {
                display: none;
            }
        }

        /* MAIN SECTION */
        .sliding-main-section {
            max-width: var(--sliding-container-width);
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE */
        .sliding-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH */
        .sliding-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK */
        .sliding-discuss-link {
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

        .sliding-discuss-link:hover {
            color: var(--text-heading);
        }

        .sliding-discuss-link .sliding-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW */
        .sliding-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE */
        .sliding-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT */
        .sliding-right-content {
            flex: 1;
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
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .sliding-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
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
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .sliding-row {
                flex-direction: column;
            }

            .sliding-left-img img {
                width: 100%;
                height: auto;
            }

            .sliding-main-section h1 {
                font-size: 30px;
            }

            .sliding-main-section {
                padding: 50px 20px;
            }
        }

    /* PRODUCTS SECTION */
    .sliding-prod-section{
        max-width: var(--sliding-container-width);
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .sliding-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* PRODUCT GRID */
    .sliding-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* PRODUCT CARD */
    .sliding-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .sliding-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .sliding-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .sliding-prod-card-info{
        padding:15px;
    }

    .sliding-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .sliding-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* PRODUCT POPUP */
    .sliding-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .sliding-prod-popup.active{
        display:flex;
    }

    .sliding-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:slidingProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes slidingProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .sliding-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .sliding-prod-popup-content{
        padding:20px;
    }

    .sliding-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .sliding-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .sliding-prod-btn{
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

    .sliding-prod-btn:hover {
        background-color: #b5987a;
    }

    .sliding-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }

    /* EXPORT SECTION */
    .sliding-export-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .sliding-export-container{
        max-width: var(--sliding-container-width);
        padding: 0px 50px;
        margin:auto;
    }

    .sliding-export-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .sliding-export-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .sliding-export-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .sliding-export-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .sliding-export-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP */
    .sliding-export-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD */
    .sliding-export-card{
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

    .sliding-export-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .sliding-export-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .sliding-export-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .sliding-export-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .sliding-export-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST */
    .sliding-export-list{
        list-style:none;
        padding-left:0;
    }

    .sliding-export-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .sliding-export-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .sliding-export-card-wrap{
            flex-direction:column;
        }
        .sliding-export-card{
            min-width:100%;
        }
    }

    /* PROJECT SECTION */
    .sliding-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .sliding-project-container{
        max-width: 1350px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT */
    .sliding-project-left{
        flex:1;
    }

    .sliding-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .sliding-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .sliding-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS */
    .sliding-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .sliding-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .sliding-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE */
    .sliding-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .sliding-project-container{
            flex-direction:column;
        }

        .sliding-project-right img{
            width:100%;
            height:auto;
        }
    }

    /* FAQ SECTION */
    .sliding-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE */
    .sliding-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER */
    .sliding-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM */
    .sliding-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .sliding-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .sliding-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON */
    .sliding-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT */
    .sliding-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .sliding-faq-item.active .sliding-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE */
    .sliding-faq-item.active .sliding-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON */
    .sliding-faq-btn{
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

    .sliding-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="sliding-hero-section"  data-aos="zoom-in">
        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=1600" alt="Sliding Partition Background">
        <div class="sliding-hero-content">
            <h5>SLIDING PARTITION SYSTEMS</h5>
            <h1>SPACE-EFFICIENT SLIDING PARTITIONS FOR MODERN INTERIORS</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="sliding-content-box"  data-aos="zoom-in">
        <div class="sliding-content-wrapper">
            <div>
                <h2 class="sliding-content-title">SLIDING PARTITION MANUFACTURER IN INDIA</h2>
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

    <div class="sliding-benefits-wrapper"  data-aos="zoom-in">
        <!-- CARD 1 -->
        <div class="sliding-card">
            <div class="sliding-tag">Benefits</div>
            <img class="sliding-icon" src="https://cdn-icons-png.flaticon.com/512/3208/3208720.png">
            <div class="sliding-card-title">FLEXIBLE SPACE MANAGEMENT</div>
            <p>
                Convert large areas into smaller functional zones with ease when required. Modern design appeal adds style to interiors with clean lines and a minimalistic look.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="sliding-plus">+</div>

        <!-- CARD 2 -->
        <div class="sliding-card">
            <div class="sliding-tag">Benefits</div>
            <img class="sliding-icon" src="https://cdn-icons-png.flaticon.com/512/2933/2933116.png">
            <div class="sliding-card-title">OPERATIONAL EASE</div>
            <p>
                Equipped with smooth sliding mechanisms for effortless operations. Provides excellent acoustic separation between divided spaces with noise reduction capabilities.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="sliding-dotted-line"></div>

        <!-- CARD 3 -->
        <div class="sliding-card sliding-right-card">
            <div class="sliding-tag">Benefits</div>
            <img class="sliding-icon" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
            <div class="sliding-card-title">CUSTOM SOLUTIONS</div>
            <p>
                Available in a variety of finishes, materials, and dimensions. Built to last with corrosion-resistant fittings and high-quality tracks, requiring low maintenance.
            </p>
        </div>
    </div>

    <section class="sliding-main-section"  data-aos="zoom-in">
        <h1>SLIDING PARTITION SUPPLIER IN INDIA</h1>
        <p>
            With a reputation as one of the renowned Sliding Partition suppliers, we have developed a strong clientele based on timely delivery, reliable services, and high-quality products. We supply products for architects, contractors, and interior design professionals who have confidence in our ability to provide custom-made partition solutions for projects of every scale.
        </p>
        <p>
            Our distribution network ensures that clients receive products quickly and with complete technical support, from design consultation to installation guidance. Whether for commercial projects or residential development, we make sure excellence is delivered in every space.
        </p>

        <a href="#" class="sliding-discuss-link">
            Request a Quote
            <div class="sliding-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="sliding-row">
            <!-- LEFT IMAGE -->
            <div class="sliding-left-img">
                <img src="drive-download-20251210T094305Z-3-001/Wooden Sliding System/1.jpeg" alt="Sliding Partition Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="sliding-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Sliding Partition Solutions</h2>
                <p>
                    Our sliding partitions feature premium-grade aluminum and glass construction with silent and smooth sliding systems. We offer a wide range of finishes and glass types to match your interior design.
                </p>
                <p>
                    Available with options for manual or automatic operation, our partitions provide high acoustic performance and compact storage when opened. All materials are fire-resistant and eco-friendly.
                </p>
                <p>
                    Designed for easy installation and low maintenance, our sliding partitions are the perfect solution for modern spaces requiring flexibility and style.
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
    
    <div class="sliding-prod-section"  data-aos="zoom-in">
        <h2 class="sliding-prod-title">OUR SLIDING PARTITION PRODUCTS</h2>
        <div class="sliding-prod-grid">
            <!-- CARD 1 -->
            <div class="sliding-prod-card" onclick="slidingProdOpenPopup('Glass Sliding Partition','Modern glass sliding partition for elegant interiors. Perfect for conference rooms and offices.','drive-download-20251210T094305Z-3-001/Wooden Sliding System/2.jpeg')">
                <img class="sliding-prod-card-img" src="drive-download-20251210T094305Z-3-001/Wooden Sliding System/2.jpeg">
                <div class="sliding-prod-card-info">
                    <h3>Glass Sliding Partition</h3>
                    <p>Elegant glass sliding design</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="sliding-prod-card" onclick="slidingProdOpenPopup('Wooden Sliding Partition','Premium wooden sliding partition with natural finish. Ideal for traditional interiors.','drive-download-20251210T094305Z-3-001/Wooden Sliding System/3.jpeg')">
                <img class="sliding-prod-card-img" src="drive-download-20251210T094305Z-3-001/Wooden Sliding System/3.jpeg">
                <div class="sliding-prod-card-info">
                    <h3>Wooden Sliding Partition</h3>
                    <p>Natural wood finish</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="sliding-prod-card" onclick="slidingProdOpenPopup('Automatic Sliding Partition','Fully automatic sliding partition with remote control. Modern technology solution.','drive-download-20251210T094305Z-3-001/Wooden Sliding System/4.jpeg')">
                <img class="sliding-prod-card-img" src="drive-download-20251210T094305Z-3-001/Wooden Sliding System/4.jpeg">
                <div class="sliding-prod-card-info">
                    <h3>Automatic Sliding Partition</h3>
                    <p>Remote controlled operation</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="sliding-prod-popup" id="slidingProdPopup">
        <span class="sliding-prod-close" onclick="slidingProdClosePopup()">&times;</span>
        <div class="sliding-prod-popup-box">
            <img id="slidingProdPopupImg" class="sliding-prod-popup-img">
            <div class="sliding-prod-popup-content">
                <h2 id="slidingProdPopupTitle"></h2>
                <p id="slidingProdPopupDesc"></p>
                <a href="#" class="sliding-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="sliding-export-section"  data-aos="zoom-in">
        <div class="sliding-export-container">
            <div class="sliding-export-top-title">EXPORT QUALITY</div>
            <h2 class="sliding-export-heading">SLIDING PARTITION EXPORTER IN INDIA</h2>
            <p class="sliding-export-desc">
                As a trusted exporter of Sliding Partitions, we cater to the growing global demand for refined and durable partition systems that excel in aesthetics with functionality. Our export-ready partitions are engineered to international quality standards, thereby ensuring smooth installation and superior longevity across diverse environments.
            </p>
            
            <a href="#" class="sliding-export-link">
                International Enquiries
                <div class="sliding-export-line"></div>
            </a>

            <div class="sliding-export-card-wrap">
                <div class="sliding-export-card">
                    <div class="sliding-export-card-title">Global Standards</div>
                    <p>
                        We manufacture and export in accordance with the client's requirements and provide for secure packaging with timely international dispatch.
                    </p>
                    <hr>
                    <div class="sliding-export-card-subtitle">Our Export Advantages:</div>
                    <ul class="sliding-export-list">
                        <li>International quality standards</li>
                        <li>Secure packaging for transit</li>
                        <li>Timely international dispatch</li>
                        <li>Custom manufacturing as per requirements</li>
                    </ul>
                </div>

                <div class="sliding-export-card">
                    <div class="sliding-export-card-title">International Reach</div>
                    <p>
                        Because of our expert knowledge and attention to detail, we have gained long-term relationships with overseas partners, interior designers, and construction firms.
                    </p>
                    <hr>
                    <div class="sliding-export-card-subtitle">Global Partnerships:</div>
                    <ul class="sliding-export-list">
                        <li>Long-term overseas relationships</li>
                        <li>Expert technical knowledge</li>
                        <li>Attention to detail in design</li>
                        <li>Appreciation for precision and excellence</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="sliding-project-section"  data-aos="zoom-in">
        <div class="sliding-project-container">
            <div class="sliding-project-left">
                <div class="sliding-project-subtitle">HOTEL INSTALLATION</div>
                <h2 class="sliding-project-title">Luxury Hotel Conference Center</h2>
                <p class="sliding-project-text">
                    A five-star hotel needed flexible conference spaces that could adapt to different event sizes. Our sliding partitions provided the perfect solution, allowing them to create multiple room configurations quickly and effortlessly.
                </p>
                <p class="sliding-project-text">
                    The installation featured soundproof sliding partitions with automatic operation, allowing hotel staff to reconfigure spaces in minutes. The partitions included integrated lighting and climate control systems for complete functionality.
                </p>
                <p class="sliding-project-text">
                    This project enabled the hotel to maximize their space utilization while maintaining luxury standards and operational efficiency.
                </p>
                <ul class="sliding-project-list">
                    <li>Project Type: Luxury Hotel Conference Center</li>
                    <li>Partition Type: Automatic Soundproof Sliding Partitions</li>
                    <li>Special Features: Integrated Lighting, Climate Control</li>
                    <li>Project Completion Time: 6 Weeks</li>
                </ul>
            </div>
            
            <div class="sliding-project-right">
                <img src="drive-download-20251210T094305Z-3-001/Wooden Sliding System/8.jpeg" alt="Hotel Partition Project">
            </div>
        </div>
    </section>

    <section class="sliding-faq-section"  data-aos="zoom-in">
        <h2 class="sliding-faq-title">SLIDING PARTITION FAQS</h2>
        <div class="sliding-faq-container">
            <div class="sliding-faq-item">
                <div class="sliding-faq-question">
                    What is the maximum size for sliding partitions?
                    <span class="sliding-faq-icon">⌄</span>
                </div>
                <div class="sliding-faq-answer">
                    Our sliding partitions can be custom manufactured up to 6 meters in height and 12 meters in width. For larger spans, we can create multi-panel systems with intermediate supports.
                </div>
            </div>

            <div class="sliding-faq-item">
                <div class="sliding-faq-question">
                    Can sliding partitions be soundproof?
                    <span class="sliding-faq-icon">⌄</span>
                </div>
                <div class="sliding-faq-answer">
                    Yes, we offer specialized soundproof sliding partitions with STC ratings up to 50 dB. These feature double glazing, acoustic seals, and specialized track systems for optimal noise reduction.
                </div>
            </div>

            <div class="sliding-faq-item">
                <div class="sliding-faq-question">
                    How much space is needed for partition storage?
                    <span class="sliding-faq-icon">⌄</span>
                </div>
                <div class="sliding-faq-answer">
                    Our sliding partitions are designed for compact storage. When fully opened, they require only 10-15% of the opening width as storage space, making them ideal for space-constrained areas.
                </div>
            </div>

            <div class="sliding-faq-item">
                <div class="sliding-faq-question">
                    What maintenance do sliding partitions require?
                    <span class="sliding-faq-icon">⌄</span>
                </div>
                <div class="sliding-faq-answer">
                    Regular maintenance includes cleaning tracks monthly, lubricating rollers quarterly, and checking seals annually. Our partitions are designed for minimal maintenance with high-quality components.
                </div>
            </div>
        </div>
        <button class="sliding-faq-btn">View All FAQs</button>
    </section>

    <script>
        function slidingProdOpenPopup(title, desc, img){
            document.getElementById("slidingProdPopupTitle").innerText = title;
            document.getElementById("slidingProdPopupDesc").innerText = desc;
            document.getElementById("slidingProdPopupImg").src = img;
            document.getElementById("slidingProdPopup").classList.add("active");
        }

        function slidingProdClosePopup(){
            document.getElementById("slidingProdPopup").classList.remove("active");
        }

        const slidingFaqItems = document.querySelectorAll(".sliding-faq-item");
        slidingFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                slidingFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });
    </script>
<?php include "footer.php"?>