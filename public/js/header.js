
     jQuery(document).ready(function(){
     var url = "http://www.zdmoney.com/index/index?code=CA1998&callback=localHandler";
        $.ajax({
             type: "get",
             async: false,
             url: url,
             dataType: "jsonp",
             jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(一般默认为:callback)
             jsonpCallback:"localHandler",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名，也可以写"?"，jQuery会自动为你处理数据
             success: function(data){
                 //alert(data);
                 var str = '';
                  $.each(data,function(k,v){
                      str +='<li><a href="'+v.config_info+'" >'+v.config_desc+'</a></li>';
                  }),
                  //alert(str);
                   $('#box').html(str);
             },
             error: function(){
                 alert('fail');
             }
         });
     });
