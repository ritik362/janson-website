<?php include "header.php"?>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            --card-bg: #1A1A1A;
            --font-primary: 'Poppins', sans-serif;
            --border-radius-main: 12px;
            --shadow-light: 0 4px 20px rgba(0, 0, 0, 0.15);
            --shadow-medium: 0 8px 30px rgba(0, 0, 0, 0.25);
            --shadow-glow: 0 0 20px rgba(198, 169, 140, 0.15);
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
        .blog-bg-pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            opacity: 0.03;
            background-image: 
                radial-gradient(circle at 20% 80%, var(--secondary-color) 0%, transparent 20%),
                radial-gradient(circle at 80% 20%, var(--secondary-color) 0%, transparent 20%),
                radial-gradient(circle at 40% 40%, var(--accent-color) 0%, transparent 20%);
        }

        .floating-dots {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.1;
        }

        .dot {
            position: absolute;
            width: 3px;
            height: 3px;
            background: var(--secondary-color);
            border-radius: 50%;
            animation: floatDot 20s infinite linear;
        }

        @keyframes floatDot {
            0% { transform: translateY(0) translateX(0); }
            25% { transform: translateY(-20px) translateX(20px); }
            50% { transform: translateY(0) translateX(40px); }
            75% { transform: translateY(20px) translateX(20px); }
            100% { transform: translateY(0) translateX(0); }
        }

        /* HERO SECTION */
        .blog-hero-section {
            position: relative;
            width: 100%;
            height: 70vh;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            padding: 0 20px;
            background: linear-gradient(135deg, rgba(30, 30, 30, 0.9), rgba(18, 18, 18, 0.9)), 
                        url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=2070');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .blog-hero-content {
            text-align: center;
            max-width: 900px;
            z-index: 2;
            position: relative;
        }

        .blog-hero-subtitle {
            font-size: 16px;
            letter-spacing: 3px;
            color: var(--secondary-color);
            margin-bottom: 20px;
            font-weight: 600;
            text-transform: uppercase;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }

        .blog-hero-subtitle::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 2px;
            background: var(--secondary-color);
        }

        .blog-hero-title {
            font-size: 4rem;
            font-weight: 900;
            color: var(--text-heading);
            margin-bottom: 25px;
            line-height: 1.1;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        .blog-hero-title span {
            color: var(--secondary-color);
            position: relative;
        }

        .blog-hero-title span::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 8px;
            background: rgba(198, 169, 140, 0.2);
            z-index: -1;
        }

        .blog-hero-description {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 40px;
            color: var(--text-color);
        }

        .blog-search-box {
            max-width: 600px;
            margin: 40px auto 0;
            position: relative;
        }

        .blog-search-input {
            width: 100%;
            padding: 18px 30px;
            padding-right: 70px;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            color: var(--text-heading);
            font-size: 1rem;
            transition: all var(--transition-speed);
        }

        .blog-search-input:focus {
            outline: none;
            border-color: var(--secondary-color);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: var(--shadow-glow);
        }

        .blog-search-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--secondary-color);
            color: var(--primary-color);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            transition: all var(--transition-speed);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .blog-search-btn:hover {
            background: var(--accent-color);
            transform: translateY(-50%) scale(1.05);
        }

        /* MAIN CONTENT LAYOUT */
        .blog-main-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 80px 20px;
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 50px;
            position: relative;
        }

        @media (max-width: 1100px) {
            .blog-main-container {
                grid-template-columns: 1fr;
            }
        }

        /* BLOG POSTS GRID */
        .blog-posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        @media (max-width: 768px) {
            .blog-posts-grid {
                grid-template-columns: 1fr;
            }
        }

        /* BLOG CARD */
        .blog-card {
            background: var(--card-bg);
            border-radius: var(--border-radius-main);
            overflow: hidden;
            transition: all var(--transition-speed);
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: var(--shadow-light);
        }

        .blog-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-medium);
            border-color: rgba(198, 169, 140, 0.2);
        }

        .blog-card-featured {
            grid-column: 1 / -1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
        }

        .blog-card-featured .blog-card-img {
            height: 100%;
            min-height: 400px;
        }

        .blog-card-featured .blog-card-content {
            padding: 40px;
        }

        .blog-card-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: var(--secondary-color);
            color: var(--primary-color);
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 2;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .blog-card-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform var(--transition-speed);
        }

        .blog-card:hover .blog-card-img {
            transform: scale(1.05);
        }

        .blog-card-content {
            padding: 25px;
            position: relative;
        }

        .blog-card-meta {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            font-size: 0.85rem;
            color: var(--text-color);
            opacity: 0.8;
        }

        .blog-card-category {
            color: var(--secondary-color);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .blog-card-date {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .blog-card-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--text-heading);
            margin-bottom: 15px;
            line-height: 1.4;
            transition: color var(--transition-speed);
        }

        .blog-card:hover .blog-card-title {
            color: var(--secondary-color);
        }

        .blog-card-excerpt {
            font-size: 0.95rem;
            color: var(--text-color);
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .blog-card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .blog-card-author {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .blog-author-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
        }

        .blog-author-name {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-heading);
        }

        .blog-read-more {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all var(--transition-speed);
        }

        .blog-read-more:hover {
            color: var(--accent-color);
            gap: 12px;
        }

        /* PAGINATION */
        .blog-pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            margin-top: 60px;
        }

        .blog-pagination-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: var(--primary-light);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-color);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all var(--transition-speed);
            font-weight: 600;
        }

        .blog-pagination-btn:hover {
            background: var(--secondary-color);
            color: var(--primary-color);
            transform: translateY(-3px);
        }

        .blog-pagination-btn.active {
            background: var(--secondary-color);
            color: var(--primary-color);
        }

        /* SIDEBAR */
        .blog-sidebar {
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .sidebar-widget {
            background: var(--card-bg);
            border-radius: var(--border-radius-main);
            padding: 30px;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: var(--shadow-light);
        }

        .sidebar-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--text-heading);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--secondary-color);
            position: relative;
        }

        .sidebar-title::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 60px;
            height: 2px;
            background: var(--secondary-color);
        }

        /* CATEGORIES */
        .sidebar-categories {
            list-style: none;
        }

        .sidebar-category {
            margin-bottom: 12px;
        }

        .sidebar-category a {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--text-color);
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 8px;
            transition: all var(--transition-speed);
            background: rgba(255, 255, 255, 0.02);
        }

        .sidebar-category a:hover {
            background: rgba(198, 169, 140, 0.1);
            color: var(--secondary-color);
            transform: translateX(5px);
        }

        .sidebar-category-count {
            background: rgba(255, 255, 255, 0.05);
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        /* RECENT POSTS */
        .sidebar-recent-post {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .sidebar-recent-post:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .sidebar-recent-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform var(--transition-speed);
        }

        .sidebar-recent-post:hover .sidebar-recent-img {
            transform: scale(1.05);
        }

        .sidebar-recent-content {
            flex: 1;
        }

        .sidebar-recent-title {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-heading);
            margin-bottom: 5px;
            line-height: 1.4;
            transition: color var(--transition-speed);
        }

        .sidebar-recent-post:hover .sidebar-recent-title {
            color: var(--secondary-color);
        }

        .sidebar-recent-date {
            font-size: 0.8rem;
            color: var(--text-color);
            opacity: 0.7;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* TAGS */
        .sidebar-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .sidebar-tag {
            padding: 8px 16px;
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-color);
            border-radius: 20px;
            font-size: 0.85rem;
            text-decoration: none;
            transition: all var(--transition-speed);
        }

        .sidebar-tag:hover {
            background: var(--secondary-color);
            color: var(--primary-color);
            transform: translateY(-3px);
        }

        /* NEWSLETTER */
        .sidebar-newsletter {
            text-align: center;
            background: linear-gradient(135deg, rgba(198, 169, 140, 0.1), transparent);
        }

        .sidebar-newsletter p {
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .newsletter-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .newsletter-input {
            padding: 14px 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: var(--text-heading);
            font-size: 0.95rem;
            transition: all var(--transition-speed);
        }

        .newsletter-input:focus {
            outline: none;
            border-color: var(--secondary-color);
            background: rgba(255, 255, 255, 0.08);
        }

        .newsletter-btn {
            padding: 14px 20px;
            background: var(--secondary-color);
            color: var(--primary-color);
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all var(--transition-speed);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .newsletter-btn:hover {
            background: var(--accent-color);
            transform: translateY(-3px);
        }

        /* POPULAR POSTS */
        .popular-post {
            counter-increment: popular-counter;
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.02);
            border-radius: 8px;
            transition: all var(--transition-speed);
        }

        .popular-post:hover {
            background: rgba(198, 169, 140, 0.1);
            transform: translateX(5px);
        }

        .popular-post::before {
            content: counter(popular-counter);
            width: 35px;
            height: 35px;
            background: var(--secondary-color);
            color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.9rem;
            flex-shrink: 0;
        }

        .popular-post-content {
            flex: 1;
        }

        .popular-post-title {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-heading);
            margin-bottom: 5px;
            line-height: 1.4;
        }

        .popular-post-views {
            font-size: 0.8rem;
            color: var(--text-color);
            opacity: 0.7;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* BACK TO TOP */
        .blog-back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--secondary-color);
            color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all var(--transition-speed);
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            z-index: 1000;
            box-shadow: var(--shadow-medium);
        }

        .blog-back-to-top.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .blog-back-to-top:hover {
            background: var(--accent-color);
            transform: translateY(-5px);
        }

        /* RESPONSIVE */
        @media (max-width: 1200px) {
            .blog-hero-title {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            .blog-hero-section {
                height: 60vh;
                min-height: 400px;
                background-attachment: scroll;
            }
            
            .blog-hero-title {
                font-size: 2.5rem;
            }
            
            .blog-card-featured {
                grid-template-columns: 1fr;
            }
            
            .blog-card-featured .blog-card-img {
                min-height: 250px;
            }
        }

        @media (max-width: 576px) {
            .blog-hero-title {
                font-size: 2rem;
            }
            
            .blog-hero-description {
                font-size: 1rem;
            }
            
            .blog-card-content {
                padding: 20px;
            }
            
            .sidebar-widget {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- ANIMATED BACKGROUND -->
    <div class="blog-bg-pattern"></div>
    <div class="floating-dots" id="floatingDots"></div>

    <!-- HERO SECTION -->
    <section class="blog-hero-section">
        <div class="blog-hero-content">
            <h5 class="blog-hero-subtitle">Insights & Updates</h5>
            <h1 class="blog-hero-title">Industrial <span>Innovation</span> Blog</h1>
            <p class="blog-hero-description">
                Discover the latest trends, insights, and innovations in industrial manufacturing, 
                hardware solutions, and engineering excellence.
            </p>
            
            <div class="blog-search-box">
                <input type="text" class="blog-search-input" placeholder="Search articles, guides, and insights...">
                <button class="blog-search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <div class="blog-main-container">
        <!-- BLOG POSTS -->
        <main class="blog-main-content">
            <div class="blog-posts-grid">
                <!-- FEATURED POST -->
                <article class="blog-card blog-card-featured">
                    <div class="blog-card-img-container">
                        <span class="blog-card-badge">Featured</span>
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=2070" 
                             alt="Advanced Manufacturing" class="blog-card-img">
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-meta">
                            <span class="blog-card-category">Manufacturing</span>
                            <span class="blog-card-date">
                                <i class="far fa-calendar"></i> March 15, 2024
                            </span>
                        </div>
                        <h2 class="blog-card-title">The Future of Precision Engineering in Modern Manufacturing</h2>
                        <p class="blog-card-excerpt">
                            Explore how advanced technologies like AI and IoT are revolutionizing 
                            precision engineering and manufacturing processes for unprecedented 
                            accuracy and efficiency.
                        </p>
                        <div class="blog-card-footer">
                            <div class="blog-card-author">
                                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=100" 
                                     alt="Author" class="blog-author-avatar">
                                <span class="blog-author-name">Rajesh Kumar</span>
                            </div>
                            <a href="#" class="blog-read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- REGULAR POSTS -->
                <article class="blog-card">
                    <div class="blog-card-img-container">
                        <span class="blog-card-badge">Technology</span>
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=1000" 
                             alt="Smart Factories" class="blog-card-img">
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-meta">
                            <span class="blog-card-category">Industry 4.0</span>
                            <span class="blog-card-date">
                                <i class="far fa-calendar"></i> March 12, 2024
                            </span>
                        </div>
                        <h2 class="blog-card-title">Implementing Smart Factory Solutions in 2024</h2>
                        <p class="blog-card-excerpt">
                            Learn how smart factories are transforming traditional manufacturing 
                            with automation, data analytics, and real-time monitoring.
                        </p>
                        <div class="blog-card-footer">
                            <div class="blog-card-author">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=100" 
                                     alt="Author" class="blog-author-avatar">
                                <span class="blog-author-name">Priya Sharma</span>
                            </div>
                            <a href="#" class="blog-read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="blog-card">
                    <div class="blog-card-img-container">
                        <span class="blog-card-badge">Sustainability</span>
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=1000" 
                             alt="Sustainable Manufacturing" class="blog-card-img">
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-meta">
                            <span class="blog-card-category">Green Technology</span>
                            <span class="blog-card-date">
                                <i class="far fa-calendar"></i> March 8, 2024
                            </span>
                        </div>
                        <h2 class="blog-card-title">Sustainable Manufacturing Practices for Modern Industries</h2>
                        <p class="blog-card-excerpt">
                            Discover innovative approaches to reduce environmental impact while 
                            maintaining productivity and quality in manufacturing.
                        </p>
                        <div class="blog-card-footer">
                            <div class="blog-card-author">
                                <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?q=80&w=100" 
                                     alt="Author" class="blog-author-avatar">
                                <span class="blog-author-name">Amit Patel</span>
                            </div>
                            <a href="#" class="blog-read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="blog-card">
                    <div class="blog-card-img-container">
                        <span class="blog-card-badge">Innovation</span>
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=1000" 
                             alt="Quality Control" class="blog-card-img">
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-meta">
                            <span class="blog-card-category">Quality Assurance</span>
                            <span class="blog-card-date">
                                <i class="far fa-calendar"></i> March 5, 2024
                            </span>
                        </div>
                        <h2 class="blog-card-title">Advanced Quality Control Methods for Precision Components</h2>
                        <p class="blog-card-excerpt">
                            Explore cutting-edge quality control techniques that ensure 
                            millimeter-perfect precision in industrial hardware production.
                        </p>
                        <div class="blog-card-footer">
                            <div class="blog-card-author">
                                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=100" 
                                     alt="Author" class="blog-author-avatar">
                                <span class="blog-author-name">Rajesh Kumar</span>
                            </div>
                            <a href="#" class="blog-read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="blog-card">
                    <div class="blog-card-img-container">
                        <span class="blog-card-badge">Guide</span>
                        <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1000" 
                             alt="Material Selection" class="blog-card-img">
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-meta">
                            <span class="blog-card-category">Materials Science</span>
                            <span class="blog-card-date">
                                <i class="far fa-calendar"></i> March 1, 2024
                            </span>
                        </div>
                        <h2 class="blog-card-title">Choosing the Right Materials for Industrial Applications</h2>
                        <p class="blog-card-excerpt">
                            Comprehensive guide to selecting optimal materials for durability, 
                            performance, and cost-effectiveness in industrial settings.
                        </p>
                        <div class="blog-card-footer">
                            <div class="blog-card-author">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=100" 
                                     alt="Author" class="blog-author-avatar">
                                <span class="blog-author-name">Priya Sharma</span>
                            </div>
                            <a href="#" class="blog-read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="blog-card">
                    <div class="blog-card-img-container">
                        <span class="blog-card-badge">Case Study</span>
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=1000" 
                             alt="Export Success" class="blog-card-img">
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-meta">
                            <span class="blog-card-category">Global Business</span>
                            <span class="blog-card-date">
                                <i class="far fa-calendar"></i> February 25, 2024
                            </span>
                        </div>
                        <h2 class="blog-card-title">Expanding Global Footprint: Success Stories in International Markets</h2>
                        <p class="blog-card-excerpt">
                            Real-world case studies of successful international expansion 
                            strategies for industrial manufacturing companies.
                        </p>
                        <div class="blog-card-footer">
                            <div class="blog-card-author">
                                <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?q=80&w=100" 
                                     alt="Author" class="blog-author-avatar">
                                <span class="blog-author-name">Amit Patel</span>
                            </div>
                            <a href="#" class="blog-read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- PAGINATION -->
            <div class="blog-pagination">
                <button class="blog-pagination-btn">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="blog-pagination-btn active">1</button>
                <button class="blog-pagination-btn">2</button>
                <button class="blog-pagination-btn">3</button>
                <button class="blog-pagination-btn">4</button>
                <button class="blog-pagination-btn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </main>

        <!-- SIDEBAR -->
        <aside class="blog-sidebar">
            <!-- CATEGORIES -->
            <div class="sidebar-widget">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="sidebar-categories">
                    <li class="sidebar-category">
                        <a href="#">
                            Manufacturing
                            <span class="sidebar-category-count">12</span>
                        </a>
                    </li>
                    <li class="sidebar-category">
                        <a href="#">
                            Technology
                            <span class="sidebar-category-count">8</span>
                        </a>
                    </li>
                    <li class="sidebar-category">
                        <a href="#">
                            Quality Control
                            <span class="sidebar-category-count">6</span>
                        </a>
                    </li>
                    <li class="sidebar-category">
                        <a href="#">
                            Sustainability
                            <span class="sidebar-category-count">5</span>
                        </a>
                    </li>
                    <li class="sidebar-category">
                        <a href="#">
                            Industry 4.0
                            <span class="sidebar-category-count">7</span>
                        </a>
                    </li>
                    <li class="sidebar-category">
                        <a href="#">
                            Global Business
                            <span class="sidebar-category-count">4</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- RECENT POSTS -->
            <div class="sidebar-widget">
                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-recent-posts">
                    <div class="sidebar-recent-post">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=200" 
                             alt="Recent Post" class="sidebar-recent-img">
                        <div class="sidebar-recent-content">
                            <h4 class="sidebar-recent-title">AI in Manufacturing</h4>
                            <span class="sidebar-recent-date">
                                <i class="far fa-calendar"></i> Feb 20, 2024
                            </span>
                        </div>
                    </div>
                    <div class="sidebar-recent-post">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=200" 
                             alt="Recent Post" class="sidebar-recent-img">
                        <div class="sidebar-recent-content">
                            <h4 class="sidebar-recent-title">Export Quality Standards</h4>
                            <span class="sidebar-recent-date">
                                <i class="far fa-calendar"></i> Feb 18, 2024
                            </span>
                        </div>
                    </div>
                    <div class="sidebar-recent-post">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=200" 
                             alt="Recent Post" class="sidebar-recent-img">
                        <div class="sidebar-recent-content">
                            <h4 class="sidebar-recent-title">Precision Engineering Trends</h4>
                            <span class="sidebar-recent-date">
                                <i class="far fa-calendar"></i> Feb 15, 2024
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- POPULAR POSTS -->
            <div class="sidebar-widget">
                <h3 class="sidebar-title">Popular Posts</h3>
                <div class="sidebar-popular-posts">
                    <div class="popular-post">
                        <div class="popular-post-content">
                            <h4 class="popular-post-title">Future of Smart Factories</h4>
                            <span class="popular-post-views">
                                <i class="far fa-eye"></i> 2.4K Views
                            </span>
                        </div>
                    </div>
                    <div class="popular-post">
                        <div class="popular-post-content">
                            <h4 class="popular-post-title">Sustainable Manufacturing Guide</h4>
                            <span class="popular-post-views">
                                <i class="far fa-eye"></i> 1.8K Views
                            </span>
                        </div>
                    </div>
                    <div class="popular-post">
                        <div class="popular-post-content">
                            <h4 class="popular-post-title">Quality Control Innovations</h4>
                            <span class="popular-post-views">
                                <i class="far fa-eye"></i> 1.5K Views
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAGS -->
            <div class="sidebar-widget">
                <h3 class="sidebar-title">Popular Tags</h3>
                <div class="sidebar-tags">
                    <a href="#" class="sidebar-tag">Manufacturing</a>
                    <a href="#" class="sidebar-tag">Engineering</a>
                    <a href="#" class="sidebar-tag">Innovation</a>
                    <a href="#" class="sidebar-tag">Technology</a>
                    <a href="#" class="sidebar-tag">Quality</a>
                    <a href="#" class="sidebar-tag">Sustainability</a>
                    <a href="#" class="sidebar-tag">Industry4.0</a>
                    <a href="#" class="sidebar-tag">Export</a>
                </div>
            </div>

            <!-- NEWSLETTER -->
            <div class="sidebar-widget sidebar-newsletter">
                <h3 class="sidebar-title">Newsletter</h3>
                <p>Subscribe to get latest updates and insights directly in your inbox.</p>
                <form class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Your email address" required>
                    <button type="submit" class="newsletter-btn">
                        <i class="far fa-paper-plane"></i> Subscribe
                    </button>
                </form>
            </div>
        </aside>
    </div>

    <!-- BACK TO TOP -->
    <div class="blog-back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script>
        // Create floating dots
        function createFloatingDots() {
            const container = document.getElementById('floatingDots');
            const dotCount = 50;
            
            for (let i = 0; i < dotCount; i++) {
                const dot = document.createElement('div');
                dot.className = 'dot';
                
                // Random position
                dot.style.left = `${Math.random() * 100}%`;
                dot.style.top = `${Math.random() * 100}%`;
                
                // Random size
                const size = Math.random() * 4 + 1;
                dot.style.width = `${size}px`;
                dot.style.height = `${size}px`;
                
                // Random animation delay
                dot.style.animationDelay = `${Math.random() * 20}s`;
                
                container.appendChild(dot);
            }
        }

        // Back to top button
        const backToTopBtn = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Search functionality
        const searchInput = document.querySelector('.blog-search-input');
        const searchBtn = document.querySelector('.blog-search-btn');
        
        searchBtn.addEventListener('click', () => {
            if (searchInput.value.trim()) {
                alert(`Searching for: "${searchInput.value}"`);
                // Implement actual search logic here
            }
        });
        
        searchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                searchBtn.click();
            }
        });

        // Blog card animations
        const blogCards = document.querySelectorAll('.blog-card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1
        });

        blogCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });

        // Pagination
        const paginationBtns = document.querySelectorAll('.blog-pagination-btn');
        
        paginationBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                paginationBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                // Implement pagination logic here
            });
        });

        // Newsletter form
        const newsletterForm = document.querySelector('.newsletter-form');
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('.newsletter-input').value;
            alert(`Thank you for subscribing with: ${email}`);
            this.reset();
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            createFloatingDots();
            
            // Add hover effects to category items
            const categoryItems = document.querySelectorAll('.sidebar-category a');
            categoryItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.querySelector('.sidebar-category-count').style.background = 'rgba(255, 255, 255, 0.1)';
                });
                item.addEventListener('mouseleave', function() {
                    this.querySelector('.sidebar-category-count').style.background = 'rgba(255, 255, 255, 0.05)';
                });
            });
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroSection = document.querySelector('.blog-hero-section');
            if (heroSection) {
                heroSection.style.backgroundPositionY = `${scrolled * 0.5}px`;
            }
        });
    </script>
<?php include "footer.php"?>