<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trip $trip
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Trip'), ['action' => 'edit', $trip->trip_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Trip'), ['action' => 'delete', $trip->trip_id], ['confirm' => __('Are you sure you want to delete # {0}?', $trip->trip_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Trips'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Trip'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trips view content">
            <h3><?= h($trip->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $trip->has('user') ? $this->Html->link($trip->user->name, ['controller' => 'Users', 'action' => 'view', $trip->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($trip->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($trip->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Url Maps') ?></th>
                    <td><?= h($trip->url_maps) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trip Id') ?></th>
                    <td><?= $this->Number->format($trip->trip_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date From') ?></th>
                    <td><?= h($trip->date_from) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date To') ?></th>
                    <td><?= h($trip->date_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creation Date') ?></th>
                    <td><?= h($trip->creation_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
