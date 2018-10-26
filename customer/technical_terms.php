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
                <li><a href="/customer/agency.php">대리점</a></li>
                <li class="active"><a href="/customer/technical_terms.php">기술용어</a></li>
                <li><a href="/customer/solution01.php">솔루션</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content">
        <div class="container">
            <section class="technical-terms">
                <div class="section-header">
                    <h3>기술용어</h3>
                    <p>아진 엑스텍의 제품과 관련된<br>모션 제어 기술에 대한 용어들을 쉽게 정의하였습니다.</p>
                </div>
                <div class="section-content">
                    <nav class="spelling-tab">
                        <ol class="consonant kor">
                            <li class="active"><a href="#">ㄱ</a></li>
                            <li><a href="#">ㄴ</a></li>
                            <li><a href="#">ㄷ</a></li>
                            <li><a href="#">ㄹ</a></li>
                            <li><a href="#">ㅁ</a></li>
                            <li><a href="#">ㅂ</a></li>
                            <li><a href="#">ㅅ</a></li>
                            <li><a href="#">ㅇ</a></li>
                            <li><a href="#">ㅈ</a></li>
                            <li><a href="#">ㅊ</a></li>
                            <li><a href="#">ㅋ</a></li>
                            <li><a href="#">ㅌ</a></li>
                            <li><a href="#">ㅍ</a></li>
                            <li><a href="#">ㅎ</a></li>
                            <li><a href="#">기타</a></li>
                        </ol>
                        <ol class="consonant eng">
                            <li><a href="#">A</a></li>
                            <li><a href="#">B</a></li>
                            <li><a href="#">C</a></li>
                            <li><a href="#">D</a></li>
                            <li><a href="#">E</a></li>
                            <li><a href="#">F</a></li>
                            <li><a href="#">G</a></li>
                            <li><a href="#">H</a></li>
                            <li><a href="#">I</a></li>
                            <li><a href="#">J</a></li>
                            <li><a href="#">K</a></li>
                            <li><a href="#">L</a></li>
                            <li><a href="#">M</a></li>
                            <li><a href="#">N</a></li>
                            <li><a href="#">O</a></li>
                            <li><a href="#">P</a></li>
                            <li><a href="#">Q</a></li>
                            <li><a href="#">R</a></li>
                            <li><a href="#">S</a></li>
                            <li><a href="#">T</a></li>
                            <li><a href="#">U</a></li>
                            <li><a href="#">V</a></li>
                            <li><a href="#">W</a></li>
                            <li><a href="#">X</a></li>
                            <li><a href="#">Y</a></li>
                            <li><a href="#">Z</a></li>
                        </ol>
                    </nav>
                    <div class="table-wrap">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Absolute Positioning</th>
                                    <td>Refers to a motion control system employing position feedback devices (absolute encoders) to maintain a given mechanical location.</td>
                                </tr>
                                <tr>
                                    <th>AC servo</th>
                                    <td>A general term referring to a motor drive that generates sinusiodal shaped motor control currents.</td>
                                </tr>
                                <tr>
                                    <th>Acceleration</th>
                                    <td>The rate at which something increases its velocity. Acceleration is usually measured in units of velocity change for each unit of time (inches/second(velocity)/second (time)) and in this example would be written as in./sec/sec or in./sec2.</td>
                                </tr>
                                <tr>
                                    <th>Accuracy</th>
                                    <td>The relative status of something compared to its absolute or perfect value. <br>
                                    In motion control this will most often be a position description. A command may be sent to move 4.0". The accuracy of the system will be defined by how close to the absolute value of 4.0" the system can affect the move.<br>
                                    Accuracy may be defined as a onetime incident or the average over a number of cycles or motions. Positioning accuracy will normally be defined in terms of deviation (+/- from theoretical) or limits (acceptable variation from theoretical: ie. 3.8"-4.2" define acceptable limits of variation around a theoretical point of 4.0")</td>
                                </tr>
                                <tr>
                                    <th>Active Indicator</th>
                                    <td>베이스 보드 혹은 Module에 장착되어 베이스 보드 혹은 Module의 상태를 육안으로 확인할 수 있는 LED를 지칭</td>
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