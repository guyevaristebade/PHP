CREATE TABLE IF NOT EXISTS JOBS (
    id_poste INT AUTO_INCREMENT PRIMARY KEY,
    poste_name VARCHAR(50) NOT NULL,
    location TEXT NOT NULL,
    Hiring_date INT NOT NULL,
    numberof_positions INT NOT NULL,
    Job VARCHAR(50) NOT NULL,
    sector TEXT NOT NULL,
    typeof_contract VARCHAR(50) NOT NULL,
    study_level VARCHAR(50) NOT NULL,
    experiences VARCHAR(50) NOT NULL,
    salary INT NOT NULL
);
