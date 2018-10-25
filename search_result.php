<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    
    <!-- page-header -->
    <div class="page-header">
        <div class="bg-backdrop"></div>
        <div class="container">
            <div class="page-summary">
                <div class="v-align">
                    <h2>SEARCH</h2>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="search-result">
                <div class="section-header">
                    <h3>검색결과</h3>
                </div>
                <div class="section-content">
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" id="search-form" class="form-control">
                                <label for="search-form" class="sr-only">검색영역</label>
                                <button type="submit" class="btn btn-search">
                                    <i class="icon-search">
                                        <span class="sr-only">검색버튼</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <article class="result">
                        <p class="keywords"><b>aa</b> 로 검색하신 결과 입니다.</p>
                        <div class="board-type03">
                            <ul>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/sub/img_product_sm01.jpg" class="img-fluid" alt="">
                                        </figure>
                                        <dl>
                                            <dt>BIFR</dt>
                                            <dd>ISA Full Size 베이스보드</dd>
                                        </dl>
                                    </a>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-sm btn-blue down" role="button">다운로드 바로가기</a>
                                        </p>
                                        <p>
                                            <a href="#" class="btn btn-sm btn-gray estimated" role="button">견적문의 바로가기</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
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