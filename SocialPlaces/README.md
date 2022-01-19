[//]: <> (// This is confusing, I KNOW, so let me explain it to you :grin:)

# LaraVue Contact Form / Admin - PHP ^7.0 | ^8.0 
Simplistic Example of a Contact Form and Admin. FrontEnd is in Vue and Backend API is in Laravel.
* Validation Handling
* Handling Success and Error response 
* Admin Panel
* Email: mailtrap


[//]: <> (// This is confusing, I KNOW, so let me explain it to you)
# Instructions
###### Incase it is needed :grin:
:checkered_flag: ```[MAC OS BIG SUR TERMINAL ]```  
Create Database "first" via Mysql Workbench -- 
Called - laraVueForm -- change details in .env


- **root@comp %** ```composer install```
- **root@comp %** ```php artisan key:generate```
- **root@comp %** ```php artisan migrate --seed```
- **root@comp %** ```php artisan serve```


###### SHOW FORM
:checkered_flag: ```[BROWSER URL - CHANGE PORT]``` 
- <a href="http://127.0.0.1:8000/contact/create">http://127.0.0.1:8000/contact/create</a>

###### SHOW LOGIN
:checkered_flag: ```[BROWSER URL - CHANGE PORT]``` 
- <a href="http://127.0.0.1:8002/login">http://127.0.0.1:8000/login</a>

###### CREDENTIALS
```username: admin@test.com```
```passcode: admin```

```username: user@test.com```
```passcode: secret```


# Screenshots

###### create contact form
<img src="https://raw.githubusercontent.com/DeanDevel/DevTests/main/SocialPlaces/images/sendmessage.png" alt="create contact" width="300" height="150">


###### admin login
<img src="https://raw.githubusercontent.com/DeanDevel/DevTests/main/SocialPlaces/images/adminlogin.png" alt="create contact" width="300" height="150">


###### table with details of contacts
<img src="https://raw.githubusercontent.com/DeanDevel/DevTests/main/SocialPlaces/images/tablecontacts.png" alt="create contact" width="300" height="200">



###### mail trap email
<img src="https://raw.githubusercontent.com/DeanDevel/DevTests/main/SocialPlaces/images/mailtrapemail.png" alt="mail trap" width="150" height="200">



# Branding
<img src="https://raw.githubusercontent.com/DeanDevel/DevTests/main/SocialPlaces/images/0*SzXGvcdI4j0iEWpX.png" alt="LaraVue-Brand-Banner" width="300" height="80">





# Test Instructions
Develop a simple contact form application using a PHP MVC framework (backend, preferably Symfony) and JS framework (frontend, preferably Vue.js) of your choice. * This does not strictly have to be a single-page application. The contact form should accept the following fields: Name, email, gender, content
 
Save the contact details to a database and display in a table behind a secured area (login). The table should be filterable by gender and support some basic searching. Send an email when a contact form is filled in.
 
No time limit but estimate project setup (2 hours) and code setup (4 hours). Push your code to Github (private/public).
 
Bonus points will be awarded for showing:
 
Good OOP skills
Git feature branch workflow
