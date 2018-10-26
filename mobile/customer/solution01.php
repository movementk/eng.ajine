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
                            <li class="active"><a href="/mobile/customer/solution01.php">반도체 전공정</a></li>
                            <li><a href="/mobile/customer/solution02.php">반도체 후공정</a></li>
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
                                <img src="/mobile/assets/images/customer/solution_product01.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>SPINNER</h4>
                                    <p>회전척상에 반도체 Wafer를 안착한 후 회전하는 Wafer상에 화학물질을 떨어뜨려 상기 화학물질이 고르게 공급되도록 하는 장비</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product02.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>SCRUBBER</h4>
                                    <p>브러쉬, 초음파, 고압 약품 그리고 순수를 사용하여 Wafer 위의 이물질을 제거하거나 거친 면을 고르게하는 장비</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product03.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>WTR</h4>
                                    <p>Wafer Transfer Robot은 반도체 제조 장비에 설치되어 로봇의 전후 혹은 좌우 등으로 Wafer 이송을 담당하는 로봇</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product04.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>WAFER FURNACE</h4>
                                    <p>반도체 확산 공정에서 사용되는 장비로 고온의 전기로를 이용하여 고체 상태의 Wafer 표면 위에 필요한 불순물을 주입시키거나 산화막을 만드는 장비</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product05.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>PROBE STATION</h4>
                                    <p>Wafer Chip의 전기적 특성을 검사하는 반도체 전공정 핵심 검사 장비로 반도체 칩 안의 패드에 미세한 바늘을 접촉시킨 후 검사기의 전기적 신호로 칩의 양품/불량을 검사하는 장비</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product06.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>WAFER TRACK</h4>
                                    <p>반도체 포토 공정에 사용되는 설비로 Wafer 표면에 고집도 미세회로를 생성하기 위해 감광액을 도포하고, 현상 시키는 장비</p>
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