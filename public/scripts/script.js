const fotos = [
  "http://dummyimage.com/200",
  "http://dummyimage.com/200",
  "http://dummyimage.com/200",
  "http://dummyimage.com/200",
  "http://dummyimage.com/200",
  "http://dummyimage.com/200",
  "http://dummyimage.com/200",
  "http://dummyimage.com/200",
  "http://dummyimage.com/200",
  "http://dummyimage.com/200",
  "http://dummyimage.com/200",
  "http://dummyimage.com/200",
  "http://dummyimage.com/200",
  "http://dummyimage.com/200",
  "http://dummyimage.com/200",
],
  titles = [
    "img_1",
    "img_2",
    "img_3",
    "img_4",
    "img_5",
    "img_6",
    "img_7",
    "img_8",
    "img_9",
    "img_10",
    "img_11",
    "img_12",
    "img_13",
    "img_14",
    "img_15",
  ];


const imgBody = $(".content.img"),
  interests = $(".ul_anchor"),
  sendButton = $("#send"),
  content_ul = $(".content__links"),
  user_menu = [
    "file.png",
    "like.png",
    "photo-camera.png",
    "smartphone.png",
    "list.png",
    "file.png",
    "file.png",
    "file.png",
    "file.png",
    "like.png",
    "like.png",
    "file.png"
  ],

  admin_menu = [
    "file.png",
    "file.png",
    "file.png",
    "file.png"
  ],


  title_check = ["success.png"],
  user_title = [
    "My interests",
    "Education",
    "Photo",
    "Contact",
    "Test",
    "Story",
    "Guest Book",
    "Blog",
    "Upload Posts",
    "Admin",
    "Login",
    "Exit"
  ];

  admin_title = [
    "Edit Blog",
    "Upload Reviews", 
    "Statistics",
    "Exit"
  ];

let numTitles,
  numStory = {
    Interest: 0,
    Education: 0,
    Photo: 0,
    Contact: 0,
    Test: 0,
  };

function outputPhoto() {
  try {
    fotos.forEach((element, i) => {
      let context = `
        <div class="container_img">
          <img src="${element}"  title = "${titles[i]}">
          <div class="img_title">${titles[i]}</div>
        </div>`;
      imgBody.append(context);
    });
  } catch (error) {
    return 0;
  }
}

let imgCheck;

function openPhoto() {
  const img__content = $(".container_img"),
    photo__open = $(".photo__open");
  photo__background = $(".photo__background");

  img__content.each((i, img) => {
    $(img).bind("click", () => {
      imgCheck = i;
      photo__open.css("display", "block");
      photo__background.css("display", "flex");
      let context = `
        <img title ="${titles[i]}" src=${fotos[i]}" />
        <div class="img__title">
          ${titles[i]}
         </div>`;
      photo__open;
      photo__open.prepend(context);
    });
  });

  photo__background.bind("click", () => {
    photo__open.css("display", "none");
    photo__background.css("display", "none");
    $(".photo__open img").remove();
    $(".photo__open .img__title").remove();
  });
}


function nextPhoto() {
  const prevButton = $(".button__prev"),
    nextButton = $(".button__next"),
    img_content = $(".img__content"),
    photo_open = $(".photo__open"),
    photo_background = $(".photo__background");

  console.log(prevButton);

  prevButton.bind("click", () => {
    imgCheck -= 1;
    if (imgCheck < 1) {
      imgCheck = 15;
    }
    let context = `
    <img title ="${titles[imgCheck - 1]}" src=${fotos[imgCheck - 1]}" /> 
    <div class="img__title">
      ${titles[imgCheck - 1]}
     </div>`;
    $(".photo__open img").remove();
    $(".photo__open .img__title").remove();
    photo_open.prepend(context);
  });

  nextButton.bind("click", () => {
    imgCheck += 1;
    if (imgCheck >= 15) {
      imgCheck = 0;
    }
    let context = `
    <img title ="${titles[imgCheck]}" src=${fotos[imgCheck]}" /> 
    <div class="img__title">
      ${titles[imgCheck]}
     </div>`;
    $(".photo__open img").remove();
    $(".photo__open .img__title").remove();
    photo_open.prepend(context);
  });
}

function showPopoverHelper() {

  const contactLeft = $('.contact__left'),
    contactRight = $('.contact__right')

  contactLeft.on('mouseover', () => {
    $('.contact__left .helper').css('display', 'flex');
  })

  contactLeft.on('mouseout', () => {
    setTimeout(() => { $('.contact__left .helper').css('display', 'none') },
      1500)
  })

  contactRight.on('mouseover', () => {
    $('.contact__right .helper').css('display', 'flex');
  })

  contactRight.on('mouseout', () => {
    setTimeout(() => { $('.contact__right .helper').css('display', 'none') },
      1500)
  })

}

function showAnotherPopoverHelper() {
  let img__popover = $('.img__popover')
  let pop__popover = $('.pop__popover')
  img__popover.each((i, elem) => {
    $(elem).on('mouseover', () => {
      $(pop__popover[i]).css('display', 'block')
    })

    $(elem).on('mouseout', () => {
      $(pop__popover[i]).css('display', 'none')
    })
  })
}

function outputInterests() {
  try {
    for (let i = 0; i < arguments.length; i++) {
      let nameHTML = ` <li class="list_item">
      <a href = "#${arguments[i]}" >${arguments[i]}</a></li>`;
      interests.append(nameHTML);
    }
  } catch (error) {
    return 0;
  }
}

$().addClass("")
$().removeClass()
$().toggleClass("")

function checkContact() {
  try {
    const contact_container = $(".container.contact");
    const contactHr = $("hr");
    let inputs = document.querySelectorAll(".input");

    const warnings = $(".warning");

    sendButton.bind("click", () => {
      warnings.each((i, element) => {
        $(element).css("display", "none");
      });
      contactHr.each((i, element) => {
        $(element).css("borderColor", "#e9e9e9 ");
      });
      $(inputs).each((index, input) => {
        if (input.value == "") {
          switch (index) {
            case 0:
              alert("Не до конца ввели ФИО!");
              $(".warning.fio").css("display", "block");
              $(".warning.fio").html("Пустое поле ФИО");
              contactHr[0].style.borderColor = "rgb(224 0 0)";
              break;
            case 1:
              alert("Не до конца ввели Возраст!");
              contactHr[1].style.borderColor = "rgb(224 0 0)";
              break;
            case 2:
              alert("Не до конца ввели Email!");
              $(".warning.email").css("display", "block");
              $(".warning.email").html("Пустое поле email");
              contactHr[2].style.borderColor = "rgb(224 0 0)";
              break;
            case 3:
              alert("Не до конца ввели Телефон");
              $(".warning.phone").css("display", "block");
              $(".warning.phone").html("Пустое поле телефон");
              contactHr[3].style.borderColor = "rgb(224 0 0)";
              break;
            default:
              break;
          }
          input.focus();
        }
      });
    });
  } catch (error) {
    return 0;
  }
}

function AskQuestion() {
  const buttonSend = $('#send_type'),
    question = $('.question'),
    backQuestion = $('.photo__background'),
    butLeft = $('.question__left'),
    butRight = $('.question__right')

  buttonSend.bind('click', () => {
    question.css('display', 'flex')
    backQuestion.css('display', 'flex')
  })

  butLeft.bind('click', () => {
    question.css('display', 'none')
    backQuestion.css('display', 'none')
  })

  butRight.bind('click', () => {
    question.css('display', 'none')
    backQuestion.css('display', 'none')
  })

}

function correctContact() {
  try {
    const contact_container = document.querySelector(".container.contact");
    let FIO = document.querySelector("#FIO");
    let Phone = document.querySelector("#Phone");

    sendButton.addEventListener("click", () => {
      if (
        Phone.value.substr(0, 2) != "+7" ||
        Phone.value.length < 9 ||
        Phone.value.length > 12
      ) {
        alert("Неправильно введен телефон!");
        Phone.focus();
      }

      for (let i = 1; i < Phone.value.length; i++) {
        if (
          Phone.value[i] != 0 &&
          Phone.value[i] != 1 &&
          Phone.value[i] != 2 &&
          Phone.value[i] != 3 &&
          Phone.value[i] != 4 &&
          Phone.value[i] != 5 &&
          Phone.value[i] != 6 &&
          Phone.value[i] != 7 &&
          Phone.value[i] != 8 &&
          Phone.value[i] != 9
        ) {
          console.log(Phone.value[i]);
          alert("Неправильно введен телефон!");
          Phone.focus();
          break;
        }
      }

      if (
        (FIO.value.split(" ").length != 3) &
        (FIO.value.split(" ").length < 3)
      ) {
        alert("Неправильно введено  ФИО!");
        FIO.focus();
      }
    });
  } catch (error) {
    return 0;
  }
}

function correctTest() {
  try {
    send = $("#send_type");

    send.bind("click", () => {
      let Test = $("#Test_input");
      if (Test.val().length > 2) {
        alert("Введен лимит 30 слов!");
      }
    });
  } catch (error) {
    console.log(error);
  }
}



function findNumTitle() {
  let variable;
  if (document.querySelector(".content.img")) {
    numTitles = 2;
    numStory.Photo += 1;
    variable = Number(localStorage.numPhoto);
    localStorage.numPhoto = variable + 1;
  }
  if (document.querySelector(".content.about")) {
    numTitles = 0;
    numStory.Education += 1;
    variable = Number(localStorage.numEducation);
    localStorage.numEducation = variable + 1; 
  }
  if (document.querySelector("#films")) {
    numTitles = 1;
    numStory.Interest += 1;
    variable = Number(localStorage.numInterest);
    localStorage.numInterest = variable + 1;
  }
  if (document.querySelector("#FIO")) {
    numTitles = 3;
    numStory.Contact += 1;
    variable = Number(localStorage.numContact);
    localStorage.numContact = variable + 1;
  }
  if (document.querySelector(".text-white.test")) {
    numTitles = 4;
    numStory.Test += 1;
    variable = Number(localStorage.numTest);
    localStorage.numTest = variable + 1;
  }

  setCookie(numStory);
}

function outputNavbar(isAdmin, isAuthorized) {
  let link = ""
  if (!isAdmin) {
    if (!isAuthorized) { user_menu.pop(); }
    user_menu.forEach((element, i) => {
      switch (i) {
        case 0: link = "/hobbies"; break;
        case 1: link = "/studies"; break;
        case 2: link = "/photoAlbum"; break;
        case 3: link = "/contacts/index"; break;
        case 4: link = "/test/index"; break;
        case 5: link = "/story"; break;
        case 6: link = "/guestBook/index"; break; 
        case 7: link = "/blog/index"; break;
        case 8: link = "/uploadPosts/index"; break;
        case 9: link = "/admin"; break;
        case 10: link = "/login/signin"; break;
        case 11: link = "/login/logout"; break;
      };

      let context = `<li ><a class="link " href="${link}">${user_title[i]
      }</a></li>`;

      content_ul.append(context);

    })
  } else {
    admin_menu.forEach((element, i ) => {
      switch(i) {
        case 0: link = "/editBlog/index"; break;
        case 1: link = "/uploadReviews/index"; break;
        case 2: link = "/adminStatistics/index"; break;
        case 3: link = "/admin/logout"; break;
d      }
      let context = `<li ><a class="link " href="${link}">${admin_title[i]
      }</a></li>`;
  
      content_ul.append(context);
    })

  };
}


function setDate() {
  const date = new Date(),
    time = document.querySelector(".time");
  let fullMonth = "";

  switch (date.getMonth() + 1) {
    case 1:
      fullMonth = "января";
      break;
    case 2:
      fullMonth = "февраля";
      break;
    case 3:
      fullMonth = "марта";
      break;
    case 4:
      fullMonth = "апреля";
      break;
    case 5:
      fullMonth = "мая";
      break;
    case 6:
      fullMonth = "июня";
      break;
    case 7:
      fullMonth = "июля";
      break;
    case 8:
      fullMonth = "августа";
      break;
    case 9:
      fullMonth = "сентября";
      break;
    case 10:
      fullMonth = "октября";
      break;
    case 11:
      fullMonth = "ноября";
      break;
    case 12:
      fullMonth = "декабря";
      break;
    default:
      break;
  }

  time.insertAdjacentHTML(
    "beforeend",
    `${date.getDate()} ${fullMonth} ${date.getFullYear()} года`
  );
}

function useCalendar() {
  try {
    const days = document.querySelector(".days"),
      liDays = days.querySelectorAll("li"),
      month = document.querySelector(".month"),
      year = document.querySelector(".year"),
      prev = month.querySelector(".prev"),
      next = month.querySelector(".next"),
      monthCol = month.querySelector(".monthCol");
    monthCollections = [
      "Январь",
      "Февраль",
      "Март",
      "Апрель",
      "Май",
      "Июнь",
      "Июль",
      "Август",
      "Сентябрь",
      "Октябрь",
      "Ноябрь",
      "Декабрь",
    ];

    monthCol.insertAdjacentHTML("afterbegin", monthCollections[10]);
    let i = 10,
      yearNum = 2021;
    year.insertAdjacentHTML("beforeend", yearNum);
    prev.addEventListener("click", () => {
      monthCol.innerHTML = "";
      let setMonth = i - 1;
      if (setMonth < 0) {
        setMonth = 11;
        yearNum -= 1;
        year.innerHTML = "";
        year.insertAdjacentHTML("beforeend", yearNum);
      } else if (setMonth > 11) {
        setMonth = 0;
      }
      monthCol.insertAdjacentHTML("afterbegin", monthCollections[setMonth]);
      i = setMonth;
    });

    next.addEventListener("click", () => {
      monthCol.innerHTML = "";
      let setMonth = i + 1;
      if (setMonth < 0) {
        setMonth = 11;
      } else if (setMonth > 11) {
        yearNum += 1;
        year.innerHTML = "";
        year.insertAdjacentHTML("beforeend", yearNum);
        setMonth = 0;
      }
      monthCol.insertAdjacentHTML("afterbegin", monthCollections[setMonth]);
      i = setMonth;
    });

    liDays.forEach((day, index) => {
      day.addEventListener("click", () => {
        liDays.forEach((day) => {
          day.classList.remove("active");
        });
        day.classList.add("active");
      });
    });
  } catch (error) {
    return 0;
  }
}



function setCookie(numStory) {
  try {
    storyElement = document.querySelector(".story");
    storyElement.innerHTML = "";

    storyElement.innerHTML = `Фото: ${localStorage.numPhoto} , Мои интересы: ${localStorage.numInterest},
  Образование: ${localStorage.numEducation}, Контакты: ${localStorage.numContact}, Тесты: ${localStorage.numTest}`;
  } catch (error) {
    return 0;
  }
}

function checkLocal() {
  localStorage.numPhoto = 0;
  localStorage.numInterest = 0;
  localStorage.numTest = 0;
  localStorage.numContact = 0;
  localStorage.numEducation = 0;
}

setCookie();
// showPopoverHelper()
outputInterests("favourite", "books", "music", "films", "games");
//outputPhoto();
openPhoto();
AskQuestion()
nextPhoto();
setDate();
useCalendar();
//correctContact();
//checkContact();
//correctTest();
//checkLocal();
findNumTitle();
showAnotherPopoverHelper();
