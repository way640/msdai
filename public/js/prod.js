/**
 * Created by jimubox on 16/2/18.
 */
require(['jquery', 'bootstrap', 'unslider'], function($) {

    $('#applyLoan').click(function () {
        $('#prodModal').modal('show');
    });

    $("#applyLoan_backup").click(function(){
        $('#prodModal').modal('show');
    });

    $('.captcha img').click(function () {
        refreshCaptcha();
    });

    function refreshCaptcha() {
        var that = $('.captcha img');
        var _t = (new Date()).getTime();
        that.prop('src', that.attr('data-src') + '&_t=' + _t);
    }
    function validate() {
        var form = $('.expwy-form');
        var result = {
            isValidate: true,
            data: {},
            clear: function () {
                form.find('input[type!=hidden]').val('');
            }
        };
        form.find('input[required]')
            .each(function (index, input) {
                if (result.isValidate) {
                    var $input = $(input),
                        val = $input.val().replace(/^\s|$\s/ig, '');
                    if (val.length == 0) {
                        alert($input.attr('placeholder'));
                        result.isValidate = false;
                        return;
                    }
                    var reg = new RegExp($input.attr('data-reg'), 'ig');
                    if (!reg.test(val)) {
                        alert($input.attr('data-reg-message'));
                        result.isValidate = false;
                        return;
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
                    var type = $('#applyType').val();
                    var d = resp.data;
                    var val = d['product' + type] || '--';
                    $('.prod-apply span[data-apply-type=' + type + ']').html(val);
                }
            },
            error: function () {

            }
        });

        // 如果是旺仔信用，初始化联动选择城市
        if ($('#cities').val()) {
            var cityArr = JSON.parse($('#cities').val());
            var cityMap = {};
            for(var i = 0; i < cityArr.length; i++) {
                var province = cityArr[i];
                cityMap[province[0]] = province.slice(1);
                $('#province').append('<option value="' + province[0] + '">' + province[0] + '</option>');
            }

            $('#province').change(function () {
                var $this = $(this);
                var cities = cityMap[$this.val()];
                var applyCity = $('#applyCity');
                applyCity.html("");
                for(var i = 0; i < cities.length; i++) {
                    applyCity.append('<option value="' + cities[i] + '">' + cities[i] + '</option>');
                }
            });

            $('#province').change();
        }
    }

    function save() {
        var isSubmit = false;
        return function () {
            var result = validate();
            if (result.isValidate) {
                if (isSubmit) {
                    alert('已经提交！');
                    return;
                }
                isSubmit = true;
                $.ajax({
                    method: 'POST',
                    url: '/expwy/v1/create',
                    dataType: 'json',
                    data: $.param(result.data),
                    success: function (resp) {
                        if (resp.status == 200) {
                            alert('提交成功！');
                            result.clear();
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

    init();
});