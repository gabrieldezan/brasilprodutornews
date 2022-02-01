<?php

session_start();
$_SESSION['id_paginas'] = $_POST['id'];
$_SESSION['titulo_pagina'] = $_POST['titulo'];