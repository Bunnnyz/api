<?php


?>

<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function () {
 // alert("Hii");
  
//   $.ajax({
//     url: "https://api.coindesk.com/v1/bpi/currentprice.json",
//     success: function(bitcoinPrice){
//     //	alert(bitcoinPrice);
//     	$("#qwe").html(bitcoinPrice);
//     	//const myJSON = '{"name":"John", "age":30, "car":null}';
// const myObj = JSON.parse(bitcoinPrice);
// x = Object.keys(myObj).length;
// //alert(x);
//     }

// });

$.ajax({  
            type: "POST",  
            url: "http://115.124.105.137/PCISNGDRSService/ePCardweb.asmx/getFirstCSNOList",  
            data: "{'villCode':'2515001100'}",  
            contentType: "application/json",  
            datatype: "json",  
            success: function (r) {
                
                alert(r+"successs");
            },
            error: function (r) {
                alert(r +"error bunny");
            },
            failure: function (r) {
                alert(r+"failure");
            }
        });  





});
</script>
<body>





<hr>

<div>
    <h1>new web service items</h1>
</div>
<hr>






</body>
</html>
