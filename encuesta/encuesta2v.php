<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            background-image: url("colorjersey/fondo.jpg");
            background-color: palevioletred;
        }

        img {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <title>EncuestaTest</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid navbar-brand">
            <div class="navbar-brand">
                <img src="colorjersey\logo.png" alt="Logo Perruno" width="30" height="24" class="d-inline-block align-text">
                <h5 class="d-inline-block align-text"> <b>Vota, opina y diviertete.</h5>
            </div>
            <button class="btn btn-outline-light" type="submit">Home</button>
        </div>
    </nav>

    <div class="container">

        <h2 style="text-align: center;"> <b>Bienvenid@ a la vida de un perro con marcha y estilo.</h2>
        <h5 style="margin-top: 10px;">A Toby_chan le encanta hacer excursiones tanto en la ciudad como por el campo, pero en invierno está haciendo mucho frio, y todos queremos que no pase frío y a la vez conserve su estilo ¿Qué color de sudadera te gusta más, para que Tobi_chan siga paseando por el mundo con el estilo más moderno?</h5>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <div id="carouselColor" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselColor" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide1"></button>
                        <button type="button" data-bs-target="#carouselColor" data-bs-slide-to="1" aria-label="Slide2"></button>
                        <button type="button" data-bs-target="#carouselColor" data-bs-slide-to="2" aria-label="Slide3"></button>
                        <button type="button" data-bs-target="#carouselColor" data-bs-slide-to="3" aria-label="Slide4"></button>
                        <button type="button" data-bs-target="#carouselColor" data-bs-slide-to="4" aria-label="Slide5"></button>
                        <button type="button" data-bs-target="#carouselColor" data-bs-slide-to="5" aria-label="Slide6"></button>
                    </div>

                    <div class="carousel-inner">

                        <div class="carousel-item active Slide1">
                            <img src="colorjersey\azul.png" class="d-block w-100" alt="Color azul">
                        </div>

                        <div class="carousel-item Slide2">
                            <img src="colorjersey\marrón.png" class="d-block w-100" alt="Color marrón">
                        </div>

                        <div class="carousel-item Slide3">
                            <img src="colorjersey\rojo.png" class="d-block w-100" alt="Colro rojo">
                        </div>

                        <div class="carousel-item Slide4">
                            <img src="colorjersey\rosa.png" class="d-block w-100" alt="Color rosa">
                        </div>

                        <div class="carousel-item Slide5">
                            <img src="colorjersey\verde.png" class="d-block w-100" alt="Color verde">
                        </div>

                        <div class="carousel-item Slide6">
                            <img src="colorjersey\verdeClaro.png" class="d-block w-100" alt="Color verde claro">
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselColor" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselColor" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-4 offset-md-1">

                <form action="resultado.php" method="POST">

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Introduzca su Nombre de Usuario:</label>
                        <input type="text" class="form-control" name="userName" maxlength="9" placeholder="PetFriend53">
                    </div>

                    <label for="chosseColor" style="margin-top: 25px;">Vota marcando el color que más te gusta.</label>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">

                        <input type="radio" class="btn-check" name="color" id="color1" value="Verde">
                        <label class="btn btn-outline-dark" for="color1">Verde</label>

                        <input type="radio" class="btn-check" name="color" id="color2" value="Rojo">
                        <label class="btn btn-outline-dark" for="color2">Rojo</label>

                        <input type="radio" class="btn-check" name="color" id="color3" value="Gris">
                        <label class="btn btn-outline-dark" for="color3">Gris</label>

                        <input type="radio" class="btn-check" name="color" id="color4" value="Azul">
                        <label class="btn btn-outline-dark" for="color4">Azul</label>

                        <input type="radio" class="btn-check" name="color" id="color5" value="Rosa">
                        <label class="btn btn-outline-dark" for="color5">Rosa</label>

                        <input type="radio" class="btn-check" name="color" id="color6" value="Verde claro">
                        <label class="btn btn-outline-dark" for="color6">Verde claro</label>

                        <input type="radio" class="btn-check" name="color" id="color7" value="Marrón">
                        <label class="btn btn-outline-dark" for="color7">Marrón</label>

                        <input type="radio" class="btn-check" name="color" id="color8" value="Morado" disabled>
                        <label class="btn btn-outline-dark" for="color8">Morado (comprado)</label>
                    </div>

                    <button type="submit" class="btn btn-dark" name="enviar" style="margin-top: 50px;">Participa!!</button>
                    <button type="submit" class="btn btn-dark" name="resultado" style="margin-top: 50px;">Ver el resultado</button>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>