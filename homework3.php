<form action="" method="post">
    <input type="radio" id="white" name="color" value="white">
    <label for="white">White</label><br>
    <input type="radio" id="black" name="color" value="black">
    <label for="black">Black</label><br>
    <input type="radio" id="red" name="color" value="red">
    <label for="red">Red</label><br>
    <input type="radio" id="blue" name="color" value="blue">
    <label for="blue">Blue</label><br>
    <input type="radio" id="green" name="color" value="green">
    <label for="green">Green</label><br>
    <input type="radio" id="yellow" name="color" value="yellow">
    <label for="yellow">Yellow</label><br>

    <button>Submit</button>
</form>

<?php
//task 1
function string_reverse($my_string)
{
    $string_length=strlen($my_string);
    for ($i=($string_length-1);$i>=0;$i--)
    {
        echo $my_string[$i];
    }
}


string_reverse("random string");
//task 2
function fact($num)
{
    $num_prod=1;
    while($num>0)
    {
        $num_prod*=$num;
        $num--;
    }
    return $num_prod;
}
echo '<br>'.fact(0).'<br>';
//task 3
if (isset($_POST['color'])) {
echo "<br>My favorite color is {$_POST['color']}";
}else{
    echo "";
}


//task 4
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="image" accept=".jpg, .png, .jpeg">
    <button>Submit</button>
</form>

<?php
    if (isset($_FILES['image'])) {
        $img = $_FILES['image'];
        $folder="images".DIRECTORY_SEPARATOR.$img['name'];
        if ($img['size']>1048576) {
            echo "Image bigger than 1MB. Please select a smaller image";
        }else if($img['size']==0){
            echo "Image is either too big or invalid.";
        }
        else {
            move_uploaded_file($img['tmp_name'], $folder);
        }
}
?>
