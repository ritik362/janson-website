<?php $page_title = "Shower Hinge manufacturer in Dubai";
$description = "As a reputed Shower Hinge manufacturer in Dubai we specialize in producing premium-quality hinges that blend exceptional functionality with sleek design for modern bathroom spaces. Our shower hinges are manufactured with great precision to ensure smooth door movement, long-lasting durability";
$keyword = "Shower Hinge manufacturers in Dubai,Shower Hinge supplier in Dubai,Shower Hinge exporter in Dubai, Best Shower Hinge manufacturers in Dubai, Top Shower Hinge manufacturers in Dubai, best Shower Hinge supplier in Dubai, Top Shower Hinge supplier Dubai, best Shower Hinge exporter in Dubai, Top Shower Hinge exporter in Dubai,Shower Hinge manufacturers,Best Shower Hinge manufacturers,Top Shower Hinge manufacturers, Shower Hinge supplier,Best Shower Hinge supplier, Top Shower Hinge supplier,Shower Hinge exporter,Best Shower Hinge exporter,Top Shower Hinge exporter";
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
        .shower-hinge-hero-section {
            position: relative;
            width: 100%;
            height: 760px;
            overflow: hidden;
            margin-top: -90px;
        }

        .shower-hinge-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .shower-hinge-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .shower-hinge-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .shower-hinge-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* WHITE CONTENT BOX - UNIQUE CLASS */
        .shower-hinge-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -81px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .shower-hinge-content-wrapper {
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .shower-hinge-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .shower-hinge-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .shower-hinge-hero-content h1 {
                font-size: 32px;
            }

            .shower-hinge-content-wrapper {
                grid-template-columns: 1fr;
            }
        }


        /* BENEFITS SECTION - UNIQUE CLASS */
        .shower-hinge-benefits-wrapper {
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
        .shower-hinge-card {
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

        .shower-hinge-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .shower-hinge-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL - UNIQUE CLASS */
        .shower-hinge-tag {
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
        .shower-hinge-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE - UNIQUE CLASS */
        .shower-hinge-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .shower-hinge-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN - UNIQUE CLASS */
        .shower-hinge-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE - UNIQUE CLASS */
        .shower-hinge-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .shower-hinge-benefits-wrapper {
                flex-direction: column;
            }

            .shower-hinge-plus,
            .shower-hinge-dotted-line {
                display: none;
            }
        }


        /* MAIN SECTION - UNIQUE CLASS */
        .shower-hinge-main-section {
            /* max-width: 1400px; */
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE - UNIQUE CLASS */
        .shower-hinge-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH - UNIQUE CLASS */
        .shower-hinge-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK - UNIQUE CLASS */
        .shower-hinge-discuss-link {
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

        .shower-hinge-discuss-link:hover {
            color: var(--text-heading);
        }

        .shower-hinge-discuss-link .shower-hinge-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW - UNIQUE CLASS */
        .shower-hinge-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE - UNIQUE CLASS */
        .shower-hinge-left-img img {
            width: 730px;
            /* height: 487px; */
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT - UNIQUE CLASS */
        .shower-hinge-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .shower-hinge-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .shower-hinge-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .shower-hinge-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS - UNIQUE CLASS */
        .shower-hinge-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .shower-hinge-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .shower-hinge-row {
                flex-direction: column;
            }

            .shower-hinge-left-img img {
                width: 100%;
                height: auto;
            }

            .shower-hinge-main-section h1 {
                font-size: 30px;
            }

            .shower-hinge-main-section {
                padding: 50px 20px;
            }
        }


    /* UNIQUE CONTAINER - RENAMED */
    .shower-hinge-prod-section{
        /* max-width: 1400px; */
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .shower-hinge-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* UNIQUE GRID - RENAMED */
    .shower-hinge-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* UNIQUE CARD - RENAMED */
    .shower-hinge-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .shower-hinge-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .shower-hinge-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .shower-hinge-prod-card-info{
        padding:15px;
    }

    .shower-hinge-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .shower-hinge-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* UNIQUE POPUP - RENAMED */
    .shower-hinge-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .shower-hinge-prod-popup.active{
        display:flex;
    }

    .shower-hinge-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:showerHingeProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes showerHingeProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .shower-hinge-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .shower-hinge-prod-popup-content{
        padding:20px;
    }

    .shower-hinge-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .shower-hinge-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .shower-hinge-prod-btn{
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

    .shower-hinge-prod-btn:hover {
        background-color: #b5987a;
    }

    .shower-hinge-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }


    
    /* SECTION WRAPPER - RENAMED */
    .shower-hinge-fund-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .shower-hinge-fund-container{
        /* max-width: 1400px; */
        padding: 0px 50px;
        margin:auto;
    }

    .shower-hinge-fund-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .shower-hinge-fund-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .shower-hinge-fund-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .shower-hinge-fund-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .shower-hinge-fund-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP - RENAMED */
    .shower-hinge-fund-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD - RENAMED */
    .shower-hinge-fund-card{
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

    .shower-hinge-fund-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .shower-hinge-fund-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .shower-hinge-fund-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .shower-hinge-fund-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .shower-hinge-fund-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST - RENAMED */
    .shower-hinge-fund-list{
        list-style:none;
        padding-left:0;
    }

    .shower-hinge-fund-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .shower-hinge-fund-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .shower-hinge-fund-card-wrap{
            flex-direction:column;
        }
        .shower-hinge-fund-card{
            min-width:100%;
        }
    }


       /* MAIN WRAPPER - RENAMED */
    .shower-hinge-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .shower-hinge-project-container{
        max-width: 1550px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT - RENAMED */
    .shower-hinge-project-left{
        flex:1;
    }

    .shower-hinge-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .shower-hinge-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .shower-hinge-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS - RENAMED */
    .shower-hinge-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .shower-hinge-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .shower-hinge-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE - RENAMED */
    .shower-hinge-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .shower-hinge-project-container{
            flex-direction:column;
        }

        .shower-hinge-project-right img{
            width:100%;
            height:auto;
        }

        
    }



     /* ===============================
   JANSON SHOWER HINGE (EXACT)
================================ */

#jansonShowerHingeWrapper {
    padding: 80px 5%;
    background: var(--primary-color);
    font-family: var(--font-primary);
}

.janson-shower-hinge-inner {
    max-width: 1450px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1.35fr 1fr 80px;
    gap: 40px;
    align-items: center;
}

/* COMMON BOX */
.janson-shower-hinge-box {
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
    .janson-shower-hinge-inner {
        grid-template-columns: 1fr;
    }

    .janson-vertical-strip {
        writing-mode: horizontal-tb;
        transform: none;
        margin-top: 20px;
    }
}


    
    /* SECTION BACKGROUND - RENAMED */
    .shower-hinge-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE - RENAMED */
    .shower-hinge-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER - RENAMED */
    .shower-hinge-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM - RENAMED */
    .shower-hinge-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .shower-hinge-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .shower-hinge-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON - RENAMED */
    .shower-hinge-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT - RENAMED */
    .shower-hinge-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .shower-hinge-faq-item.active .shower-hinge-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE - RENAMED */
    .shower-hinge-faq-item.active .shower-hinge-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON - RENAMED */
    .shower-hinge-faq-btn{
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

    .shower-hinge-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    @media (min-width:300px) and (max-width:700px){
    .shower-hinge-fund-container{
        padding: 0px !important;
    }
}
.shower-hinge-hero-content h5{
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
    /* object-fit: cover; */
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


.shower-hinge-product-slider{
display:flex;
gap:40px;
padding:60px;
align-items:center;
}

/* LEFT */
.shower-hinge-product-images{
position:relative;
flex:1;
background:linear-gradient(145deg,#0d0d0d,#1c1c1c);
border-radius:12px;
padding:40px;
text-align:center;
}

.shower-hinge-stock{
position:absolute;
top:20px;
left:20px;
opacity:0.3;
letter-spacing:2px;
}

.shower-hinge-main-img{
width:80%;
transition:0.3s;
}

.shower-hinge-thumbs{
display:flex;
justify-content:center;
gap:15px;
margin-top:20px;
flex-wrap:wrap;
}

.shower-hinge-thumbs img{
width:60px;
cursor:pointer;
opacity:0.6;
border-radius:8px;
}

.shower-hinge-thumbs img.active,
.shower-hinge-thumbs img:hover{
opacity:1;
transform:scale(1.1);
}

/* RIGHT */
.shower-hinge-product-info{
flex:1;
background:var(--primary-light);
padding:35px;
border-radius:12px;
box-shadow:var(--shadow-medium);
}

.shower-hinge-product-title{
font-size:26px;
color:var(--text-heading);
}

.shower-hinge-category{
font-size:13px;
opacity:0.7;
}

.shower-hinge-price{
font-size:28px;
margin:12px 0;
color:var(--secondary-color);
}

.shower-hinge-rating{
color:gold;
margin-bottom:12px;
}

.shower-hinge-desc{
font-size:14px;
line-height:1.6;
margin-bottom:18px;
color:var(--text-color);
}

.shower-hinge-sizes span{
display:inline-block;
border:1px solid var(--border-color);
padding:6px 10px;
margin:6px 6px 0 0;
cursor:pointer;
border-radius:6px;
}

.shower-hinge-sizes span.active{
background:var(--secondary-color);
color:#000;
}

.shower-hinge-colors span{
display:inline-block;
width:18px;
height:18px;
border-radius:50%;
margin:8px 8px 0 0;
border:1px solid #555;
}

.shower-hinge-cart-btn{
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
.shower-hinge-product-slider{
flex-direction:column;
}
}


    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="shower-hinge-hero-section"  data-aos="zoom-in">
        <img src="../slim-partition/WhatsApp Image 2025-12-24 at 6.30.17 PM (1).jpeg" alt="Shower Hinge Background">
        <div class="shower-hinge-hero-content">
            <h5>SHOWER HINGE SYSTEMS</h5>
            <h1>PRECISION HINGES FOR MODERN SHOWER ENCLOSURES</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="shower-hinge-content-box"  data-aos="zoom-in">
        <div class="shower-hinge-content-wrapper">
            <div>
                <h2 class="shower-hinge-content-title">SHOWER HINGE MANUFACTURER IN Dubai</h2>
            </div>
            <div class="shower-hinge-content-text">
                <p>
                    As a reputed Shower Hinge manufacturer, we specialize in producing premium-quality hinges that blend exceptional functionality with sleek design for modern bathroom spaces. Our shower hinges are manufactured with great precision to ensure smooth door movement, long-lasting durability, and superior corrosion resistance.
                </p>
                <p>
                    Compatible with glass shower enclosures and frameless doors, these hinged options showcase perfect strength, stability, and style. Constructed of quality stainless steel and brass, every hinge is tested thoroughly, ensuring total performance in very humid and moisture-laden areas.
                </p>
                <p>
                    Advanced technology combined with superior craftsmanship enables our shower hinges to add style and character to the bathroom while ensuring safety, reliability, and elegance. Be it residential bathrooms, luxury hotels, or other business establishments, our shower hinges present a trusted choice for architects, interior designers, and contractors in search of dependable hardware solutions.
                </p>
            </div>
        </div>
    </section>

    <div class="shower-hinge-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="shower-hinge-card"  data-aos="zoom-in">
            <div class="shower-hinge-tag">Benefits</div>
            <img class="shower-hinge-icon" src="https://cdn-icons-png.flaticon.com/512/992/992651.png">
            <div class="shower-hinge-card-title">SMOOTH FUNCTIONALITY</div>
            <p>
                Provides smooth, seamless door opening and closing for a high-class user experience. Superior Durability: Made from high-quality stainless steel or brass for long life.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="shower-hinge-plus">+</div>

        <!-- CARD 2 -->
        <div class="shower-hinge-card" data-aos="zoom-in">
            <div class="shower-hinge-tag">Benefits</div>
            <img class="shower-hinge-icon" src="https://cdn-icons-png.flaticon.com/512/3430/3430447.png">
            <div class="shower-hinge-card-title">CORROSION RESISTANCE</div>
            <p>
                Anti-Corrosion & Rust: Perfectly suited for bathroom use in high-moisture conditions. Elegant Looks: It gives a polished, minimalist touch to modern shower enclosures.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="shower-hinge-dotted-line"  data-aos="zoom-in"></div>

        <!-- CARD 3 -->
        <div class="shower-hinge-card shower-hinge-right-card" data-aos="zoom-in">
            <div class="shower-hinge-tag">Applications</div>
            <img class="shower-hinge-icon" src="https://cdn-icons-png.flaticon.com/512/456/456177.png">
            <div class="shower-hinge-card-title">VERSATILE APPLICATIONS</div>
            <p>
                Easy to Install: Designed for rapid and secure mounting on frameless glass doors. Custom Options: Available in multiple finishes and configurations to match various bathroom styles.
            </p>
        </div>
    </div>

<section class="janson-shower-hinge-wrapper" id="jansonShowerHingeWrapper">
    <div class="janson-shower-hinge-inner">

        <!-- LEFT IMAGE -->
        <div class="janson-shower-hinge-box janson-left-box">
            <div class="janson-img-holder">
                <img src="../SHOWER HINGE/STAINLESS STEEL HINGE.png" alt="Stainless Steel Shower Hinge">
            </div>
            <p class="janson-label">STAINLESS STEEL HINGE</p>
        </div>

        <!-- CENTER IMAGE -->
        <div class="janson-shower-hinge-box janson-center-box">

            <div class="janson-top-logo">
                <span class="janson-logo-je">JE</span>
                <span class="janson-logo-text">JANSON EXPORTS</span>
            </div>

            <div class="janson-img-holder big-img">
                <img src="../SHOWER HINGE/BRASS SHOWER HINGE.jpg" alt="Brass Shower Hinge">
            </div>
            <p class="janson-label">BRASS SHOWER HINGE</p>

            <div class="janson-bni-badge">BNI MEMBER</div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="janson-shower-hinge-box janson-right-box">
            <div class="janson-img-holder">
                <img src="../SHOWER HINGE/HEAVY DUTY HINGE.webp" alt="Heavy Duty Shower Hinge">
            </div>
            <p class="janson-label">HEAVY DUTY HINGE</p>
        </div>

        <!-- RIGHT VERTICAL BAR -->
        <div class="janson-vertical-strip">
            <span>SHOWER HINGE</span>
            <span>SUBCATEGORIES</span>
        </div>

    </div>
</section>




    

    <section class="shower-hinge-main-section"  data-aos="zoom-in">
        <h1>SHOWER HINGE SUPPLIER IN Dubai</h1>
        <p>
            As one of the prominent suppliers of Shower Hinges, we supply a wide variety of high-performance hinges to fulfill the diversified requirement of our clients belonging to residential, commercial, and hospitality sectors. Assuring timely availability with consistent quality, our supply network makes us a dependable partner for interior projects of every size.
        </p>
        <p>
            We supply bespoke solutions that merge functional excellence with contemporary design. Each hinge supplied undergoes thorough quality inspection for smooth operation, easy alignment, and a durable finish that ensures total satisfaction right from installation to usage.
        </p>

        <a href="contact.php" class="shower-hinge-discuss-link">
            Request a Quote
            <div class="shower-hinge-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="shower-hinge-row"  data-aos="zoom-in">
            <!-- LEFT IMAGE -->
            <div class="shower-hinge-left-img">
                <img src="../SHOWER HINGE/Premium Shower Hinge Solutions.jpg" alt="Shower Hinge Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="shower-hinge-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Shower Hinge Solutions</h2>
                <p>
                    Our shower hinges are made of high-quality stainless steel or brass with polished, satin, matte black, and antique finish options. Suitable for 8mm to 12mm thick toughened glass with available opening configurations including 90°, 135°, and 180°.
                </p>
                <p>
                    Designed with heavy-duty construction for large glass panels, our hinges feature rust-proof, scratch-resistant surfaces. They are tested for high performance and long life with easy alignment, installation, and maintenance features.
                </p>
                <p>
                    Our expert team works closely with clients to provide reliable hinge solutions that combine strength, aesthetics, and functionality for modern shower enclosures.
                </p>
                <ul class="shower-hinge-ul">
                    <li>Made of high-quality stainless steel or brass</li>
                    <li>Polished, satin, matte black, and antique finish options</li>
                    <li>Suitable for 8mm to 12mm thick toughened glass</li>
                    <li>Available opening configurations include 90°, 135°, and 180°</li>
                    <li>Heavy-duty construction for large glass panels</li>
                    <li>Rust-proof, scratch-resistant surface</li>
                    <li>High performance and long life tested</li>
                    <li>Easy to align, install, and maintain</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="shower-hinge-prod-section">
        <h2 class="shower-hinge-prod-title">OUR SHOWER HINGE PRODUCTS</h2>
        <div class="shower-hinge-prod-grid">
            <!-- CARD 1 -->
            <div class="shower-hinge-prod-card" onclick="showerHingeProdOpenPopup('Stainless Steel Shower Hinge','Premium stainless steel hinge for shower doors. Corrosion-resistant and durable.','SHOWER HINGE/stainless-steel-glass-door-shower-hinge1-.webp')" data-aos="zoom-in"> 
                <img class="shower-hinge-prod-card-img" src="../SHOWER HINGE/stainless-steel-glass-door-shower-hinge1-.webp">
                <div class="shower-hinge-prod-card-info">
                    <h3>Stainless Steel Hinge</h3>
                    <p>Premium stainless steel construction</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="shower-hinge-prod-card" onclick="showerHingeProdOpenPopup('Brass Shower Hinge','Elegant brass hinge with antique finish. Perfect for luxury bathrooms.','SHOWER HINGE/Brass Shower Hinge-2.avif')" data-aos="zoom-in">
                <img class="shower-hinge-prod-card-img" src="../SHOWER HINGE/Brass Shower Hinge-2.avif">
                <div class="shower-hinge-prod-card-info">
                    <h3>Brass Shower Hinge</h3>
                    <p>Luxury brass with antique finish</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="shower-hinge-prod-card" onclick="showerHingeProdOpenPopup('Heavy Duty Shower Hinge','Industrial-grade hinge for large glass panels. Heavy-duty construction.','SHOWER HINGE/Heavy Duty Shower Hinge.jpg')" data-aos="zoom-in">
                <img class="shower-hinge-prod-card-img" src="../SHOWER HINGE/Heavy Duty Shower Hinge.jpg">
                <div class="shower-hinge-prod-card-info">
                    <h3>Heavy Duty Hinge</h3>
                    <p>Industrial-grade for large panels</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="shower-hinge-prod-popup" id="showerHingeProdPopup">
        <span class="shower-hinge-prod-close" onclick="showerHingeProdClosePopup()">&times;</span>
        <div class="shower-hinge-prod-popup-box">
            <img id="showerHingeProdPopupImg" class="shower-hinge-prod-popup-img">
            <div class="shower-hinge-prod-popup-content">
                <h2 id="showerHingeProdPopupTitle"></h2>
                <p id="showerHingeProdPopupDesc"></p>
                <a href="contact.php" class="shower-hinge-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="shower-hinge-fund-section" data-aos="zoom-in">
        <div class="shower-hinge-fund-container">
            <div class="shower-hinge-fund-top-title">EXPORT QUALITY</div>
            <h2 class="shower-hinge-fund-heading">SHOWER HINGE EXPORTER IN Dubai</h2>
            <p class="shower-hinge-fund-desc">
                We are an established exporter of Shower Hinges and are proud to supply top-quality bathroom hardware solutions to clients across global markets. Our export-grade shower hinges have been manufactured to international benchmarks of design precision, safety, and performance.
            </p>
            
            <a href="contact.php" class="shower-hinge-fund-link">
                International Enquiries
                <div class="shower-hinge-fund-line"></div>
            </a>

            <div class="shower-hinge-fund-card-wrap">
                <div class="shower-hinge-fund-card">
                    <div class="shower-hinge-fund-card-title">Global Standards</div>
                    <p>
                        We produce for international distributors, builders, and interior brands, offering customization possibilities in design and finish to meet the latest international architectural tastes.
                    </p>
                    <hr>
                    <div class="shower-hinge-fund-card-subtitle">Our Export Advantages:</div>
                    <ul class="shower-hinge-fund-list">
                        <li>Manufactured to international benchmarks</li>
                        <li>Design precision and safety standards</li>
                        <li>Customization for international tastes</li>
                        <li>Thorough quality checks before export</li>
                    </ul>
                </div>

                <div class="shower-hinge-fund-card">
                    <div class="shower-hinge-fund-card-title">International Markets</div>
                    <p>
                        Each hinge is carefully packed and thoroughly checked before export to ensure safe arrival and flawless functionality at installation. With a strong commitment to quality, innovation, and customer satisfaction, we have emerged as a reliable exporter.
                    </p>
                    <hr>
                    <div class="shower-hinge-fund-card-subtitle">Global Reach:</div>
                    <ul class="shower-hinge-fund-list">
                        <li>International distributors worldwide</li>
                        <li>Global builders and contractors</li>
                        <li>Interior design brands</li>
                        <li>Bathroom hardware specialists</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="shower-hinge-product-slider" data-aos="zoom-in">

 
  <div class="shower-hinge-product-images">
    <span class="shower-hinge-stock">IN STOCK</span>

    <img src="../slim-partition/8.jpg" class="shower-hinge-main-img" id="showerHingeMainImg">

    <div class="shower-hinge-thumbs">
      <img src="../slim-partition/8.jpg" class="active" data-index="0" onclick="changeShowerHingeProduct(this)">
      <img src="../slim-partition/9.jpg" data-index="1" onclick="changeShowerHingeProduct(this)">
      <img src="../slim-partition/10.jpg" data-index="2" onclick="changeShowerHingeProduct(this)">
      <img src="../slim-partition/11.jpg" data-index="3" onclick="changeShowerHingeProduct(this)">
      <img src="../slim-partition/12.jpg" data-index="4" onclick="changeShowerHingeProduct(this)">
    </div>
  </div>

  <div class="shower-hinge-product-info">

    <h3 class="shower-hinge-product-title" id="showerHingeTitle">Stainless Steel Shower Hinge</h3>
    <span class="shower-hinge-category" id="showerHingeCategory">Bathroom Hardware</span>

    <div class="shower-hinge-price" id="showerHingePrice">Custom Quote</div>

    <div class="shower-hinge-rating" id="showerHingeRating">★★★★★ (4.8)</div>

    <p class="shower-hinge-desc" id="showerHingeDesc">
      Premium stainless steel shower hinge with corrosion-resistant finish. Features smooth operation and heavy-duty construction for modern shower enclosures.
    </p>

    <div class="shower-hinge-sizes" id="showerHingeSizes">
      <strong>Opening Angle:</strong><br>
      <span>90°</span><span>135°</span><span>180°</span>
      <span class="active">Adjustable</span>
    </div>

    <div class="shower-hinge-colors" id="showerHingeColors">
      <strong>Finish:</strong><br>
      <span style="background:#c6a98c"></span>
      <span style="background:#ffffff"></span>
      <span style="background:#1e90ff"></span>
    </div>

    <button class="shower-hinge-cart-btn">+ REQUEST QUOTE</button>

  </div>

</section> -->

    <section class="janson-feature-section" id="jansonFeatureSection">
    <div class="janson-feature-wrapper">

        <!-- LEFT IMAGE -->
        <div class="janson-feature-image">
            <img src="../SHOWER HINGE/Premium Wellness Center Installation.png" alt="Shower Hinge Installation">
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
                    <p>Precision-engineered for seamless door movement with adjustable tension control for perfect opening and closing.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">✔</div>
                <div>
                    <h4><span>02</span> Corrosion Resistance</h4>
                    <p>Special coatings and high-grade materials provide excellent protection against moisture, steam, and bathroom chemicals.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⚙</div>
                <div>
                    <h4><span>03</span> Easy Installation</h4>
                    <p>Designed for quick mounting with precise alignment features that simplify installation on frameless glass doors.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⬛</div>
                <div>
                    <h4><span>04</span> Heavy Duty Construction</h4>
                    <p>Manufactured from premium stainless steel or brass to support heavy glass panels with long-lasting performance.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">🏆</div>
                <div>
                    <h4><span>05</span> Versatile Configurations</h4>
                    <p>Available in multiple opening angles (90°, 135°, 180°) to suit different shower enclosure designs and space requirements.</p>
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




    <section class="shower-hinge-project-section" data-aos="zoom-in">
        <div class="shower-hinge-project-container">
            <div class="shower-hinge-project-left">
                <div class="shower-hinge-project-subtitle">LUXURY SPA PROJECT</div>
                <h2 class="shower-hinge-project-title">Premium Wellness Center Installation</h2>
                <p class="shower-hinge-project-text">
                    A high-end wellness spa required premium shower hinges for their extensive steam rooms and shower facilities. Our stainless steel shower hinges were selected for their superior corrosion resistance and smooth operation in high-moisture environments.
                </p>
                <p class="shower-hinge-project-text">
                    The installation featured heavy-duty hinges with 180° opening capability for maximum accessibility. Special attention was given to rust-proof coatings and scratch-resistant finishes to maintain aesthetic appeal despite constant exposure to steam and water.
                </p>
                <p class="shower-hinge-project-text">
                    This project successfully equipped 50+ shower enclosures across the spa with reliable hinge systems that have performed flawlessly for over 2 years with zero maintenance issues.
                </p>
                <ul class="shower-hinge-project-list">
                    <li>Project Type: Luxury Wellness Spa</li>
                    <li>Product Type: Stainless Steel Shower Hinges</li>
                    <li>Special Features: 180° Opening, Rust-Proof Coating</li>
                    <li>Project Completion Time: 4 Weeks</li>
                </ul>
            </div>
            
            <div class="shower-hinge-project-right">
                <img src="../SHOWER HINGE/618DzzfLw0L-mix.jpg" alt="Spa Shower Hinge Project">
            </div>
        </div>
    </section>

    <section class="shower-hinge-faq-section" data-aos="zoom-in">
        <h2 class="shower-hinge-faq-title">SHOWER HINGE FAQS</h2>
        <div class="shower-hinge-faq-container">
            <div class="shower-hinge-faq-item">
                <div class="shower-hinge-faq-question">
                    What thickness of glass can your shower hinges support?
                    <span class="shower-hinge-faq-icon">⌄</span>
                </div>
                <div class="shower-hinge-faq-answer">
                    Our shower hinges are designed to support glass thickness from 8mm to 12mm. For standard applications, 8-10mm glass is recommended. For larger doors or heavy-duty applications, 10-12mm glass with our heavy-duty hinge models provides optimal stability and safety.
                </div>
            </div>

            <div class="shower-hinge-faq-item">
                <div class="shower-hinge-faq-question">
                    How do I maintain shower hinges in high-moisture environments?
                    <span class="shower-hinge-faq-icon">⌄</span>
                </div>  
                <div class="shower-hinge-faq-answer">
                    Regular wiping with a dry cloth after use helps prevent water spots. For deeper cleaning, use mild soap solution and avoid abrasive cleaners. Our hinges feature special corrosion-resistant coatings, but occasional lubrication of moving parts with silicone spray (not oil-based) ensures smooth operation.
                </div>
            </div>

            <div class="shower-hinge-faq-item">
                <div class="shower-hinge-faq-question">
                    Can shower hinges be adjusted after installation?
                    <span class="shower-hinge-faq-icon">⌄</span>
                </div>
                <div class="shower-hinge-faq-answer">
                    Yes, our shower hinges feature adjustable tension and alignment mechanisms. Vertical and horizontal adjustments can be made using standard tools to ensure perfect door alignment and smooth operation. We provide detailed adjustment guides with each product.
                </div>
            </div>

            <div class="shower-hinge-faq-item">
                <div class="shower-hinge-faq-question">
                    What is the lifespan of shower hinges in commercial applications?
                    <span class="shower-hinge-faq-icon">⌄</span>
                </div>
                <div class="shower-hinge-faq-answer">
                    Our commercial-grade shower hinges are tested for over 200,000 open-close cycles. In typical commercial settings (hotels, gyms, spas), they provide 5-8 years of maintenance-free operation. Residential applications typically see 10+ years of reliable performance with proper care.
                </div>
            </div>
        </div>
        <button class="shower-hinge-faq-btn">View All FAQs</button>
    </section>


    



    <script>
        function showerHingeProdOpenPopup(title, desc, img){
            document.getElementById("showerHingeProdPopupTitle").innerText = title;
            document.getElementById("showerHingeProdPopupDesc").innerText = desc;
            document.getElementById("showerHingeProdPopupImg").src = img;
            document.getElementById("showerHingeProdPopup").classList.add("active");
        }

        function showerHingeProdClosePopup(){
            document.getElementById("showerHingeProdPopup").classList.remove("active");
        }

        const showerHingeFaqItems = document.querySelectorAll(".shower-hinge-faq-item");
        showerHingeFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                showerHingeFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });

 
const showerHingeProducts = [
  {
    img:"slim-partition/8.jpg",
    title:"Stainless Steel Shower Hinge",
    category:"Bathroom Hardware",
    price:"Custom Quote",
    rating:"★★★★★ (4.8)",
    desc:"Premium stainless steel shower hinge with corrosion-resistant finish. Features smooth operation and heavy-duty construction for modern shower enclosures.",
    sizes:["90°","135°","180°","Adjustable"],
    activeSize:"Adjustable",
    colors:["#c6a98c","#ffffff","#1e90ff"]
  },
  {
    img:"slim-partition/9.jpg",
    title:"Brass Shower Hinge",
    category:"Luxury Bathroom Hardware",
    price:"Custom Quote",
    rating:"★★★★☆ (4.7)",
    desc:"Elegant brass hinge with antique finish. Perfect for luxury bathrooms and high-end shower enclosure installations.",
    sizes:["90°","135°","180°"],
    activeSize:"135°",
    colors:["#c6a98c","#1e90ff"]
  },
  {
    img:"slim-partition/10.jpg",
    title:"Heavy Duty Shower Hinge",
    category:"Commercial Grade",
    price:"Custom Quote",
    rating:"★★★★★ (5.0)",
    desc:"Industrial-grade hinge for large glass panels and commercial applications. Features enhanced load capacity and durability.",
    sizes:["90°","135°","180°"],
    activeSize:"180°",
    colors:["#c6a98c","#ffffff"]
  },
  {
    img:"slim-partition/11.jpg",
    title:"Adjustable Tension Hinge",
    category:"Premium Hardware",
    price:"Custom Quote",
    rating:"★★★★☆ (4.8)",
    desc:"Advanced hinge with adjustable tension control for perfect door operation. Allows customization of opening and closing force.",
    sizes:["90°","135°","Adjustable"],
    activeSize:"Adjustable",
    colors:["#000000","#ffcc00"]
  },
  {
    img:"slim-partition/12.jpg",
    title:"Matte Black Shower Hinge",
    category:"Contemporary Design",
    price:"Custom Quote",
    rating:"★★★★☆ (4.6)",
    desc:"Modern matte black finish hinge for contemporary bathroom designs. Features scratch-resistant coating and smooth operation.",
    sizes:["90°","135°","180°"],
    activeSize:"135°",
    colors:["#c6a98c","#1e90ff"]
  }
];

function changeShowerHingeProduct(el){
  const p = showerHingeProducts[el.dataset.index];

  document.getElementById("showerHingeMainImg").src = p.img;
  document.getElementById("showerHingeTitle").innerText = p.title;
  document.getElementById("showerHingeCategory").innerText = p.category;
  document.getElementById("showerHingePrice").innerText = p.price;
  document.getElementById("showerHingeRating").innerText = p.rating;
  document.getElementById("showerHingeDesc").innerText = p.desc;

  const sizesBox = document.getElementById("showerHingeSizes");
  sizesBox.innerHTML = "<strong>Opening Angle:</strong><br>";
  p.sizes.forEach(s=>{
    const span = document.createElement("span");
    span.innerText = s;
    if(s === p.activeSize) span.classList.add("active");
    sizesBox.appendChild(span);
  });

  const colorBox = document.getElementById("showerHingeColors");
  colorBox.innerHTML = "<strong>Finish:</strong><br>";
  p.colors.forEach(c=>{
    const span = document.createElement("span");
    span.style.background = c;
    colorBox.appendChild(span);
  });

  document.querySelectorAll(".shower-hinge-thumbs img")
    .forEach(img=>img.classList.remove("active"));
  el.classList.add("active");
}



    </script>
<?php include "footer.php"?>