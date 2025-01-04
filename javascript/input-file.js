const fileInput = document.getElementById('profil');
const imgPreview = document.getElementById('picture');

fileInput.addEventListener('change', function() {
    if (fileInput.files.length > 0) {
        const OFReader = new FileReader();
        OFReader.readAsDataURL(fileInput.files[0]);

        OFReader.onload = function(OFReader) {
            imgPreview.src = OFReader.target.result;
        }
    }
});