<?php 
//.......indexed arrays.............
$classes =['classone','classtwo','classthree'];
$fruits =['oranges', 'banana'];
echo $classes[1] .'<br>';//print on the screen the value in index position 1
$classes[]='classfour';// Add new item into the array(Method1)
$classes[]= array('classEight');//Add new item into the array(Method2)
$classes[2]= 'classfive'; // overwrite the content of index position 2 with classfive instead of classthree
print_r($classes).'<br>';// print on the screen all the content of the array in a readable format
$items = array_merge($classes, $fruits); // merge the content of  two arrays $classes and $fruits
print_r($items).'<br>';// print on the screen the content of the matched arrays
echo count($items).'<br>';//print on the screen the no of items in the matched array
//......................
//.........Associative Array.............
$cars =['Toyota'=>'white','Benz'=>'Black', 'subaru'=>'gray'];
$motorbikes =['honda'=>'red', 'boxer'=>'black'];
echo $cars['Toyota'].'<br>'; //print the value of index position Toyota(keyword Toyota)
$cars['jeep']= 'yellow';//Add new item into the array(Method1)
$cars['Toyota']= 'blue';//overwrite the content of index position Toyots with blue instead of white
$cars[]=array('isuzu'=>'green');//Add new item into the array(Method2)
$vehicles = array_merge($cars,$motorbikes);// merge the content of  two arrays $classes and $fruits
print_r($cars).'<br>';// print on the screen all the content of the array in a readable format
print_r($vehicles);//print on the screen the content of the matched arrays
echo count($vehicles);//print on the screen the no of items in the matched array
//......................
?>
