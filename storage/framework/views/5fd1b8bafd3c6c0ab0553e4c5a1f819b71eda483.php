<?php $__env->startSection('content'); ?>
        <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 基础表格</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">


</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>数据展示列表</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="table_basic.html#">选项1</a>
                            </li>
                            <li><a href="table_basic.html#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <a href="<?php echo e(url('admin/config/add')); ?>">
                        <button class="btn btn-outline btn-primary dim" type="button" title="添加信息" style="left:1%">
                            <i class="fa fa-plus"></i>
                        </button>
                    </a>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-5 m-b-xs">
                            <select class="input-sm form-control input-s-sm inline">
                                <option value="">请选择</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" placeholder="请输入关键词" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>

                                <th></th>
                                <th>配置名称</th>
                                <th>配置类型</th>
                                <th>配置说明</th>
                                <th>配置链接</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody style="border-bottom: 2px solid #cccccc">


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- 全局js -->
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>



<!-- Peity -->
<script src="js/plugins/peity/jquery.peity.min.js"></script>

<!-- 自定义js -->
<script src="js/content.js?v=1.0.0"></script>


<!-- iCheck -->


<!-- Peity -->




<script>
    $(function ( ) {
        $.ajax({
            type:"get",
            url:"<?php echo e(url('admin/config/configlist')); ?>",
            data:'',
            dataType:'json',
            success:function ( msg ) {
                if(msg.status == 1 && typeof msg.data == 'object'){
                    var str = '';
                    $.each(msg.data.confInfo,function(k,v){
                        str += '<tr>' +
                                '<td><input type="checkbox" class="i-checks" name="input[]"></td>' +
                                '<td>'+ v.config_info+'</td>' +
                                '<td>'+msg.data.typeInfo[v.config_type]+'</td>' +
                                '<td>'+v.config_desc+'</td>' +
                                '<td>'+v.config_link+'</td>' +
                                '<td>' +
                                    '<a href="javascript:void(0)" alt="删除" title="删除" class="config-del" configId="'+ v.config_id+'"><i class="fa fa-close text-navy"></i></a> ' +
                                    '<a href="javascript:void(0)" alt="修改" title="修改" class="config-save" configId="'+ v.config_id+'"><i class="fa fa-wrench text-navy"></i></a>' +
                                '</td>' +
                                '</tr>';
                    });
                }else{
                    str = '<tr><td cospan="4">没有要展示的内容</td></tr>'
                }
                $(".table").children().eq(1).html(str);
                $.each(msg.data.typeInfo,function(k,v){
                    $('.input-sm').append('<option value="'+ k+'">'+v+'</option>');
                });
            }
        });
        $('.table-responsive').delegate('.config-del','click',function(){
//        $('.config-del').click(function(){
            var configIdObj = $(this);
            $.ajax({
                type: "get",
                url: "<?php echo e(url('admin/config/configdel')); ?>",
                data: 'configId='+configIdObj.attr('configId'),
                dataType: 'json',
                success: function (msg) {
                    if(msg.status == 1){
                        configIdObj.parent().parent().remove();
                    }else{
                        alert('删除失败');
                    }
                }
            })
        });
    });
</script>


</body>

</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>