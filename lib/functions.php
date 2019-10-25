<?php

Function checkEmail($email) {
    $valEmail = filter_var($email,FILTER_VALIDATE_EMAIL);
    return $valEmail;
}