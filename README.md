# 🎓 Study Program Website

A web-based information and administrative system for the Study Program (Program Studi).
This platform provides academic information management, digital letter requests, announcements, articles, and achievement publication.

---

## 📌 Overview

This project is designed to modernize and centralize study program services including:

* Student and Lecturer Management
* Digital Letter Request System
* Announcement & Article Publishing
* Academic Achievement Publication
* Role-based Access Control (RBAC)

The system follows a structured relational database design and is built with scalability and maintainability in mind.

---

## 🏗️ System Architecture

The application uses a layered MVC architecture:

* **Backend:** Laravel
* **Database:** MySQL / MariaDB
* **Authentication:** Role-Based Access Control
* **Storage:** File-based document storage (PDF, DOCX, images)

---

## 👥 User Roles

There are three primary roles:

* **Student**
* **Lecturer**
* **Admin (Head of Study Program / Kaprodi)**

Each role has different permissions and system access levels.

---

## 📂 Core Modules

### 1️⃣ User & Role Management

* User authentication
* Role assignment (many-to-many support)
* Account activation & verification

### 2️⃣ Academic Structure

* Class management
* Student profiles
* Lecturer profiles

### 3️⃣ Letter Request System

* Letter type management
* Student letter submission
* Admin approval workflow
* File attachments
* Status tracking (submitted, processing, rejected, approved)

### 4️⃣ Announcements

* File-based announcements (PDF/DOC)
* Scheduled publishing

### 5️⃣ Articles / News

* Slug-based SEO structure
* Draft & publish workflow
* Thumbnail support

### 6️⃣ Academic Achievements

* Multi-level achievements (university, regional, national, international)
* Student-achievement relation support

### 7️⃣ System Utilities

* Activity logging
* Website configuration settings
* Homepage banner management

---

## 🗄️ Database Structure (High-Level)

Main tables:

* users
* roles
* role_user
* classes
* students
* lecturers
* letter_types
* letter_requests
* announcements
* articles
* achievements
* achievement_students
* banners
* settings
* activity_logs

---

## 🔐 Security Considerations

* Password hashing (bcrypt)
* Role-based authorization
* Foreign key constraints
* File path storage instead of binary
* Activity logging for audit trail

---

## 🚀 Installation

```bash
git clone https://github.com:Techno-Zee/informatika-ubhi
cd informatika-ubhi

composer install
cp .env.example .env
php artisan key:generate

# configure database in .env

php artisan migrate
php artisan storage:link

php artisan serve
```

---

## 🧪 Development Commands

```bash
php artisan migrate:fresh --seed
php artisan make:model ModelName -mf
php artisan make:migration create_table_name
```

---

## 📁 File Storage

All uploaded files (letters, announcements, achievements) are stored in:

```
storage/app/public
```

Make sure symbolic link is created:

```bash
php artisan storage:link
```

---

## 📊 Future Improvements

* Mini Academic System (KRS, schedule, grades)
* API integration
* Notification system (email / WhatsApp)
* Dashboard analytics
* Digital signature support

---

## 🧠 Design Philosophy

* Maintain clean separation between authentication and domain entities.
* Use normalized relational schema (3NF).
* Prepare scalability for future academic system expansion.
* Avoid hardcoded business logic.

---

## 📄 License

This project is intended for internal academic use.

---