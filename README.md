
# 🎓 Student Management System (PHP & MySQL)

A simple **Student Management System** built using **PHP, MySQL, HTML, CSS, and JavaScript**.  
This project performs complete **CRUD Operations** (Create, Read, Update, Delete) with a modern dark-themed user interface.

---

## 🚀 Features

✅ Add Student Record  
✅ View Students in Table Format  
✅ Update Student Details  
✅ Delete Student Record with Confirmation Alert  
✅ Success/Error Messages  
✅ Responsive Dark UI Design  
✅ Fully Functional CRUD System  

---

## 🛠️ Technologies Used

- **Frontend**
  - HTML5
  - CSS3 (Dark Theme)
  - JavaScript

- **Backend**
  - PHP

- **Database**
  - MySQL

---

## 📂 Project Structure

```

student-management/
│
├── db.php          # Database connection
├── insert.php      # Insert student data
├── update.php      # Update student record
├── delete.php      # Delete student record
├── table.php       # Display students table
├── index.html      # Add student form
├── style.css       # Form styling
└── README.md

````

---

## 🗄️ Database Setup

### 1️⃣ Create Database
```sql
CREATE DATABASE student_db;
````

### 2️⃣ Create Students Table

```sql
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    roll_no VARCHAR(50) NOT NULL,
    section VARCHAR(20) NOT NULL,
    age INT NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL
);
```
### Video LInk:
The working video of the working of the project is:
https://drive.google.com/file/d/1g4NEvU9-R5JbcyRR-xa13h4SC5PkhuiY/view?usp=sharing

---

## ⚙️ Installation Guide

1. Move project folder to:

```
htdocs (XAMPP)

```

2. Start:

* Apache Server
* MySQL Server

3. Import database in **phpMyAdmin**

4. Configure database connection in `db.php`

```php
$conn = mysqli_connect("localhost","root","","testdb");
```
## 📸 System Functionalities

### ➕ Insert

* Add new student details using form.
* Data stored in MySQL database.

### 📋 Read

* Displays all students in a styled table.

### ✏️ Update

* Edit existing student information.

### 🗑️ Delete

* Confirmation alert before deletion.
* Success message displayed after deletion.
