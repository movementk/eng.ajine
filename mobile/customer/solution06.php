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
                            <li class="active"><a href="/mobile/customer/solution06.php">FPD</a></li>
                            <li><a href="/mobile/customer/solution07.php">LED 후공정</a></li>
                        </ul>
                    </nav>
                    <ul class="solution-list">
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product20.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>COG(Chip On Glass)/FOG(Film On Glass)BONDER</h4>
                                    <p>Glass Panel에 Bare Die(IC)를 접착하는 방식이며, 많은 Bonding방법중의 하나로써 응용발전된 초박형, 경량화로 인해 접속 피치의미세화에 대응하는 새로운 실장방식, 즉 LCD의 Panel위에 ACF를 부착하고 BumpedIC에 일정한 압력과 온도로 Bonding하는 장비임</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product21.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>LTR</h4>
                                    <p>LTR(LCD Transfer Robot)로봇은 LCD생산라인에서 사용되는 것으로, LCD생산 프로세스 중유리원판(Mother Glass)을 이동하는 과정에서발생할 수 있는 “휨 현상”을 차단하는 이송용 로봇임</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product22.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>LCD PIXEL INSPECTION</h4>
                                    <p>Glass 표면위에 있는 불 특정한 결함, 얼룩을Vision System과 Image Process기술을 응용 하여 검출하여 결함정보를 자동으로 분류 하고판정하는 검사장비</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/customer/solution_product23.jpg" class="img-fluid" alt="">
                                <figcaption>
                                    <h4>COF INSPECTION</h4>
                                    <p>Film상의 회로를 보호하기 위해 커버 필름을 Sheet타입으로 절단, 비젼 시스템으로 위치추적 후 정밀 위치 보정하여 베이스 필름 상에 부착 및 라미네이팅 하는 장비</p>
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