<?php

session_start();
 
 require_once('../model/order.repository.php');
 
 $orderByUser = findOrderByUser();
 
 require_once('../view/pay.order.view.php');

 ?>