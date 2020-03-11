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
          <div class="introimg">
                <img src="<?php echo G5_URL ?>/images/intro/intro1.png" alt="health">
                <p><span>Health</span><br>고단백 굼벵이</p>
            </div>
            <div class="introimg">
                <img src="<?php echo G5_URL ?>/images/intro/intro2.png" alt="Pure">
                <p><span>Pure</span><br>주기적인 식품 안전 검사</p>
            </div>
            <div class="introimg">
                <img src="<?php echo G5_URL ?>/images/intro/intro3.png" alt="Future">
                <p><span>Future</span><br>미래 대안식량 식용 곤충</p>
            </div>
            <div class="introimg">
                <img src="<?php echo G5_URL ?>/images/intro/intro6.png" alt="굼모닝 축사">
                <p><span>전남 함평</span><br>2018년 신축<br>굼벵이 농장</p>
            </div>
            <div class="introimg">
                <img src="<?php echo G5_URL ?>/images/intro/intro4.png" alt="굼아저씨">
                <p><br><br>굼아저씨<br> 이행섭</p>
            </div>
            <div class="introimg">
                <img src="<?php echo G5_URL ?>/images/intro/intro5.png" alt="잡초농부">
                <p><br><br>잡초농부<br> 이지형</p>
            </div>
    </article>
</section>



