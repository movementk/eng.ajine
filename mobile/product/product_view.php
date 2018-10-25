<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/product.css">
</head>
<body class="sub product">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>

    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <h2>PRODUCT</h2>
            <p>미래를 여는 기업 아진엑스텍입니다.</p>
        </div>
    </div>

    <!-- snb-list -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/product/_snb_list.php'); ?>
    
    <!-- Content -->
    <main id="content">
        <section class="product-view">
            <nav class="product-nav">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="product-depth" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        BASE BOARD
                    </button>
                    <div class="dropdown-menu" aria-labelledby="product-depth">
                        <a class="dropdown-item" href="#">BASE BOARD</a>
                        <a class="dropdown-item" href="#">MOTION MODULE</a>
                        <a class="dropdown-item" href="#">DIGITAL MODULE</a>
                        <a class="dropdown-item" href="#">ANALOG MODULE</a>
                        <a class="dropdown-item" href="#">COUNTER MODULE</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="product-depth2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        BIFR
                    </button>
                    <div class="dropdown-menu" aria-labelledby="product-depth2">
                        <a class="dropdown-item" href="#">BIFR</a>
                        <a class="dropdown-item" href="#">BIHR</a>
                        <a class="dropdown-item" href="#">BPFR</a>
                        <a class="dropdown-item" href="#">BPHR</a>
                        <a class="dropdown-item" href="#">BPHD</a>
                        <a class="dropdown-item" href="#">BEFR</a>
                        <a class="dropdown-item" href="#">BEHR</a>
                        <a class="dropdown-item" href="#">BEHD</a>
                    </div>
                </div>
            </nav>
            <div class="container">
                <article class="product-details">
                    <h3>BIFR</h3>
                    <p>ISA Full Size 베이스보드</p>
                    <div class="article-content">
                        <figure>
                            <img src="/mobile/assets/images/product/img_product03.jpg" class="img-fluid" alt="">
                        </figure>
                        <ul class="product-slide">
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/mobile/assets/images/product/img_slider_img01.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/mobile/assets/images/product/img_slider_img02.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/mobile/assets/images/product/img_slider_img03.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/mobile/assets/images/product/img_slider_img03.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="details">
                        <ul class="dott-list">
                            <li>기능 모듈 최대 4개 장착 가능</li>
                            <li>
                                Add-On 방식의 기능 모듈과 결합하여 다양한 기능 보드로 구성 가능
                                <ul>
                                    <li>
                                        <dl>
                                            <dt>Motion</dt>
                                            <dd>SMC-1V02 / 2V02 / 2V04 (Max. 8 축)</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt>Digital</dt>
                                            <dd>SIO-DI32 / DO32P(T) / DB32P(T) (Max.128ch)</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt>Analog</dt>
                                            <dd>SIO-AI4RB / AO4RB (Max.16ch)</dd>
                                        </dl>
                                    </li>
                                </ul>
                            </li>
                            <li>Configuration 용 EEPROM 1KBit</li>
                            <li>외부 I/O 68pin Champ 커넥터</li>
                            <li>EzSoftware AXT, EzSoftware RM 소프트웨어 제공</li>
                        </ul>
                    </div>
                </article>
                
                <!-- nav-tab -->
                <nav class="nav-tablist">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link btn btn-lg btn-specifications active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">제품사양 보기</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-md btn-down" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">다운로드</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="btn btn-md btn-estimate" role="button">견적문의</a>
                        </li>
                    </ul>
                </nav>
                <!-- tab Content -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3>제품사양</h3>
                        <div class="table-wrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>항목</th>
                                        <th>사양</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Form Factor</td>
                                        <td>Standard ISA Full Size</td>
                                    </tr>
                                    <tr>
                                        <td>Bus interface</td>
                                        <td>16bit ISA bus, 8MHz</td>
                                    </tr>
                                    <tr>
                                        <td>Interrupt</td>
                                        <td>Manual setting<br>(using DIP switches)</td>
                                    </tr>
                                    <tr>
                                        <td>Internal Setting Register</td>
                                        <td>16bit ISA bus, 8MHz</td>
                                    </tr>
                                    <tr>
                                        <td>Front panel I/O</td>
                                        <td>2port 68pin Champ<br>connector x 2</td>
                                    </tr>
                                    <tr>
                                        <td>Local bus</td>
                                        <td>Support 4x local bus slot</td>
                                    </tr>
                                    <tr>
                                        <td>Status LEDs</td>
                                        <td>Check 5 power divisions and SUB 1,2,3,4 status</td>
                                    </tr>
                                    <tr>
                                        <td>Power supply / Current consumption</td>
                                        <td>DC 5V / 3A</td>
                                    </tr>
                                    <tr>
                                        <td>Input/output insulation voltage</td>
                                        <td>2500Vrms</td>
                                    </tr>
                                    <tr>
                                        <td>Operating temperature / Humidity</td>
                                        <td>Temperature 0 ~ 55°C / Humidity 5 ~ 90% (No condensation)</td>
                                    </tr>
                                    <tr>
                                        <td>Storage temperature</td>
                                        <td>-20 ~ 70°C</td>
                                    </tr>
                                    <tr>
                                        <td>Weight</td>
                                        <td>193g</td>
                                    </tr>
                                    <tr>
                                        <td>Exterior dimension of product</td>
                                        <td>338 (W) mm x 108 (L) mm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3>다운로드</h3>
                        <h4>MANUAL</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <caption>Motion Modulem</caption>
                                <thead>
                                    <tr>
                                        <th>S/W Manual</th>
                                        <th>H/W Manual</th>
                                        <th>Driver</th>
                                        <th>Ex</th>
                                        <th>App</th>
                                        <th>Dim</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <img src="/mobile/assets/images/customer/ico_down.gif" alt="download">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="/mobile/assets/images/customer/ico_down.gif" alt="download">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="/mobile/assets/images/customer/ico_down.gif" alt="download">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="/mobile/assets/images/customer/ico_down.gif" alt="download">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="/mobile/assets/images/customer/ico_down.gif" alt="download">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="/mobile/assets/images/customer/ico_down.gif" alt="download">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="attention">attention text</p>
                        <h4>SOFTWARE <a href="#">MORE</a></h4>
                        <div class="table-wrap type-2">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>AXT</th>
                                        <td><a href="#">EzSoftware AXT V1.9.0.0001</a></td>
                                    </tr>
                                    <tr>
                                        <th>AXT</th>
                                        <td><a href="#">EzSoftware AXT V1.9.0.0001</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        content-3
                    </div>-->
                </div>
                <div class="btn-prev">
                    <p>
                        <a href="#" class="btn btn-lg btn-gray" role="button">목록으로</a>
                    </p>
                </div>
            </div>
        </section>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        (function($){
            $(document).ready(function(){
                $('.product-slide').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: false,
                    arrows: false
                });
            });
        })(jQuery);
    </script>
</body>
</html>