if(localStorage.getItem('success')) {
    const success = document.getElementsByClassName('success-txt')[0];
    success.style.display = 'block';
    success.textContent = localStorage.getItem('success');
    localStorage.removeItem('success');
}

let form = document.getElementsByTagName('form')[0];

form.onsubmit = function (e) {
    e.preventDefault();
}

document.getElementById('button').onclick = function () {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/LoginFunction.php', true);
    xhr.onload = function () {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                const data = xhr.response;
                console.log(data);
            }
        }
    }

    const formData = new FormData(form);
    xhr.send(formData);
}

