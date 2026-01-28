<?php $page_title = "Hydraulic hinge manufacturer in Lucknow";
$description = "As one of the major Hydraulic Hinge manufacturers, we specialize in the production of high-quality hinges engineered to assure smooth, controlled, and reliable door movements for various architectural and interior applications. Our hydraulic hinges";
$keyword = "Hydraulic Hinge manufacturer in Lucknow, Hydraulic Hinge supplier in Lucknow, Hydraulic Hinge exporter in Lucknow, Best Hydraulic Hinge manufacturer in Lucknow, Top Hydraulic Hinge manufacturer in Lucknow, Best Hydraulic Hinge supplier in Lucknow, Top Hydraulic Hinge supplier in Lucknow, Best Hydraulic Hinge exporter in Lucknow, Top Hydraulic Hinge exporter in Lucknow, Hydraulic Hinge manufacturers, Best Hydraulic Hinge manufacturers, Top Hydraulic Hinge manufacturers, Hydraulic Hinge supplier, Best Hydraulic Hinge supplier, Top Hydraulic Hinge supplier, Hydraulic Hinge exporter, Best Hydraulic Hinge exporter, Top Hydraulic Hinge exporter";
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
        .hydraulic-hinge-hero-section {
            position: relative;
            width: 100%;
            height: 760px;
            overflow: hidden;
            margin-top: -90px;
        }

        .hydraulic-hinge-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hydraulic-hinge-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .hydraulic-hinge-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .hydraulic-hinge-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* WHITE CONTENT BOX - UNIQUE CLASS */
        .hydraulic-hinge-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -81px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .hydraulic-hinge-content-wrapper {
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .hydraulic-hinge-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .hydraulic-hinge-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .hydraulic-hinge-hero-content h1 {
                font-size: 32px;
            }

            .hydraulic-hinge-content-wrapper {
                grid-template-columns: 1fr;
            }
        }


        /* BENEFITS SECTION - UNIQUE CLASS */
        .hydraulic-hinge-benefits-wrapper {
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
        .hydraulic-hinge-card {
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

        .hydraulic-hinge-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .hydraulic-hinge-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL - UNIQUE CLASS */
        .hydraulic-hinge-tag {
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
        .hydraulic-hinge-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE - UNIQUE CLASS */
        .hydraulic-hinge-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .hydraulic-hinge-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN - UNIQUE CLASS */
        .hydraulic-hinge-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE - UNIQUE CLASS */
        .hydraulic-hinge-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .hydraulic-hinge-benefits-wrapper {
                flex-direction: column;
            }

            .hydraulic-hinge-plus,
            .hydraulic-hinge-dotted-line {
                display: none;
            }
        }


        /* MAIN SECTION - UNIQUE CLASS */
        .hydraulic-hinge-main-section {
            /* max-width: 1400px; */
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE - UNIQUE CLASS */
        .hydraulic-hinge-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH - UNIQUE CLASS */
        .hydraulic-hinge-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK - UNIQUE CLASS */
        .hydraulic-hinge-discuss-link {
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

        .hydraulic-hinge-discuss-link:hover {
            color: var(--text-heading);
        }

        .hydraulic-hinge-discuss-link .hydraulic-hinge-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW - UNIQUE CLASS */
        .hydraulic-hinge-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE - UNIQUE CLASS */
        .hydraulic-hinge-left-img img {
            width: 730px;
            /* height: 487px; */
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT - UNIQUE CLASS */
        .hydraulic-hinge-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .hydraulic-hinge-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .hydraulic-hinge-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hydraulic-hinge-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS - UNIQUE CLASS */
        .hydraulic-hinge-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .hydraulic-hinge-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .hydraulic-hinge-row {
                flex-direction: column;
            }

            .hydraulic-hinge-left-img img {
                width: 100%;
                height: auto;
            }

            .hydraulic-hinge-main-section h1 {
                font-size: 30px;
            }

            .hydraulic-hinge-main-section {
                padding: 50px 20px;
            }
        }


    /* UNIQUE CONTAINER - RENAMED */
    .hydraulic-hinge-prod-section{
        /* max-width: 1400px; */
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .hydraulic-hinge-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* UNIQUE GRID - RENAMED */
    .hydraulic-hinge-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* UNIQUE CARD - RENAMED */
    .hydraulic-hinge-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .hydraulic-hinge-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .hydraulic-hinge-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .hydraulic-hinge-prod-card-info{
        padding:15px;
    }

    .hydraulic-hinge-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .hydraulic-hinge-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* UNIQUE POPUP - RENAMED */
    .hydraulic-hinge-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .hydraulic-hinge-prod-popup.active{
        display:flex;
    }

    .hydraulic-hinge-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:hydraulicHingeProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes hydraulicHingeProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .hydraulic-hinge-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .hydraulic-hinge-prod-popup-content{
        padding:20px;
    }

    .hydraulic-hinge-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .hydraulic-hinge-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .hydraulic-hinge-prod-btn{
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

    .hydraulic-hinge-prod-btn:hover {
        background-color: #b5987a;
    }

    .hydraulic-hinge-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }


    
    /* SECTION WRAPPER - RENAMED */
    .hydraulic-hinge-fund-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .hydraulic-hinge-fund-container{
        /* max-width: 1400px; */
        padding: 0px 50px;
        margin:auto;
    }

    .hydraulic-hinge-fund-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .hydraulic-hinge-fund-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .hydraulic-hinge-fund-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .hydraulic-hinge-fund-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .hydraulic-hinge-fund-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP - RENAMED */
    .hydraulic-hinge-fund-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD - RENAMED */
    .hydraulic-hinge-fund-card{
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

    .hydraulic-hinge-fund-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .hydraulic-hinge-fund-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .hydraulic-hinge-fund-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .hydraulic-hinge-fund-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .hydraulic-hinge-fund-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST - RENAMED */
    .hydraulic-hinge-fund-list{
        list-style:none;
        padding-left:0;
    }

    .hydraulic-hinge-fund-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .hydraulic-hinge-fund-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .hydraulic-hinge-fund-card-wrap{
            flex-direction:column;
        }
        .hydraulic-hinge-fund-card{
            min-width:100%;
        }
    }


       /* MAIN WRAPPER - RENAMED */
    .hydraulic-hinge-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .hydraulic-hinge-project-container{
        max-width: 1550px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT - RENAMED */
    .hydraulic-hinge-project-left{
        flex:1;
    }

    .hydraulic-hinge-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .hydraulic-hinge-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .hydraulic-hinge-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS - RENAMED */
    .hydraulic-hinge-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .hydraulic-hinge-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .hydraulic-hinge-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE - RENAMED */
    .hydraulic-hinge-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .hydraulic-hinge-project-container{
            flex-direction:column;
        }

        .hydraulic-hinge-project-right img{
            width:100%;
            height:auto;
        }

        
    }



     /* ===============================
   JANSON HYDRAULIC HINGE (EXACT)
================================ */

#jansonHydraulicHingeWrapper {
    padding: 80px 5%;
    background: var(--primary-color);
    font-family: var(--font-primary);
}

.janson-hydraulic-hinge-inner {
    max-width: 1450px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1.35fr 1fr 80px;
    gap: 40px;
    align-items: center;
}

/* COMMON BOX */
.janson-hydraulic-hinge-box {
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
    .janson-hydraulic-hinge-inner {
        grid-template-columns: 1fr;
    }

    .janson-vertical-strip {
        writing-mode: horizontal-tb;
        transform: none;
        margin-top: 20px;
    }
}


    
    /* SECTION BACKGROUND - RENAMED */
    .hydraulic-hinge-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE - RENAMED */
    .hydraulic-hinge-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER - RENAMED */
    .hydraulic-hinge-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM - RENAMED */
    .hydraulic-hinge-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .hydraulic-hinge-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .hydraulic-hinge-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON - RENAMED */
    .hydraulic-hinge-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT - RENAMED */
    .hydraulic-hinge-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .hydraulic-hinge-faq-item.active .hydraulic-hinge-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE - RENAMED */
    .hydraulic-hinge-faq-item.active .hydraulic-hinge-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON - RENAMED */
    .hydraulic-hinge-faq-btn{
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

    .hydraulic-hinge-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    @media (min-width:300px) and (max-width:700px){
    .hydraulic-hinge-fund-container{
        padding: 0px !important;
    }
}
.hydraulic-hinge-hero-content h5{
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


.hydraulic-hinge-product-slider{
display:flex;
gap:40px;
padding:60px;
align-items:center;
}

/* LEFT */
.hydraulic-hinge-product-images{
position:relative;
flex:1;
background:linear-gradient(145deg,#0d0d0d,#1c1c1c);
border-radius:12px;
padding:40px;
text-align:center;
}

.hydraulic-hinge-stock{
position:absolute;
top:20px;
left:20px;
opacity:0.3;
letter-spacing:2px;
}

.hydraulic-hinge-main-img{
width:80%;
transition:0.3s;
}

.hydraulic-hinge-thumbs{
display:flex;
justify-content:center;
gap:15px;
margin-top:20px;
flex-wrap:wrap;
}

.hydraulic-hinge-thumbs img{
width:60px;
cursor:pointer;
opacity:0.6;
border-radius:8px;
}

.hydraulic-hinge-thumbs img.active,
.hydraulic-hinge-thumbs img:hover{
opacity:1;
transform:scale(1.1);
}

/* RIGHT */
.hydraulic-hinge-product-info{
flex:1;
background:var(--primary-light);
padding:35px;
border-radius:12px;
box-shadow:var(--shadow-medium);
}

.hydraulic-hinge-product-title{
font-size:26px;
color:var(--text-heading);
}

.hydraulic-hinge-category{
font-size:13px;
opacity:0.7;
}

.hydraulic-hinge-price{
font-size:28px;
margin:12px 0;
color:var(--secondary-color);
}

.hydraulic-hinge-rating{
color:gold;
margin-bottom:12px;
}

.hydraulic-hinge-desc{
font-size:14px;
line-height:1.6;
margin-bottom:18px;
color:var(--text-color);
}

.hydraulic-hinge-sizes span{
display:inline-block;
border:1px solid var(--border-color);
padding:6px 10px;
margin:6px 6px 0 0;
cursor:pointer;
border-radius:6px;
}

.hydraulic-hinge-sizes span.active{
background:var(--secondary-color);
color:#000;
}

.hydraulic-hinge-colors span{
display:inline-block;
width:18px;
height:18px;
border-radius:50%;
margin:8px 8px 0 0;
border:1px solid #555;
}

.hydraulic-hinge-cart-btn{
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
.hydraulic-hinge-product-slider{
flex-direction:column;
}
}


    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="hydraulic-hinge-hero-section"  data-aos="zoom-in">
        <img src="../slim-partition/WhatsApp Image 2025-12-24 at 6.30.17 PM (1).jpeg" alt="Hydraulic Hinge Background">
        <div class="hydraulic-hinge-hero-content">
            <h5>HYDRAULIC HINGE SYSTEMS</h5>
            <h1>PRECISION HYDRAULIC HINGES FOR SMOOTH DOOR CONTROL</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="hydraulic-hinge-content-box"  data-aos="zoom-in">
        <div class="hydraulic-hinge-content-wrapper">
            <div>
                <h2 class="hydraulic-hinge-content-title">HYDRAULIC HINGE MANUFACTURER IN Lucknow</h2>
            </div>
            <div class="hydraulic-hinge-content-text">
                <p>
                    As one of the major Hydraulic Hinge manufacturers, we specialize in the production of high-quality hinges engineered to assure smooth, controlled, and reliable door movements for various architectural and interior applications. Our hydraulic hinges are designed with advanced technology in their making to ensure quiet operation, self-closing, and enhanced durability, hence ideal for residential and commercial settings.
                </p>
                <p>
                    Each hinge is made with superior quality raw materials, including stainless steel, brass, or a zinc alloy that guarantees excellent resistance to corrosion, wear, and environmental stress. Our hydraulic hinges offer the best possible performance with sleek aesthetics and accurate engineering to maintain the elegance of modern interiors.
                </p>
                <p>
                    Whether for glass doors, wood panels, or aluminum frames, the hinges offered by us will ensure strength, stability, and long-term reliability, adding a professional finish to every installation.
                </p>
            </div>
        </div>
    </section>

    <div class="hydraulic-hinge-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="hydraulic-hinge-card"  data-aos="zoom-in">
            <div class="hydraulic-hinge-tag">Benefits</div>
            <img class="hydraulic-hinge-icon" src="https://cdn-icons-png.flaticon.com/512/992/992651.png">
            <div class="hydraulic-hinge-card-title">SMOOTH OPERATION</div>
            <p>
                Smooth and noiseless operation because of advanced hydraulic technology: The door movements are controlled. Self-Closing Device: Allows doors to shut soft and tight without percussion.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="hydraulic-hinge-plus">+</div>

        <!-- CARD 2 -->
        <div class="hydraulic-hinge-card" data-aos="zoom-in">
            <div class="hydraulic-hinge-tag">Benefits</div>
            <img class="hydraulic-hinge-icon" src="https://cdn-icons-png.flaticon.com/512/3430/3430447.png">
            <div class="hydraulic-hinge-card-title">DURABILITY & SAFETY</div>
            <p>
                Increased Strength: For heavy-duty applications and long operational life. Safety Ensured: Prevents sudden slamming, hence protecting glass integrity along with frame integrity.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="hydraulic-hinge-dotted-line"  data-aos="zoom-in"></div>

        <!-- CARD 3 -->
        <div class="hydraulic-hinge-card hydraulic-hinge-right-card" data-aos="zoom-in">
            <div class="hydraulic-hinge-tag">Applications</div>
            <img class="hydraulic-hinge-icon" src="https://cdn-icons-png.flaticon.com/512/456/456177.png">
            <div class="hydraulic-hinge-card-title">VERSATILE APPLICATIONS</div>
            <p>
                Corrosion and Rust Resistant: Best for humid or high-moisture areas. Low Maintenance: Engineered for reliable performance with minimal servicing needs.
            </p>
        </div>
    </div>

<section class="janson-hydraulic-hinge-wrapper" id="jansonHydraulicHingeWrapper">
    <div class="janson-hydraulic-hinge-inner">

        <!-- LEFT IMAGE -->
        <div class="janson-hydraulic-hinge-box janson-left-box">
            <div class="janson-img-holder">
                <img src="../HYDRAULIC HINGE/Concealed Hydraulic Hinge.jpg" alt="Glass Door Hydraulic Hinge">
            </div>
            <p class="janson-label">Concealed Hydraulic Hinge</p>
        </div>

        <!-- CENTER IMAGE -->
        <div class="janson-hydraulic-hinge-box janson-center-box">

            <div class="janson-top-logo">
                <span class="janson-logo-je">JE</span>
                <span class="janson-logo-text">JANSON EXPORTS</span>
            </div>

            <div class="janson-img-holder big-img">
                <img src="../HYDRAULIC HINGE/Elite Soft Close Hydraulic Hinge.jpg" alt="Heavy Duty Hydraulic Hinge">
            </div>
            <p class="janson-label">Elite Soft Close Hydraulic Hinge</p>

            <div class="janson-bni-badge">BNI MEMBER</div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="janson-hydraulic-hinge-box janson-right-box">
            <div class="janson-img-holder">
                <img src="../HYDRAULIC HINGE/Heavy-Duty Hydraulic Hinge.jpg" alt="Adjustable Hydraulic Hinge">
            </div>
            <p class="janson-label">Heavy-Duty Hydraulic Hinge</p>
        </div>

        <!-- RIGHT VERTICAL BAR -->
        <div class="janson-vertical-strip">
            <span>HYDRAULIC HINGE</span>
            <span>SUBCATEGORIES</span>
        </div>

    </div>
</section>




    

    <section class="hydraulic-hinge-main-section"  data-aos="zoom-in">
        <h1>HYDRAULIC HINGE SUPPLIER IN Lucknow</h1>
        <p>
            Being one of the most trusted Hydraulic Hinge suppliers, we render reliable door solutions that blend innovation with strength. Having a vast product range allows us to cater to the needs of architects, builders, and interior designers who seek high-quality hardware for modern construction and renovation projects.
        </p>
        <p>
            We have a strong supply network that ensures timely delivery with consistent quality and total client satisfaction. Every hinge is checked for precision, functionality, and endurance to ensure flawless performance in all applications, from glass doors and cabinets to heavy-duty commercial entrances.
        </p>

        <a href="contact.php" class="hydraulic-hinge-discuss-link">
            Request a Quote
            <div class="hydraulic-hinge-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="hydraulic-hinge-row"  data-aos="zoom-in">
            <!-- LEFT IMAGE -->
            <div class="hydraulic-hinge-left-img">
                <img src="../HYDRAULIC HINGE/Premium Hydraulic Hinge Solutions.png" alt="Hydraulic Hinge Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="hydraulic-hinge-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Hydraulic Hinge Solutions</h2>
                <p>
                    Our hydraulic hinges feature premium-quality stainless steel or zinc alloy body with adjustable closing and latching speed. They include anti-corrosion and moisture-resistant coatings for long-lasting performance in humid environments.
                </p>
                <p>
                    Designed to be compatible with framed and frameless glass doors, available in 90°, 135°, and 180° configurations. Features sleek, space-efficient design for modern interiors, tested for thousands of opening and closing cycles with ease of installation and maintenance access.
                </p>
                <p>
                    Our expert team works closely with clients to provide hinge solutions that combine advanced hydraulic technology with elegant design for superior door control.
                </p>
                <ul class="hydraulic-hinge-ul">
                    <li>Premium-quality stainless steel or zinc alloy body</li>
                    <li>Adjustable closing and latching speed</li>
                    <li>Anti-corrosion and moisture-resistant coating</li>
                    <li>Compatible with framed and frameless glass doors</li>
                    <li>90°, 135°, and 180° configurations available</li>
                    <li>Sleek, space-efficient design for modern interiors</li>
                    <li>Tested for thousands of opening and closing cycles</li>
                    <li>Ease of installation and access for maintenance</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="hydraulic-hinge-prod-section">
        <h2 class="hydraulic-hinge-prod-title">OUR HYDRAULIC HINGE PRODUCTS</h2>
        <div class="hydraulic-hinge-prod-grid">
            <!-- CARD 1 -->
            <div class="hydraulic-hinge-prod-card" onclick="hydraulicHingeProdOpenPopup('Precision Hydraulic Hinge','Precision Hydraulic Hinge – Engineered for smooth, silent, and controlled door movement with long-lasting durability and precise performance.','HYDRAULIC HINGE/Precision Hydraulic Hinge.webp')" data-aos="zoom-in"> 
                <img class="hydraulic-hinge-prod-card-img" src="../HYDRAULIC HINGE/Precision Hydraulic Hinge.webp">
                <div class="hydraulic-hinge-prod-card-info">
                    <h3>Precision Hydraulic Hinge</h3>
                    <p>Premium hydraulic Precision Hydraulic Hinge</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="hydraulic-hinge-prod-card" onclick="hydraulicHingeProdOpenPopup('Soft Close Hydraulic Hinge','Designed to ensure gentle, noise-free closing with enhanced safety, stability, and long-term reliability.','HYDRAULIC HINGE/Soft Close Hydraulic Hinge.jpg')" data-aos="zoom-in">
                <img class="hydraulic-hinge-prod-card-img" src="../HYDRAULIC HINGE/Soft Close Hydraulic Hinge.jpg">
                <div class="hydraulic-hinge-prod-card-info">
                    <h3>Soft Close Hydraulic Hinge</h3>
                    <p>Industrial-grade Soft Close Hydraulic Hinge</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="hydraulic-hinge-prod-card" onclick="hydraulicHingeProdOpenPopup('Adjustable Soft-Closing','Provides smooth, controlled, and silent door closing to prevent slamming and enhance durability.','HYDRAULIC HINGE/soft-closing.webp')" data-aos="zoom-in">
                <img class="hydraulic-hinge-prod-card-img" src="../HYDRAULIC HINGE/soft-closing.webp">
                <div class="hydraulic-hinge-prod-card-info">
                    <h3>Soft-Closing</h3>
                    <p>Advanced Soft-Closing</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="hydraulic-hinge-prod-popup" id="hydraulicHingeProdPopup">
        <span class="hydraulic-hinge-prod-close" onclick="hydraulicHingeProdClosePopup()">&times;</span>
        <div class="hydraulic-hinge-prod-popup-box">
            <img id="hydraulicHingeProdPopupImg" class="hydraulic-hinge-prod-popup-img">
            <div class="hydraulic-hinge-prod-popup-content">
                <h2 id="hydraulicHingeProdPopupTitle"></h2>
                <p id="hydraulicHingeProdPopupDesc"></p>
                <a href="contact.php" class="hydraulic-hinge-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="hydraulic-hinge-fund-section" data-aos="zoom-in">
        <div class="hydraulic-hinge-fund-container">
            <div class="hydraulic-hinge-fund-top-title">EXPORT QUALITY</div>
            <h2 class="hydraulic-hinge-fund-heading">HYDRAULIC HINGE EXPORTER IN Lucknow</h2>
            <p class="hydraulic-hinge-fund-desc">
                Being an established Hydraulic Hinge exporter, we are proud of delivering high-performance door hardware solutions to international clients who value quality, precision, and reliability. We manufacture export-grade hinges as per international standards, ensuring superior operation, aesthetic appeal, and long-term dependability.
            </p>
            
            <a href="contact.php" class="hydraulic-hinge-fund-link">
                International Enquiries
                <div class="hydraulic-hinge-fund-line"></div>
            </a>

            <div class="hydraulic-hinge-fund-card-wrap">
                <div class="hydraulic-hinge-fund-card">
                    <div class="hydraulic-hinge-fund-card-title">Global Standards</div>
                    <p>
                        We have clients all over the world in residential, commercial, and industrial sectors. Every export consignment is securely packed, strictly tested, and shipped with care to arrive safely and make for easy installation.
                    </p>
                    <hr>
                    <div class="hydraulic-hinge-fund-card-subtitle">Our Export Advantages:</div>
                    <ul class="hydraulic-hinge-fund-list">
                        <li>Manufactured as per international standards</li>
                        <li>Superior operation and aesthetic appeal</li>
                        <li>Secure packaging for international transit</li>
                        <li>Strict quality testing before shipment</li>
                    </ul>
                </div>

                <div class="hydraulic-hinge-fund-card">
                    <div class="hydraulic-hinge-fund-card-title">International Markets</div>
                    <p>
                        A focused commitment to technological innovation and detailed craftsmanship has won us a strong reputation as one of the most trustworthy names in architectural hardware exports.
                    </p>
                    <hr>
                    <div class="hydraulic-hinge-fund-card-subtitle">Global Reach:</div>
                    <ul class="hydraulic-hinge-fund-list">
                        <li>Residential projects worldwide</li>
                        <li>Commercial construction sectors</li>
                        <li>Industrial applications globally</li>
                        <li>Architectural hardware markets</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="hydraulic-hinge-product-slider" data-aos="zoom-in">

 
  <div class="hydraulic-hinge-product-images">
    <span class="hydraulic-hinge-stock">IN STOCK</span>

    <img src="../slim-partition/8.jpg" class="hydraulic-hinge-main-img" id="hydraulicHingeMainImg">

    <div class="hydraulic-hinge-thumbs">
      <img src="../slim-partition/8.jpg" class="active" data-index="0" onclick="changeHydraulicHingeProduct(this)">
      <img src="../slim-partition/9.jpg" data-index="1" onclick="changeHydraulicHingeProduct(this)">
      <img src="../slim-partition/10.jpg" data-index="2" onclick="changeHydraulicHingeProduct(this)">
      <img src="../slim-partition/11.jpg" data-index="3" onclick="changeHydraulicHingeProduct(this)">
      <img src="../slim-partition/12.jpg" data-index="4" onclick="changeHydraulicHingeProduct(this)">
    </div>
  </div>

 
  <div class="hydraulic-hinge-product-info">

    <h3 class="hydraulic-hinge-product-title" id="hydraulicHingeTitle">Hydraulic Glass Door Hinge</h3>
    <span class="hydraulic-hinge-category" id="hydraulicHingeCategory">Door Control System</span>

    <div class="hydraulic-hinge-price" id="hydraulicHingePrice">Custom Quote</div>

    <div class="hydraulic-hinge-rating" id="hydraulicHingeRating">★★★★★ (4.8)</div>

    <p class="hydraulic-hinge-desc" id="hydraulicHingeDesc">
      Premium hydraulic hinge for glass doors with adjustable closing speed. Features smooth, silent operation and corrosion-resistant construction.
    </p>

    <div class="hydraulic-hinge-sizes" id="hydraulicHingeSizes">
      <strong>Opening Angle:</strong><br>
      <span>90°</span><span>135°</span><span>180°</span>
      <span class="active">Adjustable</span>
    </div>

    <div class="hydraulic-hinge-colors" id="hydraulicHingeColors">
      <strong>Finish:</strong><br>
      <span style="background:#c6a98c"></span>
      <span style="background:#ffffff"></span>
      <span style="background:#1e90ff"></span>
    </div>

    <button class="hydraulic-hinge-cart-btn">+ REQUEST QUOTE</button>

  </div>

</section> -->

    <section class="janson-feature-section" id="jansonFeatureSection">
    <div class="janson-feature-wrapper">

        <!-- LEFT IMAGE -->
        <div class="janson-feature-image">
            <img src="../HYDRAULIC HINGE/7-Hidden-Silent-Door-Hinge-180-Degree-Swing-Hinge-3-Way-Adjustable-Butt-Hinge-7-X-2.8-X-1.avif" alt="Hydraulic Hinge Installation">
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
                    <h4><span>01</span> Advanced Hydraulic Technology</h4>
                    <p>Utilizes precision hydraulic mechanism for smooth, controlled door movement with adjustable speed settings.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">✔</div>
                <div>
                    <h4><span>02</span> Self-Closing Feature</h4>
                    <p>Automatically closes doors gently without slamming, ensuring safety and preventing damage to doors and frames.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⚙</div>
                <div>
                    <h4><span>03</span> Adjustable Settings</h4>
                    <p>Allows precise adjustment of closing speed and latching force to match specific door weight and usage requirements.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⬛</div>
                <div>
                    <h4><span>04</span> Corrosion Resistance</h4>
                    <p>Special coatings and premium materials provide excellent protection against moisture, humidity, and environmental factors.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">🏆</div>
                <div>
                    <h4><span>05</span> Long-Term Reliability</h4>
                    <p>Engineered for thousands of opening-closing cycles with minimal maintenance, ensuring consistent performance over years.</p>
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




    <section class="hydraulic-hinge-project-section" data-aos="zoom-in">
        <div class="hydraulic-hinge-project-container">
            <div class="hydraulic-hinge-project-left">
                <div class="hydraulic-hinge-project-subtitle">COMMERCIAL COMPLEX PROJECT</div>
                <h2 class="hydraulic-hinge-project-title">Shopping Mall Entrance Installation</h2>
                <p class="hydraulic-hinge-project-text">
                    A large shopping mall required reliable hydraulic hinges for their main entrance glass doors that could withstand heavy daily traffic while providing smooth, controlled operation. Our heavy-duty hydraulic hinges provided the perfect solution.
                </p>
                <p class="hydraulic-hinge-project-text">
                    The installation featured adjustable hydraulic hinges with 180° opening capability and self-closing mechanisms. Special attention was given to corrosion resistance for outdoor exposure and adjustable speed settings for different door weights.
                </p>
                <p class="hydraulic-hinge-project-text">
                    This project successfully equipped 8 main entrance doors with hydraulic hinge systems that have handled over 500,000 cycles with minimal maintenance and continue to operate flawlessly.
                </p>
                <ul class="hydraulic-hinge-project-list">
                    <li>Project Type: Shopping Mall Entrance</li>
                    <li>Product Type: Heavy Duty Hydraulic Hinges</li>
                    <li>Special Features: 180° Opening, Self-Closing, Adjustable Speed</li>
                    <li>Project Completion Time: 3 Weeks</li>
                </ul>
            </div>
            
            <div class="hydraulic-hinge-project-right">
                <img src="../HYDRAULIC HINGE/61bNP0tYdpL._AC_UF894,1000_QL80_.jpg" alt="Mall Entrance Hinge Project">
            </div>
        </div>
    </section>

    <section class="hydraulic-hinge-faq-section" data-aos="zoom-in">
        <h2 class="hydraulic-hinge-faq-title">HYDRAULIC HINGE FAQS</h2>
        <div class="hydraulic-hinge-faq-container">
            <div class="hydraulic-hinge-faq-item">
                <div class="hydraulic-hinge-faq-question">
                    How do hydraulic hinges differ from regular hinges?
                    <span class="hydraulic-hinge-faq-icon">⌄</span>
                </div>
                <div class="hydraulic-hinge-faq-answer">
                    Hydraulic hinges contain fluid-filled chambers that provide controlled, dampened movement, while regular hinges rely on friction or springs. Hydraulic hinges offer adjustable speed control, self-closing features, silent operation, and prevent door slamming. They're ideal for applications requiring precise door control and enhanced safety.
                </div>
            </div>

            <div class="hydraulic-hinge-faq-item">
                <div class="hydraulic-hinge-faq-question">
                    Can hydraulic hinges be adjusted for different door weights?
                    <span class="hydraulic-hinge-faq-icon">⌄</span>
                </div>  
                <div class="hydraulic-hinge-faq-answer">
                    Yes, most hydraulic hinges feature adjustable tension settings. By turning adjustment screws, you can increase or decrease hydraulic resistance to match door weight. Heavier doors require higher tension settings, while lighter doors need lower settings. We provide detailed adjustment guides for optimal performance.
                </div>
            </div>

            <div class="hydraulic-hinge-faq-item">
                <div class="hydraulic-hinge-faq-question">
                    What maintenance do hydraulic hinges require?
                    <span class="hydraulic-hinge-faq-icon">⌄</span>
                </div>
                <div class="hydraulic-hinge-faq-answer">
                    Regular cleaning of exterior surfaces with mild detergent. Check adjustment settings annually. Inspect for leaks or reduced performance. Avoid using oil-based lubricants on hydraulic components. Our hinges are designed for minimal maintenance, but professional servicing every 2-3 years is recommended for commercial applications.
                </div>
            </div>

            <div class="hydraulic-hinge-faq-item">
                <div class="hydraulic-hinge-faq-question">
                    Are hydraulic hinges suitable for outdoor applications?
                    <span class="hydraulic-hinge-faq-icon">⌄</span>
                </div>
                <div class="hydraulic-hinge-faq-answer">
                    Yes, we offer specially designed outdoor hydraulic hinges with enhanced corrosion resistance, weatherproof seals, and UV-resistant coatings. These models feature stainless steel construction and special hydraulic fluids that perform reliably in temperature extremes (-20°C to +60°C) and harsh weather conditions.
                </div>
            </div>
        </div>
        <button class="hydraulic-hinge-faq-btn">View All FAQs</button>
    </section>


    



    <script>
        function hydraulicHingeProdOpenPopup(title, desc, img){
            document.getElementById("hydraulicHingeProdPopupTitle").innerText = title;
            document.getElementById("hydraulicHingeProdPopupDesc").innerText = desc;
            document.getElementById("hydraulicHingeProdPopupImg").src = img;
            document.getElementById("hydraulicHingeProdPopup").classList.add("active");
        }

        function hydraulicHingeProdClosePopup(){
            document.getElementById("hydraulicHingeProdPopup").classList.remove("active");
        }

        const hydraulicHingeFaqItems = document.querySelectorAll(".hydraulic-hinge-faq-item");
        hydraulicHingeFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                hydraulicHingeFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });

 
const hydraulicHingeProducts = [
  {
    img:"slim-partition/8.jpg",
    title:"Hydraulic Glass Door Hinge",
    category:"Door Control System",
    price:"Custom Quote",
    rating:"★★★★★ (4.8)",
    desc:"Premium hydraulic hinge for glass doors with adjustable closing speed. Features smooth, silent operation and corrosion-resistant construction.",
    sizes:["90°","135°","180°","Adjustable"],
    activeSize:"Adjustable",
    colors:["#c6a98c","#ffffff","#1e90ff"]
  },
  {
    img:"slim-partition/9.jpg",
    title:"Heavy Duty Hydraulic Hinge",
    category:"Commercial Grade",
    price:"Custom Quote",
    rating:"★★★★☆ (4.7)",
    desc:"Industrial-grade hydraulic hinge for heavy commercial doors. Features enhanced load capacity and durable construction.",
    sizes:["90°","135°","180°"],
    activeSize:"180°",
    colors:["#c6a98c","#1e90ff"]
  },
  {
    img:"slim-partition/10.jpg",
    title:"Adjustable Tension Hinge",
    category:"Precision Control",
    price:"Custom Quote",
    rating:"★★★★★ (5.0)",
    desc:"Advanced hydraulic hinge with fully adjustable tension control. Perfect for precise door speed and closing force customization.",
    sizes:["90°","135°","Adjustable"],
    activeSize:"Adjustable",
    colors:["#c6a98c","#ffffff"]
  },
  {
    img:"slim-partition/11.jpg",
    title:"Outdoor Hydraulic Hinge",
    category:"Weather Resistant",
    price:"Custom Quote",
    rating:"★★★★☆ (4.8)",
    desc:"Specialized outdoor hydraulic hinge with enhanced corrosion resistance. Suitable for exterior doors and harsh environments.",
    sizes:["90°","135°","180°"],
    activeSize:"135°",
    colors:["#000000","#ffcc00"]
  },
  {
    img:"slim-partition/12.jpg",
    title:"Compact Hydraulic Hinge",
    category:"Space Efficient",
    price:"Custom Quote",
    rating:"★★★★☆ (4.6)",
    desc:"Compact hydraulic hinge for space-constrained applications. Features slim design with full hydraulic functionality.",
    sizes:["90°","135°","180°"],
    activeSize:"90°",
    colors:["#c6a98c","#1e90ff"]
  }
];

function changeHydraulicHingeProduct(el){
  const p = hydraulicHingeProducts[el.dataset.index];

  document.getElementById("hydraulicHingeMainImg").src = p.img;
  document.getElementById("hydraulicHingeTitle").innerText = p.title;
  document.getElementById("hydraulicHingeCategory").innerText = p.category;
  document.getElementById("hydraulicHingePrice").innerText = p.price;
  document.getElementById("hydraulicHingeRating").innerText = p.rating;
  document.getElementById("hydraulicHingeDesc").innerText = p.desc;

  const sizesBox = document.getElementById("hydraulicHingeSizes");
  sizesBox.innerHTML = "<strong>Opening Angle:</strong><br>";
  p.sizes.forEach(s=>{
    const span = document.createElement("span");
    span.innerText = s;
    if(s === p.activeSize) span.classList.add("active");
    sizesBox.appendChild(span);
  });

  const colorBox = document.getElementById("hydraulicHingeColors");
  colorBox.innerHTML = "<strong>Finish:</strong><br>";
  p.colors.forEach(c=>{
    const span = document.createElement("span");
    span.style.background = c;
    colorBox.appendChild(span);
  });

  document.querySelectorAll(".hydraulic-hinge-thumbs img")
    .forEach(img=>img.classList.remove("active"));
  el.classList.add("active");
}



    </script>
<?php include "footer.php"?>