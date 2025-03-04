<!-- 
Database
|   Data adalah representasi Fakta di dunia nyata.
|   Data Base Management System | Bukan Database, tapi software untuk mengelola Database
|       - Oracle
|       - MySQL
|       - SQL Server
|       - PostgreSQL
|       - MongoDB
|
|   Database adalah data yang ada di dalam DBMS
|
|   Jenis-jenis DBMS
|       - Relational DBMS
|       - Hierarchical DBMS
|       - Network DBMS
|       - NoSQL DBMS

Dalam sebuah table, harus memiliki Primary Key
|   Primary Key adalah sebuah data yang dapat merepresentasikan satu baris record secara unik

Istilah umum dalam Database
|   - Field/Column
|   - Row/Baris/Record
|   - Key
|       - Primary Key | harus selalu ada di dalam tabel
|       - Foreign Key
|   - Auto Increment
|   - Relationship | hubungan antar tabel
|   - Normalization





============================================================================================
ctrl+C = exit
============================================================================================

// menampilkan semua database yang ada
SHOW DATABASES;

// membuat database dengan nama phpdasar
CREATE DATABASE phpdasar;

// menggunakan database phpdasar
USE phpdasar;

// membuat tabel
CREATE TABLE mahasiswa (
    -> id INT PRIMARY KEY AUTO_INCREMENT,
    -> nama VARCHAR(100),
    -> nim CHAR(11),
    -> prodi VARCHAR(100),
    -> email VARCHAR(100),
    -> gambar VARCHAR(100)
    -> );

// menampilkan semua table
SHOW TABLES;

// untuk melihat struktur table
DESCRIBE mahasiswa;

// mengisi data di table
INSERT INTO mahasiswa VALUES ('', 'Ramdani Arvianto', '21110110007', 'Teknik Informatika', 'ramdaniarvianto1@gmail.com', 'ramdani.jpg');

// untuk melihat data yang sudah dimasukan ke table
SELECT * = pilih semua field yang ada
SELECT * FROM mahasiswa;

// jika hanya ingin menampilkan 1 field saja, misalnya nim
SELECT nim FROM mahasiswa;

// jika hanya ingin menampilkan hanya beberapa field saja, misalnya nama, nim, prodi
SELECT nama, nim, prodi FROM mahasiswa;

// jika ingin mencari mahasiswa dengan nim tertentu
SELECT * FROM mahasiswa WHERE nim = '21110110007';

// jika ingin mengubah/mengupdate data
WHERE .. = .. |  boleh apapun dengan catatan yang dipilih UNIK
UPDATE mahasiswa SET nama = 'Ravon Arvianto' WHERE id = 2;

// jika ingin menghapus data yang ada di tabel
// menghapus semua data pada tabel;
DELETE FROM mahasiswa;
// menghapus 1 record saja
DELETE FROM mahasiswa WHERE id = '3';

// jika ingin menghapus tabel
DROP TABLE mahasiswa;

// jika ingin menghapus database
DROP DATABASE phpdasar;
-->