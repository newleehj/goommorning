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

<section class="contactwrap">
    <article class="phone_c">
        <img src="<?php echo G5_URL ?>/images/phone.png" alt="전화기 아이콘">
        <p>전화 주문 및 문의<br>010.5904.1603</p>
    </article>
    <article class="naver_c"><a href="https://shopping.naver.com/">
        <img src="<?php echo G5_URL ?>/images/mall.png" alt="쇼핑카트 아이콘">
        <p>온라인 구매 바로가기 Click >><br>NAVER 쇼핑</p></a>
    </article>
    <article class="kakao_c"><a href="https://store.kakao.com/">
        <img src="<?php echo G5_URL ?>/images/mall.png" alt="쇼핑카드 아이콘">
        <p>온라인 구매 바로가기 Click >><br>카카오 쇼핑</p></a>
    </article>
</section>
<section class="sellwrap">
    <article class="slider">
        <div><img src="<?php echo G5_URL ?>/images/link1.png" alt="100g사진"></div>
        <div><img src="<?php echo G5_URL ?>/images/link2.png" alt="200g사진"></div>
        <div><img src="<?php echo G5_URL ?>/images/link1.png" alt="300g사진"></div>
    </article>
    <article class="sell_t">
        <p class="sell_h">Goom모닝 건조 굼벵이</p>
        <p class="sell_c">100g <span>35,000원</span>약 1개월~1개월 2주 분</p>
        <p class="sell_c">200g <span>62,000원</span>약 2개월~2개월 2주 분</p>
        <p class="sell_c">300g <span>88,000원</span>약 3개월~3개월 2주 분</p>
        <p class="sell_p">*택배비 없음ㅣ배송기간 2일~3일</p>
    </article>
</section>
<section class="detailgoom">
    <img src="<?php echo G5_URL ?>/images/detail.png" alt="상세피이지">
</section>
<section class="contactwrap2">
    <article class="phone_c">
        <img src="<?php echo G5_URL ?>/images/phone.png" alt="전화기 아이콘">
        <p>전화 주문 및 문의<br>010.5904.1603</p>
    </article>
    <article class="naver_c"><a href="https://shopping.naver.com/">
        <img src="<?php echo G5_URL ?>/images/mall.png" alt="쇼핑카트 아이콘">
        <p>온라인 구매 바로가기 Click >><br>NAVER 쇼핑</p></a>
    </article>
    <article class="kakao_c"><a href="https://store.kakao.com/">
        <img src="<?php echo G5_URL ?>/images/mall.png" alt="쇼핑카드 아이콘">
        <p>온라인 구매 바로가기 Click >><br>카카오 쇼핑</p></a>
    </article>
</section>
<script>
    $(document).ready(function(){
      $('.slider').bxSlider({auto: true});
    });
  </script>