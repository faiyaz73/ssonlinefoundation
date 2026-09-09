<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Modern Labs & Learning Environment | SS Education Foundation</title>

    <meta name="description"
        content="SS Education Foundation provides a modern learning environment with practical labs, technical training and career-focused education.">

    <meta name="keywords"
        content="modern labs, practical learning, technical education, computer lab, science lab, SS Education Foundation">

    <meta name="author" content="SS Education Foundation">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #292d32;
            background: #fff;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        /* =========================
           COMMON
        ========================= */

        .lab-container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        .section-padding {
            padding: 100px 0;
        }

        .section-tag {
            display: inline-block;
            color: #f58220;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .section-title {
            font-size: 44px;
            line-height: 1.15;
            font-weight: 800;
            color: #20242a;
            margin-bottom: 20px;
        }

        .section-description {
            color: #686f76;
            line-height: 1.8;
            font-size: 16px;
            max-width: 650px;
        }

        .text-center {
            text-align: center;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        /* =========================
           HERO
        ========================= */

        .lab-hero {
            position: relative;
            min-height: 680px;
            display: flex;
            align-items: center;
            background:
                radial-gradient(circle at 90% 20%, rgba(245, 130, 32, .10), transparent 30%),
                radial-gradient(circle at 10% 80%, rgba(31, 83, 145, .08), transparent 30%),
                #f7f9fc;
            overflow: hidden;
        }

        .hero-content {
            width: 50%;
            position: relative;
            z-index: 5;
        }

        .hero-content h1 {
            font-size: 58px;
            line-height: 1.08;
            font-weight: 800;
            color: #20242a;
            margin-bottom: 25px;
        }

        .hero-content h1 span {
            color: #f58220;
            position: relative;
        }

        .hero-content h1 span::after {
            content: "";
            position: absolute;
            height: 7px;
            width: 100%;
            left: 0;
            bottom: -4px;
            background: #f58220;
            border-radius: 10px;
            opacity: .25;
        }

        .hero-content p {
            max-width: 590px;
            font-size: 17px;
            line-height: 1.8;
            color: #666e76;
            margin-bottom: 32px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .primary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 15px 28px;
            background: #f58220;
            color: white;
            border-radius: 7px;
            font-weight: 700;
            transition: .3s;
            box-shadow: 0 12px 25px rgba(245, 130, 32, .20);
        }

        .primary-btn:hover {
            background: #dd6e12;
            transform: translateY(-3px);
        }

        .secondary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 28px;
            border: 1px solid #dfe4e8;
            color: #25292e;
            background: white;
            border-radius: 7px;
            font-weight: 700;
            transition: .3s;
        }

        .secondary-btn:hover {
            border-color: #f58220;
            color: #f58220;
            transform: translateY(-3px);
        }

        /* HERO VISUAL */

        .hero-visual {
            position: absolute;
            width: 52%;
            right: -5%;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
        }

        .hero-circle {
            position: absolute;
            width: 500px;
            height: 500px;
            background: #fff1e5;
            border-radius: 50%;
            right: 5%;
            top: 50%;
            transform: translateY(-50%);
        }

        .placeholder-main {
            position: relative;
            width: 460px;
            height: 500px;
            margin-left: auto;
            margin-right: 80px;
            border-radius: 48% 48% 20px 20px;
            background: linear-gradient(145deg, #e8f0fa, #ffffff);
            overflow: hidden;
            box-shadow: 0 30px 70px rgba(27, 54, 86, .16);
            border: 10px solid white;
        }

        .placeholder-main::before {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: #f58220;
            opacity: .12;
            top: 40px;
            left: 80px;
        }

        .placeholder-main::after {
            content: "LAB";
            position: absolute;
            font-size: 100px;
            font-weight: 900;
            color: #1f5391;
            opacity: .08;
            bottom: 70px;
            left: 50%;
            transform: translateX(-50%);
        }

        .lab-illustration {
            position: absolute;
            left: 50%;
            top: 48%;
            transform: translate(-50%, -50%);
            width: 260px;
            height: 190px;
        }

        .desk {
            position: absolute;
            width: 250px;
            height: 18px;
            background: #1f5391;
            bottom: 25px;
            left: 5px;
            border-radius: 10px;
        }

        .desk::before,
        .desk::after {
            content: "";
            position: absolute;
            width: 12px;
            height: 65px;
            background: #1f5391;
            bottom: -55px;
        }

        .desk::before {
            left: 20px;
        }

        .desk::after {
            right: 20px;
        }

        .monitor {
            position: absolute;
            width: 120px;
            height: 80px;
            background: #20242a;
            border-radius: 8px;
            left: 65px;
            bottom: 45px;
        }

        .monitor::before {
            content: "";
            position: absolute;
            width: 92px;
            height: 55px;
            background: #dceafa;
            left: 14px;
            top: 12px;
            border-radius: 4px;
        }

        .monitor::after {
            content: "";
            position: absolute;
            width: 35px;
            height: 8px;
            background: #20242a;
            left: 42px;
            bottom: -15px;
            border-radius: 5px;
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            z-index: 3;
        }

        .shape-one {
            width: 70px;
            height: 70px;
            background: #f58220;
            opacity: .9;
            right: 20px;
            top: 70px;
            animation: floatOne 4s ease-in-out infinite;
        }

        .shape-two {
            width: 45px;
            height: 45px;
            border: 8px solid #1f5391;
            left: 35px;
            bottom: 60px;
            animation: floatTwo 5s ease-in-out infinite;
        }

        .shape-three {
            width: 22px;
            height: 22px;
            background: #f58220;
            left: 90px;
            top: 90px;
            animation: floatTwo 3s ease-in-out infinite;
        }

        @keyframes floatOne {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes floatTwo {

            0%,
            100% {
                transform: translateY(0) rotate(0);
            }

            50% {
                transform: translateY(15px) rotate(20deg);
            }
        }

        /* =========================
           FEATURE SECTION
        ========================= */

        .features-section {
            background: white;
        }

        .features-heading {
            max-width: 700px;
            margin: auto;
            margin-bottom: 55px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .feature-card {
            position: relative;
            padding: 40px 32px;
            border-radius: 15px;
            background: #fff;
            border: 1px solid #edf0f3;
            transition: .35s;
            overflow: hidden;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 55px rgba(20, 40, 70, .10);
        }

        .feature-card::after {
            content: "";
            position: absolute;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: #f58220;
            opacity: .05;
            right: -25px;
            bottom: -25px;
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff1e5;
            border-radius: 50%;
            font-size: 30px;
            margin-bottom: 25px;
        }

        .feature-card h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: #22272d;
        }

        .feature-card p {
            color: #737b83;
            line-height: 1.8;
            font-size: 15px;
        }

        /* =========================
           LAB SHOWCASE
        ========================= */

        .showcase-section {
            background: #f7f9fc;
        }

        .showcase-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
            margin-bottom: 100px;
        }

        .showcase-row:last-child {
            margin-bottom: 0;
        }

        .showcase-row.reverse .showcase-image {
            order: 2;
        }

        .showcase-row.reverse .showcase-content {
            order: 1;
        }

        .showcase-image {
            position: relative;
        }

        .image-placeholder {
            min-height: 410px;
            border-radius: 25px;
            background: linear-gradient(145deg, #e7eef8, #ffffff);
            border: 10px solid white;
            box-shadow: 0 25px 55px rgba(28, 54, 80, .13);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .image-placeholder::before {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            background: #1f5391;
            opacity: .06;
            top: -80px;
            right: -60px;
        }

        .image-placeholder::after {
            content: "PHOTO PLACEHOLDER";
            position: absolute;
            color: #1f5391;
            font-size: 18px;
            font-weight: 800;
            letter-spacing: 2px;
            opacity: .35;
        }

        .placeholder-icon {
            font-size: 90px;
            opacity: .15;
        }

        .showcase-content h2 {
            font-size: 38px;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #20242a;
        }

        .showcase-content p {
            color: #69727b;
            line-height: 1.9;
            margin-bottom: 22px;
        }

        .check-list {
            list-style: none;
            margin: 25px 0;
        }

        .check-list li {
            margin-bottom: 14px;
            color: #444b52;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .check {
            width: 24px;
            height: 24px;
            min-width: 24px;
            background: #f58220;
            color: white;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: bold;
        }

        /* =========================
           STATS
        ========================= */

        .stats-section {
            background: #1f5391;
            position: relative;
            overflow: hidden;
        }

        .stats-section::before {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            border: 100px solid rgba(255, 255, 255, .03);
            left: -180px;
            top: -180px;
        }

        .stats-heading {
            position: relative;
            z-index: 2;
            color: white;
            max-width: 700px;
            margin: auto;
            margin-bottom: 60px;
        }

        .stats-heading .section-tag {
            color: #ffad6b;
        }

        .stats-heading .section-title {
            color: white;
        }

        .stats-heading .section-description {
            color: rgba(255, 255, 255, .75);
        }

        .stats-grid {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .stat-card {
            text-align: center;
            padding: 30px 20px;
            border-right: 1px solid rgba(255, 255, 255, .15);
        }

        .stat-card:last-child {
            border-right: none;
        }

        .stat-number {
            color: white;
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .stat-number span {
            color: #ff9b52;
        }

        .stat-label {
            color: rgba(255, 255, 255, .75);
            font-size: 15px;
        }

        /* =========================
           EXPERIENCE
        ========================= */

        .experience-section {
            background: white;
        }

        .experience-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-top: 55px;
        }

        .experience-card {
            padding: 35px;
            border-radius: 15px;
            background: #f8fafc;
            transition: .3s;
            border-bottom: 4px solid transparent;
        }

        .experience-card:hover {
            background: #fff;
            border-bottom-color: #f58220;
            box-shadow: 0 20px 45px rgba(20, 40, 60, .08);
            transform: translateY(-6px);
        }

        .experience-number {
            font-size: 15px;
            color: #f58220;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .experience-card h3 {
            font-size: 22px;
            margin-bottom: 14px;
        }

        .experience-card p {
            color: #717982;
            line-height: 1.8;
        }

        /* =========================
           TESTIMONIAL
        ========================= */

        .testimonial-section {
            background: #f7f9fc;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-top: 55px;
        }

        .testimonial-card {
            background: white;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 10px 35px rgba(30, 50, 70, .05);
            position: relative;
        }

        .quote {
            font-size: 50px;
            line-height: 1;
            color: #f58220;
            opacity: .25;
            font-weight: 900;
        }

        .testimonial-card p {
            color: #66707a;
            line-height: 1.8;
            margin: 15px 0 25px;
            font-size: 15px;
        }

        .student {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .student-avatar {
            width: 50px;
            height: 50px;
            background: #e9f0f9;
            color: #1f5391;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
        }

        .student h4 {
            margin-bottom: 5px;
        }

        .student small {
            color: #89919a;
        }

        /* =========================
           CTA
        ========================= */

        .cta-section {
            padding: 90px 0;
        }

        .cta-box {
            background:
                radial-gradient(circle at 90% 20%, rgba(255, 255, 255, .12), transparent 25%),
                #f58220;
            border-radius: 25px;
            padding: 65px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-box::before {
            content: "";
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 40px solid rgba(255, 255, 255, .08);
            left: -70px;
            bottom: -70px;
        }

        .cta-box h2 {
            position: relative;
            color: white;
            font-size: 42px;
            margin-bottom: 15px;
        }

        .cta-box p {
            position: relative;
            color: rgba(255, 255, 255, .85);
            max-width: 650px;
            margin: 0 auto 30px;
            line-height: 1.8;
        }

        .cta-btn {
            position: relative;
            display: inline-block;
            background: white;
            color: #f58220;
            padding: 15px 30px;
            border-radius: 7px;
            font-weight: 800;
            transition: .3s;
        }

        .cta-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, .12);
        }

        /* =========================
           ANIMATION
        ========================= */

        .fade-up {
            animation: fadeUp 1s ease both;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width: 1100px) {

            .hero-content h1 {
                font-size: 48px;
            }

            .hero-visual {
                right: -12%;
            }

            .placeholder-main {
                width: 400px;
                height: 460px;
            }

            .hero-circle {
                width: 450px;
                height: 450px;
            }
        }

        @media(max-width: 900px) {

            .section-padding {
                padding: 75px 0;
            }

            .lab-hero {
                min-height: auto;
                padding: 90px 0;
            }

            .hero-content {
                width: 100%;
                text-align: center;
            }

            .hero-content p {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-visual {
                position: relative;
                width: 100%;
                right: auto;
                top: auto;
                transform: none;
                margin-top: 60px;
            }

            .hero-circle {
                right: 50%;
                transform: translate(50%, 0);
            }

            .placeholder-main {
                margin: auto;
            }

            .features-grid,
            .experience-grid,
            .testimonial-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .showcase-row {
                gap: 40px;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .stat-card:nth-child(2) {
                border-right: none;
            }
        }

        @media(max-width: 650px) {

            .section-padding {
                padding: 60px 0;
            }

            .section-title {
                font-size: 34px;
            }

            .hero-content h1 {
                font-size: 38px;
            }

            .hero-content p {
                font-size: 15px;
            }

            .placeholder-main {
                width: 300px;
                height: 350px;
            }

            .hero-circle {
                width: 330px;
                height: 330px;
            }

            .lab-illustration {
                transform: translate(-50%, -50%) scale(.75);
            }

            .features-grid,
            .experience-grid,
            .testimonial-grid {
                grid-template-columns: 1fr;
            }

            .showcase-row {
                grid-template-columns: 1fr;
                gap: 35px;
                margin-bottom: 70px;
            }

            .showcase-row.reverse .showcase-image {
                order: 1;
            }

            .showcase-row.reverse .showcase-content {
                order: 2;
            }

            .image-placeholder {
                min-height: 300px;
            }

            .showcase-content h2 {
                font-size: 30px;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }

            .stat-card {
                border-right: none;
                border-bottom: 1px solid rgba(255, 255, 255, .15);
            }

            .stat-number {
                font-size: 35px;
            }

            .cta-box {
                padding: 45px 20px;
            }

            .cta-box h2 {
                font-size: 30px;
            }
        }

        @media(max-width: 420px) {

            .lab-container {
                width: 92%;
            }

            .hero-content h1 {
                font-size: 34px;
            }

            .placeholder-main {
                width: 270px;
                height: 320px;
            }

            .hero-circle {
                width: 290px;
                height: 290px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .stat-card {
                border-bottom: 1px solid rgba(255, 255, 255, .15);
            }
        }
    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>


    <!-- ==========================================
         HERO
    =========================================== -->

    <section class="lab-hero">

        <div class="lab-container">

            <div class="hero-content fade-up">

                <span class="section-tag">
                    Modern Learning Environment
                </span>

                <h1>
                    Learn Today.
                    <span>Build Tomorrow.</span>
                </h1>

                <p>
                    At SS Education Foundation, we believe that meaningful
                    education goes beyond textbooks. Our modern labs,
                    practical learning environment and technical training
                    help students develop real-world skills for their future.
                </p>

                <div class="hero-buttons">

                    <a href="contact-us.php" class="primary-btn">
                        Explore Our Facilities →
                    </a>

                    <a href="all-courses.php" class="secondary-btn">
                        Explore Courses
                    </a>

                </div>

            </div>


            <!-- HERO PLACEHOLDER -->

            <div class="hero-visual">

                <div class="hero-circle"></div>

                <div class="shape-one"></div>
                <div class="shape-two"></div>
                <div class="shape-three"></div>

                <div class="placeholder-main">

                    <div class="lab-illustration">

                        <div class="monitor"></div>

                        <div class="desk"></div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ==========================================
         FEATURES
    =========================================== -->

    <section class="features-section section-padding">

        <div class="lab-container">

            <div class="features-heading text-center">

                <span class="section-tag">
                    Why Our Environment?
                </span>

                <h2 class="section-title">
                    Education Designed Around
                    <span style="color:#f58220;">Practical Learning</span>
                </h2>

                <p class="section-description mx-auto">
                    We create an environment where students can understand
                    concepts, practice their skills and prepare themselves
                    for real professional challenges.
                </p>

            </div>


            <div class="features-grid">

                <div class="feature-card">

                    <div class="feature-icon">
                        💻
                    </div>

                    <h3>Modern Computer Labs</h3>

                    <p>
                        Students get access to a technology-focused learning
                        environment where they can practice programming,
                        software tools and digital skills.
                    </p>

                </div>


                <div class="feature-card">

                    <div class="feature-icon">
                        🔬
                    </div>

                    <h3>Practical Learning</h3>

                    <p>
                        Our practical approach helps students understand
                        concepts through activities, projects and
                        hands-on learning.
                    </p>

                </div>


                <div class="feature-card">

                    <div class="feature-icon">
                        🚀
                    </div>

                    <h3>Career Focused Skills</h3>

                    <p>
                        We focus on developing job-ready skills that can help
                        students move confidently toward higher education
                        and professional opportunities.
                    </p>

                </div>

            </div>

        </div>

    </section>



    <!-- ==========================================
         LAB SHOWCASE
    =========================================== -->

    <section class="showcase-section section-padding">

        <div class="lab-container">

            <!-- COMPUTER LAB -->

            <div class="showcase-row">

                <div class="showcase-image">

                    <div class="image-placeholder">

                        <div class="placeholder-icon">
                            💻
                        </div>

                    </div>

                </div>


                <div class="showcase-content">

                    <span class="section-tag">
                        01 — Technology
                    </span>

                    <h2>
                        Learn Technology
                        Through Practice
                    </h2>

                    <p>
                        A modern computer learning environment allows
                        students to work with technology instead of simply
                        reading about it.
                    </p>

                    <ul class="check-list">

                        <li>
                            <span class="check">✓</span>
                            Computer-based practical training
                        </li>

                        <li>
                            <span class="check">✓</span>
                            Programming and software practice
                        </li>

                        <li>
                            <span class="check">✓</span>
                            Digital skills development
                        </li>

                        <li>
                            <span class="check">✓</span>
                            Project-based learning
                        </li>

                    </ul>

                </div>

            </div>


            <!-- SCIENCE LAB -->

            <div class="showcase-row reverse">

                <div class="showcase-image">

                    <div class="image-placeholder">

                        <div class="placeholder-icon">
                            🔬
                        </div>

                    </div>

                </div>


                <div class="showcase-content">

                    <span class="section-tag">
                        02 — Practical
                    </span>

                    <h2>
                        Discover Science
                        Through Experiments
                    </h2>

                    <p>
                        Practical activities make learning more engaging
                        and help students understand scientific concepts
                        through observation and experimentation.
                    </p>

                    <ul class="check-list">

                        <li>
                            <span class="check">✓</span>
                            Practical demonstrations
                        </li>

                        <li>
                            <span class="check">✓</span>
                            Experiment-based learning
                        </li>

                        <li>
                            <span class="check">✓</span>
                            Concept understanding
                        </li>

                        <li>
                            <span class="check">✓</span>
                            Interactive learning experience
                        </li>

                    </ul>

                </div>

            </div>


            <!-- TECHNICAL LAB -->

            <div class="showcase-row">

                <div class="showcase-image">

                    <div class="image-placeholder">

                        <div class="placeholder-icon">
                            ⚙️
                        </div>

                    </div>

                </div>


                <div class="showcase-content">

                    <span class="section-tag">
                        03 — Technical Training
                    </span>

                    <h2>
                        Build Skills For
                        The Real World
                    </h2>

                    <p>
                        Our technical learning environment encourages
                        students to develop practical knowledge and
                        problem-solving abilities.
                    </p>

                    <ul class="check-list">

                        <li>
                            <span class="check">✓</span>
                            Skill-oriented training
                        </li>

                        <li>
                            <span class="check">✓</span>
                            Practical assignments
                        </li>

                        <li>
                            <span class="check">✓</span>
                            Problem-solving activities
                        </li>

                        <li>
                            <span class="check">✓</span>
                            Career-oriented development
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </section>



    <!-- ==========================================
         STATS
    =========================================== -->

    <section class="stats-section section-padding">

        <div class="lab-container">

            <div class="stats-heading text-center">

                <span class="section-tag">
                    Learning Impact
                </span>

                <h2 class="section-title">
                    Creating A Better
                    Learning Experience
                </h2>

                <p class="section-description mx-auto">
                    Our learning environment is designed to encourage
                    curiosity, confidence and practical skill development.
                </p>

            </div>


            <div class="stats-grid">

                <div class="stat-card">

                    <div class="stat-number">
                        100<span>+</span>
                    </div>

                    <div class="stat-label">
                        Learning Activities
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-number">
                        50<span>+</span>
                    </div>

                    <div class="stat-label">
                        Practical Projects
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-number">
                        20<span>+</span>
                    </div>

                    <div class="stat-label">
                        Learning Areas
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-number">
                        100<span>%</span>
                    </div>

                    <div class="stat-label">
                        Learning Focus
                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ==========================================
         LEARNING EXPERIENCE
    =========================================== -->

    <section class="experience-section section-padding">

        <div class="lab-container">

            <div class="text-center">

                <span class="section-tag">
                    Student Experience
                </span>

                <h2 class="section-title">
                    More Than Just A Classroom
                </h2>

                <p class="section-description mx-auto">
                    We want students to learn, experiment, collaborate and
                    become confident professionals.
                </p>

            </div>


            <div class="experience-grid">

                <div class="experience-card">

                    <div class="experience-number">
                        01
                    </div>

                    <h3>Learn</h3>

                    <p>
                        Understand concepts with structured classroom
                        learning and guidance from educators.
                    </p>

                </div>


                <div class="experience-card">

                    <div class="experience-number">
                        02
                    </div>

                    <h3>Practice</h3>

                    <p>
                        Apply classroom knowledge through practical
                        activities, assignments and projects.
                    </p>

                </div>


                <div class="experience-card">

                    <div class="experience-number">
                        03
                    </div>

                    <h3>Experiment</h3>

                    <p>
                        Explore ideas, solve problems and develop a deeper
                        understanding through experimentation.
                    </p>

                </div>


                <div class="experience-card">

                    <div class="experience-number">
                        04
                    </div>

                    <h3>Collaborate</h3>

                    <p>
                        Work with other students and develop communication
                        and teamwork skills.
                    </p>

                </div>


                <div class="experience-card">

                    <div class="experience-number">
                        05
                    </div>

                    <h3>Create</h3>

                    <p>
                        Turn knowledge into projects and practical solutions
                        that demonstrate real skills.
                    </p>

                </div>


                <div class="experience-card">

                    <div class="experience-number">
                        06
                    </div>

                    <h3>Grow</h3>

                    <p>
                        Build confidence and prepare yourself for future
                        education and career opportunities.
                    </p>

                </div>

            </div>

        </div>

    </section>



    <!-- ==========================================
         TESTIMONIAL
    =========================================== -->

    <section class="testimonial-section section-padding">

        <div class="lab-container">

            <div class="text-center">

                <span class="section-tag">
                    Student Voices
                </span>

                <h2 class="section-title">
                    What Students Say
                </h2>

                <p class="section-description mx-auto">
                    A practical learning environment can make education
                    more engaging, interactive and meaningful.
                </p>

            </div>


            <div class="testimonial-grid">

                <div class="testimonial-card">

                    <div class="quote">
                        “
                    </div>

                    <p>
                        The practical approach makes it easier to understand
                        difficult concepts. Learning becomes more interesting
                        when we actually practice.
                    </p>

                    <div class="student">

                        <div class="student-avatar">
                            S
                        </div>

                        <div>
                            <h4>Student</h4>
                            <small>Technology Program</small>
                        </div>

                    </div>

                </div>


                <div class="testimonial-card">

                    <div class="quote">
                        “
                    </div>

                    <p>
                        I really like the combination of classroom learning
                        and practical activities. It gives us confidence to
                        work on real projects.
                    </p>

                    <div class="student">

                        <div class="student-avatar">
                            A
                        </div>

                        <div>
                            <h4>Student</h4>
                            <small>Technical Program</small>
                        </div>

                    </div>

                </div>


                <div class="testimonial-card">

                    <div class="quote">
                        “
                    </div>

                    <p>
                        The learning environment motivates students to ask
                        questions, experiment and continuously improve their
                        skills.
                    </p>

                    <div class="student">

                        <div class="student-avatar">
                            R
                        </div>

                        <div>
                            <h4>Student</h4>
                            <small>Professional Program</small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ==========================================
         CTA
    =========================================== -->

    <section class="cta-section">

        <div class="lab-container">

            <div class="cta-box">

                <h2>
                    Build Your Future With Practical Skills
                </h2>

                <p>
                    Give your education a practical direction and prepare
                    yourself for the opportunities of tomorrow.
                </p>

                <a href="contact-us.php" class="cta-btn">
                    Start Your Journey →
                </a>

            </div>

        </div>

    </section>



    <?php include 'include/footer.php'; ?>


</body>

</html>