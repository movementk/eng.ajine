<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introduction.css">
</head>
<body class="sub introduction">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    
    <!-- page-header -->
    <div class="page-header">
        <div class="bg-backdrop"></div>
        <div class="container">
            <div class="page-summary">
                <div class="v-align">
                    <h2>COMPANY</h2>
                    <p>미래를 여는 기업 ajinextek입니다</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- lnb -->
    <nav id="lnb">
        <div class="container">
            <ul class="lnb-list">
                <li><a href="/introduction/introduce.php">About Us</a></li>
                <li><a href="/introduction/history.php">History</a></li>
                <li class="active"><a href="/introduction/vision.php">Vision</a></li>
                <li><a href="/introduction/group.php">Organization chart</a></li>
                <li><a href="/introduction/news_list.php">AJIN News</a></li>
                <li><a href="/introduction/location.php">Directions</a></li>
                <li><a href="/introduction/ci.php">About CI</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="vision">
                <div class="section-header">
                    <h3>Vision</h3>
                </div>
                <div class="section-content">
                    <article class="global-provider">
                        <div class="article-header">
                            <h4>Beyond Mecha<span>tronics,</span>Toward Mecha<span>Robotopia</span></h4>
                            <dl>
                                <dt>
                                    <span>
                                        lim
                                        <small>
                                            dream <i class="icon-right-thin"></i> ∞
                                        </small>
                                    </span>
                                    f (<img src="/assets/images/introduction/logo_axt.png" alt="">)
                                </dt>
                                <dd>
                                    Mecha<span>Robotopia;</span> Our Future will be <span>Unlimited</span>
                                </dd>
                            </dl>
                        </div>
                        <div class="article-content">
                            <ul>
                                <li>
                                    <figure>
                                        <img src="/assets/images/introduction/icon_vision01.png" alt="">
                                        <figcaption>Mechatronics<br>Part and material</figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/assets/images/introduction/icon_vision02.png" alt="">
                                        <figcaption>Robotics<br>Part and material</figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/assets/images/introduction/icon_vision03.png" alt="">
                                        <figcaption>Highend Motion control<br>Core Technology</figcaption>
                                    </figure>
                                </li>
                            </ul>
                            <div class="summary">
                                <h5>Cutting edge company in Mecha<span>Robotronics</span> Parts Materials</h5>
                                <p><b>No.1</b> in Korea for Motion Control Automation</p>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
    <script type="text/javascript" src="/assets/js/sub.js"></script>
</body>
</html>