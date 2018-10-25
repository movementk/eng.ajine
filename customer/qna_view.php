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
                <li class="active"><a href="/customer/qna_list.php">Q&amp;A</a></li>
                <li><a href="/customer/faq_list.php">FAQ</a></li>
                <li><a href="/customer/request_list.php">견적요청</a></li>
                <li><a href="/customer/agency.php">대리점</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="qna-view">
                <div class="section-header">
                    <h3>Q&amp;A</h3>
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
                                <p>
                               		질문 내용이 노출되는 영역입니다.<br>
									질문 내용이 노출되는 영역입니다.<br>
									질문 내용이 노출되는 영역입니다.<br>
									질문 내용이 노출되는 영역입니다.<br>
									질문 내용이 노출되는 영역입니다.<br>
									질문 내용이 노출되는 영역입니다.
                                </p>
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
                                <a href="/customer/qna_list.php" class="btn btn-lg btn-blue" role="button">목록으로</a>
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