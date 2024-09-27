# WordPress Webpage Designed with Divi Builder

This project showcases a WordPress webpage designed using the Divi Builder theme. It includes a custom child theme for additional functionalities and a database setup for the content. The webpage features a responsive design and utilizes Divi's built-in tools for customization.

## **Overview**

The project uses the Divi Builder theme to create a visually appealing and responsive WordPress site. The child theme provides a foundation for any additional customizations. All custom CSS is managed through the WordPress Customizer’s Additional CSS section.

## **Features**

- **Divi Builder Theme**: Utilizes the Divi Builder theme for creating and managing webpage layouts.
- **Custom Child Theme**: A child theme for adding custom functionalities and managing settings.
- **Database Setup**: Includes an SQL file for setting up the database schema for the webpage.
- **Responsive Design**: The webpage is designed to be responsive and mobile-friendly.

## **Screenshots**

### Desktop View

![Desktop View](Desktop%20View%20PetSet.png)

### Mobile View

![Mobile View](Moblie%20View%20PetSet.png)

## **Folder Structure**

- **`wp-content/themes/Divi_Child/`**: The child theme folder for the Divi Builder theme.
  - **`functions.php`**: Contains any custom PHP code for the child theme.

- **`divifigma.sql`**: SQL file for setting up the database schema for the Divi Builder project.

## **How It Works**

1. **Divi Builder Theme**:
   - The Divi Builder theme is used to design and manage the webpage layout.

2. **Custom Child Theme**:
   - `functions.php` in the `Divi_Child` theme can be used for additional PHP customizations. This is where you can add custom functions, filters, or actions for the child theme.

3. **Database Schema**:
   - Use the `divifigma.sql` file to set up the necessary database tables and structure for the Divi Builder site.

4. **Custom CSS**:
   - Any custom CSS styles are managed through the WordPress Customizer’s Additional CSS section.


## **How to Run the Project**

Follow these steps to run the project on your local server:

1. **Rename Project Folder**:
   - Rename the project folder to `FigmaDivi`.

2. **Set Up Localhost Environment**:
   - Run the project on a local server environment such as **WAMP** or **XAMPP**.
   - Move the project folder to your server's `www` or `htdocs` directory.

3. **Access the Project**:
   - Open a web browser and visit `http://localhost/FigmaDivi` to access the site.

4. **Database Setup**:
   - Import the `divifigma.sql` file into your database using tools like phpMyAdmin or MySQL command line to set up the database schema.
