#!/bin/bash
service mysql start
mysql -e "CREATE DATABASE IF NOT EXISTS happybash; GRANT ALL ON happybash.* TO 'root'@'localhost'; FLUSH PRIVILEGES;"
