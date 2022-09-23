




// save UTM variable to Cookies
const urlSearchParams = new URLSearchParams(window.location.search);
const params = Object.fromEntries(urlSearchParams.entries());

if (params.utm_source) {
    setCookie('utm_source', params.utm_source);
}

if (params.utm_campaign) {
    setCookie('utm_campaign', params.utm_campaign);
}

const utm_input = document.querySelector('.utm_hidden_input input');
const utm_input_value = parseParams(utm_input.value);

if(!utm_input_value.utm_source || !utm_input_value.utm_campaign) {
    const utm_value = "utm_source=" + getCookie('utm_source') + "&utm_campaign=" + getCookie('utm_campaign');
    utm_input.value = utm_value;
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

    // parse query string
    const params = new URLSearchParams(querystring);

    const obj = {};

    // iterate over all keys
    for (const key of params.keys()) {
        if (params.getAll(key).length > 1) {
            obj[key] = params.getAll(key);
        } else {
            obj[key] = params.get(key);
        }
    }

    return obj;
};