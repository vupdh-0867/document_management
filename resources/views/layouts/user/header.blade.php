<header class="header text-center">
	<div class="container">
		<div class="tagline">
			<p>Phân hiệu Trường Đại Học Nội Vụ Hà Nội tại tỉnh Quảng Nam</p>
		</div>
		<div class="branding">
			<h1 class="logo">
				<span aria-hidden="true" class="fa fa-file-text head-icon"></span>
				<span class="text-highlight">Hệ thống lưu trữ tài liệu</span>
			</h1>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="collapse navbar-collapse position-relative" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item cool-link">
					<a class="nav-link" href="/">Trang chủ </a>
				</li>
				<li class="nav-item cool-link dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Văn bản
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Văn bản đến</a>
						<a class="dropdown-item" href="#">Văn bản đi</a>
					</div>
				</li>
				<li class="nav-item cool-link dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Ủy quyền
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="{{ route('delegacy.create') }}">Thêm ủy quyền</a>
						<a class="dropdown-item" href="{{ route('delegacy.index') }}">Danh sách ủy quyền</a>
					</div>
				</li>
				<li class="nav-item cool-link dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Đơn vị liên kết
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="{{ route('collaboration-unit.index') }}">Danh sách đơn vị liên kết</a>
						<a class="dropdown-item" href="{{ route('collaboration-unit.create') }}">Tạo mới đơn vị liên kết</a>
						<a class="dropdown-item" href="{{ route('collaboration-unit-archived') }}">Đơn vị liên kết đã xóa</a>
					</div>
				</li>
				<li class="nav-item cool-link">
					<a class="nav-link" href="/">Kế hoạch tuần </a>
				</li>
				<li class="nav-item cool-link">
					<a class="nav-link" href="/">Kế hoạch công tác</a>
				</li>
				<li class="nav-item cool-link">
					<a class="nav-link" href="/">Hồ sơ văn bản</a>
				</li>
				@php
					$idDepartment = \App\Models\DepartmentUser::where('user_id', Auth::user()->id)->first();
            		$form = \App\Models\Form::where('is_active', config('setting.active.is_active'))
                	->where('department_id', $idDepartment->department_id)
                	->where('approved_by', null)
                	->get();
            		$count = $form->count();
				@endphp
				<li class="nav-item cool-link dropdown">
					<a class="nav-link dropdown-toggle {{ ($count>0)?"css-form-approval":"" }}" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Biểu mẫu
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="{{ route('forms.create') }}">Thêm biểu mẫu</a>
						<a class="dropdown-item" href="{{ route('forms.index') }}">Danh sách biểu mẫu</a>
						<a class="dropdown-item {{ ($count>0)?"css-form-approval":"" }}" href="{{ route('forms.approval') }}">DS biểu mẫu chờ phê duyệt
							@if($count > 0)
								<span class="badge-pill badge-danger">{{ $count }}</span>
							@endif
						</a>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav position-login">
				@if(Auth::check())
				<li class="nav-item cool-link dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-user"></i> {{Auth::user()->name}}
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="{{ route('profile') }}">Thông tin cá nhân</a>
						<a class="dropdown-item" href="{{ route('login.create') }}">Đăng xuất</a>
					</div>
				</li>
				@endif
			</ul>
		</div>
	</nav>
</header>
