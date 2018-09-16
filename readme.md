# online bookstore - An E-commerce application using PHP Laravel and MySQL:

**DESCRIPTION:** 
  - This is a PHP Laravel based online bookstore application which enables the customer to buy books online by using credit or debit  card.
  - Designed dashboard for the admin user to add, edit, delete books into the system.
  - An email regarding the purchase is sent to the customer after successful payment. 
  
**FEATURES:**
  - This application mainly comprises 2 parts dashboard and Store site.
  - **Dashboard:**
      - The admin needs to login to the system using admin credentials.
      - Enabled validations to email and password during login.
      - After successful login the admin will be directed to the dashboard where he can add or delete items and he can also edit the item details like image, name, description, price.
      - Enabled validations to check whether there are any blank fields or the entered data like image file, name, description, price are valid or not. 
      - All the users and product information is stored in the MySQL Database.
     
  - **Store site:** 
      - The user can view and add the products into the cart.
      - The user can view single item details and can edit the item quantity that needs to be added into the cart in the detailed single item view page. 
      - The user can also edit the item quantity in the cart
      - Also added 'rapid-add option' which allows the user to add the items into the cart by clicking on 'add to cart' button without going into the detailed item view page.
      - The user can pay using credit ot debit card for the item he wants to purchase.
      - An email is sent to the customer after purchase.
      - This application can handle and maintain individual item records for each customer.

**TECHNICAL FEATURES:**

   - The application interface renders depending upon the device screen(mobile or web)
   - Used **Responsive Web Design Styling Techniques** for making the application device screen independent 
   - Used **Laravel Shopping Cart Package** to mannipulate items in the cart
   - Used **Stripe Services** to enable the card payments
   - Used **mailtrap.io Service** to enable sending of email
   - Used **Sessions** for cart items persistence throughout the session.
   - Used **Laravel migrations** for designing the database
   - designed **CRUD** operations for database manipulation
   - the application and database are hosted in **heroku cloud services**

 
**LIBRARIES AND PACKAGES:**
 - **Toastr:** this bootstarp library is used to display the notification messages.
 
**DEMO LINK(HOSTED IN HEROKU):**
- **Storesite:**
 (https://young-woodland-61376.herokuapp.com/)
 
- **Dashboard:**
 (https://young-woodland-61376.herokuapp.com/login)
  - **credientials:**
   **Email:** admin@admin.com
   **Password:** password
  - **Test card credientials:**
   **card number:** 4242 4242 4242 4242
   **Give any random expire date and CVV**




