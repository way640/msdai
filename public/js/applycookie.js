(function (window, doc) {
    var agentInfo = (function () {
        var userAgent = navigator.userAgent;
        return {
            safari: (userAgent.match(/Version\/(\d(?:\.\d+)+)(?:\sMobile\/[0-9a-zA-Z]+)?\sSafari/) || [])[1]
        }
    })(),
    versionCompare = function(left, right) {
        if (typeof left + typeof right != 'stringstring')
            return false;

        var a = left.split('.')
            ,   b = right.split('.')
            ,   i = 0, len = Math.max(a.length, b.length);

        for (; i < len; i++) {
            if ((a[i] && !b[i] && parseInt(a[i]) > 0) || (parseInt(a[i]) > parseInt(b[i]))) {
                return 1;
            } else if ((b[i] && !a[i] && parseInt(b[i]) > 0) || (parseInt(a[i]) < parseInt(b[i]))) {
                return -1;
            }
        }

        return 0;
    },
    topJump = (function () {
        if (window.self === window.top || (doc.referrer && doc.referrer.indexOf(window.location.protocol + "//" + window.location.host) === 0)) {
            return false;
        }
        return true;
    })()
    if(topJump && !doc.cookie.replace(/^\s+|\s+$/g, "") && agentInfo.safari && versionCompare(agentInfo.safari, "5.1.3")){
        if (doc.referrer) {
            window.top.location.href =  window.location.protocol + "//" + window.location.host + "/authentication/setSession?redirectUrl=" + window.encodeURIComponent(doc.referrer);
        } else {
            console && console.log && console.log("ERROR: document.referrer is empty.");
        }
    }
})(window, document);