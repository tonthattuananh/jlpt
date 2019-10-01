$('#contact_form').submit(function (e) {
    e.preventDefault();
    let form = $(this);
    form.validate();
    if (form.valid()) {
        $('body').append(`<div class="gm-loader" style="position:fixed;z-index:99999999;top:0;left:0;right:0;bottom:0;display:flex;align-items:center;justify-content:center;background-color:rgba(0,0,0,0.51)"><i class="fa fa-refresh fa-spin fa-fw fa-3x" style="color:#ffffff"></i></div>`);
        $.post($(this).attr('action'), {
            action      : 'send_contact_form',
            _token      : $(this).find('[name="_token"]').val(),
            name        : $(this).find('[name="name"]').val(),
            email       : $(this).find('[name="email"]').val(),
            phone_number: $(this).find('[name="phone_number"]').val(),
            subject     : $(this).find('[name="subject"]').val(),
            message     : $(this).find('[name="message"]').val(),
        }, function (response) {
            if (response.success === true) {
                alert('Tin nhắn của bạn đã được gửi thành công');
                form.trigger("reset");
            } else {
                alert('Gửi tin nhắn không thành công, xin vui lòng thử lại');
            }
            $(document).find('.gm-loader').remove();
        });
    }
});