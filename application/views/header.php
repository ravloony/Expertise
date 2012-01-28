<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Expertise</title>

<style type="text/css">

body {
 background-color: #c2c2c2;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

#global {
  margin-left: auto;
  margin-right: auto;
  width: 400px; /* largeur obligatoire pour être centré */
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

th, tr, tbody, thead, table {
  padding: 5px;
  border:5px solid white;
  background-color: white;
}


table {
  border-radius: 5px;
}

table caption {
  border-radius: 2px;
  display: block;
  background-color: white;
  border: 1px solid gray;
}

tr {
  background-color: #c2c2c2;
}

td {
  padding: 5px;
  border : none;
}

td.idtd {
  background-color: white;
}

td > a {
  display: block;
  background-color: #FFFFFF;
  text-decoration: none;
  color: #4F5155;
}

td > a.delete {
  background-color: #FF7256;
}

td > a.modify {
  background-color: #8FBC8F;
}

td.modifytd {
  border-radius: 5px 5px 5px 5px;
  background-color: #8FBC8F;
}

td.deletetd {
  border-radius: 5px 5px 5px 5px;
  background-color: #FF7256;
}

td.newtd {
  border-radius: 5px 5px 5px 5px;
  background-color: #EADC13;
}

td.hiddentd {
  background-color: white;
}
</style>

<script src="http://ravloony.net/~bobbles/jquery-1.7.1.min.js" type="text/javascript"></script>

</head>
<body>
<div id="global">
<h1><?php echo $title; ?></h1>