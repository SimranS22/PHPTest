# TSFBANKING - A Basic Banking System

The 'Basic Banking System' is a Web-Development Internship Project (Task #1) as part of GRIP (Graduate Rotational Internship Program) @ The Sparks Foundation.

## Project Description

### Technologies Used:
- **Front-end**: HTML, CSS, JavaScript, Bootstrap
- **Back-end**: PHP
- **Databases**: MySQL
- **IDE**: VSCode

### Database Structure:
1. **Customer Table**: Maintains all customer details (e.g., name, email, current balance, etc.).
2. **Transact Table**: Maintains all transaction details, including the transaction date and time.

### Task Requirements:
Create a dynamic website with the following features:
1. Dummy data for up to 10 customers.
2. The Customer table contains basic customer details, and the Transact table records all transfers that occur, along with their date and time.
3. Main Flow of the Website: 
   - **Home Page** → View All Customers → Select and View a Customer → Send Money → Select Customer to Transfer to → View All Customers → View Transaction History.

## Setting Up the Project in GitHub Codespaces

This project has been updated to work seamlessly in GitHub Codespaces, offering a convenient development environment. It utilizes PHP and MySQL to power the basic banking system. Below are the steps to set up and activate the project in GitHub Codespaces.

### Steps to Start the Project in GitHub Codespaces

1. **Creating the Codespace**:
    Click the "Code" button, then select one of the two options: "Local" or "Codespaces." Choose "Codespaces" and click the "Create Codespace on Main" button to begin.

3. **Starting the PHP Server**:
   Once the Codespace environment is set up, launch the PHP server using the **Run & Debug** sidebar in VSCode:
   - Choose `Launch My Site` to run the website without breakpoints.
   - Choose `Debug My Site` to run the website with debugging enabled.

   Alternatively, you can manually start Apache 2 in the terminal using `apache2-foreground` or `apache2ctl start`.

4. **Database Access**:
   The environment comes with a pre-configured MariaDB server. To access the database, use the built-in tool **Adminer**, available at [localhost:8082](http://localhost:8082).

   Use the following credentials for the database:
   - Hostname: mariadb
   - Username: mariadb
   - Password: mariadb
   - Database: mariadb

5. **Importing Database Schema and Data**:
   - The database schema and sample data are already set up. To import them, use the **SQLTools** extension in VSCode, which is pre-installed.
   - Use the `>Tasks: Run Task` command in the Command Palette to apply the schema and data to your MariaDB instance.

6. **Viewing the Website**:
   After the server is running, you can access the website at [http://localhost:8080](http://localhost:8080).

### Adminer Access:
Adminer is available at [localhost:8082](http://localhost:8082) for managing the database, viewing tables, and performing operations.