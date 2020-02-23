<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<section id="introwrap">
    <article class="introtext">
            <div class="introradius"></div>
            <div class="introimg1">
                <img src="<?php echo G5_URL ?>/images/intro/intro1.png" alt="health">
                <p><span>Health</span><br>고단백 굼벵이</p>
            </div>
            <div class="introimg2">
                <img src="<?php echo G5_URL ?>/images/intro/intro2.png" alt="Pure">
                <p><span>Pure</span><br>주기적인 식품검사</p>
            </div>
            <div class="introimg3">
                <img src="<?php echo G5_URL ?>/images/intro/intro3.png" alt="Future">
                <p><span>Future</span><br>미래 대안 식량</p>
            </div>
            <div class="introimg4">
                <img src="<?php echo G5_URL ?>/images/intro/intro4.png" alt="굼아저씨">
                <p><br><br>굼아저씨 이행섭</p>
            </div>
            <div class="introimg5">
                <img src="<?php echo G5_URL ?>/images/intro/intro5.png" alt="잡초농부">
                <p><br><br><br><br>잡초농부 이지형</p>
            </div>
            <div class="introimg6">
                <img src="<?php echo G5_URL ?>/images/intro/intro6.png" alt="굼모닝 축사">
                <p><span>Goom모닝</span><br>2018년 신축축사</p>
            </div>
            <div class="introimg7">
               <img src="<?php echo G5_URL ?>/images/intro/intro7.png" alt="굼모닝 축사">
               <p class="intro7text"> 
               <span>Goom모닝</span>은<br>
                청정한 전남 함평군에 있으며<br>
                귀농한 두 청년농부가 아주 열심히<br>
                흰점박이꽃무지(꽃벵이) 사육과<br>
                그 유충인 굼벵이를 판매합니다<br></p>
            </div>
    </article>
</section>
<section class="videowrap">
    <p>굼아저씨와 잡초농부가 TV에 나왔어요</p>
    <div class="video1">
        <video id="bg_video" src="<?php echo G5_URL ?>/images/avi1.mp4" controls=""></video>
        <p>▲ kbc 광주방송 꼼지락</p>
    </div>
    <div class="video2">
        <video id="bg_video" src="<?php echo G5_URL ?>/images/avi2.mp4" controls=""></video>
        <p>▲ EBS 한국기행</p>
    </div>
</section>
<section class="mapwrap">
    <p class="title">Goom모닝 오시는 길</p>
    <img src="<?php echo G5_URL ?>/images/intro/intro8.jpg" alt="굼모닝 굼아저씩 잡초농부">
    <p>·&nbsp;주소 : 전라남도 함평군 해보면 올림픽로 973 (우)57115<br><br>
            ·&nbsp;휴대전화 : 010-5904-1603</br><br>
            ·&nbsp;굼모닝 농장 : 061-000-0000</br><br>
            ·&nbsp;Fax : 0504-333-5627<br><br>
            ·&nbsp;E-mail : goommorning@naver.com</p>
</section>


