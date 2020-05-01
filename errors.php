<?php if (count($error)>0):?>
<div class="error">
<?php foreach ($error as $in_error):?>
    <p><?php echo $in_error ?> </p>
<?php endforeach ?>
</div>
<?php endif ?>