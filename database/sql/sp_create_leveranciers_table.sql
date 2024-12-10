CREATE PROCEDURE IF NOT EXISTS create_leveranciers_table()
BEGIN
    CREATE TABLE IF NOT EXISTS leveranciers (
        Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL
        ,naam VARCHAR(255)  NOT NULL
        ,ContactPersoon VARCHAR(255) NOT NULL                
        ,leverancierNummer VARCHAR(20) NOT NULL  
        ,Mobiel VARCHAR(20) NOT NULL
        ,AantalVerschilendeProduchten VARCHAR(10) NOT NULL
        ,IsActive BIT NOT NULL DEFAULT 1
        ,Comments VARCHAR(255) NULL
        ,CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ,UpdatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB;
END;