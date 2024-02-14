<?php
$cookie_name = "user";
$cookie_value = "Syed Murtaza Hussain";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
echo "<pre>";
print_r(filter_list());
echo "</pre>";
?>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>

<?php
    $str = '<script>alert("bye bye")</script>';
    $newstr = filter_var($str,FILTER_SANITIZE_SPECIAL_CHARS);
    echo $newstr;

    $number = 12;
    if(filter_var($number,FILTER_VALIDATE_INT)) {
      echo "<p>" . $number . " is an integer</p>";
    }else {
      echo "<p>" . $number . " is not an integer</p>";

    }

    $numbers = [98,54,7,19,50,20,90,25,42];

    //METHOD 01
    // function squrer ($input) {
    //   return $input*$input;
    // }
    // $sq = array_map('squrer',$numbers);
      
    //METHOD 02
    $sq = array_map(function ($input) {
      return $input*$input;
    },$numbers);

    echo "<pre>";
    print_r($sq);
    echo "</pre>";

    $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

    echo "<pre>";
    var_dump($age);
    echo "</pre>";


    $myJSON = json_encode($age);

    echo "<pre>";
    var_dump($myJSON);
    echo "</pre>";
    
    $myData = json_decode($myJSON);
    
    echo "<pre>";
    var_dump($myData);
    echo "</pre>";

    $myfile = fopen("breakfast.json", "r") or die("Unable to open file!");
    $bfmJSON = fread($myfile,filesize("breakfast.json"));

    
    $bfm = json_decode($bfmJSON);

    echo "<pre>";
    print_r($bfm);
    echo "</pre>";   

    
    
    ?>



</body>
</html>