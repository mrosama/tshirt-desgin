<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Generate T-Shirt</title>

    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet" type="text/css" />    <style>
 .imgresize{
 	width:70px;
 	height: 70px;

 }
 .imgresize:hover {
 	cursor: pointer;
 }


.brandimg {

}

li{
   font-family: 'Droid Arabic Kufi', serif;
    list-style-type:none;
}


.myfont {

	font-family: 'Droid Arabic Kufi', serif;
	font-size: 21px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	line-height: 30px;
 
}


.myfont2 {

	font-family: 'Droid Arabic Kufi', serif;
	font-size: 16px;
	font-style: normal;
	font-variant: normal;
	 
 
}








    </style>
  </head>
  <body>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header   navbar-right">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="img/1488578942_image_edit.png">
      </a>
    </div>
   <p class="navbar-text navbar-right">Generate T-Shirt   &nbsp; &nbsp; &nbsp;  </p>
  </div>
</nav>


<div class="container-fluid">
  <div class="row">

  <div class="col-md-1">
 <table class="table table-striped table-bordered text-center" >
 	<tr class=>
 		<td><img src="tishirt/1.png" alt="" class="imgresize" ></td></tr>
 		<tr><td><img src="tishirt/2.png" alt="" class="imgresize"></td></tr>
 		<tr><td><img src="tishirt/3.png" alt="" class="imgresize"></td></tr>
 		<tr><td><img src="tishirt/4.png" alt="" class="imgresize"></td></tr>
 	 
 		<tr><td><img src="tishirt/5.png" alt="" class="imgresize"></td></tr>
 		<tr><td><img src="tishirt/6.png" alt="" class="imgresize"></td></tr>
 		<tr><td><img src="tishirt/7.png" alt="" class="imgresize"></td></tr>
 		<tr><td><img src="tishirt/8.png" alt="" class="imgresize"></td></tr>
 	 
 </table>
  </div>


    <div class="col-md-8">

   <div id="imageplace" class="ui-widget-header">
   <!--	<img src="tishirt/1.png" alt="" id="selectedImg">-->
  <canvas id="myCanvas" width="500px" height="500px;" ></canvas>

   </div>
    
    <div class="text-center">
    	 <button class="btn btn-danger myfont2" id="myclear" style="width:200px"> مسح -جديد  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>
    	<a  class="btn btn-primary myfont2" id="download" style="width:200px"> تحميل الصورة <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>
    
    	<hr>



    </div>

    </div>
    <div class="col-md-2">
    
    <table class="table table-striped table-bordered" >
    	<tr><td class="text-center"><img src="brand/1.png" title="img" alt="" class="brandimg"></td></tr>
    	<tr><td class="text-center"><img src="brand/3.png" title="img" alt="" class="brandimg"></td></tr>
    	<tr><td class="text-center"><img src="brand/7.png" title="img" alt="" class="brandimg"></td></tr>
        <tr><td class="text-center"><img src="brand/9.png" title="img" alt="" class="brandimg"></td></tr>
        <tr><td class="text-center"><img src="brand/11.png" title="img" alt="" class="brandimg"></td></tr>
        <tr><td class="text-center"><img src="brand/15.png" title="img" alt="" class="brandimg"></td></tr>

    </table>
     <hr>
     <table class="table table-striped table-bordered" >
     	<tr style="background-color:#e8e8e8">
     		<td class="text-center myfont">أكتب نص هنا</td>
     	</tr>

         <tr style="background-color:#e8e8e8">
     		<td class="text-center"><input id="txtfiled" type="text" style="direction:rtl"></td>
     	</tr>
       
         <tr style="background-color:#e8e8e8">
     		<td class="text-center"><input id="txtcolor" type="color" style="direction:rtl"></td>
     	</tr>
     </table> 
          
<ul id="drag" class="myfont">
    <li class="new-item" id="mstxt" title="txt"></li>
</ul>


 <span class="info1 myfont2" style="font-size:10px;color:red">حرك النص المكتوب إلي المكان المطلوب</span> <span class="info1 glyphicon glyphicon-bell" aria-hidden="true"></span>

    </div>
  </div>


 <img id="canvasImg" />	 

 

</div>





 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


    <script>

     $(document).ready(function($) {
    	
   /*  $(".imgresize").click(function(){

      //alert(  $(this).attr('src') );
    var new_src= $(this).attr('src');
    $("#selectedImg").attr('src', new_src);

     });*/
//*****************************
//
//
 

$(".info1").hide();
 

$("#txtfiled").keyup(function(event) {
 
	 $(".new-item").html($(this).val());
	 $(".info1").show();
});


  $('#txtcolor').change(function() {
      var current = $('#txtcolor').val();
       $("#mstxt").css("color",current);
   });





//
//
//
//
//
//*************************************************************************
 
 var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');
 
context.globalCompositeOperation='source-over';
 


 
 	 function img_update() {
  var canvas = document.getElementById('myCanvas');
    //create a new canvas
    var newCanvas = document.createElement('canvas');
    var context2 = newCanvas.getContext('2d');

    //set dimensions
    newCanvas.id     = 'imageTemp';
    newCanvas.width = canvas.width;
    newCanvas.height = canvas.height;

    //apply the old canvas to the new one
    context2.drawImage(canvas, 0, 0);

    //return the new canvas
    return newCanvas;
 
  }



 /////////////////

var imageObj = new Image();
      imageObj.onload = function() {
        context.drawImage(imageObj, 0,0);
      };
      imageObj.src ="tishirt/1.png";
  // img_update ();

$(".brandimg").draggable({
   revert:"valid",
  cursor: "crosshair",
  helper: "clone",
   
});


$(".new-item").draggable({
   revert:"valid",
  cursor: "crosshair",
  helper: "clone",
   
});


/////////////////////

 /*$("#myCanvas").droppable({
 	  accept: '.brandimg',

      drop: function( event, ui ) {
        $(ui.draggable).clone().appendTo($(this));  
           //   var $item = ui.draggable.clone();
           //   // $(this).addClass('has-drop').html($item);
      }
    });*/

//*************************************
/*$("#myCanvas").droppable({
    accept: "li",
    drop: function(event,ui){
        var context = $(this)[0].getContext("2d");
        context.font = "16px helvetica";
 context.fillText($(ui.draggable).clone().text(),ui.position.left - event.target.offsetLeft,ui.position.top - event.target.offsetTop);
  }
});*/
 

$("#myCanvas").droppable({
    accept: ".brandimg,li",
    drop: function(event,ui){
 var context = $(this)[0].getContext("2d");
 var s = $(ui.draggable).clone();
  //var item = $(ui.draggable).clone().attr('src');
 var item = ui.draggable.attr('src');
var typeitem = ui.draggable.attr('title');
 console.info(typeitem);

 //imageObj.src= $item;
 
      var newPosX = ui.offset.left - $(this).offset().left;
        var newPosY = ui.offset.top - $(this).offset().top;

if(typeitem=="img"){
 addimg(item,newPosX,newPosY);
}
else {
 addtxt($(ui.draggable).clone().text(),newPosX,newPosY);
}


 }
 

    });


//***********************************

$(".imgresize").click(function(){

      var imageObj = new Image();
      imageObj.onload = function() {
        context.drawImage(imageObj, 0,0);
      };
      var new_src= $(this).attr('src');
      imageObj.src = new_src;
    //  img_update ();
});



/*
$("#download").click(function(event) {
	 
      var dataURL = img_update().toDataURL();
 alert(dataURL);
    $("#myval").val(dataURL);
      document.getElementById('canvasImg').src = dataURL;
});*/




$("#myclear").click(function(event) {
 

context.clearRect(0, 0, canvas.width, canvas.height);

    var imageObj = new Image();
      imageObj.onload = function() {
        context.drawImage(imageObj, 0,0);
      };
      imageObj.src ="tishirt/1.png";


});



//end

    });


function addimg(item ,x,y){
 
 var canvas = document.getElementById('myCanvas');

      var context = canvas.getContext('2d');
      context.globalCompositeOperation='source-over';

	 var imageObj = new Image();
      imageObj.onload = function() {
   
        context.drawImage(imageObj,x,y);
      };
      
      imageObj.src = item;

}
////
function addtxt(item ,x,y){
 
 var canvas = document.getElementById('myCanvas');

      var context = canvas.getContext('2d');
      context.globalCompositeOperation='source-over';

	  context.font = "20px Droid Arabic Kufi";
	  var current = $('#txtcolor').val();
	  context.fillStyle = current;
 context.fillText(item,x,y+5);
}








 
function downloadCanvas(link, canvasId, filename) {
   link.href = document.getElementById(canvasId).toDataURL();
    link.download = filename;




}

document.getElementById('download').addEventListener('click', function() {
    downloadCanvas(this, 'myCanvas', 'test.png');
}, false);
    </script>
   


  </body>
</html>