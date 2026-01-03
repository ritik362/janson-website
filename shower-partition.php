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
            /* --shower-container-width: 1400px; */
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
        .shower-hero-section {
            position: relative;
            width: 100%;
            height: 360px;
            overflow: hidden;
        }

        .shower-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
        }

        .shower-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .shower-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .shower-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* CONTENT BOX */
        .shower-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -60px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .shower-content-wrapper {
            max-width: var(--shower-container-width);
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .shower-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .shower-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .shower-hero-content h1 {
                font-size: 32px;
            }

            .shower-content-wrapper {
                grid-template-columns: 1fr;
            }
        }

        /* BENEFITS SECTION */
        .shower-benefits-wrapper {
            max-width: var(--shower-container-width);
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING */
        .shower-card {
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

        .shower-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .shower-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL */
        .shower-tag {
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
        .shower-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE */
        .shower-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .shower-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN */
        .shower-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE */
        .shower-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .shower-benefits-wrapper {
                flex-direction: column;
            }

            .shower-plus,
            .shower-dotted-line {
                display: none;
            }
        }

        /* MAIN SECTION */
        .shower-main-section {
            max-width: var(--shower-container-width);
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE */
        .shower-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH */
        .shower-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK */
        .shower-discuss-link {
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

        .shower-discuss-link:hover {
            color: var(--text-heading);
        }

        .shower-discuss-link .shower-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW */
        .shower-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE */
        .shower-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT */
        .shower-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .shower-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .shower-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .shower-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS */
        .shower-ul {
            padding-left: 20px;
            margin-top: 10px;
           list-style: disc;
        }

        .shower-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .shower-row {
                flex-direction: column;
            }

            .shower-left-img img {
                width: 100%;
                height: auto;
            }

            .shower-main-section h1 {
                font-size: 30px;
            }

            .shower-main-section {
                padding: 50px 20px;
            }
        }

    /* PRODUCTS SECTION */
    .shower-prod-section{
        max-width: var(--shower-container-width);
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .shower-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* PRODUCT GRID */
    .shower-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* PRODUCT CARD */
    .shower-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .shower-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .shower-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .shower-prod-card-info{
        padding:15px;
    }

    .shower-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .shower-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* PRODUCT POPUP */
    .shower-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .shower-prod-popup.active{
        display:flex;
    }

    .shower-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:showerProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes showerProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .shower-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .shower-prod-popup-content{
        padding:20px;
    }

    .shower-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .shower-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .shower-prod-btn{
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

    .shower-prod-btn:hover {
        background-color: #b5987a;
    }

    .shower-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }

    /* EXPORT SECTION */
    .shower-export-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .shower-export-container{
        max-width: var(--shower-container-width);
        padding: 0px 50px;
        margin:auto;
    }

    .shower-export-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .shower-export-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .shower-export-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .shower-export-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .shower-export-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP */
    .shower-export-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD */
    .shower-export-card{
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

    .shower-export-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .shower-export-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .shower-export-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .shower-export-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .shower-export-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST */
    .shower-export-list{
        list-style:none;
        padding-left:0;
    }

    .shower-export-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .shower-export-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .shower-export-card-wrap{
            flex-direction:column;
        }
        .shower-export-card{
            min-width:100%;
        }
    }

    /* PROJECT SECTION */
    .shower-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .shower-project-container{
        max-width: 1350px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT */
    .shower-project-left{
        flex:1;
    }

    .shower-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .shower-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .shower-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS */
    .shower-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .shower-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .shower-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE */
    .shower-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .shower-project-container{
            flex-direction:column;
        }

        .shower-project-right img{
            width:100%;
            height:auto;
        }
    }

    /* FAQ SECTION */
    .shower-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE */
    .shower-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER */
    .shower-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM */
    .shower-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .shower-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .shower-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON */
    .shower-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT */
    .shower-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .shower-faq-item.active .shower-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE */
    .shower-faq-item.active .shower-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON */
    .shower-faq-btn{
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

    .shower-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="shower-hero-section" data-aos="zoom-in-up">
        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=1600" alt="Shower Partition Background">
        <div class="shower-hero-content">
            <h5>SHOWER PARTITION SYSTEMS</h5>
            <h1>STYLISH & FUNCTIONAL SHOWER SCREENS FOR MODERN BATHROOMS</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="shower-content-box" data-aos="zoom-in-up">
        <div class="shower-content-wrapper">
            <div>
                <h2 class="shower-content-title">SHOWER PARTITION MANUFACTURER IN INDIA</h2>
            </div>
            <div class="shower-content-text">
                <p>
                    As one of the leading manufacturers of Shower Partitions, we design and manufacture stylish, durable, and functional shower screens to add a touch of sophistication to modern bathrooms. Our shower partitions are designed with precision, putting the right balance between aesthetics, functionality, and safety.
                </p>
                <p>
                    Crafted from high-quality glass and fitted with high-quality accessories, each partition is conceptualized to seamlessly blend a comfortable experience in the bathing area and enhance the overall aesthetic appeal of space. We combine advanced production techniques with a sense for contemporary design to fabricate partitions that look stunning while also performing exceptionally in everyday use.
                </p>
                <p>
                    Be it residential bathrooms, hotels, spas, or resorts, our shower partitions are sure to add an aura of sophistication, cleanliness, and convenience to any setting.
                </p>
            </div>
        </div>
    </section>

    <div class="shower-benefits-wrapper" data-aos="zoom-in-up">
        <!-- CARD 1 -->
        <div class="shower-card">
            <div class="shower-tag">Benefits</div>
            <img class="shower-icon" src="https://cdn-icons-png.flaticon.com/512/3033/3033143.png">
            <div class="shower-card-title">AESTHETIC APPEAL</div>
            <p>
                Adds a modern minimalist look to the bathroom interior. Maximizes space while the bathroom remains open and organized with elegant design.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="shower-plus">+</div>

        <!-- CARD 2 -->
        <div class="shower-card">
            <div class="shower-tag">Benefits</div>
            <img class="shower-icon" src="https://cdn-icons-png.flaticon.com/512/2972/2972543.png">
            <div class="shower-card-title">EASY MAINTENANCE</div>
            <p>
                Resistant to water stains and corrosion, ensuring long-lasting clarity and shine. Offers privacy in style without giving up openness and comfort.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="shower-dotted-line"></div>

        <!-- CARD 3 -->
        <div class="shower-card shower-right-card">
            <div class="shower-tag">Benefits</div>
            <img class="shower-icon" src="https://cdn-icons-png.flaticon.com/512/1046/1046745.png">
            <div class="shower-card-title">SAFETY & HYGIENE</div>
            <p>
                Hygienic and safe with smooth edges, safety-tempered glass for secure usage. Prevents water spillage and maintains the bathroom floor dry.
            </p>
        </div>
    </div>

    <section class="shower-main-section" data-aos="zoom-in-up">
        <h1>SHOWER PARTITION SUPPLIER IN INDIA</h1>
        <p>
            As one of the trusted Shower Partition suppliers, we assure the delivery of high-quality partitions to meet the demands of architects, interior designers, and even homeowners. Our strong distribution network ensures timely supply and support for projects ranging from compact bathrooms to luxury setups.
        </p>
        <p>
            We believe that each space has its needs; thus, we offer the best possible solutions tailored to perfectly meet design intent, layout, and functionality. Our team guarantees that every product supplied speaks to our commitment to quality, durability, and precision.
        </p>

        <a href="#" class="shower-discuss-link">
            Request a Quote
            <div class="shower-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="shower-row">
            <!-- LEFT IMAGE -->
            <div class="shower-left-img">
                <img src="shower-partition-img/image copy 2.png" alt="Shower Partition Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="shower-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Shower Partition Solutions</h2>
                <p>
                    Our shower partitions feature toughened safety glass for added strength and sleek frames of aluminum or stainless steel. All fittings are anti-corrosion with high-grade hinges for long-lasting performance.
                </p>
                <p>
                    Available with options for smooth sliding or hinged doors, our shower partitions are easy to clean and maintain. We offer clear, frosted, or tinted glass designs to match your bathroom aesthetics.
                </p>
                <p>
                    With water-tight sealing, minimalist hardware, and custom dimensions, our shower partitions provide the perfect blend of style, safety, and functionality for modern bathrooms.
                </p>
                <ul class="shower-ul">
                    <li>Toughened safety glass for added strength</li>
                    <li>Sleek frames of aluminum or stainless steel</li>
                    <li>Anti-corrosion fittings and high-grade hinges</li>
                    <li>Options for smooth sliding or hinged doors</li>
                    <li>Easy to clean and maintain surface</li>
                    <li>Available in clear, frosted, or tinted glass designs</li>
                    <li>Water-tight sealing and minimalist hardware</li>
                    <li>Custom dimensions and layout flexibility</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="shower-prod-section" data-aos="zoom-in-up">
        <h2 class="shower-prod-title">OUR SHOWER PARTITION PRODUCTS</h2>
        <div class="shower-prod-grid">
            <!-- CARD 1 -->
            <div class="shower-prod-card" onclick="showerProdOpenPopup('Frameless Glass Shower','Modern frameless glass shower partition for luxury bathrooms. Sleek and elegant design.','shower-partition-img/image copy 3.png')">
                <img class="shower-prod-card-img" src="shower-partition-img/image copy 3.png">
                <div class="shower-prod-card-info">
                    <h3>Frameless Glass Shower</h3>
                    <p>Modern frameless design</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="shower-prod-card" onclick="showerProdOpenPopup('Sliding Shower Partition','Space-saving sliding shower partition. Perfect for compact bathrooms.','shower-partition-img/image copy 4.png')">
                <img class="shower-prod-card-img" src="shower-partition-img/image copy 4.png">
                <div class="shower-prod-card-info">
                    <h3>Sliding Shower Partition</h3>
                    <p>Space-saving sliding design</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="shower-prod-card" onclick="showerProdOpenPopup('Frosted Glass Shower','Frosted glass shower partition for enhanced privacy. Elegant and functional.','shower-partition-img/image copy.png')">
                <img class="shower-prod-card-img" src="shower-partition-img/image copy.png">
                <div class="shower-prod-card-info">
                    <h3>Frosted Glass Shower</h3>
                    <p>Enhanced privacy design</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="shower-prod-popup" id="showerProdPopup" data-aos="zoom-in-up">
        <span class="shower-prod-close" onclick="showerProdClosePopup()">&times;</span>
        <div class="shower-prod-popup-box">
            <img id="showerProdPopupImg" class="shower-prod-popup-img">
            <div class="shower-prod-popup-content">
                <h2 id="showerProdPopupTitle"></h2>
                <p id="showerProdPopupDesc"></p>
                <a href="#" class="shower-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="shower-export-section" data-aos="zoom-in-up">
        <div class="shower-export-container">
            <div class="shower-export-top-title">EXPORT QUALITY</div>
            <h2 class="shower-export-heading">SHOWER PARTITION EXPORTER IN INDIA</h2>
            <p class="shower-export-desc">
                Being a leading exporter of Shower Partitions, we pride ourselves on our capability in supplying high-quality bathroom enclosure solutions to international markets. Our export-ready shower partitions are fabricated according to global standards related to safety, performance, and aesthetic values.
            </p>
            
            <a href="#" class="shower-export-link">
                International Enquiries
                <div class="shower-export-line"></div>
            </a>

            <div class="shower-export-card-wrap">
                <div class="shower-export-card">
                    <div class="shower-export-card-title">Global Standards</div>
                    <p>
                        We cater to clients across residential, commercial, and hospitality sectors, ensuring that each shipment is carefully packed, securely transported, and delivered on schedule.
                    </p>
                    <hr>
                    <div class="shower-export-card-subtitle">Our Export Advantages:</div>
                    <ul class="shower-export-list">
                        <li>Fabricated to global safety standards</li>
                        <li>High-performance materials</li>
                        <li>Superior aesthetic values</li>
                        <li>Careful packaging for international transit</li>
                    </ul>
                </div>

                <div class="shower-export-card">
                    <div class="shower-export-card-title">International Reach</div>
                    <p>
                        Our experience in international trade lets us promptly meet special custom requirements in both standard and bespoke designs that enrich modern lifestyles around the world.
                    </p>
                    <hr>
                    <div class="shower-export-card-subtitle">Custom Solutions:</div>
                    <ul class="shower-export-list">
                        <li>Special custom requirements met</li>
                        <li>Standard and bespoke designs</li>
                        <li>Prompt delivery schedules</li>
                        <li>Enriching modern lifestyles globally</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="shower-project-section" data-aos="zoom-in-up">
        <div class="shower-project-container">
            <div class="shower-project-left">
                <div class="shower-project-subtitle">LUXURY HOTEL INSTALLATION</div>
                <h2 class="shower-project-title">Five-Star Hotel Bathroom Renovation</h2>
                <p class="shower-project-text">
                    A luxury five-star hotel required complete bathroom renovations for their premium suites. Our frameless glass shower partitions were selected for their elegant appearance and superior functionality.
                </p>
                <p class="shower-project-text">
                    The installation featured custom-sized tempered glass partitions with anti-slip flooring and water-tight sealing systems. Each partition included minimalist hardware and easy-clean glass coatings for low maintenance.
                </p>
                <p class="shower-project-text">
                    This project transformed ordinary hotel bathrooms into luxurious spa-like retreats, enhancing guest experience and hotel ratings significantly.
                </p>
                <ul class="shower-project-list">
                    <li>Project Type: Luxury Hotel Bathroom Renovation</li>
                    <li>Partition Type: Frameless Glass Shower Partitions</li>
                    <li>Special Features: Anti-slip Flooring, Easy-clean Coating</li>
                    <li>Project Completion Time: 8 Weeks</li>
                </ul>
            </div>
            
            <div class="shower-project-right">
                <img src="shower-partition-img/image.png" alt="Hotel Shower Partition Project">
            </div>
        </div>
    </section>

    <section class="shower-faq-section" data-aos="zoom-in-up">
        <h2 class="shower-faq-title">SHOWER PARTITION FAQS</h2>
        <div class="shower-faq-container">
            <div class="shower-faq-item">
                <div class="shower-faq-question">
                    What thickness of glass is used in shower partitions?
                    <span class="shower-faq-icon">⌄</span>
                </div>
                <div class="shower-faq-answer">
                    We use 8mm to 12mm tempered safety glass for our shower partitions. For frameless designs, we recommend 10mm or 12mm glass for maximum stability and safety.
                </div>
            </div>

            <div class="shower-faq-item">
                <div class="shower-faq-question">
                    Are your shower partitions water-tight?
                    <span class="shower-faq-icon">⌄</span>
                </div>
                <div class="shower-faq-answer">
                    Yes, all our shower partitions feature water-tight sealing systems with silicone seals and proper drainage channels to prevent water leakage and keep bathroom floors dry.
                </div>
            </div>

            <div class="shower-faq-item">
                <div class="shower-faq-question">
                    Can shower partitions be customized for irregular spaces?
                    <span class="shower-faq-icon">⌄</span>
                </div>
                <div class="shower-faq-answer">
                    Absolutely. We offer complete customization for irregular bathroom layouts, including curved glass, corner installations, and special angles to fit any space perfectly.
                </div>
            </div>

            <div class="shower-faq-item">
                <div class="shower-faq-question">
                    How do I clean and maintain shower partitions?
                    <span class="shower-faq-icon">⌄</span>
                </div>
                <div class="shower-faq-answer">
                    Use mild soap solution and soft cloth for regular cleaning. Avoid abrasive cleaners. For hard water stains, use vinegar solution. Regular maintenance ensures long-lasting clarity.
                </div>
            </div>
        </div>
        <button class="shower-faq-btn">View All FAQs</button>
    </section>

    <script>
        function showerProdOpenPopup(title, desc, img){
            document.getElementById("showerProdPopupTitle").innerText = title;
            document.getElementById("showerProdPopupDesc").innerText = desc;
            document.getElementById("showerProdPopupImg").src = img;
            document.getElementById("showerProdPopup").classList.add("active");
        }

        function showerProdClosePopup(){
            document.getElementById("showerProdPopup").classList.remove("active");
        }

        const showerFaqItems = document.querySelectorAll(".shower-faq-item");
        showerFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                showerFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });
    </script>
<?php include "footer.php"?>