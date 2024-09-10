Project Overview
The Visit Saudi website is designed to be a comprehensive resource for discovering attractions and activities throughout the Kingdom of Saudi Arabia. It features both visitor and administrator functionalities to manage and display items, cultural experiences, and reviews. The website aims to promote tourism by providing detailed information and allowing users to interact with content through reviews and management features.

Features
Database Schema
The database includes the following tables:

Admin: Manages admin accounts with the attributes:

ID (Primary Key)
username
password
email
Category: Stores categories with the attributes:

ID (Primary Key)
name
description
Item: Contains item details with the attributes:

ID (Primary Key)
name
logo
description
categoryID (Foreign Key referencing Category)
Review: Manages reviews with the attributes:

ID (Primary Key)
item_id (Foreign Key referencing Item)
name
body
rating
Additional Columns: You may include extra columns as needed, such as date, website, and working hours.

Visitor Functions
View All Items: Lists all items on the home page or a designated “All_Items” page.
View Item Details: Provides detailed information about a specific item on its profile page.
View Item Reviews: Displays reviews for an item on its profile page.
Add Review: Allows visitors to submit new reviews for items on their profile page.
Administrator Functions
Log-In: Admin log-in page for authentication.
Add Item: Form to add new items, including name, description, and logo.
Delete Item: Form to select and delete existing items.
Edit Item: Forms to select, edit, and update item details.
Dynamic Pages (PHP)
Home Page: Lists all items with links to their profile pages.
Item Profile Page: Shows item details, overall rating, and reviews, with an option to add a new review.
Admin Log-In Page: Form for admin login and authentication.
Admin Control Panel:
Add Item: Form for inserting new items into the database.
Delete Item: Form for selecting and deleting items.
Edit Item: Forms for selecting, editing, and updating item details.
Installation & Setup
Clone the Repository:

bash
نسخ الكود
git clone https://github.com/shahad-z/visit-saudi.git
Navigate to the Project Directory:

bash
نسخ الكود
cd visit-saudi
Set Up the Database:

Create a database using the provided schema.
Import the sample data into the database.
Install Dependencies (if applicable):

Ensure you have a web server like Apache or Nginx and PHP installed.
Upload to Local Server:

Place the project files in your web server's root directory (e.g., /var/www/html for Apache).
Run the Project:

Start your web server if it’s not already running.
Access the Project:

Open your browser and navigate to http://localhost/visit-saudi (or the appropriate URL for your local server).
Test the Site:

Conduct usability testing to ensure all features are working correctly.
Technology Stack
Frontend: HTML, CSS, JavaScript
Backend: PHP
Database: MySQL or similar
APIs: Google Maps API for location services (for "Visit Saudi" features), Yelp API for reviews (if integrated)
Contributing
Contributions are welcome! Please submit any issues or improvements via pull requests.



Contact
For questions or support, please contact shahad.otb233@gmail.com.
