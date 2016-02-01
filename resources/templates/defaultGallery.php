
<div id="galleryWrapper">

    <?php if (!empty($images) && $stats['total_images'] > 0): ?>

        <ul id="galleryList" class="clearfix">
            <?php foreach ($images as $image): ?>
                <li>
					<form action="image_editor.php" method="get">
						<a href="<?php echo $image['file_path']; ?>">
							<img src="<?php echo $image['thumb_path']; ?>" alt="<?php echo $image['file_title']; ?>" name="edit"/>
							<input type="hidden" name="fullUrl" value="<?php echo $image['file_path']; ?>">
						</a>
							<!--<a href="simpledemo/flip.php">Flip</a>
							<a href="simpledemo/blur.php">Blur</a>-->
						<input type="submit">
					</form>
                </li>
            <?php endforeach; ?>
        </ul>

    <?php else: ?>

        <p>No images found.</p>

    <?php endif; ?>


    <div id="galleryFooter" class="clearfix">

        <?php if ($stats['total_pages'] > 1): ?>

            <ul id="galleryPagination">

                <?php foreach ($paginator as $item): ?>
                    <li class="<?php echo $item['class']; ?>">
                        <?php if (!empty($item['href'])): ?>
                            <a href="<?php echo $item['href']; ?>"><?php echo $item['text']; ?></a>
                        <?php else: ?>
                            <?php echo $item['text']; ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>

            </ul>

        <?php endif; ?>

  

    </div>

</div>

