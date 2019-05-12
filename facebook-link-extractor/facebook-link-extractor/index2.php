<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
 <head>
  <title>Facebook like status update Link Extractor</title>
  <meta name="generator" content="editplus">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <script src="js/jquery-1.7.min.js"></script>
 </head>
 <style>
   *{
		font: 12px "lucida grande",tahoma,verdana,arial,sans-serif;
		margin: 0px;
		padding: 0px;
   }

   .container{
	 border: 1px solid #B4BBCD;
	 width: 500px;
	 min-height: 100px;	
	 position: relative;
	 margin-left: 30%;
	 margin-top: 5%;
   }
  .link-input {
	border-bottom: 1px dashed #B4BBCD;
  }
  .link-input textarea{
	height: 60px;
	margin: 1px;
	width: 98%;
	vertical-align: top;
	margin-top: 5px;
	border: none;
    font: 12px "lucida grande",tahoma,verdana,arial,sans-serif;
	overflow: auto;
	padding-left: 5px;
	/* hack for crome */
	outline:none;
  }
  .button-holder{
	background: #F2F2F2;
	height: auto;
	height: 33px;
	font-weight: bold;
  }
  .button-holder #fb-button{
	background: #5F78AB;
	border: 1px solid #29447E;
	color: #FFF;
	font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
	font-size: 12px;
	font-weight: bold;
	margin-top: 5px;
	margin-right: 4px;
	float: right;
	padding: 2px 5px;
	box-shadow: 0 1px 1px #FFFFFF inset;
	cursor: pointer;
  }	
  .button-holder #fb-button:hover{
	background: #4A618E;
  }
  .extract{
	display: none;
	padding: 10px;
	height:180px;
  }
  .float-left{
	float: left;
	clear: right;
  }
  .extract-thumb {
	width: 30%;
  }
  .extract-info {
	width: 60%;
	margin-left: 5px;
  }
  .extract-info span{
	width: 98%;
	display : block;
	text-align : left;
	margin : 5px 0px;
  }
  .extract-info #title{
	font-weight: bold;
  }
  .extract-info #url{
	color : #797979;
	font-size: 11px;
  }
  .nav{
	text-align: left;
	width: 180px;
  }
  .nav img{
	cursor: pointer;
	float:left;
  }
  .nav #navount{
	color : #797979;
	font-size: 11px;
	width:60%;
	float:right;
  }
  .loading{
	background:url("images/loading.gif") no-repeat;
	width: 16px;
	height: 11px;
	float: right;
	margin: 5px;
    margin-left: 95%;
    position: absolute;
	display: inline;
    width: 16px;
	visibility: hidden;
  }
  .delete{
	background:url("images/delete.png") no-repeat scroll;
	display: inline-block;
	width: 15px;
	height: 15px;
	cursor : pointer;
	margin-left: 95%;
  }
  .delete:hover{
	background:url("images/delete.png") no-repeat scroll 0px -30px;
  }

 </style>
 <body>
  <div class="container">
   <div class="loading"></div>
   <div class="">
		   <div class="link-input">
			<textarea type="text" name="link" id="link"></textarea>	
		   </div>   
   </div>
   <div style="display: none;" class="extract">
   			 <div class=""><a href="#" class="delete float-right"></a></div>
			 <div class="float-left extract-thumb">
				
			 </div>
			 <div class="float-left extract-info">
				<span id="title"></span>
				<span id="url"></span>
				<span id="desc"></span>
				<div class="nav">
					<img src="images/prev.gif" id="prev">
					<img src="images/next.gif" id="next">
					<span id="navount"></span>
				</div>
			 </div>
   </div>
   <div class="button-holder">
		<input type="button" id="fb-button" value="Extract">
   </div>
  </div>
 </body>
</html>
<script>
$(document).ready(function(){
	 var imgArray;
	 var title;
	 var desc;
	 var index = 0;
	 $("#fb-button").click(function(){
		 var link = $("#link").val();
		 
		 if(/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test($("#link").val()))
		 {
			 imgArray = new Array();
			 index = 0;
			 title = "";
			 desc = "";
			 $(".loading").css("visibility","visible");
			 if(link.length){
				 // Encode url so we can have single line url instead of different parts
				 elink = encodeURIComponent(link);
				 $.ajax({
				   type: "POST",
				   url: "link_details.php",
				   data: "link="+elink,
				   success: function(responce){	
					if(responce != "0")
					{
					  var json = $.parseJSON(responce);
					  $.each(json, function(key, val) {
						//alert(val.src);
						
						if(val.src != null){
							imgArray.push(val.src);
							$("#trick").attr("src",val.src);
							//$(".array").append("<br>"+val.src);
						}
						
						//console.log(val);
						if(val.title != null)
							title = val.title;
						if(val.url != null)
							link = val.url;
						if(val.desc != null)
							desc = val.desc;
						
					  });
						//alert(title);
						if(imgArray.length > 0){
							// if images found then show nav icons
							$(".nav").show();
							// also hide image holder
							$(".extract-thumb").css("visibility","visible");

							if($(".extract-thumb").html() == "")
							   $(".extract-thumb").append('<img src="'+imgArray[0]+'" style="width: 100px;">');
							else
							   $(".extract-thumb").html('<img src="'+imgArray[0]+'" style="width: 100px;">');
						}else{
							// if images not found then hide nav icons
							$(".nav").hide();
							// also hide image holder
							$(".extract-thumb").css("visibility","hidden");
						}
						//console.log(title);
						$(".extract-info #title").html(title);
						$(".extract-info #url").html(link);
						$(".extract-info #desc").html(desc);
						showcount(index);
						$(".extract").slideDown("slow");
					 }else{
						alert("This url doesnt exists !");
					 }
					 $(".loading").css("visibility","hidden");
				   }	
				});

			 }else{
				alert("Please enter link");
			 }
		 }else{
			alert("Enter proper url, with http / https and www Ex: http://www.google.com");
	   }

	 });
	 
	 $("#next").click(function(){
		 if(index < imgArray.length){
			 index++;
			 $(".extract-thumb").find("img").attr("src",imgArray[index]);
			 showcount(index);
		 }
	 });
	 $("#prev").click(function(){
		 if(index > 0){
			 index--;
			 $(".extract-thumb").find("img").attr("src",imgArray[index]);
			 showcount(index);
		 }
	 });
	 $(".delete").click(function(){
		$(".extract").fadeOut("slow");
	 });
	 
	 showcount = function(index){
   	   index = index + 1;
	   if(index <= imgArray.length && index > 0)	
		$("#navount").html("Showing "+index+" of "+imgArray.length);
	 };

});
</script>