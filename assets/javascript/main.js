import data from './data.js';
var tabLinks = document.querySelectorAll(".MuiTab-root");
var tabContent = document.querySelectorAll(".tabcontent");
var $selectYear = $('#year')
var $btnStart = $('#start')
var $btnOpenLogin = $('*[data-cy="login-btn"]')
var currentData = {}

tabLinks.forEach(el => {
    el.addEventListener("click", openTabs);

});

function openTabs(el) {
    var btn = el.currentTarget; // lắng nghe sự kiện và hiển thị các element
    var electronic = btn.dataset.cy; // lấy giá trị trong data-cy

    tabContent.forEach(function(el) {
        el.classList.remove("active");
    }); //lặp qua các tab content để remove class active

    tabLinks.forEach(function(el) {
        el.classList.remove("active");
    }); //lặp qua các tab links để remove class active

    document.querySelector("#" + electronic).classList.add("active");
    // trả về phần tử đầu tiên có id="" được add class active

    btn.classList.add("active");
    // các button mà chúng ta click vào sẽ được add class active
}


function getModel(name) {
    var $selectModel = $('#model');
    $selectModel.removeAttr('disabled');
    var options = [];
    options.push('<option value="0"></option>')
    $.each(data[name], i => {
        options.push('<option value="' + i + '">' + i + '</option>');
    });
    $selectModel.html(options.join(""));
    $selectModel.on('change', e => {
        currentData.model = e.target.value
    })
}


function getName(year) {
    var $selectMake = $('#make');
    $selectMake.removeAttr('disabled');
    var options = [];
    options.push('<option value="0"></option>')
    $.each(data, i => {
        options.push('<option value="' + i + '">' + i + '</option>');
    });
    $selectMake.html(options.join(""));
    $selectMake.on('change', e => {
        if (e.target.value != "") {
            getModel(e.target.value)
            currentData.name = e.target.value
        }
    })
}



$selectYear.on('change', e => {
    if (e.target.value != "") {
        getName(e.target.value)
        currentData.year = e.target.value
    }
})


$btnStart.on('click', e => {
    currentData.price = data[currentData.name][currentData.model][currentData.year]
    localStorage['data'] = JSON.stringify(currentData)
    window.location = "/sell-your-car/your-verhicle.php";
})

$btnOpenLogin.on('click', e => {
    $('#popup').show();
    $('#form-send').hide()
    $('#form-signup').hide();
    $('#form-login').show();
})

$('*[data-cy="signup-btn"]').on('click', e => {
    $('#popup').show();
    $('#form-send').hide()
    $('#form-signup').show();
    $('#form-login').hide();
})

$('#close').on('click', e => { $('#popup').hide(); })
