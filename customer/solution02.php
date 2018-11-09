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
                    <p>미래를 여는 기업 ajinextek입니다</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- lnb -->
    <nav id="lnb">
        <div class="container">
            <ul class="lnb-list">
                <li><a href="/customer/download.php">Download</a></li>
                <li><a href="/customer/qna_list.php">Q&amp;A</a></li>
                <li><a href="/customer/faq_list.php">FAQ</a></li>
                <li><a href="/customer/request_list.php">Request Quotation</a></li>
                <li><a href="/customer/agency.php">Agency</a></li>
                <li><a href="/customer/technical_terms.php">Technical Terms</a></li>
                <li class="active"><a href="/customer/solution01.php">Solution</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="solution">
                <div class="section-header">
                    <h3>Solution</h3>
                    <p>Ajinextek opens up a new control paradigm.</p>
                </div>
                <div class="section-content">
                    <nav class="solution-tabs">
                        <ul>
                            <li><a href="/customer/solution01.php">semiconductor process</a></li>
                            <li class="active"><a href="/customer/solution02.php">post semiconductor process</a></li>
                            <li><a href="/customer/solution03.php">processing machine</a></li>
                            <li><a href="/customer/solution04.php">Photovoltaic machine</a></li>
                            <li><a href="/customer/solution05.php">PCB/ Electronic industry</a></li>
                            <li><a href="/customer/solution06.php">FPD</a></li>
                            <li><a href="/customer/solution07.php">post LED</a></li>
                        </ul>
                    </nav>
                    <article class="solution-list">
                        <ul class="row">
                            <li class="col-6">
                                <div class="solution-products">
                                    <div class="details">
                                        <small>SOLUTION AREA</small>
                                        <h4>SAW &amp; SORTER</h4>
                                        <p>Equipment that holds and cuts molded materials with Vacuum Jig, then cleans, Dry, and loads quality or defective products through Vision inspection at high speed to each tray or tube</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product07.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                            <li class="col-6">
                                <div class="solution-products">
                                    <div class="details">
                                        <small>SOLUTION AREA</small>
                                        <h4>MEMORY HANDLER</h4>
                                        <p>2D, 3D inspection and two-sided inspection of substrates simultaneously with dedicated external inspection equipment of handler integrated structure required in the module memory production process</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product08.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                            <li class="col-6">
                                <div class="solution-products">
                                    <div class="details">
                                        <small>SOLUTION AREA</small>
                                        <h4>LASER MARKING</h4>
                                        <p>A handle that automatically loads, loads, unloads, and inspects various kinds of LeadFrame as an equipment that displays text or logo on top of semiconductor package by fitting laser marking head.</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product09.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                            <li class="col-6">
                                <div class="solution-products">
                                    <div class="details">
                                        <small>SOLUTION AREA</small>
                                        <h4>BALL BUMPING M/C</h4>
                                        <p>Equipment to attach the holder ball to the circuit board of the BGA or CSP series package or to the Wafer.</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product10.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                            <li class="col-6">
                                <div class="solution-products">
                                    <div class="details">
                                        <small>SOLUTION AREA</small>
                                        <h4>CHIP INSPECTION</h4>
                                        <p>Equipment for rapid and precise inspection of various types of defects that occur on the appearance of small parts</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product11.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </article>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
    <script type="text/javascript" src="/assets/js/sub.js"></script>
</body>
</html>