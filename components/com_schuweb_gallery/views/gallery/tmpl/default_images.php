<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_schuweb_gallery
 *
 * @copyright   Copyright (C) 2012 Schultschik Websolution, Sven Schultschik. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

?>
<ul class="thumbnails">
    <?php foreach ($this->images as $image) : ?>
    <li class="span<?php echo $this->image_grid_size; ?>">
        <a href="<?php echo $image['image']; ?>" class="thumbnail group_images">
            <img src="<?php echo $image['thumb']; ?>" alt="">
        </a>
    </li>
    <?php endforeach; ?>
</ul>