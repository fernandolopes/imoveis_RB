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
        <td>Sobrenome:</td>
        <td><input type="text" name="sobrenome" value="<?= Arr::get($values, 'sobrenome'); ?>" />
            <label for="sobrenome" class="error"><?= Arr::get($errors, 'sobrenome'); ?></td>
    </tr>
    
    <tr>
        <td>Data de nascimento:</td>
        <td><input type="text" name="data_nascimento" alt="date" value="<?= Arr::get($values, 'data_nascimento'); ?>" /></td>
    </tr>
    
    <tr>
        
       <td>Sexo: </td>
           <td>
                <?php echo form::select('sexo', array('f'=>'Feminino','m'=>'Masculino'), Arr::get($values, 'sexo')); ?>
                <label for="sexo" class="error"><?= Arr::get($errors, 'sexo'); ?>
           </td>
    </tr>
  
    <tr> 
        <td>CPF: </td>
        <td><input type="text" name="cpf" alt="cpf" value="<?= Arr::get($values, 'cpf'); ?>" />
            <label for="cpf" class="error"><?= Arr::get($errors, 'cpf'); ?></td>
    </tr>
    
    <tr> 
        <td>RG:</td> 
        <td><input type="text" name="rg" value="<?= Arr::get($values, 'rg'); ?>" />
            <label for="rg" class="error"><?= Arr::get($errors, 'rg'); ?></td>
    </tr>

    <tr>     
        <td><input type="submit" value="Criar" /></td>
        <td></td>
    </tr>
    
</table>

<?php echo form::close(); ?>

<?php echo html::anchor('clientes/index', 'Voltar'); ?>

<script type="text/javascript" >
  (function($){
    // call setMask function on the document.ready event
      $(function(){
        $('input:text').setMask();
      }
    );
  })(jQuery);
</script>