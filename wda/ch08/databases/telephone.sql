CREATE DATABASE telephone;
use telephone
CREATE TABLE phonebook (
  phonebook_id int(6) NOT NULL auto_increment,
  surname CHAR(50) NOT NULL,
  firstname CHAR(50) NOT NULL,
  phone CHAR(20) NOT NULL,
  PRIMARY KEY (phonebook_id)
) type=MyISAM;

GRANT SELECT, INSERT, UPDATE, DELETE ON telephone.* TO 'fred'@'localhost' IDENTIFIED BY 'shhh';
