<?php $page_title = "Patch Fitting manufacturer in Abu-Dhabi";
$description = "As a reputed Patch Fitting manufacturer in Abu-Dhabi we specialize in delivering high-quality architectural hardware solutions designed to enhance the functionality, safety, and aesthetics of modern glass installations. Our patch fittings have been specially engineered to provide secure and seamless connections for frameless glass doors and partitions";
$keyword = "Patch Fitting manufacturers in Abu-Dhabi,Patch Fitting supplier in Abu-Dhabi,Patch Fitting exporter in Abu-Dhabi, Best Patch Fitting manufacturers in Abu-Dhabi, Top Patch Fitting manufacturers in Abu-Dhabi, best Patch Fitting supplier in Abu-Dhabi, Top Patch Fitting supplier Abu-Dhabi, best Patch Fitting exporter in Abu-Dhabi, Top Patch Fitting exporter in Abu-Dhabi,Patch Fitting manufacturers,Best Patch Fitting manufacturers,Top Patch Fitting manufacturers, Patch Fitting supplier,Best Patch Fitting supplier, Top Patch Fitting supplier,Patch Fitting exporter,Best Patch Fitting exporter,Top Patch Fitting exporter";
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
        .patch-fitting-hero-section {
            position: relative;
            width: 100%;
            height: 760px;
            overflow: hidden;
            margin-top: -90px;
        }

        .patch-fitting-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .patch-fitting-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .patch-fitting-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .patch-fitting-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* WHITE CONTENT BOX - UNIQUE CLASS */
        .patch-fitting-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -81px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .patch-fitting-content-wrapper {
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .patch-fitting-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .patch-fitting-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .patch-fitting-hero-content h1 {
                font-size: 32px;
            }

            .patch-fitting-content-wrapper {
                grid-template-columns: 1fr;
            }
        }


        /* BENEFITS SECTION - UNIQUE CLASS */
        .patch-fitting-benefits-wrapper {
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 45px;
            padding: 80px 20px;
            background: var(--primary-color);
        }

        /* CARD STYLING - UNIQUE CLASS */
        .patch-fitting-card {
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

        .patch-fitting-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .patch-fitting-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL - UNIQUE CLASS */
        .patch-fitting-tag {
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
        .patch-fitting-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE - UNIQUE CLASS */
        .patch-fitting-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .patch-fitting-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN - UNIQUE CLASS */
        .patch-fitting-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE - UNIQUE CLASS */
        .patch-fitting-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .patch-fitting-benefits-wrapper {
                flex-direction: column;
            }

            .patch-fitting-plus,
            .patch-fitting-dotted-line {
                display: none;
            }
        }


        /* MAIN SECTION - UNIQUE CLASS */
        .patch-fitting-main-section {
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE - UNIQUE CLASS */
        .patch-fitting-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH - UNIQUE CLASS */
        .patch-fitting-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK - UNIQUE CLASS */
        .patch-fitting-discuss-link {
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

        .patch-fitting-discuss-link:hover {
            color: var(--text-heading);
        }

        .patch-fitting-discuss-link .patch-fitting-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW - UNIQUE CLASS */
        .patch-fitting-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE - UNIQUE CLASS */
        .patch-fitting-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT - UNIQUE CLASS */
        .patch-fitting-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .patch-fitting-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .patch-fitting-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .patch-fitting-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS - UNIQUE CLASS */
        .patch-fitting-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .patch-fitting-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .patch-fitting-row {
                flex-direction: column;
            }

            .patch-fitting-left-img img {
                width: 100%;
                height: auto;
            }

            .patch-fitting-main-section h1 {
                font-size: 30px;
            }

            .patch-fitting-main-section {
                padding: 50px 20px;
            }
        }


    /* UNIQUE CONTAINER - RENAMED */
    .patch-fitting-prod-section{
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .patch-fitting-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* UNIQUE GRID - RENAMED */
    .patch-fitting-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* UNIQUE CARD - RENAMED */
    .patch-fitting-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .patch-fitting-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .patch-fitting-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .patch-fitting-prod-card-info{
        padding:15px;
    }

    .patch-fitting-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .patch-fitting-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* UNIQUE POPUP - RENAMED */
    .patch-fitting-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .patch-fitting-prod-popup.active{
        display:flex;
    }

    .patch-fitting-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:patchFittingProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes patchFittingProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .patch-fitting-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .patch-fitting-prod-popup-content{
        padding:20px;
    }

    .patch-fitting-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .patch-fitting-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .patch-fitting-prod-btn{
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

    .patch-fitting-prod-btn:hover {
        background-color: #b5987a;
    }

    .patch-fitting-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }


    
    /* SECTION WRAPPER - RENAMED */
    .patch-fitting-fund-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .patch-fitting-fund-container{
        padding: 0px 50px;
        margin:auto;
    }

    .patch-fitting-fund-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .patch-fitting-fund-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .patch-fitting-fund-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .patch-fitting-fund-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .patch-fitting-fund-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP - RENAMED */
    .patch-fitting-fund-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD - RENAMED */
    .patch-fitting-fund-card{
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

    .patch-fitting-fund-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .patch-fitting-fund-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .patch-fitting-fund-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .patch-fitting-fund-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .patch-fitting-fund-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST - RENAMED */
    .patch-fitting-fund-list{
        list-style:none;
        padding-left:0;
    }

    .patch-fitting-fund-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .patch-fitting-fund-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .patch-fitting-fund-card-wrap{
            flex-direction:column;
        }
        .patch-fitting-fund-card{
            min-width:100%;
        }
    }


       /* MAIN WRAPPER - RENAMED */
    .patch-fitting-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .patch-fitting-project-container{
        max-width: 1550px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT - RENAMED */
    .patch-fitting-project-left{
        flex:1;
    }

    .patch-fitting-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .patch-fitting-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .patch-fitting-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS - RENAMED */
    .patch-fitting-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .patch-fitting-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .patch-fitting-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE - RENAMED */
    .patch-fitting-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .patch-fitting-project-container{
            flex-direction:column;
        }

        .patch-fitting-project-right img{
            width:100%;
            height:auto;
        }

        
    }



     /* ===============================
   JANSON PATCH FITTING (EXACT)
================================ */

#jansonPatchFittingWrapper {
    padding: 80px 5%;
    background: var(--primary-color);
    font-family: var(--font-primary);
}

.janson-patch-fitting-inner {
    max-width: 1450px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1.35fr 1fr 80px;
    gap: 40px;
    align-items: center;
}

/* COMMON BOX */
.janson-patch-fitting-box {
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
    .janson-patch-fitting-inner {
        grid-template-columns: 1fr;
    }

    .janson-vertical-strip {
        writing-mode: horizontal-tb;
        transform: none;
        margin-top: 20px;
    }
}


    
    /* SECTION BACKGROUND - RENAMED */
    .patch-fitting-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE - RENAMED */
    .patch-fitting-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER - RENAMED */
    .patch-fitting-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM - RENAMED */
    .patch-fitting-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .patch-fitting-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .patch-fitting-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON - RENAMED */
    .patch-fitting-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT - RENAMED */
    .patch-fitting-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .patch-fitting-faq-item.active .patch-fitting-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE - RENAMED */
    .patch-fitting-faq-item.active .patch-fitting-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON - RENAMED */
    .patch-fitting-faq-btn{
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

    .patch-fitting-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    @media (min-width:300px) and (max-width:700px){
    .patch-fitting-fund-container{
        padding: 0px !important;
    }
}
.patch-fitting-hero-content h5{
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


.patch-fitting-product-slider{
display:flex;
gap:40px;
padding:60px;
align-items:center;
}

/* LEFT */
.patch-fitting-product-images{
position:relative;
flex:1;
background:linear-gradient(145deg,#0d0d0d,#1c1c1c);
border-radius:12px;
padding:40px;
text-align:center;
}

.patch-fitting-stock{
position:absolute;
top:20px;
left:20px;
opacity:0.3;
letter-spacing:2px;
}

.patch-fitting-main-img{
width:80%;
transition:0.3s;
}

.patch-fitting-thumbs{
display:flex;
justify-content:center;
gap:15px;
margin-top:20px;
flex-wrap:wrap;
}

.patch-fitting-thumbs img{
width:60px;
cursor:pointer;
opacity:0.6;
border-radius:8px;
}

.patch-fitting-thumbs img.active,
.patch-fitting-thumbs img:hover{
opacity:1;
transform:scale(1.1);
}

/* RIGHT */
.patch-fitting-product-info{
flex:1;
background:var(--primary-light);
padding:35px;
border-radius:12px;
box-shadow:var(--shadow-medium);
}

.patch-fitting-product-title{
font-size:26px;
color:var(--text-heading);
}

.patch-fitting-category{
font-size:13px;
opacity:0.7;
}

.patch-fitting-price{
font-size:28px;
margin:12px 0;
color:var(--secondary-color);
}

.patch-fitting-rating{
color:gold;
margin-bottom:12px;
}

.patch-fitting-desc{
font-size:14px;
line-height:1.6;
margin-bottom:18px;
color:var(--text-color);
}

.patch-fitting-sizes span{
display:inline-block;
border:1px solid var(--border-color);
padding:6px 10px;
margin:6px 6px 0 0;
cursor:pointer;
border-radius:6px;
}

.patch-fitting-sizes span.active{
background:var(--secondary-color);
color:#000;
}

.patch-fitting-colors span{
display:inline-block;
width:18px;
height:18px;
border-radius:50%;
margin:8px 8px 0 0;
border:1px solid #555;
}

.patch-fitting-cart-btn{
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
.patch-fitting-product-slider{
flex-direction:column;
}
}


    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="patch-fitting-hero-section"  data-aos="zoom-in">
        <img src="../slim-partition/WhatsApp Image 2025-12-24 at 6.30.17 PM (1).jpeg" alt="Patch Fitting Background">
        <div class="patch-fitting-hero-content">
            <h5>PATCH FITTING SYSTEMS</h5>
            <h1>PRECISION FITTINGS FOR MODERN GLASS INSTALLATIONS</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="patch-fitting-content-box"  data-aos="zoom-in">
        <div class="patch-fitting-content-wrapper">
            <div>
                <h2 class="patch-fitting-content-title">PATCH FITTING MANUFACTURER IN Abu-Dhabi</h2>
            </div>
            <div class="patch-fitting-content-text">
                <p>
                    As a reputed Patch Fitting manufacturer, we specialize in delivering high-quality architectural hardware solutions designed to enhance the functionality, safety, and aesthetics of modern glass installations. Our patch fittings have been specially engineered to provide secure and seamless connections for frameless glass doors and partitions, thus giving an immaculate, sophisticated look to any space.
                </p>
                <p>
                    Each patch fitting is made from premium grade stainless steel and brass components, ensuring quality in every aspect: strength, corrosion resistance, and long-term durability. We design our products to fit the needs of modern architecture: smooth operation, precise alignment, and effortless installation.
                </p>
                <p>
                    Ideal for glass facades, doors, shower enclosures, and office partitions, our patch fittings are crafted to perfection, combining reliability, refined craftsmanship, and state-of-the-art technology, thus redefining structural glass systems with elegance and stability.
                </p>
            </div>
        </div>
    </section>

    <div class="patch-fitting-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="patch-fitting-card"  data-aos="zoom-in">
            <div class="patch-fitting-tag">Benefits</div>
            <img class="patch-fitting-icon" src="https://cdn-icons-png.flaticon.com/512/992/992651.png">
            <div class="patch-fitting-card-title">MODERN DESIGN</div>
            <p>
                Sleek, Modern Design: Provides glass structures with a frameless and minimalist look. Superior Durability: It is made from first-class materials for long-lasting performance.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="patch-fitting-plus">+</div>

        <!-- CARD 2 -->
        <div class="patch-fitting-card" data-aos="zoom-in">
            <div class="patch-fitting-tag">Benefits</div>
            <img class="patch-fitting-icon" src="https://cdn-icons-png.flaticon.com/512/3430/3430447.png">
            <div class="patch-fitting-card-title">CORROSION RESISTANT</div>
            <p>
                Corrosion and Rust Resistant: Suitable for both interior and exterior applications. High Load-Bearing Strength: Heavy glass doors are supported with stability and balance.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="patch-fitting-dotted-line"  data-aos="zoom-in"></div>

        <!-- CARD 3 -->
        <div class="patch-fitting-card patch-fitting-right-card" data-aos="zoom-in">
            <div class="patch-fitting-tag">Applications</div>
            <img class="patch-fitting-icon" src="https://cdn-icons-png.flaticon.com/512/456/456177.png">
            <div class="patch-fitting-card-title">VERSATILE APPLICATIONS</div>
            <p>
                Easy Installation: Engineered for exact fitting and fast assembly. Low Maintenance: Requires minimum maintenance and retains its shine and finish. Customizable Options: Available in various sizes, finishes, and configurations to meet design preferences.
            </p>
        </div>
    </div>

<section class="janson-patch-fitting-wrapper" id="jansonPatchFittingWrapper">
    <div class="janson-patch-fitting-inner">

        <!-- LEFT IMAGE -->
        <div class="janson-patch-fitting-box janson-left-box">
            <div class="janson-img-holder">
                <img src="../patch-fitting/patch-fitting-500x500.webp" alt="Top Patch Fitting">
            </div>
            <p class="janson-label">TOP PATCH FITTING</p>
        </div>

        <!-- CENTER IMAGE -->
        <div class="janson-patch-fitting-box janson-center-box">

            <div class="janson-top-logo">
                <span class="janson-logo-je">JE</span>
                <span class="janson-logo-text">JANSON EXPORTS</span>
            </div>

            <div class="janson-img-holder big-img">
                <img src="../patch-fitting/dorma-patch-fittings10510098665.webp" alt="Corner Patch Fitting">
            </div>
            <p class="janson-label">CORNER PATCH FITTING</p>

            <div class="janson-bni-badge">BNI MEMBER</div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="janson-patch-fitting-box janson-right-box">
            <div class="janson-img-holder">
                <img src="../patch-fitting/stylish-brass-top-bottom-patch-fitting-803260089-gu43w3cz.jpg" alt="Bottom Patch Fitting">
            </div>
            <p class="janson-label">BOTTOM PATCH FITTING</p>
        </div>

        <!-- RIGHT VERTICAL BAR -->
        <div class="janson-vertical-strip">
            <span>PATCH FITTING</span>
            <span>SUBCATEGORIES</span>
        </div>

    </div>
</section>

    

    <section class="patch-fitting-main-section"  data-aos="zoom-in">
        <h1>PATCH FITTING SUPPLIER IN Abu-Dhabi</h1>
        <p>
            As a trusted supplier of Patch Fitting, we strive to offer ingenious and reliable hardware solutions for meeting various requirements of architects, contractors, and designers. Our extensive distribution network ensures timely availability for patch fitting for projects ranging from residential installations to large commercial complexes.
        </p>
        <p>
            We offer a complete range of patch fittings comprising top patch, bottom patch, corner patch, and lock patch for precision performance and seamless integration in all applications. Every fitting is stringently quality-checked to ensure constant strength, safety, and smooth functionality that places us ahead as the preferred partner for high-performance glass applications.
        </p>

        <a href="contact.php" class="patch-fitting-discuss-link">
            Request a Quote
            <div class="patch-fitting-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="patch-fitting-row"  data-aos="zoom-in">
            <!-- LEFT IMAGE -->
            <div class="patch-fitting-left-img">
                <img src="../patch-fitting/Stainless-Steel-Glass-Door-Hinge-Floor-Mount-Bottom-Patch-Fitting.avif" alt="Patch Fitting Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="patch-fitting-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Patch Fitting Solutions</h2>
                <p>
                    High-grade stainless steel (SS 304/316) or brass construction. Available in polished, matte, satin, and antique finishes. Compatible with 8mm to 12mm toughened glass.
                </p>
                <p>
                    Precision alignment and strong grip for frameless doors. Suitable for single and double glass door systems. Tested for high performance and endurance cycles.
                </p>
                <p>
                    The concealed fixing system allows for a neat, refined appearance. Resistant to weathering and impact, for long-term stability.
                </p>
                <ul class="patch-fitting-ul">
                    <li>High-grade stainless steel (SS 304/316) or brass construction</li>
                    <li>Available in polished, matte, satin, and antique finishes</li>
                    <li>Compatible with 8mm to 12mm toughened glass</li>
                    <li>Precision alignment and strong grip for frameless doors</li>
                    <li>Suitable for single and double glass door systems</li>
                    <li>Tested for high performance and endurance cycles</li>
                    <li>The concealed fixing system allows for a neat, refined appearance</li>
                    <li>Resistant to weathering and impact, for long-term stability</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="patch-fitting-prod-section">
        <h2 class="patch-fitting-prod-title">OUR PATCH FITTING PRODUCTS</h2>
        <div class="patch-fitting-prod-grid">
            <!-- CARD 1 -->
            <div class="patch-fitting-prod-card" onclick="patchFittingProdOpenPopup('over-panel-corner-ss-l-patch','This premium stainless steel patch fitting is designed for strong corner support, ensuring durability and a clean modern finish.','patch-fitting/over-panel-corner-ss-l-patch-500x500.webp')" data-aos="zoom-in"> 
                <img class="patch-fitting-prod-card-img" src="../patch-fitting/over-panel-corner-ss-l-patch-500x500.webp">
                <div class="patch-fitting-prod-card-info">
                    <h3>over-panel-corner-ss-l-patch</h3>
                    <p>It offers reliable performance with easy installation</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="patch-fitting-prod-card" onclick="patchFittingProdOpenPopup('Stainless Steel Over Panel','This stainless steel corner L patch fitting is designed to firmly support over-panel glass at corner joints. It offers high strength, rust resistance, and a clean premium finish for modern glass door and partition systems.','patch-fitting/1505395629-057394-1528.avif')" data-aos="zoom-in">
                <img class="patch-fitting-prod-card-img" src="../patch-fitting/1505395629-057394-1528.avif">
                <div class="patch-fitting-prod-card-info">
                    <h3>Stainless Steel Over Panel</h3>
                    <p>Stainless Steel Over Panel Corner L Patch Fitting</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="patch-fitting-prod-card" onclick="patchFittingProdOpenPopup('Steel Top & Bottom Glass Door Patch Fitting','This stainless steel patch fitting is used at the top or bottom of glass doors for secure fixing and smooth operation. It offers high strength, corrosion resistance, and a premium finish for glass door systems.','patch-fitting/110000000157-visur-1200x1200jpg-image-slider-product-image-slider-zoom.avif')" data-aos="zoom-in">
                <img class="patch-fitting-prod-card-img" src="../patch-fitting/110000000157-visur-1200x1200jpg-image-slider-product-image-slider-zoom.avif">
                <div class="patch-fitting-prod-card-info">
                    <h3>Steel Top & Bottom Glass Door Patch Fitting</h3>
                    <p>90-degree connections with minimalist design</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="patch-fitting-prod-popup" id="patchFittingProdPopup">
        <span class="patch-fitting-prod-close" onclick="patchFittingProdClosePopup()">&times;</span>
        <div class="patch-fitting-prod-popup-box">
            <img id="patchFittingProdPopupImg" class="patch-fitting-prod-popup-img">
            <div class="patch-fitting-prod-popup-content">
                <h2 id="patchFittingProdPopupTitle"></h2>
                <p id="patchFittingProdPopupDesc"></p>
                <a href="contact.php" class="patch-fitting-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="patch-fitting-fund-section" data-aos="zoom-in">
        <div class="patch-fitting-fund-container">
            <div class="patch-fitting-fund-top-title">EXPORT QUALITY</div>
            <h2 class="patch-fitting-fund-heading">PATCH FITTING EXPORTER IN Abu-Dhabi</h2>
            <p class="patch-fitting-fund-desc">
                Being one of the leading exporters of Patch Fitting, we provide world-class architectural fittings to clients in global markets. Our export-quality patch fittings are precisely made and manufactured in conformity with international standards of safety, strength, and excellence in design.
            </p>
            
            <a href="contact.php" class="patch-fitting-fund-link">
                International Enquiries
                <div class="patch-fitting-fund-line"></div>
            </a>

            <div class="patch-fitting-fund-card-wrap">
                <div class="patch-fitting-fund-card">
                    <div class="patch-fitting-fund-card-title">Global Standards</div>
                    <p>
                        We serve architects, construction firms, and distributors on all continents, offering solutions and finish options to meet diverse project needs. Each product is packed with care and quality-checked prior to shipment for safe arrival and perfect installation.
                    </p>
                    <hr>
                    <div class="patch-fitting-fund-card-subtitle">Our Export Advantages:</div>
                    <ul class="patch-fitting-fund-list">
                        <li>Conforms to international safety standards</li>
                        <li>Precision manufacturing excellence</li>
                        <li>Customization for global architectural needs</li>
                        <li>Thorough quality checks before export</li>
                    </ul>
                </div>

                <div class="patch-fitting-fund-card">
                    <div class="patch-fitting-fund-card-title">International Markets</div>
                    <p>
                        Emphasizing innovative spirit, craftsmanship, and reliability, respectively, we have established ourselves as a brand one can rely upon in the international architectural hardware industry for supplying top-notch patch fittings that flawlessly merge functionality, durability, and timelessness.
                    </p>
                    <hr>
                    <div class="patch-fitting-fund-card-subtitle">Global Reach:</div>
                    <ul class="patch-fitting-fund-list">
                        <li>International architects worldwide</li>
                        <li>Global construction firms</li>
                        <li>Distributors across continents</li>
                        <li>Architectural hardware specialists</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="patch-fitting-product-slider" data-aos="zoom-in">

  
  <div class="patch-fitting-product-images">
    <span class="patch-fitting-stock">IN STOCK</span>

    <img src="../slim-partition/8.jpg" class="patch-fitting-main-img" id="patchFittingMainImg">

    <div class="patch-fitting-thumbs">
      <img src="../slim-partition/8.jpg" class="active" data-index="0" onclick="changePatchFittingProduct(this)">
      <img src="../slim-partition/9.jpg" data-index="1" onclick="changePatchFittingProduct(this)">
      <img src="../slim-partition/10.jpg" data-index="2" onclick="changePatchFittingProduct(this)">
      <img src="../slim-partition/11.jpg" data-index="3" onclick="changePatchFittingProduct(this)">
      <img src="../slim-partition/12.jpg" data-index="4" onclick="changePatchFittingProduct(this)">
    </div>
  </div>

  
  <div class="patch-fitting-product-info">

    <h3 class="patch-fitting-product-title" id="patover-panel-corner-ss-l-patch</h3>
    <span class="patch-fitting-category" id="patchFittingCategory">Architectural Hardware</span>

    <div class="patch-fitting-price" id="patchFittingPrice">Custom Quote</div>

    <div class="patch-fitting-rating" id="patchFittingRating">★★★★★ (4.8)</div>

    <p class="patch-fitting-desc" id="patchFittingDesc">
      Premium stainless steel top patch fitting with concealed fixing system. Features minimalist design and heavy-duty construction for modern frameless glass doors.
    </p>

    <div class="patch-fitting-sizes" id="patchFittingSizes">
      <strong>Type:</strong><br>
      <span>Top Patch</span><span>Bottom Patch</span><span>Corner Patch</span>
      <span class="active">Lock Patch</span>
    </div>

    <div class="patch-fitting-colors" id="patchFittingColors">
      <strong>Finish:</strong><br>
      <span style="background:#c6a98c"></span>
      <span style="background:#ffffff"></span>
      <span style="background:#1e90ff"></span>
    </div>

    <button class="patch-fitting-cart-btn">+ REQUEST QUOTE</button>

  </div>

</section> -->

    <section class="janson-feature-section" id="jansonFeatureSection">
    <div class="janson-feature-wrapper">

        <!-- LEFT IMAGE -->
        <div class="janson-feature-image">
            <img src="../patch-fitting/ChatGPT Image Jan 19, 2026, 01_24_27 PM.png" alt="Patch Fitting Installation">
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
                    <h4><span>01</span> Concealed Design</h4>
                    <p>Features concealed fixing system for a neat, frameless appearance that maintains the clean lines of glass structures.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">✔</div>
                <div>
                    <h4><span>02</span> Weather Resistance</h4>
                    <p>Special coatings and high-grade materials provide excellent protection against moisture, corrosion, and weathering.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⚙</div>
                <div>
                    <h4><span>03</span> Precision Alignment</h4>
                    <p>Engineered for precise alignment and strong grip, ensuring perfect installation on frameless glass doors and partitions.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⬛</div>
                <div>
                    <h4><span>04</span> Heavy Duty Construction</h4>
                    <p>Manufactured from premium SS 304/316 grade stainless steel or brass for long-lasting performance and durability.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">🏆</div>
                <div>
                    <h4><span>05</span> Versatile Applications</h4>
                    <p>Suitable for various applications including glass facades, shower enclosures, office partitions, and commercial doors.</p>
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




    <section class="patch-fitting-project-section" data-aos="zoom-in">
        <div class="patch-fitting-project-container">
            <div class="patch-fitting-project-left">
                <div class="patch-fitting-project-subtitle">CORPORATE OFFICE PROJECT</div>
                <h2 class="patch-fitting-project-title">Premium Glass Partition Installation</h2>
                <p class="patch-fitting-project-text">
                    A modern corporate office required premium patch fittings for their extensive glass partition system. Our stainless steel patch fittings were selected for their superior concealed design and minimalist aesthetic appeal in contemporary office spaces.
                </p>
                <p class="patch-fitting-project-text">
                    The installatioStainless Steel Over Panels with concealed fixing systems for 10mm thick tempered glass partitions. Special attention was given to precise alignment and smooth operation to maintain the sleek, professional appearance of the office interior.
                </p>
                <p class="patch-fitting-project-text">
                    This project successfully equipped 80+ glass partitions across the office with reliable fitting systems that have performed flawlessly for over 2 years with minimal maintenance requirements.
                </p>
                <ul class="patch-fitting-project-list">
                    <li>Project Type: Corporate Office Interior</li>
                    <li>Product Type: Top & Bottom Patch Fittings</li>
                    <li>Special Features: Concealed Fixing, Precise Alignment</li>
                    <li>Project Completion Time: 6 Weeks</li>
                </ul>
            </div>
            
            <div class="patch-fitting-project-right">
                <img src="../patch-fitting/Dorma Nederland - Design oplossingen - Beyond_1.jpg" alt="Office Glass Partition Project">
            </div>
        </div>
    </section>

    <section class="patch-fitting-faq-section" data-aos="zoom-in">
        <h2 class="patch-fitting-faq-title">PATCH FITTING FAQS</h2>
        <div class="patch-fitting-faq-container">
            <div class="patch-fitting-faq-item">
                <div class="patch-fitting-faq-question">
                    What thickness of glass can your patch fittings support?
                    <span class="patch-fitting-faq-icon">⌄</span>
                </div>
                <div class="patch-fitting-faq-answer">
                    Our patch fittings are designed to support glass thickness from 8mm to 12mm. For standard commercial applications, 8-10mm glass is recommended. For larger doors or heavy-duty applications, 10-12mm glass with our heavy-duty patch fitting models provides optimal stability and safety.
                </div>
            </div>

            <div class="patch-fitting-faq-item">
                <div class="patch-fitting-faq-question">
                    How do patch fittings maintain their appearance in humid environments?
                    <span class="patch-fitting-faq-icon">⌄</span>
                </div>  
                <div class="patch-fitting-faq-answer">
                    Our patch fittings are manufactured from SS 304/316 grade stainless steel or brass with special corrosion-resistant coatings. They are engineered to withstand humid environments including bathrooms, kitchens, and exterior applications without tarnishing or corrosion.
                </div>
            </div>

            <div class="patch-fitting-faq-item">
                <div class="patch-fitting-faq-question">
                    Can patch fittings be adjusted after installation?
                    <span class="patch-fitting-faq-icon">⌄</span>
                </div>
                <div class="patch-fitting-faq-answer">
                    Yes, our patch fittings feature adjustable alignment mechanisms. Both vertical and horizontal adjustments can be made using standard tools to ensure perfect glass door alignment. We provide detailed adjustment guides with each product for easy maintenance.
                </div>
            </div>

            <div class="patch-fitting-faq-item">
                <div class="patch-fitting-faq-question">
                    What is the expected lifespan of patch fittings in commercial buildings?
                    <span class="patch-fitting-faq-icon">⌄</span>
                </div>
                <div class="patch-fitting-faq-answer">
                    Our commercial-grade patch fittings are tested for over 100,000 open-close cycles. In typical commercial settings (offices, hotels, malls), they provide 8-10 years of maintenance-free operation. Residential applications typically see 12+ years of reliable performance with proper care.
                </div>
            </div>
        </div>
        <button class="patch-fitting-faq-btn">View All FAQs</button>
    </section>

    <script>
        function patchFittingProdOpenPopup(title, desc, img){
            document.getElementById("patchFittingProdPopupTitle").innerText = title;
            document.getElementById("patchFittingProdPopupDesc").innerText = desc;
            document.getElementById("patchFittingProdPopupImg").src = img;
            document.getElementById("patchFittingProdPopup").classList.add("active");
        }

        function patchFittingProdClosePopup(){
            document.getElementById("patchFittingProdPopup").classList.remove("active");
        }

        const patchFittingFaqItems = document.querySelectorAll(".patch-fitting-faq-item");
        patchFittingFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                patchFittingFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });

 
const patchFittingProducts = [
  {
    img:"slim-partition/8.jpg",
    title:"Top Patch Fitting",
    category:"Architectural Hardware",
    price:"Custom Quote",
    rating:"★★★★★ (4.8)",
    desc:"Premium top patch fitting with concealed fixing system. Features minimalist design and heavy-duty construction for modern frameless glass doors.",
    sizes:["Top Patch","Bottom Patch","Corner Patch","Lock Patch"],
    activeSize:"Lock Patch",
    colors:["#c6a98c","#ffffff","#1e90ff"]
  },
  {
    img:"slim-partition/9.jpg",
    title:"Bottom Patch Fitting",
    category:"Structural Hardware",
    price:"Custom Quote",
    rating:"★★★★☆ (4.7)",
    desc:"Heavy-duty bottom patch fitting with concealed fixing system for stable glass door support and alignment.",
    sizes:["Top Patch","Bottom Patch","Corner Patch"],
    activeSize:"Bottom Patch",
    colors:["#c6a98c","#1e90ff"]
  },
  {
    img:"slim-partition/10.jpg",
    title:"Corner Patch Fitting",
    category:"Architectural Hardware",
    price:"Custom Quote",
    rating:"★★★★★ (5.0)",
    desc:"Precision corner patch fitting for 90-degree glass connections with minimalist appearance and concealed hardware.",
    sizes:["Top Patch","Bottom Patch","Corner Patch"],
    activeSize:"Corner Patch",
    colors:["#c6a98c","#ffffff"]
  },
  {
    img:"slim-partition/11.jpg",
    title:"Adjustable Patch Fitting",
    category:"Premium Hardware",
    price:"Custom Quote",
    rating:"★★★★☆ (4.8)",
    desc:"Advanced patch fitting with adjustable alignment for perfect glass door installation. Allows customization of mounting position.",
    sizes:["Top Patch","Bottom Patch","Adjustable"],
    activeSize:"Adjustable",
    colors:["#000000","#ffcc00"]
  },
  {
    img:"slim-partition/12.jpg",
    title:"Matte Black Patch Fitting",
    category:"Contemporary Design",
    price:"Custom Quote",
    rating:"★★★★☆ (4.6)",
    desc:"Modern matte black finish patch fitting for contemporary architectural designs. Features scratch-resistant coating and sleek appearance.",
    sizes:["Top Patch","Bottom Patch","Corner Patch"],
    activeSize:"Bottom Patch",
    colors:["#c6a98c","#1e90ff"]
  }
];

function changePatchFittingProduct(el){
  const p = patchFittingProducts[el.dataset.index];

  document.getElementById("patchFittingMainImg").src = p.img;
  document.getElementById("patchFittingTitle").innerText = p.title;
  document.getElementById("patchFittingCategory").innerText = p.category;
  document.getElementById("patchFittingPrice").innerText = p.price;
  document.getElementById("patchFittingRating").innerText = p.rating;
  document.getElementById("patchFittingDesc").innerText = p.desc;

  const sizesBox = document.getElementById("patchFittingSizes");
  sizesBox.innerHTML = "<strong>Type:</strong><br>";
  p.sizes.forEach(s=>{
    const span = document.createElement("span");
    span.innerText = s;
    if(s === p.activeSize) span.classList.add("active");
    sizesBox.appendChild(span);
  });

  const colorBox = document.getElementById("patchFittingColors");
  colorBox.innerHTML = "<strong>Finish:</strong><br>";
  p.colors.forEach(c=>{
    const span = document.createElement("span");
    span.style.background = c;
    colorBox.appendChild(span);
  });

  document.querySelectorAll(".patch-fitting-thumbs img")
    .forEach(img=>img.classList.remove("active"));
  el.classList.add("active");
}



    </script>
<?php include "footer.php"?>