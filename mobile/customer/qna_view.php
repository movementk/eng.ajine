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
            <section class="qna-view">
                <div class="section-header">
                    <h3 class="section-title">Q&amp;A</h3>
                </div>
                <div class="section-content">
                    <div class="board-view">
                        <div class="view-head">
                            <h4>게시판 제목</h4>
                            <ul>
                                <li>
                                    <dl>
                                        <dt>등록일</dt>
                                        <dd>2017-08-05</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>조회수</dt>
                                        <dd>27</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>작성자</dt>
                                        <dd>이상철</dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                        <div class="view-body">
                            게시판 상세 내용<br>
                            게시판 상세 내용
                        </div>
                        <div class="attach">
                            <dl>
                                <dt>첨부파일</dt>
                                <dd>
                                    <a href="#">1txt.jpg</a>
                                    <a href="#">1txt.jpg</a>
                                    <a href="#">1txt.jpg</a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-white" role="button">수정하기</a>
                            <a href="#" class="btn btn-sm btn-white" role="button">삭제하기</a>
                            <a href="/mobile/customer/qna_list.php" class="btn btn-sm btn-blue" role="button">목록보기</a>
                        </p>
                    </div>
                    <div class="pagelink">
                        <ol>
                            <li class="prev">
                                <dl>
                                    <dt>이전글</dt>
                                    <dd><a href="#">멀티링크 문의드립니다.</a></dd>
                                </dl>
                            </li>
                            <li class="next">
                                <dl>
                                    <dt>다음글</dt>
                                    <dd><a href="#">문의 드립니다</a></dd>
                                </dl>
                            </li>
                        </ol>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>