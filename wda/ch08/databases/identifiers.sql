use telephone;
CREATE TABLE identifiers (phonebook_id int(5));
INSERT INTO identifiers VALUES (1);

GRANT SELECT, UPDATE on telephone.identifiers TO 'fred'@'localhost' IDENTIFIED BY 'shhh';
