// Set the date we're counting down to
var countDownDate = new Date("2021/10/30 00:00:00").getTime();

//var today = new Date();
//today.setHours(today.getHours()+1);
//alert(today);

// Update the count down every 1 second
var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("jams").innerHTML = hours;
    document.getElementById("mens").innerHTML = minutes;
    document.getElementById("dayss").innerHTML = days;
    document.getElementById("dets").innerHTML = seconds;


}, 1000);

AOS.init();

var aud = document.getElementById("myAudio");
aud.play(); // this will do the trick :)