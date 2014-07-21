<?php
        if($_GET) 
          {
            switch($_GET['0x']) 
              {
                case '0x68/0x6f/0x6d/0x65' :
                  if(!file_exists("pages/home.php")) 
                    die ("Halaman tidak tersedia");
              ?>
               
                <?php include "pages/home.php" ?>
                
              <?php 
                break;
                case '0x61/0x64/0x6d/0x69/0x6e':
                  if(!file_exists("pages/adm-dash.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/adm-dash.php" ?>
                            
              <?php 
                break;
                case 'user':
                  if(!file_exists("pages/user.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/user.php" ?>
            
              <?php 
                break;
                case 'user-edit':
                  if(!file_exists("pages/user-edit.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/user-edit.php" ?>
            
              <?php 
                break;
                case 'set-pj':
                  if(!file_exists("pages/penanggungjawab.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/penanggungjawab.php" ?>
            
              <?php 
                break;
                case 'pj-edit' :
                  if(!file_exists("pages/pj-edit.php")) 
                    die ("Halaman tidak tersedia");
              ?>
               
                <?php include "pages/pj-edit.php" ?>
                
              <?php 
                break;

                
                case 'set-konsul':
                  if(!file_exists("pages/konsultasi.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/konsultasi.php" ?>
            
              <?php 
                break;
                case 'konsul-edit':
                  if(!file_exists("pages/konsul-edit.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/konsul-edit.php" ?>
                            
              <?php 
                break;
                case 'data':
                  if(!file_exists("pages/data.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/data.php" ?>
                            
              <?php 
                break;
                case 'reg':
                  if(!file_exists("pages/registrasi.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/registrasi.php" ?>
                            
              <?php 
                break;
                case 'view':
                  if(!file_exists("pages/view.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/view.php" ?>
                            
              <?php 
                break;
                case 'laporan':
                  if(!file_exists("pages/laporan.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/laporan.php" ?>
                            
              <?php 
                break;
              }
          }
              ?>