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
                <li><a href="/customer/faq_list.php">FAQ</a></li>
                <li class="active"><a href="/customer/request_list.php">견적요청</a></li>
                <li><a href="/customer/agency.php">대리점</a></li>
                <li><a href="/customer/technical_terms.php">기술용어</a></li>
                <li><a href="/customer/solution01.php">솔루션</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="request-list">
                <div class="section-header">
                    <h3>견적요청</h3>
                </div>
                <div class="section-content">
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
                    <div class="table-wrap">
                        <table class="table type-2">
                            <colgroup>
                                <col style="width: 80px;">
                                <col style="width: 860px;">
                                <col style="width: 100px;">
                                <col style="width: 130px;">
                            </colgroup>
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
                                        </a>
                                    </td>
                                    <td>홍길동</td>
                                    <td class="date">2018.01.08</td>
                                </tr>
                                <!-- 댓글 -->
								<tr>
									<td class="num">152</td>
									<td class="subject reply">
										<a href="#">
											<span>RE</span>T68-PR 2D 오류 문의 
										</a>
									</td>
									<td>아진엑스텍</td>
									<td class="date">2018.01.08</td>
								</tr>
                                <tr>
                                    <td class="num">151</td>
                                    <td class="subject">
                                        <a href="#">
                                            smc-2v02 / smc-2v04
                                            <i class="icon-reply-num">[1]
                                                <span class="sr-only">댓글갯수</span>
                                            </i>
                                        </a>
                                    </td>
                                    <td>홍길동</td>
                                    <td class="date">2018.01.08</td>
                                </tr>
                                <tr>
                                    <td class="num">150</td>
                                    <td class="subject">
                                        <a href="#">
                                            T68-PR 2D
                                        </a>
                                    </td>
                                    <td>홍길동</td>
                                    <td class="date">2018.01.08</td>
                                </tr>
                                <tr>
                                    <td class="num">149</td>
                                    <td class="subject">
                                        <a href="#">
                                            pci-n404 보드 인식 오류 문의
                                            <i class="icon-reply-num">[1]
                                                <span class="sr-only">댓글갯수</span>
                                            </i>
                                        </a>
                                    </td>
                                    <td>홍길동</td>
                                    <td class="date">2018.01.08</td>
                                </tr>
                                <tr>
                                    <td class="num">148</td>
                                    <td class="subject">
                                        <a href="#">
                                            원호 보간 사용상의 문의
                                            <i class="icon-reply-num">[2]
                                                <span class="sr-only">댓글갯수</span>
                                            </i>
                                        </a>
                                    </td>
                                    <td>홍길동</td>
                                    <td class="date">2018.01.08</td>
                                </tr>
                                <tr>
                                    <td class="num">147</td>
                                    <td class="subject">
                                        <a href="#">
                                            SIO 사용상 이상증상에 대한 문의
                                        </a>
                                    </td>
                                    <td>홍길동</td>
                                    <td class="date">2018.01.08</td>
                                </tr>
                                <tr>
                                    <td class="num">146</td>
                                    <td class="subject">
                                        <a href="#">
                                            PCI-N804는 3축 직선보간이 가능하나요?
                                        </a>
                                    </td>
                                    <td>홍길동</td>
                                    <td class="date">2018.01.08</td>
                                </tr>
                                <tr>
                                    <td class="num">145</td>
                                    <td class="subject">
                                        <a href="#">
                                            OS 변경
                                            <i class="icon-reply-num">[1]
                                                <span class="sr-only">댓글갯수</span>
                                            </i>
                                        </a>
                                    </td>
                                    <td>홍길동</td>
                                    <td class="date">2018.01.08</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
    <script type="text/javascript" src="/assets/js/sub.js"></script>
</body>
</html>