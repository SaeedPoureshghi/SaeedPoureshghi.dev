<?php

  function Index() {
 header('Cach-Control: max-age=31536000, public');
        page::render('index');
  }
  function En() {
    page::render('index_en');
  }
  function Resume(){
    
    page::render('resume');
  }

?>
