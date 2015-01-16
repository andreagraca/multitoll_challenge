<!DOCTYPE html>
<html>
    <head>
        <script>
            var value_seconds=0;
            var time_execute;

            function read_seconds(){
                value_seconds = document.getElementById("value_seconds").value;
                if(value_seconds<86313600 & value_seconds!=0){
                    time_execute = setInterval("clock()", 1000);
                } else {
                    alert("Invalid number!");
                }
            }

            function clock(){
                value_seconds --;
                if(value_seconds>=0){
                    var seconds = value_seconds;
                    var days = seconds / (60*60*24);
                    seconds = seconds % (60*60*24);
                    var hours=seconds / (60*60);
                    seconds=seconds % (60*60);
                    var minutes=seconds / 60;
                    seconds=seconds % 60;
                    document.getElementById('timer').innerHTML =   parseInt(days) + ' days ' +  parseInt(hours) + ' hours ' +  parseInt(minutes) + ' minutes ' +  parseInt(seconds) + ' segundos';
	           } else {
                    clearInterval(time_execute);
               }
            }
	   </script>
    </head>
    <body>
        <input id="value_seconds" type="text" value="" onBlur="read_seconds()">
        <p>&nbsp;</p>
    	<div id="timer"> 0 days 0 hours 0 minutes 0 seconds</div>
    </body>
</html>