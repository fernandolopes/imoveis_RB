<?php defined('SYSPATH') or die('No direct script access.'); ?>

<?php echo form::open(null, array('method'=>'post')); ?>

<table>
    <tr>
        <td>Nome:</td>
        <td>
            <input type="text" name="nome" maxlength="60" size="50" value="<?= Arr::get($values, 'nome'); ?>" />
            <label for="nome" class="error"><?= Arr::get($errors, 'nome'); ?>
        </td>
    </tr>
    
    <tr>
        <td>Logradouro:</td>
        <td><input type="text" name="logradouro" maxlength="100" size="50" value="<?= Arr::get($values, 'logradouro'); ?>" />
            <label for="logradouro" class="error"><?= Arr::get($errors, 'logradouro'); ?></td>
    </tr>
    
    <tr>
        <td>Número:</td>
        <td><input type="text" name="numero" size="10" value="<?= Arr::get($values, 'numero'); ?>" />
        <label for="numero" class="error"><?= Arr::get($errors, 'numero'); ?></td>
    </tr>
    
    <tr>
        <td>Complemento:</td>
        <td><input type="text" name="complemento" size="50" value="<?= Arr::get($values, 'complemento'); ?>" /></td>
    </tr>
  
    <tr> 
        <td>Bairro: </td>
        <td><input type="text" name="bairro" value="<?= Arr::get($values, 'bairro'); ?>" />
            <label for="bairro" class="error"><?= Arr::get($errors, 'bairro'); ?></td>
    </tr>
    
    <tr> 
        <td>Cidade:</td> 
        <td><input type="text" name="cidade" value="<?= Arr::get($values, 'cidade'); ?>" />
            <label for="cidade" class="error"><?= Arr::get($errors, 'cidade'); ?></td>
    </tr>
    
    <tr> 
        <td>UF:</td> 
        <td><input type="text" name="uf" maxlength="2" size="2" value="<?= Arr::get($values, 'uf'); ?>" />
            <label for="uf" class="error"><?= Arr::get($errors, 'uf'); ?></td>
    </tr>
    
    <tr> 
        <td>CEP:</td> 
        <td><input type="text" name="cep" maxlength="9" alt="cep" value="<?= Arr::get($values, 'cep'); ?>" />
            <label for="cep" class="error"><?= Arr::get($errors, 'cep'); ?></td>
    </tr>

    <tr>     
        <td><input type="submit" value="Criar" /></td>
        <td></td>
    </tr>
    
</table>

<?php echo form::close(); ?>

<?php echo html::anchor('imoveis/index', 'Voltar'); ?>

<script type="text/javascript" >
  (function($){
    // call setMask function on the document.ready event
      $(function(){
        $('input:text').setMask();
      }
    );
  })(jQuery);
</script>