
# 📚 PhpCollection

This repository contains the **basic PHP operations** practiced as part of the **BCA 3rd Semester curriculum**. The goal of this collection is to cover common PHP operations such as form handling, database CRUD operations, and in the future — session and cookie management.

---

## 📌 Features Covered

- ✅ Form input using HTML and POST method
- ✅ Data insertion to MySQL database
- ✅ Displaying records from the database
- ✅ Editing existing records
- ✅ Deleting records
- ⏳ Session and cookie handling (Coming Soon)

---

## 🛠 Technologies Used

- **PHP** (Core)
- **MySQL** (XAMPP)
- **HTML/CSS** for basic front-end
- **VS Code** for development

---

## 📂 Folder Structure

```

PhpCollection/
├── connection.php         # DB connection file
├── index.php              # Form input and insert logic
├── display.php            # Shows records with Edit/Delete
├── edit.php               # Edits the selected record
├── delete.php             # Deletes the selected record
└── README.md              # This file

````

---

## ⚙️ How to Use

1. Clone the repository or download ZIP.
2. Make sure you have XAMPP running and MySQL enabled.
3. Create a MySQL database named `yourdbname`.
4. Create the `pdetail` table using:

```sql
CREATE TABLE pdetail (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    phone BIGINT,
    gender VARCHAR(20),
    country VARCHAR(50)
);
````

5. Update your `connection.php` credentials (DB name, user, password).
6. Run the project from `localhost/PhpCollection/index.php`.

---

## 📌 Upcoming Additions

* [x] Add session handling ✅
* [x] Add cookie management ✅
* [ ] Login system with authentication 🔒
* [ ] Bootstrap UI improvement 🎨

---

## 🤝 Contributing

Open for contributions. Fork this repo and submit a pull request.

---

## 📧 Contact

For any queries, contact me via GitHub or email.

---

> Created with ❤️ for learning and sharing by a BCA 3rd Sem student.

```

Let me know if you want to include screenshots or a walkthrough of the pages!
```
