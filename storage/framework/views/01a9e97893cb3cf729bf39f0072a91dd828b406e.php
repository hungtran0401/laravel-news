<?php if(Session::has('thongbao')): ?>
                        <div class="alert alert-<?php echo session::get('canhbao'); ?>">
                            <?php echo session::get('thongbao'); ?>

                        </div>
            <?php endif; ?>