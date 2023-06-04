const header = document.querySelector("header");

fetch('./header.html')
.then(res => res.text())
.then(data => header.innerHTML = data);


// const logo = document.querySelector(".logo");

// logo.addEventListener("click", function(){
//     location.href="/html/home.html";
// })

// const inq = document.querySelector(".inquiry");
// inq.addEventListener("click", function(){
//     alert("문의 번호: 010-1234-5678");
// }) //안될까?