<?php
// Add new columns for First and Last name
$this->getConnection()->addColumn($this->getTable('newsletter/subscriber'), 'first_name', 'varchar(50) null');
$this->getConnection()->addColumn($this->getTable('newsletter/subscriber'), 'last_name', 'varchar(50) null');
