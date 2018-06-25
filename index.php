<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- .................................sheets.................................-->
    
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/style.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/index.js"></script>
    <!-- .................................Fonts .................................-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300i,400,700" rel="stylesheet">
    <!-- .................................Meta Tags.................................-->
    <title>Monostream Einladung</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="author" content="Monostream - Janis Wanger">
    <meta name="description" content="Monostream zieht um. Endlich! Wir freuen uns dich einzuladen an unseren Einweihungsevent am 21.06.18. Das ganze Team würde sich freuen, wenn du dich anmelden würdest!">
    <!-- .................................Twitter.................................-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@monostream">
    <meta name="twitter:title" content="Komme an die Einweihung!">
    <meta name="twitter:description" content="Monostream zieht um. Endlich! Wir freuen uns dich einzuladen an unseren Einweihungsevent am 21.06.18. Das ganze Team würde sich freuen, wenn du dich anmelden würdest! Klicke jetzt oben auf den Link!">
    <meta name="twitter:image" content="http://janiswanger.ch/z/11_AnmeldungMS/img/invitation.png">
    <!--.................................favicon.................................-->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  <!--.................................start Body.................................-->
  <body></body>
  <div class="container">
    <div class="m_title">Einweihung</div>
    <form action="php/Add.php" method="post" class="mform">
      <div class="m_t m_name">Name</div>
      <input type="text" name="m_f_name" autofocus placeholder="Vorname Name">
      <div class="m_t m_anzahl">Anzahl Personen</div>
      <div class="i_c">
        <input type="number" name="m_f_anual" value="1" class="jselector">
        <div class="inc button b1">+</div>
        <div class="inc button b2">-</div>
      </div>
      <input type="submit" name="m_f_sub" value="absenden">
    </form>
  </div>
</html>
