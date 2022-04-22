CREATE DATABASE db_dimas; 
CREATE TABLE peserta_didik( NIS CHAR (12) PRIMARY KEY, Nama VARCHAR(50), Gender ENUM('L','p'), Tempat_Lahir VARCHAR(50), Tgl_Lahir DATE ); 
CREATE TABLE kelas( kode_kelas CHAR (5) PRIMARY KEY, nama_kelas VARCHAR(10) );
CREATE TABLE jurusan( kode_jurusan CHAR (5) PRIMARY KEY, nama_jurusan VARCHAR(15) );