<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$date = $_REQUEST['date'];
$time = $_REQUEST['time'];
$massage = $_REQUEST['massage'];
// jhghg
if ( empty($name) || empty($email) || empty($date) || empty($time) ||empty($massage)
)
{
    echo"pleas fill all fields";
}
else
{
    mail("abhishek.suvaidyam@gmail.com", "anike", $massage , "from:$name < $email" );

    echo "<script type='text/javascript'>alart('your msg sent sussfuly');
    window.history.log()
    </script>
}
?>
