<?php
function call_name(){
print("Hello Muhammad Tummuheki");
}
function calc_age($currentYear,$Dob){
$Age=$currentYear-$Dob;
return$Age;
}
function HomeAddress(){
 print("Bulenga");
}
call_name();
print("!<br/> Thank you for coming back to\t");
HomeAddress();
print("<br> You are\t".calc_age(2024,2003)."\tyears old");
?>