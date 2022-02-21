<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function () {
    $("#genderbtn").click(function (e) {
      //  var validate = Validate();
        //$("#message").html(validate);
      

            $.ajax({
                type: "GET",
                url: "https://api.genderize.io/?name="+ $('#nameselect').val()+"" ,
               
                success: function (result, status, xhr) {
                    var table = $("<table><tr><th>Weather Description</th></tr>");
  
                    table.append("<tr><td>Name:</td><td>" + result["name"] + "</td></tr>");
                    table.append("<tr><td>Gender:</td><td>" + result["gender"] + "</td></tr>");
                    table.append("<tr><td>Probablity:</td><td>" + result["probability"] + "</td></tr>");
               
  
                    $("#gender").html(table);
                },
                error: function (xhr, status, error) {
                    alert("Result: " + status + " " + error + " " + xhr.status + " " + xhr.statusText)
                }
            });








              $.ajax({
                type: "GET",
                url: "https://api.agify.io?name="+ $('#nameselect').val()+"" ,
               
                success: function (result, status, xhr) {
                    var table = $("<table><tr><th>Age</th></tr>");

                    $.each(result,function(key,value){
                    	  table.append("<tr><td>name:</td><td>" + key + "=: "+value+" </td></tr>");
                    	});
  
                  
                   
  
                    $("#age").html(table);
                   // const d =result.length;
                   
                    var count = Object.keys(result).length;
                     alert(count);
                },
                error: function (xhr, status, error) {
                    alert("Result: " + status + " " + error + " " + xhr.status + " " + xhr.statusText)
                }
            });
        
    });
  
   
    $("#agebtn").click(function (e) {


        $("#list").empty();
      //  var validate = Validate();
        //$("#message").html(validate);
 $.ajax({
    url: "https://api.coindesk.com/v1/bpi/currentprice.json",
    success: function(bitcoinPrice){
    //	alert(bitcoinPrice);
    	$("#qwe").html(bitcoinPrice);
    	//const myJSON = '{"name":"John", "age":30, "car":null}';
const myObj = JSON.parse(bitcoinPrice);
x = Object.keys(myObj).length;;
//alert(x);

$.each( myObj, function( key, value ) {
	if(value=='[object Object]'){
 $("#list").append("<li>"+ key+"  </li>");
 //alert(key);
 if(key=='bpi'){




 	var myObj3 = JSON.parse(bitcoinPrice).bpi;

 
 $.each( myObj3, function( key, value ) {

 $("#list").append("<ol>"+ key+""+value+"</ol> ");

var myObj4 = JSON.parse(bitcoinPrice).bpi.USD;

 
 $.each( myObj4, function( key, value ) {

 $("#list").append("<ul>"+ key+"-:"+value+"</ul> ");


 
    });

 	});








 }
  if(key=='time'){
 	

 	var myObj3 = JSON.parse(bitcoinPrice).time;
 	$.each( myObj3, function( key, value ) {
 $("#list").append("<ol>"+ key+"&nbsp "+value+" </ol>");
 	});
 		
 }
 	


 
 	// alert("bpi");
 	// $.each( myObj.bpi, function( key, value ) {
 	// 	 $("#list").append("<li>"+ key+" -: " + value +" </li>");

//}); 		
 }else{$("#list").append("<li>"+ key+" "+value+"</li>");}
});
    	//$("#qwe").html(JSON.parse(bitcoinPrice).bpi.USD.rate);
       
         //console.log(JSON.parse(bitcoinPrice).bpi.EUR.rate);
        }
    });

 




           
            });


    $("#jsn").click(function(e){
// alert("jason btn");




// var jar={"a":{"name":"akash","gender":"male","probability":0.99,"count":2051,"cars":"Ford"}
// 		};
var jar={"name":"akash","gender":"male","probability":0.99,"count":2051,"cars":"Ford"};

// var len=Object.keys(jar).length;
// var calen=jar["a"]["cars"].length;
// alert(calen);


var obj = {
  "flammable": "inflammable",
  "duh": "no duh"
};
$.each( jar, function( key, value ) {
 $("#list").append("<li>"+ key+" -: " + value +" </li>");
});

// for(var i=0;i<calen;i++)
// {
// 	alert(jar["a"]["cars"]);
// 	$("#list").append("<li>"+ jar["a"]["cars"][i]+"</li>");
// } 
// alert(len);
 });
        


  
   
  
  
});



// function abc(argument) {
// 	// body...
// //alert(argument);
// var arg=argument;
// alert(arg);

//  $.ajax({
//     url: "https://api.coindesk.com/v1/bpi/currentprice.json",
//     success: function(bitcoinPrice){
//     //	alert(bitcoinPrice);
//     	//$("#qwe").html(bitcoinPrice);
//     	//const myJSON = '{"name":"John", "age":30, "car":null}';
// const myObj1 = JSON.parse(bitcoinPrice).arg.;
// x = Object.keys(myObj1).length;
// //alert(x);

// $.each( myObj1, function( key, value ) {
	
//  $("#list").append("<li>"+ key+"  </li>");
//  //alert(key);
// // abc(key);

 
//  	// alert("bpi");
//  	// $.each( myObj.bpi, function( key, value ) {
//  	// 	 $("#list").append("<li>"+ key+" -: " + value +" </li>");

// //}); 		
 
// });
//     	//$("#qwe").html(JSON.parse(bitcoinPrice).bpi.USD.rate);
       
//          //console.log(JSON.parse(bitcoinPrice).bpi.EUR.rate);
//         }
//     });

// }
</script>
<body>



<input type="text" id='nameselect'/>
  
<button id="genderbtn">Gender</button>
<div class="textAlignCenter">
  
</div>
<div id="gender"></div><div id="age"></div>






  
<button id="agebtn">AGE</button>
<div class="textAlignCenter">
	<div id="qwe"></div><div id="age"></div>

  
</div>



<div>
	<button id="jsn">Json</button>

	<ul id="list">
		
	</ul>


</div>





</body>
</html>