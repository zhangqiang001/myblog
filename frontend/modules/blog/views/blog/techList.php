<?php
$this->title = '慢生活';
$this->registerCssFile( '/static/css/technology/techList.css' );
?>
<article class="blogs">
    <div class="newblog left">
		<?php
		if( isset( $articleList ) && is_array( $articleList ) ):
			foreach ( $articleList as $list ):
				?>
                <h2><?= $list->title ?></h2>
                <p class="dateview"><span>发布时间：<?= $list->create_time ?></span><span>作者：dd</span><span>分类：[<a
                                href="/news/life/"><?= isset( $list->category->name ) ? $list->category->name : '暂无分类' ?></a>]</span>
                </p>
                <!--        <figure><img src="/static/images/001.png"></figure>-->
                <ul class="nlist">
					<?= $list->decription ?>
                    <a title="/" href="/blog/blog/detail?article_id=<?= $list->id ?>" target="_blank" class="readmore">阅读全文>></a>
                </ul>
                <div class="line"></div>
				<?php
			endforeach;
		endif;
		?>
        <div class="blank"></div>
        <div class="ad">

        </div>
        <div class="page"><a title="Total record"><b>41</b></a><b>1</b><a href="/news/s/index_2.html">2</a><a
                    href="/news/s/index_2.html">&gt;</a><a href="/news/s/index_2.html">&gt;&gt;</a></div>
    </div>
    <aside class="right">
        <!--<div class="rnav">
            <ul>
                <li class="rnav1"><a href="/download/" target="_blank">日记</a></li>
                <li class="rnav2"><a href="/newsfree/" target="_blank">程序人生</a></li>
                <li class="rnav3"><a href="/web/" target="_blank">欣赏</a></li>
                <li class="rnav4"><a href="/newshtml5/" target="_blank">短信祝福</a></li>
            </ul>
        </div>-->
		<?php
		if( isset( $newArticleList ) && is_array( $newArticleList ) ):
			?>
            <h3>
                <p>最新<span>文章</span></p>
            </h3>
            <ul class="rank">
				<?php
				foreach ( $newArticleList as $list ):
					?>
                    <li><a href="/blog/blog/detail?article_id=<?= $list->id ?>" title="<?= $list->title ?>"
                           target="_blank"><?= $list->title ?></a></li>
				<?php endforeach; ?>
            </ul>
		<?php endif; ?>
        <!-- <h3 class="ph">
			 <p>点击<span>排行</span></p>
		 </h3>
		 <ul class="paih">
			 <li><a href="/" title="Column 三栏布局 个人网站模板" target="_blank">Column 三栏布局 个人网站模板</a></li>
			 <li><a href="/" title="withlove for you 个人网站模板" target="_blank">with love for you 个人网站模板</a></li>
			 <li><a href="/" title="免费收录网站搜索引擎登录口大全" target="_blank">免费收录网站搜索引擎登录口大全</a></li>
			 <li><a href="/" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
			 <li><a href="/" title="企业做网站具体流程步骤" target="_blank">企业做网站具体流程步骤</a></li>
		 </ul>
	 </div>-->
        <!--<div class="visitors">
			<h3><p>最近访客</p></h3>
			<ul>

			</ul>
		</div>-->
        <!-- Baidu Button BEGIN -->
        <!--<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
		<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
		<script type="text/javascript" id="bdshell_js"></script>
		<script type="text/javascript">
			document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
		</script>-->
        <!-- Baidu Button END -->
    </aside>
</article>