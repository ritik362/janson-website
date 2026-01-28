<?php $page_title = "Shower Partitions manufacturer in Gurgaon";
$description = "As one of the leading manufacturers of Shower Partitions, we design and manufacture stylish, durable, and functional shower screens to add a touch of sophistication to modern bathrooms. Our shower partitions are designed with precision";
$keyword = "Shower Partitions manufacturers in Gurgaon,Shower Partitions supplier in Gurgaon,Shower Partitions exporter in Gurgaon, Best Shower Partitions manufacturers in Gurgaon, Top Shower Partitions manufacturers in Gurgaon, best Shower Partitions supplier in Gurgaon, Top Shower Partitions supplier Gurgaon, best Shower Partitions exporter in Gurgaon, Top Shower Partitions exporter in Gurgaon,Shower Partitions manufacturers,Best Shower Partitions manufacturers,Top Shower Partitions manufacturers, Shower Partitions supplier,Best Shower Partitions supplier, Top Shower Partitions supplier,Shower Partitions exporter,Best Shower Partitions exporter,Top Shower Partitions exporter";
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
        .shower-hero-section {
            position: relative;
            width: 100%;
            height: 760px;
            overflow: hidden;
            margin-top: -90px;
        }

        .shower-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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

        /* WHITE CONTENT BOX - UNIQUE CLASS */
        .shower-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -81px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .shower-content-wrapper {
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


        /* BENEFITS SECTION - UNIQUE CLASS */
        .shower-benefits-wrapper {
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

        /* TAG LABEL - UNIQUE CLASS */
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

        /* ICON - UNIQUE CLASS */
        .shower-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE - UNIQUE CLASS */
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

        /* PLUS SIGN - UNIQUE CLASS */
        .shower-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE - UNIQUE CLASS */
        .shower-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px){
            .shower-benefits-wrapper {
                flex-direction: column;
            }

            .shower-plus,
            .shower-dotted-line {
                display: none;
            }
        }


        /* MAIN SECTION - UNIQUE CLASS */
        .shower-main-section {
            /* max-width: 1400px; */
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE - UNIQUE CLASS */
        .shower-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH - UNIQUE CLASS */
        .shower-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK - UNIQUE CLASS */
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

        /* IMAGE + CONTENT ROW - UNIQUE CLASS */
        .shower-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE - UNIQUE CLASS */
        .shower-left-img img {
            width: 730px;
            height: 487px;
            /* object-fit: cover; */
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT - UNIQUE CLASS */
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

        /* BULLETS - UNIQUE CLASS */
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


    /* UNIQUE CONTAINER - RENAMED */
    .shower-prod-section{
        /* max-width: 1400px; */
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

    /* UNIQUE GRID - RENAMED */
    .shower-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* UNIQUE CARD - RENAMED */
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

    /* UNIQUE POPUP - RENAMED */
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


    
    /* SECTION WRAPPER - RENAMED */
    .shower-fund-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .shower-fund-container{
        /* max-width: 1400px; */
        padding: 0px 50px;
        margin:auto;
    }

    .shower-fund-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .shower-fund-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .shower-fund-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .shower-fund-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .shower-fund-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP - RENAMED */
    .shower-fund-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD - RENAMED */
    .shower-fund-card{
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

    .shower-fund-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .shower-fund-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .shower-fund-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .shower-fund-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .shower-fund-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST - RENAMED */
    .shower-fund-list{
        list-style:none;
        padding-left:0;
    }

    .shower-fund-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .shower-fund-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .shower-fund-card-wrap{
            flex-direction:column;
        }
        .shower-fund-card{
            min-width:100%;
        }
    }


       /* MAIN WRAPPER - RENAMED */
    .shower-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .shower-project-container{
        max-width: 1550px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT - RENAMED */
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

    /* BULLETS - RENAMED */
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

    /* RIGHT IMAGE - RENAMED */
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



     /* ===============================
   JANSON SHOWER PARTITION (EXACT)
================================ */

#jansonShowerWrapper {
    padding: 80px 5%;
    background: var(--primary-color);
    font-family: var(--font-primary);
}

.janson-shower-inner {
    max-width: 1450px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1.35fr 1fr 80px;
    gap: 40px;
    align-items: center;
}

/* COMMON BOX */
.janson-shower-box {
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
    /* object-fit: cover; */
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
    .janson-shower-inner {
        grid-template-columns: 1fr;
    }

    .janson-vertical-strip {
        writing-mode: horizontal-tb;
        transform: none;
        margin-top: 20px;
    }
}


    
    /* SECTION BACKGROUND - RENAMED */
    .shower-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE - RENAMED */
    .shower-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER - RENAMED */
    .shower-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM - RENAMED */
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

    /* PLUS / MINUS ICON - RENAMED */
    .shower-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT - RENAMED */
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

    /* CHANGE ICON WHEN ACTIVE - RENAMED */
    .shower-faq-item.active .shower-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON - RENAMED */
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

    @media (min-width:300px) and (max-width:700px){
    .shower-fund-container{
        padding: 0px !important;
    }
}
.shower-hero-content h5{
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
    /* height: 520px; */
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
    <section class="shower-hero-section"  data-aos="zoom-in">
        <img src="../slim-partition/WhatsApp Image 2025-12-24 at 6.30.17 PM (1).jpeg" alt="Shower Partition Background">
        <div class="shower-hero-content">
            <h5>SHOWER PARTITION SYSTEMS</h5>
            <h1>STYLISH & FUNCTIONAL SHOWER ENCLOSURES FOR MODERN BATHROOMS</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="shower-content-box"  data-aos="zoom-in">
        <div class="shower-content-wrapper">
            <div>
                <h2 class="shower-content-title">SHOWER PARTITION MANUFACTURER IN Gurgaon</h2>
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

    <div class="shower-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="shower-card"  data-aos="zoom-in">
            <div class="shower-tag">Benefits</div>
            <img class="shower-icon" src="https://cdn-icons-png.flaticon.com/512/992/992651.png">
            <div class="shower-card-title">ELEGANT DESIGN</div>
            <p>
                Improved Aesthetic Appeal: Adds a modern minimalist look to the bathroom interior. Space Optimization: This maximizes space while the bathroom remains open and organized.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="shower-plus">+</div>

        <!-- CARD 2 -->
        <div class="shower-card" data-aos="zoom-in">
            <div class="shower-tag">Benefits</div>
            <img class="shower-icon" src="https://cdn-icons-png.flaticon.com/512/3430/3430447.png">
            <div class="shower-card-title">PRIVACY & DURABILITY</div>
            <p>
                Privacy and Comfort: Offers a solution to privacy in style without giving up openness. Hygienic and safe: with smooth edges, safety-tempered glass for secure usage.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="shower-dotted-line"  data-aos="zoom-in"></div>

        <!-- CARD 3 -->
        <div class="shower-card shower-right-card" data-aos="zoom-in">
            <div class="shower-tag">Applications</div>
            <img class="shower-icon" src="https://cdn-icons-png.flaticon.com/512/456/456177.png">
            <div class="shower-card-title">VERSATILE APPLICATIONS</div>
            <p>
                Easy Maintenance: Resistant to water stains and corrosion, ensuring long-lasting clarity and shine. Water Containment: It prevents water spillage and maintains the bathroom floor dry.
            </p>
        </div>
    </div>

<section class="janson-shower-wrapper" id="jansonShowerWrapper">
    <div class="janson-shower-inner">

        <!-- LEFT IMAGE -->
        <div class="janson-shower-box janson-left-box">
            <div class="janson-img-holder">
                <img src="../shower-partition-img/frameless-glass-shower-door-801271870-xz4fc8xu.avif" alt="Frameless Shower">
            </div>
            <p class="janson-label">FRAMELESS SHOWER</p>
        </div>

        <!-- CENTER IMAGE -->
        <div class="janson-shower-box janson-center-box">

            <div class="janson-top-logo">
                <span class="janson-logo-je">JE</span>
                <span class="janson-logo-text">JANSON EXPORTS</span>
            </div>

            <div class="janson-img-holder big-img">
                <img src="../shower-partition-img/sliding-shower.jpg" alt="Sliding Shower">
            </div>
            <p class="janson-label">SLIDING SHOWER</p>

            <div class="janson-bni-badge">BNI MEMBER</div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="janson-shower-box janson-right-box">
            <div class="janson-img-holder">
                <img src="../shower-partition-img/P01_Pivot_2.webp" alt="Pivot Shower">
            </div>
            <p class="janson-label">PIVOT SHOWER</p>
        </div>

        <!-- RIGHT VERTICAL BAR -->
        <div class="janson-vertical-strip">
            <span>SHOWER PARTITION</span>
            <span>SUBCATEGORIES</span>
        </div>

    </div>
</section>




    

    <section class="shower-main-section"  data-aos="zoom-in">
        <h1>SHOWER PARTITION SUPPLIER IN Gurgaon</h1>
        <p>
            As one of the trusted Shower Partition suppliers, we assure the delivery of high-quality partitions to meet the demands of architects, interior designers, and even homeowners. Our strong distribution network ensures timely supply and support for projects ranging from compact bathrooms to luxury setups.
        </p>
        <p>
            We believe that each space has its needs; thus, we offer the best possible solutions tailored to perfectly meet design intent, layout, and functionality. Our team guarantees that every product supplied speaks to our commitment to quality, durability, and precision.
        </p>

        <a href="contact.php" class="shower-discuss-link">
            Request a Quote
            <div class="shower-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="shower-row"  data-aos="zoom-in">
            <!-- LEFT IMAGE -->
            <div class="shower-left-img">
                <img src="../shower-partition-img/enigma-x-shower-enclosure-rs239-29ip-32d-13ip-34rp-06 perimy-sliding.webp" alt="Shower Partition Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="shower-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Shower Solutions</h2>
                <p>
                    Our shower partitions feature toughened safety glass for added strength and sleek frames of aluminum or stainless steel. We offer anti-corrosion fittings and high-grade hinges for long-lasting performance.
                </p>
                <p>
                    Designed with options for smooth sliding or hinged doors, our partitions are easy to clean and maintain. Available in clear, frosted, or tinted glass designs with water-tight sealing and minimalist hardware.
                </p>
                <p>
                    We provide custom dimensions and layout flexibility to perfectly fit any bathroom space, ensuring both functionality and aesthetic appeal.
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
    
    <div class="shower-prod-section">
        <h2 class="shower-prod-title">OUR SHOWER PARTITION PRODUCTS</h2>
        <div class="shower-prod-grid">
            <!-- CARD 1 -->
            <div class="shower-prod-card" onclick="showerProdOpenPopup('Frameless Shower Partition','Modern frameless shower enclosure for luxury bathrooms. Perfect for contemporary interior designs.','shower-partition-img/frameless glass enclosures.jpg')" data-aos="zoom-in"> 
                <img class="shower-prod-card-img" src="../shower-partition-img/frameless glass enclosures.jpg">
                <div class="shower-prod-card-info">
                    <h3>Frameless Shower Partition</h3>
                    <p>Modern frameless glass design</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="shower-prod-card" onclick="showerProdOpenPopup('Sliding Shower Door','Space-saving sliding shower door with aluminum frame. Durable and elegant solution.','shower-partition-img/image copy 3.png')" data-aos="zoom-in">
                <img class="shower-prod-card-img" src="../shower-partition-img/image copy 3.png">
                <div class="shower-prod-card-info">
                    <h3>Sliding Shower Door</h3>
                    <p>Premium aluminum sliding system</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="shower-prod-card" onclick="showerProdOpenPopup('Pivot Shower Screen','Elegant pivot shower screen for spacious bathrooms. Smooth operation with premium hardware.','shower-partition-img/image copy.png')" data-aos="zoom-in">
                <img class="shower-prod-card-img" src="../shower-partition-img/image copy.png">
                <div class="shower-prod-card-info">
                    <h3>Pivot Shower Screen</h3>
                    <p>Smooth and elegant pivot mechanism</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="shower-prod-popup" id="showerProdPopup">
        <span class="shower-prod-close" onclick="showerProdClosePopup()">&times;</span>
        <div class="shower-prod-popup-box">
            <img id="showerProdPopupImg" class="shower-prod-popup-img">
            <div class="shower-prod-popup-content">
                <h2 id="showerProdPopupTitle"></h2>
                <p id="showerProdPopupDesc"></p>
                <a href="contact.php" class="shower-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="shower-fund-section" data-aos="zoom-in">
        <div class="shower-fund-container">
            <div class="shower-fund-top-title">EXPORT QUALITY</div>
            <h2 class="shower-fund-heading">SHOWER PARTITION EXPORTER IN Gurgaon</h2>
            <p class="shower-fund-desc">
                Being a leading exporter of Shower Partitions, we pride ourselves on our capability in supplying high-quality bathroom enclosure solutions to international markets. Our export-ready shower partitions are fabricated according to global standards related to safety, performance, and aesthetic values.
            </p>
            
            <a href="contact.php" class="shower-fund-link">
                International Enquiries
                <div class="shower-fund-line"></div>
            </a>

            <div class="shower-fund-card-wrap">
                <div class="shower-fund-card">
                    <div class="shower-fund-card-title">Global Standards</div>
                    <p>
                        We cater to clients across residential, commercial, and hospitality sectors, ensuring that each shipment is carefully packed, securely transported, and delivered on schedule.
                    </p>
                    <hr>
                    <div class="shower-fund-card-subtitle">Our Export Advantages:</div>
                    <ul class="shower-fund-list">
                        <li>Fabricated to global safety standards</li>
                        <li>Aesthetic perfection and durability</li>
                        <li>On-time delivery guarantee</li>
                        <li>Custom packaging for safe transit</li>
                    </ul>
                </div>

                <div class="shower-fund-card">
                    <div class="shower-fund-card-title">International Projects</div>
                    <p>
                        Our experience in international trade lets us promptly meet special custom requirements in both standard and bespoke designs that enrich modern lifestyles around the world.
                    </p>
                    <hr>
                    <div class="shower-fund-card-subtitle">Global Reach:</div>
                    <ul class="shower-fund-list">
                        <li>Residential and commercial sectors</li>
                    <li>Hotels, spas, and resorts worldwide</li>
                        <li>Installation guidance provided</li>
                        <li>After-sales service network</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="product-slider" data-aos="zoom-in">

  
  <div class="product-images">
    <span class="stock">IN STOCK</span>

    <img src="../slim-partition/8.jpg" class="main-img" id="showerMainImg">

    <div class="thumbs">
      <img src="../slim-partition/8.jpg" class="active" data-index="0" onclick="changeShowerProduct(this)">
      <img src="../slim-partition/9.jpg" data-index="1" onclick="changeShowerProduct(this)">
      <img src="../slim-partition/10.jpg" data-index="2" onclick="changeShowerProduct(this)">
      <img src="../slim-partition/11.jpg" data-index="3" onclick="changeShowerProduct(this)">
      <img src="../slim-partition/12.jpg" data-index="4" onclick="changeShowerProduct(this)">
    </div>
  </div>

  
  <div class="product-info">

    <h3 class="product-title" id="showerTitle">Frameless Shower Enclosure</h3>
    <span class="category" id="showerCategory">Bathroom Partition</span>

    <div class="price" id="showerPrice">Custom Quote</div>

    <div class="rating" id="showerRating">★★★★★ (4.8)</div>

    <p class="desc" id="showerDesc">
      Premium quality frameless shower enclosure designed for durability and elegance. Features tempered safety glass and premium hardware.
    </p>

    <div class="sizes" id="showerSizes">
      <strong>Size:</strong><br>
      <span>900x900</span><span>1000x1000</span><span>1200x900</span>
      <span class="active">Custom</span>
    </div>

    <div class="colors" id="showerColors">
      <strong>Finish:</strong><br>
      <span style="background:#ffffff"></span>
      <span style="background:#c6a98c"></span>
      <span style="background:#1e90ff"></span>
    </div>

    <button class="cart-btn">+ REQUEST QUOTE</button>

  </div>

</section> -->

    <section class="janson-feature-section" id="jansonFeatureSection">
    <div class="janson-feature-wrapper">

        <!-- LEFT IMAGE -->
        <div class="janson-feature-image">
            <img src="../shower-partition-img/n-1-nickel-940-1910mm-frameless-wall-to-shower-screen-door-hung-with-fix-panel-in-brushed-fittings-10mm-glass-screens-110.webp" alt="Shower Partition Bathroom">
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
                    <p>Create customized shower enclosures with fully modular systems for any bathroom layout.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">✔</div>
                <div>
                    <h4><span>02</span> Water Control</h4>
                    <p>Advanced sealing technology prevents water spillage and maintains dry bathroom floors.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⚙</div>
                <div>
                    <h4><span>03</span> Practical Value</h4>
                    <p>Easy to clean surfaces resistant to water stains and corrosion for long-lasting clarity.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⬛</div>
                <div>
                    <h4><span>04</span> Advanced Safety</h4>
                    <p>Toughened safety glass with smooth edges ensures secure usage in wet environments.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">🏆</div>
                <div>
                    <h4><span>05</span> Peak Value</h4>
                    <p>Sleek profiles and clean glass lines enhance bathroom aesthetics and space perception.</p>
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




    <section class="shower-project-section" data-aos="zoom-in">
        <div class="shower-project-container">
            <div class="shower-project-left">
                <div class="shower-project-subtitle">LUXURY HOTEL INSTALLATION</div>
                <h2 class="shower-project-title">Five-Star Hotel Bathroom Renovation</h2>
                <p class="shower-project-text">
                    A luxury hotel chain needed to upgrade their bathroom facilities with modern, elegant shower partitions that combined aesthetics with functionality. Our frameless shower enclosures provided the perfect solution.
                </p>
                <p class="shower-project-text">
                    The installation featured custom-sized tempered glass partitions with anti-corrosion aluminum frames and premium hardware. Special attention was given to water-tight sealing and ease of maintenance.
                </p>
                <p class="shower-project-text">
                    This project successfully transformed 150 hotel bathrooms into modern, sophisticated spaces while meeting all safety and durability requirements for commercial use.
                </p>
                <ul class="shower-project-list">
                    <li>Project Type: Luxury Hotel Renovation</li>
                    <li>Partition Type: Frameless Shower Enclosures</li>
                    <li>Special Features: Water-tight Sealing, Anti-corrosion</li>
                    <li>Project Completion Time: 6 Weeks</li>
                </ul>
            </div>
            
            <div class="shower-project-right">
                <img src="../shower-partition-img/image copy 2.png" alt="Hotel Bathroom Project">
            </div>
        </div>
    </section>

    <section class="shower-faq-section" data-aos="zoom-in">
        <h2 class="shower-faq-title">SHOWER PARTITION FAQS</h2>
        <div class="shower-faq-container">
            <div class="shower-faq-item">
                <div class="shower-faq-question">
                    What type of glass is used in shower partitions?
                    <span class="shower-faq-icon">⌄</span>
                </div>
                <div class="shower-faq-answer">
                    We use 8-10mm thick tempered safety glass that is 4-5 times stronger than regular glass. It's designed to break into small, harmless pieces if shattered, ensuring maximum safety in bathroom environments.
                </div>
            </div>

            <div class="shower-faq-item">
                <div class="shower-faq-question">
                    Can shower partitions be customized to fit irregular bathroom layouts?
                    <span class="shower-faq-icon">⌄</span>
                </div>  
                <div class="shower-faq-answer">
                    Yes, we offer fully customizable shower partitions that can be tailored to fit any bathroom layout, including curved walls, corner installations, and irregular spaces. Our team takes precise measurements to ensure perfect fit.
                </div>
            </div>

            <div class="shower-faq-item">
                <div class="shower-faq-question">
                    How do I maintain and clean shower partitions?
                    <span class="shower-faq-icon">⌄</span>
                </div>
                <div class="shower-faq-answer">
                    Our partitions are designed for easy maintenance. Simply use a mild glass cleaner or vinegar solution with a soft cloth. The anti-corrosion frames and water-resistant seals prevent mineral buildup and staining.
                </div>
            </div>

            <div class="shower-faq-item">
                <div class="shower-faq-question">
                    What is the installation process for shower partitions?
                    <span class="shower-faq-icon">⌄</span>
                </div>
                <div class="shower-faq-answer">
                    Our professional installation team handles everything from measurement to final installation. The process typically takes 1-2 days per bathroom, depending on complexity. We ensure proper sealing and alignment for optimal performance.
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

 
const showerProducts = [
  {
    img:"slim-partition/8.jpg",
    title:"Frameless Shower Enclosure",
    category:"Bathroom Partition",
    price:"Custom Quote",
    rating:"★★★★★ (4.8)",
    desc:"Premium quality frameless shower enclosure designed for durability and elegance. Features tempered safety glass and premium hardware.",
    sizes:["900x900","1000x1000","1200x900","Custom"],
    activeSize:"Custom",
    colors:["#ffffff","#c6a98c","#1e90ff"]
  },
  {
    img:"slim-partition/9.jpg",
    title:"Sliding Shower Door",
    category:"Bathroom System",
    price:"Custom Quote",
    rating:"★★★★☆ (4.6)",
    desc:"Space-saving sliding shower door with smooth operation. Perfect for compact bathrooms and modern interiors.",
    sizes:["800x800","900x900","1000x1000"],
    activeSize:"900x900",
    colors:["#ffffff","#1e90ff"]
  },
  {
    img:"slim-partition/10.jpg",
    title:"Pivot Shower Screen",
    category:"Bathroom Enclosure",
    price:"Custom Quote",
    rating:"★★★★★ (5.0)",
    desc:"Elegant pivot shower screen with premium hardware. Ideal for spacious bathrooms and luxury installations.",
    sizes:["900x900","1000x1000","1200x900"],
    activeSize:"1000x1000",
    colors:["#ffffff","#1e90ff"]
  },
  {
    img:"slim-partition/11.jpg",
    title:"Corner Shower Cabin",
    category:"Bathroom Solution",
    price:"Custom Quote",
    rating:"★★★★☆ (4.7)",
    desc:"Space-efficient corner shower cabin designed for optimal water containment and easy maintenance.",
    sizes:["900x900","1000x1000","Custom"],
    activeSize:"900x900",
    colors:["#000000","#ffcc00"]
  },
  {
    img:"slim-partition/12.jpg",
    title:"Walk-in Shower Partition",
    category:"Bathroom Design",
    price:"Custom Quote",
    rating:"★★★★☆ (4.5)",
    desc:"Stylish walk-in shower partition for contemporary bathrooms. Features minimal framing and maximum glass area.",
    sizes:["1200x900","1500x900","Custom"],
    activeSize:"Custom",
    colors:["#ffffff","#1e90ff"]
  }
];

function changeShowerProduct(el){
  const p = showerProducts[el.dataset.index];

  document.getElementById("showerMainImg").src = p.img;
  document.getElementById("showerTitle").innerText = p.title;
  document.getElementById("showerCategory").innerText = p.category;
  document.getElementById("showerPrice").innerText = p.price;
  document.getElementById("showerRating").innerText = p.rating;
  document.getElementById("showerDesc").innerText = p.desc;

  const sizesBox = document.getElementById("showerSizes");
  sizesBox.innerHTML = "<strong>Size:</strong><br>";
  p.sizes.forEach(s=>{
    const span = document.createElement("span");
    span.innerText = s;
    if(s === p.activeSize) span.classList.add("active");
    sizesBox.appendChild(span);
  });

  const colorBox = document.getElementById("showerColors");
  colorBox.innerHTML = "<strong>Finish:</strong><br>";
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