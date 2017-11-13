$("div.conteudo > img").hover(function() {
    $(this).next(".divDoLadoDireito").show(); //hover in
}, function() {
    $(this).next(".divDoLadoDireito").hide(); //hover out
});