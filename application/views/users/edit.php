<?php defined('SYSPATH') or die('No direct script access.'); ?>

<?php echo form::open(null, array('method'=>'post')); ?>

<table>
    <tr>
        <td>Nome:</td>
        <td>
            <input type="text" name="nome" value="<?= Arr::get($values, 'nome'); ?>" />
            <label for="nome" class="error"><?= Arr::get($errors, 'nome'); ?>
        </td>
    </tr>
    
    <tr>
        <td>E-mail:</td>
        <td><input type="text" name="email" value="<?= Arr::get($values, 'email'); ?>" />
            <label for="email" class="error"><?= Arr::get($errors, 'email'); ?></td>
    </tr>
    
    <tr>
        <td>senha:</td>
        <td><input type="password" name="senha" value="<?= Arr::get($values, 'senha'); ?>" /></td>
    </tr>
    
    <tr>
        <td>Nome de usuário:</td>
        <td><input type="text" name="username" value="<?= Arr::get($values, 'username'); ?>" /></td>
    </tr>
    <tr>     
        <td><input type="submit" value="Atualizar" /></td>
        <td></td>
    </tr>
    
</table>

<?php echo form::close(); ?>

<?php echo html::anchor('users/index', 'Voltar'); ?>

<script type="text/javascript" >
  (function($){
    // call setMask function on the document.ready event
      $(function(){
        $('input:text').setMask();
      }
    );
  })(jQuery);
</script>
