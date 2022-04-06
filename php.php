<?php

// Get raw json/any type of data from client side
$array = json_decode( file_get_contents('php://input'), true ) ;