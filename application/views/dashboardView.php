<!DOCTYPE html>
<html>
    <head>


    </head>
    <body>
        <?php if($this->session->flashdata("success")) ;?>

        <?php endif;?>

        <?php if($this->session->flashdata("danger")) ;?>

        <?php endif;?>
    </body>
</html>
