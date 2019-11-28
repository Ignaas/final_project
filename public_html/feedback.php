<?php

require '../bootloader.php';

use App\App;


$navigation = new \App\Views\Navigation();
$comments = new \App\Views\Comments(App::$db->getData());
$form = new \App\Users\Views\CommentForm();
$footer = new \App\Views\Footer();


function form_success($filtered_input, &$form)
{
    $user = App::$session->getUser();

    $user_feedback = [];
    $user_feedback['user_id'] = $user->getId();
    $user_feedback['date'] = date('Y.m.d');
    $user_feedback['content'] = $filtered_input['comment'];

    $user->setReview($user_feedback);
    $user->setData($user->getData());

    $model = new \App\Users\Model();
    $model->update($user);
}

switch (get_form_action()) {
    case 'submit':
        $filtered_input = get_form_input($form->getData());
        validate_form($filtered_input, $form->getData());
        break;
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="media/css/normalize.css">
    <link rel="stylesheet" href="media/css/milligram.min.css">
    <link rel="stylesheet" href="media/css/tailwind.min.css">
    <link rel="stylesheet" href="media/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <?php print $navigation->render(); ?>
</header>

<main>
    <section class="wrapper">
        <p>Feedback:</p>
        <div>
            <?php print $comments->render(); ?>
        </div>

        <div class="block">
            <?php if (!App::$session->userLoggedIn()): ?>
                <p>In order to submit your review, please register
                    <a href="register.php" class="underline">here!</a>
                </p>
            <?php else: ?>
                <?php print $form->render(); ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<footer>
    <?php print $footer->render(); ?>
</footer>

</body>
</html>
