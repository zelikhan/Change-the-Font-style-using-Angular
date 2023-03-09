<!DOCTYPE html>
<html ng-app="myApp">
<head>
<title>AngularJS Checkboxes</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<style>
body {
font-family: Arial, sans-serif;
background-color: aqua;
color: #333;
}
h1 {
font-weight: normal;
text-align: center;
margin-top: 20px;
}
.container {
max-width: 600px;
margin: 0 auto;
padding: 20px;
background-color: #fff;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
label {
font-weight: bold;
margin-right: 10px;
}
p {
margin-top: 20px;
font-size: 1.2rem;
font-weight: normal;
font-style: normal;
display: block;
}
.bold {
font-weight: bold;
}
.italic {
font-style: italic;
}
.hidden {
display: none;
}
</style>
</head>
<body ng-controller="myCtrl">
<div class="container">
<h1>AngularJS Checkboxes</h1>
<div>
<label><input type="checkbox" ng-model="boldCheckbox">Bold</label>
<label><input type="checkbox" ng-model="italicCheckbox">Italic</label>
<label><input type="checkbox" ng-model="hiddenCheckbox">Hide</label>
</div>
<p ng-class="{bold: boldCheckbox, italic: italicCheckbox, hidden: hiddenCheckbox}">Lorem Ipsum is simply dummy text of the 
printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a 
galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
$scope.boldCheckbox = false;
$scope.italicCheckbox = false;
$scope.hiddenCheckbox = false;
});
</script>
</body>
</html>