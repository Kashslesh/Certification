const url = "/messages.json";


const messagesbloc = document.querySelector(".textDeMessage");
function getMessage() {
  fetch(url)
    .then((response) => response.json())
    .then((data) => {
      messagesbloc.innerHTML = "";
      data.forEach((elem) => {
        let nom = elem.username;
        let mesg = elem.message;
        let dataDepost = elem.created_at;
        messagesbloc.insertAdjacentHTML(
          "afterbegin",
          `<ul><li><p>${nom}</p>
            <h6>${dataDepost}</h6>
          <h4>${mesg}</h4></ul>`
        );
      });
    });
}
getMessage();
setInterval(getMessage, 1000);
messagesbloc.addEventListener('mouseover', function(){
  messagesbloc.style = "overflow:auto";
})
messagesbloc.addEventListener('mouseout', function(){
  messagesbloc.style = "overflow:hidden";
})