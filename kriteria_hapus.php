<?php

                    // Check If form submitted, insert form data into users table.
                   
                        $ids = $_GET['id_kriteria'];
                        

                        // include database connection file
                        include("koneksi.php");

                        // Insert user data into table
                        $result = mysqli_query($connect, "DELETE from kriteria  WHERE id_kriteria=$ids");

                        // Show message when user added
                       header("location:kriteria.php");
                       echo "<script type=text/javascript>
                       window.location.href='http://localhost/spksaw_mobil/kriteria.php';
                       </script>";
                     ?>