jQuery(document).on("click", ".wahlkreis", function(){
    window.location.href= `/wahlkreis/${jQuery(this).attr("data-kreisnummer")}`
})