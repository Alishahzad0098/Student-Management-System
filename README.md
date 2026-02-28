# 🎓 Student Management System (PHP & MySQL)

A simple **Student Management System** built using **PHP, MySQL, HTML, CSS, and JavaScript**.  
This project performs complete **CRUD Operations** (Create, Read, Update, Delete) with a modern dark-themed user interface.


## 🚀 Features

✅ Add Student Record  
✅ View Students in Table Format  
✅ Update Student Details  
✅ Delete Student Record with Confirmation Alert  
✅ Success/Error Messages  
✅ Responsive Dark UI Design  
✅ Fully Functional CRUD System  


## 🛠️ Technologies Used

- **Frontend**
  - HTML5
  - CSS3 (Dark Theme)
  - JavaScript

- **Backend**
  - PHP

- **Database**
  - MySQL

- **Software Used**
  -XAMPP
  -VS Code
## 📂 Project Structure

student-management/
│
├── db.php # Database connection
├── insert.php # Insert student data
├── update.php # Update student record
├── delete.php # Delete student record
├── table.php # Display students table
├── index.html # Add student form
├── style.css # Form styling


---

## 🗄️ Database Setup

### 1️⃣ Create Database
```sql
CREATE DATABASE student_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    roll_no VARCHAR(50) NOT NULL,
    section VARCHAR(20) NOT NULL,
    age INT NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL
);


