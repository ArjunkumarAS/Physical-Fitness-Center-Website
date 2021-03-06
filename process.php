<?php

session_start();

?>


<html>
<head>
<title> Process Page </title>
<style>
a{
float:right;
}
</style>
</head>
<body bgcolor="#63738a">
<a href="logout.php"><font color="white">LOGOUT</font></a>
<center><h1>WELCOME &nbsp;&nbsp;&nbsp;&nbsp;<font color="white"><?php echo  $_SESSION['username']; ?>&nbsp;&nbsp;!!</font></h1></center>
<ul>
<li><h2>Your Email Id is: &nbsp;&nbsp;<font color="white"><?php echo  $_SESSION['email']; ?></font></h2></li>
<li><h2>Your  current Age is: &nbsp;&nbsp;<font color="white"><?php echo  $_SESSION['age']; ?></font></h2></li>
<li><h2>Your current Weight is: &nbsp;&nbsp;<font color="white"><?php echo  $_SESSION['weight']; ?></font></h2></li>
<li><h2>Your current Height is: &nbsp;&nbsp;<font color="white"><?php echo  $_SESSION['height']; ?></font></h2></li>
<li><h2>Your current BMI is is: &nbsp;&nbsp;<font color="white">
<?php
$finalbmi=$_SESSION['weight']/(($_SESSION['height']/100)*($_SESSION['height']/100)); 
echo  $finalbmi; ?></font></h2></li>
<li><h2>Your current Maintenance Calories is: &nbsp;&nbsp;<font color="white">
<?php
if($_SESSION['gender']=="male"){
$maintaincalorie=(88.362+(13.397*$_SESSION['weight'])+(4.799*$_SESSION['height'])-(5.677*$_SESSION['age']))*1.5;
}
if($_SESSION['gender']=="female")
{
$maintaincalorie=(447.593+(9.247*$_SESSION['weight'])+(3.098*$_SESSION['height'])-(4.330*$_SESSION['age']))*1.5;
}
echo  $maintaincalorie; ?></font></h2></li>
<li><h2>Your current condition according to BMI calculation is: &nbsp;&nbsp;
<font color="white">
<?php 
$finalbmi=$_SESSION['weight']/(($_SESSION['height']/100)*($_SESSION['height']/100));
if($finalbmi < 18.5) 
{
 echo "That you are Under Weight";
}
if($finalbmi > 18.5 && $finalbmi < 25)
{
 echo "That you are Healthy.";
}
if($finalbmi > 25) 
{
 echo "That you are Over Weight";
}

?>
</font></h2></li>
</ul>
<h1><font color="white">Your plans according to the BMI calculation:</font></h1> 
<ul>
<h2>
<?php
$finalbmi=$_SESSION['weight']/(($_SESSION['height']/100)*($_SESSION['height']/100));

if($finalbmi < 18.5 ) 
{
echo "<li>You don’t need to drastically change your diet. 
You can increase<br> calories by adding nut or seed toppings, cheese, and healthy side dishes. 
</li><br>";

echo "<li>Try almonds, sunflower seeds, fruit, or whole-grain, wheat toast.</li><br>";

echo "<li>Consider high-protein meats, which can 
help you to build muscle. Also, choose nutritious<br> carbohydrates, such as 
brown rice and other whole grains. </li><br>";

echo "<li>Enjoy snacks that contain plenty of protein and healthy 
carbohydrates.<br> Consider options like trail mix, protein bars or drinks, 
and peanut butter.</li><br>";

echo "<li>Consider eating smaller meals throughout the 
day to increase your calorie intake.</li><br>";

echo "<li>While too much aerobic exercise will burn calories and work 
against your weight goal,<br> strength training can help. This includes 
weightlifting or yoga. You gain weight by building muscle.</li><br>";

}


if($finalbmi > 18.5 && $finalbmi < 25)
{
 
echo "<li>Snack on seasonal fruits, keep whole fruits easily available 
for the family members to pick up.</li><br>";

echo "<li>Keep your fridge free of sugary aerated drinks and processed fruit juices.</li><br>";

echo "<li>Nuts and Seeds make a good healthy snack too.</li><br>";

echo "<li>Boil, Bake, Shallow fry, and roast instead of deep frying.</li><br>";

echo "<li>Meals are to eaten on the dining table not in front of the TV.</li><br>";

echo "<li>Exercise daily a minimum of 30-45 minutes.</li><br>";

echo "<li>Maintain your BMI contniously healthy i.e(18.6 to 24.9) 
  to lead a healthy and peaceful life.</li>";

}

if($finalbmi > 25)
{
echo "<li> Try red and black and brown rice instead of white rice. Use 
 grains <br> for breakfast porridges, they taste great.</li><br>";

echo "<li> Add a protein in every major meal. 
Proteins are essential for the body.</li><br>";

echo "<li> Ensure 3 servings of seasonal vegetables per head and 
2 of whole fruits per day. </li><br>";

echo "<li> Choose low fat milk, double toned. </li><br>";

echo "<li>Keep the trans fats away. 
Read the labels, if there is no label, find a better substitute.</li><br>";

echo "<li>Keep the intake of sugar to less than 10% of your total calories.
 Below 5% would be better. </li><br>";

echo "<li>Do not skip meals. Eat three balanced meals. Take a standard 
dinner plate,<br> fill ½ with vegetables, 1/3rd with cereal, 1/3rd with the protein, 
add 150 ml of milk/dahi/dessert.</li><br>";

echo "<li>Snack on seasonal fruits, keep whole fruits easily available 
for the family members to pick up.</li><br>";

echo "<li>Keep your fridge free of sugary aerated drinks and processed fruit juices.</li><br>";

echo "<li>Nuts and Seeds make a good healthy snack too.</li><br>";

echo "<li>Boil, Bake, Shallow fry, and roast instead of deep frying.</li><br>";

echo "<li>Meals are to eaten on the dining table not in front of the TV.</li><br>";

echo "<li>Exercise daily a minimum of 30-45 minutes.</li><br>";
}
?>
</h2>
</ul> 
<h1><font color="white">Your daily workouts:</font></h1> 
<img src="gym.jpg" height="700" width="500" alt="session"/>
</body>
</html>
