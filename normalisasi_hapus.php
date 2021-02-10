<?php

                    // Check If form submitted, insert form data into users table.
                   
                        $ids = $_GET['id_normal'];
                        

                        // include database connection file
                        include("koneksi.php");

                        // Insert user data into table
                        $result = mysqli_query($connect, "DELETE from normal  WHERE id_normal=$ids");

                        // Show message when user added
                       header("location:normalisasi.php");
                       echo "<script type=text/javascript>
                       window.location.href='http://localhost/spksaw_mobil/normalisasi.php';
                       </script>";
                     ?>