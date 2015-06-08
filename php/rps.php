<?php

session_start();

include("../template/class.TemplatePower.inc.php");

$tpl = new TemplatePower("../tpl/index.tpl");

$tpl->prepare();

$array = array("rock", "paper", "scissor");

$tpl->newBlock('FORMULIER');

if(isset($_POST['submit'])){
    $playerChoice = $_POST['submit'];

    if(!(isset($_SESSION['WINSCORE']))) {
        $_SESSION['WINSCORE'] = 0;
    }

    $computerchoice = ($array[rand(0, count($array)-1)]);


    $win = "U heeft gewonnen";
    $lose = "U heeft verloren";
    $tie = "U heeft gelijkgespeeld.";

    $tpl->newBlock('RESULT');

    if ($playerChoice == "rock"){
        switch ($computerchoice) {
            case "rock":
                $tpl->assign("eindresultaat", $tie);
                break;
            case "paper":
                $tpl->assign("eindresultaat", $lose);
                $_SESSION['WINSCORE']--;
                break;
            case "scissor":
                $tpl->assign("eindresultaat", $win);
                $_SESSION['WINSCORE']++;
                break;
        }}

    if($playerChoice == "paper"){
        switch ($computerchoice) {
            case "rock":
                $tpl->assign("eindresultaat", $win);
                $_SESSION['WINSCORE']++;
                break;
            case "paper":
                $tpl->assign("eindresultaat", $tie);
                break;
            case "scissor":
                $tpl->assign("eindresultaat", $lose);
                $_SESSION['WINSCORE']--;
                break;
        }}

    if($playerChoice == "scissor"){
        switch ($computerchoice) {
            case "rock":
                $tpl->assign("eindresultaat", $lose);
                $_SESSION['WINSCORE']--;
                break;
            case "paper":
                $tpl->assign("eindresultaat", $win);
                $_SESSION['WINSCORE']++;
                break;
            case "scissor":
                $tpl->assign("eindresultaat", $tie);
                break;


        }}
    $tpl->assign("WIN", $_SESSION['WINSCORE']);
}


if(!(isset($_SESSION['WINSCORE']))) {
    $_SESSION['WINSCORE'] = 0;
}
















$tpl->printToScreen();