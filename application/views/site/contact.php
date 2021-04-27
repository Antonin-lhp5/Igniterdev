<div class="">
    <div class="bg-dark">
        <h1 class="container text-light p-4"><?= $title ?></h1>
    </div>
    <div class="container pt-4">
        <div class="row col-6">
            <?= form_open('contact', ['class' => 'form']); ?>
            <div class="mb-3">
                <?= form_label("Votre nom&nbsp;:", "name", ['class' => "form-label"]) ?>
                <?= form_input(['name' => "name", 'id' => "name", 'class' => 'form-control']) ?>
            </div>
            <div class="mb-3">
                <?= form_label("Votre e-mail&nbsp;:", "email", ['class' => "form-label"]) ?>
                <?= form_input(['name' => "email", 'id' => "email", 'type' => 'email', 'class' => 'form-control']) ?>
            </div>
            <div class="mb-3">
                <?= form_label("Titre&nbsp;:", "title", ['class' => "form-label"]) ?>
                <?= form_input(['name' => "title", 'id' => "title", 'class' => 'form-control']) ?>

            </div>
            <div class="mb-3">
                <?= form_label("Message&nbsp;:", "message", ['class' => "form-label"]) ?>
                <?= form_textarea(['name' => "message", 'id' => "message", 'class' => 'form-control', 'rows' => '3']) ?>
            </div>

            <div class="mb-3">
                <?= form_submit("send", "Envoyer", ['class' => "btn btn-primary"]); ?>
            </div>

            <?= form_close() ?>
        </div>
    </div>
</div>