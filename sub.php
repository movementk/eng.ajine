<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
</head>
<body class="sub ">
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
                <li class="active"><a href="#">회사소개</a></li>
                <li><a href="#">연혁</a></li>
                <li><a href="#">비전</a></li>
                <li><a href="#">조직도</a></li>
                <li><a href="#">아진소식</a></li>
                <li><a href="#">오시는 길</a></li>
                <li><a href="#">CI소개</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content" class="">
        <div class="container">
            
            <!-- section-header -->
            <div class="section-header">
                <h3>모듈형 보드</h3>
            </div>
            
            <!-- Sub Title -->
            <p class="ex-title">Sub Title</p>
            <h4 class="sub-title">요약 재무제표</h4>
            
            <br><br><br>
            
            <!-- tab-dropdowns -->
            <p class="ex-title">서브 탭메뉴1</p>
            <nav class="tab-dropdowns">
                <ul>
                    <li>
                        <div class="dropdown depth-1">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                BOARD(Module)
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-1">
                                <a class="dropdown-item" href="#">MOTION CHIP</a>
                                <a class="dropdown-item" href="#">BOARD(Module)</a>
                                <a class="dropdown-item" href="#">BOARD(Single)</a>
                                <a class="dropdown-item" href="#">NETWORK</a>
                                <a class="dropdown-item" href="#">PLC</a>
                                <a class="dropdown-item" href="#">ROBOT CONTROLLER</a>
                                <a class="dropdown-item" href="#">EZSOFTWARE</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown depth-2">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                BASE BOARD
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-2">
                                <a class="dropdown-item" href="#">BASE BOARD</a>
                                <a class="dropdown-item" href="#">MOTION MODULE</a>
                                <a class="dropdown-item" href="#">DIGITAL MODULE</a>
                                <a class="dropdown-item" href="#">ANALOG MODULE</a>
                                <a class="dropdown-item" href="#">COUNTER MODULE</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown depth-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                BIFR
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-3">
                                <a class="dropdown-item" href="#">menu-1</a>
                                <a class="dropdown-item" href="#">menu-2</a>
                                <a class="dropdown-item" href="#">menu-3</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            
            <br><br><br>
            
            <!-- tab-dropdowns -->
            <p class="ex-title">서브 탭메뉴2</p>
            <nav class="tab-menu">
                <ul>
                    <li class="active"><a href="#">2010s - 현재</a></li>
                    <li><a href="#">2000s</a></li>
                    <li><a href="#">1990s</a></li>
                </ul>
            </nav>
            
            <br><br><br>
            
            <!-- search-form -->
            <p class="ex-title">검색영역</p>
            <div class="search-form">
                <form action="#">
                    <div class="form-group">
                        <select class="form-control">
                            <option>전체</option>
                        </select>
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
            
            <br><br><br>
            
            <!-- pagination -->
            <p class="ex-title">pagination</p>
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
            
            <br><br><br>
            
            <!-- table -->
            <p class="ex-title">table</p>
            <div class="table-wrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>공시제목</th>
                            <th>제출의무자</th>
                            <th>일시</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>123</td>
                            <td><a href="#">감시보고서 (2015.12)</a></td>
                            <td>금융감독원</td>
                            <td>2017-04-21</td>
                        </tr>
                    </tbody>
                </table>
                
                <br><br>
                
                <table class="table type-1">
                    <tbody>
                        <tr>
                            <th>회사명</th>
                            <td>주식회사 아진엑스텍</td>
                            <th>연혁</th>
                            <td>1995년 01월 01일 부터 현재 까지</td>
                        </tr>
                    </tbody>
                </table>
                
                <br><br>
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>항목</th>
                            <th>2013년</th>
                            <th>2014년</th>
                            <th>2015년</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>[유동자산]</td>
                            <td>1,234</td>
                            <td>1,234</td>
                            <td>1,234</td>
                        </tr>
                    </tbody>
                </table>
                
                <br><br>
                
                <table class="table type-2">
                    <tbody>
                        <tr>
                            <td class="num">152</td>
                            <td class="subject">
                                <a href="#">
                                    CAD자료 요청
                                    <i class="icon-lock">
                                        <span class="sr-only">비밀글</span>
                                    </i>
                                    <i class="icon-folder">
                                        <span class="sr-only">첨부파일</span>
                                    </i>
                                    <i class="icon-reply-num">[1]
                                        <span class="sr-only">댓글갯수</span>
                                    </i>
                                </a>
                            </td>
                            <td>홍길동</td>
                            <td class="date">2018.01.08</td>
                        </tr>
                        <tr>
                            <td class="num">151</td>
                            <td class="subject">
                                <a href="#">
                                    CAD자료 요청
                                    <i class="icon-lock">
                                        <span class="sr-only">비밀글</span>
                                    </i>
                                    <i class="icon-folder">
                                        <span class="sr-only">첨부파일</span>
                                    </i>
                                    <i class="icon-reply-num">
                                        <span class="sr-only">댓글갯수</span>
                                    </i>
                                </a>
                            </td>
                            <td>홍길동</td>
                            <td class="date">2018.01.08</td>
                        </tr>
                    </tbody>
                </table>
                
                <br><br>
                
                <form action="#">
                    <table class="table table-write">
                        <tbody>
                            <tr>
                                <th><label for="u-title">제목</label></th>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>분류</option>
                                        </select>
                                        <input type="text" id="u-title" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="v-align"><label for="u-content">내용</label></th>
                                <td>
                                    <div class="form-group">
                                        <textarea id="u-content" class="form-control"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>파일첨부</th>
                                <td class="file">
                                    <div class="form-group">
                                        <input type="file" id="u-attach" class="form-control">
                                        <label for="u-attach">파일찾기</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            
            <br><br><br>
            
            <!-- btn-list -->
            <p class="ex-title">btn list</p>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-md btn-gray specification" role="button">button</a>
                    <a href="#" class="btn btn-md btn-gray down" role="button">button</a>
                    <a href="#" class="btn btn-md btn-gray estimated" role="button">button</a>
                </p>
                <p>
                    <a href="#" class="btn btn-sm btn-blue down" role="button">button</a>
                </p>
                <p>
                    <a href="#" class="btn btn-sm btn-gray estimated" role="button">button</a>
                </p>
                <p>
                    <a href="#" class="btn btn-lg btn-white" role="button">button</a>
                    <a href="#" class="btn btn-lg btn-white" role="button">button</a>
                    <a href="#" class="btn btn-lg btn-blue" role="button">button</a>
                </p>
            </div>
            
            <br><br><br>
            
            <!-- board type -->
            <p class="ex-title">소식</p>
            <div class="board-type01">
                <dl class="result-num">
                    <dt>총</dt>
                    <dd><i>123</i> 건</dd>
                </dl>
                <ul>
                    <li>
                        <a href="#">중국 절강성 국진로봇기술 유한공사 CTO 내방</a>
                        <ul>
                            <li class="date">2018년 07월 27일</li>
                            <li>
                                <dl>
                                    <dt>조회수</dt>
                                    <dd>1233</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>작성자</dt>
                                    <dd>관리자</dd>
                                </dl>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            세계1위 산업용로봇기업 야스카와전기, 보스톤 소재 베크나테크놀러지 등과 MOU 체결
                            <span class="ico-down">
                                <img src="/assets/images/sub/icon_down.gif" alt="">
                            </span>
                        </a>
                        <ul>
                            <li class="date">2018년 07월 27일</li>
                            <li>
                                <dl>
                                    <dt>조회수</dt>
                                    <dd>1233</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>작성자</dt>
                                    <dd>관리자</dd>
                                </dl>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <br><br>
            
            <p class="ex-title">board type2</p>
            <div class="board-type02">
                <ul class="row">
                    <li class="col-3">
                        <div class="product-info">
                            <div class="item">
                                <div class="item-image">
                                    <figure>
                                        <img src="/assets/images/sub/img_product01.jpg" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <p class="p-name">MOTION MODULE</p>
                            </div>
                            <div class="details">
                                <h4>BASE BOARD</h4>
                                <p>
                                    Base Board 제품군은 PCI Bus,<br>
                                    PCIe Bus를 지원하는 모듈 베이스 <br>
                                    보드입니다.
                                </p>
                                <div class="btn-area">
                                    <a href="#" class="btn btn-more" role="button">제품보기</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-3">
                        <div class="product-info">
                            <div class="item">
                                <div class="item-image">
                                    <figure>
                                        <img src="/assets/images/sub/img_product01.jpg" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <p class="p-name">MOTION MODULE</p>
                            </div>
                            <div class="details">
                                <h4>BASE BOARD</h4>
                                <p>
                                    Base Board 제품군은 PCI Bus,<br>
                                    PCIe Bus를 지원하는 모듈 베이스 <br>
                                    보드입니다.
                                </p>
                                <div class="btn-area">
                                    <a href="#" class="btn btn-more" role="button">제품보기</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            
            <br><br>
            
            <p class="ex-title">board type3</p>
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
            
            <br><br><br>
            
            <!-- board view -->
            <p class="ex-title">board view</p>
            <div class="board-view">
                <div class="view-head">
                    <h4>Q&amp;A 제목이 노출되는 영역입니다. Q&amp;A 제목이 노출되는 영역입니다.</h4>
                    <ul>
                        <li class="user">홍길동</li>
                        <li>2018-01-01</li>
                        <li>123</li>
                    </ul>
                    <div class="table-wrap">
                        <table class="table type-1">
                            <tbody>
                                <tr>
                                    <th>성명</th>
                                    <td>홍길동</td>
                                    <th>업체명</th>
                                    <td>주식회사 아진엑스텍</td>
                                </tr>
                                <tr>
                                    <th>전화번호</th>
                                    <td>010-1111-1111</td>
                                    <th>이메일</th>
                                    <td>hong@naver.com</td>
                                </tr>
                                <tr>
                                    <th>제품분야</th>
                                    <td colspan="3">BOARD(Module)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
            
            <br><br><br>
            
            <!-- reply -->
            <p class="ex-title">관리자답변</p>
            <div class="reply">
                <h5>관리자답변 <span></span></h5>
                <p>
                    관리자답변이 노출되는 영역입니다.관리자답변이 노출되는 영역입니다.관리자답변이 노출되는 영역입니다.<br>
                    관리자답변이 노출되는 영역입니다.관리자답변이 노출되는 영역입니다.
                </p>
            </div>
            
            <br><br><br>
            
            <!-- page-link -->
            <p class="ex-title">페이지 링크</p>
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
            
            
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
    <script type="text/javascript" src="/assets/js/sub.js"></script>
</body>
</html>