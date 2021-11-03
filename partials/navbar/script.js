jQuery(document).on("click", ".menu-item", function(){
    if (jQuery(this).hasClass("current-item")) {
        return
    } else {
        jQuery(".menu-item.current-item").removeClass("current-item")
        jQuery(this).addClass("current-item")
        jQuery("html").removeClass("menu-open")
    }
})

jQuery(document).on("click", "#tofuburger-menu-container", function(){
    jQuery("html").toggleClass("menu-open")
})


jQuery(document).on("click", "#logo-container", function(){
    window.location.href = "/"
})