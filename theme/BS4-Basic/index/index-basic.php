<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// WING
if($is_wing)
	@include_once (G5_THEME_PATH.'/_wing.php');
?>

<div class="nt-container px-0 px-sm-4 px-xl-0" style="margin-top:15px;" >
	<div class="row na-row">
		<!-- 메인 영역 -->
		<div class="col-md-9 na-col" style="margin-top:10px;">
		
			<!-- 위젯 시작 { -->
			<h3 class="h3 f-lg en">
			    <a href="<?php echo G5_BBS_URL ?>/group.php?gr_id=news">
				    개발 서버 입니다 최신뉴스
				</a>
			</h3>
			<hr class="hr"/>
			<div class="px-3 px-sm-0 mt-3 mb-4"> <!--style="height:220px;"> 위젯 레이아웃 아래마진 - kayden { -->
			<?php echo na_widget('wr-news-big', 'wr-news-big-1'); ?>
			</div>
			<!-- } 위젯 끝-->


			<h3 class="h3 f-lg en">
			    <a href="<?php echo G5_BBS_URL ?>/group.php?gr_id=news">
				    랭킹
				</a>
			</h3>

			<hr class="hr"/>
			<div class="px-3 px-sm-0 mt-3 mb-4"> <!--style="height:220px;"> 위젯 레이아웃 아래마진 - kayden { -->
			<?php echo na_widget('rank', 'mb-rank-1') ?>
			</div>

			



			<div class="row na-row" style="margin-top:45px;">
			    	<div class="col-md-4 na-col">  <!--  style="margin-bottom:40px;" 위젯 레이아웃 아래마진 - kayden { -->

				  <!-- 위젯 시작 { -->
                <h3 class="h3 f-lg en mb-2">
	                <a href="<?php echo G5_BBS_URL ?>/new.php?view=w">
		                최근글
	                </a>
                </h3>
                <hr class="hr"/>
                    <div class="mt-3 mb-4">
	                    <?php echo na_widget('wr-list', 'new-wr', 'bo_list=board'); ?>
                    </div>
                    <!-- } 위젯 끝-->
				</div>
				<div class="col-md-4 na-col">  <!--  style="margin-bottom:40px;" 위젯 레이아웃 아래마진 - kayden { -->

					
                    <!-- 위젯 시작 { -->
                <h3 class="h3 f-lg en" >
                    <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=freeboard">
		                자유게시판
                    </a>
                </h3>
                <hr class="hr"/>
                <div class="mt-3 mb-4">
	                <?php echo na_widget('wr-list', 'freeboard', 'bo_list=freeboard'); ?>
                </div>
                    <!-- } 위젯 끝-->
					
				</div>
				<div class="col-md-4 na-col">  <!--  style="margin-bottom:40px;" 위젯 레이아웃 아래마진 - kayden { -->

					<!-- 위젯 시작 { -->
					<h3 class="h3 f-lg en">
						<a href="<?php echo G5_BBS_URL ?>/group.php?gr_id=fleamarket">
							플리마켓
						</a>
					</h3>
					<hr class="hr"/>
					<div class="mt-3 mb-4">
						<?php echo na_widget('wr-list', 'tlist-4', 'gr_id=fleamarket'); ?>
					</div>
					<!-- } 위젯 끝-->

				</div>
	
			</div>

		
			<!-- 위젯 시작 { -->
			<h3 class="h3 f-lg en" style="margin-top:20px;">
				<a href="<?php echo G5_BBS_URL ?>/group.php?gr_id=business">
				    한인업체
				</a>
			</h3>
			<hr class="hr"/>
			<div class="px-3 px-sm-0 mt-3 mb-4">
				<?php echo na_widget('data-slider', 'banner-1'); ?>
			</div>
			<!-- } 위젯 끝-->

			<!-- 위젯 시작 { -->
				<h3 class="h3 f-lg en" style="margin-top:40px;">
        		<a href="<?php echo get_pretty_url('medical'); ?>">
            	형닥터
        	</a>
    		</h3>
    		<hr class="hr"/>
    		<div class="px-3 px-sm-0 my-3">
        		<?php echo na_widget('wr-gallery-slider', 'gallery-3', 'bo_list=gallery rows=8'); ?>
    		</div>
   			 <!-- } 위젯 끝-->

			

			<!-- 위젯 시작 { -->
			<h3 class="h3 f-lg en" style="margin-top:50px;">
				<a href="<?php echo G5_BBS_URL ?>/group.php?gr_id=food">
					맛집 & 여행
				</a>
			</h3>
			<hr class="hr"/>
			<div class="px-3 px-sm-0 my-3">
				<?php echo na_widget('wr-gallery', 'gallery-1', 'gr_id=food'); ?>
			</div>
			<!-- } 위젯 끝-->

			<!------------ 수다방 등 화면 하단 위젯들 필요시 uncomment 예정 ------------->
			<!--<div class="row na-row">
				<div class="col-md-4 na-col">

					
					<h3 class="h3 f-lg en">
						<a href="<//?php echo G5_BBS_URL ?>/board.php?bo_table=free">
							<span class="float-right more-plus"></span>
							수다방
						</a>
					</h3>
					<hr class="hr"/>
					<div class="mt-3 mb-4">
						<//?php echo na_widget('wr-list', 'blist-4', 'bo_list=free'); ?>
					</div>
					

				</div>
				<div class="col-md-4 na-col">

					
					<h3 class="h3 f-lg en">
						<a href="<//?php echo G5_BBS_URL ?>/board.php?bo_table=living">
							<span class="float-right more-plus"></span>
							생활정보
						</a>
					</h3>
					<hr class="hr"/>
					<div class="mt-3 mb-4">
						<//?php echo na_widget('wr-list', 'blist-5', 'bo_list=living'); ?>
					</div>
					

				</div>
				<div class="col-md-4 na-col">

					
					<h3 class="h3 f-lg en">
						<a href="<//?php echo G5_BBS_URL ?>/board.php?bo_table=humor">
							<span class="float-right more-plus"></span>
							유머게시판
						</a>
					</h3>
					<hr class="hr"/>
					<div class="mt-3 mb-4">
						<//?php echo na_widget('wr-list', 'blist-6', 'bo_list=humor'); ?>
					</div>
					

				</div>
			</div>-->

			

		</div>

		<!-- 사이드 영역 -->
		<div class="col-md-3 na-col" style="margin-top:10px;">
			<?php @include_once(G5_THEME_PATH.'/side/side-index.php') ?>
		</div>
	</div>
</div>
