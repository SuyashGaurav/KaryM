# KaryM
PROJECT KARYM
---------------

DESCRIPTION
-------------------------------------------------------------------------------------------
Our Project can relate the people who want to work and the people want the work done.
-------------------------------------------------------------------------------------------


INSTRUCTION TO GET OUR WEBSITE UP AND RUNNING:
----------------------------------------------------------------------------------------------------------------------
1. We are using XAMPP as a local host or server. XAMPP need to be already installed in the local disk.
2. Now, run XAMPP.
3. Open the extracted folder. Move the karym folder to htdocs. It contains init.php and karym.sql. 
4. Execute init.php,It will create a database in your system.
5. Running the PHP file
   i) Generally, we need a web browser to run a PHP program.
   ii) Go to any browser and type localhost/karym/homepage.php in the search box.
6. You have successfully opened our website.
------------------------------------------------------------------------------------------------------------------------


HOW TO USE
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

1.For Customers,
Login to your account, if you don t have one created by clicking on  Signup.
In your main page, you have two ways of contacting a labourer/contractor.
i) Choose the profession where you want your work to be done and you will be redirected to a page where you can find list of labourers/contractors who are in that profession.
ii) The other option is to write a description of your work in the work-request form provided below and select the category of work.

Notifications for customers:
The customer will receive two types of notifications:
i) The laborers who have proposed to do the customer's work
ii) The labourers who have accepted some work request the customer has sent them

2. For Labourer and Contractors,
Login to your account, if you don t have one create by clicking on  Signup .
In your main page, if your city is stored in the database, you will, by default  see the customers who want work done in that city matching your profession (if mentioned). If the profession is not mentioned, all jobs in that city will be shown.
If city is not stored, all customers will be shown.
The list of customers can be further filtered by the city filter on the left side of the page.

Notifications for labourers:
The labourer/contractor will receive two types of notifications:
i)The customer who wants the laborer/contractor to do their work
ii) The customers who have accepted some work request the laborer/contractor has sent them

There is an option to edit the profile for both the laborer/contractor and customer where they can update their details, namely name, phone number, address, city and profession(for laborers/contractors)

Signing out will redirect the user to their respective login pages


Precautions:
Do not Login/Signup with more than one account as it will lead to session overlapping.
To login with another account, sign out of the current account and login again.
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


