# My Personal Health Record

## About

There are many people who live with multiple chronic illnesses each day. Often times, the very diagnosis of a major chronic illness is a countdown to one of its commodities. Each of these patients know that it is crucial for them to manage their conditions by supplying their health care providers with important data. Data, such as vital signs, weight, blood pressure, blood glucose, diet, exercise, etc. can help a patient and their provider better refine their treatment plan and goals. This website aims to give the patient a place to input the large amounts of data and securely store it to be able to retrieve it when necessary.

This project is scaled down to meet the requirements in time for review. This repository will later be replaced with the full version that I have been developing side-by-side to this one.

## How to Run

#### Live

A live version of this website can be found [here](https://www.shadesofanime.website/projects/myphr/ "ShadesOfAnime - My PHR Project").

If the link fails to work, please direct your browser to https://www.shadesofanime.website/projects/myphr/.

Once you have directed your browser to this site, you will see the landing page. To access the portion of the project known and the "Dashboard Portal" You will need to login. Click on the login link to be directed to the Login Page. On this page, you will see a link called "Fake Login." Click this link to access the portal. Future editions will have a user system in place.

#### Locally

To install locally, you will need the following:

1. A local server, something such as XAMP or WAMP64. These two options include an Apache Server, PHPAdmin and MySQL Server. You will need these three components to run this website in its entirety.
2. You will need to clone this repository and place the files in your public html folder of your local server. (Often listed as something such as HTTPDOCS, WWW, PUBLIC_WWW, PUBLIC_HTML, etc. Check with your installation documentation to find the location).
3. Download the files for the MYSQL database [here](https://www.shadesofanime.website/projects/mysql/db.7z "ShadesOfAnime - MySQL Files"). You will need 7Zip to decompress the file.
4. Using PHPAdmin, import the MySQL database file you downloaded.
5. Using the information in the DBCRED.TXT file of the MySQL download, create a user with the same username and password listed in this file. BE SURE to use the same information otherwise you will not be able to connect to the database.
6. Additionally, make sure to grant "Global Privileges" to the username you create.



## Project Review
The "about.html" page in the root directory has full details about the components for the project review.
One note regarding the live version and the gitHub code versions. The connection files for the database are not the same. This is to protect the security of the online database. The credentials used between the two versions differ greatly.