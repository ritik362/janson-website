<?php $page_title = "Glass Handle manufacturers in Muscut";
$description = "As one of the leading Glass Handle manufacturers in Muscut we pride ourselves on offering a premium range of door and partition handles that marry superior functionality with refined aesthetics. We truly design our glass handles with precision and elegance, ensuring that ";
$keyword = "Glass Handle manufacturers in Muscut,Glass Handle supplier in Muscut,Glass Handle exporter in Muscut, Best Glass Handle manufacturers in Muscut, Top Glass Handle manufacturers in Muscut, best Glass Handle supplier in Muscut, Top Glass Handle supplier Muscut, best Glass Handle exporter in Muscut, Top Glass Handle exporter in Muscut,Glass Handle manufacturers,Best Glass Handle manufacturers,Top Glass Handle manufacturers, Glass Handle supplier,Best Glass Handle supplier, Top Glass Handle supplier,Glass Handle exporter,Best Glass Handle exporter,Top Glass Handle exporter";
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
        .glass-handle-hero-section {
            position: relative;
            width: 100%;
            height: 760px;
            overflow: hidden;
            margin-top: -90px;
        }

        .glass-handle-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .glass-handle-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .glass-handle-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .glass-handle-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* WHITE CONTENT BOX - UNIQUE CLASS */
        .glass-handle-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -81px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .glass-handle-content-wrapper {
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .glass-handle-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .glass-handle-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .glass-handle-hero-content h1 {
                font-size: 32px;
            }

            .glass-handle-content-wrapper {
                grid-template-columns: 1fr;
            }
        }


        /* BENEFITS SECTION - UNIQUE CLASS */
        .glass-handle-benefits-wrapper {
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
        .glass-handle-card {
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

        .glass-handle-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .glass-handle-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL - UNIQUE CLASS */
        .glass-handle-tag {
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
        .glass-handle-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE - UNIQUE CLASS */
        .glass-handle-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .glass-handle-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN - UNIQUE CLASS */
        .glass-handle-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE - UNIQUE CLASS */
        .glass-handle-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .glass-handle-benefits-wrapper {
                flex-direction: column;
            }

            .glass-handle-plus,
            .glass-handle-dotted-line {
                display: none;
            }
        }


        /* MAIN SECTION - UNIQUE CLASS */
        .glass-handle-main-section {
            /* max-width: 1400px; */
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE - UNIQUE CLASS */
        .glass-handle-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH - UNIQUE CLASS */
        .glass-handle-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK - UNIQUE CLASS */
        .glass-handle-discuss-link {
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

        .glass-handle-discuss-link:hover {
            color: var(--text-heading);
        }

        .glass-handle-discuss-link .glass-handle-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW - UNIQUE CLASS */
        .glass-handle-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE - UNIQUE CLASS */
        .glass-handle-left-img img {
            width: 730px;
            /* height: 487px; */
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT - UNIQUE CLASS */
        .glass-handle-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .glass-handle-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .glass-handle-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .glass-handle-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS - UNIQUE CLASS */
        .glass-handle-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .glass-handle-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .glass-handle-row {
                flex-direction: column;
            }

            .glass-handle-left-img img {
                width: 100%;
                height: auto;
            }

            .glass-handle-main-section h1 {
                font-size: 30px;
            }

            .glass-handle-main-section {
                padding: 50px 20px;
            }
        }


    /* UNIQUE CONTAINER - RENAMED */
    .glass-handle-prod-section{
        /* max-width: 1400px; */
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .glass-handle-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* UNIQUE GRID - RENAMED */
    .glass-handle-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* UNIQUE CARD - RENAMED */
    .glass-handle-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .glass-handle-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .glass-handle-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .glass-handle-prod-card-info{
        padding:15px;
    }

    .glass-handle-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .glass-handle-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* UNIQUE POPUP - RENAMED */
    .glass-handle-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .glass-handle-prod-popup.active{
        display:flex;
    }

    .glass-handle-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:glassHandleProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes glassHandleProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .glass-handle-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .glass-handle-prod-popup-content{
        padding:20px;
    }

    .glass-handle-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .glass-handle-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .glass-handle-prod-btn{
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

    .glass-handle-prod-btn:hover {
        background-color: #b5987a;
    }

    .glass-handle-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }


    
    /* SECTION WRAPPER - RENAMED */
    .glass-handle-fund-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .glass-handle-fund-container{
        /* max-width: 1400px; */
        padding: 0px 50px;
        margin:auto;
    }

    .glass-handle-fund-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .glass-handle-fund-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .glass-handle-fund-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .glass-handle-fund-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .glass-handle-fund-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP - RENAMED */
    .glass-handle-fund-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD - RENAMED */
    .glass-handle-fund-card{
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

    .glass-handle-fund-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .glass-handle-fund-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .glass-handle-fund-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .glass-handle-fund-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .glass-handle-fund-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST - RENAMED */
    .glass-handle-fund-list{
        list-style:none;
        padding-left:0;
    }

    .glass-handle-fund-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .glass-handle-fund-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .glass-handle-fund-card-wrap{
            flex-direction:column;
        }
        .glass-handle-fund-card{
            min-width:100%;
        }
    }


       /* MAIN WRAPPER - RENAMED */
    .glass-handle-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .glass-handle-project-container{
        max-width: 1550px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT - RENAMED */
    .glass-handle-project-left{
        flex:1;
    }

    .glass-handle-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .glass-handle-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .glass-handle-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS - RENAMED */
    .glass-handle-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .glass-handle-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .glass-handle-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE - RENAMED */
    .glass-handle-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .glass-handle-project-container{
            flex-direction:column;
        }

        .glass-handle-project-right img{
            width:100%;
            height:auto;
        }

        
    }



     /* ===============================
   JANSON GLASS HANDLE (EXACT)
================================ */

#jansonGlassHandleWrapper {
    padding: 80px 5%;
    background: var(--primary-color);
    font-family: var(--font-primary);
}

.janson-glass-handle-inner {
    max-width: 1450px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1.35fr 1fr 80px;
    gap: 40px;
    align-items: center;
}

/* COMMON BOX */
.janson-glass-handle-box {
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
    .janson-glass-handle-inner {
        grid-template-columns: 1fr;
    }

    .janson-vertical-strip {
        writing-mode: horizontal-tb;
        transform: none;
        margin-top: 20px;
    }
}


    
    /* SECTION BACKGROUND - RENAMED */
    .glass-handle-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE - RENAMED */
    .glass-handle-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER - RENAMED */
    .glass-handle-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM - RENAMED */
    .glass-handle-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .glass-handle-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .glass-handle-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON - RENAMED */
    .glass-handle-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT - RENAMED */
    .glass-handle-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .glass-handle-faq-item.active .glass-handle-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE - RENAMED */
    .glass-handle-faq-item.active .glass-handle-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON - RENAMED */
    .glass-handle-faq-btn{
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

    .glass-handle-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    @media (min-width:300px) and (max-width:700px){
    .glass-handle-fund-container{
        padding: 0px !important;
    }
}
.glass-handle-hero-content h5{
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


.glass-handle-product-slider{
display:flex;
gap:40px;
padding:60px;
align-items:center;
}

/* LEFT */
.glass-handle-product-images{
position:relative;
flex:1;
background:linear-gradient(145deg,#0d0d0d,#1c1c1c);
border-radius:12px;
padding:40px;
text-align:center;
}

.glass-handle-stock{
position:absolute;
top:20px;
left:20px;
opacity:0.3;
letter-spacing:2px;
}

.glass-handle-main-img{
width:80%;
transition:0.3s;
}

.glass-handle-thumbs{
display:flex;
justify-content:center;
gap:15px;
margin-top:20px;
flex-wrap:wrap;
}

.glass-handle-thumbs img{
width:60px;
cursor:pointer;
opacity:0.6;
border-radius:8px;
}

.glass-handle-thumbs img.active,
.glass-handle-thumbs img:hover{
opacity:1;
transform:scale(1.1);
}

/* RIGHT */
.glass-handle-product-info{
flex:1;
background:var(--primary-light);
padding:35px;
border-radius:12px;
box-shadow:var(--shadow-medium);
}

.glass-handle-product-title{
font-size:26px;
color:var(--text-heading);
}

.glass-handle-category{
font-size:13px;
opacity:0.7;
}

.glass-handle-price{
font-size:28px;
margin:12px 0;
color:var(--secondary-color);
}

.glass-handle-rating{
color:gold;
margin-bottom:12px;
}

.glass-handle-desc{
font-size:14px;
line-height:1.6;
margin-bottom:18px;
color:var(--text-color);
}

.glass-handle-sizes span{
display:inline-block;
border:1px solid var(--border-color);
padding:6px 10px;
margin:6px 6px 0 0;
cursor:pointer;
border-radius:6px;
}

.glass-handle-sizes span.active{
background:var(--secondary-color);
color:#000;
}

.glass-handle-colors span{
display:inline-block;
width:18px;
height:18px;
border-radius:50%;
margin:8px 8px 0 0;
border:1px solid #555;
}

.glass-handle-cart-btn{
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
.glass-handle-product-slider{
flex-direction:column;
}
}


    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="glass-handle-hero-section"  data-aos="zoom-in">
        <img src="../slim-partition/WhatsApp Image 2025-12-24 at 6.30.17 PM (1).jpeg" alt="Glass Handle Background">
        <div class="glass-handle-hero-content">
            <h5>GLASS HANDLE SYSTEMS</h5>
            <h1>ELEGANT DOOR HANDLES FOR MODERN GLASS ARCHITECTURE</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="glass-handle-content-box"  data-aos="zoom-in">
        <div class="glass-handle-content-wrapper">
            <div>
                <h2 class="glass-handle-content-title">GLASS HANDLE MANUFACTURER IN Muscut</h2>
            </div>
            <div class="glass-handle-content-text">
                <p>
                    As one of the leading Glass Handle manufacturers, we pride ourselves on offering a premium range of door and partition handles that marry superior functionality with refined aesthetics. We truly design our glass handles with precision and elegance, ensuring that they perfectly complement modern interiors while providing exceptional grip, durability, and performance.
                </p>
                <p>
                    Manufactured from high-grade stainless steel, brass, and aluminum materials, our handles are crafted to meet the demands of contemporary architecture and design. Each handle is engineered for both visual appeal and practical use, making it an ideal choice for glass doors in offices, commercial spaces, hotels, and high-end residential settings.
                </p>
                <p>
                    With a state-of-the-art manufacturing process combined with strict quality checks, every handle is assured to be durable, strong, and of timeless design. Our sleek minimalist styles through to bold architectural pieces can meet the requirements of the most diverse aesthetic needs and functions.
                </p>
            </div>
        </div>
    </section>

    <div class="glass-handle-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="glass-handle-card"  data-aos="zoom-in">
            <div class="glass-handle-tag">Benefits</div>
            <img class="glass-handle-icon" src="https://cdn-icons-png.flaticon.com/512/992/992651.png">
            <div class="glass-handle-card-title">ELEGANT DESIGN</div>
            <p>
                Enhances the sophistication of glass doors with sleek, contemporary styling. Durable Construction: Made of high-quality materials that are resistant to rust, wear, and corrosion.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="glass-handle-plus">+</div>

        <!-- CARD 2 -->
        <div class="glass-handle-card" data-aos="zoom-in">
            <div class="glass-handle-tag">Benefits</div>
            <img class="glass-handle-icon" src="https://cdn-icons-png.flaticon.com/512/3430/3430447.png">
            <div class="glass-handle-card-title">COMFORT & VERSATILITY</div>
            <p>
                Comfortable Grip: Ergonomically designed for smooth and firm handling. Diverse uses: suitable for office partitions, shower enclosures, main entrances, and glass cabinets.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="glass-handle-dotted-line"  data-aos="zoom-in"></div>

        <!-- CARD 3 -->
        <div class="glass-handle-card glass-handle-right-card" data-aos="zoom-in">
            <div class="glass-handle-tag">Applications</div>
            <img class="glass-handle-icon" src="https://cdn-icons-png.flaticon.com/512/456/456177.png">
            <div class="glass-handle-card-title">VERSATILE APPLICATIONS</div>
            <p>
                Easy Installation: Designed for quick fitting on framed and frameless glass doors. Custom options include various shapes, sizes, and finishes that would fit different kinds of design themes.
            </p>
        </div>
    </div>

<section class="janson-glass-handle-wrapper" id="jansonGlassHandleWrapper">
    <div class="janson-glass-handle-inner">

        <!-- LEFT IMAGE -->
        <div class="janson-glass-handle-box janson-left-box">
            <div class="janson-img-holder">
                <img src="../GLASS-HANDLE/Brass Glass Handle-2.jpg" alt="Stainless Steel Glass Handle">
            </div>
            <p class="janson-label">STAINLESS STEEL</p>
        </div>

        <!-- CENTER IMAGE -->
        <div class="janson-glass-handle-box janson-center-box">

            <div class="janson-top-logo">
                <span class="janson-logo-je">JE</span>
                <span class="janson-logo-text">JANSON EXPORTS</span>
            </div>

            <div class="janson-img-holder big-img">
                <img src="../GLASS-HANDLE/brass-handle.webp" alt="Brass Glass Handle">
            </div>
            <p class="janson-label">BRASS HANDLE</p>

            <div class="janson-bni-badge">BNI MEMBER</div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="janson-glass-handle-box janson-right-box">
            <div class="janson-img-holder">
                <img src="../GLASS-HANDLE/aluminum-door-handle-500x500.jpg" alt="Aluminum Glass Handle">
            </div>
            <p class="janson-label">ALUMINUM HANDLE</p>
        </div>

        <!-- RIGHT VERTICAL BAR -->
        <div class="janson-vertical-strip">
            <span>GLASS HANDLE</span>
            <span>SUBCATEGORIES</span>
        </div>

    </div>
</section>




    

    <section class="glass-handle-main-section"  data-aos="zoom-in">
        <h1>GLASS HANDLE SUPPLIER IN Muscut</h1>
        <p>
            As a reputed Glass Handle supplier, we are dedicated to providing premium-quality hardware solutions that elevate the aesthetic and functional appeal of modern spaces. With an extensive supply network, we assure prompt and reliable delivery for projects of all scales, from boutique interiors to large commercial developments.
        </p>
        <p>
            We closely collaborate with architects, contractors, and designers to deliver customized products that cater to the needs of each project and design vision. Every handle supplied is tested for strength, finish, and precision to ensure performance over time and satisfy the customer.
        </p>

        <a href="contact.php" class="glass-handle-discuss-link">
            Request a Quote
            <div class="glass-handle-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="glass-handle-row"  data-aos="zoom-in">
            <!-- LEFT IMAGE -->
            <div class="glass-handle-left-img">
                <img src="../GLASS-HANDLE/Premium Glass Handle Solutions.jpg" alt="Glass Handle Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="glass-handle-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Glass Handle Solutions</h2>
                <p>
                    Our glass handles are constructed from premium-grade stainless steel, brass, or aluminum with corrosion and scratch-resistant finishes. Available in mirror, matte, satin, and antique finishes to match any interior design theme.
                </p>
                <p>
                    Designed to be compatible with single and double glass door configurations, our handles feature ergonomic and slip-resistant design. Available in custom lengths and diameters with seamless fit for glass thickness variations.
                </p>
                <p>
                    Our expert team works closely with clients to provide hardware solutions that combine durability, aesthetics, and long service life for modern architectural projects.
                </p>
                <ul class="glass-handle-ul">
                    <li>Constructed from premium-grade stainless steel, brass, or aluminum</li>
                    <li>Corrosion and scratch-resistant finish</li>
                    <li>Available in mirror, matte, satin, and antique finishes</li>
                    <li>Compatible with single and double glass door configurations</li>
                    <li>Ergonomic and slip-resistant design</li>
                    <li>Available in custom lengths and diameters</li>
                    <li>Seamless fit with glass thickness variations</li>
                    <li>Designed for durability and long service life</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="glass-handle-prod-section">
        <h2 class="glass-handle-prod-title">OUR GLASS HANDLE PRODUCTS</h2>
        <div class="glass-handle-prod-grid">
            <!-- CARD 1 -->
            <div class="glass-handle-prod-card" onclick="glassHandleProdOpenPopup('Stainless Steel Glass Handle','Premium stainless steel handle for glass doors. Corrosion-resistant and elegant design.','GLASS-HANDLE/Stainless Steel Handle.jpg')" data-aos="zoom-in"> 
                <img class="glass-handle-prod-card-img" src="../GLASS-HANDLE/Stainless Steel Handle.jpg">
                <div class="glass-handle-prod-card-info">
                    <h3>Stainless Steel Handle</h3>
                    <p>Premium stainless steel construction</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="glass-handle-prod-card" onclick="glassHandleProdOpenPopup('Brass Glass Handle','Elegant brass handle with antique finish. Perfect for luxury interiors.','GLASS-HANDLE/Factory-Price-Stainless-Steel-Shower-Glass-Door-Handle-for-Glass-Door-Pull-Handle.avif')" data-aos="zoom-in">
                <img class="glass-handle-prod-card-img" src="../GLASS-HANDLE/Factory-Price-Stainless-Steel-Shower-Glass-Door-Handle-for-Glass-Door-Pull-Handle.avif">
                <div class="glass-handle-prod-card-info">
                    <h3>Brass Glass Handle</h3>
                    <p>Luxury brass with antique finish</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="glass-handle-prod-card" onclick="glassHandleProdOpenPopup('Aluminum Glass Handle','Lightweight aluminum handle with modern design. Durable and stylish solution.','GLASS-HANDLE/ALUMINUM HANDLE.avif')" data-aos="zoom-in">
                <img class="glass-handle-prod-card-img" src="../GLASS-HANDLE/ALUMINUM HANDLE.avif">
                <div class="glass-handle-prod-card-info">
                    <h3>Aluminum Glass Handle</h3>
                    <p>Lightweight and modern design</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="glass-handle-prod-popup" id="glassHandleProdPopup">
        <span class="glass-handle-prod-close" onclick="glassHandleProdClosePopup()">&times;</span>
        <div class="glass-handle-prod-popup-box">
            <img id="glassHandleProdPopupImg" class="glass-handle-prod-popup-img">
            <div class="glass-handle-prod-popup-content">
                <h2 id="glassHandleProdPopupTitle"></h2>
                <p id="glassHandleProdPopupDesc"></p>
                <a href="contact.php" class="glass-handle-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="glass-handle-fund-section" data-aos="zoom-in">
        <div class="glass-handle-fund-container">
            <div class="glass-handle-fund-top-title">EXPORT QUALITY</div>
            <h2 class="glass-handle-fund-heading">GLASS HANDLE EXPORTER IN Muscut</h2>
            <p class="glass-handle-fund-desc">
                Being one of the trusted Glass Handle exporters, we export top-quality architectural hardware products to international clients who need elegant and durable door solutions. Our export-ready handles are made with precision, based on international design and performance norms.
            </p>
            
            <a href="contact.php" class="glass-handle-fund-link">
                International Enquiries
                <div class="glass-handle-fund-line"></div>
            </a>

            <div class="glass-handle-fund-card-wrap">
                <div class="glass-handle-fund-card">
                    <div class="glass-handle-fund-card-title">Global Standards</div>
                    <p>
                        We export to almost all global markets, with designs and finishes according to various cultural and architectural preferences. Every export consignment is being stringently inspected and safely packed to ensure flawless delivery.
                    </p>
                    <hr>
                    <div class="glass-handle-fund-card-subtitle">Our Export Advantages:</div>
                    <ul class="glass-handle-fund-list">
                        <li>Precision manufacturing to international norms</li>
                        <li>Designs for global architectural preferences</li>
                        <li>Stringent quality inspection process</li>
                        <li>Safe packaging for international transit</li>
                    </ul>
                </div>

                <div class="glass-handle-fund-card">
                    <div class="glass-handle-fund-card-title">International Markets</div>
                    <p>
                        Our commitment to innovation, reliability, and craftsmanship has earned us a preferred exporter status among global partners who respect both style and substance in every detail.
                    </p>
                    <hr>
                    <div class="glass-handle-fund-card-subtitle">Global Reach:</div>
                    <ul class="glass-handle-fund-list">
                        <li>Commercial office spaces worldwide</li>
                        <li>Luxury residential projects</li>
                        <li>Hospitality and hotel industry</li>
                        <li>Retail and showroom installations</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="glass-handle-product-slider" data-aos="zoom-in">

  
  <div class="glass-handle-product-images">
    <span class="glass-handle-stock">IN STOCK</span>

    <img src="../slim-partition/8.jpg" class="glass-handle-main-img" id="glassHandleMainImg">

    <div class="glass-handle-thumbs">
      <img src="../slim-partition/8.jpg" class="active" data-index="0" onclick="changeGlassHandleProduct(this)">
      <img src="../slim-partition/9.jpg" data-index="1" onclick="changeGlassHandleProduct(this)">
      <img src="../slim-partition/10.jpg" data-index="2" onclick="changeGlassHandleProduct(this)">
      <img src="../slim-partition/11.jpg" data-index="3" onclick="changeGlassHandleProduct(this)">
      <img src="../slim-partition/12.jpg" data-index="4" onclick="changeGlassHandleProduct(this)">
    </div>
  </div>

  
  <div class="glass-handle-product-info">

    <h3 class="glass-handle-product-title" id="glassHandleTitle">Stainless Steel Glass Handle</h3>
    <span class="glass-handle-category" id="glassHandleCategory">Architectural Hardware</span>

    <div class="glass-handle-price" id="glassHandlePrice">Custom Quote</div>

    <div class="glass-handle-rating" id="glassHandleRating">★★★★★ (4.9)</div>

    <p class="glass-handle-desc" id="glassHandleDesc">
      Premium stainless steel glass handle with corrosion-resistant finish. Features ergonomic design for comfortable grip and elegant appearance.
    </p>

    <div class="glass-handle-sizes" id="glassHandleSizes">
      <strong>Length:</strong><br>
      <span>200mm</span><span>250mm</span><span>300mm</span>
      <span class="active">Custom</span>
    </div>

    <div class="glass-handle-colors" id="glassHandleColors">
      <strong>Finish:</strong><br>
      <span style="background:#c6a98c"></span>
      <span style="background:#ffffff"></span>
      <span style="background:#1e90ff"></span>
    </div>

    <button class="glass-handle-cart-btn">+ REQUEST QUOTE</button>

  </div>

</section> -->

    <section class="janson-feature-section" id="jansonFeatureSection">
    <div class="janson-feature-wrapper">

        <!-- LEFT IMAGE -->
        <div class="janson-feature-image">
            <img src="../GLASS-HANDLE/commercial-glass-door-handle59132763167-mix.webp" alt="Glass Handle Installation">
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
                    <h4><span>01</span> Ergonomic Design</h4>
                    <p>Carefully engineered for comfortable grip and smooth handling, reducing hand fatigue during frequent use.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">✔</div>
                <div>
                    <h4><span>02</span> Corrosion Resistance</h4>
                    <p>High-grade materials with special finishes provide excellent resistance to rust, wear, and environmental factors.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⚙</div>
                <div>
                    <h4><span>03</span> Easy Installation</h4>
                    <p>Designed for quick and secure fitting on both framed and frameless glass doors with minimal tools required.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⬛</div>
                <div>
                    <h4><span>04</span> Material Excellence</h4>
                    <p>Manufactured from premium stainless steel, brass, and aluminum for strength, durability, and aesthetic appeal.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">🏆</div>
                <div>
                    <h4><span>05</span> Aesthetic Variety</h4>
                    <p>Available in multiple finishes including mirror, matte, satin, and antique to complement any interior design.</p>
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




    <section class="glass-handle-project-section" data-aos="zoom-in">
        <div class="glass-handle-project-container">
            <div class="glass-handle-project-left">
                <div class="glass-handle-project-subtitle">LUXURY HOTEL PROJECT</div>
                <h2 class="glass-handle-project-title">Five-Star Hotel Glass Door Installation</h2>
                <p class="glass-handle-project-text">
                    A luxury hotel chain required premium glass handles for their extensive glass door systems throughout the property. Our stainless steel and brass handles were selected for their elegant appearance and durability.
                </p>
                <p class="glass-handle-project-text">
                    The installation featured custom-length handles with special satin and antique finishes to match the hotel's interior design theme. Special attention was given to ergonomic design for guest comfort and slip-resistant features for safety.
                </p>
                <p class="glass-handle-project-text">
                    This project successfully equipped 200+ glass doors across the hotel with premium handles that have maintained their finish and functionality despite heavy daily use.
                </p>
                <ul class="glass-handle-project-list">
                    <li>Project Type: Luxury Hotel Installation</li>
                    <li>Product Type: Stainless Steel & Brass Handles</li>
                    <li>Special Features: Custom Lengths, Special Finishes</li>
                    <li>Project Completion Time: 3 Weeks</li>
                </ul>
            </div>
            
            <div class="glass-handle-project-right">
                <img src="../GLASS-HANDLE/Five-Star Hotel Glass Door Installation.jpg" alt="Hotel Glass Handle Project">
            </div>
        </div>
    </section>

    <section class="glass-handle-faq-section" data-aos="zoom-in">
        <h2 class="glass-handle-faq-title">GLASS HANDLE FAQS</h2>
        <div class="glass-handle-faq-container">
            <div class="glass-handle-faq-item">
                <div class="glass-handle-faq-question">
                    What materials are best for glass door handles?
                    <span class="glass-handle-faq-icon">⌄</span>
                </div>
                <div class="glass-handle-faq-answer">
                    Stainless steel (304 or 316 grade) offers excellent corrosion resistance and durability. Brass provides a luxury look with natural antimicrobial properties. Aluminum is lightweight and cost-effective. Each material has specific advantages depending on the application, environment, and design requirements.
                </div>
            </div>

            <div class="glass-handle-faq-item">
                <div class="glass-handle-faq-question">
                    How do I choose the right handle length for my glass door?
                    <span class="glass-handle-faq-icon">⌄</span>
                </div>  
                <div class="glass-handle-faq-answer">
                    Standard lengths range from 200mm to 400mm. For standard single glass doors, 250-300mm handles work well. For larger doors or double doors, 300-400mm provides better leverage. Consider door width, user comfort, and aesthetic proportion. We offer custom lengths for specific requirements.
                </div>
            </div>

            <div class="glass-handle-faq-item">
                <div class="glass-handle-faq-question">
                    Can glass handles be installed on existing glass doors?
                    <span class="glass-handle-faq-icon">⌄</span>
                </div>
                <div class="glass-handle-faq-answer">
                    Yes, most glass handles can be retrofitted to existing glass doors with proper drilling and installation. We provide installation templates and guidance. For tempered glass, special diamond-tipped drill bits are required. Professional installation is recommended for optimal results and safety.
                </div>
            </div>

            <div class="glass-handle-faq-item">
                <div class="glass-handle-faq-question">
                    What maintenance do glass handles require?
                    <span class="glass-handle-faq-icon">⌄</span>
                </div>
                <div class="glass-handle-faq-answer">
                    Regular cleaning with mild soap and water is sufficient. Avoid abrasive cleaners that can damage finishes. For stainless steel, occasional polishing maintains shine. Brass may develop a natural patina over time which can be preserved or polished based on preference. Our handles are designed for minimal maintenance.
                </div>
            </div>
        </div>
        <button class="glass-handle-faq-btn">View All FAQs</button>
    </section>


    



    <script>
        function glassHandleProdOpenPopup(title, desc, img){
            document.getElementById("glassHandleProdPopupTitle").innerText = title;
            document.getElementById("glassHandleProdPopupDesc").innerText = desc;
            document.getElementById("glassHandleProdPopupImg").src = img;
            document.getElementById("glassHandleProdPopup").classList.add("active");
        }

        function glassHandleProdClosePopup(){
            document.getElementById("glassHandleProdPopup").classList.remove("active");
        }

        const glassHandleFaqItems = document.querySelectorAll(".glass-handle-faq-item");
        glassHandleFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                glassHandleFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });

 
const glassHandleProducts = [
  {
    img:"slim-partition/8.jpg",
    title:"Stainless Steel Glass Handle",
    category:"Architectural Hardware",
    price:"Custom Quote",
    rating:"★★★★★ (4.9)",
    desc:"Premium stainless steel glass handle with corrosion-resistant finish. Features ergonomic design for comfortable grip and elegant appearance.",
    sizes:["200mm","250mm","300mm","Custom"],
    activeSize:"Custom",
    colors:["#c6a98c","#ffffff","#1e90ff"]
  },
  {
    img:"slim-partition/9.jpg",
    title:"Brass Glass Handle",
    category:"Luxury Hardware",
    price:"Custom Quote",
    rating:"★★★★☆ (4.7)",
    desc:"Elegant brass handle with antique finish. Perfect for luxury interiors and high-end architectural projects.",
    sizes:["200mm","250mm","300mm"],
    activeSize:"250mm",
    colors:["#c6a98c","#1e90ff"]
  },
  {
    img:"slim-partition/10.jpg",
    title:"Aluminum Glass Handle",
    category:"Modern Hardware",
    price:"Custom Quote",
    rating:"★★★★★ (5.0)",
    desc:"Lightweight aluminum handle with contemporary design. Features excellent durability and modern aesthetic appeal.",
    sizes:["200mm","250mm","300mm"],
    activeSize:"300mm",
    colors:["#c6a98c","#ffffff"]
  },
  {
    img:"slim-partition/11.jpg",
    title:"Matte Black Glass Handle",
    category:"Contemporary Design",
    price:"Custom Quote",
    rating:"★★★★☆ (4.8)",
    desc:"Modern matte black finish handle for contemporary interiors. Features slip-resistant texture and minimalist design.",
    sizes:["250mm","300mm","Custom"],
    activeSize:"300mm",
    colors:["#000000","#ffcc00"]
  },
  {
    img:"slim-partition/12.jpg",
    title:"Mirror Finish Handle",
    category:"Premium Hardware",
    price:"Custom Quote",
    rating:"★★★★☆ (4.6)",
    desc:"High-polish mirror finish handle for luxury applications. Creates elegant reflections and premium appearance.",
    sizes:["200mm","250mm","Custom"],
    activeSize:"Custom",
    colors:["#ffffff","#1e90ff"]
  }
];

function changeGlassHandleProduct(el){
  const p = glassHandleProducts[el.dataset.index];

  document.getElementById("glassHandleMainImg").src = p.img;
  document.getElementById("glassHandleTitle").innerText = p.title;
  document.getElementById("glassHandleCategory").innerText = p.category;
  document.getElementById("glassHandlePrice").innerText = p.price;
  document.getElementById("glassHandleRating").innerText = p.rating;
  document.getElementById("glassHandleDesc").innerText = p.desc;

  const sizesBox = document.getElementById("glassHandleSizes");
  sizesBox.innerHTML = "<strong>Length:</strong><br>";
  p.sizes.forEach(s=>{
    const span = document.createElement("span");
    span.innerText = s;
    if(s === p.activeSize) span.classList.add("active");
    sizesBox.appendChild(span);
  });

  const colorBox = document.getElementById("glassHandleColors");
  colorBox.innerHTML = "<strong>Finish:</strong><br>";
  p.colors.forEach(c=>{
    const span = document.createElement("span");
    span.style.background = c;
    colorBox.appendChild(span);
  });

  document.querySelectorAll(".glass-handle-thumbs img")
    .forEach(img=>img.classList.remove("active"));
  el.classList.add("active");
}



    </script>
<?php include "footer.php"?>