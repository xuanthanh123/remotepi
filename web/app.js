function dizi_cikart(a1, a2) {
    var a = [], diff = [];
    for (var i = 0; i < a1.length; i++) {
        a[a1[i]] = true;
    }
    for (var i = 0; i < a2.length; i++) {
        if (a[a2[i]]) {
            delete a[a2[i]];
        } else {
            a[a2[i]] = true;
        }
    }
    for (var k in a) {
        diff.push(k);
    }
    return diff;
};

$(function(){
    function pin_guncelle(){
        var pinler = ['03','05','07','08','10','11','12','13','15','16','18','19','21','22','23','24','26','29','31','32','33','35','36','37','38','40'];
        $.ajax({
            url: "pins.php",
            type: "get",
            success: function(cevap){
                cevap = cevap.split(",");
                cevap.pop();
                var kapali_pinler = dizi_cikart(cevap, pinler);
                $('.pins#pin div').removeClass("acik").addClass("kapali");
                cevap.forEach(function(pin){
                    $('.pins#pin'+pin+' div').removeClass("kapali").addClass("acik");
                });
                kapali_pinler.forEach(function(pin){
                    $('.pins#pin'+pin+' div').removeClass("acik").addClass("kapali");
                })
            }
        });
    }
    setInterval(function(){
        pin_guncelle()
    }, 1000);
    
    $('.pins').click(function(){
        var durum = ($(this).find('div').attr('class') == "acik" ? "kapali":"acik");
        var pin = $(this).attr('id');
        $.ajax({
            url: 'pins.php',
            type: 'post',
            data : {"pin": pin, "durum": durum},
            success: function(veri){
                console.log(veri);
            }
        });
    })
});
