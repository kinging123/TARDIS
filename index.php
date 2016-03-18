<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to our website!</title>

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/angular.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/angular-sanitize.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
</head>
<body ng-app="TARDIS" ng-controller="GeneralController">
	<h1>Hello World</h1>

	<article ng-repeat="post in posts">
		<h1>{{post.title.rendered}}</h1>
		<img ng-if="post.featured_media" src="{{post.thumbnail_url}}" alt="{{post.title.rendered}}">
		<p ng-bind-html="post.content.rendered"></p>
	</article>
</body>
</html>