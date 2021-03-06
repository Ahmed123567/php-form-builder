<?php

namespace register;
require_once ('builder.php');

use builder\Form as parentForm;


class Register extends ParentForm{
    public static function Form($action='register.php'){
        return self::start(['method' => 'post' , 'action' => $action])
        ->addF(['type' => 'text','id'=>'username','name' => 'username', 'class' => 'form-control','placeholder' => 'User Name'])
        ->decore('<br>')
        ->addF(['type' => 'password' , 'name' => 'password' , 'class' => 'form-control', 'placeholder' => 'Password'])
        ->decore('<br>')
        ->addF(['type' => 'password' , 'name' => 'confirm-password' , 'class' => 'form-control', 'placeholder' => 'Confirm Password'])
        ->decore('<br>')
        ->addF(['type' => 'button', 'value'=>'register', 'class' => 'btn btn-primary'])
        ->endF()
        ->get();
    }
}