<?php
    $this->title = '关于我';
    $this->registerCssFile('/static/css/life/aboutme.css');
?>
<article class="aboutcon">
    <div class="about left">
        <h2><?=isset($article) && $article ? $article->title : ''?></h2>
        <?=$article->articleExtend->content?>
    </div>
    <aside class="right">
        <div class="about_c">
            <p>网名：<span>DanceSmile</span> | 即步非烟</p>
            <p>姓名：杨青 </p>
            <p>生日：1987-10-30</p>
            <p>籍贯：四川省—成都市</p>
            <p>现居：天津市—滨海新区</p>
            <p>职业：网站设计、网站制作</p>
            <p>喜欢的书：《红与黑》《红楼梦》</p>
            <p>喜欢的音乐：《burning》《just one last dance》《相思引》</p>
            <a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=d4d4a26952d46d564ee5bf7782743a70d5a8c405f4f9a33a60b0eec380743c64">
                <img src="http://pub.idqqimg.com/wpa/images/group.png" alt="杨青个人博客网站" title="杨青个人博客网站"></a>
            <a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=HHh9cn95b3F1cHVye1xtbTJ-c3E" ><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_22.png" alt="杨青个人博客网站"></a>
        </div>
    </aside>
</article>