<!DOCTYPE html>
<html>
<head>
    <style>
        #input{
            width: 500px;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        Enter Data: <input type="text" name="input" id="input">
        <input type="submit" value="Submit" name="submit">
    </form>
    <br>

    <?php
        if(isset($_POST['submit'])){
            $input = $_POST['input'];
            $inputarr = explode(",", $input);
            $output = array();

            for($i=0;$i<count($inputarr);$i++)
            {
                $dateandnum = explode(":", $inputarr[$i]);
                $date = date("F j, Y", strtotime($dateandnum[0]));
                $num = $dateandnum[1];
                $output[] = $date." = ".$num;
            }
            for($j = 0;$j < count($output);$j++)
            {
                echo $output[$j]."<br>";
            }
        }
    ?>
</body>
</html>