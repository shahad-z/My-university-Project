Project Overview
This project is an online store for selling handcrafted products. The website allows customers to browse, order products, and create an account. It provides detailed information about each product, including its name, description, price, and discount.

The website is structured with both static and dynamic pages. HTML and CSS are used for static content, while PHP and MySQL handle dynamic functionality and database interactions. We implemented the site using an object-oriented programming (OOP) approach, organizing it into three layers:

Presentation Layer: Handles the user interface.
Business Layer: Manages the core logic.
Data Access Layer: Interacts with the database.
Goal and Objectives
Goal
The goal of the project is to simplify the shopping experience for handcrafted products through an easy-to-use online platform.

Objectives
Develop a user-friendly website with easy navigation.
Restrict access to authenticated customers only.
Display a wide range of handcrafted products with their details and prices.
Enable authenticated customers to browse and order products.
Features
Customer Functions
Create Account: Customers must sign up and log in to browse and order products.
Browse Products: View a catalog of handcrafted products with information such as name, price, description, and discounts.
Place Orders: Customers can add products to their orders and submit them.
Admin Functions (if applicable)
Manage product listings: add, update, or delete products.

                 
Database Schema
The website uses MySQL to manage three core tables:

Customers: Stores customer information.
Products: Stores product details.
Orders: Stores order records.
Table 1: customers
Field	Data Type	Description
customer_id	INT	PRIMARY KEY, AUTO_INCREMENT
customer_fname	VARCHAR(255)	Customer's first name (NOT NULL)
customer_lname	VARCHAR(255)	Customer's last name (NOT NULL)
customer_email	VARCHAR(255)	Customer's email (NOT NULL)
customer_password	VARCHAR(255)	Customer's password (NOT NULL)
Table 2: products
Field	Data Type	Description
product_id	INT	PRIMARY KEY, AUTO_INCREMENT
product_name	VARCHAR(255)	Name of the product (NOT NULL)
product_description	VARCHAR(255)	Description of the product (NOT NULL)
product_price	DECIMAL(10,2)	Product price (NOT NULL)
product_discount	DECIMAL(10,2)	Discount on the product (NOT NULL)
product_img	VARCHAR(255)	URL or path to the product image (NOT NULL)
Table 3: orders
Field	Data Type	Description
id	INT	PRIMARY KEY, AUTO_INCREMENT
product_id	INT	Foreign Key referencing products
customer_id	INT	Foreign Key referencing customers
order_date	DATETIME	Date the order was placed (NOT NULL)
Installation & Setup

Import the provided SQL file into your MySQL database to set up the schema and sample data.
Run the Website on Local Server:

Make sure to have a local server (e.g., XAMPP, MAMP) running Apache and MySQL.
Place the project files in the htdocs folder (or your server's equivalent).
Access the Website:

Open your browser and go to http://localhost/craftify to view the website.
Technologies Used
Frontend: HTML, CSS
Backend: PHP (with Object-Oriented Programming)
Database: MySQL
Server: Apache (via XAMPP, MAMP, or any local server)
