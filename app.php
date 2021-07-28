<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task Board</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <style>

    html {
      scroll-behavior: smooth;
    }

    html, body{
      min-height: 100%;
      height: 100%;
      margin: auto;
      padding: auto;
      background-image: url("https://trello.com/images/backgrounds/purple-blur.png");
      /* Full height */
      /* Center and scale the image nicely */
      background-position: left;
      background-size: cover;
      width: fit-content;
      background-repeat: repeat;
      color: #172b4d;
      font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Noto Sans,Ubuntu,Droid Sans,Helvetica Neue,sans-serif;
      font-size: 14px;
      line-height: 20px;
      font-weight: 400;
      overflow: auto;
        min-width: 100%;
    }


    /* columns parts lists */

    div.main_container {

      background: rgba(9,30,66,.09);
      width: auto;
      min-width: 100%;
      width: fit-content;

    }

    div.mask_list {

    }

    /* columns that hold lists and cards */
    div.listcontainer{
      display: flex;
      flex-flow: column no-wrap;
      align-items: flex-start;
      justify-content: flex-start;
      background: rgba(9,30,66,.05);

    }

    div.flex-list-item {
      height: auto;
      margin-left: 10px;
      display: flex;
      flex-flow: column no-wrap;
      justify-content: flex-start;
      min-width: 220px;
      width: 272px;
    }
    div.drop-list{

      border: 2px solid lightgray;
      height: auto;
      margin-left: 10px;
      display: flex;
      flex-flow: column no-wrap;
      justify-content: flex-start;
      min-width: 220px;
      width: 272px;
      background: lightgray;
    }


    div#static_add_list{

      border: 2px solid lightgray;
      height: auto;
      margin-left: 10px;
      display: flex;
      flex-flow: column no-wrap;
      justify-content: flex-start;
      min-width: 272px;
      width: 272px;
      background: hsla(0,0%,100%,.24);
      color: white;
    }

    button.add_new_list_btn {

      width: 100%;
      padding: 5px;
      color: white;
      text-align: left;
    }

    button.add_new_list_btn:hover {
      color: white;
    }
    button.add_new_card_btn {
      color: rgb(100, 100, 100);
    }

    div#static_add_list:hover{
      background: hsla(0,0%,100%,.30);
      color: white;
    }

    .card {
      color: #172b4d;

    }
    .card-body div.add_new{

      background: rgba(9,30,66,.08);
      padding: 0;
      margin: 0px;
      background: rgba(9,30,66,.08);
    }

    .card-body {
      padding: 5px;
      height: 100%;
    }

    /* Hide title for new Created row
       can be controled to show titile
    */
    .hidden_title {
      display: none;
    }

    .plus_sign {
      color: rgb(120 120 120);
      margin-right: 5px;
    }
    div#static_add_list .plus_sign {
      color: white;
    }
    div.card-title {
      display: block;
      background: rgba(250,255,255,.07);
    }


    .menu_sign {
      color: gray;
    }

    /* end cloumns [lists] */

    /* cards */

    .cards_container {

    }

    .task_card {
      background: rgba(250,255,255,.9);
      margin-bottom: 10px;
      min-height: 30px;
      padding: 5px;
      cursor: pointer;
      font-size: 0.882em;

    }

    .cards_container{
      display: flex;
      flex-flow: column nowrap;
      justify-conntent: center;
      align-items: stretch;
    }
    .card_container{
      padding: 1px;

    }

    /* ADD new Inputs */
    button#cancel_add_list{
      background: transparent;
      border: none;
    }

    #cancel_add_list i {
      font-size: 26px;
      margin-top: auto;
      margin-bottom: auto;
      color: rgb(150 150 150);


    }

    div.cards_container{
      height: auto;
      min-height: 10px;

    }

    div.card_container{

      margin-top: 3px;
    }

    input#new_list_name {
      margin-bottom: 5px;
    }
    /* fixed helper hsla(0,0%,100%,.24) */
    .float_right{
       float:right;
    }

    /* Media queries */
    @media only screen and (max-width: 800px) {
      div.listcontainer{
       width: fit-content;
      }


    }


    div.active_drop_list {
      background: lightblue;
    }

    /* new cards form */

    #new-card-form {
      height: auto;
    }
    #card_form_inputs{

      height: auto;
    }
    #card_title{
      min-height: 70px;
      height: auto;
      margin-bottom: 5px;

    }

    form #card_form_inputs {
      width: 100%;
    }

    #cancel_add_card{
      border: none;
      background: lightgray;
      font-size:1.5em;
      height: auto;
      color: rgb(120, 120, 120);


    }

    button#card_add_menu {
      margin-right: 10px;
      float: right;
      border: none;
      background: lightgray;
      color: gray;
    }



    div.labels_container{
      display:flex;
      flex-flow:column nowrap;
      width: 85%;
      justify-content: center;
      margin-left: 10px;
      margin-right: 10px;
    }
    div.labels_container .label_icon{
       display: block;
       margin-left: 10px;
       margin-right: 10px;
       width: 95%;
       height:30px;
       margin-top:5px;
       border-radius: 4px;
       cursor: pointer;
       color: white;
       padding: 5px;
       font-weight: bold;

    }


    div.labels_container .label_btn{
       display: block;
       margin-left: auto;
       margin-right: auto;
       width: 95%;
       height:auto;
       margin-top: 10px;
       margin-top:5px;
       border-radius: 4px;
       background: white;
       cursor: pointer;
       color: black;
       text-align: center;
       padding: 10px;
       font-weight: bold;
       margin-top: 15px;
       display: flex;
       justify-content: center;
       align-items: center;

    }
    div.labels_container .label_btn:hover {
      background: black;
      color: white;
    }


    .green {
      background: #61bd4f;
    }
    .yellow {
      background: #f2d600;
    }

    .orange{
      background: #ff9f1a;
    }

    .red {
      background: #eb5a46;
    }

    .purple {
      background: #c377e0;
    }

    .blue {
      background: #0079bf;
    }

    .lightblue {
      background: #00c2e0;
    }

    .lightgreen {
      background: #51e898;
    }

    .darkblue {
      background: #344563;
    }
    .midblue {
      background: #0079bf;
    }

    .nocolor {
      background: transparent;
      /*box-shadow: -8px 0 #b3bac5;*/
      display: none;
    }



    /* labels hover */

    .green:hover {
      box-shadow: -8px 0 #519839;
    }
    .yellow:hover {
      box-shadow: -8px 0 #97a0af;
    }

    .orange:hover{
      box-shadow: -8px 0 #d9b51c;
    }

    .red:hover {
      box-shadow: -8px 0 #b04632;
    }

    .purple:hover {
      box-shadow: -8px 0 #89609e;
    }

    .blue:hover {
      box-shadow: -8px 0 #055a8c;
    }

    .lightblue:hover {
      box-shadow: -8px 0 #0098b7;
    }

    .lightgreen:hover {
      box-shadow: -8px 0 #4bbf6b;
    }

    .darkblue:hover {
      box-shadow: -8px 0 #091e42;
    }

    /* active colors  */
    .green.active_label {
      box-shadow: -8px 0 #519839;
    }
    .yellow.active_label {
      box-shadow: -8px 0 #97a0af;
    }

    .orange.active_label{
      box-shadow: -8px 0 #b59817;
    }

    .red.active_label {
      box-shadow: -8px 0 #b04632;
    }

    .purple.active_label {
      box-shadow: -8px 0 #89609e;
    }

    .blue.active_label {
      box-shadow: -8px 0 #055a8c;
    }

    .lightblue.active_label {
      box-shadow: -8px 0 #0098b7;
    }

    .lightgreen.active_label {
      box-shadow: -8px 0 #4bbf6b;
    }

    .darkblue.active_label {
      box-shadow: -8px 0 #091e42;
    }



    div.labels_container.hidelabel {
      display: none !important;
    }

    textarea.new_card_textare{
    resize:none;
    overflow:auto;
    width: 100%;
    height: 30px;
    background: white;
    color: black;
    margin-top: 10px;
    border: 2px solid #344563;
    }

    h4#selectTitle {
     margin-top:5px;margin-bottom:5px;
    }

    #add_new_label_container{
     margin-top: 10px;
    }

    /* New Card Css*/
    .card_metadata .card_text{
      font-size: 1.1em;
      width:100%;
      display:block;
      max-height: 400px;
      overflow:auto;
    }



    .model_label  {
      width: 100px;
      height: 30px;
      max-width: 70%;

    }
    .card_metadata div.card_label {
      margin-right:auto;
      width: max-content;
      max-width: 70%;
      overflow: hidden;
      padding: 5px;
      color: white;
      font-weight: bolder;
      text-align: center;
      height: auto;
      border-radius: 8px;
      margin-left: 6px;
      max-height: 40px;


    }

    .card_metadata{
      height: 100%;
    }
    .card_metadata_container {
      display: inline;
      width: fit-content;
      height: 100%;
    }

     .btn.model_open{
        background: transparent;
        display: inline;
        margin-left: auto;
        float: right;
        max-width: 15%;
        max-height: 65px;
        color: black;
    }

    .card_metadata card_actions {
      background: transparent;
    }

    .card_metadata .card_text{
        dinsplay: inline;
        width: 84%;
        max-height: 300px;
        overflow: hidden;
    }

    .card_metadata .label_class {
      display: inline-block;


    }


    /* model css */

    .label-containers {
      backround: green;
      display: flex;
      flex-flow: row wrap;
      max-width: 100%;
      justify-content: flex-start;
      text-align: left;
      margin-right: auto;

    }
    .list_title_container{
      margin-bottom: 20px;
      font-size: 16px;
      font-weight: bold;
      color: gray;
    }
    .activve_container, .description_container, .list_title_container  {
      margin-top: 20px;
    }

    .comment_icons {
      margin-left: auto;
      float: right;
      justify-content: center;
      align-items: center;
      margin-top: 5px;
      font-size: 19px;
    }

    .comment_icons span{
      margin-right: 5px;
    }

    .title_fa {
     margin-right: 10px;
    }


    .modal-content {
      width: 100%;
      background: #f4f5f7;
    }
    .modal-header {
      width: 100%;
      background: black;
      color:white;
    }
    #model_body_flex {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 600px;
     /* opacity: ;*/
    }
    #model_main {
      width: 75%;
    }
    #model_aside {
      width: 20%;
    }

    button.close{
      color: white;
      font-size: 26px;
      background: firebrick;
      font-weight: bolder;
      opacity: 1;

    }
    button.background_hidden {
      background: transparent;
      border: 2px solid black;
    }
    button.close:hover {
      opacity: .8;
      color: white;
    }
    #myModal1 .modal-dialog {
      min-height: auto;
    }
    #myModal1 .modal-body.model_main_body {
      min-height: 600px;
      height: 500px;
      max-height: auto;
      overflow: auto;
      padding: 20%px;
      overflow: auto;

    }

    .aside-flex-item {
      margin-bottom: 15px;
      width: 100%;
    }
    .aside-flex-item .aside_button{
      background: gainsboro;
      padding: 5px;
      margin-top: 5px;
      cursor: pointer;
      border-radius: 6px;
      color: black;

    }

    .aside-flex-item .aside_button:hover {
      background: black;
      color: white;

    }

    .label-containers .model_label {
      display: flex;
      justify-conent: center;
      text-align: center;
      align-items: center;

      width: fit-content;
      min-width: 70px;
       max-width: 70%;
      color: white;
      font-weight: bolder;
      overflow: hidden;
      border-radius: 10px;
      font-wieght: bolder;
      font-size: 16px;
    }

    .label-containers .label_title_text {
      color: white;

    }
    .aside_button_close{
     margin-left: auto;
     float: right;
     height: auto;
     min-height: 30px;
     max-height: 35px;

    }
    div.popupmenu_action_hide {
      background: white;
      width: 250px;
      height: auto;
      max-height: 700px;
      padding: 10px;
      position: fixed;
      right: 40%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      display: none;
    }
    div.popupmenu_action {
      background: white;
      width: 250px;
      height: auto;
      max-height: 700px;
      padding: 10px;
      position: fixed;
      right: 40%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      display: fixed;
      top: 15%;
    }




    .margin-right-mid {
      margin: 5px;
    }
    .margin-top-mid{
      margin-top: 10px;
    }




    .aside_button_close {
      margin-right: auto;
    }

    h5.popupmenu_action_header{
      background: lightgray;
      color: black;
      font-weight: bolder;
      padding: 10px;
      margin-bottom: 15px;
    }

    /* New edits */
    #model_labels_container{
      display: block;
      align-items: center;
      justify-content: center;
      flex-flow: column nowrap;
      width: 100%;
      height: 350px;
      overflow: auto;
    }


    #model_labels_container .model_label_container{
      width: 95%;
      padding: 10px;
    }

    .model_label_container .label_txt {
      color: white;
      font-size: 15px;
      font-size: bolder;
      padding: 10px;
    }

     .label_edit {
        width:100%;
        margin-top: 10px;
        height: 50px;
        padding: 5px;
        font-size: bolder;
     }
     .label_submit_container {
         width:100%;
     }

    .container.label-containers .model_label #label_title_text  {
       color: white;
       padding: 10px;
     }

     #ticket_description{
       padding: 10px;
       background: lavender;
       }


       .model_custom_title {width:80%;display:none}

     .label_color_flex_container {
       display: none;
       flex-flow: row wrap;
       width: 95%;
       gap: 1px;
       margin-top: 3px;
       margin-bottom: 3px;
     }
     .flex-color {
       height: 25px;
       width: 24%;
       cursor: pointer;
     }

     .card_metadata div.card_label{
      height: 25px;
      overflow:hidden;
    }

     /* width */
    ::-webkit-scrollbar {
      width: 20px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey;
      border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #c377e0;
      border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #c377e0;
    }

     .errorinput{
       border: 2px solid red;
       color: red;
     }


    .attachment {
      margin-top: 5px;
      text-align: left;
      max-height: 50px;
      overflow: hidden;
    }

    #attachment_container {
      height: auto;
      max-height: 250px;
      overflow: auto;
      width: 95%;
      padding: 5px;
      min-height: auto;
    }

    .attachment {
      margin-top: 3px;
    }

    .archive_card {
      display: none !important;
    }

    .archive_class_title{
      background: red;
    }

    .popup_list_hide{
      background: white;
      width: 220px;
      height: 100px;
      padding: 10px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      position:absolute; left:30px; top:20px;
      z-index: 100;
      display: none;
    }

    .popup_list_show{
      background: ghostwhite;
      width: 220px;
      height: auto;
      max-height: 600px;
      padding: 10px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      position:absolute; left:30px; top:20px;
      z-index: 100;
      display: block;
    }
    .title-container-menu{
     position:relative;
     display: inline-block;
     margin-left: auto;
     float: right;
     right: 30px;
    }

    .menu_sign i {
      cursor: pointer;
      height: 10px;
      width: 15px;
    }

    .menu_sign i:hover {
      color: white;
    }

    /* archive titme */
    .show_archive_btn {
      background: lavender;
      margin-top: auto;
      padding: 5px;
      text-align: center;

    }

    .list_imenu {
      color: black;
    }

    .list_archive_items {
      margin-top: 10px;
      min-height: 20px;
      height: auto;
      max-height: 600px;
      overflow: auto;
    }
    .archive_item  {
        background: antiquewhite;
        padding: 5px;
        max-width: 100%;
        overflow: hidden;
        margin-top: 2px;
    }
    .backupbtn {
     float: right;
     cursor: pointer;
     color: green;
     font-size: 18px;
    }

    .backupbtn:hover {
      color: lightblue;
    }

    .close_btn_archive{
      font-size: 16px;
      cursor:pointer;
      padding: 4px;
      color: white;
    }
    .checklists-container{
      display: block;
      width: 100%;
      height: auto;
      max-height: 600px;
      min-height: 100px;
      overflow: auto;
    }
    .checklist-container {
      display: block;
      height: auto;
      max-height: 100%;
      padding: 5px;
      width: 97%;
      background: white;
      margin-top: 10px;


    }
    .checklist-child-container-active {
      margin-top: 5px;
      display: flex;
      justify-content: space-between;
      align-items: center;


    }


    .checklist-child-container {
      margin-top: 10px;
      display: flex;
      justify-content: center;
      align-items: center;


    }

    .checklist-box {
      margin-left: 5px;
      padding: 10px;

    }
    .inital_checkbox {
      display: none;
    }



    .hidden_elm {
      display: none;
    }

    .displayflex{
      display: flex;
    }
    .actionicon {
      color:black;
      font-size: 20px;
      margin-right:2px;
      cursor:pointer;
    }

    .step_container .step_title{
       width: 80%;
       max-width: 80%;
       overflow: hidden;
       font-size: 16px;
       align-self: flex-start;
    }

    .step_container input[type='checkbox']{
      cursor: pointer;
    }


    .step_container {
        padding: 10px;
        font-size: 16px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-left: 10px;
        border: 1px solid antiquewhite;
        max-width: 100%;


    }

    .checklist-container h6{
     text-align: left;
     padding: 5px;
     font-size: 16px;
     margin-left: 10px;
     max-width: 90%;
     overflow: hideen;


    }
    .step_container:hover {
      background: lightgray;
    }
    </style>
</head>
<body>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "task-board";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
  }


  /* return card for A list  */

function showCards($conn, $list_id){
    $row1;
    $cardsHTML = '';
    // get all lists
    $sql1 = "SELECT * FROM card WHERE `list_id`='$list_id' ORDER BY card_order ASC";
    $result1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result1) > 0) {
     // show all cords with same order and metdata for a list
     $cardsHTML = '';
     $lastorder = 0;
     while($row1 = mysqli_fetch_assoc($result1)) {

       /* Very Simple Render The PHP Cards Inside their html list check showLists()  !!!
       description title list_id card_order card_id list_title label_color label_title*/
      $cardsHTML .= '
        <div class="card_container ' . $row1['archive_id'] . '" data-card-order="'. $row1['card_order'] .
        '" data-label-title="' . $row1['label_title'] . '" data-label-color="'. $row1['label_color'] .'"
        data-list-id="'. $row1['list_id']  .'" data-list-title="'. $row1['list_title'] .
        '" id="' . $row1['card_container_id'] .'" draggable="true" style="order:' . $row1['card_order'] . ';"
          data-create-string="' . $row1['create_date'] . '"  data-create-timestamp="' . $row1['timestamp'] . '">

          <div class="card task_card" data-label-title="' . $row1['label_title'] . '" data-label-color="' . $row1['label_color'] . '"
          data-text="'. $row1['title'] . '" id="'. $row1['card_id'] .'" data-list-title="' . $row1['list_title'] . '"
          data-list-id="' . $row1['list_id'] . '" data-card-description="' . $row1['description'] . '" data-dute-date="' .
          $row1['due_date'] . '" data-create-timestamp="'. $row1['timestamp'] . '" data-card-dbid="' . $row1['id'] . '"'.
          'data-create-string="' . $row1['create_date'] . '"
          data-card-attachment="' . $row1['card_attachment'] . '">

             <div class="card_metadata"
               data-label-title="'. $row1['label_title'] . '" data-label-color="' . $row1['label_color'] .
               '"data-list-title="' . $row1['list_title'] . '"
               data-list-id="' . $row1['list_id'] . '">

               <div class="card_metadata_container">

                 <div class="label_class
                 card_label ' . $row1['label_color'] . '" data-label-title="' . $row1['label_title'] .
                 '" data-label-color="' . $row1['label_color'] . '" data-list-title="' . $row1['list_title'] .
                 '" data-list-id="' . $row1['list_id'] . '">'. $row1['label_title'] . '
                 </div>

                 <span class="btn model_open card_actions" data-toggle="modal"
                 data-target="#myModal1" data-label-title="' . $row1['label_title'] .  '" data-label-color="' . $row1['label_color'] . '"
                 data-list-id="'. $row1['list_id']  .'" id="model-' . $row1['card_id'] . '" card-id="' . $row1['card_id'] .
                 '" data-list-title="'. $row1['list_title'] .'"
                 data-card-id="' . $row1['card_id']. '" data-card-description="'. $row1['description'] .'" data-card-timestamp="'.
                $row1['timestamp']. '" data-dute-date="'. $row1['due_date'] .'" data-card-dbid="' . $row1['id'] .
                '" data-card-containerid="' . $row1['card_container_id'] . '">
                 &#127915;
                 </span>
            </div>

               <p class="card_text" data-label-title="'. $row1['label_title'] .
               '"data-label-color="'. $row1['label_color'] .'" data-list-title="'. $row1['list_title'] .
               '"data-list-id="'. $row1['list_id'] . '">' . $row1['title'] . '</p>
         </div>
        </div>
          </div>
';
      //$lastorder = intval($row['card_order']) +1;
     }

    } else {
      /* No cards */
     echo "";
    }

    /* mysqli_close($conn);*/
    return $cardsHTML;
  };
function showLists($conn){
  // get all lists
  $sql = "SELECT * FROM list ORDER BY list_order ASC";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
   // output data of each row
   $htmlCode = '';
   $lastorder = 0;
   while($row = mysqli_fetch_assoc($result)) {

     $list_cards = showCards($conn, $row['list_id']);

     /* Very Simple Render The PHP Lists In your code !!! */
    $htmlCode .= '
    <div class="border-default-list drop-list drop-columns card" data-list-title="' . $row['list_title'] . '"
      id="' . $row['list_id'] . '" data-list-id="' . $row['list_id'] . '" data-list-order="' . $row['list_order'] .
      '" data-list-createdate="'. $row['list_createdate'] .
      '"data-list-timestamp="'. $row['list_timestamp'] . '" style="order: 1;">
       <div class="card-body" data-list-title="'.$row['list_title'].'" data-list-id="'. $row['list_id']  . '">
         <div class="card-title" data-list-title="'. $row['list_title']  .'" data-list-id="'. $row['list_id'] .'">' .
         '<!-- List' . $row['list_id'] . 'Title -->' .
         '<span class="list_title_text">'. $row['list_title'] .'</span>' .
         '<span class="menu_sign"><i class="fa fa-ellipsis-h float_right"></i></span></div>' .
         '<!-- Group Of Cards -->' .
         '<div class="cards_container" data-list-title="'. $row['list_title'] .'" data-list-id="' . $row['list_id'] .'">'.
         '<!-- Start Of Cards -->'.
         $list_cards .

         '</div>'.
         '<button class="add_new_card_btn btn" data-list-title="'.$row['list_title'].
         '" data-list-id="'.$row['list_id'].'"><i class="fa fa-plus plus_sign"></i> Add New Card</button>'.
         '</div>'.
         '</div>';
         $lastorder = intval($row['list_order']) +1;

   }
   // add the create new List form
   $htmlCode .= '
   <!-- created New List -->
   <div class="drop-list card" data-list-title="new" id="static_add_list" style="order: '. $lastorder .';">
          <div class="card-body">
                       <button type="button" class="add_new_list_btn btn stretched-link" id="add_list_btn">
                       <i class="fa fa-plus plus_sign pluslist"></i> Add New List</button>
             <form id="add-newlist-form">
              <input class="form-control" placeholder="enter list title.." id="new_list_name" type="text" style="display:none;">
              <input class="btn btn-primary" id="new_list_submit" type="button" style="display:none;" value="Add List">
              <button type="button" id="cancel_add_list" style="display: none;"><i class="fa fa-close" style="font-size: 26"></i></button>
             </form>
          </div>
        </div>
  ';

  } else {
   echo "0 results";
  }

  mysqli_close($conn);
  return $htmlCode;
}





  ?>


<div class="container-fluid main_container">


 <div class="container-fluid listcontainer ">

    <!-- Default List 1 -->


    <!--
    <div class="border-default-list drop-list drop-columns card" data-list-title="To Do"
     id="list-2" data-list-id="list-2" data-list-order="1" data-list-createdate="7/10/2021 8:59 am"
     data-list-timestamp="1625900349123" style="order: 1;">
      <div class="card-body" data-list-title="To Do" data-list-id="list-2">
        <div class="card-title" data-list-title="To Do" data-list-id="list-2">

        -->

          <!-- List Title
          <span class="list_title_text">To Do</span>
          -->
          <!-- List Menu Btn

         <span class="menu_sign"><i class="fa fa-ellipsis-h float_right"></i></span>
        </div>  -->
        <!-- Group Of Cards
      <div class="cards_container" data-list-title="To Do" data-list-id="list-2">
      -->
          <!-- new Card -
        </div>
      -->
              <!-- Cards Container Ends

         <button class="add_new_card_btn btn" data-list-title="To Do" data-list-id="list-2"><i class="fa fa-plus plus_sign"></i> Add New Card</button>
      </div>
    </div>
 -->


 <!-- Card Example -->


 <!--
 <div class="card_container" data-card-order="2" data-label-title="Important" data-label-color="darkblue" data-list-id="list-3"
     data-list-title="Pending" id="card-container-3" draggable="true" style="order:2;">

           <div class="card task_card" data-label-title="Important" data-label-color="darkblue"
           data-text="Card Generated By DB5" id="card-id-3" data-list-title="Pending" data-list-id="list-3" data-card-description="Card Generated By DB5 description">


              <div class="card_metadata" data-label-title="Important" data-label-color="darkblue"
              data-list-title="Pending" data-list-id="list-3">

                <div class="card_metadata_container">

                  <div class="label_class
                  card_label darkblue" data-label-title="Important" data-label-color="darkblue"
                  data-list-title="Pending" data-list-id="list-3">Important
                  </div>

                  <span class="btn btn-primary model_open card_actions" data-toggle="modal"
                  data-target="#myModal1" data-label-title="Important" data-label-color="darkblue"
                  data-list-id="list-3" id="model-card-3" card-id="card-id-3" data-list-title="Pending"
                  data-card-id="card-id-3" data-card-description="Card Generated By DB5 description">
                  <i class="fa fa-edit" data-card-id="card-id-3" id="modeli-card-3"></i>
                  </span>
             </div>

                <p class="card_text" data-label-title="Important" data-label-color="darkblue" data-list-title="Pending" data-list-id="list-3">
                Card Generated By DB5</p>
          </div>
         </div>
           </div>


-->

<!-- Show Lists and Cards FROM DB -->
<?php echo showLists($conn); ?>



  <!-- created New List -->
  <!--
    <div class="drop-list card" data-list-title="new" id="static_add_list">
      <div class="card-body">
                   <button type="button" class="add_new_list_btn btn stretched-link" id="add_list_btn"> <i class="fa fa-plus plus_sign pluslist"></i> Add New List</button>
         <form id="add-newlist-form">
          <input class="form-control" placeholder="enter list title.." id="new_list_name" type="text" style="display:none;">
          <input class="btn btn-primary" id="new_list_submit" type="button" style="display:none;" value="Add List">
          <button type="button" id="cancel_add_list" style="display: none;"><i class="fa fa-close" style="font-size: 26"></i></button>
         </form>
      </div>
    </div>
  -->
 <!-- columns end List -->
</div>
</div>


<div id="form_template_holder">

<div id="new-card-form" class="newCardForm_class" style="display:none;">

            <!--- !!!! Create new Card Form  !!! -->
          <!-- New Card Form -->
         <form id="add-newCard-form">

          <div id="card_form_inputs">
          <textarea class="form-control" placeholder="enter title for this card..."
          id="card_title"  style="display:none;" rows="1"></textarea>


          <input class="btn btn-primary" id="new_card_submit"
          type="button" style="display:none;" value="Add Card">

          <button type="button" id="cancel_add_card"
          style="display: none;"><i class="fa fa-close"
          style="font-size: 26"></i></button>

          <button type="button" id="card_add_menu">
          <i style="font-size:24px" class="fa">&#xf141;</i>
          </button>

          <div  id="label_container_div" class="labels_container" style="display:none;">

           <!-- this for select Card label -->
           <div id="label_group1" class="label_group">

              <!-- Card Text -->
             <textarea class="new_card_textare" class="form-control"
               placeholder="Search Labels.." type="text" id="label_search_text"></textarea>
             <h4 id="selectTitle">Select Label: </h4>

             <!--  Card Default Labels Select -->
             <div class="label_container">
                <div class="label_icon green selectable">
                 <input name="selected_color" value="green" type="radio">
                 <span>Copy Request</span>
                </div>
             </div>

            <div class="label_container">
              <div class="label_icon red selectable">
                <input name="selected_color" value="red" type="radio">
                <span>One more step</span>
                </div>
            </div>


            <div class="label_container">
              <div class="label_icon blue selectable">
                <input name="selected_color" value="blue" type="radio">
                <span>Proiority</span>
              </div>
            </div>

            <div class="label_container">
              <div class="label_icon orange selectable">
                <input name="selected_color" value="orange" type="radio">
                <span>Desgin Team</span>
              </div>
           </div>



            <div class="label_container">
              <div class="label_icon purple selectable">
                <input name="selected_color" value="purple" type="radio">
                <span>Proudct Marketing</span>
              </div>
           </div>



            <div class="label_container">
               <div class="label_icon lightblue selectable">
                 <input name="selected_color" value="lightblue" type="radio">
                 <span>Help</span>
               </div>
           </div>


            <div class="label_container">
              <div class="label_icon lightgreen selectable">
                 <input name="selected_color" value="lightgreen" type="radio">
                 <span>Meeting</span>
              </div>
           </div>


            <div class="label_container selectable">
               <div class="label_icon darkblue selectable">
                 <input name="selected_color" value="darkblue" type="radio">
                 <span>Important</span>
               </div>
            </div>
          </div>

          <!--  card label end ----->


            <!-- Create New Label  Inputs -->

            <div id="add_new_label_container" style="display:none;">

               <div id="label_notes" class="alert alert-success" style="display: none;">x</div>

                <!-- new created Label title -->
                <input id="label_title" class="form-control" placeholder="enter label title...">

               <!-- new created Label color Class Select Single choice radio -->
               <h4 id="selectTitle">Select Label: </h4>

               <!-- Create New Label color class radio example -->
              <div class="colors label_icon green" data-color="green">
               <input name="label_color" value="green" type="radio" style="width:100%;">
              </div>

              <div class="colors label_icon red" data-color="red" >
                <input name="label_color" value="red" type="radio" style="width:100%;">
              </div>

              <div class="colors label_icon orange" data-color="orange" >
                <input name="label_color" value="orange" type="radio" style="width:100%;">
              </div>

              <div class="colors label_icon blue" data-color="blue" >
                <input name="label_color" value="blue" type="radio" style="width:100%;">
              </div>

              <div class="colors label_icon purple " data-color="purple">
                <input name="label_color" value="purple" type="radio" style="width:100%;">
              </div>

              <div class="colors label_icon lightblue" data-color="lightblue">
                <input name="label_color" value="lightblue" type="radio" style="width:100%;">
              </div>

              <div class="colors label_icon lightgreen" data-color="lightgreen">
                <input name="label_color" value="lightgreen" type="radio" style="width:100%;">
              </div>

              <div class="colors label_icon darkblue" data-color="darkblue">
                <input name="label_color" value="darkblue" type="radio" style="width:100%;">
              </div>

           </div>

            <div class="label_btn" id="add_newlabel">Add New Label</div>

            <div class="label_btn" id="add_newlabel_step2" style="display:none;">Submit Label</div>
           <div class="label_btn" id="show_labels_btn" style="display:none;">Cancel</div>
          </div>




         <!-- label container end -->
         <div></div>

</div>
     </form>
</div>
</div>





  <!--  Card Menu Model -->
  <div class="modal fade" id="myModal1" >
    <div class="modal-dialog modal-lg" style="height:auto;">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">
          <i class="title_fa fa fa-window-maximize
"></i><span id="model_card_title"></span></h4>
           <button type="button" class="close" data-dismiss="modal"> &times;</button>
        </div>

<!-- Modal body -->
<div class="modal-body model_main_body" style="height:fit-content">

  <div id="model_body_flex">
    <div id="model_main">
         <div class="container list_title_container">
           <!-- card List It got from card by system and data-list-title  -->
           <span>in list: </span><a id="list-title"><!-- Card title text --></a>
         </div>

      <div class="container">
           <h5>Labels: </h5>
           <div class="container label-containers">
             <!-- it will get the current card label class by setCardMetaData and data-label-color attribute -->
             <div class="model_label">
               <span id="label_title_text">
                 <!--label text updated by setCardMetaData and data-label-title attribute -->

               </span>
             </div>
           </div>


         <div class="description_container">
           <h4><i class="title_fa fa fa-pencil"></i>Description: </h4>
            <!-- text description depend on open button card menu and data-card-id attribute -->
            <p id="ticket_description"></p>

            <!-- New Description textarea input -->
           <textarea id="card_description_input"
             placeholder="add a more detailed description" class="form-control"
           style="height:50px;"></textarea>

           <!-- submit description add button -->
           <button class="btn btn-success" id="description_save" type="button">Save</button>
         </div>

        <!-- Activity and comments section -->
        <div class="activve_container">
          <h4><i class="title_fa fa fa-reorder"></i>CheckList</h4>
          <div class="form-group">
            <label>Add New Check List</label>
            <input type="text" class="form-control" id="checklist_title_input" value="" placeholder="CheckList Title">

            <input type="button" class="btn btn-primary" id="checkList_submit_input1" value="Add CheckList" >

          </div>
          <hr />
          <div class="checklists_container">

          <!--

               <div class="checklist-container">
                <h6>Finish Hello World Task 1</h6>
                  <div class="checklist-child-container-active" id="checklist-child-0">
                   <div>
                     <label for="checkbox-id-0">Hello World Step</label>
                     <input id="checkbox-id-0" type="checkbox" class="checklist-box">
                   </div>
                   <input type="button" class="btn btn-info" value="Add New" id="add_new_check0">
                  </div>
               </div>

 -->


    </div>


        </div>
     </div>
    </div>

    <!-- main end -->

    <!-- aside menu in card menu model contains actions buttons -->
    <div id="model_aside">

      <div class="aside-flex-item">
        <h5 class="aside_title">ADD TO CARD</h5>

      <!-- Aside Model Action Memeber -->


      <!-- search member action -->
      <!-- button -->
      <div class="aside_button" data-menu="member_menu">Members</div>
        <div id="member_menu" class="popupmenu_action_hide">
          <!-- close POPUP menu -->
          <span class="btn btn-danger aside_button_close">Close</span>
          <!-- Search Member Form -->
          <h5 class="popupmenu_action_header">Search Member</h5>
          <form id="search_member_form">
            <div class="form-group">
            <input id="member" name="member" class="form-control" type="email" placeholder="Search Member">
            <button type="submit" class="btn btn-primary margin-top-mid"><i class="fa fa-search margin-right-mid"></i>Search Member</button>
            </div>
          </form>

        </div>
        <!-- Search Member action End -->

      <!-- Labels action -->
      <!-- button -->
      <div class="aside_button" data-menu="labels_menu">Labels</div>

        <div id="labels_menu" class="popupmenu_action_hide">
          <!-- close POPUP menu -->
          <span class="btn btn-danger aside_button_close">Close</span>
          <!-- Search Member Form -->
          <h5 class="popupmenu_action_header">Labels</h5>
          <form id="labels_form">

           <!-- this for select Card label -->
             <!--  Card Default Labels Select -->
           <div id="model_labels_container" class="model_labels">



             <div class="model_label_container green">
                 <input name="model_color" value="green" type="radio">
                 <span class="label_txt">Copy Request</span>
             </div>

            <div class="model_label_container red">
                <input name="model_color" value="red" type="radio">
                <span class="label_txt">One more step</span>
            </div>


            <div class="model_label_container blue">
                <input name="model_color" value="blue" type="radio">
                <span class="label_txt">Proiority</span>
            </div>

            <div class="model_label_container orange">
                <input name="model_color" value="orange" type="radio">
                <span class="label_txt">Desgin Team</span>
           </div>



            <div class="model_label_container purple">
                <input name="model_color" value="purple" type="radio">
                <span class="label_txt">Proudct Marketing</span>
           </div>



            <div class="model_label_container lightblue">
                 <input name="model_color" value="lightblue" type="radio">
                 <span class="label_txt">Help</span>
           </div>


            <div class="model_label_container lightgreen">
                 <input name="model_color" value="lightgreen" type="radio">
                 <span class="label_txt">Meeting</span>
                 <!-- hidden input for custom label -->
           </div>



             <div class="model_label_container darkblue">
                 <input name="model_color" value="darkblue" type="radio">
                 <span class="label_txt">Important</span>
            </div>


         </div>
         <!--  card label end ----->

          <div class="container label_submit_container">

            <div id="model_label_edit_submitcontainer">
          <button type="button" id="edit_label_btn" class="btn btn-primary label_edit">Change Label</button>
          <button  type="button" id="add_custom_label_edit" class="btn btn-light label_edit">Add Custom Label</button>
          </div>

          <div id="flexcontainer_colors" class="label_color_flex_container" style="display:none;">
            <div class="flex-color green active_label" data-color="green"></div>
            <div class="flex-color red" data-color="red"></div>
            <div class="flex-color blue" data-color="blue"></div>
            <div class="flex-color orange" data-color="orange"></div>
            <div class="flex-color purple" data-color="purple"></div>
            <div class="flex-color lightblue" data-color="lightblue"></div>
            <div class="flex-color lightgreen" data-color="lightgreen"></div>
            <div class="flex-color darkblue" data-color="darkblue"></div>
          </div>

          <div id="customlabeledt" style="display:none;">
          <input id="edit_custom_label_title" placeholder="Enter Label Title" class="form-control" maxlength="50" size="50">
          <button type="button" id="add_labelbtn_edit_model" class="btn btn-info">Submit Label</button>
          <button type="button" id="cancel_custom_edit" class="btn btn-danger">Canel</button>
          </div>
          </div>
          </form>
        </div>
        <!-- Labels action End -->



      <!-- CheckList action -->
      <!-- button -->
      <div class="aside_button" data-menu="checklist_menu" >CheckList</div>
        <div id="checklist_menu" class="popupmenu_action_hide">

          <!-- Search CheckList Form -->
          <!-- close POPUP menu -->
          <span class="btn btn-danger aside_button_close">Close</span>
          <h5 class="popupmenu_action_header">CheckList</h5>
          <form id="checklist_form">
            <div class="form-group">
              <input type="text" id="checklist_input"
              class="form-control" placeholder="CheckList">

              <label>Copy Item From...</label>
              <select id="copy_source" class="form-control">
                <option value="none">(none)</option>
              </select>

            </div>
          </form>
        </div>
        <!-- CheckList action End -->

        <!-- Single Button without menu -->
        <div class="aside_button" data-menu="date_menu">Dates</div>
        <div id="date_menu" class="popupmenu_action_hide">
          <span class="btn btn-danger aside_button_close">Close</span>
          <h5 class="popupmenu_action_header">
             Dates
           </h5>
           <div>
             <p>Created At: <span class="badge badge-info" id="card_createdate_model"></span></p>
             <p>Due Date: <span class="badge badge-primary" id="card_duedate_model"></span> </p>
           </div>

          <form id="dates_form">
            <div class="form-group">
              <label for="startdate">Start Date</label>
             <input type="date" class="form-control" name="startdate" value="" id="startdate">
              <label for="enddate">End Date</label>
              <input type="date" class="form-control" name="enddate" value="" id="enddate">
              <button type="button" class="btn btn-primary" id="submit_ticket_date">Submit Due Date</button>
            </div>
          </form>
        </div>

      <!-- Attachment action -->
      <!-- button -->
      <div class="aside_button" data-menu="attachment_menu">
      Attachment</div>
        <div id="attachment_menu" class="popupmenu_action_hide">
          <!-- Search Member Form -->
          <!-- close POPUP menu -->
          <span class="btn btn-danger aside_button_close">Close</span>
          <h5 class="popupmenu_action_header">
             Attachment
           </h5>
          <form id="atachment_form">
            <div class="form-group">
              <label>Upload File</label>
              <input type="file" name="attachment_source" class="form-control" id="attachment_source" placeholder="upload attachment">

              <hr />
              <label>Attach a link</label>
              <input name="attachment_link" type="link" id="attachment_link"
                placeholder="Paste any link here" class="form-control">
              <button id="attach_link_btn" type="submit"
                class="btn btn-light margin-top-mid">Attach</button>
            </div>
          </form>

           <!-- show card attachments -->
            <h5> Card Attachments </h5>
           <div id="attachment_container">

           </div>

        </div>
        <!-- Attachment action End -->


    </div>
     <!-- end of first action section model -->
    <div class="aside-flex-item">
        <div class="aside_button btn-danger" id="arachive_card_btn">Archive</div>
    </div>

  </div>

      </div>
    </div>

<!-- Card Model end -->

</div></div>

</div>

</div>
<script>

window.addEventListener('DOMContentLoaded', (event) => {


// the object store drop and drag data     position: absolute;
let data;
/* Global Variables */
const addNewListContainer = document.getElementById("static_add_list");
const addNewListBtn = document.getElementById("add_list_btn");
const addNewListinput = document.getElementById("new_list_name");
const addNewListsubmit = document.getElementById("new_list_submit");
const canelAddNewList = document.getElementById("cancel_add_list");
const canelAddNewCard = document.getElementById("cancel_add_card");
const newCardDefaultHolder = document.getElementById("form_template_holder");
const newCardForm = document.getElementById("new-card-form");
const newCardMenu = document.getElementById("card_add_menu");
const newCardSubmit = document.getElementById("new_card_submit");
const cardTitle_input = document.getElementById("card_title");
const labelsContainer = document.getElementById("label_container_div");
const labelContainers = document.querySelectorAll("div.label_container");
const customLabelContainer = document.querySelector("div#add_new_label_container");
const labelAlert = document.getElementById("label_notes");
const addNewLabelName = document.getElementById("label_title");
const addNewLabelBtn = document.getElementById("add_newlabel");
let submitCreateLabel = document.getElementById("add_newlabel_step2");
let modelMainContainer = document.querySelector("#model_main");
let modelCardHeader = document.querySelector(".modal-header");
let modelCardTitle = document.getElementById("model_card_title");
let model_description = document.getElementById("ticket_description");
let modelLabel = document.getElementById("label_title_text");
let modelList = document.getElementById("list-title");
let description_input = document.getElementById("card_description_input");
let description_saveBtn = document.getElementById("description_save");
let allExitModelOpen = document.querySelectorAll(".model_open");
let modelLabelsContainerChilds = document.querySelectorAll(".model_label_container");
/* Model Label Custom Color and Edit Color */
let customlabelContainer = document.getElementById("customlabeledt");
let modelLabelsContainer = document.getElementById("model_labels_container");
let submitcontainer_label = document.getElementById("model_label_edit_submitcontainer");
let submitLabelCustomModelBtn = document.getElementById("add_labelbtn_edit_model");
let addcustomLabelBtnMenu = document.getElementById("add_custom_label_edit");
let flex_colors_container = document.getElementById("flexcontainer_colors");
let model_custom_label_title = document.getElementById("edit_custom_label_title");
let addcustomLabelCancel = document.getElementById("cancel_custom_edit");
let flexColorsEditLabel = document.querySelectorAll(".flex-color");
let firstactioveLabel = document.querySelector("#model_labels_container .model_label_container");
/* Container which hold the attachments for all cards dynamic */
let attachmentContainer = document.querySelector("#attachment_container");
let cardDateModel = document.querySelector("#card_createdate_model");
let cardStartDateInput = document.querySelector("#startdate");
let submitDueDateBtn = document.querySelector("#submit_ticket_date");




function hide_check_form_normal(hidebtn){
  let initalId_containerid = hidebtn.getAttribute("data-inital-id");
  let show_BtnId = hidebtn.getAttribute("data-show-id");
  let show_Btn = document.querySelector(`#${show_BtnId}`);
  let initalContainer = document.querySelector(`#${initalId_containerid}`);
  let checboxTitleId = hidebtn.getAttribute("data-checkbox-title");
  let checkboxTtitle = document.querySelector(`#${checboxTitleId}`);
  let textSpanId = hidebtn.getAttribute("data-span");
  let textSpanElm = document.querySelector(`#${textSpanId}`);

  if (!initalContainer){return false;}
  if (!show_Btn){return false;}
  if (!checkboxTtitle){return false;}
  if (!textSpanElm){return false;}

  if (checkboxTtitle.classList.contains('displayflex')){
    checkboxTtitle.classList.remove("displayflex");
  }

  if (!checkboxTtitle.classList.contains("hidden_elm")){
    checkboxTtitle.classList.add("hidden_elm");
  };

  if (textSpanElm.classList.contains("hidden_elm")){
     textSpanElm.classList.remove("hidden_elm");
  }

  if (show_Btn.classList.contains("hidden_elm")){
     show_Btn.classList.remove("hidden_elm");
  }

  if (!hidebtn.classList.contains("hidden_elm")){
    hidebtn.classList.add("hidden_elm")
  }
  checkboxTtitle.value = "";
}



function hide_check_form(event){
  let initalId_containerid = event.target.getAttribute("data-inital-id");
  let show_BtnId = event.target.getAttribute("data-show-id");

  let show_Btn = document.querySelector(`#${show_BtnId}`);
  let initalContainer = document.querySelector(`#${initalId_containerid}`);

  let checboxTitleId = event.target.getAttribute("data-checkbox-title");
  let checkboxTtitle = document.querySelector(`#${checboxTitleId}`);

  let textSpanId = event.target.getAttribute("data-span");
  let textSpanElm = document.querySelector(`#${textSpanId}`);



  if (!initalContainer){return false;}
  if (!show_Btn){return false;}
  if (!checkboxTtitle){return false;}
  if (!textSpanElm){return false;}


  if (checkboxTtitle.classList.contains('displayflex')){
    checkboxTtitle.classList.remove("displayflex");
  }

  if (!checkboxTtitle.classList.contains("hidden_elm")){
    checkboxTtitle.classList.add("hidden_elm");
  };
  checkboxTtitle.value = "";
  if (textSpanElm.classList.contains("hidden_elm")){
     textSpanElm.classList.remove("hidden_elm");
  }
  event.target.classList.add("hidden_elm");

  if (show_Btn.classList.contains("hidden_elm")){
     show_Btn.classList.remove("hidden_elm");
  }
  checkboxTtitle.value = "";
}



function show_check_form(event){
  let initalId_containerid = event.target.getAttribute("data-inital-id");
  let initalContainer = document.querySelector(`#${initalId_containerid}`);

  let hide_BtnId = event.target.getAttribute("data-hide-id");
  let hide_Btn = document.querySelector(`#${hide_BtnId}`);

  let checboxTitleId = event.target.getAttribute("data-checkbox-title");
  let checkboxTtitle = document.querySelector(`#${checboxTitleId}`);

  let textSpanId = event.target.getAttribute("data-span");
  let textSpanElm = document.querySelector(`#${textSpanId}`);




  if (!initalContainer){return false;}
  if (!hide_BtnId){return false;}
  if (!checkboxTtitle){return false;}
  if (!textSpanElm){return false;}


  if (checkboxTtitle.classList.contains("hidden_elm")){
    checkboxTtitle.classList.remove("hidden_elm");
  }

  checkboxTtitle.value = "";

  if (!checkboxTtitle.classList.contains('displayflex')){
    checkboxTtitle.classList.add("displayflex");
  }

/*
  if (initalContainer.classList.contains("inital_checkbox")){
    initalContainer.classList.remove("inital_checkbox");
  }
  */
  if (!textSpanElm.classList.contains("hidden_elm")){
     textSpanElm.classList.add("hidden_elm");
  }

  event.target.classList.add("hidden_elm");
  if (hide_Btn.classList.contains("hidden_elm")){
     hide_Btn.classList.remove("hidden_elm");
  }



}

function addCheckListOption(event){
  let checkBoxId = event.target.getAttribute("data-sytem-id");

  let checkboxTitleInputId = event.target.getAttribute("data-title-id");
  let checkboxTitleInput = document.querySelector(`#${checkboxTitleInputId}`);

  let stepsContainerid = event.target.getAttribute("data-checksteps");
  let stepsContainer = document.querySelector(`#${stepsContainerid}`);



  if (!checkBoxId || !checkboxTitleInput || !stepsContainer ){  return false; }
  if (checkboxTitleInput.value.trim() == ""){ return false; }

  let hideElm = document.querySelector(`#hide_${checkBoxId}`);
  if (!hideElm) {return false;}


  let newCheckOption = document.createElement("div");
  newCheckOption.classList.add("displayflex", "step_container");
  let checkOptionHTML =
  `
   <span class="step_title" data-checkbox-id="checkbox-id-${checkBoxId}">${checkboxTitleInput.value}</span>
   <input name="checkbox_${checkBoxId}" id="checkbox_id-${checkBoxId}" type="checkbox" class="checklist-box">
  `;
  newCheckOption.innerHTML = checkOptionHTML;
  stepsContainer.appendChild(newCheckOption);




   let currenCardId = listTitle.getAttribute("data-card-id");
   let currentCard = document.querySelector(`#${currenCardId}`);

  if (!currentCard){ return false;}

  let currentCardValue = currentCard.getAttribute("data-checklist");
  currentCard.setAttribute("data-checklist", `${currentCardValue}|_._|${checkboxTitleInput.value}`);

  hide_check_form_normal(hideElm);
  checkboxTitleInput.value = "";

  return true;
  /*
    data-title-id="checkbox_title_${lastId}"
          data-sytem-id="${lastId}" data-title="checkbox_title_${lastId}"
          data-checksteps="checklist_steps_${lastId}"

  */
}
let submitCreateCheckList = document.querySelector("#checkList_submit_input1");

function addNewCheckList(event) {

   let checkListsContainer = document.querySelector("div.checklists_container");
   let TargetBtn = event.target;
   let listTitle = document.querySelector("#checklist_title_input");
   if (listTitle.value.trim() === "") {return false;}
   let allCheckLists = document.querySelectorAll("div.checklists_container");

   let currenCardId = listTitle.getAttribute("data-card-id");
   let currentCard = document.querySelector(`#${currenCardId}`);

   if (!currentCard){ return false;}





   let lastId = allCheckLists.length;


   let newCheckContainer = document.createElement("div");
   newCheckContainer.classList.add("checklists_container");
   const containerHTML =
    `
         <div class="checklist-container" data-card-id="${currenCardId}" >
            <h6 class="checklist_title"><mark>${listTitle.value.slice(0, 60)}</mark></h6>
            <div class="checklist_steps" id="checklist_steps_${lastId}">
            </div>
            <div class="checklist-child-container" id="checklist-child-${lastId}"
              data-order="${lastId}">
            <i  class="actionicon hidden_elm fa fa-minus"
            style="" id="hide_${lastId}"
            data-show-id="show_${lastId}" data-inital-id="inital_${lastId}"
            data-checkbox-title="checkbox_title_${lastId}" title="Cancel"
            data-span="show_span_${lastId}">
            </i>

            <i id="show_${lastId}" data-inital-id="inital_${lastId}"
            data-hide-id="hide_${lastId}" class="fa fa-plus actionicon"
            data-checkbox-title="checkbox_title_${lastId}" title="add New Step"
            data-span="show_span_${lastId}"></i>
            <span id="show_span_${lastId}">Add New Step</span>


            <div class="inital_checkbox" id="inital_${lastId}">

            </div>

          <div id="checkbox_title_${lastId}" class="hidden_elm">

          <input id="step_title_${lastId}" class="form-control check_title" type="text" placeholder="Enter Step Title" name="">

          <button type="button" data-title-id="step_title_${lastId}"
          data-sytem-id="${lastId}"
          data-checksteps="checklist_steps_${lastId}"
          id="submit_step${lastId}" data-card-id="${currenCardId}" class="btn btn-primary">Submit</button>
          </div>


        </div>
    `;

    let currentCardCheckList = currentCard.getAttribute("data-checklist");

    if (!currentCardCheckList || currentCardCheckList == ""){
       currentCard.setAttribute("data-checklist", `${listTitle.value}|_._|`);
    } else {
       currentCard.setAttribute("data-checklist", `${currentCardCheckList}|||.|||${listTitle.value}`);
    }



    newCheckContainer.innerHTML = containerHTML;
    checkListsContainer.appendChild(newCheckContainer);

    let showBtn = checkListsContainer.querySelector(`#show_${lastId}`);
    let hideBtn = checkListsContainer.querySelector(`#hide_${lastId}`);
    let addNewOption = checkListsContainer.querySelector(`#submit_step${lastId}`);

    showBtn.addEventListener("click", show_check_form);
    hideBtn.addEventListener("click", hide_check_form);
    addNewOption.addEventListener("click", addCheckListOption);
    listTitle.value = "";

}


submitCreateCheckList.addEventListener("click", addNewCheckList);

let cardArchiveList = [];
let listArchiveArray = [];


function updateArchiveList() {
  cardArchiveList = [];
  let allArchived = document.querySelectorAll(".card_container.archive_card");
  allArchived.forEach( (archiveElement, index)=> {
    let arachive_id = "arachive-" + index;
    let cardTitle = archiveElement.querySelector('.card_text');
    if (cardTitle) {
      cardArchiveList.push({id: arachive_id, title: cardTitle, element:archiveElement});
        }
  });
}


/* Function to check when add new label
for equal text and color label and not allow */

function newLabelAllowed(labeltext, labelcolor) {

  let alllLabelsContainer = document.querySelectorAll(".model_label_container");
  let foundedElm = false;
  alllLabelsContainer.forEach( (labelContainer)=> {
     if (labelContainer.classList.contains(labelcolor) && labelContainer.querySelector("span").innerText.trim() == labeltext.trim()){

       foundedElm = true;

     }
  })
  return foundedElm;
}


/* add active function when click on color flex  */
flexColorsEditLabel.forEach( (colorDiv)=> {
  colorDiv.addEventListener("click", active_color_div);
});



/* add active label class when click colordiv */
function add_active_color_elm(elm) {
  active_color_div_remove();
  elm.classList.add("active_label");
}


function active_color_div(event) {
  active_color_div_remove();
  event.target.classList.add("active_label");
}

/* hide active label class from all active */
function active_color_div_remove() {
  let activeColorLabels = document.querySelectorAll(".flex-color.active_label");
  activeColorLabels.forEach( (active_label, index, array)=> {
    array[index].classList.remove("active_label");
  });
}

function hide_custom_label() {


   if (submitcontainer_label){
     submitcontainer_label.style.display = "block";
   }
   if (addcustomLabelBtnMenu){
     addcustomLabelBtnMenu.style.display = "block";
   }

   if (flex_colors_container){
     flex_colors_container.style.display = "none";
   }
   if (model_custom_label_title){
     model_custom_label_title.value = "";
     model_custom_label_title.style.display = "none";
   }


   if (submitLabelCustomModelBtn){
     submitLabelCustomModelBtn.style.display = "none";
   }
   if (addcustomLabelCancel){
     addcustomLabelCancel.style.display = "none";
   }


   if (model_custom_label_title) {

   /* remove error class*/
   if (model_custom_label_title.classList.contains("errorinput")) {
        model_custom_label_title.classList.remove("errorinput");
   }

   }
   return true;
}

function show_custom_label() {



   if (addcustomLabelBtnMenu){
     addcustomLabelBtnMenu.style.display = "none";
   }
   if (submitcontainer_label){
     submitcontainer_label.style.display = "none";
   }
    if (customlabelContainer){
     customlabelContainer.style.display = "block";
   }
   if (flex_colors_container){
     flex_colors_container.style.display = "flex";
   }
   if (model_custom_label_title){
     model_custom_label_title.style.display = "block";
   }
   if (model_custom_label_title){
     model_custom_label_title.value = "";
   }

    if (model_custom_label_title){
     model_custom_label_title.style.display = "inline";
   }

   if (model_custom_label_title){
     model_custom_label_title.style.display = "inline";
   }

   if (addcustomLabelCancel){
     addcustomLabelCancel.style.display = "inline";
   }

   if (submitLabelCustomModelBtn){
     submitLabelCustomModelBtn.style.display = "inline";
   }

   let custom_label_container = document.querySelector("#add_custom_label_edit");
   if (custom_label_container){
     custom_label_container.style.display = "block";
   }

   firstactioveLabel.querySelector("input").checked = true;

   return true;
}

function addNewModelLabel(){
   if (!model_custom_label_title.value){
     return false;
   }
   let colorClass = document.querySelector(".flex-color.active_label");


   if (colorClass){
      colorClass = colorClass.getAttribute("data-color");
   } else {
      colorClass = "nocolor";
   }

   /* Not allow repeqated label Copy Request green */
   let isRepeatedLabel = newLabelAllowed(model_custom_label_title.value, colorClass);
   if (isRepeatedLabel == true){

     let labelTitleValue = model_custom_label_title.value;
     model_custom_label_title.value = "";
     model_custom_label_title.classList.add("errorinput");
     model_custom_label_title.setAttribute("placeholder",`${labelTitleValue} exist`);
     /* Add On Focus eventListener to back the value when write remove it function call one time event */

     function focusInput(event) {
       /* back every thing when user focus again after error */
       model_custom_label_title.classList.remove("errorinput");
       model_custom_label_title.setAttribute("placeholder",'Enter Label Title');
       model_custom_label_title.value = labelTitleValue;
       model_custom_label_title.removeEventListener("focus", focusInput);

     }
     model_custom_label_title.addEventListener("focus", focusInput);

     return false;
   } else {
    if (model_custom_label_title.classList.contains("errorinput")) {
        model_custom_label_title.classList.remove("errorinput");
     }
   }


   let newDiv = document.createElement("div");
   newDiv.classList.add("model_label_container", colorClass);
   newDiv.innerHTML =
        `
        <input name="model_color" data-label-type="custom"  value="${colorClass}" type="radio" >
        <span class="label_txt" data-label-type="custom" >${model_custom_label_title.value}</span>
        <input data-label-type="custom" class="model_custom_title" placeholder="Label  Title">
        `;

   modelLabelsContainer.appendChild(newDiv);
   hide_custom_label();
}

submitLabelCustomModelBtn.addEventListener("click",addNewModelLabel);
addcustomLabelCancel.addEventListener("click",hide_custom_label);
addcustomLabelBtnMenu.addEventListener("click",show_custom_label);


/* Edit Label */
/* form inputs and buttom */
const edit_label_btn = document.querySelector("#edit_label_btn");
const edit_label_form = document.querySelector("#labels_form");
var edit_label_colors = document.querySelectorAll(".model_label_container");
const model_label_text = document.querySelector("#label_title_text");


/* Remove Open Menu */
function removeOpenPopList() {
  let allShowPop = document.querySelectorAll(".popup_list_show");
  if (allShowPop){
    for (var i=0; i<allShowPop.length; i++){
        allShowPop[i].classList.remove("popup_list_show");
        allShowPop[i].classList.add("popup_list_hide");
        break;

    };

    return true;
  }
  return false;
}

window.addEventListener("click", (event)=> {
   if (!event.target.classList.contains("list_imenu") && !event.target.classList.contains("pop_list_menu") && !event.target.classList.contains("show_archive_btn") && !event.target.classList.contains("backuptext_span")
   && !event.target.classList.contains("backupbtn") ){

     removeOpenPopList();
   }
});

/* UpdateLabelFunction */
/* Function Used to Hide The POP up Menu For Card Model Aside Actions */
function hidePopAction(event){
  let allShownPOP = document.querySelectorAll(".popupmenu_action");
  hide_custom_label();

  if (allShownPOP) {
       allShownPOP.forEach( (popup)=> {

         if (popup.classList.contains("popupmenu_action")){
           popup.classList.remove("popupmenu_action");
         }

         popup.classList.add("popupmenu_action_hide");
         popup.style.display = "none";
    });
    shownPoPs = false;
    return true;
  }
    shownPoPs = false;
    return false;

}
/* Close Hide POPups part */

let allClose = document.querySelectorAll(".close");
let allAsideMenuActionsBtn1 = document.querySelectorAll(".aside_button");
let allAsideMenuActionsBtnClose = document.querySelectorAll(".aside_button_close");

if (allAsideMenuActionsBtnClose){
   allAsideMenuActionsBtnClose.forEach( (asideBtn)=> {
     asideBtn.addEventListener("click", hidePopAction);
  });
}

if (allClose){
   allClose.forEach( (CloseBtn)=> {
     CloseBtn.addEventListener("click", hidePopAction);
  });
}

if (modelMainContainer){
  modelMainContainer.addEventListener("click", hidePopAction);
}


if (modelCardHeader){
  modelCardHeader.addEventListener("click", hidePopAction);
}

let shownPoPs = false;
/* Function Used to show The POP up Menu For Card Model Aside Actions */
function showPopAction(event){
  hidePopAction();
  hide_custom_label();
  let popupMenuId = event.target.getAttribute("data-menu");
  let popupMenuElm = document.getElementById(popupMenuId);
  if (popupMenuElm) {
    popupMenuElm.classList.add("popupmenu_action");
    popupMenuElm.style.display = "block";
    if (popupMenuElm.classList.contains("popupmenu_action_hide")){
      popupMenuElm.classList.remove("popupmenu_action_hide");
    };

    shownPoPs = true;
    return true;
  };
  return false;

};

allAsideMenuActionsBtn1.forEach( (asideBtn)=> {
  asideBtn.addEventListener("click", showPopAction);
});


let stepOneContiner = document.getElementById("label_group1");
let stepTwoContiner = document.getElementById("add_new_label_container");
let showLabelsBtn = document.getElementById("show_labels_btn");


//labelsContainer.style.display = "block";


let labelsGroup = document.getElementById("label_group1");


const avail_colorsClass =  ["green","red","blue","mainorange", "purple","lightblue","lightgreen","darkblue"];

const addNewLabelContainer = document.getElementById("add_new_label_container");



const allLabelsColors = document.querySelectorAll(".colors");





function newLabelSubmit(data){

   /* This step Check IF New Label Title and color Selected exist or not*/
   let existingLabelsTitls = document.querySelectorAll(".label_icon.selectable");
   let equalFound = false;
   if (existingLabelsTitls){
     existingLabelsTitls.forEach((labelText)=>{

        if (labelText.querySelector("input").value == data.color) {

          /* If There A new Label with same title and color this new label will not created */
          if (labelText.innerText.trim() == data.title.trim()){
             equalFound = true;
              /* console.log("found Label With same Color and title" + equalFound); */
          } else {
             equalFound = false;
          }

        }

     });

     }



  /* Send card data to popup model */


   /* if Titiel with same color exist show alert message an don't submit */

   if (equalFound){
      labelAlert.style.display = "block";
      labelAlert.innerText = "Submit Falid: A Label With Same Title And Color Found";
      return false;
   } else {
      labelAlert.style.display = "none";
      labelAlert.innerText = "";
   }


  // alert(labelText.querySelector("input").value);
   /* Add New Label Submit */
   let color_class = data.color;
   let label_title = data.title;
   let container = document.createElement("div");
   let label = document.createElement("div");
   // create input for select color label

   let newspan = document.createElement("span");
   let labelCheck = document.createElement("input");
   labelCheck.setAttribute("name", "selected_color");
   labelCheck.setAttribute("type", "radio");
   labelCheck.setAttribute("value", color_class);
   labelCheck.classList.add("customlabel");
   label.classList.add("label_container");
   label.classList.add("label_icon", color_class, "selectable");



   /* Important Add data-label-title to checkbox and color  */
   labelCheck.setAttribute("data-label-title", label_title);
   labelCheck.setAttribute("data-label-color", color_class);
   label.setAttribute("data-label-color", color_class);
   label.setAttribute("data-label-title", label_title);

   newspan.appendChild(labelCheck);
   newspan.innerHTML = label_title;
   label.appendChild(labelCheck);
   label.appendChild(newspan);

   container.appendChild(label);
   labelsGroup.appendChild(container);
   labelMenuLevel1();
   //labelContainers.style.display ="block";
   setCardsMetaData();
   // set hide labels to true to show level 1 menu
   labelAlert.style.display = "none";
   showLabelsBtn.style.display = "none";
   hidelabelsContainer(true);


};

/* Add New Card submit Handle function */
function submitNewCard(event){


          // get the data and append the card
          let card_parentTitle = event.target.getAttribute("data-list-title");
          let card_parentContainerId = event.target.getAttribute("data-list-id");
          let card_parentContainer = document.getElementById(card_parentContainerId);
          let cardsContainer = document.querySelector(`#${card_parentContainerId} .cards_container`);
          let customLabel = true;

          // New Card Submit Data
          let cardTitle = cardTitle_input.value;
          let customlabel = false;

          let card_label_color = "";
          let card_label_title = "";
          if (cardTitle.trim() == ""){
            return false;
          }
          let cardCheckboxs = document.querySelectorAll("#label_group1 .label_icon input[name='selected_color']");
          for (var i=0; i<cardCheckboxs.length; i++) {
             if (cardCheckboxs[i].checked){
                card_label_color = cardCheckboxs[i].value;
                card_label_title = cardCheckboxs[i].getAttribute("data-label-title");
                cardCheckboxs[i].checked = false;

                if (cardCheckboxs[i].classList.contains("customlabel")){
                   customlabel = true;
                }

                break;
             }
          }



          let allCards = cardsContainer.querySelectorAll("div.card_container");
          let last_order = 0;
          if (allCards){
             last_order = allCards.length;
          }

          /* Check If it Custom Color */


          // All New Card Data
          let newCardData  = {title:cardTitle,order: last_order, label_title:card_label_title, label_color:card_label_color,list_id:card_parentContainerId, listTitle: card_parentTitle, customlabel: customlabel};

          //alert(card_parentContainer);
          //card_parentContainer.querySelector(".card-body").appendChild(newCardForm);
          cardsContainer.appendChild(todoSystem.taskCardTemplate(last_order, newCardData));

          // empty the input
          cardTitle_input.value = "";

          setCardsMetaData();
          return true;
}


newCardSubmit.addEventListener("click", submitNewCard);
function addNewLabel(){

   // step1 hide the card label select list

   labelsGroup.style.display = "none";
   addNewLabelContainer.style.display = "block";
   // hide first step btn
   addNewLabelBtn.style.display = "none";
   // show second submit btn
   submitCreateLabel.style.display =  "block";

   showLabelsBtn.style.display = "block";
   showLabelsBtn.addEventListener("click", ()=> {
       showLabelsBtn.style.display = "none";
       hidelabelsContainer(true);
       return true;
   });
   labelsContainer.style.display = "block";
   customLabelContainer.style.display = "block";
   // get the values
   current_step = "two";
   // update the system and html input with data-attributes
   setCardsMetaData();
   return true;

}



addNewLabelBtn.addEventListener("click", addNewLabel);

let labelOpen = false;
let currentStep = false;

function hidelabelsContainer(set=false){
    if (set == true){
      addNewLabelName.value = "";
            /* Remove selected checked*/
           let cardCheckboxs = document.querySelectorAll("#add_new_label_container .label_icon input[name='label_color']");

         for (var i=0; i<cardCheckboxs.length; i++) {
            if (cardCheckboxs[i].checked){
                   cardCheckboxs[i].checked = false;
                   break;
            }
         }
      }

   if (labelOpen === false || set == true) {
      currentStep = "one";
      labelsContainer.style.display = "block";
      stepOneContiner.style.display = "block";
      customLabelContainer.style.display = "none";
      addNewLabelBtn.style.display = "block";
      submitCreateLabel.style.display =  "none";

      labelOpen = true;
   } else {

      labelsContainer.style.display = "none";
      labelAlert.style.display = "none";
      showLabelsBtn.style.display = "none";
      labelOpen = false;
   }

}



function labelMenuLevel1(){

   if (labelOpen === true) {


      labelsGroup.style.display ="block";
      addNewLabelBtn.style.display = "block";
      submitCreateLabel.style.display = "none";
      labelOpen = true;
   }
  return false;

}

function hideLabels(){

   if (labelOpen === true) {
      labelsContainer.style.display = "none";
      labelOpen = false;
   }

}


newCardMenu.addEventListener("click", hidelabelsContainer);


/* Helper Functions */

function formatAMPM(date) {
    // function return hours pm/am formated
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    var fixedHours = hours <= 9 ? '0' + hours : hours;
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var strTime = fixedHours + ':' + minutes + '' + ampm;
    return strTime;
  }

 let heightBreak = false;
 let lastTarget;
  let lastTargetContainer;

 function allowDrop(ev) {
   ev.preventDefault();
   let mainColor = "lightgray";
   let secondColor = "lightblue";
   let activeTarget = ev.target;

   /* Controll Before Drop */
   // here we check for the list id if it diffrent than the dragged list id add the animation


   let target_list_id = ev.target.getAttribute("data-list-id");
   let dragedElm = document.getElementById(data);
   let dragedElm_list_id = dragedElm.getAttribute("data-list-id");

   if (!dragedElm) {
     return false;
   };
   if (!dragedElm_list_id) {
     return false;
   };

   // if not found target_list_id target is not valid
   if (!ev.target.getAttribute("data-list-id") || !dragedElm.getAttribute("data-list-id")){
      return false;
   }

   if (target_list_id != dragedElm_list_id) {

     // in this step we add active to new list we need to remove old active

     let targetList = document.getElementById(target_list_id);
     let targetListCardsContainer = targetList.querySelector("div.cards_container");
     if (!targetList){
       return false;
     }
     if (!targetListCardsContainer){
       return false;
     }


     let old_active = document.querySelectorAll("div.active_drop_list");
     if (old_active.length > 0){

         old_active.forEach( (oldactive)=> {
            oldactive.classList.remove("active_drop_list");
         });
     };

     targetList.classList.add("active_drop_list");


     // this part for height of dropped effect
   /*  if (lastTarget != targetList){*/

       if (lastTargetContainer){
         lastTargetContainer.style.height = "auto";
       }

       lastTargetContainer = targetListCardsContainer;
       lastTarget = targetList;
       let containerHeight = targetListCardsContainer.offsetHeight;
       targetListCardsContainer.style.height = containerHeight  + dragedElm.offsetHeight + "px";
     /*};*/

     /* this check if the height effect not set for any reason it will set it*/

     /* console.log("You are going to move the element to a new menu, " + target_list_id); */
     setCardsMetaData();
     return true;
   }

 };

 function drag(ev) {

       data = ev.target.id;
 };

/* the third event reset effects to avoid filure drops */
function dragLeave(event) {
  if ( event.target.classList.contains("drop-columns") ) {

     if (lastTargetContainer){
     lastTargetContainer.style.height = "auto";
     console.log('yes');
     }

     /* remove active class dropend */
     let old_active = document.querySelectorAll("div.active_drop_list");
     if (old_active.length > 0){

         old_active.forEach( (oldactive)=> {
            oldactive.classList.remove("active_drop_list");
         });
     }
  }

}


 function drop(ev) {
   ev.preventDefault();
   var get_list_parent = ev.target;
   let dragentElement = document.getElementById(data);
   let checkDropContainer = get_list_parent.classList.contains("drop-columns");

   let loopIndex = 0;
   // search for parent
   while(checkDropContainer != true){
      get_list_parent = get_list_parent.parentElement;
      checkDropContainer =  get_list_parent.classList.contains("drop-columns");
      if (checkDropContainer) {
        loopIndex += 1;
        // get the cards_container of that list
        let target_cards_container = get_list_parent.querySelector("div.cards_container");
        //console.log("found list container", get_list_parent.className, loopIndex);

      /* get heighestorder remove this for remove yellow */
      let current_list = document.getElementById(target_cards_container.getAttribute("data-list-id"));

      if (
      document.getElementById(target_cards_container.getAttribute("data-list-id")).querySelector("div.cards_container")
      ) {

      dragentElement.setAttribute("data-card-order", document.getElementById(target_cards_container.getAttribute("data-list-id")).querySelector("div.cards_container").querySelectorAll(".card_container").length)

     dragentElement.style.order = document.getElementById(target_cards_container.getAttribute("data-list-id")).querySelector("div.cards_container").querySelectorAll(".card_container").length;

     /* return back the cards_container height to auto drop effects */
     if (lastTargetContainer){
       lastTargetContainer.style.height = "auto";
     }


           /* remove active class dropend */
     let old_active = document.querySelectorAll("div.active_drop_list");
     if (old_active.length > 0){

         old_active.forEach( (oldactive)=> {
            oldactive.classList.remove("active_drop_list");
         });
     }


      } else {

        return false
      }

       target_cards_container.appendChild(dragentElement);
       setCardsMetaData();
        break;
      };
      if (loopIndex > 5000) {
        console.log("loop stoped Max timeout passed");
        break;
      }
      loopIndex += 1;
   }

   data = null;
   return true;
 }

   function clearDropEffect() {
     lastTargetContainer = null;
     if (lastTargetContainer){
     lastTargetContainer.style.height = "auto";
     //console.log('yes');
     };

     /* remove active class dropend */
     let old_active = document.querySelectorAll("div.active_drop_list");
     if (old_active.length > 0){

         old_active.forEach( (oldactive)=> {
            oldactive.classList.remove("active_drop_list");
         });
     };
     return true;

  }

  /* Classes  */

/* New List Class */
class TodoList {
  constructor(title) {
    this.title = title;

  }

  listTemplate() {

    // list create timestamp
    let date_obect = new Date();
    let date = `${date_obect.getMonth()+1}/${date_obect.getDate()}/${date_obect.getFullYear()}`;
    let dateString = `${date} ${formatAMPM(date_obect)}`;
    let createTimeStamp = date_obect.getTime();

    // get last order
    const getAllLists = document.querySelectorAll(".drop-columns");
    let listOrder = 0;
    if (getAllLists){
       listOrder = getAllLists.length;
    }
    // create List Container


    let listContainer = document.createElement("div");
    listContainer.classList.add("drop-list", "drop-columns","card");
    listContainer.setAttribute("data-list-title", this.title);
    listContainer.setAttribute("data-list-createdate", dateString);





    // Created timestamp to send to server
    listContainer.setAttribute("data-list-timestamp", createTimeStamp);
    let listBody = document.createElement("div");
    listBody.classList.add("card-body");
    let listTitle = document.createElement("div");
    listTitle.classList.add("card-title");
    listTitle.classList.add("title-container");
    let listTitleText = document.createElement("span");
    listTitleText.innerText = this.title;
    let MenuIconContainer = document.createElement("span");
    MenuIconContainer.classList.add("menu_sign");
    let MenuIcon = document.createElement("i");
    MenuIcon.classList.add("fa", "fa-ellipsis-h", "float_right");
    let groupCardsContainer = document.createElement("div");
    groupCardsContainer.classList.add("cards_container");
    let addNewCardBtn = document.createElement("button");
    addNewCardBtn.classList.add("add_new_card_btn","btn");
    addNewCardBtn.innerHTML = '<i class="fa fa-plus plus_sign"></i> Add New Card';







    // append New Elements
    MenuIconContainer.appendChild(MenuIcon);

    listTitle.appendChild(listTitleText);
    listTitle.appendChild(MenuIconContainer);

    listBody.appendChild(listTitle);
    listBody.appendChild(groupCardsContainer);
    listBody.appendChild(addNewCardBtn);
    listContainer.appendChild(listBody);

    // set the metdadata for list
    listContainer.setAttribute("data-list-order", listOrder);
    listContainer.style.order = listOrder;
    // update the add new button order
    addNewListContainer.style.order = listOrder +1;


     // draggable="true" ondragstart="drag(event)"
    // add the eventListeners for drop
    //listContainer.addEventListener("drop", drop);

    // append the new list before the add new list btn
    let parentDiv = document.getElementById("static_add_list").parentNode;
    let static_addListElement = document.getElementById("static_add_list");
    parentDiv.insertBefore(listContainer, static_addListElement);
    return listContainer;

  }
 }



/* Objects */

// vairable contains the last clicked Add Btn
let isCreateCardOpen = false;
let todoSystem = {
   boardHeader : "Client 19",
   /* DB/Server Must provide the CreatedTime for Board */
   borderTimeStamp: "1625900349123",
   borderTimeString: "7/10/2021 8:59 am",
   excelIcon: 'https://iconarchive.com/download/i98359/dakirby309/simply-styled/Microsoft-Excel-2013.ico',
   wordIcon: 'https://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/file-word-icon.png',
   textIcon: 'https://icon-library.com/images/small-file-icon/small-file-icon-6.jpg',
   imageIcon: 'https://freepngimg.com/thumb/graphic_design/55592-3-gallery-free-hq-image.png',
   pdfIcon: 'https://icons.iconarchive.com/icons/paomedia/small-n-flat/512/file-pdf-icon.png',
   gifIcon: 'https://icons.iconarchive.com/icons/untergunter/leaf-mimes/512/gif-icon.png',
   defaultIcon: 'https://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/file-empty-icon.png',
   listMenuOpen: false,

   newCardBtn: null,
   createTimeList: () => {
     /* timestamp */
     let date_obect = new Date();
     let timeStamp = date_obect.getTime();

     /* formated time */
     let date = `${date_obect.getMonth()+1}/${date_obect.getDate()}`;
     date += `/${date_obect.getFullYear()}`;
     let timeString = `${date} ${formatAMPM(date_obect)}`;

     return {string: timeString, stamp: timeStamp};

   },
   createListEditOpen: (event)=> {
       /* Here We Send JS Request To Create new Menu */
       event.target.style.display = "none";
       addNewListinput.style.display = "block";
       addNewListsubmit.style.display = "inline";
       canelAddNewList.style.display = "inline";
       addNewListContainer.style.background = "lightgray";
       return true;
   },
   createListEditClose: (event)=> {
       addNewListinput.style.display = "none";
       addNewListinput.value = "";
       addNewListsubmit.style.display = "none";
       canelAddNewList.style.display = "none";
       addNewListBtn.style.display = "block";
       addNewListContainer.style.background = "hsla(0,0%,100%,.24)";
       return true;
   },
   addTodoMenu: (event)=> {
       event.preventDefault();

       // add only list if title not empty
       let listTitle = addNewListinput.value.trim();
       if (listTitle != ""){
         // Create new listMenu Template;
         let todoList = new TodoList(listTitle);
         // create new Todo List
         todoList.listTemplate();
         todoSystem.createListEditClose();
         setCardsMetaData();
         return true;
       };
       return false;
   },
   createCardClose: ()=> {

         if (!todoSystem.newCardBtn){
           return false;
         };



         // show title input
         newCardForm.querySelector("#card_title").style.display = "none";
         newCardForm.querySelector("#card_title").value = "";
         // show form buttons
         newCardForm.querySelector("#new_card_submit").style.display = "none";
         newCardForm.querySelector("#cancel_add_card").style.display = "none";
         newCardMenu.style.display = "none";
         hideLabels();
         todoSystem.newCardBtn.style.display = "inline";
         isCreateCardOpen = false;

         labelAlert.style.display = "none";
         showLabelsBtn.style.display = "none";

         /* Remove selected checked New Label*/
      let cardCheckboxs = document.querySelectorAll("#add_new_label_container .label_icon input[name='label_color']");


      for (var i=0; i<cardCheckboxs.length; i++) {
         if (cardCheckboxs[i].checked){
                cardCheckboxs[i].checked = false;

                break;
         }
      };

      /* remove selected Color labels */

let cardCheckboxs1 = document.querySelectorAll("#label_group1 .label_icon input[name='selected_color']");

         for (var n=0; n<cardCheckboxs1.length; n++) {

            if (cardCheckboxs1[n].checked){
                   cardCheckboxs1[n].checked = false;
                   break;
            }
         };


      return true;

   },
   createCardOpen: (title, cid)=> {



        isCreateCardOpen = true;

        //todoSystem.newCardBtn = targetList.querySelector("button.add_new_card_btn");
         /* Here We Send JS Request To Create new Menu */
                 // new task title
         todoSystem.creatCardBtn == true;
         newCardForm.querySelector("#card_title").setAttribute("data-list-title", title);
         newCardForm.querySelector("#card_title").setAttribute("data-list-id", cid);
         newCardForm.querySelector("#new_card_submit").setAttribute("data-list-title", title);
         newCardForm.querySelector("#new_card_submit").setAttribute("data-list-id", cid);
         newCardForm.querySelector("form").setAttribute("data-list-title", title);
         newCardForm.querySelector("form").setAttribute("data-list-id", cid);
         newCardForm.setAttribute("data-list-title", title);
         newCardForm.setAttribute("data-list-id", cid);

         // show title input
         newCardForm.querySelector("#card_title").style.display = "block";
         // show form buttons
         newCardForm.querySelector("#new_card_submit").style.display = "inline";
         newCardForm.querySelector("#cancel_add_card").style.display = "inline";
         newCardMenu.style.display = "inline";
         todoSystem.creatingCard = true;
         return newCardForm;


   },
   generateAttachments: (attachString, attachContainerElm)=> {
     /* convert attachments urls to files elemnts */
     let attachFormatedString = attachString.trim();
     let attachmentsArray = attachFormatedString.split(",|");
     let attachFragment = document.createDocumentFragment();
     if (!attachmentsArray){
       return false;
     }

     attachmentsArray.forEach( (attach)=> {
       let attachUrl = attach.trim();
       let attachmentContainer = document.createElement("div");
       let AttachUrl = document.createElement("a");
       let AttachImage = document.createElement("img");
       let AttachTitle = document.createElement("span");

       attachmentContainer.classList.add("attachment");
       AttachUrl.classList.add("attachment_url");
       AttachImage.classList.add("attach_icon");
       AttachTitle.classList.add("attach_title");
       AttachUrl.setAttribute("href", attach);
       AttachImage.setAttribute("width", "40");
       AttachImage.setAttribute("height", "40");


       AttachImage.setAttribute("src", "https://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/file-empty-icon.png");

       /* SHow file name only without dot */
       let fileNameOnly = attach.split(".")[0];

       let fileExtension = attach.split(".")[1];
       if (fileExtension){
         let formatedExtension = fileExtension.trim().toLowerCase();
         /* Add the file extension to the img, url */
         attachmentContainer.setAttribute("data-type", formatedExtension);
         AttachUrl.setAttribute("data-type", formatedExtension);
         AttachImage.setAttribute("data-type", formatedExtension);


       /* Set Image To attachments Element depend on kown extensions */
         if (formatedExtension === "png" || formatedExtension === "jpg" ||
             formatedExtension === "tiff" ||
             formatedExtension === "tif" || formatedExtension === "eps" ||
             formatedExtension === "raw" || formatedExtension === "SVG") {
             AttachImage.setAttribute("src", todoSystem.imageIcon);
         } else if (formatedExtension === "pdf" || formatedExtension === "ps") {
             AttachImage.setAttribute("src", todoSystem.pdfIcon);
         } else if (formatedExtension === "txt" || formatedExtension === "odt") {
             AttachImage.setAttribute("src", todoSystem.textIcon);
         } else if (formatedExtension === "docx" || formatedExtension === "docm" ||                                 formatedExtension === "doc" || formatedExtension === "dot") {
             AttachImage.setAttribute("src", todoSystem.wordIcon);
         } else if (formatedExtension === "csv" || formatedExtension === "xlsx" ||                                   formatedExtension === "xlsb" || formatedExtension === "xlsm") {
             AttachImage.setAttribute("src", todoSystem.excelIcon);

          } else if (formatedExtension === "gif") {

             AttachImage.setAttribute("src", todoSystem.gifIcon);

          } else {
          /* textIcon  wordIcon imageIcon defaultIcon */

         }

       }

       if (fileNameOnly){
         AttachTitle.innerText = fileNameOnly;
       } else {
         AttachTitle.innerText = attach;
       }





       AttachUrl.appendChild(AttachImage);
       AttachUrl.appendChild(AttachTitle);
       attachmentContainer.appendChild(AttachUrl);
       attachFragment.appendChild(attachmentContainer);

     });

     if (attachContainerElm){
       attachContainerElm.appendChild(attachFragment);
     }

   },
   submitDueDate: (event)=> {
     let endDate = document.querySelector("#enddate");
     let SelectedCardId = event.target.getAttribute("data-card-id");
     let modeldueDateString = document.querySelector("#card_duedate_model");
     let selectedCard = document.querySelector(`#${SelectedCardId}`);

     if (!modeldueDateString){
       return false;
     }
     if (!endDate.value) {
       return false;
     }
     if (selectedCard && endDate.value){
        selectedCard.setAttribute("data-dute-date", endDate.value);
        modeldueDateString.innerText = endDate.value;
        setCardsMetaData();
     }

   },
   openCardModel: (event)=> {
      hidePopAction();
      let modeldueDateString = document.querySelector("#card_duedate_model");
      let endDateCard = document.querySelector("#enddate");
      let card_title = document.getElementById("model_card_title");
      if (attachmentContainer.innerHTML != ""){attachmentContainer.innerHTML = "";}
      if (cardDateModel.innerText != ""){cardDateModel.innerText = "";}
      if (cardStartDateInput){cardStartDateInput.value = ""}
      if (submitDueDateBtn){submitDueDateBtn.setAttribute("data-card-id", "");}
      if (modeldueDateString){ modeldueDateString.innerText = "";};
      if (endDateCard.value) {endDateCard.value = "";};


      if (endDateCard.value) {
         endDateCard.value = "";
      }


      if (modelCardTitle) {
         modelCardTitle.innerText = "";

      }


      if (modelCardTitle){
      if (modelCardTitle.classList.contains("archive_class_title")){
        modelCardTitle.classList.remove("archive_class_title");
      }
      }




      let openBtn = event.target;
      let popupTemplate = document.getElementById("myModal1");
      let listId = event.target.getAttribute("data-list-id");
      let parentList = document.getElementById(listId);
      let listTitle = parentList.getAttribute("data-list-title");
      let labelText = openBtn.getAttribute("data-label-title");
      let labelClass = openBtn.getAttribute("data-label-color");
      let currentCard = document.getElementById(openBtn.getAttribute("data-card-id"));
      let archiveBtnModel = document.querySelector("#arachive_card_btn");
      let cardDueDate = openBtn.getAttribute("data-dute-date");


      if (cardDueDate && endDateCard){
         endDateCard.value = cardDueDate;

         if (modeldueDateString) {
           modeldueDateString.innerText = cardDueDate;
         }
      }

      let cardContainer = document.querySelector(`#${openBtn.getAttribute("data-card-containerid")}`);
      if (cardContainer){

        if (archiveBtnModel) {
           archiveBtnModel.setAttribute("data-card-container", openBtn.getAttribute("data-card-containerid"));
         };
      } else {
        if (archiveBtnModel){
          archiveBtnModel.setAttribute("data-card-container", "");
        }


      }


      let checkListsContainer = document.querySelector("#checklist_title_input");
      if (checkListsContainer) {
        checkListsContainer.setAttribute("data-card-id", openBtn.getAttribute("data-card-id"))
      }

      if (submitDueDateBtn && currentCard.id){
        submitDueDateBtn.setAttribute("data-card-id", currentCard.id);
        submitDueDateBtn.addEventListener("click", todoSystem.submitDueDate);
      }
      let cardDate = openBtn.getAttribute("data-card-date");

      if (cardDateModel){
        cardDateModel.innerText = cardDate;

      }


       if (cardDate && cardStartDateInput) {

         //cardStartDateInput.value = cardDate;
         let cardDateFormated = cardDate.split(" ")[0].trim();
         cardStartDateInput.value = cardDateFormated;

        /* alert(cardStartDateInput.getAttribute("value"))*/
       }

      /* Handle Selected Card Attachments render */
      let CardAttachments =  openBtn.getAttribute("data-card-attachment");
      if (CardAttachments && attachmentContainer){
         todoSystem.generateAttachments(CardAttachments, attachmentContainer);
      }

      if (currentCard){

      let currentCardText = currentCard.getAttribute("data-text");
       modelCardTitle.innerText = currentCardText;
      } else {

        modelCardTitle.innerText = "";
      }


      popupTemplate.setAttribute("data-list-title", listTitle);
      popupTemplate.setAttribute("data-list-id", listId);


      let modelLabelDiv = document.querySelector("#model_main .model_label");
      modelLabelDiv.className = "";
      modelLabelDiv.classList.add('model_label');
      if (modelLabelDiv && labelClass){
         //modelLabelDiv.classList.add("model_label");

         modelLabelDiv.classList.add(labelClass);
         /* Label text */
         document.getElementById("label_title_text").innerText =labelText;

      } else {

         modelLabelDiv.className = "";
         modelLabelDiv.classList.add("model_label");
         document.getElementById("label_title_text").innerText = "";
      }



      modelList.innerText = listTitle;
      description_saveBtn.setAttribute("data-card-id", openBtn.getAttribute("data-card-id"));
      description_saveBtn.setAttribute("data-openbtn-id", openBtn.getAttribute("id"));

      if (openBtn.getAttribute("data-card-description")){
          model_description.innerText = openBtn.getAttribute("data-card-description");
      } else {
          model_description.innerText = "";
      }






      let btnId =  event.target.getAttribute("id");
      openBtn.setAttribute('data-target',"#myModal1");
      popupTemplate.setAttribute("data-eventtarget-id", btnId);

   },
   /* Create New Card Template all task cards data */
   taskCardTemplate(last_order, newCardData) {

      // task stores like this in db
      let newCardContainer = document.createElement("div");
      newCardContainer.classList.add("card_container");

      let newCard = document.createElement("div");
      newCard.classList.add("card","task_card");



      // ticket create time
      let ticketDate = new Date();
      let ticketStringDate = formatAMPM(ticketDate);

      let TicketMonth = ticketDate.getMonth() + 1;
      let ticketMonthFormated = TicketMonth <= 9 ? "0" + TicketMonth : TicketMonth;
      let TicketDay = ticketDate.getDate();
      TicketDay = TicketDay <= 9 ? "0" + TicketDay : TicketDay;

      let ticketDatePart = ticketDate.getFullYear() + "-" + ticketMonthFormated + "-" + TicketDay;
      ticketStringDate = ticketDatePart + " " + ticketStringDate;
      let ticketTimeStamp = ticketDate.getTime();

      // set the card order this also will be saved in db
      newCardContainer.setAttribute("data-card-order", last_order);

      // set the label title and color to card
      newCardContainer.setAttribute("data-label-title", newCardData.label_title);
      newCardContainer.setAttribute("data-label-color", newCardData.label_color);
      newCardContainer.setAttribute("data-create-string", ticketStringDate);
      newCardContainer.setAttribute("data-create-timestamp", ticketTimeStamp);
      newCardContainer.style.order = last_order;

      newCard.setAttribute("data-label-title", newCardData.label_title);
      newCard.setAttribute("data-label-color", newCardData.label_color);
      newCard.setAttribute("data-create-string", ticketStringDate);
      newCard.setAttribute("data-create-timestamp", ticketTimeStamp);

      // metadata
      let metadata = document.createElement("div");
      let iconsContainer = document.createElement("div");
      let cardlabel = document.createElement("div");
      let cardtext = document.createElement("p");
      let icon_containers = document.createElement("div");
      let modelBtn = document.createElement("span");


      /* Add data-label-type to model-btn and label incase of custom label db mission */
      if (newCardData.customlabel == true){
        modelBtn.setAttribute("data-label-type", "custom");
        cardlabel.setAttribute("data-label-type", "custom");
      }
      /* send the card id  and data to the model to be listed*/
      modelBtn.addEventListener("click", todoSystem.openCardModel);
      modelBtn.classList.add("btn", "model_open");
      modelBtn.setAttribute("data-toggle", "modal");
      modelBtn.setAttribute('data-target',"");
      modelBtn.innerHTML = '&#127915;';


      let labelcolorClass = newCardData.label_color;
      if (labelcolorClass){
        cardlabel.classList.add("label_class");
      }


      if (labelcolorClass.trim() == ""){

        labelcolorClass = "nocolor";
        cardlabel.classList.add("label_class");

      }
      metadata.classList.add("card_metadata");
      cardlabel.classList.add("card_label");
      cardlabel.classList.add(labelcolorClass);

      cardtext.classList.add("card_text");
      modelBtn.classList.add("card_actions");

      iconsContainer.classList.add("card_metadata_container");

      /* add the label title */
      cardtext.innerText = newCardData.title;
      modelLabel.innerText = newCardData.label_title;
      newCard.setAttribute("data-text", newCardData.title);
/* asdasdas here1 */

      metadata.setAttribute("data-label-title", newCardData.label_title);
      metadata.setAttribute("data-label-color", newCardData.label_color);
      cardlabel.setAttribute("data-label-title", newCardData.label_title);
      cardlabel.setAttribute("data-label-color", newCardData.label_color);
      cardtext.setAttribute("data-label-title", newCardData.label_title);
      cardtext.setAttribute("data-label-color", newCardData.label_color);
      modelBtn.setAttribute("data-label-title", newCardData.label_title);
      modelBtn.setAttribute("data-label-color", newCardData.label_color);
      modelBtn.setAttribute("data-list-id", newCardData.list_id);



      cardlabel.innerText = newCardData.label_title;
      modelBtn.setAttribute("id", `model-${newCardData.list_id}`);

      iconsContainer.appendChild(cardlabel);
      iconsContainer.appendChild(modelBtn);
      metadata.appendChild(iconsContainer);
      metadata.appendChild(cardtext);




      newCard.appendChild(metadata);

      newCardContainer.appendChild(newCard);



      return newCardContainer;

   },

   /* Create New Card */
   addNewCard: (event)=> {

       let usedBtn = event.target;
       if (event.target.nodeName == "I"){
          //console.log(event.target.parentElement);
          usedBtn = event.target.parentElement;
          };


       if (isCreateCardOpen) {
         todoSystem.createCardClose();


       }

       if (labelOpen === true) {
             labelsContainer.style.display = "none";
             labelOpen = false;
       }

       isCreateCardOpen = true;

       let card_parentContainertitle = usedBtn.getAttribute("data-list-title");
       let card_parentContainerId = usedBtn.getAttribute("data-list-id");
       let card_parentContainer = document.getElementById(card_parentContainerId);
       let cardsContainer = document.querySelector(`#${card_parentContainerId} .cards_container`);

        // Add new Card form
        todoSystem.newCardBtn = usedBtn;
        usedBtn.style.display = "none";

         //let listBody = card_parentContainer.querySelector(".card_body");

         newCardForm.style.display = "block";

         card_parentContainer.querySelector(".card-body").appendChild(newCardForm);

         // show the form to get the data
         let UpdatedForm = todoSystem.createCardOpen(card_parentContainertitle, card_parentContainerId, usedBtn);
        if (cardsContainer){
          let allTasks = document.querySelectorAll(`#${card_parentContainerId} .cards_container .card_container`);
          let last_order = 0;
          if (allTasks) {
            last_order = allTasks.length;
            }

          /* // asgin the card template with all meta and append it to the body */
          //cardsContainer.appendChild(todoSystem.taskCardTemplate(last_order));
          setCardsMetaData();
          return true;
        }

        return false;
   },
   /*  create new label*/
   addNewLabel: ()=> {

     let allLabeleRadios = document.querySelectorAll("#add_new_label_container .colors input[name='label_color']");


     if (!addNewLabelName.value){
       labelAlert.style.display = "block";
       labelAlert.classList.add("alert-danger");
       labelAlert.innerText = "Please Enter title For the label";
       return false;
     }
     let colorSelected = false;
     let color_class = "";
     allLabeleRadios.forEach( (radioelm)=> {
        if (radioelm.checked){
          colorSelected = true;
          color_class = radioelm.value;
        }
     });

     // if user not selected color
     if (colorSelected == false){
       labelAlert.style.display = "block";
       labelAlert.classList.add("alert-danger");
       labelAlert.innerText = "Please Select Color";
       return false;
     }
     // if added new label write message and back to labels
     labelAlert.innerText = "";
     labelAlert.style.display = "none";
      /* Here You Can Send Label Data to database */
     let data = {title: addNewLabelName.value, color:color_class};
     /* add the label and set the data to html */
     newLabelSubmit(data);

     /* update system and set meta this can send fresh request of app state to server */
     setCardsMetaData();

   },
   saveDescription: (event)=> {
     setCardsMetaData();
     let descriptionValue = description_input.value;
     let cardid = event.target.getAttribute("data-card-id");
     let card = document.getElementById(cardid);

     let descriptionFiled = document.getElementById("ticket_description");

     let cardSavedDescriptionBtn = event.target.getAttribute("data-openbtn-id");
     let saver = document.getElementById(cardSavedDescriptionBtn);
     if (saver && card && description_input.value.trim() != "") {
       saver.setAttribute("data-card-description", description_input.value);
       card.setAttribute("data-card-description", description_input.value);
       descriptionFiled.innerText = description_input.value;
       description_input.value = "";
       return true;
     } else {
       return false;
     }
   },
   updateLabelModel: (event)=> {
         /* Get TargetCard */
   let letSelectedCardId = description_saveBtn.getAttribute("data-card-id");
   let letSelectedCard = document.getElementById(letSelectedCardId);


   let isCustomLabel = false;

   if (!letSelectedCard){
      console.log("Selected Card Not Found");
      return false;
   }

   /* Edit TargetCard Parent */
   let cardParent = letSelectedCard.parentElement;
   if (!cardParent){
      console.log("Selected Card parent Not Found");
      return false;
   }

   /* Edit card_metadata */
   let cardMetaData = letSelectedCard.querySelector(".card_metadata");
   if (!cardMetaData){
      console.log("Selected Card metadata Not Found");
      return false;
   }

   /* Edit card_text */
   let cardText = letSelectedCard.querySelector(".card_text");
   if (!cardText){
      console.log("Selected Card Text Not Found");
      return false;
   }

   /* Edit .card_metadata_container .label_class */
   let cardLabel = letSelectedCard.querySelector(".label_class");
   if (!cardLabel){
      console.log("Selected Card Label Not Found");
      return false;
   }

   /* .card_metadata_container .card_actions */
   let cardLabelActions = letSelectedCard.querySelector(".card_metadata_container .card_actions");
   if (!cardLabelActions){
      console.log("Selected Card actions Not Found");
      return false;
   }

   let modelLabelTextParent =  model_label_text.parentElement;
   if (!modelLabelTextParent){
     console.log("no parent for textlabel");
     return false;
   }


   /* Here user need edit custom label */
   /* I will let change only the color for now and text stay same no confilect */
   if (cardLabelActions.getAttribute("data-label-type") == "custom") {
      alert(cardLabelActions.getAttribute("data-label-type"));
      isCustomLabel = true;
   }


   /* Card Label Elements check End */

   let checkedColor = null;
   let labelText = null;
   edit_label_colors  = document.querySelectorAll(".model_label_container");

   for (var i=0; i < edit_label_colors.length; i++){




     /* Here We found the new label checked can send to db */
     if (edit_label_colors[i].querySelector("input[name='model_color'").checked == true){
       checkedColor = edit_label_colors[i].querySelector("input[name='model_color']");
       labelText = edit_label_colors[i].querySelector("span.label_txt");

       /* If not text elm stop */
       if (!labelText){
          console.log(edit_label_colors[i], "label color with no value");

          return false;
       }

       /* If not color stop */
       if (!checkedColor.value){
          console.log(edit_label_colors[i], "label color with no value");
          return false;
       }

       /* Here we can set the label to custom or just leave it in db tag and color */
       let labelCustom = checkedColor.getAttribute("data-label-type");
       if (labelCustom == "custom"){
         letSelectedCard.setAttribute("data-label-type", labelCustom);
         cardMetaData.setAttribute("data-label-type", labelCustom);
         cardText.setAttribute("data-label-type", labelCustom);
         cardLabel.setAttribute("data-label-type", labelCustom);
       }


       /* Edit Label In All card Elm and System */

       /* updatelabel */
       letSelectedCard.setAttribute("data-label-title", labelText.innerText);
       letSelectedCard.setAttribute("data-label-color", checkedColor.value);


       cardParent.setAttribute("data-label-title", labelText.innerText);
       cardParent.setAttribute("data-label-color", checkedColor.value);

       cardMetaData.setAttribute("data-label-title", labelText.innerText);
       cardMetaData.setAttribute("data-label-color", checkedColor.value);

       cardText.setAttribute("data-label-title", labelText.innerText);
       cardText.setAttribute("data-label-color", checkedColor.value);

       /* Card Label Main Elm */
       cardLabel.setAttribute("data-label-title", labelText.innerText);
       cardLabel.setAttribute("data-label-color", checkedColor.value);
       cardLabel.className = "";
       cardLabel.classList.add("label_class","card_label", checkedColor.value);
       cardLabel.innerText = labelText.innerText;

       /* Card Model Action Button Important for model */

       cardLabelActions.setAttribute("data-label-title", labelText.innerText);
       cardLabelActions.setAttribute("data-label-color", checkedColor.value);

       modelLabelTextParent.className = "";
       modelLabelTextParent.classList.add("model_label", checkedColor.value);

       model_label_text.innerText = labelText.innerText;

       break;
     }

     }
     /* Update system then break */
     setCardsMetaData();
     return true;
   },
   archiveCard: (event)=> {
       let targetCardContainerId = event.target.getAttribute("data-card-container");

       if (targetCardContainerId){
         let targetContainer = document.getElementById(targetCardContainerId);
         //targetContainer.querySelector()
         if (targetContainer){
           targetContainer.classList.add("archive_card");
           modelCardTitle.innerText += " [Archived]";
           modelCardTitle.classList.add("archive_class_title");
           setCardsMetaData();
           }
        }
    }
};


  /* open the function for show edit mode for list */
  addNewListBtn.addEventListener("click", todoSystem.createListEditOpen);
  /* close the function for show edit mode for list */
  canelAddNewList.addEventListener("click", todoSystem.createListEditClose);
  /*Add new list function */
  addNewListsubmit.addEventListener("click", todoSystem.addTodoMenu);
  /* close add new card */
  canelAddNewCard.addEventListener("click", todoSystem.createCardClose);
  /* save description */
  description_saveBtn.addEventListener("click", todoSystem.saveDescription);
  /* update label call */
  edit_label_btn.addEventListener("click", todoSystem.updateLabelModel);


  /* Archive Function */
  let addCardToArchiveBtn = document.querySelector("#arachive_card_btn");
  if (addCardToArchiveBtn){
    addCardToArchiveBtn.addEventListener("click",todoSystem.archiveCard);
  }

  /* This for correct handle cards added from backend it will add event listener on card     inserted by PHP and let you open the card model */
  allExitModelOpen.forEach( (openbtn)=> {
  openbtn.addEventListener("click",todoSystem.openCardModel);
  });

  /*  this responsble for restart the system important to use after any updates */
  /* Apply order to cards   loop over columns [lists] and then get the cards to set the order of cards and status */

  // clear drop effects
  function clearDropEffect(){
      if (lastTargetContainer){
       lastTargetContainer.style.height = "auto";
     };

     /* remove active class dropend */
     let old_active = document.querySelectorAll("div.active_drop_list");
     if (old_active.length > 0){

         old_active.forEach( (oldactive)=> {
            oldactive.classList.remove("active_drop_list");
         });
     }

  }
  let unqiueAttachIndex = 1;
  function setCardsMetaData() {

    /* Hide all POPuP*/
    hidePopAction();
    let listsColumns = document.querySelectorAll("div.drop-columns");

    updateArchiveList();

    let cards_id = 1;
    let list_id = 1;
    // update Lists
    listsColumns.forEach( (list, lIndex)=> {
       let currentListId = `list-${list_id}`;
       list.setAttribute("id", currentListId);
       list.setAttribute("data-list-id", currentListId);

       // set/update the order of the list data-list-order and flex stlye order
       list.setAttribute("data-list-order", lIndex);
       list.style.order = lIndex;


       // add Listeners for tasks
       list.addEventListener("dragover", allowDrop);
       list.addEventListener("drop",  drop);
       list.addEventListener("dragleave",  dragLeave);
       list.addEventListener("dragend",  clearDropEffect);

       let AlllistArchive = list.querySelectorAll('.archive_card');
       /*   archive */

       /* if this default list created with board add the border time stamp*/
       if (list.classList.contains("border-default-list")){
          list.setAttribute("data-list-createdate", todoSystem.borderTimeString);
          list.setAttribute("data-list-timestamp", todoSystem.borderTimeStamp);
       };


       // asgin the list-title to the container elements (Asgin to NewLabels)
       let listTitle = list.querySelector("div.card-title");
       let listBody = list.querySelector("div.card-body");
       let listCardBtn = list.querySelector("button.add_new_card_btn");
       let listCardsContainer = list.querySelector("div.cards_container");
       let listForm = list.querySelector("div.new-card-form");
       let getListTitle = list.getAttribute("data-list-title");
       let listMenuTitile = list.querySelector("title-container-menu");


       if (listTitle && !listTitle.classList.contains("title-container")) {
         listTitle.classList.add("title-container");


       }
       if (listTitle){

         let newlistElm = document.createElement("div");
         let archiveContainerDiv = document.createElement("div");
         archiveContainerDiv.classList.add("list_archive_items");
         let newShowArchives = document.createElement("div");
         newShowArchives.classList.add("show_archive_btn");

         if (getListTitle){
            let listTileShown = getListTitle;
            if (getListTitle.length > 15){
              listTileShown = getListTitle.slice(0, 15) + "..";
            }

            let archiveTitleSpan = document.createElement("span");
            archiveTitleSpan.innerText = `Show ${listTileShown} Archive`;
            newShowArchives.innerHTML = "";
            newShowArchives.appendChild(archiveTitleSpan);

            let closeBtnArchive = document.createElement("i");
            closeBtnArchive.classList.add("fa", "fa-close", "float-right");
            closeBtnArchive.style.background= "red";
            closeBtnArchive.classList.add("close_btn_archive");
            newShowArchives.appendChild(closeBtnArchive);

         }
         newlistElm.classList.add("pop_list_menu", "popup_list_hide");


           let listArchive = list.querySelectorAll(".archive_card");


           if (listArchive){
             archiveContainerDiv.innerHTML = "";
             listArchive.forEach( (listAr, arIndex)=> {

               let cardTitle = listAr.querySelector('.card_text');
               if (cardTitle) {

                 let newArchiveDiV = document.createElement("div");
                 let archiveFileText = document.createElement("span");
                 let newbackupBtn = document.createElement("i");

                 archiveFileText.classList.add("backuptext_span");
                 newArchiveDiV.setAttribute("id", `arachive-${unqiueAttachIndex}-${currentListId}`);
                 newbackupBtn.setAttribute("data-archive-id", `arachive-${unqiueAttachIndex}-${currentListId}`);
                 unqiueAttachIndex += 1;

                 newbackupBtn.classList.add("fa", "fa-cloud-upload", "float-right", "backupbtn");
                 newbackupBtn.setAttribute("title", "Backup File");
                 newArchiveDiV.classList.add("archive_item");
                 let containerId = listAr.getAttribute("id");
                 if (containerId){

                   newbackupBtn.setAttribute("data-container-card-id", containerId);

                   /* Backup Card Function */
                   newbackupBtn.addEventListener("click", (event)=> {




                     let archiveElmId = event.target.getAttribute("data-container-card-id");
                     let archiveElmItem = document.querySelector(`#${archiveElmId}`);
                     if (!archiveElmItem){
                       return false;
                     }
                     if ( !archiveElmItem.classList.contains("archive_card") ) {
                        return false;
                     }





                     let archiveId = event.target.getAttribute("data-archive-id");
                     let containerArchiveCardElm = document.querySelector(`#${archiveId}`);
                     if (containerArchiveCardElm) {
                        containerArchiveCardElm.remove();

                     }

                     archiveElmItem.classList.remove("archive_card");
                     /* remove backup element from list */


                     /* updateSystem Call same function */
                     setCardsMetaData();

                   });

                 }
                 archiveFileText.innerText = cardTitle.innerText.slice(0, 20);
                 newArchiveDiV.appendChild(archiveFileText);
                 newArchiveDiV.appendChild(newbackupBtn);
                 archiveContainerDiv.appendChild(newArchiveDiV);
               }


             });
           }



         if (!listMenuTitile){

           newlistElm.appendChild(newShowArchives);
           let newTitleContainer = document.createElement("div");
           newTitleContainer.classList.add("title-container-menu");


           newlistElm.appendChild(archiveContainerDiv);
           newTitleContainer.appendChild(newlistElm);
           listTitle.appendChild(newTitleContainer);

         } else {

           newlistElm.appendChild(newShowArchives);
           if (!listMenuTitile.classList.contains("title-container-menu")) {
             listMenuTitile.classList.add("title-container-menu");
           }
           listMenuTitile.appendChild(newlistElm);
           listMenuTitile.appendChild(archiveContainerDiv);
           listTitle.appendChild(listMenuTitile);

         }





         let listMenuI = list.querySelector(".menu_sign i");
         if (listMenuI)  {
            listMenuI.classList.add("list_imenu");

            listMenuI.addEventListener("click", ()=> {
               removeOpenPopList();
               newlistElm.classList.add("popup_list_show");

            });
         }

         }

       let alllabel_container = list.querySelectorAll("#label_group1 .label_container .label_icon");
       if (alllabel_container.length){
         alllabel_container.forEach( (labelIcon)=> {
            labelIcon.setAttribute("data-list-id", currentListId);
            labelIcon.setAttribute("data-list-title", getListTitle);
            if (labelIcon.querySelector("input")){
               labelIcon.setAttribute("data-color", labelIcon.querySelector("input").value);
               labelIcon.querySelector("input").setAttribute("data-list-id", currentListId);
               labelIcon.querySelector("input").setAttribute("data-list-title", getListTitle);
               labelIcon.querySelector("input").setAttribute("data-label-title", labelIcon.innerText.trim());
            };
         });
       }


       /* Asgin the list id to the card form labels */
       let checkForm = list.querySelector("#add-newCard-form");

       // New Label title input
       let formNameInput = document.querySelector("#label_title");


       if (formNameInput){
         formNameInput.setAttribute("data-list-id", currentListId);
         formNameInput.setAttribute("data-list-title", getListTitle);
       }

       let checkFormLabels = list.querySelectorAll("#add_new_label_container .colors input[type='radio']");
       if (checkFormLabels){
         checkFormLabels.forEach(
           (card_select)=> {

               card_select.setAttribute("data-list-id", currentListId);
               card_select.setAttribute("data-list-title", getListTitle);
               }
         );

         submitCreateLabel.addEventListener("click", todoSystem.addNewLabel);
       };

       // submitCreateLabel.add

       // add for input too

       // add event on create new task button
       listCardBtn.addEventListener("click", todoSystem.addNewCard);
       let listTitleBackend = list.getAttribute("data-list-title");
       if (listTitle){
          listTitle.setAttribute("data-list-title", listTitleBackend);
          listTitle.setAttribute("data-list-id", currentListId);
       };
       if (listBody){

          listBody.setAttribute("data-list-title", listTitleBackend);
          listBody.setAttribute("data-list-id", currentListId);
       };
       if (listCardsContainer){

          listCardsContainer.setAttribute("data-list-title", listTitleBackend);
          listCardsContainer.setAttribute("data-list-id", currentListId);
       };
       if (listCardBtn){

          listCardBtn.setAttribute("data-list-title", listTitleBackend);
          listCardBtn.setAttribute("data-list-id", currentListId);
       };


       // update form

       if (listForm) {

          // new task title
         listForm.querySelector("#card_title").setAttribute("data-list-title", listTitleBackend);
          listForm.querySelector("#card_title").setAttribute("data-list-id", currentListId);


          listForm.querySelector("#new_card_submit").setAttribute("data-list-title", listTitleBackend);
         listForm.querySelector("#new_card_submit").setAttribute("data-list-id", currentListId);

         listForm.querySelector("form").setAttribute("data-list-title", listTitleBackend);

         listForm.querySelector("form").setAttribute("data-list-id", currentListId);
         listForm.setAttribute("data-list-title", listTitleBackend);
         listForm.setAttribute("data-list-id", currentListId);
         }


       // keep the Add New List Button Have Last Order Always
       addNewListContainer.style.order = lIndex +1;

       let listCards = list.querySelectorAll("div.cards_container div.card_container");





       // updates cards
       listCards.forEach( (card, cIndex)=> {
          // asgin the list Title to the card
          card.setAttribute("data-list-id", currentListId);
          card.setAttribute("data-list-title", list.getAttribute("data-list-title"));

          let cardContainerId = `card-container-${cards_id}`;
          card.setAttribute("id", cardContainerId);



          let cardOpenBtn = card.querySelector(".card_actions");
          if (cardOpenBtn){
                cardOpenBtn.setAttribute("card-id", `card-id-${cards_id}`);
                cardOpenBtn.setAttribute("data-list-id", currentListId);
                cardOpenBtn.setAttribute("data-list-title", list.getAttribute("data-list-title"));
            };

          let modelopenBtns = card.querySelectorAll(".model_open");

          let taskCard = card.querySelector(".card");


          // set/update the order of the card data-card-order and flex stlye order
          card.setAttribute("data-card-order", cIndex);
          card.style.order = cIndex;

          /* add id to card */
          card.querySelector(".task_card").setAttribute("id", `card-id-${cards_id}`)






          let cardAttachments = null
          if (taskCard) {
            cardAttachments = taskCard.getAttribute("data-card-attachment");
          }

          let cardDate = "";
          let cardTimeStamp = 0;
          if (taskCard) {
            cardDate = taskCard.getAttribute("data-create-string");
            cardTimeStamp = taskCard.getAttribute("data-create-timestamp");
            if (!cardDate){
              cardDate = "";
            }
            if (!cardTimeStamp){
              cardTimeStamp = "";
            }
          }


          if (modelopenBtns){
            modelopenBtns.forEach( (elm)=> {

               elm.setAttribute("data-card-id", `card-id-${cards_id}`);
               elm.setAttribute("id", `model-card-${cards_id}`);

               /* set the attachment in model link */
               if (taskCard && cardAttachments){
                 elm.setAttribute("data-card-attachment", `${cardAttachments}`);

               };

               if (taskCard){
                 elm.setAttribute("data-card-date", cardDate);
                 elm.setAttribute("data-card-timestamp", cardTimeStamp);
               };

                elm.setAttribute("data-card-containerid", cardContainerId );


              let taskCardDueDate = taskCard.getAttribute("data-dute-date");
              if (taskCardDueDate){
                elm.setAttribute("data-dute-date", taskCardDueDate);
             } else {
                elm.setAttribute("data-dute-date", "");
             }




            });
          }



          //console.log("not found");

          if (card.querySelector("div.task_card")){
            card.querySelector("div.task_card").setAttribute("data-list-title", list.getAttribute("data-list-title"));
            card.querySelector("div.task_card").setAttribute("data-list-id", currentListId);
          };

          // Set The Cards MetaData

          if (card.querySelector("div.task_card .card_metadata")){
            card.querySelector("div.task_card .card_metadata").setAttribute("data-list-title", list.getAttribute("data-list-title"));
            card.querySelector("div.task_card .card_metadata").setAttribute("data-list-id", currentListId);
            //console.log("found");
          }

          if (card.querySelector("div.task_card .card_metadata .card_label")){
            card.querySelector("div.task_card .card_metadata .card_label").setAttribute("data-list-title", list.getAttribute("data-list-title"));
            card.querySelector("div.task_card .card_metadata .card_label").setAttribute("data-list-id", currentListId);
          }

          if (card.querySelector("div.task_card .card_metadata .card_text")){
            card.querySelector("div.task_card .card_metadata .card_text").setAttribute("data-list-title", list.getAttribute("data-list-title"));
            card.querySelector("div.task_card .card_metadata .card_text").setAttribute("data-list-id", currentListId);
          }



          card.setAttribute("draggable", true);
          card.addEventListener("drag",  drag );
          cards_id += 1;

       });
       list_id += 1;
    });

    return true;

  };
  setCardsMetaData();





/* Move List Arrows Section end */






  // list Drag and drop

 function allowDropList(ev) {
    ev.preventDefault();

  }

 function dragList(ev) {
   ev.dataTransfer.setData("text", ev.target.id);
  }

 function dropList(ev) {
   ev.preventDefault();
   var data = ev.dataTransfer.getData("text");
   ev.target.appendChild(document.getElementById(data));
  }
});


/* Add New Card Labels Function */

let search_input = document.getElementById("label_search_text");
let allLabels = document.querySelectorAll("div.label_container div.selectable");

let hiddenLabels = [];

function showAll(){
  // alert(hiddenLabels[0].classList.className);
   let allhidden = document.querySelectorAll(".hidelabel");

   if (allhidden) {
      allhidden.forEach( (label)=> {
      label.style.display = "inline";
      label.style.display = "block";
      if (label.classList.contains("hidelabel")){
        label.classList.remove("hidelabel");
      }
      label.querySelector(".label_icon").style.display = "block";

  });

  }
}

function search_labels(event){

if (event.target.value.trim() == ""){
   //alert("Clearing"+allLabels[0]);
   showAll();
   return true;

}


allLabels.forEach( (label_elm)=> {

 /* this new fast key if search letter inside the text we can show data else move to next  if */
  if (label_elm.innerText.toLowerCase().trim().includes(event.target.value[0].toLowerCase())){
   //console.log("found search"+label_elm);
   label_elm.style.display = "block";
   label_elm.parentElement.classList.remove("hidelabel");
   return true;
  };

/* get only the labels found */
  if (label_elm.innerText.toLowerCase().trim().includes(event.target.value.toLowerCase().trim())){
    label_elm.style.display = "block";
    if (label_elm.parentElement.classList.contains(hidelabel)){
      label_elm.parentElement.classList.remove("hidelabel");
      return true;
    }


  };
  if (!label_elm.innerText.toLowerCase().trim().includes(event.target.value.toLowerCase().trim())){
    //alert("found search"+ label_elm);
    label_elm.parentElement.classList.add("hidelabel");
    label_elm.style.display = "none";
    return true;
   }

    });



  return false;
}
search_input.addEventListener("keyup", search_labels);

</script>

</body>
</html>
