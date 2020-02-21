<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">상단Tab</h2>
<div id="gTab">
    <ul class="gTab_h">
        <li><a href="#">굼모닝 소개</a></li>
        <li><a href="#">굼벵이 사육</a></li>
        <li><a href="#">식용 굼벵이</a></li>
        <li><a href="#">질문있어요!</a></li>
    </ul>
    <div class="gTab_t">
        <div class="gTab1">
            <img src="<?php echo G5_URL ?>/images/tab1.png" alt="굼모닝 생산자">
            <p>
                Goom모닝은 청정한 전남 함평군에 자리잡고 있으며<br>
                서울과 광주에서 귀농한 두 청년농부가 아주 열심히<br>
                흰점박이꽃무지(굼벵이) 사육과<br>
                건조 굼벵이 판매를 하고 있습니다
            <p>
        </div>
        <div class="gTab2">
            <img src="<?php echo G5_URL ?>/images/tab2.png" alt="농장내부,굼벵이">
            <p>
                흰점박이꽃무지(꽃벵이)의 유충인 식용 굼벵이<br>
                ▷▷ 작은 굼벵이가 아닌 속이 꽉찬 3령 굼벵이를 선별<br>
                굼벵이 불순물 제거 작업 ▷▷ 살균을 위한 삶기 작업<br>
                ▷▷ 건조 작업 후 순수 100% 굼벵이를 소포장하여 판매<br>
            <p>
        </div>
        <div class="gTab3">
            <img src="<?php echo G5_URL ?>/images/tab1.png" alt="제품사진">
            <p>
                <h4 class="th1">굼모닝 통 굼벵이의 좋은 점은?</h4>
                그 무엇도 섞지 않은, 순수 100% 굼벵이입니다.<br>
                주기적인 중금속 및 품질 검사로 안전합니다.<br>
                식용 굼벵이 대중화를 위해 마진을 줄여 가격을 낮췄습니다.<br>
            <p>
            <input type="button" value="구매하러 바로가기"class="tab3btn"> 
        </div>
        <div class="gTab4">
            <img src="<?php echo G5_URL ?>/images/tab4.png" alt="건조 굼벵이">
            <p>
                <h4 class="th1">건조 굼벵이는 무슨 맛인가요?</h4>
                단 맛이 없는 새우과자 맛입니다. 
                <h4 class="th1">통 굼벵이 먹을 수 있을까요?</h4>
                번데기와 비슷한 크기와 형태이며, 번데기를 먹는 것과 비슷합니다.
                <h4 class="th1">굼벵가 효과가 있나요?</h4>
                동의보감에도 나와있듯, 굼벵이 효과는 많이 알려져있습니다.
                섭취가 처음이라면, 소포장 제품을 구매하여 섭취 후 효과를 느껴보세요!
            <p>
        </div>
    </div>
    
    
</div>   


<h2 class="sound_only">contents</h2>

<h2 class="sound_only">최신글</h2>
<div class="latest_top_wr">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/basic', 'free', 4, 23);		// 최소설치시 자동생성되는 자유게시판
	echo latest('theme/basic', 'qaqa', 4, 23);			// 최소설치시 자동생성되는 질문답변게시판
	echo latest('theme/basic', 'notice', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판
    ?>
</div>

<p class="banner_text"><span>구매 문의</span> 010-5904-1603  ㅣ  <span>E-mail</span> goommorning@naver.com  ㅣ  <span>계좌</span> 농협 000-0000-00000(굼모닝)</p>

<div class="indexlink">
    <div class="indexlinkbox1">
        <img src="<?php echo G5_URL ?>/images/indexdown.png" alt="농장내부사진">
    </div>
    <div class="indexlinkbox2">
        <p class="indexlink2T">굼벵이 구매</P>
        <p class="indexlink2C1">Type1 건조 통 굼벵이</p>
        <p class="indexlink2C2">Type2 살아있는 성충(암/수)</p>
        <p class="indexlink2C3">Type3 살아있는 코쿤,굼벵이</p>
        <p class="indexlink2btn"><a href="http://goommorning.co.kr/bbs/board.php?bo_table=goom">굼벵이 구매 바로가기</a></p>
        <img src="<?php echo G5_URL ?>/images/link1.png" alt="굼벵이와 통나무">
    </div>
</div>    

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>