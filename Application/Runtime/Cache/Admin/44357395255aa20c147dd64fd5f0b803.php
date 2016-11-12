<?php if (!defined('THINK_PATH')) exit();?><table class="table table-hover ">
    <caption><button class="btn waves btn-primary waves-effect waves-float" href="#" data-toggle="modal" data-target="#add">添加</button></caption>
    <thead>
    <tr>
        <th>操作</th>
        <th>账号</th>
        <th>邮箱</th>
        <th>最后登录时间</th>
        <th>添加时间</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($userList)): $i = 0; $__LIST__ = $userList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><button class="btn btn-primary btn-sm u" uid="<?php echo ($vo["u_id"]); ?>" href="#" data-toggle="modal" data-target="#edit">修改</button> <button uid="<?php echo ($vo["u_id"]); ?>" class="btn btn-danger btn-sm r"><span class="am-icon-trash-o"></span>删除</button></td>
            <!--<td><a class="btn btn-primary btn-sm u" uid="<?php echo ($vo["u_id"]); ?>" href="/index.php/Admin/User/showUserDetail?id=<?php echo ($vo["u_id"]); ?>" data-toggle="modal" data-target="#edit">修改</a> <a href="javascript:void(0)" uid="<?php echo ($vo["u_id"]); ?>" class="btn btn-primary btn-sm r">删除</a></td>-->
            <td><?php echo ($vo["name"]); ?></td>
            <td><?php echo ($vo["email"]); ?></td>
            <td><?php if(($vo["lastlogintime"]) == ""): ?>暂无<?php else: echo (date('Y-m-d h:i:s',$vo["lastlogintime"])); endif; ?></td>
            <td><?php echo (date('Y-m-d h:i:s',$vo["addtime"])); ?></td>
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
            ajax_get_table(cur_page);
        });

        //修改
        $("#editForm").submit(function(){
            $dataForm=$(this).serialize();
            $.ajax({
                url:"/index.php/Admin/User/editUserInfo",
                data:$dataForm,
                type:'post',
                success:function(msg){
                    if(msg.status==1){
                        ajax_get_table(1);
                        clearInput();
                        $('body').overhang({
                            type: 'success',
                            message: '修改成功'
                        });
                        //隐藏模态框。
                        $('#edit').modal('hide');
                    }else{
                        $('body').overhang({
                            type: 'warn',
                            message: '修改失败'
                        });
                    }
                }
            });
            return false;
        });

        //点击修改时把原来的数据查出来，并显示到文本框中
        $('.btn.btn-primary.btn-sm.u').click(function(){
            var id=$(this).attr('uid');
            $.ajax({
                url: '/index.php/Admin/User/userDetail',
                data: {"id": id},
                type: 'post',
                success: function (msg) {
                    if(msg.status==1){
                        $("#name").val(msg.data[0]['name']);
                        $("#email").val(msg.data[0]['email']);
                        $("#id").val(msg.data[0]['u_id']);
                    }
                }
            });
        });

        //删除
        $('.btn.btn-danger.btn-sm.r').click(function(){
            var mytr= $(this).parent().parent('tr');
            var id=$(this).attr('uid');
            $.confirm({
                title: '提示！',
                content: '确定要删除这条记录吗？',
                confirm: function(){
                    $.ajax({
                        url:'/index.php/Admin/User/removeUser',
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

        $('#edit').on('hide.bs.modal', function () {
            //清空文本框
            $('.modal-body input').val('');

        });

    });



</script>