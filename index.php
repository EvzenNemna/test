<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>[PageName] - [PageDesc]]</title>
</head>

<body>
    <header>
        <div class="content">
            <h2>[PageName]</h3>
            <?php
        error_reporting(E_ERROR | E_PARSE);
        if ($_GET["logged"] == 1) {
            echo "<div class="."'navbar'".">
            <ul>
                <li><a href="."'index.php'"." class="."'text-muted'".">Home</a></li>
                <li><a href="."'catalogue.html'" ."class="."'text-muted'".">Catalogue</a></li>
                <li><a href="."'#'"." class="."'text-muted'".">[Nav3]</a></li>
                <li><a href="."'#'"." class="."'text-muted'".">[Nav4]</a></li>
            </ul>
            <a class="."'login-trigger'"." href="."'index.php'".">Logout</a>
            <ul>
                <li><a href="."'myprofile.php'" ."class="."'text-muted'".">[Myprofile]</a></li>
            </ul>
        </div>";
            }else{
                echo "<div class="."'navbar'".">
            <ul>
                <li><a href="."'index.php'"." class="."'text-muted'".">Home</a></li>
                <li><a href="."'catalogue.html'" ."class="."'text-muted'".">Catalogue</a></li>
                <li><a href="."'#'"." class="."'text-muted'".">[Nav3]</a></li>
                <li><a href="."'#'"." class="."'text-muted'".">[Nav4]</a></li>
            </ul>
            <a class="."'login-trigger'"." href="."'#'"." data-target="."'#login'"." data-toggle="."'modal'".">Login</a>
            <ul>
                <li><a href="."'signup.php'" ."class="."'text-muted'".">[SignUp]</a></li>
            </ul>
        </div>";
            }   ?>
        </div>
    </header>

    <main>
        <div class="main_header">
            <div class="header_info">
                <H1>[Heading]</H1>
                <p>[Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer tempor. Nam sed tellus id magna elementum tincidunt. Etiam commodo dui eget wisi. Donec vitae arcu. Cras elementum. Pellentesque habitant morbi tristique senectus et netus
                    et malesuada fames ac turpis egestas. ]</p>
            </div>
            <img src="https://www.litmos.com/wp-content/uploads/2018/02/business-conference-900x500.jpg" alt="conference" style="width: 30%;">
        </div>
        <div class="content">
            <h1>[Top Heading]</h1>
            <!-- Some content here (few words about page)-->
        </div>
        <div class="content">
            <h1>[Mid Heading]</h1>
            <!-- Some content here (box carousel?)-->
        </div>
        <div class="content">
            <h1>[Bottom Heading]</h1>
            <!-- Some content here (fake reviews i guess)-->
        </div>
        <div class="content">
            <h1>[Bottom Heading]</h1>
            <!-- Some content here (fake reviews i guess)-->
        </div>
    </main>
    <footer>
        <!-- Footer -->
        <footer class="bg-white">
            <div class="container py-5">
                <div class="row py-4">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="img/logo.png" alt="" width="180" class="mb-3">
                        <p class="font-italic text-muted">[Few words about service]</p>
                        <ul class="list-inline mt-4">
                            <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter" style="color:black; font-size: 25px;"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook" style="color:black; font-size: 25px;"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram" style="color:black; font-size: 25px;"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                        <h6 class="text-uppercase font-weight-bold mb-4">[Navigation]</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="#" class="text-muted">[Nav1]</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">[Nav2]</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">[Nav3]</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">[Nav4]</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-lg-0">
                        <h6 class="text-uppercase font-weight-bold mb-4">[Newsletter]</h6>
                        <p class="text-muted mb-4">[Newsletter text]</p>
                        <div class="p-1 rounded border">
                            <div class="input-group">
                                <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
                                <div class="input-group-append">
                                    <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Trigger-->
            <div id="login" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-body">
                            <button data-dismiss="modal" class="close">&times;</button>
                            <h4>Login</h4>
                            <form name="form" action="login.php"  method="post">
                                <input type="text" name="username" class="username form-control" placeholder="Username" />
                                <input type="password" name="password" class="password form-control" placeholder="Password" />
                                <input class="btn login" type="submit" value="Login" />
                                
                                <?php
        error_reporting(E_ERROR | E_PARSE);
        if ($_GET["err"] == 1) {
            echo "<div class=" .
                "err" .
                    ">
                Cant login
                </div>";
            }   ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-light py-4">
                <div class="container text-center">
                    <p class="text-muted mb-0 py-2">[Copyright]</p>
                </div>
            </div>
        </footer>
    </footer>
</body>

</html>