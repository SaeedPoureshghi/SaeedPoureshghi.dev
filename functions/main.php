<?php

  function Index() {
    header('Cach-Control:31536000');

        page::render('index');
  }
  function En() {
    page::render('index_en');
  }
  function Resume(){
    
    page::render('resume');
  }

?>