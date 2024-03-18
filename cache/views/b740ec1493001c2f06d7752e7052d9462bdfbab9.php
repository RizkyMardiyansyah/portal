<a href='<?php echo e(BASE_URL); ?>/projects/changeCurrentProject/<?php echo e($project["id"]); ?>'
   <?php if(strlen($project["name"]) > 25): ?>
       data-tippy-content='<?php echo e($project["name"]); ?>'
    <?php endif; ?> >
    <span class='projectAvatar'>
        <?php if(isset($projectTypeAvatars[$project["type"]]) && $projectTypeAvatars[$project["type"]] != "avatar"): ?>
            <span class="<?php echo e($projectTypeAvatars[$project["type"]]); ?>"></span>
        <?php else: ?>
            <img src='<?php echo e(BASE_URL); ?>/api/projects?projectAvatar=<?php echo e($project["id"]); ?>&v=<?php echo e(format($project['modified'])->timestamp()); ?>' />
        <?php endif; ?>
    </span>
    <span class='projectName'>
        <?php if($project["clientName"] != ''): ?>
            <small><?php echo e($project["clientName"]); ?></small><br />
        <?php else: ?>
            <small><?php echo e(__('projectType.'.$project["type"] ?? 'project')); ?></small><br />
        <?php endif; ?>

        <?php echo e($project["name"]); ?>

    </span>
</a>
<?php /**PATH /home/n1603213/public_html/certitude.pakarangan.id/app/Domain/Menu/Templates/partials/projectLink.blade.php ENDPATH**/ ?>