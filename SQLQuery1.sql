CREATE TABLE [user] (
    userID INT PRIMARY KEY,
    Fname VARCHAR(128),
    Lname VARCHAR(150),
    Email VARCHAR(255) UNIQUE,
    Address VARCHAR(512),
    ContactNo VARCHAR(15),
    Country VARCHAR(128),
    Password VARCHAR(255)
);

CREATE TABLE newitem (
   bcode INT PRIMARY KEY,
   bcategory VARCHAR(128),
   bname VARCHAR(128),
   bcountry VARCHAR(128),
   bprice FLOAT,
   bdep VARCHAR(512),
   bimage VARCHAR(255)
);

CREATE TABLE sellitem (
   ucode INT PRIMARY KEY,
   ubrand VARCHAR(128),
   udep VARCHAR(512),
   uprice FLOAT,
   ucountry VARCHAR(128),
   userID INT,

   FOREIGN KEY (userID) REFERENCES [User](userID)
);

CREATE TABLE payment (
    payID INT PRIMARY KEY,
    cardtype VARCHAR(128),   
    cdName VARCHAR(255), 
    cardNo VARCHAR(16), 
    cvv  VARCHAR(3),   
    userID INT,
    bcode INT,
    FOREIGN KEY (userId) REFERENCES [user](userID),
    FOREIGN KEY (bcode) REFERENCES newitem(bcode)

);

CREATE TABLE refund (
   refundID INT PRIMARY KEY,
   payID INT,
   reason VARCHAR(512),
   FOREIGN KEY (payID) REFERENCES Payment(payID)
);


CREATE TABLE faq(
   faqID INT PRIMARY KEY,
   que VARCHAR(512),
   ans VARCHAR(512),
   userID INT,
   FOREIGN KEY (userID) REFERENCES [User](userID)
);

-- Insert data into [user] table
INSERT INTO [user] (userID, Fname, Lname, Email, Address, ContactNo, Country, Password)
VALUES
    (1, 'John', 'Doe', 'johndoe@gmail.com', '123 Main St', '+11234567890', 'USA', 'hashed_password_1'),
    (2, 'Jane', 'Smith', 'smith@gmail.com', '456 Elm St', '+19876543210', 'Canada', 'hashed_password_2'),
    (3, 'Alice', 'Johnson', 'alicejohnson@yahoo.com', '789 Oak St', '+442012345678', 'UK', 'hashed_password_3'),
    (4, 'Bob', 'Brown', 'bobbrown@gmail.com', '101 Pine St', '+33612345678', 'France', 'hashed_password_4'),
    (5, 'Eva', 'Davis', 'eva@yahoo.com', '202 Cedar St', '+491234567890', 'Germany', 'hashed_password_5');

-- Insert data into newitem table (music instruments)
INSERT INTO newitem (bcode, bcategory, bname, bcountry, bprice, bdep, bimage)
VALUES
    (101, 'Violin', 'Violin Model A', 'Italy', 599.99, 'Musical Instruments Department', 'violin_a.jpg'),
    (102, 'Violin', 'Violin Model B', 'France', 699.99, 'Musical Instruments Department', 'violin_b.jpg'),
    (103, 'Guitar', 'Acoustic Guitar Model X', 'USA', 499.99, 'Musical Instruments Department', 'acoustic_guitar_x.jpg'),
    (104, 'Guitar', 'Electric Guitar Model Y', 'USA', 799.99, 'Musical Instruments Department', 'electric_guitar_y.jpg');

-- Insert data into sellitem table (music instruments for sale)
INSERT INTO sellitem (ucode, ubrand, udep, uprice, ucountry, userID)
VALUES
    (1, 'Stradivarius', 'Musical Instruments Department', 699.99, 'Italy', 1),
    (2, 'Gibson', 'Musical Instruments Department', 899.99, 'USA', 2),
    (3, 'Fender', 'Musical Instruments Department', 549.99, 'USA', 3),
    (4, 'Yamaha', 'Musical Instruments Department', 749.99, 'Japan', 4)

-- Insert data into payment table
INSERT INTO payment (payID, cardtype, cdName, cardNo, cvv, userID, bcode)
VALUES
    (1, 'Visa', 'John Doe', '1234567890123456', '123', 1, 101),
    (2, 'Mastercard', 'Jane Smith', '2345678901234567', '234', 2, 102),
    (3, 'American Express', 'Alice Johnson', '3456789012345678', '345', 3, 103);

-- Insert data into refund table
INSERT INTO refund (refundID, payID, reason)
VALUES
    (1, 1, 'Product arrived damaged'),
    (2, 2, 'Wrong size received'),
    (3, 3, 'Changed my mind');

-- Insert data into faq table
INSERT INTO faq (faqID, que, ans, userID)
VALUES
    (1, 'How can I track my order?', 'You can track your order by logging into your account and visiting the order history page.', 1),
    (2, 'What is your return policy?', 'Our return policy allows returns within 30 days of purchase. Please check our website for detailed information.', 2),
    (3, 'How can I contact customer support?', 'You can contact our customer support team via email at support@example.com or by phone at +1122334455.', 3);


	Select userID,count(*)
	from [user]
	group by userID

	Select count(*)
	from [user]

	INSERT INTO [user] (userID, Fname, Lname, Email, Address, ContactNo, Country, Password)
VALUES
    (6, 'John', 'Doe', 'johndoe1@gmail.com', '123 Main St', '+11234567890', 'USA', 'hashed_password_1'),
(7, 'John', 'Doe', 'johndoe2@gmail.com', '123 Main St', '+11234567890', 'USA', 'hashed_password_1');

Select userID,count(*)
from [user]
group by userID
order by userID ASC

Select bname,bprice
from newitem
where bprice >'500' 

Select fname
from [user]
where fname like '%o%'

Select fname,Country,ContactNo
from [user]
where fname like 'J%'

Select bcategory,count(*)
from newitem
group by bcategory

Select sum(bprice) as 'value of my store'
from newitem

Select bcategory,sum(bprice)
from newitem
group by bcategory

Select bcategory,bname,MAX(bprice)
from newitem
group by bcategory,bname

INSERT INTO newitem (bcode, bcategory, bname, bcountry, bprice, bdep, bimage)
VALUES
    (107, 'Violin', 'Violin Model A', 'Italy', 1000.99, 'Musical Instruments Department', 'violin_a.jpg'),
(108, 'Violin', 'Violin Model A', 'Italy', 1500.99, 'Musical Instruments Department', 'violin_a.jpg'),
(109, 'Violin', 'Violin Model A', 'Italy', 1050.99, 'Musical Instruments Department', 'violin_a.jpg'),
(110, 'Guitar', 'Acoustic Guitar Model X', 'USA', 459.99, 'Musical Instruments Department', 'acoustic_guitar_x.jpg'),
(111, 'Guitar', 'Acoustic Guitar Model X', 'USA', 498.99, 'Musical Instruments Department', 'acoustic_guitar_x.jpg'),
(112, 'Guitar', 'Acoustic Guitar Model X', 'USA', 599.99, 'Musical Instruments Department', 'acoustic_guitar_x.jpg');

Select bcategory,bname,MIN(bprice)
from newitem
group by bcategory,bname

INSERT INTO payment (payID, cardtype, cdName, cardNo, cvv, userID, bcode)
VALUES
    (5, 'Visa', 'John Doe', '1234567890123456', '123', 1, 101),
 (6, 'Visa', 'John Doe', '1234567890123456', '123', 2, 102),
 (7, 'Visa', 'John Doe', '1234567890123456', '123', 3, 103),
 (8, 'Visa', 'John Doe', '1234567890123456', '123', 1, 104),
 (9, 'Visa', 'John Doe', '1234567890123456', '123', 2, 108),
 (10, 'Visa', 'John Doe', '1234567890123456', '123', 1, 111),
 (11, 'Visa', 'John Doe', '1234567890123456', '123', 3, 111),
 (12, 'Visa', 'John Doe', '1234567890123456', '123', 2, 110),
 (13, 'Visa', 'John Doe', '1234567890123456', '123', 1, 107),
 (14, 'Visa', 'John Doe', '1234567890123456', '123', 2, 107);

 Select userID,count(*) as 'count of items'
 from payment
 group by userID

 Select userID,count(*) as countofitems
 from payment
 group by userID
 having count(*)>'4'
 
 Select p.userID,u.Fname,count(*) as countofitems
 from payment p,[user]  u
 where p.userID=u.userID
 group by p.userID,u.Fname
 having count(*)>'4'
 
 
select * from [user]
select * from newitem
select * from sellitem
select * from payment
select * from faq
select * from refund

 Select p.userID,u.Fname,n.bname,count(*) as countofitems
 from payment p,[user]  u,newitem n
 where p.userID=u.userID and p.bcode=n.bcode
 group by p.userID,u.Fname,n.bname
 
 Select u.Fname,u.ContactNo,u.Email,n.bname,n.bprice,r.reason,u.userID
 from [user] u,newitem n,refund r,payment p
 where r.payID=p.payID and u.userID=p.userID and n.bcode=p.bcode
 group by u.Fname,u.ContactNo,u.Email,n.bname,n.bprice,r.reason,u.userID
 