<?php
/**
 * @var $exception Exception
 * @var $this \anup\phpmvc\View
 */
 $this->title = $exception->getCode() ." - ". $exception->getMessage()

?>
<h4>
    <?php echo $exception->getCode() ?> - <?php echo $exception->getMessage() ?>
</h4>