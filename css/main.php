<?php
  header('Content-Type: text/css');

  if (!isset($_COOKIE["background"])){
    $bg_image = "url(../img/space-bg.jpg)";
    $bg_color = "none";
  } else {
    if ($_COOKIE["background"] == "kosmos"){
      $bg_image = "url(../img/space-bg.jpg)";
      $bg_color = "none";
    }
    else {
      $bg_image = "none";
      $bg_color = $_COOKIE["background"];
    }
  }

  if (!isset($_COOKIE['font_color'])){
    $font_color = "#DDDDDD";
  } else {
    $font_color = $_COOKIE['font_color'];
  }

  if (!isset($_COOKIE['font_size'])){
    $font_size = "18px";
  } else {
    $font_size = $_COOKIE['font_size'];
  }
?>
html {
  height: 100%; }

body {
  margin: auto;
  color:<?=$font_color?>;
  min-height: 100%;
  display: grid;
  grid-template-rows: 1fr auto;
  width: 1000px;
  background-image:<?=$bg_image?>;
  background-color:<?=$bg_color?>;
  background-size: auto;
  background-position: 50%;
  background-repeat: repeat-y;
  background-attachment: fixed; }

#logo {
  height: 150px;
  background-color: #141414; }
  #logo h1 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 900;
    font-size: 92px;
    text-align: center;
    text-transform: uppercase;
    color: #DDDDDD;
    padding-top: 0;
    margin-top: 0;
    margin-bottom: 0px; }
  #logo h2 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 900;
    font-size: 14px;
    text-align: justify;
    text-transform: uppercase;
    letter-spacing: 5px;
    color: #DDDDDD;
    margin-top: 0;
    margin-left: 185px; }

nav {
  background-color: #ff704c;
  height: 40px;
  text-align: center;
  padding-bottom: 25px; }
  nav ul {
    list-style: none;
    margin: 0;
    padding: 20px;
    font-size: 22px; }
    nav ul li {
      display: inline-block;
      padding-left: 5px;
      padding-right: 10px;
      border-right: 1px solid #222222; }
      nav ul li a {
        text-decoration: none;
        color: #1d3135; }
      nav ul li a:hover {
        color: #DDDDDD; }
    nav ul li:first-child {
      border-left: 1px solid #222222; }

main {
  width: 1000px;
  background-color: #222222;
  margin-top: 0;
  font-size:<?=$font_size?>;
  min-height: 410px;
  margin-left: auto;
  margin-right: auto;
  font-family: 'Libre Franklin', sans-serif; }
  main h1 {
    font-weight: 700;
    font-size: 30px; }
  main p {
    font-weight: 400;
    text-align: justify; }
  main #cytat_musk {
    width: 700px;
    height: 260px;
    background-color: #141414;
    margin-left: auto;
    margin-right: auto;
    margin-top: 50px;
    margin-bottom: 50px;
    border-radius: 10px; }
    main #cytat_musk #zdj_musk {
      width: 183px;
      float: left;
      padding: 10px; }
      main #cytat_musk #zdj_musk img {
        border-radius: 20%; }
    main #cytat_musk #cytat {
      width: 650px;
      color: #DDDDDD;
      padding: 20px;
      font-size: 30px; }
      main #cytat_musk #cytat #podpis {
        text-align: right; }
  main .glowny_napis {
    text-align: center; }
  main .obok {
    float: left;
    width: 45%;
    text-align: justify;
    margin-right: 10px;
    margin-left: 30px; }
  main #info_zdjecia #zdjecie {
    float: left;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%; }
  main #info_warning {
    font-size: 150%;
    color: red; }
  main .greenMove {
    color: green;
    position: relative;
    bottom: -25px;
    right: -15px; }
  main #zad81 {
    margin-left: 10px;
    width: 20%; }
  main #zad82 {
    margin-left: 10px;
    width: 80%;
    text-align: center; }
  main #zad83 {
    margin-left: 10px;
    width: 200px;
    height: 100px;
    overflow: scroll; }
  main #linie {
    text-align: center;
    width: 50%;
    position: relative;
    left: 25%;
    border-width: 6px;
    border-color: royalblue; }
    main #linie .cienka {
      border-width: thin; }
    main #linie .gruba {
      border-width: thick; }
    main #linie .podwojna {
      border-style: double; }
    main #linie .kropkowana {
      border-style: dotted; }
    main #linie .kreskowana {
      border-style: dashed; }
    main #linie .niebieska {
      border-color: royalblue; }
    main #linie .czerwona {
      border-color: red; }
  main #tabela {
    margin-left: 25%;
    margin-top: 30px; }
    main #tabela table, main #tabela td, main #tabela th {
      border: 1px solid #DDDDDD; }
    main #tabela table {
      width: 500px; }
    main #tabela th {
      text-align: center;
      height: 50px; }
  main ul li {
    list-style: none;
    font-size: 28px;
    text-align: center; }
    main ul li a {
      text-decoration: none;
      color: #DDDDDD; }
    main ul li a:hover {
      color: #ff704c; }
  main #kontakt_form {
    margin-left: 20px;
    margin-top: 20px; }
  main #zadania_dom {
    padding: 20px; }
    main #zadania_dom h2 {
      text-align: center;
      font-size: 30px;
      margin-bottom: 0; }
    main #zadania_dom h3 {
      text-align: center;
      margin-top: 10px;
      color: #ff704c; }
    main #zadania_dom p {
      text-align: center; }
    main #zadania_dom .zadanie_dom {
      margin-top: 10px;
      margin-bottom: 10px;
      padding: 10px;
      padding-top: 0;
      border: 2px solid #DDDDDD;
      border-radius: 10px; }
    main #zadania_dom #zadanie1 #wynikSprawdzPole {
      text-align: left; }
    main #zadania_dom #zadanie2 img {
      margin-left: 40px; }
    main #zadania_dom #zadanie2 button {
      margin-left: 20px;
      margin-bottom: 20px; }
    main #zadania_dom #zadanie3 #zad3_paragraf {
      font-size: 20px;
      text-align: left; }
    main #zadania_dom #zadanie4 .zad4_wynik {
      text-align: left; }
    main #zadania_dom #zadanie4 img {
      display: block;
      margin-left: 17%; }
    main #zadania_dom #zadanie4 h4 {
      text-align: center; }
    main #zadania_dom #zadanie5 form {
      margin-left: 370px; }

footer .ciemne_tlo {
  background-color: #141414; }
  footer .ciemne_tlo #info_cd {
    padding-top: 5px;
    padding-bottom: 5px;
    margin-left: 2em;
    margin-right: 2em;
    text-align: center; }
footer .info {
  width: 100%;
  background-color: #ff704c;
  height: 30px;
  font-size: 20px;
  color: #222222;
  text-align: center; }
footer .socials {
  width: 100%;
  text-align: center;
  background-color: #191d21; }
footer .socialdivs {
  width: 1000px;
  margin-left: auto;
  margin-right: auto; }
footer .fb {
  width: 250px;
  height: 155px;
  float: left; }
footer .fb:hover {
  background-color: #4668b3; }
footer .yt {
  width: 250px;
  height: 155px;
  float: left; }
footer .yt:hover {
  background-color: #d94348; }
footer .tw {
  width: 250px;
  height: 155px;
  float: left; }
footer .tw:hover {
  background-color: #3095d3; }
footer .gplus {
  width: 250px;
  height: 155px;
  float: left; }
footer .gplus:hover {
  background-color: #d95333; }

/*# sourceMappingURL=main.css.map */
