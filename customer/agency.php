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
                <li><a href="/customer/request_list.php">견적요청</a></li>
                <li class="active"><a href="/customer/agency.php">대리점</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="agency">
                <div class="section-header">
                    <h3>대리점</h3>
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
									<th>업체명</th>
									<th>대표자명</th>
									<th>전화번호</th>
									<th>주소</th>
									<th>메일주소</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>알엔에스</td>
									<td>전용진</td>
									<td>
										031-479-3591
									</td>
									<td>의왕</td>
									<td>
										<a href="mailto:rns77@naver.com">rns77@naver.com</a>
									</td>
								</tr>
								<tr>
									<td>인더스텍</td>
									<td>이상무</td>
									<td>
										02-2083-3088
									</td>
									<td>광명</td>
									<td>
										<a href="mailto:smlee@industek.co.kr">smlee@industek.co.kr</a>
									</td>
								</tr>
								<tr>
									<td>창공FA</td>
									<td>김한수</td>
									<td>
										031-695-6927
									</td>
									<td>수원</td>
									<td>
										<a href="mailto:sky@bigsky.co.kr">sky@bigsky.co.kr</a>
									</td>
								</tr>
								<tr>
									<td>에이플러스</td>
									<td>김성준</td>
									<td>
										031-278-0552
									</td>
									<td>수원</td>
									<td>
										<a href="mailto:servopack@aplus-motion.co.kr">servopack@aplus-motion.co.kr</a>
									</td>
								</tr>
								<tr>
									<td>세주모션</td>
									<td>최정웅</td>
									<td>
										070-4063-1678
									</td>
									<td>부천</td>
									<td>
										<a href="mailto:never771@naver.com">never771@naver.com</a>
									</td>
								</tr>
								<tr>
									<td>레인보우시스템</td>
									<td>김학철</td>
									<td>
										041-554-8800
									</td>
									<td>천안</td>
									<td>
										<a href="mailto:rainbowsystem@rainbowsystem.co.kr">rainbowsystem@rainbowsystem.co.kr</a>
									</td>
								</tr>
								<tr>
									<td>코아테크</td>
									<td>김광수</td>
									<td>
										054-471-7898
									</td>
									<td>구미</td>
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