
document.getElementById('img').addEventListener('change', function (e) {
    var reader = new FileReader();
    reader.onload = function (event) {
        document.getElementById('preview').src = event.target.result;
        document.getElementById('preview').style.display = 'block';
    }
    reader.readAsDataURL(e.target.files[0]);
});



document.getElementById('data').valueAsDate = new Date();
document.getElementById('dataat').valueAsDate = new Date();