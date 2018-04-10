<html>
<head>
	<title>Digital Clock</title>
</head>


<style>
.hng {
    position: absolute;
    font-family: Handlee;
    font-style: normal;
    font-weight: normal;
    line-height: normal;
    font-size: 64px;
    text-align: center;

    top: 10%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);

    color: #000000;
}


.hourtxt{
position: absolute;
left: 35%;
top: 200px;

font-family: Handlee;
font-style: normal;
font-weight: normal;
line-height: normal;
font-size: 96px;

color: #000000; 
background: url(stage1white.jpg);
padding-left: 10px;


}

.mintxt{
position: absolute;
left: 55%;
top: 200px;

font-family: Handlee;
font-style: normal;
font-weight: normal;
line-height: normal;
font-size: 96px;

color: #000000;
background: url(stage1white.jpg);
padding-left: 10px;
}

.semicol{
position: absolute;
left: 49%;
top: 200px;

font-family: Handlee;
font-style: normal;
font-weight: normal;
line-height: normal;
font-size: 96px;
color: #000000;

}

.name{
position: absolute;
left: 90%;
top: 95%;

font-family: Handlee;
font-style: normal;
font-weight: normal;
line-height: normal;
font-size: 13px;

color: #FFFFFF;

}

body{
    height: 100%;
  background: url(stage1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.hello{
    position: absolute;
left: 35%;
top: 70%;

font-family: Handlee;
font-style: normal;
font-weight: normal;
line-height: normal;
font-size: 53px;

color: #FFFFFF;
}
</style>

<body onload="mytime()">
<h1 class="hng"> HNG INTERNSHIP 4.0 </h1>


<p id="hourTxt" class="hourtxt">  <?php
echo date("h");
?> </p>
<p class="semicol"> : </p>

<p id="minText" class="mintxt">  <?php
echo date("m");
?> </p>
<p class = "name"> OWOLABI TOBILOBA </p>

<p class = "hello"> <?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("l");
?> </p>


<script>
function mytime(){
    time = new Date();
    hours = time.getHours();
    minutes = time.getMinutes();
    seconds = time.getSeconds();

    if (minutes < 10) {
        minutes = "0" + minutes;
    }

    document.getElementById("hourTxt").innerHTML= hours;
    document.getElementById("minText").innerHTML= minutes;
    timer = setTimeout(function(){mytime()}, 500);



}
</script>
</body>
</html>