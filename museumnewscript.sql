
-- -----------------------------------------------------
-- Table `mydb`.`department`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`department` (
  `iddepartment` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`iddepartment`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`employee` (
  `idemployee` INT NOT NULL,
  `fname` VARCHAR(45) NULL,
  `lname` VARCHAR(45) NULL,
  `age` INT NULL,
  `address` VARCHAR(45) NULL,
  `phone` INT NULL,
  `email` VARCHAR(45) NULL,
  `salary` FLOAT NULL,
  `holidays` INT NULL,
  `department_iddepartment` INT NOT NULL,
  PRIMARY KEY (`idemployee`, `department_iddepartment`),
  INDEX `fk_employee_department_idx` (`department_iddepartment` ASC),
  CONSTRAINT `fk_employee_department`
    FOREIGN KEY (`department_iddepartment`)
    REFERENCES `mydb`.`department` (`iddepartment`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`artwork`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`artwork` (
  `idartwork` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `artist` VARCHAR(45) NULL,
  `style` VARCHAR(45) NULL,
  `image` LONGBLOB NULL,
  PRIMARY KEY (`idartwork`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `iduser` INT NOT NULL,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  PRIMARY KEY (`iduser`))
ENGINE = InnoDB;

INSERT INTO `museumdb`.`user` (`iduser`, `username`, `password`) VALUES ('1', 'admin', 'admin');

