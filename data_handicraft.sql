CREATE DATABASE handicraft;
use handicraft


CREATE TABLE admins (
  admin_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) NOT NULL UNIQUE,
  hash_password VARCHAR(255) NOT NULL,
  email VARCHAR(255)
);



INSERT INTO admins (username, hash_password, email) 
VALUES 
('John Doe', SHA2('hash_of_John_Doe', 256), 'john.doe@gmail.com'),
('Jane Smith', SHA2('hash_of_Jane_Smith', 256), 'jane.smith@gmail.com'),
('Alice Johnson', SHA2('hash_of_Alice_Johnson', 256), 'alice.johnson@gmail.com');



DELETE FROM admins;

CREATE TABLE category (
    category_id INT PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(255),
    image_url VARCHAR(255)
);

INSERT INTO category (category_name, image_url) 
VALUES 
   ('Khay', 'category1_image_url.png'),
   ('Túi xách', 'category2_image_url.png'),
   ('Chao đèn', 'category3_image_url.png'),
   ('Hộp', 'category4_image_url.png'),
   ('Lồng bàn', 'category5_image_url.png');

  
CREATE TABLE products (
    product_id INT PRIMARY KEY AUTO_INCREMENT,
    category_id INT,
    product_name VARCHAR(255),
    description TEXT,
    price DECIMAL,
    material VARCHAR(255),
    image_url VARCHAR(255),
    origin VARCHAR(255),
   FOREIGN KEY (category_id) REFERENCES category(category_id)
);
    
    
INSERT INTO products (category_id, product_name, price, material, image_url, origin) 
VALUES 
	(1, 'Khay trà',  250000, 'Song guột', 'Khay trà.png', 'Việt Nam'),
   (1, 'Khay bánh mỳ', 80000, 'Tre', 'Khay bánh mỳ.png', 'Việt Nam'),
   (1, 'Khay sợi (Quai da)', 280000, 'Sợi và da thuộc', 'Khay sợi.png','Việt Nam'),
   (1, 'Khay đựng quần áo guột', 900000, 'Song guột', 'Khay đựng quần áo guột.png','Việt Nam'),
   (2, 'Túi xách cói quai da', 379000, 'Cói kèm quai da', 'Túi xách cói quai da.png','Việt Nam'),
   (2, 'Túi xách tre quai mây', 199000, 'Tre và mây', 'Túi xách tre quai mây.png','Việt Nam'),
	(2, 'Túi mây Bé Bự', 700000, 'Guột', 'Túi mây Bé Bự.png', 'Việt Nam'),
	(3, 'Chao đèn Trúc San', 170000, 'Tre', 'Chao đèn Trúc San.png', 'Việt Nam'),
	(3, 'Chao đèn An Nhiên', 210000, 'Tre', 'Chao đèn An Nhiên.png', 'Việt Nam'),
	(3, 'Chao đèn An Nam', 200000, 'Tre', 'Chao đèn An Nam.png', 'Việt Nam'),
	(3, 'Chao đèn Mộc Miên', 180000, 'Tre', 'Chao đèn Mộc Miên.png', 'Việt Nam'),
	(3, 'Chao đèn Túc Mạch', 210000, 'Tre', 'Chao đèn Túc Mạch.png', 'Việt Nam'),
	(4, 'Hộp chè nan bọng', 80000, 'Tre', 'Hộp chè nan bọng.png', 'Việt Nam'),
	(4, 'Hộp giấy ăn tròn', 280000, 'Guột', 'Hộp giấy ăn tròn.png', 'Việt Nam'),
	(4, 'Hộp tre nan bọng', 70000, 'Tre', 'Hộp tre nan bọng.png', 'Việt Nam'),
	(4, 'Hộp giấy ăn chữ nhật', 320000, 'Guột', 'Hộp giấy ăn chữ nhật.png', 'Việt Nam'),
	(4, 'Hộp tre hoa thị tròn', 220000, 'Tre', 'Hộp tre hoa thị tròn.png', 'Việt Nam'),
	(5, 'Lồng bàn nan nghiêng (Kèm mâm)', 165000, 'Tre', 'Lồng bàn nan nghiêng (Kèm mâm).png', 'Việt Nam'),
	(5, 'Lồng bàn có màn che chữ nhật', 140000, 'Tre', 'Lồng bàn có màn che chữ nhật.png', 'Việt Nam'),
	(5, 'Lồng bàn vuông đan hoa thị', 400000, 'Tre', 'Lồng bàn vuông đan hoa thị.png', 'Việt Nam'),
	(5, 'Lồng bàn có màn che tròn', 140000, 'Tre', 'Lồng bàn có màn che tròn.png', 'Việt Nam'),
	(5, 'Lồng bàn tròn đan hoa thị (Kèm mâm)', 250000, 'Tre', 'Lồng bàn tròn đan hoa thị (Kèm mâm).png', 'Việt Nam');   
























