<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ClayWorks</title>
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .row {
        background: white;
        border-radius: 30px;
        box-shadow: 12px 12px 22px grey;
    }


    img {
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
    }

    .btn1 {
        border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: #428683;
        color: white;
        border-radius: 4px;
        font-weight: bold;
    }

    .btn1:hover {
        background: #cc6633;
        border: 1px solid;
        color: white;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }
    </style>

</head>

<body>

    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5 px-5 pt-5 m-auto">
                    <img src="https://clayworks.space/assets/website/fbm/hero-big.jpg " alt="" class="img-fluid my-4">
                </div>

                <div class="col-lg-7">
                    <img src="https://clayworks.space/assets/logo/512/logo-o.png" alt="logo" srcset="" width="90"
                        height="15" class="img-fluid my-3">

                    <h3>
                        <span style="color: #428683">Upscale</span> the Way You <br> <span
                            style="color: #428683">Work</span>
                    </h3>


                    <form id="form" action="insert.php" method="post">
                        <div class="form-row">
                            <div class="col-lg-7 ">
                                <input type="text" name="name" placeholder="Full Name" class="form-control my-3 p-4">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="tel" name="tel" placeholder="Contact" class="form-control my-3 p-4">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" name="email" placeholder="Email Id" class="form-control my-3 p-4">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" name="company" placeholder="Company Name"
                                    class="form-control my-3 p-4">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <select class="form-control" name="requirement">
                                    <option disabled selected>I am looking for... </option>
                                    <option>An office for 50+ employees</option>
                                    <option>Individual work space</option>
                                    <option>Meeting room</option>
                                    <option>Professional address for my virtual office</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" name="area" placeholder="Area name, City"
                                    class="form-control my-3 p-4">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" name="submit" id="submit" class="btn1 my-3">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script type="text/javaScript">
        $(document).ready(function(){
            var form = $('#form');
            $("#submit".click(function(){
                $.ajax({
                    url: form.attr("action"),
                    type: 'post',
                    data: $("#post input").serialize(),

                    success: function(data){
                        console.log(data);                     
                    }                    
                })                
            }))
        });     
    
    </script>

</body>

</html>