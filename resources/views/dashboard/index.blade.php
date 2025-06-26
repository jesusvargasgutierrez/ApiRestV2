
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic 
Product Version: 8.2.2
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Metronic by Keenthemes" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body  id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true"  class="app-default" >
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header d-flex d-lg-none">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex flex-stack" id="kt_app_header_container">
						<div class="d-flex align-items-center gap-1">
							<!--begin::Logo image-->
							<a href="http://testapp.test">
								<img alt="Logo" src="assets/media/logos/demo64.svg" class="h-25px" />
							</a>
							<!--end::Logo image-->
						</div>
						<!--begin::Sidebar toggle-->
						<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px me-n3" id="kt_app_sidebar_toggle">
							<i class="ki-outline ki-abstract-14 fs-1 lh-0"></i>
						</button>
						<!--end::Sidebar toggle-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="100px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_toggle">
						<!--begin::Logo-->
						<div class="app-sidebar-logo d-none d-lg-flex flex-center pt-10 mb-3" id="kt_app_sidebar_logo">
							<!--begin::Logo image-->
							<a href="index.html">
								<img alt="Logo" src="assets/media/logos/demo64.svg" class="h-30px" />
							</a>
							<!--end::Logo image-->
						</div>
						<!--end::Logo-->
						<!--begin::sidebar menu-->
						<div class="app-sidebar-menu d-flex flex-center overflow-hidden flex-column-fluid">
							<!--begin::Menu wrapper-->
							<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper d-flex hover-scroll-overlay-y scroll-ps mx-2 my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu, #kt_app_sidebar" data-kt-scroll-offset="5px">
								<!--begin::Menu-->
								<div class="menu menu-column menu-rounded my-auto" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
										<!--begin:Menu link-->
										<a class="menu-link menu-center" href="{{ route('infocontact') }}">
											<span class="menu-icon me-0">
												<i class="ki-outline ki-home-1 fs-2"></i>
											</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
										<!--begin:Menu link-->
										<span class="menu-link menu-center">
											<span class="menu-icon me-0">
												<i class="ki-outline ki-handcart fs-2"></i>
											</span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-icon">
														<i class="ki-outline ki-shield-tick fs-2"></i>
													</span>
													<span class="menu-title">User Management</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Users</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="{{ route('users.index') }}">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create User</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="{{ route('customers.index') }}">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Users List</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="{{ route('customers.index') }}">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">View User</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="{{ route('customers.index') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Permissions</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="{{ route('courtindex') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Reservaciones canchas</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="{{ route('calceindex') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Reservaciones de clase</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="{{ route('checkoutindex') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Checkout</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="{{ route('rankinglist') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Ranking list</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
										<!--begin:Menu link-->
										<span class="menu-link menu-center">
											<span class="menu-icon me-0">
												<i class="ki-outline ki-handcart fs-2"></i>
											</span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-icon">
														<i class="ki-outline ki-shield-tick fs-2"></i>
													</span>
													<span class="menu-title">Reservaciones</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="{{ route('createcourt') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Crear cancha</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="{{ route('courtindex') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Reservaciones canchas</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="{{ route('calceindex') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Reservaciones de clase</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="{{ route('rankinglist') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Ranking list</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::sidebar menu-->
						<!--begin::Footer-->
						<div class="app-sidebar-footer d-flex flex-center flex-column-auto pt-6 mb-7" id="kt_app_sidebar_footer">
							<!--begin::User menu-->
							<div class="cursor-pointer symbol symbol-40px symbol-circle" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-attach="parent" data-kt-menu-placement="right-end">
								<img src="assets/media/avatars/300-7.jpg" alt="user" />
							</div>
							<!--begin::User account menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<div class="menu-content d-flex align-items-center px-3">
										<!--begin::Avatar-->
										<div class="symbol symbol-50px me-5">
											<img alt="Logo" src="assets/media/avatars/300-7.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Username-->
										<div class="d-flex flex-column">
											<div class="fw-bold d-flex align-items-center fs-5">Max Smith 
											<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
											<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
										</div>
										<!--end::Username-->
									</div>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator my-2"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="account/overview.html" class="menu-link px-5">Mi perfil</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator my-2"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
									<a href="#" class="menu-link px-5">
										<span class="menu-title position-relative">Mode 
										<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
											<i class="ki-outline ki-night-day theme-light-show fs-2"></i>
											<i class="ki-outline ki-moon theme-dark-show fs-2"></i>
										</span></span>
									</a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-outline ki-night-day fs-2"></i>
												</span>
												<span class="menu-title">Light</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-outline ki-moon fs-2"></i>
												</span>
												<span class="menu-title">Dark</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-outline ki-screen fs-2"></i>
												</span>
												<span class="menu-title">System</span>
											</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Cerrar sesion</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::User account menu-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Sidebar-->
					<!--begin::sidebar-panel-->
					<div id="kt_app_sidebar_panel" class="d-none app-sidebar-panel" data-kt-drawer="true" data-kt-drawer-name="app-sidebar-panel" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="280px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_panel_toggle">
						<!--begin::Sidebar panel wrapper-->
						<div id="kt_app_sidebar_menu_wrapper" class="d-flex flex-column flex-grow-1 hover-scroll-overlay-y gap-8 gap-lg-12 ps-6 pe-4 py-3 mx-2 my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_sidebar_menu_wrapper" data-kt-scroll-offset="5px">
							<div class="d-flex flex-stack">
								<div class="d-flex flex-column gap-1">
									<h3 class="fs-3 text-gray-900 fw-bold m-0">Total Calls</h3>
									<span class="fs-7 text-gray-600">Stats for all campaigns</span>
								</div>
								<a href="#" class="btn btn-sm btn-icon btn-info">
									<i class="ki-outline ki-black-right fs-1"></i>
								</a>
							</div>
							<div class="d-flex flex-column gap-5">
								<h3 class="fs-4 fw-bold mb-0 text-gray-900">Leaderboard</h3>
								<div class="card d-flex flex-column gap-6 pt-6 pb-4 px-6">
									<div class="d-flex flex-stack gap-2">
										<div class="d-flex align-items-center gap-3">
											<div class="position-relative symbol symbol-40px">
												<img class="" src="assets/media/avatars/300-3.jpg" alt="user" />
												<div class="position-absolute translate-x-middle bottom-0 mb-3 start-100 ms-n1 bg-success rounded-circle h-8px w-8px"></div>
											</div>
											<div class="d-flex flex-column">
												<span class="text-gray-800 fw-bold fs-6">Ralph Edwards</span>
												<span class="text-gray-500 fw-semibold fs-7">Spain</span>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-end gap-4">
											<div class="d-flex flex-column align-items-end">
												<span class="text-gray-800 fw-bold fs-7">93.07</span>
												<span class="text-gray-500 fw-semibold fs-7">CPR Rank</span>
											</div>
											<div class="d-flex flex-column align-items-end">
												<span class="text-gray-800 fw-bold fs-7">546</span>
												<span class="text-gray-500 fw-semibold fs-7">Calls</span>
											</div>
										</div>
									</div>
									<div class="d-flex flex-stack gap-10">
										<div class="progress bg-light-success h-5px flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
											<div class="progress-bar bg-success" style="width: 60%"></div>
										</div>
										<a href="#" class="btn p-0 fs-7 fw-semibold btn-color-primary d-flex align-items-center">View 
										<i class="ki-outline ki-black-right lh-0 fs-4 p-0"></i></a>
									</div>
								</div>
								<div class="card d-flex flex-column gap-6 pt-6 pb-4 px-6">
									<div class="d-flex flex-stack gap-2">
										<div class="d-flex align-items-center gap-3">
											<div class="position-relative symbol symbol-40px">
												<img class="" src="assets/media/avatars/300-2.jpg" alt="user" />
												<div class="position-absolute translate-x-middle bottom-0 mb-3 start-100 ms-n1 bg-success rounded-circle h-8px w-8px"></div>
											</div>
											<div class="d-flex flex-column">
												<span class="text-gray-800 fw-bold fs-6">Jenny Wilson</span>
												<span class="text-gray-500 fw-semibold fs-7">Spain</span>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-end gap-4">
											<div class="d-flex flex-column align-items-end">
												<span class="text-gray-800 fw-bold fs-7">84.91</span>
												<span class="text-gray-500 fw-semibold fs-7">CPR Rank</span>
											</div>
											<div class="d-flex flex-column align-items-end">
												<span class="text-gray-800 fw-bold fs-7">302</span>
												<span class="text-gray-500 fw-semibold fs-7">Calls</span>
											</div>
										</div>
									</div>
									<div class="d-flex flex-stack gap-10">
										<div class="progress bg-light-success h-5px flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
											<div class="progress-bar bg-success" style="width: 10%"></div>
										</div>
										<a href="#" class="btn p-0 fs-7 fw-semibold btn-color-primary d-flex align-items-center">View 
										<i class="ki-outline ki-black-right lh-0 fs-4 p-0"></i></a>
									</div>
								</div>
								<div class="card d-flex flex-column gap-6 pt-6 pb-4 px-6">
									<div class="d-flex flex-stack gap-2">
										<div class="d-flex align-items-center gap-3">
											<div class="position-relative symbol symbol-40px">
												<img class="" src="assets/media/avatars/300-13.jpg" alt="user" />
												<div class="position-absolute translate-x-middle bottom-0 mb-3 start-100 ms-n1 bg-success rounded-circle h-8px w-8px"></div>
											</div>
											<div class="d-flex flex-column">
												<span class="text-gray-800 fw-bold fs-6">Robert Fox</span>
												<span class="text-gray-500 fw-semibold fs-7">Mexico</span>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-end gap-4">
											<div class="d-flex flex-column align-items-end">
												<span class="text-gray-800 fw-bold fs-7">62.12</span>
												<span class="text-gray-500 fw-semibold fs-7">CPR Rank</span>
											</div>
											<div class="d-flex flex-column align-items-end">
												<span class="text-gray-800 fw-bold fs-7">85</span>
												<span class="text-gray-500 fw-semibold fs-7">Calls</span>
											</div>
										</div>
									</div>
									<div class="d-flex flex-stack gap-10">
										<div class="progress bg-light-success h-5px flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
											<div class="progress-bar bg-success" style="width: 80%"></div>
										</div>
										<a href="#" class="btn p-0 fs-7 fw-semibold btn-color-primary d-flex align-items-center">View 
										<i class="ki-outline ki-black-right lh-0 fs-4 p-0"></i></a>
									</div>
								</div>
							</div>
							<div class="d-flex flex-column gap-5">
								<h3 class="fs-4 fw-bold mb-0 text-gray-900">Campaigns</h3>
								<div class="d-flex gap-4">
									<div class="d-flex flex-center rounded-circle bg-body h-45px w-45px flex-shrink-0 shadow-custom">
										<img class="mh-30px mw-30px" src="assets/media/svg/brand-logos/airbnb-2.svg" alt="user" />
									</div>
									<div class="d-flex flex-center rounded-circle bg-body h-45px w-45px flex-shrink-0 shadow-custom">
										<img class="mh-30px mw-30px" src="assets/media/svg/brand-logos/aon.svg" alt="user" />
									</div>
									<div class="d-flex flex-center rounded-circle bg-body h-45px w-45px flex-shrink-0 shadow-custom">
										<img class="mh-30px mw-30px" src="assets/media/svg/brand-logos/plurk.svg" alt="user" />
									</div>
									<div class="d-flex flex-center rounded-circle bg-body h-45px w-45px flex-shrink-0 shadow-custom">
										<img class="mh-30px mw-30px" src="assets/media/svg/brand-logos/disqus.svg" alt="user" />
									</div>
									<div class="d-flex flex-center rounded-circle bg-body h-45px w-45px flex-shrink-0 shadow-custom">
										<img class="mh-30px mw-30px" src="assets/media/svg/brand-logos/spotify.svg" alt="user" />
									</div>
									<div class="d-flex flex-center rounded-circle bg-body h-45px w-45px flex-shrink-0 shadow-custom">
										<img class="mh-30px mw-30px" src="assets/media/svg/brand-logos/kanba.svg" alt="user" />
									</div>
								</div>
							</div>
							<div class="d-flex flex-column gap-5">
								<h3 class="fs-4 fw-bold mb-0 text-gray-900">Agents</h3>
								<div class="symbol-group">
									<div class="symbol symbol-40px symbol-circle border border-body" data-bs-toggle="tooltip" title="Alan Warden">
										<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
									</div>
									<div class="symbol symbol-40px symbol-circle border border-body" data-bs-toggle="tooltip" title="Michael Eberon">
										<img alt="Pic" src="assets/media/avatars/300-11.jpg" />
									</div>
									<div class="symbol symbol-40px symbol-circle border border-body" data-bs-toggle="tooltip" title="Susan Redwood">
										<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
									</div>
									<div class="symbol symbol-40px symbol-circle border border-body" data-bs-toggle="tooltip" title="Melody Macy">
										<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
									</div>
									<div class="symbol symbol-40px symbol-circle border border-body" data-bs-toggle="tooltip" title="Perry Matthew">
										<span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
									</div>
									<div class="symbol symbol-40px symbol-circle border border-body" data-bs-toggle="tooltip" title="Barry Walter">
										<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
									</div>
									<div class="symbol symbol-40px bg-success symbol-circle border border-body" data-bs-toggle="tooltip" title="More">
										<span class="symbol-label bg-success text-inverse-success fw-bold">+10</span>
									</div>
								</div>
							</div>
						</div>
						<!--end::Sidebar panel wrapper-->
					</div>
					<!--end::sidebar-panel-->
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="app" class="app-container container-fluid">
									<!--begin::Layout-->
									@yield('content')
									<!--end::Layout-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-gray-900 order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ asset('js/scripts.js?v=0.4') }}"></script>
		<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
		<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
		<script src="{{ asset('js/app.js?v=1.3') }}"></script>
		<script>
			$("#kt_daterangepicker_3").daterangepicker({
					singleDatePicker: true,
					showDropdowns: true,
					minYear: 1901,
					maxYear: parseInt(moment().format("YYYY"),12)
				}, function(start, end, label) {
					var years = moment().diff(start, "years");
					alert("You are " + years + " years old!");
				}
			);
		</script>

		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>