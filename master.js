$(document).ready(() => {

  $("#mob-bar").on("click", () => {
    $("#mob-nav").slideToggle(500);
  });

  $(".product-pav").on("click", (event) => {
    $(event.currentTarget).parent().children(".product-slide").slideToggle(500);

    function rotate() {
      if ($(event.currentTarget).children("i").hasClass("rotate") == true) {
        $(event.currentTarget).children("i").removeClass("rotate")
      } else {
        $(event.currentTarget).children("i").addClass("rotate")
      }
    }
    rotate();
    });

    function setNavigation() {
      let path = window.location.pathname;
      path = decodeURIComponent(path);

      $(".nav a").each(function () {
        let href = $(this).attr('href');
        let pageRef = path.substring(path.length-href.length, path.length);
        if(pageRef === href){
          $(this).closest('li').addClass("active-nav");
        }
      });
    }

    setNavigation();

    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    });

});


function validateEmail(email) {
  let emailChar = email.split("");
  if (emailChar.indexOf("@") !== -1 && emailChar.indexOf(".") !== -1) {
    return true;
  } else {
    return false;
  }
}


function sendMessage() {
  let sendMessageName = $("#sendMessageName").val();
  let sendMessageEmail = $("#sendMessageEmail").val();
  let sendMessagePhone = $("#sendMessagePhone").val();
  let sendMessageMessage = $("#sendMessageMessage").val();

  $.ajax({
    url: "sendMessage.php",
    type: "POST",
    data: {
      sendMessageName: sendMessageName,
      sendMessageEmail: sendMessageEmail,
      sendMessagePhone: sendMessagePhone,
      sendMessageMessage: sendMessageMessage
    },
    success: function alertSuccess(data){
      if (sendMessageName && validateEmail(sendMessageEmail) && sendMessagePhone && sendMessageMessage) {
        $("#sendMessageName").val("");
        $("#sendMessageEmail").val("");
        $("#sendMessagePhone").val("");
        $("#sendMessageMessage").val("");
        alert("Žinutė sėkmingai išsiųsta");
      } else {
        alert("Prašome užpildyti visus įvedimo laukus ir nurodyti teisingai el.pašto adresą");
      }

    },
    error: function alertError(e){
      alert("Nepavyko išsiųsti žinutės");
    }
  })
}
