<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trip $trip
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trip->trip_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trip->trip_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Trips'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trips form content">
            <?= $this->Form->create($trip) ?>
            <fieldset>
                <legend><?= __('Edit Trip') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('url_maps');
                    echo $this->Form->control('date_from');
                    echo $this->Form->control('date_to');
                    echo $this->Form->control('creation_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
