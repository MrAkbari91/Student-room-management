# Student Room Management System

A **web-based application** designed to manage student dormitory room bookings, cancellations, change requests, and maintenance requests at **Jubail University College**.

---

## 🚀 Features

### 🎓 Student Portal

* Book a room (with or without a roommate)
* View status of all requests (booking, cancellation, change, maintenance)
* Cancel room bookings
* Request room changes
* Submit maintenance requests
* Download approval reports as PDFs

### 🛠 Administrator Portal

* View and manage all incoming requests
* Approve or reject:

  * Room bookings
  * Cancellation requests
  * Room change requests
  * Maintenance requests
* View and generate reports for administrative records

---

## 📁 Project Structure

```
dbcon.php
index.php
login.php

css/
├── style.css

database/
├── dormitory.accdb

image/
├── attachment.png
├── download.jpeg
├── image.jpeg
├── logo.png
├── rightimg.png

login/
├── administrator.php
├── adminvalidation.php
├── footer.php
├── head.php
├── index.php
├── logout.php
├── student.php
├── validation.php

├── admin/
│   ├── booking_request.php
│   ├── Cancel_Room_Requests.php
│   ├── change_room_request.php
│   ├── handlerequest.php
│   ├── index.php
│   └── maintenance_requests.php
│
│   └── include/
│       └── ...

├── student/
    ├── Booking_Approved_Report_pdf.php
    ├── Booking_Report.php
    ├── Cancel_Room_Approved_Report_pdf.php
    ├── Cancel_Room_Request.php
    ├── Change_Room_Approved_Report.php
    ├── Change_Room_Approved_Report_pdf.php
    ├── Change_Room_Request.php
    ├── Request_Maintainence.php
    ├── Request_Maintenance_Approved_Report_pdf.php
    ├── Request_Maintenance_Report.php
    ├── View_Requests.php
    ├── booking_scrren.php
    ├── insert.php

    └── include/
        └── ...
```

---

## 🗄️ Database

* **File:** `database/dormitory.accdb` (Microsoft Access)
* **Main Tables:**

  * `user` – Stores student data and room assignments
  * `admin` – Stores admin credentials
  * `booking_request` – Student room booking requests
  * `cancle_room_request` – Room cancellation requests
  * `change_room_request` – Requests to change rooms
  * `maintainence_request` – Requests for room maintenance

---

## 🛠 Installation

1. Copy the project folder to your web server directory (e.g., `htdocs` for XAMPP).
2. Ensure **Microsoft Access ODBC Driver** is installed.
3. Update the database connection path in `dbcon.php` if necessary.
4. Start your local server and open `index.php` in your browser.

---

## 👨‍💻 Usage

* Log in as either a **student** or an **administrator** from the main login page.
* Students can:

  * Submit and monitor room-related requests
  * Download approval reports as PDFs
* Administrators can:

  * View all requests
  * Approve/reject requests
  * Monitor system activity via reports

---

## 📦 Dependencies

* PHP (with **PDO** and **ODBC** extensions enabled)
* Microsoft Access ODBC Driver
* [Bootstrap 4](https://getbootstrap.com/)
* [jQuery](https://jquery.com/)
* [DataTables](https://datatables.net/)
* [jsPDF](https://github.com/parallax/jsPDF) and [html2canvas](https://html2canvas.hertzen.com/) for PDF export

---

## 📄 License

© 2022 Dhruv Akbari
All rights reserved. This project is intended for academic and institutional use at Jubail University College.