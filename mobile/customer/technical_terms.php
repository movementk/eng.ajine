<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/customer.css">
</head>
<body class="sub customer position-space">
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
        <section class="technical-terms">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">기술용어</h3>
                </div>
                <div class="section-content">
                    <ul>
                        <li>
                            <h4>Absolute Positioning</h4>
                            <p>Refers to a motion control system employing position feedback devices (absolute encoders) to maintain a given mechanical location.</p>
                        </li>
                        <li>
                            <h4>AC servo</h4>
                            <p>A general term referring to a motor drive that generates sinusiodal shaped motor control currents.</p>
                        </li>
                        <li>
                            <h4>Acceleration</h4>
                            <p>The rate at which something increases its velocity. Acceleration is usually measured in units of velocity change for each unit of time (inches/second(velocity)/second (time)) and in this example would be written as in./sec/sec or in./sec2.</p>
                        </li>
                        <li>
                            <h4>Accuracy</h4>
                            <p>
                                The relative status of something compared to its absolute or perfect value. In motion control this will most often be a position description. A command may be sent to move 4.0". The accuracy of the system will be defined by how close to the absolute value of 4.0" the system can affect the move. Accuracy may be defined as a onetime incident or the average over a number of cycles or motions. Positioning accuracy will normally be defined in terms of deviation (+/- from theoretical) or limits (acceptable variation from theoretical: ie. 3.8"-4.2" define acceptable limits of variation around a theoretical point of 4.0")
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    
    <!-- spelling-tab -->
    <nav class="spelling-tab">
        <div class="accordion" id="spelling-list">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        목차열기
                    </button>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#spelling-list">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">ㄱ</a></li>
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
                            <li><a href="#">ㅍ</a></li>
                            <li><a href="#">ㅌ</a></li>
                            <li><a href="#">ㅎ</a></li>
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
                            <li><a href="#">기타</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>