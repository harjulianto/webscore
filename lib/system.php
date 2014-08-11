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
                case '0x61/0x64/0x6d/0x69/0x6f':
                  if(!file_exists("pages/adm-user.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/adm-user.php" ?>
            
              <?php 
                break;
                case '0x61/0x64/0x6d/0x70/0x6f':
                  if(!file_exists("pages/adm-user-add.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/adm-user-add.php" ?>
            
              <?php 
                break;
                case '0x61/0x64/0x6d/0x71/0x6f':
                  if(!file_exists("pages/adm-user-edit.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/adm-user-edit.php" ?>
            
              <?php 
                break;
                case '0x61/0x64/0x6d/0x71/0x6g' :
                  if(!file_exists("pages/peserta-add.php")) 
                    die ("Halaman tidak tersedia");
              ?>
               
                <?php include "pages/peserta-add.php" ?>
                
              <?php 
                break;

                
                case '0x61/0x64/0x6d/0x71/0x6h':
                  if(!file_exists("pages/peserta.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/peserta.php" ?>
            
              <?php 
                break;
                case '0x61/0x64/0x6d/0x72/0x6h':
                  if(!file_exists("pages/peserta-view.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/peserta-view.php" ?>
                            
              <?php 
                break;
                case '0x61/0x64/0x6d/0x73/0x6h':
                  if(!file_exists("pages/peserta-edit.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/peserta-edit.php" ?>
                            
              <?php 
                break;
                case '0x61/0x64/0x6e/0x73/0x6h':
                  if(!file_exists("pages/adm-rank-all.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/adm-rank-all.php" ?>
                            
              <?php 
                break;
                case '0x61/0x64/0x6e/0x73/0x6a':
                  if(!file_exists("pages/score-forensic.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/score-forensic.php" ?>
                            
              <?php 
                break;
                case '0x61/0x64/0x6e/0x73/0x6b':
                  if(!file_exists("pages/score-ctf.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/score-ctf.php" ?>


              <?php 
                break;
                case '0x61/0x64/0x6e/0x73/0x6c':
                  if(!file_exists("pages/lap-forensic.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/lap-forensic.php" ?>

              <?php 
                break;
                case '0x61/0x64/0x6e/0x73/0x6d':
                  if(!file_exists("pages/lap-forensic-add.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/lap-forensic-add.php" ?>

              <?php 
                break;
                case '0x61/0x64/0x6e/0x73/0x6e':
                  if(!file_exists("pages/lap-ctf.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/lap-ctf.php" ?>

               <?php 
                break;
                case '0x61/0x64/0x6e/0x73/0x6f':
                  if(!file_exists("pages/lap-ctf-add.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/lap-ctf-add.php" ?>

                <?php 
                break;
                case '0x61/0x64/0x6e/0x73/0x6g':
                  if(!file_exists("pages/lap-total.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/lap-total.php" ?>


                            
              <?php 
                break;
              }
          }
              ?>