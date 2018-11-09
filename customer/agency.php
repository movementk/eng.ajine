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
                <li class="active"><a href="/customer/agency.php">Agency</a></li>
                <li><a href="/customer/technical_terms.php">Technical Terms</a></li>
                <li><a href="/customer/solution01.php">Solution</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="agency">
                <div class="section-header">
                    <h3>Agency</h3>
                </div>
                <div class="section-content">
                	<figure>
                		<img src="/assets/images/customer/img_map.jpg" alt="지도">
                	</figure>
                	<div class="table-wrap">
                		<table class="table table-bordered">
                			<colgroup>
                				<col style="width: 135px;">
                				<col style="width: 95px;">
                				<col style="width: 110px;">
                				<col style="width: 75px;">
                				<col style="width: 270px;">
                			</colgroup>
							<thead>
								<tr>
									<th>company</th>
									<th>president</th>
									<th>telephone</th>
									<th>region</th>
									<th>Mail address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>(RNS)</td>
									<td>Yong-Jin Jeon</td>
									<td>
										031-479-3591
									</td>
									<td>Uiwang</td>
									<td>
										<a href="mailto:rns77@naver.com">rns77@naver.com</a>
									</td>
								</tr>
								<tr>
									<td>(Industek)</td>
									<td>Sang-Mu Lee</td>
									<td>
										02-2083-3088
									</td>
									<td>Gwangmyeong</td>
									<td>
										<a href="mailto:smlee@industek.co.kr">smlee@industek.co.kr</a>
									</td>
								</tr>
								<tr>
									<td>(Chang gong FA)</td>
									<td>Han-Su Kim</td>
									<td>
										031-695-6927
									</td>
									<td>Suwon</td>
									<td>
										<a href="mailto:sky@bigsky.co.kr">sky@bigsky.co.kr</a>
									</td>
								</tr>
								<tr>
									<td>(A Plus)</td>
									<td>Sung-jun Kim</td>
									<td>
										031-278-0552
									</td>
									<td>Suwon</td>
									<td>
										<a href="mailto:servopack@aplus-motion.co.kr">servopack@aplus-motion.co.kr</a>
									</td>
								</tr>
								<tr>
									<td>(Seju Motion)</td>
									<td>Jung-ung choi</td>
									<td>
										070-4063-1678
									</td>
									<td>Bucheon</td>
									<td>
										<a href="mailto:never771@naver.com">never771@naver.com</a>
									</td>
								</tr>
								<tr>
									<td>(Rainbow system)</td>
									<td>Hak-chul Kim</td>
									<td>
										041-554-8800
									</td>
									<td>Cheonan</td>
									<td>
										<a href="mailto:rainbowsystem@rainbowsystem.co.kr">rainbowsystem@rainbowsystem.co.kr</a>
									</td>
								</tr>
								<tr>
									<td>(Core tech)</td>
									<td>Gwang-su Kim</td>
									<td>
										054-471-7898
									</td>
									<td>Gumi</td>
									<td>
										<a href="mailto:core-tech1@nate.com">core-tech1@nate.com</a>
									</td>
								</tr>
							</tbody>
						</table>
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