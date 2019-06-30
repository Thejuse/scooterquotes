function onMouseClick(target){
    $(target).mousedown(function(e) {
        switch (e.which) {
            case 1:
                // alert('Left Mouse button pressed.');
                break;
            case 2:
                // alert('Middle Mouse button pressed.');
                break;
            case 3:
                // Right Mouse Click
                location.reload();
                break;
        }
    });
}

$(document).ready(function () {
    onMouseClick('body');
});