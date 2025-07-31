# 🗳️ Online Voting System

An **Online Voting System** built with **HTML, CSS, JavaScript, PHP, and MySQL** that allows users to securely vote online and view results in real-time.

---

## 🚀 Features

- ✅ **User Registration & Login**  
- ✅ **Admin Panel to Manage Candidates**  
- ✅ **Secure Voting Process (One Vote per User)**  
- ✅ **Real-time Vote Count & Results**  
- ✅ **Responsive and User-Friendly UI**

---

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL  
- **Server:** XAMPP / Apache  

---

## 📂 Project Structure

Add two folders images and uploads
```
OnlineVotingSystem/
├── index.php           # Homepage / Login
├── register.php        # User Registration
├── dashboard.php       # User Dashboard to Vote
├── admin/              # Admin Panel
│   ├── manage.php      # Manage Candidates
│   └── results.php     # View Results
├── css/                # Stylesheets
├── js/                 # JavaScript Files
├── img/                # Images
└── database.sql        # Database File
```

---

## ⚡ Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/xoxox00/OnlineVotingSystem.git
   ```
2. **Move the folder to your server (XAMPP `htdocs` folder)**
   ```
   C:/xampp/htdocs/OnlineVotingSystem
   ```
3. **Create the database**
   - Open **phpMyAdmin**
   - Create a database (e.g., `voting_system`)
   - Import `database.sql` into it

4. **Configure the database connection**
   - Open `config.php` (or connection file)  
   - Update database name, username, and password

5. **Run the project**
   ```
   http://localhost/OnlineVotingSystem
   ```

---

## 🔒 Security Features

- Encrypted passwords in the database  
- Prevents multiple voting by the same user  
- Session-based authentication  

---

## 👨‍💻 Author

- **Nitin Lakavath**  
- Frontend Developer | PHP & MySQL Enthusiast  
- 📧 iamnitin@gmail.com  

