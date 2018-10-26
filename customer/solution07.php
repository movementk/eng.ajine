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
            <section class="solution space">
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
                            <li><a href="/customer/solution05.php">PCB/전자산업 분야</a></li>
                            <li><a href="/customer/solution06.php">FPD 분야</a></li>
                            <li class="active"><a href="/customer/solution07.php">LED 후공정 분야</a></li>
                        </ul>
                    </nav>
                    <article class="solution-list">
                        <ul class="row">
                            <li class="col-6">
                                <div class="solution-products">
                                    <div class="details">
                                        <small>SOLUTION AREA</small>
                                        <h4>LED Tester</h4>
                                        <p>LED의 전기적 광학적 특성을 측정 검사하며, 분류를 동시 수행하는 장비</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product24.jpg" alt="">
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