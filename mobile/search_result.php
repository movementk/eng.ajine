<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
</head>
<body class="sub customer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>

    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <h2>SEARCH</h2>
        </div>
    </div>

    <!-- Content -->
    <main id="content">
        <div class="container">
            <section class="search-result">
                <div class="section-header">
                    <h3 class="section-title">검색결과</h3>
                </div>
                <div class="section-content">
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" id="search-2" class="form-control">
                                <label for="search-2" class="sr-only">검색영역</label>
                                <button type="submit" class="btn default-search">
                                    <i class="icon-search">
                                        <span class="sr-only">검색버튼</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <article class="result">
                        <p class="keywords"><b>aa</b> 로 검색하신 결과 입니다.</p>
                        <ul>
                            <li>
                                <div class="product-item">
                                    <a href="/mobile/product/product_view.php">
                                        <figure>
                                            <img src="/mobile/assets/images/product/img_product02.jpg" class="img-fluid" alt="">
                                        </figure>
                                        <div class="summary">
                                            <h4>BIFR</h4>
                                            <p>ISA Full Size 베이스보드</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="btn-area">
                                    <a href="#" class="btn btn-md btn-blue" role="button">다운로드</a>
                                    <a href="#" class="btn btn-md btn-gray" role="button">견적문의</a>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <a href="/mobile/product/product_view.php">
                                        <figure>
                                            <img src="/mobile/assets/images/product/img_product02.jpg" class="img-fluid" alt="">
                                        </figure>
                                        <div class="summary">
                                            <h4>BIFR</h4>
                                            <p>ISA Full Size 베이스보드</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="btn-area">
                                    <a href="#" class="btn btn-md btn-blue" role="button">다운로드</a>
                                    <a href="#" class="btn btn-md btn-gray" role="button">견적문의</a>
                                </div>
                            </li>
                        </ul>
                    </article>
                </div>
            </section>
        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>