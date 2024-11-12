<?php
    $sname = isset($_POST['sname']) ? $_POST['sname'] : '';
    $snum = isset($_POST['snum']) ? $_POST['snum'] : '';
    $sdep = isset($_POST['sdep']) ? $_POST['sdep'] : '';

    $poll01 = isset($_POST['poll01']) ? $_POST['poll01'] : '';
    $poll02 = isset($_POST['poll02']) ? $_POST['poll02'] : '';
    $poll03 = isset($_POST['poll03']) ? $_POST['poll03'] : '';

    $poll10 = [];
    if (isset($_POST['poll10A'])) $poll10[] = "자료제공(콘텐츠)";
    if (isset($_POST['poll10B'])) $poll10[] = "스터디 모임(자격증)";
    if (isset($_POST['poll10C'])) $poll10[] = "커뮤니티";
    if (isset($_POST['poll10D'])) $poll10[] = "이벤트";
    if (isset($_POST['poll10E'])) $poll10[] = "게임 만들기";
    if (isset($_POST['poll10F'])) $poll10[] = "공모전 참여";
    if (isset($_POST['poll10G'])) $poll10[] = "기타의견: " . $_POST['poll10H'];

    $poll20 = [];
    if (isset($_POST['poll20A'])) $poll20[] = "C언어(C++,C#)";
    if (isset($_POST['poll20B'])) $poll20[] = "파이썬";
    if (isset($_POST['poll20C'])) $poll20[] = "자바";
    if (isset($_POST['poll20D'])) $poll20[] = "기타: " . $_POST['poll20E'];

    $poll30 = [];
    if (isset($_POST['poll30A'])) $poll30[] = "RPG게임";
    if (isset($_POST['poll30B'])) $poll30[] = "AOS게임";
    if (isset($_POST['poll30C'])) $poll30[] = "FPS게임";
    if (isset($_POST['poll30D'])) $poll30[] = "기타: " . $_POST['poll30E'];

    $poll40 = [];
    if (isset($_POST['poll40A'])) $poll40[] = "유니티";
    if (isset($_POST['poll40B'])) $poll40[] = "언리얼";
    if (isset($_POST['poll40C'])) $poll40[] = "소스엔진";
    if (isset($_POST['poll40D'])) $poll40[] = "주피터";
    if (isset($_POST['poll40E'])) $poll40[] = "기타: " . $_POST['poll40F'];

    $poll50 = isset($_POST['poll50']) ? $_POST['poll50'] : '';
    $poll60 = isset($_POST['poll60']) ? $_POST['poll60'] : '';

    echo "<h1>설문 응답 결과</h1>";
    echo "<p><strong>이름:</strong> $sname</p>";
    echo "<p><strong>학번:</strong> $snum</p>";
    echo "<p><strong>학과:</strong> $sdep</p>";

    echo "<h2>설문 결과</h2>";

    echo "<p><strong>1. 나는 프로그래밍에 대해 자신이 있다:</strong> $poll01</p>";
    echo "<p><strong>2. 게임이 만들어지는 과정에 대해 이해가 있다:</strong> $poll02</p>";
    echo "<p><strong>3. 게임을 만들어 본 경험이 있다:</strong> $poll03</p>";

    echo "<h3>프로그래밍 동아리 가입 시 중요하게 생각하는 부분:</h3>";
    echo "<ul>";
    foreach ($poll10 as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";

    echo "<h3>자신이 다룰 수 있는 프로그래밍 언어:</h3>";
    echo "<ul>";
    foreach ($poll20 as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";

    echo "<h3>만들고 싶은/선호하는 게임 종류:</h3>";
    echo "<ul>";
    foreach ($poll30 as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";

    echo "<h3>이해하고 있는/다룰 수 있는 게임 엔진:</h3>";
    echo "<ul>";
    foreach ($poll40 as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";

    echo "<p><strong>같은 팀 희망 멤버:</strong> $poll50</p>";
    echo "<p><strong>희망하는 멘토:</strong> $poll60</p>";
?>

<p>제작자 정보<br>응용소프트웨어공학과<br>홍효정</p>