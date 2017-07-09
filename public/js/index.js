
/**
 * Created by jimubox on 16/2/18.
 */
require(['jquery', 'bootstrap'], function($) {

    function refreshCaptcha() {
        var that = $('.captcha img');
        var _t = (new Date()).getTime();
        var _captchaId = Math.floor(Math.random()*Math.random()*(new Date()).getTime());
        $("#captchaId").val(_captchaId);
        that.prop('src', that.attr('data-src') + '&captchaId=' + _captchaId + '&_t=' + _t);
        $("#captcha_img").val("");
        $("#captcha_sms").val("");
    }
    function validate(form, reqData) {
        var form = $(form || '.expwy-form');
        var result = {
            isValidate: true,
            data: {},
            clear: function () {
                form.find('input').val('');
            }
        };
        form.find('select[required], input[required]')
            .each(function (index, input) {
                if (result.isValidate) {
                    var $input = $(input),
                        val = $input.val().replace(/^\s|$\s/ig, '');

                    if (reqData) { // 属性过滤
                        if (typeof($input.attr(reqData)) == "undefined") {
                            return true;
                        }
                    }

                    if ($input.prop('type') == 'checkbox') { // checkbox
                        if (!$input.prop('checked')) {
                            alert($input.attr('data-reg-message'));
                            result.isValidate = false;
                            return;
                        }
                    }

                    if (val.length == 0) {
                        alert($input.attr('placeholder'));
                        result.isValidate = false;
                        return;
                    }
                    var regTxt = $input.attr('data-reg');
                    if (regTxt) {
                        var reg = new RegExp($input.attr('data-reg'), 'ig');
                        if (!reg.test(val)) {
                            alert($input.attr('data-reg-message'));
                            result.isValidate = false;
                            return;
                        }
                    }
                }
            });
        if (result.isValidate) {
            form.find('input')
                .each(function (index, input) {
                    var $input = $(input);
                    result.data[$input.prop('name')] = $input.val();
                })
                .end()
                .find('select')
                .each(function (index, sel) {
                    var $sel = $(sel);
                    result.data[$sel.prop('name')] = $sel.val();
                });
        }

        return result;
    }

    function init() {
        $.ajax({
            method: 'POST',
            url: '/expwy/v1/products/count',
            dataType: 'json',
            success: function (resp) {
                if (resp.status == 200) {
                    var d = resp.data;
                    for(var i in d) {
                        if (d[i] > 0) {
                            var type = i.replace('product', '');
                            $('.ck span[data-apply-type=' + type + ']').html(d[i]);
                        }
                    }
                }
            },
            error: function () {

            }
        });
    }


    function save() {
        var isSubmit = false;
        return function () {
            var result = validate("#loanCreateForm");
            if (result.isValidate) {
                if (isSubmit) {
                    alert('已经提交！');
                    return;
                }
                isSubmit = true;
                delete result.data['applyTypeBig'];
                result.data.applyBalance = result.data.applyBalance * 10000; // 万元
                result.data.applyType = manageApplyType(); // 设置applyType
                $.ajax({
                    method: 'POST',
                    url: '/expwy/v2/create',
                    dataType: 'json',
                    data: $.param(result.data),
                    success: function (resp) {
                        if (resp.status == 200) {
//                            alert('提交成功！');
                            result.clear();
                            $(".expwy").addClass("hidden");
                            $(".expwy").eq(2).removeClass("hidden");
//                            $(".prod-items").removeClass('hidden-control');
                        } else {
                            alert(resp.message);
                        }
                        isSubmit = false;
                        refreshCaptcha();
                    },
                    error: function () {
                        isSubmit = false;
                        alert('服务器错误，请稍后重试。');
                        refreshCaptcha();
                    }
                });
            } else {
                refreshCaptcha();
            }
        };
    }

    $('#submit').click(save());

    $('.prods-tab li').click(function () {
        var that = $(this);
        that.addClass('active').siblings().removeClass('active');
        var cls = that.attr('data-tab');
        if (cls == 'all') {
            $('.prod-items .prod-item').show();
        } else {
            $('.prod-items .prod-item').each(function (index, ele) {
                var $ele = $(ele);
                if ($ele.hasClass(cls)) {
                    $ele.show();
                } else {
                    $ele.hide();
                }
            });
        }
    });

    $('.captcha img').click(function () {
        refreshCaptcha();
    });

    init();

    $("#applyType").change(function() {
        // alert($(this).children('option:selected').val());
        manageType($("#applyType").val(), $("#guaranty").val());
    });

    $("input[name='diyawu']").each(function() {
        $(this).click(function(){
            if($("#guaranty").val() != $(this).val()) {
                $("#guaranty").val($(this).val());
                manageType($("#applyType").val(), $("#guaranty").val());
            }
        });
    });

    function typeStrategy(applyType, diyaType) {
        var room = 2, car = 1, none = 0;
        var person = 300, business = 400;
        if (applyType == person && diyaType == room) { // 方寸屋子
            return 'DiYa';
        }
        if (applyType == person && diyaType == car) { // 白驹
            return 'BaiJuZuLin';
        }
        if (applyType == person && diyaType == none) { // 积木大白
            return 'DaBai';
        }
        if (applyType == business && diyaType == room) { // 方寸屋子
            return 'DiYa';
        }
        if (applyType == business && diyaType == car) { // 白驹
            return 'BaiJuZuLin';
        }
        if (applyType == business && diyaType == none) { // 积木旺仔、积木时代
            return 'WangZaiXinYong,Times';
        }
    }

    var APPLY_TYPES = {
        'DiYa': 501,
        'BaiJuZuLin': 601,
        'DaBai': 301,
        'WangZaiXinYong': 401,
        'Times': 403
    };

    // 根据借款人类型、抵押物类型、城市类型确定applyType
    function manageApplyType () {
        var t = 0;
        var typeStr = typeStrategy($("#applyType").val(), $("#guaranty").val());
        var typeArr = typeStr.split(',');
        if (typeArr.length == 1) {
           t =  APPLY_TYPES[typeStr];
        } else if (typeArr.length > 1) { // 积木旺仔或积木时代
            t = APPLY_TYPES['Times']; // 先置成时代，再遍历旺仔
            var $s = $('<select>' + $("#WangZaiXinYongTpl").html() + '</select>'), // 遍历旺仔
                city = $("#applyCity").val();
            $s.find('option').each(function(i, e) {
                if (city == $(e).text()) {
                    t = APPLY_TYPES['WangZaiXinYong'];
                    return false;
                }
            });
        }

        return t;
    }

    // 根据选择类型获取城市和贷款项目
    function manageType (applyType, diyaType) {
        var type = typeStrategy(applyType, diyaType);
        if (!type) return;
        var typeArr = type.split(",");
        $("#applyCity").html('<option value="0" selected>请选择城市</option>');
//        $(".prod-item").addClass('hidden')
        for (var i=0; i<typeArr.length; i++) {
            $("#applyCity").append($("#" + typeArr[i] + "Tpl").html()); // 城市
//            $("#" + typeArr[i] + "Content").removeClass('hidden');
        }
        if (typeArr.length > 1) {
            unique_city();
        }
    }
    manageType(400, 0);

    // 城市去重
    function unique_city() {
        var arr = $("#applyCity").children("option")
    	var n = {},r=[];
    	for(var i = 0; i < arr.length; i++) {
    	    var optionHtml = $(arr[i]).html();
    		if (!n[optionHtml]) {
    			n[optionHtml] = true;
    			var _v = optionHtml == "请选择城市" ? 0 + " selected" : optionHtml;
    			r.push("<option value="+_v+">" + optionHtml + "</option>");
    		}
    	}
    	$("#applyCity").html(r);
    }


    // 获取要发送的数据
    function getReqData(form, reqData) {
        var $form = $(form), data = {};
        $form.find('input, select').each(function(i, e) {
            if (typeof($(e).attr(reqData)) != "undefined") {
                data[$(e).prop('name')] = $(e).val();
            }
        });
        return $.param(data);
    }

    // 获取短信验证码
    function getSms() {
        var isSms = Number($("#sms").prop("is-pending"));
        if (isSms) {
            alert("短信验证码正在发送，请稍候……");
            return;
        }
        var formId = '#moblieVerifyForm';
        var result = validate(formId, "data-req-sms");
        if (result.isValidate) {
            $("#sms").prop("is-pending", 1);
            $.ajax({
                method: 'GET',
                url: '/captcha/sms',
                dataType: 'json',
                data: getReqData(formId, 'data-req-sms'),
                success: function (resp) {
                    $("#sms").prop("is-pending", 0);
                    if (resp.status == 200) {
                        alert('短信验证码已发送');
                    } else {
                        alert(resp.message);
                        refreshCaptcha();
                    }
                },
                error: function () {
                    $("#sms").prop("is-pending", 0);
                    alert('服务器错误，请稍后重试。');
                    refreshCaptcha();
                }
            });
        }
    }

    // 校验短信验证码
    function verifySms() {
        var isVerify = $("#verify").prop("is-pending");
        if (isVerify) {
            alert("短信验证码正在校验，请稍候……");
            return;
        }
        var formId = '#moblieVerifyForm';
        var result = validate(formId, "data-req-verify");
        if (result.isValidate) {
            $("#verify").prop("is-pending", 1);
            $.ajax({
                method: 'POST',
                url: '/captcha/sms',
                dataType: 'json',
                data: getReqData(formId, 'data-req-verify'),
                success: function (resp) {
                    $("#verify").prop("is-pending", 0);
                    if (resp.status == 200) {
                        $("#mobileLoanCreate").val($("#mobile").val());
//                        alert("手机验证通过");
//                        result.clear();
                        $(".expwy").addClass("hidden");
                        $(".expwy").eq(1).removeClass("hidden");
//                        $(".prod-items").addClass('hidden-control');
                    } else {
                        $("#mobileLoanCreate").val($("#mobile").val());
                        alert(resp.message);
                    }
                },
                error: function () {
                    $("#verify").prop("is-pending", 0);
                    alert('服务器错误，请稍后重试。');
                    refreshCaptcha();
                }
            });
        }
    }

    $("#sms").click(getSms);
    $("#verify").click(verifySms);

});

