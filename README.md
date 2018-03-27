#  laraveljsonapi
Simple api JSON server on Laravel 5

This is a web application to provide testing of applications to use a standard JSON format. This includes;
<ul>
<li>User login and retrieve a token for all session
<li>User logout and destroys the token
<li>Retrieve a list of contents given a valid token exist
</ul>

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## API calls ##

curl -X POST 127.0.0.1:8000/api/login \
-H "Accept: application/json" \
-H "Content-type: application/json" \
-d "{\"email\": \"admin@test.com\", \"password\": \"yourpassword\" }"

curl -X POST http://127.0.0.1:8000/api/register \
-H "Accept: application/json" \
-H "Content-Type: application/json" \
-d '{"name": "Happy Programmer", "email": "happy@somewebsite.com", "password": "somepassword", "password_confirmation": "somepassword"}'

curl -X GET http://127.0.0.1:8000/api/articles \
-H "Accept: application/json" \
-H "Content-Type: application/json"  \
-H "Authorization: Bearer if2LdjBBLlDDYR1ok7TIsF8Tdtw1jD51mjQ0bkVVlimEofI8yGwYGaNlNOdP"

curl -X POST http://127.0.0.1:8000/api/logout \
-H "Accept: application/json" \
-H "Content-Type: application/json"  \
-H "Authorization: Bearer if2LdjBBLlDDYR1ok7TIsF8Tdtw1jD51mjQ0bkVVlimEofI8yGwYGaNlNOdP"


<p>More instructions are on the way.</p>
