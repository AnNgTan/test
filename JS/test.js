// CÂU 1
function checkLength() {
  let area = document.querySelector(".area").value.length;
  let message = document.querySelector(".message");

  //   message.innerHTML = area;
  if (area == 50) {
    message.innerHTML = "The allowed number of characters has been exceeded";
  } else {
    message.innerHTML = "";
  }
}

//CÂU 2:

function changeDays() {
  let input_date = document.querySelector(".input_date").value;
  let days = document.querySelector(".days").value;

  let date = new Date(input_date);
  let newDate = date.setDate(date.getDate() + Number(days));
  let d = new Date(newDate);

  document.querySelector(".result").innerHTML = d.toString();
}

//CÂU 3:
let info = [];
const addInfo = (e) => {
  e.preventDefault();
  let personal_info = {
    firstName: document.querySelector(".firstName").value,
    lastName: document.querySelector(".lastName").value,
    age: document.querySelector(".age").value,
    gender: document.querySelector(".gender").value,
  };

  info.push(personal_info);
  document.querySelector(".q3").reset();

  let tr = document.createElement("tr");
  info.forEach((element) => {
    tr.innerHTML = `
    <tr>
    <td>${element.firstName}<td>
    <td>${element.lastName}<td>
    <td>${element.age}<td>
    <td>${element.gender}<td>
    <tr>`;
    document.querySelector(".inner").appendChild(tr);
  });
  console.warn("added", { info });
};

document.addEventListener("DOMContentLoaded", function () {
  document.querySelector(".create").addEventListener("click", addInfo);
});

// CÂU 4:
let slideIndex = 1;

showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}
