<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<style>
/* bg*/
#wrapper::before{
    content:'';
    background-color:rgba(0,40,100,0.1);
    display:block;
    width:9000px;
    height:1300px;
    position:absolute;
    top:1590px;left:0;
}
#container_wr::before{
    content:'';
    background-color:rgba(221,221,221,0.3);
    display:block;
    width:9000px;
    height:805px;
    position:absolute;
    top:785px;left:0;
}    

/* 상단Tab css */
/* 상단Tab-header */
#gTab{width:1200px;height:600px;position:relative;top:0;left:-120px;}
.gTab_h{font-size:0;}
.gTab_h>li{width:179.5px;height:40px;line-height:40px;display:inline-block;background:#323333;
                border:1px solid #13AD67;border-left:none;border-top:none;box-sizing:border-box;}
.gTab_h>li>a{font-size:16px;color:#fff;display:block;text-align:center;letter-spacing:-2px;word-spacing:-1px;}
.gActive{background:#13AD67 !important;border-bottom:#323333 !important;}

/* 상단Tab-text */
.gTab1{position:relative;}
.gTab1>p{position:absolute;top:80px;left:100px;font-size:14px;color:#fff;line-height:1.8;letter-spacing:-1px;word-spacing:-1px;}
.gTabs1{font-size:27px;letter-spacing:-2px;word-spacing:-3px;}

.gTab2{position:relative;}
.gTab2>p{position:absolute;top:90px;left:100px;font-size:14px;color:#fff;line-height:2;letter-spacing:-1px;word-spacing:-1px;}
.gTabs{font-size:27px;letter-spacing:-2px;word-spacing:-3px;}

.gTab3{position:relative;}
.gTab3>p{position:absolute;top:90px;left:100px;font-size:14px;color:#fff;line-height:2;letter-spacing:-1px;word-spacing:-1px;}
.gTabs2{color:#323333;font-size:15px;}
.tab3btn{width:320px;position:absolute;top:270px;left:300px;padding:5px 0;color:#fff;border:2px solid #fff;border-radius:20px;background:none;}
.tab3btn:hover{border:2px solid #323333;color:#323333;}

.gTab4{position:relative;}
.gTab4>p{position:absolute;top:100px;left:100px;font-size:14px;color:#fff;line-height:2.2;letter-spacing:-1px;word-spacing:-1px;}

/* 컨텐츠-영상,네이버쇼핑바로가기,직접주문 */
.gcontents{width:1200px;height:340px;margin:50px 0 0 -120px;letter-spacing:-2px;word-spacing:-2px;}
.gc_video{width:605px;height:340px;background:#323333;float:left;position:relative;}
.gc_video>p{position:absolute;top:10px;left:10px;z-index:9999;font-size:40px;color:#fff;font-weight:bolder;text-shadow: 1px 2px #323333;}
#main_v{height:340px;}

.gc_naver{width:235px;height:340px;float:left;margin:0 10px;border:1px solid #ddd;position:relative;background:#fff;}
.gc_naver_h{font-size:20px;color:#323333;position:absolute;top:30px;left:22px;line-height:1.5;}
.gc_naver_h>span{border:2px solid #ddd;border-radius:20px;padding:0  30px 3px 30px;margin:50px 0 0 -7px;line-height:50px;}  
.gc_naver_h>span:hover{border:2px solid #13AD67;color:#13AD67;}              
.gc_naver>a>img{width:160px;margin:170px 0 10px 70px;}


.gc_buy{width:340px;height:340px;background:url("<?php echo G5_URL ?>/images/intro1.png");background-size:340px;float:left;position:relative;}
.gc_buy_h{position:absolute;top:10px;left:10px;z-index:9999;font-size:30px;color:#fff;font-weight:bolder;text-shadow: 1px 2px #323333;}
.gc_buy_s{font-size:23px;color:#fff;position:absolute;top:80px;left:65px;line-height:1.5;letter-spacing:-2px;}
.gc_buy_t{font-size:17px;color:#fff;position:absolute;top:210px;left:35px;line-height:1.8;}

/* 하단-갤러리 슬라이드*/
.ggallery{width:1200px;background:#323333;margin:10px 0 0 -120px;position:relative;}
.ggallery>p{position:absolute;top:10px;left:10px;z-index:9999;font-size:50px;color:#fff;font-weight:bolder;text-shadow: 1px 2px #323333;}


</style>

<script>
    $(function(){
        var tabBtn = $('.gTab_h>li');
        var tabCont = $('.gTab_t>div');
        tabCont.hide().eq(0).show();
        tabBtn.click(function(e){
            e.preventDefault();
            var target=$(this);
            var index=target.index();
            tabBtn.removeClass('gActive')
            tabBtn.css('background','#323333');
            target.css('background','#13AD67');
            tabCont.css("display","none");
            tabCont.eq(index).css("display","block");
        })
    })
</script>

<h2 class="sound_only">상단Tab</h2>
<div id="gTab">
    <ul class="gTab_h">
        <li  class="gActive"><a href="#">질문있어요!</a></li>
        <li><a href="#">굼벵이 사육</a></li>
        <li><a href="#">식용 굼벵이</a></li>
        <li><a href="#">굼모닝 소개</a></li>
    </ul>
    <div class="gTab_t">
        <div class="gTab1">
            <img src="<?php echo G5_URL ?>/images/tab1_g.png" alt="건조 굼벵이">
            <p>
                <span class="gTabs1">Q) 건조 통 굼벵이는 무슨 맛인가요?</span><br>
                &nbsp;&nbsp; ·&nbsp;단 맛이 없는 새우과자 맛입니다. 비리지 않고 고소합니다<br><br>
                <span class="gTabs1">Q) 건조 통 굼벵이 먹을 수 있을까요?</span><br>
                &nbsp;&nbsp; ·&nbsp;번데기와 비슷한 크기와 형태이며, 번데기를 먹는 것과 비슷합니다<br>
                &nbsp;&nbsp; ·&nbsp;가루 굼벵이보다 저렴한 통 굼벵이를 구매하여 가정용 믹서기로 갈아서 드셔도 좋습니다<br><br>
                <span class="gTabs1">Q) 굼벵이를 먹으면 효과가 있나요?</span><br>
                &nbsp;&nbsp; ·&nbsp;동의보감에도 나와있듯, 굼벵이 효과는 많이 알려져있습니다<br>
                &nbsp;&nbsp; ·&nbsp;굼벵이 섭취가 처음이라면, 소량 포장 제품을 구매하여 섭취한 후 그 효과를 느껴보세요!<br>
            <p>
        </div>
        <div class="gTab2">
            <img src="<?php echo G5_URL ?>/images/tab2.png" alt="농장내부,굼벵이">
            <p> 
                <span class="gTabs"> 흰점박이꽃무지 유충, 굼벵이 사육하기</span><br>
                ·&nbsp; 알 > 굼벵이 > 굼벵이 1령 > 2령 > 3령 > 코쿤 > 성충<br>
                ·&nbsp; 굼벵이 먹이는 버섯 배지, 성충 먹이는 바나나, 사과 등 과일<br><br>
                <span class="gTabs"> 건조 통 굼벵이 만들기</span><br>
                ·&nbsp; 작은 굼벵이가 아닌 속이 꽉찬 3령 굼벵이를 선별<br>
                ·&nbsp; 굼벵이 불순물(대변 등) 제거 작업 후 살균을 위한 삶기 작업<br>
                ·&nbsp; 건조기로 건조 작업 후 굼벵이를 포장하면 미션 완료! <br>
                
            <p>
            <!-- <img src="<?php echo G5_URL ?>/images/shortcut.png" alt="굼모닝,굼벵이" class="gTab2_img"> -->
        </div>
        <div class="gTab3">
            <img src="<?php echo G5_URL ?>/images/tab3.png" alt="건조굼벵이">
            <p><span class="gTabs">굼모닝 식용 굼벵이(건조 통 굼벵이)의 좋은 점은?</span><br>
                · &nbsp;굼벵이는 <span class="gTabs2">늘 피로한 분, 간 기능이 저하된 분</span>들에게 도움을 주는 고단백 식품입니다 <br>
                · &nbsp;건조 통 굼벵이는 굼벵이를 첨가한 식품이 아닌,  <span class="gTabs2">오롯이 굼벵이 100% </span>입니다<br>
                · &nbsp;굼모닝은 중금속 검출 검사 등 <span class="gTabs2">주기적인 식품 안전 검사</span>를 실시합니다<br>
                · &nbsp;테스트용으로 섭취할 수 있도록 <span class="gTabs2">소량 포장 제품을 판매</span>합니다<br>
                · &nbsp;미래식량인 곤충 식품의 대중화를 위해 마진을 줄여 <span class="gTabs2">가격을 낮췄습니다</span><br>
            <p>
            <a href="http://goommorning.co.kr/bbs/board.php?bo_table=product"><input type="button" value="식용 굼벵이 구매 바로가기 Click→"class="tab3btn"></a>
        </div>
        <div class="gTab4">
            <img src="<?php echo G5_URL ?>/images/tab4.png" alt="굼모닝 생산자">
            <p>
                <span class="gTabs">Goom모닝은</span><br> 
                청정한 전라남도 함평군 해보면에 자리잡고 있으며<br>
                서울과 광주에서 귀농한 두 청년농부가 아주 열심히<br>
                흰점박이꽃무지(꽃벵이) 사육과 건조 굼벵이 판매를 하고 있습니다<br>
                또한 두 청년농부는 식용유 생산을 위한 유채 농사와 더불어<br>
                삼잎국화, 단삼을 비롯한 여러 나물을 자연재배하고 있습니다<br>
                굼모닝 농장은 2018년 신축된 축사로, 위생관리에 힘쓰고 있습니다<br>
            <p>
        </div>
    </div>
    
    
</div>   

<h2 class="sound_only">최신글</h2>
<div class="latest_top_wr">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/pic_basic', 'product', 4, 30);		// 최소설치시 자동생성되는 자유게시판
    echo latest('theme/basic1', 'free', 5, 30);		// 최소설치시 자동생성되는 자유게시판
	echo latest('theme/basic1', 'qaqa', 5, 30);			// 최소설치시 자동생성되는 질문답변게시판
	echo latest('theme/basic1', 'notice', 5, 30);		// 최소설치시 자동생성되는 공지사항게시판
    ?>
</div>

<h2 class="sound_only">contents</h2>
<div class="gcontents">
    <div class="gc_video">
            <p>Play</p>
            <video id="main_v" src="<?php echo G5_URL ?>/images/avi_m.mp4" controls=""></video>
    </div>
    <div class="gc_naver">
        <a href="https://shopping.naver.com/home/p/index.nhn">
        <p class="gc_naver_h">건조 통 굼벵이<br> 온라인 구매<br><span>바로가기 Click →</span></p>
        <img src="<?php echo G5_URL ?>/images/link1.png" alt="제품사진"></a>
    </div>
    <div class="gc_buy">
            <p class="gc_buy_h">Conact<p>
            <p class="gc_buy_s">Goom모닝 상담/문의<p>
            <p class="gc_buy_t">
                · &nbsp;건조 통 굼벵이 전화 주문시 택배비 무료!</br>
                · &nbsp;휴대전화 010-5904-1603</br>
                · &nbsp;굼모닝 농장 061-000-0000</br>
            </p>
    </div>  
</div>

<div class="ggallery">
    <p>Gallery</p>
    <?php echo latest('theme/color_focus_pic3', 'gallery', 5, 30);?>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>