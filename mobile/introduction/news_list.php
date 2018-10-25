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
            <section class="news-list">
                <div class="section-header">
                    <h3 class="section-title">아진소식</h3>
                </div>
                <div class="section-content">
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>전체</option>
                                </select>
                                <input type="text" id="default-search" class="form-control">
                                <label for="default-search" class="sr-only">검색영역</label>
                                <button type="submit" class="btn default-search">
                                    <i class="icon-search">
                                        <span class="sr-only">검색버튼</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="default-board">
                        <ul>
                            <li>
                                <a href="/mobile/introduction/news_view.php">
                                    <h4>감사보고서 (2015.12)</h4>
                                    <dl>
                                        <dt>등록일</dt>
                                        <dd>2017-08-05</dd>
                                        <dt>제출의무자</dt>
                                        <dd>금융감독원</dd>
                                    </dl>
                                </a>
                            </li>
                            <li>
                                <a href="/mobile/introduction/news_view.php">
                                    <h4>감사보고서 (2015.12)</h4>
                                    <dl>
                                        <dt>등록일</dt>
                                        <dd>2017-08-05</dd>
                                        <dt>제출의무자</dt>
                                        <dd>금융감독원</dd>
                                    </dl>
                                </a>
                            </li>
                            <li>
                                <a href="/mobile/introduction/news_view.php">
                                    <h4>감사보고서 (2015.12)</h4>
                                    <dl>
                                        <dt>등록일</dt>
                                        <dd>2017-08-05</dd>
                                        <dt>제출의무자</dt>
                                        <dd>금융감독원</dd>
                                    </dl>
                                </a>
                            </li>
                            <li>
                                <a href="/mobile/introduction/news_view.php">
                                    <h4>감사보고서 (2015.12)</h4>
                                    <dl>
                                        <dt>등록일</dt>
                                        <dd>2017-08-05</dd>
                                        <dt>제출의무자</dt>
                                        <dd>금융감독원</dd>
                                    </dl>
                                </a>
                            </li>
                            <li>
                                <a href="/mobile/introduction/news_view.php">
                                    <h4>감사보고서 (2015.12)</h4>
                                    <dl>
                                        <dt>등록일</dt>
                                        <dd>2017-08-05</dd>
                                        <dt>제출의무자</dt>
                                        <dd>금융감독원</dd>
                                    </dl>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="first">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left">
                                        <span class="sr-only">first</span>
                                    </i>
                                </a>
                            </li>
                            <li class="prev">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="icon-angle-left">
                                        <span class="sr-only">Previous</span>
                                    </i>
                                </a>
                            </li>
                            <li class="active"><a class="page-link" href="#">1 <span></span></a></li>
                            <li><a class="page-link" href="#">2 <span></span></a></li>
                            <li><a class="page-link" href="#">3 <span></span></a></li>
                            <li><a class="page-link" href="#">4 <span></span></a></li>
                            <li><a class="page-link" href="#">5 <span></span></a></li>
                            <li class="next">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="icon-angle-right">
                                        <span class="sr-only">Next</span>
                                    </i>
                                </a>
                            </li>
                            <li class="last">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="icon-angle-double-right">
                                        <span class="sr-only">last</span>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>