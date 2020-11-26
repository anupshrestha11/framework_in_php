<?php
/**
 * @var $exception Exception
 * @var $this \app\core\View
 */
 $this->title = $exception->getCode() ." - ". $exception->getMessage()

?>
<h4>
    <?php echo $exception->getCode() ?> - <?php echo $exception->getMessage() ?>
</h4>