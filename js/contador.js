var contador = new Date("Nov 21, 2022 07:00:00").getTime();
var funcion = setInterval(function() {
    var hoy = new Date().getTime();
    var tiemporestante = contador - hoy;
        
   
    var days = Math.floor(tiemporestante / (1000 * 60 * 60 * 24));
    var hours = Math.floor((tiemporestante % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((tiemporestante % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((tiemporestante % (1000 * 60)) / 1000);
    if (timeleft > 0) {
  
    document.getElementById("dias").innerHTML = days 
    document.getElementById("horas").innerHTML = hours 
    document.getElementById("min").innerHTML = minutes
    document.getElementById("segundos").innerHTML = seconds
   } 
    }, 1000);





