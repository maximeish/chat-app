const form = document.querySelector("#app-form"),
  continueBtn = form.querySelector("#submit-btn");

form.onsubmit = (e) => {
  e.preventDefault();
};

continueBtn.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../form.inc.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (data.includes("success")) {
          location.href = "../index.php";
        }
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
};
