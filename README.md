## A Simple Dynamic Charity Donation Website

### Frontend - HTML, CSS 
### Backend - PHP 
### Database - MySQL 

Created a database named "Charity" and added 5 tables to the database namely, User, Organisation, Transaction, Card and UPI.
The the attributes of table "User" are id, firstName, lastName, email, password and number. As soon as the user enters his/her details, the information is stored in the database and he can access the organisation he/she wants to donate to.
The attributes of the table "Organisation" are Org_ID, Org_name, Org_Phone and Org_Address.
The attributes of table "Transaction" are userID, Org_ID, food, clothes and cash.
The attributes of table "Card" are cardNO, expDate and nameOnCard.
The attributes of table "UPI" are Org_ID, recName and rec_upiID.

<img width="791" alt="Screenshot 2023-02-08 at 2 32 09 PM" src="https://user-images.githubusercontent.com/91562537/217483528-d3c64023-ce89-4255-9b12-445fcb4207df.png">
Screenshot 1 : Showing the homepage. When the user clicks on the “DONATE” button, the user will be taken to the login page.

<img width="658" alt="Screenshot 2023-02-08 at 2 33 49 PM" src="https://user-images.githubusercontent.com/91562537/217483865-562c18df-06a2-4ca2-8d60-0e8cb5836375.png">
Screenshot 2: Showing the Login Page. Here the user has to enter their first name, last name, email, create a password and then enter their phone number and click on submit. They will be directed to the organisation table where they have to select an organisation.

<img width="658" alt="Screenshot 2023-02-08 at 2 34 49 PM" src="https://user-images.githubusercontent.com/91562537/217484112-14585934-af7a-44c1-b1fe-9ff30a998bb7.png">
Screenshot 3 : Showing a table of different organisations. The user has to select any Organisation that he/she wants to donate to and click on the “Donate” button of the corresponding Organisation.

<img width="684" alt="Screenshot 2023-02-08 at 2 35 49 PM" src="https://user-images.githubusercontent.com/91562537/217484335-1da98498-5364-4c2d-85c6-8af3542e5b2a.png">
Screenshot 4: Showing the amount of money the user wants to donate. The user can choose any option of Food, Clothes or cash that he/she wants to contribute and our portal will verify that the user’s money will be used for that field only.

<img width="687" alt="Screenshot 2023-02-08 at 2 37 15 PM" src="https://user-images.githubusercontent.com/91562537/217484678-c988d001-1690-4fbf-ab6e-5321453b48db.png">
Screenshot 5: This page provides the user options of paying the amount to the organisation. The user can either choose Credit/Debit card or UPI/E-Wallets.

<img width="736" alt="Screenshot 2023-02-08 at 2 38 23 PM" src="https://user-images.githubusercontent.com/91562537/217484930-9a1437c2-18e0-4532-a7d9-226dec08b848.png">
Screenshot 6: Showing the Card details page. Here the user will have to enter the card number, expiration date, Name on card and their CVV. Everything except CVV will be stored in the database so that the user can make the donation quickly the next time.

<img width="755" alt="Screenshot 2023-02-08 at 2 39 27 PM" src="https://user-images.githubusercontent.com/91562537/217485148-041fbd62-884c-48c4-b215-8c6214b3dda2.png">
Screenshot 7: Showing the UPI options page. Here the user can select any one among the three payment options, Pay, PhonePe or Paytm. When the user clicks on submit, the entering details page opens up.
