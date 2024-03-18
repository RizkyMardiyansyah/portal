<script>
    jQuery(document).ready(function() {

        <?php if($completedOnboarding === false && $currentModal == "dashboard"): ?>
            leantime.helperController.firstLoginModal();
        <?php endif; ?>


        <?php if($completedOnboarding == true && $showHelperModal === true): ?>
            leantime.helperController.showHelperModal('<?php echo e($currentModal); ?>', 500, 700);
        <?php endif; ?>

    });
</script>

<?php /**PATH /home/n1603213/public_html/certitude.pakarangan.id/app/Domain/Help/Templates/helpermodal.blade.php ENDPATH**/ ?>