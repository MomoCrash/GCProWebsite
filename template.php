<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/mainstyle.css" rel="stylesheet" type="text/css"/>
    <script src="https://www.paypal.com/sdk/js?client-id=AZnYiH2U3I5gyVjD-xbHsvDYujBeMmvmD-UmrhfOHTOQLT9LP0Il05FQ6q6H1v5YLSxTZDFviJ5qCnrf"></script>
</head>
  <nav class="navbar" id="navbar">
      <div class="nav-img">
        <a href="#"><img src="ressources/logo_black.svg" alt="logo home"></a>
      </div>
      <div class="nav-links">
        <ul>
          <li><a href="#">NEWS</a></li>
          <li><a href="#" class="nav-border">NOS EXPERIENCES</a></li>
          <li><a href="#" class="nav-border">A PROPOS DE NOUS</a></li>
          <li><a href="#" class="nav-border">NOS EQUIPEMENTS</a></li>
          <li><a href="#" class="nav-border"><b>CONNEXION</b></a></li>
        </ul>
      </div>
      <img src="ressources/bouton_menu_by_moi.png" alt="menu_bouton" class="menu_bouton" id="menu_bouton">
  </nav>
  <header></header>

  <div class="top_container">
    <div id="paypal-button-container" class="paypal"></div>
  </div>
  <script>
  paypal.Buttons({
    createOrder: function(data, actions){
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '3123121213'
          }
        }]
      })
    },
    onApprove: function(data, actions){
      return actions.order.capture().then(function(details){
        alert("Transaction OK : "+details.payer.name.given_name);
      })
    },
    onError: function (err){
      console.error('Payment Error :', err);
      alert("Payment Failed");
    }
  }).render("#paypal-button-container");
  </script>

</html>