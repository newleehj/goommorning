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
    <article class="introimg">
        <img src="<?php echo G5_URL ?>/images/intro1.png" alt="굼벵이 확대">
    </article>
    <article class="introtext">
        <p>Goom모닝은 고향인 전라남도 함평으로 내려온 굼아저씨와 잡초농부가<br>2018년, 굼벵이 농장을 짓고 흰점박이꽃무지(굼벵이) 사육을 시작했습니다.<br>
        2019년부터 안정적인 생산에 맞춰 기업 중심으로 납품을 해왔고 <br>2020년부터 지속적인 생산량 증가로 온라인 판매까지 영역을 확장했습니다<br>
        단백질의 보고이자 미래 식량으로 주목받는 굼벵이!<br>Goom모닝은 농촌 활력을 위해 도전하는 청년들의 농장입니다!<br>
        현재 굼아저씨는 유채 재배, 잡초농부는 단삼과 삼잎국화도 재배도 하고 있답니다.</p> 
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
<section class="podwrap">
    <p>굼아저씨와 잡초농부의 팟캐스트</p>
    <img src="<?php echo G5_URL ?>/images/pod.PNG" alt="팟캐스트 썸네일">
    <a href="http://www.podbbang.com/ch/16646">팟캐스트 바로가기 Click >> </a>
</section>
<section class="mapwrap">
    <p class="title">Goom모닝 오시는 길</p>
    <img src="<?php echo G5_URL ?>/images/intro2.png" alt="함께 찍은 사진">
    <p>전라남도 함평군 해보면 올림픽로 973<br>(지번)해보면 대각리 623(우) 57115</p>
</section>


