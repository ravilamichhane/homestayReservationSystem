<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us</title>
    <link rel="stylesheet" href="/css/rstyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light container-fluid" style="background-color:rgb(21,82,11,0.3);">
        <a class="navbar-brand" href="#"><img src="/assets/logo.png" width="85" height="75" alt="" loading="lazy"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gallery">Gallery</a>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link " href="/news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/payment">Payment </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/about-us">About Us </a>
                </li>


            </ul>
        </div>
        @if (auth()->user())
            <a class="nav-link" href="/dashboard">Dashboard </a>
        @else
            <a class="nav-link" href="/login">Login </a>

            <a class="nav-link" href="/register">Register </a>
        @endif
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">!! Book !! </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">First Name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Pokhara">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="inputCity">Phone Number</label>
                                    <input type="tel" class="form-control" id="phoneNumber">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Available Seat</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>

                                    </select>
                                </div>
                                <div class="modal-footer col-md-4">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                                <div class="modal-footer col-md-4">
                                    <button type="button" class="btn btn-primary">Reserve</button>
                                </div>
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="row hrow">
                    <div class="col-sm-8">
                        <h2>About Us:</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="col-sm-4 imgcol">
                        <img src="img/x.jpg" class="img-fluid myimg">
                        <span>
                            <h3>Mr. XYZ</h3>
                        </span>
                        <span>
                            <h5>POST</h5>
                        </span>
                        <span>
                            <h4>CONTACT NUMBER</h4>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <iframe
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FghalelHS07&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
        <div class="row frow">
            <div class="col-md-9">
                <h2>our specialities:</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-white bg-dark" style="width: 100%;">
                            <img class="card-img-top" src="/assets/img/1.jpg" alt="Card image cap" height="300px">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-dark" style="width: 100%;">
                            <img class="card-img-top" src="/assets/img/2.jpg" alt="Card image cap" height="300px">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-dark" style="width: 100%;">
                            <img class="card-img-top" src="/assets/img/3.jpg" alt="Card image cap" height="300px">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h2>ratings and review:</h2>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>
