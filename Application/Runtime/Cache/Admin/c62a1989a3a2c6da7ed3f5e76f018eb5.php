<?php if (!defined('THINK_PATH')) exit();?><table class="table table-hover ">
    <caption><a class="btn btn-primary" href="/index.php/Admin/Produts/showAddProduts">添加产品</a></caption>
    <thead>
    <tr>
        <th>操作</th>
        <th>标题</th>
        <th>图片</th>
        <th>父ID</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($produtsList)): $i = 0; $__LIST__ = $produtsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <input type="hidden" value="<?php echo ($vo["id"]); ?>">
            <td><a class="btn btn-primary btn-sm u" href="/index.php/Admin/Produts/showProdutsDetail?id=<?php echo ($vo["id"]); ?>">修改</a> <a class="btn btn-primary btn-sm r" href="javascript:void(0)" uid="<?php echo ($vo["id"]); ?>">删除</a></td>
            <td><?php echo ($vo["title"]); ?></td>

            <td><img src="<?php echo CheckImg($vo['pic']);?>" alt="图片" width="35px"title="图片"></td>
            <td><?php echo ($vo["pid"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
</table>
<div class="pagenumber">
    <?php echo ($pageList); ?>
</div>

<script type="text/javascript">
    $(window).ready(function(){
        // 点击分页触发的事件
        $(".pagenumber  a").click(function(){
            cur_page = $(this).data('p');
            ajax_get_table('search-form2',cur_page);
        });

        //删除
        $('.btn.btn-primary.btn-sm.r').click(function(){
            var mytr= $(this).parent().parent('tr');
            var id=$(this).attr('uid');
            $.confirm({
                title: '提示！',
                content: '确定要删除这条记录吗？',
                confirm: function(){
                    $.ajax({
                        url:'/index.php/Admin/Produts/removeProduts',
                        data:{"id":id},
                        type:'post',
                        success:function(msg){
                            if(msg.status==1){
                                mytr.remove();
                                $('body').overhang({
                                    type: 'success',
                                    message: '删除成功'
                                });
                            }else {
                                $('body').overhang({
                                    type: 'warn',
                                    message: '删除失败'
                                });
                            }
                        }
                    });
                }
            });
        });
    });

</script>