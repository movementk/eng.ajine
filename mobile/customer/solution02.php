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
                            <li class="active"><a href="/mobile/customer/solution02.php">반도체 후공정</a></li>
                            <li><a href="/mobile/customer/solution03.php">가동기</a></li>
                            <li><a href="/mobile/customer/solution04.php">태양광</a></li>
                            <li><a href="/mobile/customer/solution05.php">PCB / 전자산업</a></li>
                            <li><a href="/mobile/customer/solution06.php">FPD</a></li>
                            <li><a href="/mobile/customer/solution07.php">LED 후공정</a></li>
                        </ul>
                    </nav>
                    <ul class="solution-list">
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product07.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>SAW &amp; SORTER</h4>
                                    <p>몰딩된 자재를 Vacuum Jig로 잡고 절단한 후 Cleanning, Dry하여 Vision 검사를 통한 양품 또는 불량품을 각각의 Tray 또는 Tube에 고속으로 적재시키는 장비</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product08.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>MEMORY HANDLER</h4>
                                    <p>Module Memory 생산 공정에서 필요한 핸들러 일체형 구조의 전용 외관 검사 장비로 2D, 3D 검사 및 기판의 양면 검사가 동시에 가능한 장비</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product09.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>LASER MARKING</h4>
                                    <p>Laser Marking Head를 장착하여 반도체 패키지 윗면에 문자 또는 로고를 Marking하는 장비로서 여러 종류의 LeadFrame을 자동으로 Loading, Feeding, Unloading, Inspection을 수행하는 핸들러 시스템</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product10.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>BALL BUMPING M/C</h4>
                                    <p>BGA 또는 CSP계열 패키지의 회로기판 혹은 Wafer 위에 Solder ball을 부착시키는 장비</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product11.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>CHIP INSPECTION</h4>
                                    <p>소형 부품의 외관에 발생하는 다양한 불량 유형들에 대하여 고속, 정밀하게 검사하는 장비</p>
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