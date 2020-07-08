	
	// TODO:
	// Description : this is the main scripting file for the page to
	// creator : B P Likith sai
	
	var myVar;

	$(function() {

		/////////////////////////////////////////////////////////////////////////
		////	Play audio when the page loads								 ////
		/////////////////////////////////////////////////////////////////////////
		play_audio_on_start();	
		
		
		/////////////////////////////////////////////////////////////////////////
		//// 	set count down timer clock for 20 seconds					 ////
		/////////////////////////////////////////////////////////////////////////
		myVar = setInterval(function() {
			$(".loading_bar").css("display","none");
			$("#main_content").css("display","block");
			$(".float_bar").css("visibility","visible");
		}, 20000);

		
		/////////////////////////////////////////////////////////////////////////
		////	When clicked ,animate the body to the id					 ////
		/////////////////////////////////////////////////////////////////////////
		$('a[href*=#]:not([href=#])').on('click', function (event) {
			event.preventDefault();
			var element = $(this.hash);
			$('html,body').animate({ scrollTop: element.offset().top },2000);
		});

		
		/////////////////////////////////////////////////////////////////////////
		////	code for the count down timer								 ////
		/////////////////////////////////////////////////////////////////////////
		$('#time').countdowntimer({
			dateAndTime : "2016/12/25 00:00:00",
			size : "lg",
			timeUp : event_start,
			regexpMatchFormat: "([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})",
			regexpReplaceWith: "$1 : $2 : $3 : $4",
		});

		function event_start() {
			$('#timer_header').hide();
			$('#time').hide();
		}
		
		/////////////////////////////////////////////////////////////////////////
		////	Perform actions when the web design button is clicked		 ////
		/////////////////////////////////////////////////////////////////////////
		$('#ev_webdesign').click(function (e) {
			$('#basic-modal-content').modal();
			$('#web_design').css("display","block");
			$('#toggle_talk').css("display","none");
			$('#it_quiz').css("display","none");
			return false;
		});

		
		/////////////////////////////////////////////////////////////////////////
		////	Perform actions when the toggletalk button is clicked		 ////
		/////////////////////////////////////////////////////////////////////////
		$('#ev_toggletalk').click(function (e) {
			$('#basic-modal-content').modal();
			$('#web_design').css("display","none");
			$('#toggle_talk').css("display","block");
			$('#it_quiz').css("display","none");
			return false;
		});

		
		/////////////////////////////////////////////////////////////////////////
		////	Perform actions when the it quiz button is clicked		 ////
		/////////////////////////////////////////////////////////////////////////
		$('#ev_itquiz').click(function (e) {
			$('#basic-modal-content').modal();
			$('#web_design').css("display","none");
			$('#toggle_talk').css("display","none");
			$('#it_quiz').css("display","block");
			return false;
		});

		/////////////////////////////////////////////////////////////////////////
		////	Perform actions on submit and print the form				 ////
		/////////////////////////////////////////////////////////////////////////
		$("#submit_form").live("click", function () {
			$('#qr_code').qrcode({
				"render": "image",
				"size": 100,
				"color": "#3a3",
				"text": "http://larsjung.de/qrcode"
			});

			var divContents = $("#print").html();
			var printWindow = window.open('', '', 'height8400,width=800');
			printWindow.document.write('<html><head><title>JOSHIANA 2K16</title>');
			printWindow.document.write('</head><body>');
			printWindow.document.write(divContents);
			printWindow.document.write('</body></html>');
			printWindow.document.close();
			printWindow.print();
		});
		
		/////////////////////////////////////////////////////////////////////////
		////	Functions for playing audio 								 ////
		/////////////////////////////////////////////////////////////////////////
		function play_audio_on_start() {
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', './music/01.mp3');
			audioElement.setAttribute('autoplay', 'autoplay');
			audioElement.setAttribute('loop', 'true');
			
			$.get();

			/////////////////////////////////////////////////////////////////////////
			////	play the song on load		 								 ////
			/////////////////////////////////////////////////////////////////////////
			audioElement.addEventListener("load", function() {
				audioElement.play();
			}, true);
			
			
			/////////////////////////////////////////////////////////////////////////
			////	play the song on load on play button click					 ////
			/////////////////////////////////////////////////////////////////////////
			$('#start_audio').click(function() {
				audioElement.play();
				$('#start_audio').css('display','none');
				$('#stop_audio').css('display','block');
			});

			/////////////////////////////////////////////////////////////////////////
			////	pause the song on load on pause button click				 ////
			/////////////////////////////////////////////////////////////////////////
			$('#stop_audio').click(function() {
				audioElement.pause();
				$('#start_audio').css('display','block');
				$('#stop_audio').css('display','none');
			});
		}
});
