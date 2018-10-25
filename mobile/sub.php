<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
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
    <nav class="snb-list">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                회사소개
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">회사소개</a>
                <a class="dropdown-item" href="#">연혁</a>
                <a class="dropdown-item" href="#">비전</a>
                <a class="dropdown-item" href="#">조직도</a>
                <a class="dropdown-item" href="#">아진소식</a>
                <a class="dropdown-item" href="#">오시는 길</a>
                <a class="dropdown-item" href="#">CI소개</a>
            </div>
        </div>
    </nav>
    
    <!-- Content -->
    <main id="content">
        <div class="container">
            <section>
                <!-- section-header -->
                <div class="section-header">
                    <h3 class="section-title">회사소개</h3>
                    <p class="summary">
                        창의적 개발에 대한 끊임없는 도전을 추구하며<br>
                        모든 사람이 행복한 세상을 만들기 위하여 <b>노력하는 기업!</b>
                    </p>
                </div>
                
                <!-- section-content -->
                <div class="section-content">
                    <!-- 제품 메뉴 -->
                    <nav class="product-nav">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="product-depth" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                BOARD(Module)
                            </button>
                            <div class="dropdown-menu" aria-labelledby="product-depth">
                                <a class="dropdown-item" href="#">MOTION CHIP</a>
                                <a class="dropdown-item" href="#">BOARD(Module)</a>
                                <a class="dropdown-item" href="#">BOARD(Single)</a>
                                <a class="dropdown-item" href="#">NETWORK</a>
                                <a class="dropdown-item" href="#">PLC</a>
                                <a class="dropdown-item" href="#">ROBOT CONTROLLER</a>
                                <a class="dropdown-item" href="#">EZSOFTWARE</a>
                            </div>
                        </div>
                    </nav>

                    <br><br>
                    
                    <!-- 기본검색영역 -->
                    <p class="ex-title">검색영역 기본</p>
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

                    <br><br>

                    <!-- 검색영역-1 -->
                    <p class="ex-title">검색영역 1</p>
                    <div class="search-form-1">
                        <form action="#">
                            <div class="form-group">
                                <label><input type="radio"> Manual</label>
                                <label><input type="radio"> SoftWare</label>
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>전체</option>
                                </select>
                                <input type="text" id="search-1" class="form-control">
                                <label for="search-1" class="sr-only">검색영역</label>
                                <button type="submit" class="btn btn-search-1">
                                    <i class="icon-search">
                                        <span class="sr-only">검색버튼</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <br><br>

                    <!-- 검색영역-2 -->
                    <p class="ex-title">검색영역 2</p>
                    <div class="search-form-2">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>제품명 검색</option>
                                </select>
                                <select class="form-control">
                                    <option>제목</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" id="search-2" class="form-control">
                                <label for="search-2" class="sr-only">검색영역</label>
                                <button type="submit" class="btn btn-search-2">
                                    <i class="icon-search">
                                        <span class="sr-only">검색버튼</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    
                    <br><br>

                    <!-- 게시판 type-1 -->
                    <p class="ex-title">게시판 기본</p>
                    <div class="default-board">
                        <ul>
                            <li>
                                <a href="#">
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
                                <a href="#">
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
                    
                    <br><br>
                    
                    <!-- FAQ 게시판 -->
                    <p class="ex-title">FAQ 게시판</p>
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
                        </div>
                    </div>
                    
                    <br><br>
                    
                    <!-- responsive table -->
                    <p class="ex-title">반응형 table</p>
                    <div class="table-responsive">
                        <table class="table table-type-1">
                            <thead>
                                <tr>
                                    <th>업체명</th>
                                    <th>대표자명</th>
                                    <th>전화번호</th>
                                    <th>주소</th>
                                    <th>메일주소</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>알엔에스</td>
                                    <td>전용진</td>
                                    <td><a href="tel:0314793591">031-479-3591</a></td>
                                    <td>의왕</td>
                                    <td><a href="mailto:rns77@naver.com">rns77@naver.com</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <br><br>
                    
                    <!-- 입력폼 -->
                    <p class="ex-title">입력폼</p>
                    <div class="table-wrap">
                        <form action="#">
                            <table class="table write-table">
                                <tbody>
                                    <tr>
                                        <th><label for="subject">제목</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="subject" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>첨부파일</th>
                                        <td class="attach">
                                            <div class="form-group">
                                                <input type="file" id="attach" class="form-control">
                                                <label for="attach">찾아보기</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    
                    <br><br>
                    
                    <!-- 게시판 뷰 -->
                    <p class="ex-title">게시판 뷰</p>
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
                            <div class="table-wrap">
                                <table class="table write-table">
                                    <tbody>
                                        <tr>
                                            <th>성명</th>
                                            <td>홍길동</td>
                                        </tr>
                                        <tr>
                                            <th>업체명</th>
                                            <td>주식회사 아진엑스텍</td>
                                        </tr>
                                        <tr>
                                            <th>전화번호</th>
                                            <td>010-1111-1111</td>
                                        </tr>
                                        <tr>
                                            <th>이메일</th>
                                            <td>hong@naver.com</td>
                                        </tr>
                                        <tr>
                                            <th>제품분야</th>
                                            <td>BOARD(Module)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
                    
                    <br><br>
                    
                    <!-- 페이지 링크 -->
                    <p class="ex-title">페이지 링크</p>
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
                    
                    <br><br>
                    
                    <!-- pagination -->
                    <p class="ex-title">pagination</p>
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
                    
                    <br><br>
                    
                    <!-- button -->
                    <p class="ex-title">button</p>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-white" role="button">button</a>
                            <a href="#" class="btn btn-sm btn-white" role="button">button</a>
                            <a href="#" class="btn btn-sm btn-blue" role="button">button</a>
                        </p>
                        <br>
                        <p>
                            <a href="#" class="btn btn-md btn-blue" role="button">button</a>
                            <a href="#" class="btn btn-md btn-white" role="button">button</a>
                        </p>
                    </div>
                    
                </div>
            </section>
        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>