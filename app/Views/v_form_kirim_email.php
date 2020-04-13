<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kirim Email dengan Codeigniter 4 dan PHP Mailer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>

    <div class="container mt-5 mb-5 text-center">
        <h4>Tutorial Kirim Email dengan Codeigniter 4 dan PHP Mailer - Ilmu Coding</h4>
    </div>
    <div class="container">
        <h4>Form Kirim Email</h4>
        <hr>
        <?php
            if(!empty(session()->getFlashdata('success'))){ ?>
            <div class="alert alert-success">
                <?php echo session()->getFlashdata('success');?>
            </div>     
            <?php } 

            if(!empty(session()->getFlashdata('error'))){ ?>
            <div class="alert alert-danger">
                <?php echo session()->getFlashdata('error');?>
            </div>
        <?php } 

        echo form_open('kirim_email/send'); ?>

            <div class="form-group">
                <?php 
                form_label('To'); 
                $to = [
                    'type'  => 'email',
                    'name'  => 'to',
                    'class' => 'form-control',
                    'placeholder' => 'email@example.com'
                 ];
                 echo form_input($to); 
                 ?>
            </div>
            <div class="form-group">
                <?php 
                form_label('Subject'); 
                $subject = [
                    'type'  => 'text',
                    'name'  => 'subject',
                    'class' => 'form-control',
                    'placeholder' => 'Subject'
                 ];
                 echo form_input($subject); 
                 ?>
            </div>
            <div class="form-group">
                <?php 
                form_label('Message'); 
                $message = [
                    'type'  => 'text',
                    'name'  => 'message',
                    'class' => 'form-control',
                    'placeholder' => 'Message'
                 ];
                 echo form_textarea($message); 
                 ?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>