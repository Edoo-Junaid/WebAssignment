<?php

function check_login()
{
    if (isset($_SESSION['userID'])) {
       return true;
    } else {
     return false;
    }
}
