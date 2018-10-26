<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/customer.css">
</head>
<body class="sub customer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>

    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <h2>CUSTOMER COMPANY</h2>
            <p>미래를 여는 기업 아진엑스텍입니다.</p>
        </div>
    </div>

    <!-- snb-list -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/customer/_snb_list.php'); ?>
    
    <!-- Content -->
    <main id="content">
        <div class="container">
            <section class="solution">
                <div class="section-header">
                    <h3 class="section-title">솔루션</h3>
                </div>
                <div class="section-content">
                    <nav class="solution-tabs">
                        <ul>
                            <li><a href="/mobile/customer/solution01.php">반도체 전공정</a></li>
                            <li><a href="/mobile/customer/solution02.php">반도체 후공정</a></li>
                            <li><a href="/mobile/customer/solution03.php">가동기</a></li>
                            <li><a href="/mobile/customer/solution04.php">태양광</a></li>
                            <li><a href="/mobile/customer/solution05.php">PCB / 전자산업</a></li>
                            <li><a href="/mobile/customer/solution06.php">FPD</a></li>
                            <li class="active"><a href="/mobile/customer/solution07.php">LED 후공정</a></li>
                        </ul>
                    </nav>
                    <ul class="solution-list">
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product24.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>LED Tester</h4>
                                    <p>LED의 전기적 광학적 특성을 측정 검사하며, 분류를 동시 수행하는 장비</p>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>