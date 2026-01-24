<?php include "header.php"?>
    
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
        .glass-hero-section {
            position: relative;
            width: 100%;
            height: 760px;
            overflow: hidden;
            margin-top: -90px;
        }

        .glass-hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .glass-hero-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: var(--light-color);
        }

        .glass-hero-content h5 {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 8px;
            opacity: 0.9;
            color: var(--secondary-color);
        }

        .glass-hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            max-width: 600px;
            line-height: 1.1;
            color: var(--text-heading);
        }

        /* WHITE CONTENT BOX - UNIQUE CLASS */
        .glass-content-box {
            background: var(--primary-light);
            width: 100%;
            padding: 60px 40px;
            margin-top: -81px;
            position: relative;
            border-top: 1px solid var(--border-color);
        }

        .glass-content-wrapper {
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .glass-content-title {
            font-size: 34px;
            font-weight: 700;
            color: var(--text-heading);
        }

        .glass-content-text {
            font-size: 15px;
            color: var(--text-color);
        }

        @media(max-width:900px) {
            .glass-hero-content h1 {
                font-size: 32px;
            }

            .glass-content-wrapper {
                grid-template-columns: 1fr;
            }
        }


        /* BENEFITS SECTION - UNIQUE CLASS */
        .glass-benefits-wrapper {
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
        .glass-card {
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

        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .glass-right-card {
            border: 2px solid var(--secondary-color);
        }

        /* TAG LABEL - UNIQUE CLASS */
        .glass-tag {
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
        .glass-icon {
            width: 65px;
            margin: 25px auto 20px auto;
            opacity: 0.9;
        }

        /* TITLE - UNIQUE CLASS */
        .glass-card-title {
            font-size: 22px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .glass-card p {
            font-size: 14.5px;
            color: var(--text-color);
            line-height: 1.65;
        }

        /* PLUS SIGN - UNIQUE CLASS */
        .glass-plus {
            font-size: 48px;
            font-weight: 300;
            color: var(--secondary-color);
            margin-top: -20px;
        }

        /* DOTTED LINE - UNIQUE CLASS */
        .glass-dotted-line {
            height: 280px;
            border-right: 3px dotted var(--secondary-color);
            margin-right: -20px;
        }

        @media(max-width:1200px) {
            .glass-benefits-wrapper {
                flex-direction: column;
            }

            .glass-plus,
            .glass-dotted-line {
                display: none;
            }
        }


        /* MAIN SECTION - UNIQUE CLASS */
        .glass-main-section {
            /* max-width: 1400px; */
            margin: auto;
            padding: 70px 85px;
            background: var(--primary-color);
        }

        /* MAIN TITLE - UNIQUE CLASS */
        .glass-main-section h1 {
            font-size: 36px;
            color: var(--text-heading);
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* TOP PARAGRAPH - UNIQUE CLASS */
        .glass-main-section p {
            font-size: 16px;
            color: var(--text-color);
            width: 95%;
            max-width: 1000px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        /* DISCUSS LINK - UNIQUE CLASS */
        .glass-discuss-link {
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

        .glass-discuss-link:hover {
            color: var(--text-heading);
        }

        .glass-discuss-link .glass-line {
            width: 120px;
            border-bottom: 1px solid var(--secondary-color);
        }

        /* IMAGE + CONTENT ROW - UNIQUE CLASS */
        .glass-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
        }

        /* LEFT IMAGE - UNIQUE CLASS */
        .glass-left-img img {
            width: 730px;
            height: 487px;
            object-fit: cover;
            border-radius: var(--border-radius-main);
            border: 1px solid var(--border-color);
        }

        /* RIGHT CONTENT - UNIQUE CLASS */
        .glass-right-content {
            flex: 1;
            padding-top: 10px;
        }

        .glass-right-content h5 {
            font-size: 13px;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .glass-right-content h2 {
            font-size: 30px;
            color: var(--text-heading);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .glass-right-content p {
            width: 100%;
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 15px;
            color: var(--text-color);
        }

        /* BULLETS - UNIQUE CLASS */
        .glass-ul {
            padding-left: 20px;
            margin-top: 10px;
            list-style: disc;
        }

        .glass-ul li {
            margin-bottom: 8px;
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media(max-width:1100px) {
            .glass-row {
                flex-direction: column;
            }

            .glass-left-img img {
                width: 100%;
                height: auto;
            }

            .glass-main-section h1 {
                font-size: 30px;
            }

            .glass-main-section {
                padding: 50px 20px;
            }
        }


    /* UNIQUE CONTAINER - RENAMED */
    .glass-prod-section{
        /* max-width: 1400px; */
        margin: auto;
        padding: 40px 20px;
        background: var(--primary-color);
    }

    .glass-prod-title{
        text-align:center;
        margin-bottom:30px;
        color: var(--text-heading);
        font-size:30px;
        font-weight:700;
    }

    /* UNIQUE GRID - RENAMED */
    .glass-prod-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    /* UNIQUE CARD - RENAMED */
    .glass-prod-card{
        background: var(--primary-light);
        border-radius: var(--border-radius-main);
        overflow:hidden;
        box-shadow: var(--shadow-light);
        cursor:pointer;
        transition: var(--transition-speed);
        border: 1px solid var(--border-color);
    }

    .glass-prod-card:hover{
        transform:translateY(-6px);
        box-shadow: var(--shadow-medium);
    }

    .glass-prod-card-img{
        width: 100%;
        height: 364px;
        object-fit: cover;
    }

    .glass-prod-card-info{
        padding:15px;
    }

    .glass-prod-card-info h3{
        font-size:20px;
        color: var(--text-heading);
        margin-bottom:5px;
    }

    .glass-prod-card-info p{
        font-size:14px;
        color: var(--text-color);
    }

    /* UNIQUE POPUP - RENAMED */
    .glass-prod-popup{
        position:fixed;
        inset:0;
        display:none;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.8);
        padding:20px;
        z-index:9999;
    }

    .glass-prod-popup.active{
        display:flex;
    }

    .glass-prod-popup-box{
        background: var(--primary-light);
        width:100%;
        max-width:520px;
        border-radius: var(--border-radius-main);
        overflow:hidden;
        animation:glassProdShow .3s ease;
        border: 1px solid var(--border-color);
    }

    @keyframes glassProdShow{
        from{opacity:0;transform:translateY(20px);}
        to{opacity:1;transform:translateY(0);}
    }

    .glass-prod-popup-img{
        width:100%;
        height:280px;
        object-fit:cover;
    }

    .glass-prod-popup-content{
        padding:20px;
    }

    .glass-prod-popup-content h2{
        font-size:24px;
        margin-bottom:10px;
        color: var(--text-heading);
    }

    .glass-prod-popup-content p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
    }

    .glass-prod-btn{
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

    .glass-prod-btn:hover {
        background-color: #b5987a;
    }

    .glass-prod-close{
        position:absolute;
        top:15px;
        right:25px;
        font-size:40px;
        color: var(--light-color);
        cursor:pointer;
    }


    
    /* SECTION WRAPPER - RENAMED */
    .glass-fund-section{
        width:100%;
        padding:60px 20px;
        background: var(--primary-color);
    }

    .glass-fund-container{
        /* max-width: 1400px; */
        padding: 0px 50px;
        margin:auto;
    }

    .glass-fund-top-title{
        font-size:14px;
        letter-spacing:1px;
        margin-bottom:15px;
        color: var(--secondary-color);
        font-weight:600;
    }

    .glass-fund-heading{
        font-size:34px;
        font-weight:700;
        color: var(--text-heading);
        margin-bottom:25px;
        line-height:1.3;
    }

    .glass-fund-desc{
        font-size:15px;
        color: var(--text-color);
        line-height:1.7;
        max-width:700px;
        margin-bottom:35px;
    }

    .glass-fund-link{
        display:flex;
        align-items:center;
        gap:15px;
        font-size:15px;
        font-weight:600;
        margin-bottom:60px;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .glass-fund-line{
        width:120px;
        border-bottom:1px solid var(--secondary-color);
    }

    /* CARDS WRAP - RENAMED */
    .glass-fund-card-wrap{
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    }

    /* CARD - RENAMED */
    .glass-fund-card{
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

    .glass-fund-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .glass-fund-card-title{
        font-size:26px;
        font-weight:700;
        margin-bottom:20px;
        color: var(--text-heading);
    }

    .glass-fund-card p{
        font-size:15px;
        line-height:1.7;
        color: var(--text-color);
        margin-bottom:30px;
    }

    .glass-fund-card hr{
        border:none;
        height:1px;
        background: var(--border-color);
        margin-bottom:20px;
    }

    .glass-fund-card-subtitle{
        font-size:15px;
        font-weight:600;
        color: var(--secondary-color);
        margin-bottom:12px;
    }

    /* LIST - RENAMED */
    .glass-fund-list{
        list-style:none;
        padding-left:0;
    }

    .glass-fund-list li{
        margin-bottom:8px;
        font-size:15px;
        color: var(--text-color);
    }

    .glass-fund-list li:before{
        content:"✔ ";
        color: var(--secondary-color);
        font-weight:700;
    }

    /* RESPONSIVE */
    @media(max-width:900px){
        .glass-fund-card-wrap{
            flex-direction:column;
        }
        .glass-fund-card{
            min-width:100%;
        }
    }


       /* MAIN WRAPPER - RENAMED */
    .glass-project-section{
        width:100%;
        padding:100px 20px;
        background: var(--primary-color);
    }

    .glass-project-container{
        max-width: 1350px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:50px;
    }

    /* LEFT CONTENT - RENAMED */
    .glass-project-left{
        flex:1;
    }

    .glass-project-subtitle{
        font-size:14px;
        letter-spacing:1px;
        color: var(--secondary-color);
        margin-bottom:20px;
        font-weight:500;
    }

    .glass-project-title{
        font-size:38px;
        color: var(--text-heading);
        font-weight:700;
        margin-bottom:25px;
        line-height:1.3;
    }

    .glass-project-text{
        font-size:16px;
        line-height:1.8;
        color: var(--text-color);
        margin-bottom:22px;
        max-width:650px;
    }

    /* BULLETS - RENAMED */
    .glass-project-list{
        margin-top:10px;
        list-style:none;
        padding-left:0;
    }

    .glass-project-list li{
        margin-bottom:10px;
        font-size:16px;
        color: var(--text-color);
        line-height:1.6;
    }

    .glass-project-list li:before{
        content:"• ";
        font-size:20px;
        line-height:1;
        color: var(--secondary-color);
        font-weight:bold;
    }

    /* RIGHT IMAGE - RENAMED */
    .glass-project-right img{
        width:650px;
        height:480px;
        object-fit:cover;
        border-radius: var(--border-radius-main);
        border: 1px solid var(--border-color);
    }

    /* RESPONSIVE */
    @media(max-width:1000px){
        .glass-project-container{
            flex-direction:column;
        }

        .glass-project-right img{
            width:100%;
            height:auto;
        }

        
    }



     /* ===============================
   JANSON GLASS PARTITION (EXACT)
================================ */

#jansonGlassWrapper {
    padding: 80px 5%;
    background: var(--primary-color);
    font-family: var(--font-primary);
}

.janson-glass-inner {
    max-width: 1550px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1.35fr 1fr 80px;
    gap: 40px;
    align-items: center;
}

/* COMMON BOX */
.janson-glass-box {
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
    .janson-glass-inner {
        grid-template-columns: 1fr;
    }

    .janson-vertical-strip {
        writing-mode: horizontal-tb;
        transform: none;
        margin-top: 20px;
    }
}


    
    /* SECTION BACKGROUND - RENAMED */
    .glass-faq-section{
        width:100%;
        background: var(--primary-light);
        color: var(--text-heading);
        padding:100px 20px;
        text-align:center;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }

    /* MAIN TITLE - RENAMED */
    .glass-faq-title{
        font-size:40px;
        font-weight:700;
        margin-bottom:50px;
        letter-spacing:2px;
    }

    /* FAQ CONTAINER - RENAMED */
    .glass-faq-container{
        max-width:1100px;
        margin:auto;
        text-align:left;
    }

    /* FAQ ITEM - RENAMED */
    .glass-faq-item{
        width:100%;
        border-bottom:1px solid var(--border-color);
        padding:22px 10px;
        cursor:pointer;
        position:relative;
        transition: background-color var(--transition-speed);
    }

    .glass-faq-item:hover {
        background-color: rgba(198, 169, 140, 0.05);
    }

    .glass-faq-question{
        font-size:18px;
        font-weight:500;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    /* PLUS / MINUS ICON - RENAMED */
    .glass-faq-icon{
        font-size:26px;
        font-weight:700;
        transition:0.3s;
        user-select:none;
        color: var(--secondary-color);
    }

    /* ANSWER CONTENT - RENAMED */
    .glass-faq-answer{
        font-size:16px;
        color: var(--text-color);
        max-height:0;
        overflow:hidden;
        line-height:1.7;
        padding-right:35px;
        transition:max-height 0.4s ease;
    }

    .glass-faq-item.active .glass-faq-answer{
        margin-top:12px;
        max-height:300px;
    }

    /* CHANGE ICON WHEN ACTIVE - RENAMED */
    .glass-faq-item.active .glass-faq-icon{
        transform:rotate(180deg);
    }

    /* READ ALL BUTTON - RENAMED */
    .glass-faq-btn{
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

    .glass-faq-btn:hover{
        background: var(--secondary-color);
        color: var(--primary-color);
    }

    @media (min-width:300px) and (max-width:700px){
    .glass-fund-container{
        padding: 0px !important;
    }
}
.glass-hero-content h5{
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


.glass-product-slider{
display:flex;
gap:40px;
padding:60px;
align-items:center;
}

/* LEFT */
.glass-product-images{
position:relative;
flex:1;
background:linear-gradient(145deg,#0d0d0d,#1c1c1c);
border-radius:12px;
padding:40px;
text-align:center;
}

.glass-stock{
position:absolute;
top:20px;
left:20px;
opacity:0.3;
letter-spacing:2px;
}

.glass-main-img{
width:80%;
transition:0.3s;
}

.glass-thumbs{
display:flex;
justify-content:center;
gap:15px;
margin-top:20px;
flex-wrap:wrap;
}

.glass-thumbs img{
width:60px;
cursor:pointer;
opacity:0.6;
border-radius:8px;
}

.glass-thumbs img.active,
.glass-thumbs img:hover{
opacity:1;
transform:scale(1.1);
}

/* RIGHT */
.glass-product-info{
flex:1;
background:var(--primary-light);
padding:35px;
border-radius:12px;
box-shadow:var(--shadow-medium);
}

.glass-product-title{
font-size:26px;
color:var(--text-heading);
}

.glass-category{
font-size:13px;
opacity:0.7;
}

.glass-price{
font-size:28px;
margin:12px 0;
color:var(--secondary-color);
}

.glass-rating{
color:gold;
margin-bottom:12px;
}

.glass-desc{
font-size:14px;
line-height:1.6;
margin-bottom:18px;
color:var(--text-color);
}

.glass-sizes span{
display:inline-block;
border:1px solid var(--border-color);
padding:6px 10px;
margin:6px 6px 0 0;
cursor:pointer;
border-radius:6px;
}

.glass-sizes span.active{
background:var(--secondary-color);
color:#000;
}

.glass-colors span{
display:inline-block;
width:18px;
height:18px;
border-radius:50%;
margin:8px 8px 0 0;
border:1px solid #555;
}

.glass-cart-btn{
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
.glass-product-slider{
flex-direction:column;
}
}


    </style>
</head>

<body>

    <!-- HERO IMAGE SECTION -->
    <section class="glass-hero-section"  data-aos="zoom-in">
        <img src="slim-partition/WhatsApp Image 2025-12-24 at 6.30.17 PM (1).jpeg" alt="Glass Partition Background">
        <div class="glass-hero-content">
            <h5>GLASS PARTITION SYSTEMS</h5>
            <h1>ELEGANT GLASS PARTITIONS FOR MODERN INTERIORS</h1>
        </div>
    </section>

    <!-- CONTENT BOX SECTION -->
    <section class="glass-content-box"  data-aos="zoom-in">
        <div class="glass-content-wrapper">
            <div>
                <h2 class="glass-content-title">GLASS PARTITION MANUFACTURER IN INDIA</h2>
            </div>
            <div class="glass-content-text">
                <p>
                    As one of the leading manufacturers of Glass Partitions, we specialize in the fabrication of modern, functional, and aesthetically refined partition systems that redefine interior spaces with elegance and transparency. Our glass partitions are designed to flawlessly balance the blend of beauty and functionality into open, light-rich areas that stimulate productivity and sophistication.
                </p>
                <p>
                    Each partition is built with superior-quality tempered glass, high-grade aluminum profiles, and accurate fittings in order to guarantee structural integrity, safety, and durability. Be it for offices, homes, retail spaces, or hospitality interiors, our glass partitions add a look of cleanliness and modernity while serving functionality regarding privacy and acoustic comfort.
                </p>
                <p>
                    We can create superior partitions that enhance both form and function through our expert craftsmanship, advanced technology in manufacturing, and attention to detail, making us a trusted choice for modern interior solutions.
                </p>
            </div>
        </div>
    </section>

    <div class="glass-benefits-wrapper">
        <!-- CARD 1 -->
        <div class="glass-card"  data-aos="zoom-in">
            <div class="glass-tag">Benefits</div>
            <img class="glass-icon" src="https://cdn-icons-png.flaticon.com/512/992/992651.png">
            <div class="glass-card-title">ELEGANT DESIGN</div>
            <p>
                Exuding a fashionable, elegant look, canvases bring openness, transparency, and natural light inside. Improved Productivity: Creates an inspiring, well-lit workspace for improved efficiency.
            </p>
        </div>

        <!-- PLUS SIGN -->
        <div class="glass-plus">+</div>

        <!-- CARD 2 -->
        <div class="glass-card" data-aos="zoom-in">
            <div class="glass-tag">Benefits</div>
            <img class="glass-icon" src="https://cdn-icons-png.flaticon.com/512/3430/3430447.png">
            <div class="glass-card-title">PRIVACY & DURABILITY</div>
            <p>
                Acoustic Comfort: Minimizes noise while maintaining visual connectivity. Durable & Long-Lasting: Constructed from high-quality tempered glass and corrosion-resistant hardware.
            </p>
        </div>

        <!-- DOTTED LINE -->
        <div class="glass-dotted-line"  data-aos="zoom-in"></div>

        <!-- CARD 3 -->
        <div class="glass-card glass-right-card" data-aos="zoom-in">
            <div class="glass-tag">Applications</div>
            <img class="glass-icon" src="https://cdn-icons-png.flaticon.com/512/456/456177.png">
            <div class="glass-card-title">VERSATILE APPLICATIONS</div>
            <p>
                Space Optimization: Large space divided into functional zones without visual clutter. Diverse Applications: Suitable for offices, homes, showrooms, hotels, and educational premises.
            </p>
        </div>
    </div>

<section class="janson-glass-wrapper" id="jansonGlassWrapper">
    <div class="janson-glass-inner">

        <!-- LEFT IMAGE -->
        <div class="janson-glass-box janson-left-box">
            <div class="janson-img-holder">
                <img src="glass-partitions/image copy.png" alt="Frameless Glass Partition">
            </div>
            <p class="janson-label">FRAMELESS GLASS</p>
        </div>

        <!-- CENTER IMAGE -->
        <div class="janson-glass-box janson-center-box">

            <div class="janson-top-logo">
                <span class="janson-logo-je">JE</span>
                <span class="janson-logo-text">JANSON EXPORTS</span>
            </div>

            <div class="janson-img-holder big-img">
                <img src="glass-partitions/office-glass.avif" alt="Office Glass Partition">
            </div>
            <p class="janson-label">OFFICE PARTITION</p>

            <div class="janson-bni-badge">BNI MEMBER</div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="janson-glass-box janson-right-box">
            <div class="janson-img-holder">
                <img src="glass-partitions/frosted-glass.jpg-women.avif" alt="Frosted Glass Partition">
            </div>
            <p class="janson-label">FROSTED GLASS</p>
        </div>

        <!-- RIGHT VERTICAL BAR -->
        <div class="janson-vertical-strip">
            <span>GLASS PARTITION</span>
            <span>SUBCATEGORIES</span>
        </div>

    </div>
</section>




    

    <section class="glass-main-section"  data-aos="zoom-in">
        <h1>GLASS PARTITION SUPPLIER IN INDIA</h1>
        <p>
            As one of the major Glass Partition suppliers, we pride ourselves on superior quality, excellent customer service, and after-sales technical support. We develop and provide solutions for architects, interior designers, and corporate clients who demand perfection, performance, and style.
        </p>
        <p>
            Our supply chain is highly efficient and ensures on-time delivery with consistent product quality for orders of any scale and customization. Each glass partition is well-packaged to ensure safety in transportation and quick installation, enabling clients to give shape to their interior concepts easily.
        </p>

        <a href="contact.php" class="glass-discuss-link">
            Request a Quote
            <div class="glass-line"></div>
        </a>

        <!-- MAIN ROW -->
        <div class="glass-row"  data-aos="zoom-in">
            <!-- LEFT IMAGE -->
            <div class="glass-left-img">
                <img src="glass-partitions/frameless-glass.jpg" alt="Glass Partition Installation">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="glass-right-content">
                <h5>KEY FEATURES</h5>
                <h2>Premium Glass Partition Solutions</h2>
                <p>
                    Our glass partitions feature premium toughened and laminated glass options with sleek aluminum and stainless-steel framing systems. We offer multiple finishes: clear, frosted, tinted, or decorative glass to suit any interior design.
                </p>
                <p>
                    Designed with excellent sound insulation properties, our partitions are compatible with sliding or fixed designs. We use non-toxic, safe, secure, and eco-friendly materials that are easy to install with barely visible hardware.
                </p>
                <p>
                    Our expert team works closely with clients to provide custom size and design flexibility for bespoke interiors that perfectly match architectural requirements.
                </p>
                <ul class="glass-ul">
                    <li>Premium toughened and laminated glass options</li>
                    <li>Sleek aluminum and stainless-steel framing systems</li>
                    <li>Multiple finishes: clear, frosted, tinted, or decorative glass</li>
                    <li>Excellent sound insulation properties</li>
                    <li>Compatible with sliding or fixed designs</li>
                    <li>Non-toxic, safe, secure, and eco-friendly materials</li>
                    <li>Easy to install and barely visible hardware</li>
                    <li>Custom size and design flexibility for bespoke interiors</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="glass-prod-section">
        <h2 class="glass-prod-title">OUR GLASS PARTITION PRODUCTS</h2>
        <div class="glass-prod-grid">
            <!-- CARD 1 -->
            <div class="glass-prod-card" onclick="glassProdOpenPopup('Frameless Glass Partition','Modern frameless glass partition for luxury interiors. Perfect for offices and commercial spaces.','glass-partitions/frosted-glass.jpg')" data-aos="zoom-in"> 
                <img class="glass-prod-card-img" src="glass-partitions/frosted-glass.jpg">
                <div class="glass-prod-card-info">
                    <h3>Frameless Glass Partition</h3>
                    <p>Modern frameless glass design</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="glass-prod-card" onclick="glassProdOpenPopup('Frosted Glass Partition','Privacy glass partition with frosted finish. Ideal for offices and meeting rooms.','glass-partitions/image copy 4.png')" data-aos="zoom-in">
                <img class="glass-prod-card-img" src="glass-partitions/image copy 4.png">
                <div class="glass-prod-card-info">
                    <h3>Frosted Glass Partition</h3>
                    <p>Privacy with elegant frosted finish</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="glass-prod-card" onclick="glassProdOpenPopup('Sliding Glass Partition','Space-saving sliding glass partition for modern interiors. Perfect for flexible spaces.','glass-partitions/sliding-glass.jpg')" data-aos="zoom-in">
                <img class="glass-prod-card-img" src="glass-partitions/sliding-glass.jpg">
                <div class="glass-prod-card-info">
                    <h3>Sliding Glass Partition</h3>
                    <p>Smooth and elegant sliding system</p>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP -->
    <div class="glass-prod-popup" id="glassProdPopup">
        <span class="glass-prod-close" onclick="glassProdClosePopup()">&times;</span>
        <div class="glass-prod-popup-box">
            <img id="glassProdPopupImg" class="glass-prod-popup-img">
            <div class="glass-prod-popup-content">
                <h2 id="glassProdPopupTitle"></h2>
                <p id="glassProdPopupDesc"></p>
                <a href="contact.php" class="glass-prod-btn">Enquire Now</a>
            </div>
        </div>
    </div>

    <section class="glass-fund-section" data-aos="zoom-in">
        <div class="glass-fund-container">
            <div class="glass-fund-top-title">EXPORT QUALITY</div>
            <h2 class="glass-fund-heading">GLASS PARTITION EXPORTER IN INDIA</h2>
            <p class="glass-fund-desc">
                As one of the experienced exporters of Glass Partitions, we proudly offer modern and reliable partition solutions to global clients, designed according to varied architectural styles and space needs. Our glass partitions are manufactured in compliance with international safety and quality standards, ensuring flawless performance and long-lasting appeal.
            </p>
            
            <a href="contact.php" class="glass-fund-link">
                International Enquiries
                <div class="glass-fund-line"></div>
            </a>

            <div class="glass-fund-card-wrap">
                <div class="glass-fund-card">
                    <div class="glass-fund-card-title">Global Standards</div>
                    <p>
                        We offer comprehensive export services, including product customization, secure packaging, and timely shipment around the world. Our commitment to innovation, quality, and customer satisfaction has earned us recognition as a reliable exporter.
                    </p>
                    <hr>
                    <div class="glass-fund-card-subtitle">Our Export Advantages:</div>
                    <ul class="glass-fund-list">
                        <li>Compliance with international safety standards</li>
                        <li>Flawless performance and long-lasting appeal</li>
                        <li>Timely shipment worldwide</li>
                        <li>Secure packaging for international transit</li>
                    </ul>
                </div>

                <div class="glass-fund-card">
                    <div class="glass-fund-card-title">International Markets</div>
                    <p>
                        We serve various international markets for commercial, residential, and institutional sectors. Our experience in international trade ensures we meet diverse architectural styles and space requirements.
                    </p>
                    <hr>
                    <div class="glass-fund-card-subtitle">Global Reach:</div>
                    <ul class="glass-fund-list">
                        <li>Commercial office spaces worldwide</li>
                        <li>Residential projects across continents</li>
                        <li>Institutional and educational facilities</li>
                        <li>Hospitality and retail sectors</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="glass-product-slider" data-aos="zoom-in">

  
  <div class="glass-product-images">
    <span class="glass-stock">IN STOCK</span>

    <img src="slim-partition/8.jpg" class="glass-main-img" id="glassMainImg">

    <div class="glass-thumbs">
      <img src="slim-partition/8.jpg" class="active" data-index="0" onclick="changeGlassProduct(this)">
      <img src="slim-partition/9.jpg" data-index="1" onclick="changeGlassProduct(this)">
      <img src="slim-partition/10.jpg" data-index="2" onclick="changeGlassProduct(this)">
      <img src="slim-partition/11.jpg" data-index="3" onclick="changeGlassProduct(this)">
    </div>
  </div>

 
  <div class="glass-product-info">

    <h3 class="glass-product-title" id="glassTitle">Frameless Glass Partition</h3>
    <span class="glass-category" id="glassCategory">Office Partition System</span>

    <div class="glass-price" id="glassPrice">Custom Quote</div>

    <div class="glass-rating" id="glassRating">★★★★★ (4.9)</div>

    <p class="glass-desc" id="glassDesc">
      Premium quality frameless glass partition designed for modern offices. Features tempered safety glass and minimal aluminum framing for elegant appearance.
    </p>

    <div class="glass-sizes" id="glassSizes">
      <strong>Glass Thickness:</strong><br>
      <span>8mm</span><span>10mm</span><span>12mm</span>
      <span class="active">Custom</span>
    </div>

    <div class="glass-colors" id="glassColors">
      <strong>Finish:</strong><br>
      <span style="background:#ffffff"></span>
      <span style="background:#c6a98c"></span>
      <span style="background:#1e90ff"></span>
    </div>

    <button class="glass-cart-btn">+ REQUEST QUOTE</button>

  </div>

</section> -->

    <section class="janson-feature-section" id="jansonFeatureSection">
    <div class="janson-feature-wrapper">

        <!-- LEFT IMAGE -->
        <div class="janson-feature-image">
            <img src="glass-partitions/jansen_folding-and-sliding-systems_f72fb205.webp" alt="Glass Partition Office">
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
                    <h4><span>01</span> Transparency & Light</h4>
                    <p>Maximizes natural light flow while maintaining visual connectivity between spaces.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">✔</div>
                <div>
                    <h4><span>02</span> Acoustic Control</h4>
                    <p>Specialized acoustic glass and sealing options reduce noise for focused environments.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⚙</div>
                <div>
                    <h4><span>03</span> Customization</h4>
                    <p>Add logos, frosted films, or gradient designs for branding and privacy requirements.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">⬛</div>
                <div>
                    <h4><span>04</span> Structural Integrity</h4>
                    <p>High-grade tempered glass and rust-free aluminium ensures strength and stability.</p>
                </div>
            </div>

            <div class="janson-feature-item">
                <div class="janson-feature-icon">🏆</div>
                <div>
                    <h4><span>05</span> Aesthetic Value</h4>
                    <p>Sleek profiles and clean glass lines enhance office aesthetics and modern appeal.</p>
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




    <section class="glass-project-section" data-aos="zoom-in">
        <div class="glass-project-container">
            <div class="glass-project-left">
                <div class="glass-project-subtitle">CORPORATE HEADQUARTERS</div>
                <h2 class="glass-project-title">Tech Corporate Office Complex</h2>
                <p class="glass-project-text">
                    A leading technology company required to create an open yet private workspace environment in their new headquarters. Our frameless glass partitions provided the ideal solution, allowing natural light to flow throughout the office while creating distinct work zones.
                </p>
                <p class="glass-project-text">
                    The installation featured floor-to-ceiling tempered glass partitions with minimal aluminum framing, creating a modern and transparent work environment. The partitions included integrated acoustic insulation for private meetings while maintaining visual connectivity.
                </p>
                <p class="glass-project-text">
                    This project successfully transformed 50,000 sq. ft. of office space into a collaborative yet private working environment that boosted employee productivity and satisfaction.
                </p>
                <ul class="glass-project-list">
                    <li>Project Type: Corporate Headquarters</li>
                    <li>Partition Type: Frameless Glass Partitions</li>
                    <li>Special Features: Acoustic Insulation, Minimal Framing</li>
                    <li>Project Completion Time: 8 Weeks</li>
                </ul>
            </div>
            
            <div class="glass-project-right">
                <img src="glass-partitions/Jansen-Wall-Solutions_JSkin_BMW-scaled-permiry.jpg" alt="Office Glass Partition Project">
            </div>
        </div>
    </section>

    <section class="glass-faq-section" data-aos="zoom-in">
        <h2 class="glass-faq-title">GLASS PARTITION FAQS</h2>
        <div class="glass-faq-container">
            <div class="glass-faq-item">
                <div class="glass-faq-question">
                    What types of glass are used in your partitions?
                    <span class="glass-faq-icon">⌄</span>
                </div>
                <div class="glass-faq-answer">
                    We use premium quality tempered glass (8mm, 10mm, or 12mm thickness) which is 4-5 times stronger than regular glass. We also offer laminated glass for enhanced safety and acoustic glass for noise reduction. All our glass complies with international safety standards.
                </div>
            </div>

            <div class="glass-faq-item">
                <div class="glass-faq-question">
                    How much sound insulation do glass partitions provide?
                    <span class="glass-faq-icon">⌄</span>
                </div>  
                <div class="glass-faq-answer">
                    Our standard glass partitions provide up to 35 dB sound reduction, while our specialized acoustic glass partitions can provide up to 45 dB sound reduction. This is sufficient for most office environments, meeting rooms, and private spaces.
                </div>
            </div>

            <div class="glass-faq-item">
                <div class="glass-faq-question">
                    Can glass partitions be made completely private?
                    <span class="glass-faq-icon">⌄</span>
                </div>
                <div class="glass-faq-answer">
                    Yes, we offer several options for privacy including frosted glass, sandblasted glass, decorative films, and switchable privacy glass (smart glass) that can turn from clear to opaque with the flip of a switch.
                </div>
            </div>

            <div class="glass-faq-item">
                <div class="glass-faq-question">
                    What maintenance do glass partitions require?
                    <span class="glass-faq-icon">⌄</span>
                </div>
                <div class="glass-faq-answer">
                    Glass partitions require minimal maintenance. Regular cleaning with a glass cleaner and soft cloth is sufficient. The aluminum frames are powder-coated for durability and require only occasional wiping. We recommend professional cleaning for hard water stains.
                </div>
            </div>
        </div>
        <button class="glass-faq-btn">View All FAQs</button>
    </section>


    



    <script>
        function glassProdOpenPopup(title, desc, img){
            document.getElementById("glassProdPopupTitle").innerText = title;
            document.getElementById("glassProdPopupDesc").innerText = desc;
            document.getElementById("glassProdPopupImg").src = img;
            document.getElementById("glassProdPopup").classList.add("active");
        }

        function glassProdClosePopup(){
            document.getElementById("glassProdPopup").classList.remove("active");
        }

        const glassFaqItems = document.querySelectorAll(".glass-faq-item");
        glassFaqItems.forEach(item => {
            item.addEventListener("click", () => {
                glassFaqItems.forEach(i => {
                    if(i !== item){
                        i.classList.remove("active");
                    }
                });
                item.classList.toggle("active");
            });
        });

 
const glassProducts = [
  {
    img:"slim-partition/8.jpg",
    title:"Frameless Glass Partition",
    category:"Office Partition System",
    price:"Custom Quote",
    rating:"★★★★★ (4.9)",
    desc:"Premium quality frameless glass partition designed for modern offices. Features tempered safety glass and minimal aluminum framing for elegant appearance.",
    sizes:["8mm","10mm","12mm","Custom"],
    activeSize:"Custom",
    colors:["#ffffff","#c6a98c","#1e90ff"]
  },
  {
    img:"slim-partition/9.jpg",
    title:"Frosted Glass Partition",
    category:"Privacy Partition",
    price:"Custom Quote",
    rating:"★★★★☆ (4.7)",
    desc:"Elegant frosted glass partition providing privacy while allowing light transmission. Perfect for meeting rooms and private offices.",
    sizes:["8mm","10mm","Custom"],
    activeSize:"10mm",
    colors:["#ffffff","#1e90ff"]
  },
  {
    img:"slim-partition/10.jpg",
    title:"Acoustic Glass Partition",
    category:"Sound Insulation System",
    price:"Custom Quote",
    rating:"★★★★★ (5.0)",
    desc:"Specialized acoustic glass partition with enhanced sound insulation properties. Ideal for conference rooms and noisy environments.",
    sizes:["10mm","12mm","Custom"],
    activeSize:"12mm",
    colors:["#ffffff","#1e90ff"]
  },
  {
    img:"slim-partition/11.jpg",
    title:"Sliding Glass Partition",
    category:"Space Saving System",
    price:"Custom Quote",
    rating:"★★★★☆ (4.8)",
    desc:"Space-saving sliding glass partition system for flexible office layouts. Smooth operation with premium hardware.",
    sizes:["8mm","10mm","Custom"],
    activeSize:"10mm",
    colors:["#000000","#ffcc00"]
  },
  {
    img:"slim-partition/12.jpg",
    title:"Tinted Glass Partition",
    category:"Solar Control System",
    price:"Custom Quote",
    rating:"★★★★☆ (4.6)",
    desc:"Tinted glass partition with solar control properties. Reduces glare and heat transmission while maintaining visibility.",
    sizes:["8mm","10mm","Custom"],
    activeSize:"Custom",
    colors:["#ffffff","#1e90ff"]
  }
];

function changeGlassProduct(el){
  const p = glassProducts[el.dataset.index];

  document.getElementById("glassMainImg").src = p.img;
  document.getElementById("glassTitle").innerText = p.title;
  document.getElementById("glassCategory").innerText = p.category;
  document.getElementById("glassPrice").innerText = p.price;
  document.getElementById("glassRating").innerText = p.rating;
  document.getElementById("glassDesc").innerText = p.desc;

  const sizesBox = document.getElementById("glassSizes");
  sizesBox.innerHTML = "<strong>Glass Thickness:</strong><br>";
  p.sizes.forEach(s=>{
    const span = document.createElement("span");
    span.innerText = s;
    if(s === p.activeSize) span.classList.add("active");
    sizesBox.appendChild(span);
  });

  const colorBox = document.getElementById("glassColors");
  colorBox.innerHTML = "<strong>Finish:</strong><br>";
  p.colors.forEach(c=>{
    const span = document.createElement("span");
    span.style.background = c;
    colorBox.appendChild(span);
  });

  document.querySelectorAll(".glass-thumbs img")
    .forEach(img=>img.classList.remove("active"));
  el.classList.add("active");
}



    </script>
<?php include "footer.php"?>