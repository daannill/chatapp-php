const form = document.getElementById("form-signup");
const btnsignup = document.getElementById("btn-signup");
const lname = document.getElementById('lname');
let errorKey = [];

form.onsubmit = function(e) {
    e.preventDefault();
    console.log("submit");
}

btnsignup.onclick = function () {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/SignUpFunction.php', true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                const data = JSON.parse(xhr.response);
                // console.log(data);
                // let data = xhr.response;
                // console.log(data);

                if(errorKey.length > 0) {
                    for(let i = errorKey.length - 1; i >= 0; i--) {
                        if(errorKey[i] === 'error-txt') {
                            const err = document.getElementById('error-txt');

                            err.style.display = 'none';

                            errorKey.splice(i, 1);
                        } else {
                            const docs = document.getElementById(errorKey[i]);
                            const err = document.getElementById('error-' + errorKey[i]);

                            docs.style.border = '1px solid #dadada';
                            err.style.display = 'none';
                            err.innerText = '';

                            errorKey.splice(i, 1);
                        }
                    }
                    
                    // errorKey.forEach((value) => {
                    //     let i = errorKey.indexOf(value);
                    //     if(value === 'error-txt') {
                    //         const err = document.getElementById('error-txt');

                    //         err.style.display = 'none';

                    //         errorKey.splice(i, 1);
                    //     } else {
                    //         const docs = document.getElementById(value);
                    //         const err = document.getElementById('error-' + value);

                    //         docs.style.border = '1px solid #dadada';
                    //         err.style.display = 'none';
                    //         err.innerText = '';

                    //         errorKey.splice(i, 1);
                    //     }
                    // })
                }

                if(data['error-txt']) {
                    errorKey.push('error-txt');
                    const err = document.getElementById('error-txt');

                    err.style.display = 'block';
                    err.textContent = data['error-txt'];
                }
                
                if(data.errors) {
                    Object.entries(data.errors).forEach(([key, value]) => {
                        const docs = document.getElementById(key);
                        const error = document.getElementById('error-' + key);

                        if(docs && value != '') {
                            errorKey.push(key);
                            docs.style.border = '1px solid red';
                            error.style.display = 'block';
                            error.innerText = value;
                        }
                    });
                }

                if(data.success) {
                    console.log('bisa');
                    localStorage.setItem('success', data.success);
                    window.location.href = 'index.php';
                }
            }
        }
    }

    const formData = new FormData(form);
    xhr.send(formData);
}