<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>

    
   
  </head>
  <div class="container">
  <div class="form">
    <form>
    <br></br>
    <p>
    <a href="{{ route('login') }}" class="btn">Login</a>
        <p class="message">Not yet registered? <a href="{{ route('register') }}">Create an account</a></p>
    </form>
    </div>
   


  <body onload="initClock()">

    <!--digital clock start-->
   
        
        
    <div class="datetime">
      <div class="date">
        <span id="dayname">Day</span>,
        <span id="month">Month</span>
        <span id="daynum">00</span>,
        <span id="year">Year</span>
      </div>
      <div class="time">
        <span id="hour">00</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">AM</span>
      </div>
    </div>
    <!--digital clock end-->

    <script type="text/javascript">
    function updateClock(){
      var now = new Date();
      var dname = now.getDay(),
          mo = now.getMonth(),
          dnum = now.getDate(),
          yr = now.getFullYear(),
          hou = now.getHours(),
          min = now.getMinutes(),
          sec = now.getSeconds(),
          pe = "AM";
          
          if(hou >= 12){
            pe = "PM";
          }
          if(hou == 0){
            hou = 12;
          }
          if(hou > 12){
            hou = hou - 12;
          }

          Number.prototype.pad = function(digits){
            for(var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
          }

          var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
          var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
          var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
          var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
          for(var i = 0; i < ids.length; i++)
          document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock(){
      updateClock();
      window.setInterval("updateClock()", 1);
    }
    </script>
     
  </body>
</html>
                           



<style>

*{
  margin: 0;
  padding: 0;
}

body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #11698e;
}

.datetime{
  color: #fff;
  background: #10101E;
  font-family: "Segoe UI", sans-serif;
  width: 340px;
  padding: 15px 10px;
  border: 3px solid #2E94E3;
  border-radius: 5px;
  -webkit-box-reflect: below 1px linear-gradient(transparent, rgba(255, 255, 255, 0.1));
  transition: 0.5s;
  transition-property: background, box-shadow;
}

.datetime:hover{
  background: #2E94E3;
  box-shadow: 0 0 30px #2E94E3;
}

.date{
  font-size: 20px;
  font-weight: 600;
  text-align: center;
  letter-spacing: 3px;
}

.time{
  font-size: 60px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.time span:not(:last-child){
  position: relative;
  margin: 0 6px;
  font-weight: 600;
  text-align: center;
  letter-spacing: 3px;
}

.time span:last-child{
  background: #2E94E3;
  font-size: 30px;
  font-weight: 600;
  text-transform: uppercase;
  margin-top: 10px;
  padding: 0 5px;
  border-radius: 3px;
}
                           
.form{
    font-family: "Roboto", sans-serif;
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    opacity: 99%;
    max-width: 260px;
    margin: 200px auto 100px;
    padding: 10px 45px 30px 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
}
.form p{
    font-size: 15px;
    padding: 1px;
    text-align: center;
}
.form input{
    outline: 0;
    border-radius: 10px;
    background: #F2F2F2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
}
.form input:hover{
    background-color: #D3F8F9;
    transition: all 1s ease 0s;
}
.form input:focus{
    background-color: #D3F8F9;
    transition: all 1s ease 0s;
}
.btn{
    font-family: "Roboto", sans-serif;
    font-size: 18px;
    font-weight: bold;
    background: #1E90FF;
    width: 300px;
    padding:15px;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: box-shadow, transform;
    transition-property: box-shadow, transform;
}
.btn:hover, .btn:focus, .btn:active{
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
.form .message{
    margin: 15px 0 0;
    color: #B3B3B3;
    font-size: 12px;
}
.form .message a{
    color: #06C5CF;
    text-decoration: none;
}              
                         
.container {
  position: relative;
}

</style>