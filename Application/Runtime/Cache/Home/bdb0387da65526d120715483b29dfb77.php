<?php if (!defined('THINK_PATH')) exit();?><div class="se_title">
    <h2>
        <?php echo ($columnName); ?>
    </h2>
    <div class="breadmenu"><a href="<?php echo U('Index/index');?>">首页</a> > <a href="<?php echo U('News/news');?>">新闻动态</a> > <a href=""><?php echo ($columnName); ?></a></div>
</div>
<div class="cont">

                <ul class="news_list">
                    <?php if(is_array($newList)): $i = 0; $__LIST__ = $newList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span class="fr"><?php echo ($vo["pulish_time"]); ?></span><a href="/index.php/News/detailNew?nid=<?php echo ($vo["news_id"]); ?>" ><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <div class="pagenumber">
                    <?php echo ($pageList); ?>
                </div>


</div>
<script type="text/javascript">
    $(window).ready(function() {
        // 点击分页触发的事件
        $(".pagenumber  a").click(function () {
            cur_page = $(this).data('p');
            ajax_get_table('search-form2', cur_page);
        });

    });

</script>