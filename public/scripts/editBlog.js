 editBtn = document.getElementsByClassName("edit-btn");
 modal = document.querySelector(".modal");
 container = document.querySelector("modal.container");

 modalTitle = document.getElementById("editTitle");
 modalMessage = document.getElementById("editMessage");
 modalErrorBlock = document.getElementById("modalErrorBlock");

 currentPost = {};

 if (modal) {

     modal.addEventListener("click", e => {
         if (e.target !== modal && e.target !== container) return;
         modal.style.display = "none";
     });

     for (let i = 0; i < editBtn.length; i++) {
         editBtn[i].addEventListener("click", e => {
             console.log('tapped')
             currentPost = {
                 id: e.currentTarget.getAttribute("data-id"),
                 title: e.currentTarget.getAttribute("data-title"),
                 message: e.currentTarget.getAttribute("data-message")
             };
             console.log(modal.classList)
             modalTitle.value = currentPost.title;
             modalMessage.value = currentPost.message;
             modal.style.display = "flex";
             console.log(modal.classList)
             document.getElementById("saveBtn").addEventListener("click", saveChanges);
         });
     }
 }



 saveChanges = () => {
     const xmlString = "<profile>" +
         "  <id>" + currentPost.id + "</id> " +
         "  <title>" + modalTitle.value + "</title>" +
         "  <message>" + modalMessage.value + "</message>" +
         "</profile>";

     let xmlhttp = new XMLHttpRequest();

     xmlhttp.open("POST", "http://phpmysite/editBlog/edit", true);
     xmlhttp.setRequestHeader("Content-Type", "text/xml; charset=UTF-8");
     xmlhttp.send(xmlString);

     xmlhttp.onreadystatechange = () => {
         if (xmlhttp.readyState == 4) {
             if (xmlhttp.status == 200) {
                 console.log(xmlhttp.response)
                 const data = JSON.parse(xmlhttp.response);
                 modalErrorBlock.innerHTML = "";
                 if (data.length) {
                     data.forEach(err => {
                         const errorDiv = document.createElement("p");
                         errorDiv.className = "result-block__item error";
                         errorDiv.innerHTML = err;
                         modalErrorBlock.appendChild(errorDiv);
                     });
                 } else {
                     const currentBtn = document.querySelectorAll(
                         `.btn.edit-btn[data-id="${currentPost.id}"]`
                     )[0];
                     const title = currentBtn.parentNode.getElementsByTagName(
                         "h5"
                     )[0];
                     const text = currentBtn.parentNode.getElementsByTagName("p")[0];
                     title.innerHTML = modalTitle.value;
                     text.innerHTML = modalMessage.value;
                     currentBtn.setAttribute("data-title", modalTitle.value);
                     currentBtn.setAttribute("data-message", modalMessage.value);
                     //modal.classList.add("hidden");
                     modal.style.display = "none";

                 }
             }
         }
     };
 };