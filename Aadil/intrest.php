<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Interest Calculator</title>
    <style type="text/css">
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  height: 100vh;
  background: linear-gradient(#01e26e, #72ffb4);
}
.container {
  background-color: #ffffff;
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
  width: 80vw;
  max-width: 600px;
  min-width: 350px;
  padding: 60px 30px;
  border-radius: 10px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
}
label {
  display: block;
  font-size: 22px;
  margin-bottom: 10px;
  font-weight: 500;
}
input {
  margin-bottom: 20px;
  border: none;
  font-size: 20px;
  border-bottom: 2px solid #585858;
  color: #585858;
  padding: 2px 15px;
}
input:focus {
  outline: none;
  border-bottom: 2.4px solid #01e26e;
}
.input-wrapper {
  display: flex;
  justify-content: space-between;
  gap: 20px;
}
.input-wrapper input {
  width: 100%;
}
.time-wrapper input {
  width: 60%;
}
select {
  width: 35%;
  border: 1px solid #585858;
  font-size: 20px;
  margin-left: 3%;
  padding: 8px 0;
  border-radius: 5px;
}
button {
  display: block;
  background-color: #01e26e;
  border: none;
  color: #ffffff;
  margin: 20px auto 0 auto;
  padding: 15px 40px;
  font-size: 20px;
  border-radius: 5px;
}
#result {
  background-color: #c6ffe2;
  margin-top: 30px;
  color: #585858;
  text-align: center;
  font-size: 18px;
  padding: 20px;
  border-radius: 5px;
}
#result div {
  margin-bottom: 10px;
}
#result span {
  color: #000000;
  font-weight: 500;
}</style>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  	<form>
    <div class="container">
      <div class="input-wrapper">
        <div class="wrapper">
          <label for="principal">Principal(₹):</label>
          <input type="text	" id="principal"  name="s1" />
        </div>
        <div class="wrapper">
          <label for="rate">Rate:</label>
          <input type="text" id="rate"  name="s2" />
        </div>
      </div>
      <label for="time" >Time:</label>
      <div class="time-wrapper">
        <input type="number" id="time"  name="s3" />
        <select name="duration" id="duration">
          <option value="year">Year</option>
        </select>
      </div>
      <button id="calculate-btn" name="cla">Calculate</button>
      <?php
    	$int;

    	if(isset($_GET['cla']))
    	{
    		$p=$_GET['s1'];
    		$r=$_GET['s2'];
    		$n=$_GET['s3'];

    		$int=$p*$r*$n/100;

    		



    	}
    ?>
    <input type="text" id="Result" value="<?php echo "$int" ?>">
    </div>
    </form>
    
  </body>
</html>