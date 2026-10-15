<div align="center">

# 🛋️ iStudio — Interior Designer Website

### A responsive interior design website that connects clients with design professionals

![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap%205-7952B3?logo=bootstrap&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)

</div>

---

## 📖 About the Project

**iStudio** is a responsive and feature-rich interior design website. Modern clients expect an elegant, accessible online experience that helps them visualise ideas before they are built, and iStudio delivers that through a clean, modern interface.

The website allows visitors to explore interior design ideas, contact designers, subscribe to newsletters and create personal accounts. It was built as a university project at **Nanjing Tech University** (Department of Computer Science).

---

## 🎯 Key Goals

- Simplify the interaction between clients and designers
- Provide online access to design services
- Build a digital portfolio space for design professionals

### iStudio's dual purpose

| For Designers | For Clients |
| ------------- | ----------- |
| Showcase creative interior projects | Explore styles and design concepts |
| Build a professional online presence | Contact professionals directly through forms |

---

## ✨ Features

- 🔐 **User Authentication** – Registration and login using PHP and MySQL with secure data handling and session management
- 📰 **Newsletter Subscription** – Users can subscribe to receive design tips and updates, stored in the database
- 📩 **Contact Form** – Direct communication between clients and designers, with automated email sending using PHP `mail()`
- 📱 **Responsive UI** – Bootstrap 5 ensures full mobile and desktop compatibility
- 🎨 **Modern Layout Design** – Elegant colour palette, grid system and image galleries
- ✅ **Input Validation** – All user forms are validated for security

---

## 🛠️ Tech Stack

| Layer     | Technology                  |
| --------- | --------------------------- |
| Frontend  | HTML, CSS, Bootstrap 5      |
| Backend   | PHP                         |
| Database  | MySQL                       |
| Server    | XAMPP / WAMP                |
| Editor    | Visual Studio Code          |

---

## 📸 Screenshots

| Home | Login / Register |
| :---: | :---: |
| <img src="screenshots/home.png" width="400"/> | <img src="screenshots/login.png" width="400"/> |

| Gallery | Contact |
| :---: | :---: |
| <img src="screenshots/gallery.png" width="400"/> | <img src="screenshots/contact.png" width="400"/> |

> 💡 Create a `screenshots/` folder in the repository and add your images with these names.

---

## 📂 Project Structure

```text
iStudio_website/
├── index.php            # Home page
├── login.php            # User login
├── register.php         # User registration
├── contact.php          # Contact form
├── subscribe.php        # Newsletter subscription
├── config.php           # Database connection
├── css/                 # Stylesheets
├── js/                  # Scripts
├── images/              # Images and gallery
├── database/
│   └── istudio.sql      # MySQL database dump
└── README.md
```

> Update the file names above to match the files in this repository.

---

## 🚀 Getting Started

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) or WAMP server (includes PHP, Apache and MySQL)
- A modern browser such as Chrome or Edge

### Installation

1. **Clone the repository** into your server's web folder (`htdocs` for XAMPP)
   ```bash
   cd C:\xampp\htdocs
   git clone https://github.com/Ameersubhan1/iStudio_website.git
   ```

2. **Start Apache and MySQL** from the XAMPP Control Panel

3. **Create the database**
   - Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Create a new database (for example `istudio`)
   - Click **Import** and select the `.sql` file from the project

4. **Configure the database connection**
   - Open the connection file (for example `config.php`) and set your details:
   ```php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db   = "istudio";
   ```

5. **Open the website**
   ```
   http://localhost/iStudio_website/
   ```

> ⚠️ The contact form uses PHP `mail()`, which needs a configured mail server (SMTP) to actually send emails on a local machine.

---

## 💻 System Requirements

| Hardware | Software |
| -------- | -------- |
| Processor: Intel i3 or higher | Code editor: VS Code |
| RAM: 4 GB | XAMPP or WAMP server |
| Storage: 500 MB minimum | Browser: Chrome / Edge |

---

## 📋 Non-Functional Requirements

- **Usability:** simple and intuitive UI for all users
- **Performance:** optimised for quick load times
- **Compatibility:** works across major browsers and screen sizes
- **Security:** input validation for all user forms
- **Scalability:** database structure allows future module additions

---

## 🔮 Future Improvements

- [ ] Admin panel to manage messages and users
- [ ] Designer profiles with individual portfolios
- [ ] Appointment and consultation booking
- [ ] Image upload for design projects
- [ ] SMTP-based email sending

---

## 🤝 Contributing

Contributions, issues and feature requests are welcome. Fork the repository, create a feature branch and open a pull request.

---

## 📄 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

## 👨‍💻 Author

**Ameer Subhan Hussain**
Department of Computer Science, Nanjing Tech University

- GitHub: [@Ameersubhan1](https://github.com/Ameersubhan1)

<div align="center">

> *"Design is intelligence made visible, and iStudio brings that intelligence online."*

⭐ If you like this project, please give it a star!

</div>
