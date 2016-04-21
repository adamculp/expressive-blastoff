# expressive-blastoff

Sample Zend Expressive application created for a blastoff talk. This sample application includes the following.

	1. /src/App/Action/PingAction.php - Shows basic usage as a REST service, and returns a JSON response.
	
		* See /config/autoload/routes.global.php for routing info.
		* No view template to view, raw JSON returned.

	2. /src/App/Action/HomePageFactory.php - Shows basic usage with a template system (Plates), where and HTML response is returned.
	
		* See /config/autoload/routes.global.php for routing info.
		* See /templates/app/home-page.phtml for view template.
	
	3. /src/App/Action/UserListFactory.php - Shows a connection to a Database using Zend-Db to query a Sqlite database to return a list of profiles
	
		* See /config/autoload/db.global.php and /config/autoload/db.local.php for DB adapter setup.
		* See /config/autoload/routes.global.php for routing info.
		* See /templates/app/user-list.phtml for view template.
