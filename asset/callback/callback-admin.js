$(document).ready(function(){

  $.ajax({
      type: "POST",
      url: "http://localhost:9080/shopify-callback/settings/getSettings",
      data: 'shop=' + 'diana4545.myshopify.com',
      dataType: "json", // Set the data type so jQuery can parse it for you
      success: function (data) {
        console.log(data[0]);

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
        value_wgt_bgColor = data[0]['value_wgt_bgColor'];
        value_wgt_fontColor = data[0]['value_wgt_fontColor'];
        value_wgt_position = data[0]['value_wgt_position'];
        if(value_wgt_position == 'center')
          value_wgt_position = 'left center'
        value_wgt_timezone = data[0]['value_wgt_timezone'];
        widget_text = data[0]['widget_text'];

        $('body').append('<div id="callback-button" class="' + value_btn_position + ' ' + value_btn_status + '"'
        + 'style="'
          + 'position: fixed; bottom: 45px; right: 50px;'
          + 'z-index: 9999;">'
          + '<a href="#"'
          + 'style="'
            + 'font-weight: bold;'
            + 'border-color: #eeeeee;'
            + 'font-size: 16px;'
            + 'font-family: sans-serif;'
            + 'text-align: center;'
            + 'line-height: 40px;'
            + 'height: 40px;'
            + 'margin: 0;'
            + 'display: inline-block;'
            + 'cursor: pointer;'
            + 'border: none;'
            + 'box-sizing: border-box;'
            + 'transition-property: all;'
            + 'max-width: 320px;'
            + 'min-width: 158.25px;'
            + 'transition-duration: .3s;"'
              + '>' + btn_text + '</a>'
          + '</div>'
          + '<style>'
              + '#callback-button.left { left: 40px; }'
              + '#callback-button.center { text-align: center; }'
              + '#callback-button.off { display: none !important; }'
              + '#callback-button a {'
              	+ 'background-color: ' + value_btn_bgColor + ';'
              	+ 'color: ' + value_btn_fontColor + ';'
              	+ 'padding: 0 30px;'
                + 'width: ' + value_btn_width + 'px;'
              	+ 'border-radius: 20px !important;'
              + '}'
          + '</style>');

        $('body').append('<iframe class="' + value_wgt_position + '" src="http://localhost:9080/shopify-callback/settings/widget/" id="callback-widget" style="'
              + 'position: fixed;'
              + 'bottom: 45px;'
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
          + '</iframe>'
          + '<style>'
              + '#callback-widget.left { left: 40px; }'
              + '#callback-widget.center { margin: auto; }'
          + '</style>'
          + '<script>'
            + '$("#callback-button a").click(function(){'
              + '$(this).hide();'
              + '$("#callback-widget").fadeIn("slow");'
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
