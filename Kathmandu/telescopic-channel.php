<?php $page_title = "Telescopic Channel manufacturer in Kathmandu";
$description = "As a trusted Telescopic Channel manufacturer, we specialize in crafting precision-engineered drawer and sliding mechanisms that deliver smooth, silent, and durable motion for furniture and cabinetry. Our telescopic channels are designed to provide maximum";
$keyword = "Telescopic Channel manufacturers in Kathmandu,Telescopic Channel supplier in Kathmandu,Telescopic Channel exporter in Kathmandu, Best Telescopic Channel manufacturers in Kathmandu, Top Telescopic Channel manufacturers in Kathmandu, best Telescopic Channel supplier in Kathmandu, Top Telescopic Channel supplier Kathmandu, best Telescopic Channel exporter in Kathmandu, Top Telescopic Channel exporter in Kathmandu,Telescopic Channel manufacturers,Best Telescopic Channel manufacturers,Top Telescopic Channel manufacturers, Telescopic Channel supplier,Best Telescopic Channel supplier, Top Telescopic Channel supplier,Telescopic Channel exporter,Best Telescopic Channel exporter,Top Telescopic Channel exporter";
include('header.php') ?>
    
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
        .telescopic-channel-hero-section {
            position: relative;
            width: 100%;
            height: 760px;
            overflow: hidden;
            margin-top: -90px;
        }

        .telescopic-channel-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .telescopic-channel-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .telescopic-channel-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .telescopic-channel-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* WHITE CONTENT BOX - UNIQUE CLASS */
        .telescopic-channel-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -81px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .telescopic-channel-content-wrapper {
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .telescopic-channel-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .telescopic-channel-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .telescopic-channel-hero-content h1 {
                font-size: 32px;
            }

            .telescopic-channel-content-wrapper {
                grid-template-columns: 1fr;
            }
        }


        /* BENEFITS SECTION - UNIQUE CLASS */
        .telescopic-channel-benefits-wrapper {
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING - UNIQUE CLASS */
        .telescopic-channel-card {
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

        .telescopic-channel-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .telescopic-channel-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL - UNIQUE CLASS */
        .telescopic-channel-tag {
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
        .telescopic-channel-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE - UNIQUE CLASS */
        .telescopic-channel-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .telescopic-channel-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN - UNIQUE CLASS */
        .telescopic-channel-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE - UNIQUE CLASS */
        .telescopic-channel-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .telescopic-channel-benefits-wrapper {
                flex-direction: column;
            }

            .telescopic-channel-plus,
            .telescopic-channel-dotted-line {
                display: none;
            }
        }


        /* MAIN SECTION - UNIQUE CLASS */
        .telescopic-channel-main-section {
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE - UNIQUE CLASS */
        .telescopic-channel-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH - UNIQUE CLASS */
        .telescopic-channel-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK - UNIQUE CLASS */
        .telescopic-channel-discuss-link {
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

        .telescopic-channel-discuss-link:hover {
            color: var(--text-heading);
        }

        .telescopic-channel-discuss-link .telescopic-channel-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW - UNIQUE CLASS */
        .telescopic-channel-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE - UNIQUE CLASS */
        .telescopic-channel-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT - UNIQUE CLASS */
        .telescopic-channel-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .telescopic-channel-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .telescopic-channel-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .telescopic-channel-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS - UNIQUE CLASS */
        .telescopic-channel-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .telescopic-channel-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .telescopic-channel-row {
                flex-direction: column;
            }

            .telescopic-channel-left-img img {
                width: 100%;
                height: auto;
            }

            .telescopic-channel-main-section h1 {
                font-size: 30px;
            }

            .telescopic-channel-main-section {
                padding: 50px 20px;
            }
        }


    /* UNIQUE CONTAINER - RENAMED */
    .telescopic-channel-prod-section{
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .telescopic-channel-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* UNIQUE GRID - RENAMED */
    .telescopic-channel-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* UNIQUE CARD - RENAMED */
    .telescopic-channel-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .telescopic-channel-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .telescopic-channel-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .telescopic-channel-prod-card-info{
        padding:15px;
    }

    .telescopic-channel-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .telescopic-channel-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* UNIQUE POPUP - RENAMED */
    .telescopic-channel-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .telescopic-channel-prod-popup.active{
        display:flex;
    }

    .telescopic-channel-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:telescopicChannelProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes telescopicChannelProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .telescopic-channel-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .telescopic-channel-prod-popup-content{
        padding:20px;
    }

    .telescopic-channel-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .telescopic-channel-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .telescopic-channel-prod-btn{
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

    .telescopic-channel-prod-btn:hover {
        background-color: #b5987a;
    }

    .telescopic-channel-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }


    
    /* SECTION WRAPPER - RENAMED */
    .telescopic-channel-fund-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .telescopic-channel-fund-container{
        padding: 0px 50px;
        margin:auto;
    }

    .telescopic-channel-fund-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .telescopic-channel-fund-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .telescopic-channel-fund-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .telescopic-channel-fund-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .telescopic-channel-fund-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP - RENAMED */
    .telescopic-channel-fund-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD - RENAMED */
    .telescopic-channel-fund-card{
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

    .telescopic-channel-fund-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .telescopic-channel-fund-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .telescopic-channel-fund-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .telescopic-channel-fund-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .telescopic-channel-fund-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST - RENAMED */
    .telescopic-channel-fund-list{
        list-style:none;
        padding-left:0;
    }

    .telescopic-channel-fund-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .telescopic-channel-fund-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .telescopic-channel-fund-card-wrap{
            flex-direction:column;
        }
        .telescopic-channel-fund-card{
            min-width:100%;
        }
    }


       /* MAIN WRAPPER - RENAMED */
    .telescopic-channel-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .telescopic-channel-project-container{
        max-width: 1550px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT - RENAMED */
    .telescopic-channel-project-left{
        flex:1;
    }

    .telescopic-channel-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .telescopic-channel-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .telescopic-channel-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS - RENAMED */
    .telescopic-channel-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .telescopic-channel-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .telescopic-channel-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE - RENAMED */
    .telescopic-channel-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .telescopic-channel-project-container{
            flex-direction:column;
        }

        .telescopic-channel-project-right img{
            width:100%;
            height:auto;
        }

        
    }



     /* ===============================
   JANSON TELESCOPIC CHANNEL (EXACT)
================================ */

#jansonTelescopicChannelWrapper {
    padding: 80px 5%;
    background: var(--primary-color);
    font-family: var(--font-primary);
}

.janson-telescopic-channel-inner {
    max-width: 1450px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1.35fr 1fr 80px;
    gap: 40px;
    align-items: center;
}

/* COMMON BOX */
.janson-telescopic-channel-box {
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
    .janson-telescopic-channel-inner {
        grid-template-columns: 1fr;
    }

    .janson-vertical-strip {
        writing-mode: horizontal-tb;
        transform: none;
        margin-top: 20px;
    }
}


    
    /* SECTION BACKGROUND - RENAMED */
    .telescopic-channel-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE - RENAMED */
    .telescopic-channel-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER - RENAMED */
    .telescopic-channel-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM - RENAMED */
    .telescopic-channel-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .telescopic-channel-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .telescopic-channel-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON - RENAMED */
    .telescopic-channel-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT - RENAMED */
    .telescopic-channel-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .telescopic-channel-faq-item.active .telescopic-channel-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE - RENAMED */
    .telescopic-channel-faq-item.active .telescopic-channel-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON - RENAMED */
    .telescopic-channel-faq-btn{
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

    .telescopic-channel-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    @media (min-width:300px) and (max-width:700px){
    .telescopic-channel-fund-container{
        padding: 0px !important;
    }
}
.telescopic-channel-hero-content h5{
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


.telescopic-channel-product-slider{
display:flex;
gap:40px;
padding:60px;
align-items:center;
}

/* LEFT */
.telescopic-channel-product-images{
position:relative;
flex:1;
background:linear-gradient(145deg,#0d0d0d,#1c1c1c);
border-radius:12px;
padding:40px;
text-align:center;
}

.telescopic-channel-stock{
position:absolute;
top:20px;
left:20px;
opacity:0.3;
letter-spacing:2px;
}

.telescopic-channel-main-img{
width:80%;
transition:0.3s;
}

.telescopic-channel-thumbs{
display:flex;
justify-content:center;
gap:15px;
margin-top:20px;
flex-wrap:wrap;
}

.telescopic-channel-thumbs img{
width:60px;
cursor:pointer;
opacity:0.6;
border-radius:8px;
}

.telescopic-channel-thumbs img.active,
.telescopic-channel-thumbs img:hover{
opacity:1;
transform:scale(1.1);
}

/* RIGHT */
.telescopic-channel-product-info{
flex:1;
background:var(--primary-light);
padding:35px;
border-radius:12px;
box-shadow:var(--shadow-medium);
}

.telescopic-channel-product-title{
font-size:26px;
color:var(--text-heading);
}

.telescopic-channel-category{
font-size:13px;
opacity:0.7;
}

.telescopic-channel-price{
font-size:28px;
margin:12px 0;
color:var(--secondary-color);
}

.telescopic-channel-rating{
color:gold;
margin-bottom:12px;
}

.telescopic-channel-desc{
font-size:14px;
line-height:1.6;
margin-bottom:18px;
color:var(--text-color);
}

.telescopic-channel-sizes span{
display:inline-block;
border:1px solid var(--border-color);
padding:6px 10px;
margin:6px 6px 0 0;
cursor:pointer;
border-radius:6px;
}

.telescopic-channel-sizes span.active{
background:var(--secondary-color);
color:#000;
}

.telescopic-channel-colors span{
display:inline-block;
width:18px;
height:18px;
border-radius:50%;
margin:8px 8px 0 0;
border:1px solid #555;
}

.telescopic-channel-cart-btn{
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
.telescopic-channel-product-slider{
flex-direction:column;
}
}


    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="telescopic-channel-hero-section"  data-aos="zoom-in">
        <img src="../slim-partition/WhatsApp Image 2025-12-24 at 6.30.17 PM (1).jpeg" alt="Telescopic Channel Background">
        <div class="telescopic-channel-hero-content">
            <h5>TELESCOPIC CHANNEL SYSTEMS</h5>
            <h1>PRECISION SLIDING MECHANISMS FOR FURNITURE</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="telescopic-channel-content-box"  data-aos="zoom-in">
        <div class="telescopic-channel-content-wrapper">
            <div>
                <h2 class="telescopic-channel-content-title">TELESCOPIC CHANNEL MANUFACTURER IN Kathmandu</h2>
            </div>
            <div class="telescopic-channel-content-text">
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

    <div class="telescopic-channel-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="telescopic-channel-card"  data-aos="zoom-in">
            <div class="telescopic-channel-tag">Benefits</div>
            <img class="telescopic-channel-icon" src="https://cdn-icons-png.flaticon.com/512/992/992651.png">
            <div class="telescopic-channel-card-title">SMOOTH OPERATION</div>
            <p>
                Smooth and Silent Operation: Engineered for seamless, noise-free sliding motion. Full Extension Access: Allows opening of drawers fully for maximum storage efficiency.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="telescopic-channel-plus">+</div>

        <!-- CARD 2 -->
        <div class="telescopic-channel-card" data-aos="zoom-in">
            <div class="telescopic-channel-tag">Benefits</div>
            <img class="telescopic-channel-icon" src="https://cdn-icons-png.flaticon.com/512/3430/3430447.png">
            <div class="telescopic-channel-card-title">DURABLE CONSTRUCTION</div>
            <p>
                Durable Construction: Made from heavy-duty cold-rolled steel for long-lasting performance. Corrosion Resistant: Zinc or nickel-plated coating ensures resistance to rust and wear.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="telescopic-channel-dotted-line"  data-aos="zoom-in"></div>

        <!-- CARD 3 -->
        <div class="telescopic-channel-card telescopic-channel-right-card" data-aos="zoom-in">
            <div class="telescopic-channel-tag">Applications</div>
            <img class="telescopic-channel-icon" src="https://cdn-icons-png.flaticon.com/512/456/456177.png">
            <div class="telescopic-channel-card-title">VERSATILE APPLICATIONS</div>
            <p>
                High Load Capacity: Suitable for heavy drawers, maintaining stability at the highest level. Easy Installation: Comes with pre-punched holes and precision alignment that allow for quick setup. The low-maintenance build contributes to smooth performance and requires little upkeep.
            </p>
        </div>
    </div>

<section class="janson-telescopic-channel-wrapper" id="jansonTelescopicChannelWrapper">
    <div class="janson-telescopic-channel-inner">

        <!-- LEFT IMAGE -->
        <div class="janson-telescopic-channel-box janson-left-box">
            <div class="janson-img-holder">
                <img src="../telescopic/17cm-ss-telescopic-drawer-channel-500x500.webp" alt="Standard Telescopic Channel">
            </div>
            <p class="janson-label">SS-Telescopic-Drawer</p>
        </div>

        <!-- CENTER IMAGE -->
        <div class="janson-telescopic-channel-box janson-center-box">

            <div class="janson-top-logo">
                <span class="janson-logo-je">JE</span>
                <span class="janson-logo-text">JANSON EXPORTS</span>
            </div>

            <div class="janson-img-holder big-img">
                <img src="../telescopic/stainless-steel-telescopic-slide-500x500.webp" alt="Heavy Duty Telescopic Channel">
            </div>
            <p class="janson-label">Stainless-Steel-Telescopic</p>

            <div class="janson-bni-badge">BNI MEMBER</div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="janson-telescopic-channel-box janson-right-box">
            <div class="janson-img-holder">
                <img src="../telescopic/slim-box-drawer-with-glass-and-light-0012.jpg" alt="Soft-Close Telescopic Channel">
            </div>
            <p class="janson-label">Slim-Box-Drawer</p>
        </div>

        <!-- RIGHT VERTICAL BAR -->
        <div class="janson-vertical-strip">
            <span>TELESCOPIC</span>
            <span>CHANNEL</span>
        </div>

    </div>
</section>

    

    <section class="telescopic-channel-main-section"  data-aos="zoom-in">
        <h1>TELESCOPIC CHANNEL SUPPLIER IN Kathmandu</h1>
        <p>
            As one of the leading Telescopic Channel suppliers in the country, we offer a complete range of sliding channels to meet varied residential, commercial, and industrial needs. Our supply network ensures timely delivery and consistent quality, which helps us emerge as a trusted partner for furniture manufacturers, modular kitchen brands, and hardware dealers across the country.
        </p>
        <p>
            We offer soft-close, heavy-duty, push-to-open, and a variety of other types of telescopic channels for particular applications and specific performance requirements. All the products supplied from us reflect precision engineering, smooth operation, and long-term reliability to ensure value and satisfaction for each of our valuable clients.
        </p>

        <a href="contact.php" class="telescopic-channel-discuss-link">
            Request a Quote
            <div class="telescopic-channel-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="telescopic-channel-row"  data-aos="zoom-in">
            <!-- LEFT IMAGE -->
            <div class="telescopic-channel-left-img">
                <img src="../telescopic/telescopic-img.jpg" alt="Telescopic Channel Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="telescopic-channel-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Telescopic Channel Solutions</h2>
                <p>
                    Manufactured from high-tensile cold-rolled steel. Available in multiple lengths and load capacities. Optional soft-close or push-to-open mechanisms.
                </p>
                <p>
                    Corrosion-resistant plated finish for extended life. Ball-bearing mechanism for smooth and silent sliding. Designed for both light and heavy-duty applications.
                </p>
                <p>
                    Easy to mount, easy to remove for maintenance/cleaning. Resistant, tested for smooth operation cycles.
                </p>
                <ul class="telescopic-channel-ul">
                    <li>Manufactured from high-tensile cold-rolled steel</li>
                    <li>Available in multiple lengths and load capacities</li>
                    <li>Optional soft-close or push-to-open mechanisms</li>
                    <li>Corrosion-resistant plated finish for extended life</li>
                    <li>Ball-bearing mechanism for smooth and silent sliding</li>
                    <li>Designed for both light and heavy-duty applications</li>
                    <li>Easy to mount, easy to remove for maintenance/cleaning</li>
                    <li>Resistant, tested for smooth operation cycles</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="telescopic-channel-prod-section">
        <h2 class="telescopic-channel-prod-title">OUR TELESCOPIC CHANNEL PRODUCTS</h2>
        <div class="telescopic-channel-prod-grid">
            <!-- CARD 1 -->
            <div class="telescopic-channel-prod-card" onclick="telescopicChannelProdOpenPopup('Standard Telescopic Channel',' Made from high-quality steel, it ensures smooth and stable drawer movement even under heavy loads.','telescopic/telescopic-drawer-channel-500x500.webp')" data-aos="zoom-in"> 
                <img class="telescopic-channel-prod-card-img" src="../telescopic/telescopic-drawer-channel-500x500.webp">
                <div class="telescopic-channel-prod-card-info">
                    <h3>Telescopic-Drawer-Channel</h3>
                    <p>Smooth drawer operation with full extension</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="telescopic-channel-prod-card" onclick="telescopicChannelProdOpenPopup('Hettich-Telescopic-Channel','Industrial-grade heavy-duty channel for heavy-load drawers and cabinets.','telescopic/hettich-telescopic-channel-500x500.webp')" data-aos="zoom-in">
                <img class="telescopic-channel-prod-card-img" src="../telescopic/hettich-telescopic-channel-500x500.webp">
                <div class="telescopic-channel-prod-card-info">
                    <h3>Hettich-Telescopic-Channel</h3>
                    <p>Industrial-grade for heavy-load applications</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="telescopic-channel-prod-card" onclick="telescopicChannelProdOpenPopup('Sleek-Telescopic-Drawer','Durable construction with precision ball bearings ensures quiet operation and long-lasting performance.','telescopic/sleek-telescopic-drawer-slide.png')" data-aos="zoom-in">
                <img class="telescopic-channel-prod-card-img" src="../telescopic/sleek-telescopic-drawer-slide.png">
                <div class="telescopic-channel-prod-card-info">
                    <h3>Sleek-Telescopic-Drawer</h3>
                    <p>Silent and gentle drawer closing mechanism</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="telescopic-channel-prod-popup" id="telescopicChannelProdPopup">
        <span class="telescopic-channel-prod-close" onclick="telescopicChannelProdClosePopup()">&times;</span>
        <div class="telescopic-channel-prod-popup-box">
            <img id="telescopicChannelProdPopupImg" class="telescopic-channel-prod-popup-img">
            <div class="telescopic-channel-prod-popup-content">
                <h2 id="telescopicChannelProdPopupTitle"></h2>
                <p id="telescopicChannelProdPopupDesc"></p>
                <a href="contact.php" class="telescopic-channel-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="telescopic-channel-fund-section" data-aos="zoom-in">
        <div class="telescopic-channel-fund-container">
            <div class="telescopic-channel-fund-top-title">EXPORT QUALITY</div>
            <h2 class="telescopic-channel-fund-heading">TELESCOPIC CHANNEL EXPORTER IN Kathmandu</h2>
            <p class="telescopic-channel-fund-desc">
                As a reputed Telescopic Channel exporter, we deliver globally acclaimed sliding solutions that meet international standards of performance and design. Our export-grade telescopic channels are known for their high load-bearing capacity, perfect finish, and long operational life.
            </p>
            
            <a href="contact.php" class="telescopic-channel-fund-link">
                International Enquiries
                <div class="telescopic-channel-fund-line"></div>
            </a>

            <div class="telescopic-channel-fund-card-wrap">
                <div class="telescopic-channel-fund-card">
                    <div class="telescopic-channel-fund-card-title">Global Standards</div>
                    <p>
                        We serve clients across furniture, interior design, and manufacturing industries worldwide. We offer customized sizes, finishes, and load options to suit project-specific needs. Each channel will be carefully inspected, securely packed, and exported to make sure safe delivery and ease of installation.
                    </p>
                    <hr>
                    <div class="telescopic-channel-fund-card-subtitle">Our Export Advantages:</div>
                    <ul class="telescopic-channel-fund-list">
                        <li>Meets international performance standards</li>
                        <li>High load-bearing capacity and perfect finish</li>
                        <li>Customized sizes and finishes available</li>
                        <li>Thorough quality checks before export</li>
                    </ul>
                </div>

                <div class="telescopic-channel-fund-card">
                    <div class="telescopic-channel-fund-card-title">International Markets</div>
                    <p>
                        With a commitment to precision, durability, and customer satisfaction, we have gained a strong position in the international market-offering telescopic channels that combine advanced functionality, modern design, and dependable performance for every environment.
                    </p>
                    <hr>
                    <div class="telescopic-channel-fund-card-subtitle">Global Reach:</div>
                    <ul class="telescopic-channel-fund-list">
                        <li>Furniture manufacturers worldwide</li>
                        <li>Interior design industries</li>
                        <li>Global manufacturing companies</li>
                        <li>Hardware distributors globally</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="telescopic-channel-product-slider" data-aos="zoom-in">


  <div class="telescopic-channel-product-images">
    <span class="telescopic-channel-stock">IN STOCK</span>

    <img src="../slim-partition/8.jpg" class="telescopic-channel-main-img" id="telescopicChannelMainImg">

    <div class="telescopic-channel-thumbs">
      <img src="../slim-partition/8.jpg" class="active" data-index="0" onclick="changeTelescopicChannelProduct(this)">
      <img src="../slim-partition/9.jpg" data-index="1" onclick="changeTelescopicChannelProduct(this)">
      <img src="../slim-partition/10.jpg" data-index="2" onclick="changeTelescopicChannelProduct(this)">
      <img src="../slim-partition/11.jpg" data-index="3" onclick="changeTelescopicChannelProduct(this)">
      <img src="../slim-partition/12.jpg" data-index="4" onclick="changeTelescopicChannelProduct(this)">
    </div>
  </div>

 
  <div class="telescopic-channel-product-info">

    <h3 class="telescopic-channel-product-title" id="telescopicChannelTitle">Standard Telescopic Channel</h3>
    <span class="telescopic-channel-category" id="telescopicChannelCategory">Furniture Hardware</span>

    <div class="telescopic-channel-price" id="telescopicChannelPrice">Custom Quote</div>

    <div class="telescopic-channel-rating" id="telescopicChannelRating">★★★★★ (4.8)</div>

    <p class="telescopic-channel-desc" id="telescopicChannelDesc">
      Premium standard telescopic channel for smooth drawer operation with full extension capability. Features ball-bearing mechanism for silent sliding.
    </p>

    <div class="telescopic-channel-sizes" id="telescopicChannelSizes">
      <strong>Type:</strong><br>
      <span>Standard</span><span>Heavy Duty</span><span>Soft-Close</span>
      <span class="active">Push-to-Open</span>
    </div>

    <div class="telescopic-channel-colors" id="telescopicChannelColors">
      <strong>Finish:</strong><br>
      <span style="background:#c6a98c"></span>
      <span style="background:#ffffff"></span>
      <span style="background:#1e90ff"></span>
    </div>

    <button class="telescopic-channel-cart-btn">+ REQUEST QUOTE</button>

  </div>

</section> -->

    <section class="janson-feature-section" id="jansonFeatureSection">
    <div class="janson-feature-wrapper">

        <!-- LEFT IMAGE -->
        <div class="janson-feature-image">
            <img src="../telescopic/slim-box-drawer-with-glass-and-light-0012.jpg" alt="Telescopic Channel Installation">
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
                    <h4><span>01</span> Smooth Operation</h4>
                    <p>Ball-bearing mechanism ensures seamless, noise-free sliding motion with full extension capability for maximum drawer access.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">✔</div>
                <div>
                    <h4><span>02</span> Corrosion Resistance</h4>
                    <p>Zinc or nickel-plated coating provides excellent protection against rust and wear, ensuring long-lasting performance.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⚙</div>
                <div>
                    <h4><span>03</span> Easy Installation</h4>
                    <p>Pre-punched holes and precision alignment features simplify installation, allowing for quick setup and maintenance.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⬛</div>
                <div>
                    <h4><span>04</span> Heavy Duty Construction</h4>
                    <p>Manufactured from superior cold-rolled steel with high-tensile strength to handle heavy loads effortlessly.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">🏆</div>
                <div>
                    <h4><span>05</span> Versatile Options</h4>
                    <p>Available in soft-close, heavy-duty, push-to-open, and various lengths to suit different furniture applications.</p>
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




    <section class="telescopic-channel-project-section" data-aos="zoom-in">
        <div class="telescopic-channel-project-container">
            <div class="telescopic-channel-project-left">
                <div class="telescopic-channel-project-subtitle">MODULAR KITCHEN PROJECT</div>
                <h2 class="telescopic-channel-project-title">Premium Kitchen Cabinet Installation</h2>
                <p class="telescopic-channel-project-text">
                    A luxury modular kitchen project required premium telescopic channels for their extensive cabinet drawer systems. Our heavy-duty telescopic channels were selected for their superior load-bearing capacity and smooth operation in high-usage kitchen environments.
                </p>
                <p class="telescopic-channel-project-text">
                    The installation featured soft-close telescopic channels with full extension capability for 50+ kitchen drawers. Special attention was given to corrosion-resistant coatings and silent operation to maintain the premium feel of the luxury kitchen.
                </p>
                <p class="telescopic-channel-project-text">
                    This project successfully equipped an entire luxury kitchen with reliable sliding mechanisms that have performed flawlessly for over 3 years with minimal maintenance requirements.
                </p>
                <ul class="telescopic-channel-project-list">
                    <li>Project Type: Luxury Modular Kitchen</li>
                    <li>Product Type: Soft-Close Telescopic Channels</li>
                    <li>Special Features: Full Extension, Silent Operation</li>
                    <li>Project Completion Time: 4 Weeks</li>
                </ul>
            </div>
            
            <div class="telescopic-channel-project-right">
                <img src="../telescopic/71s8Q9WPJEL._AC_UF1000,1000_QL80_.jpg" alt="Kitchen Cabinet Installation">
            </div>
        </div>
    </section>

    <section class="telescopic-channel-faq-section" data-aos="zoom-in">
        <h2 class="telescopic-channel-faq-title">TELESCOPIC CHANNEL FAQS</h2>
        <div class="telescopic-channel-faq-container">
            <div class="telescopic-channel-faq-item">
                <div class="telescopic-channel-faq-question">
                    What weight capacity do your telescopic channels support?
                    <span class="telescopic-channel-faq-icon">⌄</span>
                </div>
                <div class="telescopic-channel-faq-answer">
                    Our telescopic channels come in various weight capacities: Standard channels support 25-35kg, heavy-duty channels support 45-60kg, and industrial-grade channels support 70-100kg per pair. For kitchen applications, we recommend heavy-duty channels (45kg+) for optimal performance with loaded drawers.
                </div>
            </div>

            <div class="telescopic-channel-faq-item">
                <div class="telescopic-channel-faq-question">
                    How do I maintain telescopic channels for long-lasting performance?
                    <span class="telescopic-channel-faq-icon">⌄</span>
                </div>  
                <div class="telescopic-channel-faq-answer">
                    Regular cleaning with a dry cloth helps prevent dust accumulation. For optimal performance, apply silicone-based lubricant (not oil-based) to the ball bearings every 6-12 months. Avoid using abrasive cleaners that could damage the plated finish. Our channels feature corrosion-resistant coatings but benefit from occasional maintenance in humid environments.
                </div>
            </div>

            <div class="telescopic-channel-faq-item">
                <div class="telescopic-channel-faq-question">
                    Can telescopic channels be adjusted after installation?
                    <span class="telescopic-channel-faq-icon">⌄</span>
                </div>
                <div class="telescopic-channel-faq-answer">
                    Yes, our telescopic channels feature adjustable mounting points and alignment mechanisms. Height and depth adjustments can be made using standard tools to ensure perfect drawer alignment. We provide detailed adjustment guides with each product for easy maintenance and realignment.
                </div>
            </div>

            <div class="telescopic-channel-faq-item">
                <div class="telescopic-channel-faq-question">
                    What is the lifespan of telescopic channels in commercial applications?
                    <span class="telescopic-channel-faq-icon">⌄</span>
                </div>
                <div class="telescopic-channel-faq-answer">
                    Our commercial-grade telescopic channels are tested for over 100,000 open-close cycles. In typical commercial settings (office furniture, hotel cabinets), they provide 8-10 years of maintenance-free operation. Residential applications typically see 12-15 years of reliable performance with proper installation and occasional maintenance.
                </div>
            </div>
        </div>
        <a href="contact.php" class="telescopic-channel-prod-btn">View All FAQs</a>
    </section>

    <script>
        function telescopicChannelProdOpenPopup(title, desc, img){
            document.getElementById("telescopicChannelProdPopupTitle").innerText = title;
            document.getElementById("telescopicChannelProdPopupDesc").innerText = desc;
            document.getElementById("telescopicChannelProdPopupImg").src = img;
            document.getElementById("telescopicChannelProdPopup").classList.add("active");
        }

        function telescopicChannelProdClosePopup(){
            document.getElementById("telescopicChannelProdPopup").classList.remove("active");
        }

        const telescopicChannelFaqItems = document.querySelectorAll(".telescopic-channel-faq-item");
        telescopicChannelFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                telescopicChannelFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });

 
const telescopicChannelProducts = [
  {
    img:"slim-partition/8.jpg",
    title:"Standard Telescopic Channel",
    category:"Furniture Hardware",
    price:"Custom Quote",
    rating:"★★★★★ (4.8)",
    desc:"Premium standard telescopic channel for smooth drawer operation with full extension capability. Features ball-bearing mechanism for silent sliding.",
    sizes:["Standard","Heavy Duty","Soft-Close","Push-to-Open"],
    activeSize:"Push-to-Open",
    colors:["#c6a98c","#ffffff","#1e90ff"]
  },
  {
    img:"slim-partition/9.jpg",
    title:"Heavy Duty Telescopic Channel",
    category:"Industrial Hardware",
    price:"Custom Quote",
    rating:"★★★★☆ (4.7)",
    desc:"Industrial-grade heavy-duty channel for heavy-load drawers and cabinets. Features enhanced load capacity and durability.",
    sizes:["Standard","Heavy Duty","Soft-Close"],
    activeSize:"Heavy Duty",
    colors:["#c6a98c","#1e90ff"]
  },
  {
    img:"slim-partition/10.jpg",
    title:"Soft-Close Telescopic Channel",
    category:"Premium Hardware",
    price:"Custom Quote",
    rating:"★★★★★ (5.0)",
    desc:"Premium soft-close mechanism channel for silent and gentle drawer closing. Perfect for luxury furniture and kitchen cabinets.",
    sizes:["Standard","Heavy Duty","Soft-Close"],
    activeSize:"Soft-Close",
    colors:["#c6a98c","#ffffff"]
  },
  {
    img:"slim-partition/11.jpg",
    title:"Push-to-Open Channel",
    category:"Modern Hardware",
    price:"Custom Quote",
    rating:"★★★★☆ (4.8)",
    desc:"Advanced push-to-open telescopic channel for handle-less furniture designs. Features touch-open mechanism for modern aesthetics.",
    sizes:["Standard","Heavy Duty","Push-to-Open"],
    activeSize:"Push-to-Open",
    colors:["#000000","#ffcc00"]
  },
  {
    img:"slim-partition/12.jpg",
    title:"Full Extension Channel",
    category:"Premium Furniture",
    price:"Custom Quote",
    rating:"★★★★☆ (4.6)",
    desc:"Full extension telescopic channel for complete drawer access. Features 100% extension capability for maximum storage efficiency.",
    sizes:["Standard","Heavy Duty","Full Extension"],
    activeSize:"Full Extension",
    colors:["#c6a98c","#1e90ff"]
  }
];

function changeTelescopicChannelProduct(el){
  const p = telescopicChannelProducts[el.dataset.index];

  document.getElementById("telescopicChannelMainImg").src = p.img;
  document.getElementById("telescopicChannelTitle").innerText = p.title;
  document.getElementById("telescopicChannelCategory").innerText = p.category;
  document.getElementById("telescopicChannelPrice").innerText = p.price;
  document.getElementById("telescopicChannelRating").innerText = p.rating;
  document.getElementById("telescopicChannelDesc").innerText = p.desc;

  const sizesBox = document.getElementById("telescopicChannelSizes");
  sizesBox.innerHTML = "<strong>Type:</strong><br>";
  p.sizes.forEach(s=>{
    const span = document.createElement("span");
    span.innerText = s;
    if(s === p.activeSize) span.classList.add("active");
    sizesBox.appendChild(span);
  });

  const colorBox = document.getElementById("telescopicChannelColors");
  colorBox.innerHTML = "<strong>Finish:</strong><br>";
  p.colors.forEach(c=>{
    const span = document.createElement("span");
    span.style.background = c;
    colorBox.appendChild(span);
  });

  document.querySelectorAll(".telescopic-channel-thumbs img")
    .forEach(img=>img.classList.remove("active"));
  el.classList.add("active");
}



    </script>
<?php include "footer.php"?>