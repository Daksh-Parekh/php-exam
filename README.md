# 🚄 Railway Train Booking System API (PHP + MySQL)

A **RESTful API** built with **PHP and MySQL** to manage railway trains and passenger bookings. Designed for integration with a **Flutter frontend**, this system uses **foreign key constraints** with cascading functionality to maintain database consistency.

---

## 🧾 Project Summary

> A backend system simulating real-time train booking operations with robust relational data handling via SQL constraints.

---

## 🧱 Database Entities

### 📌 Trains
- `id` (Primary Key)
- `name`
- `type`

### 👤 Passengers
- `id` (Primary Key)
- `name`
- `email`
- `train_id` (Foreign Key → `trains.id`)

---

## 🔁 Supported Operations

| Feature         | Trains | Passengers |
|----------------|--------|------------|
| Create (POST)  | ✅     | ✅         |
| Read (GET)     | ✅     | ✅         |
| Update (PUT)   | ✅     | ✅         |
| Delete (DELETE)| ✅     | ✅         |

---

## Screenshot
<img src="https://github.com/user-attachments/assets/77e16384-a450-47ea-9b33-2d07bf381f3b" width="350px">
<img src="https://github.com/user-attachments/assets/69472ba9-0ff7-4f1a-9813-047cd6615fd2" width="350px">
<img src="https://github.com/user-attachments/assets/79129fb8-ae97-4122-b585-4706784b2f27" width="350px">
<img src="https://github.com/user-attachments/assets/79129fb8-ae97-4122-b585-4706784b2f27" width="350px">
<img src="https://github.com/user-attachments/assets/7c5c8a70-653a-465a-bc70-788d264380df" width="350px">
<img src="https://github.com/user-attachments/assets/4e5c8e22-fdf8-4f63-8579-bbb7707fe0a7" width="350px">
<img src="https://github.com/user-attachments/assets/906dde95-cae6-4ec7-a210-7fe8b49fd438" width="350px">
<img src="https://github.com/user-attachments/assets/4aa1ba8c-c575-4336-aac9-6e39801f7145" width="350px">
<img src="https://github.com/user-attachments/assets/21e25889-9b1e-46ef-b843-5aeb8cfddacd" width="350px">
<img src="https://github.com/user-attachments/assets/cb8931e3-8d2d-4bd1-b3da-7b9f1099850e" width="350px">


## 🔗 Foreign Key Constraints

To maintain data integrity between `trains` and `passengers`, the following SQL constraint is used:

```sql
ALTER TABLE passengers
ADD CONSTRAINT fk_train_id
FOREIGN KEY (train_id) REFERENCES trains(id)
ON DELETE CASCADE
ON UPDATE CASCADE;


