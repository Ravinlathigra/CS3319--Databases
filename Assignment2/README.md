# Assignment 3 

Masters Course Work Databases

### The Problem

The database you design should be for the following scenario:  

A Company is creating a database for their business. They need to keep track of products that they sell, each product has a Product ID (2 chars), a description (20 chars), a cost per item and the number of items on hand (quantity). The company also has agents (sales people) who they need to keep track of. Each agent has an agent id (2 chars),  a first (30 chars) and last name (30 chars), the city that they are working out (15 chars) of and a commission percentage. We also need to keep track of the company's customers; the information you need to keep track of is:customer id (2 chars),  first name (30 chars), last name (30 chars),  city  (15 chars) and phone number.  Each agent deals with zero or more customers. Each customer must have one agent to deal with him/her. Customers purchase products, not every customer will have purchased a product. You have to keep track of the quantity of the product that the customer purchased.

 

### Instructions:

There are 2 parts for this assignment. In part 1 you will draw an ER diagram and in part 2 you will create the database on your virtual machine using MySQL

### Part 1:

For the above scenario, draw an ER diagram using MS Visio or draw.io.   Then save your ER diagram as yourwesternuseridERDiagram.jpg (or .pdf, or .gif). You should show the total or partial participation using the single/double lines. You do NOT need to include the (min,max) this time. Do not use Crows Feet Notation.  Make sure you indicate the primary key and the cardinality. 

### Part 2:

Create the following 4 script files (more details to follow):

+ File 1: Delete the database and create a new database  and create the tables
+ File 2: Insert some data and update the data
+ File 3: Query the data
+ File 4: Delete some data, add a constraint, add a view

Make sure the SQL commands are UPPER case and the table names and column names are lowercase;

### IMPORTANT:
ssh (or putty.ext) over to vm???@cs3319.gaul.csd.uwo.ca, then ssh centos@vm??? where ??? is the number for the virtual machine you were assigned and do the following:

from your home directory, create a directory called assignment2 as follows:
cd ~
mkdir assignment2
cd assignment2
copy your 4 script files to this directory and run your scripts from within this directory. 
 

### File 1 - Creation of Database and Tables

Create a script file that contains the MySQL commands to:

+ List all the current databases owned by you
+ Delete the database called yourwesternuseridassign2db if it exists
+ Create a database called yourwesternuseridassign2db
+ Connect to (use) that database
+ Add these lines to make sure the t.a. has access to your database in order to mark this assignment:
+ GRANT USAGE ON *.* TO 'ta'@'localhost';
+ DROP USER 'ta'@'localhost';
+ CREATE USER 'ta'@'localhost' IDENTIFIED BY 'cs3319';
+ GRANT ALL PRIVILEGES ON yourwesternuseridassign2db.* TO 'ta'@'localhost';
+ FLUSH PRIVILEGES;
+ List all the tables (should be none initially)
+ Create the tables you need to solve the problem above with the appropriate types and keys, foreign keys.  Make sure that:
you create the foreign keys
when you delete an agent, if that agent has any customers,  you cause an error to occur and do not delete the agent. 
+ List the tables again
+ Call this script: yourwesternuseridscript1.txt
+ After you have the script working, save the output from it using the following command (DO NOT copy and paste this command, type it in yourself because we have had issues when students copy and paste from owl): *sudo mysql -nvvf --verbose -pyourpassword < yourwesternuseridscript1.txt  > yourwesternuseridoutputscript1.txt 2>&1*


### File 2 - Insertion and Modification

*HINT: You will need to make sure you are connected to the correct database as your first step in the script.*

Using the LOAD DATA LOCAL INFILE ... mysql command (you will need to Google to see the syntax for this command), load the following data into the product table:   http://www.csd.uwo.ca/~lreid/blendedcs3319/assignments/assignment2/loaddatafall2018.txt 

NOTE: You will need to put a copy of the data file into your assiginment2 directory. 
after you insert the data, do a SELECT to prove that it loaded. 
Using the SQL INSERT statement, insert the following data also into the tables

**Products:**
+ 66,  Elbow pads, 14.25, 120
+ some other product of your choice

**Agents**
+ 99, Hugh Grant, Springfield 16
+ 22, Courtney Cox, New York, 25
+ 66, Rosie ODonnell, Ottawa, 100
+ 33, David Letterman, Bedrock, 100
+ 11, Regis Philbin,  Boston, 33
+ 12, Rosie Cox,  Ottawa, 50
+ yourself, make up an agent number, use your own first and last name, your hometown, a made up commission

**Customers**

+ 21, Homer, Simpson, Springfield, 686-8956
+ 31, Sideshow, Bob, Springfield, 686-5555
+ 12, Monty, Burns, Springfield, 789-0000
+ 15, Fred, Flintstone, Bedrock, 777-2345
+ 13, Super, Man, Kypto, 888-1234
+ 10, Barney, Rubble, Bedrock, 777-1234
+ 14, Peter Griffens, Providence, 987-4567

Purchasing Info (you can use the keys to enter this info):

+ Homer has purchased 20 Helmets
+ Homer has purchased 14 Pairs of Socks
+ Homer has purchased 10 Elbow Pads
+ Sideshow has purchased 1 Helmet
+ Sideshow has purchased 2 Pairs of Socks
+ Sideshow has purchased 4 Knee Pads
+ Sideshow has purchased 2 Elbow Pads
+ Fred has purchased 2 Elbow Pads
+ Fred has purchased 2 Knee Pads
+ Peter has purchased 19 Elbow Pads
+ Agent Customer Info (you can use the keys to enter this info):
+ Hugh Grant deals with Homer, Monty and Peter
+ David Letterman deals with Super
+ Regis Philbin deals with Barney and Fred
+ Rosie O'Donnell deals with Sideshow
+ Now show all the data in each of the tables to prove that your inserts worked.
+ Change the name of the Super Man customer to be Wonder Woman; you must do this by referencing both the firstname and lastname, NOT the Customer ID. 
+ Change the data so that in every product that Sideshow purchase was a quantity of 5; you must do this by referencing both the firstname of "Sideshow", NOT the Customer ID. 
+ Change it so that every customer that Regis deals with comes from the city of Boston; you must do this command using the first name of "Regis", not his agent id. 
+ Show the data again in all the tables to prove that your updates worked. 
+ Call this script: yourwesternuseridscript2.txt

### File 3 - Queries

Write SQL commands that query the data to:

+ Show the description of all the products
+ Show the city of all customers with no repeats
+ Show all the data in the agent table, but show them in order of their cities
+ Show the first and last name of all customers from Springfield
+ List the last name of all customers who deal with Regis
+ List the description of any product with the letters "pad" or "Pad" in the description name
+ For any customer who has actually purchased products, list the last name of each customer, the description of each product they have purchase and the quantity they have purchased of that product
+ Find the total number of products purchased by Homer. Search using his first name, not his customer id.  Just display the amount but give it a title of "Homer's Total Purchases" when the query is run. 
+ For any customer who has actually purchased products, find the total number of products purchased by each customer, print out the first and last name of the customer and their total number of  purchases.
+ List the descriptions and quantity on hand of any products that have not been purchased by anyone
+ List the description and quantity of any product that has not been purchase by Fred Flintstone (referencing his name in the query, both first and last)
+ List the first and last name of any agent and customer where the agent deals with a customer from the same city as the agent.
+ List the total number of knee pads that have been purchase. Give the result a nice title. 
+ Find all products  (description) which have been purchased by more than 3 customers 
+ Find the first name and last name of all agents who deal with customers that have purchased knee pads.
+ Before each of the above queries, put an MySQL  comment that tells the query number. In MySQL comments start with -- , so do something like:


### File 4 - Deletions/Views

Show the data in all your tables before doing the next steps.
Create a view that shows the customer first name and last name, the description of the products they have bought, the quantity of the products they have bought, the price of the product and a total cost to purchase that many items of each product. Order the view by the last name. 
Prove that your view works by selecting all the rows from it. 
Now select only the rows from the view (all columns from the view) where customers spent more than 100 dollars. 

+ Delete the product that you made up using your product's description.
+ Prove that the delete worked.
+ Delete all agents who are from Springfield.  
+ Using MySQL comments in your script file, explain why these row were or were not deleted by adding another MySQL comment (starting with -- ) right after the delete in your input script file in plain English, for example:
--  the row for ... was not deleted because ....
