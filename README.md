# PHP Internal Project

A simple PHP and MySQL web application developed for a PHP Internal practical.

The project implements **user registration, login authentication, editable user details, and logout functionality**.

## Features

* User Registration
* Email validation
* Password validation
* User Login
* Database-based credential verification
* Redirect to Registration page if credentials do not match
* Display logged-in user's details
* Editable user details
* Update user information
* Session-based authentication
* Logout functionality

## Technologies Used

* PHP
* MySQL
* HTML
* CSS
* XAMPP
* phpMyAdmin

## Project Structure

```text
PHP_Internal/
│
├── index.php
├── login.php
├── register.php
├── profile.php
├── logout.php
│
├── config/
│   └── db.php
│
├── css/
│   └── style.css
│
└── README.md
```

## Database

Database Name:

```text
php_internal
```

Table Name:

```text
users
```

### Users Table

| Field    | Description          |
| -------- | -------------------- |
| id       | Unique user ID       |
| name     | User's full name     |
| email    | User's email address |
| mobile   | User's mobile number |
| address  | User's address       |
| course   | User's course        |
| username | Login username       |
| password | Login password       |

## Application Flow

```text
                    Login
                      |
              Check Credentials
                      |
              +-------+-------+
              |               |
            Match          No Match
              |               |
              ↓               ↓
       User Profile      Registration
              |
       Edit User Details
              |
           Update
              |
        Database Update
              |
           Logout
```

## Registration

The user can register by providing:

* Name
* Email
* Mobile
* Address
* Course
* Username
* Password

The registration data is stored in the MySQL `users` table.

## Login

The user enters:

* Username
* Password

The system checks the credentials against the database.

### If credentials match

The user is redirected to the profile page, where their information is displayed in editable form.

### If credentials do not match

The user is redirected directly to the registration page.

## User Profile

After successful login, the user's information is loaded from the database.

The following details can be edited:

* Name
* Email
* Mobile
* Address
* Course

The username is displayed as read-only.

After clicking **Update Details**, the modified information is saved to the database.

## Password Validation

The registration form validates the password according to the project requirements.

Current validation includes:

* Minimum 8 characters
* Special character restrictions as implemented in the registration code

## Setup Instructions

### 1. Install XAMPP

Install XAMPP and start:

```text
Apache
MySQL
```

### 2. Copy Project

Place the project folder inside:

```text
C:\xampp\htdocs\
```

So the path should be:

```text
C:\xampp\htdocs\PHP_Internal
```

### 3. Create Database

Open:

```text
http://localhost/phpmyadmin
```

Create a database named:

```text
php_internal
```

### 4. Create Users Table

Create a table named:

```text
users
```

with the following fields:

```text
id
name
email
mobile
address
course
username
password
```

Set `id` as the **Primary Key** and enable **AUTO_INCREMENT**.

### 5. Configure Database Connection

Open:

```text
config/db.php
```

and configure the MySQL connection according to your local XAMPP setup.

Example:

```php
$servername =
```
