<?php

Router::setRoute('user', 'view', 'HomeController@index', 'home');

Router::setRoute('bank-books', 'get', 'BankBooks@get', 'bank-books');

Router::setRoute('user', 'get', 'User@get', 'user');