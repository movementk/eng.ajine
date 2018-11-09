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
            <section class="solution space">
                <div class="section-header">
                    <h3>Solution</h3>
                    <p>Ajinextek opens up a new control paradigm.</p>
                </div>
                <div class="section-content">
                    <nav class="solution-tabs">
                        <ul>
                            <li><a href="/customer/solution01.php">semiconductor process</a></li>
                            <li><a href="/customer/solution02.php">post semiconductor process</a></li>
                            <li class="active"><a href="/customer/solution03.php">processing machine</a></li>
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
                                        <h4>DRILLING MACHINE</h4>
                                        <p>A cutting tool, such as a drill, is installed on the spindle that rotates and simultaneously moves it up and down to drill holes in the workpiece.</p>
                                    </div>
                                    <figure>
                                        <img src="/assets/images/customer/solution_product12.jpg" alt="">
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