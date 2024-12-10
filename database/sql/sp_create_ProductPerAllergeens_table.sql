CREATE PROCEDURE IF NOT EXISTS create_ProductPerAllergeens_table()
BEGIN
    CREATE TABLE IF NOT EXISTS ProductPerAllergeens (
        Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL
        ,ProductID INT foreign key  NOT NULL
        ,AllergeenId foreign key NOT NULL                
        ,IsActive BIT NOT NULL DEFAULT 1
        ,Comments VARCHAR(255) NULL
        ,CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ,UpdatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB;
END;