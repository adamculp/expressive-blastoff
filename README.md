# expressive-blastoff

Sample Zend Expressive application created for a blastoff talk. This sample 
application includes the following: (scroll down to see installation instructions.)

	1. /src/App/Action/PingAction.php - Shows basic usage as a REST service, and 
	returns a JSON response.
	
		* See /config/autoload/routes.global.php for routing info.
		* No view template to view, raw JSON returned.

	2. /src/App/Action/HomePageFactory.php - Shows basic usage with a template 
	system (Plates), where and HTML response is returned.
	
		* See /config/autoload/routes.global.php for routing info.
		* See /templates/app/home-page.phtml for view template.
	
	3. /src/App/Action/UserListFactory.php - Shows a connection to a Database 
	using Zend-Db to query a Sqlite database to return a list of profiles
	
		* See /config/autoload/db.global.php and /config/autoload/db.local.php 
		for DB adapter setup.
		* See /config/autoload/routes.global.php for routing info.
		* See /templates/app/user-list.phtml for view template.
		
    4. /src/App/Middleware/TheClacksMiddleware.php - Example of header middleware
    
        * See /config/autoload/middleware-pipeline.global.php for container update 
        and middleware addition

    5. /src/App/Action/UserDbalListFactory.php - Shows a connection to a Database 
    using Doctrine DBAL to query a Sqlite database to return a list of profiles
    
        * See /config/autoload/dbal.local.php for DB settings.
        * See /config/autoload/routes.global.php for routing info.
        * See /templates/app/user-dbal-list.phtml for view template.

## Docker Instance

    1. Ensure you have the latest version of Docker and Docker-Compose installed. 
    If you have an older version you may see strange messages related to the Version.
    
    2. Via CLI navigate to the application root directory and issue the command 
    to deploy and run a Docker container:
    
```
        `$ docker-compose up -d`
```
        
    3. When that completes you should have a "working" Docker container. In a 
    browser navigate to http://localhost:8080 to test. There should be errors 
    because Composer needs to be run.
    
    4. Capture a terminal in the Docker container:
    
```
        `$ sudo docker exec -i -t 3b14a71435d7 /bin/bash`
```
        
        Note: 3b14a71435d7 is the container ID and will be different for everybody. 
        Plug in the appropriate ID.
        
    5. From the sudo prompte within the container (working directory '/var/www' 
    run composer:
    
```
        `# composer install`
```
        
        I selected #1 and 'y' when prompted during the Composer install.
        
    6. We now have a working application.

## Vagrant usage

Coming soon