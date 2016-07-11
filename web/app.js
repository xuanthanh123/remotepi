$(function(){
    function pin_guncelle(){
        $.getJSON("pins.json").done(function(veri){
            Object.keys(veri['pinler']).forEach(function(pin){
                if(veri['pinler'][pin]['durum'] == "acik"){
                    $('.pins#pin'+pin+' div').removeClass("kapali").addClass("acik");
                }else{
                    $('.pins#pin'+pin+' div').removeClass("acik").addClass("kapali");
                }
            });
        });
    }

    setInterval(function(){
        pin_guncelle()
    }, 1000);
    
    $('.pins').click(function(){
        var durum = ($(this).find('div').attr('class') == "acik" ? "kapali":"acik");
        var pin = $(this).attr('id');
        $.ajax({
            url: '', //pins.php file path
            type: 'post',
            data : {"pin": pin, "durum": durum},
            success: function(veri){
                console.log(veri);
            }
        });
    })
})
