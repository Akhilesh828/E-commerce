<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #ca44ff;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: rgb(255, 79, 246);
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
h1{
  font-size: 25px;
}
img{
  border: 5px solid rgb(255, 57, 239);
}
.card:hover{
  box-shadow: 0 0 20px 10px rgb(255, 57, 239);
}
</style>
</head>
<body>

<div class="about-section">
  <h1 style="font-size:25px;">About Us Page</h1>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/Niraj.jpg"  alt="Jane" style="width:83% ;">
      <div class="container">
        <h2>Niraj Pal</h2>
        <p class="title">Testing Specialist</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/my1.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Akhilesh Prajapati</h2>
        <p class="title">Web Architect</p>
        <p></p>
        <p></p>
        <p><a href="contactus.php"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/pradeep.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Pradeep Gupta</h2>
        <p class="title">Frontend Developer</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/yash photo.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Yash Raghuwanshi</h2>
        <p class="title">Database Develper</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>


</div>

</body>
</html>
