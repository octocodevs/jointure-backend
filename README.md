# 👥🤝 Project - Jointure Platform

![Jointure Logo](./public/img/jointure-logo.png)

Jointure is a platform that automates collaborations between brands from various sectors, facilitating seamless interactions and partnerships. This README provides an overview of the project's structure, technologies used, features, installation instructions, and contribution details.

## 📌 Requirements
- Visual Studio Code
- Node.js installed on the computer
- PHPMyAdmin

## 🚀 Technologies Used:

- Frontend:
  - Next.js
  - React.js
  - Tailwind CSS
  - Material-UI (MUI)
  - Axios
  - Jest
  - Cypress
- Backend:
  - PHP
  - Laravel

## 📁 Frontend File Structure:

- **.next:** Auto-generated files by Next.js during the build process.
- **/node_modules:** Dependencies managed by npm.
- **public/:** Static files accessible directly from the browser.
- **src/:**
  - **/app:**
    - **/admin:**
      - **/login:** Login related components and pages.
      - **/register:** Register related components and pages.
      - **/marketplace:** Components and pages related to the marketplace.
      - **/newcollab:** Components and pages related to creating a new collaboration.
      - **/inbox:** Components and pages related to the user's inbox.
    - **/components:** Reusable UI components used across the application.
      - **/MUI:** Material-UI components.
    - **/services:** Axios API integration and other services.
  - **/pages:** Main application pages.

## 📚 Features:

- **Marketplace:** Display collaborations from various users.
- **User Authentication:** Login and registration functionalities.
- **Create Collaboration:** Users can create and publish collaboration posts.
- **Inbox:** View incoming and pending collaboration proposals.
- **Search Functionality:** Search collaborations by name.
- **Responsive Design:** Optimized for desktop and mobile devices.

## ⚙️ Installation
This repository is the Frontend where the visual part of the website is located. To install it on your computer, follow these steps:

1. Clone the repository:
    ```bash
    git clone https://github.com/octocodevs/jointure-backend.git
    ```
2. Put in the terminal within the project
    ```bash
    cd jointure-backend
    ```
    ```bash
    composer install
    ```
3. Run the database (if using XAMP : Start, then Admin the MySQL DB)
    ```
4. Run the project, 
    ```bash
    php artisan serve  
   
    ```
5. Migrate and seed your database 
    ```bash
    php artisan migrate:fresh --seed
    ```
   


> [!IMPORTANT]
>
> ## 🚨 API DOC
Here is the link to the documentation of the API. You may use Postman application to check the functions

🔗 [API DOC link ]() 🔗

> 
> ## 🚨 Frontend Repository
Here is the link to our Backend repository if you want to use it with this Backend:

🔗 [Frontend link ](https://github.com/octocodevs/jointure-frontend) 🔗


## 🧪 Running Tests

To run tests, run the following command

   ```bash
   php artisan test
   ```

## Demo

![Login view](./public/img/login.png)
![Marketplace view](./public/img/marketplace.png)
![Profile view](./public/img/profile.png)


## 👩‍💻 Developers

**Back-end Team:**

Laura Artaza - [Linkedin profile]((https://www.linkedin.com/in/laura-artaza/))

Melissa Casola - [Linkedin profile](https://www.linkedin.com/in/melissa-casola/)

Zohra Bellamine - [Linkedin profile](https://www.linkedin.com/in/z-bellamine/)


**Front-end Team:**

Stephanie Céspedes - [Linkedin profile](https://www.linkedin.com/in/stephanie-cespedes/)

Grecia Landazuri - [Linkedin profile](https://www.linkedin.com/in/grecialh/)

Carolina Delfa - [Linkedin profile](https://www.linkedin.com/in/carolina-delfa-silvestre/)

Vicki Robertson - [Linkedin profile](https://www.linkedin.com/in/vickirobertson/)

Gabriela Irimia  - [Linkedin profile](https://www.linkedin.com/in/gabriela-irimia/)


