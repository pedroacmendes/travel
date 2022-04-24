<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">

                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                    <?= $this->Form->create() ?>

                    <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Travel</h3>
                    <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Bem-Vindo de volta!</h3>

                    <div class="form-outline mb-4">
                        <?= $this->Form->control('email', ['class' => 'form-control form-control-lg']) ?>
                    </div>
                    <div class="form-outline mb-4">
                        <?= $this->Form->control('password', ['class' => 'form-control form-control-lg']) ?>
                    </div>

                    <div class="pt-1 mb-4">
                        <?= $this->Form->button(__('Login'), ['class' => 'btn btn-info btn-lg btn-block']); ?>
                    </div>

                    <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Já não sabes a tua password?</a></p>
                    <p>Não tens uma conta? <a href="/users/add" class="link-info">Regista-te aqui</a></p>

                    <?= $this->Form->end() ?>

                </div>
            </div>

            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="/img/welcome.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>

        </div>
    </div>
</section>
