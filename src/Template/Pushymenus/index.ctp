<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pushymenu'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pushymenus Items'), ['controller' => 'PushymenusItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pushymenus Item'), ['controller' => 'PushymenusItems', 'action' => 'add']) ?></li>
        <hr>
        <li><?= $this->Html->link(__('Delete all selected'), ('javascript:getAllSelectedRows()')) ?></li>
        

    </ul>
</nav>
<div class="pushymenus index large-10 medium-10 columns content">
    <h3><?= __('Pushymenus') ?></h3>
    <table cellpadding="0" cellspacing="0" id="pushyindextable">
        <thead>
            <tr>
                <th></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('controller') ?></th>
                <th><?= $this->Paginator->sort('action') ?></th>
                <th><?= $this->Paginator->sort('plugin') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pushymenus as $pushymenu): ?>

            <tr id="tablerowid_<?=$pushymenu->id?>" >
                
                <td>
                <?php
                    //check box
                    echo $this->Form->checkbox('selectedrow',[
                        'id'=>$pushymenu->id,
                        'class'=>'checkboxes'
                        ]);
                ?>
                </td>
                <td><?= $this->Number->format($pushymenu->id) ?></td>
                <td><?= h($pushymenu->title) ?></td>
                <td><?= h($pushymenu->controller) ?></td>
                <td><?= h($pushymenu->action) ?></td>
                <td><?= h($pushymenu->plugin) ?></td>
                <td><?= h($pushymenu->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pushymenu->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pushymenu->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pushymenu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pushymenu->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>


<script type="text/javascript">

//get all items that are checked as true
function getAllSelectedRows(){
    //table pushyindextable
    $('input:checkbox.checkboxes').each(function () {
       if(this.checked)
       {
            console.log('checked '+this.id);
            
            //do delete
            ajaxdelete(this.id)            
            hideRow(this.id);
            
       }
  });
}





function hideRow(rowid)
{
    $('#tablerowid_'+rowid).toggle();
}



function ajaxdelete(recordid)
{
     jQuery.ajax({
        type:'POST',
        async: true,
        cache: false,
        url: 'pushymenus/ajaxdelete/'+recordid,
        success: function(response) {            
            console.log("delete done.");               
            //hide the row
             hideRow(recordid);

        },
        error: function(response) {           
            console.log("error");     
           
        },
    });
}
</script>
