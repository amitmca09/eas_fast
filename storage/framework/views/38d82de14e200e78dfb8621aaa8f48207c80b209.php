<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dashboard')): ?>
    <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('dashboard*') ? 'active' : ''); ?>" href="<?php echo url('dashboard'); ?>"><?php if($icons): ?>
                <i class="nav-icon fa fa-dashboard"></i><?php endif; ?>
            <p><?php echo e(trans('lang.dashboard')); ?></p></a>
    </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('favorites.index')): ?>
    <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('favorites*') ? 'active' : ''); ?>" href="<?php echo route('favorites.index'); ?>"><?php if($icons): ?>
                <i class="nav-icon fa fa-heart"></i><?php endif; ?><p><?php echo e(trans('lang.favorite_plural')); ?></p></a>
    </li>
<?php endif; ?>

<li class="nav-header"><?php echo e(trans('lang.app_management')); ?></li>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('fields.index')): ?>
    <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('fields*') ? 'active' : ''); ?>" href="<?php echo route('fields.index'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-tasks"></i><?php endif; ?><p><?php echo e(trans('lang.field_plural')); ?></p></a>
    </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('markets.index')): ?>
    <li class="nav-item has-treeview <?php echo e((Request::is('markets*') || Request::is('requestedMarkets*') || Request::is('galleries*') || Request::is('marketReviews*')) && !Request::is('marketsPayouts*') ? 'menu-open' : ''); ?>">
        <a href="#" class="nav-link <?php echo e((Request::is('markets*') || Request::is('requestedMarkets*') || Request::is('galleries*') || Request::is('marketReviews*')) && !Request::is('marketsPayouts*')? 'active' : ''); ?>"> <?php if($icons): ?>
                <i class="nav-icon fa fa-shopping-basket"></i><?php endif; ?>
            <p><?php echo e(trans('lang.market_plural')); ?> <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('markets.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('requestedMarkets*') ? 'active' : ''); ?>" href="<?php echo route('requestedMarkets.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-reorder"></i><?php endif; ?><p><?php echo e(trans('lang.requested_markets_plural')); ?></p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('markets*') ? 'active' : ''); ?>" href="<?php echo route('markets.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-reorder"></i><?php endif; ?><p><?php echo e(trans('lang.market_plural')); ?></p></a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('galleries.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('galleries*') ? 'active' : ''); ?>" href="<?php echo route('galleries.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-image"></i><?php endif; ?><p><?php echo e(trans('lang.gallery_plural')); ?></p></a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('marketReviews.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('marketReviews*') ? 'active' : ''); ?>" href="<?php echo route('marketReviews.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-comments"></i><?php endif; ?><p><?php echo e(trans('lang.market_review_plural')); ?></p></a>
                </li>
            <?php endif; ?>
        </ul>
    </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('categories.index')): ?>
    <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('categories*') ? 'active' : ''); ?>" href="<?php echo route('categories.index'); ?>"><?php if($icons): ?>
                <i class="nav-icon fa fa-folder"></i><?php endif; ?><p><?php echo e(trans('lang.category_plural')); ?></p></a>
    </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('products.index')): ?>
    <li class="nav-item has-treeview <?php echo e(Request::is('products*') || Request::is('options*') || Request::is('optionGroups*') || Request::is('productReviews*') || Request::is('nutrition*') ? 'menu-open' : ''); ?>">
        <a href="#" class="nav-link <?php echo e(Request::is('products*') || Request::is('options*') || Request::is('optionGroups*') || Request::is('productReviews*') || Request::is('nutrition*') ? 'active' : ''); ?>"> <?php if($icons): ?>
                <i class="nav-icon fa fa-archive"></i><?php endif; ?>
            <p><?php echo e(trans('lang.product_plural')); ?> <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('products.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('products*') ? 'active' : ''); ?>" href="<?php echo route('products.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-archive"></i><?php endif; ?>
                        <p><?php echo e(trans('lang.product_plural')); ?></p></a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('optionGroups.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('optionGroups*') ? 'active' : ''); ?>" href="<?php echo route('optionGroups.index'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-plus-square"></i><?php endif; ?><p><?php echo e(trans('lang.option_group_plural')); ?></p></a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('options.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('options*') ? 'active' : ''); ?>" href="<?php echo route('options.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-plus-square-o"></i><?php endif; ?><p><?php echo e(trans('lang.option_plural')); ?></p></a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('productReviews.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('productReviews*') ? 'active' : ''); ?>" href="<?php echo route('productReviews.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-comments"></i><?php endif; ?><p><?php echo e(trans('lang.product_review_plural')); ?></p></a>
                </li>
            <?php endif; ?>

        </ul>
    </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orders.index')): ?>
    <li class="nav-item has-treeview <?php echo e(Request::is('orders*') || Request::is('orderStatuses*') || Request::is('deliveryAddresses*')? 'menu-open' : ''); ?>">
        <a href="#" class="nav-link <?php echo e(Request::is('orders*') || Request::is('orderStatuses*') || Request::is('deliveryAddresses*')? 'active' : ''); ?>"> <?php if($icons): ?>
                <i class="nav-icon fa fa-shopping-bag"></i><?php endif; ?>
            <p><?php echo e(trans('lang.order_plural')); ?> <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orders.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('orders*') ? 'active' : ''); ?>" href="<?php echo route('orders.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-shopping-bag"></i><?php endif; ?><p><?php echo e(trans('lang.order_plural')); ?></p></a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orderStatuses.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('orderStatuses*') ? 'active' : ''); ?>" href="<?php echo route('orderStatuses.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-server"></i><?php endif; ?><p><?php echo e(trans('lang.order_status_plural')); ?></p></a>
                </li>
            <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('deliveryAddresses.index')): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('deliveryAddresses*') ? 'active' : ''); ?>" href="<?php echo route('deliveryAddresses.index'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-map"></i><?php endif; ?><p><?php echo e(trans('lang.delivery_address_plural')); ?></p></a>
                    </li>
                <?php endif; ?>

        </ul>
    </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('coupons.index')): ?>
    <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('coupons*') ? 'active' : ''); ?>" href="<?php echo route('coupons.index'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-money"></i><?php endif; ?><p><?php echo e(trans('lang.coupon_plural')); ?> <span class="right badge badge-danger">New</span></p></a>
    </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('drivers.index')): ?>
    <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('drivers*') ? 'active' : ''); ?>" href="<?php echo route('drivers.index'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-car"></i><?php endif; ?><p><?php echo e(trans('lang.driver_plural')); ?> </p></a>
    </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faqs.index')): ?>
    <li class="nav-item has-treeview <?php echo e(Request::is('faqCategories*') || Request::is('faqs*') ? 'menu-open' : ''); ?>">
        <a href="#" class="nav-link <?php echo e(Request::is('faqs*') || Request::is('faqCategories*') ? 'active' : ''); ?>"> <?php if($icons): ?>
                <i class="nav-icon fa fa-support"></i><?php endif; ?>
            <p><?php echo e(trans('lang.faq_plural')); ?> <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faqCategories.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('faqCategories*') ? 'active' : ''); ?>" href="<?php echo route('faqCategories.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-folder"></i><?php endif; ?><p><?php echo e(trans('lang.faq_category_plural')); ?></p></a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faqs.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('faqs*') ? 'active' : ''); ?>" href="<?php echo route('faqs.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-question-circle"></i><?php endif; ?>
                        <p><?php echo e(trans('lang.faq_plural')); ?></p></a>
                </li>
            <?php endif; ?>
        </ul>
    </li>
<?php endif; ?>

<li class="nav-header"><?php echo e(trans('lang.app_setting')); ?></li>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('medias')): ?>
    <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('medias*') ? 'active' : ''); ?>" href="<?php echo url('medias'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-picture-o"></i><?php endif; ?>
            <p><?php echo e(trans('lang.media_plural')); ?></p></a>
    </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payments.index')): ?>
    <li class="nav-item has-treeview <?php echo e(Request::is('earnings*') || Request::is('driversPayouts*') || Request::is('marketsPayouts*') || Request::is('payments*') ? 'menu-open' : ''); ?>">
        <a href="#" class="nav-link <?php echo e(Request::is('earnings*') || Request::is('driversPayouts*') || Request::is('marketsPayouts*') || Request::is('payments*') ? 'active' : ''); ?>"> <?php if($icons): ?>
                <i class="nav-icon fa fa-credit-card"></i><?php endif; ?>
            <p><?php echo e(trans('lang.payment_plural')); ?><i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payments.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('payments*') ? 'active' : ''); ?>" href="<?php echo route('payments.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-money"></i><?php endif; ?><p><?php echo e(trans('lang.payment_plural')); ?></p></a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('earnings.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('earnings*') ? 'active' : ''); ?>" href="<?php echo route('earnings.index'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-money"></i><?php endif; ?><p><?php echo e(trans('lang.earning_plural')); ?> <span class="right badge badge-danger">New</span> </p></a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('driversPayouts.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('driversPayouts*') ? 'active' : ''); ?>" href="<?php echo route('driversPayouts.index'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-dollar"></i><?php endif; ?><p><?php echo e(trans('lang.drivers_payout_plural')); ?></p></a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('marketsPayouts.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('marketsPayouts*') ? 'active' : ''); ?>" href="<?php echo route('marketsPayouts.index'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-dollar"></i><?php endif; ?><p><?php echo e(trans('lang.markets_payout_plural')); ?></p></a>
                </li>
            <?php endif; ?>

        </ul>
    </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('app-settings')): ?>
    <li class="nav-item has-treeview <?php echo e(Request::is('settings/mobile*') ? 'menu-open' : ''); ?>">
        <a href="#" class="nav-link <?php echo e(Request::is('settings/mobile*') ? 'active' : ''); ?>">
            <?php if($icons): ?><i class="nav-icon fa fa-mobile"></i><?php endif; ?>
            <p>
                <?php echo e(trans('lang.mobile_menu')); ?>

                <i class="right fa fa-angle-left"></i>
            </p></a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo url('settings/mobile/globals'); ?>" class="nav-link <?php echo e(Request::is('settings/mobile/globals*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-cog"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_globals')); ?> <span class="right badge badge-danger">New</span> </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('settings/mobile/colors'); ?>" class="nav-link <?php echo e(Request::is('settings/mobile/colors*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-pencil"></i> <?php endif; ?> <p><?php echo e(trans('lang.mobile_colors')); ?> <span class="right badge badge-danger">New</span> </p>
                </a>
            </li>
        </ul>

    </li>
    <li class="nav-item has-treeview <?php echo e((Request::is('settings*') ||
     Request::is('users*')) && !Request::is('settings/mobile*')
        ? 'menu-open' : ''); ?>">
        <a href="#" class="nav-link <?php echo e((Request::is('settings*') ||
         Request::is('users*')) && !Request::is('settings/mobile*')
          ? 'active' : ''); ?>"> <?php if($icons): ?><i class="nav-icon fa fa-cogs"></i><?php endif; ?>
            <p><?php echo e(trans('lang.app_setting')); ?> <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo url('settings/app/globals'); ?>" class="nav-link <?php echo e(Request::is('settings/app/globals*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-cog"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_globals')); ?></p>
                </a>
            </li>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('users*') ? 'active' : ''); ?>" href="<?php echo route('users.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-users"></i><?php endif; ?>
                        <p><?php echo e(trans('lang.user_plural')); ?></p></a>
                </li>
            <?php endif; ?>

            <li class="nav-item has-treeview <?php echo e(Request::is('settings/permissions*') || Request::is('settings/roles*') ? 'menu-open' : ''); ?>">
                <a href="#" class="nav-link <?php echo e(Request::is('settings/permissions*') || Request::is('settings/roles*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-user-secret"></i><?php endif; ?>
                    <p>
                        <?php echo e(trans('lang.permission_menu')); ?>

                        <i class="right fa fa-angle-left"></i>
                    </p></a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('settings/permissions') ? 'active' : ''); ?>" href="<?php echo route('permissions.index'); ?>">
                            <?php if($icons): ?><i class="nav-icon fa fa-circle-o"></i><?php endif; ?>
                            <p><?php echo e(trans('lang.permission_table')); ?></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('settings/permissions/create') ? 'active' : ''); ?>" href="<?php echo route('permissions.create'); ?>">
                            <?php if($icons): ?><i class="nav-icon fa fa-circle-o"></i><?php endif; ?>
                            <p><?php echo e(trans('lang.permission_create')); ?></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('settings/roles') ? 'active' : ''); ?>" href="<?php echo route('roles.index'); ?>">
                            <?php if($icons): ?><i class="nav-icon fa fa-circle-o"></i><?php endif; ?>
                            <p><?php echo e(trans('lang.role_table')); ?></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('settings/roles/create') ? 'active' : ''); ?>" href="<?php echo route('roles.create'); ?>">
                            <?php if($icons): ?><i class="nav-icon fa fa-circle-o"></i><?php endif; ?>
                            <p><?php echo e(trans('lang.role_create')); ?></p>
                        </a>
                    </li>
                </ul>

            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('settings/customFields*') ? 'active' : ''); ?>" href="<?php echo route('customFields.index'); ?>"><?php if($icons): ?>
                        <i class="nav-icon fa fa-list"></i><?php endif; ?><p><?php echo e(trans('lang.custom_field_plural')); ?></p></a>
            </li>


            <li class="nav-item">
                <a href="<?php echo url('settings/app/localisation'); ?>" class="nav-link <?php echo e(Request::is('settings/app/localisation*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-language"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_localisation')); ?></p></a>
            </li>
            <li class="nav-item">
                <a href="<?php echo url('settings/translation/en'); ?>" class="nav-link <?php echo e(Request::is('settings/translation*') ? 'active' : ''); ?>">
                    <?php if($icons): ?> <i class="nav-icon fa fa-language"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_translation')); ?></p></a>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('currencies.index')): ?>
            <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('settings/currencies*') ? 'active' : ''); ?>" href="<?php echo route('currencies.index'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-dollar"></i><?php endif; ?><p><?php echo e(trans('lang.currency_plural')); ?></p></a>
            </li>
            <?php endif; ?>

            <li class="nav-item">
                <a href="<?php echo url('settings/payment/payment'); ?>" class="nav-link <?php echo e(Request::is('settings/payment*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-credit-card"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_payment')); ?></p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('settings/app/social'); ?>" class="nav-link <?php echo e(Request::is('settings/app/social*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-globe"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_social')); ?></p>
                </a>
            </li>


            <li class="nav-item">
                <a href="<?php echo url('settings/app/notifications'); ?>" class="nav-link <?php echo e(Request::is('settings/app/notifications*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-bell"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_notifications')); ?></p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('settings/mail/smtp'); ?>" class="nav-link <?php echo e(Request::is('settings/mail*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-envelope"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_mail')); ?></p>
                </a>
            </li>

        </ul>
    </li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\eas_fast\resources\views/layouts/menu.blade.php ENDPATH**/ ?>