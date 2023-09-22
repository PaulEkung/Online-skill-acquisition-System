<?php include('server.php') ?>
<?php if(count($errors) > 0): ?>

<div style="position:relative"
 class="alert alert-danger">
<!-- <button style="float:right;border-radius:0%;padding:0px;outline:none" type="btn" data-dismiss="alert" class="btn btn-danger"> -->
<!-- <txt style="font-size:2rem">ok</txt></button> -->
 <?php foreach($errors as $error): ?>

   <p> <?php echo $error ?></p>
   
<?php endforeach; ?>
</div>

<?php endif ?>


