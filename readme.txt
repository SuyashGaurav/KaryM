PROJECT KARYM
---------------

DESCRIPTION
-------------------------------------------------------------------------------------------
Our Project can relate the people who want to work and the people want the work done.
-------------------------------------------------------------------------------------------


INSTRUCTION TO GET OUR WEBSITE UP AND RUNNING:
----------------------------------------------------------------------------------------------------------------------
1. We are using XAMPP as a local host or server. XAMPP need to be already installed in the local disk.
2. Our project is in zipped format as "210010054,210010032,210010019,210010017,21010040.zip". You have to extract the file. 
3. Now, run XAMPP.
4. Open the extracted folder. Move the karym folder to htdocs. It contains init.php and karym.sql. 
5. Execute init.php ,It will create database in your system.
6. Running the php file
   i) Generally, we need a web browser to run a PHP program.
   ii) Go to any browser and type localhost/karym/homepage.php in the search box.
7. You have successfully open our website.
------------------------------------------------------------------------------------------------------------------------



HOW TO USE
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

1.For Customer,
Login to your account, if you don’t have one create by clicking on ‘Signup’.
In your main page, you have two ways of contacting a labourer/contractor.
i) Choose the profession where you want your work to be done and you will be redirected to a page where you can find list of labourers/contractors who are in that profession.
ii) The other option is to write a description of your work in the work-request form provided below and select the category of work.

Notifications:
The customer will recieve two types of notifications:
i)The labourers who have proposed to do the customer's work
ii) The labourers who have accepted some work request the customer has sent them

2. For Labourer and Contractor,
Login to your account, if you don’t have one create by clicking on ‘Signup’.
In your main page, if your city is stored in the database, you will, by default  see the customers who want work done in that city matching your profession (if mentioned). If profession is not mentioned, all jobs in that city will be shown.
If city is not stored, all customers will be shown.
The list of customers can be further filtered by the city filter on the left side of the page.

Notifications:
The labourer/contractor will recieve two types of notifications:
i)The customer who wants the labourer/contractor to do their work
ii) The lcustomers who have accepted some work request the labourer/contractor has sent them

There is an option to edit profile for both the labourer/contractor and customer where they can update their details, namely name, phone number, address, city and profession(for labourers/contractors)

Signing out will redirect the user to their respective login pages


Precautions:
Do not Login/Signup with more than one account as it will lead to session overlapping.
To login with another account, sign out of the current account and login again.
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


