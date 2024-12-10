CREATE PROCEDURE IF NOT EXISTS create_ProductPerLeveranciers_table()
BEGIN
    CREATE TABLE IF NOT EXISTS ProductPerLeveranciers (
        Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL
        ,LeverancierId INT UNSIGNED NOT NULL
        ,ProductId INT UNSIGNED NOT NULL                
        ,DatumLevering VARCHAR(20) NOT NULL  
        ,Aantal VARCHAR(20) NOT NULL
        ,DatumEerstVolgendeLevering VARCHAR(15) NULL
        ,IsActive BIT NOT NULL DEFAULT 1
        ,Comments VARCHAR(255) NULL
        ,CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ,UpdatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB;
END;