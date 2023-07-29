<?php
    $nombre = $_POST["nombre"];
    $tipo_cedula = $_POST["tipo_cedula"];
    $cedula = $_POST["cedula"];
    $tipo_tlfn = $_POST["tipo_tlfn"];
    $tlfn = $_POST["tlfn"];
    $email = $_POST["email"];
    $ciudad = $_POST["ciudad"];
    $codigo = $_POST["codigo"];
    $fecha = $_POST["fecha"];
    $num_factura = $_POST["factura"];
    $producto = "Par de Zapatos";
    $precio = 35;
    const IVA = 16;
    $cantidad = $_POST["cantidad"];
    $Total = $precio * $cantidad
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="factura.css">
</head>
<body>
    <div class="container my-4 lin">
        <div class="row lin">
            <div class="col-md-1"></div>
            <div class="col-md-11">
                <h1 class="my-3">Logo</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 lin">
                <h3 class="sub_title">Factura de Venta</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 lin">
                <p>Cliente: <?= $nombre ?></p>
            </div>
            <div class="col-md-6 lin">
                <p>Código Postal: <?= $codigo ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 lin">
                <p>C.I.: <?= "$tipo_cedula-$cedula" ?></p>
            </div>
            <div class="col-md-6 lin">
                <p>teléfono: <?= "$tipo_tlfn-$tlfn" ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 lin">
                <p>Regimen:</p>
            </div>
            <div class="col-md-6 lin">
                <p>Correo Electronico: <?= $email ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 lin">
                <p>Ciudad: <?= $ciudad ?></p>
            </div>
            <div class="col-md-6 lin">
                <p>Forma de Pago:</p>
            </div>
        </div>


        <div class="foo my-5">
            <div class="row">
                <div class="col-md-2 lin">
                    <h5>Referencia</h5>
                </div>
                <div class="col-md-2 lin">
                    <h5>Articulo</h5>
                </div>
                <div class="col-md-2 lin">
                    <h5>Cantidad</h5>
                </div>
                <div class="col-md-2 lin">
                    <h5>Precio</h5>
                </div>
                <div class="col-md-2 lin">
                    <h5>IVA</h5>
                </div>
                <div class="col-md-2 lin">
                    <h5>Total</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 lin">
                    <p><?= $num_factura ?></p>
                </div>
                <div class="col-md-2 lin">
                    <p><?= $producto ?></p>
                </div>
                <div class="col-md-2 lin">
                    <p><?= $cantidad ?></p>
                </div>
                <div class="col-md-2 lin">
                    <p><?= "$precio" ?></p>
                </div>
                <div class="col-md-2 lin">
                    <p><?= IVA ?></p>
                </div>
                <div class="col-md-2 lin">
                    <p><?= $Precio_Total = $Total + $Total/IVA?></p>
                </div>
            </div>

            <div class="row lin">
                <div class="col-md-8"></div>
                <div class="col-md-2 lin">
                    <h5>Precio Total</h5>
                </div>
                <div class="col-md-2 lin"><?=$Precio_Total?></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 lin">Firma del la Empreza</div>
            <div class="col-md-6 lin">Firma del Cliente</div>
        </div>

        <div class="row">
            <div class="col-md-6 lin firm"></div>
            <div class="col-md-6 lin firm"></div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-md-5"></div>
        <div class="col-md-2 submit">
            <button type="button" class="btn btn-primary">Imprimir</button>
            <a href="./index.php"><button type="button" class="btn btn-danger">Cambiar</button></a>
        </div>
    </div>
    
</body>
</html>