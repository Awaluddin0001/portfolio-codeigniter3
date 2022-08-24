<section class="section__home">
    
    <?= form_open('loginin', [ "method" => "get"]) ?>
    <div class="container text-center form__login">
        <?= form_label('username', 'username') ?>
        <?= form_input($inUsername) ?>
        <?= form_label('password', 'password', ["class" => "labelPass"]) ?>
        <?= form_password($inPassword) ?>
        <?= form_button($btnForm) ?>
    </div>
    <?= form_close() ?>
    
</section>