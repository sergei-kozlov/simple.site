<?php
use App\Models\Post;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Post::class, function (ModelConfiguration $model) {
    $model->setTitle('Posts');

    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('name')->setLabel('Name')->setWidth('200px'),
            AdminColumn::text('email')->setLabel('Email')->setHtmlAttribute('class', 'text-muted'),
            AdminColumn::link('subject')->setLabel('Post'),
            AdminColumn::link('published_at')->setLabel('Data'),

        ]);
        $display->paginate(15);
        return $display;
    });

    // Create And Edit
    $model->onCreateAndEdit(function() {
        return $form = AdminForm::panel()->addBody(
            AdminFormElement::text('name', 'Name')->required()->unique(),
            AdminFormElement::text('email', 'Email'),
            AdminFormElement::textarea('subject', 'Post')->setRows(10),
            AdminFormElement::hidden('published_at')
        );
        return $form;
    });
})
    ->addMenuPage(Post::class, 0)
    ->setIcon('fa fa-bank');
