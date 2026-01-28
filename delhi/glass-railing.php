<?php $page_title = "Glass Railing Manufacturer in India";
$description = "We are a leading Glass Railing manufacturer in India, offering premium quality, durable, and stylish glass railings for residential, commercial, and industrial spaces. Trusted supplier and exporter of top-quality glass railing solutions.";
$keyword = "Glass Railing manufacturer in India, Glass Railing supplier in India, Glass Railing exporter in India,Best Glass Railing manufacturer in India,Top Glass Railing manufacturer in India,Best Glass Railing supplier in India,Top Glass Railing supplier in India,Best Glass Railing exporter in India,Top Glass Railing exporter in India,Glass Railing manufacturer,Glass Railing supplier , Glass Railing exporter,Top Glass Railing exporter, Glass Balustrade manufacturer, Stylish Glass Railings, Durable Glass Railings";
include('header.php')?>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #121212; /* Main Dark Background (Off-Black) */
            --primary-light: #1E1E1E; /* Lighter Dark (For Cards/Sections) */
            --secondary-color: #C6A98C; /* Elegant Beige/Tan Accent */
            --text-color: #E0E0E0; /* Main Body Text (Soft Off-white) */
            --text-heading: #FFFFFF; /* Headings (Pure White) */
            --light-color: #FFFFFF; /* Pure White */
            --bg-light: #1E1E1E; /* Replacing the light bg variable */
            --border-color: #333333; /* Subtle Borders for separation */
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

        /* HERO SECTION (full image) - UNIQUE CLASS */
        .glass-railing-hero-section {
            position: relative;
            width: 100%;
            height: 760px;
            overflow: hidden;
            margin-top: -90px;
        }

        .glass-railing-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .glass-railing-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .glass-railing-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .glass-railing-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* WHITE CONTENT BOX - UNIQUE CLASS */
        .glass-railing-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -81px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .glass-railing-content-wrapper {
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .glass-railing-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .glass-railing-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .glass-railing-hero-content h1 {
                font-size: 32px;
            }

            .glass-railing-content-wrapper {
                grid-template-columns: 1fr;
            }
        }


        /* BENEFITS SECTION - UNIQUE CLASS */
        .glass-railing-benefits-wrapper {
            /* max-width: 1400px; */
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING - UNIQUE CLASS */
        .glass-railing-card {
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

        .glass-railing-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .glass-railing-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL - UNIQUE CLASS */
        .glass-railing-tag {
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

        /* ICON - UNIQUE CLASS */
        .glass-railing-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE - UNIQUE CLASS */
        .glass-railing-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .glass-railing-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN - UNIQUE CLASS */
        .glass-railing-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE - UNIQUE CLASS */
        .glass-railing-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .glass-railing-benefits-wrapper {
                flex-direction: column;
            }

            .glass-railing-plus,
            .glass-railing-dotted-line {
                display: none;
            }
        }


        /* MAIN SECTION - UNIQUE CLASS */
        .glass-railing-main-section {
            /* max-width: 1400px; */
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE - UNIQUE CLASS */
        .glass-railing-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH - UNIQUE CLASS */
        .glass-railing-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK - UNIQUE CLASS */
        .glass-railing-discuss-link {
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

        .glass-railing-discuss-link:hover {
            color: var(--text-heading);
        }

        .glass-railing-discuss-link .glass-railing-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW - UNIQUE CLASS */
        .glass-railing-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE - UNIQUE CLASS */
        .glass-railing-left-img img {
            width: 730px;
            height: 620px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT - UNIQUE CLASS */
        .glass-railing-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .glass-railing-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .glass-railing-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .glass-railing-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS - UNIQUE CLASS */
        .glass-railing-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .glass-railing-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .glass-railing-row {
                flex-direction: column;
            }

            .glass-railing-left-img img {
                width: 100%;
                height: auto;
            }

            .glass-railing-main-section h1 {
                font-size: 30px;
            }

            .glass-railing-main-section {
                padding: 50px 20px;
            }
        }


    /* UNIQUE CONTAINER - RENAMED */
    .glass-railing-prod-section{
        /* max-width: 1400px; */
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .glass-railing-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* UNIQUE GRID - RENAMED */
    .glass-railing-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* UNIQUE CARD - RENAMED */
    .glass-railing-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .glass-railing-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .glass-railing-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .glass-railing-prod-card-info{
        padding:15px;
    }

    .glass-railing-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .glass-railing-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* UNIQUE POPUP - RENAMED */
    .glass-railing-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .glass-railing-prod-popup.active{
        display:flex;
    }

    .glass-railing-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:glassRailingProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes glassRailingProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .glass-railing-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .glass-railing-prod-popup-content{
        padding:20px;
    }

    .glass-railing-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .glass-railing-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .glass-railing-prod-btn{
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

    .glass-railing-prod-btn:hover {
        background-color: #b5987a;
    }

    .glass-railing-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }


    
    /* SECTION WRAPPER - RENAMED */
    .glass-railing-fund-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .glass-railing-fund-container{
        /* max-width: 1400px; */
        padding: 0px 50px;
        margin:auto;
    }

    .glass-railing-fund-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .glass-railing-fund-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .glass-railing-fund-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .glass-railing-fund-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .glass-railing-fund-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP - RENAMED */
    .glass-railing-fund-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD - RENAMED */
    .glass-railing-fund-card{
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

    .glass-railing-fund-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .glass-railing-fund-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .glass-railing-fund-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .glass-railing-fund-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .glass-railing-fund-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST - RENAMED */
    .glass-railing-fund-list{
        list-style:none;
        padding-left:0;
    }

    .glass-railing-fund-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .glass-railing-fund-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .glass-railing-fund-card-wrap{
            flex-direction:column;
        }
        .glass-railing-fund-card{
            min-width:100%;
        }
    }


       /* MAIN WRAPPER - RENAMED */
    .glass-railing-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .glass-railing-project-container{
        max-width: 1550px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT - RENAMED */
    .glass-railing-project-left{
        flex:1;
    }

    .glass-railing-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .glass-railing-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .glass-railing-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS - RENAMED */
    .glass-railing-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .glass-railing-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .glass-railing-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE - RENAMED */
    .glass-railing-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .glass-railing-project-container{
            flex-direction:column;
        }

        .glass-railing-project-right img{
            width:100%;
            height:auto;
        }

        
    }



     /* ===============================
   JANSON GLASS RAILING (EXACT)
================================ */

#jansonGlassRailingWrapper {
    padding: 80px 5%;
    background: var(--primary-color);
    font-family: var(--font-primary);
}

.janson-glass-railing-inner {
    max-width: 1450px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1.35fr 1fr 80px;
    gap: 40px;
    align-items: center;
}

/* COMMON BOX */
.janson-glass-railing-box {
    text-align: center;
}

/* IMAGE HOLDER */
.janson-img-holder {
    overflow: hidden;
    border-radius: var(--border-radius-main);
    box-shadow: var(--shadow-medium);
}

.janson-img-holder img {
    width: 100%;
    height: 460px;
    object-fit: cover;
    transition: transform 0.6s ease;
}

/* BIG CENTER IMAGE */
.big-img img {
    height: 540px;
}

/* HOVER ZOOM */
.janson-img-holder:hover img {
    transform: scale(1.12);
}

/* LABEL */
.janson-label {
    margin-top: 18px;
    font-size: 1.1rem;
    letter-spacing: 1px;
    color: var(--text-heading);
}

/* TOP LOGO */
.janson-top-logo {
    margin-bottom: 18px;
    font-weight: 600;
    color: var(--light-color);
}

.janson-logo-je {
    font-size: 1.6rem;
    margin-right: 6px;
}

.janson-logo-text {
    color: var(--secondary-color);
}

/* BNI BADGE */
.janson-bni-badge {
    margin-top: 14px;
    display: inline-block;
    padding: 6px 18px;
    border-radius: 30px;
    background: #c6a98c;
    color: #fff;
    font-size: 0.8rem;
    letter-spacing: 1px;
}

/* RIGHT VERTICAL STRIP */
.janson-vertical-strip {
    color: #fff;
    font-weight: 700;
    writing-mode: vertical-rl;
    transform: rotate(180deg);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
    border-radius: 6px;
    letter-spacing: 20px;
}

/* RESPONSIVE */
@media (max-width: 1100px) {
    .janson-glass-railing-inner {
        grid-template-columns: 1fr;
    }

    .janson-vertical-strip {
        writing-mode: horizontal-tb;
        transform: none;
        margin-top: 20px;
    }
}


    
    /* SECTION BACKGROUND - RENAMED */
    .glass-railing-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE - RENAMED */
    .glass-railing-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER - RENAMED */
    .glass-railing-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM - RENAMED */
    .glass-railing-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .glass-railing-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .glass-railing-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON - RENAMED */
    .glass-railing-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT - RENAMED */
    .glass-railing-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .glass-railing-faq-item.active .glass-railing-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE - RENAMED */
    .glass-railing-faq-item.active .glass-railing-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON - RENAMED */
    .glass-railing-faq-btn{
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

    .glass-railing-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    @media (min-width:300px) and (max-width:700px){
    .glass-railing-fund-container{
        padding: 0px !important;
    }
}
.glass-railing-hero-content h5{
    color: white;
    font-weight : 900;
    text-shadow: 0 2px 6px rgba(0,0,0,0.8);
    margin-top: -60px;
}


/* ===============================
   JANSON FEATURE SECTION
================================ */

#jansonFeatureSection {
    padding: 90px 6%;
    background: var(--primary-color);
    font-family: var(--font-primary);
}

.janson-feature-wrapper {
    max-width: 1450px;
    margin: auto;
    display: grid;
    grid-template-columns: 1.2fr 80px 1fr;
    gap: 40px;
    position: relative;
}

/* IMAGE */
.janson-feature-image {
    position: relative;
    overflow: hidden;
    border-radius: 6px;
}

.janson-feature-image img {
    width: 100%;
    height: 620px;
    object-fit: cover;
    transition: transform 0.7s ease;
}

.janson-feature-image:hover img {
    transform: scale(1.12);
}

/* YELLOW CORNERS */
.corner {
    position: absolute;
    width: 40px;
    height: 40px;
    border: 4px solid #f5b400;
}

.tl { top: 15px; left: 15px; border-right: none; border-bottom: none; }
.tr { top: 15px; right: 15px; border-left: none; border-bottom: none; }
.bl { bottom: 15px; left: 15px; border-right: none; border-top: none; }
.br { bottom: 15px; right: 15px; border-left: none; border-top: none; }

/* RED CURVE */
.janson-feature-curve {
    border-left: 4px solid #c6a98c;
    border-radius: 50%;
}

/* CONTENT */
.janson-feature-content {
    display: flex;
    flex-direction: column;
    gap: 28px;
}

.janson-feature-item {
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

.janson-feature-icon {
    width: 48px;
    height: 48px;
    background: #000;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.janson-feature-item h4 {
    margin: 0;
    color: var(--text-heading);
    font-size: 1.15rem;
}

.janson-feature-item h4 span {
    color: var(--secondary-color);
    margin-right: 10px;
}

.janson-feature-item p {
    margin-top: 6px;
    color: var(--text-color);
    font-size: 0.95rem;
    line-height: 1.6;
}

/* BNI */
.janson-feature-bni {
    position: absolute;
    right: 0;
    bottom: -30px;
    background: #c6a98c;
    color: #fff;
    padding: 18px 22px;
    border-radius: 50%;
    font-size: 0.8rem;
    text-align: center;
    font-weight: 600;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .janson-feature-wrapper {
        grid-template-columns: 1fr;
    }

    .janson-feature-curve {
        display: none;
    }

    .janson-feature-bni {
        position: static;
        margin-top: 30px;
    }
}


.glass-railing-product-slider{
display:flex;
gap:40px;
padding:60px;
align-items:center;
}

/* LEFT */
.glass-railing-product-images{
position:relative;
flex:1;
background:linear-gradient(145deg,#0d0d0d,#1c1c1c);
border-radius:12px;
padding:40px;
text-align:center;
}

.glass-railing-stock{
position:absolute;
top:20px;
left:20px;
opacity:0.3;
letter-spacing:2px;
}

.glass-railing-main-img{
width:80%;
transition:0.3s;
}

.glass-railing-thumbs{
display:flex;
justify-content:center;
gap:15px;
margin-top:20px;
flex-wrap:wrap;
}

.glass-railing-thumbs img{
width:60px;
cursor:pointer;
opacity:0.6;
border-radius:8px;
}

.glass-railing-thumbs img.active,
.glass-railing-thumbs img:hover{
opacity:1;
transform:scale(1.1);
}

/* RIGHT */
.glass-railing-product-info{
flex:1;
background:var(--primary-light);
padding:35px;
border-radius:12px;
box-shadow:var(--shadow-medium);
}

.glass-railing-product-title{
font-size:26px;
color:var(--text-heading);
}

.glass-railing-category{
font-size:13px;
opacity:0.7;
}

.glass-railing-price{
font-size:28px;
margin:12px 0;
color:var(--secondary-color);
}

.glass-railing-rating{
color:gold;
margin-bottom:12px;
}

.glass-railing-desc{
font-size:14px;
line-height:1.6;
margin-bottom:18px;
color:var(--text-color);
}

.glass-railing-sizes span{
display:inline-block;
border:1px solid var(--border-color);
padding:6px 10px;
margin:6px 6px 0 0;
cursor:pointer;
border-radius:6px;
}

.glass-railing-sizes span.active{
background:var(--secondary-color);
color:#000;
}

.glass-railing-colors span{
display:inline-block;
width:18px;
height:18px;
border-radius:50%;
margin:8px 8px 0 0;
border:1px solid #555;
}

.glass-railing-cart-btn{
margin-top:22px;
width:100%;
padding:12px;
background:var(--secondary-color);
border:none;
font-weight:600;
cursor:pointer;
border-radius:var(--border-radius-main);
}

@media(max-width:900px){
.glass-railing-product-slider{
flex-direction:column;
}
}


    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="glass-railing-hero-section"  data-aos="zoom-in">
        <img src="../slim-partition/WhatsApp Image 2025-12-24 at 6.30.17 PM (1).jpeg" alt="Glass Railing Background">
        <div class="glass-railing-hero-content">
            <h5>GLASS RAILING SYSTEMS</h5>
            <h1>ELEGANT SAFETY RAILINGS FOR MODERN ARCHITECTURE</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="glass-railing-content-box"  data-aos="zoom-in">
        <div class="glass-railing-content-wrapper">
            <div>
                <h2 class="glass-railing-content-title">GLASS RAILING MANUFACTURER IN INDIA</h2>
            </div>
            <div class="glass-railing-content-text">
                <p>
                    As one of the pioneering glass railing manufacturers, we pride ourselves on the design and production of premium-quality railing systems that fuse safety, style, and strength in perfect harmony. Our glass railings are precisely fabricated to further modern architectural aesthetics with reliable support and clear, unobstructed views.
                </p>
                <p>
                    Engineered for versatility and elegance, they are ideal for balconies, staircases, terraces, decks, and commercial interiors. Each railing system is manufactured with toughened or laminated safety glass combined with durable stainless-steel or aluminum fittings. Our state-of-the-art production facilities ensure that every product meets international standards for quality and safety.
                </p>
                <p>
                    Be it a frameless look or a minimal framed design, our glass railings provide sophistication and structural integrity to any space.
                </p>
            </div>
        </div>
    </section>

    <div class="glass-railing-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="glass-railing-card"  data-aos="zoom-in">
            <div class="glass-railing-tag">Benefits</div>
            <img class="glass-railing-icon" src="https://cdn-icons-png.flaticon.com/512/992/992651.png">
            <div class="glass-railing-card-title">ELEGANT DESIGN</div>
            <p>
                Sleek, transparent, and luxurious in appearance, it gives a modern space its desired look. Durable & Safe: Made of tempered or laminated safety glass with strong metal fittings.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="glass-railing-plus">+</div>

        <!-- CARD 2 -->
        <div class="glass-railing-card" data-aos="zoom-in">
            <div class="glass-railing-tag">Benefits</div>
            <img class="glass-railing-icon" src="https://cdn-icons-png.flaticon.com/512/3430/3430447.png">
            <div class="glass-railing-card-title">VIEW & MAINTENANCE</div>
            <p>
                Unobstructed View: It maximizes openness with safety and stability maintained. Low Maintenance: Resistant to corrosion, rust, and weather damage, ensuring long-term clarity and shine.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="glass-railing-dotted-line"  data-aos="zoom-in"></div>

        <!-- CARD 3 -->
        <div class="glass-railing-card glass-railing-right-card" data-aos="zoom-in">
            <div class="glass-railing-tag">Applications</div>
            <img class="glass-railing-icon" src="https://cdn-icons-png.flaticon.com/512/456/456177.png">
            <div class="glass-railing-card-title">VERSATILE APPLICATIONS</div>
            <p>
                Diversified Applications: Applied both in residential, commercial, and architectural projects. Customization Options: Come in different glass thicknesses, finishes, and mounting styles.
            </p>
        </div>
    </div>

<section class="janson-glass-railing-wrapper" id="jansonGlassRailingWrapper">
    <div class="janson-glass-railing-inner">

        <!-- LEFT IMAGE -->
        <div class="janson-glass-railing-box janson-left-box">
            <div class="janson-img-holder">
                <img src="../glass-realing/designer-glass-railing-500x500.webp" alt="Frameless Glass Railing">
            </div>
            <p class="janson-label">Designer-Glass-Railing</p>
        </div>

        <!-- CENTER IMAGE -->
        <div class="janson-glass-railing-box janson-center-box">

            <div class="janson-top-logo">
                <span class="janson-logo-je">JE</span>
                <span class="janson-logo-text">JANSON EXPORTS</span>
            </div>

            <div class="janson-img-holder big-img">
                <img src="../glass-realing/Glass Deck Railing panel post.jpg" alt="Staircase Glass Railing">
            </div>
            <p class="janson-label">Glass Deck Railing</p>

            <div class="janson-bni-badge">BNI MEMBER</div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="janson-glass-railing-box janson-right-box">
            <div class="janson-img-holder">
                <img src="../glass-realing/Glass-Balcony-Railing-Systems-07_2023-06-20-215800_baxe.webp" alt="Balcony Glass Railing">
            </div>
            <p class="janson-label">Glass-Balcony-Railing</p>
        </div>

        <!-- RIGHT VERTICAL BAR -->
        <div class="janson-vertical-strip">
            <span>GLASS RAILING</span>
            <span>SUBCATEGORIES</span>
        </div>

    </div>
</section>




    

    <section class="glass-railing-main-section"  data-aos="zoom-in">
        <h1>GLASS RAILING SUPPLIER IN INDIA</h1>
        <p>
            As a reputed Glass Railing supplier, we stake our reputation on superior railing solutions that address the aesthetic and structural demands of modern construction. Our broad product range caters to architects, builders, and designers looking for high-performance, visually stunning railing systems.
        </p>
        <p>
            We ensure this through a strong supply chain for timely delivery and quality, irrespective of the size of the project. From high-end villas and corporate buildings to shopping malls and hotels, our glass railings are trusted for their flawless finish, durability, and design flexibility. Each railing system supplied is carefully inspected to guarantee performance and safety excellence.
        </p>

        <a href="contact.php" class="glass-railing-discuss-link">
            Request a Quote
            <div class="glass-railing-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="glass-railing-row"  data-aos="zoom-in">
            <!-- LEFT IMAGE -->
            <div class="glass-railing-left-img">
                <img src="../glass-realing/image30.webp" alt="Glass Railing Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="glass-railing-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Glass Railing Solutions</h2>
                <p>
                    Our glass railings feature premium toughened or laminated glass panels with support systems made from high-grade SS 304/316 or aluminum. Available options include frameless, semi-framed, or post-mounted designs to suit various architectural requirements.
                </p>
                <p>
                    Designed with scratch, corrosion, and weather-resistant finishes, our railings are compatible with both indoor and outdoor applications. They feature elegant edge polish and smooth surface finishes, available in clear, frosted, tinted, or decorative glass variants.
                </p>
                <p>
                    Our expert team works closely with clients to provide railing systems that combine safety, aesthetics, and ease of installation for modern architectural projects.
                </p>
                <ul class="glass-railing-ul">
                    <li>Premium toughened or laminated glass panels</li>
                    <li>Support systems: high-grade SS 304/316 or aluminum</li>
                    <li>Available options are frameless, semi-framed, or post-mounted</li>
                    <li>Scratch, corrosion, and weather-resistant finish</li>
                    <li>Compatible with indoor and outdoor applications</li>
                    <li>Elegant edge polish and a smooth surface finish</li>
                    <li>Available in clear, frosted, tinted, or decorative glass variants</li>
                    <li>Engineered for easy installation and low maintenance</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="glass-railing-prod-section">
        <h2 class="glass-railing-prod-title">OUR GLASS RAILING PRODUCTS</h2>
        <div class="glass-railing-prod-grid">
            <!-- CARD 1 -->
            <div class="glass-railing-prod-card" onclick="glassRailingProdOpenPopup('Linear Glass Railings','Sleek and modern railing system that offers maximum safety with a clean, uninterrupted glass view.','glass-realing/Linear Glass Railings.jpg')" data-aos="zoom-in"> 
                <img class="glass-railing-prod-card-img" src="../glass-realing/Linear Glass Railings.jpg">
                <div class="glass-railing-prod-card-info">
                    <h3>Linear Glass Railings</h3>
                    <p>Modern Linear Glass Railings</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="glass-railing-prod-card" onclick="glassRailingProdOpenPopup('Modern Glass Railing','– A stylish and contemporary railing solution that enhances safety while delivering a clean, elegant, and open look.','glass-realing/modern-glass railing.jpg')" data-aos="zoom-in">
                <img class="glass-railing-prod-card-img" src="../glass-realing/modern-glass railing.jpg">
                <div class="glass-railing-prod-card-info">
                    <h3>Modern Glass Railing</h3>
                    <p> Safety Modern Glass Railing</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="glass-railing-prod-card" onclick="glassRailingProdOpenPopup('Stainless-Steel-Glass-Railing','Safety glass railing for balconies and terraces. Weather-resistant construction.','glass-realing/stainless-steel-glass-railing-1.avif')" data-aos="zoom-in">
                <img class="glass-railing-prod-card-img" src="../glass-realing/stainless-steel-glass-railing-1.avif">
                <div class="glass-railing-prod-card-info">
                    <h3>Stainless-Steel-Glass-Railing</h3>
                    <p>Weather-resistant balcony railing</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="glass-railing-prod-popup" id="glassRailingProdPopup">
        <span class="glass-railing-prod-close" onclick="glassRailingProdClosePopup()">&times;</span>
        <div class="glass-railing-prod-popup-box">
            <img id="glassRailingProdPopupImg" class="glass-railing-prod-popup-img">
            <div class="glass-railing-prod-popup-content">
                <h2 id="glassRailingProdPopupTitle"></h2>
                <p id="glassRailingProdPopupDesc"></p>
                <a href="contact.php" class="glass-railing-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="glass-railing-fund-section" data-aos="zoom-in">
        <div class="glass-railing-fund-container">
            <div class="glass-railing-fund-top-title">EXPORT QUALITY</div>
            <h2 class="glass-railing-fund-heading">GLASS RAILING EXPORTER IN INDIA</h2>
            <p class="glass-railing-fund-desc">
                As a well-known exporter of Glass Railing, we are committed to providing the best railing systems with safety and sophistication in every design. Our export-grade glass railings are manufactured according to international standards, offering unparalleled strength, endurance, and aesthetic appearance.
            </p>
            
            <a href="contact.php" class="glass-railing-fund-link">
                International Enquiries
                <div class="glass-railing-fund-line"></div>
            </a>

            <div class="glass-railing-fund-card-wrap">
                <div class="glass-railing-fund-card">
                    <div class="glass-railing-fund-card-title">Global Standards</div>
                    <p>
                        We work with overseas architects, developers, and distributors to deliver tailor-made solutions for different types of residential and commercial projects.
                    </p>
                    <hr>
                    <div class="glass-railing-fund-card-subtitle">Our Export Advantages:</div>
                    <ul class="glass-railing-fund-list">
                        <li>Manufactured according to international standards</li>
                        <li>Unparalleled strength, endurance, and aesthetics</li>
                        <li>Tailor-made solutions for global projects</li>
                        <li>Secure packaging for international shipment</li>
                    </ul>
                </div>

                <div class="glass-railing-fund-card">
                    <div class="glass-railing-fund-card-title">International Markets</div>
                    <p>
                        Each export consignment is securely packed and fully tested prior to shipment to ensure product integrity and ease of installation at the delivery end.
                    </p>
                    <hr>
                    <div class="glass-railing-fund-card-subtitle">Global Reach:</div>
                    <ul class="glass-railing-fund-list">
                        <li>Overseas architects and developers</li>
                        <li>Global distributors and contractors</li>
                        <li>Residential and commercial projects</li>
                        <li>Architectural excellence worldwide</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="glass-railing-product-slider" data-aos="zoom-in">

  
  <div class="glass-railing-product-images">
    <span class="glass-railing-stock">IN STOCK</span>

    <img src="../slim-partition/8.jpg" class="glass-railing-main-img" id="glassRailingMainImg">

    <div class="glass-railing-thumbs">
      <img src="../slim-partition/8.jpg" class="active" data-index="0" onclick="changeGlassRailingProduct(this)">
      <img src="../slim-partition/9.jpg" data-index="1" onclick="changeGlassRailingProduct(this)">
      <img src="../slim-partition/10.jpg" data-index="2" onclick="changeGlassRailingProduct(this)">
      <img src="../slim-partition/11.jpg" data-index="3" onclick="changeGlassRailingProduct(this)">
      <img src="../slim-partition/12.jpg" data-index="4" onclick="changeGlassRailingProduct(this)">
    </div>
  </div>

  
  <div class="glass-railing-product-info">

    <h3 class="glass-railing-product-title">iLinear Glass Railings</h3>
    <span class="glass-railing-category" id="glassRailingCategory">Architectural Safety System</span>

    <div class="glass-railing-price" id="glassRailingPrice">Custom Quote</div>

    <div class="glass-railing-rating" id="glassRailingRating">★★★★★ (4.9)</div>

    <p class="glass-railing-desc" id="glassRailingDesc">
      Premium frameless glass railing system for modern architecture. Features toughened safety glass with minimal hardware for maximum visibility.
    </p>

    <div class="glass-railing-sizes" id="glassRailingSizes">
      <strong>Glass Thickness:</strong><br>
      <span>10mm</span><span>12mm</span><span>15mm</span>
      <span class="active">Custom</span>
    </div>

    <div class="glass-railing-colors" id="glassRailingColors">
      <strong>Finish:</strong><br>
      <span style="background:#c6a98c"></span>
      <span style="background:#ffffff"></span>
      <span style="background:#1e90ff"></span>
    </div>

    <button class="glass-railing-cart-btn">+ REQUEST QUOTE</button>

  </div>

</section> -->

    <section class="janson-feature-section" id="jansonFeatureSection">
    <div class="janson-feature-wrapper">

        <!-- LEFT IMAGE -->
        <div class="janson-feature-image">
            <img src="../glass-realing/tempered-glass-deck-railing-systems-with-metal-frame-lakefront.jpg" alt="Glass Railing Installation">
            <span class="corner tl"></span>
            <span class="corner tr"></span>
            <span class="corner bl"></span>
            <span class="corner br"></span>
        </div>

        <!-- CURVE LINE -->
        <div class="janson-feature-curve"></div>

        <!-- RIGHT CONTENT -->
        <div class="janson-feature-content">

            <div class="janson-feature-item">
                <div class="janson-feature-icon">👤</div>
                <div>
                    <h4><span>01</span> Unobstructed Views</h4>
                    <p>Maximizes visibility while providing safety, perfect for scenic locations and modern architectural designs.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">✔</div>
                <div>
                    <h4><span>02</span> Safety First</h4>
                    <p>Manufactured with toughened or laminated safety glass that meets international safety standards for structural integrity.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⚙</div>
                <div>
                    <h4><span>03</span> Weather Resistance</h4>
                    <p>Special coatings and materials provide excellent protection against corrosion, UV rays, and harsh weather conditions.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⬛</div>
                <div>
                    <h4><span>04</span> Versatile Designs</h4>
                    <p>Available in frameless, semi-framed, and post-mounted configurations to suit various architectural styles and requirements.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">🏆</div>
                <div>
                    <h4><span>05</span> Easy Maintenance</h4>
                    <p>Designed for minimal upkeep with scratch-resistant surfaces and easy-to-clean glass that retains clarity for years.</p>
                </div>
            </div>

        </div>

        <!-- BNI BADGE -->
        <div class="janson-feature-bni">
            <!-- PROUD <br><strong>BNI</strong><br> MEMBER -->
             <!-- <img src="../slim-partition/img654.jpg" alt=""> -->
        </div>

    </div>
</section>




    <section class="glass-railing-project-section" data-aos="zoom-in">
        <div class="glass-railing-project-container">
            <div class="glass-railing-project-left">
                <div class="glass-railing-project-subtitle">LUXURY RESIDENCE PROJECT</div>
                <h2 class="glass-railing-project-title">Seaside Villa Installation</h2>
                <p class="glass-railing-project-text">
                    A luxury seaside villa required elegant yet durable railing systems that could withstand coastal conditions while providing unobstructed ocean views. Our frameless glass railings provided the perfect solution.
                </p>
                <p class="glass-railing-project-text">
                    The installation featured 12mm toughened glass panels with stainless steel 316 hardware for maximum corrosion resistance in salty air environments. Special attention was given to weatherproofing and UV resistance to maintain clarity and performance.
                </p>
                <p class="glass-railing-project-text">
                    This project successfully equipped 200+ meters of balcony and terrace space with premium glass railings that have withstood 3 years of coastal exposure with zero maintenance issues and continue to provide spectacular views.
                </p>
                <ul class="glass-railing-project-list">
                    <li>Project Type: Luxury Seaside Villa</li>
                    <li>Product Type: Frameless Glass Railings</li>
                    <li>Special Features: Stainless Steel 316, UV Resistant</li>
                    <li>Project Completion Time: 5 Weeks</li>
                </ul>
            </div>
            
            <div class="glass-railing-project-right">
                <img src="../glass-realing/Transparent Glass- railing.jpg" alt="Seaside Villa Railing Project">
            </div>
        </div>
    </section>

    <section class="glass-railing-faq-section" data-aos="zoom-in">
        <h2 class="glass-railing-faq-title">GLASS RAILING FAQS</h2>
        <div class="glass-railing-faq-container">
            <div class="glass-railing-faq-item">
                <div class="glass-railing-faq-question">
                    What thickness of glass is recommended for railings?
                    <span class="glass-railing-faq-icon">⌄</span>
                </div>
                <div class="glass-railing-faq-answer">
                    For residential balconies and indoor railings, 10-12mm toughened glass is standard. For commercial applications, heavy traffic areas, or taller installations, 12-15mm glass is recommended. For frameless designs or areas requiring higher impact resistance, laminated glass (6.38mm or 8.38mm) provides additional safety as it holds together if broken.
                </div>
            </div>

            <div class="glass-railing-faq-item">
                <div class="glass-railing-faq-question">
                    How are glass railings secured and installed?
                    <span class="glass-railing-faq-icon">⌄</span>
                </div>  
                <div class="glass-railing-faq-answer">
                    Three main methods: 1) Clamp systems (glass is held between clamps), 2) Channel systems (glass fits into aluminum channels), and 3) Standoff systems (glass is secured with point-fixed hardware). Installation requires precise measurements, proper anchoring, and professional expertise to ensure structural integrity and safety compliance.
                </div>
            </div>

            <div class="glass-railing-faq-item">
                <div class="glass-railing-faq-question">
                    Can glass railings withstand strong winds and weather?
                    <span class="glass-railing-faq-icon">⌄</span>
                </div>
                <div class="glass-railing-faq-answer">
                    Yes, properly installed glass railings can withstand significant wind loads. For coastal or high-wind areas, we recommend thicker glass (12-15mm), closer post spacing, and specialized hardware. Our systems are engineered to meet local building codes for wind resistance and can be customized for specific environmental conditions.
                </div>
            </div>

            <div class="glass-railing-faq-item">
                <div class="glass-railing-faq-question">
                    What maintenance do glass railings require?
                    <span class="glass-railing-faq-icon">⌄</span>
                </div>
                <div class="glass-railing-faq-answer">
                    Regular cleaning with mild glass cleaner and soft cloth. For outdoor railings, periodic cleaning of hardware with mild detergent. Check hardware tightness annually. Avoid abrasive cleaners. For coastal areas, more frequent cleaning may be needed to remove salt deposits. Our railings are designed for minimal maintenance with corrosion-resistant materials.
                </div>
            </div>
        </div>
        <a href="contact.php" class="telescopic-channel-prod-btn">View All FAQs</a>
    </section>


    



    <script>
        function glassRailingProdOpenPopup(title, desc, img){
            document.getElementById("glassRailingProdPopupTitle").innerText = title;
            document.getElementById("glassRailingProdPopupDesc").innerText = desc;
            document.getElementById("glassRailingProdPopupImg").src = img;
            document.getElementById("glassRailingProdPopup").classList.add("active");
        }

        function glassRailingProdClosePopup(){
            document.getElementById("glassRailingProdPopup").classList.remove("active");
        }

        const glassRailingFaqItems = document.querySelectorAll(".glass-railing-faq-item");
        glassRailingFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                glassRailingFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });

 
const glassRailingProducts = [
  {
    img:"slim-partition/8.jpg",
    title:"Frameless Glass Railing",
    category:"Architectural Safety System",
    price:"Custom Quote",
    rating:"★★★★★ (4.9)",
    desc:"Premium frameless glass railing system for modern architecture. Features toughened safety glass with minimal hardware for maximum visibility.",
    sizes:["10mm","12mm","15mm","Custom"],
    activeSize:"Custom",
    colors:["#c6a98c","#ffffff","#1e90ff"]
  },
  {
    img:"slim-partition/9.jpg",
    title:"Staircase Glass Railing",
    category:"Safety & Design System",
    price:"Custom Quote",
    rating:"★★★★☆ (4.7)",
    desc:"Elegant glass railing for staircases combining safety with modern design. Features secure mounting and elegant finish.",
    sizes:["10mm","12mm","Custom"],
    activeSize:"12mm",
    colors:["#c6a98c","#1e90ff"]
  },
  {
    img:"slim-partition/10.jpg",
    title:"Balcony Glass Railing",
    category:"Outdoor Safety System",
    price:"Custom Quote",
    rating:"★★★★★ (5.0)",
    desc:"Weather-resistant glass railing for balconies and terraces. Features corrosion-resistant hardware and safety glass.",
    sizes:["12mm","15mm","Custom"],
    activeSize:"15mm",
    colors:["#c6a98c","#ffffff"]
  },
  {
    img:"slim-partition/11.jpg",
    title:"Laminated Safety Railing",
    category:"Enhanced Safety System",
    price:"Custom Quote",
    rating:"★★★★☆ (4.8)",
    desc:"Laminated safety glass railing for maximum protection. Glass holds together if broken for enhanced safety.",
    sizes:["10mm","12mm","Custom"],
    activeSize:"12mm",
    colors:["#000000","#ffcc00"]
  },
  {
    img:"slim-partition/12.jpg",
    title:"Commercial Glass Railing",
    category:"Heavy Duty System",
    price:"Custom Quote",
    rating:"★★★★☆ (4.6)",
    desc:"Industrial-grade glass railing for commercial applications. Features enhanced load capacity and durability.",
    sizes:["12mm","15mm","Custom"],
    activeSize:"Custom",
    colors:["#c6a98c","#1e90ff"]
  }
];

function changeGlassRailingProduct(el){
  const p = glassRailingProducts[el.dataset.index];

  document.getElementById("glassRailingMainImg").src = p.img;
  document.getElementById("glassRailingTitle").innerText = p.title;
  document.getElementById("glassRailingCategory").innerText = p.category;
  document.getElementById("glassRailingPrice").innerText = p.price;
  document.getElementById("glassRailingRating").innerText = p.rating;
  document.getElementById("glassRailingDesc").innerText = p.desc;

  const sizesBox = document.getElementById("glassRailingSizes");
  sizesBox.innerHTML = "<strong>Glass Thickness:</strong><br>";
  p.sizes.forEach(s=>{
    const span = document.createElement("span");
    span.innerText = s;
    if(s === p.activeSize) span.classList.add("active");
    sizesBox.appendChild(span);
  });

  const colorBox = document.getElementById("glassRailingColors");
  colorBox.innerHTML = "<strong>Finish:</strong><br>";
  p.colors.forEach(c=>{
    const span = document.createElement("span");
    span.style.background = c;
    colorBox.appendChild(span);
  });

  document.querySelectorAll(".glass-railing-thumbs img")
    .forEach(img=>img.classList.remove("active"));
  el.classList.add("active");
}



    </script>
<?php include "footer.php"?>