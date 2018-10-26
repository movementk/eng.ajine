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
                            <li class="active"><a href="/mobile/customer/solution04.php">태양광</a></li>
                            <li><a href="/mobile/customer/solution05.php">PCB / 전자산업</a></li>
                            <li><a href="/mobile/customer/solution06.php">FPD</a></li>
                            <li><a href="/mobile/customer/solution07.php">LED 후공정</a></li>
                        </ul>
                    </nav>
                    <ul class="solution-list">
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product13.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>CVD</h4>
                                    <p>열화학 반응으로 기체를 고체로 합성하는 것을 CVD(Chemical Vapor Deposition)라 말하며 증착법에 따라 4가지로 분류됨</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product14.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>SOLAR CELL</h4>
                                    <p>Wafer제조공정의 완제품 품질 검사 및 태양전지 제조 공정의 Wafer입수 품질 검사에 사용되는 설비로 Wafer의 저항, 두께, 수명, 크기 등이나 이물질 또는 Micro crack에 대한 정보를 자동으로 검사하여 품질 정도에 따른 자동 분류를 하는 장비</p>
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