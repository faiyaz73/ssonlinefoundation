<?php
/*
|--------------------------------------------------------------------------
| SS Education Foundation - Law Programs Complete Page
|--------------------------------------------------------------------------
| File: law-program.php
| Required folders:
|   include/header.php
|   include/footer.php
|   images/
|
| Hero videos (optional but recommended):
|   images/law-hero-1.mp4
|   images/law-hero-2.mp4
|   images/law-hero-3.mp4
|   images/law-hero-4.mp4
|
| Hero poster fallback:
|   images/law.jpg
|--------------------------------------------------------------------------
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Law Programs | SS Education Foundation</title>

    <meta name="description" content="Explore Law Programs at SS Education Foundation including B.A. LLB, B.Com LLB, LLB and LLM. Build your career in legal education with professional law programs.">

    <meta name="keywords" content="Law Courses, Law Programs, BA LLB, B.A LLB, BCom LLB, B.Com LLB, LLB, LLM, Law College, Law Education, SS Education Foundation">

    <meta name="author" content="SS Education Foundation">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="https://sseducationsfoundation.com/law-program.php">

    <!-- Open Graph -->
    <meta property="og:title" content="Law Programs | SS Education Foundation">
    <meta property="og:description" content="Explore B.A. LLB, B.Com LLB, LLB and LLM programs at SS Education Foundation.">
    <meta property="og:image" content="https://sseducationsfoundation.com/assets/images/logo.png">
    <meta property="og:url" content="https://sseducationsfoundation.com/law-program.php">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="SS Education Foundation">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Law Programs | SS Education Foundation">
    <meta name="twitter:description" content="Explore professional Law Programs including B.A. LLB, B.Com LLB, LLB and LLM at SS Education Foundation.">
    <meta name="twitter:image" content="https://sseducationsfoundation.com/assets/images/logo.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        :root{
            --gold:#D1A95A;
            --gold-dark:#9d7225;
            --gold-light:#f5dfaa;
            --navy:#101827;
            --navy-2:#172033;
            --text:#283142;
            --muted:#6c757d;
            --light:#f7f9fc;
            --white:#fff;
            --shadow:0 18px 55px rgba(16,24,39,.10);
        }

        *{box-sizing:border-box}

        html{scroll-behavior:smooth}

        body{
            margin:0;
            font-family:"Inter",Arial,sans-serif;
            color:var(--text);
            background:#fff;
        }

        a{text-decoration:none}

        /* =========================================================
           HERO
        ========================================================= */
        .law-hero{
            position:relative;
            min-height:690px;
            height:calc(100vh - 75px);
            max-height:840px;
            overflow:hidden;
            background:#0d111a;
            color:#fff;
        }

        .law-hero-slides,
        .law-hero-slide,
        .law-hero-video{
            position:absolute;
            inset:0;
            width:100%;
            height:100%;
        }

        .law-hero-slide{
            opacity:0;
            visibility:hidden;
            transition:opacity .8s ease,visibility .8s ease;
        }

        .law-hero-slide.active{
            opacity:1;
            visibility:visible;
        }

        .law-hero-video{
            object-fit:cover;
            background:#161b25;
        }

        .law-hero-overlay{
            position:absolute;
            inset:0;
            z-index:1;
            background:
                linear-gradient(90deg,
                    rgba(168, 78, 5, 0.94) 0%,
                    rgba(126, 45, 5, 0.78) 36%,
                    rgba(216, 72, 0, 0.38) 68%,
                    rgba(116, 55, 4, 0.62) 100%);
        }

        .law-hero-overlay:after{
            content:"";
            position:absolute;
            inset:0;
            background:
                radial-gradient(circle at 78% 42%,rgba(209,169,90,.20),transparent 28%),
                linear-gradient(0deg,rgba(0,0,0,.20),transparent 45%);
        }

        .law-hero .container{
            position:relative;
            z-index:3;
            height:100%;
        }

        .law-hero-content{
            max-width:770px;
            padding:60px 0 80px;
        }

        .law-hero-badge{
            display:inline-flex;
            align-items:center;
            gap:9px;
            padding:10px 17px;
            border:1px solid rgba(209,169,90,.60);
            border-radius:999px;
            color:var(--gold-light);
            background:rgba(255,255,255,.07);
            backdrop-filter:blur(8px);
            font-size:13px;
            font-weight:800;
            letter-spacing:.8px;
            text-transform:uppercase;
        }

        .law-hero-badge i{color:var(--gold);font-size:17px}

        .law-hero h1{
            margin:22px 0 17px;
            font-size:clamp(43px,5.3vw,74px);
            line-height:1.02;
            letter-spacing:-2px;
            font-weight:900;
        }

        .law-hero h1 span{color:var(--gold)}

        .law-hero-lead{
            max-width:690px;
            margin:0 0 28px;
            color:rgba(255,255,255,.83);
            font-size:17px;
            line-height:1.8;
        }

        .law-hero-actions{
            display:flex;
            flex-wrap:wrap;
            gap:12px;
        }

        .law-btn{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            gap:9px;
            min-height:50px;
            padding:13px 23px;
            border-radius:9px;
            font-weight:800;
            transition:.3s ease;
        }

        .law-btn-gold{
            background:var(--gold);
            color:#18150f;
            box-shadow:0 15px 35px rgba(209,169,90,.20);
        }

        .law-btn-gold:hover{
            color:#18150f;
            background:#f0d28f;
            transform:translateY(-2px);
        }

        .law-btn-outline{
            color:#fff;
            border:1px solid rgba(255,255,255,.55);
            background:rgba(255,255,255,.06);
            backdrop-filter:blur(7px);
        }

        .law-btn-outline:hover{
            color:#1a1a1a;
            background:#fff;
            transform:translateY(-2px);
        }

        .law-hero-points{
            display:flex;
            flex-wrap:wrap;
            gap:20px;
            margin-top:30px;
        }

        .law-hero-point{
            display:flex;
            align-items:center;
            gap:8px;
            color:#fff;
            font-size:13px;
            font-weight:700;
        }

        .law-hero-point i{
            color:var(--gold);
            font-size:16px;
        }

        /* Hero floating law panel */
        .law-hero-panel{
            position:relative;
            width:390px;
            height:390px;
            margin:auto;
            border:1px solid rgba(209,169,90,.35);
            border-radius:50%;
            background:rgba(255,255,255,.035);
            box-shadow:0 0 90px rgba(209,169,90,.13);
            backdrop-filter:blur(5px);
        }

        .law-hero-panel:before,
        .law-hero-panel:after{
            content:"";
            position:absolute;
            border:1px dashed rgba(209,169,90,.36);
            border-radius:50%;
        }

        .law-hero-panel:before{inset:32px}
        .law-hero-panel:after{inset:82px}

        .law-center-icon{
            position:absolute;
            top:50%;
            left:50%;
            width:122px;
            height:122px;
            transform:translate(-50%,-50%);
            display:flex;
            align-items:center;
            justify-content:center;
            border-radius:50%;
            background:linear-gradient(145deg,var(--gold),#f4dda4);
            color:#211b0f;
            font-size:49px;
            box-shadow:0 0 50px rgba(209,169,90,.28);
        }

        .law-orbit-icon{
            position:absolute;
            width:62px;
            height:62px;
            display:flex;
            align-items:center;
            justify-content:center;
            border-radius:17px;
            background:#fff;
            color:var(--gold-dark);
            font-size:22px;
            box-shadow:0 13px 32px rgba(0,0,0,.22);
            animation:lawFloat 4s ease-in-out infinite;
        }

        .law-orbit-1{top:25px;left:50%;margin-left:-31px}
        .law-orbit-2{top:105px;right:19px;animation-delay:.6s}
        .law-orbit-3{bottom:105px;right:19px;animation-delay:1.2s}
        .law-orbit-4{bottom:25px;left:50%;margin-left:-31px;animation-delay:1.8s}
        .law-orbit-5{top:105px;left:19px;animation-delay:2.4s}

        @keyframes lawFloat{
            0%,100%{transform:translateY(0)}
            50%{transform:translateY(-9px)}
        }

        .law-video-dots{
            position:absolute;
            z-index:5;
            left:50%;
            bottom:25px;
            transform:translateX(-50%);
            display:flex;
            gap:8px;
        }

        .law-video-dot{
            width:30px;
            height:5px;
            padding:0;
            border:0;
            border-radius:50px;
            cursor:pointer;
            background:rgba(255,255,255,.38);
            transition:.3s;
        }

        .law-video-dot.active{
            width:52px;
            background:var(--gold);
        }

        .law-video-counter{
            position:absolute;
            right:30px;
            bottom:21px;
            z-index:5;
            color:rgba(255,255,255,.68);
            letter-spacing:2px;
            font-size:13px;
        }

        .law-video-counter strong{
            color:#fff;
            font-size:18px;
        }

        /* =========================================================
           QUICK INFO STRIP
        ========================================================= */
        .law-info-strip{
            position:relative;
            z-index:5;
            margin-top:-42px;
        }

        .law-info-box{
            background:#fff;
            border:1px solid rgba(209,169,90,.22);
            border-radius:18px;
            box-shadow:var(--shadow);
            padding:23px 15px;
        }

        .law-info-item{
            display:flex;
            align-items:center;
            justify-content:center;
            gap:13px;
            min-height:54px;
            border-right:1px solid #edf0f4;
        }

        .law-info-item:last-child{border-right:0}

        .law-info-icon{
            width:48px;
            height:48px;
            flex:0 0 48px;
            display:flex;
            align-items:center;
            justify-content:center;
            border-radius:13px;
            background:rgba(209,169,90,.13);
            color:var(--gold-dark);
            font-size:19px;
        }

        .law-info-item strong{
            display:block;
            color:#182132;
            font-size:14px;
        }

        .law-info-item span{
            display:block;
            margin-top:3px;
            color:#77808e;
            font-size:12px;
        }

        /* =========================================================
           COMMON SECTION
        ========================================================= */
        .law-section{
            padding:95px 0;
        }

        .law-section-light{
            background:
                linear-gradient(135deg,#f7f9fc 0%,#fff 55%,#fffaf0 100%);
        }

        .law-section-heading{
            max-width:760px;
            margin:0 auto 50px;
            text-align:center;
        }

        .law-badge{
            display:inline-flex;
            align-items:center;
            gap:8px;
            padding:8px 17px;
            background:rgba(209,169,90,.13);
            color:var(--gold-dark);
            border-radius:50px;
            font-size:13px;
            font-weight:800;
            letter-spacing:.8px;
            text-transform:uppercase;
        }

        .law-section-title{
            margin:15px 0 12px;
            color:#172033;
            font-size:clamp(31px,4vw,46px);
            line-height:1.12;
            font-weight:900;
        }

        .law-section-description{
            margin:0 auto;
            color:#6c757d;
            font-size:16px;
            line-height:1.8;
        }

        /* =========================================================
           COURSE CARDS
        ========================================================= */
        .course-card{
            height:100%;
            position:relative;
            overflow:hidden;
            background:#fff;
            border:1px solid rgba(209,169,90,.20);
            border-radius:20px;
            box-shadow:0 12px 38px rgba(0,0,0,.075);
            transition:.35s ease;
        }

        .course-card:before{
            content:"";
            position:absolute;
            left:0;
            top:0;
            width:100%;
            height:5px;
            background:linear-gradient(90deg,#D1A95A,#f1d794,#9d7225);
        }

        .course-card:hover{
            transform:translateY(-9px);
            box-shadow:0 22px 50px rgba(0,0,0,.12);
        }

        .course-card-body{
            padding:34px 26px 28px;
            text-align:center;
        }

        .course-icon{
            width:78px;
            height:78px;
            display:flex;
            align-items:center;
            justify-content:center;
            margin:0 auto 21px;
            border-radius:22px;
            background:linear-gradient(145deg,var(--gold),#efd59b);
            color:#241d10;
            font-size:29px;
            box-shadow:0 12px 28px rgba(209,169,90,.20);
            transition:.35s ease;
        }

        .course-card:hover .course-icon{
            transform:scale(1.07) rotate(4deg);
        }

        .course-title{
            margin:0 0 10px;
            color:#172033;
            font-size:24px;
            font-weight:850;
        }

        .course-duration{
            display:inline-flex;
            align-items:center;
            gap:7px;
            padding:7px 13px;
            margin-bottom:17px;
            border-radius:30px;
            background:#faf5e9;
            color:var(--gold-dark);
            font-size:13px;
            font-weight:800;
        }

        .course-description{
            min-height:112px;
            margin:0 0 22px;
            color:#6c757d;
            font-size:14px;
            line-height:1.75;
        }

        .course-btn{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            gap:8px;
            border:0;
            border-radius:9px;
            padding:11px 21px;
            background:var(--gold);
            color:#19150d;
            font-weight:800;
            transition:.3s;
        }

        .course-btn:hover{
            color:#19150d;
            background:#efd28d;
            transform:translateY(-2px);
        }

        /* =========================================================
           WHY LAW
        ========================================================= */
        .law-feature-card{
            height:100%;
            padding:27px;
            border-radius:18px;
            background:#fff;
            border:1px solid #edf0f4;
            box-shadow:0 10px 32px rgba(0,0,0,.055);
            transition:.3s ease;
        }

        .law-feature-card:hover{
            transform:translateY(-6px);
            border-color:rgba(209,169,90,.35);
        }

        .law-feature-icon{
            width:55px;
            height:55px;
            display:flex;
            align-items:center;
            justify-content:center;
            margin-bottom:17px;
            border-radius:15px;
            background:rgba(209,169,90,.13);
            color:var(--gold-dark);
            font-size:22px;
        }

        .law-feature-card h3{
            margin:0 0 9px;
            color:#172033;
            font-size:19px;
            font-weight:800;
        }

        .law-feature-card p{
            margin:0;
            color:#737b87;
            font-size:14px;
            line-height:1.7;
        }

        /* =========================================================
           CAREER PATH
        ========================================================= */
        .law-career-box{
            overflow:hidden;
            position:relative;
            padding:50px;
            border-radius:25px;
            color:#fff;
            background:
                linear-gradient(135deg,#111927,#1d2738);
            box-shadow:0 20px 60px rgba(16,24,39,.17);
        }

        .law-career-box:after{
            content:"";
            position:absolute;
            width:330px;
            height:330px;
            right:-120px;
            top:-140px;
            border-radius:50%;
            background:rgba(209,169,90,.12);
        }
        .accordion-header{
            color:red;
        }

        .law-career-box h2{
            margin:0 0 13px;
            font-size:34px;
            font-weight:900;
        }

        .law-career-box p{
            max-width:720px;
            margin:0 0 25px;
            color:rgba(255,255,255,.75);
            line-height:1.75;
        }

        .career-list{
            display:grid;
            grid-template-columns:repeat(2,1fr);
            gap:12px 25px;
            padding:0;
            margin:0;
            list-style:none;
        }

        .career-list li{
            display:flex;
            align-items:center;
            gap:10px;
            color:#fff;
            font-size:14px;
            font-weight:600;
        }

        .career-list i{color:var(--gold)}

        /* =========================================================
           FAQ
        ========================================================= */
        .law-faq .accordion-item{
            margin-bottom:13px;
            overflow:hidden;
            border:1px solid #e8ebf0;
            border-radius:13px !important;
        }

        .law-faq .accordion-button{
            padding:19px 21px;
            color:#111111;
            font-weight:400;
            background:#ccc;
            box-shadow:none;
            font-size:17px;
        }

        .law-faq .accordion-button:not(.collapsed){
            color:var(--gold-dark);
            background:#fffaf0;
        }

        .law-faq .accordion-body{
            color:#6c757d;
            line-height:1.75;
            font-size:17px;
        }

        /* =========================================================
           CTA
        ========================================================= */
        .law-cta{
            position:relative;
            overflow:hidden;
            padding:55px 30px;
            border-radius:25px;
            text-align:center;
            color:#fff;
            background:
                linear-gradient(135deg,#101827,#202c40);
            box-shadow:0 20px 60px rgba(16,24,39,.16);
        }

        .law-cta:before{
            content:"";
            position:absolute;
            width:260px;
            height:260px;
            left:-100px;
            bottom:-130px;
            border-radius:50%;
            background:rgba(209,169,90,.10);
        }

        .law-cta:after{
            content:"";
            position:absolute;
            width:260px;
            height:260px;
            right:-100px;
            top:-130px;
            border-radius:50%;
            background:rgba(209,169,90,.10);
        }

        .law-cta > *{
            position:relative;
            z-index:2;
        }

        .law-cta-icon{
            width:66px;
            height:66px;
            margin:0 auto 17px;
            display:flex;
            align-items:center;
            justify-content:center;
            border-radius:50%;
            background:rgba(209,169,90,.14);
            color:var(--gold);
            font-size:25px;
        }

        .law-cta h2{
            margin:0 0 10px;
            font-size:34px;
            font-weight:900;
        }

        .law-cta p{
            max-width:700px;
            margin:0 auto 25px;
            color:rgba(255,255,255,.76);
            line-height:1.75;
        }

        /* =========================================================
           FLOATING CONTACT
        ========================================================= */
        .law-whatsapp{
            position:fixed;
            z-index:99;
            right:20px;
            bottom:20px;
            width:55px;
            height:55px;
            display:flex;
            align-items:center;
            justify-content:center;
            border-radius:50%;
            background:#25D366;
            color:#fff;
            font-size:25px;
            box-shadow:0 12px 30px rgba(0,0,0,.22);
            transition:.3s;
        }

        .law-whatsapp:hover{
            color:#fff;
            transform:translateY(-4px) scale(1.04);
        }

        /* =========================================================
           RESPONSIVE
        ========================================================= */
        @media(max-width:1199px){
            .law-hero-panel{width:340px;height:340px}
        }

        @media(max-width:991px){
            .law-hero{
                height:650px;
                min-height:650px;
            }

            .law-hero-content{
                padding:55px 0 75px;
            }

            .law-hero h1{font-size:47px}

            .law-info-strip{margin-top:-25px}

            .law-info-item{
                border-right:0;
                border-bottom:1px solid #edf0f4;
                padding:12px 0;
            }

            .law-info-item:last-child{border-bottom:0}

            .law-section{padding:75px 0}

            .career-list{grid-template-columns:1fr}
        }

        @media(max-width:767px){
            .law-hero{
                height:650px;
                min-height:650px;
            }

            .law-hero-content{
                padding:38px 0 70px;
            }

            .law-hero h1{
                font-size:58px;
                letter-spacing:-1px;
               
            }

            .law-hero-lead{
                font-size:14px;
                line-height:1.7;
            }

            .law-hero-actions .law-btn{
                width:100%;
            }

            .law-hero-points{
                display:grid;
                grid-template-columns:1fr;
                gap:11px;
            }

            .law-video-counter{display:none}

            .law-video-dots{bottom:19px}

            .law-section-title{font-size:92px}

            .course-description{min-height:auto}

            .law-career-box{padding:35px 24px}

            .law-career-box h2{font-size:27px}

            .law-cta{padding:42px 20px}

            .law-cta h2{font-size:28px}
        }

        @media(max-width:575px){
            .law-hero{
                height:625px;
                min-height:625px;
            }

            .law-hero h1{font-size:34px}

            .law-hero-badge{
                font-size:11px;
                padding:9px 13px;
            }

            .law-hero-point{font-size:12px}

            .law-info-strip{margin-top:0}
        }

        @media(prefers-reduced-motion:reduce){
            html{scroll-behavior:auto}
            *,
            *:before,
            *:after{
                animation-duration:.01ms !important;
                animation-iteration-count:1 !important;
                transition-duration:.01ms !important;
            }
        }
    </style>

    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
        "@context":"https://schema.org",
        "@type":"Organization",
        "@id":"https://sseducationsfoundation.com/#organization",
        "name":"SS Education Foundation",
        "url":"https://sseducationsfoundation.com/",
        "logo":{
            "@type":"ImageObject",
            "url":"https://sseducationsfoundation.com/assets/images/logo.png"
        },
        "email":"info@sseducationsfoundation.com",
        "contactPoint":[
            {
                "@type":"ContactPoint",
                "telephone":"+91-7351786787",
                "contactType":"customer support"
            },
            {
                "@type":"ContactPoint",
                "telephone":"+91-9837785785",
                "contactType":"customer support"
            }
        ],
        "address":{
            "@type":"PostalAddress",
            "streetAddress":"A-24, First Floor, A Block, Wazirabad Road, Bhajanpura",
            "addressLocality":"New Mustafabad",
            "addressRegion":"Delhi",
            "postalCode":"110094",
            "addressCountry":"IN"
        }
    }
    </script>

    <!-- Website Schema -->
    <script type="application/ld+json">
    {
        "@context":"https://schema.org",
        "@type":"WebSite",
        "@id":"https://sseducationsfoundation.com/#website",
        "name":"SS Education Foundation",
        "url":"https://sseducationsfoundation.com/",
        "publisher":{
            "@id":"https://sseducationsfoundation.com/#organization"
        }
    }
    </script>

    <!-- Course Schema -->
    <script type="application/ld+json">
    {
        "@context":"https://schema.org",
        "@type":"ItemList",
        "name":"Law Programs - SS Education Foundation",
        "itemListElement":[
            {
                "@type":"ListItem",
                "position":1,
                "name":"B.A. LLB",
                "description":"Five-year integrated Bachelor of Arts and Bachelor of Laws program."
            },
            {
                "@type":"ListItem",
                "position":2,
                "name":"B.Com LLB",
                "description":"Five-year integrated Bachelor of Commerce and Bachelor of Laws program."
            },
            {
                "@type":"ListItem",
                "position":3,
                "name":"LLB",
                "description":"Bachelor of Laws professional law program."
            },
            {
                "@type":"ListItem",
                "position":4,
                "name":"LLM",
                "description":"Master of Laws postgraduate law program."
            }
        ]
    }
    </script>

</head>

<body>

<?php include 'include/header.php'; ?>

<!-- =========================================================
     HERO SECTION
========================================================= -->
<section class="law-hero" id="law-home">

    <div class="law-hero-slides">

        <!-- Video 1 -->
        <div class="law-hero-slide active">
            <video
                class="law-hero-video"
                autoplay
                muted
                playsinline
                preload="auto"
                poster="images/law.jpg">
                <source src="images/law-hero-1.mp4" type="video/mp4">
            </video>
        </div>

        <!-- Video 2 -->
        <div class="law-hero-slide">
            <video
                class="law-hero-video"
                muted
                playsinline
                preload="metadata"
                poster="images/law.jpg">
                <source src="images/law-hero-2.mp4" type="video/mp4">
            </video>
        </div>

        <!-- Video 3 -->
        <div class="law-hero-slide">
            <video
                class="law-hero-video"
                muted
                playsinline
                preload="metadata"
                poster="images/law.jpg">
                <source src="images/law-hero-3.mp4" type="video/mp4">
            </video>
        </div>

        <!-- Video 4 -->
        <div class="law-hero-slide">
            <video
                class="law-hero-video"
                muted
                playsinline
                preload="metadata"
                poster="images/law.jpg">
                <source src="images/law-hero-4.mp4" type="video/mp4">
            </video>
        </div>

    </div>

    <div class="law-hero-overlay"></div>

    <div class="container">
        <div class="row align-items-center h-100">

            <div class="col-lg-7">

                <div class="law-hero-content">

                    <div class="law-hero-badge">
                        <i class="fas fa-scale-balanced"></i>
                        Professional Law Programs
                    </div>

                    <h1 style="color:white">
                        Shape Your Future With
                        <span>Legal Education</span>
                    </h1>

                    <p class="law-hero-lead">
                        Explore professional law programs designed to build
                        legal knowledge, analytical thinking, communication
                        skills and a strong foundation for your legal career.
                    </p>

                    <div class="law-hero-actions">

                        <a href="#law-courses" class="law-btn law-btn-gold">
                            <i class="fas fa-book-open"></i>
                            Explore Law Courses
                        </a>

                        <a href="https://wa.me/917351786787" rel="noopener noreferrer" class="law-btn law-btn-outline ri-whatsapp-fill">
                         +917351786787 
                                       
                                    </li>
                        </a>

                    </div>

                    <div class="law-hero-points">

                        <div class="law-hero-point">
                            <i class="fas fa-circle-check"></i>
                            B.A. LLB
                        </div>

                        <div class="law-hero-point">
                            <i class="fas fa-circle-check"></i>
                            B.Com LLB
                        </div>

                        <div class="law-hero-point">
                            <i class="fas fa-circle-check"></i>
                            LLB
                        </div>

                        <div class="law-hero-point">
                            <i class="fas fa-circle-check"></i>
                            LLM
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-5 d-none d-lg-block">

                <div class="law-hero-panel">

                    <div class="law-orbit-icon law-orbit-1">
                        <i class="fas fa-scale-balanced"></i>
                    </div>

                    <div class="law-orbit-icon law-orbit-2">
                        <i class="fas fa-gavel"></i>
                    </div>

                    <div class="law-orbit-icon law-orbit-3">
                        <i class="fas fa-book"></i>
                    </div>

                    <div class="law-orbit-icon law-orbit-4">
                        <i class="fas fa-landmark"></i>
                    </div>

                    <div class="law-orbit-icon law-orbit-5">
                        <i class="fas fa-file-contract"></i>
                    </div>

                    <div class="law-center-icon">
                        <i class="fas fa-scale-balanced"></i>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="law-video-dots">
        <button class="law-video-dot active" type="button" data-law-slide="0" aria-label="Law hero video 1"></button>
        <button class="law-video-dot" type="button" data-law-slide="1" aria-label="Law hero video 2"></button>
        <button class="law-video-dot" type="button" data-law-slide="2" aria-label="Law hero video 3"></button>
        <button class="law-video-dot" type="button" data-law-slide="3" aria-label="Law hero video 4"></button>
    </div>

    <div class="law-video-counter">
        <strong id="lawCurrentVideo">01</strong> / 04
    </div>

</section>


<!-- =========================================================
     QUICK INFO
========================================================= -->
<section class="law-info-strip">
    <div class="container">

        <div class="law-info-box">

            <div class="row g-0">

                <div class="col-lg-3 col-md-6">
                    <div class="law-info-item">
                        <div class="law-info-icon">
                            <i class="fas fa-scale-balanced"></i>
                        </div>
                        <div>
                            <strong>Law Programs</strong>
                            <span>Professional pathways</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="law-info-item">
                        <div class="law-info-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div>
                            <strong>Career Focused</strong>
                            <span>Goal-oriented guidance</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="law-info-item">
                        <div class="law-info-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div>
                            <strong>Student Support</strong>
                            <span>Admission assistance</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="law-info-item">
                        <div class="law-info-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div>
                            <strong>Enquiry Support</strong>
                            <span>Connect with our team</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>


<!-- =========================================================
     LAW COURSES
========================================================= -->
<section class="law-section law-section-light" id="law-courses">

    <div class="container">

        <div class="law-section-heading">

            <span class="law-badge">
                <i class="fas fa-scale-balanced"></i>
                Law Program
            </span>

            <h2 class="law-section-title">
                Choose Your Law Program
            </h2>

            <p class="law-section-description">
                Explore professional law programs designed to develop
                strong legal knowledge, analytical skills and a successful
                career in the field of law.
            </p>

        </div>


        <div class="row g-4">

            <!-- B.A. LLB -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-card">

                    <div class="course-card-body">

                        <div class="course-icon">
                            <i class="fas fa-scale-balanced"></i>
                        </div>

                        <h3 class="course-title">B.A. LLB</h3>

                        <span class="course-duration">
                            <i class="far fa-clock"></i>
                            5 Years
                        </span>

                        <p class="course-description">
                            Integrated Bachelor of Arts and Bachelor of Laws
                            program designed for students who want to build
                            a strong foundation in humanities and legal studies.
                        </p>

                        <a href="contact.php" class="course-btn">
                            Enquire Now
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </div>
            </div>


            <!-- B.Com LLB -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-card">

                    <div class="course-card-body">

                        <div class="course-icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>

                        <h3 class="course-title">B.Com LLB</h3>

                        <span class="course-duration">
                            <i class="far fa-clock"></i>
                            5 Years
                        </span>

                        <p class="course-description">
                            Integrated Bachelor of Commerce and Bachelor of
                            Laws program combining commerce, business and
                            professional legal education.
                        </p>

                        <a href="contact.php" class="course-btn">
                            Enquire Now
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </div>
            </div>


            <!-- LLB -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-card">

                    <div class="course-card-body">

                        <div class="course-icon">
                            <i class="fas fa-gavel"></i>
                        </div>

                        <h3 class="course-title">LLB</h3>

                        <span class="course-duration">
                            <i class="fas fa-graduation-cap"></i>
                            Bachelor of Laws
                        </span>

                        <p class="course-description">
                            Professional Bachelor of Laws program covering
                            fundamental legal principles, legal procedures,
                            legal research and practical aspects of law.
                        </p>

                        <a href="contact.php" class="course-btn">
                            Enquire Now
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </div>
            </div>


            <!-- LLM -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-card">

                    <div class="course-card-body">

                        <div class="course-icon">
                            <i class="fas fa-landmark"></i>
                        </div>

                        <h3 class="course-title">LLM</h3>

                        <span class="course-duration">
                            <i class="fas fa-graduation-cap"></i>
                            Master of Laws
                        </span>

                        <p class="course-description">
                            Advanced postgraduate law program for students
                            seeking deeper knowledge and specialization in
                            different areas of legal studies.
                        </p>

                        <a href="contact.php" class="course-btn">
                            Enquire Now
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </div>
            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     WHY CHOOSE LAW
========================================================= -->
<section class="law-section">

    <div class="container">

        <div class="law-section-heading">

            <span class="law-badge">
                <i class="fas fa-star"></i>
                Why Choose Law
            </span>

            <h2 class="law-section-title">
                Build Skills That Matter
            </h2>

            <p class="law-section-description">
                A strong legal education can help develop analytical thinking,
                communication, research and professional decision-making skills.
            </p>

        </div>


        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="law-feature-card">
                    <div class="law-feature-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Analytical Thinking</h3>
                    <p>
                        Develop the ability to examine information,
                        understand legal issues and think logically.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="law-feature-card">
                    <div class="law-feature-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Communication Skills</h3>
                    <p>
                        Strengthen professional communication,
                        presentation and argument-building skills.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="law-feature-card">
                    <div class="law-feature-icon">
                        <i class="fas fa-magnifying-glass"></i>
                    </div>
                    <h3>Legal Research</h3>
                    <p>
                        Learn structured research approaches for legal
                        information, cases and academic work.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="law-feature-card">
                    <div class="law-feature-icon">
                        <i class="fas fa-people-group"></i>
                    </div>
                    <h3>Professional Development</h3>
                    <p>
                        Build professional habits and confidence for
                        future academic and career opportunities.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="law-feature-card">
                    <div class="law-feature-icon">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <h3>Practical Understanding</h3>
                    <p>
                        Connect academic concepts with practical legal
                        procedures and professional environments.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="law-feature-card">
                    <div class="law-feature-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Career Preparation</h3>
                    <p>
                        Explore possible legal career directions and
                        plan your education around your long-term goals.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     CAREER OPPORTUNITIES
========================================================= -->
<section class="law-section law-section-light">

    <div class="container">

        <div class="law-career-box">

            <div class="row align-items-center g-4">

                <div class="col-lg-7">

                    <span class="law-badge">
                        <i class="fas fa-briefcase"></i>
                        Career Directions
                    </span>

                    <h2 class="mt-3">
                        Explore Your Legal Career Path
                    </h2>

                    <p>
                        Legal education can open doors to a range of
                        professional directions. Your exact career path
                        depends on your qualifications, skills, interests
                        and applicable professional requirements.
                    </p>

                    <a href="contact.php" class="law-btn law-btn-gold">
                        <i class="fas fa-compass"></i>
                        Discuss Your Career
                    </a>

                </div>

                <div class="col-lg-5">

                    <ul class="career-list">

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Legal Practice
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Legal Research
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Corporate Legal Roles
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Legal Consultancy
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Compliance
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Legal Academics
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Public Sector Paths
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Further Legal Studies
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     FAQ
========================================================= -->
<section class="law-section law-faq">

    <div class="container">

        <div class="law-section-heading">

            <span class="law-badge">
                <i class="fas fa-circle-question"></i>
                FAQ
            </span>

            <h2 class="law-section-title">
                Frequently Asked Questions
            </h2>

            <p class="law-section-description">
                Some common questions students ask about our Law Programs.
            </p>

        </div>


        <div class="accordion" id="lawFaq">

            <div class="accordion-item">

                <h3 class="accordion-header">

                    <button
                        class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#lawFaqOne">

                        What Law Programs are available?

                    </button>

                </h3>

                <div
                    id="lawFaqOne"
                    class="accordion-collapse collapse show"
                    data-bs-parent="#lawFaq">

                    <div class="accordion-body">

                        The listed Law Programs are B.A. LLB, B.Com LLB,
                        LLB and LLM.

                    </div>

                </div>

            </div>


            <div class="accordion-item">

                <h3 class="accordion-header">

                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#lawFaqTwo">

                        What is the duration of B.A. LLB and B.Com LLB?

                    </button>

                </h3>

                <div
                    id="lawFaqTwo"
                    class="accordion-collapse collapse"
                    data-bs-parent="#lawFaq">

                    <div class="accordion-body">

                        The course information provided on this page lists
                        both B.A. LLB and B.Com LLB as five-year programs.

                    </div>

                </div>

            </div>


            <div class="accordion-item">

                <h3 class="accordion-header">

                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#lawFaqThree">

                        How can I enquire about admission?

                    </button>

                </h3>

                <div
                    id="lawFaqThree"
                    class="accordion-collapse collapse"
                    data-bs-parent="#lawFaq">

                    <div class="accordion-body">

                        Click any “Enquire Now” or “Contact Us” button
                        on this page to contact the SS Education Foundation
                        team.

                    </div>

                </div>

            </div>


            <div class="accordion-item">

                <h3 class="accordion-header">

                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#lawFaqFour">

                        Is LLM a postgraduate Law Program?

                    </button>

                </h3>

                <div
                    id="lawFaqFour"
                    class="accordion-collapse collapse"
                    data-bs-parent="#lawFaq">

                    <div class="accordion-body">

                        Yes. LLM is presented on this page as a Master of
                        Laws postgraduate program.

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     FINAL CTA
========================================================= -->
<section class="law-section law-section-light pt-0">

    <div class="container">

        <div class="law-cta">

            <div class="law-cta-icon">
                <i class="fas fa-scale-balanced"></i>
            </div>

            <h2>
                Start Your Legal Career Today
            </h2>

            <p>
                Explore our Law Programs and take the next step toward
                your academic and professional goals.
            </p>

            <a href="contact.php" class="law-btn law-btn-gold">
                <i class="fas fa-phone-volume"></i>
                Contact SS Education Foundation
            </a>

        </div>

    </div>

</section>


<?php include 'include/footer.php'; ?>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<!-- =========================================================
     LAW HERO VIDEO SLIDER JS
========================================================= -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const slides = Array.from(
        document.querySelectorAll(".law-hero-slide")
    );

    const dots = Array.from(
        document.querySelectorAll(".law-video-dot")
    );

    const counter = document.getElementById("lawCurrentVideo");

    let current = 0;
    let timer = null;
    const interval = 7000;


    function stopAllVideos(){

        slides.forEach(function(slide){

            const video =
                slide.querySelector("video");

            if(video){

                video.pause();

            }

        });

    }


    function playCurrentVideo(){

        const video =
            slides[current].querySelector("video");

        if(!video) return;

        video.currentTime = 0;

        const playPromise =
            video.play();

        if(playPromise !== undefined){

            playPromise.catch(function(){

                /*
                 * Browser autoplay restrictions can prevent
                 * playback. Videos are already muted, so most
                 * modern browsers allow autoplay.
                 */

            });

        }

    }


    function showSlide(index){

        current =
            (index + slides.length)
            % slides.length;

        stopAllVideos();

        slides.forEach(function(slide, i){

            slide.classList.toggle(
                "active",
                i === current
            );

        });

        dots.forEach(function(dot, i){

            dot.classList.toggle(
                "active",
                i === current
            );

        });

        if(counter){

            counter.textContent =
                String(current + 1).padStart(2, "0");

        }

        playCurrentVideo();

    }


    function nextSlide(){

        showSlide(current + 1);

        restartTimer();

    }


    function restartTimer(){

        clearTimeout(timer);

        timer = setTimeout(
            nextSlide,
            interval
        );

    }


    dots.forEach(function(dot, index){

        dot.addEventListener(
            "click",
            function(){

                showSlide(index);

                restartTimer();

            }
        );

    });


    slides.forEach(function(slide, index){

        const video =
            slide.querySelector("video");

        if(!video) return;


        video.addEventListener(
            "ended",
            function(){

                if(index === current){

                    nextSlide();

                }

            }
        );


        video.addEventListener(
            "error",
            function(){

                /*
                 * If one MP4 is missing, automatically move
                 * to the next slide. The poster image remains
                 * visible behind the video.
                 */

                if(index === current){

                    nextSlide();

                }

            }
        );

    });


    showSlide(0);

    restartTimer();


    /*
     * Pause hero video when browser tab is hidden
     * to save bandwidth and CPU.
     */

    document.addEventListener(
        "visibilitychange",
        function(){

            if(document.hidden){

                stopAllVideos();

                clearTimeout(timer);

            }
            else{

                playCurrentVideo();

                restartTimer();

            }

        }
    );

});
</script>


<!-- =========================================================
     OPTIONAL WHATSAPP BUTTON
========================================================= -->
<a
    href="https://wa.me/917351786787"
    class="law-whatsapp"
    target="_blank"
    rel="noopener"
    aria-label="Chat on WhatsApp">

    <i class="fab fa-whatsapp"></i>

</a>

</body>
</html>
