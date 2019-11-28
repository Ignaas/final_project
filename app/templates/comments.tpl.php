<?php if (isset($data) && !empty($data)): ?>
    <table class="table-fixed">
        <thead>
        <tr>
            <th class="px-4 py-2">Author</th>
            <th class="px-4 py-2">Comment</th>
            <th class="px-4 py-2">Date</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data['users'] as $user): ?>
            <?php if (isset($user['review'])): ?>
                <tr>
                    <td class="border px-4 py-2"><?php print $user['name']; ?></td>
                    <td class="border px-4 py-2"><?php print $user['review']['content']; ?></td>
                    <td class="border px-4 py-2"><?php print $user['review']['date']; ?></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>