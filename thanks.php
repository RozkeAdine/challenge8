<?php
echo 'Merci '.$_POST['user_name'].' '.$_POST['user_fname'].' de nous avoir contacté à propos de '.$_POST['user_subject'].'<br>'.'<br>'.'Un de nos conseiller vous contactera soit à l\'adresse '.$_POST['user_email'].' ou par téléphone au '.$_POST['user_tel'].' dans les plus brefs délais pour traiter votre demande : '.'<br>'.'<br>'.$_POST['user_msg'];
?>