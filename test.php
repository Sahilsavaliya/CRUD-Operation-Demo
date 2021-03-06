<!DOCTYPE html>
<html lang="en">

<head>


    <script defer="" src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0cmFja3MlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyVGFibGUlMjAwNiUyMiUyQyUyMnclMjIlM0ExNTM2JTJDJTIyaCUyMiUzQTg2NCUyQyUyMmolMjIlM0E3NTQlMkMlMjJlJTIyJTNBMTUzNiUyQyUyMmwlMjIlM0ElMjJodHRwcyUzQSUyRiUyRnByZXZpZXcuY29sb3JsaWIuY29tJTJGdGhlbWUlMkZib290c3RyYXAlMkZ0YWJsZS0wNiUyRiUyMiUyQyUyMnIlMjIlM0ElMjIlMjIlMkMlMjJrJTIyJTNBMjQlMkMlMjJuJTIyJTNBJTIyVVRGLTglMjIlMkMlMjJvJTIyJTNBLTMzMCU3RA=="></script>
    <script nonce="0dbb1351-023f-4476-8b7a-600fccbf984e">
        (function(w, d) {
            ! function(a, e, t, r) {
                a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = {
                    deferred: []
                }, a.zaraz.track = (e, t) => {
                    for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key]
                }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => {
                    a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r])
                }, a.addEventListener("DOMContentLoaded", (() => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), z.defer = !0, z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
                }))
            }(w, d, 0, "script");
        })(window, document);
    </script>
    <title>Table 06</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/A.style.css.pagespeed.cf.q2AVU534B4.css">
    <style>
        .tabcon {
            padding: 8px;
            text-align: left;
        }
    </style>

</head>

<body>
    <?php
    require 'dbconnect.php';

    $query = "SELECT * FROM employee";
    $result = mysqli_query($conn, $query);

    ?>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>

                                    <td class="tabcon">ID</td>
                                    <td class="tabcon">FirstName</td>
                                    <td class="tabcon">LastName</td>
                                    <td class="tabcon">Designation</td>
                                    <td class="tabcon">Gender</td>
                                    <td class="tabcon">Address</td>
                                    <td class="tabcon">Email Address</td>
                                    <td class="tabcon">Password</td>
                                    <td class="tabcon">Update</td>
                                    <td class="tabcon">Delete</td>
                                    <?php
                                    session_start();
                                    if (mysqli_num_rows($result) > 0) {
                                        //echo "true..";
                                        while ($row = mysqli_fetch_assoc($result)) {



                                    ?>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="alert" role="alert">


                                    <td class="tabcon"><?php echo $row['Id'] ?></td>
                                    <td class="tabcon"><?php echo $row['fname'] ?></td>
                                    <td class="tabcon"><?php echo $row['lname'] ?></td>
                                    <td class="tabcon"><?php echo $row['designation'] ?></td>
                                    <td class="tabcon"><?php echo $row['gender'] ?></td>
                                    <td class="tabcon"><?php echo $row['address'] ?></td>
                                    <td class="tabcon"><?php echo $row['email'] ?></td>
                                    <td class="tabcon"><?php echo $row['password'] ?></td>
                                    <td class="tabcon"><a href="edit.php?id=<?php echo $row['Id']; ?>" title="Edit"><button style="background-color: skyblue;">Edit</button></a></td>
                                    <td class="tabcon"><a href="delete.php?id=<?php echo $row['Id']; ?>" title="Delete"><button style="background-color: red;">Delete</button></a></td>




                                </tr>
                            </tbody>
                            </tr>

                    <?php
                                        }
                                    } else {
                                        echo "0 row found...";
                                    }
                    ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon="{&quot;rayId&quot;:&quot;6f150a492c2e8af3&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.12.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>


</body>

</html>