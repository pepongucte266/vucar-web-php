// console.log(localStorage.data)
var data = JSON.parse(localStorage["data"]);
var $txtInfo = $('#txtInfo')
var $txtPrice = $('#txtPrice')
window.onload = function() {
    $txtInfo.html(data['year'] + ' ' + data['name'] + ' ' + data['model'])
}
if (data['price'] / 1000000000 < 1) {
    var minPrice = Math.round((data['price'] - data['price'] * 0.15) / 1000000)
    var maxPrice = Math.round((data['price'] + data['price'] * 0.05) / 1000000)
    window.onload = function() {
        $txtInfo.html(data['year'] + ' ' + data['name'] + ' ' + data['model'])
        $txtPrice.html(minPrice + " triệu VND" + '~' + maxPrice + " triệu VND")
    }
} else if (data['price'] / 1000000000 >= 1) {
    var minPrice = ((data['price'] - data['price'] * 0.15) / 1000000000).toFixed(1)
    var maxPrice = ((data['price'] + data['price'] * 0.05) / 1000000000).toFixed(1)
    window.onload = function() {
        $txtInfo.html(data['year'] + ' ' + data['name'] + ' ' + data['model'])
        $txtPrice.html(minPrice + " tỷ VND" + ' ~ ' + maxPrice + " tỷ VND")
    }
}

$('#btn-your-vehicle-continue').on('click', e => {
    $('#popup').show();
    $('#form-send').show()
    $('#form-loginn').hide();
    $('#form-signup').hide();
})

$('*[data-cy="signup-btn"]').on('click', e => {
    $('#popup').show();
    $('#form-send').hide()
    $('#form-signup').show();
    $('#form-login').hide();
})

$('*[data-cy="login-btn"]').on('click', e => {
    $('#popup').show();
    $('#form-send').hide()
    $('#form-signup').hide();
    $('#form-login').show();
})

$('#select-color').on('change', e => {
    if (e.target.value == "other") {
        $('#input-color').show();
    }
})