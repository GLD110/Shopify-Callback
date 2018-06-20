$(document).ready(function(){

  var shop = Shopify['shop'];
  $.ajax({
      type: "POST",
      url: "https://call-back.io/shopify/settings/getSettings",
      data: 'shop=' + shop,
      dataType: "json", // Set the data type so jQuery can parse it for you
      success: function (data) {

        btn_text = data[0]['btn_text'];
        value_btn_bgColor = data[0]['value_btn_bgColor'];
        value_btn_fontColor = data[0]['value_btn_fontColor'];
        value_btn_position = data[0]['value_btn_position'];
        if(value_btn_position == 'center')
          value_btn_position = 'left center'
        value_btn_status = data[0]['value_btn_status'];
        if(value_btn_status == 0)
          value_btn_status = 'off';
        value_btn_width = data[0]['value_btn_width'];
        value_ico_pos = value_btn_width - 40;
        value_wgt_bgColor = data[0]['value_wgt_bgColor'];
        value_wgt_fontColor = data[0]['value_wgt_fontColor'];
        value_wgt_position = data[0]['value_wgt_position'];
        if(value_wgt_position == 'center')
          value_wgt_position = 'left center'
        value_wgt_timezone = data[0]['value_wgt_timezone'];
        widget_text = data[0]['widget_text'];

        $('body').append('<div id="callback-button" class="' + value_btn_position + ' ' + value_btn_status + '"'
        + 'style="'
          + 'position: fixed; bottom: 50vh; margin: 0; right: 0;'
          + 'z-index: 9999;">'
          + '<a href="#"'
          + 'style="'
            + 'font-weight: bold;'
            + 'border-color: #eeeeee;'
            + 'font-size: 16px;'
            + 'font-family: sans-serif;'
            + 'line-height: 40px;'
            + 'height: 40px;'
            + 'margin: 0;'
            + 'display: inline-block;'
            + 'cursor: pointer;'
            + 'border: none;'
            + 'box-sizing: border-box;'
            + 'transition-property: all;'
            + 'max-width: 320px;'
            + 'min-width: 160px;'
            + 'transition-duration: .3s;"'
              + '>' + btn_text + '<i class="icoPhoneRounded"></i>' + '</a>'
          + '</div>'
          + '<style>'
              + '#callback-button.left { left: 0; }'
              + '#callback-button.center { text-align: center; }'
              + '#callback-button.off { display: none !important; }'
              + '#callback-button a {'
              	+ 'background-color: ' + value_btn_bgColor + ';'
              	+ 'color: ' + value_btn_fontColor + ';'
              	+ 'padding: 0 15px;'
                + 'text-align: left;'
                + 'width: ' + value_btn_width + 'px;'
              + '}'
              + '#callback-button a { border-radius: 0; border-top-left-radius: 8px !important; border-bottom-left-radius: 8px !important; }'
              + '#callback-button.left a { border-radius: 0; border-top-right-radius: 8px !important; border-bottom-right-radius: 8px !important; }'
              + '#callback-button.center a { border-radius: 31px !important; }'
              + '#callback-button.center a { text-align: center; }'
              + '#callback-button.center .icoPhoneRounded { display: none; }'
              + '#callback-button .icoPhoneRounded {'
                  + 'position: absolute;'
                  + 'top: 50%;'
                  + 'right: 10px;'
                  + 'margin-top: -16px;'
                  + 'background-image: url("' + 'https://call-back.io/shopify/asset/template/img/phone.png' + '");'
                  + 'width: 32px;'
                  + 'height: 32px;'
                  + 'background-position: -2px -2px;'
              + '}'
              + '#callback-button.left .icoPhoneRounded {'
                  + 'left: ' + value_ico_pos + 'px;'
              + '}'
          + '</style>');

        $('body').append('<div id="callback-widget" class="' + value_wgt_position + '" style="'
              + 'position: fixed;'
              + 'bottom: 150px;'
              + 'right: 10px;'
              + 'max-width: 320px;'
              + 'min-width: 320px;'
              + 'width: 320px;'
              + 'max-height: 540px;'
              + 'min-height: 540px;'
              + 'height: 540px;'
              + 'border: none;'
              + 'z-index: 9999;'
              + 'display: none;">'
              + '<p id="widget-close" style="font-size: 14px; margin-top: 5px; right: 5px; cursor: pointer; position: absolute; width: 25px; border-radius: 7px !important; border: solid grey 2px; padding-left: 6px;">' + 'X' + '</p>'
              + '<iframe src="https://call-back.io/shopify/settings/getWidget/?shop=' + shop + '" id="" style="'
              + 'max-width: 320px;'
              + 'min-width: 320px;'
              + 'width: 320px;'
      				+ 'max-height: 540px;'
      				+ 'min-height: 540px;'
              + 'height: 540px;'
              + 'border: none;">'
          + '</iframe></div>'
          + '<style>'
              + '#callback-widget.left { left: 40px; }'
              + '#callback-widget.center { margin: auto; }'
              + '@media only screen and (max-width: 600px) {'
                  + '#callback-widget {'
                      + 'bottom: 40px !important;'
                  + '}'
              + '}'
          + '</style>'
          + '<script>'
            + '$("#callback-button a").click(function(){'
              + '$(this).hide();'
              + '$("#callback-widget").fadeIn("slow");'
            + '});'
            + '$("#widget-close").click(function(){'
              + '$("#callback-widget").hide("slow");'
              + '$("#callback-button a").show();'
            + '});'
            + '$(window).on("click.Bst",function(e){'
              + 'if ('
                        + '$("#callback-widget").has(event.target).length == 0'
                        + '&&'
                        + '!$("#callback-widget").is(event.target)'
                        + '&&'
                        + '!$("#callback-button").is(event.target)'
                        + '&&'
                        + '$("#callback-button").has(event.target).length == 0'
              +	'){'
                + '$("#callback-widget").hide("slow");'
                + '$("#callback-button a").show();'
              + '}'
            + '});'
          + '</script>');
      }
  });
});
