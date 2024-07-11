<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
				<a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src='{{URL::asset('assets/img/faces/'.auth()->user()["name"].'.jpg')}}'><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">{{(auth()->user()["name"])}}</h4>
						</div>
					</div>
				</div>
				<ul class="side-menu">
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" ><span class="side-menu__label">الموردين</span><i class="angle fe fe-chevron-down"></i></a>
                        <ul class="slide-menu">
                            <li><a href="{{route('Supplier.create')}}"  class="slide-item" >أضافة مورد</a></li>
                            <li><a  href="{{route('Supplier.index')}}" class="slide-item">بيانات الموردين</a></li>
                            <li><a class="slide-item">كشف حساب للمورد</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" ><span class="side-menu__label">الفئات</span><i class="angle fe fe-chevron-down"></i></a>
                        <ul class="slide-menu">
                            <li><a href="{{route('Category.create')}}" class="slide-item">أضافة فئة</a></li>
                            <li><a href="{{route('Category.index')}}" class="slide-item">بيانات الفئات</a></li>
                        </ul>
                    </li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                            <span class="side-menu__label">المخازن</span><i class="angle fe fe-chevron-down"></i>
                        </a>
						<ul class="slide-menu">
							<li><a href="{{route('Stock.create')}} " class="slide-item">أضافة مخزن</a></li>
							<li><a class="slide-item">بضايع المخازن</a></li>
							<li><a href="{{route('Stock.index')}}" class="slide-item">بيانات المخازن</a></li>
						</ul>
					</li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide"><span class="side-menu__label">المنتجات</span><i class="angle fe fe-chevron-down"></i></a>
                        <ul class="slide-menu">
                            <li><a href="{{route('Product.create')}}" class="slide-item">اضافة منتج</a></li>
                            <li><a  href="{{route('Product.index')}}" class="slide-item">بيانات المنتجات</a></li>
                            <li><a class="slide-item">حركة المنتج</a></li>
                        </ul>
                    </li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide"><span class="side-menu__label">العملاء</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a href="{{route('Customer.create')}}" class="slide-item">اضافة عميل</a></li>
							<li><a href="{{route('Customer.index')}}" class="slide-item">بيانات العملاء</a></li>
							<li><a class="slide-item">كشف حساب للعميل</a></li>
						</ul>
					</li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" ><span class="side-menu__label">الفواتير</span><i class="angle fe fe-chevron-down"></i></a>
                        <ul class="slide-menu">
                            <li><a class="slide-item">انشاء فاتورة شراء</a></li>
                            <li><a class="slide-item">البحث عن فاتورة شراء</a></li>
                            <li><a class="slide-item">انشاء فاتورة بيع</a></li>
                            <li><a class="slide-item">البحث عن فاتورة بيع</a></li>
                        </ul>
                    </li>
				</ul>
			</div>
		</aside>
<!-- main-sidebar -->
