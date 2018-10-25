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
                <li class="active"><a href="/customer/faq_list.php">FAQ</a></li>
                <li><a href="/customer/request_list.php">견적요청</a></li>
                <li><a href="/customer/agency.php">대리점</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="faq-list">
                <div class="section-header">
                    <h3>FAQ</h3>
                </div>
                <div class="section-content">
                    <article class="faq-content">
                        <div class="article-header">
                            <div class="faq-search">
                                <form action="#">
                                    <h4>자주묻는 질문 검색</h4>
                                    <p>
                                        아래의 검색범위를 선택 후 원하시는 검색어를 입력, 검색버튼을 이용하여 원하시는 정보를 검색하시면 됩니다.<br>
                                        각 탭별로 정리되어 등록되어진 TIPS를 직접 확인하시고 찾아보실 수 있습니다.
                                    </p>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>전체</option>
                                        </select>
                                        <label for="faq-search" class="sr-only">faq 자주묻는질문 검색</label>
                                        <input type="text" id="faq-search" class="form-control">
                                        <button type="submit" class="btn btn-search-default">
                                            <i class="icon-search">
                                                <span class="sr-only">검색버튼</span>
                                            </i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="article-content">
                            <nav class="faq-tab">
                                <ul>
                                    <li class="active"><a href="#">전체</a></li>
                                    <li><a href="#">기술문의</a></li>
                                    <li><a href="#">구입문의</a></li>
                                    <li><a href="#">AS문의</a></li>
                                    <li><a href="#">기술제안</a></li>
                                    <li><a href="#">기타문의</a></li>
                                </ul>
                            </nav>
                            <div class="accordion-list">
                                <div class="accordion" id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="heading-1">
                                            <a href="#" class="btn btn-link" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1" role="button">
                                                <dl>
                                                    <dt>기술문의</dt>
                                                    <dd>실시간 인터럽트처리시 유의사항</dd>
                                                </dl>
                                            </a>
                                        </div>
                                        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">
                                            <div class="card-body">
                                                답변 내용을 입력합니다.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-2">
                                            <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2" role="button">
                                                <dl>
                                                    <dt>기타문의</dt>
                                                    <dd>2012 전제품 카탈로그 신청방법</dd>
                                                </dl>
                                            </a>
                                        </div>
                                        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">
                                            <div class="card-body">
                                                답변 내용을 입력합니다.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-3">
                                            <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3" role="button">
                                                <dl>
                                                    <dt>기술문의</dt>
                                                    <dd>제품 구입가능한 영업사무소 연락처를 알고 싶어요</dd>
                                                </dl>
                                            </a>
                                        </div>
                                        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">
                                            <div class="card-body">
                                                답변 내용을 입력합니다.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-4">
                                            <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4" role="button">
                                                <dl>
                                                    <dt>기술문의</dt>
                                                    <dd>실시간 인터럽트처리시 유의사항</dd>
                                                </dl>
                                            </a>
                                        </div>
                                        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion">
                                            <div class="card-body">
                                                답변 내용을 입력합니다.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-5">
                                            <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5" role="button">
                                                <dl>
                                                    <dt>기술문의</dt>
                                                    <dd>[홈페이지]서보 드라이버 결선도 다운로드 방법</dd>
                                                </dl>
                                            </a>
                                        </div>
                                        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion">
                                            <div class="card-body">
                                                답변 내용을 입력합니다.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-6">
                                            <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6" role="button">
                                                <dl>
                                                    <dt>기술문의</dt>
                                                    <dd>A/S 비용은 어떻게 되나요?</dd>
                                                </dl>
                                            </a>
                                        </div>
                                        <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordion">
                                            <div class="card-body">
                                                답변 내용을 입력합니다.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-7">
                                            <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7" role="button">
                                                <dl>
                                                    <dt>기술문의</dt>
                                                    <dd>제품 A/S 절차는 어떻게 되나요?</dd>
                                                </dl>
                                            </a>
                                        </div>
                                        <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordion">
                                            <div class="card-body">
                                                답변 내용을 입력합니다.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </article>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="first">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left">
                                        <span class="sr-only">첫 페이지 이동</span>
                                    </i>
                                </a>
                            </li>
                            <li class="prev">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="icon-angle-left">
                                        <span class="sr-only">첫 페이지 이동</span>
                                    </i>
                                </a>
                            </li>
                            <li class="active"><a class="page-link" href="#">1</a></li>
                            <li><a class="page-link" href="#">2</a></li>
                            <li><a class="page-link" href="#">3</a></li>
                            <li><a class="page-link" href="#">4</a></li>
                            <li><a class="page-link" href="#">5</a></li>
                            <li><a class="page-link" href="#">6</a></li>
                            <li><a class="page-link" href="#">7</a></li>
                            <li><a class="page-link" href="#">8</a></li>
                            <li><a class="page-link" href="#">9</a></li>
                            <li><a class="page-link" href="#">10</a></li>
                            <li class="next">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="icon-angle-right">
                                        <span class="sr-only">다음 페이지 이동</span>
                                    </i>
                                </a>
                            </li>
                            <li class="last">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="icon-angle-double-right">
                                        <span class="sr-only">마지막 페이지 이동</span>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="attention-box">
                        <p>
                            주식회사 아진엑스텍 고객님들을 위해 제품과 관련하여 자주 질문하시는 내용과 답변이 정리되어 있습니다.<br>
                            TECHNICAL TIPS에서 고객님의 궁금증을 찾으시지 못하셨다면 [고객문의 바로가기]를 클릭하신 후 질문하여 주세요.<br>
                            신속히 답변드리겠습니다.
                        </p>
                        <div class="btn-inquiry">
                            <a href="#" class="btn btn-white" role="button">고객문의 바로가기</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
    <script type="text/javascript" src="/assets/js/sub.js"></script>
</body>
</html>