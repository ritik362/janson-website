<?php $page_title = "About Us | Trusted Glass Hardware & Architectural Fittings Manufacturers in Abu-Dhabi";
$description = "Learn more about our expertise as a leading manufacturer of glass partitions, sliding systems, shower fittings, patch fittings, spider fittings, floor springs, and architectural hardware in Abu-Dhabi. Committed to quality, innovation, and precision engineering.";
$keyword = "About glass fittings company Abu-Dhabi,Architectural hardware manufacturers Abu-Dhabi,Glass Partition company Abu-Dhabi,Sliding system manufacturers Abu-Dhabi,Patch Fitting company Abu-Dhabi,Shower fittings manufacturers Abu-Dhabi,Glass hardware exporters Abu-Dhabi,Premium glass fittings Abu-Dhabi";
include('header.php') ?>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #121212;
            --primary-light: #1E1E1E;
            --secondary-color: #C6A98C;
            --accent-color: #FF6B35;
            --text-color: #E0E0E0;
            --text-heading: #FFFFFF;
            --light-color: #FFFFFF;
            --border-color: #333333;
            --font-primary: 'Poppins', sans-serif;
            --border-radius-main: 10px;
            --shadow-light: 0 4px 20px rgba(0, 0, 0, 0.15);
            --shadow-medium: 0 8px 30px rgba(0, 0, 0, 0.25);
            --shadow-glow: 0 0 20px rgba(198, 169, 140, 0.2);
            --transition-speed: 0.4s;
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
            overflow-x: hidden;
        }

        /* ANIMATED BACKGROUND */
        .about-bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.05;
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, var(--secondary-color), transparent);
            animation: float 20s infinite linear;
        }

        .shape-1 {
            width: 300px;
            height: 300px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }

        .shape-2 {
            width: 200px;
            height: 200px;
            top: 60%;
            right: 10%;
            animation-delay: 5s;
            animation-direction: reverse;
        }

        .shape-3 {
            width: 150px;
            height: 150px;
            bottom: 20%;
            left: 15%;
            animation-delay: 10s;
        }

        @keyframes float {
            0% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(20px, 20px) rotate(90deg); }
            50% { transform: translate(0, 40px) rotate(180deg); }
            75% { transform: translate(-20px, 20px) rotate(270deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }

        /* HERO SECTION */
        .about-hero-section {
            position: relative;
            width: 100%;
            height: 85vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            padding: 0 20px;
        }

        .about-hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* filter: brightness(0.3); */
            z-index: -1;
        }

        .about-hero-content {
            text-align: center;
            max-width: 1200px;
            z-index: 2;
            position: relative;
        }

        .about-hero-subtitle {
            font-size: 18px;
            letter-spacing: 4px;
            color: var(--secondary-color);
            margin-bottom: 20px;
            font-weight: 600;
            text-transform: uppercase;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }

        .about-hero-subtitle::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 2px;
            background: var(--secondary-color);
        }

        .about-hero-title {
            font-size: 4.5rem;
            font-weight: 900;
            color: var(--text-heading);
            margin-bottom: 25px;
            line-height: 1.1;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        .about-hero-title span {
            color: var(--secondary-color);
            position: relative;
        }

        .about-hero-title span::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 8px;
            background: rgba(198, 169, 140, 0.2);
            z-index: -1;
        }

        .about-hero-description {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 40px;
            color: var(--text-color);
        }

        .about-scroll-indicator {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            color: var(--secondary-color);
            font-size: 14px;
            letter-spacing: 2px;
            animation: bounce 2s infinite;
        }

        .about-scroll-indicator i {
            font-size: 24px;
            margin-top: 10px;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0) translateX(-50%);}
            40% {transform: translateY(-10px) translateX(-50%);}
            60% {transform: translateY(-5px) translateX(-50%);}
        }

        /* MISSION SECTION */
        .about-mission-section {
            padding: 120px 20px;
            position: relative;
            background: var(--primary-light);
            overflow: hidden;
        }

        .about-mission-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .about-mission-image {
            position: relative;
            border-radius: var(--border-radius-main);
            overflow: hidden;
            box-shadow: var(--shadow-medium);
            transform: perspective(1000px) rotateY(-10deg);
            transition: transform var(--transition-speed);
        }

        .about-mission-image:hover {
            transform: perspective(1000px) rotateY(0deg);
        }

        .about-mission-image img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            transition: transform var(--transition-speed);
        }

        .about-mission-image:hover img {
            transform: scale(1.05);
        }

        .about-mission-content {
            padding-right: 20px;
        }

        .about-section-title {
            font-size: 14px;
            letter-spacing: 3px;
            color: var(--secondary-color);
            margin-bottom: 15px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .about-mission-heading {
            font-size: 3rem;
            font-weight: 800;
            color: var(--text-heading);
            margin-bottom: 25px;
            line-height: 1.2;
        }

        .about-mission-text {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: var(--text-color);
        }

        .about-mission-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 40px;
        }

        .about-stat-item {
            text-align: center;
            padding: 25px 15px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: var(--border-radius-main);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all var(--transition-speed);
        }

        .about-stat-item:hover {
            transform: translateY(-10px);
            border-color: var(--secondary-color);
            box-shadow: var(--shadow-glow);
        }

        .about-stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--secondary-color);
            margin-bottom: 5px;
            display: block;
        }

        .about-stat-label {
            font-size: 0.9rem;
            color: var(--text-color);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* VALUES SECTION */
        .about-values-section {
            padding: 120px 20px;
            background: var(--primary-color);
        }

        .about-values-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .about-values-header {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 80px;
        }

        .about-values-title {
            font-size: 3rem;
            font-weight: 800;
            color: var(--text-heading);
            margin-bottom: 20px;
        }

        .about-values-subtitle {
            font-size: 1.1rem;
            color: var(--text-color);
        }

        .about-values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .about-value-card {
            background: var(--primary-light);
            padding: 40px 30px;
            border-radius: var(--border-radius-main);
            border-left: 5px solid var(--secondary-color);
            transition: all var(--transition-speed);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .about-value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(198, 169, 140, 0.1), transparent);
            z-index: -1;
            opacity: 0;
            transition: opacity var(--transition-speed);
        }

        .about-value-card:hover::before {
            opacity: 1;
        }

        .about-value-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-medium);
        }

        .about-value-icon {
            width: 70px;
            height: 70px;
            background: rgba(198, 169, 140, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            font-size: 28px;
            color: var(--secondary-color);
        }

        .about-value-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-heading);
            margin-bottom: 15px;
        }

        .about-value-desc {
            font-size: 1rem;
            color: var(--text-color);
        }

        /* TEAM SECTION */
        .about-team-section {
            padding: 120px 20px;
            background: var(--primary-light);
        }

        .about-team-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .about-team-header {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 80px;
        }

        .about-team-title {
            font-size: 3rem;
            font-weight: 800;
            color: var(--text-heading);
            margin-bottom: 20px;
        }

        .about-team-subtitle {
            font-size: 1.1rem;
            color: var(--text-color);
        }

        .about-team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
        }

        .about-team-card {
            background: var(--primary-color);
            border-radius: var(--border-radius-main);
            overflow: hidden;
            transition: all var(--transition-speed);
            position: relative;
            box-shadow: var(--shadow-light);
        }

        .about-team-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-medium);
        }

        .about-team-img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            transition: transform var(--transition-speed);
        }

        .about-team-card:hover .about-team-img {
            transform: scale(1.05);
        }

        .about-team-info {
            padding: 25px;
            position: relative;
        }

        .about-team-name {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--text-heading);
            margin-bottom: 5px;
        }

        .about-team-position {
            font-size: 0.9rem;
            color: var(--secondary-color);
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .about-team-desc {
            font-size: 0.95rem;
            color: var(--text-color);
            margin-bottom: 20px;
        }

        .about-team-social {
            display: flex;
            gap: 15px;
        }

        .about-team-social a {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-color);
            text-decoration: none;
            transition: all 0.3s;
        }

        .about-team-social a:hover {
            background: var(--secondary-color);
            color: var(--primary-color);
            transform: translateY(-3px);
        }

        /* TIMELINE SECTION */
        .about-timeline-section {
            padding: 120px 20px;
            background: var(--primary-color);
            position: relative;
            overflow: hidden;
        }

        .about-timeline-container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
        }

        .about-timeline-container::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 3px;
            background: var(--secondary-color);
            transform: translateX(-50%);
        }

        .about-timeline-title {
            text-align: center;
            font-size: 3rem;
            font-weight: 800;
            color: var(--text-heading);
            margin-bottom: 80px;
        }

        .about-timeline-item {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 80px;
            position: relative;
        }

        .about-timeline-item:nth-child(odd) {
            flex-direction: row;
        }

        .about-timeline-item:nth-child(even) {
            flex-direction: row-reverse;
        }

        .about-timeline-content {
            width: 45%;
            padding: 30px;
            background: var(--primary-light);
            border-radius: var(--border-radius-main);
            box-shadow: var(--shadow-light);
            position: relative;
            transition: transform var(--transition-speed);
        }

        .about-timeline-item:hover .about-timeline-content {
            transform: scale(1.03);
            box-shadow: var(--shadow-medium);
        }

        .about-timeline-content::before {
            content: '';
            position: absolute;
            top: 30px;
            width: 20px;
            height: 20px;
            background: var(--primary-light);
            transform: rotate(45deg);
        }

        .about-timeline-item:nth-child(odd) .about-timeline-content::before {
            right: -10px;
        }

        .about-timeline-item:nth-child(even) .about-timeline-content::before {
            left: -10px;
        }

        .about-timeline-year {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100px;
            height: 100px;
            background: var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1.5rem;
            font-weight: 800;
            z-index: 2;
            box-shadow: var(--shadow-light);
        }

        .about-timeline-item:nth-child(odd) .about-timeline-year {
            right: calc(45% - 50px);
        }

        .about-timeline-item:nth-child(even) .about-timeline-year {
            left: calc(45% - 50px);
        }

        .about-timeline-heading {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-heading);
            margin-bottom: 15px;
        }

        .about-timeline-text {
            font-size: 1rem;
            color: var(--text-color);
        }

        /* CTA SECTION */
        .about-cta-section {
            padding: 120px 20px;
            background: linear-gradient(135deg, rgba(30, 30, 30, 0.9), rgba(18, 18, 18, 0.9)), url('../img2/Gemini_Generated_Image_aie18aaie18aaie1.png');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            text-align: center;
            position: relative;
        }

        .about-cta-container {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .about-cta-title {
            font-size: 3.5rem;
            font-weight: 900;
            color: var(--text-heading);
            margin-bottom: 25px;
            line-height: 1.2;
        }

        .about-cta-text {
            font-size: 1.2rem;
            color: var(--text-color);
            margin-bottom: 50px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .about-cta-buttons {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .about-cta-btn {
            padding: 18px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            text-decoration: none;
            transition: all var(--transition-speed);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            letter-spacing: 1px;
        }

        .about-cta-btn-primary {
            background: var(--secondary-color);
            color: var(--primary-color);
            border: 2px solid var(--secondary-color);
        }

        .about-cta-btn-primary:hover {
            background: transparent;
            color: var(--secondary-color);
            transform: translateY(-5px);
            box-shadow: var(--shadow-glow);
        }

        .about-cta-btn-secondary {
            background: transparent;
            color: var(--light-color);
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .about-cta-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--light-color);
            transform: translateY(-5px);
        }

        /* RESPONSIVE */
        @media (max-width: 1200px) {
            .about-hero-title {
                font-size: 3.5rem;
            }
            
            .about-mission-heading,
            .about-values-title,
            .about-team-title,
            .about-timeline-title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 992px) {
            .about-mission-container {
                grid-template-columns: 1fr;
                gap: 60px;
            }
            
            .about-mission-image {
                transform: none;
            }
            
            .about-timeline-container::before {
                left: 30px;
            }
            
            .about-timeline-item {
                flex-direction: row !important;
                align-items: flex-start;
                margin-left: 80px;
            }
            
            .about-timeline-content {
                width: 100%;
            }
            
            .about-timeline-content::before {
                left: -10px !important;
                right: auto !important;
            }
            
            .about-timeline-year {
                left: 0 !important;
                right: auto !important;
                width: 80px;
                height: 80px;
                font-size: 1.2rem;
            }
        }

        @media (max-width: 768px) {
            .about-hero-title {
                font-size: 2.8rem;
            }
            
            .about-hero-section {
                height: 70vh;
                min-height: 500px;
            }
            
            .about-mission-stats {
                grid-template-columns: 1fr;
            }
            
            .about-values-grid,
            .about-team-grid {
                grid-template-columns: 1fr;
            }
            
            .about-cta-title {
                font-size: 2.5rem;
            }
            
            .about-cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .about-cta-btn {
                width: 100%;
                max-width: 300px;
            }
        }

        @media (max-width: 576px) {
            .about-hero-title {
                font-size: 2.2rem;
            }
            
            .about-mission-heading,
            .about-values-title,
            .about-team-title,
            .about-timeline-title {
                font-size: 2rem;
            }
            
            .about-hero-description,
            .about-mission-text,
            .about-cta-text {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <!-- ANIMATED BACKGROUND -->
    <div class="about-bg-animation">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
    </div>

    <!-- HERO SECTION -->
    <section class="about-hero-section">
        <video class="about-hero-video" autoplay muted loop playsinline>
            <source src="../video/Self Adhesive SS Tape.mp4" type="video/mp4">
        </video>
        
        <!-- <div class="about-hero-content">
            <h5 class="about-hero-subtitle">Our Story</h5>
            <h1 class="about-hero-title">Crafting Excellence <span>Since 2005</span></h1>
            <p class="about-hero-description">
                We are pioneers in precision engineering, dedicated to transforming industrial hardware with innovation, 
                quality, and unwavering commitment. Our journey is defined by relentless pursuit of perfection in every 
                product we manufacture.
            </p>
            <a href="contact.php" class="about-cta-btn about-cta-btn-primary">
                Explore Our Journey <i class="fas fa-arrow-right"></i>
            </a>
        </div> -->
        
        <div class="about-scroll-indicator">
            Scroll Down
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- MISSION SECTION -->
    <section class="about-mission-section" id="mission">
        <div class="about-mission-container">
            <div class="about-mission-image">
                <img src="../logo-4.png" alt="Our Manufacturing Facility">
            </div>
            
            <div class="about-mission-content">
                <h5 class="about-section-title">Our Mission & Vision</h5>
                <h2 class="about-mission-heading">Redefining Industrial Standards</h2>
                <p class="about-mission-text">
                    At the core of our existence lies a simple yet powerful mission: to deliver precision-engineered 
                    hardware solutions that exceed expectations. We envision a world where every industrial application 
                    benefits from our innovation, durability, and reliability.
                </p>
                <p class="about-mission-text">
                    With state-of-the-art manufacturing facilities and a team of dedicated engineers, we transform raw 
                    materials into masterpieces of functional art. Our vision extends beyond business—we aim to 
                    revolutionize the hardware industry with sustainable practices and cutting-edge technology.
                </p>
                
                <div class="about-mission-stats">
                    <div class="about-stat-item">
                        <span class="about-stat-number">18+</span>
                        <span class="about-stat-label">Years Experience</span>
                    </div>
                    <div class="about-stat-item">
                        <span class="about-stat-number">5000+</span>
                        <span class="about-stat-label">Projects Completed</span>
                    </div>
                    <div class="about-stat-item">
                        <span class="about-stat-number">40+</span>
                        <span class="about-stat-label">Countries Served</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VALUES SECTION -->
    <section class="about-values-section">
        <div class="about-values-container">
            <div class="about-values-header">
                <h2 class="about-values-title">Our Core Values</h2>
                <p class="about-values-subtitle">
                    These principles guide every decision we make and every product we create
                </p>
            </div>
            
            <div class="about-values-grid">
                <div class="about-value-card">
                    <div class="about-value-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="about-value-title">Precision Engineering</h3>
                    <p class="about-value-desc">
                        Every millimeter matters. Our commitment to precision ensures flawless performance 
                        and longevity in all our products.
                    </p>
                </div>
                
                <div class="about-value-card">
                    <div class="about-value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="about-value-title">Sustainable Innovation</h3>
                    <p class="about-value-desc">
                        We integrate eco-friendly practices with technological advancement to create 
                        products that respect our planet.
                    </p>
                </div>
                
                <div class="about-value-card">
                    <div class="about-value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="about-value-title">Customer Partnership</h3>
                    <p class="about-value-desc">
                        Your success is our success. We build lasting relationships by understanding 
                        and exceeding your unique requirements.
                    </p>
                </div>
                
                <div class="about-value-card">
                    <div class="about-value-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3 class="about-value-title">Quality Excellence</h3>
                    <p class="about-value-desc">
                        From raw material selection to final inspection, we maintain uncompromising 
                        quality standards at every stage.
                    </p>
                </div>
                
                <!-- <div class="about-value-card">
                    <div class="about-value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="about-value-title">Continuous Innovation</h3>
                    <p class="about-value-desc">
                        We constantly push boundaries, researching and developing new solutions 
                        to stay ahead of industry trends.
                    </p> -->
                </div>
                
                <!-- <div class="about-value-card">
                    <div class="about-value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="about-value-title">Team Excellence</h3>
                    <p class="about-value-desc">
                        Our diverse team of experts collaborates seamlessly to deliver exceptional 
                        results through shared knowledge and passion.
                    </p>
                </div> -->
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->
    <!-- <section class="about-team-section">
        <div class="about-team-container">
            <div class="about-team-header">
                <h2 class="about-team-title">Meet Our Leadership</h2>
                <p class="about-team-subtitle">
                    The brilliant minds behind our innovation and growth
                </p>
            </div>
            
            <div class="about-team-grid">
                <div class="about-team-card">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1000" alt="CEO" class="about-team-img">
                    <div class="about-team-info">
                        <h3 class="about-team-name">Rajesh Kumar</h3>
                        <p class="about-team-position">Founder & CEO</p>
                        <p class="about-team-desc">
                            Visionary leader with 25+ years in industrial manufacturing. 
                            Drives innovation and strategic growth.
                        </p>
                        <div class="about-team-social">
                            <a href="contact.php"><i class="fab fa-linkedin-in"></i></a>
                            <a href="contact.php"><i class="fab fa-twitter"></i></a>
                            <a href="contact.php"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="about-team-card">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1000" alt="CTO" class="about-team-img">
                    <div class="about-team-info">
                        <h3 class="about-team-name">Priya Sharma</h3>
                        <p class="about-team-position">Chief Technology Officer</p>
                        <p class="about-team-desc">
                            Engineering expert specializing in precision manufacturing 
                            and R&D innovation.
                        </p>
                        <div class="about-team-social">
                            <a href="contact.php"><i class="fab fa-linkedin-in"></i></a>
                            <a href="contact.php"><i class="fab fa-twitter"></i></a>
                            <a href="contact.php"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="about-team-card">
                    <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?q=80&w=1000" alt="Operations Head" class="about-team-img">
                    <div class="about-team-info">
                        <h3 class="about-team-name">Amit Patel</h3>
                        <p class="about-team-position">Head of Operations</p>
                        <p class="about-team-desc">
                            Operations specialist ensuring seamless production 
                            and quality control processes.
                        </p>
                        <div class="about-team-social">
                            <a href="contact.php"><i class="fab fa-linkedin-in"></i></a>
                            <a href="contact.php"><i class="fab fa-twitter"></i></a>
                            <a href="contact.php"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- TIMELINE SECTION -->
    <section class="about-timeline-section">
        <div class="about-timeline-container">
            <h2 class="about-timeline-title">Our Journey Through Time</h2>
            
            <div class="about-timeline-item">
                <div class="about-timeline-content">
                    <h3 class="about-timeline-heading">Humble Beginnings</h3>
                    <p class="about-timeline-text">
                        Started as a small workshop with a vision to revolutionize hardware manufacturing. 
                        Focused on precision engineering and quality craftsmanship.
                    </p>
                </div>
                <div class="about-timeline-year">2005</div>
            </div>
            
            <div class="about-timeline-item">
                <div class="about-timeline-content">
                    <h3 class="about-timeline-heading">First Breakthrough</h3>
                    <p class="about-timeline-text">
                        Developed proprietary telescopic channel technology that set new industry standards. 
                        Expanded manufacturing capabilities with advanced machinery.
                    </p>
                </div>
                <div class="about-timeline-year">2010</div>
            </div>
            
            <div class="about-timeline-item">
                <div class="about-timeline-content">
                    <h3 class="about-timeline-heading">Global Expansion</h3>
                    <p class="about-timeline-text">
                        Began exporting to international markets. Established quality certifications 
                        and implemented sustainable manufacturing practices.
                    </p>
                </div>
                <div class="about-timeline-year">2015</div>
            </div>
            
            <div class="about-timeline-item">
                <div class="about-timeline-content">
                    <h3 class="about-timeline-heading">Innovation Hub</h3>
                    <p class="about-timeline-text">
                        Launched R&D center focusing on smart hardware solutions. Introduced 
                        automated production lines and AI-driven quality control.
                    </p>
                </div>
                <div class="about-timeline-year">2020</div>
            </div>
            
            <div class="about-timeline-item">
                <div class="about-timeline-content">
                    <h3 class="about-timeline-heading">Present & Future</h3>
                    <p class="about-timeline-text">
                        Leading manufacturer with global presence. Continuously innovating 
                        with IoT integration and sustainable materials for tomorrow's needs.
                    </p>
                </div>
                <div class="about-timeline-year">2024</div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="about-cta-section">
        <div class="about-cta-container">
            <h2 class="about-cta-title">Ready to Build Excellence Together?</h2>
            <p class="about-cta-text">
                Join thousands of satisfied clients who have transformed their projects with our 
                precision-engineered solutions. Let's create something remarkable.
            </p>
            
            <div class="about-cta-buttons">
                <a href="contact.php" class="about-cta-btn about-cta-btn-primary">
                    <i class="fas fa-envelope"></i> Get In Touch
                </a>
                <a href="products.php" class="about-cta-btn about-cta-btn-secondary">
                    <i class="fas fa-box-open"></i> View Products
                </a>
            </div>
        </div>
    </section>

    <script>
        // Smooth scrolling for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.about-value-card, .about-team-card, .about-timeline-item').forEach(el => {
            observer.observe(el);
        });

        // Add animation classes
        document.addEventListener('DOMContentLoaded', () => {
            const style = document.createElement('style');
            style.textContent = `
                .about-value-card, .about-team-card, .about-timeline-item {
                    opacity: 0;
                    transform: translateY(30px);
                    transition: opacity 0.6s ease, transform 0.6s ease;
                }
                
                .about-value-card.animate-in,
                .about-team-card.animate-in,
                .about-timeline-item.animate-in {
                    opacity: 1;
                    transform: translateY(0);
                }
                
                .about-timeline-item:nth-child(odd).animate-in {
                    transition-delay: 0.1s;
                }
                
                .about-timeline-item:nth-child(even).animate-in {
                    transition-delay: 0.2s;
                }
            `;
            document.head.appendChild(style);
        });

        // Stats counter animation
        function animateStats() {
            const statElements = document.querySelectorAll('.about-stat-number');
            statElements.forEach(stat => {
                const target = parseInt(stat.textContent);
                const suffix = stat.textContent.replace(/[0-9]/g, '');
                let current = 0;
                const increment = target / 50;
                const timer = setInterval(() => {
                    current += increment;
                    if(current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    stat.textContent = Math.floor(current) + suffix;
                }, 30);
            });
        }

        // Trigger stats animation when in view
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    animateStats();
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        const missionSection = document.querySelector('.about-mission-section');
        if(missionSection) {
            statsObserver.observe(missionSection);
        }
    </script>
<?php include "footer.php"?>