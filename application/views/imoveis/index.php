<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo html::anchor("imoveis/create", "Adicionar Imóvel"); ?>
<table border="1">
    <tr>
        <td style="font-weight: bold; width: 100px;">Nome:</td>
        <td style="font-weight: bold; width: 150px;">Logradouro:</td>
        <td style="font-weight: bold; width: 100px;">Numero:</td>
        <td style="font-weight: bold; width: 15 0px;">Complemento:</td>
        <td style="font-weight: bold; width: 120px;">Bairro:</td>
        <td style="font-weight: bold; width: 120px;">Cidade:</td>
        <td style="font-weight: bold; width: 120px;">Uf:</td>
        <td style="font-weight: bold; width: 120px;">Cep:</td>
        <td style="font-weight: bold; width: 100px;">Ações</td>
    </tr>
    <?php foreach ($imoveis AS $imovel){ ?>
        <tr>
            <td><?php echo $imovel->nome; ?></td> 
            <td><?php echo $imovel->logradouro; ?></td> 
            <td><?php echo $imovel->numero; ?></td> 
            <td><?php echo $imovel->complemento; ?></td> 
            <td><?php echo $imovel->bairro; ?></td> 
            <td><?php echo $imovel->cidade; ?></td> 
            <td><?php echo $imovel->uf; ?></td> 
            <td><?php echo format::cep($imovel->cep); ?></td> 
            <td>
                <?php echo html::anchor('imoveis/edit/'.$imovel->id, 'Editar'); ?>
                <?php echo html::anchor('imoveis/delete/'.$imovel->id, 'Apagar'); ?>
            </td>
        </tr>
    <?php } ?>
</table>
