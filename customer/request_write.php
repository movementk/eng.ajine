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
                <li class="active"><a href="/customer/request_list.php">견적요청</a></li>
                <li><a href="/customer/agency.php">대리점</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="request-write">
                <div class="section-header">
                    <h3>견적요청</h3>
                </div>
                <div class="section-content">
                    <div class="table-wrap">
                        <form action="#">
                            <table class="table table-write">
                                <tbody>
                                    <tr>
                                        <th><label for="u-title">제목</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-title" class="form-control">
                                            </div>
                                        </td>
                                        <th><label for="company-name">회사명</label></th>
                                        <td>
                                        	<div class="form-group">
                                                 <input type="text" id="company-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-name">성명</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
                                            </div>
                                        </td>
                                        <th><label for="business-name">업체명</label></th>
                                        <td>
                                        	<div class="form-group">
                                                 <input type="text" id="business-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-phone">전화번호</label></th>
                                        <td colspan="3">
                                            <div class="form-group">
                                                <input type="text" id="u-phone" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="v-align"><label for="u-content">문의내용</label></th>
                                        <td colspan="3">
                                            <div class="form-group">
                                                <textarea id="u-content" class="form-control" placeholder="ex) 제품명, 이상증상 및 문의 사항"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>파일첨부</th>
                                        <td class="file" colspan="3">
                                            <div class="form-group">
                                                <input type="file" id="u-attach" class="form-control">
                                                <label for="u-attach">파일찾기</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-lg btn-white" role="button">취소하기</a>
                                    <button type="submit" class="btn btn-lg btn-blue">등록하기</button>
                                </p>
                            </div>
                        </form>
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