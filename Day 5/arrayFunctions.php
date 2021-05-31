<?php
echo "<h1>Array functions<h1>";
echo "<h3>1. count():- count the number of elements in an array</h3>";
$arr = array("Probability","Profit","Loss","Age","Discount");
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "Total number of elements :".count($arr);
echo "<br><h3>2. array_count_values() :- Returns an associative array with value as keys,and their frequency is the value of associative array. It will  "
. "display frequency of distinct value</h3>";
$arr2 = ["C","C++","c","Java","PHP","JSP","PHP","C","Android","PHP"];
echo "<pre>";
print_r($arr2);
echo "</pre>";
$new_arr2 = array_count_values($arr2);
echo "Frequency of distinct characters:";
foreach ($new_arr2 as $key => $value) {
    echo "<br>$key - $value";
}

echo "<br><h3>3. array_sum() : calculate the sum of all values within an array </h3>";
$arr3 = array(1,2,3,4,5,6,"Python","10.01");
echo "<pre>";
print_r($arr3);
echo "</pre>";
echo "Sum of all elements of an array :".array_sum($arr3);
echo "<br><h3>4. array_product():- Calculate the product of elements of an array</h3>";
$arr4 = array(10,20,5,4,"10.0");
echo "<pre>";
print_r($arr4);
echo "</pre>";
echo "<br> Product of elements of an array:".array_product($arr4);
echo "<br><h3>5. array_reverse() :- It reurns new array.usedto reverse array</h3>";
$arr5 = array(10,20,"Python","Android","30",10.09);
echo "<pre>";
print_r($arr5);
echo "</pre>";
$new_arr5 = array_reverse($arr5);
echo "<br>Reversed array :";
echo "<pre>";
print_r($new_arr5);
echo "</pre>";
echo "<br><h3>6. in_array():- To see if a ertain value is exists in array or not . It return 1 if match found</h3>";
$temp = in_array("Python", $arr5);
echo "<br>$temp";

echo "<br><h3>7. arry_rand():- It will select one or more keys from an array at random.</h3>";
$index = array_rand($arr5);
echo $arr5[$index];
echo "<br><h5>   Select multiple keys at random :</h5>";
$index = array_rand($arr5,4);
foreach ($index as $key => $value) {
   echo "<br>$key - idex is $value value is $arr5[$value]";   
}
echo "<br><h3>8.array_unique() :-Remove all duplicate values from array</h3>";
$arr6 = array(20,40,30,10,20,30,10,50,60);
echo "<pre>";
print_r($arr6);
echo "</pre>";
echo "<pre>";
print_r(array_unique($arr6));
echo "</pre>";

echo "<br><h3>9. array_merge() :- Merge multiple array</h3>";
$new_array = array_merge($arr5,$arr6);
echo "<pre>";
print_r($new_array);
echo "</pre>";

echo "<br><h3>10.array_search():- To search an element in an array. If the element fond inside the array , It will"
. "return the key/index of that value.If not present it will display nothing</h3> ";
$check = array_search('Python',$arr5);
echo "<br>Python is present at index: $check";

echo "<br><h3>11. sort():- sort an array in ascending order</h3>";
$arr7 = array(30,50,10,20,30,40.5,80,50,60);
echo "<pre>";
print_r($arr7);
echo "</pre>";
sort($arr7);
echo "<br>Sorted array in ascending order :";
echo "<pre>";
print_r($arr7);
echo "</pre>";

echo "<br><h3>12. rsort():- sort elements in descending order </h3>";
rsort($arr7);
echo "Array in descending ordder :";
echo "<pre>";
print_r($arr7);
echo "</pre>";

echo "<br><h3>13. asort():- sort elements in ascending order according to values in Associative as well as numeric arrays"
. "index is preserved</h3>";
$arr8 = array(
    "A" => 10,
    "C" => 5,
    "B" => 30,
    "G" => 20,
    "D" => 12
);
echo "<pre>";
print_r($arr8);
echo "</pre>";
asort($arr8);
echo "<pre>";
print_r($arr8);
echo "</pre>";

echo "<br><h3>14. ksort():-Sort array (associative/Numeric) in ascending order according to keys</h3> ";
ksort($arr8);
echo "<pre>";
print_r($arr8);
echo "</pre>";

echo "<br><h3>15. krsort():- sort array (associative/numeric) in descending order according to keys</h3>";
echo krsort($arr8);
echo "<pre>";
print_r($arr8);
echo "</pre>";

echo "<br><h3>16. shuffle():- shuffle the array in random order</h3>";
$arr9 = array("Orange","Bluekberry","carot","Kiwi","Apple","Banana");
shuffle($arr9);
echo "<pre>";
print_r($arr9);
echo "</pre>";

echo "<br><h3>17. array_key_exists():- To find if the particular key is exist in an array or not . It returns true/false</h3>";
echo array_key_exists("B",$arr8);

echo "<br><h3>18. array_change_key_case():- Used to change all keys of a given array to lower case or upper case."
. "array_change_key_case(array_name,case_name). case is either CASE_UPPER or CASE_LOWER. Default case is CASE_LOWER."
        . "It returns nerw array</h3>";
$arr10 = array(
    "Python" => 12,
    "Android" => 34,
    "php" => 20,
    "Jave" => 10,
    "C++" => 15,
    "Microprocessor" => 5
);
echo "<pre>";
print_r($arr10);
echo "</pre>";
$new_arr10 = array_change_key_case($arr10,CASE_UPPER);
echo "<pre>";
print_r($new_arr10);
echo "</pre>";

echo "<br><h3>19. array_combine():- Used to create an array by using one array for keys and another for values."
. "array_combine(array_keys,array_values). No. of elements must be equal in both the arrays</h3>";
$arr_keys = array("Mango","Banana","Blueberry","Kiwi");
echo "<pre>";
print_r($arr_keys);
echo "</pre>";
$arr_values = array("Green","Yellow","Blue","Brown");
echo "<pre>";
print_r($arr_values);
echo "</pre>";
$new_arr = array_combine($arr_keys, $arr_values);
echo "<pre>";
print_r($new_arr);
echo "</pre>";

echo "<br><h3>20. end():- return the value of last element of an array</h3>";
echo end($arr_values);

echo "<br><h3>21. compact():- Crreate an array from variables and thier values</h3>";
$fname = "Dhruvi";
$lname = "Patel";
$age = 20;
$subject = "PHP";
$arr = compact("fname","lname","age","subject");
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<br><h3>22. array_flip():- Flip all keys with their associated values. Keys become values and values become keys</h3>";
$flip_arrays = array_flip($arr);
echo "<pre>";
print_r($flip_arrays);
echo "</pre>";

echo "<br><h3>23. range():- Create a new array using a specified range.We can use letter or number ranges</h3>";
$arr12 = range(11, 20);
foreach ($arr12 as $key => $value) {
    echo "<br>$key - $value";
}
$arr13 = range("A","D");
foreach ($arr13 as$key => $value) {
    echo "<br>$key - $value";
}
$year = range(2000,2020);
echo "<br><br>Select Year<select>";
foreach ($year as $value) {
    echo "<option>$value</option>";
}
echo "</select>";

echo "<br><h3>24. explode():- Used to break a string into an array. It returns an array</h3>";
$str = "I am learning PHP from Akash Technolabs";
echo $str;
$a1 = explode(" ",$str);
echo "<pre>";
print_r($a1);
echo "</pre>";

echo "<br><h3>25. implode():- Usedd to convert an array into string. It return a string</h3>";
$a2 = array("My","name","is","XYZ","and","age","is",5,"years");
echo "<pre>";
print_r($a2);
echo "</pre>";
$str2 = implode("-",$a2);
echo "$str2";

echo "<br><h3>26. array_diff():- It will return a new array which consists of values which are not present in array1. arraye1-array2</h3>";
$a1 = array("C","C++","Java","Android","PHP","Perl","Rubi","C#");
echo "<pre>";
print_r($a1);
echo "</pre>";
$a2 = array("Java","PHP","C","JSP",".net");
echo "<pre>";
print_r($a2);
echo "</pre>";
$new_a = array_diff($a2,$a1);
echo "<pre>";
print_r($new_a);
echo "</pre>";

echo "<br><h3>27. array_intersect():- returns array which consists common valuse from array1 & array2</h3>";
$intersect = array_intersect($a1,$a2);
echo "<pre>";
print_r($intersect);
echo "</pre>";

echo "<br><h3>28. array_values():- Convert associative array into numerical array. It returns only values from targetting array</h3>";
$a3 = array(
    "fname" => "John",
    "lname" => "Doe",
    "age" => 20
);
echo "<pre>";
print_r($a3);
echo "</pre>";
$values = array_values($a3);
echo "<pre>";
print_r($values);
echo "</pre>";

echo "<br><h3>29. array_push():-Inserts one or more elements to the end of the numerical array</h3>";
$a4 = array(20,30,"Python","C");
echo "<pre>";
print_r($a4);
echo "</pre>";
array_push($a4,"Android",".net",50.50);
echo "<pre>";
print_r($a4);
echo "</pre>";

echo "<br><h3>30. array_push():- Deletes the last element from an array</h3>";
array_pop($a4);
echo "<pre>";
print_r($a4);
echo "</pre>";

        
        
        
        
        
        
       
        
        
        
        
        
        
        
        
        