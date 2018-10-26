<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/introduction.css">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>

    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <h2>COMPANY</h2>
            <p>미래를 여는 기업 아진엑스텍입니다.</p>
        </div>
    </div>

    <!-- snb-list -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/introduction/_snb_list.php'); ?>
    
    <!-- Content -->
    <main id="content" class="introduction">
        <section class="vision">
            <div class="section-header">
                <h3 class="section-title">Vision</h3>
            </div>
            <div class="section-content">
                <article class="global-provider">
                    <div class="container">
                        <div class="article-header">
                            <h4>Beyond Mecha<span>tronics,</span> Toward Mecha<span>Robotopia</span></h4>
                            <p>
                                <img src="/mobile/assets/images/introduction/img_summary_txt.png" alt="">
                            </p>
                        </div>
                        <div class="article-content">
                            <ul>
                                <li>
                                    <figure>
                                        <img src="/mobile/assets/images/introduction/img_vision01.png" alt="">
                                        <figcaption>Mechatronics<br>Part and material</figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/mobile/assets/images/introduction/img_vision02.png" alt="">
                                        <figcaption>Robotics<br>Part and material</figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/mobile/assets/images/introduction/img_vision03.png" alt="">
                                        <figcaption>Highend 모션제어<br>Core Technology</figcaption>
                                    </figure>
                                </li>
                            </ul>
                            <div class="summary">
                                <h6>Cutting edge company in Mecha <span>Robotronics</span> Parts Materials</h6>
                                <p><b>No.1</b> in Korea for Motion Control Automation</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>