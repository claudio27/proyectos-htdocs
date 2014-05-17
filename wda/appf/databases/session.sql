use winestore;
CREATE TABLE PHPSESSION(
  session_id varchar(50) NOT NULL,
  session_variable text,
  last_accessed decimal(15,3) NOT NULL,
  PRIMARY KEY (session_id),
  KEY last_acc (last_accessed)
) type=MyISAM;
