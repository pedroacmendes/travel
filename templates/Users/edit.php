<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-center">Profile Settings</h4>
        </div>

        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQF2psCzfbB611rnUhxgMi-lc2oB78ykqDGYb4v83xQ1pAbhPiB&usqp=CAU">
            </div>
        </div>

        <div class="col-md-8 border-right">
            <?= $this->Form->create($user) ?>
            <div class="p-3 py-5">

                <div class="row mt-3">
                    <div class="col-md-12">
                        <?php echo $this->Form->control('name', ['class' => 'form-control']); ?>
                        <?php echo $this->Form->control('email', ['class' => 'form-control']); ?>
                        <?php echo $this->Form->control('password', ['class' => 'form-control']); ?>
                        <?php echo $this->Form->control('phone', ['class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <?php echo $this->Form->control('city', ['class' => 'form-control']); ?>
                    </div>
                    <div class="col-md-6">
                        <?php echo $this->Form->control('age', ['class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <?= $this->Form->button(__('Submit'), ['class' => "btn btn-primary profile-button"]) ?>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
