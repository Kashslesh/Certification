const url = "/messages.json";

// console.log(url);

const messagesbloc = document.querySelector(".textDeMessage");
// console.log(space);

// console.log(userConnect,messagesbloc );

function getMessage() {
  fetch(url)
    .then((response) => response.json())
    .then((data) => {
      // console.log(data);
      messagesbloc.innerHTML = "";
      data.forEach((elem) => {
        // console.log(elem);
        let nom = elem.username;
        let mesg = elem.message;
        let dataDepost = elem.created_at;
        // console.log(nom);
        // console.log(mesg);

        messagesbloc.insertAdjacentHTML(
          "afterbegin",
          `<li><p>${nom}</p>
            <li><p>${dataDepost}</p>
          <li><h5>${mesg}</h5>`
        );
      });
    });
}
getMessage();
setInterval(getMessage, 500);
