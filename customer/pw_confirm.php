<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body class="sub customer space">
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
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="pw-confirm">
                <div class="section-header">
                    <h3>비밀번호 확인</h3>
                    <p>개인정보를 보호하기위해 비밀번호를 한번 더 확인합니다.</p>
                </div>
                <div class="section-content">
                	<form action="#">
                	    <div class="form-group">
                            <input type="password" id="u-pw" class="form-control" placeholder="비밀번호를 입력해주세요">
                            <label for="u-pw" class="sr-only">비밀번호 확인</label>
                            <button type="submit" class="btn btn-lg btn-blue">확인</button>
                	    </div>
                	</form>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
    <script type="text/javascript" src="/assets/js/sub.js"></script>
</body>
</html>