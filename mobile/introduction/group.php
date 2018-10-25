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
        <div class="container">
            <section class="group">
                <div class="section-header">
                    <h3 class="section-title">조직도</h3>
                </div>
                <div class="section-content">
                    <figure>
                        <img src="/mobile/assets/images/introduction/img_group.jpg" class="img-fluid" alt="">
                        <figcaption class="sr-only">
                            <ol>
                                <li>
                                    <h1>대표이사</h1>
                                    <ul>
                                        <li><h2>감사</h2></li>
                                        <li>
                                            <h2>COO</h2>
                                            <ul>
                                                <li>
                                                    <h3>연구개발</h3>
                                                    <ul>
                                                        <li>개발 1팀</li>
                                                        <li>개발 2팀</li>
                                                        <li>개발 3팀</li>
                                                        <li>개발 4팀</li>
                                                        <li>개발 5팀</li>    
                                                        <li>시스템설계팀</li>    
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h3>영업 고객지원</h3>
                                                    <ul>
                                                        <li>영업1팀</li>
                                                        <li>영업2팀</li>
                                                        <li>영업3팀</li>
                                                        <li>기술지원팀</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h3>제조기술</h3>
                                                    <ul>
                                                        <li>생산관리팀</li>
                                                        <li>생샌기술팀</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h3>품질경영</h3>
                                                    <ul>
                                                        <li>QM5 Part</li>
                                                        <li>QC Part</li>
                                                        <li>SE Part</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h3>경영지원</h3>
                                                    <ul>
                                                        <li>인사총무팀</li>
                                                        <li>재무회계팀</li>
                                                        <li>구매팀</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><h2>이사회</h2></li>
                                    </ul>
                                </li>
                            </ol>
                        </figcaption>
                    </figure>
                </div>
            </section>
        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>