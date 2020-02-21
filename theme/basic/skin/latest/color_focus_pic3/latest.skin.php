<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$img_w = 1000; // 큰 이미지($img) 가로 크기
$img_h = 400; // 큰 이미지($img) 세로 크기

$imgs_w = 50; //작은 이미지($imgs) 가로 크기
$imgs_h = 50; //작은 이미지($imgs) 세로 크기

?>

<style type="text/css">

@import url(http://fonts.googleapis.com/earlyaccess/notosanskr.css);
body { font-family: "Noto Sans KR", sans-serif !important;}

*{padding: 0;margin: 0;}
a{text-decoration: none;}
ul, ol, li{list-style: none;}

.magic_lantern_box{max-width:1200px;height:480px;position:relative;margin:0 auto 80px;overflow:hidden;}
.magic_lantern_box .magic_lantern_list{width:1200px;height: 100%;}
.magic_lantern_box .magic_lantern_list li{display: none;text-align: center;background-size: 100% 100%;height: 100%;}
.magic_lantern_box .magic_lantern_list li a{display: block;height: 100%;}
.magic_lantern_box .magic_lantern_list .current{display: block;}
.v_synopsis{height: 100px !important;width:100%;background: url('<?=$latest_skin_url?>/img/bar.png') 0px 0 no-repeat;position: absolute;bottom: 30px;background-size:1200px;}
.synopsis_left, .synopsis_right{float: left;}
.synopsis_right{float: right;height: 100%;}
.synopsis_right li img, .synopsis_right li{width: 77px;height: 77px; border:1px solid #000;}
.synopsis_right li{padding: 0px;margin-right: 5px;margin-top: 3px;float: left;cursor: pointer;margin-right: 5px;}
.v_synopsis .synopsis_left{font-size: 17px;margin:1.5% 0 0 1%;}
.v_synopsis .synopsis_left .stilte{display: block;float: left;height: 50px;line-height: 50px;color: #fff;min-width: 100px;padding-left: 10px;}

</style>

<script type="text/javascript">
$(function(){
	var sub=0;
	var auto_h;
	$('.synopsis_right li').mouseover(function(){
		var title=$(this).data('title');
		cur_selected($(this));
		sub=$(this).index();
		$('.stilte').html(title);
		$('.magic_lantern_list li').css('display','none');
		$('.magic_lantern_list li:eq('+sub+')').fadeIn(300);
		clearInterval( auto_h );
		auto_scroll();
	});

	function auto_scroll(){
		cur_selected($('.synopsis_right li:eq('+sub+')'));
		var scroll_num=$('.magic_lantern_list li').length;
		$('.magic_lantern_list li:eq('+sub+')').fadeIn(500);
		
	}
	auto_scroll();

	function cur_selected($this){
		$('.synopsis_right li').css({'border':'none','padding':'0'});
		$this.css({'border':'0','padding':'0'});
	}
});
</script>

    <div class="magic_lantern_box">
      <ul class="magic_lantern_list">
	  		<?php
			for($i=0; $i<count($list); $i++){
				$thumbs = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $img_w, $img_h);
			if($thumbs['src']){
				$img = $thumbs['src'];
			}?>
        <li style="background-image: url(<?=$img?>);"></li>
		<?}?>
      </ul>

      <div class="v_synopsis">
        <div class="synopsis_left">
            <span class="stilte"><?php echo mb_strimwidth($list[0]['subject'], '0', '40', '...', 'utf-8');?></span>
        </div>

        <ul class="synopsis_right">
			<?php
			for($i=0; $i<count($list); $i++){
				$thumbs = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $imgs_w, $imgs_h);
			if($thumbs['src']){
				$imgs = $thumbs['src'];
			}?>
          <li data-title="<?php echo mb_strimwidth($list[$i]['subject'], '0', '40', '...', 'utf-8');?>"><img src="<?=$imgs?>"></li>
		<?}?>
        </ul>
      </div>
    </div>