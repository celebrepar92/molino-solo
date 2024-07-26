document.getElementById('previewButton').addEventListener('click', function() {
    var rotulo = document.getElementById('rotulo').value;
    var titulo = document.getElementById('titulo').value;
    var imageUrl = document.getElementById('image_url').value;
    var imageFile = document.getElementById('image_file').files[0];

    document.getElementById('rectNar2img3').textContent = rotulo;
    document.getElementById('titulo4').textContent = titulo;

    if (imageFile) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('imagen4').style.backgroundImage = 'url(' + e.target.result + ')';
        };
        reader.readAsDataURL(imageFile);
    } else if (imageUrl) {
        document.getElementById('imagen4').style.backgroundImage = 'url(' + imageUrl + ')';
    }
});

document.getElementById('downloadButton').addEventListener('click', function() {
    html2canvas(document.getElementById('imagen4')).then(function(canvas) {
        var link = document.createElement('a');
        link.download = 'imagen.png';
        link.href = canvas.toDataURL('image/png');
        link.click();
    }).catch(function(error) {
        console.error('Error capturando la imagen: ', error);
    });
});
