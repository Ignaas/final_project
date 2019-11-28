<?php if (isset($field['extra']['text_area']) && $field['extra']['text_area']): ?>
    <textarea <?php print html_attr(['name' => $field_id, 'type' => $field['type'], 'value' => $field['value'] ?? ''] + ($field['extra']['attr'] ?? [])); ?>></textarea>
<?php else: ?>
    <input <?php print html_attr(['name' => $field_id, 'type' => $field['type'], 'value' => $field['value'] ?? ''] + ($field['extra']['attr'] ?? [])); ?>>
<?php endif; ?>

