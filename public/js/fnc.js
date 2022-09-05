function reformat(value, matauang)
{
    matauang = (matauang=='IDR')?'Rp ':'$ ';
    value = Number(value).toFixed(2);
    x = value.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + (x[1].toString().length > 1?x[1]:x[1] + '0') : '.00';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    value = matauang + (x1==''?'0':x1) + x2;
    return value;
}