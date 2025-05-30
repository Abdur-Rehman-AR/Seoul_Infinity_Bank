Seoul Infinity Bank 

A Database-Integrated Web Application

Project Type: Bank Management System
Developer: Abdur Rehman
Duration: 1 Month
Technologies: HTML5 | CSS3 | JavaScript | PHP | MySQL | Apache (XAMPP)



==> Introduction

The Seoul Infinity Bank system is a web-based banking application developed to simulate real-world banking processes. 
It focuses on user registration, transaction handling, feedback submission, and admin-level role assignment. 
The project is designed using a fully normalized database schema and integrates both frontend and backend technologies to manage the banking workflow.



==> Objectives

•	To design a web-based bank management system.
•	To apply CRUD operations across different tables.
•	To create and manage user roles and permissions.
•	To implement a responsive and professional frontend.
•	To ensure proper connection and communication with the MySQL database.



==> Technologies Used

•	Frontend: HTML5, CSS3, JavaScript
•	Backend: PHP
•	Database: MySQL (via XAMPP)
•	Database Tool: MySQL Workbench
•	Server: Apache (XAMPP)
 

==> Functional Requirements

•	User Account Creation and Management
•	Admin Login and Role Assignment to Users
•	Feedback Submission by Users
•	Transaction Management (Deposit, Withdrawal, Transfer)
•	Transaction Status Display (Success/Failed)
•	User Search (by ID)
•	Data Insertion, Deletion, and Updating
•	Indexing on Key Columns for Query Optimization



==> Frontend Design Features

•	Responsive across desktop and mobile views.
•	Consistent layout with clear navigation.
•	User-friendly interfaces with professional color scheme.
•	Customized CSS styling for  enhancement.
All styles were handwritten without using any external UI libraries, which improved understanding of frontend design principles.
The frontend directly communicates with the backend using PHP, and it supports all core features like login, registration, transactions, role assignment, and feedback while providing a functional user experience.



==> Database Design

a) Tables Implemented:
•	user_account_table: Stores user details and account information.
•	admin_login_table: Contains admin credentials.
•	transaction_table: Stores user transactions with type, status, and timestamps.
•	feedback_table: Stores feedback submitted by users.

b) Foreign Key Relationships:
•	transaction_table.User_ID -> user_account_table.ID
•	transaction_table.Receiver_ID -> user_account_table.ID
•	feedback_table.User_ID -> user_account_table.ID
 


==> ER Diagram

Below is the ER diagram representing the entities and relationships of the Seoul Infinity Bank system.



==> Normalization

All tables are normalized up to 3rd Normal Form (3NF) ensuring minimal redundancy and maximum data integrity.
•	In 1NF, each column holds atomic values.
•	In 2NF, partial dependencies were removed.
•	In 3NF, transitive dependencies were eliminated.
This process involved careful splitting of data into multiple related tables so that each table has data related to a single concept.



==> Security Measures

•	Admin-only access to role assignment functionality.
•	Controlled user input to avoid SQL injection.



==> SQL Schema File

This project includes an SQL file (seoul_infinity_bank_database.sql) that contains:
•	Table creation statements
•	Primary and foreign key relationships
•	Indexing for query optimization



==> Conclusion

This project successfully demonstrates the integration of frontend and backend technologies with a well-structured database to simulate the real-world banking.
