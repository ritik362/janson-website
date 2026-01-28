<?php $page_title = "Spaider Fitting manufacturers in Faridabad";
$description = "As one of the leading Spaider Fitting manufacturers in Faridabad, we specialize in designing and producing high-performance glass façade fittings that embody excellent structural strength combined with architectural elegance. Our Spaider fittings are precisely engineered to provide both strong and stable support";
$keyword = "Spaider Fitting manufacturers in Faridabad,Spaider Fitting supplier in Faridabad,Spaider Fitting exporter in Faridabad, Best Spaider Fitting manufacturers in Faridabad, Top Spaider Fitting manufacturers in Faridabad, best Spaider Fitting supplier in Faridabad, Top Spaider Fitting supplier Faridabad, best Spaider Fitting exporter in Faridabad, Top Spaider Fitting exporter in Faridabad,Spaider Fitting manufacturers,Best Spaider Fitting manufacturers,Top Spaider Fitting manufacturers, Spaider Fitting supplier,Best Spaider Fitting supplier, Top Spaider Fitting supplier,Spaider Fitting exporter,Best Spaider Fitting exporter,Top Spaider Fitting exporter";
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
        .spaider-fitting-hero-section {
            position: relative;
            width: 100%;
            height: 760px;
            overflow: hidden;
            margin-top: -90px;
        }

        .spaider-fitting-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .spaider-fitting-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .spaider-fitting-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .spaider-fitting-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* WHITE CONTENT BOX - UNIQUE CLASS */
        .spaider-fitting-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -81px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .spaider-fitting-content-wrapper {
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .spaider-fitting-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .spaider-fitting-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .spaider-fitting-hero-content h1 {
                font-size: 32px;
            }

            .spaider-fitting-content-wrapper {
                grid-template-columns: 1fr;
            }
        }


        /* BENEFITS SECTION - UNIQUE CLASS */
        .spaider-fitting-benefits-wrapper {
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING - UNIQUE CLASS */
        .spaider-fitting-card {
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

        .spaider-fitting-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .spaider-fitting-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL - UNIQUE CLASS */
        .spaider-fitting-tag {
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
        .spaider-fitting-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE - UNIQUE CLASS */
        .spaider-fitting-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .spaider-fitting-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN - UNIQUE CLASS */
        .spaider-fitting-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE - UNIQUE CLASS */
        .spaider-fitting-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .spaider-fitting-benefits-wrapper {
                flex-direction: column;
            }

            .spaider-fitting-plus,
            .spaider-fitting-dotted-line {
                display: none;
            }
        }


        /* MAIN SECTION - UNIQUE CLASS */
        .spaider-fitting-main-section {
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE - UNIQUE CLASS */
        .spaider-fitting-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH - UNIQUE CLASS */
        .spaider-fitting-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK - UNIQUE CLASS */
        .spaider-fitting-discuss-link {
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

        .spaider-fitting-discuss-link:hover {
            color: var(--text-heading);
        }

        .spaider-fitting-discuss-link .spaider-fitting-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW - UNIQUE CLASS */
        .spaider-fitting-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE - UNIQUE CLASS */
        .spaider-fitting-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT - UNIQUE CLASS */
        .spaider-fitting-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .spaider-fitting-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .spaider-fitting-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .spaider-fitting-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS - UNIQUE CLASS */
        .spaider-fitting-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .spaider-fitting-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .spaider-fitting-row {
                flex-direction: column;
            }

            .spaider-fitting-left-img img {
                width: 100%;
                height: auto;
            }

            .spaider-fitting-main-section h1 {
                font-size: 30px;
            }

            .spaider-fitting-main-section {
                padding: 50px 20px;
            }
        }


    /* UNIQUE CONTAINER - RENAMED */
    .spaider-fitting-prod-section{
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .spaider-fitting-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* UNIQUE GRID - RENAMED */
    .spaider-fitting-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* UNIQUE CARD - RENAMED */
    .spaider-fitting-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .spaider-fitting-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .spaider-fitting-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .spaider-fitting-prod-card-info{
        padding:15px;
    }

    .spaider-fitting-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .spaider-fitting-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* UNIQUE POPUP - RENAMED */
    .spaider-fitting-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .spaider-fitting-prod-popup.active{
        display:flex;
    }

    .spaider-fitting-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:spaiderFittingProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes spaiderFittingProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .spaider-fitting-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .spaider-fitting-prod-popup-content{
        padding:20px;
    }

    .spaider-fitting-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .spaider-fitting-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .spaider-fitting-prod-btn{
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

    .spaider-fitting-prod-btn:hover {
        background-color: #b5987a;
    }

    .spaider-fitting-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }


    
    /* SECTION WRAPPER - RENAMED */
    .spaider-fitting-fund-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .spaider-fitting-fund-container{
        padding: 0px 50px;
        margin:auto;
    }

    .spaider-fitting-fund-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .spaider-fitting-fund-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .spaider-fitting-fund-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .spaider-fitting-fund-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .spaider-fitting-fund-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP - RENAMED */
    .spaider-fitting-fund-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD - RENAMED */
    .spaider-fitting-fund-card{
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

    .spaider-fitting-fund-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .spaider-fitting-fund-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .spaider-fitting-fund-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .spaider-fitting-fund-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .spaider-fitting-fund-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST - RENAMED */
    .spaider-fitting-fund-list{
        list-style:none;
        padding-left:0;
    }

    .spaider-fitting-fund-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .spaider-fitting-fund-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .spaider-fitting-fund-card-wrap{
            flex-direction:column;
        }
        .spaider-fitting-fund-card{
            min-width:100%;
        }
    }


       /* MAIN WRAPPER - RENAMED */
    .spaider-fitting-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .spaider-fitting-project-container{
        max-width: 1550px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT - RENAMED */
    .spaider-fitting-project-left{
        flex:1;
    }

    .spaider-fitting-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .spaider-fitting-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .spaider-fitting-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS - RENAMED */
    .spaider-fitting-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .spaider-fitting-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .spaider-fitting-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE - RENAMED */
    .spaider-fitting-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .spaider-fitting-project-container{
            flex-direction:column;
        }

        .spaider-fitting-project-right img{
            width:100%;
            height:auto;
        }

        
    }



     /* ===============================
   JANSON SPAIDER FITTING (EXACT)
================================ */

#jansonSpaiderFittingWrapper {
    padding: 80px 5%;
    background: var(--primary-color);
    font-family: var(--font-primary);
}

.janson-spaider-fitting-inner {
    max-width: 1450px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1.35fr 1fr 80px;
    gap: 40px;
    align-items: center;
}

/* COMMON BOX */
.janson-spaider-fitting-box {
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
    .janson-spaider-fitting-inner {
        grid-template-columns: 1fr;
    }

    .janson-vertical-strip {
        writing-mode: horizontal-tb;
        transform: none;
        margin-top: 20px;
    }
}


    
    /* SECTION BACKGROUND - RENAMED */
    .spaider-fitting-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE - RENAMED */
    .spaider-fitting-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER - RENAMED */
    .spaider-fitting-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM - RENAMED */
    .spaider-fitting-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .spaider-fitting-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .spaider-fitting-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON - RENAMED */
    .spaider-fitting-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT - RENAMED */
    .spaider-fitting-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .spaider-fitting-faq-item.active .spaider-fitting-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE - RENAMED */
    .spaider-fitting-faq-item.active .spaider-fitting-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON - RENAMED */
    .spaider-fitting-faq-btn{
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

    .spaider-fitting-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    @media (min-width:300px) and (max-width:700px){
    .spaider-fitting-fund-container{
        padding: 0px !important;
    }
}
.spaider-fitting-hero-content h5{
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


.spaider-fitting-product-slider{
display:flex;
gap:40px;
padding:60px;
align-items:center;
}

/* LEFT */
.spaider-fitting-product-images{
position:relative;
flex:1;
background:linear-gradient(145deg,#0d0d0d,#1c1c1c);
border-radius:12px;
padding:40px;
text-align:center;
}

.spaider-fitting-stock{
position:absolute;
top:20px;
left:20px;
opacity:0.3;
letter-spacing:2px;
}

.spaider-fitting-main-img{
width:80%;
transition:0.3s;
}

.spaider-fitting-thumbs{
display:flex;
justify-content:center;
gap:15px;
margin-top:20px;
flex-wrap:wrap;
}

.spaider-fitting-thumbs img{
width:60px;
cursor:pointer;
opacity:0.6;
border-radius:8px;
}

.spaider-fitting-thumbs img.active,
.spaider-fitting-thumbs img:hover{
opacity:1;
transform:scale(1.1);
}

/* RIGHT */
.spaider-fitting-product-info{
flex:1;
background:var(--primary-light);
padding:35px;
border-radius:12px;
box-shadow:var(--shadow-medium);
}

.spaider-fitting-product-title{
font-size:26px;
color:var(--text-heading);
}

.spaider-fitting-category{
font-size:13px;
opacity:0.7;
}

.spaider-fitting-price{
font-size:28px;
margin:12px 0;
color:var(--secondary-color);
}

.spaider-fitting-rating{
color:gold;
margin-bottom:12px;
}

.spaider-fitting-desc{
font-size:14px;
line-height:1.6;
margin-bottom:18px;
color:var(--text-color);
}

.spaider-fitting-sizes span{
display:inline-block;
border:1px solid var(--border-color);
padding:6px 10px;
margin:6px 6px 0 0;
cursor:pointer;
border-radius:6px;
}

.spaider-fitting-sizes span.active{
background:var(--secondary-color);
color:#000;
}

.spaider-fitting-colors span{
display:inline-block;
width:18px;
height:18px;
border-radius:50%;
margin:8px 8px 0 0;
border:1px solid #555;
}

.spaider-fitting-cart-btn{
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
.spaider-fitting-product-slider{
flex-direction:column;
}
}


    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="spaider-fitting-hero-section"  data-aos="zoom-in">
        <img src="../slim-partition/WhatsApp Image 2025-12-24 at 6.30.17 PM (1).jpeg" alt="Spaider Fitting Background">
        <div class="spaider-fitting-hero-content">
            <h5>SPAIDER FITTING SYSTEMS</h5>
            <h1>PRECISION FITTINGS FOR MODERN GLASS FAÇADES</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="spaider-fitting-content-box"  data-aos="zoom-in">
        <div class="spaider-fitting-content-wrapper">
            <div>
                <h2 class="spaider-fitting-content-title">SPAIDER FITTING MANUFACTURER IN Faridabad</h2>
            </div>
            <div class="spaider-fitting-content-text">
                <p>
                    As one of the leading Spaider Fitting manufacturers, we specialize in designing and producing high-performance glass façade fittings that embody excellent structural strength combined with architectural elegance. Our Spaider fittings are precisely engineered to provide both strong and stable support for frameless glass assemblies while maintaining their sleek and minimalistic appearance.
                </p>
                <p>
                    Made from high-grade stainless steel, every fitting guarantees superlative durability and resistance to corrosion, along with smooth finishing. Meant for modern architectural uses, our Spaider fittings allow the fixing of large glass panels securely, making for expanses and visually stunning glass structures. These fittings are ideal for commercial buildings, airports, malls, showrooms, and modern residences where transparency and sophistication are key.
                </p>
                <p>
                    We use advanced manufacturing technology and follow strict quality checks so that each Spaider fitting delivers uncompromising performance, safety, and aesthetic value, conforming to global standards of excellence in architectural hardware.
                </p>
            </div>
        </div>
    </section>

    <div class="spaider-fitting-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="spaider-fitting-card"  data-aos="zoom-in">
            <div class="spaider-fitting-tag">Benefits</div>
            <img class="spaider-fitting-icon" src="https://cdn-icons-png.flaticon.com/512/992/992651.png">
            <div class="spaider-fitting-card-title">MODERN AESTHETICS</div>
            <p>
                It creates a very modern aesthetic appeal, giving a frameless look into glass fronts. High Structural Strength: It can bear the load of big and heavy glass panels.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="spaider-fitting-plus">+</div>

        <!-- CARD 2 -->
        <div class="spaider-fitting-card" data-aos="zoom-in">
            <div class="spaider-fitting-tag">Benefits</div>
            <img class="spaider-fitting-icon" src="https://cdn-icons-png.flaticon.com/512/3430/3430447.png">
            <div class="spaider-fitting-card-title">CORROSION RESISTANT</div>
            <p>
                Corrosion-resistant: Made of high-quality stainless steel, which can be used both outdoors and indoors. Weatherproof & Durable: Engineered to resist harsh environmental conditions.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="spaider-fitting-dotted-line"  data-aos="zoom-in"></div>

        <!-- CARD 3 -->
        <div class="spaider-fitting-card spaider-fitting-right-card" data-aos="zoom-in">
            <div class="spaider-fitting-tag">Applications</div>
            <img class="spaider-fitting-icon" src="https://cdn-icons-png.flaticon.com/512/456/456177.png">
            <div class="spaider-fitting-card-title">VERSATILE APPLICATIONS</div>
            <p>
                Flexible Design Options: Available in 1-way, 2-way, 3-way, and 4-way configurations. Easy Installation: Designed for precision alignment and long-term stability. Low Maintenance: Maintains shine and strength with minimal upkeep over time.
            </p>
        </div>
    </div>

<section class="janson-spaider-fitting-wrapper" id="jansonSpaiderFittingWrapper">
    <div class="janson-spaider-fitting-inner">

        <!-- LEFT IMAGE -->
        <div class="janson-spaider-fitting-box janson-left-box">
            <div class="janson-img-holder">
                <img src="../spider-fitting/single-point-fixings.webp" alt="Single Point Spaider Fitting">
            </div>
            <p class="janson-label">SINGLE POINT FITTING</p>
        </div>

        <!-- CENTER IMAGE -->
        <div class="janson-spaider-fitting-box janson-center-box">

            <div class="janson-top-logo">
                <span class="janson-logo-je">JE</span>
                <span class="janson-logo-text">JANSON EXPORTS</span>
            </div>

            <div class="janson-img-holder big-img">
                <img src="../spider-fitting/glass-spider-fittings-200mm-size-803007920-6tf9soao.avif" alt="Multi-Arm Spaider Fitting">
            </div>
            <p class="janson-label">MULTI-ARM SPAIDER FITTING</p>

            <div class="janson-bni-badge">BNI MEMBER</div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="janson-spaider-fitting-box janson-right-box">
            <div class="janson-img-holder">
                <img src="../spider-fitting/Durable & Stylish.avif" alt="Heavy Duty Spaider Fitting">
            </div>
            <p class="janson-label">Durable & Stylish</p>
        </div>

        <!-- RIGHT VERTICAL BAR -->
        <div class="janson-vertical-strip">
            <span>SPAIDER FITTING</span>
            <span>SUBCATEGORIES</span>
        </div>

    </div>
</section>

    

    <section class="spaider-fitting-main-section"  data-aos="zoom-in">
        <h1>SPAIDER FITTING SUPPLIER IN Faridabad</h1>
        <p>
            As one of the reliable Spaider Fitting suppliers in this area of service provision, we provide top-notch façade hardware solutions personalized to the needs of architects, builders, and other construction professionals. An efficient supply chain ensures timely availability for projects that range from small glass partitions to large-scale structural façades.
        </p>
        <p>
            We are aware of the technical and aesthetic demands of present-day architecture and therefore provide fittings that beautifully combine beauty, safety, and endurance. Each product supplied is thoroughly inspected to ensure dimensional accuracy, strength, and flawless surface finish for complete client satisfaction and project success.
        </p>

        <a href="contact.php" class="spaider-fitting-discuss-link">
            Request a Quote
            <div class="spaider-fitting-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="spaider-fitting-row"  data-aos="zoom-in">
            <!-- LEFT IMAGE -->
            <div class="spaider-fitting-left-img">
                <img src="../spider-fitting/maxresdefault.jpg" alt="Spaider Fitting Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="spaider-fitting-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Spaider Fitting Solutions</h2>
                <p>
                    Construction in premium stainless steel - SS 304/316 grade. Available in single-point, double-point, and multi-arm variants. Mirror, matte, and satin finish options available.
                </p>
                <p>
                    High load-bearing capacity for large glass panels. Excellent weather, moisture, and corrosion resistance. Compatible with glass thicknesses ranging from 10mm up to 19mm.
                </p>
                <p>
                    Structural stability and performance under pressure tested. Easy integration with tension rods and glass connectors.
                </p>
                <ul class="spaider-fitting-ul">
                    <li>Construction in premium stainless steel - SS 304/316 grade</li>
                    <li>Available in single-point, double-point, and multi-arm variants</li>
                    <li>Mirror, matte, and satin finish options available</li>
                    <li>High load-bearing capacity for large glass panels</li>
                    <li>Excellent weather, moisture, and corrosion resistance</li>
                    <li>Compatible with glass thicknesses ranging from 10mm up to 19mm</li>
                    <li>Structural stability and performance under pressure tested</li>
                    <li>Easy integration with tension rods and glass connectors</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="spaider-fitting-prod-section">
        <h2 class="spaider-fitting-prod-title">OUR SPAIDER FITTING PRODUCTS</h2>
        <div class="spaider-fitting-prod-grid">
            <!-- CARD 1 -->
            <div class="spaider-fitting-prod-card" onclick="spaiderFittingProdOpenPopup('spider-fitting','A premium glass fixing system that provides strong support, precise alignment, and a sleek, modern architectural finish.','spider-fitting/spider-fitting-500x500.webp')" data-aos="zoom-in"> 
                <img class="spaider-fitting-prod-card-img" src="../spider-fitting/spider-fitting-500x500.webp">
                <div class="spaider-fitting-prod-card-info">
                    <h3>spider-fitting</h3>
                    <p>Minimalist design for clean glass façades</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="spaider-fitting-prod-card" onclick="spaiderFittingProdOpenPopup('Two-Way-Arm-Design-Stainless-Steel','A robust and corrosion-resistant fitting designed to securely support glass panels with a clean, modern appearance.','spider-fitting/Fixed-Glass-Connector-Two-Way-Arm-Design-Stainless-Steel-Spider-Ss316.avif')" data-aos="zoom-in">
                <img class="spaider-fitting-prod-card-img" src="../spider-fitting/Fixed-Glass-Connector-Two-Way-Arm-Design-Stainless-Steel-Spider-Ss316.avif">
                <div class="spaider-fitting-prod-card-info">
                    <h3>Two-Way-Arm-Design-Stainless-Steel</h3>
                    <p>Enhanced structural support and stability</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="spaider-fitting-prod-card" onclick="spaiderFittingProdOpenPopup('Steel-Glass-Holder-Spider','A strong and stylish stainless-steel fitting that securely holds glass panels while maintaining a sleek, modern look.','spider-fitting/Steel-Glass-Holder-Spider.webp')" data-aos="zoom-in">
                <img class="spaider-fitting-prod-card-img" src="../spider-fitting/Steel-Glass-Holder-Spider.webp">
                <div class="spaider-fitting-prod-card-info">
                    <h3>Steel-Glass-Holder-Spider</h3>
                    <p>Multi-directional for complex structures</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="spaider-fitting-prod-popup" id="spaiderFittingProdPopup">
        <span class="spaider-fitting-prod-close" onclick="spaiderFittingProdClosePopup()">&times;</span>
        <div class="spaider-fitting-prod-popup-box">
            <img id="spaiderFittingProdPopupImg" class="spaider-fitting-prod-popup-img">
            <div class="spaider-fitting-prod-popup-content">
                <h2 id="spaiderFittingProdPopupTitle"></h2>
                <p id="spaiderFittingProdPopupDesc"></p>
                <a href="contact.php" class="spaider-fitting-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="spaider-fitting-fund-section" data-aos="zoom-in">
        <div class="spaider-fitting-fund-container">
            <div class="spaider-fitting-fund-top-title">EXPORT QUALITY</div>
            <h2 class="spaider-fitting-fund-heading">SPAIDER FITTING EXPORTER IN Faridabad</h2>
            <p class="spaider-fitting-fund-desc">
                We are a reputed exporter of Spaider Fitting and are committed to delivering world-class architectural fittings to clients across international markets. Our export-grade fittings are manufactured with superior precision, conforming to global standards pertaining to safety, design, and durability.
            </p>
            
            <a href="contact.php" class="spaider-fitting-fund-link">
                International Enquiries
                <div class="spaider-fitting-fund-line"></div>
            </a>

            <div class="spaider-fitting-fund-card-wrap">
                <div class="spaider-fitting-fund-card">
                    <div class="spaider-fitting-fund-card-title">Global Standards</div>
                    <p>
                        We are targeting international architects, façade consultants, and construction firms that require quality hardware for contemporary glass architecture. Every consignment is carefully packed for safe delivery and easy installation.
                    </p>
                    <hr>
                    <div class="spaider-fitting-fund-card-subtitle">Our Export Advantages:</div>
                    <ul class="spaider-fitting-fund-list">
                        <li>Manufactured to international safety standards</li>
                        <li>Superior precision engineering</li>
                        <li>Customization for global architectural needs</li>
                        <li>Thorough quality checks before export</li>
                    </ul>
                </div>

                <div class="spaider-fitting-fund-card">
                    <div class="spaider-fitting-fund-card-title">International Markets</div>
                    <p>
                        In fact, customization, innovation, and quality stand on the three pillars that firmly establish us as a reliable partner in the architectural hardware industry worldwide. With a commitment to excellence backed by years of expertise, we are a preferred exporter of Spaider fittings that combine strength, style, and sustainability.
                    </p>
                    <hr>
                    <div class="spaider-fitting-fund-card-subtitle">Global Reach:</div>
                    <ul class="spaider-fitting-fund-list">
                        <li>International architects worldwide</li>
                        <li>Façade consultants and designers</li>
                        <li>Global construction firms</li>
                        <li>Architectural hardware specialists</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="spaider-fitting-product-slider" data-aos="zoom-in">

  
  <div class="spaider-fitting-product-images">
    <span class="spaider-fitting-stock">IN STOCK</span>

    <img src="../slim-partition/8.jpg" class="spaider-fitting-main-img" id="spaiderFittingMainImg">

    <div class="spaider-fitting-thumbs">
      <img src="../slim-partition/8.jpg" class="active" data-index="0" onclick="changeSpaiderFittingProduct(this)">
      <img src="../slim-partition/9.jpg" data-index="1" onclick="changeSpaiderFittingProduct(this)">
      <img src="../slim-partition/10.jpg" data-index="2" onclick="changeSpaiderFittingProduct(this)">
      <img src="../slim-partition/11.jpg" data-index="3" onclick="changeSpaiderFittingProduct(this)">
      <img src="../slim-partition/12.jpg" data-index="4" onclick="changeSpaiderFittingProduct(this)">
    </div>
  </div>

 
  <div class="spaider-fitting-product-info">

    <h3 class="spaider-fitting-product-title" id="spaiderFittingTitle">Single Point Spaider Fitting</h3>
    <span class="spaider-fitting-category" id="spaiderFittingCategory">Architectural Hardware</span>

    <div class="spaider-fitting-price" id="spaiderFittingPrice">Custom Quote</div>

    <div class="spaider-fitting-rating" id="spaiderFittingRating">★★★★★ (4.8)</div>

    <p class="spaider-fitting-desc" id="spaiderFittingDesc">
      Premium stainless steel spaider fitting with corrosion-resistant finish. Features minimalist design and heavy-duty construction for modern glass façades.
    </p>

    <div class="spaider-fitting-sizes" id="spaiderFittingSizes">
      <strong>Configuration:</strong><br>
      <span>1-Way</span><span>2-Way</span><span>3-Way</span>
      <span class="active">4-Way</span>
    </div>

    <div class="spaider-fitting-colors" id="spaiderFittingColors">
      <strong>Finish:</strong><br>
      <span style="background:#c6a98c"></span>
      <span style="background:#ffffff"></span>
      <span style="background:#1e90ff"></span>
    </div>

    <button class="spaider-fitting-cart-btn">+ REQUEST QUOTE</button>

  </div>

</section> -->

    <section class="janson-feature-section" id="jansonFeatureSection">
    <div class="janson-feature-wrapper">

        
        <div class="janson-feature-image">
            <img src="../spider-fitting/glass-spider-fitting (1).jpg" alt="Spaider Fitting Installation">
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
                    <h4><span>01</span> Structural Strength</h4>
                    <p>Engineered to bear heavy loads of large glass panels with superior structural integrity and stability.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">✔</div>
                <div>
                    <h4><span>02</span> Weather Resistance</h4>
                    <p>Special coatings and high-grade stainless steel provide excellent protection against harsh environmental conditions.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⚙</div>
                <div>
                    <h4><span>03</span> Precision Alignment</h4>
                    <p>Designed for precise installation with alignment features that simplify mounting on frameless glass structures.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⬛</div>
                <div>
                    <h4><span>04</span> Heavy Duty Construction</h4>
                    <p>Manufactured from premium SS 304/316 grade stainless steel to support large glass panels with long-lasting performance.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">🏆</div>
                <div>
                    <h4><span>05</span> Versatile Configurations</h4>
                    <p>Available in 1-way, 2-way, 3-way, and 4-way configurations to suit different architectural designs and requirements.</p>
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




    <section class="spaider-fitting-project-section" data-aos="zoom-in">
        <div class="spaider-fitting-project-container">
            <div class="spaider-fitting-project-left">
                <div class="spaider-fitting-project-subtitle">COMMERCIAL TOWER PROJECT</div>
                <h2 class="spaider-fitting-project-title">Premium Glass Façade Installation</h2>
                <p class="spaider-fitting-project-text">
                    A modern commercial tower required premium spaider fittings for their extensive glass façade system. Our stainless steel spaider fittings were selected for their superior structural strength and minimalist aesthetic appeal in contemporary architecture.
                </p>
                <p class="spaider-fitting-project-text">
                    The installation featured 4-way spaider fittings with high load-bearing capacity for 15mm thick tempered glass panels. Special attention was given to weather-resistant coatings and precise alignment to maintain the sleek, frameless appearance of the building exterior.
                </p>
                <p class="spaider-fitting-project-text">
                    This project successfully equipped 200+ glass panels across the tower façade with reliable fitting systems that have performed flawlessly for over 3 years with minimal maintenance requirements.
                </p>
                <ul class="spaider-fitting-project-list">
                    <li>Project Type: Commercial Office Tower</li>
                    <li>Product Type: 4-Way Spaider Fittings</li>
                    <li>Special Features: High Load Capacity, Weather-Resistant</li>
                    <li>Project Completion Time: 8 Weeks</li>
                </ul>
            </div>
            
            <div class="spaider-fitting-project-right">
                <img src="../spider-fitting/spider-glass-fitting-500x500.webp" alt="Commercial Tower Façade Project">
            </div>
        </div>
    </section>

    <section class="spaider-fitting-faq-section" data-aos="zoom-in">
        <h2 class="spaider-fitting-faq-title">SPAIDER FITTING FAQS</h2>
        <div class="spaider-fitting-faq-container">
            <div class="spaider-fitting-faq-item">
                <div class="spaider-fitting-faq-question">
                    What thickness of glass can your spaider fittings support?
                    <span class="spaider-fitting-faq-icon">⌄</span>
                </div>
                <div class="spaider-fitting-faq-answer">
                    Our spaider fittings are designed to support glass thickness from 10mm to 19mm. For standard commercial applications, 12-15mm glass is recommended. For large-scale structural façades or heavy-duty applications, 15-19mm glass with our heavy-duty fitting models provides optimal stability and safety.
                </div>
            </div>

            <div class="spaider-fitting-faq-item">
                <div class="spaider-fitting-faq-question">
                    How do spaider fittings perform in outdoor environments?
                    <span class="spaider-fitting-faq-icon">⌄</span>
                </div>  
                <div class="spaider-fitting-faq-answer">
                    Our spaider fittings are manufactured from SS 304/316 grade stainless steel with special weather-resistant coatings. They are engineered to withstand harsh environmental conditions including rain, UV exposure, temperature variations, and pollution without corrosion or degradation of performance.
                </div>
            </div>

            <div class="spaider-fitting-faq-item">
                <div class="spaider-fitting-faq-question">
                    Can spaider fittings be adjusted after installation?
                    <span class="spaider-fitting-faq-icon">⌄</span>
                </div>
                <div class="spaider-fitting-faq-answer">
                    Yes, our spaider fittings feature adjustable alignment mechanisms. Both horizontal and vertical adjustments can be made using standard tools to ensure perfect glass panel alignment. We provide detailed adjustment guides and technical support for complex installations.
                </div>
            </div>

            <div class="spaider-fitting-faq-item">
                <div class="spaider-fitting-faq-question">
                    What is the lifespan of spaider fittings in commercial buildings?
                    <span class="spaider-fitting-faq-icon">⌄</span>
                </div>
                <div class="spaider-fitting-faq-answer">
                    Our commercial-grade spaider fittings are tested for structural integrity under extreme conditions. In typical commercial settings (office towers, malls, airports), they provide 15-20 years of maintenance-free operation. Proper installation and occasional inspection ensure long-term performance and safety.
                </div>
            </div>
        </div>
        <button class="spaider-fitting-faq-btn">View All FAQs</button>
    </section>

    <script>
        function spaiderFittingProdOpenPopup(title, desc, img){
            document.getElementById("spaiderFittingProdPopupTitle").innerText = title;
            document.getElementById("spaiderFittingProdPopupDesc").innerText = desc;
            document.getElementById("spaiderFittingProdPopupImg").src = img;
            document.getElementById("spaiderFittingProdPopup").classList.add("active");
        }

        function spaiderFittingProdClosePopup(){
            document.getElementById("spaiderFittingProdPopup").classList.remove("active");
        }

        const spaiderFittingFaqItems = document.querySelectorAll(".spaider-fitting-faq-item");
        spaiderFittingFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                spaiderFittingFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });

 
const spaiderFittingProducts = [
  {
    img:"slim-partition/8.jpg",
    title:"Single Point Spaider Fitting",
    category:"Architectural Hardware",
    price:"Custom Quote",
    rating:"★★★★★ (4.8)",
    desc:"Premium single-point spaider fitting with corrosion-resistant finish. Features minimalist design and heavy-duty construction for modern glass façades.",
    sizes:["1-Way","2-Way","3-Way","4-Way"],
    activeSize:"4-Way",
    colors:["#c6a98c","#ffffff","#1e90ff"]
  },
  {
    img:"slim-partition/9.jpg",
    title:"Double Arm Spaider Fitting",
    category:"Structural Hardware",
    price:"Custom Quote",
    rating:"★★★★☆ (4.7)",
    desc:"Dual-arm configuration spaider fitting for enhanced structural support and stability in glass façade systems.",
    sizes:["1-Way","2-Way","3-Way"],
    activeSize:"3-Way",
    colors:["#c6a98c","#1e90ff"]
  },
  {
    img:"slim-partition/10.jpg",
    title:"Heavy Duty Spaider Fitting",
    category:"Commercial Grade",
    price:"Custom Quote",
    rating:"★★★★★ (5.0)",
    desc:"Industrial-grade spaider fitting for large glass panels and commercial applications. Features enhanced load capacity and durability.",
    sizes:["1-Way","2-Way","3-Way"],
    activeSize:"3-Way",
    colors:["#c6a98c","#ffffff"]
  },
  {
    img:"slim-partition/11.jpg",
    title:"Adjustable Spaider Fitting",
    category:"Premium Architectural",
    price:"Custom Quote",
    rating:"★★★★☆ (4.8)",
    desc:"Advanced spaider fitting with adjustable alignment for perfect glass panel installation. Allows customization of structural configuration.",
    sizes:["1-Way","2-Way","Adjustable"],
    activeSize:"Adjustable",
    colors:["#000000","#ffcc00"]
  },
  {
    img:"slim-partition/12.jpg",
    title:"Matte Black Spaider Fitting",
    category:"Contemporary Design",
    price:"Custom Quote",
    rating:"★★★★☆ (4.6)",
    desc:"Modern matte black finish spaider fitting for contemporary architectural designs. Features scratch-resistant coating and sleek appearance.",
    sizes:["1-Way","2-Way","3-Way"],
    activeSize:"2-Way",
    colors:["#c6a98c","#1e90ff"]
  }
];

function changeSpaiderFittingProduct(el){
  const p = spaiderFittingProducts[el.dataset.index];

  document.getElementById("spaiderFittingMainImg").src = p.img;
  document.getElementById("spaiderFittingTitle").innerText = p.title;
  document.getElementById("spaiderFittingCategory").innerText = p.category;
  document.getElementById("spaiderFittingPrice").innerText = p.price;
  document.getElementById("spaiderFittingRating").innerText = p.rating;
  document.getElementById("spaiderFittingDesc").innerText = p.desc;

  const sizesBox = document.getElementById("spaiderFittingSizes");
  sizesBox.innerHTML = "<strong>Configuration:</strong><br>";
  p.sizes.forEach(s=>{
    const span = document.createElement("span");
    span.innerText = s;
    if(s === p.activeSize) span.classList.add("active");
    sizesBox.appendChild(span);
  });

  const colorBox = document.getElementById("spaiderFittingColors");
  colorBox.innerHTML = "<strong>Finish:</strong><br>";
  p.colors.forEach(c=>{
    const span = document.createElement("span");
    span.style.background = c;
    colorBox.appendChild(span);
  });

  document.querySelectorAll(".spaider-fitting-thumbs img")
    .forEach(img=>img.classList.remove("active"));
  el.classList.add("active");
}



    </script>
<?php include "footer.php"?>