<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style5.css"/>
        <title>Association Imane</title>
    </head>

    <body>

        <?php include('header.php' ); ?>

        <div id="banniere_image">
            <div id="banniere_description">
            Formulaire de contact
        </div>
    </div>

    <section id="premiere">
       

        <div class="container">
            <h1>Formulaire de contact</h1>
            <form action="post" action="contact.php">
              <label for="fname">Nom & prénom</label>
              <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom" required>
          
              <label for="sujet">Sujet</label>
              <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message" required>
          
              <label for="emailAddress">Email</label>
              <input id="emailAddress" type="email" name="email" placeholder="Votre email" required>
          
          
              <label for="subject">Message</label>
              <textarea id="subject" name="subject" placeholder="Votre message" required style="height:200px"></textarea>
          
              <input type="submit" value="Envoyer">
            </form>
                 
        
        </div>
          
    </section>
    

    <footer>
        <?php include('footer.php' ); ?> 
    </footer>

    </body>

</html>
