
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width =device-width initial-scale:1">
  <link rel="stylesheet" type="text/css" href="try.css"/>
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
  body{
     background-image: url(14.jpg);
          background-size: cover;
  }
  .panel-body input{
    height: 300px;
    width: 1050px;
  }
  
</style>
  <title>ahome</title>
</head>
<body>
<?php 
echo "Hello"."  " .$_SESSION['name'];
?>
<div class="container">
<div class="page-header">
  <h1 class="text-center">Hostel Portal of NIT Raipur</h1>
</div>
<nav class="navbar navbar-inverse" role="navigation">
<div class="navbar-header">
<a class="navbar-brand active"" href="#">HOME</a>
</div>
<div>
<ul class="nav navbar-nav">
<li ><a href="#">Student detail</a></li>
<li ><a href="seecomplaint.php">See Complain</a></li>
<li><a href="#">See feedback</a></li>
<li ><a href="#">Student notices</a></li>
<li ><a href="#">Make announcement</a></li>
</ul>
</div>
</nav>

<div class="panel panel-primary">
<div class="panel-heading">
Hostels@ NIT Raipur
</div>

<div class="panel-body">
The institute has 5 boys' hostel within the campus and presently there are two girls' hostels in the campus and proposal for one more of 200 seater is also in process. The institute also manages one additional girls' hostel adjacent to campus. A 60-seat girls' hostel is under construction adjacent to existing girls hostel within the campus. A plan for construction of a new hostel block for boys is under process. Each hostel is self-contained with amenities such as common room and a dining hall with mess. All the hostel rooms are adequately furnished. Each hostel has a capacity to house about 100 inmate students. Administrative head of each hostel, the warden, is a senior faculty member. Additionally, one caretaker/matron for each hostel exists to manage the day-to-day affairs of the hostel. Each hostel has different students working committees, mess committee, magazine committee, games committee, cleanliness committee etc. Each committee is responsible for specific aspects of hostel affairs. Separate hostel administrative section exists in the institute to manage the hostel matters. Two hostel blocks of 100 seat each, for the boys will be available for the first semester students and will be allotted on the basis of the merit. Lists for hostel admission will be declared after receiving the hostel admission forms by the hostel administration.

</div>
</div>
<button class="btn btn-primary btn-block">Submit</button>
</div>
</body>
</html>