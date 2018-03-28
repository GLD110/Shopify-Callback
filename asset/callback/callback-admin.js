	$(document).ready(function(){
		$('head').append('<link rel="stylesheet" href="http://localhost:9080/shopify-callback/asset/callback/callback-admin.css" type="text/css" />');

		$('body').append('<div id="callback-button">'
			+ '<a href="#" class="button">Call Me Back</a>'
		  + '</div>');

		$('body').append('<div id="callback-widget">'
				+ '<form border="0" name="contact" method="POST" action="" onsubmit="return(validate());">'
						+ '<div style="margin:7px 0 7px 0;" class="above-text">'
						+ '	Please fill up the form below.'
						+ '</div>'
						+ '<!--Full name-->'
							+ 'Full Name *<br>'
							+ '<input type="text" class="input" maxlength="35" name="name" value="">'
						+ '<!--Email address-->'
							+ '<br>Email Address *<br>'
							+ '<input type="text" class="input" maxlength="45" name="email" value="">'
						+ '<!--Phone number-->'
							+ '<br>Your phone number *<br>'
							+ '<input type="text" name="phone" class="input" value="" maxlength="30">'
						+ '<!--Best to call-->'
							+ '<br>Best time to call<br>'
							+ '<select style="width: 100px;" name="time">'
								+ '<option value="00:00 (Midnight)" selected="">12:00 A.M.</option>'
								+ '<option value="00:30 (12:30 A.M.)">12:30 A.M.</option>'
								+ '<option value="01:00 (1:00 A.M.)">1:00 A.M.</option>'
								+ '<option value="01:30 (1:30 A.M.)">1:30 A.M.</option>'
								+ '<option value="02:00 (2:00 A.M.)">2:00 A.M.</option>'
								+ '<option value="02:30 (2:30 A.M.)">2:30 A.M.</option>'
								+ '<option value="03:00 (3:00 A.M.)">3:00 A.M.</option>'
								+ '<option value="03:30 (3:30 A.M.)">3:30 A.M.</option>'
								+ '<option value="04:00 (4:00 A.M.)">4:00 A.M.</option>'
								+ '<option value="04:30 (4:30 A.M.)">4:30 A.M.</option>'
								+ '<option value="05:00 (5:00 A.M.)">5:00 A.M.</option>'
								+ '<option value="05:30 (5:30 A.M.)">5:30 A.M.</option>'
								+ '<option value="06:00 (6:00 A.M.)">6:00 A.M.</option>'
								+ '<option value="06:30 (6:30 A.M.)">6:30 A.M.</option>'
								+ '<option value="07:00 (7:00 A.M.)">7:00 A.M.</option>'
								+ '<option value="07:30 (7:30 A.M.)">7:30 A.M.</option>'
								+ '<option value="08:00 (8:00 A.M.)">8:00 A.M.</option>'
								+ '<option value="08:30 (8:30 A.M.)">8:30 A.M.</option>'
								+ '<option value="09:00 (9:00 A.M.)" selected="">9:00 A.M.</option>'
								+ '<option value="09:30 (9:30 A.M.)">9:30 A.M.</option>'
								+ '<option value="10:00 (10:00 A.M.)">10:00 A.M.</option>'
								+ '<option value="10:30 (10:30 A.M.)">10:30 A.M.</option>'
								+ '<option value="11:00 (11:00 A.M.)">11:00 A.M.</option>'
								+ '<option value="11:30 (11:30 A.M.)">11:30 A.M.</option>'
								+ '<option value="12:00 (12:00 (Noon)">12:00 P.M.</option>'
								+ '<option value="12:30 (12:30 P.M.)">12:30 P.M.</option>'
								+ '<option value="13:00 (1:00 P.M.)">1:00 P.M.</option>'
								+ '<option value="13:30 (1:30 P.M.)">1:30 P.M.</option>'
								+ '<option value="14:00 (2:00 P.M.)">2:00 P.M.</option>'
								+ '<option value="14:30 (2:30 P.M.)">2:30 P.M.</option>'
								+ '<option value="15:00 (3:00 P.M.)">3:00 P.M.</option>'
								+ '<option value="15:30 (3:30 P.M.)">3:30 P.M.</option>'
								+ '<option value="16:00 (4:00 P.M.)">4:00 P.M.</option>'
								+ '<option value="17:00 (5:00 P.M.)">5:00 P.M.</option>'
								+ '<option value="16:30 (4:30 P.M.)">4:30 P.M.</option>'
								+ '<option value="17:30 (5:30 P.M.)">5:30 P.M.</option>'
								+ '<option value="18:00 (6:00 P.M.)">6:00 P.M.</option>'
								+ '<option value="18:30 (6:30 P.M.)">6:30 P.M.</option>'
								+ '<option value="19:00 (7:00 P.M.)">7:00 P.M.</option>'
								+ '<option value="19:30 (7:30 P.M.)">7:30 P.M.</option>'
								+ '<option value="20:00 (8:00 P.M.)">8:00 P.M.</option>'
								+ '<option value="20:30 (8:30 P.M.)">8:30 P.M.</option>'
								+ '<option value="21:00 (9:00 P.M.)">9:00 P.M.</option>'
								+ '<option value="21:30 (9:30 P.M.)">9:30 P.M.</option>'
								+ '<option value="22:00 (10:00 P.M.)">10:00 P.M.</option>'
								+ '<option value="22:30 (10:30 P.M.)">10:30 P.M.</option>'
								+ '<option value="23:00 (11:00 P.M.)">11:00 P.M.</option>'
								+ '<option value="23:30 (11:30 P.M.)">11:30 P.M.</option>'
							+ '</select>'
							+ '<select style="width: 100px;" name="time_gmt">'
								+ '<option value="GMT-1">GMT-1</option>'
								+ '<option value="GMT-2">GMT-2</option>'
								+ '<option value="GMT-3">GMT-3</option>'
								+ '<option value="GMT-4">GMT-4</option>'
								+ '<option value="GMT-5" selected="">GMT-5</option>'
								+ '<option value="GMT-6">GMT-6</option>'
								+ '<option value="GMT-7">GMT-7</option>'
								+ '<option value="GMT-8">GMT-8</option>'
								+ '<option value="GMT-9">GMT-9</option>'
								+ '<option value="GMT-10">GMT-10</option>'
								+ '<option value="GMT-11">GMT-11</option>'
								+ '<option value="GMT-12">GMT-12</option>'
								+ '<option value="GMT">GMT</option>'
								+ '<option value="GMT+1">GMT+1</option>'
								+ '<option value="GMT+2">GMT+2</option>'
								+ '<option value="GMT+3">GMT+3</option>'
								+ '<option value="GMT+4">GMT+4</option>'
								+ '<option value="GMT+5">GMT+5</option>'
								+ '<option value="GMT+6">GMT+6</option>'
								+ '<option value="GMT+7">GMT+7</option>'
								+ '<option value="GMT+8">GMT+8</option>'
								+ '<option value="GMT+9">GMT+9</option>'
								+ '<option value="GMT+10">GMT+10</option>'
								+ '<option value="GMT+11">GMT+11</option>'
								+ '<option value="GMT+12">GMT+12</option>'
							+ '</select>'
							+ '<!--Notes-->'
							+ '<br>Notes<br>'
							+ '<textarea name="message"></textarea>'
							+ '<!--SUBMIT--><br>'
							+ '<input type="submit" id="send_request" class="btn btn-primary" name="submitc" value="Send request">'
				+ '</form>'
			+ '</div>'
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
	});
