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
                            <li><a href="/customer/solution02.php">post semiconductor process</a></li>
                            <li><a href="/customer/solution03.php">processing machine</a></li>
                            <li><a href="/customer/solution04.php">Photovoltaic machine</a></li>
                            <li class="active"><a href="/customer/solution05.php">PCB/ Electronic industry</a></li>
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
                                        <h4>SCREEN PRINTER</h4>
                                        <p>Equipment to precisely distribute solder cream using various mask before fitting parts to PCB</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product15.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                            <li class="col-6">
                                <div class="solution-products">
                                    <div class="details">
                                        <small>SOLUTION AREA</small>
                                        <h4>LCD SORTER</h4>
                                        <p>A device that automatically queues various types of LEDs. This equipment automatically measures/checks the Led Chip from Wafer and sends it to Bin according to the user's preset conditions.</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product16.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                            <li class="col-6">
                                <div class="solution-products">
                                    <div class="details">
                                        <small>SOLUTION AREA</small>
                                        <h4>PCB INSPECTION</h4>
                                        <p>Equipment that automatically checks the mounting and delivery status of components after soldering is completed on PCB production lines for defects and provides additional statistical data for the production process to clearly identify defects and causes.</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product17.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                            <li class="col-6">
                                <div class="solution-products">
                                    <div class="details">
                                        <small>SOLUTION AREA</small>
                                        <h4>RFID CHIP BONDER</h4>
                                        <p>This is a method of attaching a chip to an RFID Antenna. As one of many Bonding methods, it is an ultra-thin application that responds to the refinement of access pitch due to lightweighting</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product18.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                            <li class="col-6">
                                <div class="solution-products">
                                    <div class="details">
                                        <small>SOLUTION AREA</small>
                                        <h4>LENS INSPECTION</h4>
                                        <p>Equipment to test circuit connection and focus adjustment after attaching a flexible PCB during the manufacturing process of COF type camera module for mobile phones</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product19.jpg" alt="">
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