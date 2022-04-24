<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trip[]|\Cake\Collection\CollectionInterface $trips
 */
?>
<div class="trips index content">
    <?= $this->Html->link(__('New Trip'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Trips') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('trip_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('url_maps') ?></th>
                    <th><?= $this->Paginator->sort('date_from') ?></th>
                    <th><?= $this->Paginator->sort('date_to') ?></th>
                    <th><?= $this->Paginator->sort('creation_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trips as $trip): ?>
                <tr>
                    <td><?= $this->Number->format($trip->trip_id) ?></td>
                    <td><?= $trip->has('user') ? $this->Html->link($trip->user->name, ['controller' => 'Users', 'action' => 'view', $trip->user->id]) : '' ?></td>
                    <td><?= h($trip->name) ?></td>
                    <td><?= h($trip->description) ?></td>
                    <td><?= h($trip->url_maps) ?></td>
                    <td><?= h($trip->date_from) ?></td>
                    <td><?= h($trip->date_to) ?></td>
                    <td><?= h($trip->creation_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $trip->trip_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trip->trip_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trip->trip_id], ['confirm' => __('Are you sure you want to delete # {0}?', $trip->trip_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
