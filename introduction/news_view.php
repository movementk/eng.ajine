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
                    <p>미래를 여는 기업 아진엑스텍입니다</p>
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
                <li><a href="/introduction/group.php">Organization chart</a></li>
                <li class="active"><a href="/introduction/news_list.php">AJIN News</a></li>
                <li><a href="/introduction/location.php">Way to come</a></li>
                <li><a href="/introduction/ci.php">About CI</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="news-view">
                <div class="section-header">
                    <h3>AJIN News</h3>
                </div>
                <div class="section-content">
                    <article class="view-content">
                        <div class="board-view">
                            <div class="view-head">
                                <h4>Q&amp;A 제목이 노출되는 영역입니다. Q&amp;A 제목이 노출되는 영역입니다.</h4>
                                <ul>
                                    <li class="user">홍길동</li>
                                    <li>2018-01-01</li>
                                    <li>123</li>
                                </ul>
                            </div>
                            <div class="view-body">
                                질문 내용이 노출되는 영역입니다.<br>
                                질문 내용이 노출되는 영역입니다.<br>
                                질문 내용이 노출되는 영역입니다.<br>
                                질문 내용이 노출되는 영역입니다.<br>
                                질문 내용이 노출되는 영역입니다.<br>
                                질문 내용이 노출되는 영역입니다.
                            </div>
                            <dl class="attach">
                                <dt>첨부파일</dt>
                                <dd>
                                    <a href="#">첨부파일1.jpg</a>
                                    <a href="#">첨부파일2.jpg</a>
                                </dd>
                            </dl>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-lg btn-white" role="button">수정하기</a>
                                <a href="#" class="btn btn-lg btn-white" role="button">삭제하기</a>
                                <a href="/introduction/news_list.php" class="btn btn-lg btn-blue" role="button">목록보기</a>
                            </p>
                        </div>
                        <ul class="page-link-area">
                            <li class="prev">
                                <dl>
                                    <dt>이전글</dt>
                                    <dd><a href="#">이전글 제목이 노출되는 영역입니다.</a></dd>
                                </dl>
                            </li>
                            <li class="next">
                                <dl>
                                    <dt>다음글</dt>
                                    <dd><a href="#">다음글 제목이 노출되는 영역입니다.</a></dd>
                                </dl>
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