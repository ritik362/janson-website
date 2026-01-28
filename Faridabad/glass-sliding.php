<?php $page_title = "Glass Sliding manufacturers in Faridabad";
$description = "As one of the leading Glass Sliding manufacturers in Faridabad, we specialize in designing and producing elegant, durable, and innovative sliding systems that enhance the aesthetics and functionality of modern interiors. Our glass sliding systems are engineered to ensure smooth";
$keyword = "Glass Sliding manufacturers in Faridabad,Glass Sliding supplier in Faridabad,Glass Sliding exporter in Faridabad, Best Glass Sliding manufacturers in Faridabad, Top Glass Sliding manufacturers in Faridabad, best Glass Sliding supplier in Faridabad, Top Glass Sliding supplier Faridabad, best Glass Sliding exporter in Faridabad, Top Glass Sliding exporter in Faridabad,Glass Sliding manufacturers,Best Glass Sliding manufacturers,Top Glass Sliding manufacturers, Glass Sliding supplier,Best Glass Sliding supplier, Top Glass Sliding supplier,Glass Sliding exporter,Best Glass Sliding exporter,Top Glass Sliding exporter";
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
        .glass-sliding-hero-section {
            position: relative;
            width: 100%;
            height: 760px;
            overflow: hidden;
            margin-top: -90px;
        }

        .glass-sliding-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .glass-sliding-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .glass-sliding-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .glass-sliding-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* WHITE CONTENT BOX - UNIQUE CLASS */
        .glass-sliding-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -81px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .glass-sliding-content-wrapper {
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .glass-sliding-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .glass-sliding-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .glass-sliding-hero-content h1 {
                font-size: 32px;
            }

            .glass-sliding-content-wrapper {
                grid-template-columns: 1fr;
            }
        }


        /* BENEFITS SECTION - UNIQUE CLASS */
        .glass-sliding-benefits-wrapper {
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
        .glass-sliding-card {
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

        .glass-sliding-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .glass-sliding-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL - UNIQUE CLASS */
        .glass-sliding-tag {
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
        .glass-sliding-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE - UNIQUE CLASS */
        .glass-sliding-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .glass-sliding-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN - UNIQUE CLASS */
        .glass-sliding-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE - UNIQUE CLASS */
        .glass-sliding-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .glass-sliding-benefits-wrapper {
                flex-direction: column;
            }

            .glass-sliding-plus,
            .glass-sliding-dotted-line {
                display: none;
            }
        }


        /* MAIN SECTION - UNIQUE CLASS */
        .glass-sliding-main-section {
            /* max-width: 1400px; */
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE - UNIQUE CLASS */
        .glass-sliding-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH - UNIQUE CLASS */
        .glass-sliding-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK - UNIQUE CLASS */
        .glass-sliding-discuss-link {
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

        .glass-sliding-discuss-link:hover {
            color: var(--text-heading);
        }

        .glass-sliding-discuss-link .glass-sliding-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW - UNIQUE CLASS */
        .glass-sliding-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE - UNIQUE CLASS */
        .glass-sliding-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT - UNIQUE CLASS */
        .glass-sliding-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .glass-sliding-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .glass-sliding-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .glass-sliding-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS - UNIQUE CLASS */
        .glass-sliding-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .glass-sliding-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .glass-sliding-row {
                flex-direction: column;
            }

            .glass-sliding-left-img img {
                width: 100%;
                height: auto;
            }

            .glass-sliding-main-section h1 {
                font-size: 30px;
            }

            .glass-sliding-main-section {
                padding: 50px 20px;
            }
        }


    /* UNIQUE CONTAINER - RENAMED */
    .glass-sliding-prod-section{
        /* max-width: 1400px; */
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .glass-sliding-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* UNIQUE GRID - RENAMED */
    .glass-sliding-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* UNIQUE CARD - RENAMED */
    .glass-sliding-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .glass-sliding-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .glass-sliding-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .glass-sliding-prod-card-info{
        padding:15px;
    }

    .glass-sliding-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .glass-sliding-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* UNIQUE POPUP - RENAMED */
    .glass-sliding-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .glass-sliding-prod-popup.active{
        display:flex;
    }

    .glass-sliding-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:glassSlidingProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes glassSlidingProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .glass-sliding-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .glass-sliding-prod-popup-content{
        padding:20px;
    }

    .glass-sliding-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .glass-sliding-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .glass-sliding-prod-btn{
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

    .glass-sliding-prod-btn:hover {
        background-color: #b5987a;
    }

    .glass-sliding-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }


    
    /* SECTION WRAPPER - RENAMED */
    .glass-sliding-fund-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .glass-sliding-fund-container{
        /* max-width: 1400px; */
        padding: 0px 50px;
        margin:auto;
    }

    .glass-sliding-fund-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .glass-sliding-fund-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .glass-sliding-fund-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .glass-sliding-fund-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .glass-sliding-fund-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP - RENAMED */
    .glass-sliding-fund-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD - RENAMED */
    .glass-sliding-fund-card{
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

    .glass-sliding-fund-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .glass-sliding-fund-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .glass-sliding-fund-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .glass-sliding-fund-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .glass-sliding-fund-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST - RENAMED */
    .glass-sliding-fund-list{
        list-style:none;
        padding-left:0;
    }

    .glass-sliding-fund-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .glass-sliding-fund-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .glass-sliding-fund-card-wrap{
            flex-direction:column;
        }
        .glass-sliding-fund-card{
            min-width:100%;
        }
    }


       /* MAIN WRAPPER - RENAMED */
    .glass-sliding-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .glass-sliding-project-container{
        max-width: 1550px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT - RENAMED */
    .glass-sliding-project-left{
        flex:1;
    }

    .glass-sliding-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .glass-sliding-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .glass-sliding-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS - RENAMED */
    .glass-sliding-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .glass-sliding-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .glass-sliding-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE - RENAMED */
    .glass-sliding-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .glass-sliding-project-container{
            flex-direction:column;
        }

        .glass-sliding-project-right img{
            width:100%;
            height:auto;
        }

        
    }



     /* ===============================
   JANSON GLASS SLIDING (EXACT)
================================ */

#jansonGlassSlidingWrapper {
    padding: 80px 5%;
    background: var(--primary-color);
    font-family: var(--font-primary);
}

.janson-glass-sliding-inner {
    max-width: 1450px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1.35fr 1fr 80px;
    gap: 40px;
    align-items: center;
}

/* COMMON BOX */
.janson-glass-sliding-box {
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
    .janson-glass-sliding-inner {
        grid-template-columns: 1fr;
    }

    .janson-vertical-strip {
        writing-mode: horizontal-tb;
        transform: none;
        margin-top: 20px;
    }
}


    
    /* SECTION BACKGROUND - RENAMED */
    .glass-sliding-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE - RENAMED */
    .glass-sliding-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER - RENAMED */
    .glass-sliding-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM - RENAMED */
    .glass-sliding-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .glass-sliding-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .glass-sliding-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON - RENAMED */
    .glass-sliding-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT - RENAMED */
    .glass-sliding-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .glass-sliding-faq-item.active .glass-sliding-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE - RENAMED */
    .glass-sliding-faq-item.active .glass-sliding-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON - RENAMED */
    .glass-sliding-faq-btn{
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

    .glass-sliding-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    @media (min-width:300px) and (max-width:700px){
    .glass-sliding-fund-container{
        padding: 0px !important;
    }
}
.glass-sliding-hero-content h5{
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


.glass-sliding-product-slider{
display:flex;
gap:40px;
padding:60px;
align-items:center;
}

/* LEFT */
.glass-sliding-product-images{
position:relative;
flex:1;
background:linear-gradient(145deg,#0d0d0d,#1c1c1c);
border-radius:12px;
padding:40px;
text-align:center;
}

.glass-sliding-stock{
position:absolute;
top:20px;
left:20px;
opacity:0.3;
letter-spacing:2px;
}

.glass-sliding-main-img{
width:80%;
transition:0.3s;
}

.glass-sliding-thumbs{
display:flex;
justify-content:center;
gap:15px;
margin-top:20px;
flex-wrap:wrap;
}

.glass-sliding-thumbs img{
width:60px;
cursor:pointer;
opacity:0.6;
border-radius:8px;
}

.glass-sliding-thumbs img.active,
.glass-sliding-thumbs img:hover{
opacity:1;
transform:scale(1.1);
}

/* RIGHT */
.glass-sliding-product-info{
flex:1;
background:var(--primary-light);
padding:35px;
border-radius:12px;
box-shadow:var(--shadow-medium);
}

.glass-sliding-product-title{
font-size:26px;
color:var(--text-heading);
}

.glass-sliding-category{
font-size:13px;
opacity:0.7;
}

.glass-sliding-price{
font-size:28px;
margin:12px 0;
color:var(--secondary-color);
}

.glass-sliding-rating{
color:gold;
margin-bottom:12px;
}

.glass-sliding-desc{
font-size:14px;
line-height:1.6;
margin-bottom:18px;
color:var(--text-color);
}

.glass-sliding-sizes span{
display:inline-block;
border:1px solid var(--border-color);
padding:6px 10px;
margin:6px 6px 0 0;
cursor:pointer;
border-radius:6px;
}

.glass-sliding-sizes span.active{
background:var(--secondary-color);
color:#000;
}

.glass-sliding-colors span{
display:inline-block;
width:18px;
height:18px;
border-radius:50%;
margin:8px 8px 0 0;
border:1px solid #555;
}

.glass-sliding-cart-btn{
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
.glass-sliding-product-slider{
flex-direction:column;
}
}


    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="glass-sliding-hero-section"  data-aos="zoom-in">
        <img src="../slim-partition/WhatsApp Image 2025-12-24 at 6.30.17 PM (1).jpeg" alt="Glass Sliding Background">
        <div class="glass-sliding-hero-content">
            <h5>GLASS SLIDING SYSTEMS</h5>
            <h1>ELEGANT SLIDING SOLUTIONS FOR MODERN INTERIORS</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="glass-sliding-content-box"  data-aos="zoom-in">
        <div class="glass-sliding-content-wrapper">
            <div>
                <h2 class="glass-sliding-content-title">GLASS SLIDING MANUFACTURER IN Faridabad</h2>
            </div>
            <div class="glass-sliding-content-text">
                <p>
                    As one of the leading Glass Sliding manufacturers, we specialize in designing and producing elegant, durable, and innovative sliding systems that enhance the aesthetics and functionality of modern interiors. Our glass sliding systems are engineered to ensure smooth, silent, and effortless operation while maximizing space utilisation and adding a touch of contemporary sophistication.
                </p>
                <p>
                    Each of the sliding systems is made with superior-quality materials such as toughened glass, aluminum, and stainless steel hardware for high strength, precision, and durability. Our glass sliding doors and partitions create a bright, open atmosphere in offices, residential spaces, commercial complexes, and hospitality environments.
                </p>
                <p>
                    We have state-of-the-art manufacturing facilities and are committed to excellence to ensure every product meets the highest standards of quality, design, and functionality.
                </p>
            </div>
        </div>
    </section>

    <div class="glass-sliding-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="glass-sliding-card"  data-aos="zoom-in">
            <div class="glass-sliding-tag">Benefits</div>
            <img class="glass-sliding-icon" src="https://cdn-icons-png.flaticon.com/512/992/992651.png">
            <div class="glass-sliding-card-title">SPACE OPTIMIZATION</div>
            <p>
                Suitable for compact areas, thus allowing for movement without door swing space. Elegant Design: Adds a modern and minimalist touch to any interior setting.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="glass-sliding-plus">+</div>

        <!-- CARD 2 -->
        <div class="glass-sliding-card" data-aos="zoom-in">
            <div class="glass-sliding-tag">Benefits</div>
            <img class="glass-sliding-icon" src="https://cdn-icons-png.flaticon.com/512/3430/3430447.png">
            <div class="glass-sliding-card-title">SMOOTH OPERATION</div>
            <p>
                Smooth Operation: It is fitted with high-quality rollers and tracks, ensuring smooth movement. Noise-Free Mechanism: With a guarantee of silent, smooth functioning for ultimate comfort.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="glass-sliding-dotted-line"  data-aos="zoom-in"></div>

        <!-- CARD 3 -->
        <div class="glass-sliding-card glass-sliding-right-card" data-aos="zoom-in">
            <div class="glass-sliding-tag">Applications</div>
            <img class="glass-sliding-icon" src="https://cdn-icons-png.flaticon.com/512/456/456177.png">
            <div class="glass-sliding-card-title">VERSATILE APPLICATIONS</div>
            <p>
                Easy to clean and maintain, holding clarity and brilliance for years. Custom Solutions: Available in many sizes, different glass finishes, and a variety of frames to suit any style.
            </p>
        </div>
    </div>

<section class="janson-glass-sliding-wrapper" id="jansonGlassSlidingWrapper">
    <div class="janson-glass-sliding-inner">

        <!-- LEFT IMAGE -->
        <div class="janson-glass-sliding-box janson-left-box">
            <div class="janson-img-holder">
                <img src="../glass-sliding/Tempered Glass Panel.avif" alt="Frameless Glass Sliding">
            </div>
            <p class="janson-label">Tempered Glass Panel</p>
        </div>

        <!-- CENTER IMAGE -->
        <div class="janson-glass-sliding-box janson-center-box">

            <div class="janson-top-logo">
                <span class="janson-logo-je">JE</span>
                <span class="janson-logo-text">JANSON EXPORTS</span>
            </div>

            <div class="janson-img-holder big-img">
                <img src="../glass-sliding/Glass Clamp.avif" alt="Office Glass Sliding">
            </div>
            <p class="janson-label">Glass Clamp</p>

            <div class="janson-bni-badge">BNI MEMBER</div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="janson-glass-sliding-box janson-right-box">
            <div class="janson-img-holder">
                <img src="../glass-sliding/Heavy-Duty Roller Assembly.jpg" alt="Pocket Glass Sliding">
            </div>
            <p class="janson-label">Heavy-Duty Roller Assembly</p>
        </div>

        <!-- RIGHT VERTICAL BAR -->
        <div class="janson-vertical-strip">
            <span>GLASS SLIDING</span>
            <span>SUBCATEGORIES</span>
        </div>

    </div>
</section>




    

    <section class="glass-sliding-main-section"  data-aos="zoom-in">
        <h1>GLASS SLIDING SUPPLIER IN Faridabad</h1>
        <p>
            As one of the trusted Glass Sliding suppliers, we provide top-quality sliding door and partition systems to meet all requirements of architects, interior designers, and builders. Our effective supply chain and client-oriented approach bring timely delivery and complete satisfaction for every project.
        </p>
        <p>
            We provide sliding glass systems for residential and commercial use—flexible, elegant, and functional. Every product supplied is carefully checked to ensure quality, safety, and ease in operation, therefore making us the first choice supplier for various industries.
        </p>

        <a href="contact.php" class="glass-sliding-discuss-link">
            Request a Quote
            <div class="glass-sliding-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="glass-sliding-row"  data-aos="zoom-in">
            <!-- LEFT IMAGE -->
            <div class="glass-sliding-left-img">
                <img src="../glass-sliding/Image.jpg" alt="Glass Sliding Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="glass-sliding-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Glass Sliding Solutions</h2>
                <p>
                    Our glass sliding systems feature premium toughened or laminated glass panels with high-grade aluminum or stainless steel sliding tracks. They include smooth, soft-closing, and anti-jump mechanisms for superior performance.
                </p>
                <p>
                    Available in different designs including frameless, semi-framed, or fully framed options with clear, frosted, tinted, or decorative glass finishes. Designed for easy installation with minimal visible hardware and corrosion-resistant components.
                </p>
                <p>
                    Our expert team works closely with clients to provide sliding solutions suitable for residential, commercial, and hospitality applications that combine elegance with functionality.
                </p>
                <ul class="glass-sliding-ul">
                    <li>Premium toughened or laminated glass panels</li>
                    <li>High-grade aluminum or stainless steel sliding tracks</li>
                    <li>Smooth, soft-closing, and anti-jump mechanisms</li>
                    <li>Different designs are available: frameless, semi-framed, or fully framed</li>
                    <li>Available in clear, frosted, tinted, or decorative glass finishes</li>
                    <li>Easy to install, with minimal visible hardware</li>
                    <li>Corrosion and wear-resistant components</li>
                    <li>Suitable for residential, commercial and hospitality applications</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="glass-sliding-prod-section">
        <h2 class="glass-sliding-prod-title">OUR GLASS SLIDING PRODUCTS</h2>
        <div class="glass-sliding-prod-grid">
            <!-- CARD 1 -->
            <div class="glass-sliding-prod-card" onclick="glassSlidingProdOpenPopup('Sliding Glass Shutter','A Sliding Glass Shutter is a modern and space-efficient glass solution designed for smooth and effortless operation.','glass-sliding/Sliding Glass Shutter.avif')" data-aos="zoom-in"> 
                <img class="glass-sliding-prod-card-img" src="../glass-sliding/Sliding Glass Shutter.avif">
                <div class="glass-sliding-prod-card-info">
                    <h3>Sliding Glass Shutter</h3>
                    <p>Modern Sliding Glass Shutte</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="glass-sliding-prod-card" onclick="glassSlidingProdOpenPopup('Patch Fitting','A precision-engineered hardware component designed to securely hold and support glass panels while ensuring strength, stability, and a clean, modern finish.','glass-sliding/Patch Fitting.jpg')" data-aos="zoom-in">
                <img class="glass-sliding-prod-card-img" src="../glass-sliding/Patch Fitting.jpg">
                <div class="glass-sliding-prod-card-info">
                    <h3>Patch Fitting</h3>
                    <p>A precision-engineered hardware.....</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="glass-sliding-prod-card" onclick="glassSlidingProdOpenPopup('Glass Sliding Panel','A sleek tempered glass panel designed for smooth sliding operation, offering durability, safety, and a modern aesthetic for residential and commercial spaces.','glass-sliding/Glass Sliding Panel.jpg')" data-aos="zoom-in">
                <img class="glass-sliding-prod-card-img" src="../glass-sliding/Glass Sliding Panel.jpg">
                <div class="glass-sliding-prod-card-info">
                    <h3>Glass Sliding Panel</h3>
                    <p>Space-saving hidden track system</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="glass-sliding-prod-popup" id="glassSlidingProdPopup">
        <span class="glass-sliding-prod-close" onclick="glassSlidingProdClosePopup()">&times;</span>
        <div class="glass-sliding-prod-popup-box">
            <img id="glassSlidingProdPopupImg" class="glass-sliding-prod-popup-img">
            <div class="glass-sliding-prod-popup-content">
                <h2 id="glassSlidingProdPopupTitle"></h2>
                <p id="glassSlidingProdPopupDesc"></p>
                <a href="contact.php" class="glass-sliding-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="glass-sliding-fund-section" data-aos="zoom-in">
        <div class="glass-sliding-fund-container">
            <div class="glass-sliding-fund-top-title">EXPORT QUALITY</div>
            <h2 class="glass-sliding-fund-heading">GLASS SLIDING EXPORTER IN Faridabad</h2>
            <p class="glass-sliding-fund-desc">
                As an esteemed Glass Sliding exporter, we are proud to offer world-class sliding glass systems to global markets that promise superior quality, style, and performance. Our export-grade sliding solutions are engineered in compliance with international standards, making them ideal for contemporary architectural and interior design projects.
            </p>
            
            <a href="contact.php" class="glass-sliding-fund-link">
                International Enquiries
                <div class="glass-sliding-fund-line"></div>
            </a>

            <div class="glass-sliding-fund-card-wrap">
                <div class="glass-sliding-fund-card">
                    <div class="glass-sliding-fund-card-title">Global Standards</div>
                    <p>
                        We offer complete export services, from design customization and quality testing to safe packaging and timely delivery, in order to make the entire process hassle-free for our international clients.
                    </p>
                    <hr>
                    <div class="glass-sliding-fund-card-subtitle">Our Export Advantages:</div>
                    <ul class="glass-sliding-fund-list">
                        <li>Engineered to international compliance standards</li>
                        <li>Superior quality, style, and performance</li>
                        <li>Design customization for global markets</li>
                        <li>Safe packaging and timely delivery</li>
                    </ul>
                </div>

                <div class="glass-sliding-fund-card">
                    <div class="glass-sliding-fund-card-title">International Markets</div>
                    <p>
                        Our commitment to innovation, reliability, and excellence makes us a well-reputed name among overseas partners seeking high-performance glass sliding systems for modern spaces.
                    </p>
                    <hr>
                    <div class="glass-sliding-fund-card-subtitle">Global Reach:</div>
                    <ul class="glass-sliding-fund-list">
                        <li>Contemporary architectural projects</li>
                        <li>Global interior design markets</li>
                        <li>Commercial and residential sectors</li>
                        <li>Hospitality and retail industries</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="glass-sliding-product-slider" data-aos="zoom-in">

  
  <div class="glass-sliding-product-images">
    <span class="glass-sliding-stock">IN STOCK</span>

    <img src="../slim-partition/8.jpg" class="glass-sliding-main-img" id="glassSlidingMainImg">

    <div class="glass-sliding-thumbs">
      <img src="../slim-partition/8.jpg" class="active" data-index="0" onclick="changeGlassSlidingProduct(this)">
      <img src="../slim-partition/9.jpg" data-index="1" onclick="changeGlassSlidingProduct(this)">
      <img src="../slim-partition/10.jpg" data-index="2" onclick="changeGlassSlidingProduct(this)">
      <img src="../slim-partition/11.jpg" data-index="3" onclick="changeGlassSlidingProduct(this)">
      <img src="../slim-partition/12.jpg" data-index="4" onclick="changeGlassSlidingProduct(this)">
    </div>
  </div>

 
  <div class="glass-sliding-product-info">

    <h3 class="glass-sliding-product-title" id="glassSlidingTitle">Frameless Glass Sliding Door</h3>
    <span class="glass-sliding-category" id="glassSlidingCategory">Space Saving System</span>

    <div class="glass-sliding-price" id="glassSlidingPrice">Custom Quote</div>

    <div class="glass-sliding-rating" id="glassSlidingRating">★★★★★ (4.9)</div>

    <p class="glass-sliding-desc" id="glassSlidingDesc">
      Premium frameless glass sliding door system with smooth operation. Features high-quality rollers and tracks for silent, effortless movement.
    </p>

    <div class="glass-sliding-sizes" id="glassSlidingSizes">
      <strong>Track Type:</strong><br>
      <span>Single Track</span><span>Double Track</span><span>Pocket Track</span>
      <span class="active">Custom</span>
    </div>

    <div class="glass-sliding-colors" id="glassSlidingColors">
      <strong>Glass Finish:</strong><br>
      <span style="background:#c6a98c"></span>
      <span style="background:#ffffff"></span>
      <span style="background:#1e90ff"></span>
    </div>

    <button class="glass-sliding-cart-btn">+ REQUEST QUOTE</button>

  </div>

</section> -->

    <section class="janson-feature-section" id="jansonFeatureSection">
    <div class="janson-feature-wrapper">

        <!-- LEFT IMAGE -->
        <div class="janson-feature-image">
            <img src="../glass-sliding/Image.jpg" alt="Glass Sliding Installation">
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
                    <h4><span>01</span> Space Optimization</h4>
                    <p>Maximizes usable space by eliminating door swing areas, perfect for compact interiors and open-plan designs.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">✔</div>
                <div>
                    <h4><span>02</span> Smooth Operation</h4>
                    <p>High-quality roller systems with precision bearings ensure effortless, silent sliding with minimal maintenance.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⚙</div>
                <div>
                    <h4><span>03</span> Customization Options</h4>
                    <p>Available in various glass types, frame styles, and track configurations to match any interior design requirement.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⬛</div>
                <div>
                    <h4><span>04</span> Durable Construction</h4>
                    <p>Manufactured from toughened glass and corrosion-resistant hardware for long-lasting performance and reliability.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">🏆</div>
                <div>
                    <h4><span>05</span> Modern Aesthetics</h4>
                    <p>Sleek, minimalist designs that enhance visual appeal while maintaining functionality and ease of use.</p>
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




    <section class="glass-sliding-project-section" data-aos="zoom-in">
        <div class="glass-sliding-project-container">
            <div class="glass-sliding-project-left">
                <div class="glass-sliding-project-subtitle">CORPORATE OFFICE PROJECT</div>
                <h2 class="glass-sliding-project-title">Tech Company Headquarters</h2>
                <p class="glass-sliding-project-text">
                    A leading technology company required flexible workspace solutions for their new headquarters. Our frameless glass sliding partitions provided the perfect solution, creating adaptable meeting spaces while maintaining an open, collaborative environment.
                </p>
                <p class="glass-sliding-project-text">
                    The installation featured custom-sized sliding panels with acoustic insulation and smooth pocket track systems. Special attention was given to noise reduction features and easy operation for frequent daily use by employees.
                </p>
                <p class="glass-sliding-project-text">
                    This project successfully transformed 30,000 sq. ft. of office space into dynamic, flexible work areas that can be reconfigured based on daily needs while maintaining aesthetic consistency.
                </p>
                <ul class="glass-sliding-project-list">
                    <li>Project Type: Corporate Headquarters</li>
                    <li>Product Type: Frameless Glass Sliding Partitions</li>
                    <li>Special Features: Acoustic Insulation, Pocket Track</li>
                    <li>Project Completion Time: 6 Weeks</li>
                </ul>
            </div>
            
            <div class="glass-sliding-project-right">
                <img src="../glass-sliding/Fixed Glass Panel.jpg" alt="Office Glass Sliding Project">
            </div>
        </div>
    </section>

    <section class="glass-sliding-faq-section" data-aos="zoom-in">
        <h2 class="glass-sliding-faq-title">GLASS SLIDING FAQS</h2>
        <div class="glass-sliding-faq-container">
            <div class="glass-sliding-faq-item">
                <div class="glass-sliding-faq-question">
                    What are the main types of glass sliding systems available?
                    <span class="glass-sliding-faq-icon">⌄</span>
                </div>
                <div class="glass-sliding-faq-answer">
                    We offer three main types: Frameless systems (minimal hardware, maximum visibility), Semi-framed (partial framing for added stability), and Fully-framed (complete aluminum framing). Additionally, we provide pocket sliding (doors disappear into walls), surface-mounted, and ceiling-hung systems for different applications.
                </div>
            </div>

            <div class="glass-sliding-faq-item">
                <div class="glass-sliding-faq-question">
                    How much weight can glass sliding systems support?
                    <span class="glass-sliding-faq-icon">⌄</span>
                </div>  
                <div class="glass-sliding-faq-answer">
                    Our standard systems support 60-100kg per panel depending on track type. Heavy-duty commercial systems can support 150-200kg per panel. Weight capacity depends on glass thickness, track quality, roller specifications, and installation method. We provide detailed specifications for each application.
                </div>
            </div>

            <div class="glass-sliding-faq-item">
                <div class="glass-sliding-faq-question">
                    Can glass sliding doors be soundproof?
                    <span class="glass-sliding-faq-icon">⌄</span>
                </div>
                <div class="glass-sliding-faq-answer">
                    Yes, we offer specialized acoustic sliding systems with laminated glass and special seals that provide up to 40-45 dB sound reduction. These systems feature overlapping panels, brush seals, and specialized tracks that minimize sound transmission while maintaining smooth operation.
                </div>
            </div>

            <div class="glass-sliding-faq-item">
                <div class="glass-sliding-faq-question">
                    What maintenance do glass sliding systems require?
                    <span class="glass-sliding-faq-icon">⌄</span>
                </div>
                <div class="glass-sliding-faq-answer">
                    Regular cleaning of glass and tracks with mild detergent. Track cleaning every 3-6 months to remove debris. Roller lubrication with silicone spray annually. Check and tighten hardware annually. Avoid abrasive cleaners on glass and tracks. Our systems are designed for minimal maintenance with easy-access components.
                </div>
            </div>
        </div>
        <button class="glass-sliding-faq-btn">View All FAQs</button>
    </section>


    



    <script>
        function glassSlidingProdOpenPopup(title, desc, img){
            document.getElementById("glassSlidingProdPopupTitle").innerText = title;
            document.getElementById("glassSlidingProdPopupDesc").innerText = desc;
            document.getElementById("glassSlidingProdPopupImg").src = img;
            document.getElementById("glassSlidingProdPopup").classList.add("active");
        }

        function glassSlidingProdClosePopup(){
            document.getElementById("glassSlidingProdPopup").classList.remove("active");
        }

        const glassSlidingFaqItems = document.querySelectorAll(".glass-sliding-faq-item");
        glassSlidingFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                glassSlidingFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });

 
const glassSlidingProducts = [
  {
    img:"slim-partition/8.jpg",
    title:"Frameless Glass Sliding Door",
    category:"Space Saving System",
    price:"Custom Quote",
    rating:"★★★★★ (4.9)",
    desc:"Premium frameless glass sliding door system with smooth operation. Features high-quality rollers and tracks for silent, effortless movement.",
    sizes:["Single Track","Double Track","Pocket Track","Custom"],
    activeSize:"Custom",
    colors:["#c6a98c","#ffffff","#1e90ff"]
  },
  {
    img:"slim-partition/9.jpg",
    title:"Office Glass Sliding Partition",
    category:"Commercial System",
    price:"Custom Quote",
    rating:"★★★★☆ (4.7)",
    desc:"Professional office sliding partition with acoustic features. Creates flexible workspaces while maintaining visual connectivity.",
    sizes:["Single Track","Double Track","Ceiling Hung"],
    activeSize:"Double Track",
    colors:["#c6a98c","#1e90ff"]
  },
  {
    img:"slim-partition/10.jpg",
    title:"Pocket Glass Sliding System",
    category:"Space Efficient Design",
    price:"Custom Quote",
    rating:"★★★★★ (5.0)",
    desc:"Advanced pocket sliding system where doors disappear into walls. Perfect for space-constrained interiors and modern designs.",
    sizes:["Single Panel","Double Panel","Custom"],
    activeSize:"Double Panel",
    colors:["#c6a98c","#ffffff"]
  },
  {
    img:"slim-partition/11.jpg",
    title:"Acoustic Glass Sliding Wall",
    category:"Sound Insulation System",
    price:"Custom Quote",
    rating:"★★★★☆ (4.8)",
    desc:"Specialized acoustic sliding system with enhanced sound insulation. Ideal for conference rooms and noisy environments.",
    sizes:["Single Track","Double Track","Custom"],
    activeSize:"Double Track",
    colors:["#000000","#ffcc00"]
  },
  {
    img:"slim-partition/12.jpg",
    title:"Heavy Duty Glass Sliding",
    category:"Commercial Grade",
    price:"Custom Quote",
    rating:"★★★★☆ (4.6)",
    desc:"Industrial-grade sliding system for heavy glass panels and commercial applications. Features enhanced load capacity and durability.",
    sizes:["Single Track","Double Track","Custom"],
    activeSize:"Custom",
    colors:["#c6a98c","#1e90ff"]
  }
];

function changeGlassSlidingProduct(el){
  const p = glassSlidingProducts[el.dataset.index];

  document.getElementById("glassSlidingMainImg").src = p.img;
  document.getElementById("glassSlidingTitle").innerText = p.title;
  document.getElementById("glassSlidingCategory").innerText = p.category;
  document.getElementById("glassSlidingPrice").innerText = p.price;
  document.getElementById("glassSlidingRating").innerText = p.rating;
  document.getElementById("glassSlidingDesc").innerText = p.desc;

  const sizesBox = document.getElementById("glassSlidingSizes");
  sizesBox.innerHTML = "<strong>Track Type:</strong><br>";
  p.sizes.forEach(s=>{
    const span = document.createElement("span");
    span.innerText = s;
    if(s === p.activeSize) span.classList.add("active");
    sizesBox.appendChild(span);
  });

  const colorBox = document.getElementById("glassSlidingColors");
  colorBox.innerHTML = "<strong>Glass Finish:</strong><br>";
  p.colors.forEach(c=>{
    const span = document.createElement("span");
    span.style.background = c;
    colorBox.appendChild(span);
  });

  document.querySelectorAll(".glass-sliding-thumbs img")
    .forEach(img=>img.classList.remove("active"));
  el.classList.add("active");
}



    </script>
<?php include "footer.php"?>