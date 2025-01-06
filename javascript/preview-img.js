const fileInput = document.getElementById('file');
const imgPreview = document.getElementById('preview-img');

fileInput.addEventListener('change', function() {
    if (fileInput.files.length > 0) {
        const OFReader = new FileReader();
        OFReader.readAsDataURL(fileInput.files[0]);

        OFReader.onload = function(OFReader) {
            imgPreview.src = OFReader.target.result;
        }
    }
});