        <?php defined('SYSPATH') or die('No direct script access.'); ?>
        <?php echo html::anchor("users/create", "Adicionar usuario"); ?>
        <table border="1">
            <tr>
                <td style="font-weight: bold; width: 150px;">Nome:</td>
                <td style="font-weight: bold; width: 150px;">Email:</td>
                <td style="font-weight: bold; width: 150px;">Nome de usuário</td>
                <td style="font-weight: bold; width: 150px;">Ações</td>
            </tr>
            
            <?php foreach ($usuarios AS $usuario){ ?>
                <tr>
                    <td><?php echo $usuario->nome; ?></td>
                    <td><?php echo $usuario->email; ?></td>                    
                      <td>

                        <?php echo html::anchor('users/edit/'.$usuario->id, 'Editar'); ?>
                        <?php echo html::anchor('users/delete/'.$usuario->id, 'Apagar'); ?>

                    </td>
                </tr>
            <?php } ?>
        </table>

        