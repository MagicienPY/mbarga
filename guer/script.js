const wrapper = document.querySelector(".wrapper"),
qrInput = wrapper.querySelector(".form input"),
generateBtn = wrapper.querySelector(".form button"),
qrImg = wrapper.querySelector(".qr-code img");
let preValue;

generateBtn.addEventListener("click", () => {
    let qrValue = qrInput.value.trim();
    if(!qrValue || preValue === qrValue) return;
    preValue = qrValue;
    generateBtn.innerText = "Generating QR Code...";
    qrImg.src = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${qrValue}`;
    qrImg.addEventListener("load", () => {
        wrapper.classList.add("active");
        generateBtn.innerText = "Afficher QR";
    });
});

qrInput.addEventListener("keyup", () => {
    if(!qrInput.value.trim()) {
        wrapper.classList.remove("active");
        preValue = "";
    }
});

const wrapper1 = document.querySelector(".wrapper"),
qrInput1 = wrapper1.querySelector(".form1 input"),
generateBtn1 = wrapper1.querySelector(".form1 button"),
qrImg1 = wrapper1.querySelector(".qr-code1 img");
let preValue1;

generateBtn.addEventListener("click", () => {
    let qrValue = qrInput1.value.trim();
    if(!qrValue || preValue1 === qrValue) return;
    preValue1 = qrValue;
    generateBtn.innerText = "Generating QR Code...";
    qrImg.src = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${qrValue}`;
    qrImg.addEventListener("load", () => {
        wrapper1.classList.add("active");
        generateBtn.innerText = "Afficher QR";
    });
});

qrInput.addEventListener("keyup", () => {
    if(!qrInput1.value.trim()) {
        wrapper1.classList.remove("active");
        preValue1 = "";
    }
});