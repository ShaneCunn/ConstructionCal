/*window.onbeforeunload = function () {
    return "Data will be lost if you leave the page, are you sure?";
};*/

calc_total();

$(".custom-select").on('change', function () {

    const parent = $(this).closest('tr');
    const price = parseFloat($('.valueAmount', parent).text());
    const choose = parseFloat($('.custom-select', parent).val());

    $('.subtotal', parent).text(choose * price);
    calc_total();
});


function formatMoney(n, c, d, t) {
    var c = isNaN(c = Math.abs(c)) ? 0 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "," : t,
        s = n < 0 ? "-" : "",
        i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
        j = (j = i.length) > 3 ? j % 3 : 0;

    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

function calc_total() {
    let sum = 0;

    $('.subtotal').each(function () {
        sum += parseFloat($(this).text());
        $('.fulltotal').text(sum);
        $('.perminute').text(formatMoney(sum * 60));
        $('.perhour').text(formatMoney(sum * 60 * 60));

    })
}

