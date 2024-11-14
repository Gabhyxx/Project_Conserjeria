# Hotel Mercado del Carmen problem reporter

This is a webpage for the ESMAL3 Bootcamp. We created a problem reporter, where our customers can report any issue by giving a small description, a date and the room number. But not only you can read and create, you can also delete any report and update existing reports. All the data is storaged in a LOCAL database.
## Technologies and Tools

In this project, we've used this technologies and tools:

| Technologies | Tools |
| ------------- | -------------|
| HTML5 | Visual Studio Code |
| CSS | XAMPP Control Panel |
| PHP | PHP MyAdmin
| SQL | Git |
|  | Github |


## Installation

FIrst, you have to download XAMPP Control Panel (all downloads are on their own section), and install it. 

![App Screenshot](./public/img/Step1.png)

Then, you execute the downloaded file, just any other installer. WARNING, do NOT change the installation path on the second step, is NOT RECOMMENDED to do it.

Following that, you'll open XAMPP Control Panel and hit the square to the LEFT of the services we need to install, first on Apache and then, MySQL. It will ask to install the selected service, you hit "Yes". Once you've done that, hit "Start" on those two services.

![App Screenshot](./public/img/Step2.png)

Inmediatelly, check if both services' background has turned GREEN. If yes, click on "Admin" on the MySQL line.

![App Screenshot](./public/img/Step3.png)

A web browser window will open. That's the phpMyAdmin tab. Once you're ther, select new to create a new database.

![App Screenshot](./public/img/Step4.png)

It will as for a database name. Where i've written "DATABASE NAME HERE", instead, you have to type "conserjeria"

![App Screenshot](./public/img/Step5.png)

Next, it will ask for a table name. Where i've written "TABLE NAME HERE", you have to write "problems" and hit the create button.

![App Screenshot](./public/img/Step6.png)

Now, in name, you'll have to create the columns. Here, they're repressented in rows, so be careful. You need to type, exactly this.

- id
- room
- issue
- date    

Once you've written those names, select this value types on their respective foldable charts.

- id -> INT
- room -> INT
- issue -> VARCHAR
- date -> DATE

Finally, give "issue" a lenght of 256, and check A.I for id. This last one is the most important. It should look like this.

![App Screenshot](./public/img/Step7.png)

Finally, to open the webpage, you'll have to type this on your top search bar.

localhost/conserjeria

![App Screenshot](./public/img/Step8.png)

And we're done! Now you can use our webpage with all the functionalities!


## Downloads

Download XAMPP: https://www.apachefriends.org/es/index.html
## Screenshots

![App Screenshot](./public/img/Screenshot.png)


## Authors

- [Jose Gabriel "Gabhyxx" Peña García](https://www.github.com/Gabhyxx)
- [Diego Santamaria](https://github.com/DinGo21)
- [Jonathan Torreblanca Gallejo](https://github.com/Leonkeneddy86)
- [Ishak Chahboun](https://github.com/ruzo0)
- [Alberto Hernandez](https://github.com/TOKIO-V2)