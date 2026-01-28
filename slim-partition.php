<?php $page_title = "Slim Partitions manufacturer in india";
$description = "As a reputed Slim Partitions manufacturer in India, we pride ourselves on offering modern, sleek, and durable partition systems that transform any interior into an elegant and functional space. Our slim partitions are precision-made";
$keyword = "Slim Partitions manufacturers in India,Slim Partitions supplier in India,Slim Partitions exporter in India, Best Slim Partitions manufacturers in India, Top Slim Partitions manufacturers in India, best Slim Partitions supplier in India, Top Slim Partitions supplier India, best Slim Partitions exporter in India, Top Slim Partitions exporter in india,Slim Partitions manufacturers,Best Slim Partitions manufacturers,Top Slim Partitions manufacturers, Slim Partitions supplier,Best Slim Partitions supplier, Top Slim Partitions supplier,Slim Partitions exporter,Best Slim Partitions exporter,Top Slim Partitions exporter";
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
            /* --slim-container-width: 1400px; CHANGED NAME */
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
        .slim-hero-section {
            position: relative;
            width: 100%;
            height: 760px;
            overflow: hidden;
            margin-top: -90px;
            
        
        }

        .slim-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* filter: brightness(0.5); */
        }

        .slim-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .slim-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .slim-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* WHITE CONTENT BOX - UNIQUE CLASS */
        .slim-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -81px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .slim-content-wrapper {
            /* max-width: var(--slim-container-width); */
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .slim-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .slim-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .slim-hero-content h1 {
                font-size: 32px;
            }

            .slim-content-wrapper {
                grid-template-columns: 1fr;
            }
        }


        /* BENEFITS SECTION - UNIQUE CLASS */
        .slim-benefits-wrapper {
            max-width: var(--slim-container-width);
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING - UNIQUE CLASS */
        .slim-card {
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

        .slim-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .slim-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL - UNIQUE CLASS */
        .slim-tag {
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
        .slim-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE - UNIQUE CLASS */
        .slim-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .slim-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN - UNIQUE CLASS */
        .slim-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE - UNIQUE CLASS */
        .slim-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .slim-benefits-wrapper {
                flex-direction: column;
            }

            .slim-plus,
            .slim-dotted-line {
                display: none;
            }
        }


        /* MAIN SECTION - UNIQUE CLASS */
        .slim-main-section {
            max-width: var(--slim-container-width);
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE - UNIQUE CLASS */
        .slim-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH - UNIQUE CLASS */
        .slim-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK - UNIQUE CLASS */
        .slim-discuss-link {
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

        .slim-discuss-link:hover {
            color: var(--text-heading);
        }

        .slim-discuss-link .slim-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW - UNIQUE CLASS */
        .slim-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE - UNIQUE CLASS */
        .slim-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT - UNIQUE CLASS */
        .slim-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .slim-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .slim-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .slim-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS - UNIQUE CLASS */
        .slim-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .slim-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .slim-row {
                flex-direction: column;
            }

            .slim-left-img img {
                width: 100%;
                height: auto;
            }

            .slim-main-section h1 {
                font-size: 30px;
            }

            .slim-main-section {
                padding: 50px 20px;
            }
        }


    /* UNIQUE CONTAINER - RENAMED */
    .slim-prod-section{
        max-width: var(--slim-container-width);
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .slim-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* UNIQUE GRID - RENAMED */
    .slim-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* UNIQUE CARD - RENAMED */
    .slim-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .slim-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .slim-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .slim-prod-card-info{
        padding:15px;
    }

    .slim-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .slim-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* UNIQUE POPUP - RENAMED */
    .slim-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .slim-prod-popup.active{
        display:flex;
    }

    .slim-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:slimProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes slimProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .slim-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .slim-prod-popup-content{
        padding:20px;
    }

    .slim-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .slim-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .slim-prod-btn{
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

    .slim-prod-btn:hover {
        background-color: #b5987a;
    }

    .slim-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }


    
    /* SECTION WRAPPER - RENAMED */
    .slim-fund-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .slim-fund-container{
        max-width: var(--slim-container-width);
        padding: 0px 50px;
        margin:auto;
    }

    .slim-fund-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .slim-fund-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .slim-fund-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .slim-fund-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .slim-fund-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP - RENAMED */
    .slim-fund-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD - RENAMED */
    .slim-fund-card{
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

    .slim-fund-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .slim-fund-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .slim-fund-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .slim-fund-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .slim-fund-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST - RENAMED */
    .slim-fund-list{
        list-style:none;
        padding-left:0;
    }

    .slim-fund-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .slim-fund-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .slim-fund-card-wrap{
            flex-direction:column;
        }
        .slim-fund-card{
            min-width:100%;
        }
    }


       /* MAIN WRAPPER - RENAMED */
    .slim-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .slim-project-container{
        max-width: 1350px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT - RENAMED */
    .slim-project-left{
        flex:1;
    }

    .slim-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .slim-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .slim-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS - RENAMED */
    .slim-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .slim-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .slim-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE - RENAMED */
    .slim-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .slim-project-container{
            flex-direction:column;
        }

        .slim-project-right img{
            width:100%;
            height:auto;
        }

        
    }



     /* ===============================
   JANSON SLIM PARTITION (EXACT)
================================ */

#jansonSlimWrapper {
    padding: 80px 5%;
    background: var(--primary-color);
    font-family: var(--font-primary);
}

.janson-slim-inner {
    max-width: 1450px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1.35fr 1fr 80px;
    gap: 40px;
    align-items: center;
}

/* COMMON BOX */
.janson-slim-box {
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
    /* background: #ff4d4d; */
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
    .janson-slim-inner {
        grid-template-columns: 1fr;
    }

    .janson-vertical-strip {
        writing-mode: horizontal-tb;
        transform: none;
        margin-top: 20px;
    }
}


    
    /* SECTION BACKGROUND - RENAMED */
    .slim-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE - RENAMED */
    .slim-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER - RENAMED */
    .slim-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM - RENAMED */
    .slim-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .slim-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .slim-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON - RENAMED */
    .slim-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT - RENAMED */
    .slim-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .slim-faq-item.active .slim-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE - RENAMED */
    .slim-faq-item.active .slim-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON - RENAMED */
    .slim-faq-btn{
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

    .slim-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    @media (min-width:300px) and (max-width:700px){
    .slim-fund-container{
        padding: 0px !important;
    }
}
.slim-hero-content h5{
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
    height: 520px;
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


.product-slider{
display:flex;
gap:40px;
padding:60px;
align-items:center;
}

/* LEFT */
.product-images{
position:relative;
flex:1;
background:linear-gradient(145deg,#0d0d0d,#1c1c1c);
border-radius:12px;
padding:40px;
text-align:center;
}

.stock{
position:absolute;
top:20px;
left:20px;
opacity:0.3;
letter-spacing:2px;
}

.main-img{
width:80%;
transition:0.3s;
}

.thumbs{
display:flex;
justify-content:center;
gap:15px;
margin-top:20px;
flex-wrap:wrap;
}

.thumbs img{
width:60px;
cursor:pointer;
opacity:0.6;
border-radius:8px;
}

.thumbs img.active,
.thumbs img:hover{
opacity:1;
transform:scale(1.1);
}

/* RIGHT */
.product-info{
flex:1;
background:var(--primary-light);
padding:35px;
border-radius:12px;
box-shadow:var(--shadow-medium);
}

.product-title{
font-size:26px;
color:var(--text-heading);
}

.category{
font-size:13px;
opacity:0.7;
}

.price{
font-size:28px;
margin:12px 0;
color:var(--secondary-color);
}

.rating{
color:gold;
margin-bottom:12px;
}

.desc{
font-size:14px;
line-height:1.6;
margin-bottom:18px;
color:var(--text-color);
}

.sizes span{
display:inline-block;
border:1px solid var(--border-color);
padding:6px 10px;
margin:6px 6px 0 0;
cursor:pointer;
border-radius:6px;
}

.sizes span.active{
background:var(--secondary-color);
color:#000;
}

.colors span{
display:inline-block;
width:18px;
height:18px;
border-radius:50%;
margin:8px 8px 0 0;
border:1px solid #555;
}

.cart-btn{
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
.product-slider{
flex-direction:column;
}
}






    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="slim-hero-section"  data-aos="zoom-in">
        <img src="slim-partition/WhatsApp Image 2025-12-24 at 6.30.17 PM (1).jpeg" alt="Slim Partition Background">
        <div class="slim-hero-content">
            <h5>SLIM PARTITION SYSTEMS</h5>
            <h1>PRECISION ENGINEERED PARTITIONS FOR MODERN SPACES</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="slim-content-box"  data-aos="zoom-in">
        <div class="slim-content-wrapper">
            <div>
                <h2 class="slim-content-title">SLIM PARTITION MANUFACTURER IN INDIA</h2>
            </div>
            <div class="slim-content-text">
                <p>
                    As a reputed manufacturer of Slim Partitions, we pride ourselves on offering modern, sleek, and durable partition systems that transform any interior into an elegant and functional space. Our slim partitions are precision-made, marrying advanced engineering with contemporary design to provide seamless separation without aesthetic or light flow compromise.
                </p>
                <p>
                    Ideal for offices, commercial spaces, and residences of high standing, our partitions are fabricated using high-quality materials that guarantee long-term durability, easy installation, and minimum maintenance. Every product is manufactured with strict quality control standards that ensure exceptional finish, structural strength, and superior performance.
                </p>
                <p>
                    Be it designing a collaborative workspace or an open-layout living area, our slim partitions provide the perfect blend of style, privacy, and practicality.
                </p>
            </div>
        </div>
    </section>

    <div class="slim-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="slim-card"  data-aos="zoom-in">
            <div class="slim-tag">Benefits</div>
            <img class="slim-icon" src="https://cdn-icons-png.flaticon.com/512/992/992651.png">
            <div class="slim-card-title">ELEGANT DESIGN</div>
            <p>
                Elegant aesthetic appeal: provides a modern touch while only minimally interrupting views. More space utilization: provides maximum utilization of available space while keeping it airy and open.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="slim-plus">+</div>

        <!-- CARD 2 -->
        <div class="slim-card" data-aos="zoom-in">
            <div class="slim-tag">Benefits</div>
            <img class="slim-icon" src="https://cdn-icons-png.flaticon.com/512/3430/3430447.png">
            <div class="slim-card-title">PRIVACY & DURABILITY</div>
            <p>
                Sound and Privacy Control: Designed to minimize noise and ensure privacy. Durable and Long Lasting: Constructed with high-quality materials to ensure a long service life with low maintenance.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="slim-dotted-line"  data-aos="zoom-in"></div>

        <!-- CARD 3 -->
        <div class="slim-card slim-right-card" data-aos="zoom-in">
            <div class="slim-tag">Applications</div>
            <img class="slim-icon" src="https://cdn-icons-png.flaticon.com/512/456/456177.png">
            <div class="slim-card-title">VERSATILE APPLICATIONS</div>
            <p>
                Diverse Application: It is applicable to corporate offices, showrooms, hospitality areas, and residential interiors. Easy to clean, corrosion-resistant, retaining an attractive appearance over time.
            </p>
        </div>
    </div>

<section class="janson-slim-wrapper" id="jansonSlimWrapper">
    <div class="janson-slim-inner">

        <!-- LEFT IMAGE -->
        <div class="janson-slim-box janson-left-box">
            <div class="janson-img-holder">
                <img src="slim-partition/2.jpg" alt="Telescopic Sliding">
            </div>
            <p class="janson-label">SYNCHRO SLIDING PARTITION</p>
        </div>

        <!-- CENTER IMAGE -->
        <div class="janson-slim-box janson-center-box">

            <div class="janson-top-logo">
                <span class="janson-logo-je">JE</span>
                <span class="janson-logo-text">JANSON EXPORTS</span>
            </div>

            <div class="janson-img-holder big-img">
                <img src="slim-partition/1 (1).jpg" alt="Synchro Sliding">
            </div>
            <p class="janson-label">INVISIBLE DOOR PARTITION</p>

            <div class="janson-bni-badge">BNI MEMBER</div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="janson-slim-box janson-right-box">
            <div class="janson-img-holder">
                <img src="slim-partition/3.jpg" alt="Pocket Sliding">
            </div>
            <p class="janson-label">POCKET SLIDING</p>
        </div>

        <!-- RIGHT VERTICAL BAR -->
        <div class="janson-vertical-strip">
            <span>SLIM PARTITION</span>
            <span>SUBCATEGORIES</span>
        </div>

    </div>
</section>




    

    <section class="slim-main-section"  data-aos="zoom-in">
        <h1>SLIM PARTITION SUPPLIER IN INDIA</h1>
        <p>
            As a trusted Slim Partition supplier, we continually provide quality and precision with every order. Our supply network ensures timely availability and efficient distribution to meet the needs of any interior designer, architect, and construction professional.
        </p>
        <p>
            Each partition is bespoke-designed to adapt to design intent and spatial requirements, offering a sophisticated partitioning solution for both sprawling projects and compact interiors. Customer-centricity enables us to work alongside the client in bringing their vision forward and make certain that each delivery lives up to our promise of excellence and timely execution.
        </p>

        <a href="contact.php" class="slim-discuss-link">
            Request a Quote
            <div class="slim-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="slim-row"  data-aos="zoom-in">
            <!-- LEFT IMAGE -->
            <div class="slim-left-img">
                <img src="slim-partition/4.jpg" alt="Slim Partition Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="slim-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Synchro Sliding Partition</h2>
                <p>
                    Our slim partitions feature a slim and seamless aluminum profile system with various options for glass and finish. We offer custom dimensions and configurations to meet your specific requirements.
                </p>
                <p>
                    Designed with superior acoustic insulation and high resistance to impact, our partitions are compatible with both sliding and fixed systems. We use environment-friendly and recyclable materials in all our products.
                </p>
                <p>
                    Our expert team works closely with clients to deliver partitions that exceed expectations in both functionality and aesthetics.
                </p>
                <ul class="slim-ul">
                    <li>Slim and seamless aluminum profile system</li>
                    <li>Various options for glass and finish</li>
                    <li>Custom dimensions and configurations</li>
                    <li>Superior acoustic insulation</li>
                    <li>High resistance to impact and durability</li>
                    <li>Compatible with sliding and fixed systems</li>
                    <li>Environment-friendly and recyclable materials</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="slim-prod-section">
        <h2 class="slim-prod-title">OUR SLIM PARTITION PRODUCTS</h2>
        <div class="slim-prod-grid">
            <!-- CARD 1 -->
            <div class="slim-prod-card" onclick="slimProdOpenPopup('Telescopic Sliding Partition',' A modern, space-saving solution designed to divide large areas into multiple sections with ease. It features a smooth sliding mechanism that allows quick and flexible opening and closing. Ideal for conference halls, banquet rooms, hotels, offices, and commercial spaces, it offers flexibility, sound insulation, and a clean, elegant appearance.','slim-partition/6.jpg')" data-aos="zoom-in"> 
                <img class="slim-prod-card-img" src="slim-partition/6.jpg">
                <div class="slim-prod-card-info">
                    <h3>Telescopic Sliding Partition</h3>
                    <p>Modern frameless glass design</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="slim-prod-card" onclick="slimProdOpenPopup('Bathroom Partition','A practical and durable solution designed to create privacy and organize bathroom spaces efficiently. It is made from moisture-resistant and easy-to-maintain materials, ensuring long-lasting performance in wet areas. Commonly used in malls, offices, schools, hotels, and commercial washrooms, bathroom partitions provide a clean, hygienic, and modern look while maximizing space and functionality.','slim-partition/12.jpg')" data-aos="zoom-in">
                <img class="slim-prod-card-img" src="slim-partition/12.jpg">
                <div class="slim-prod-card-info">
                    <h3>Bathroom Partition</h3>
                    <p>Premium Bathroom partition</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="slim-prod-card" onclick="slimProdOpenPopup('Wardrobe Profiles Partition','Wardrobe Profiles are specially designed aluminum or metal profiles used to enhance the structure, functionality, and appearance of modern wardrobes. They provide smooth support for sliding or hinged doors, ensure durability, and add a sleek, contemporary finish. Widely used in residential and commercial interiors, wardrobe profiles improve usability while giving wardrobes a premium and well-organized look.','slim-partition/5.jpg')" data-aos="zoom-in">
                <img class="slim-prod-card-img" src="slim-partition/5.jpg">
                <div class="slim-prod-card-info">
                    <h3>Wardrobe Profiles</h3>
                    <p>Wardrobe Profiles give wardrobes a clean and modern finish.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="slim-prod-popup" id="slimProdPopup">
        <span class="slim-prod-close" onclick="slimProdClosePopup()">&times;</span>
        <div class="slim-prod-popup-box">
            <img id="slimProdPopupImg" class="slim-prod-popup-img">
            <div class="slim-prod-popup-content">
                <h2 id="slimProdPopupTitle"></h2>
                <p id="slimProdPopupDesc"></p>
                <a href="contact.php" class="slim-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="slim-fund-section" data-aos="zoom-in">
        <div class="slim-fund-container">
            <div class="slim-fund-top-title">EXPORT QUALITY</div>
            <h2 class="slim-fund-heading">SLIM PARTITION EXPORTER IN INDIA</h2>
            <p class="slim-fund-desc">
                As an established Slim Partition exporter, we have built a strong global presence by providing innovative and reliable partition solutions to international clients. Our export-grade partitions are designed to meet various global standards. In our products, you will find quality consistency, aesthetic precision, and on-time delivery.
            </p>
            
            <a href="contact.php" class="slim-fund-link">
                International Enquiries
                <div class="slim-fund-line"></div>
            </a>

            <div class="slim-fund-card-wrap">
                <div class="slim-fund-card">
                    <div class="slim-fund-card-title">Global Standards</div>
                    <p>
                        We work together with overseas partners, architects, and contractors to provide tailored solutions for every commercial, residential, and institutional project.
                    </p>
                    <hr>
                    <div class="slim-fund-card-subtitle">Our Export Advantages:</div>
                    <ul class="slim-fund-list">
                        <li>Quality consistency and precision</li>
                        <li>Aesthetic perfection</li>
                        <li>On-time delivery guarantee</li>
                        <li>Custom packaging for safe transit</li>
                    </ul>
                </div>

                <div class="slim-fund-card">
                    <div class="slim-fund-card-title">International Projects</div>
                    <p>
                        Our long experience in handling large exports and custom packaging ensures products reach our clients in perfect condition, ready for installation and long-term performance.
                    </p>
                    <hr>
                    <div class="slim-fund-card-subtitle">Global Reach:</div>
                    <ul class="slim-fund-list">
                        <li>Tailored solutions for every project</li>
                        <li>Expert technical support</li>
                        <li>Installation guidance provided</li>
                        <li>After-sales service network</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="product-slider" data-aos="zoom-in">

  <!-- LEFT IMAGE SIDE -->
  <div class="product-images">
    <span class="stock">IN STOCK</span>

    <img src="slim-partition/7.jpg" class="main-img" id="mainImg">

    <div class="thumbs">
      <img src="slim-partition/7.jpg" class="active" data-index="0" onclick="changeProduct(this)">
      <img src="slim-partition/8.jpg" data-index="1" onclick="changeProduct(this)">
      <img src="slim-partition/9.jpg" data-index="2" onclick="changeProduct(this)">
      <img src="slim-partition/10.jpg" data-index="3" onclick="changeProduct(this)">
      <img src="slim-partition/11.jpg" data-index="4" onclick="changeProduct(this)">
    </div>
  </div>

  <!-- RIGHT INFO SIDE -->
  <div class="product-info">

    <h3 class="product-title" id="pTitle">NIKE WASP 8</h3>
    <span class="category" id="pCategory">Running Shoes</span>

    <div class="price" id="pPrice">$199</div>

    <div class="rating" id="pRating">★★★★★ (4.9)</div>

    <p class="desc" id="pDesc">
      A sleek, space-saving door solution that slides neatly into the wall for a clean and modern look.
    </p>

    <div class="sizes" id="pSizes">
      <strong>Size:</strong><br>
      <span>7</span><span>8</span><span>9</span>
      <span class="active">11.5</span>
    </div>

    <div class="colors" id="pColors">
      <strong>Color:</strong><br>
      <span style="background:#1e90ff"></span>
      <span style="background:#c6a98c"></span>
      <span style="background:#ffffff"></span>
    </div>

    <button class="cart-btn">+ ADD TO CART</button>

  </div>

</section>

    <section class="janson-feature-section" id="jansonFeatureSection">
    <div class="janson-feature-wrapper">

        <!-- LEFT IMAGE -->
        <div class="janson-feature-image">
            <img src="slim-partition/13.jpg" alt="Slim Partition Office">
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
                    <h4><span>01</span> Modular Design</h4>
                    <p>Create customized cabins, conference rooms, and workstations with fully modular systems.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">✔</div>
                <div>
                    <h4><span>02</span> Acoustic Control</h4>
                    <p>Acoustic glass and sealing options reduce noise for focused environments.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⚙</div>
                <div>
                    <h4><span>03</span> Practical Value</h4>
                    <p>Add logos, frosted films, or gradient designs for branding and privacy.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⬛</div>
                <div>
                    <h4><span>04</span> Advanced Use</h4>
                    <p>High-grade rust-free aluminium ensures strength and stability.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">🏆</div>
                <div>
                    <h4><span>05</span> Peak Value</h4>
                    <p>Sleek profiles and clean glass lines enhance office aesthetics.</p>
                </div>
            </div>

        </div>

        <!-- BNI BADGE -->
        <div class="janson-feature-bni">
            <!-- PROUD <br><strong>BNI</strong><br> MEMBER -->
             <!-- <img src="slim-partition/img654.jpg" alt=""> -->
        </div>

    </div>
</section>




    <section class="slim-project-section" data-aos="zoom-in">
        <div class="slim-project-container">
            <div class="slim-project-left">
                <div class="slim-project-subtitle">CORPORATE INSTALLATION</div>
                <h2 class="slim-project-title">Office Fix Partition</h2>
                <p class="slim-project-text">
                    A major IT company needed to create multiple conference rooms and collaborative spaces within their open-plan office. Our slim partitions provided the perfect solution, allowing natural light to flow while creating private areas.
                </p>
                <p class="slim-project-text">
                    The installation featured floor-to-ceiling slim aluminum frames with clear tempered glass, creating a modern and professional environment. The partitions included integrated cable management systems for seamless technology integration.
                </p>
                <p class="slim-project-text">
                    This project successfully transformed a large open space into multiple functional areas while maintaining visual connectivity and natural lighting.
                </p>
                <ul class="slim-project-list">
                    <li>Project Type: Corporate Office Complex</li>
                    <li>Partition Type: Slim Aluminum Glass Partitions</li>
                    <li>Special Features: Sound Insulation, Cable Management</li>
                    <li>Project Completion Time: 4 Weeks</li>
                </ul>
            </div>
            
            <div class="slim-project-right">
                <img src="slim-partition/14.jpg" alt="Office Partition Project">
            </div>
        </div>
    </section>

    <section class="slim-faq-section" data-aos="zoom-in">
        <h2 class="slim-faq-title">SLIM PARTITION FAQS</h2>
        <div class="slim-faq-container">
            <div class="slim-faq-item">
                <div class="slim-faq-question">
                    What makes slim partitions different from regular partitions?
                    <span class="slim-faq-icon">⌄</span>
                </div>
                <div class="slim-faq-answer">
                    Slim partitions feature minimal aluminum profiles (usually 20-30mm) compared to traditional partitions (50-100mm), offering a sleek, modern look while maximizing space utilization and light flow.
                </div>
            </div>

            <div class="slim-faq-item">
                <div class="slim-faq-question">
                    Can slim partitions be soundproof?
                    <span class="slim-faq-icon">⌄</span>
                </div>  
                <div class="slim-faq-answer">
                    Yes, we offer specialized sound-insulated slim partitions that can reduce noise transmission significantly. These feature double glazing with special acoustic glass and specialized sealing for optimal performance.
                </div>
            </div>

            <div class="slim-faq-item">
                <div class="slim-faq-question">
                    What maintenance do slim partitions require?
                    <span class="slim-faq-icon">⌄</span>
                </div>
                <div class="slim-faq-answer">
                    Our partitions are designed for low maintenance. Regular cleaning with mild soap solution is sufficient. The aluminum frames are corrosion-resistant and powder-coated for durability.
                </div>
            </div>

            <div class="slim-faq-item">
                <div class="slim-faq-question">
                    Do you provide installation services?
                    <span class="slim-faq-icon">⌄</span>
                </div>
                <div class="slim-faq-answer">
                    Yes, we provide professional installation services across India through our trained technicians. For international projects, we provide detailed installation manuals and can arrange supervised installation.
                </div>
            </div>
        </div>
        <button class="slim-faq-btn">View All FAQs</button>
    </section>


    



    <script>
        function slimProdOpenPopup(title, desc, img){
            document.getElementById("slimProdPopupTitle").innerText = title;
            document.getElementById("slimProdPopupDesc").innerText = desc;
            document.getElementById("slimProdPopupImg").src = img;
            document.getElementById("slimProdPopup").classList.add("active");
        }

        function slimProdClosePopup(){
            document.getElementById("slimProdPopup").classList.remove("active");
        }

        const slimFaqItems = document.querySelectorAll(".slim-faq-item");
        slimFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                slimFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });

 
const products = [
  {
    img:"slim-partition/7.jpg",
title:"Pocket Door",
category:"Sliding Door System",
price:"$199",
rating:"★★★★★ (4.9)",
desc:"A sleek, space-saving door solution that slides neatly into the wall for a clean and modern look.",
sizes:["Standard","Custom"],
activeSize:"Custom",
colors:["#1e90ff","#c6a98c","#ffffff"]

  },
  {
    img:"slim-partition/8.jpg",
title:"Telescopic Sliding Door",
category:"Sliding Door System",
price:"$179",
rating:"★★★★☆ (4.6)",
desc:"A smart space-saving door system that allows multiple panels to slide smoothly for wider openings.",
sizes:["Standard","Custom"],
activeSize:"Custom",
colors:["#ff3b3b","#000000"]
  },
  {
    img:"slim-partition/9.jpg",
title:"Swing Door with Outer Frame & Hinges",
category:"Door System",
price:"$229",
rating:"★★★★★ (5.0)",
desc:"A sturdy and elegant swing door system with an outer frame and smooth hinges for reliable performance.",
sizes:["Standard","Custom"],
activeSize:"Custom",
colors:["#ffffff","#1e90ff"]

  },
  {
    img:"slim-partition/10.jpg",
title:"Telescopic Sliding Door Partition",
category:"Partition System",
price:"$189",
rating:"★★★★☆ (4.7)",
desc:"A flexible, space-efficient partition system that smoothly slides to create or open multiple sections.",
sizes:["Standard","Custom"],
activeSize:"Custom",
colors:["#000000","#ffcc00"]

  },
  {
    img:"slim-partition/11.jpg",
title:"Synchro Sliding Partition",
category:"Partition System",
price:"$159",
rating:"★★★★☆ (4.5)",
desc:"A synchronized sliding partition system designed for smooth movement and efficient space division.",
sizes:["Standard","Custom"],
activeSize:"Custom",
colors:["#ffffff","#1e90ff"]

  }
];

function changeProduct(el){
  const p = products[el.dataset.index];

  document.getElementById("mainImg").src = p.img;
  document.getElementById("pTitle").innerText = p.title;
  document.getElementById("pCategory").innerText = p.category;
  document.getElementById("pPrice").innerText = p.price;
  document.getElementById("pRating").innerText = p.rating;
  document.getElementById("pDesc").innerText = p.desc;

  const sizesBox = document.getElementById("pSizes");
  sizesBox.innerHTML = "<strong>Size:</strong><br>";
  p.sizes.forEach(s=>{
    const span = document.createElement("span");
    span.innerText = s;
    if(s === p.activeSize) span.classList.add("active");
    sizesBox.appendChild(span);
  });

  const colorBox = document.getElementById("pColors");
  colorBox.innerHTML = "<strong>Color:</strong><br>";
  p.colors.forEach(c=>{
    const span = document.createElement("span");
    span.style.background = c;
    colorBox.appendChild(span);
  });

  document.querySelectorAll(".thumbs img")
    .forEach(img=>img.classList.remove("active"));
  el.classList.add("active");
}



    </script>
<?php include "footer.php"?>