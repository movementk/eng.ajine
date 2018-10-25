<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/investment.css">
</head>
<body class="sub investment">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>

    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <h2>INVESTMENT</h2>
            <p>미래를 여는 기업 아진엑스텍입니다.</p>
        </div>
    </div>

    <!-- snb-list -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/investment/_snb_list.php'); ?>
    
    <!-- Content -->
    <main id="content">
        <div class="container">
            <section class="stock-information">
                <div class="section-header">
                    <h3 class="section-title">주식정보</h3>
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
                        <p class="today-time">체결시간 <i>2017-04-24 14:40</i> 기준</p>
                        <ul>
                            <li>
                                <strong class="high-price">19,750</strong>
                            </li>
                            <li>
                                <dl>
                                    <dt>전일대비</dt>
                                    <dd class="low-price">250</dd>
                                    <dt>등락률</dt>
                                    <dd class="plus fluctuation">1.25</dd>
                                </dl>
                            </li>
                        </ul>
                        <div class="table-wrap">
                            <table class="table">
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
                                        <td class="high-price">19,500</td>
                                        <td class="low-price">19,500</td>
                                        <td>19,500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                    <article class="graph">
                        <div>
                            <figure>
                                <img src="/mobile/assets/images/investment/img_none_graph.jpg" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div>
                            <figure>
                                <img src="/mobile/assets/images/investment/img_none_graph.jpg" class="img-fluid" alt="">
                            </figure>
                        </div>
                    </article>
                    <article class="days-infomation">
                        <div class="table-responsive">
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