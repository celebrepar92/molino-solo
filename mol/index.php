<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Imagen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <form id="imageForm">
                    <div class="form-group">
                        <label for="rotulo">Rótulo</label>
                        <input type="text" class="form-control" id="rotulo" placeholder="Rótulo" required>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" id="titulo" placeholder="Título" required>
                    </div>
                    <div class="form-group">
                        <label for="image_url">Enlace de la imagen</label>
                        <input type="text" class="form-control" id="image_url" placeholder="Enlace de la imagen">
                    </div>
                    <div class="form-group">
                        <label for="image_file">Subir imagen</label>
                        <input type="file" class="form-control-file" id="image_file">
                    </div>
                    <button type="button" class="btn btn-primary mr-2" id="previewButton">Previsualizar</button>
                    <button type="button" class="btn btn-success" id="downloadButton">Descargar</button>
                </form>
            </div>
            <div class="col-md-8">
                <div id="imagen3">
                    <div class="fondoNegro2">
                        <div class="fondoContainer3">
                            <img src="gradient.png" class="gradient3">
                            <div class="margin2"></div>
                            <div class="data3Margin">
                                <div class="data3">
                                    <div id="rectNar2img2">Tu rótulo</div>
                                    <h1 id="titulo3">Tu título acá</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <img src="molbanner.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="html2canvas.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
