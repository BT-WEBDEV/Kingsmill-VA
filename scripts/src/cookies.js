// save UTM variable to Cookies
var urlSearchParams = new URLSearchParams(window.location.search);
var params = Object.fromEntries(urlSearchParams.entries());

if (params.utm_source || params.utm_campaign) {
    setCookie('utm_source', params.utm_source);
    setCookie('utm_campaign', params.utm_campaign);
}

if ($(".utm_hidden_input")[0]) {
    var utm_input = $(".utm_hidden_input input");
    var utm_input_value = parseParams(utm_input.val());
    
    if (!utm_input_value.utm_source || !utm_input_value.utm_campaign) {
        var utm_value = "utm_source=" + getCookie('utm_source') + "&utm_campaign=" + getCookie('utm_campaign');
        utm_input.val(utm_value);
        console.log(utm_input_value.utm_source, utm_value);
    }
}

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function parseParams(querystring) {
    var vars = [], hash;
    var hashes = querystring.split('&');
    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
};