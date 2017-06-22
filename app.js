/**
 * Created by qtvha on 6/22/2017.
 */
jQuery(function ($) {
    //BEGIN: Setup events for Buttons switch form
    var btn_choose_files = $('<div class="button-switch-form"></div>');
    var btn_paste_image = $('<div class="button-switch-form"></div>');
    var btn_paste_video = $('<div class="button-switch-form"></div>');
    var btn_make_meme = $('<div class="button-switch-form"></div>');
    //END: Setup events for Buttons switch form
    $('#form-upload').find('.buttons-switch-form').append(btn_choose_files,btn_paste_image,btn_paste_video,btn_make_meme);

    btn_choose_files.wrap($('<div class="col-xs-3"></div>'));
    btn_paste_image.wrap($('<div class="col-xs-3"></div>'));
    btn_paste_video.wrap($('<div class="col-xs-3"></div>'));
    btn_make_meme.wrap($('<div class="col-xs-3"></div>'));


    btn_choose_files.addClass('icon-box-choose_files').prepend('<div class="icon_box-text">Choose files</div>').prepend('<div class="icon"></div>');
    btn_paste_image.addClass('icon-box-paste_image').prepend('<div class="icon_box-text">Paste image url</div>').prepend('<div class="icon"></div>');
    btn_paste_video.addClass('icon-box-paste_video').prepend('<div class="icon_box-text">Paste video url</div>').prepend('<div class="icon"></div>');
    btn_make_meme.addClass('icon-box-make_meme').prepend('<div class="icon_box-text">Make meme</div>').prepend('<div class="icon"></div>');

    var deactivate_button = function (button) {
        button.removeClass('active');
    };
    var deactivate_buttons = function () {
        deactivate_button(btn_paste_image);
        deactivate_button(btn_make_meme);
        deactivate_button(btn_choose_files);
        deactivate_button(btn_paste_video);
    };

    var activate_button = function (button) {
        deactivate_buttons();
        button.addClass('active');
    };
    var switch_form_create_media = function (form_id) {
        create_media_type = form_id;
        console.log(create_media_type);

        if(create_media_type === 'paste_image') {
            activate_button(btn_paste_image);
        }
        if(create_media_type === 'paste_video') {
            activate_button(btn_paste_video);
        }
        if(create_media_type === 'make_meme') {
            activate_button(btn_make_meme);
        }
        if(create_media_type === 'choose_files') {
            activate_button(btn_choose_files);
        }
    };
    var create_media_type = 'choose_files';
    btn_paste_image.click(function () {
        switch_form_create_media('paste_image');
    });
    btn_paste_video.click(function () {
        switch_form_create_media('paste_video');
    });
    btn_make_meme.click(function () {
        switch_form_create_media('make_meme');
    });
    btn_choose_files.click(function () {
        switch_form_create_media('choose_files');
    });
    $('#myModal').modal();
});
