var myApp =angular.module('myApp',[]);

myApp.controller('MyController', function MyController($scope){
	$scope.skills=[
	{
		'language' : 'Ruby On Rails',
		'pic' : 'prog-ruby'
	},
	{
		'language' : 'Javascript',
		'pic' : 'prog-js02'
	},
	{
		'language' : 'HTML5',
		'pic' : 'html5-02'
	},
	{
		'language' : 'CSS3',
		'pic' : 'css3-01'
	},
	{
		'language' : 'AngularJS',
		'pic' : 'angularjs'
	},
	{
		'language' : 'Jquery',
		'pic' : 'prog-jquery'
	},
	{
		'language' : 'Postgresql',
		'pic' : 'dbs-postgresql'
	},
	{
		'language' : 'MongoDB',
		'pic' : 'dbs-mongodb'
	},
	// {
	// 	'language' : 'Test Driven Developement',
	// 	'pic' : 'https://pictonic.co/icon/prog-ruby'
	// }
	]
});
