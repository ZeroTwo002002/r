$(document).ready(function(){

    $('#menu').click(function(){
        $(this).toggleClass('fa-times');
        $('header').toggleClass('toggle');


    });
    $(window).on('scroll load',function(){
        $('#menu').removeClass('fa-times');
        $('header').removeClass('toggle');
    });

});
document.getElementById("contact-form").onsubmit = function (event) {
    event.preventDefault();
  
    // Récupérer les valeurs des champs du formulaire
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const subject = document.getElementById("subject").value;
    const message = document.getElementById("message").value;
  
    // Envoyer les données au serveur en utilisant AJAX (remplacez "send_email.php" par le nom de votre script côté serveur)
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "index.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // Succès : afficher un message de confirmation à l'utilisateur
          alert("Message envoyé avec succès !");
          // Réinitialiser le formulaire après l'envoi
          document.getElementById("contact-form").reset();
        } else {
          // Erreur : afficher un message d'erreur à l'utilisateur
          alert("Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.");
        }
      }
    };
    xhr.send(`name=${name}&email=${email}&subject=${subject}&message=${message}`);
  };