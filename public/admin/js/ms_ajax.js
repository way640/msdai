/**
 * Created by chengye on 2017/7/13.
 */
function ms_ajax(url,data,type){
    if(!type){
        type = 'get';
    }
    var result;
    $.ajax({
        type: type,
        url: url,
        data: data,
        dataType: 'json',
        success: function (msg) {
            result =  msg;
        }
    });
    return result;
}