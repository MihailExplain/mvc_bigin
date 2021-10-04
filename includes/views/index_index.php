<h2>All notes</h2>
<table>
    <tr>
        <th>#</th>
        <th>note</th>
        <th>action</th>
    </tr>
    <?php if(count($notes)>0):?>
    <?php foreach ($notes as $note):?>
        <tr>
            <td><?= $note['id']?></td>
            <td><?= $note['text']?></td>
            <td><form action="<?= Route::url('index', 'delete')?>" method="post">
                    <input type="hidden" name="id" value="<?= $note['id']?>">
                    <input type="submit" value="Delete" >
                </form>
            </td>
        </tr>
    <?php endforeach;?>
    <?php endif;?>
<!--    --><?php //var_dump($_GET['id']); ?>
</table>
<form action="<?= Route::url('index','create')?>">
    <input type="submit" value="new note">
</form>