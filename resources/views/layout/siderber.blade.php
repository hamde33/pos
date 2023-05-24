<div data-scroll-to-active="true" class="main-menu menu-fixed menu-light menu-accordion menu-shadow pt-1">
    <div class="main-menu-content ps-container ps-theme-light ps-theme-dark sidebar-h"
        data-ps-id="567a73a8-8253-5e66-adba-d4f88b03af9f">
        <ul id="main-menu-navigation" data-menu="menu-navigation"
            class="navigation navigation-main px-1 zindex-1 position-relative">
            <li class="nav-item no-border rounded overflow-hidden {{(request()->is('/'))? 'active':''}}">
                {{-- <a class="rounded" data-toggle="popover" id="dashboard_popover" data-html="true" href="/">
                    <img src="/assets/icons/control.png" width="20px" />
                    <span data-i18n="" class="menu-title ml-1"> {{__('trans.control_Board')}}</span>
                </a> --}}
            </li>
                {{-- <a class="rounded" data-toggle="popover" id="dashboard_popover" data-html="true" data-placement="left"
                    href="">
                    <img src="<?php echo url('/'); ?>/png/menu.svg" width="20px" />
                    <span data-i18n="" class="menu-title ml-1">لوحة التحكم</span>
                </a> --}}
            </li>
            @can('showOrderTable-representative-orders')



        <li class="nav-item has-sub no-border rounded overflow-hidden
        {{(request()->is('OrderTable'))? 'active':''}}">
    <a href="javascript:void(0)" class="rounded">
        {{-- <img src="<?php echo url('/'); ?>/png/users.png" width="20px" /> --}}
        <i class="fa fa-edit" aria-hidden="true" width="20px"></i>

        <span data-i18n="" class="menu-title sales ml-1"> طلبات المبيعات </span>
    </a>
    <ul class="menu-content">


        <li class=" {{(request()->is('/'))? 'active':''}}">
            <a href="/" class="menu-item">

                اضافة طلبات مبيعات
            </a>
        </li>

    </ul>
</li>

        @endcan

        @can('showusers-representative-orders')
        <li class="nav-item has-sub no-border rounded overflow-hidden
        {{(request()->is('users'))? 'active':''}}">
    <a href="javascript:void(0)" class="rounded">
        {{-- <img src="<?php echo url('/'); ?>/png/users.png" width="20px" /> --}}
        <i class="fa fa-users" aria-hidden="true" width="20px"></i>

        <span data-i18n="" class="menu-title sales ml-1">المستخدمن</span>
    </a>
    <ul class="menu-content">


        <li class=" {{(request()->is('users'))? 'active':''}}">
            <a href="users" class="menu-item">

                <i class="fa fa-circle-thin font-small-1 "></i> مستخدم
            </a>
        </li>

    </ul>
</li>

        @endcan
        @can('show-powers')
        <li class="nav-item has-sub no-border rounded overflow-hidden
        {{(request()->is('powers'))? 'active':''}}">
    <a href="javascript:void(0)" class="rounded">
        {{-- <img src="<?php echo url('/'); ?>/png/users.png" width="20px" /> --}}
        <i class="fa fa-ban" aria-hidden="true" width="20px"></i>

        <span data-i18n="" class="menu-title sales ml-1">الصلاحيات</span>
    </a>
    <ul class="menu-content">


        <li class=" {{(request()->is('powers'))? 'active':''}}">
            <a href="powers" class="menu-item">

                <i class="fa fa-circle-thin font-small-1 "></i> صلاحيات
            </a>
        </li>

    </ul>
</li>
        {{-- <li class="nav-item has-sub no-border rounded overflow-hidden">
            <a href="" class="rounded">
                <i class="fa fa-ban" aria-hidden="true" width="20px"></i> --}}

                {{-- <img src="<?php echo url('/'); ?>/png/pie-chart.svg" width="20px" /> --}}
                {{-- <span data-i18n="" class="menu-title sales ml-1"> الصلاحيات</span>
            </a>
            <ul class="menu-content">

                <li>
                    <a href="/powers" class="menu-item">
                        <i class="">اضافة صلاحيات</i>

                    </a>
                </li>
            </ul>
        </li> --}}
        @endcan

        <li class="active nav-itme">
        </li>
    </ul>

</div>
</div>
<!-- END SIDBAR-->
