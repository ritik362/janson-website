<?php $page_title = "floor springs manufacturer in Faridabad";
$description = "As one of the leading floor springs manufacturer in Faridabad, we specialize in the production of high-quality door control systems so as to combine functionality, durability, and modern aesthetics in one. Our floor springs are designed with precise regard to ensure smooth and effortless";
$keyword = "Floor Springs manufacturers in Faridabad,Floor Springs supplier in Faridabad,Floor Springs exporter in Faridabad, Best Floor Springs manufacturers in Faridabad, Top Floor Springs manufacturers in Faridabad, best Floor Springs supplier in Faridabad, Top Floor Springs supplier Faridabad, best Floor Springs exporter in Faridabad, Top Floor Springs exporter in Faridabad,Floor Springs manufacturers,Best Floor Springs manufacturers,Top Floor Springs manufacturers, Floor Springs supplier,Best Floor Springs supplier, Top Floor Springs supplier,Floor Springs exporter,Best Floor Springs exporter,Top Floor Springs exporter";
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
        .floor-spring-hero-section {
            position: relative;
            width: 100%;
            height: 760px;
            overflow: hidden;
            margin-top: -90px;
        }

        .floor-spring-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .floor-spring-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .floor-spring-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .floor-spring-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* WHITE CONTENT BOX - UNIQUE CLASS */
        .floor-spring-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -81px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .floor-spring-content-wrapper {
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .floor-spring-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .floor-spring-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .floor-spring-hero-content h1 {
                font-size: 32px;
            }

            .floor-spring-content-wrapper {
                grid-template-columns: 1fr;
            }
        }


        /* BENEFITS SECTION - UNIQUE CLASS */
        .floor-spring-benefits-wrapper {
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
        .floor-spring-card {
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

        .floor-spring-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .floor-spring-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL - UNIQUE CLASS */
        .floor-spring-tag {
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
        .floor-spring-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE - UNIQUE CLASS */
        .floor-spring-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .floor-spring-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN - UNIQUE CLASS */
        .floor-spring-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE - UNIQUE CLASS */
        .floor-spring-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .floor-spring-benefits-wrapper {
                flex-direction: column;
            }

            .floor-spring-plus,
            .floor-spring-dotted-line {
                display: none;
            }
        }


        /* MAIN SECTION - UNIQUE CLASS */
        .floor-spring-main-section {
            /* max-width: 1400px; */
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE - UNIQUE CLASS */
        .floor-spring-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH - UNIQUE CLASS */
        .floor-spring-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK - UNIQUE CLASS */
        .floor-spring-discuss-link {
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

        .floor-spring-discuss-link:hover {
            color: var(--text-heading);
        }

        .floor-spring-discuss-link .floor-spring-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW - UNIQUE CLASS */
        .floor-spring-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE - UNIQUE CLASS */
        .floor-spring-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT - UNIQUE CLASS */
        .floor-spring-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .floor-spring-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .floor-spring-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .floor-spring-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS - UNIQUE CLASS */
        .floor-spring-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .floor-spring-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .floor-spring-row {
                flex-direction: column;
            }

            .floor-spring-left-img img {
                width: 100%;
                height: auto;
            }

            .floor-spring-main-section h1 {
                font-size: 30px;
            }

            .floor-spring-main-section {
                padding: 50px 20px;
            }
        }


    /* UNIQUE CONTAINER - RENAMED */
    .floor-spring-prod-section{
        /* max-width: 1400px; */
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .floor-spring-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* UNIQUE GRID - RENAMED */
    .floor-spring-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* UNIQUE CARD - RENAMED */
    .floor-spring-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .floor-spring-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .floor-spring-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .floor-spring-prod-card-info{
        padding:15px;
    }

    .floor-spring-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .floor-spring-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* UNIQUE POPUP - RENAMED */
    .floor-spring-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .floor-spring-prod-popup.active{
        display:flex;
    }

    .floor-spring-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:floorSpringProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes floorSpringProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .floor-spring-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .floor-spring-prod-popup-content{
        padding:20px;
    }

    .floor-spring-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .floor-spring-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .floor-spring-prod-btn{
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

    .floor-spring-prod-btn:hover {
        background-color: #b5987a;
    }

    .floor-spring-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }


    
    /* SECTION WRAPPER - RENAMED */
    .floor-spring-fund-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .floor-spring-fund-container{
        /* max-width: 1400px; */
        padding: 0px 50px;
        margin:auto;
    }

    .floor-spring-fund-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .floor-spring-fund-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .floor-spring-fund-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .floor-spring-fund-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .floor-spring-fund-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP - RENAMED */
    .floor-spring-fund-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD - RENAMED */
    .floor-spring-fund-card{
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

    .floor-spring-fund-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .floor-spring-fund-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .floor-spring-fund-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .floor-spring-fund-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .floor-spring-fund-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST - RENAMED */
    .floor-spring-fund-list{
        list-style:none;
        padding-left:0;
    }

    .floor-spring-fund-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .floor-spring-fund-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .floor-spring-fund-card-wrap{
            flex-direction:column;
        }
        .floor-spring-fund-card{
            min-width:100%;
        }
    }


       /* MAIN WRAPPER - RENAMED */
    .floor-spring-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .floor-spring-project-container{
        max-width: 1550px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT - RENAMED */
    .floor-spring-project-left{
        flex:1;
    }

    .floor-spring-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .floor-spring-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .floor-spring-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS - RENAMED */
    .floor-spring-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .floor-spring-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .floor-spring-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE - RENAMED */
    .floor-spring-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .floor-spring-project-container{
            flex-direction:column;
        }

        .floor-spring-project-right img{
            width:100%;
            height:auto;
        }

        
    }



     /* ===============================
   JANSON FLOOR SPRING (EXACT)
================================ */

#jansonFloorSpringWrapper {
    padding: 80px 5%;
    background: var(--primary-color);
    font-family: var(--font-primary);
}

.janson-floor-spring-inner {
    max-width: 1450px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1.35fr 1fr 80px;
    gap: 40px;
    align-items: center;
}

/* COMMON BOX */
.janson-floor-spring-box {
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
    .janson-floor-spring-inner {
        grid-template-columns: 1fr;
    }

    .janson-vertical-strip {
        writing-mode: horizontal-tb;
        transform: none;
        margin-top: 20px;
    }
}


    
    /* SECTION BACKGROUND - RENAMED */
    .floor-spring-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE - RENAMED */
    .floor-spring-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER - RENAMED */
    .floor-spring-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM - RENAMED */
    .floor-spring-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .floor-spring-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .floor-spring-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON - RENAMED */
    .floor-spring-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT - RENAMED */
    .floor-spring-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .floor-spring-faq-item.active .floor-spring-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE - RENAMED */
    .floor-spring-faq-item.active .floor-spring-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON - RENAMED */
    .floor-spring-faq-btn{
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

    .floor-spring-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    @media (min-width:300px) and (max-width:700px){
    .floor-spring-fund-container{
        padding: 0px !important;
    }
}
.floor-spring-hero-content h5{
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


.floor-spring-product-slider{
display:flex;
gap:40px;
padding:60px;
align-items:center;
}

/* LEFT */
.floor-spring-product-images{
position:relative;
flex:1;
background:linear-gradient(145deg,#0d0d0d,#1c1c1c);
border-radius:12px;
padding:40px;
text-align:center;
}

.floor-spring-stock{
position:absolute;
top:20px;
left:20px;
opacity:0.3;
letter-spacing:2px;
}

.floor-spring-main-img{
width:80%;
transition:0.3s;
}

.floor-spring-thumbs{
display:flex;
justify-content:center;
gap:15px;
margin-top:20px;
flex-wrap:wrap;
}

.floor-spring-thumbs img{
width:60px;
cursor:pointer;
opacity:0.6;
border-radius:8px;
}

.floor-spring-thumbs img.active,
.floor-spring-thumbs img:hover{
opacity:1;
transform:scale(1.1);
}

/* RIGHT */
.floor-spring-product-info{
flex:1;
background:var(--primary-light);
padding:35px;
border-radius:12px;
box-shadow:var(--shadow-medium);
}

.floor-spring-product-title{
font-size:26px;
color:var(--text-heading);
}

.floor-spring-category{
font-size:13px;
opacity:0.7;
}

.floor-spring-price{
font-size:28px;
margin:12px 0;
color:var(--secondary-color);
}

.floor-spring-rating{
color:gold;
margin-bottom:12px;
}

.floor-spring-desc{
font-size:14px;
line-height:1.6;
margin-bottom:18px;
color:var(--text-color);
}

.floor-spring-sizes span{
display:inline-block;
border:1px solid var(--border-color);
padding:6px 10px;
margin:6px 6px 0 0;
cursor:pointer;
border-radius:6px;
}

.floor-spring-sizes span.active{
background:var(--secondary-color);
color:#000;
}

.floor-spring-colors span{
display:inline-block;
width:18px;
height:18px;
border-radius:50%;
margin:8px 8px 0 0;
border:1px solid #555;
}

.floor-spring-cart-btn{
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
.floor-spring-product-slider{
flex-direction:column;
}
}


    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="floor-spring-hero-section"  data-aos="zoom-in">
        <img src="../slim-partition/WhatsApp Image 2025-12-24 at 6.30.17 PM (1).jpeg" alt="Floor Spring Background">
        <div class="floor-spring-hero-content">
            <h5>FLOOR SPRING SYSTEMS</h5>
            <h1>PRECISION DOOR CONTROL SYSTEMS FOR MODERN ARCHITECTURE</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="floor-spring-content-box"  data-aos="zoom-in">
        <div class="floor-spring-content-wrapper">
            <div>
                <h2 class="floor-spring-content-title">FLOOR SPRING MANUFACTURER IN Faridabad</h2>
            </div>
            <div class="floor-spring-content-text">
                <p>
                    As one of the leading manufacturers of floor springs, we specialize in the production of high-quality door control systems so as to combine functionality, durability, and modern aesthetics in one. Our floor springs are designed with precise regard to ensure smooth and effortless door movement while structural integrity and safety are maintained.
                </p>
                <p>
                    Made from robust materials and advanced hydraulic mechanisms, each product is built for superior performance and long-lasting reliability. Our floor springs for both commercial and residential purposes are meant for heavy and more frequently used doors; these are designed to provide controlled opening and closing actions to the door for convenience and security.
                </p>
                <p>
                    We innovate and guarantee that our floor spring completely meets the international standards of strength, precision, and endurance, hence ideal for glass doors, wooden doors, and even metal frame systems.
                </p>
            </div>
        </div>
    </section>

    <div class="floor-spring-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="floor-spring-card"  data-aos="zoom-in">
            <div class="floor-spring-tag">Benefits</div>
            <img class="floor-spring-icon" src="https://cdn-icons-png.flaticon.com/512/992/992651.png">
            <div class="floor-spring-card-title">SMOOTH OPERATION</div>
            <p>
                Ensures controlled, hence quiet door movement, with variable speed adjustment. Heavy-Duty Construction: Manufactured from corrosion-resistant materials to provide years of service.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="floor-spring-plus">+</div>

        <!-- CARD 2 -->
        <div class="floor-spring-card" data-aos="zoom-in">
            <div class="floor-spring-tag">Benefits</div>
            <img class="floor-spring-icon" src="https://cdn-icons-png.flaticon.com/512/3430/3430447.png">
            <div class="floor-spring-card-title">SAFETY & EFFICIENCY</div>
            <p>
                Improved Safety: Prevents sudden slamming, reducing risks of damage or injury. Energy Efficiency: Maintains climate control through proper door closure.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="floor-spring-dotted-line"  data-aos="zoom-in"></div>

        <!-- CARD 3 -->
        <div class="floor-spring-card floor-spring-right-card" data-aos="zoom-in">
            <div class="floor-spring-tag">Applications</div>
            <img class="floor-spring-icon" src="https://cdn-icons-png.flaticon.com/512/456/456177.png">
            <div class="floor-spring-card-title">VERSATILE APPLICATIONS</div>
            <p>
                Multi-purpose: To be used with frameless glass doors, metal doors, and wood installations. Low Maintenance: Designed for easy servicing and long operational life.
            </p>
        </div>
    </div>

<section class="janson-floor-spring-wrapper" id="jansonFloorSpringWrapper">
    <div class="janson-floor-spring-inner">

        <!-- LEFT IMAGE -->
        <div class="janson-floor-spring-box janson-left-box">
            <div class="janson-img-holder">
                <img src="../floor-spring/hydraulic-floor.jpeg" alt="Hydraulic Floor Spring">
            </div>
            <p class="janson-label">HYDRAULIC FLOOR SPRING</p>
        </div>

        <!-- CENTER IMAGE -->
        <div class="janson-floor-spring-box janson-center-box">

            <div class="janson-top-logo">
                <span class="janson-logo-je">JE</span>
                <span class="janson-logo-text">JANSON EXPORTS</span>
            </div>

            <div class="janson-img-holder big-img">
                <img src="../floor-spring/Duty-floor.jpg" alt="Heavy Duty Floor Spring">
            </div>
            <p class="janson-label">HEAVY DUTY FLOOR SPRING</p>

            <div class="janson-bni-badge">BNI MEMBER</div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="janson-floor-spring-box janson-right-box">
            <div class="janson-img-holder">
                <img src="../floor-spring/concealed-floor-spring.jpg" alt="Concealed Floor Spring">
            </div>
            <p class="janson-label">CONCEALED FLOOR SPRING</p>
        </div>

        <!-- RIGHT VERTICAL BAR -->
        <div class="janson-vertical-strip">
            <span>FLOOR SPRING</span>
            <span>SUBCATEGORIES</span>
        </div>

    </div>
</section>




    

    <section class="floor-spring-main-section"  data-aos="zoom-in">
        <h1>FLOOR SPRING SUPPLIER IN Faridabad</h1>
        <p>
            As a trusted supplier of Floor Springs, we are committed to the delivery of precision-engineered products to meet the demands of architects, builders, and interior designers. Our supply network ensures timely and efficient delivery backed by technical expertise and dedicated customer support.
        </p>
        <p>
            We cater to various architectural needs by supplying floor springs in different load capacities and configurations. Rigorous quality testing of every unit ensures smooth functionality for long-term performance, making us a preferred partner for commercial complexes, retail spaces, hotels, and corporate offices.
        </p>

        <a href="contact.php" class="floor-spring-discuss-link">
            Request a Quote
            <div class="floor-spring-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="floor-spring-row"  data-aos="zoom-in">
            <!-- LEFT IMAGE -->
            <div class="floor-spring-left-img">
                <img src="../floor-spring/permiy-floor.jpg" alt="Floor Spring Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="floor-spring-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Floor Spring Solutions</h2>
                <p>
                    Our floor springs feature high-quality hydraulic mechanism for smooth operation with adjustable closing and latching speed. We use stainless steel cover plates for rust resistance and compact design for concealed floor installation.
                </p>
                <p>
                    Designed to be compatible with single and double-action doors, our floor springs are tested for thousands of open-close cycles. They offer heavy-duty load-carrying capacity with easy installation and maintenance access.
                </p>
                <p>
                    Our expert team works closely with clients to provide reliable door control solutions that combine performance, safety, and aesthetic integration.
                </p>
                <ul class="floor-spring-ul">
                    <li>High-quality hydraulic mechanism for smooth operation</li>
                    <li>Adjustable closing and latching speed</li>
                    <li>Stainless Steel Cover Plate for Rust Resistance</li>
                    <li>Compact design for concealed floor installation</li>
                    <li>Compatible with single and double-action doors</li>
                    <li>Tested for thousands of open-close cycles</li>
                    <li>Heavy-duty load-carrying capacity</li>
                    <li>Easy installation and maintenance access</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="floor-spring-prod-section">
        <h2 class="floor-spring-prod-title">OUR FLOOR SPRING PRODUCTS</h2>
        <div class="floor-spring-prod-grid">
            <!-- CARD 1 -->
            <div class="floor-spring-prod-card" onclick="floorSpringProdOpenPopup('Hydraulic Floor Spring','Advanced hydraulic floor spring for smooth door control. Perfect for commercial buildings.','floor-spring/hydraulic-floor.jpeg')" data-aos="zoom-in"> 
                <img class="floor-spring-prod-card-img" src="../floor-spring/hydraulic-floor.jpeg">
                <div class="floor-spring-prod-card-info">
                    <h3>Hydraulic Floor Spring</h3>
                    <p>Advanced hydraulic mechanism</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="floor-spring-prod-card" onclick="floorSpringProdOpenPopup('Heavy Duty Floor Spring','Industrial-grade floor spring for heavy doors. Durable and reliable solution.','floor-spring/door-closer-500x500.webp')" data-aos="zoom-in">
                <img class="floor-spring-prod-card-img" src="../floor-spring/door-closer-500x500.webp">
                <div class="floor-spring-prod-card-info">
                    <h3>Heavy Duty Floor Spring</h3>
                    <p>Industrial-grade construction</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="floor-spring-prod-card" onclick="floorSpringProdOpenPopup('Concealed Floor Spring','Hidden floor spring for aesthetic installations. Perfect for modern interiors.','floor-spring/concealed-floor-spring.jpg-2.jpg')" data-aos="zoom-in">
                <img class="floor-spring-prod-card-img" src="../floor-spring/concealed-floor-spring.jpg-2.jpg">
                <div class="floor-spring-prod-card-info">
                    <h3>Concealed Floor Spring</h3>
                    <p>Hidden aesthetic installation</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="floor-spring-prod-popup" id="floorSpringProdPopup">
        <span class="floor-spring-prod-close" onclick="floorSpringProdClosePopup()">&times;</span>
        <div class="floor-spring-prod-popup-box">
            <img id="floorSpringProdPopupImg" class="floor-spring-prod-popup-img">
            <div class="floor-spring-prod-popup-content">
                <h2 id="floorSpringProdPopupTitle"></h2>
                <p id="floorSpringProdPopupDesc"></p>
                <a href="contact.php" class="floor-spring-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="floor-spring-fund-section" data-aos="zoom-in">
        <div class="floor-spring-fund-container">
            <div class="floor-spring-fund-top-title">EXPORT QUALITY</div>
            <h2 class="floor-spring-fund-heading">FLOOR SPRING EXPORTER IN Faridabad</h2>
            <p class="floor-spring-fund-desc">
                As one of the leading exporters of Floor Spring, we're committed to supplying world-class door control solutions to international markets that will ensure reliability, safety, and efficiency. Export-quality floor springs are manufactured by us with precision engineering, tested for compliance with globally recognized performance standards.
            </p>
            
            <a href="contact.php" class="floor-spring-fund-link">
                International Enquiries
                <div class="floor-spring-fund-line"></div>
            </a>

            <div class="floor-spring-fund-card-wrap">
                <div class="floor-spring-fund-card">
                    <div class="floor-spring-fund-card-title">Global Standards</div>
                    <p>
                        We offer complete export services, including custom product configurations, safe packaging, and on-time international shipments. Our dedication to excellence and customer satisfaction has earned us an excellent reputation with overseas clients.
                    </p>
                    <hr>
                    <div class="floor-spring-fund-card-subtitle">Our Export Advantages:</div>
                    <ul class="floor-spring-fund-list">
                        <li>Precision engineering to international standards</li>
                        <li>Compliance with global performance standards</li>
                        <li>On-time international shipments</li>
                        <li>Safe and secure packaging</li>
                    </ul>
                </div>

                <div class="floor-spring-fund-card">
                    <div class="floor-spring-fund-card-title">International Markets</div>
                    <p>
                        We serve commercial, architectural, and residential sectors worldwide seeking reliable floor spring systems for various applications. Our experience ensures we meet diverse architectural requirements.
                    </p>
                    <hr>
                    <div class="floor-spring-fund-card-subtitle">Global Reach:</div>
                    <ul class="floor-spring-fund-list">
                        <li>Commercial complexes worldwide</li>
                        <li>Architectural projects across continents</li>
                        <li>Residential and hospitality sectors</li>
                        <li>Retail and corporate offices</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="floor-spring-product-slider" data-aos="zoom-in">

  
  <div class="floor-spring-product-images">
    <span class="floor-spring-stock">IN STOCK</span>

    <img src="../slim-partition/8.jpg" class="floor-spring-main-img" id="floorSpringMainImg">

    <div class="floor-spring-thumbs">
      <img src="../slim-partition/8.jpg" class="active" data-index="0" onclick="changeFloorSpringProduct(this)">
      <img src="../slim-partition/9.jpg" data-index="1" onclick="changeFloorSpringProduct(this)">
      <img src="../slim-partition/10.jpg" data-index="2" onclick="changeFloorSpringProduct(this)">
      <img src="../slim-partition/11.jpg" data-index="3" onclick="changeFloorSpringProduct(this)">
    </div>
  </div>

  
  <div class="floor-spring-product-info">

    <h3 class="floor-spring-product-title" id="floorSpringTitle">Hydraulic Floor Spring</h3>
    <span class="floor-spring-category" id="floorSpringCategory">Door Control System</span>

    <div class="floor-spring-price" id="floorSpringPrice">Custom Quote</div>

    <div class="floor-spring-rating" id="floorSpringRating">★★★★★ (4.8)</div>

    <p class="floor-spring-desc" id="floorSpringDesc">
      Premium hydraulic floor spring for smooth door control. Features adjustable closing speed and heavy-duty construction for long-lasting performance.
    </p>

    <div class="floor-spring-sizes" id="floorSpringSizes">
      <strong>Load Capacity:</strong><br>
      <span>60kg</span><span>80kg</span><span>100kg</span>
      <span class="active">120kg</span>
    </div>

    <div class="floor-spring-colors" id="floorSpringColors">
      <strong>Finish:</strong><br>
      <span style="background:#c6a98c"></span>
      <span style="background:#ffffff"></span>
      <span style="background:#1e90ff"></span>
    </div>

    <button class="floor-spring-cart-btn">+ REQUEST QUOTE</button>

  </div>

</section> -->

    <section class="janson-feature-section" id="jansonFeatureSection">
    <div class="janson-feature-wrapper">

        <!-- LEFT IMAGE -->
        <div class="janson-feature-image">
            <img src="../floor-spring/istockphoto-843180986-612x612.jpg" alt="Floor Spring Installation">
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
                    <p>Advanced hydraulic mechanism ensures controlled, quiet door movement with variable speed adjustment.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">✔</div>
                <div>
                    <h4><span>02</span> Safety Features</h4>
                    <p>Prevents sudden door slamming, reducing risks of damage or injury in high-traffic areas.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⚙</div>
                <div>
                    <h4><span>03</span> Durability</h4>
                    <p>Manufactured from corrosion-resistant materials and tested for thousands of open-close cycles.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⬛</div>
                <div>
                    <h4><span>04</span> Versatility</h4>
                    <p>Compatible with glass doors, wooden doors, and metal frame systems for diverse applications.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">🏆</div>
                <div>
                    <h4><span>05</span> Aesthetic Design</h4>
                    <p>Compact and concealed design blends with modern interior settings without visual intrusion.</p>
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




    <section class="floor-spring-project-section" data-aos="zoom-in">
        <div class="floor-spring-project-container">
            <div class="floor-spring-project-left">
                <div class="floor-spring-project-subtitle">COMMERCIAL INSTALLATION</div>
                <h2 class="floor-spring-project-title">Shopping Mall Entrance Doors</h2>
                <p class="floor-spring-project-text">
                    A major shopping mall required reliable door control systems for their high-traffic entrance doors that could withstand constant use while providing smooth operation. Our heavy-duty hydraulic floor springs provided the ideal solution.
                </p>
                <p class="floor-spring-project-text">
                    The installation featured concealed floor springs with adjustable closing speed and stainless steel construction for corrosion resistance. Special attention was given to safety features to prevent sudden door slamming in crowded areas.
                </p>
                <p class="floor-spring-project-text">
                    This project successfully equipped 12 main entrance doors with reliable floor spring systems that have been operating flawlessly for over 3 years with minimal maintenance.
                </p>
                <ul class="floor-spring-project-list">
                    <li>Project Type: Shopping Mall Entrance</li>
                    <li>Product Type: Heavy Duty Hydraulic Floor Springs</li>
                    <li>Special Features: Adjustable Speed, Corrosion Resistance</li>
                    <li>Project Completion Time: 2 Weeks</li>
                </ul>
            </div>
            
            <div class="floor-spring-project-right">
                <img src="../floor-spring/Shopping Mall Entrance Doors.avif" alt="Shopping Mall Door Project">
            </div>
        </div>
    </section>

    <section class="floor-spring-faq-section" data-aos="zoom-in">
        <h2 class="floor-spring-faq-title">FLOOR SPRING FAQS</h2>
        <div class="floor-spring-faq-container">
            <div class="floor-spring-faq-item">
                <div class="floor-spring-faq-question">
                    What is the difference between hydraulic and mechanical floor springs?
                    <span class="floor-spring-faq-icon">⌄</span>
                </div>
                <div class="floor-spring-faq-answer">
                    Hydraulic floor springs use fluid pressure for smooth, controlled door movement with adjustable speed settings. Mechanical floor springs use springs and gears. Hydraulic systems generally offer smoother operation, better speed control, and longer lifespan, making them ideal for commercial applications.
                </div>
            </div>

            <div class="floor-spring-faq-item">
                <div class="floor-spring-faq-question">
                    How do I determine the right load capacity for my doors?
                    <span class="floor-spring-faq-icon">⌄</span>
                </div>  
                <div class="floor-spring-faq-answer">
                    Load capacity depends on door weight, size, and frequency of use. Standard doors (40-80kg) typically require 60-80kg capacity floor springs. Heavy glass doors (80-120kg) need 100-120kg capacity. Commercial doors with high traffic may require 120kg+ capacity. Our experts can help determine the right specification.
                </div>
            </div>

            <div class="floor-spring-faq-item">
                <div class="floor-spring-faq-question">
                    Can floor springs be installed in existing doors?
                    <span class="floor-spring-faq-icon">⌄</span>
                </div>
                <div class="floor-spring-faq-answer">
                    Yes, floor springs can be retrofitted to existing doors with proper floor preparation. The installation involves creating a recess in the floor, positioning the floor spring, and connecting it to the door. Professional installation is recommended to ensure proper alignment and performance.
                </div>
            </div>

            <div class="floor-spring-faq-item">
                <div class="floor-spring-faq-question">
                    What maintenance do floor springs require?
                    <span class="floor-spring-faq-icon">⌄</span>
                </div>
                <div class="floor-spring-faq-answer">
                    Our floor springs are designed for low maintenance. Regular cleaning of visible parts and checking for smooth operation is sufficient. Hydraulic systems may require fluid top-up every 3-5 years. We recommend professional servicing every 2 years for commercial applications to ensure optimal performance.
                </div>
            </div>
        </div>
        <button class="floor-spring-faq-btn">View All FAQs</button>
    </section>


    



    <script>
        function floorSpringProdOpenPopup(title, desc, img){
            document.getElementById("floorSpringProdPopupTitle").innerText = title;
            document.getElementById("floorSpringProdPopupDesc").innerText = desc;
            document.getElementById("floorSpringProdPopupImg").src = img;
            document.getElementById("floorSpringProdPopup").classList.add("active");
        }

        function floorSpringProdClosePopup(){
            document.getElementById("floorSpringProdPopup").classList.remove("active");
        }

        const floorSpringFaqItems = document.querySelectorAll(".floor-spring-faq-item");
        floorSpringFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                floorSpringFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });

 
const floorSpringProducts = [
  {
    img:"slim-partition/8.jpg",
    title:"Hydraulic Floor Spring",
    category:"Door Control System",
    price:"Custom Quote",
    rating:"★★★★★ (4.8)",
    desc:"Premium hydraulic floor spring for smooth door control. Features adjustable closing speed and heavy-duty construction for long-lasting performance.",
    sizes:["60kg","80kg","100kg","120kg"],
    activeSize:"120kg",
    colors:["#c6a98c","#ffffff","#1e90ff"]
  },
  {
    img:"slim-partition/9.jpg",
    title:"Heavy Duty Floor Spring",
    category:"Industrial Grade",
    price:"Custom Quote",
    rating:"★★★★☆ (4.6)",
    desc:"Industrial-grade floor spring designed for heavy commercial doors. Features enhanced load capacity and corrosion resistance.",
    sizes:["100kg","120kg","150kg"],
    activeSize:"150kg",
    colors:["#c6a98c","#1e90ff"]
  },
  {
    img:"slim-partition/10.jpg",
    title:"Concealed Floor Spring",
    category:"Aesthetic Installation",
    price:"Custom Quote",
    rating:"★★★★★ (5.0)",
    desc:"Hidden floor spring system for modern interiors. Provides smooth door operation without visible hardware.",
    sizes:["60kg","80kg","100kg"],
    activeSize:"80kg",
    colors:["#c6a98c","#ffffff"]
  },
  {
    img:"slim-partition/11.jpg",
    title:"Double Action Floor Spring",
    category:"Bi-directional System",
    price:"Custom Quote",
    rating:"★★★★☆ (4.7)",
    desc:"Double action floor spring for doors that swing in both directions. Perfect for high-traffic commercial spaces.",
    sizes:["80kg","100kg","120kg"],
    activeSize:"100kg",
    colors:["#c6a98c","#ffffff"]
  },
  {
    img:"slim-partition/12.jpg",
    title:"Adjustable Floor Spring",
    category:"Customizable Control",
    price:"Custom Quote",
    rating:"★★★★☆ (4.5)",
    desc:"Fully adjustable floor spring with variable speed control. Allows precise customization of door closing speed.",
    sizes:["60kg","80kg","100kg"],
    activeSize:"80kg",
    colors:["#c6a98c","#1e90ff"]
  }
];

function changeFloorSpringProduct(el){
  const p = floorSpringProducts[el.dataset.index];

  document.getElementById("floorSpringMainImg").src = p.img;
  document.getElementById("floorSpringTitle").innerText = p.title;
  document.getElementById("floorSpringCategory").innerText = p.category;
  document.getElementById("floorSpringPrice").innerText = p.price;
  document.getElementById("floorSpringRating").innerText = p.rating;
  document.getElementById("floorSpringDesc").innerText = p.desc;

  const sizesBox = document.getElementById("floorSpringSizes");
  sizesBox.innerHTML = "<strong>Load Capacity:</strong><br>";
  p.sizes.forEach(s=>{
    const span = document.createElement("span");
    span.innerText = s;
    if(s === p.activeSize) span.classList.add("active");
    sizesBox.appendChild(span);
  });

  const colorBox = document.getElementById("floorSpringColors");
  colorBox.innerHTML = "<strong>Finish:</strong><br>";
  p.colors.forEach(c=>{
    const span = document.createElement("span");
    span.style.background = c;
    colorBox.appendChild(span);
  });

  document.querySelectorAll(".floor-spring-thumbs img")
    .forEach(img=>img.classList.remove("active"));
  el.classList.add("active");
}



    </script>
<?php include "footer.php"?>