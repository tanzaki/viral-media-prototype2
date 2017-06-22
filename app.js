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

    $('#myModal').modal();
});
