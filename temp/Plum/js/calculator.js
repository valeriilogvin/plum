window.onload = calculate();

$(document).ready(function(){
    setSelectFileds();
});

function setSelectFileds() {
    $('.js-select-year').select2({
		maximumSelectionLength: 2,
        minimumResultsForSearch: -1
    });

    $('.js-select-fuel').select2({
		maximumSelectionLength: 2,
        minimumResultsForSearch: -1
    });

    $('.js-select-volume').select2({
		maximumSelectionLength: 2,
        minimumResultsForSearch: -1
    });

    $('.js-select-auction').select2({
        placeholder: "Выберите город",
		maximumSelectionLength: 2,
		language: "en"
    });
}

$("#calculator-form").on("input", () => {
    calculate()
});

function calculate() {
    var data = $('#calculator-form').serializeArray().reduce((obj, item) => {
        obj[item.name] = item.value;
        return obj;
    }, {});
    
    // Сумма лота
    if(data['auction-sum']) {
        $(".lot-amount").text(data['auction-sum']);
    } else {
        $(".lot-amount").text(0);
    }

    // Акциз
    if(data['year'] && data['volume'] && data['fuel']) {
        let motorCoefficient;
        let carYear = new Date().getFullYear() - data['year'];

        if(data['fuel'] === 'gas' && data['volume'] <= '3.0') {
            motorCoefficient = 50;
        } else if(data['fuel'] === 'gas' && data['volume'] > '3.0') {
            motorCoefficient = 100;
        } else if(data['fuel'] === 'diesel' && data['volume'] <= '3.0') {
            motorCoefficient = 75;
        } else if(data['fuel'] === 'diesel' && data['volume'] > '3.0') {
            motorCoefficient = 150;
        }

        let total = (motorCoefficient*data['volume']*carYear)*1.2;
        $("#excise-tax").text(total.toFixed(1));
    } else {
        $("#excise-tax").text(0);
    }

    // Доставка по Америка + порт назначения
    if(data['auction']) {
        let total = data['auction'];
        $("#delivery").text(total);
    } else {
        $("#delivery").text(0);
    }

    // Пошлина
    if(data['auction-sum']) {
        let total = (Number(data['auction-sum']) + 250 + Number(data['auction-sum'])*0.05 + 1000)/10;
        $("#duty").text(total.toFixed(1));
    } else {
        $("#duty").text(0);
    }

    // НДС
    if(data['auction-sum']) {
        let a = $("#excise-tax").text();
        let p = $("#duty").text();
        let auto = Number(data['auction-sum']) + 250 + Number(data['auction-sum'])*0.05 + 1000 + Number(data['auction-sum']);

        let total = (Number(a) + Number(p) + Number(auto))*0.2;
        $("#nds").text(total.toFixed(1));
    } else {
        $("#nds").text(0);
    }

    // Сумма итоговая таможенных платежей
    if(data['auction-sum']) {
        let a = $("#excise-tax").text();
        let p = $("#duty").text();
        let n = $("#nds").text();

        let total = Number(a) + Number(p) + Number(n);
        $(".amount-of-customs-payments-total").text(total.toFixed(1));
    } else {
        $(".amount-of-customs-payments-total").text(0);
    }


    // Тотал доставки
    if($("#delivery").text()) {
        let a = $("#delivery").text();
        let b = 800;

        let total = Number(a) + Number(b);
        $(".delivery-total").text(total.toFixed(1));
    } else {
        $(".delivery-total").text(0);
    }

    // Загальна вартість
    if(data['auction-sum'] && $(".amount-of-customs-payments-total").text() && $(".delivery-total").text()) {
        let a = data['auction-sum'];
        let p = $(".amount-of-customs-payments-total:first").text();
        let d = $(".delivery-total:first").text();

        let total = Number(a) + Number(p) + Number(d);
        $("#total-amount").text(total.toFixed(1));
    } else {
        $("#total-amount").text(0);
    }

}

window.onresize = function() {
    // setSelectFileds();
    // calculate()
};