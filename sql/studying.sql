USE xmStore;

LOAD DATA INFILE '/Users/cure/Desktop/samplefile.txt' 
INTO TABLE sampleTB
FIELDS terminated by ' ';

SELECT * FROM sampleTB;


