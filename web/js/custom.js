var p = 0;
function timeout_trigger() {
    $(".progress").css("max-width",p+"%");
    $(".progress-view").text(p+"%");
    if(p !== 100) {
        setTimeout('timeout_trigger()', 50);
    }
    p++;
}
timeout_trigger();