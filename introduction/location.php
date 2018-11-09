<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introduction.css">
</head>
<body class="sub introduction">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    
    <!-- page-header -->
    <div class="page-header">
        <div class="bg-backdrop"></div>
        <div class="container">
            <div class="page-summary">
                <div class="v-align">
                    <h2>COMPANY</h2>
                    <p>미래를 여는 기업 ajinextek입니다</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- lnb -->
    <nav id="lnb">
        <div class="container">
            <ul class="lnb-list">
                <li><a href="/introduction/introduce.php">About Us</a></li>
                <li><a href="/introduction/history.php">History</a></li>
                <li><a href="/introduction/vision.php">Vision</a></li>
                <li><a href="/introduction/group.php">Organization chart</a></li>
                <li><a href="/introduction/news_list.php">AJIN News</a></li>
                <li class="active"><a href="/introduction/location.php">Directions</a></li>
                <li><a href="/introduction/ci.php">About CI</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="location">
                <div class="section-header">
                    <h3>Directions</h3>
                </div>
                <div class="section-content">
                    <nav class="tab-menu">
                        <ul>
                            <li class="active space"><a href="#">Head office<br>(southern office)</a></li>
                            <li><a href="#">Gyeongin Office</a></li>
                            <li><a href="#">Central Office</a></li>
                            <li><a href="#">Chinese office</a></li>
                        </ul>
                    </nav>
                    <article class="information">
                        <h4>Head office (southern office)</h4>
                        <p class="summary">
                            Headquarter located in Seongseo Industrial Complex, Daegu, is on a building site of about 6300sqm, which has 2 buildings of dormitory and headquarter with office, production place and research center. Our head office is a core place of creating national wealth through R&amp;D by equipping with perfect R&amp;D and production facilities.<br>
                            In our head office, R&amp;D for localization of mechatronics main parts is performed with continuous efforts and passion everyday centering on our R&amp;D center. Also, efforts for improving quality and productivity are done centering on strategic planning team based on quality management as well as we provide with marketing, business support and global marketing service.
                        </p>
                        <div class="table-wrap">
                            <table class="table type-1">
                                <colgroup>
                                    <col style="width: 155px">
                                    <col style="width: 1015px">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>Head office(Daegu)(Southen office)</th>
                                        <td>27, Seongseogongdan-ro 11-gil, Dalseo-gu, Daegu, 42714, Rep. of KOREA</td>
                                    </tr>
                                    <tr>
                                        <th>TEL</th>
                                        <td>053-593-3700(extension 164)</td>
                                    </tr>
                                    <tr>
                                        <th>FAX</th>
                                        <td>053-593-3703</td>
                                    </tr>
                                    <tr>
                                        <th>Product enquiry</th>
                                        <td>Seung-hyung Wu Team manager(<a href="mailto:tackfive@ajinextek.com">tackfive@ajinextek.com</a>)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                    <div class="maps">
                        <img src="/assets/images/introduction/img_maps.jpg" class="img-fluid" alt="">
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