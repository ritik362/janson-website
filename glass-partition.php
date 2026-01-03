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
            /* --glass-container-width: 1400px; */
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
        .glass-hero-section {
            position: relative;
            width: 100%;
            height: 360px;
            overflow: hidden;
        }

        .glass-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
        }

        .glass-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .glass-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .glass-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* CONTENT BOX */
        .glass-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -60px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .glass-content-wrapper {
            max-width: var(--glass-container-width);
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .glass-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .glass-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .glass-hero-content h1 {
                font-size: 32px;
            }

            .glass-content-wrapper {
                grid-template-columns: 1fr;
            }
        }

        /* BENEFITS SECTION */
        .glass-benefits-wrapper {
            max-width: var(--glass-container-width);
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING */
        .glass-card {
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

        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .glass-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL */
        .glass-tag {
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
        .glass-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE */
        .glass-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .glass-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN */
        .glass-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE */
        .glass-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .glass-benefits-wrapper {
                flex-direction: column;
            }

            .glass-plus,
            .glass-dotted-line {
                display: none;
            }
        }

        /* MAIN SECTION */
        .glass-main-section {
            max-width: var(--glass-container-width);
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE */
        .glass-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH */
        .glass-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK */
        .glass-discuss-link {
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

        .glass-discuss-link:hover {
            color: var(--text-heading);
        }

        .glass-discuss-link .glass-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW */
        .glass-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE */
        .glass-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT */
        .glass-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .glass-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .glass-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .glass-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS */
        .glass-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .glass-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .glass-row {
                flex-direction: column;
            }

            .glass-left-img img {
                width: 100%;
                height: auto;
            }

            .glass-main-section h1 {
                font-size: 30px;
            }

            .glass-main-section {
                padding: 50px 20px;
            }
        }

    /* PRODUCTS SECTION */
    .glass-prod-section{
        max-width: var(--glass-container-width);
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .glass-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* PRODUCT GRID */
    .glass-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* PRODUCT CARD */
    .glass-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .glass-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .glass-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .glass-prod-card-info{
        padding:15px;
    }

    .glass-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .glass-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* PRODUCT POPUP */
    .glass-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .glass-prod-popup.active{
        display:flex;
    }

    .glass-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:glassProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes glassProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .glass-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .glass-prod-popup-content{
        padding:20px;
    }

    .glass-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .glass-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .glass-prod-btn{
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

    .glass-prod-btn:hover {
        background-color: #b5987a;
    }

    .glass-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }

    /* EXPORT SECTION */
    .glass-export-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .glass-export-container{
        max-width: var(--glass-container-width);
        padding: 0px 50px;
        margin:auto;
    }

    .glass-export-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .glass-export-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .glass-export-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .glass-export-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .glass-export-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP */
    .glass-export-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD */
    .glass-export-card{
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

    .glass-export-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .glass-export-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .glass-export-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .glass-export-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .glass-export-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST */
    .glass-export-list{
        list-style:none;
        padding-left:0;
    }

    .glass-export-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .glass-export-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .glass-export-card-wrap{
            flex-direction:column;
        }
        .glass-export-card{
            min-width:100%;
        }
    }

    /* PROJECT SECTION */
    .glass-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .glass-project-container{
        max-width: 1350px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT */
    .glass-project-left{
        flex:1;
    }

    .glass-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .glass-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .glass-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS */
    .glass-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .glass-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .glass-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE */
    .glass-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .glass-project-container{
            flex-direction:column;
        }

        .glass-project-right img{
            width:100%;
            height:auto;
        }
    }

    /* FAQ SECTION */
    .glass-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE */
    .glass-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER */
    .glass-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM */
    .glass-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .glass-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .glass-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON */
    .glass-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT */
    .glass-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .glass-faq-item.active .glass-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE */
    .glass-faq-item.active .glass-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON */
    .glass-faq-btn{
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

    .glass-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="glass-hero-section" data-aos="zoom-in-up">
        <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1600" alt="Glass Partition Background">
        <div class="glass-hero-content">
            <h5>GLASS PARTITION SYSTEMS</h5>
            <h1>ELEGANT & TRANSPARENT GLASS PARTITIONS FOR MODERN SPACES</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="glass-content-box" data-aos="zoom-in-up">
        <div class="glass-content-wrapper">
            <div>
                <h2 class="glass-content-title">GLASS PARTITION MANUFACTURER IN INDIA</h2>
            </div>
            <div class="glass-content-text">
                <p>
                    As one of the leading manufacturers of Glass Partitions, we specialize in the fabrication of modern, functional, and aesthetically refined partition systems that redefine interior spaces with elegance and transparency. Our glass partitions are designed to flawlessly balance the blend of beauty and functionality into open, light-rich areas that stimulate productivity and sophistication.
                </p>
                <p>
                    Each partition is built with superior-quality tempered glass, high-grade aluminum profiles, and accurate fittings in order to guarantee structural integrity, safety, and durability. Be it for offices, homes, retail spaces, or hospitality interiors, our glass partitions add a look of cleanliness and modernity while serving functionality regarding privacy and acoustic comfort.
                </p>
                <p>
                    We can create superior partitions that enhance both form and function through our expert craftsmanship, advanced technology in manufacturing, and attention to detail, making us a trusted choice for modern interior solutions.
                </p>
            </div>
        </div>
    </section>

    <div class="glass-benefits-wrapper" data-aos="zoom-in-up">
        <!-- CARD 1 -->
        <div class="glass-card">
            <div class="glass-tag">Benefits</div>
            <img class="glass-icon" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
            <div class="glass-card-title">ELEGANT APPEARANCE</div>
            <p>
                Exuding a fashionable, elegant look, canvases bring openness, transparency, and natural light inside. Creates an inspiring, well-lit workspace for improved efficiency and productivity.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="glass-plus">+</div>

        <!-- CARD 2 -->
        <div class="glass-card">
            <div class="glass-tag">Benefits</div>
            <img class="glass-icon" src="https://cdn-icons-png.flaticon.com/512/3022/3022553.png">
            <div class="glass-card-title">SPACE OPTIMIZATION</div>
            <p>
                Large space divided into functional zones without visual clutter. Minimizes noise while maintaining visual connectivity for acoustic comfort and privacy.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="glass-dotted-line"></div>

        <!-- CARD 3 -->
        <div class="glass-card glass-right-card">
            <div class="glass-tag">Benefits</div>
            <img class="glass-icon" src="https://cdn-icons-png.flaticon.com/512/3135/3135694.png">
            <div class="glass-card-title">DURABLE & VERSATILE</div>
            <p>
                Constructed from high-quality tempered glass and corrosion-resistant hardware. Minimal maintenance required; clarity is retained for years with diverse applications across various spaces.
            </p>
        </div>
    </div>

    <section class="glass-main-section" data-aos="zoom-in-up">
        <h1>GLASS PARTITION SUPPLIER IN INDIA</h1>
        <p>
            As one of the major Glass Partition suppliers, we pride ourselves on superior quality, excellent customer service, and after-sales technical support. We develop and provide solutions for architects, interior designers, and corporate clients who demand perfection, performance, and style.
        </p>
        <p>
            Our supply chain is highly efficient and ensures on-time delivery with consistent product quality for orders of any scale and customization. Each glass partition is well-packaged to ensure safety in transportation and quick installation, enabling clients to give shape to their interior concepts easily.
        </p>

        <a href="#" class="glass-discuss-link">
            Request a Quote
            <div class="glass-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="glass-row">
            <!-- LEFT IMAGE -->
            <div class="glass-left-img">
                <img src="glass-posrtion/image.png" alt="Glass Partition Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="glass-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Glass Partition Solutions</h2>
                <p>
                    Our glass partitions feature premium toughened and laminated glass options with sleek aluminum and stainless-steel framing systems. We offer multiple finishes including clear, frosted, tinted, or decorative glass to match any interior design.
                </p>
                <p>
                    Designed with excellent sound insulation properties, our partitions are compatible with sliding or fixed designs. All materials used are non-toxic, safe, secure, and eco-friendly, ensuring a healthy indoor environment.
                </p>
                <p>
                    With easy installation, barely visible hardware, and custom size and design flexibility, our glass partitions provide the perfect solution for bespoke interiors requiring both aesthetics and functionality.
                </p>
                <ul class="glass-ul">
                    <li>Premium toughened and laminated glass options</li>
                    <li>Sleek aluminum and stainless-steel framing systems</li>
                    <li>Multiple finishes: clear, frosted, tinted, or decorative glass</li>
                    <li>Excellent sound insulation properties</li>
                    <li>Compatible with sliding or fixed designs</li>
                    <li>Non-toxic, safe, secure, and eco-friendly materials</li>
                    <li>Easy to install and barely visible hardware</li>
                    <li>Custom size and design flexibility for bespoke interiors</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="glass-prod-section" data-aos="zoom-in-up">
        <h2 class="glass-prod-title">OUR GLASS PARTITION PRODUCTS</h2>
        <div class="glass-prod-grid">
            <!-- CARD 1 -->
            <div class="glass-prod-card" onclick="glassProdOpenPopup('Frameless Glass Partition','Modern frameless glass partition for maximum transparency. Perfect for offices and commercial spaces.','glass-posrtion/image copy.png')">
                <img class="glass-prod-card-img" src="glass-posrtion/image copy.png">
                <div class="glass-prod-card-info">
                    <h3>Frameless Glass Partition</h3>
                    <p>Maximum transparency design</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="glass-prod-card" onclick="glassProdOpenPopup('Frosted Glass Partition','Frosted glass partition for privacy with light transmission. Elegant and functional solution.','glass-posrtion/image copy 2.png')">
                <img class="glass-prod-card-img" src="glass-posrtion/image copy 2.png">
                <div class="glass-prod-card-info">
                    <h3>Frosted Glass Partition</h3>
                    <p>Privacy with light transmission</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="glass-prod-card" onclick="glassProdOpenPopup('Sliding Glass Partition','Space-saving sliding glass partition. Ideal for flexible office spaces.','glass-posrtion/image copy 3.png')">
                <img class="glass-prod-card-img" src="glass-posrtion/image copy 3.png">
                <div class="glass-prod-card-info">
                    <h3>Sliding Glass Partition</h3>
                    <p>Flexible space solution</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="glass-prod-popup" id="glassProdPopup">
        <span class="glass-prod-close" onclick="glassProdClosePopup()">&times;</span>
        <div class="glass-prod-popup-box">
            <img id="glassProdPopupImg" class="glass-prod-popup-img">
            <div class="glass-prod-popup-content">
                <h2 id="glassProdPopupTitle"></h2>
                <p id="glassProdPopupDesc"></p>
                <a href="#" class="glass-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="glass-export-section" data-aos="zoom-in-up">
        <div class="glass-export-container">
            <div class="glass-export-top-title">EXPORT QUALITY</div>
            <h2 class="glass-export-heading">GLASS PARTITION EXPORTER IN INDIA</h2>
            <p class="glass-export-desc">
                As one of the experienced exporters of Glass Partitions, we proudly offer modern and reliable partition solutions to global clients, designed according to varied architectural styles and space needs. Our glass partitions are manufactured in compliance with international safety and quality standards, ensuring flawless performance and long-lasting appeal.
            </p>
            
            <a href="#" class="glass-export-link">
                International Enquiries
                <div class="glass-export-line"></div>
            </a>

            <div class="glass-export-card-wrap">
                <div class="glass-export-card">
                    <div class="glass-export-card-title">Global Standards</div>
                    <p>
                        We offer comprehensive export services, including product customization, secure packaging, and timely shipment around the world. Our commitment to innovation and quality ensures customer satisfaction.
                    </p>
                    <hr>
                    <div class="glass-export-card-subtitle">Our Export Advantages:</div>
                    <ul class="glass-export-list">
                        <li>Manufactured to international safety standards</li>
                        <li>Compliance with global quality norms</li>
                        <li>Secure packaging for international transit</li>
                        <li>Timely shipment worldwide</li>
                    </ul>
                </div>

                <div class="glass-export-card">
                    <div class="glass-export-card-title">International Recognition</div>
                    <p>
                        Our commitment to innovation, quality, and customer satisfaction has earned us recognition as a reliable exporter into various international markets for commercial, residential, and institutional sectors.
                    </p>
                    <hr>
                    <div class="glass-export-card-subtitle">Global Market Reach:</div>
                    <ul class="glass-export-list">
                        <li>Reliable exporter in international markets</li>
                        <li>Serving commercial sectors globally</li>
                        <li>Residential and institutional projects</li>
                        <li>Recognition for quality and innovation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="glass-project-section" data-aos="zoom-in-up">
        <div class="glass-project-container">
            <div class="glass-project-left">
                <div class="glass-project-subtitle">CORPORATE OFFICE PROJECT</div>
                <h2 class="glass-project-title">Tech Innovation Center</h2>
                <p class="glass-project-text">
                    A leading technology company required an open yet private workspace for their innovation center. Our glass partitions provided the perfect solution, creating collaborative spaces while maintaining transparency and natural light flow.
                </p>
                <p class="glass-project-text">
                    The installation featured frameless glass partitions with acoustic interlayers for sound insulation. The partitions included magnetic door systems for seamless operation and integrated cable management for technology integration.
                </p>
                <p class="glass-project-text">
                    This project successfully created a modern, inspiring workspace that promoted collaboration while providing necessary privacy for focused work, receiving accolades from both employees and visitors.
                </p>
                <ul class="glass-project-list">
                    <li>Project Type: Corporate Tech Innovation Center</li>
                    <li>Partition Type: Frameless Glass Partitions with Acoustic Features</li>
                    <li>Special Features: Magnetic Door Systems, Cable Management</li>
                    <li>Project Completion Time: 6 Weeks</li>
                </ul>
            </div>
            
            <div class="glass-project-right">
                <img src="glass-posrtion/image copy 4.png" alt="Office Glass Partition Project">
            </div>
        </div>
    </section>

    <section class="glass-faq-section" data-aos="zoom-in-up">
        <h2 class="glass-faq-title">GLASS PARTITION FAQS</h2>
        <div class="glass-faq-container">
            <div class="glass-faq-item">
                <div class="glass-faq-question">
                    What types of glass are used in your partitions?
                    <span class="glass-faq-icon">⌄</span>
                </div>
                <div class="glass-faq-answer">
                    We use 10mm or 12mm tempered safety glass for all our partitions. For enhanced safety, we offer laminated glass options. We also provide various finishes including clear, frosted, tinted, and decorative glass patterns.
                </div>
            </div>

            <div class="glass-faq-item">
                <div class="glass-faq-question">
                    Are glass partitions soundproof?
                    <span class="glass-faq-icon">⌄</span>
                </div>
                <div class="glass-faq-answer">
                    Yes, we offer acoustic glass partitions with specialized interlayers that provide excellent sound insulation. Our acoustic partitions can achieve STC ratings up to 42 dB, making them suitable for conference rooms and private offices.
                </div>
            </div>

            <div class="glass-faq-item">
                <div class="glass-faq-question">
                    How do you ensure safety with glass partitions?
                    <span class="glass-faq-icon">⌄</span>
                </div>
                <div class="glass-faq-answer">
                    All our glass is tempered safety glass that breaks into small, blunt pieces if broken. We also use laminated glass options that hold together when broken. All installations include safety film and proper edge finishing.
                </div>
            </div>

            <div class="glass-faq-item">
                <div class="glass-faq-question">
                    Can glass partitions be installed in existing buildings?
                    <span class="glass-faq-icon">⌄</span>
                </div>
                <div class="glass-faq-answer">
                    Absolutely. Our glass partitions are designed for both new constructions and renovations. They can be installed with minimal disruption to existing structures and require no major structural modifications in most cases.
                </div>
            </div>
        </div>
        <button class="glass-faq-btn">View All FAQs</button>
    </section>

    <script>
        function glassProdOpenPopup(title, desc, img){
            document.getElementById("glassProdPopupTitle").innerText = title;
            document.getElementById("glassProdPopupDesc").innerText = desc;
            document.getElementById("glassProdPopupImg").src = img;
            document.getElementById("glassProdPopup").classList.add("active");
        }

        function glassProdClosePopup(){
            document.getElementById("glassProdPopup").classList.remove("active");
        }

        const glassFaqItems = document.querySelectorAll(".glass-faq-item");
        glassFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                glassFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });
    </script>
<?php include "footer.php"?>