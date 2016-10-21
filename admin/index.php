<?php
include  dirname(__FILE__).'/../controller/adminController.php';

$conroller = new adminController;
echo $conroller->model->test();exit;
