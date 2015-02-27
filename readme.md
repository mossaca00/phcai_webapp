1.) Login to root:

CREATE DATABASE davedb;
CREATE USER 'davemaster'@'localhost' IDENTIFIED BY 'davepass';
GRANT SELECT, INSERT, UPDATE, DELETE, ALTER TO ON *.* 'davemaster'@'localhost';

2.) Exit to root, then login as davemaster
USE davedb;
source <path to davedb.sql>


ONLINE:
DB: ueitgrou_davedb
USER: ueitgrou_davemas
PASS: davepass2112
