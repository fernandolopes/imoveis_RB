<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo html::anchor("clientes/create", "Adicionar Cliente"); ?>
<table border="1">
    <tr>
        <td style="font-weight: bold; width: 100px;">Nome:</td>
        <td style="font-weight: bold; width: 150px;">Sobrenome:</td>
        <td style="font-weight: bold; width: 100px;">Sexo:</td>
        <td style="font-weight: bold; width: 150px;">Data de Nascimento:</td>
        <td style="font-weight: bold; width: 120px;">CPF:</td>
        <td style="font-weight: bold; width: 120px;">RG:</td>
        <td style="font-weight: bold; width: 100px;">Ações</td>
    </tr>
    <?php foreach ($clientes AS $cliente){ ?>
        <tr>
            <td><?php echo $cliente->nome; ?></td> 
            <td><?php echo $cliente->sobrenome; ?></td> 
            <td><?php 
                if( $cliente->sexo == 'f'){
                    echo 'Feminino';
                } else {
                    echo 'Masculino';
                }?>
            </td> 
            <td><?php echo format::date_mysql2human($cliente->data_nascimento); ?></td> 
            <td><?php echo format::cpf($cliente->cpf); ?></td> 
            <td><?php echo $cliente->rg; ?></td>
            <td>
                <?php echo html::anchor('clientes/edit/'.$cliente->id, 'Editar'); ?>
                <?php echo html::anchor('clientes/delete/'.$cliente->id, 'Apagar'); ?>
            </td>
        </tr>
    <?php } ?>
</table>
