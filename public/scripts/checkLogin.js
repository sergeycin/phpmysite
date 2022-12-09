const resultBlock = document.getElementsByClassName("result-block")[0];
const loginInput = document.querySelector("input[name=login]");
// const emailInput = document.querySelector("input[name=email]");

const fetchCheck = (login, email) => {
    const formData = new FormData();
   
    formData.append("login", login);
    // formData.append("email", email);

    fetch("/login/checkLogin", { method: "POST", body: formData })
        .then(response => response.clone())
        .then(data => {
            let datatemp = data.json()
            console.log(datatemp)
            resultBlock.innerHTML = "";
            if (data.length) {
                data.forEach(err => {
                    const errorDiv = document.createElement("p");
                    errorDiv.className = "result-block__item error";
                    errorDiv.innerHTML = err;
                    resultBlock.appendChild(errorDiv);
                });
                document.getElementsByTagName("body")[0].insertAdjacentElement(resultBlock)
            }
        });
};

loginInput.addEventListener("input", e => {
    fetchCheck(e.currentTarget.value, loginInput.value);
});

// emailInput.addEventListener("input", e => {
//     fetchCheck(loginInput.value, e.currentTarget.value);
// });