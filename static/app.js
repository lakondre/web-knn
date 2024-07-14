let imageInput = document.querySelector('.imageInput');
let introduction = document.querySelector('.introduction');
let image = document.querySelector('.image');
let canvas = document.querySelector('canvas');
let answer = document.querySelector('.answer');
let c = canvas.getContext('2d');

function loadImage(src) {
    introduction.hidden = true;
    image.hidden = false;
    image.src = src;
}

function loadFile(e) {
    if (e.target.files) {
        let imageFile = e.target.files[0];
        let reader = new FileReader();
        reader.readAsDataURL(imageFile);
        reader.onloadend = function (e) {
            loadImage(e.target.result);
        }
    }
}

function getColor(y_pred,y_test) {
    let pixel = c.getImageData(y_pred,y_test, 1, 1);
    let rgb = pixel.data;

    return rgb;
}

function displayAnswer(text, rgb) {
    answer.innerText = text.answer;
    answer.innerHTML += "  :  <div class='colorBox'></div>";
    let colorBox = document.querySelector('.colorBox');
    colorBox.style.backgroundColor = "rgb(" + rgb + ")";
}

function useCanvas(el, image, callback) {
    el.width = image.width;
    el.height = image.height;
    el.getContext('2d')
        .drawImage(image, 0, 0, image.width, image.height);
    return callback();
}

function predict(e) {
    if (e.offsetX) {
        x = e.offsetX;
        y = e.offsetY;
    }
    else if (e.layerX) {
        x = e.layerX;
        y = e.layerY;
    }
    image.crossOrigin = "Anonymous";
    useCanvas(canvas, image, function () {
        let rgb = getColor(y_pred,y_test);
        img1_resize = resize(img1,(150,150,3))
        img1_flatten = img1_resize.flatten()
        answer=model.predict([[img1_flatten]])
        sender = JSON.stringify(rgb_string);
        fetch('/predict', {
            method: 'POST', // or 'PUT'
            headers: {
                'Content-Type': 'application/json',
            },
            body: sender,
        })
            .then(function (response) {
                return response.json();
            }).then(function (text) {
                displayAnswer(text, rgb_string);
            });
    });
};


imageInput.addEventListener('change', loadFile);
image.addEventListener('click', predict);