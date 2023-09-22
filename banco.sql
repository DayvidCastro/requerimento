CREATE TABLE alunos (
    matricula VARCHAR(20) PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(255),
    telefone VARCHAR(45),
    status_aluno VARCHAR(50)
);

CREATE TABLE cores (
    id INT PRIMARY KEY AUTO_INCREMENT,
    documento_id INT,
    status_cores VARCHAR(50),
    FOREIGN KEY (documento_id) REFERENCES documentos(documento_id)
);

CREATE TABLE coordenadores (
    matricula VARCHAR(20) PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255)
);

CREATE TABLE professores (
    matricula VARCHAR(20) PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255)
);

CREATE TABLE documentos (
    documento_id INT PRIMARY KEY AUTO_INCREMENT,
    aluno_matricula VARCHAR(20),
    conteudo TEXT,
    status_documento_aluno VARCHAR(50),
    status_documento_cores VARCHAR(50),
    status_documento_coordenador VARCHAR(50),
    status_documento_professor VARCHAR(50),
    FOREIGN KEY (aluno_matricula) REFERENCES alunos(matricula)
);
