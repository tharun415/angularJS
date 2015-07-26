<?php
//http://www.w3schools.com/angular/tryit.asp?filename=try_ng_note_app
?>

<!DOCTYPE html>
<html>
<script src=
"http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<body ng-app="myNoteApp" ng-controller="myNoteCtrl">

<h2>My Note</h2>


<textarea ng-model="message" cols="40" rows="10"></textarea>

<p>
<button ng-click="save()">Save</button>
<button ng-click="clear()">Clear</button>
</p>

<p>Number of characters left: <span ng-bind="left()"></span></p>

<script src="myNoteApp.js"></script>
<script src="myNoteCtrl.js"></script>

</body>
</html>
