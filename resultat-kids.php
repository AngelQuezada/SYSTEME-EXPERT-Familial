<?php
include "process.php";

session_start();


$ville=$_SESSION['ville'];
$idfemme=$_SESSION['nomf'];
$idfemme.="_";
$idfemme.=$_SESSION['prenomf'];
$id=$_SESSION['nom'];
$id.="_";
$id.=$_SESSION['prenom'];

$psy=$_SESSION['Psychologie'];
$psy.="($id).";

$cd=$_SESSION['CDI'];
$cdi=null; 
if($cd=="1") {

  $cdi="cdi($id).";
}


$comm=$_SESSION['commerce'];
$commerce=null;
if($comm=="1") {

  $commerce ="commerce($id).";
}

$blood="homme(";
$stype=$_SESSION['type-sang'];
$blood.=$stype;
$blood.=",$id).";


$adpt=$_SESSION['adoption'];
$adoption=null;
// if equl 1 insert this $adoption="adoption($id)";
if($adpt=="1") {

$adoption="adoption($id).";
}

$revenu="revenu(";
 
$revenu.=$_SESSION['revenue'];
$revenu.=",$id).";
$cr=$_SESSION['credit'];
$credit=null;
if($cr=="1") {

$credit="credit($id).";

}
// if this equal insert this $credit="credit($id).";



$psyf=$_SESSION['Psychologief'];
$psyf=strtolower($psyf);
$psyf.="($idfemme).";
$cdf=$_SESSION['CDIf'];
$cdif=null;
if($cdf=="1") {

  $cdif="cdi($idfemme).";
}
$commf=$_SESSION['commercef'];
$commercef=null;
if($commf=="1") {

  $commercef ="commerce($idfemme).";
}


$bloodf="femme(";
$stypef=$_SESSION['type-sangf'];
$bloodf.=$stypef;
$bloodf.=",$idfemme).";


$adptf=$_SESSION['adoptionf'];
$adoptionf=null;
// if equl 1 insert this $adoption="adoption($id)";
if($adptf=="1") {

$adoptionf="adoption($idfemme).";
}

$revenuef="revenu(";
 
$revenuef.=$_SESSION['revenuef'];
$revenuef.=",$idfemme).";
$crf=$_SESSION['creditf'];
$creditf=null;
if($crf=="1") {

$creditf="credit($id).";

}


save_data($psyf,$commercef,$bloodf,$adoptionf,$creditf,$revenuef);
save_data($psy,$commerce,$blood,$adoption,$credit,$revenu);



?>

<html lang="en"><head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Resultat</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        /*! =========================================================
 *
 Material Bootstrap Wizard - V1.0.1
 
*
* =========================================================
*
* MIT License Copyright 2017 Creative Tim (http://www.creative-tim.com/product/material-bootstrap-wizard)
 *
 *                       _oo0oo_
 *                      o8888888o
 *                      88" . "88
 *                      (| -_- |)
 *                      0\  =  /0
 *                    ___/`---'\___
 *                  .' \|     |// '.
 *                 / \|||  :  |||// \
 *                / _||||| -:- |||||- \
 *               |   | \  -  /// |   |
 *               | \_|  ''\---/''  |_/ |
 *               \  .-\__  '-'  ___/-. /
 *             ___'. .'  /--.--\  `. .'___
 *          ."" '<  `.___\_<|>_/___.' >' "".
 *         | | :  `- \`.;`\ _ /`;.`/ - ` : | |
 *         \  \ `_.   \_ __\ /__ _/   .-` /  /
 *     =====`-.____`.___ \_____/___.-`___.-'=====
 *                       `=---='
 *
 *     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 *
 *               Buddha Bless:  "No Bugs"
 *
 * ========================================================= */
body {
  background-color: #E5E5E5;
  color: #3C4858;
}
body.inverse {
  background: #333333;
}
body.inverse, body.inverse .form-control {
  color: #ffffff;
}
body.inverse .modal,
body.inverse .modal .form-control,
body.inverse .panel-default,
body.inverse .panel-default .form-control,
body.inverse .card,
body.inverse .card .form-control {
  background-color: initial;
  color: initial;
}

blockquote p {
  font-style: italic;
}

.life-of-material-kit {
  background: #FFFFFF;
}

body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4 {
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 300;
  line-height: 1.5em;
}

.serif-font {
  font-family: "Roboto Slab", "Times New Roman", serif;
}

a {
  color: #9c27b0;
}
a:hover, a:focus {
  color: #89229b;
  text-decoration: none;
}
a.text-info:hover, a.text-info:focus {
  color: #00a5bb;
}
a .material-icons {
  vertical-align: middle;
}

legend {
  border-bottom: 0;
}

* {
  -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
  -webkit-tap-highlight-color: transparent;
}
*:focus {
  outline: 0;
}

a:focus, a:active,
button:active, button:focus, button:hover,
button::-moz-focus-inner,
input[type="reset"]::-moz-focus-inner,
input[type="button"]::-moz-focus-inner,
input[type="submit"]::-moz-focus-inner,
select::-moz-focus-inner,
input[type="file"] > input[type="button"]::-moz-focus-inner {
  outline: 0 !important;
}

.image-container {
  min-height: 100vh;
  background-position: center center;
  background-size: cover;
  position: relative;
}
.image-container:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: #000000;
  opacity: .3;
}

.made-with-mk {
  width: 50px;
  height: 50px;
  display: block;
  position: fixed;
  z-index: 555;
  bottom: 40px;
  right: 40px;
  border-radius: 30px;
  background-color: rgba(16, 16, 16, 0.35);
  border: 1px solid rgba(255, 255, 255, 0.15);
  color: #FFFFFF;
  cursor: pointer;
  padding: 10px 12px;
  white-space: nowrap;
  overflow: hidden;
  -webkit-transition: 0.55s cubic-bezier(0.6, 0, 0.4, 1);
  -moz-transition: 0.55s cubic-bezier(0.6, 0, 0.4, 1);
  -o-transition: 0.55s cubic-bezier(0.6, 0, 0.4, 1);
  transition: 0.55s cubic-bezier(0.6, 0, 0.4, 1);
}
.made-with-mk:hover, .made-with-mk:active, .made-with-mk:focus {
  width: 218px;
  color: #FFFFFF;
  transition-duration: .55s;
  padding: 10px 19px;
}
.made-with-mk:hover .made-with, .made-with-mk:active .made-with, .made-with-mk:focus .made-with {
  opacity: 1;
}
.made-with-mk:hover .brand, .made-with-mk:active .brand, .made-with-mk:focus .brand {
  left: 0;
}
.made-with-mk .brand,
.made-with-mk .made-with {
  float: left;
}
.made-with-mk .brand {
  position: relative;
  top: 4px;
  left: -1px;
  letter-spacing: 1px;
  vertical-align: middle;
  font-size: 16px;
  font-weight: 600;
}
.made-with-mk .made-with {
  color: rgba(255, 255, 255, 0.6);
  position: absolute;
  left: 58px;
  top: 14px;
  opacity: 0;
  margin: 0;
  -webkit-transition: 0.55s cubic-bezier(0.6, 0, 0.4, 1);
  -moz-transition: 0.55s cubic-bezier(0.6, 0, 0.4, 1);
  -o-transition: 0.55s cubic-bezier(0.6, 0, 0.4, 1);
  transition: 0.55s cubic-bezier(0.6, 0, 0.4, 1);
}
.made-with-mk .made-with strong {
  font-weight: 400;
  color: rgba(255, 255, 255, 0.9);
}

.wizard-container {
  padding-top: 100px;
  z-index: 3;
}
.wizard-container .wizard-navigation {
  position: relative;
}

h1, .h1 {
  font-size: 3.8em;
  line-height: 1.15em;
}

h2, .h2 {
  font-size: 2.6em;
}

h3, .h3 {
  font-size: 1.825em;
  line-height: 1.4em;
  margin: 20px 0 10px;
}

h4, .h4 {
  font-size: 1.3em;
  line-height: 1.4em;
}

h5, .h5 {
  font-size: 1.25em;
  line-height: 1.4em;
  margin-bottom: 15px;
}

h6, .h6 {
  font-size: 0.9em;
  text-transform: uppercase;
}

.title,
.card-title,
.wizard-title {
  font-weight: 700;
}
.title,
.title a,
.card-title,
.card-title a,
.wizard-title,
.wizard-title a {
  color: #3C4858;
  text-decoration: none;
}

h2.title {
  margin-bottom: 30px;
}

.description,
.card-description,
.footer-big p {
  color: #999999;
}

.text-warning {
  color: #ff9800;
}

.text-primary {
  color: #9c27b0;
}

.text-danger {
  color: #f44336;
}

.text-success {
  color: #4caf50;
}

.text-info {
  color: #00bcd4;
}

.card {
  background-color: #FFFFFF;
  padding: 10px 0;
  width: 100%;
  border-radius: 6px;
  color: rgba(0,0,0, 0.87);
  background: #fff;
}

.wizard-card {
  min-height: 410px;
  box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
.wizard-card .picture-container {
  position: relative;
  cursor: pointer;
  text-align: center;
}
.wizard-card .picture {
  width: 106px;
  height: 106px;
  background-color: #999999;
  border: 4px solid #CCCCCC;
  color: #FFFFFF;
  border-radius: 50%;
  margin: 5px auto;
  overflow: hidden;
  transition: all 0.2s;
  -webkit-transition: all 0.2s;
}
.wizard-card .picture:hover {
  border-color: #2ca8ff;
}
.wizard-card[data-color="purple"] .moving-tab {
  position: absolute;
  text-align: center;
  padding: 12px;
  font-size: 12px;
  text-transform: uppercase;
  -webkit-font-smoothing: subpixel-antialiased;
  background-color: #9c27b0;
  top: -4px;
  left: 0px;
  border-radius: 4px;
  color: #FFFFFF;
  cursor: pointer;
  font-weight: 500;
  box-shadow: 0 16px 26px -10px rgba(156, 39, 176, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(156, 39, 176, 0.2);
}
.wizard-card[data-color="purple"] .picture:hover {
  border-color: #9c27b0;
}
.wizard-card[data-color="purple"] .choice:hover .icon, .wizard-card[data-color="purple"] .choice.active .icon {
  border-color: #9c27b0;
  color: #9c27b0;
}
.wizard-card[data-color="purple"] .form-group .form-control {
  background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#D2D2D2, #D2D2D2);
}
.wizard-card[data-color="purple"] .checkbox input[type=checkbox]:checked + .checkbox-material .check {
  background-color: #9c27b0;
}
.wizard-card[data-color="purple"] .radio input[type=radio]:checked ~ .check {
  background-color: #9c27b0;
}
.wizard-card[data-color="purple"] .radio input[type=radio]:checked ~ .circle {
  border-color: #9c27b0;
}
.wizard-card[data-color="green"] .moving-tab {
  position: absolute;
  text-align: center;
  padding: 12px;
  font-size: 12px;
  text-transform: uppercase;
  -webkit-font-smoothing: subpixel-antialiased;
  background-color: #4caf50;
  top: -4px;
  left: 0px;
  border-radius: 4px;
  color: #FFFFFF;
  cursor: pointer;
  font-weight: 500;
  box-shadow: 0 16px 26px -10px rgba(76, 175, 80, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(76, 175, 80, 0.2);
}
.wizard-card[data-color="green"] .picture:hover {
  border-color: #4caf50;
}
.wizard-card[data-color="green"] .choice:hover .icon, .wizard-card[data-color="green"] .choice.active .icon {
  border-color: #4caf50;
  color: #4caf50;
}
.wizard-card[data-color="green"] .form-group .form-control {
  background-image: linear-gradient(#4caf50, #4caf50), linear-gradient(#D2D2D2, #D2D2D2);
}
.wizard-card[data-color="green"] .checkbox input[type=checkbox]:checked + .checkbox-material .check {
  background-color: #4caf50;
}
.wizard-card[data-color="green"] .radio input[type=radio]:checked ~ .check {
  background-color: #4caf50;
}
.wizard-card[data-color="green"] .radio input[type=radio]:checked ~ .circle {
  border-color: #4caf50;
}
.wizard-card[data-color="blue"] .moving-tab {
  position: absolute;
  text-align: center;
  padding: 12px;
  font-size: 12px;
  text-transform: uppercase;
  -webkit-font-smoothing: subpixel-antialiased;
  background-color: #00bcd4;
  top: -4px;
  left: 0px;
  border-radius: 4px;
  color: #FFFFFF;
  cursor: pointer;
  font-weight: 500;
  box-shadow: 0 16px 26px -10px rgba(0, 188, 212, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 188, 212, 0.2);
}
.wizard-card[data-color="blue"] .picture:hover {
  border-color: #00bcd4;
}
.wizard-card[data-color="blue"] .choice:hover .icon, .wizard-card[data-color="blue"] .choice.active .icon {
  border-color: #00bcd4;
  color: #00bcd4;
}
.wizard-card[data-color="blue"] .form-group .form-control {
  background-image: linear-gradient(#00bcd4, #00bcd4), linear-gradient(#D2D2D2, #D2D2D2);
}
.wizard-card[data-color="blue"] .checkbox input[type=checkbox]:checked + .checkbox-material .check {
  background-color: #00bcd4;
}
.wizard-card[data-color="blue"] .radio input[type=radio]:checked ~ .check {
  background-color: #00bcd4;
}
.wizard-card[data-color="blue"] .radio input[type=radio]:checked ~ .circle {
  border-color: #00bcd4;
}
.wizard-card[data-color="orange"] .moving-tab {
  position: absolute;
  text-align: center;
  padding: 12px;
  font-size: 12px;
  text-transform: uppercase;
  -webkit-font-smoothing: subpixel-antialiased;
  background-color: #ff9800;
  top: -4px;
  left: 0px;
  border-radius: 4px;
  color: #FFFFFF;
  cursor: pointer;
  font-weight: 500;
  box-shadow: 0 16px 26px -10px rgba(255, 152, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(255, 152, 0, 0.2);
}
.wizard-card[data-color="orange"] .picture:hover {
  border-color: #ff9800;
}
.wizard-card[data-color="orange"] .choice:hover .icon, .wizard-card[data-color="orange"] .choice.active .icon {
  border-color: #ff9800;
  color: #ff9800;
}
.wizard-card[data-color="orange"] .form-group .form-control {
  background-image: linear-gradient(#ff9800, #ff9800), linear-gradient(#D2D2D2, #D2D2D2);
}
.wizard-card[data-color="orange"] .checkbox input[type=checkbox]:checked + .checkbox-material .check {
  background-color: #ff9800;
}
.wizard-card[data-color="orange"] .radio input[type=radio]:checked ~ .check {
  background-color: #ff9800;
}
.wizard-card[data-color="orange"] .radio input[type=radio]:checked ~ .circle {
  border-color: #ff9800;
}
.wizard-card[data-color="red"] .moving-tab {
  position: absolute;
  text-align: center;
  padding: 12px;
  font-size: 12px;
  text-transform: uppercase;
  -webkit-font-smoothing: subpixel-antialiased;
  background-color: #f44336;
  top: -4px;
  left: 0px;
  border-radius: 4px;
  color: #FFFFFF;
  cursor: pointer;
  font-weight: 500;
  box-shadow: 0 16px 26px -10px rgba(244, 67, 54, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(244, 67, 54, 0.2);
}
.wizard-card[data-color="red"] .picture:hover {
  border-color: #f44336;
}
.wizard-card[data-color="red"] .choice:hover .icon, .wizard-card[data-color="red"] .choice.active .icon {
  border-color: #f44336;
  color: #f44336;
}
.wizard-card[data-color="red"] .form-group .form-control {
  background-image: linear-gradient(#f44336, #f44336), linear-gradient(#D2D2D2, #D2D2D2);
}
.wizard-card[data-color="red"] .checkbox input[type=checkbox]:checked + .checkbox-material .check {
  background-color: #f44336;
}
.wizard-card[data-color="red"] .radio input[type=radio]:checked ~ .check {
  background-color: #f44336;
}
.wizard-card[data-color="red"] .radio input[type=radio]:checked ~ .circle {
  border-color: #f44336;
}
.wizard-card .picture input[type="file"] {
  cursor: pointer;
  display: block;
  height: 100%;
  left: 0;
  opacity: 0 !important;
  position: absolute;
  top: 0;
  width: 100%;
}
.wizard-card .picture-src {
  width: 100%;
}
.wizard-card .tab-content {
  min-height: 340px;
  padding: 20px 15px;
}
.wizard-card .wizard-footer {
  padding: 0 15px;
}
.wizard-card .wizard-footer .checkbox {
  margin-top: 16px;
}
.wizard-card .disabled {
  display: none;
}
.wizard-card .wizard-header {
  text-align: center;
  padding: 25px 0 35px;
}
.wizard-card .wizard-header h5 {
  margin: 5px 0 0;
}
.wizard-card .nav-pills > li {
  text-align: center;
}
.wizard-card .btn {
  text-transform: uppercase;
}
.wizard-card .info-text {
  text-align: center;
  font-weight: 300;
  margin: 10px 0 30px;
}
.wizard-card .choice {
  text-align: center;
  cursor: pointer;
  margin-top: 20px;
}
.wizard-card .choice .icon {
  text-align: center;
  vertical-align: middle;
  height: 116px;
  width: 116px;
  border-radius: 50%;
  color: #999999;
  margin: 0 auto 20px;
  border: 4px solid #CCCCCC;
  transition: all 0.2s;
  -webkit-transition: all 0.2s;
}
.wizard-card .choice i {
  font-size: 40px;
  line-height: 111px;
}
.wizard-card .choice:hover .icon, .wizard-card .choice.active .icon {
  border-color: #2ca8ff;
}
.wizard-card .choice input[type="radio"],
.wizard-card .choice input[type="checkbox"] {
  position: absolute;
  left: -10000px;
  z-index: -1;
}
.wizard-card .btn-finish {
  display: none;
}
.wizard-card .description {
  color: #999999;
  font-size: 14px;
}
.wizard-card .wizard-title {
  margin: 0;
}

legend {
  margin-bottom: 20px;
  font-size: 21px;
}

output {
  padding-top: 8px;
  font-size: 14px;
  line-height: 1.42857;
}

.form-control {
  height: 36px;
  padding: 7px 0;
  font-size: 14px;
  line-height: 1.42857;
}

@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"].form-control,
  input[type="time"].form-control,
  input[type="datetime-local"].form-control,
  input[type="month"].form-control {
    line-height: 36px;
  }
  input[type="date"].input-sm, .input-group-sm input[type="date"],
  input[type="time"].input-sm, .input-group-sm
  input[type="time"],
  input[type="datetime-local"].input-sm, .input-group-sm
  input[type="datetime-local"],
  input[type="month"].input-sm, .input-group-sm
  input[type="month"] {
    line-height: 24px;
  }
  input[type="date"].input-lg, .input-group-lg input[type="date"],
  input[type="time"].input-lg, .input-group-lg
  input[type="time"],
  input[type="datetime-local"].input-lg, .input-group-lg
  input[type="datetime-local"],
  input[type="month"].input-lg, .input-group-lg
  input[type="month"] {
    line-height: 44px;
  }
}
.radio label,
.checkbox label {
  min-height: 20px;
}

.form-control-static {
  padding-top: 8px;
  padding-bottom: 8px;
  min-height: 34px;
}

.input-sm .input-sm {
  height: 24px;
  padding: 3px 0;
  font-size: 11px;
  line-height: 1.5;
  border-radius: 0;
}
.input-sm select.input-sm {
  height: 24px;
  line-height: 24px;
}
.input-sm textarea.input-sm,
.input-sm select[multiple].input-sm {
  height: auto;
}

.form-group-sm .form-control {
  height: 24px;
  padding: 3px 0;
  font-size: 11px;
  line-height: 1.5;
}
.form-group-sm select.form-control {
  height: 24px;
  line-height: 24px;
}
.form-group-sm textarea.form-control,
.form-group-sm select[multiple].form-control {
  height: auto;
}
.form-group-sm .form-control-static {
  height: 24px;
  min-height: 31px;
  padding: 4px 0;
  font-size: 11px;
  line-height: 1.5;
}

.input-lg .input-lg {
  height: 44px;
  padding: 9px 0;
  font-size: 18px;
  line-height: 1.33333;
  border-radius: 0;
}
.input-lg select.input-lg {
  height: 44px;
  line-height: 44px;
}
.input-lg textarea.input-lg,
.input-lg select[multiple].input-lg {
  height: auto;
}

.form-group-lg .form-control {
  height: 44px;
  padding: 9px 0;
  font-size: 18px;
  line-height: 1.33333;
}
.form-group-lg select.form-control {
  height: 44px;
  line-height: 44px;
}
.form-group-lg textarea.form-control,
.form-group-lg select[multiple].form-control {
  height: auto;
}
.form-group-lg .form-control-static {
  height: 44px;
  min-height: 38px;
  padding: 10px 0;
  font-size: 18px;
  line-height: 1.33333;
}

.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  padding-top: 8px;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 28px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    padding-top: 8px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 13.0px;
    font-size: 18px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 4px;
    font-size: 11px;
  }
}

.label {
  border-radius: 3px;
}
.label, .label.label-default {
  background-color: #FFFFFF;
}
.label.label-inverse {
  background-color: #212121;
}
.label.label-primary {
  background-color: #9c27b0;
}
.label.label-success {
  background-color: #4caf50;
}
.label.label-info {
  background-color: #00bcd4;
}
.label.label-warning {
  background-color: #ff9800;
}
.label.label-danger {
  background-color: #f44336;
}
.label.label-rose {
  background-color: #e91e63;
}

.form-control,
.form-group .form-control {
  border: 0;
  background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#D2D2D2, #D2D2D2);
  background-size: 0 2px, 100% 1px;
  background-repeat: no-repeat;
  background-position: center bottom, center calc(100% - 1px);
  background-color: transparent;
  transition: background 0s ease-out;
  float: none;
  box-shadow: none;
  border-radius: 0;
  font-weight: 400;
}
.form-control::-moz-placeholder,
.form-group .form-control::-moz-placeholder {
  color: #AAAAAA;
  font-weight: 400;
}
.form-control:-ms-input-placeholder,
.form-group .form-control:-ms-input-placeholder {
  color: #AAAAAA;
  font-weight: 400;
}
.form-control::-webkit-input-placeholder,
.form-group .form-control::-webkit-input-placeholder {
  color: #AAAAAA;
  font-weight: 400;
}
.form-control[readonly], .form-control[disabled], fieldset[disabled] .form-control,
.form-group .form-control[readonly],
.form-group .form-control[disabled], fieldset[disabled]
.form-group .form-control {
  background-color: transparent;
}
.form-control[disabled], fieldset[disabled] .form-control,
.form-group .form-control[disabled], fieldset[disabled]
.form-group .form-control {
  background-image: none;
  border-bottom: 1px dotted #D2D2D2;
}

.form-group {
  position: relative;
}
.form-group.label-static label.control-label, .form-group.label-placeholder label.control-label, .form-group.label-floating label.control-label {
  position: absolute;
  pointer-events: none;
  transition: 0.3s ease all;
}
.form-group.label-floating label.control-label {
  will-change: left, top, contents;
}
.form-group.label-placeholder:not(.is-empty) label.control-label {
  display: none;
}
.form-group .help-block {
  position: absolute;
  display: none;
}
.form-group.is-focused .form-control {
  outline: none;
  background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#D2D2D2, #D2D2D2);
  background-size: 100% 2px, 100% 1px;
  box-shadow: none;
  transition-duration: 0.3s;
}
.form-group.is-focused .form-control .material-input:after {
  background-color: #9c27b0;
}
.form-group.is-focused.form-info .form-control {
  background-image: linear-gradient(#00bcd4, #00bcd4), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.is-focused.form-success .form-control {
  background-image: linear-gradient(#4caf50, #4caf50), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.is-focused.form-warning .form-control {
  background-image: linear-gradient(#ff9800, #ff9800), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.is-focused.form-danger .form-control {
  background-image: linear-gradient(#f44336, #f44336), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.is-focused.form-rose .form-control {
  background-image: linear-gradient(#e91e63, #e91e63), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.is-focused.form-white .form-control {
  background-image: linear-gradient(#FFFFFF, #FFFFFF), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.is-focused.label-placeholder label,
.form-group.is-focused.label-placeholder label.control-label {
  color: #AAAAAA;
}
.form-group.is-focused .help-block {
  display: block;
}
.form-group.has-warning .form-control {
  box-shadow: none;
}
.form-group.has-warning.is-focused .form-control {
  background-image: linear-gradient(#ff9800, #ff9800), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.has-warning label.control-label,
.form-group.has-warning .help-block {
  color: #ff9800;
}
.form-group.has-error .form-control {
  box-shadow: none;
}
.form-group.has-error.is-focused .form-control {
  background-image: linear-gradient(#f44336, #f44336), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.has-error label.control-label,
.form-group.has-error .help-block {
  color: #f44336;
}
.form-group.has-success .form-control {
  box-shadow: none;
}
.form-group.has-success.is-focused .form-control {
  background-image: linear-gradient(#4caf50, #4caf50), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.has-success label.control-label,
.form-group.has-success .help-block {
  color: #4caf50;
}
.form-group.has-info .form-control {
  box-shadow: none;
}
.form-group.has-info.is-focused .form-control {
  background-image: linear-gradient(#00bcd4, #00bcd4), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.has-info label.control-label,
.form-group.has-info .help-block {
  color: #00bcd4;
}
.form-group textarea {
  resize: none;
}
.form-group textarea ~ .form-control-highlight {
  margin-top: -11px;
}
.form-group select {
  appearance: none;
}
.form-group select ~ .material-input:after {
  display: none;
}

.form-control {
  margin-bottom: 7px;
}
.form-control::-moz-placeholder {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}
.form-control:-ms-input-placeholder {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}
.form-control::-webkit-input-placeholder {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}

.checkbox label,
.radio label,
label {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}

label.control-label {
  font-size: 11px;
  line-height: 1.07143;
  color: #AAAAAA;
  font-weight: 400;
  margin: 16px 0 0 0;
}

.help-block {
  margin-top: 0;
  font-size: 11px;
}

.form-group {
  padding-bottom: 7px;
  margin: 27px 0 0 0;
}
.form-group .form-control {
  margin-bottom: 7px;
}
.form-group .form-control::-moz-placeholder {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group .form-control:-ms-input-placeholder {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group .form-control::-webkit-input-placeholder {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group .checkbox label,
.form-group .radio label,
.form-group label {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group label.control-label {
  font-size: 11px;
  line-height: 1.07143;
  color: #AAAAAA;
  font-weight: 400;
  margin: 16px 0 0 0;
}
.form-group .help-block {
  margin-top: 0;
  font-size: 11px;
}
.form-group.label-floating label.control-label, .form-group.label-placeholder label.control-label {
  top: -7px;
  font-size: 14px;
  line-height: 1.42857;
}
.form-group.label-static label.control-label, .form-group.label-floating.is-focused label.control-label, .form-group.label-floating:not(.is-empty) label.control-label {
  top: -28px;
  left: 0;
  font-size: 11px;
  line-height: 1.07143;
}
.form-group.label-floating input.form-control:-webkit-autofill ~ label.control-label label.control-label {
  top: -28px;
  left: 0;
  font-size: 11px;
  line-height: 1.07143;
}

.form-group.form-group-sm {
  padding-bottom: 3px;
  margin: 21px 0 0 0;
}
.form-group.form-group-sm .form-control {
  margin-bottom: 3px;
}
.form-group.form-group-sm .form-control::-moz-placeholder {
  font-size: 11px;
  line-height: 1.5;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-sm .form-control:-ms-input-placeholder {
  font-size: 11px;
  line-height: 1.5;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-sm .form-control::-webkit-input-placeholder {
  font-size: 11px;
  line-height: 1.5;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-sm .checkbox label,
.form-group.form-group-sm .radio label,
.form-group.form-group-sm label {
  font-size: 11px;
  line-height: 1.5;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-sm label.control-label {
  font-size: 9px;
  line-height: 1.125;
  color: #AAAAAA;
  font-weight: 400;
  margin: 16px 0 0 0;
}
.form-group.form-group-sm .help-block {
  margin-top: 0;
  font-size: 9px;
}
.form-group.form-group-sm.label-floating label.control-label, .form-group.form-group-sm.label-placeholder label.control-label {
  top: -11px;
  font-size: 11px;
  line-height: 1.5;
}
.form-group.form-group-sm.label-static label.control-label, .form-group.form-group-sm.label-floating.is-focused label.control-label, .form-group.form-group-sm.label-floating:not(.is-empty) label.control-label {
  top: -25px;
  left: 0;
  font-size: 9px;
  line-height: 1.125;
}
.form-group.form-group-sm.label-floating input.form-control:-webkit-autofill ~ label.control-label label.control-label {
  top: -25px;
  left: 0;
  font-size: 9px;
  line-height: 1.125;
}

.form-group.form-group-lg {
  padding-bottom: 9px;
  margin: 30px 0 0 0;
}
.form-group.form-group-lg .form-control {
  margin-bottom: 9px;
}
.form-group.form-group-lg .form-control::-moz-placeholder {
  font-size: 18px;
  line-height: 1.33333;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-lg .form-control:-ms-input-placeholder {
  font-size: 18px;
  line-height: 1.33333;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-lg .form-control::-webkit-input-placeholder {
  font-size: 18px;
  line-height: 1.33333;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-lg .checkbox label,
.form-group.form-group-lg .radio label,
.form-group.form-group-lg label {
  font-size: 18px;
  line-height: 1.33333;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-lg label.control-label {
  font-size: 14px;
  line-height: 1.0;
  color: #AAAAAA;
  font-weight: 400;
  margin: 16px 0 0 0;
}
.form-group.form-group-lg .help-block {
  margin-top: 0;
  font-size: 14px;
}
.form-group.form-group-lg.label-floating label.control-label, .form-group.form-group-lg.label-placeholder label.control-label {
  top: -5px;
  font-size: 18px;
  line-height: 1.33333;
}
.form-group.form-group-lg.label-static label.control-label, .form-group.form-group-lg.label-floating.is-focused label.control-label, .form-group.form-group-lg.label-floating:not(.is-empty) label.control-label {
  top: -32px;
  left: 0;
  font-size: 14px;
  line-height: 1.0;
}
.form-group.form-group-lg.label-floating input.form-control:-webkit-autofill ~ label.control-label label.control-label {
  top: -32px;
  left: 0;
  font-size: 14px;
  line-height: 1.0;
}

select.form-control {
  border: 0;
  box-shadow: none;
  border-radius: 0;
}
.form-group.is-focused select.form-control {
  box-shadow: none;
  border-color: #D2D2D2;
}
select.form-control[multiple], .form-group.is-focused select.form-control[multiple] {
  height: 85px;
}

.input-group-btn .btn {
  margin: 0 0 7px 0;
}

.form-group.form-group-sm .input-group-btn .btn {
  margin: 0 0 3px 0;
}
.form-group.form-group-lg .input-group-btn .btn {
  margin: 0 0 9px 0;
}

.input-group .input-group-btn {
  padding: 0 12px;
}
.input-group .input-group-addon {
  border: 0;
  background: transparent;
  padding: 6px 15px 0px;
}

.form-group input[type=file] {
  opacity: 0;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 100;
}

.form-control-feedback {
  opacity: 0;
}
.has-success .form-control-feedback {
  color: #4caf50;
  opacity: 1;
}
.has-error .form-control-feedback {
  color: #f44336;
  opacity: 1;
}

.btn {
  border: none;
  border-radius: 3px;
  position: relative;
  padding: 12px 30px;
  margin: 10px 1px;
  font-size: 12px;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 0;
  will-change: box-shadow, transform;
  transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}
.btn::-moz-focus-inner {
  border: 0;
}
.btn, .btn.btn-default {
  box-shadow: 0 2px 2px 0 rgba(153, 153, 153, 0.14), 0 3px 1px -2px rgba(153, 153, 153, 0.2), 0 1px 5px 0 rgba(153, 153, 153, 0.12);
}
.btn, .btn:hover, .btn:focus, .btn:active, .btn.active, .btn:active:focus, .btn:active:hover, .btn.active:focus, .btn.active:hover, .open > .btn.dropdown-toggle, .open > .btn.dropdown-toggle:focus, .open > .btn.dropdown-toggle:hover, .btn.btn-default, .btn.btn-default:hover, .btn.btn-default:focus, .btn.btn-default:active, .btn.btn-default.active, .btn.btn-default:active:focus, .btn.btn-default:active:hover, .btn.btn-default.active:focus, .btn.btn-default.active:hover, .open > .btn.btn-default.dropdown-toggle, .open > .btn.btn-default.dropdown-toggle:focus, .open > .btn.btn-default.dropdown-toggle:hover {
  background-color: #999999;
  color: #FFFFFF;
}
.btn:focus, .btn:active, .btn:hover, .btn.btn-default:focus, .btn.btn-default:active, .btn.btn-default:hover {
  box-shadow: 0 14px 26px -12px rgba(153, 153, 153, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(153, 153, 153, 0.2);
}
.btn.disabled, .btn.disabled:hover, .btn.disabled:focus, .btn.disabled.focus, .btn.disabled:active, .btn.disabled.active, .btn:disabled, .btn:disabled:hover, .btn:disabled:focus, .btn:disabled.focus, .btn:disabled:active, .btn:disabled.active, .btn[disabled], .btn[disabled]:hover, .btn[disabled]:focus, .btn[disabled].focus, .btn[disabled]:active, .btn[disabled].active, fieldset[disabled] .btn, fieldset[disabled] .btn:hover, fieldset[disabled] .btn:focus, fieldset[disabled] .btn.focus, fieldset[disabled] .btn:active, fieldset[disabled] .btn.active, .btn.btn-default.disabled, .btn.btn-default.disabled:hover, .btn.btn-default.disabled:focus, .btn.btn-default.disabled.focus, .btn.btn-default.disabled:active, .btn.btn-default.disabled.active, .btn.btn-default:disabled, .btn.btn-default:disabled:hover, .btn.btn-default:disabled:focus, .btn.btn-default:disabled.focus, .btn.btn-default:disabled:active, .btn.btn-default:disabled.active, .btn.btn-default[disabled], .btn.btn-default[disabled]:hover, .btn.btn-default[disabled]:focus, .btn.btn-default[disabled].focus, .btn.btn-default[disabled]:active, .btn.btn-default[disabled].active, fieldset[disabled] .btn.btn-default, fieldset[disabled] .btn.btn-default:hover, fieldset[disabled] .btn.btn-default:focus, fieldset[disabled] .btn.btn-default.focus, fieldset[disabled] .btn.btn-default:active, fieldset[disabled] .btn.btn-default.active {
  box-shadow: none;
}
.btn.btn-simple, .btn.btn-default.btn-simple {
  background-color: transparent;
  color: #999999;
  box-shadow: none;
}
.btn.btn-simple:hover, .btn.btn-simple:focus, .btn.btn-simple:active, .btn.btn-default.btn-simple:hover, .btn.btn-default.btn-simple:focus, .btn.btn-default.btn-simple:active {
  background-color: transparent;
  color: #999999;
}
.btn.btn-primary {
  box-shadow: 0 2px 2px 0 rgba(156, 39, 176, 0.14), 0 3px 1px -2px rgba(156, 39, 176, 0.2), 0 1px 5px 0 rgba(156, 39, 176, 0.12);
}
.btn.btn-primary, .btn.btn-primary:hover, .btn.btn-primary:focus, .btn.btn-primary:active, .btn.btn-primary.active, .btn.btn-primary:active:focus, .btn.btn-primary:active:hover, .btn.btn-primary.active:focus, .btn.btn-primary.active:hover, .open > .btn.btn-primary.dropdown-toggle, .open > .btn.btn-primary.dropdown-toggle:focus, .open > .btn.btn-primary.dropdown-toggle:hover {
  background-color: #9c27b0;
  color: #FFFFFF;
}
.btn.btn-primary:focus, .btn.btn-primary:active, .btn.btn-primary:hover {
  box-shadow: 0 14px 26px -12px rgba(156, 39, 176, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(156, 39, 176, 0.2);
}
.btn.btn-primary.disabled, .btn.btn-primary.disabled:hover, .btn.btn-primary.disabled:focus, .btn.btn-primary.disabled.focus, .btn.btn-primary.disabled:active, .btn.btn-primary.disabled.active, .btn.btn-primary:disabled, .btn.btn-primary:disabled:hover, .btn.btn-primary:disabled:focus, .btn.btn-primary:disabled.focus, .btn.btn-primary:disabled:active, .btn.btn-primary:disabled.active, .btn.btn-primary[disabled], .btn.btn-primary[disabled]:hover, .btn.btn-primary[disabled]:focus, .btn.btn-primary[disabled].focus, .btn.btn-primary[disabled]:active, .btn.btn-primary[disabled].active, fieldset[disabled] .btn.btn-primary, fieldset[disabled] .btn.btn-primary:hover, fieldset[disabled] .btn.btn-primary:focus, fieldset[disabled] .btn.btn-primary.focus, fieldset[disabled] .btn.btn-primary:active, fieldset[disabled] .btn.btn-primary.active {
  box-shadow: none;
}
.btn.btn-primary.btn-simple {
  background-color: transparent;
  color: #9c27b0;
  box-shadow: none;
}
.btn.btn-primary.btn-simple:hover, .btn.btn-primary.btn-simple:focus, .btn.btn-primary.btn-simple:active {
  background-color: transparent;
  color: #9c27b0;
}
.btn.btn-info {
  box-shadow: 0 2px 2px 0 rgba(0, 188, 212, 0.14), 0 3px 1px -2px rgba(0, 188, 212, 0.2), 0 1px 5px 0 rgba(0, 188, 212, 0.12);
}
.btn.btn-info, .btn.btn-info:hover, .btn.btn-info:focus, .btn.btn-info:active, .btn.btn-info.active, .btn.btn-info:active:focus, .btn.btn-info:active:hover, .btn.btn-info.active:focus, .btn.btn-info.active:hover, .open > .btn.btn-info.dropdown-toggle, .open > .btn.btn-info.dropdown-toggle:focus, .open > .btn.btn-info.dropdown-toggle:hover {
  background-color: #00bcd4;
  color: #FFFFFF;
}
.btn.btn-info:focus, .btn.btn-info:active, .btn.btn-info:hover {
  box-shadow: 0 14px 26px -12px rgba(0, 188, 212, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 188, 212, 0.2);
}
.btn.btn-info.disabled, .btn.btn-info.disabled:hover, .btn.btn-info.disabled:focus, .btn.btn-info.disabled.focus, .btn.btn-info.disabled:active, .btn.btn-info.disabled.active, .btn.btn-info:disabled, .btn.btn-info:disabled:hover, .btn.btn-info:disabled:focus, .btn.btn-info:disabled.focus, .btn.btn-info:disabled:active, .btn.btn-info:disabled.active, .btn.btn-info[disabled], .btn.btn-info[disabled]:hover, .btn.btn-info[disabled]:focus, .btn.btn-info[disabled].focus, .btn.btn-info[disabled]:active, .btn.btn-info[disabled].active, fieldset[disabled] .btn.btn-info, fieldset[disabled] .btn.btn-info:hover, fieldset[disabled] .btn.btn-info:focus, fieldset[disabled] .btn.btn-info.focus, fieldset[disabled] .btn.btn-info:active, fieldset[disabled] .btn.btn-info.active {
  box-shadow: none;
}
.btn.btn-info.btn-simple {
  background-color: transparent;
  color: #00bcd4;
  box-shadow: none;
}
.btn.btn-info.btn-simple:hover, .btn.btn-info.btn-simple:focus, .btn.btn-info.btn-simple:active {
  background-color: transparent;
  color: #00bcd4;
}
.btn.btn-success {
  box-shadow: 0 2px 2px 0 rgba(76, 175, 80, 0.14), 0 3px 1px -2px rgba(76, 175, 80, 0.2), 0 1px 5px 0 rgba(76, 175, 80, 0.12);
}
.btn.btn-success, .btn.btn-success:hover, .btn.btn-success:focus, .btn.btn-success:active, .btn.btn-success.active, .btn.btn-success:active:focus, .btn.btn-success:active:hover, .btn.btn-success.active:focus, .btn.btn-success.active:hover, .open > .btn.btn-success.dropdown-toggle, .open > .btn.btn-success.dropdown-toggle:focus, .open > .btn.btn-success.dropdown-toggle:hover {
  background-color: #4caf50;
  color: #FFFFFF;
}
.btn.btn-success:focus, .btn.btn-success:active, .btn.btn-success:hover {
  box-shadow: 0 14px 26px -12px rgba(76, 175, 80, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(76, 175, 80, 0.2);
}
.btn.btn-success.disabled, .btn.btn-success.disabled:hover, .btn.btn-success.disabled:focus, .btn.btn-success.disabled.focus, .btn.btn-success.disabled:active, .btn.btn-success.disabled.active, .btn.btn-success:disabled, .btn.btn-success:disabled:hover, .btn.btn-success:disabled:focus, .btn.btn-success:disabled.focus, .btn.btn-success:disabled:active, .btn.btn-success:disabled.active, .btn.btn-success[disabled], .btn.btn-success[disabled]:hover, .btn.btn-success[disabled]:focus, .btn.btn-success[disabled].focus, .btn.btn-success[disabled]:active, .btn.btn-success[disabled].active, fieldset[disabled] .btn.btn-success, fieldset[disabled] .btn.btn-success:hover, fieldset[disabled] .btn.btn-success:focus, fieldset[disabled] .btn.btn-success.focus, fieldset[disabled] .btn.btn-success:active, fieldset[disabled] .btn.btn-success.active {
  box-shadow: none;
}
.btn.btn-success.btn-simple {
  background-color: transparent;
  color: #4caf50;
  box-shadow: none;
}
.btn.btn-success.btn-simple:hover, .btn.btn-success.btn-simple:focus, .btn.btn-success.btn-simple:active {
  background-color: transparent;
  color: #4caf50;
}
.btn.btn-warning {
  box-shadow: 0 2px 2px 0 rgba(255, 152, 0, 0.14), 0 3px 1px -2px rgba(255, 152, 0, 0.2), 0 1px 5px 0 rgba(255, 152, 0, 0.12);
}
.btn.btn-warning, .btn.btn-warning:hover, .btn.btn-warning:focus, .btn.btn-warning:active, .btn.btn-warning.active, .btn.btn-warning:active:focus, .btn.btn-warning:active:hover, .btn.btn-warning.active:focus, .btn.btn-warning.active:hover, .open > .btn.btn-warning.dropdown-toggle, .open > .btn.btn-warning.dropdown-toggle:focus, .open > .btn.btn-warning.dropdown-toggle:hover {
  background-color: #ff9800;
  color: #FFFFFF;
}
.btn.btn-warning:focus, .btn.btn-warning:active, .btn.btn-warning:hover {
  box-shadow: 0 14px 26px -12px rgba(255, 152, 0, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(255, 152, 0, 0.2);
}
.btn.btn-warning.disabled, .btn.btn-warning.disabled:hover, .btn.btn-warning.disabled:focus, .btn.btn-warning.disabled.focus, .btn.btn-warning.disabled:active, .btn.btn-warning.disabled.active, .btn.btn-warning:disabled, .btn.btn-warning:disabled:hover, .btn.btn-warning:disabled:focus, .btn.btn-warning:disabled.focus, .btn.btn-warning:disabled:active, .btn.btn-warning:disabled.active, .btn.btn-warning[disabled], .btn.btn-warning[disabled]:hover, .btn.btn-warning[disabled]:focus, .btn.btn-warning[disabled].focus, .btn.btn-warning[disabled]:active, .btn.btn-warning[disabled].active, fieldset[disabled] .btn.btn-warning, fieldset[disabled] .btn.btn-warning:hover, fieldset[disabled] .btn.btn-warning:focus, fieldset[disabled] .btn.btn-warning.focus, fieldset[disabled] .btn.btn-warning:active, fieldset[disabled] .btn.btn-warning.active {
  box-shadow: none;
}
.btn.btn-warning.btn-simple {
  background-color: transparent;
  color: #ff9800;
  box-shadow: none;
}
.btn.btn-warning.btn-simple:hover, .btn.btn-warning.btn-simple:focus, .btn.btn-warning.btn-simple:active {
  background-color: transparent;
  color: #ff9800;
}
.btn.btn-danger {
  box-shadow: 0 2px 2px 0 rgba(244, 67, 54, 0.14), 0 3px 1px -2px rgba(244, 67, 54, 0.2), 0 1px 5px 0 rgba(244, 67, 54, 0.12);
}
.btn.btn-danger, .btn.btn-danger:hover, .btn.btn-danger:focus, .btn.btn-danger:active, .btn.btn-danger.active, .btn.btn-danger:active:focus, .btn.btn-danger:active:hover, .btn.btn-danger.active:focus, .btn.btn-danger.active:hover, .open > .btn.btn-danger.dropdown-toggle, .open > .btn.btn-danger.dropdown-toggle:focus, .open > .btn.btn-danger.dropdown-toggle:hover {
  background-color: #f44336;
  color: #FFFFFF;
}
.btn.btn-danger:focus, .btn.btn-danger:active, .btn.btn-danger:hover {
  box-shadow: 0 14px 26px -12px rgba(244, 67, 54, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(244, 67, 54, 0.2);
}
.btn.btn-danger.disabled, .btn.btn-danger.disabled:hover, .btn.btn-danger.disabled:focus, .btn.btn-danger.disabled.focus, .btn.btn-danger.disabled:active, .btn.btn-danger.disabled.active, .btn.btn-danger:disabled, .btn.btn-danger:disabled:hover, .btn.btn-danger:disabled:focus, .btn.btn-danger:disabled.focus, .btn.btn-danger:disabled:active, .btn.btn-danger:disabled.active, .btn.btn-danger[disabled], .btn.btn-danger[disabled]:hover, .btn.btn-danger[disabled]:focus, .btn.btn-danger[disabled].focus, .btn.btn-danger[disabled]:active, .btn.btn-danger[disabled].active, fieldset[disabled] .btn.btn-danger, fieldset[disabled] .btn.btn-danger:hover, fieldset[disabled] .btn.btn-danger:focus, fieldset[disabled] .btn.btn-danger.focus, fieldset[disabled] .btn.btn-danger:active, fieldset[disabled] .btn.btn-danger.active {
  box-shadow: none;
}
.btn.btn-danger.btn-simple {
  background-color: transparent;
  color: #f44336;
  box-shadow: none;
}
.btn.btn-danger.btn-simple:hover, .btn.btn-danger.btn-simple:focus, .btn.btn-danger.btn-simple:active {
  background-color: transparent;
  color: #f44336;
}
.btn:focus, .btn:active, .btn:active:focus {
  outline: 0;
}
.btn.btn-round {
  border-radius: 30px;
}
.btn:not(.btn-just-icon):not(.btn-fab) .fa {
  font-size: 18px;
  margin-top: -2px;
  position: relative;
  top: 2px;
}
.btn.btn-fab {
  border-radius: 50%;
  font-size: 24px;
  height: 56px;
  margin: auto;
  min-width: 56px;
  width: 56px;
  padding: 0;
  overflow: hidden;
  position: relative;
  line-height: normal;
}
.btn.btn-fab .ripple-container {
  border-radius: 50%;
}
.btn.btn-fab.btn-fab-mini, .btn-group-sm .btn.btn-fab {
  height: 40px;
  min-width: 40px;
  width: 40px;
}
.btn.btn-fab.btn-fab-mini.material-icons, .btn-group-sm .btn.btn-fab.material-icons {
  top: -3.5px;
  left: -3.5px;
}
.btn.btn-fab.btn-fab-mini .material-icons, .btn-group-sm .btn.btn-fab .material-icons {
  font-size: 17px;
}
.btn.btn-fab i.material-icons {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-12px, -12px);
  line-height: 24px;
  width: 24px;
  font-size: 24px;
}
.btn.btn-lg, .btn-group-lg .btn {
  font-size: 14px;
  padding: 18px 36px;
}
.btn.btn-sm, .btn-group-sm .btn {
  padding: 5px 20px;
  font-size: 11px;
}
.btn.btn-xs, .btn-group-xs .btn {
  padding: 4px 15px;
  font-size: 10px;
}
.btn.btn-just-icon {
  font-size: 18px;
  padding: 10px 10px;
  line-height: 1em;
}
.btn.btn-just-icon i {
  width: 20px;
}
.btn.btn-just-icon.btn-lg {
  font-size: 22px;
  padding: 13px 18px;
}

.btn .material-icons {
  vertical-align: middle;
  font-size: 17px;
  top: -1px;
  position: relative;
}

/*            Navigation menu                */
.nav-pills {
  background-color: rgba(200, 200, 200, 0.2);
}
.nav-pills > li + li {
  margin-left: 0;
}
.nav-pills > li > a {
  border: 0 !important;
  border-radius: 0;
  line-height: 18px;
  text-transform: uppercase;
  font-size: 12px;
  font-weight: 500;
  min-width: 100px;
  text-align: center;
  color: #555555 !important;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus,
.nav-pills > li > a:hover,
.nav-pills > li > a:focus {
  background-color: inherit;
}
.nav-pills > li i {
  display: block;
  font-size: 30px;
  padding: 15px 0;
}

.popover, .tooltip-inner {
  color: #555555;
  line-height: 1.5em;
  background: #FFFFFF;
  border: none;
  border-radius: 3px;
  box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
}

.popover {
  padding: 0;
  box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
.popover.left > .arrow, .popover.right > .arrow, .popover.top > .arrow, .popover.bottom > .arrow {
  border: none;
}

.popover-title {
  background-color: #FFFFFF;
  border: none;
  padding: 15px 15px 5px;
  font-size: 1.3em;
}

.popover-content {
  padding: 10px 15px 15px;
  line-height: 1.4;
}

.tooltip.in {
  opacity: 1;
  -webkit-transform: translate3d(0, 0px, 0);
  -moz-transform: translate3d(0, 0px, 0);
  -o-transform: translate3d(0, 0px, 0);
  -ms-transform: translate3d(0, 0px, 0);
  transform: translate3d(0, 0px, 0);
}

.tooltip {
  opacity: 0;
  transition: opacity, transform .2s ease;
  -webkit-transform: translate3d(0, 5px, 0);
  -moz-transform: translate3d(0, 5px, 0);
  -o-transform: translate3d(0, 5px, 0);
  -ms-transform: translate3d(0, 5px, 0);
  transform: translate3d(0, 5px, 0);
}
.tooltip.left .tooltip-arrow {
  border-left-color: #FFFFFF;
}
.tooltip.right .tooltip-arrow {
  border-right-color: #FFFFFF;
}
.tooltip.top .tooltip-arrow {
  border-top-color: #FFFFFF;
}
.tooltip.bottom .tooltip-arrow {
  border-bottom-color: #FFFFFF;
}

.tooltip-inner {
  padding: 10px 15px;
  min-width: 130px;
}

.footer {
  position: relative;
  bottom: 20px;
  right: 0px;
  width: 100%;
  color: #FFFFFF;
  z-index: 4;
  text-align: right;
  margin-top: 60px;
  text-shadow: 0 0px 1px black;
}
.footer a {
  color: #FFFFFF;
}
.footer .heart {
  color: #FF3B30;
}

.withripple {
  position: relative;
}

.ripple-container {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  width: 100%;
  height: 100%;
  overflow: hidden;
  border-radius: inherit;
  pointer-events: none;
}
.disabled .ripple-container {
  display: none;
}

.ripple {
  position: absolute;
  width: 20px;
  height: 20px;
  margin-left: -10px;
  margin-top: -10px;
  border-radius: 100%;
  background-color: #000;
  background-color: rgba(0, 0, 0, 0.05);
  transform: scale(1);
  transform-origin: 50%;
  opacity: 0;
  pointer-events: none;
}

.ripple.ripple-on {
  transition: opacity 0.15s ease-in 0s, transform 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.1s;
  opacity: 0.1;
}

.ripple.ripple-out {
  transition: opacity 0.1s linear 0s !important;
  opacity: 0;
}

.radio label {
  cursor: pointer;
  padding-left: 35px;
  position: relative;
  color: rgba(0,0,0, 0.26);
}
.form-group.is-focused .radio label {
  color: rgba(0,0,0, 0.26);
}
.form-group.is-focused .radio label:hover, .form-group.is-focused .radio label:focus {
  color: rgba(0,0,0, .54);
}
fieldset[disabled] .form-group.is-focused .radio label {
  color: rgba(0,0,0, 0.26);
}
.radio label span {
  display: block;
  position: absolute;
  left: 10px;
  top: 2px;
  transition-duration: 0.2s;
}
.radio label .circle {
  border: 1px solid rgba(0,0,0, .54);
  height: 15px;
  width: 15px;
  border-radius: 100%;
}
.radio label .check {
  height: 15px;
  width: 15px;
  border-radius: 100%;
  background-color: #9c27b0;
  transform: scale3d(0, 0, 0);
}
.radio label .check:after {
  display: block;
  position: absolute;
  content: "";
  background-color: rgba(0,0,0, 0.87);
  left: -18px;
  top: -18px;
  height: 50px;
  width: 50px;
  border-radius: 100%;
  z-index: 1;
  opacity: 0;
  margin: 0;
  transform: scale3d(1.5, 1.5, 1);
}
.radio label input[type=radio]:not(:checked) ~ .check:after {
  animation: rippleOff 500ms;
}
.radio label input[type=radio]:checked ~ .check:after {
  animation: rippleOn 500ms;
}
.radio input[type=radio] {
  opacity: 0;
  height: 0;
  width: 0;
  overflow: hidden;
}
.radio input[type=radio]:checked ~ .check, .radio input[type=radio]:checked ~ .circle {
  opacity: 1;
}
.radio input[type=radio]:checked ~ .check {
  background-color: #9c27b0;
}
.radio input[type=radio]:checked ~ .circle {
  border-color: #9c27b0;
}
.radio input[type=radio]:checked ~ .check {
  transform: scale3d(0.65, 0.65, 1);
}
.radio input[type=radio][disabled] ~ .check, .radio input[type=radio][disabled] ~ .circle {
  opacity: 0.26;
}
.radio input[type=radio][disabled] ~ .check {
  background-color: #000000;
}
.radio input[type=radio][disabled] ~ .circle {
  border-color: #000000;
}

@keyframes rippleOn {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 0.2;
  }
  100% {
    opacity: 0;
  }
}
@keyframes rippleOff {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 0.2;
  }
  100% {
    opacity: 0;
  }
}
.checkbox label {
  cursor: pointer;
  padding-left: 0;
  color: rgba(0,0,0, 0.26);
}
.form-group.is-focused .checkbox label {
  color: rgba(0,0,0, 0.26);
}
.form-group.is-focused .checkbox label:hover, .form-group.is-focused .checkbox label:focus {
  color: rgba(0,0,0, .54);
}
fieldset[disabled] .form-group.is-focused .checkbox label {
  color: rgba(0,0,0, 0.26);
}
.checkbox input[type=checkbox] {
  opacity: 0;
  position: absolute;
  margin: 0;
  z-index: -1;
  width: 0;
  height: 0;
  overflow: hidden;
  left: 0;
  pointer-events: none;
}
.checkbox .checkbox-material {
  vertical-align: middle;
  position: relative;
  top: 3px;
  padding-right: 5px;
}
.checkbox .checkbox-material:before {
  display: block;
  position: absolute;
  left: 0;
  content: "";
  background-color: rgba(0, 0, 0, 0.84);
  height: 20px;
  width: 20px;
  border-radius: 100%;
  z-index: 1;
  opacity: 0;
  margin: 0;
  transform: scale3d(2.3, 2.3, 1);
}
.checkbox .checkbox-material .check {
  position: relative;
  display: inline-block;
  width: 20px;
  height: 20px;
  border: 1px solid rgba(0,0,0, .54);
  overflow: hidden;
  z-index: 1;
  border-radius: 3px;
}
.checkbox .checkbox-material .check:before {
  position: absolute;
  content: "";
  transform: rotate(45deg);
  display: block;
  margin-top: -3px;
  margin-left: 7px;
  width: 0;
  height: 0;
  background: red;
  box-shadow: 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0 inset;
  animation: checkbox-off 0.3s forwards;
}
.checkbox input[type=checkbox]:focus + .checkbox-material .check:after {
  opacity: 0.2;
}
.checkbox input[type=checkbox]:checked + .checkbox-material .check {
  background: #9c27b0;
}
.checkbox input[type=checkbox]:checked + .checkbox-material .check:before {
  color: #FFFFFF;
  box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px;
  animation: checkbox-on 0.3s forwards;
}
.checkbox input[type=checkbox]:checked + .checkbox-material:before {
  animation: rippleOn 500ms;
}
.checkbox input[type=checkbox]:checked + .checkbox-material .check:after {
  animation: rippleOn 500ms forwards;
}
.checkbox input[type=checkbox]:not(:checked) + .checkbox-material:before {
  animation: rippleOff 500ms;
}
.checkbox input[type=checkbox]:not(:checked) + .checkbox-material .check:after {
  animation: rippleOff 500ms;
}
fieldset[disabled] .checkbox, fieldset[disabled] .checkbox input[type=checkbox],
.checkbox input[type=checkbox][disabled] ~ .checkbox-material .check,
.checkbox input[type=checkbox][disabled] + .circle {
  opacity: 0.5;
}
.checkbox input[type=checkbox][disabled] ~ .checkbox-material .check {
  border-color: #000000;
  opacity: .26;
}
.checkbox input[type=checkbox][disabled] + .checkbox-material .check:after {
  background-color: rgba(0,0,0, 0.87);
  transform: rotate(-45deg);
}

@keyframes checkbox-on {
  0% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 15px 2px 0 11px;
  }
  50% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px 2px 0 11px;
  }
  100% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px;
  }
}
@keyframes rippleOn {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 0.2;
  }
  100% {
    opacity: 0;
  }
}
@keyframes rippleOff {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 0.2;
  }
  100% {
    opacity: 0;
  }
}
@media (max-width: 768px) {
  .main .container {
    margin-bottom: 50px;
  }
}
@media (min-width: 768px) {
  .navbar-form {
    margin-top: 21px;
    margin-bottom: 21px;
    padding-left: 5px;
    padding-right: 5px;
  }

  .btn-wd {
    min-width: 140px;
  }
}





.logo-container{
    left: 50px;
    position: absolute;
    top: 20px;
    z-index: 3;
}
.logo-container .logo{
    overflow: hidden;
    border-radius: 50%;
    border: 1px solid #333333;
    width: 60px;
    float: left;
}
.logo-container .brand{
    font-size: 18px;
    color: #FFF;
    line-height: 20px;
    float: left;
    margin-left: 10px;
    margin-top: 10px;
    width: 60px
}

body{
    background-color: #CCCCCC;
}

.section .wizard-card{
    min-height: inherit;
}

.tim-row{
    margin-bottom: 20px;
}

.tim-white-buttons {
    background-color: #777777;
}
.title{
    margin-top: 30px;
    margin-bottom: 25px;
    min-height: 32px;
    font-weight: 500;
}



.title.text-center{
    margin-bottom: 50px;
}
.tim-typo{
    padding-left: 25%;
    margin-bottom: 40px;
    position: relative;
}
.tim-typo .tim-note{
    bottom: 10px;
    color: #c0c1c2;
    display: block;
    font-weight: 400;
    font-size: 13px;
    line-height: 13px;
    left: 0;
    margin-left: 20px;
    position: absolute;
    width: 260px;
}
.tim-row{
    padding-top: 50px;
}
.tim-row h3{
    margin-top: 0;
}
.switch{
    margin-right: 20px;
}
#navbar-full .navbar{
    border-radius: 0 !important;
    margin-bottom: 15px;
    z-index: 2;
}
.space{
    height: 130px;
    display: block;
}
.space-110{
    height: 110px;
    display: block;
}
.space-50{
    height: 50px;
    display: block;
}
.space-70{
    height: 70px;
    display: block;
}
.navigation-example .img-src{
    background-attachment: scroll;
}

.navigation-example{
    background-image: url('../img/bg.jpg');
    background-position: center center;
    background-size: cover;
    margin-top:0;
    min-height: 740px;
}
#notifications{
    background-color: #FFFFFF;
    display: block;
    width: 100%;
    position: relative;
}
#notifications .alert-danger{
    margin-bottom: 0px;
}
.tim-note{
    text-transform: capitalize;
}

#buttons .btn{
    margin: 0 0px 15px;
}
.space-100{
    height: 100px;
    display: block;
    width: 100%;
}

.be-social{
    padding-bottom: 20px;
/*     border-bottom: 1px solid #aaa; */
    margin: 0 auto 40px;
}
.txt-white{
    color: #FFFFFF;
}
.txt-gray{
    color: #ddd !important;
}


.parallax{
  width:100%;
  height:570px;

  display: block;
  background-attachment: fixed;
    background-repeat:no-repeat;
    background-size:cover;
    background-position: center center;

}

.logo-container.logo-documentation{
    position: relative;
    top: 0;
    left: 0;
}

.logo-container .logo{
    overflow: hidden;
    border-radius: 50%;
    border: 1px solid #333333;
    width: 50px;
    float: left;
}

.logo-container .brand{
    font-size: 16px;
    line-height: 18px;
    float: left;
    margin-left: 10px;
    margin-top: 7px;
    width: 70px;
    height: 40px;
    text-align: left;
}


.navbar-default .logo-container .brand{
    color: #999999;
}
.navbar-transparent .logo-container .brand{
    color: #FFFFFF;
}

.logo-container .brand-material{
    font-size: 18px;
    margin-top: 15px;
    height: 25px;
    width: auto;
}

.logo-container .logo img{
    width: 100%;
}
.navbar-small .logo-container .brand{
    color: #333333;
}

.fixed-section{
    top: 90px;
    max-height: 80vh;
    overflow: scroll;
}
.fixed-section ul li{
    list-style: none;
}
.fixed-section li a{
    font-size: 14px;
    padding: 2px;
    display: block;
    color: #666666;
}
.fixed-section li a.active{
    color: #00bbff;
}
.fixed-section.float{
    position: fixed;
    top: 100px;
    width: 200px;
    margin-top: 0;
}


.parallax .parallax-image{
    width: 100%;
    overflow: hidden;
    position: absolute;
}
.parallax .parallax-image img{
    width: 100%;
}

@media (max-width: 768px){
    .parallax .parallax-image{
         width: 100%;
         height: 640px;
         overflow: hidden;
     }
    .parallax .parallax-image img{
       height: 100%;
       width: auto;
   }
}

.separator{
    content: "Separator";
    color: #FFFFFF;
    display: block;
    width: 100%;
    padding: 20px;
}
.separator-line{
    background-color: #EEE;
    height: 1px;
    width: 100%;
    display: block;
}
.separator.separator-gray{
    background-color: #EEEEEE;
}
.social-buttons-demo .btn{
    margin-right: 5px;
    margin-bottom: 7px;
}

.img-container{
    width: 100%;
    overflow: hidden;
}
.img-container img{
    width: 100%;
}

.lightbox img{
    width: 100%;
}
.lightbox .modal-content{
    overflow: hidden;
}
.lightbox .modal-body{
    padding: 0;
}
@media screen and (min-width: 991px){
    .lightbox .modal-dialog{
        width: 960px;
    }
}

@media (max-width: 768px){
    .btn, .btn-morphing{
        margin-bottom: 10px;
    }
    .parallax .motto{
        top: 170px;
        margin-top: 0;
        font-size: 60px;
        width: 270px;
    }
}

/*       Loading dots  */

/*      transitions */
.presentation .front, .presentation .front:after, .presentation .front .btn, .logo-container .logo, .logo-container .brand{
     -webkit-transition: all .2s;
    -moz-transition: all .2s;
    -o-transition: all .2s;
    transition: all .2s;
}


#images h4{
    margin-bottom: 30px;
}
#javascriptComponents{
    padding-bottom: 0;
}
#javascriptComponents .btn-raised{
    margin: 10px 5px;
}


/*      layer animation          */

.layers-container{
    display: block;
    margin-top: 50px;
    position: relative;
}
.layers-container img {
  position: absolute;
  width: 100%;
  height: auto;
  top: 0;
  left: 0;
  text-align: center;
}

.section-black {
  background-color: #333;
}

.animate {
  transition: 1.5s ease-in-out;
  -moz-transition: 1.5s ease-in-out;
  -webkit-transition: 1.5s ease-in-out;
}

.navbar-default.navbar-small .logo-container .brand{
    color: #333333;
}
.navbar-transparent.navbar-small .logo-container .brand{
    color: #FFFFFF;
}
.navbar-default.navbar-small .logo-container .brand{
    color: #333333;
}

.sharing-area{
    margin-top: 80px;
}
.sharing-area .btn{
    margin: 15px 4px 0;
    color: #FFFFFF;
}
.sharing-area .btn i{
    font-size: 18px;
    position: relative;
    top: 2px;
    margin-right: 5px;
}
.sharing-area .btn-twitter{
    background-color: #55acee;
}
.sharing-area .btn-facebook{
    background-color: #3b5998;
}
.sharing-area .btn-google-plus{
    background-color: #dd4b39;
}
.sharing-area .btn-github{
    background-color: #333333;
}
.section-thin,
.section-notifications{
    padding: 0;
}
.section-navbars{
    padding-top: 0;
}
#navbar .navbar{
    border-radius: 0;
}
.section-tabs{
    background: #EEEEEE;
}
.section-pagination{
    padding-bottom: 0;
}
.section-download h4{
    margin-bottom: 50px;
}
.section-examples a{
    text-decoration: none;
}
.section-examples h5{
    margin-top: 30px;
}
.components-page .wrapper > .header,
.tutorial-page .wrapper > .header{
    height: 400px;
    padding-top: 100px;
    background-size: cover;
    background-position: center center;
}
.components-page .title,
.tutorial-page .title{
    color: #FFFFFF;
}

.main {
  background: #FFFFFF;
  position: relative;
  z-index: 3;
}

.main-raised {
    margin: -60px 30px 0px;
    border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.header-filter {
  position: relative;
}
.header-filter:before, .header-filter:after {
  position: absolute;
  z-index: 1;
  width: 100%;
  height: 100%;
  display: block;
  left: 0;
  top: 0;
  content: "";
}
.header-filter::before {
  background-color: rgba(0, 0, 0, 0.4);
}
.header-filter .container {
  z-index: 2;
  position: relative;
}

.section {
  padding: 70px 0;
  background-position: center center;
  background-size: cover;
}



.navbar {
  border: 0;
  border-radius: 3px;
  box-shadow: 0 10px 20px -12px rgba(0, 0, 0, 0.42), 0 3px 20px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
  padding: 10px 0;

  -webkit-transition: all 150ms ease 0s;
 -moz-transition: all 150ms ease 0s;
 -o-transition: all 150ms ease 0s;
 -ms-transition: all 150ms ease 0s;
 transition: all 150ms ease 0s;
}
.navbar .navbar-brand {
  position: relative;
  height: 50px;
  line-height: 30px;
  color: inherit;
  padding: 10px 15px;
}
.navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
  color: inherit;
  background-color: transparent;
}

.navbar.navbar-transparent {
  background-color: transparent;
  box-shadow: none;
  color: #fff;
  padding-top: 25px;
}

.navbar-fixed-top {
  border-radius: 0;
}

.navbar .navbar-nav > li > a .material-icons,
.navbar .navbar-nav > li > a .fa {
  font-size: 20px;
  max-width: 20px;
}
.navbar .navbar-nav > li > a:hover,
.navbar .navbar-nav > li > a:focus {
    color: inherit;
    background-color: transparent;
}

.navbar .navbar-nav > li > a:not(.btn) .material-icons {
  margin-top: -3px;
  top: 0px;
  position: relative;
  margin-right: 3px;
}

.navbar, .navbar.navbar-default {
  background-color: #9c27b0;
  color: #FFFFFF;
}

.navbar .navbar-nav > li > a {
  color: inherit;
  padding-top: 15px;
  padding-bottom: 15px;
  font-weight: 400;
  font-size: 12px;
  text-transform: uppercase;
  border-radius: 3px;
}
@media (max-width: 1199px) {

  .navbar .navbar-brand {
    height: 50px;
    padding: 10px 15px;
  }
  .navbar .navbar-nav > li > a {
    padding-top: 15px;
    padding-bottom: 15px;
  }
}

footer {
  padding: 15px 0;
  text-align: center;

}
.footer a{
    font-weight: bold;
}

footer.footer-documentation{
    margin-top: 0;
    bottom: 0;
    text-shadow: none;
    color: inherit;
}

footer.footer-documentation li a{
    color: inherit;
}

footer.footer-documentation li a:hover,
footer.footer-documentation li a:focus{
    color: #89229b;
}

footer ul {
  margin-bottom: 0;
  padding: 0;
  list-style: none;
}
footer ul li {
  display: inline-block;
}
footer ul li a {
  color: inherit;
  padding: 15px;
  font-weight: 500;
  font-size: 12px;
  text-transform: uppercase;
  border-radius: 3px;
  text-decoration: none;
  position: relative;
  display: block;
}
footer ul li a:hover {
  text-decoration: none;
}
footer ul li .btn {
  margin: 0;
}
footer ul.links-horizontal:first-child a {
  padding-left: 0;
}
footer ul.links-horizontal:last-child a {
  padding-right: 0;
}
footer ul.links-vertical li {
  display: block;
}
footer ul.links-vertical li a {
  padding: 5px 0;
}
footer .social-buttons a,
footer .social-buttons .btn {
  margin-top: 5px;
  margin-bottom: 5px;
}
footer .footer-brand {
  float: left;
  height: 50px;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
  margin-left: -15px;
}
footer .footer-brand:hover, footer .footer-brand:focus {
  color: #3C4858;
}
footer .copyright {
  padding: 15px 0;
  text-align: center;
}
footer .copyright .material-icons {
  font-size: 18px;
  position: relative;
  top: 3px;
}
footer .pull-center {
  display: inline-block;
  float: none;
}

@media (max-width: 768px) {
  .footer .copyright {
    display: inline-block;
    text-align: center;
    padding: 10px 0;
    float: none !important;
    width: 100%;
  }
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>



  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Material Bootstrap Wizard by Creative Tim</title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">




    <div class="image-container set-full-height" style="background-image: url('bg.jpg')">
      <!--   Creative Tim Branding   -->
  

    <!--  Made With Material Kit  -->
    

      <!--   Big container   -->
      <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <!-- Wizard container -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="red" id="wizard">
                        <form action="" method="">
                    <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                          <div class="wizard-header">
                              <h3 class="wizard-title">
                                Votre Resultat 
                              </h3>
                  <h5>This information will let us know more about you.</h5>
                          </div>
                <div class="wizard-navigation">
                  


<?php

$reponse_ville;
$reponse_psy;
$reponse_finance;
$reponse_possible_avoir_enfants;
$t=check_apte($id,$idfemme);

if(checkville("tanger")) {

$reponse_ville="$ville est Convenable";

print("<p class='bg-primary' style='font-weight:bold;font-size:18px'> <font style='margin-left:4px;font-family:Roboto'>Ville  : $reponse_ville</font></p>");

if(check_apte($id,$idfemme)) {

$reponse_psy= "Psychologie est Convenable";

print("<p class='bg-primary' style='font-weight:bold;font-size:18px'> <font style='margin-left:4px;font-family:Roboto'>Psychologie  : $reponse_psy</font></p>");

   if(check_finance($id,$idfemme)) {

$reponse_finance ="Situation Financiere est Stable ";

print("<p class='bg-primary' style='font-weight:bold;font-size:18px'> <font style='margin-left:4px;font-family:Roboto'>Situtation Financiere  : $reponse_finance</font></p>");

if(check_possible_phy($id,$idfemme)) {

$reponse_possible_avoir_enfants=" Ce Couple Peut Avoir Des Enfants ";

print("<p class='bg-primary' style='font-weight:bold;font-size:18px'> <font style='margin-left:4px;font-family:Roboto'>Situtation Physique  : $reponse_possible_avoir_enfants</font></p>");

print("<p class='bg-success' style='font-weight:bold;font-size:18px'> <font style='margin-left:4px;font-family:Roboto'>Resultat Final : Couple Compatible (توكلوا على الله)</font></p>");


} else {

  $reponse_possible_avoir_enfants=" Ce Couple Ne Peut Pas Avoir Des Enfants ";

print("<p class='bg-danger'  style='font-weight:bold;font-size:18px'><font style='margin-left:4px;font-family:Roboto'>Situtation Physique :   $reponse_possible_avoir_enfants</font></p>");

print("<p class='bg-success' style='font-weight:bold;font-size:18px'> <font style='margin-left:4px;font-family:Roboto'>Resultat Final : Couple  inCompatible (الكمال لله)</font></p>");

}

   } else {

  $reponse_finance ="Situation Financiere n'est pas Stable ";

print("<p class='bg-danger'  style='font-weight:bold;font-size:18px'><font style='margin-left:4px;font-family:Roboto'>Situtation Financiere :  $reponse_finance</font></p>");

print("<p class='bg-success' style='font-weight:bold;font-size:18px'> <font style='margin-left:4px;font-family:Roboto'>Resultat Final : Couple  inCompatible (الكمال لله)</font></p>");

}



}
else {


  $reponse_psy= "Psychologie n'est Pas Convenable";

    print("<p class='bg-danger'  style='font-weight:bold;font-size:18px'><font style='margin-left:4px;font-family:Roboto'>Psychologie :  $reponse_psy</font></p>");

print("<p class='bg-success' style='font-weight:bold;font-size:18px'> <font style='margin-left:4px;font-family:Roboto'>Resultat Final : Couple  inCompatible (الكمال لله)</font></p>");

}
    



} else {


  $reponse_ville="$ville n'est Pas Convenable";

  print("<p class='bg-danger'  style='font-weight:bold;font-size:18px'><font style='margin-left:4px;font-family:Roboto'>Ville : $reponse_ville</font></p>");

print("<p class='bg-success' style='font-weight:bold;font-size:18px'> <font style='margin-left:4px;font-family:Roboto'>Resultat Final : Couple  inCompatible (الكمال لله)</font></p>");


}





?>
                </div>

                            
                            <div class="wizard-footer">
                                <div class="pull-right">
                                      <input type="button"  onclick="location.href = 'destroy.php';" class="btn btn-next btn-fill btn-danger btn-wd" name="finish" value="Finish">
                                  </div>
                                  <div class="pull-left">
                                  
                                  	
                                 
                                      <input type="button" onclick="location.href = 'choice.php';" class="btn btn-previous btn-fill btn-default btn-wd" name="Re-Test" value="Re-Test">

                                  </div>
                             
                                  <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div> <!-- row -->
    </div> <!--  big container -->

   
      </div>
  







</body></html>