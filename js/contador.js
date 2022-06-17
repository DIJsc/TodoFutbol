var contador = new Date("Nov 21, 2022 07:00:00").getTime();
var funcion = setInterval(function() {
    var now = new Date().getTime();
    var timeleft = countDownDate - now;
        
    // Calculating the days, hours, minutes and seconds left
    var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
    if (timeleft > 0) {
    // Result is output to the specific element
    document.getElementById("days").innerHTML = days 
    document.getElementById("hours").innerHTML = hours 
    document.getElementById("mins").innerHTML = minutes
    document.getElementById("seconds").innerHTML = seconds
   } 
    }, 1000);





