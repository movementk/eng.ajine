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
                <li><a href="/introduction/vision.php">Vision</a></li>
                <li class="active"><a href="/introduction/group.php">Organization chart</a></li>
                <li><a href="/introduction/news_list.php">AJIN News</a></li>
                <li><a href="/introduction/location.php">Directions</a></li>
                <li><a href="/introduction/ci.php">About CI</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content" class="space-content">
        <section class="group">
            <div class="container">
                <div class="section-header">
                    <h3>Organization chart</h3>
                </div>
                <div class="section-content">
                    <figure>
                        <img src="/assets/images/introduction/img_group.png" alt="">
                    </figure>
                </div>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
    <script type="text/javascript" src="/assets/js/sub.js"></script>
</body>
</html>