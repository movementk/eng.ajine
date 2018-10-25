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
            <section class="faq-list">
                <div class="section-header">
                    <h3 class="section-title">FAQ</h3>
                </div>
                <div class="section-content">
                    <div class="search-area">
                        <div class="search-guide">
                            <strong>자주묻는 질문 검색</strong>
                            <p>
                                아래의 검색범위를 선택 후 원하시는 검색어를 입력, 검색버튼을 이용하여 원하시는 정보를 검색하시면 됩니다.
                            </p>
                        </div>
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
                    </div>
                    <div class="tab-menu">
                        <ul>
                            <li class="active"><a href="#">전체</a></li>
                            <li><a href="#">기술문의</a></li>
                            <li><a href="#">구입문의</a></li>
                            <li><a href="#">AS문의</a></li>
                            <li><a href="#">기술제안</a></li>
                            <li><a href="#">기타문의</a></li>
                        </ul>
                    </div>
                    <div class="faq-board">
                        <div class="accordion" id="faq-list">
                            <div class="card">
                                <div class="card-header" id="heading-1">
                                    <a href="#" class="btn btn-link" data-toggle="collapse" data-target="#faq-1" aria-expanded="true" aria-controls="faq-1">
                                        <h4>기술문의</h4>
                                        <p>실시간 인터럽트 처리시 유의사항</p>
                                    </a>
                                </div>
                                <div id="faq-1" class="collapse show" aria-labelledby="heading-1" data-parent="#faq-list">
                                    <div class="card-body">
                                        답변 내용을 입력합니다.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading-2">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq-2" aria-expanded="false" aria-controls="faq-2">
                                        <h4>기술문의</h4>
                                        <p>실시간 인터럽트 처리시 유의사항</p>
                                    </a>
                                </div>
                                <div id="faq-2" class="collapse" aria-labelledby="heading-2" data-parent="#faq-list">
                                    <div class="card-body">
                                        답변 내용을 입력합니다.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading-3">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq-3" aria-expanded="false" aria-controls="faq-3">
                                        <h4>기술문의</h4>
                                        <p>실시간 인터럽트 처리시 유의사항</p>
                                    </a>
                                </div>
                                <div id="faq-3" class="collapse" aria-labelledby="heading-3" data-parent="#faq-list">
                                    <div class="card-body">
                                        답변 내용을 입력합니다.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header" id="heading-4">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq-4" aria-expanded="false" aria-controls="faq-4">
                                        <h4>기술문의</h4>
                                        <p>실시간 인터럽트 처리시 유의사항</p>
                                    </a>
                                </div>
                                <div id="faq-4" class="collapse" aria-labelledby="heading-4" data-parent="#faq-list">
                                    <div class="card-body">
                                        답변 내용을 입력합니다.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header" id="heading-5">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq-5" aria-expanded="false" aria-controls="faq-5">
                                        <h4>기술문의</h4>
                                        <p>실시간 인터럽트 처리시 유의사항</p>
                                    </a>
                                </div>
                                <div id="faq-5" class="collapse" aria-labelledby="heading-5" data-parent="#faq-list">
                                    <div class="card-body">
                                        답변 내용을 입력합니다.
                                    </div>
                                </div>
                            </div>
                        </div>
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