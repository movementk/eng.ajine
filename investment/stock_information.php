<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/investment.css">
</head>
<body class="sub investment">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    
    <!-- page-header -->
    <div class="page-header">
        <div class="bg-backdrop"></div>
        <div class="container">
            <div class="page-summary">
                <div class="v-align">
                    <h2>INVESTMENT</h2>
                    <p>미래를 여는 기업 아진엑스텍입니다</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- lnb -->
    <nav id="lnb">
        <div class="container">
            <ul class="lnb-list">
                <li><a href="/investment/finance_information.php">재무정보</a></li>
                <li class="active"><a href="/investment/stock_information.php">주식정보</a></li>
                <li><a href="/investment/disclosure_information.php">공시정보</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="disclosure-information">
                <div class="section-header">
                    <h3>주식정보</h3>
                </div>
                <div class="section-content">
                    <!--
                        low-price > 주가 하락
                        high-price > 주가 상승
                        plus > + 
                        minus > -
                        fluctuation > %
                    -->
                    <article class="today-informations">
                        <div class="row">
                            <div class="col-6">
                                <ul>
                                    <li>
                                        <strong class="high-price">19,750</strong>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt>전일대비</dt>
                                            <dd class="low-price">250</dd>
                                            <dt>등락률</dt>
                                            <dd class="fluctuation plus">1.25</dd>
                                        </dl>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <div class="table-wrap">
                                    <table class="table table-bordered">
                                        <colgroup>
                                            <col style="width: 25%;">
                                            <col style="width: 25%;">
                                            <col style="width: 25%;">
                                            <col style="width: 25%;">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>시가(원)</th>
                                                <th>고가(원)</th>
                                                <th>저가(원)</th>
                                                <th>거래량</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>19,500</td>
                                                <td class="high-price">19,900</td>
                                                <td class="row-price">9,400</td>
                                                <td>43,197</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="graph-informations">
                        <div class="row">
                            <div class="col-6">
                                <div class="graph">
                                    <img src="/assets/images/investment/img_graph.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="graph">
                                    <img src="/assets/images/investment/img_graph.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="days-infomation">
                        <div class="table-wrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>날짜</th>
                                        <th>종가(원)</th>
                                        <th>전일대비</th>
                                        <th>등락률</th>
                                        <th>시가</th>
                                        <th>고가</th>
                                        <th>저가</th>
                                        <th>거래량 (주)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td class="high-price">250</td>
                                        <td class="fluctuation plus">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td class="high-price">250</td>
                                        <td class="fluctuation minus">1.54</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td class="low-price">200</td>
                                        <td class="fluctuation plus">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>250</td>
                                        <td class="fluctuation minus">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>250</td>
                                        <td class="fluctuation plus">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>250</td>
                                        <td class="fluctuation minus">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>250</td>
                                        <td class="fluctuation plus">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>250</td>
                                        <td class="fluctuation minus">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>250</td>
                                        <td class="fluctuation plus">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                    <tr>
                                        <td>2017-04-21</td>
                                        <td>19,750</td>
                                        <td>250</td>
                                        <td class="fluctuation minus">1.28</td>
                                        <td>19,500</td>
                                        <td>19,900</td>
                                        <td>19,400</td>
                                        <td>443,197</td>
                                    </tr>
                                </tbody>
                            </table>
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
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
    <script type="text/javascript" src="/assets/js/sub.js"></script>
</body>
</html>