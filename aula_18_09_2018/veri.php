<?php
    echo $_POST['usr'];
    echo "<br />".addslashes($_POST['usr']);
    echo "<br />".strtolower($_POST['usr']);
    echo "<br />".strtoupper($_POST['usr']);
    echo "<br />".strlen($_POST['usr']);
    echo "<br />".substr($_POST['usr'],4,8);
?>