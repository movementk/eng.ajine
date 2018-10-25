<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/customer.css">
</head>
<body class="sub customer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>

    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <h2>CUSTOMER COMPANY</h2>
            <p>미래를 여는 기업 아진엑스텍입니다.</p>
        </div>
    </div>

    <!-- snb-list -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/customer/_snb_list.php'); ?>
    
    <!-- Content -->
    <main id="content">
        <div class="container">
            <section class="agency">
                <div class="section-header">
                    <h3 class="section-title">대리점</h3>
                </div>
                <div class="section-content">
                    <figure>
                        <img src="/mobile/assets/images/customer/img_map.jpg" class="img-fluid" alt="">
                    </figure>
                    <div class="table-responsive">
                        <table class="table table-type-1">
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
										<a href="tel:0314793591">031-479-3591</a>
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
										<a href="tel:0220833088">02-2083-3088</a>
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
										<a href="tel:0316956927">031-695-6927</a>
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
										<a href="tel:0312780552">031-278-0552</a>
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
										<a href="tel:07040631678">070-4063-1678</a>
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
										<a href="tel:0415548800">041-554-8800</a>
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
										<a href="tel:0544717898">054-471-7898</a>
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

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>