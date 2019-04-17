$(function () {
    var input = $('#adv-input > div input');
    $('#triger-adv').on('click', function (e) {
        // arrow flip
        $('#triger-adv').toggleClass('arrow-rotate')
        // adv show
        // $('#adv-input').toggleClass('adv-show');
        $('#adv-input').toggle(500);
        // disable input
        $.each( input , function (i, v) { 
            hasAttr(v,'disabled') ? 
                $(v).removeAttr('disabled') : $(v).attr('disabled','disabled');
        }); 
    });
    // open edit
    $('.img-user div').on('click', function (e) {
        e.preventDefault();
        // $('#profile-edit').toggleClass('event-modal-profile profile-edit-close');
        $('#profile-edit').toggle(200);
    });
    // close edit
    $('#close-edit-profile').on('click',(function (e){ 
        e.preventDefault();
        // $('#profile-edit').toggleClass('event-modal-profile profile-edit-close');
        $('#profile-edit').toggle(200);
    }));
});

// has atribute
function hasAttr(obj,param) {
    if ($(obj).attr(param) !== undefined) {
        return true;
    }else{
        return false
    }
};