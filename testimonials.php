
    <h5 class="text-uppercase" style="background:#FF6600; padding:10px; border-left:4px solid #000000; margin-bottom:20px;">Testimonials</h5>
                    <style>
*{	/*some reset code, nothing else*/
	box-sizing:border-box;
	-moz-box-sizing:border-box;
	margin:0;
	padding:0;
}
#testimonials1{
	 background-color: lightgrey;
    height: 200px;
   
    padding: 15px 0 15px 20px;
    position: relative;
   
}
#testimonials1 .testimonial{
	position:absolute;
	left:0px;
	top:0px;
	width:175px;
	z-index:1;
}
#testimonials1 h2{
	color:#f25911;
	font-size:22px;
	font-style:normal;
	line-height:22px;
	margin-bottom:10px;
}
#test_container{
	position:relative;
	overflow:hidden;
}
#testimonials1 .testimonial_text{
	font-size:14px;
	font-family:verdana;
	font-style:italic;
	width:670px;
}
#testimonials1 .testimonial_name{
	font-size:14px;
	width:700px;
		margin:10px auto 3px;
	font-style:normal;
	font-family:arial;
}
#testimonials1 .testimonial_designation{
	font-size: 12px;
	line-height: 14px;
	font-family:verdana;
}
#t_pagers{
	position:absolute;
	left:40%;
	bottom:10px;
	z-index:2;
}
#t_pagers .pager{
	display:inline-block;
	text-decoration:none;
	width:10px;
	min-height:10px;
	margin-right:5px;
	background:#ccc;
	border-radius:50%;
	cursor:pointer;
}
#t_pagers .pager.active{
	background:#f25911;
}
</style>
<script src="assets/js/jquery.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	var w,mHeight,tests=$("#testimonials1");
	w=tests.outerWidth();
	mHeight=0;
	tests.find(".testimonial").each(function(index){
		$("#t_pagers").find(".pager:eq(0)").addClass("active");	//make the first pager active initially
		if(index==0)
			$(this).addClass("active");	//make the first slide active initially
		if($(this).height()>mHeight)	//just finding the max height of the slides
			mHeight=$(this).height();
		var l=index*w;				//find the left position of each slide
		$(this).css("left",l);			//set the left position
		tests.find("#test_container").height(mHeight);	//make the height of the slider equal to the max height of the slides
	});
	$(".pager").on("click",function(e){	//clicking action for pagination
		e.preventDefault();
		next=$(this).index(".pager");
		clearInterval(t_int);	//clicking stops the autoplay we will define later
		moveIt(next);
	});
	var t_int=setInterval(function(){	//for autoplay
		var i=$(".testimonial.active").index(".testimonial");
		if(i==$(".testimonial").length-1)
			next=0;
		else
			next=i+1;
		moveIt(next);
	},3000);
});
function moveIt(next){	//the main sliding function
	var c=parseInt($(".testimonial.active").removeClass("active").css("left"));	//current position
	var n=parseInt($(".testimonial").eq(next).addClass("active").css("left"));	//new position
	$(".testimonial").each(function(){	//shift each slide
		if(n>c)
			$(this).animate({'left':'-='+(n-c)+'px'});
		else
			$(this).animate({'left':'+='+Math.abs(n-c)+'px'});
	});
	$(".pager.active").removeClass("active");	//very basic
	$("#t_pagers").find(".pager").eq(next).addClass("active");	//very basic
}
</script>

<div id="testimonials1">
		
		<div id="test_container" >
			<div class="testimonial">
				<div class="testimonial_text"><p align="justify">"The ease at which Job Sketch Services  sources people for our variant requirement is amazing, Job Sketch Services  associates understand the requirements in and out and deliver the best results well with in the TAT. I appreciate the everlasting support from Job Sketch Services ."</p></div>
				<h3 class="testimonial_name">-Narendra Vellori</h3>
			
			</div>
			<div class="testimonial">
				<div class="testimonial_text"><p align="justify">"The support we had received from Job Sketch Services  in enabling us to scale from zero to 100 in matter of two months is incredible, Job Sketch Services  was able to provide with entire HR functions and expert consulting, we are thank full that we have outsourced our entire HR solutions to Job Sketch Services ."</p></div>
				<h3 class="testimonial_name">-- Uday Shankar Akella</h3>
			
			</div>
			
		</div>
		<div id="t_pagers"><a class="pager"></a><a class="pager"></a></div>
</div>
              