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

<section id="introm">
    <article class="introimg">
        <img src="<?php echo G5_URL ?>/images/exam.jpg" alt="함께찍은 사진">
    </article>
    <article class="introtext">
        <p>Goom모닝은 고향으로 내려온 굼아저씨와 잡초농부가 함께<br>2018년부터 전라남도 함평에서 흰점박이꽃무지(굼벵이) 사육을 시작했습니다.<br>
        2019년부터 안정적인 생산에 맞춰 기업 중심으로 납품을 해왔습니다. <br>2020년부터 지속적인 생산량 증가로 온라인 판매까지 영역을 확장했습니다.<br>
        또한 2020년부터 생태관찰과 교육이 가능한 키우기 세트 판매도 시작했습니다. <br> Goom모닝은 농촌의 지속 가능한 삶을 꿈꾸며 곤충 사육에 매진하고 있습니다.<br>
        현재 굼아저씨는 유채 농사를 잡초농부는 삼잎국화 농사를 함께하고 있습니다.</p> 
    </article>
    <article class="vedio">
        <p>굼아저씩와 잡초농부<br>출현 TV 보기</p>
        <iframe width="560" height="315" src="https://youtu.be/1oRRDW1CdyY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://youtu.be/iNLS1AMtOwc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </article>
    <article class="podbbang">
        <a href="http://www.podbbang.com/ch/16646">굼아저씩와 잡초농부<br>팟캐스트 바로가기</a>
        <img src="<?php echo G5_URL ?>/images/pod.PNG" alt="팟캐스트 썸네일">
    </article>
    <article class="mapm">
        <h4>Goom모닝 오시는 길</h4>
        <img src="<?php echo G5_URL ?>/images/exam.jpg" alt="팟캐스트 썸네일">
        <p>전라남도 함평군 해보면 올림픽로 973</p>
    </article>
</section>

