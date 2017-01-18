<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="style3.css" />
<link rel="stylesheet" href="animation.css" />
<link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:500,500italic,700,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no">
</head>

<body>
<?php
$scenes = array(
'scene001',
'scene009',
'scene010',
'scene011',
'scene012'
);

	foreach($scenes as $scene){
		include $scene.'/index.html';
	}


 
 ?>
<!-- 
<section class="container fadeToBlack" id="scene9">
	
</section> -->

<section id="curtain" class="container" style="background:black;"> </section>
<div id="blackOverlay"></div>

<script src="jquery-2.2.3.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.js"></script> 


<script>
//youTube API Stuff
var player;
function onYouTubeIframeAPIReady() {
	// create the global player from the specific iframe (#video)
	player = new YT.Player('video', {
		events: {
			// call this function when player is ready to use
			'onReady': console.log('event fired')
		}	
	});
	player2 = new YT.Player('video2', {
		events: {
			'onReady': console.log('Video 2 Initialized')
		}	
	});		
	player3 = new YT.Player('video3', {
		events: {
			'onReady': console.log('Video 3 Initialized')
		}	
	});	
	player4 = new YT.Player('video4', {
		events: {
			'onReady': console.log('Video 4 Initialized')
		}	
	});			
}
//more youTube API Stuff
function onPlayerReady(event) {
	// bind events
	var playButton = document.getElementById("play-button");
	playButton.addEventListener("click", function() {
		player.playVideo();
	});
	
	var pauseButton = document.getElementById("pause-button");
	pauseButton.addEventListener("click", function() {
		player.pauseVideo();
	});

}	

(function($){
$(window).on('beforeunload', function() {
    $(window).scrollTop(0); 
});

var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;
		
if(isMobile){
	$('.animation-element').addClass('in-view');
	$('.stack').removeClass('stack');
	$('#scene5, #scene7, #scene8, #scene9, #scene10, #scene11').css({"height":"auto"});
	$('.display_none').removeClass('display_none');
	$('.positionAbsolutely').removeClass('positionAbsolutely');
	$('#poweroftourism_button').css({"display":"inline"});
}else{
 // $('.animation-element').css({"opacity":0});
	var $windowHeight = $(window).height();
	var $windowWidth = $(window).width();	
	var $sectionHeight = $('#scene2').outerHeight();
	var $offset = $sectionHeight/2;
	var aspectRatio = $windowWidth/$windowHeight;

	//scene durations below
	var $s2duration = $windowHeight;
	var $s3duration = $windowHeight;
	var $s4duration = $windowHeight*2;//twice the pixel height of the window height
	var $s5duration = $windowHeight;
	var $s6duration = $windowHeight;
	var $s7duration = ($windowHeight*4);
	var $s8duration = ($windowHeight*9);
	var $s9duration = ($windowHeight);
	var $s10duration = ($windowHeight*4);
	var $s11duration = ($windowHeight*2);
	var $s12duration = $windowHeight;
	
var controller = new ScrollMagic.Controller();
//=====================================================================//	
//============================= SCENE 2	===============================//
//=====================================================================//	
var scene2 = new ScrollMagic.Scene({
		triggerElement: '#scene2',
		offset:$offset,
		duration:$s2duration
	}).setPin('#scene2').setClassToggle(".animation-element.scene2","in-view").addTo(controller);
//=====================================================================//	
//============================= SCENE 3	===============================//
//=====================================================================//		
var scene3 = new ScrollMagic.Scene({
		triggerElement: '#scene3',
		offset:$offset,
		duration:$s3duration
	})
	.setPin('#scene3').addTo(controller);
	
scene3.on("enter", function(e){
	$('#poweroftourism_button').fadeIn('slow');

});		
//=====================================================================//	
//============================= SCENE 4	===============================//
//=====================================================================//	
var $s4img1 = $('#poweroftourism2').find('img'),
		$s4img2 = $('#poweroftourism3').find('img');

var scene4images = new TimelineMax();
scene4images
.fromTo($s4img1,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut})
.to($s4img1,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:.5})
.fromTo($s4img2,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut},'-=.9');
//Scene 4: The Power of Tourism	
var scene4 = new ScrollMagic.Scene({
		triggerElement: '#scene4',
		offset:$offset,
		duration:$s4duration
	}).setPin('#scene4').setClassToggle("#poweroftourism1","in-view").setTween(scene4images).addTo(controller);	
	
//=====================================================================//	
//============================= SCENE 5 ===============================//
//=====================================================================//	
var $s5img1 = $('#scene5').find('.images6up').find('img:first-child'),
		$s5img2 = $('#scene5').find('.images6up').find('img:nth-child(2)'),
		$s5img3 = $('#scene5').find('.images6up').find('img:nth-child(3)'),
		$s5img4 = $('#scene5').find('.images6up').find('img:nth-child(4)'),
		$s5img5 = $('#scene5').find('.images6up').find('img:nth-child(5)'),
		$s5img6 = $('#scene5').find('.images6up').find('img:nth-child(6)');		
var scene5images = new TimelineMax();
scene5images
.fromTo($s5img1,1,{yPercent:80, autoAlpha:0,scale:0.2},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut})
.fromTo($s5img2,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut},'-=0.9')
.fromTo($s5img3,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut},'-=0.9')
.fromTo($s5img4,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut},'-=0.9')
.fromTo($s5img5,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut},'-=0.9')
.fromTo($s5img6,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut},'-=0.9');	

var scene5 = new ScrollMagic.Scene({
		triggerElement: '#scene5',
		offset:$offset,
		duration:$s5duration
	}).setPin('#scene5').setClassToggle(".animation-element.scene5","in-view").setTween(scene5images).addTo(controller);	

//=====================================================================//	
//============================= SCENE 6	===============================//
//=====================================================================//	
var scene6 = new ScrollMagic.Scene({
		triggerElement: '#scene6',
		offset:$offset,
		duration:$s6duration
	}).setPin('#scene6').setClassToggle(".animation-element.scene6","in-view").addTo(controller);
	
//=====================================================================//	
//============================= SCENE 7	===============================//
//=====================================================================//	
var $s7obj1 = $('#scene7').find('.item1'),
		$s7obj2 = $('#scene7').find('.item2'),
		$s7obj3 = $('#scene7').find('.item3');
		
var scene7_objects = new TimelineMax();
scene7_objects
.fromTo($s7obj1,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut})
.to($s7obj1,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:4})
.to($s7obj1,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:1,
	onComplete:function(){
			$('.item1aa').removeClass('in-view');
	}

})
.fromTo($s7obj2,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut},'+=0.9')
.to($s7obj2,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:4})
.fromTo($s7obj3,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut},'+=0.9')
.to($s7obj3,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:4});
var scene7 = new ScrollMagic.Scene({
		triggerElement: '#scene7',
		offset:$offset,
		duration:$s7duration
	}).setPin('#scene7').setClassToggle(".animation-element.scene7","in-view").setTween(scene7_objects).addTo(controller);	
	
scene7.on("enter", function(e){

	$('.item1aa').addClass('in-view');

});	
	
	


//=====================================================================//	
//============================= SCENE 8	MARKETING (this one's really long FYI) ===============================//
//=====================================================================//
var $s8img1 = $('#scene8').find('.item1'),
		$s8img2 = $('#scene8').find('.item2'),
		$s8img3 = $('#scene8').find('.item3'),
		$s8img3a = $('#scene8').find('.item3a'),
		$s8img3c = $('#scene8').find('.item3c'),
		$s8img4a = $('#scene8').find('.item4a'),
		$s8img4 = $('#scene8').find('.item4'),
		$s8img5 = $('#scene8').find('.item5'),
		$s8img6 = $('#scene8').find('.item6');
		
var scene8_objects = new TimelineMax();
scene8_objects
.fromTo($s8img1,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut,
	onComplete:function(){
		$('.wavebg').fadeIn();
	}
})
.to($s8img1,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:6})
.fromTo($s8img2,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut, 
		onComplete:function(){
			player.playVideo();		
		}
},'+=0.9')
.to($s8img2,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:6,
		onComplete:function(){
					//$('#scene8').find('.display_none').removeClass('display_none');
					console.log('line 273, this is how you add a function after an animation completes');
					player.stopVideo();
		}
})
.fromTo($s8img3,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,display:'block',scale:1,ease:Power4.easeOut},'+=0.9')
.to($s8img3,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:6,
		onUpdate:function(){
			$('#scene8').find('.item3aaa').removeClass('in-view');		
		}

})
.fromTo($s8img3c,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,display:'block',scale:1,ease:Power4.easeOut,
		onComplete:function(){
			player4.playVideo();		
		}
},'+=0.9')
.to($s8img3c,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:6,
		onComplete:function(){
					player4.stopVideo();
		}
})
.fromTo($s8img3a,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,display:'block',scale:1,ease:Power4.easeOut,
		onComplete:function(){
			$('#scene8').find('.item3aaa').addClass('in-view');		
		}
},'+=0.9')
.to($s8img3a,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:6,
		onUpdate:function(){
			$('#scene8').find('.item4aaa').removeClass('in-view');
			$('#scene8').find('.item3aaa').removeClass('in-view');	
		}
})
.fromTo($s8img4a,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,display:'block',scale:1,ease:Power4.easeOut,
		onComplete:function(){
			$('#scene8').find('.item4aaa').addClass('in-view');		
		}
},'+=0.9')
.to($s8img4a,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:6,
		onComplete:function(){
			$('#scene8').find('.item4aaa').removeClass('in-view');		
		}


})
.fromTo($s8img4,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,display:'block',scale:1,ease:Power4.easeOut,
		onComplete:function(){
			player2.playVideo();		
		}

},'+=0.9')
.to($s8img4,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:6,
		onComplete:function(){
					player2.stopVideo();
		}
})
.fromTo($s8img5,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,display:'block',scale:1,ease:Power4.easeOut,
		onComplete:function(){
		$('.wavebg').fadeOut();
	}
},'+=0.9')
.to($s8img5,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:6})
.fromTo($s8img6,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,display:'block',scale:1,ease:Power4.easeOut,
		onComplete:function(){
			player3.playVideo();		
		}
},'+=0.9')
.to($s8img6,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:6,
		onComplete:function(){
				player3.stopVideo();
		}
});
	
var scene8 = new ScrollMagic.Scene({
		triggerElement: '#scene8',
		offset:$offset,
		duration:$s8duration
	}).setPin('#scene8').setClassToggle(".animation-element.scene8","in-view").setTween(scene8_objects).addTo(controller);		
		
	
//=====================================================================//	
//============================= SCENE 9	MANAGEMENT ===============================//
//=====================================================================//
var $s9img1 = $('#scene9').find('.item1'),
		$s9img2 = $('#scene9').find('.item2');
		
var scene9_objects = new TimelineMax();
scene9_objects
.fromTo($s9img1,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut},'+=0.9')
.to($s9img1,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:4});
	
var scene9 = new ScrollMagic.Scene({
		triggerElement: '#scene9',
		offset:$offset,
		duration:$s9duration
	}).setPin('#scene9').setClassToggle(".animation-element","in-view").setTween(scene9_objects).addTo(controller);		
	
	
scene9.on("enter", function(e){
	//$('#bg_video').play();
	console.log('hey we are working');
	//player.playVideo();
});	


//=====================================================================//	
//============================= SCENE 10	LOOKING AHEAD ===============================//
//=====================================================================//	

var $s10img1 = $('#scene10').find('.item1'),
		$s10img2 = $('#scene10').find('.item2'),
		$s10img3 = $('#scene10').find('.item3'),
		$s10img4 = $('#scene10').find('.item4');
		
var scene10_objects = new TimelineMax();
scene10_objects
.fromTo($s10img1,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut},'+=0.9')
.to($s10img1,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:4})
.fromTo($s10img2,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut},'+=0.9')
.to($s10img2,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:4})
.fromTo($s10img3,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut},'+=0.9')
.to($s10img3,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:4})
.fromTo($s10img4,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut},'+=0.9')
.to($s10img4,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:4});	

var scene10 = new ScrollMagic.Scene({
		triggerElement: '#scene10',
				offset:$offset,
		duration:$s10duration
	}).setPin('#scene10').setClassToggle(".animation-element","in-view").setTween(scene10_objects).addTo(controller);		
	


//=====================================================================//	
//============================= SCENE 11	LEADERSHIP ===============================//
//=====================================================================//	

var $s11img1 = $('#scene11').find('.item1'),
		$s11img2 = $('#scene11').find('.item2');
		
var scene11_objects = new TimelineMax();
scene11_objects
.fromTo($s11img1,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut},'+=0.9')
.to($s11img1,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:4})
.fromTo($s11img2,1,{yPercent:20, autoAlpha:0,scale:0.8},{yPercent:0,autoAlpha:1,scale:1,ease:Power4.easeOut},'+=0.9')
.to($s11img2,1,{yPercent:20, autoAlpha:0,scale:0.8,delay:4});		

var scene11 = new ScrollMagic.Scene({
		triggerElement: '#scene11',
				offset:$offset,
		duration:$s11duration
	}).setPin('#scene11').setClassToggle(".animation-element.scene11","in-view").setTween(scene11_objects).addTo(controller);		
	
	
	
//==================================================================================//	
//============================= SCENE 12 MORE INFORMATION ===============================//
//===================================================================================//


var scene12 = new ScrollMagic.Scene({
		triggerElement: '#scene12',
				offset:$offset,
		duration:$s12duration
	}).setPin('#scene12').setClassToggle(".animation-element.scene12","in-view").addTo(controller);
	
scene12.on("end", function(e){

	
	$('#scene12').fadeOut();

	$('html').addClass('noimage');

});		
	
	//$("html").niceScroll();
	
	setTimeout(function(){
			//$('#scrolltoview').fadeIn('slow');
			$('#scrolltoview').addClass('bouncescroll');
	}, 2000);	
	
}//end of if isMobile ELSE statement
})(jQuery);//end of jQuery function

//youTube API Stuff
var tag = document.createElement('script');
tag.src = "//www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag,firstScriptTag);

</script>



</body>
</html>
