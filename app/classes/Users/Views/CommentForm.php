<?php

namespace App\Users\Views;

class CommentForm extends \Core\Views\Form
{

    public function __construct($data = [])
    {
        $this->data = [
            'attr' => [
                'id' => 'comment-form',
                'method' => 'POST',
            ],
            'fields' => [
                'comment' => [
                    'label' => 'Comment',
                    'type' => 'text',
                    'extra' => [
                        'text_area' => true,
                        'validators' => [
                            'validate_not_empty',
                            'validate_not_exceed_xl',
                        ]
                    ],
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'submit your comment',
                ],
            ],
            'callbacks' => [
                'success' => 'form_success',
            ],
        ];
    }

}
