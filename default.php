<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;   
Body {
Margin: 0px;
}
    padding: 0;
    overflow: hidden;
    background-color: 	#0e7248;

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: lightgreen;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px Black;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color:rgb(42, 163, 48)}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<ul>
  <li><a href="#Home">Home</a></li>
  <li><a href="#Contact">Contact</a></li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Tutorials</a>
    <div class="dropdown-content">
      <a href="#Forum">Forum-Tuts</a>
      <a href="#Video">Video-Tut</a>





  