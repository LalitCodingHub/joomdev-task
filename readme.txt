Read ME: 
1> Download the project into your Desktop.
2> Run composer update.
3> php artisan migrate.

4> php artisan serve => Open the link provided in CMD.

5> You will see the Login Page.
6> You can register yourself if new user.

7> Important Links: 
	1> To create new template : http://127.0.0.1:8000/generate-template
	2> To view all templates : http://127.0.0.1:8000/templates
	
8> API endpoints 
	1> To get all templates : http://127.0.0.1:8000/api/getmail
	2> To send the template through Mail : http://127.0.0.1:8000/api/sendmail (refer to note below)
	
	Note: 1> Send email and template-id compulsory in form-data.
		  2> Also in header Send
				Accept => application/json
				Content-Type => application/json