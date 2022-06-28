  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
  <form  action="thanks.php" method="post">
  <div>
    <label for="name">Nom :</label>
    <input type="text"  id="name"  name="user_name">
  </div>
  <div>
    <label for="name">Prénom :</label>
    <input type="text"  id="prenom"  name="user_fname">
  </div>
  <div>
    <label  for="email">Courriel :</label>
      <input  type="email"  id="email"  name="user_email">
  </div>
  <div>
    <label  for="tel">Téléphone :</label>
      <input  type="tel"  id="tel"  name="user_tel">
  </div>
  <div>
  <label  for="subject">sujet :</label>
  <select name="user_subject" size="1">
    <option value="blablabla">blablabla</option>
    <option value="que du blabla">que du blabla</option>
    <option value="encore du blabla">encore du blabla</option>
  </select>
  </div>
  <div>
    <label  for="message">Message :</label>
    <textarea  id="message"  name="user_msg"></textarea>
  </div>
  <div  class="button">
    <button  type="submit">Envoyer votre message</button>
  </div>
</form>
  </body>
  </html>