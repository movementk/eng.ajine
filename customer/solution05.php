<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body class="sub customer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    
    <!-- page-header -->
    <div class="page-header">
        <div class="bg-backdrop"></div>
        <div class="container">
            <div class="page-summary">
                <div class="v-align">
                    <h2>CUSTOMER SERVICE</h2>
                    <p>미래를 여는 기업 아진엑스텍입니다</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- lnb -->
    <nav id="lnb">
        <div class="container">
            <ul class="lnb-list">
                <li><a href="/customer/download.php">다운로드</a></li>
                <li><a href="/customer/qna_list.php">Q&amp;A</a></li>
                <li><a href="/customer/faq_list.php">FAQ</a></li>
                <li><a href="/customer/request_list.php">견적요청</a></li>
                <li><a href="/customer/agency.php">대리점</a></li>
                <li><a href="/customer/technical_terms.php">기술용어</a></li>
                <li class="active"><a href="/customer/solution01.php">솔루션</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="solution">
                <div class="section-header">
                    <h3>솔루션</h3>
                    <p>(주)아진엑스텍은 새로운 제어 패러다임을 열어갑니다.</p>
                </div>
                <div class="section-content">
                    <nav class="solution-tabs">
                        <ul>
                            <li><a href="/customer/solution01.php">반도체공정 분야</a></li>
                            <li><a href="/customer/solution02.php">반도체 후공정 분야</a></li>
                            <li><a href="/customer/solution03.php">가공기 분야</a></li>
                            <li><a href="/customer/solution04.php">태양광 분야</a></li>
                            <li class="active"><a href="/customer/solution05.php">PCB/전자산업 분야</a></li>
                            <li><a href="/customer/solution06.php">FPD 분야</a></li>
                            <li><a href="/customer/solution07.php">LED 후공정 분야</a></li>
                        </ul>
                    </nav>
                    <article class="solution-list">
                        <ul class="row">
                            <li class="col-6">
                                <div class="solution-products">
                                    <div class="details">
                                        <small>SOLUTION AREA</small>
                                        <h4>SCREEN PRINTER</h4>
                                        <p>인쇄회로기판(PCB)에 부품을 장착하기전 솔더 크림을 다양한 Mask를 사용하여 정밀하게도포 하는 장비</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product15.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                            <li class="col-6">
                                <div class="solution-products">
                                    <div class="details">
                                        <small>SOLUTION AREA</small>
                                        <h4>LCD SORTER</h4>
                                        <p>다양한 종류의 LED들에 대해서 자동으로 Die sorting 하는 장비로서 Wafer에서 Led Chip을 집어 측정/검사하여 사용자가 미리 설정한 조건에 따라 해당 Bin으로 보내는 장비.</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product16.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                            <li class="col-6">
                                <div class="solution-products">
                                    <div class="details">
                                        <small>SOLUTION AREA</small>
                                        <h4>PCB INSPECTION</h4>
                                        <p>PCB 생산라인에서 부품을 장착하고 납땜이 완성된 이후에 부품의 장착 상태와 납땝 상태를 자동으로 검사하여 불량을 찾아내며, 부가적으로 생산 공정상의 각종 통계 자료를 제공함으로써 불량의 내용과 원인을 명확하게 파악하도록 지원하는 장비</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product17.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                            <li class="col-6">
                                <div class="solution-products">
                                    <div class="details">
                                        <small>SOLUTION AREA</small>
                                        <h4>RFID CHIP BONDER</h4>
                                        <p>RFID Antenna에 Chip을 접착하는 방식이며,많은 Bonding방법중의 하나로써 응용 발전된초박형, 경량화로 인해 접속 피치의 미세화에 대응하는 새로운 실장방식의 장비</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product18.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                            <li class="col-6">
                                <div class="solution-products">
                                    <div class="details">
                                        <small>SOLUTION AREA</small>
                                        <h4>LENS INSPECTION</h4>
                                        <p>휴대폰용 COF타입 카메라 모듈의 제조 공정중 Flexible PCB를 부착한 후의 회로 연결상태 및 초점 조정상태를 테스트 하는 장비</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product19.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                        </ul>
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