<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Settings</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="<?PHP echo base_url(); ?>asset/template/css/app.css" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <style>
      html, body { min-height: 540px !important; background: none repeat scroll 0 0 transparent; }

      #call-widget input {
        width: 100%;
        height: 30px;
        margin: 0;
      }
      #call-widget textarea {
        margin: 0;
      }
      #call-widget label {
        margin-bottom: 0;
        display: inline-block;
        width: 100%;
        height: 30px;
      }
      #call-widget select {
        height: 30px;
      }
      #call-widget.left { left: 40px; }
      #call-widget.center { margin: auto; }
    </style>
    <!--end of widget css -->
</head>

<body class="skin-josh" style="">
  <div id="call-widget" style="">
    <style>
      #call-widget label,textarea,input {
        width: 100%;
      }
    </style>
    <form border="0" id="contact-form" name="contact" method="POST" style="padding: 10px; line-height: 2; border-radius: 5px; color:<?php echo $query->result()[0]->value_wgt_fontColor; ?>; background-color:<?php echo $query->result()[0]->value_wgt_bgColor; ?>;" action="<?php echo base_url() . 'callrequest/addCallrequest'?>">
        <input name="shop" class="hidden" value="<?php echo $query->result()[0]->shop;?>">
        <div style="margin:7px 0 7px 0;" class="above-text">
          <b><?php echo $query->result()[0]->widget_text; ?></b>
          <!--<p id="widget-close" style="float: right;font-size: 20px;margin-top: -20px;cursor: pointer;">X</p>-->
        </div>
        <!--Full name-->
          <label>Full Name *</label>
          <input type="text" class="input" required maxlength="35" name="name" value="">
        <!--Email address-->
          <label>Email Address *</label>
          <input type="email" class="input" required maxlength="45" name="email" value="">
        <!--Phone number-->
          <label>Your phone number *</label>
          <input type="text" required name="phone" class="input" value="" maxlength="30">
        <!--Type of call-->
          <label style="width: 48%; margin: 5px 0;">Call Type *</label>
          <select style="width: 48%; margin: 5px 0; float: right; clear: both;" id="call_type" name="call_type">
            <option value="general<?php /*if(!empty($emails)) echo $emails->generalEmail;*/ ?>" style="<?php if(!empty($emails)) if($emails[0]->generalEmail == '') echo 'display: none;'; ?>">General</option>
            <option value="corporate<?php /*if(!empty($emails)) echo $emails->coporateEmail;*/ ?>" style="<?php if(!empty($emails)) if($emails[0]->coporateEmail == '') echo 'display: none;'; ?>">Corporate Quotes</option>
            <option value="sales<?php /*if(!empty($emails)) echo $emails->salesEmail;*/ ?>" style="<?php if(!empty($emails)) if($emails[0]->salesEmail == '') echo 'display: none;'; ?>">Sales</option>
            <option value="order<?php /*if(!empty($emails)) echo $emails->orderEmail;*/ ?>" style="<?php if(!empty($emails)) if($emails[0]->orderEmail == '') echo 'display: none;'; ?>">Existing Order</option>
            <option value="complaint<?php /*if(!empty($emails)) echo $emails->complaintEmail;*/ ?>" style="<?php if(!empty($emails)) if($emails[0]->complaintEmail == '') echo 'display: none;'; ?>">Complaint</option>
            <option value="other<?php /*if(!empty($emails)) echo $emails->otherEmail;*/ ?>" style="<?php if(!empty($emails)) if($emails[0]->otherEmail == '') echo 'display: none;'; ?>">Other</option>
          </select>
        <!--Best to call-->
          <label>Best time to call</label>
          <select style="width: 48%; margin-bottom: 5px;" id="time_month" name="time_month">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          <select style="width: 48%; margin-bottom: 5px; float: right; clear: both;" id="time_day" name="time_day">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
          <select style="width: 48%; margin-bottom: 5px;" id="time_hour" name="time_hour">
            <option value="00:00 (Midnight)">12:00 A.M.</option>
            <option value="00:30 (12:30 A.M.)">12:30 A.M.</option>
            <option value="01:00 (1:00 A.M.)">1:00 A.M.</option>
            <option value="01:30 (1:30 A.M.)">1:30 A.M.</option>
            <option value="02:00 (2:00 A.M.)">2:00 A.M.</option>
            <option value="02:30 (2:30 A.M.)">2:30 A.M.</option>
            <option value="03:00 (3:00 A.M.)">3:00 A.M.</option>
            <option value="03:30 (3:30 A.M.)">3:30 A.M.</option>
            <option value="04:00 (4:00 A.M.)">4:00 A.M.</option>
            <option value="04:30 (4:30 A.M.)">4:30 A.M.</option>
            <option value="05:00 (5:00 A.M.)">5:00 A.M.</option>
            <option value="05:30 (5:30 A.M.)">5:30 A.M.</option>
            <option value="06:00 (6:00 A.M.)">6:00 A.M.</option>
            <option value="06:30 (6:30 A.M.)">6:30 A.M.</option>
            <option value="07:00 (7:00 A.M.)">7:00 A.M.</option>
            <option value="07:30 (7:30 A.M.)">7:30 A.M.</option>
            <option value="08:00 (8:00 A.M.)">8:00 A.M.</option>
            <option value="08:30 (8:30 A.M.)">8:30 A.M.</option>
            <option value="09:00 (9:00 A.M.)">9:00 A.M.</option>
            <option value="09:30 (9:30 A.M.)">9:30 A.M.</option>
            <option value="10:00 (10:00 A.M.)">10:00 A.M.</option>
            <option value="10:30 (10:30 A.M.)">10:30 A.M.</option>
            <option value="11:00 (11:00 A.M.)">11:00 A.M.</option>
            <option value="11:30 (11:30 A.M.)">11:30 A.M.</option>
            <option value="12:00 (12:00 (Noon)" selected="">12:00 P.M.</option>
            <option value="12:30 (12:30 P.M.)">12:30 P.M.</option>
            <option value="13:00 (1:00 P.M.)">1:00 P.M.</option>
            <option value="13:30 (1:30 P.M.)">1:30 P.M.</option>
            <option value="14:00 (2:00 P.M.)">2:00 P.M.</option>
            <option value="14:30 (2:30 P.M.)">2:30 P.M.</option>
            <option value="15:00 (3:00 P.M.)">3:00 P.M.</option>
            <option value="15:30 (3:30 P.M.)">3:30 P.M.</option>
            <option value="16:00 (4:00 P.M.)">4:00 P.M.</option>
            <option value="16:30 (4:30 P.M.)">4:30 P.M.</option>
            <option value="17:00 (5:00 P.M.)">5:00 P.M.</option>
            <option value="17:30 (5:30 P.M.)">5:30 P.M.</option>
            <option value="18:00 (6:00 P.M.)">6:00 P.M.</option>
            <option value="18:30 (6:30 P.M.)">6:30 P.M.</option>
            <option value="19:00 (7:00 P.M.)">7:00 P.M.</option>
            <option value="19:30 (7:30 P.M.)">7:30 P.M.</option>
            <option value="20:00 (8:00 P.M.)">8:00 P.M.</option>
            <option value="20:30 (8:30 P.M.)">8:30 P.M.</option>
            <option value="21:00 (9:00 P.M.)">9:00 P.M.</option>
            <option value="21:30 (9:30 P.M.)">9:30 P.M.</option>
            <option value="22:00 (10:00 P.M.)">10:00 P.M.</option>
            <option value="22:30 (10:30 P.M.)">10:30 P.M.</option>
            <option value="23:00 (11:00 P.M.)">11:00 P.M.</option>
            <option value="23:30 (11:30 P.M.)">11:30 P.M.</option>
          </select>
          <select style="width: 48%; margin-bottom: 5px; float: right; clear: both;" id="time_gmt" name="time_gmt" class="<?php if($query->result()[0]->value_wgt_timezone != 'global') echo 'hidden'; ?>">
            <option value="GMT-0100">GMT-1</option>
            <option value="GMT-0200">GMT-2</option>
            <option value="GMT-0300">GMT-3</option>
            <option value="GMT-0400">GMT-4</option>
            <option value="GMT-0500">GMT-5</option>
            <option value="GMT-0600">GMT-6</option>
            <option value="GMT-0700">GMT-7</option>
            <option value="GMT-0800">GMT-8</option>
            <option value="GMT-0900">GMT-9</option>
            <option value="GMT-1000">GMT-10</option>
            <option value="GMT-1100">GMT-11</option>
            <option value="GMT-1200">GMT-12</option>
            <option value="GMT+0000" selected="">GMT</option>
            <option value="GMT+0100">GMT+1</option>
            <option value="GMT+0200">GMT+2</option>
            <option value="GMT+0300">GMT+3</option>
            <option value="GMT+0400">GMT+4</option>
            <option value="GMT+0500">GMT+5</option>
            <option value="GMT+0600">GMT+6</option>
            <option value="GMT+0700">GMT+7</option>
            <option value="GMT+0800">GMT+8</option>
            <option value="GMT+0900">GMT+9</option>
            <option value="GMT+1000">GMT+10</option>
            <option value="GMT+1100">GMT+11</option>
            <option value="GMT+1200">GMT+12</option>
          </select>
          <select style="width: 48%; margin-bottom: 5px; float: right; clear: both;" id="time_ust" name="time_gmt" class="<?php if($query->result()[0]->value_wgt_timezone != 'us-only') echo 'hidden'; ?>">
            <option value="GMT-0800" selected="">PST (UTC−08:00)</option>
            <option value="GMT-0700">MST (UTC−07:00)</option>
            <option value="GMT-0600">CST (UTC−06:00)</option>
            <option value="GMT-0500">EST (UTC−05:00)</option>
            <option value="GMT-1000">HST (UTC−10:00)</option>
            <option value="GMT-0900">AKST (UTC−09:00)</option>
          </select>
          <select style="width: 48%; margin-bottom: 5px; float: right; clear: both;" id="time_udt" name="time_gmt" class="<?php if($query->result()[0]->value_wgt_timezone != 'us-only') echo 'hidden'; ?>">
            <option value="GMT-0700" selected="">PDT (UTC−07:00)</option>
            <option value="GMT-0600">MST (UTC−06:00)</option>
            <option value="GMT-0500">CST (UTC−05:00)</option>
            <option value="GMT-0400">EST (UTC−04:00)</option>
            <option value="GMT-0900">HST (UTC−09:00)</option>
            <option value="GMT-0800">AKST (UTC−08:00)</option>
          </select>
          <!--Notes-->
          <label>Notes</label>
          <textarea name="message" style="height: 50px;"></textarea>
          <!--SUBMIT--><br>
          <input type="submit" id="send_request" style="margin-top: 5px; max-width: 120px; padding: 4px 12px;" class="btn btn-primary" name="submitc" value="Send request">
          <label style="text-align: right;">Powered by <a href="https://call-back.io"><b>call-back.io</b></a></label>
          <input id="location" name="location" class="hidden" value="">
    </form>
  </div>

    <script src="<?PHP echo base_url(); ?>asset/template/js/app.js" type="text/javascript"></script>
    <!--<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>-->
    <script>
      $(document).ready(function(){

        var dateObj = new Date();
        var month = dateObj.getUTCMonth() + 1;
        var day = dateObj.getUTCDate();
        var year = dateObj.getUTCFullYear();
        $('#time_month').val(month);
        $('#time_day').val(day);
        $('#time_gmt').val(dateObj.toString().match(/([A-Z]+[\+-][0-9]+)/)[1]);
        if($('#time_udt').hasClass('hidden'))
          $('#time_ust').val(dateObj.toString().match(/([A-Z]+[\+-][0-9]+)/)[1]);
        if($('#time_ust').hasClass('hidden'))
          $('#time_udt').val(dateObj.toString().match(/([A-Z]+[\+-][0-9]+)/)[1]);
        if(month > 2 && month < 12){
          $('#time_ust').hide();
        }
        else {
          $('#time_udt').hide();
        }

        //$('#location').val(geoplugin_countryName() + ", " + geoplugin_city() + ", " + geoplugin_latitude() + ", " + geoplugin_longitude());

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) {   // XMLHttpRequest.DONE == 4
          if (xmlhttp.status == 200) {
        	try {
        	  var location = JSON.parse(xmlhttp.responseText);

        	  $('#location').val(location.country_name + ", " + location.city + ", " + location.latitude + ", " + location.longitude);

        	} catch(e) {}
          }
          else if (xmlhttp.status == 400) {
        	alert('There was an error 400');
          }
          else {
        	alert('something else other than 200 was returned');
          }
        }
        };

        xmlhttp.open("GET", "https://freegeoip.net/json/", true);
        xmlhttp.send();


        /*$('#widget-close').click(function(){
          $( this ).parent().parent().hide();
        });*/

        $('#send_request').click(function(e){
          e.preventDefault();
          var url = $('#contact-form').attr('action');
            $.ajax({
               url: url,
               data: $("#contact-form").serialize(),
               type: $("#contact-form").attr('method')
             }).done(function(data) {
               $("#contact-form textarea").val('');
               $("#contact-form textarea").attr('placeholder', 'The Call Request Was Sent.');
             });
        });
      });
    </script>
    <!--<script type="text/javascript" src="<?PHP echo base_url(); ?>asset/callback/callback-admin.js"></script>-->
    <!-- end of page level js -->
</body>

</html>
